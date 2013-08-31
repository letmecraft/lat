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
        $this->widgetSchema['sender_name'] = new sfWidgetFormInput();
        $this->widgetSchema['sender_email'] = new sfWidgetFormInput();
        $this->widgetSchema['subject'] = new sfWidgetFormInput();
        $this->widgetSchema['message'] = new sfWidgetFormTextarea();

        /* Set validators */
        $this->validatorSchema['sender_name'] = new sfValidatorString();
        $this->validatorSchema['sender_email'] = new sfValidatorEmail(array(), array('required' => 'Champs requis', 'invalid' => 'Email non valide'));
        $this->validatorSchema['subject'] = new sfValidatorString();
        $this->validatorSchema['message'] = new sfValidatorString();
    }
}
