<?php

/**
 * StoryTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class StoryTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object StoryTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Story');
    }

    public function getPublished()
    {
        return $this->createQuery()
            ->where('is_published = ?', true)
            ->execute();
    }
}