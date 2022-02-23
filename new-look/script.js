document.documentElement.setAttribute('data-theme', (window.localStorage.getItem('data-theme')) ?? "light");

$(document).ready(function() {
    $(".theme-toggler").click(function() {
        (document.documentElement.getAttribute('data-theme') == 'dark') ?
        document.documentElement.setAttribute('data-theme', 'light') :
        document.documentElement.setAttribute('data-theme', 'dark');

        window.localStorage.setItem('data-theme', (document.documentElement.getAttribute('data-theme')));
    });
});

$(document).ready(function(){
    $(".hamburger").click(function(){
      $(this).toggleClass("is-active");
      $('.fullscreen-nav').toggleClass("is-active");
    });
  });