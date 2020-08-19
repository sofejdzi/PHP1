<?php
  include 'konekcija.php';
    $strana = 0; 
    if(isset($_POST['numeracija'])){ 
      $stranaNum = (int)$_POST['numeracija'];
      $strana = ($stranaNum - 1) * 6; 
    }
    $upit = "SELECT p.idProizvod as idProizvoda, p.naziv as nazivProizvoda, p.sastav as sastavProizvoda, p.cena as cenaProizvoda, s.src as src, s.alt as alt FROM proizvodi p INNER JOIN slike s ON p.idSlika=s.idSlika ORDER BY p.idProizvod LIMIT ".$strana." ,6";

    $priprema = $konekcija->query($upit);
    $proizvodi = $priprema->fetchAll();
    include "ispisProizvoda.php";
    
?>