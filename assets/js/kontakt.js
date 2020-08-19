

//Funkcija za proveru forme kontakt
document.querySelector('#btnPosalji').addEventListener('click',function() {
    var ispis="";
    var ispravno = true;
    var podaci = [];
    var greske=document.getElementById("ispisGresaka");
    var reImePrezime = /^([A-ZŽŠĐČĆ][a-zšđčćž]{2,15})(\s[A-ZŽŠĐČĆ][a-zšđčćž]{2,15})*$/;
    var reEmail = /^\w+([\.\-]\w+)*@\w+([\.\-]\w+)*(\.\w{2,4})+$/;
    var imePrezime = document.querySelector("#name").value.trim();
    var email = document.querySelector("#email").value.trim();
    var poruka = document.querySelector("#message").value.trim();
    


     if(imePrezime == "") {
        podaci.push("Polje za prezime je obavezno");
        ispravno = false;  
     } else if(!reImePrezime.test(imePrezime)) {
        podaci.push("Podatak za ime i prezime nije u ispravnom formatu");
         ispravno = false;
     } 

     if(email == "") {
        podaci.push("Polje za email je obavezno");
        ispravno = false;  
     } else if(!reEmail.test(email)) {
        podaci.push("Podatak za email nije u ispravnom formatu");
         ispravno = false;
     } 

    if(poruka == "") {
        podaci.push("Polje za tekst poruke je obavezno");
        ispravno = false;  
     } 
     

     var drop = document.getElementsByClassName("drop");
     for(var i = 1; i < drop.length; i++) {
        if(drop[i].selected) {
           odabrano1=true;
           break;
        }
    }

    if(ispravno){
        $.ajax({
            url:"slanjeKontakt.php",
            method:"POST",
            data:{
                imePrezime:imePrezime,
                poruka:poruka,
                send:true,
            },
            success:function(data){
                document.getElementById("kontaktForma").reset();  
                document.getElementById("porukaPoslata").innerHTML="Poslato <i class='fas fa-check'></i>";
            },
            error:function(xhr, status, error){
                console.log(error);
            }

        })
    }else if(greske){
         ispis+="<ul>";
        for (let i = 0; i < podaci.length; i++) {
             ispis+="<li>"+podaci[i]+"</li>";
        }
         ispis+="</ul>";
     }
     greske.innerHTML=ispis;
})




