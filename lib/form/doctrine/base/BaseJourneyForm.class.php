<?php

/**
 * Journey form base class.
 *
 * @method Journey getObject() Returns the current form's model object
 *
 * @package    lat
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseJourneyForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'title'        => new sfWidgetFormInputText(),
      'is_published' => new sfWidgetFormInputCheckbox(),
      'place_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Place'), 'add_empty' => false)),
      'doc'          => new sfWidgetFormInputText(),
      'cover'        => new sfWidgetFormInputText(),
      'from_date'    => new sfWidgetFormDateTime(),
      'to_date'      => new sfWidgetFormDateTime(),
      'season'       => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'title'        => new sfValidatorString(array('max_length' => 255)),
      'is_published' => new sfValidatorBoolean(array('required' => false)),
      'place_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Place'))),
      'doc'          => new sfValidatorString(array('max_length' => 255)),
      'cover'        => new sfValidatorString(array('max_length' => 255)),
      'from_date'    => new sfValidatorDateTime(),
      'to_date'      => new sfValidatorDateTime(),
      'season'       => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('journey[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Journey';
  }

}
