<?php
/**
 * Created by PhpStorm.
 * User: Cosmin
 * Date: 2/21/2016
 * Time: 2:25 PM
 */
class Newsletter extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table = "newsletter";
        $this->primaryKey = "id";
    }

    public function add($email){
        
        // verificam cu o metoda checkEmail daca e in baza de date
      $sql = "Insert into {$this->table} (email) values ('$email')";
      $response = $this->conn->exec($sql);
      return $response;
    }
    public function checkEmail(){
        
    }
}