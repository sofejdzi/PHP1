<?php
        ob_start();
        session_start();

    $podaci = null;
    if(isset($_POST['btnLog'])){
        $greske = [];

        $email = $_POST['tbEmail'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $greske[] = "Email nije ispravan";
        }

        $lozinka = $_POST['tbLozinka'];
        $lozinka1 = md5($lozinka);
        $reLozinka="/.{8,15}$/";
        if(!preg_match($reLozinka, $lozinka) || $lozinka==""){
            $greske[] = "Lozinka nije ispravna";
        }

        if(count($greske)==0){
            require "konekcija.php";

            $upit = "SELECT * FROM korisnici WHERE email=:email AND lozinka=:lozinka";
            $priprema = $konekcija->prepare($upit);  
            $priprema->bindParam(':email', $email); 
            $priprema->bindParam(':lozinka', $lozinka1);
            $rezultat = $priprema->execute();

            if($rezultat){
                if($priprema->rowCount()==1){
                    $korisnik=$priprema->fetch();
                    $_SESSION['korisnik']=$korisnik;

                    if($_SESSION['korisnik']->idUloga==1){
                        $podaci= 'admin';
                    }
                    else{
                        $podaci= 'korisnik';
                        header("Location:proizvodi.php");
                     }
                }
                else{
                    if($priprema->rowCount()==0){
                        $podaci = "Niste registrovani";
                    }
                }
            }
        }
        header('Location:proizvodi.php');
    }
?>
