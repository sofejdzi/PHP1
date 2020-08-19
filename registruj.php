 <?php


    include "konekcija.php";
   
    $kod = 404;
    $podaci = null;
    if(isset($_POST['btnReg'])){
        $greske = [];

        $ime = $_POST['tbIme'];
        $reIme = "/^[A-ZŽŠĐČĆ][a-zšđčćž]{2,20}$/";
        if(!preg_match($reIme, $ime) || $ime==""){
            $greske[] = "Podatak za ime nije u ispravnom formatu";
        }

        $prezime = $_POST['tbPrezime'];
        $rePrezime = "/^[A-ZŽŠĐČĆ][a-zšđčćž]{2,40}$/";
        if(!preg_match($rePrezime, $prezime) || $prezime==""){
            $greske[] = "Podatak za prezime nije u ispravnom formatu";
        }

        $lozinka = $_POST['tbLozinkaReg'];
        $lozinka1 = md5($lozinka);
        $reLozinka="/^.{8,15}$/";
        if(!preg_match($reLozinka, $lozinka) || $lozinka==""){
            $greske[] = "Lozinka nije u ispravnom formatu";
        }

        $email = $_POST['tbEmailReg'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $greske[] = "Email nije u ispravnom formatu";
        }

        if(count($greske)>0){
            $kod = 422;
            $podaci = $greske;
        }
        else{
            $upit = "INSERT INTO korisnici(idKorisnik, ime, prezime, email, lozinka, idUloga) VALUES('', '$ime', '$prezime', '$email', '$lozinka1', 2)";

            $rezultat = $konekcija->query($upit);

            //var_dump($result);
            $priprema = $konekcija->prepare($upit);
            $priprema->bindParam(':ime', $ime);
            $priprema->bindParam(':prezime', $prezime);
            $priprema->bindParam(':email', $email);
            $priprema->bindParam(':lozinka', $lozinka1);

            try{
                $kod = $priprema->execute() ? 201 : 500;
                $podaci="";

            }
            catch(PDOException $e){
                $kod = 409;
            }
        }
        //var_dump($upit);

        header('Location:proizvodi.php');
 


    }
    ?>

