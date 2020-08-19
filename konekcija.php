<?php
    $serverBase = "localhost";
    $username = "root";
    $password = "";
    $base = "sanitas1";

    try{
        $konekcija = new PDO("mysql:host=$serverBase;dbname=$base;charset=utf8", $username, $password);
        $konekcija->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $konekcija->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
    }
    catch(PDOException $e){
        echo "Greška" . $e->getMessage();
    }
?>