<?php 

require "vendor/autoload.php";

use App\Teacher;

$khasbi = new Teacher("Khasbi", "Programmer", 20);
$khasbi->mengajar();
