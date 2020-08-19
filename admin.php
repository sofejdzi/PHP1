<?php
    ob_start();
    session_start();
	include "konekcija.php";
	if(isset($_SESSION['korisnik'])){
		if($_SESSION['korisnik']->idUloga != 1){
			header("Location: proizvodi.php");
		}
		else if($_SESSION['korisnik']->idUloga == 1){ ?>
<!DOCTYPE html>
<!--
	Road Trip by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Admin - SANITAS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="keywords" content="admin, proizvod"/>
		<meta name="description" content="Admin panel."/>
		<meta name="robots" content="index, follow"/>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" 
		integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
        <?php include "header.php" ?>
	    <div class="subheader" id="kontakt"></div>
		<!-- Nav -->
		<nav id="menu">
				<a href="#menu" id="btnNavClose"><span></span></a>
			<ul class="links">
				<li><a href="index.php">Početna</a></li>
				<li><a href="o_nama.php">O nama</a></li>
				<li class="hasSubmenu"><a href="#">Blog</a>
				<ul style="display: none;">
					<li><a href="objave.php#box1">Osnovni principi zdrave ishrane</a></li>
					<li><a href="objave.php#box2">Posebna biološka vrednost</a></li>
					<li><a href="objave.php#box3">Biološki kvalitet hrane</a></li>
					<li><a href="objave.php#box4">Voda i njena važnost</a></li>
				</ul>
				</li>
				<li><a href="proizvodi.php">Proizvodi</a></li>
                <li><a href="kontakt.php">Kontakt</a></li>
                <li><a href="anketa.php">Anketa</a></li>
			</ul>
		</nav>        
        

        <div id="main" class="container ">

            <h2>Admin panel</h2>
            
            
            <div id="adminTabele" class="row uniform">


                <div class="9u 12u$(small)" id="prozorLogovanje">
                    <form name="formLog" action="uloguj.php" method="POST">
                        <table>
                            <tr>
                                <td colspan="2">
                                    <span><a id="zatvoriLog" href="#"><i class="fas fa-times"></i></a></span>
                                </td>
                            </tr>
                            <tr>
                                <th colspan="2">PRIJAVITE SE</th>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" name="tbEmail" id="logEmail" placeholder="Email"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="password" name="tbLozinka" id="logLozinka" placeholder="Lozinka"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" name="btnLog" id="btnLog" class="button alt" value="Logovanje"/>
                                    <p id="logGreske"></p>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>


                <div class="9u 12u$(small)" id="prozorRegistracija">
                    <form name="formReg" action="registruj.php"  method="POST">
                        <table>
                            <tr>
                                <td colspan="2">
                                    <span><a id="zatvoriReg" href="#"><i class="fas fa-times"></i></a></span>
                                </td>
                            </tr>
                            <tr>
                                <th colspan="2">NAPRAVITE NALOG</th>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" name="tbIme" id="ime" placeholder="Ime"/>
                                </td>
                                <td>
                                    <input type="text" name="tbPrezime" id="prezime" placeholder="Prezime"/>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="text" name="tbEmailReg" id="regEmail" placeholder="Email"/>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="password" name="tbLozinkaReg" id="regLozinka" placeholder="Lozinka" />
                                </td>
                            </tr>
                            <tr>
                                <td  colspan="2">
                                    <input type="submit" name="btnReg" id="btnRegi" class="button alt"  value="Registracija"/>
                                </td>
                            </tr>
                            <tr>
                            <td colspan="2">
                                <p id="registracija"></p>
                            </td>
                            </tr>
                        </table>
                    </form>


            

                </div>
                
                <div id="formaZaInsert" class="6u 12u$(medium)">
                    <form action="ubaciProizvod.php" id="formularInsert" name="formularInsert" method="POST" enctype="multipart/form-data">
                        <table id="tabelaDodajProizvod">
                            <tr>
                                <th>Dodajte proizvod</th>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" name="tbNazivPro" id="nazivPro" placeholder="Naziv proizvoda"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select name="tbKategorijaPro" id="kategorijaPro">
                                        <option value="Izaberite">-Izaberite kategoriju-</option>
                                        <?php
                                        include "dodajKategorije.php";
                                        ?>
                                    </select>
                                </td>
                            </tr>  
                            <tr>
                                <td>
                                    <input type="text" name="tbSastavPro" id="sastavPro" placeholder="Sastav proizvoda" />
                                </td>
                            </tr>
                            <tr>  
                                <td>
                                    <input type="file" name="tbSlikaPro" id="slikaPro"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" name="tbCena" id="cenaPro" placeholder="Cena" />
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <input type="submit" name="btnDodajPro" id="dodajPro" class="button alt" value="Dodajte proizvod"/>

                                </td>
                            </tr>
                
                        </table>
                    </form>
                </div>
                <div id="formaZaUpdate" class="6u 12u$(medium)">
                    <form action="update.php" id="formularUpdate" name="formularUpdate" method="POST" enctype="multipart/form-data">
                            <table id="tabelaIzmena">
                                    <tr>
                                        <th>Izmenite proizvod</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" name="tbNazivIzm" id="nazivIzm" placeholder="Naziv proizvoda"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" name="tbSastavIzm" id="SastavIzm" placeholder="Sastav" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" name="tbCenaIzm" id="cenaIzm" placeholder="Cena" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type = "hidden" id = "sakriveno" name="sakriveno"/></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="submit" name="btnIzmeniPro" id="izmeniPro" class="button alt" value="Izmenite proizvod"/>
                                        </td>
                                    </tr>
                            </table>
                    </form>
                </div>

                <div id = "tabelaPro">
                    <table id="tabPro">
                        <tr>
                            <th>Slika</th>
                            <th>Naziv</th>
                            <th>Sastav</th>
                            <th>Cena</th>
                            <th>Kategorija</th>
                            <th>Promeni</td>
                        </tr>
                        <?php
                            $upitTabela = "SELECT p.idProizvod as idProizvoda, p.naziv as nazivProizvoda, p.sastav as sastavProizvoda, p.cena as cenaProizvoda, s.src as src, s.alt as alt FROM proizvodi p INNER JOIN slike s ON p.idSlika=s.idSlika";
                            $priprema = $konekcija->query($upitTabela);
                            $proizvodi = $priprema->fetchAll();
                        
                            foreach($proizvodi as $pro): ?>
                                <tr>   
                                    <td>
                                    <img src='images/proizvodi/<?php echo $pro->src ?>' alt='<?php echo $pro->alt ?>'/>
                                    </td> 
                                    <td>
                                        <?php echo $pro->nazivProizvoda ?>
                                    </td>   
                                    <td>
                                        <?php echo $pro->sastavProizvoda ?>
                                    </td> 
                                    <td>
                                        <?php echo $pro->cenaProizvoda ?>
                                    </td> 
                                    <td>
										<?php 
											$idPro = $pro->idProizvoda; 
											$upit = "SELECT k.idKategorija, k.naziv as kategorijaNaziv FROM kategorije k INNER JOIN proizvodkategorija pk ON k.idKategorija=pk.idKategorija WHERE pk.idProizvod=:idProizvod";
											$priprema = $konekcija->prepare($upit);
											$priprema->bindParam(':idProizvod', $idPro);
											$priprema->execute();
											$kategorija = $priprema->fetchAll();
											for($i=0;$i<count($kategorija);$i++){
												if($i == (count($kategorija) - 1)){ ?>
												  <p> <?php echo $kategorija[$i]->kategorijaNaziv?></p>
												<?php }
												else { ?>
												  <p> <?php echo $kategorija[$i]->kategorijaNaziv.', ' ?></p>
												  <?php }
											  }?>
									</td>
                                    <td>
                                        <input type="button" class="izmena" class="button alt" data-id=" <?php echo $pro->idProizvoda ?> " value = "Izmeni"  /><br> <br>
                                        <a href="<?php echo ('php/brisanje.php?id=' .$pro->idProizvoda); ?>"><input type="button" class="obrisi" class="button alt"  value = "Obriši" /></a>
                                    </td>
                                </tr>
                        <?php endforeach; ?>
                        
                    </table>
                </div>

            
            </div>
        </div>
			



                <!-- Footer -->
				<?php include "futer.php"; ?>
		
        <!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/script.js"></script>
            <script src="assets/js/registracija.js"></script>
            <script src="assets/js/admin.js"></script>
	</body>
</html>
        <?php }}else{
	header("Location: proizvodi.php");
}?>