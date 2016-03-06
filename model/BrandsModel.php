<?php
/**
 * Created by PhpStorm.
 * User: Cosmin
 * Date: 2/21/2016
 * Time: 2:25 PM
 */
class Brands extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table = "marci";
        $this->primaryKey = "id";
    }

    public function getBrands() {
        return $this->getAll();
    }
}