<?php

class Db
{

    protected $dbh;

    public function __construct()
    {
        $this->dbh = new \PDO('mysql:host=localhost;dbname=php_project', 'root', 'root');
    }

    public function query($sql, $class): array
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_CLASS, $class);
    }

    public function execute($query, $params=[]) {
        $sth = $this->dbh->prepare($query);
        $result = $sth->execute($params);
        if( $result ) {
            return true;
        }
        return false;
    }

}
