! function(a) {
  "use strict";
  var e = a(window),
    i = a("body"),
    l = a(".navbar");

  function t() {
    return e.width()
  }
  "ontouchstart" in document.documentElement || i.addClass("no-touch");
  var s = t();
  e.on("resize", function() {
    s = t()
  });
  var n = a(".is-sticky");
  if (n.length > 0) {
    var r = a("#mainnav").offset();
    e.scroll(function() {
      var a = e.scrollTop();
      e.width() > 991 && a > r.top ? n.hasClass("has-fixed") || n.addClass("has-fixed") : n.hasClass("has-fixed") && n.removeClass("has-fixed")
    })
  }
  a('a.menu-link[href*="#"]:not([href="#"])').on("click", function() {
    if (location.pathname.replace(/^\//, "") === this.pathname.replace(/^\//, "") && location.hostname === this.hostname) {
      var e = a(this.hash),
        i = !!this.hash.slice(1) && a("[name=" + this.hash.slice(1) + "]"),
        t = s >= 992 ? l.height() - 1 : 0;
      if ((e = e.length ? e : i).length) return a("html, body").animate({
        scrollTop: e.offset().top - t
      }, 1e3, "easeInOutExpo"), !1
    }
  });
  var o = window.location.href,
    d = o.split("#"),
    m = a(".nav li a");
  m.length > 0 && m.each(function() {
    o === this.href && "" !== d[1] && a(this).closest("li").addClass("active").parent().closest("li").addClass("active")
  });
  var c = a(".dropdown-toggle");
  c.length > 0 && (c.on("mouseover", function() {
    e.width() > 991 && (a(".dropdown-menu", this).not(".in .dropdown-menu").stop().fadeIn("400"), a(this).parent().addClass("open"))
  }), c.on("mouseleave", function() {
    e.width() > 991 && (a(".dropdown-menu", this).not(".in .dropdown-menu").stop().fadeOut("400"), a(this).parent().removeClass("open"))
  }), c.on("click", function() {
    if (e.width() < 991) return a(this).parent().children(".dropdown-menu").fadeToggle(400), a(this).parent().toggleClass("open"), !1
  })), e.on("resize", function() {
    a(".navbar-collapse").removeClass("in"), c.parent().children(".dropdown-menu").fadeOut("400")
  });
  var h = a(".navbar-toggler"),
    p = a(".is-transparent");
  h.length > 0 && h.on("click", function() {
    a(".remove-animation").removeClass("animated"), p.hasClass("active") ? p.removeClass("active") : p.addClass("active")
  });
  var g = a("select");
  g.length > 0 && g.select2(), a(".menu-link").on("click", function() {
    a(".navbar-collapse").collapse("hide"), p.removeClass("active")
  }), a(document).on("mouseup", function(e) {
    p.is(e.target) || 0 !== p.has(e.target).length || (a(".navbar-collapse").collapse("hide"), p.removeClass("active"))
  });
  var u = a(".timeline-carousel");
  if (u.length > 0) {
    var v = !!i.hasClass("is-rtl");
    u.addClass("owl-carousel").owlCarousel({
      navText: ["<i class='ti ti-angle-left'></i>", "<i class='ti ti-angle-right'></i>"],
      items: 6,
      nav: !0,
      margin: 30,
      rtl: v,
      responsive: {
        0: {
          items: 1
        },
        400: {
          items: 2,
          center: !1
        },
        599: {
          items: 3
        },
        1024: {
          items: 5
        },
        1170: {
          items: 6
        }
      }
    })
  }
  var f = a(".roadmap-carousel");
  if (f.length > 0) {
    var x = !!i.hasClass("is-rtl");
    f.addClass("owl-carousel").owlCarousel({
      items: 6,
      nav: !1,
      dost: !0,
      margin: 30,
      rtl: x,
      responsive: {
        0: {
          items: 1
        },
        400: {
          items: 2,
          center: !1
        },
        599: {
          items: 3
        },
        1024: {
          items: 4
        },
        1170: {
          items: 5
        }
      }
    })
  }
  var b = a(".roadmap-carousel-withnav");
  if (b.length > 0) {
    var k = !!i.hasClass("is-rtl");
    b.addClass("owl-carousel").owlCarousel({
      navText: ["<i class='ti ti-angle-left'></i>", "<i class='ti ti-angle-right'></i>"],
      items: 5,
      nav: !0,
      dost: !1,
      margin: 30,
      rtl: k,
      responsive: {
        0: {
          items: 1
        },
        400: {
          items: 2,
          center: !1
        },
        599: {
          items: 3
        },
        1024: {
          items: 4
        },
        1170: {
          items: 5
        }
      }
    })
  }
  var w = a(".has-carousel");
  if (w.length > 0) {
    var C = !!i.hasClass("is-rtl");
    w.each(function() {
      var e = a(this),
        i = e.data("items") ? e.data("items") : 4,
        l = i >= 3 ? 2 : i,
        t = l >= 2 ? 1 : l,
        s = e.data("delay") ? e.data("delay") : 6e3,
        n = !!e.data("auto"),
        r = !!e.data("loop"),
        o = !!e.data("dots"),
        d = !!e.data("navs"),
        m = !!e.data("center"),
        c = e.data("margin") ? e.data("margin") : 30;
      e.addClass("owl-carousel").owlCarousel({
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        items: i,
        loop: r,
        nav: d,
        dots: o,
        margin: c,
        center: m,
        autoplay: n,
        autoplayTimeout: s,
        autoplaySpeed: 300,
        rtl: C,
        responsive: {
          0: {
            items: 1
          },
          480: {
            items: t
          },
          768: {
            items: l
          },
          1170: {
            items: i
          }
        }
      })
    })
  }
  var y = a(".token-countdown");
  y.length > 0 && y.each(function() {
    var e = a(this),
      i = e.attr("data-date");
    e.countdown(i).on("update.countdown", function(e) {
      a(this).html(e.strftime('<div class="col"><span class="countdown-time countdown-time-first">%D</span><span class="countdown-text">Days</span></div><div class="col"><span class="countdown-time">%H</span><span class="countdown-text">Hours</span></div><div class="col"><span class="countdown-time">%M</span><span class="countdown-text">Minutes</span></div><div class="col"><span class="countdown-time countdown-time-last">%S</span><span class="countdown-text">Seconds</span></div>'))
    })
  });
  var z = a(".content-popup");
  z.length > 0 && z.magnificPopup({
    type: "inline",
    preloader: !0,
    removalDelay: 400,
    mainClass: "mfp-fade bg-team-exp"
  });
  var A = a(".video-play");
  A.length > 0 && A.magnificPopup({
    type: "iframe",
    removalDelay: 160,
    preloader: !0,
    fixedContentPos: !1,
    callbacks: {
      beforeOpen: function() {
        this.st.image.markup = this.st.image.markup.replace("mfp-figure", "mfp-figure mfp-with-anim"), this.st.mainClass = this.st.el.attr("data-effect")
      }
    }
  });
  var P = a(".imagebg");
  P.length > 0 && P.each(function() {
    var e = a(this),
      i = e.parent(),
      l = e.data("overlay"),
      t = e.children("img").attr("src"),
      s = void 0 !== l && "" !== l && l.split("-");
    void 0 !== t && "" !== t && (i.hasClass("has-bg-image") || i.addClass("has-bg-image"), "" !== s && "dark" === s[0] && (i.hasClass("light") || i.addClass("light")), e.css("background-image", 'url("' + t + '")').addClass("bg-image-loaded"))
  });
  var D = a('[class*="mask-ov"]');
  D.length > 0 && D.each(function() {
    var e = a(this).parent();
    e.hasClass("has-maskbg") || e.addClass("has-maskbg")
  });
  var j = a("#contact-form"),
    L = a("#subscribe-form");
  if (j.length > 0 || L.length > 0) {
    if (!a().validate || !a().ajaxSubmit) return console.log("contactForm: jQuery Form or Form Validate not Defined."), !0;
    if (j.length > 0) {
      var S = j.find("select.required"),
        T = j.find(".form-results");
      j.validate({
        invalidHandler: function() {
          T.slideUp(400)
        },
        submitHandler: function(e) {
          T.slideUp(400), a(e).ajaxSubmit({
            target: T,
            dataType: "json",
            success: function(i) {
              var l = "error" === i.result ? "alert-danger" : "alert-success";
              T.removeClass("alert-danger alert-success").addClass("alert " + l).html(i.message).slideDown(400), "error" !== i.result && a(e).clearForm().find(".input-field").removeClass("input-focused")
            }
          })
        }
      }), S.on("change", function() {
        a(this).valid()
      })
    }
    if (L.length > 0) {
      var _ = L.find(".subscribe-results");
      L.validate({
        invalidHandler: function() {
          _.slideUp(400)
        },
        submitHandler: function(e) {
          _.slideUp(400), a(e).ajaxSubmit({
            target: _,
            dataType: "json",
            success: function(i) {
              var l = "error" === i.result ? "alert-danger" : "alert-success";
              _.removeClass("alert-danger alert-success").addClass("alert " + l).html(i.message).slideDown(400), "error" !== i.result && a(e).clearForm()
            }
          })
        }
      })
    }
  }
  var V = a(".input-line");
  V.length > 0 && V.each(function() {
    var e = a(this);
    a(this).val().length > 0 && e.parent().addClass("input-focused"), e.on("focus", function() {
      e.parent().addClass("input-focused")
    }), e.on("blur", function() {
      e.parent().removeClass("input-focused"), a(this).val().length > 0 && e.parent().addClass("input-focused")
    })
  });
  var B = "images/",
    U = "COM  MUNITY",
    H = "./rtl/index.html";
  i.hasClass("is-rtl") && (B = "../images/", U = "LTR Mode", H = "../index.html"), i.append('<div class="demo-panel"><div class="demo-list"> <a class="demo-themes" title="Check Out" href="javascript:void(0)"> <img src="' + B + 'demo-icon.png" /> </a> <a class="demo-mode" href="' + H + '">' + U + '</a>  <a class="demo-toggle" href="javascript:void(0)"> <i class="fas fa-cogs"> </i> </a></div><div class="demo-content"><ul class="color-list"><li> <a href="#" class="color-trigger theme-defalt" title="theme"></a></li><li> <a href="#" class="color-trigger theme-blue" title="theme-blue"></a></li><li> <a href="#" class="color-trigger theme-mint" title="theme-mint"></a></li><li> <a href="#" class="color-trigger theme-orange" title="theme-orange"></a></li><li> <a href="#" class="color-trigger theme-royal" title="theme-royal"></a></li><li> <a href="#" class="color-trigger theme-ruby" title="theme-ruby"></a></li><li> <a href="#" class="color-trigger theme-java" title="theme-java"></a></li></ul></div></div><div class="demo-theme-content"><div class="demo-theme-content-bg"></div> <a class="demo-close" href="javascript:void(0)">&times;</a><div class="demo-theme-wrapper"><div class="demo-theme-all"> <a href="http://bit.ly/2uPFhHX" class="demo-offer-image text-center"> <img src="http://cdn.themenio.com/offers/ico-deal-flash-sm.gif" alt="offer" /> </a><div class="row"><div class="col-lg-9"><div class="row"><div class="col-lg-4 col-sm-6"><div class="demo-theme-item demo-theme-item-1"><div class="demo-image"> <a href="index-lungwort-particle-animate.html"> <img src="' + B + 'demo-lungwort.jpg" alt="alt"> </a> <span class="demo-new-badge demo-hot-badge">v1.3 New</span></div><div class="demo-text"> <a class="demo-title" href="index-lungwort-particle-animate.html"><h5>Landing V10 <span>Lungwort</span></h5> </a><ul class="demo-item-list"><li> <a href="index-lungwort.html">Default</a></li><li> <a href="index-lungwort-animate.html">Animated</a></li><li> <a href="index-lungwort-particle.html">Particle</a></li><li> <a href="index-lungwort-particle-animate.html">Particle - Ani</a></li></ul></div></div></div><div class="col-lg-4 col-sm-6"><div class="demo-theme-item demo-theme-item-2"><div class="demo-image"> <a href="index-jasmine-particle-animate.html"> <img src="' + B + 'demo-jasmine.jpg" alt="alt"> </a> <span class="demo-new-badge demo-hot-badge">v1.3 New</span></div><div class="demo-text"> <a class="demo-title" href="index-jasmine-particle-animate.html"><h5>Landing V9 <span>Jasmine</span></h5> </a><ul class="demo-item-list"><li> <a href="index-jasmine.html">Default</a></li><li> <a href="index-jasmine-animate.html">Animated</a></li><li> <a href="index-jasmine-particle.html">Particle</a></li><li> <a href="index-jasmine-particle-animate.html">Particle - Ani</a></li></ul></div></div></div><div class="col-lg-4 col-sm-6"><div class="demo-theme-item demo-theme-item-3"><div class="demo-image"> <a href="index-lobelia-particle-animate.html"> <img src="' + B + 'demo-lobelia.jpg" alt="alt"> </a> <span class="demo-new-badge demo-hot-badge">v1.2.3</span></div><div class="demo-text"> <a class="demo-title" href="index-lobelia-particle-animate.html"><h5>Landing V8 <span>Lobelia Dark</span></h5> </a><ul class="demo-item-list"><li> <a href="index-lobelia.html">Default</a></li><li> <a href="index-lobelia-animate.html">Animated</a></li><li> <a href="index-lobelia-particle.html">Particle</a></li><li> <a href="index-lobelia-particle-animate.html">Particle - Ani</a></li></ul></div></div></div><div class="col-lg-4 col-sm-6"><div class="demo-theme-item demo-theme-item-4"><div class="demo-image"> <a href="index-muscari-particle-animate.html"> <img src="' + B + 'demo-muscari.jpg" alt="alt"> </a> <span class="demo-new-badge">v1.2.1</span></div><div class="demo-text"> <a class="demo-title" href="index-muscari-particle-animate.html"><h5>Landing V7 <span>Muscari Light</span></h5> </a><ul class="demo-item-list"><li> <a href="index-muscari.html">Default</a></li><li> <a href="index-muscari-animate.html">Animated</a></li><li> <a href="index-muscari-particle.html">Particle</a></li><li> <a href="index-muscari-particle-animate.html">Particle - Ani</a></li></ul></div></div></div><div class="col-lg-4 col-sm-6"><div class="demo-theme-item demo-theme-item-5"><div class="demo-image"> <a href="index-lavender-particle-animate.html"> <img src="' + B + 'demo-lavender.jpg" alt="alt"> </a> <span class="demo-new-badge">v1.2</span></div><div class="demo-text"> <a class="demo-title" href="index-lavender-particle-animate.html"><h5>Landing V6 <span>Lavender Light</span></h5> </a><ul class="demo-item-list"><li> <a href="index-lavender.html">Default</a></li><li> <a href="index-lavender-animate.html">Animated</a></li><li> <a href="index-lavender-particle.html">Particle</a></li><li> <a href="index-lavender-particle-animate.html">Particle - Ani</a></li></ul></div></div></div><div class="col-lg-4 col-sm-6"><div class="demo-theme-item demo-theme-item-6"><div class="demo-image"> <a href="index-azure-light-pro-tokensales.html"> <img src="' + B + 'demo-azure-pro.jpg" alt="alt"> </a> <span class="demo-new-badge">v1.1</span></div><div class="demo-text"> <a class="demo-title" href="index-azure-light-pro-tokensales.html"><h5>Landing V5 <span>Azure Light Pro</span></h5> </a><ul class="demo-item-list"><li> <a href="index-azure-light-pro.html">Default</a></li><li> <a href="index-azure-light-pro-animate.html">Animated</a></li><li> <a href="index-azure-light-pro-particle.html">Particle</a></li><li> <a href="index-azure-light-pro-particle-animate.html">Particle - Ani</a></li></ul></div></div></div><div class="col-lg-4 col-sm-6"><div class="demo-theme-item demo-theme-item-7"><div class="demo-image"> <a href="index-azure-particle-animate.html"> <img src="' + B + 'demo-azure.jpg" alt="alt"> </a> <span class="demo-new-badge">v1.1</span></div><div class="demo-text"> <a class="demo-title" href="index-azure-particle-animate.html"><h5>Landing V4 <span>Default Azure</span></h5> </a><ul class="demo-item-list"><li> <a href="index-azure.html">Default</a></li><li> <a href="index-azure-animate.html">Animated</a></li><li> <a href="index-azure-particle.html">Particle</a></li><li> <a href="index-azure-particle-animate.html">Particle - Ani</a></li></ul></div></div></div><div class="col-lg-4 col-sm-6"><div class="demo-theme-item demo-theme-item-8"><div class="demo-image"> <a href="index-dark-pro-particle-animate.html"> <img src="' + B + 'demo-dark-pro.jpg" alt="alt"> </a> <span class="demo-new-badge">v1.1</span></div><div class="demo-text"> <a class="demo-title" href="index-dark-pro-particle-animate.html"><h5>Landing V3 <span>Default Dark Pro</span></h5> </a><ul class="demo-item-list"><li> <a href="index-dark-pro.html">Default</a></li><li> <a href="index-dark-pro-animate.html">Animated</a></li><li> <a href="index-dark-pro-particle.html">Particle</a></li><li> <a href="index-dark-pro-particle-animate.html">Particle - Ani</a></li></ul></div></div></div><div class="col-lg-4 col-sm-6"><div class="demo-theme-item demo-theme-item-9"><div class="demo-image"> <a href="index-light-tokensales.html"> <img src="' + B + 'demo-pro.jpg" alt="alt"> </a> <span class="demo-new-badge">v1.0</span></div><div class="demo-text"> <a class="demo-title" href="index-light-tokensales.html"><h5>Landing V2 <span>Default Light</span></h5> </a><ul class="demo-item-list"><li> <a href="index-light.html">Default</a></li><li> <a href="index-light-animate.html">Animated</a></li><li> <a href="index-light-particle.html">Particle</a></li><li> <a href="index-light-particle-animate.html">Particle - Ani</a></li></ul></div></div></div><div class="col-lg-4 col-sm-6"><div class="demo-theme-item demo-theme-item-10"><div class="demo-image"> <a href="index-dark-particle-animate.html"> <img src="' + B + 'demo-dark.jpg" alt="alt"> </a> <span class="demo-new-badge">v1.0</span></div><div class="demo-text"> <a class="demo-title" href="index-dark-particle-animate.html"><h5>Landing V1 <span>Default Dark</span></h5> </a><ul class="demo-item-list"><li> <a href="index-dark.html">Default</a></li><li> <a href="index-dark-animate.html">Animated</a></li><li> <a href="index-dark-particle.html">Particle</a></li><li> <a href="index-dark-particle-animate.html">Particle - Ani</a></li></ul></div></div></div></div></div><div class="col-lg-3"><div class="demo-extra-page-list"><h5>Extra Pages</h5><ul class="demo-extra-item-list"><li> <a href="login-dark.html">Login - <span>Dark</span> </a></li><li> <a href="login-light.html">Login - <span>Light</span> </a></li><li> <a href="signup-dark.html">Sign Up - <span>Dark</span> </a></li><li> <a href="signup-light.html">Sign Up - <span>Light</span> </a></li><li> <a href="signup-azure.html">Sign Up - <span>Azure</span> </a></li><li> <a href="signup-lavender.html">Sign Up - <span>Lavender</span> </a></li><li> <a href="signup-muscari.html">Sign Up - <span>Muscari</span> </a></li><li> <a href="signup-lobelia.html">Sign Up - <span>Lobelia</span> </a></li><li> <a href="404-dark.html">404 - <span>Dark</span> </a></li><li> <a href="404-light.html">404 - <span>Light</span> </a></li><li> <a href="404-azure.html">404 - <span>Azure</span> </a></li><li> <a href="blog-archive-dark.html">Blog Archive - <span>Dark</span> </a></li><li> <a href="blog-single-dark.html">Blog Single - <span>Dark</span> </a></li><li> <a href="index-dark-tokensales.html">Token Sales - <span>Dark</span> </a></li><li> <a href="blog-archive-light.html">Blog Archive - <span>Light</span> </a></li><li> <a href="blog-single-light.html">Blog Single - <span>Light</span> </a></li><li> <a href="index-light-tokensales.html">Token Sales - <span>Light</span> </a></li><li> <a href="blog-archive-dark-pro.html">Blog Archive - <span>Dark Pro</span> </a></li><li> <a href="blog-single-dark-pro.html">Blog Single - <span>Dark Pro</span> </a></li><li> <a href="index-dark-pro-tokensales.html">Token Sales - <span>Dark Pro</span> </a></li><li> <a href="blog-archive-azure.html">Blog Archive - <span>Azure</span> </a></li><li> <a href="blog-single-azure.html">Blog Single - <span>Azure</span> </a></li><li> <a href="index-azure-tokensales.html">Token Sales - <span>Azure</span> </a></li><li> <a href="blog-archive-azure-light-pro.html">Blog Archive - <span>Azure Pro</span> </a></li><li> <a href="blog-single-azure-light-pro.html">Blog Single - <span>Azure Pro</span> </a></li><li> <a href="index-azure-light-pro-tokensales.html">Token Sales - <span>Azure Pro</span> </a></li></ul></div></div></div></div></div></div>'), a(".demo-themes,.demo-close").on("click", function() {
    a(".demo-theme-content").toggleClass("active"), a("html").toggleClass("demo-on")
  }), a(".demo-toggle").on("click", function() {
    a(".demo-content").slideToggle("slow")
  });
  var O = a(".color-trigger");
  O.length > 0 && O.on("click", function() {
    var e = a(this).attr("title");
    return a("#layoutstyle").attr("href", "assets/css/" + e + ".css"), !1
  });
  var F = a(".animated");
  a().waypoint && F.length > 0 && e.on("load", function() {
    F.each(function() {
      var e = a(this),
        i = e.data("animate"),
        l = e.data("duration"),
        t = e.data("delay");
      e.waypoint(function() {
        e.addClass("animated " + i).css("visibility", "visible"), l && e.css("animation-duration", l + "s"), t && e.css("animation-delay", t + "s")
      }, {
        offset: "93%"
      })
    })
  });
  var M = a("#preloader"),
    E = a("#loader");
  M.length > 0 && e.on("load", function() {
    E.fadeOut(300), i.addClass("loaded"), M.delay(700).fadeOut(300)
  });
  var J = ".slider-pane";
  if (a(J).length > 0) {
    var X = !!i.hasClass("is-rtl");
    a(J).addClass("owl-carousel").owlCarousel({
      items: 1,
      nav: !1,
      dotsContainer: ".slider-nav",
      margin: 30,
      loop: !0,
      autoplayTimeout: 3e3,
      rtl: X,
      autoplay: !0,
      animateOut: "fadeOut",
      autoplayHoverPause: !0
    })
  }
  var I = a(".card");
  I.length > 0 && I.each(function() {
    a(".card-header a").on("click", function() {
      var e = a(this);
      e.parent().parent().parent().parent().find(I).removeClass("active"), e.parent().parent().parent().addClass("active")
    })
  }), a("#particles-js").length > 0 && particlesJS("particles-js", {
    particles: {
      number: {
        value: 50,
        density: {
          enable: !0,
          value_area: 800
        }
      },
      color: {
        value: "#00c0fa"
      },
      shape: {
        type: "circle",
        opacity: .2,
        stroke: {
          width: 0,
          color: "#2b56f5"
        },
        polygon: {
          nb_sides: 5
        },
        image: {
          src: "img/github.svg",
          width: 100,
          height: 100
        }
      },
      opacity: {
        value: .3,
        random: !1,
        anim: {
          enable: !1,
          speed: 1,
          opacity_min: .12,
          sync: !1
        }
      },
      size: {
        value: 6,
        random: !0,
        anim: {
          enable: !1,
          speed: 40,
          size_min: .08,
          sync: !1
        }
      },
      line_linked: {
        enable: !0,
        distance: 150,
        color: "#2b56f5",
        opacity: .5,
        width: 1.3
      },
      move: {
        enable: !0,
        speed: 6,
        direction: "none",
        random: !1,
        straight: !1,
        out_mode: "out",
        bounce: !1,
        attract: {
          enable: !1,
          rotateX: 600,
          rotateY: 1200
        }
      }
    },
    interactivity: {
      detect_on: "canvas",
      events: {
        onhover: {
          enable: !0,
          mode: "repulse"
        },
        onclick: {
          enable: !0,
          mode: "push"
        },
        resize: !0
      },
      modes: {
        grab: {
          distance: 400,
          line_linked: {
            opacity: 1
          }
        },
        bubble: {
          distance: 400,
          size: 40,
          duration: 2,
          opacity: 8,
          speed: 3
        },
        repulse: {
          distance: 200,
          duration: .4
        },
        push: {
          particles_nb: 4
        },
        remove: {
          particles_nb: 2
        }
      }
    },
    retina_detect: !0
  })
}(jQuery);
