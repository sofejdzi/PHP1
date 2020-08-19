<?php
    ob_start();
    session_start();
    include "konekcija.php";
    
    if(isset($_SESSION['korisnik'])){         
        $id = $_SESSION['korisnik']->idKorisnik;     
    } 
 
    if(isset($_POST['kategorija'])){
        $kategorija = $_POST['kategorija'];
    }
    if(isset($_POST['sajt'])){
        $sajt=$_POST['sajt'];
    }

    $upit1 = "INSERT INTO anketa (kategorija, sajt) VALUES(:kategorija, :sajt)";
    $priprema=$konekcija->prepare($upit1);
    $priprema->bindParam(":kategorija", $kategorija);
    $priprema->bindParam(":sajt", $sajt);
    $rezultat = $priprema->execute();
    $idAnketa = $konekcija->lastInsertId();

    $upit2 = "INSERT INTO korisnikAnketa(idKorisnik, idAnketa) VALUES(:korisnik, :anketa)";
    $priprema=$konekcija->prepare($upit2);
    $priprema->bindParam(":korisnik", $id);
    $priprema->bindParam(":anketa", $idAnketa);
    $rezultat = $priprema-> execute();
    
   
?>