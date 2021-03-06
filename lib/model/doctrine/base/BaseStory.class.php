<?php

/**
 * BaseStory
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $title
 * @property int $type
 * @property boolean $is_published
 * @property timestamp $started_at
 * @property timestamp $ended_at
 * @property string $cover
 * @property string $content
 * @property integer $place_id
 * @property int $pos_x
 * @property int $pos_y
 * @property Place $Place
 * 
 * @method string    getTitle()        Returns the current record's "title" value
 * @method int       getType()         Returns the current record's "type" value
 * @method boolean   getIsPublished()  Returns the current record's "is_published" value
 * @method timestamp getStartedAt()    Returns the current record's "started_at" value
 * @method timestamp getEndedAt()      Returns the current record's "ended_at" value
 * @method string    getCover()        Returns the current record's "cover" value
 * @method string    getContent()      Returns the current record's "content" value
 * @method integer   getPlaceId()      Returns the current record's "place_id" value
 * @method int       getPosX()         Returns the current record's "pos_x" value
 * @method int       getPosY()         Returns the current record's "pos_y" value
 * @method Place     getPlace()        Returns the current record's "Place" value
 * @method Story     setTitle()        Sets the current record's "title" value
 * @method Story     setType()         Sets the current record's "type" value
 * @method Story     setIsPublished()  Sets the current record's "is_published" value
 * @method Story     setStartedAt()    Sets the current record's "started_at" value
 * @method Story     setEndedAt()      Sets the current record's "ended_at" value
 * @method Story     setCover()        Sets the current record's "cover" value
 * @method Story     setContent()      Sets the current record's "content" value
 * @method Story     setPlaceId()      Sets the current record's "place_id" value
 * @method Story     setPosX()         Sets the current record's "pos_x" value
 * @method Story     setPosY()         Sets the current record's "pos_y" value
 * @method Story     setPlace()        Sets the current record's "Place" value
 * 
 * @package    lat
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseStory extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('story');
        $this->hasColumn('title', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('type', 'int', 1, array(
             'type' => 'int',
             'notnull' => true,
             'default' => 0,
             'length' => 1,
             ));
        $this->hasColumn('is_published', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => 0,
             ));
        $this->hasColumn('started_at', 'timestamp', null, array(
             'type' => 'timestamp',
             'notnull' => true,
             ));
        $this->hasColumn('ended_at', 'timestamp', null, array(
             'type' => 'timestamp',
             'notnull' => true,
             ));
        $this->hasColumn('cover', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('content', 'string', null, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '',
             ));
        $this->hasColumn('place_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('pos_x', 'int', 5, array(
             'type' => 'int',
             'notnull' => true,
             'default' => 0,
             'length' => 5,
             ));
        $this->hasColumn('pos_y', 'int', 5, array(
             'type' => 'int',
             'notnull' => true,
             'default' => 0,
             'length' => 5,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Place', array(
             'local' => 'place_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $sluggable0 = new Doctrine_Template_Sluggable(array(
             'fields' => 
             array(
              0 => 'title',
             ),
             ));
        $this->actAs($timestampable0);
        $this->actAs($sluggable0);
    }
}