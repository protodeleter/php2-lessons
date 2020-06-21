<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 18.06.2020
 * Time: 0:46
 */

require_once '../index.php';

$title = 'New Title';
$descr = 'Some Text Some Text Some Text Some Text';
$price = 123;
$id = 1;
$sql = "INSERT INTO product (title, description, price) VALUES (?,?,?)";
$db->execute ($sql , $params = [$title,$descr,$price]);
