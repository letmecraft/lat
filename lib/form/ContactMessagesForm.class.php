<?php

/**
 * ContactMessages form.
 *
 * @package    fnepe
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ContactMessagesForm extends sfForm
{
    public function configure()
    {
        /* Identify the form */
        $this->widgetSchema->setNameFormat('contact[%s]');

        /* Set widgets */
        $this->widgetSchema['sender_email'] = new sfWidgetFormInput(array(), array("value" => "Votre adresse email", "data-value" => "Votre adresse email"));
        $this->widgetSchema['subject'] = new sfWidgetFormInput(array(), array("value" => "Sujet", "data-value" => "Sujet"));
        $this->widgetSchema['message'] = new sfWidgetFormTextarea(array("default" => "Votre message"), array("data-value" => "Votre message"));

        /* Set validators */
        $this->validatorSchema['sender_email'] = new sfValidatorEmail(array(), array('required' => 'Champs requis', 'invalid' => 'Email non valide'));
        $this->validatorSchema['subject'] = new sfValidatorString();
        $this->validatorSchema['message'] = new sfValidatorString();
    }
}
