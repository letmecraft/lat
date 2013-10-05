<?php

/**
 * Info form.
 *
 * @package    lat
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class InfoForm extends BaseInfoForm
{
    public function configure()
    {

      unset($this['created_at'], $this['updated_at'], $this['slug']);

      /*  Image */

        $this->widgetSchema['image'] = new sfWidgetFormInputFileEditable(array(
            'is_image' => true,
            'file_src' => '/ups/images/info/' . $this->getObject()->getId() . '/' . $this->getObject()->getImage(),
            'with_delete' => true,
            'edit_mode' => !$this->isNew(),
            'template' => '%input%%file%'
        ));

        $this->validatorSchema['image'] = new sfValidatorFile(array(
            'required'   => false,
            'path'       => 'ups/images/info/' . $this->getObject()->getId(),
            'validated_file_class' => 'CustomValidatedFile',
            'mime_types' => 'web_images',
        ));
    }
}
