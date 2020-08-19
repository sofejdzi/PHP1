<?php
    ob_start();
    session_start();
    include "../konekcija.php";
 
    if(($_SESSION['korisnik']->idUloga) != 1){
        header("Location: ../index.php");
    }
    else{
        if(isset($_GET['id'])){
            $idPro = $_GET['id'];
            try{
                

                $upit3 = "DELETE FROM proizvodi WHERE idProizvod='$idPro'";
                $priprema3=$konekcija->prepare($upit3);
                $priprema3->execute(); 

                header("Location: ../admin.php");
            }    
            catch(PDOException $e){
                echo $e;
            }
        }
        else{
            echo ("Greška");
        }
    }
?>