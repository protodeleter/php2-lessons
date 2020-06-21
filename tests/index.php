<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 17.06.2020
 * Time: 20:05
 */
require_once '../index.php';
/**
 * Prepare for test
 */

/** Create test recorsd for all tables */
if (empty(table-product)) {
    insert some records
}
if (empty(table-product)) {
    insert some records
}if (empty(table-product)) {
    insert some records
}if (empty(table-product)) {
    insert some records
}





/** Test 1 Product */
$products = Models\Product::findAll();
assert(is_array($products));

/** Check with one record */
//$title = 'New Title';
//$descr = 'Some Text Some Text Some Text Some Text';
//$price = 123;
//$id = 1;
//$sql = "INSERT INTO product (title, description, price) VALUES (?,?,?)";
//$db->execute ($sql , $params = [$title,$descr,$price]);

/** test 2 */
assert(is_object($products[0]));


$test3 = false;
if ($products[0]->title == 'New Title' &&) {
$test3 = true;
}
assert($test3);
/** remove */