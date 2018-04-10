(function ($) {
  $(document).ready(function () {

    $(".navbar-default .navbar-nav > li > a").on('click', function (e) {
      e.preventDefault();
      goToByScroll($(this).attr("href"));
    });

    $('.panel-title>a').on('click', toggleIcon);

    notification();

    $('.buy').on('click', function () {
      $('.notification').show();
      $('#modalBuyDialog').modal('show');
      var item = '#collapse' + $(this).attr('target');
      $(item).collapse('show');
      $('.panel-title>a').each(function () {
        if ($(this).attr('href') == item)
          $(this).find("i").toggleClass('fa-plus-square-o fa-minus-square-o');
      })
    });

    $('.shop').on('click', function () {
      $('#modalBuyDialog').modal('show');
    });

    $('.send').on('click', function () {
      $('.notification').hide();
    });

  });

  function goToByScroll(link) {
    var padding = 130;
    if ($(window).width() <= 768)
      padding = 160;
    $('html, body').animate({
      scrollTop: $(link).offset().top - padding
    }, 'slow');
    $('.navbar-toggle:visible').click();
  }

  function toggleIcon() {
    $(this).find("i").toggleClass('fa-plus-square-o fa-minus-square-o');
  }

  function notification() {
    $('.shop').append('<i style="display: none;" class="notification fa fa-exclamation-circle" aria-hidden="true"></i>')
  };


})(jQuery)
