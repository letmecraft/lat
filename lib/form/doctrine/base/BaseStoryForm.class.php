<?php

/**
 * Story form base class.
 *
 * @method Story getObject() Returns the current form's model object
 *
 * @package    lat
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseStoryForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'title'        => new sfWidgetFormInputText(),
      'type'         => new sfWidgetFormInputText(),
      'is_published' => new sfWidgetFormInputCheckbox(),
      'started_at'   => new sfWidgetFormDateTime(),
      'ended_at'     => new sfWidgetFormDateTime(),
      'cover'        => new sfWidgetFormInputText(),
      'content'      => new sfWidgetFormTextarea(),
      'place_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Place'), 'add_empty' => false)),
      'pos_x'        => new sfWidgetFormInputText(),
      'pos_y'        => new sfWidgetFormInputText(),
      'created_at'   => new sfWidgetFormDateTime(),
      'updated_at'   => new sfWidgetFormDateTime(),
      'slug'         => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'title'        => new sfValidatorString(array('max_length' => 255)),
      'type'         => new sfValidatorPass(array('required' => false)),
      'is_published' => new sfValidatorBoolean(array('required' => false)),
      'started_at'   => new sfValidatorDateTime(),
      'ended_at'     => new sfValidatorDateTime(),
      'cover'        => new sfValidatorString(array('max_length' => 255)),
      'content'      => new sfValidatorString(),
      'place_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Place'))),
      'pos_x'        => new sfValidatorPass(array('required' => false)),
      'pos_y'        => new sfValidatorPass(array('required' => false)),
      'created_at'   => new sfValidatorDateTime(),
      'updated_at'   => new sfValidatorDateTime(),
      'slug'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Story', 'column' => array('slug')))
    );

    $this->widgetSchema->setNameFormat('story[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Story';
  }

}
