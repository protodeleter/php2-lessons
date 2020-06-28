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
        $sql = 'SELECT * FROM '. static::TABLE.' WHERE id='. $id;
        $stmt = $db->query($sql, static::class);

        if( is_object ($stmt[0]) ) {
            return $stmt[0];
        } else {
            die('No such record');
        }

    }

}
