<?php
    ob_start();
    session_start();
include "../konekcija.php";

    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $idK= $_SESSION['korisnik']->idKorisnik; 
        $upit = "INSERT INTO korpa1(idProizvod, idKorisnik) VALUES(:idP,:idK)";
        $stmt = $konekcija->prepare($upit);
        $stmt->bindParam(":idP",$id);
        $stmt->bindParam(":idK",$idK);
        $rezultat = $stmt->execute();
        
        if($rezultat){
            // $code = 201;
        }
        else{
            // $code = 500;
        }
    }

?> 
