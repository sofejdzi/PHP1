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
		<title>Autor - SANITAS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="keywords" content="kontakt, email, autor, Sofija"/>
		<meta name="description" content="Kontakt autora sajta."/>
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
						<img src="images/autor.jpg" alt="Sofija Stolić 339/17" />
				</div>
								
				<div class="7u 12u$(small)" style="opacity: 1;">
					<h2>Sofija Stolić 339/17 </h2>
					<p>Ukoliko želite da me kontaktirate, to možete uraditi preko email adrese: sofijastolic@gmail.com</p>
				</div>
    		</div>
    </div>
			



                        <!-- Footer -->
						<?php include "futer.php"; ?>
		
				<!-- Scripts -->
					<script src="assets/js/jquery.min.js"></script>
					<script src="assets/js/script.js"></script>
					<script src="assets/js/registracija.js"></script>
	</body>
</html>