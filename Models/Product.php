<?php
namespace Models;

class Product extends \Model
{
    protected const TABLE = 'product';
    public string $title;
    public float $price;

}
