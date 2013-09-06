<?php

/**
 * Story form.
 *
 * @package    lat
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class StoryForm extends BaseStoryForm
{
  public function configure()
  {
    unset($this['slug'], $this['created_at'], $this['updated_at']);

    /*  Map positions */

    $this->widgetSchema['pos_x'] = $this->widgetSchema['pos_y'] = new sfWidgetFormInputHidden();

    /*  Dates */

    $dateOptions = array(
        'format' => '%day% %month% %year%',
        'can_be_empty' => false
    );

    $this->widgetSchema['started_at']  = $this->widgetSchema['ended_at'] = new sfWidgetFormDate($dateOptions);

    /*  Types */
    
    $this->widgetSchema['type'] = new sfWidgetFormChoice(array('choices' => Story::$types));
    $this->validatorSchema['type'] = new sfValidatorChoice(array('choices' => array_keys(Story::$types)));

    /*  Cover */

    $this->widgetSchema['cover'] = new sfWidgetFormInputFileEditable(array(
        'is_image' => true,
        'file_src' => '/ups/images/story/' . $this->getObject()->getId() . '/' . $this->getObject()->getCover(),
        'with_delete' => true,
        'edit_mode' => !$this->isNew(),
        'template' => '%input%%file%'
    ));
    
    $this->validatorSchema['cover'] = new sfValidatorFile(array(
        'required'   => false,
        'path'       => 'ups/images/story/' . $this->getObject()->getId(),
        'validated_file_class' => 'CustomValidatedFile',
        'mime_types' => 'web_images',
    ));
  }
}
