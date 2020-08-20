<?php

try{
    $db = new PDO("mysql:host=localhost;dbname=db", "root", "");
} catch (Exception $e){
    echo $e->getMessage();
}

?>