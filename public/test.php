<?php
/**
 * Created by PhpStorm.
 * User: Cosmin
 * Date: 2/21/2016
 * Time: 2:37 PM
 */

foreach(PDO::getAvailableDrivers() as $driver){
    echo $driver.'<br />';
}
