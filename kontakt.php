<?php
    ob_start();
    session_start();
	require 'PHPMailer/src/PHPMailer.php'; 
	require 'PHPMailer/src/SMTP.php'; 
	require 'PHPMailer/src/Exception.php'; 
	use PHPMailer\PHPMailer\PHPMailer; 
	use PHPMailer\PHPMailer\Exception; 
 	$mail = new PHPMailer(true);
?>
<!DOCTYPE html>
<!--
	Road Trip by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Kontakt - SANITAS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="keywords" content="kontakt, vreme, hrana"/>
		<meta name="description" content="Za sve informacije možete nas kontaktirati putem telefona, emaila ili kontakt formulara."/>
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

			<h2>Kontaktirajte nas</h2>
			
			<p>Vidljiv rezultat našeg truda i ulaganja jeste što su kupci na srpskom tržištu vremenom stekli veliko i opravdano poverenje u sve proizvode koji nose naš logo ili natpis da smo mi uvoznici, iz čega je naravno rezultirala i velika i sve veća prodaja organskih proizvoda u Srbiji koja raste sa daljom edukacijom stanovništva, kao i neprestanim potvrđivanjem da je njihovo poverenje opravdano. </p>
			<div class="row">
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

				<div class="4u 12u$(small)">
						<dl>
								<dt>Adresa</dt>
								<dd>
									<p>Ukoliko vas zanima naš rad i naša posvećenost ovom poslu kao i zdrava ishrana, možete nas posetiti na adresi: Voždova 76b, Beograd.</p>
								</dd>
								<dt>Radno vreme</dt>
								<dd>
									<p>Radno vreme prodavnice: ponedeljak-petak 8 - 21h, subota: 8 - 15h, nedeljom ne radimo.</p>
								</dd>
								<dt>Kontakt telefon</dt>
								<dd>
									<p>Za sve informacije dostupan Vam je naš korisnički servis 24 časa dnevno, 7 dana u nedelji, na broju 068 51234.
											Razgovori sa agentom korisničkog servisa se naplaćuju 15 RSD po pozivu. </p>
								</dd>
							</dl>
				</div>
							
				<div class="7u 12u$(small)" style="opacity: 1;">
				<?php if(isset($_SESSION['korisnik'])){ ?>
					<form action="#" method="post" name="kontaktForma" id="kontaktForma">

						<div class="field half first">
							<label for="name">Ime i prezime</label>
							<input name="name" id="name" type="text" placeholder="Ime i prezime">
						</div>
						
						<div class="field half">
							<label for="email">Email</label>
							<input name="email" id="email" type="email" placeholder="Email">
						</div>
						<div class="field">
							<label for="message">Poruka</label>
							<textarea name="message" id="message" rows="6" placeholder="Pišite nam..."></textarea>
						</div>
						<ul class="actions">
							<li><input type="button" name="posalji" value="Pošalji" class="button alt" id="btnPosalji"></li><span id="porukaPoslata"></span>
						</ul>
					</form>
					<?php } else{?>
						<h3 class="field">Morate biti prijavljeni da biste kontaktirali administratora.</h3>
					<?php } ?>
					<div class="field"><span id="ispisGresaka"></span>
					</div>
				</div>
			</div>
    	</div>
			



                <!-- Footer -->
				<?php include "futer.php"; ?>
		
				<!-- Scripts -->
					<script src="assets/js/jquery.min.js"></script>
					<script src="assets/js/registracija.js"></script>
					<script src="assets/js/script.js"></script>
					<script src="assets/js/kontakt.js"></script>
					

	</body>
</html>