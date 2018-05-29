// init page animations
AOS.init({
  once: true
});

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

// Nav jerry rigging

document.querySelector('#logo').addEventListener('click', () => {
  window.location.pathname = '/';
});

$('.link-listener').on('click', function(e) {
  if (window.location.pathname === '/') {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth',
          inline: 'start',
          block: 'start'
        });
      });
    });
  } else if (e.target.innerHTML.toUpperCase() === 'HOME') {
    window.location.pathname = '/';
    window.location.pathname = '/';
  } else if (e.target.innerHTML.toUpperCase() === 'INDUSTRY SOLUTIONS') {
    window.location.pathname = '/industry-solutions';
    window.location.hash = '';
  } else if (e.target.innerHTML.toUpperCase() === 'SERVICES') {
    window.location = '/#services';
    window.location.hash = '';
  } else if (e.target.innerHTML.toUpperCase() === 'PRICING') {
    window.location.pathname = '/pricing';
    window.location.pathname = '/pricing';
  } else if (e.target.innerHTML.trim().toUpperCase() === 'CONTACT') {
    window.location.pathname = '/contact';
    window.location.pathname = '/contact';
  }
});

// type writer effect on hero

document.addEventListener('DOMContentLoaded', function(event) {
  var dataText = [
    'Top Notch Business Tech Support',
    'Real People, Real Connections',
    'Real Support, Real Solutions',
    'Problem?                Solved. :)'
  ];

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
      }, 10000);
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

addBackToTop({
  diameter: 56,
  backgroundColor: 'var(--main-color)',
  textColor: '#fff'
});
