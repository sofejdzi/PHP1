    //Funkcija za proveru forme registracija
    document.getElementById("btnRegi").addEventListener("click", function(){ 

        var ime = document.getElementById('ime').value.trim();
        var prezime = document.getElementById('prezime').value.trim();
        var lozinka = document.getElementById('regLozinka').value.trim();
        var email = document.getElementById('regEmail').value.trim();
        var validno = true;
    
        var reIme = /^[A-ZŽŠĐČĆ][a-zšđčćž]{2,30}$/;
        var rePrezime = /^[A-ZŽŠĐČĆ][a-zšđčćž]{2,30}$/;
        var reLozinka=/^.{8,50}$/;
        var reEmail =/^\w+([\._-]?\w+)*@\w+([\._-]?\w+)*(\.\w{2,4})+$/;
        
        if(!reIme.test(ime) || ime==""){
            document.getElementById('ime').style.borderColor="#FF0000";
            validno=false;
        }
        else{
            document.getElementById('ime').style.borderColor="#909090";
        }
        if(!rePrezime.test(prezime) || prezime==""){
            document.getElementById('prezime').style.borderColor="#FF0000";
            validno=false;
        }
        else{
            document.getElementById('prezime').style.borderColor="#909090";
        }
    
        if(!reEmail.test(email) || email==""){
            document.getElementById('regEmail').style.borderColor="#FF0000";
            validno=false;
        }
        else{
            document.getElementById('regEmail').style.borderColor="#909090";
        }
        
        if(!reLozinka.test(lozinka) || lozinka==""){
            document.getElementById('regLozinka').style.borderColor="#FF0000";
            validno=false;
        }
        else{
            document.getElementById('regLozinka').style.borderColor="#909090";
        }
    
        if(validno){
            $.ajax({
                url:"registruj.php",
                method:"POST",
                data:{
                    ime:ime,
                    prezime:prezime,
                    email:email,
                    lozinka:lozinka
                },
                success: function(response){
                    $('#registracija').html("Vaš nalog je kreiran");
                    setTimeout(function () {
                    location.reload();
                }, 500); 
                },
                error: function(){
                    $('#registracija').html("Neuspešno kreiranje naloga");
                }
            })
        }
            
    });
    
    //Funkcija za proveru forme logovanja
    document.getElementById("btnLog").addEventListener("click", function(){
            
        var lozinka = document.getElementById('logLozinka').value.trim();
        var email = document.getElementById('logEmail').value.trim();
        var validno = true;
    
        var reLozinka=/^.{8,50}$/;
        var reEmail =/^\w+([\._-]?\w+)*@\w+([\._-]?\w+)*(\.\w{2,4})+$/;
        
        if(!reEmail.test(email) || email==""){
            document.getElementById('logEmail').style.borderColor="#FF0000";
            validno = false;
        }
        else{
            document.getElementById('logEmail').style.borderColor="#909090";
        }
        
        if(!reLozinka.test(lozinka) || lozinka==""){
            document.getElementById('logLozinka').style.borderColor="#FF0000";
            validno = false;
        }
        else{
            document.getElementById('logLozinka').style.borderColor="#909090";
        }
        if(validno){
            $.ajax({
                url:"uloguj.php",
                method:"POST",
                data:{
                    email:email,
                    lozinka:lozinka
                },
                success: function(response){
                    setTimeout(function () {
                        location.reload()
                    }, 100);
                    
                },
                error: function(){
                    $('#logGreske').html("GREŠKA");
                }
            })
        }
        
    });
