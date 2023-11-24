<?php

function pdo_connect_mysql(){

    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'phppoll';

    try{
        return new PDO('mysql:host=' . $DATA)
    }
}