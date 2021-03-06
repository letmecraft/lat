<?php

/**
 * BaseJourney
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $title
 * @property boolean $is_published
 * @property integer $place_id
 * @property string $doc
 * @property string $cover
 * @property timestamp $from_date
 * @property timestamp $to_date
 * @property int $season
 * @property string $description
 * @property Place $Place
 * 
 * @method string    getTitle()        Returns the current record's "title" value
 * @method boolean   getIsPublished()  Returns the current record's "is_published" value
 * @method integer   getPlaceId()      Returns the current record's "place_id" value
 * @method string    getDoc()          Returns the current record's "doc" value
 * @method string    getCover()        Returns the current record's "cover" value
 * @method timestamp getFromDate()     Returns the current record's "from_date" value
 * @method timestamp getToDate()       Returns the current record's "to_date" value
 * @method int       getSeason()       Returns the current record's "season" value
 * @method string    getDescription()  Returns the current record's "description" value
 * @method Place     getPlace()        Returns the current record's "Place" value
 * @method Journey   setTitle()        Sets the current record's "title" value
 * @method Journey   setIsPublished()  Sets the current record's "is_published" value
 * @method Journey   setPlaceId()      Sets the current record's "place_id" value
 * @method Journey   setDoc()          Sets the current record's "doc" value
 * @method Journey   setCover()        Sets the current record's "cover" value
 * @method Journey   setFromDate()     Sets the current record's "from_date" value
 * @method Journey   setToDate()       Sets the current record's "to_date" value
 * @method Journey   setSeason()       Sets the current record's "season" value
 * @method Journey   setDescription()  Sets the current record's "description" value
 * @method Journey   setPlace()        Sets the current record's "Place" value
 * 
 * @package    lat
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseJourney extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('journey');
        $this->hasColumn('title', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('is_published', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => 0,
             ));
        $this->hasColumn('place_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('doc', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('cover', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('from_date', 'timestamp', null, array(
             'type' => 'timestamp',
             'notnull' => true,
             ));
        $this->hasColumn('to_date', 'timestamp', null, array(
             'type' => 'timestamp',
             'notnull' => true,
             ));
        $this->hasColumn('season', 'int', 1, array(
             'type' => 'int',
             'notnull' => true,
             'default' => 1,
             'length' => 1,
             ));
        $this->hasColumn('description', 'string', null, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Place', array(
             'local' => 'place_id',
             'foreign' => 'id'));
    }
}