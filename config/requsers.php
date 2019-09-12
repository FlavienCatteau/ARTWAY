<?php

if (session_status()==PHP_SESSION_NONE){
    session_start();
}

$requestSQL = 'SELECT * FROM `user`';
$dataUser = $bdd->query($requestSQL);
$usersList = $dataUser->fetchAll(PDO::FETCH_OBJ);
