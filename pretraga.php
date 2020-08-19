<?php
  include 'konekcija.php';
  
  if(isset($_POST['send'])){
    $pretraga = $_POST['query'];
    $upit = "SELECT p.idProizvod as idProizvoda, p.naziv as nazivProizvoda, p.sastav as sastavProizvoda, p.cena as cenaProizvoda, s.src as src, s.alt as alt FROM proizvodi p INNER JOIN slike s ON p.idSlika=s.idSlika WHERE p.naziv LIKE '%$pretraga%' OR p.sastav LIKE '%$pretraga%'";
    
    $priprema = $konekcija->query($upit);
    $proizvodi = $priprema->fetchAll();
    include "ispisProizvoda.php";
    
} 
?>