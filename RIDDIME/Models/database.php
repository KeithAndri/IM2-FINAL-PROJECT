<?php

function create_connection(){
    $host="localhost";
    $username="root";
    $password="";
    $database="riddime";
    
    return new mysqli($host,$username,$password,$database);
}

if (create_connection()){
    echo 'success';
}