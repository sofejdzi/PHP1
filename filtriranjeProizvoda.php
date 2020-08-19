<?php
    ob_start();
    session_start();
  include 'konekcija.php';
 
  if(isset($_POST['idKat'])){
    $id=$_POST['idKat'];
    $upit="SELECT p.idProizvod as idProizvoda, p.naziv as nazivProizvoda, p.sastav as sastavProizvoda, p.cena as cenaProizvoda, s.src as src, s.alt as alt FROM proizvodi p INNER JOIN slike s ON p.idSlika=s.idSlika INNER JOIN proizvodkategorija pk ON p.idProizvod=pk.idProizvod INNER JOIN kategorije k ON k.idKategorija=pk.idKategorija WHERE k.idKategorija=:id";
  }

    $priprema = $konekcija->prepare($upit);
    $priprema->bindParam(':id', $id);
    $priprema->execute();

    $proizvodi = $priprema->fetchAll();
    
    include "ispisProizvoda.php";


?>
