$(document).ready(function(){
    $("#posaljiAnketu").click(slanjeAnkete);

    function slanjeAnkete(){
        var kategorija = document.getElementsByName('rb1');
        var cekiranaKategorija = 0;
        var selektovanPrvi="";
        for(var i=0; i<kategorija.length; i++) {
             if(kategorija[i].checked) {
                cekiranaKategorija = 1;
                selektovanPrvi=kategorija[i].value;
                break;
             }
        }
        if(cekiranaKategorija==0){
            document.getElementById("upozorenje").innerHTML = "Molimo Vas da popunite podatke!";
        }
        else{
            document.getElementById("upozorenje").innerHTML = "";
        }

        var sajt = document.getElementsByName('rb2');
        var cekiranSajt = 0;
        var selektovanDrugi="";
        for(var i=0; i<sajt.length; i++) {
             if(sajt[i].checked) {
                cekiranSajt = 1;
                selektovanDrugi=sajt[i].value;
                break;
             }
        }
        if(cekiranSajt==0){
            document.getElementById("upozorenje").innerHTML = "Molimo Vas da popunite podatke!";
        }
        else{
            document.getElementById("upozorenje").innerHTML = "";
        }

        $.ajax({
            url:"slanjeAnkete.php",
            method:"POST",
            data:{
                kategorija:selektovanPrvi,
                sajt:selektovanDrugi
            },
            success:function(data){
                
                location.reload(); 
            },
            error:function(){

            }
        });
    }
})