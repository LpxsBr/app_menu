<?php

function con()
{
    $host = '127.0.0.1:3306';
    $username = 'root';
    $password = '';

    $conect = new mysqli($host, $username, $password);

    if($conect-> connect_error){
        
    }else{
        
    }

    return $conect;
}

//con();


