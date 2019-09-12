<?php

if (session_status()==PHP_SESSION_NONE){
    session_start();
}

$user = 'bywan';
$pass = 'apexlegend';
$bdd = new PDO('mysql:host=localhost;dbname=artisans;charset=utf8', $user, $pass);