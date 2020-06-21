<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 18.06.2020
 * Time: 0:46
 */
require_once __DIR__.'../../index.php';

$title = 'New Title';
$descr = 'Some Text Some Text Some Text Some Text';
$price = 123;
$id = 1;
$sql = "UPDATE News SET Title=?, Content=? WHERE id=?";
$db->execute ($sql , $params = [$title,$descr,$id]);
