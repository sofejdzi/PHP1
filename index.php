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
		<title>Zdrava hrana SANITAS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="keywords" content="hrana, zdravo, organi, zdrava hrana, vrednost"/>
		<meta name="description" content="Široka paleta ukusnih proizvoda iz oblasti zdrave hrane proizvedenih po najvišim standardima, prilagođenim potrebama savremenog čoveka."/>
		<meta name="robots" content="index, follow"/>

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" 
		integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
		<?php include "header.php" ?>
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

		<!-- Banner -->
		<!--
			Note: To show a background image, set the "data-bg" attribute below
			to the full filename of your image. This is used in each section to set
			the background image.
		-->
		<section id="banners" class="bg-img" data-bg="banner.jpg" style="background-image: url('images/banner.jpg');">
			<div class="inners">
				<header class="module">
					<h1>Sanitas zdrava hrana</h1>
				</header>
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
			</div>
			
		</section>
   
		<!-- One -->
		
			<section id="one" class="wrapper bannerPost bg-img" data-bg="banner2.jpg" style="background-image: url('images/banner2.jpg');">
				<div class="inners">
					<article class="box module">
						<header>
							<h2>Osnovni principi zdrave ishrane</h2>
							<p>12.07.2019</p>
						</header>
						<div class="content">
							<p>Hrana izgrađuje, održava i osnažuje naše fizičko telo. Međutim, utisci koje čulima stičemo iz naše okoline, a takođe i iz našeg unutrašnjeg sveta - naše misli i osećanja - predstavljaju takođe svojevrsnu hranu, zahvaljujući kojoj se razvija naše unutrašnje, odnosno duhovno biće. I ova, takozvana suptilna hrana, može biti prirodna ili neprirodna, zdrava hrana ili nezdrava hrana. Bili mi toga svesni ili ne, naš organizam i celo naše biće ima usađenu težnju da se hrani zdravo - na spoljašnjem fizičkom i unutrašnjem duhovnom nivou. Te suptilne nagoveštaje koji dopiru iz unutrašnjosti našeg bića godinama možemo nesvesno da prenebregavamo, ili čak da ih namerno ignorišemo. Ali, tada ćemo se suočiti sa posledicom narušavanja prirodnog zakona, koja se ispoljava kroz opšte nezadovoljstvo, osećaj frustracije, bolest i prevremeno starenje i propadanje organizma.</p>
						</div>
						<footer>
							<a href="objave.php#box1" class="button alt">Pročitaj više</a>
						</footer>
					</article>
				</div>
				
			</section>

		<!-- Two -->
			<section id="two" class="wrapper bannerPost bg-img module" data-bg="banner5.jpg" style="background-image: url('images/banner5.jpg');">
				<div class="inners">
					<article class="box module">
						<header>
							<h2>Posebna biološka vrednost</h2>
							<p>09.12.2018</p>
						</header>
						<div class="content">
							<p>Smatra se da je voće najvrednija hrana koja se može uneti u organizam, jer sadrži idealnu ravnotežu pet bitnih elemenata koji su neophodni organizmu: glukoza (90%), aminokiseline(4-5%), minerali (3-4%), masne kiseline (1%) i vitamini (do 1%). Pored toga, za njegovu probavu nije potrebna dodatna energija, što znači da štedi energiju organizma i pomaže njegovom pročišćavanju. Takođe ima i sposobnost da neutrališe štetne kiseline koje se stvaraju u telesnim sistemima. Kada se govori o voću, podrazumeva se isključivo voće u svežem stanju, jer, zbog svoje delikatne prirode, kuvano i prerađeno voće u potpunosti gubi pomenuta svojstva i dovodi do povećanja toksičnosti i kiselosti organizma. Zbog visokog sadržaja vode, svež paradajz i krastavac mogu se kombinovati sa voćem i uzimati i tokom perioda asimilacije i eliminacije.</p>
						</div>
						<footer>
							<a href="objave.php#box2" class="button alt">Pročitaj više</a>
						</footer>
					</article>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper bannerPost bg-img module" data-bg="banner4.jpg" style="background-image: url('images/banner4.jpg');">
				<div class="inners module">
					<article class="box">
						<header>
							<h2>Biološki kvalitet hrane</h2>
							<p>01.01.2020</p>
						</header>
						<div class="content">
							<p>Bioenergetska vrednost hrane predstavlja životnu energiju, vitalnost namirnica i energetski potencijal koji nam određena hrana biljnog ili životinjskog porekla daje prilikom unošenja u organizam.Bioenergetska vrednost hrane zavisi, pre svega, od porekla proizvodnje namirnica (ekološki ili konvencionalni način proizvodnje), zatim, samog kvaliteta (vrsta, sorta) i svežine namirnica (što zavisi od načina čuvanja i lagerovanja i od vremenskog razmaka između branja i korišćenja). Ekološka hrana ima neuporedivo veću biološku vrednost u odnosu na namirnice proizvedene na konvencionalan način; veći sadržaj suve  materije, nije veštački naduvana vodom i u sebi sadrži veći procenat vitamina i biološki aktivnih materija uz znatno niži sadržaj nitrata (koji su izazivači kancera).</p>
						</div>
						<footer>
							<a href="objave.php#box3" class="button alt">Pročitaj više</a>
						</footer>
					</article>
				</div>
				
			</section>

		<!-- Four -->
			<section id="four" class="wrapper bannerPost bg-img module" data-bg="banner3.jpg" style="background-image: url('images/banner3.jpg');">
				<div class="inners module">
					<article class="box">
						<header>
							<h2>Voda i njena važnost</h2>
							<p>03.05.2019</p>
						</header>
						<div class="content">
							<p>Postoji jedna namirnica koju mi uzimamo zdravo za gotovo, ali čija važnost nadilazi važnost svih drugih. To je obična, čista voda, koju neki prezrivo nazivaju "česmovača". Ali, imajte u vidu da čovek može da gladuje 40 dana, pa je čak bilo eksperimenata i sa 100 dana gladovanja, ali bez vode ne može da izdrži ni 10 dana. Nedovoljno unošenje vode postepeno i neprimetno menja fiziologiju organizma i dovodi do niza hroničnih degenerativnih promena tkiva i organa. Verovali ili ne, ali čak i takve bolesti kao što su čir na želucu, visok pritisak, holesterol, artroza, alergije i astma mogu biti posledice konstantne dehidracije.</p>
						</div>
						<footer>
							<a href="objave.php#box4" class="button alt">Pročitaj više</a>
						</footer>
					</article>
				</div>
			</section>
		

		<!-- Footer -->
			<?php include "futer.php"; ?>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/script.js"></script>
			<script src="assets/js/registracija.js"></script>
	</body>
</html>