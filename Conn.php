<?php
    try{
        $db = new PDO("mysql:host=localhost;dbname=phpsys;charset=utf8","root","123456789");
    }catch(PDOExpception $err){
        echo $err->getMessage();
    }
?>