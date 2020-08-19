/* ---------- Native JS -------------- */

window.onload = function() {
    //Dohvatanje stranice na kojoj smo
    var urlOnama = window.location.href;
// Da li je stranica cenovnik, na kojoj se izvrsava funkcija za ispis tabele
if(urlOnama.indexOf('cenovnik.html') != -1) {
    ispisiTabeluProizvodi();

}

//Meni koji se otvara na klik dugmeta sa id-jem btnNav, a zatvara na klik dugmeta sa id-jem btnNavClose 
//Da li je otvoren meni znacemo po klasi kojoj mi dodajemo aktivna Nav 
document.querySelector("a#btnNav").addEventListener('click', function() {
    document.querySelector("#menu").setAttribute("class", "aktivnaNav"); 
});
document.querySelector("a#btnNavClose").addEventListener('click', function() {
    document.querySelector("#menu").removeAttribute("class"); 
});


//Forme za registraciju i logovanje koje se otvaraju klikom na Logovanje/Registracija i zatvaraju na klik dugmeta sa id-jem btnNavClose
$("#log").click(function(e){
    e.preventDefault();
    $("#prozorLogovanje").fadeIn();
});

$("#zatvoriLog").click(function(e){
    e.preventDefault();
    $("#prozorLogovanje").fadeOut();
});

$("#reg").click(function(e){
    e.preventDefault();
    $("#prozorRegistracija").fadeIn();
});

$("#zatvoriReg").click(function(e){
    e.preventDefault();
    $("#prozorRegistracija").fadeOut();
});

//Funkcija za prikaz liste kategorija
    var brojac=0;
        $('#kategorije').hide();
        $('#kat').click(function(e){
          e.preventDefault();
          if(brojac%2 == 0){
            $('#katStrelica').html('<i class="fas fa-angle-up"></i>');
            }
            else{
              $('#katStrelica').html('<i class="fas fa-angle-down"></i>');
            }
          $('#kategorije').slideToggle();
          brojac++;
        });

}// kraj window.onload-a

//Ispis tabele
// function ispisiTabeluProizvodi() {
//     var tabelaProizvoda = [
//         'Ovsene pahuljice, 100, 59.98',
//         'Ječmene pahuljice, 100, 54.99',
//         'Lanene semenke, 100, 38.99',
//         'Suncokretove semenke, 100, 89.99',
//         'Leblebije, 100, 105.98',
//         'Keks sa medom, 100, 69.99',
//         'Medenjaci organski, 100, 78.99',
//         'Trouglići od maline, 100, 89.99',
//         'Trouglići od višnje, 100, 79.99',
//         'Kurkuma, 100, 150.00',
//         'Kumin, 100, 257.00',
//         'Kari začin, 100, 148.99'
//     ];

//     var ispisTabele = "<table class='alt'><thead><tr><th>Naziv proizvoda</th><th>Gramaža</th><th>Cena</th></tr></thead>";
//     for(var i=0; i< tabelaProizvoda.length; i++) {
//         var dohvatiProizvod = tabelaProizvoda[i].split(',');
//         ispisTabele += '<tr><td>' + dohvatiProizvod[0] + '</td><td>' + dohvatiProizvod[1]  + ' gr</td><td>' + dohvatiProizvod[2] + ' din.</td></tr>';
//     }
//     ispisTabele += '<table>';
//     document.querySelector('#tabelaProizvodi').innerHTML = ispisTabele;

// }


// Dinamičko ucitavanje slika
function ucitajSlike() {
    var nizSlika = ['images/onama1.jpg', 'images/onama2.jpg', 'images/onama3.jpg'];
    var ispisiSLike = "";
    for(var i = 0; i < nizSlika.length; i++) {
        ispisiSLike += "<div class='4u'><a href='" + nizSlika[i] + "' class='image fit'><img src='" + nizSlika[i] + "'/></a></div>";
    }
    document.querySelector('#onamaSlike').innerHTML = ispisiSLike;
    
}

//Lista ikonica
function drustveneMreze(){
    var fafaikonice = ['twitter', 'facebook', 'instagram', 'rss',
    'sitemap'];
    var linkovi = ['https://www.twitter.com/', 'https://www.facebook.com/',
    'https://instagram.com/', 'news.xml', 'sitemap.xml'];
    var label = ['Twitter', 'Facebook',
    'Instagram', 'RSS', 'Sitemap'];
    var dodaj = "<ul class='icons'>";
    for(var i =0; i < fafaikonice.length; i++){
     dodaj += "<li><a href=' " + linkovi[i] + " 'class='icon round fa-" + fafaikonice[i] + " '><span label=' " + label[i] + " '></span></a></li>";
    }
    dodaj += "</ul>";
    document.querySelector('.icons').innerHTML = dodaj;
    }



    

