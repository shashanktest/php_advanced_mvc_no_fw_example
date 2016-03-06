<?php
/**
 * Created by PhpStorm.
 * User: Cosmin
 * Date: 2/28/2016
 * Time: 3:17 PM
 */

include_once './feed.php';

class API
{
    public $key;
    public $returnType;
    public $returnAll;

    public function __construct() {
        $headers = getallheaders();

        $this->key = $headers['Auth'];
        if($this->key != 'abc123') {
            echo "wrong key";
            exit(-1);
        }
        $this->returnType = $headers['Content-Type'];
        $this->returnAll = $headers['Returnall']; //true or false
    }

    public function getRequestAndAnswer() {
        $feed = new Feed();
        if($this->returnAll == false) {
            $content = $_POST['content'];
            echo json_encode($feed->getSpecific($content));
        }
        else {
            echo json_encode($feed->getAll());
        }
    }

    public function sendMarci() {

    }
}
//primesc datele cu post
$api = new API();

$api->getRequestAndAnswer();