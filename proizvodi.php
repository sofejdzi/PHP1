
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
		<title>Proizvodi - SANITAS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="keywords" content="proizvodi, hrana, proizvod, zdravo, cena"/>
		<meta name="description" content="Pogledajte ponudu i cene iz oblasti Zdrava hrana u Beogradu."/>
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


        <section id="posts" class="wrapper bg-img" style="background-image: url('images/banner2.jpg');">
            <div class="inners">
                <div id="articles">
					<article id="box1" class="ak box">
						<div class="row uniform">
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
							<div class="9u 12u$(small)">
								<input type="text" name="query" id="query" value="" placeholder="Pretraga">
							</div>
							<div class="3u$ 12u$(small)">
								<input type="submit" value="Pretraži" id="btnPretraga" class="fit">					
							</div>
							<div class="select-wrapper">
								<select name="proizvodi" id="sortiraj">
									<option value="sort">- Sortiraj -</option>
									<option value="a-z">Naziv: A-Z</option>
									<option value="z-a">Naziv: Z-A</option>
									<option value="low-high">Cena: rastuće</option>
									<option value="high-low">Cena: opadajuće</option>
								</select>
							</div>
							
							<ul class="icons">
								<li><a href="#" class="button alt small" id="sve">Sve</a></li>
								<li><a  class="button alt small" id="kat">Kategorije <span id="katStrelica"><i class="fas fa-angle-down"></i></span></a>
									<div class="row uniform">
										<ul class="icons" id="kategorije">
										<?php
											$upit = ("SELECT idKategorija as kategorijaId, naziv as nazivKategorije FROM kategorije");
											$priprema = $konekcija->query($upit);
											$kategorije = $priprema->fetchAll();
											foreach($kategorije as $kategorija):
										?>
										<li><a href="#" class="button alt small" data-id="<?= $kategorija->kategorijaId?>"><?= $kategorija->nazivKategorije?></a></li>
										<?php
											endforeach;
										?>
										</ul>
									</div>
								</li>
							</ul>
	
						</div>
					</article>
					<article id="box1" class="ak box">
						<header>
							<h2>Proizvodi u ponudi</h2>
						</header>
						<div class="box alt"> 
							<div id="proizvodi" class="row 50% uniform">
								<?php
									include "dohvatiProizvode.php";
								?>
							</div>
							<div class="cleaner"></div>
						</div>
						<div id="paginacija">
							<ul>	
								<?php 
									$upit = "SELECT COUNT(*) AS proizvodi FROM proizvodi";
									$priprema = $konekcija->query($upit);
									$rezultat=$priprema->fetch();
									$proizvodi = $rezultat->proizvodi; 
									$linkovi = ceil($proizvodi / 6);  
									for($i=0; $i<$linkovi; $i++){ ?>				  
										<li><a href="#" class ="numeracija" data-num="<?php echo $i+1 ?>"> <?php echo $i+1 ?> </a></li> 				
									<?php 
									} 
									?> 
							</ul> 
		 				</div>
					</article>
				</div>
			</div>
		</section>
			


                <!-- Footer -->
				<?php include "futer.php"; ?>
		
				<!-- Scripts -->
					<script src="assets/js/jquery.min.js"></script>
					<script src="assets/js/script.js"></script>
					<script src="assets/js/registracija.js"></script>
					<script src="assets/js/proizvodi.js"></script>
					<script src="assets/js/korpa.js"></script>
	</body>
</html>