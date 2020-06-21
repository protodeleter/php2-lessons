<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 18.06.2020
 * Time: 0:47
 */
require_once '../index.php';

use Models\Product;
$prod = Product::findById (2);

var_dump ($prod);