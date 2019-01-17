<?php

$conn = mysqli_connect('localhost', 'root', '', 'web_project') or die (mysqli_connect_error());
if(!isset($_SESSION))
{
    session_start();
}
error_reporting(E_ALL);
ini_set('display_errors' ,1);
?>