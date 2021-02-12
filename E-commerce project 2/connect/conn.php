<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="ecom";




if(!$db=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){

    die('failed to connect!');
}