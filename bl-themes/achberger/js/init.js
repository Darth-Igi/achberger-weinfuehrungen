(function ($) {
  $(function () {

    $('.sidenav').sidenav()
    $('.parallax').parallax()

    $('[data-href]').click(function () {
      window.location.href = $(this).attr('data-href')
    })

    const lightbox = GLightbox({
      touchNavigation: true,
      loop: true,
      autoplayVideos: true
    })

  }) // end of document ready
})(jQuery) // end of jQuery name space
