<?php
    ob_start();
    session_start();
    include "konekcija.php";

    if(($_SESSION['korisnik']->idUloga) != 1){
        header("Location: index.php");
    }
    else{
        if(isset($_POST["btnDodajPro"])){
            $nazivP = $_POST["tbNazivPro"];
            $sastavP = $_POST["tbSastavPro"];
            $cenaP = $_POST['tbCena'];
            $katId = $_POST["tbKategorijaPro"];
        
            
            $datoteka = $_FILES['tbSlikaPro'];
            $tmp = $datoteka['tmp_name'];
            $imeDat = $datoteka['name'];
            $velicina = $datoteka['size'];
            $naziv = $datoteka['type'];
        
            $novoIme = time().'_'.$imeDat;
            $src = "images/proizvodi/".$novoIme;

            $datAp = move_uploaded_file($tmp,$src);

            $upitSlike = "INSERT INTO slike(src, alt) VALUES ('$novoIme', '$nazivP')";
            $priprema=$konekcija->prepare($upitSlike);
            try{
                $priprema->execute();
                $idSlika =$konekcija->lastInsertId();

                $upitPro = "INSERT INTO proizvodi(naziv, sastav, cena, idSlika) VALUES('$nazivP', '$sastavP', '$cenaP', '$idSlika')";
                $priprema=$konekcija->prepare($upitPro);

                $priprema->execute();
                $idProizvod=$konekcija->lastInsertId();

                for($i=0;$i<count($katId);$i++){
                    $idKategorija=$katId[$i];
                    $upitKat="INSERT INTO proizvodkategorija(idProizvod, idKategorija) VALUES('$idProizvod', '$idKategorija')";
                    $priprema= $konekcija->prepare($upitKat);
                    $priprema->execute(); 
                }
                header("Location: admin.php");
        }
        catch(PDOException $e){
            echo "Greska".$e;
        }
    }else{
        echo ("Greška");
    }
}

