'use strict';
function addBackToTop() {
  var o = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {},
    t = o.id,
    e = void 0 === t ? 'back-to-top' : t,
    n = o.showWhenScrollTopIs,
    i = void 0 === n ? 1 : n,
    r = o.onClickScrollTo,
    d = void 0 === r ? 0 : r,
    c = o.scrollDuration,
    a = void 0 === c ? 100 : c,
    s = o.innerHTML,
    l =
      void 0 === s
        ? '<svg viewBox="0 0 24 24"><path d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6-6 6z"></path></svg>'
        : s,
    u = o.diameter,
    m = void 0 === u ? 56 : u,
    p = o.size,
    b = void 0 === p ? m : p,
    h = o.cornerOffset,
    v = void 0 === h ? 20 : h,
    f = o.backgroundColor,
    x = void 0 === f ? '#000' : f,
    w = o.textColor,
    g = void 0 === w ? '#fff' : w,
    k = o.zIndex,
    y = void 0 === k ? 1 : k;
  !(function() {
    var o = Math.round(0.43 * b),
      t = Math.round(0.29 * b),
      n =
        '#' +
        e +
        '{background:' +
        x +
        ';-webkit-border-radius:50%;-moz-border-radius:50%;border-radius:50%;bottom:' +
        v +
        'px;-webkit-box-shadow:0 2px 5px 0 rgba(0,0,0,.26);-moz-box-shadow:0 2px 5px 0 rgba(0,0,0,.26);box-shadow:0 2px 5px 0 rgba(0,0,0,.26);color:' +
        g +
        ';cursor:pointer;display:block;height:' +
        b +
        'px;opacity:1;outline:0;position:fixed;right:' +
        v +
        'px;-webkit-tap-highlight-color:transparent;-webkit-touch-callout:none;-webkit-transition:bottom .2s,opacity .2s;-o-transition:bottom .2s,opacity .2s;-moz-transition:bottom .2s,opacity .2s;transition:bottom .2s,opacity .2s;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;width:' +
        b +
        'px;z-index:' +
        y +
        '}#' +
        e +
        ' svg{display:block;fill:currentColor;height:' +
        o +
        'px;margin:' +
        t +
        'px auto 0;width:' +
        o +
        'px}#' +
        e +
        '.hidden{bottom:-' +
        b +
        'px;opacity:0}',
      i = document.createElement('style');
    i.appendChild(document.createTextNode(n)),
      document.head.insertAdjacentElement('afterbegin', i);
  })();
  var T = (function() {
      var o = document.createElement('div');
      return (
        (o.id = e),
        (o.className = 'hidden'),
        (o.innerHTML = l),
        o.addEventListener('click', function(o) {
          o.preventDefault(),
            (function() {
              var o = window,
                t = o.performance,
                e = o.requestAnimationFrame;
              if (a <= 0 || void 0 === t || void 0 === e) return C(d);
              var n = t.now(),
                i = M(),
                r = i - d;
              e(function o(t) {
                var d = t - n,
                  c = Math.min(d / a, 1);
                C(i - Math.round(c * r)), c < 1 && e(o);
              });
            })();
        }),
        document.body.appendChild(o),
        o
      );
    })(),
    E = !0;
  window.addEventListener('scroll', z), z();
  function z() {
    M() >= i
      ? (function() {
          if (!E) return;
          (T.className = ''), (E = !1);
        })()
      : (function() {
          if (E) return;
          (T.className = 'hidden'), (E = !0);
        })();
  }
  function M() {
    return (
      document.body.scrollTop ||
      (document.documentElement && document.documentElement.scrollTop) ||
      0
    );
  }
  function C(o) {
    (document.body.scrollTop = o),
      document.documentElement && (document.documentElement.scrollTop = o);
  }
}
