<?php

    $dsn  = 'mysql:host=localhost;dbname=shop'; // dsn : data source name
    $user = 'root';
    $pass = '';
    $option = array(

        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    );

    try {
        // con = connection
        $con = new PDO($dsn ,$user, $pass, $option);

        $con-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        // test if the data base exsist

        // echo " you are connected to data base "
    }
     catch (PDOException $e) {

        echo 'Failed to connected' . $e->getmessage();
    }