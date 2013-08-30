<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version3 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->dropForeignKey('link', 'link_logbook_id_logbook_id');
        $this->createForeignKey('link', 'link_story_id_story_id', array(
             'name' => 'link_story_id_story_id',
             'local' => 'story_id',
             'foreign' => 'id',
             'foreignTable' => 'story',
             'onUpdate' => '',
             'onDelete' => 'CASCADE',
             ));
        $this->addIndex('link', 'link_story_id', array(
             'fields' => 
             array(
              0 => 'story_id',
             ),
             ));
    }

    public function down()
    {
        $this->createForeignKey('link', 'link_logbook_id_logbook_id', array(
             'name' => 'link_logbook_id_logbook_id',
             'local' => 'logbook_id',
             'foreign' => 'id',
             'foreignTable' => 'logbook',
             'onUpdate' => '',
             'onDelete' => 'CASCADE',
             ));
        $this->dropForeignKey('link', 'link_story_id_story_id');
        $this->removeIndex('link', 'link_story_id', array(
             'fields' => 
             array(
              0 => 'story_id',
             ),
             ));
    }
}