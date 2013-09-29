<?php

/**
 * default actions.
 *
 * @package    lat
 * @subpackage default
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class defaultActions extends sfActions
{
    /**
    * Executes index action
    *
    * @param sfRequest $request A request object
    */
    public function executeIndex(sfWebRequest $request)
    {
        $this->stories = Doctrine_Core::getTable('Story')->getPublished();
    }

    /**
    * Executes index action
    *
    * @param sfRequest $request A request object
    */
    public function executeBio(sfWebRequest $request)
    {
        //$this->forward('default', 'module');
    }

    public function executeContact(sfWebRequest $request)
    {
        $this->seasons = Doctrine_Core::getTable('Journey')->getBySeason();

        $this->form = new ContactMessagesForm();

        if($request->isMethod('post')) {

          $this->form->bind($request->getParameter('contact'));

          if($this->form->isValid()) {

              /* Send emails */
              $message = Swift_Message::newInstance()
              
              ->setFrom($this->form->getValue('sender_email'))
              ->setTo(sfConfig::get('app_emailing_contacts'))
              ->setSubject('[depuis ln.fr] '.$this->form->getValue('subject'))
              ->setBody($this->form->getValue('message'));

              try {
                $nbMsgSent = @$this->getMailer()->send($message, $failures);
                $this->getUser()->setFlash('notice', 'Votre message a bien été envoyé. Merci !');

                if(!$nbMsgSent) {
                    $this->getMailer()->composeAndSend("thomas.pob@gmail.com", "Rapports d'envois", $failures);
                }

              } catch (Exception $e) {

                /* if something goes wrong, the message will be stored with
                  set to ERROR */
                //$this->form->getObject()->setStatus(ContactMessagesTable::STATUS_ERROR);

                $this->getUser()->setFlash('error',
                 'Quelque chose s\'est mal passé avec l\'envoi.
                    Merci de réessayer plus tard, ou me contacter directement
                    via michael.charavin[AT]gmail.com. Votre message était : "'.$this->form->getValue("message").'"');
              }

              //$this->form->getObject()->save();

              /* Redirect */
              $this->redirect("@contact");
          } else {
              $this->getUser()->setFlash('error', 'Certains champs ne soit pas remplis ou votre email n\'est pas valide.');
          }
      }
    }

    public function executeNewsletter(sfWebRequest $request)
    {
        try {
            $this->addToMailingList($request->getPostParameter("email"));
            return $this->renderText("Merci ! Vous êtes inscrit.");
        } catch (Exception $e) {
            return $this->renderText("Désolé ! Une erreur est survenue.");
        }
        
    }

    /* Private */

    private function addToMailingList($subscriberEmail)
    {
        $api = new MCAPI('8f7128e5d5bd2d2d3128a5a4646abee3-us6');

        $merge_vars = array('FNAME'=>'Test', 'LNAME'=>'Account',
                          'GROUPINGS'=>array(
                                array('name'=>'Your Interests:', 'groups'=>'Bananas,Apples'),
                                array('id'=>22, 'groups'=>'Trains'),
                                )
                            );

        $listId = '693f9b4f02';

        // By default this sends a confirmation email - you will not see new members
        // until the link contained in it is clicked!
        $retval = $api->listSubscribe( $listId, $subscriberEmail, NULL, 'html', false);

        if ($api->errorCode){

            throw new Exception('Erreur');
              //  echo "Unable to load listSubscribe()!\n";
              //  echo "\tCode=".$api->errorCode."\n";
              //  echo "\tMsg=".$api->errorMessage."\n";
        } else {
            //echo "Subscribed - look for the confirmation email!\n";
        }
    }
}
