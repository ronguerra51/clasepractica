<?php
    // ini_set('display_errors', '1');
    // ini_set('display_startup_errors', '1');
    // error_reporting(E_ALL);
// include n cantidad de veces
// include once, solo una vez

use App\Email as AppEmail;
use PhpMailer\Email;

require './index2.php'; 

$email = new Email();
echo "<br>";
$email2 = new AppEmail();

// echo "desde archivo email";
// require 
// require_once