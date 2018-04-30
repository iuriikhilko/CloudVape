(function ($) {
  $(document).ready(function () {
    minHeightContent();
  });

  $(window).resize(function () {
    minHeightContent();
  });

  function minHeightContent() {
    var windowHeight = $(window).height(),
    headerHeight = 128,
    footerHeight = 80;
    var height = windowHeight - headerHeight - footerHeight - 22;
    $('.container-fluid').css('min-height', height);
  };

})(jQuery)
