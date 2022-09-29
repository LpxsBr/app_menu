<?php

require_once 'conection.php';

function create(){
    $con = con();

    $con -> query("CREATE DATABASE IF NOT EXISTS banco_cardapio");
    $tb = $con -> query("CREATE TABLE IF NOT EXISTS banco_cardapio.users(id INT AUTO_INCREMENT PRIMARY KEY, username VARCHAR(40) NOT NULL, cellphone VARCHAR(11) NOT NULL, email VARCHAR(40), avatar VARCHAR(50), update_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)");

    if(!$con or !$tb){
        return 'deu ruim';
    }else{
        return 'deu bom';
    }

    $con -> close();
}

//create();

class transaction{
    function what(){
        $option = $_POST['opt'];
        switch ($option) {
            case 'insert':
                # code...
                break;
            case 'update':
                // insert
                # code...
                break;
            case 'delete':
                // insert
                # code...
                break;
            default:
                # code...
                break;
        }
    }
}