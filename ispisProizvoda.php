<?php 
    $ispis='';
    foreach($proizvodi as $proizvod){
      $ispis .= "<div class='4u'>
                    <div class='slika'>
                        <img src='images/proizvodi/$proizvod->src' alt='$proizvod->alt'/>
                    </div>
                    <div class='cleaner'></div>
                    <div class='naslov'>
                        <h3>$proizvod->nazivProizvoda</h3>
                        <p>$proizvod->sastavProizvoda</p>
                         <p>Kategorije: ";?>
                    

                        <?php 
                         $idProizvod = $proizvod->idProizvoda;
                         $upit = ('SELECT k.naziv as nazivKategorije FROM kategorije k INNER JOIN proizvodKategorija pk ON k.idKategorija=pk.idKategorija INNER JOIN proizvodi p ON pk.idProizvod=p.idProizvod WHERE p.idProizvod=:idProizvod');
 
                         $priprema = $konekcija->prepare($upit);
                         $priprema->bindParam(':idProizvod', $idProizvod);
                         $priprema->execute();
                         $kategorija = $priprema->fetchAll();
                         for($i=0;$i<count($kategorija);$i++){
                           if($i == (count($kategorija) - 1)){
                             $ispis .= $kategorija[$i]->nazivKategorije;
                           }
                           else {
                             $ispis .= $kategorija[$i]->nazivKategorije .', ';
                             }
                         }?>
                        
                
                    <?php 
                    $ispis .= "</p>
                    </div>
                    <div class='cene'>
                        <p><span>$proizvod->cenaProizvoda din</span></p>
                    </div>";
                         @session_start();
                      if(isset($_SESSION['korisnik'])){
                        
                    $ispis .="<h4><a class='dodaj korpa button alt' id='btnDodaj' data-id='$proizvod->idProizvoda' href='#' title='dodaj u korpu'> Dodaj u korpu </a></h4>";
                      }
                $ispis .="</div>";?>
                   
      <?php } 
        echo $ispis;
        ?>