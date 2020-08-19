<?php
    ob_start();
    session_start();
    include "konekcija.php";
?>
<!DOCTYPE html>
<!--
	Road Trip by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Anketa - SANITAS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="keywords" content="anketa, proizvodi"/>
		<meta name="description" content="Anketa za korisnike. Koji proizvod Vam se najviše dopada?"/>
		<meta name="robots" content="index, follow"/>

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" 
		integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="vanillabox/theme/bitter/vanillabox.css">
	</head>
	<body>

		<!-- Header -->
		<?php include "header.php" ?>
		<div class="subheader" id="oNama"></div>
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
        

        <div id="main" class="container">
			
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

            <div id="anketa" class="container">
			
						<h2>Anketa</h2>
					
                <?php
					if(isset($_SESSION['korisnik'])){
						$id=$_SESSION['korisnik']->idKorisnik;
						$upit='SELECT * FROM korisnikanketa WHERE idKorisnik=:id';
						$priprema=$konekcija->prepare($upit);
						$priprema->bindParam(":id", $id);
						$rezultat=$priprema->execute();
						$redovi=$priprema->rowCount();
						if($redovi==0){
					
				?>
				<form method="POST" action="#" name="formaAnketa">
					<table id="tabelaAnketa">
						<th>Popunite anketu:</th>
						<tr>
							<td colspan="10">Omiljena zdrava hrana?<br><br>
								<input type="radio" name="rb1" id="rbAnketa1" value="Žitarice">Žitarice<br>
								<input type="radio" name="rb1" id="rbAnketa2" value="Keks">Keks<br>
								<input type="radio" name="rb1" id="rbAnketa3" value="Kolači">Kolači<br>
								<input type="radio" name="rb1" id="rbAnketa4" value="Slano">Slano<br>
								<input type="radio" name="rb1" id="rbAnketa5" value="Slatko">Voćno<br>
								<input type="radio" name="rb1" id="rbAnketa6" value="OStalo">Ostalo
							</td>
						</tr>
						<tr>
							<td>Da li ste na našem sajtu našli sve potrebne informacije vezane za traženi proizvod?<br><br>
								<input type="radio" name="rb2" id="rbAnketaDa" value="Da">Da<br>
								<input type="radio" name="rb2" id="rbAnketaNe" value="Ne">Ne
							</td>
						</tr>
						<tr id="poslednji">
							<td><input type="submit" value="Pošalji" id="posaljiAnketu"/></td>
							<p id="upozorenje"></p>
						</tr>
					</table>
				</form>
                <?php } else{
                    $upit= "SELECT * FROM anketa";
                    $priprema=$konekcija->prepare($upit);
                    $priprema->execute();
                    
                    ?>
                    <table>

                        <tr>
					<td>
							<?php
								$kategorije= array("Žitarice", "Keks", "Kolači", "Slano", "Voćno", "Ostalo"); 
								foreach($kategorije as $kategorija){
									$upit = "SELECT * FROM anketa WHERE kategorija=kategorija"; 
									$priprema=$konekcija->prepare($upit);    
									$priprema->bindParam(':kategorija', $kategorija);                               
									$priprema->execute();  
									
								} ?>
									
								
						</td>
                        </tr>
                        
                        <tr>
                        <td>
							<?php
								$odgovori = array("Da", "Ne"); 
								foreach($odgovori as $odgovor){
									$upit2 = "SELECT * FROM anketa WHERE sajt=:odgovori"; 
									$priprema=$konekcija->prepare($upit);    
									$priprema->bindParam(':odgovori', $odgovor);                               
									$priprema->execute();  
									
								} ?>
							</td>
                        </tr>
                    </table>
					<p>
						<?php 
						echo "Uspešno ste glasali." 
						?>
					</p>
                <?php } ?>
				<?php } 
				else{ ?>
					
						<p id="morateSeLogovati">Morate biti prijavljeni da biste učestvovali u anketi.</p>
					
				<?php } ?>
            </div>

        </div>

        <!-- Footer -->
        <?php include "futer.php"; ?>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/script.js"></script>
			<script src="assets/js/registracija.js"></script> 
			<script src="assets/js/anketa.js"></script> 
			
	</body>
</html>