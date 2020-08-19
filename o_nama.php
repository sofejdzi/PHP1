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
		<title>O nama - SANITAS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="keywords" content="Sanitas, hrana, zdrava, prodavnica"/>
		<meta name="description" content="Prodavnica zdrave hrane, biljna apoteka, superhrana, začini i pikantni dodaci."/>
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


				<!-- Content -->
					<h2>Više o nama</h2>
                    <p>Danas gotovo da i nema potrebe naglašavati vrednost organske hrane. Šta vrede i najzdravije namirnice, ako su višestruko zagađene. Onima koji se zdravije hrane i čiji su svakodnevni osnov ishrane žitarice i mahunarke, veoma je bitno da mogu da ih nađu u organskom obliku. Upravo zbog toga je Sanitas zdrava hrana odlučila da se orijentiše u ovom pravcu. Zahvaljujući upravo Sanitas zdravoj hrani ljubitelji zdravije ishrane konačno mogli da po povoljnim cenama, u svojim prodavnicama zdravije hrane nabave gotovo sve žitarice i mahunarke koje se koriste u svakodnevnoj ishrani pa čak i one “egzotičnije” - kinou (specijalnu staru vrstu žitarica), azuki, mung i sl., ali i veoma zdrava organska ulja od kokosa i palme.</p>
                    <p>Gde možete naći naše proizvode? Između ostalih mesta, organski program (žitarice, mahunarke, semenke), paletu superhrane (trave žitarica, mikroalge, maku, psilium i sl), Neera dijetu, sertifikovane organske proizvode od soje (tofu, tempeh), ukusni pšenični sejtan i zdravije slatkiše i ostale artikle iz prodajnog repertoara preduzeća Sanitas možete naći u svim bolje snadbevenim prodavnicama zdrave hrane.</p>
					<div class="row">
						
						<!-- Break -->
						<div class="4u 12u$(medium)">
							<h3>Uslužnost</h3>
							<p>Naše osoblje je ljubazno, edukovano i potpuno posvećeno poslu, tako da će Vas dočekati sa osmehom i u svakom trenutku nastojati da Vam pomogne. Naši posetioci su različiti po mnogo čemu, neki dolaze svaki dan, neki jednom nedeljno, a neki ponekad, kada se nađu u blizini. Razlikuju se po godinama starosti, po polu, ali imaju jednu zajednicku osobinu, brinu o sebi. </p>
						</div>
						<div class="4u 12u$(medium)">
                                <h3>Savetovalište</h3>
                                <p> Mi nismo još jedna prodavnica u nizu, mi smo Vaš saveznik, savetnik, posrednik i vodič kroz svet zdrave ishrane. Odlučnost u poslovanju, praćenje i predviđanje trendova, ulaganje u kvalitet i čvrsto verovanje u harmoničan odnos okruženja u kojem živimo, doveli su nas do vodeće pozicije distributera proizvoda zdrave hrane, na području Srbije, sa sopstvenim pogonom.</p>
                            </div>
						<div class="4u$ 12u$(medium)">
							<h3>Iskustvo</h3>
							<p> Zdrava hrana Sanitas je preduzeće sa višegodišnjim iskustvom. Svesni smo uticaja opasnih i toksičnih materija, koje se dosta koriste u hrani, kozmetici i drugim industrijama i možemo doprineti odgovornoj akciji za opšte dobro. Proizvodnja i korišćenje hrane, kozmetike i proizvoda za čišćenje bez štetnih hemikalija pravi je put za nas. </p>
						</div>
					</div>
                    <div class="box alt">
                            <div id="onamaSlike" class="row 50% uniform">
                                
                            </div>
                        </div>

                    </div>

                        <section id="appSection" class="wrapper bg-img" style="background-image: url('images/banner2.jpg');">
                            <div class="inners">
                                <div id="articles">
                                <article id="boxApp" class="box">
                                    <header>
                                        <h2>Download-ujte našu aplikaciju za računanje kalorija</h2>
                                    </header>
                                    <div class="content">
                                        <p>Hrana izgrađuje, održava i osnažuje naše fizičko telo. Međutim, utisci koje čulima stičemo iz naše okoline, a takođe i iz našeg unutrašnjeg sveta - naše misli i osećanja 
                                        </p>
                                    </div>
                                    <footer>
                                        <a href="https://play.google.com/store/apps/details?id=com.sillens.shapeupclub&hl=en" class="button alt">Skinite aplikaciju</a>
                                    </footer>
                                </div>
                            </div>
                        </section>

			



        <!-- Footer -->
        <?php include "futer.php"; ?>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/script.js"></script>
			<script src="assets/js/registracija.js"></script>
			<script type="text/javascript" src="vanillabox/jquery.vanillabox-0.1.7.min.js"></script> 
			<script type="text/javascript" src="vanillabox/jquery.vanillabox.js"></script> 
	</body>
</html>