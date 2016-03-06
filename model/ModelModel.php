<?php
/**
 * Created by PhpStorm.
 * User: Cosmin
 * Date: 2/21/2016
 * Time: 2:26 PM
 */

class Model
{
    public $table;
    public $primaryKey;
    protected $conn;

    public function __construct()
    {
        $this->connect();
    }

    protected function connect() {
        try {
            $this->conn = new PDO("mysql:host=".Config::DB_HOST .
            ";dbname=".Config::DB_NAME, Config::DB_USER, Config::DB_PASS);
        }
        catch(Exception $e){

        }
    }

    protected function getAll() {
        $sql = "SELECT * FROM {$this->table}";

        $sth = $this->conn->prepare($sql);
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);

        return$result;
    }
}