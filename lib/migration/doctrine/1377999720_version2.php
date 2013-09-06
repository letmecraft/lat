<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version2 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createForeignKey('story', 'story_story_place_id_story_place_id', array(
             'name' => 'story_story_place_id_story_place_id',
             'local' => 'story_place_id',
             'foreign' => 'id',
             'foreignTable' => 'story_place',
             ));
        $this->addIndex('story', 'story_story_place_id', array(
             'fields' => 
             array(
              0 => 'story_place_id',
             ),
             ));
    }

    public function down()
    {
        $this->dropForeignKey('story', 'story_story_place_id_story_place_id');
        $this->removeIndex('story', 'story_story_place_id', array(
             'fields' => 
             array(
              0 => 'story_place_id',
             ),
             ));
    }
}