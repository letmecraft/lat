<?php

/**
 * InfoTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class InfoTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object InfoTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Info');
    }

    public function getLastPublished()
    {
        return $this->createQuery()
            ->orderBy("created_at")
            ->where("is_published = ?", true)
            ->fetchOne();
    }
}