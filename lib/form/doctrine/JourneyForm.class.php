<?php

class JourneyForm extends BaseJourneyForm
{
    public function configure()
    {
        /*  Saison */

        $this->widgetSchema['season'] = new sfWidgetFormChoice(array('choices' => Journey::$seasons));
        $this->validatorSchema['season'] = new sfValidatorChoice(array('choices' => array_keys(Journey::$seasons)));

        /*  Dates */

        $dateOptions = array(
        'format' => '%day% %month% %year%',
        'can_be_empty' => false
        );

        $this->widgetSchema['from_date']  = $this->widgetSchema['to_date'] = new sfWidgetFormDate($dateOptions);

        /*  Cover */

        $this->widgetSchema['cover'] = new sfWidgetFormInputFileEditable(array(
            'is_image' => true,
            'file_src' => '/ups/images/journey/' . $this->getObject()->getId() . '/' . $this->getObject()->getCover(),
            'with_delete' => true,
            'edit_mode' => !$this->isNew(),
            'template' => '%input%%file%'
        ));

        $this->validatorSchema['cover'] = new sfValidatorFile(array(
            'required'   => false,
            'path'       => 'ups/images/journey/' . $this->getObject()->getId(),
            'validated_file_class' => 'CustomValidatedFile',
            'mime_types' => 'web_images',
        ));

        /*  File */

        $this->widgetSchema['doc'] = new sfWidgetFormInputFileEditable(array(
            'file_src' => '/ups/files/journey/' . $this->getObject()->getId() . '/' . $this->getObject()->getDoc(),
            'with_delete' => true,
            'edit_mode' => !$this->isNew(),
            'template' => '%input%<br /><a target="_blank" href="%file%" />%file%</a>'
        ));

        $this->validatorSchema['doc'] = new sfValidatorFile(array(
            'required'   => false,
            'path'       => 'ups/files/journey/' . $this->getObject()->getId(),
            'validated_file_class' => 'CustomValidatedFile',
            'mime_types' => array('application/pdf'),
        ));
    }

}
