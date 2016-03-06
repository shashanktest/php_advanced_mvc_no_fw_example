<?php
/**
 * Created by PhpStorm.
 * User: Cosmin
 * Date: 2/28/2016
 * Time: 3:43 PM
 */

class Feed
{
    private $conn;
    const DB_NAME = 'dealership';
    const DB_HOST = 'localhost';
    const DB_PASS = 'secret';
    const DB_USER = 'root';

    public function __construct()
    {
        $this->connect();
    }

    protected function connect() {
        try {
            $this->conn = new PDO("mysql:host=".self::DB_HOST .
                ";dbname=".self::DB_NAME, self::DB_USER, self::DB_PASS);
        }
        catch(Exception $e){

        }
    }

    public function getAll() {
        $sql = "SELECT * FROM marci";

        $sth = $this->conn->prepare($sql);
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function getSpecific($content) {
        $marci = json_decode($content);
        $list = implode(',', $marci);

        $sql = "SELECT * FROM marci WHERE name IN (".$list.")";

        $sth = $this->conn->prepare($sql);
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
}