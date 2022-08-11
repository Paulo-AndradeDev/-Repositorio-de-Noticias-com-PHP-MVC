<?php 

session_start();

require '../vendor/autoload.php';

define("URL_BASE",$_SERVER['SERVER_NAME']);

$app = new \App\Core\App(); //namespace = App\Core + \class App

