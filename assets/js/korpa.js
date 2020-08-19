//korpa
$(".korpa").click(dodajUKorpu);
function dodajUKorpu(e) {
  console.log(this);
  e.preventDefault();
  let idProizvod = this.dataset.id;
  $.ajax({
    url: "php/obrada.php",
    method: "POST",
    data: {
      id: idProizvod
    },
    success: function(data) {
      // console.log(data);
      location.reload();
    },
    error: function(xhr, status, error) {
      // alert(xhr.readyState);
      location.reload();
    }
  });
}
