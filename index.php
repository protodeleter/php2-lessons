<?php

//use Models\Product;
//use Models\User;
use Models\Article;
//use Models\News;

spl_autoload_register(function ($class) {
    require __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
});


$article = Article::get_last_three() ;

