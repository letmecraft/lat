<?php

/**
 * BaseLink
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $title
 * @property string $description
 * @property string $url
 * @property integer $story_id
 * @property Story $Story
 * 
 * @method string  getTitle()       Returns the current record's "title" value
 * @method string  getDescription() Returns the current record's "description" value
 * @method string  getUrl()         Returns the current record's "url" value
 * @method integer getStoryId()     Returns the current record's "story_id" value
 * @method Story   getStory()       Returns the current record's "Story" value
 * @method Link    setTitle()       Sets the current record's "title" value
 * @method Link    setDescription() Sets the current record's "description" value
 * @method Link    setUrl()         Sets the current record's "url" value
 * @method Link    setStoryId()     Sets the current record's "story_id" value
 * @method Link    setStory()       Sets the current record's "Story" value
 * 
 * @package    lat
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseLink extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('link');
        $this->hasColumn('title', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('description', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('url', 'string', 512, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 512,
             ));
        $this->hasColumn('story_id', 'integer', null, array(
             'type' => 'integer',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Story', array(
             'local' => 'story_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));
    }
}