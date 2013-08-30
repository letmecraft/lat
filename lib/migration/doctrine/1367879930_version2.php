<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version2 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->dropTable('logbook');
        $this->createTable('story', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => '8',
              'autoincrement' => '1',
              'primary' => '1',
             ),
             'title' => 
             array(
              'type' => 'string',
              'notnull' => '1',
              'length' => '255',
             ),
             'type' => 
             array(
              'type' => 'int',
              'notnull' => '1',
              'default' => '0',
              'length' => '1',
             ),
             'is_published' => 
             array(
              'type' => 'boolean',
              'notnull' => '1',
              'default' => '0',
              'length' => '25',
             ),
             'started_at' => 
             array(
              'type' => 'timestamp',
              'notnull' => '1',
              'length' => '25',
             ),
             'ended_at' => 
             array(
              'type' => 'timestamp',
              'notnull' => '1',
              'length' => '25',
             ),
             'cover' => 
             array(
              'type' => 'string',
              'notnull' => '1',
              'length' => '255',
             ),
             'pos_x' => 
             array(
              'type' => 'int',
              'notnull' => '1',
              'default' => '0',
              'length' => '5',
             ),
             'pos_y' => 
             array(
              'type' => 'int',
              'notnull' => '1',
              'default' => '0',
              'length' => '5',
             ),
             'slug' => 
             array(
              'type' => 'string',
              'length' => '255',
             ),
             'created_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             'updated_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             ), array(
             'indexes' => 
             array(
              'story_sluggable' => 
              array(
              'fields' => 
              array(
               0 => 'slug',
              ),
              'type' => 'unique',
              ),
             ),
             'primary' => 
             array(
              0 => 'id',
             ),
             ));
        $this->removeColumn('link', 'logbook_id');
        $this->addColumn('link', 'story_id', 'integer', '8', array(
             ));
    }

    public function down()
    {
        $this->createTable('logbook', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => '8',
              'autoincrement' => '1',
              'primary' => '1',
             ),
             'title' => 
             array(
              'type' => 'string',
              'notnull' => '1',
              'length' => '255',
             ),
             'type' => 
             array(
              'type' => 'int',
              'notnull' => '1',
              'default' => '0',
              'length' => '1',
             ),
             'is_published' => 
             array(
              'type' => 'boolean',
              'notnull' => '1',
              'default' => '0',
              'length' => '25',
             ),
             'started_at' => 
             array(
              'type' => 'timestamp',
              'notnull' => '1',
              'length' => '25',
             ),
             'ended_at' => 
             array(
              'type' => 'timestamp',
              'notnull' => '1',
              'length' => '25',
             ),
             'cover' => 
             array(
              'type' => 'string',
              'notnull' => '1',
              'length' => '255',
             ),
             'pos_x' => 
             array(
              'type' => 'int',
              'notnull' => '1',
              'default' => '0',
              'length' => '5',
             ),
             'pos_y' => 
             array(
              'type' => 'int',
              'notnull' => '1',
              'default' => '0',
              'length' => '5',
             ),
             'slug' => 
             array(
              'type' => 'string',
              'length' => '255',
             ),
             'created_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             'updated_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             ), array(
             'type' => '',
             'indexes' => 
             array(
              'logbook_sluggable' => 
              array(
              'fields' => 
              array(
               0 => 'slug',
              ),
              'type' => 'unique',
              ),
             ),
             'primary' => 
             array(
              0 => 'id',
             ),
             'collate' => '',
             'charset' => '',
             ));
        $this->dropTable('story');
        $this->addColumn('link', 'logbook_id', 'integer', '8', array(
             ));
        $this->removeColumn('link', 'story_id');
    }
}