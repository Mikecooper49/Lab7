<?php
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 2019-02-20
 * Time: 21:05
 */

$forename = $_POST["forename"];
$surname = $_POST["surname"];
$gender = $_POST["gender"];
$power = $_POST["power"];
echo $forename . $surname . "your are ". $gender. "and your super power is" . $power;


?>