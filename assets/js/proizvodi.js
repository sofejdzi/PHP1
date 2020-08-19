
$(document).ready(function(){
    //Funkcija za paginaciju
    $('.numeracija').click(sendPage); 
    $('#paginacija ul li a:first').addClass('aktivnaStrana');
    function sendPage(e){ 
    e.preventDefault(); 
    var broj = $(this).data('num'); 
    $('.numeracija').removeClass('aktivnaStrana'); 
    $(this).addClass("aktivnaStrana"); 
    $.ajax({ 
        url: "dohvatiProizvode.php", 
        method: "post", 
        data: { 
        numeracija: broj,
        send:true
        }, 
        success: function(proizvodi){ 
        $('#proizvodi').html(proizvodi);
        korpa();
        }, 
        error: function(xhr, status, error){ 
        console.log(error); 
        } 
    }); 
    }


    //Funkcija za sortiranje
    document.getElementById('sortiraj').addEventListener('change', sortiranje);
    function sortiranje(){
        var izabrano = document.getElementById('sortiraj').options[document.getElementById('sortiraj').selectedIndex].value;

        $.ajax({
            url:"sortiraj.php",
            method:"POST",
            data:{
                izabrano:izabrano,
                send:true
            },
            success:function(data){
                $("#proizvodi").html(data);
                korpa();
        
            },
            error:function(err){
            console.error(err);
            }
        });

    }

    //Funkcija za pretragu
    document.getElementById('btnPretraga').addEventListener('click', pretraga);
      function pretraga(){
        var pretrazi = document.getElementById('query').value;
        $.ajax({
          url:"pretraga.php",
          method:"POST",
          data:{
            query:pretrazi,
            send:true
          },
          success:function(data){
            $("#proizvodi").html(data);
            korpa();
          },
          error:function(err){
            console.error(err);
          }
      });
      }


      //Filtriranje kategorija
      $('#kategorije li a').click(FiltrirajKategorije);
      function FiltrirajKategorije(e){
        e.preventDefault();
        var idKat = this.dataset.id;
        $.ajax({
          url:"filtriranjeProizvoda.php",
          method:"POST",
          data:{
            idKat:idKat
          },
          success:function(data){
            $("#proizvodi").html(data);
            korpa();
          },
          error:function(err){
            console.error(err);
          }
      });
    }

    $('#sve').click(prikaziSve);
    function prikaziSve(e){
      e.preventDefault();
      $.ajax({
        url:"dohvatiProizvode.php",
        method:"POST",
        data:{
          send:true
        },
        success:function(data){
          $("#proizvodi").html(data); 
          Korpa();
        },
        error:function(err){
          console.error(err);
        }
      });
    }

      //Dodaj u korpu
      function korpa(){
        $(".dodaj").click(dodajUKorpu);
      }
  
      function proizvodiUKorpi(){
        return JSON.parse(localStorage.getItem("proizvodi"));
      }
  
      function dodajUKorpu(){
        let id = $(this).data("id");
        var proizvodi = proizvodiUKorpi();
  
        if(proizvodi){
            if(ProizvodJeVecUKorpi())
            azurirajKolicinu();
            else{
                DodajULocalStorage();
            }
        }
        else{
            dodajPrviProizvodULocalStorage();
        }
  
      function azurirajKolicinu(){
        let proizvodi = proizvodiUKorpi();
        for(let i in proizvodi){
            if(proizvodi[i].id==id){
                proizvodi[i].kolicina++;
                break;
            }
            
        }
        localStorage.setItem("proizvodi",JSON.stringify(proizvodi))
      }
  
      function ProizvodJeVecUKorpi(){
        return proizvodi.filter(p => p.id == id).length;
      }
  
      function DodajULocalStorage(){
        let proizvodi = proizvodiUKorpi();
  
        proizvodi.push({
            id : id,
            kolicina :  1
        });
        localStorage.setItem("proizvodi", JSON.stringify(proizvodi));
      }
  
      function dodajPrviProizvodULocalStorage(){
        let proizvodi = [];
        proizvodi[0] = {
            id : id,
            kolicina : 1
        }
        localStorage.setItem("proizvodi",JSON.stringify(proizvodi));
      }
    }


});














    