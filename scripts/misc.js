$(".pricing").hover(
    function () {
      $(this).addClass('shadow-lg');
    }, 
    function () {
      $(this).removeClass('shadow-lg');
    }
);


$('.pricing').hover(
    function () {
        $("button", this).addClass('btn-secondary');
        $("button", this).removeClass('btn-outline-secondary');
      }, 
      function () {
        $("button", this).removeClass('btn-secondary');
        $("button", this).addClass('btn-outline-secondary');
      }
);

$(".services").hover(
  function () {
    $(this).addClass('shadow-lg');
  }, 
  function () {
    $(this).removeClass('shadow-lg');
  }
);


$(function () {
  $(".price1").show();
  $(".price2").hide();
  $("#placanje").change(function () {
      if ($(this).is(":checked")) {
          $(".price2").show();
          $(".price1").hide();
      } else {
          $(".price2").hide();
          $(".price1").show();
      }
  });
});