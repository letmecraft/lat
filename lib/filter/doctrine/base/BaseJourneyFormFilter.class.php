<?php

/**
 * Journey filter form base class.
 *
 * @package    lat
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseJourneyFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'title'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'place'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'file'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cover'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'from_date' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'to_date'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'season'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'title'     => new sfValidatorPass(array('required' => false)),
      'place'     => new sfValidatorPass(array('required' => false)),
      'file'      => new sfValidatorPass(array('required' => false)),
      'cover'     => new sfValidatorPass(array('required' => false)),
      'from_date' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'to_date'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'season'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('journey_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Journey';
  }

  public function getFields()
  {
    return array(
      'id'        => 'Number',
      'title'     => 'Text',
      'place'     => 'Text',
      'file'      => 'Text',
      'cover'     => 'Text',
      'from_date' => 'Date',
      'to_date'   => 'Date',
      'season'    => 'Text',
    );
  }
}
