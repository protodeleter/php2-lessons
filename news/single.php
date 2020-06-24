<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 18.06.2020
 * Time: 0:47
 */
use Models\Article;
require_once __DIR__.'../../index.php';
if( isset( $_GET['art'] ) && !(empty( $_GET['art'] )) ) {
    $art_id = $_GET['art'];
    $sngl = Article::get_single ($art_id);
}