/* ---------- jQuery -------------- */

$(document).ready(function(){
//Poziv funkcije za dohvatanje objave na osnovu id-ja prosledjenog u url-u
    dohvatiURLObjavu();

//Trazenje stranice o nama na kojoj treba da se pozove vanilla box plugin za prikaz slika
$url = $(location).attr('href');
$urlCompare = $url.indexOf('o_nama.php');

if($urlCompare != -1){
/*Vanilla Boz plugin */
ucitajSlike();
 $('#onamaSlike a ').vanillabox();
}  

// Otvaranje podmenija u meniju
$('li.hasSubmenu').click(function () {
	$(this).find('ul').slideToggle(500);
	$(this).toggleClass('active');
});

//Dugme za vracanje na pocetak stranice 
$('#scrollToTop').click(function () {
    var offset = 220;
    var duration = 500;
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('#scrollToTop').fadeIn(duration);
        } else {
            jQuery('#scrollToTop').fadeOut(duration);
        }
    });

    $('html').animate({
        scrollTop: 0
    }, 2000);
});


//Plugin za animiranje sadrzaja kada se skroluje do njega

(function($) {

    /**
     * Copyright 2012, Digital Fusion
     * Licensed under the MIT license.
     * http://teamdf.com/jquery-plugins/license/
     *
     * @author Sam Sehnert
     * @desc A small plugin that checks whether elements are within
     *     the user visible viewport of a web browser.
     *     only accounts for vertical position, not horizontal.
     */
  
    $.fn.visible = function(partial) {
      
        var $t            = $(this),
            $w            = $(window),
            viewTop       = $w.scrollTop(),
            viewBottom    = viewTop + $w.height(),
            _top          = $t.offset().top,
            _bottom       = _top + $t.height(),
            compareTop    = partial === true ? _bottom : _top,
            compareBottom = partial === true ? _top : _bottom;
      
      return ((compareBottom <= viewBottom) && (compareTop >= viewTop));
  
    };
      
  })(jQuery);
  
  var win = $(window);
  
  var allMods = $(".module");
  
  allMods.each(function(i, el) {
    var el = $(el);
    if (el.visible(true)) {
      el.addClass("already-visible"); 
    } 
  });
  
  win.scroll(function(event) {
    
    allMods.each(function(i, el) {
      var el = $(el);
      if (el.visible(true)) {
        el.addClass("come-in"); 
      } 
    });
    
  });



});

//Funkcija za promenu pozadine na osnovu aktivnog artikla
function promeniPozadinu() {
    var nizBgSlike = ['images/banner2.jpg', 'images/banner3.jpg', 'images/banner4.jpg', 'images/banner5.jpg'  ];
    var activeArticles = $('#posts .ak');

    $.each( activeArticles, function( key, value ) {
         $getId = value.getAttribute("id");
         $cutIdToGetNumber = $getId.split('box');
         $idArticle = $cutIdToGetNumber[1];
        $activeArticle = Number($idArticle);
      });
    $.each(nizBgSlike, function( key, value ) {
        if(key+1 == $activeArticle) {
            $('#posts').css('background-image', "url('"+ nizBgSlike[key] +"')"); 
         }
      });

     
}
 // Funkcija za napred dugme
$("#desnaStrelica").click(function(){
    var current = $('#posts .ak');
	var next = current.next().length?current.next():current.parent().children(':first');

	current.hide().removeClass('ak');
	next.fadeIn().addClass('ak');

    promeniPozadinu();
    
});
 // Funkcija za nazad dugme
$("#levaStrelica").click(function(){
    var current = $('#posts .ak');
	var prev = current.prev().length?current.prev():current.parent().children(':last');

	current.hide().removeClass('ak');
    prev.fadeIn().addClass('ak');
    
    promeniPozadinu();

});


//Dovatanje Id-ja iz URL adrese i selektovanje tog elementa za prikaz korisniku
function dohvatiURLObjavu() {
    $url = $(location).attr('href');
    $urlCompare = $url .indexOf('#box');

    if($urlCompare != -1) {
        $cutURL = $url.split('#');
        $getIdOfArticle = $cutURL[$cutURL.length - 1];
        $cutByPHP = $url.split('php');
        $divId = $cutByPHP[$cutByPHP.length - 1];
        $hideArticles = $('#posts article');
        $hideArticles.removeClass('ak');
        $next = $($divId).show();
        $next = $($divId).addClass('ak');
    }
}




