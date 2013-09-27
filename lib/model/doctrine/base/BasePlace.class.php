<?php

/**
 * BasePlace
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $title
 * @property Doctrine_Collection $Stories
 * @property Doctrine_Collection $Journeys
 * 
 * @method string              getTitle()    Returns the current record's "title" value
 * @method Doctrine_Collection getStories()  Returns the current record's "Stories" collection
 * @method Doctrine_Collection getJourneys() Returns the current record's "Journeys" collection
 * @method Place               setTitle()    Sets the current record's "title" value
 * @method Place               setStories()  Sets the current record's "Stories" collection
 * @method Place               setJourneys() Sets the current record's "Journeys" collection
 * 
 * @package    lat
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePlace extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('place');
        $this->hasColumn('title', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Story as Stories', array(
             'local' => 'id',
             'foreign' => 'place_id'));

        $this->hasMany('Journey as Journeys', array(
             'local' => 'id',
             'foreign' => 'place_id'));
    }
}