<?php

abstract class Model
{
    protected const TABLE = '';
    public  $id;
    public $data;

    public static function findAll(): array
    {
        $db = new \Db();
        $sql = 'SELECT * FROM ' . static::TABLE;
        return $db->query($sql, static::class);
    }

    public static function findById($id) {
        $db = new \Db();
        $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE id='. $id;
        if( $db->query($sql, static::class) ) {
            return $db->query($sql, static::class);
        }
        return false;
    }

}
