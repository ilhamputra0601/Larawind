$(document).ready(function () {
  // scroll event
  const header = $('header');
  const top = $('#toTop');
  $(window).scroll(function () {
    let scroll = $(window).scrollTop();
    // navbar fixed
    if (scroll >= 1) {
      $(header).addClass('navbar-fixed');
    } else {
      $(header).removeClass('navbar-fixed');
    }
    // scroll ToTop
    if (scroll >= 1000) {
      $(top).removeClass('hidding');
    } else {
      $(top).addClass('hidding');
    }
  });

  // Hamburger
  const hamburger = $('#hamburger');
  const navMenu = $('#nav-menu');
  $(hamburger).click(function (e) {
    $(hamburger).toggleClass('hamburger-active');
    $(navMenu).slideToggle('slow');
    e.preventDefault();
  });
  // Hamburger close offside
  $(document).click(function(e) {
    if ($(hamburger).hasClass('hamburger-active') && $("#nav-menu").is(':visible') && !$(e.target).closest('#hamburger, #nav-menu').length) {
        $(hamburger).removeClass('hamburger-active');
        $(navMenu).slideUp('slow');
    }
});

  // darkmode
  const dark = $('#dark');
  $(dark).click(function (e) {
    $('#terang').toggleClass('hidden');
    $('#gelap').toggleClass('hidden');
    let malam = $('#gelap').hasClass('hidden');
    if (malam) {
      $('html').addClass('dark');
      localStorage.theme = 'dark';
    } else {
      $('html').removeClass('dark');
      localStorage.theme = 'light'
    }
    if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
      $(gelap).hasClass('hidden') = true;
    } else {
      $(gelap).hasClass() = false;
    }
    e.preventDefault();
  });


  //pembungkus
});

