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