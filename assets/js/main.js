// nav shrinking and animating

function nav() {
  if ($(document).scrollTop() > 100 || window.location.pathname != '/') {
    $('#nav').addClass('shrink');
    $('#burger').addClass('black');
  } else {
    $('#nav').removeClass('shrink');
    $('#burger').removeClass('black');
  }
}

nav();
$(document).on('scroll', nav);

$('#burger').on('click', function() {
  $('.drop-down').toggleClass('menu-active');
  $('#burger').toggleClass('close');
});

$('.drop-down ul').on('click', function() {
  $('.drop-down').removeClass('menu-active');
  $('#burger').removeClass('close');
});

// type writer effect on hero

document.addEventListener('DOMContentLoaded', function(event) {
  var dataText = ['Problem?', 'Solved. :)', 'Top Notch Tech Support'];

  function typeWriter(text, i, fnCallback) {
    if (i < text.length) {
      document.querySelector('.hero h1').innerHTML =
        text.substring(0, i + 1) + '<span aria-hidden="true"></span>';

      setTimeout(function() {
        typeWriter(text, i + 1, fnCallback);
      }, 100);
    } else if (typeof fnCallback == 'function') {
      setTimeout(fnCallback, 700);
    }
  }

  function StartTextAnimation(i) {
    if (typeof dataText[i] == 'undefined') {
      setTimeout(function() {
        StartTextAnimation(0);
      }, 20000);
      return;
    }
    if (i < dataText[i].length) {
      typeWriter(dataText[i], 0, function() {
        StartTextAnimation(i + 1);
      });
    }
  }
  StartTextAnimation(0);
});

// brands we love owl slider

$(document).ready(function() {
  $('.owl-carousel').owlCarousel({
    items: 4,
    loop: true,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: false,
    responsiveClass: true,
    center: true,
    autowidth: true,
    responsive: {
      0: {
        items: 2,
        nav: false
      },
      600: {
        items: 2,
        nav: false
      },
      1000: {
        items: 5,
        nav: false,
        loop: true
      }
    }
  });
});

// google recaptcha validation check

var form = document.querySelector('#contact-form');
form.addEventListener('submit', function(e) {
  if (grecaptcha.getResponse() === '') {
    e.preventDefault();
    alert('Please check the recaptcha');
  }
});
