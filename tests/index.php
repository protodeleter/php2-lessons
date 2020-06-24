<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 17.06.2020
 * Time: 20:05
 */

assert_options(ASSERT_ACTIVE, 1);
assert_options(ASSERT_WARNING, 0);
assert_options(ASSERT_QUIET_EVAL, 1);

echo php_ini_loaded_file ();

phpinfo();

use Models\Article;
use Models\News;

require_once __DIR__.'../../index.php';


/** Test 1 Product */
$news = News::findAll();
assert(is_array($news));
/** test 2 */
assert(is_object($news[0]));


/** Test Insert */

$title = 'Test News';
$descr = 'Test Content';
$sql = "INSERT INTO newsasa (Title, Content) VALUES (?,?)";

$test_insert = $db->execute ($sql , $params = [$title,$descr]);

//var_dump ($test_insert);

assert ( false, 'failed' );
