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

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
      e.preventDefault();

      document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
      });
  });
});

$(window).scroll(function() {
  if ($(document).scrollTop() > 50) {
    $('nav').addClass('shrink');
    $('nav').addClass('shadow-lg');
    $('nav').addClass('sticky-top');
  } else {
    $('nav').removeClass('shrink');
    $('nav').removeClass('shadow-lg');
    $('nav').removeClass('sticky-top');
  }

});

/* var prevScrollpos = 0;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    $('nav').removeClass('hidden');
  } else {
    $('nav').addClass('hidden');
  }
  prevScrollpos = currentScrollPos;
}  */

var prev = 100;
var $window = $(window);
var nav = $('nav');

$window.on('scroll', function(){
  var scrollTop = $window.scrollTop();
  nav.toggleClass('hidden', scrollTop > prev);
  prev = scrollTop;
});


