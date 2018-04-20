$(document).on('scroll', function() {
  if ($(document).scrollTop() > 100) {
    $('#nav').addClass('shrink');
    $('#burger').addClass('black');
  } else {
    $('#nav').removeClass('shrink');
    $('#burger').removeClass('black');
  }
});
$('#burger').on('click', function() {
  $('.drop-down').toggleClass('menu-active');
  $('#burger').toggleClass('close');
});

$('.drop-down ul').on('click', function() {
  $('.drop-down').removeClass('menu-active');
  $('#burger').removeClass('close');
});

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
    }
    if (i < dataText[i].length) {
      typeWriter(dataText[i], 0, function() {
        StartTextAnimation(i + 1);
      });
    }
  }
  StartTextAnimation(0);
});

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

var TxtType = function(el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtType.prototype.tick = function() {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

  var that = this;
  var delta = 200 - Math.random() * 100;

  if (this.isDeleting) {
    delta /= 2;
  }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function() {
    that.tick();
  }, delta);
};

window.onload = function() {
  var elements = document.getElementsByClassName('typewrite');
  for (var i = 0; i < elements.length; i++) {
    var toRotate = elements[i].getAttribute('data-type');
    var period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtType(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  var css = document.createElement('style');
  css.type = 'text/css';
  css.innerHTML = '.typewrite > .wrap { border-right: 0.05em solid #fff}';
  document.body.appendChild(css);
};

// function sendEmail() {
//   var data = {
//     name: $('#name').val(),
//     email: $('#email').val(),
//     message: $('#additionalinfo').val(),
//     phone: $('#phone').val()
//   };
//   var recaptcha = $('#g-recaptcha-response').val();
//   if (recaptcha === '') {
//     event.preventDefault();
//     alert('Please check the recaptcha');
//   } else {
//     $.ajax({
//       type: 'POST',
//       url: 'scripts/email.php',
//       data: data,
//       success: function() {
//         $('.success').fadeIn(1000);
//       }
//     });
//   }
// }
