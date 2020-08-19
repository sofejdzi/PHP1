<?php
    ob_start();
    session_start();
    include "konekcija.php";

    if(($_SESSION['korisnik']->idUloga) != 1){
        header("Location: index.php");
    }
    else{

        if(isset($_POST['btnIzmeniPro'])){
        $idPro = $_POST['sakriveno'];

        $nazivProizvoda = $_POST['tbNazivIzm'];
        $sastavProizvoda = $_POST['tbSastavIzm'];
        $cenaProizvoda = $_POST['tbCenaIzm'];


            try{
                if($nazivProizvoda!=""){
                    $upitIzm = "UPDATE proizvodi SET naziv='$nazivProizvoda' WHERE idProizvod='$idPro'";
                    $priprema=$konekcija->prepare($upitIzm);
                  
                    $priprema->execute();
                }

                

                if($sastavProizvoda!=""){
                    $upitIzm = "UPDATE proizvodi SET sastav='$sastavProizvoda' WHERE idProizvod='$idPro'";
                    $priprema=$konekcija->prepare($upitIzm);
                    
                    $priprema->execute();
                }

               
                if($cenaProizvoda!=""){
                    $upitIzm = "UPDATE proizvodi SET cena='$cenaProizvoda' WHERE idProizvod='$idPro'";
                    $priprema=$konekcija->prepare($upitIzm);
                    
                    $priprema->execute();
                }
                header("Location: admin.php");
                
            }
            catch(PDOException $e){
                echo $e;
            }
        
    }else{
        echo ("Greška");
    }
}    
?>