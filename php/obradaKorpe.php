<?php
    ob_start();
    session_start();
    include "../konekcija.php";

    if(!isset($_SESSION['korisnik'])){
        header("Location:../index.php");
    }
    else {
        if(isset($_POST['potvrda1'])){
            $upit1 = "SELECT idProizvod FROM korpa1 WHERE idKorisnik=:idK AND marker=0";
            $priprema = $konekcija->prepare($upit1);
	        $priprema->bindParam(":idK",$_SESSION['korisnik']->idKorisnik);
            $priprema->execute(); 
            $rezId = $priprema->fetchAll();
            var_dump($rezId);
            $upit = "UPDATE korpa1 SET marker=1 WHERE idKorisnik=:idK";
            $pripremaMarker = $konekcija->prepare($upit);
	        $pripremaMarker->bindParam(":idK",$_SESSION['korisnik']->idKorisnik);
            $rez = $pripremaMarker->execute();  
            var_dump($rez);

            foreach($rezId as $id){
                $upitUpdate = "UPDATE proizvodi SET brojProdatih=brojProdatih+1 WHERE idProizvod=:idC";
                $pripremaBroj = $konekcija->prepare($upitUpdate);
	             $pripremaBroj->bindParam(":idC",$id->idProizvod);
                
                 $pripremaBroj->execute();  
            }
            if($rez){
                header("Location:../korpa.php");
            }

        }
        if(isset($_POST['odustani1'])){
            $upitBrisanje = "DELETE FROM korpa1 WHERE idKorisnik=:idK AND marker=0";
            $priprema = $konekcija->prepare($upitBrisanje);
            $priprema->bindParam(":idK",$_SESSION['korisnik']->idKorisnik);
            $rezultatt = $priprema->execute(); 
            // $rezId = $priprema->fetchAll();
  
        }
        if($rezultatt){
            header("Location:../korpa.php");
        }
    }
    

    
?>