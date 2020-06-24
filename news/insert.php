<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 18.06.2020
 * Time: 0:46
 */

require_once __DIR__.'../../index.php';

$title = 'New Title 3';
$descr = 'Some Text Some Text Some Text Some Text';
$sql = "INSERT INTO news (Title, Content) VALUES (?,?)";
$db->execute ($sql , $params = [$title,$descr]);
