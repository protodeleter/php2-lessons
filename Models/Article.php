<?php
namespace Models;
class Article extends \Model
{
    protected const TABLE = 'News';
    public static function get_last_three(): array
    {
        $db = new \Db();
        $sql = 'SELECT * FROM News ORDER BY id DESC LIMIT 3';
        $data = $db->query($sql, static::class);
        require_once ( __DIR__.'../../news/Tpl/Articles.php');
        return $data;
    }
    public static function get_single($id) {
        $single_data = Article::findById ($id);
        require_once ( __DIR__.'../../news/Tpl/Article.php');
        return $single_data;
    }
}