<?php 
require "inc/Autoloader.php";

//J'initialise l'autoloader 
\App\Autoloader::init();

$a = \App\Text\Randomize::randomString(20,true);
var_dump($a);
die();
// $Sara=new Person("buzenyaki", "Sara");


$config = Config::getInstance();
$session= Session::getInstance();
$session->set("id",1);
$session->unset("idfd");
echo "<pre>" ;
print_r($_SESSION);
echo "</pre>";
