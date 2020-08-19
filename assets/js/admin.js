$(document).ready(function(){
    $("#formularUpdate").hide();
    $(".izmena").click(Prikaz);
    function Prikaz(){
        $("#formularUpdate").show();
    }
    $(".izmena").click(Izmeni);
    function Izmeni(){
        var idPro = $(this).data('id');
        $("#sakriveno").val(idPro);
        console.log(idPro);
    }
    

    // $(".obrisi").click(ObrisiPro);

    // function ObrisiPro(){
    //     var idPro = $(this).data('id');
        
    //         $.ajax({
    //             url:"php/brisanje.php",
    //             method:"POST",
    //             type:"json",
    //             data:{
    //                 id:idPro
    //             },
    //             success:function(data){
    //                 setTimeout(function (){
    //                     location.reload();
    //                 }, 100);
    //             },
    //             error(xhr, error, status){
    //                 echo ("Greska");
    //             }
    //     })
    // }
})