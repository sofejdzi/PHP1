<footer id="footer">
	<div class="inners">
		<ul class="icons">
			<li><a href="https://twitter.com/" class="icon round fa-twitter" target="_blank"><span class="label">Twitter</span></a></li>
			<li><a href="https://www.facebook.com/" class="icon round fa-facebook" target="_blank"><span class="label">Facebook</span></a></li>
			<li><a href="https://www.instagram.com/" class="icon round fa-instagram" target="_blank"><span class="label" target="_blank">Instagram</span></a></li>
			<li><a href="news.xml" class="icon round fa-rss"><span class="label">RSS</span></a></li>
			<li><a href="sitemap.xml" class="icon round fa-sitemap" target="_blank"><span class="label">Sitemap</span></a></li>
		</ul>
							
		<div class="copyright">
			&copy; Visoka ICT škola 2020. Autor: <a href="autor.php">Sofija Stolić 339/17</a>. Dizajn: <a href="https://templated.co" target="_blank">TEMPLATED</a>.
		</div>
		<div class="footer-nav">
        <?php
            include "konekcija.php";
            $upit="SELECT * FROM futer";
            $priprema= $konekcija->prepare($upit);
            $priprema->execute();
            $linkovi=$priprema->fetchAll();

            $ispis="<ul id='futer'>";
            foreach($linkovi as $link){
                if($link->idFuter == 7){
                    if(isset($_SESSION['korisnik'])){ 
                        if($_SESSION['korisnik']->idUloga==1){
                            $ispis.="<li><a href='$link->href'>$link->naslov</a></li>";
                        }}
                }
                else{
                    $ispis.="<li><a href='$link->href'>$link->naslov</a></li>"; 
                }
            }
            $ispis.="</ul>";
            echo $ispis;
        ?>
		</div>
		<div id="scrollToTop">
			<i class="fa fa-angle-up"></i>
		<div>
	</div>
</footer>