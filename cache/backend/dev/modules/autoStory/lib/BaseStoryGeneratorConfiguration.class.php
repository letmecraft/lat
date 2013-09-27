<?php

/**
 * story module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage story
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseStoryGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getActionsDefault()
  {
    return array();
  }

  public function getFormActions()
  {
    return array(  '_delete' => NULL,  '_list' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
  }

  public function getNewActions()
  {
    return array();
  }

  public function getEditActions()
  {
    return array();
  }

  public function getListObjectActions()
  {
    return array(  '_edit' =>   array(    'label' => 'Modifier',  ),  '_delete' =>   array(    'label' => 'Supprimer',  ),);
  }

  public function getListActions()
  {
    return array(  '_new' => NULL,);
  }

  public function getListBatchActions()
  {
    return array(  '_delete' => NULL,);
  }

  public function getListParams()
  {
    return '%%=title%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Carnets d\'expéditions et photographies';
  }

  public function getEditTitle()
  {
    return 'Edit Story';
  }

  public function getNewTitle()
  {
    return 'New Story';
  }

  public function getFilterDisplay()
  {
    return array();
  }

  public function getFormDisplay()
  {
    return array();
  }

  public function getEditDisplay()
  {
    return array();
  }

  public function getNewDisplay()
  {
    return array();
  }

  public function getListDisplay()
  {
    return array(  0 => '=title',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'title' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Titre',),
      'type' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'is_published' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',  'label' => 'Publié ?',),
      'started_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',  'label' => 'Date de début',),
      'ended_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',  'label' => 'Date de fin',),
      'cover' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Couverture',),
      'content' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Contenus',),
      'place_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'pos_x' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'pos_y' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'created_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'updated_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'slug' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'story_place_id' => array(  'is_link' => false,  'is_real' => false,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Lieu',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'title' => array(),
      'type' => array(),
      'is_published' => array(),
      'started_at' => array(),
      'ended_at' => array(),
      'cover' => array(),
      'content' => array(),
      'place_id' => array(),
      'pos_x' => array(),
      'pos_y' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'slug' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'title' => array(),
      'type' => array(),
      'is_published' => array(),
      'started_at' => array(),
      'ended_at' => array(),
      'cover' => array(),
      'content' => array(),
      'place_id' => array(),
      'pos_x' => array(),
      'pos_y' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'slug' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'title' => array(),
      'type' => array(),
      'is_published' => array(),
      'started_at' => array(),
      'ended_at' => array(),
      'cover' => array(),
      'content' => array(),
      'place_id' => array(),
      'pos_x' => array(),
      'pos_y' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'slug' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'title' => array(),
      'type' => array(),
      'is_published' => array(),
      'started_at' => array(),
      'ended_at' => array(),
      'cover' => array(),
      'content' => array(),
      'place_id' => array(),
      'pos_x' => array(),
      'pos_y' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'slug' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'title' => array(),
      'type' => array(),
      'is_published' => array(),
      'started_at' => array(),
      'ended_at' => array(),
      'cover' => array(),
      'content' => array(),
      'place_id' => array(),
      'pos_x' => array(),
      'pos_y' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'slug' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'StoryForm';
  }

  public function hasFilterForm()
  {
    return false;
  }

  /**
   * Gets the filter form class name
   *
   * @return string The filter form class name associated with this generator
   */
  public function getFilterFormClass()
  {
    return 'StoryFormFilter';
  }

  public function getPagerClass()
  {
    return 'sfDoctrinePager';
  }

  public function getPagerMaxPerPage()
  {
    return 20;
  }

  public function getDefaultSort()
  {
    return array(null, null);
  }

  public function getTableMethod()
  {
    return '';
  }

  public function getTableCountMethod()
  {
    return '';
  }
}
