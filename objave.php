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
		<title>Blog - SANITAS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="keywords" content="ishrana, zdravo, hrana, blog"/>
		<meta name="description" content="Blog o ishrani, zdravlju i zdravim stilovima života. Ta hrana je toliko zdrava da je možemo smatrati gotovo lekom."/>
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
        

		<!-- Content -->
		<!--
			Note: To show a background image, set the "data-bg" attribute below
			to the full filename of your image. This is used in each section to set
			the background image.
		-->
			<section id="posts" class="wrapper bg-img" style="background-image: url('images/banner2.jpg');">
				<div class="inners">
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
					<div id="articles">
					<article id="box1" data-article="1" class="ak box">
						<header>
							<h2>Osnovni principi zdrave ishrane</h2>
							<p>12.07.2019</p>
						</header>
						<div class="content">
							<p>Hrana izgrađuje, održava i osnažuje naše fizičko telo. Međutim, utisci koje čulima stičemo iz naše okoline, a takođe i iz našeg unutrašnjeg sveta - naše misli i osećanja - predstavljaju takođe svojevrsnu hranu, zahvaljujući kojoj se razvija naše unutrašnje, odnosno duhovno biće. I ova, takozvana suptilna hrana, može biti prirodna ili neprirodna, zdrava hrana ili nezdrava hrana. Bili mi toga svesni ili ne, naš organizam i celo naše biće ima usađenu težnju da se hrani zdravo - na spoljašnjem fizičkom i unutrašnjem duhovnom nivou. Te suptilne nagoveštaje koji dopiru iz unutrašnjosti našeg bića godinama možemo nesvesno da prenebregavamo, ili čak da ih namerno ignorišemo. Ali, tada ćemo se suočiti sa posledicom narušavanja prirodnog zakona, koja se ispoljava kroz opšte nezadovoljstvo, osećaj frustracije, bolest i prevremeno starenje i propadanje organizma.</p>

							<p>Hrana kojom se napajaju naša spoljašnja čula, veoma je važna i treba izabrati prostor i okruženje koje će nam omogućiti prirodno življenje. Gradska vreva i gužva naseljenih mesta predstavlja, zapravo, neprirodno boravište. Svež vazduh, vibracija nezagađene prirodne okoline, planine i predeli blizu mora, jezera ili reka, mesta gde postoji mnogo parkova, prostranih polja, gde vlada mir i tišina, predstavljaju idealno boravište za čoveka.</p>

							<p>Ukoliko upražnjavamo sport i fizičke aktivnosti, telo će nam prirodno zahtevati unošenje visokoenergetske hrane i pravilan izbor namirnica. Pravilna i zdrava ishrana podrazumeva da je u svoj način života neophodno uvrstiti najmanje 20 minuta fizičkih aktivnosti dnevno (gimnastika, trčanje, vožnja bicikla, hata joga, planinarenje, brza šetnja) i što više boraviti na svežem vazduhu, aktivno se odmarati i relaksirati. Naše ljudsko okruženje bitno utiče na celokupno naše življenje, pa je neophodno orijentisati se na izbor društva koje deluje harmonično, koje nam nudi mir, budi u nama osećaj mira i razvija našu prirodnu ljubav prema svetu i ljudima - a to su elementi koji su zdrava ishrana za naše duhovno biće. Zato je prisustvo duhovnih, prosvetljenih ljudi u jednoj društvenoj zajednici od izuzetnog značaja za duhovno zdravlje i materijalni razvoj čoveka.</p>

							<p>Zapravo, koren svih bolesti leži u psihičkom stanju pojedinca, u njegovoj izloženosti stresnim situacijama koje izaziva uzimanje duhovno nezdrave hrane. Najvažnije je imati svest da mi to možemo promeniti i da od nas, samo od nas, zavisi sve što nas okružuje.</p>

							<p>Pokušajte da uz punu svest i veru, zdrava ishrana postane vaša svakodnevnica i princip zdravog života u celini. Promenite svoje navike i unesete novinu u svoje življenje. Bićete iznenađeni koliko radosti, spontanosti i zadovoljstva može doneti poklanjanje pažnje sopstvenom biću, kako na fizičkom, tako i na duhovnom, psihološkom i mentalnom nivou.</p>
						</div>
					</article>

					<article id="box2" data-article="2" class="box">
						<header>
							<h2>Posebna biološka vrednost</h2>
							<p>09.12.2018</p>
						</header>
						<div class="content">
								<p>Smatra se da je voće najvrednija hrana koja se može uneti u organizam, jer sadrži idealnu ravnotežu pet bitnih elemenata koji su neophodni organizmu: glukoza (90%), aminokiseline(4-5%), minerali (3-4%), masne kiseline (1%) i vitamini (do 1%). Pored toga, za njegovu probavu nije potrebna dodatna energija, što znači da štedi energiju organizma i pomaže njegovom pročišćavanju. Takođe ima i sposobnost da neutrališe štetne kiseline koje se stvaraju u telesnim sistemima. Kada se govori o voću, podrazumeva se isključivo voće u svežem stanju, jer, zbog svoje delikatne prirode, kuvano i prerađeno voće u potpunosti gubi pomenuta svojstva i dovodi do povećanja toksičnosti i kiselosti organizma. Zbog visokog sadržaja vode, svež paradajz i krastavac mogu se kombinovati sa voćem i uzimati i tokom perioda asimilacije i eliminacije.</p>

								<p>U periodu uzimanja hrane preporučuje se uzimanje voća i sokova najmanje 30 minuta pre ostale hrane (nikad neposredno nakon obroka), kako se hrana u želucu ne bi mešala. Mešanje hrane sa voćem dovodi do fermentacije, kojom se gube hranljive materije, i otežava se i usporava probava. Nakon voća, najbolje je uzeti koktel sokova od svežeg povrća - šargarepa, cvekla, peršun, celer, kupus, karfiol, keleraba, malo parče sirovog krompira (posebno je važno ne kombinovati ga sa voćem). Nakon 10 minuta od uzimanja sokova sledi sveza salata, a zatim pravilno kombinovano jelo. Nepravilno kombinovanje hrane dovodi do poremećaja ciklusa asimilacije i eliminacije. Kada se hrana pravilno kombinuje, organizam može da je potpuno razgradi, apsorbuje i iskoristi sve hranljive materije.</p>
	
								<p>Ukoliko upražnjavamo sport i fizičke aktivnosti, telo će nam prirodno zahtevati unošenje visokoenergetske hrane i pravilan izbor namirnica. Pravilna i zdrava ishrana podrazumeva da je u svoj način života neophodno uvrstiti najmanje 20 minuta fizičkih aktivnosti dnevno (gimnastika, trčanje, vožnja bicikla, hata joga, planinarenje, brza šetnja) i što više boraviti na svežem vazduhu, aktivno se odmarati i relaksirati. Naše ljudsko okruženje bitno utiče na celokupno naše življenje, pa je neophodno orijentisati se na izbor društva koje deluje harmonično, koje nam nudi mir, budi u nama osećaj mira i razvija našu prirodnu ljubav prema svetu i ljudima - a to su elementi koji su zdrava ishrana za naše duhovno biće. Zato je prisustvo duhovnih, prosvetljenih ljudi u jednoj društvenoj zajednici od izuzetnog značaja za duhovno zdravlje i materijalni razvoj čoveka.</p>
	
								<p>Svaka hrana koja nije voće ili povrće naziva se koncentrisana hrana. Koncentrisana hrana se ne treba uzimati istovremeno, jer to otežava njenu probavu. Na primer: hleb (po mogućstvu prepečen i napravljen od integralnih žitarica) ne treba kombinovati sa krompirom, pirinčem, pasuljem, graškom, boranijom, testeninama, jajima, mlekom i sirevima, niti ove namirnice međusobno treba mešati. Svaka od ovih namirnica može se kombinovati sa masnoćama (gi-prečišćeni puter, hladno ceđena ulja, maslac, puteri od semenki, suncokret, bundeva, susam, kikiriki) i sirovim ili barenim povrćem (salate, variva). Preporučuje se zamena sirćeta limunovim sokom ili voćnim i jabukovim sirćetom.</p>
						</div>
					</article>


					<article id="box3" data-article="3" class="box">
						<header>
							<h2>Biološki kvalitet hrane</h2>
							<p>01.01.2020</p>
						</header>
						<div class="content">
								<p>Bioenergetska vrednost hrane predstavlja životnu energiju, vitalnost namirnica i energetski potencijal koji nam određena hrana biljnog ili životinjskog porekla daje prilikom unošenja u organizam.Bioenergetska vrednost hrane zavisi, pre svega, od porekla proizvodnje namirnica (ekološki ili konvencionalni način proizvodnje), zatim, samog kvaliteta (vrsta, sorta) i svežine namirnica (što zavisi od načina čuvanja i lagerovanja i od vremenskog razmaka između branja i korišćenja). Ekološka hrana ima neuporedivo veću biološku vrednost u odnosu na namirnice proizvedene na konvencionalan način; veći sadržaj suve  materije, nije veštački naduvana vodom i u sebi sadrži veći procenat vitamina i biološki aktivnih materija uz znatno niži sadržaj nitrata (koji su izazivači kancera).</p>

								<p>Metoda osetljive kristalizacije na slikovit način prikazuje životnu snagu u živim organizmima. Prema ovom metodu po rasporedu kristala, koji obrazuje svaki živi organizam, mogu se utvrditi poreklo proizvodnje i biološki kvalitet namirnica. Tako, kod namirnica ekološke proizvodnje kristali su izražajni, vidljivi i njihov raspored je pravilan i obrazuje harmoničnu, prepoznatljivu sliku (jer se kristali grupišu po određenom redu i prema centru), dok je kod hemijske proizvodnje taj raspored haotičan i nepravilan, kristali su slabi, jedva vidljivi i ne postoji nikakav red. To znači da u prvom slučaju postoji određena snaga koja je sposobna da kristale grupiše i usmeri, dok u drugom te snage nema. To je upravo snaga koja i ljudskom organizmu daje životnu energiju i sposobnost rasta, razvoja i održava i prirodni imunitet i otpornosti na bolesti.</p>
	
								<p>Prirodno proizvedena hrana ima svoje vidljive znake. Pre svega, njena boja je prirodnija, namirnice imaju određenu kvalitetnu tvrdoću (a ne naduvenost vodom), nepravilnijeg su oblika, a ponekad vidite i tragove crvića. Na primer, šargarepu ćete prepoznati tako što joj je boja tamnija, a srčika u sredini uža. Ukoliko je probate ima slađi, prirodniji ukus. Biodinamičari vode računa i o tome da kosmički principi učestvuju u procesu proizvodnje i gajenja namirnica.</p>
						</div>
					</article>


					<article id="box4" data-article="4" class="box">
						<header>
							<h2>Voda i njena važnost</h2>
							<p>03.05.2020</p>
						</header>
						<div class="content">
								<p>Postoji jedna namirnica koju mi uzimamo zdravo za gotovo, ali čija važnost nadilazi važnost svih drugih. To je obična, čista voda, koju neki prezrivo nazivaju "česmovača". Ali, imajte u vidu da čovek može da gladuje 40 dana, pa je čak bilo eksperimenata i sa 100 dana gladovanja, ali bez vode ne može da izdrži ni 10 dana. Nedovoljno unošenje vode postepeno i neprimetno menja fiziologiju organizma i dovodi do niza hroničnih degenerativnih promena tkiva i organa. Verovali ili ne, ali čak i takve bolesti kao što su čir na želucu, visok pritisak, holesterol, artroza, alergije i astma mogu biti posledice konstantne dehidracije.</p>

								<p>Savremeni čovek živi u iluziji da ne može da dehidrira jer mu je voda uvek pri ruci - dovoljno je da okrene slavinu. Međutim, zanemarivanje čiste vode i njena zamena tzv. "tečnostima", kako mi volimo da nazivamo kafu, alkohol, razne "kole" i sokove, neumitno vodi dehidraciji, jer pomenuti napici ne mogu da zamene čistu vodu u organizmu. A njihovo stalno konzumiranje, nažalost, na kraju dovodi i do gubitka osećaja za žeđ, i do toga da čovek zameni osećaj žedji sa osećajem gladi, pa jede, umesto da pije vodu - što je pogubno po organizam.
	
								<p>Da bismo izbegli ove nevolje, potrebno je da ustanovimo svesnu disciplinu da pijemo 2 litra ili 8 običnih čaša vode dnevno, čak i ako mislimo da nismo žedni.</p>
	
								<p>Naravno, čista izvorska voda bi bila najbolji izbor - kad bi nam bila dostupna. Na nesreću, u savremenim uslovima života ona to nije. Flaširana voda, čak i ako potiče iz najčistijih izvora, ima veštački ukus, koji joj daje sama ambalaža. Sa tim ukusom u nju, nažalost, dospevaju i makromolekuli plastike, što nije zdravo. Zato preporučujem da ipak koristite vodu iz česme, ali filtriranu ili struktuiranu na takav način da je to čini znatno zdravijom. Jedan od načina struktuiranja je zaleđivanje i ponovno odleđivanje, uz odlivanje određene porcije vode u kojoj su se zadržale štetne materije.</p>
						</div>
					</article>
				</div>
					<footer>
						<ul class="actions">
							<li><button class="button alt icon fa-chevron-left" id="levaStrelica"></button></li>
							<li><button class="button alt icon fa-chevron-right" id="desnaStrelica"></button></li>
						</ul>
					</footer>
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