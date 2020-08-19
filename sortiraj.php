<?php
    ob_start();
    session_start();
  include 'konekcija.php';

  if(isset($_POST['send'])){
    $izabrano = $_POST['izabrano'];
    if($izabrano == "sort"){
        $poredjaj = '';
    }
    if($izabrano == "a-z"){
        $poredjaj = ' ORDER BY p.naziv asc';
    }
    if($izabrano == "z-a"){
        $poredjaj = ' ORDER BY p.naziv desc';
    }
    if($izabrano == "low-high"){
        $poredjaj = ' ORDER BY p.cena asc';
    }
    if($izabrano == "high-low"){
        $poredjaj = ' ORDER BY p.cena desc';
    }
    $upit = 'SELECT p.idProizvod as idProizvoda, p.naziv as nazivProizvoda, p.sastav as sastavProizvoda, p.cena as cenaProizvoda, s.src as src, s.alt as alt FROM proizvodi p INNER JOIN slike s ON p.idSlika=s.idSlika'.$poredjaj;

    $priprema = $konekcija->query($upit);
    $proizvodi = $priprema->fetchAll();
    
    include "ispisProizvoda.php";
    
} 
?>