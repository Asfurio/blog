<?php
require ("./classe/Autoload.php");
spl_autoload_register("Autoload::classeAutoloader");

Log::writeCSV("reer");


$user = new Users('niko', 'niko@sfr.fr', 'niko76', 'blavet', 'nicolas');
var_dump($user);
$user ->inscription();
$user ->connection();