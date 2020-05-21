<?php
session_start();
$_SESSION['user_id']=1001;
//$dbName="todo";
//$
$db=new PDO('mysql:dbname=todo;host=localhost','root','');
//handle this in some other way
if (!isset($_SESSION['user_id'])){
    die('you are not signed in');
}