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

$('.maintenance').hover(
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

$(".maintenance").hover(
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

$(function () {
  $(".mprice1").show();
  $(".mprice2").hide();
  $(".price-muted").show();
  $("#mplacanje").change(function () {
      if ($(this).is(":checked")) {
          $(".price-muted").show();
          $(".mprice2").show();
          $(".mprice1").hide();
      } else {
          $(".price-muted").hide();
          $(".mprice2").hide();
          $(".mprice1").show();
      }
  });
});

$(document).ready(function(){
	$('#nav-icon3').click(function(){
		$(this).toggleClass('open');
	});
});

const picker = document.getElementById('date');
picker.addEventListener('input', function(e){
  var day = new Date(this.value).getUTCDay();
  if([6,0].includes(day)){
    e.preventDefault();
    this.value = '';
    alert('Odaberite radni dan');
  }
});

