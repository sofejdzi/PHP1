<?php
  include 'konekcija.php';

  if(isset($_POST['btnDodaj'])){
    if(isset($_POST['pro'])){
        $id = $_POST['pro'];
        $konacnaCena = 0;
        foreach($id as $d){
            $idPro = $d['id'];
            $kolicina = $d['kolicina'];
            $upit = 'SELECT p.idProizvod as idProizvoda, p.cena as cenaProizvoda FROM proizvodi p WHERE p.idProizvod=:idPro';

            $priprema = $konekcija->prepare($upit);
            $priprema->bindParam(':idPro', $idPro);
            $priprema->execute();
            $proizvodi = $priprema->fetchAll();
            foreach($proizvodi as $proizvod){
                $cena = $proizvod->cenaProizvoda * $kolicina;
                $konacnaCena +=$cena;  
            };
        }
        echo $konacnaCena;
    }
}
?>