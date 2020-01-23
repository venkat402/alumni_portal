"use strict";
jQuery(document).ready(function(e) {
    e("#off-canvas").length > 0 && (e(".navbar-nav").clone().prependTo("#off-canvas .offcanvaswrap_menus"), e(function() {
        e(document).trigger("enhance")
    }), e(document.body).addClass("offcanvas-added")), e(".slider-active-wrap").owlCarousel({
        items: 1,
        loop: !0,
        nav: !1,
        autoplay: !1,
        autoplayTimeout: 3e3,
        animateOut: "fadeOut",
        animateIn: "fadeIn"
    }), e(".upcoming-event-content").owlCarousel({
        nav: !0,
        loop: !0,
        items: 1,
        dots: !1,
        autoPlay: !1,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"]
    }), e(".funfact-count").counterUp({
        delay: 50,
        time: 1e3
    }), e(".gallery-gird").isotope(), e(".gallery-menu span").on("click", function() {
        e(".gallery-menu span").removeClass("active"), e(this).addClass("active");
        var a = e(this).attr("data-filter");
        return e(".gallery-gird").isotope({
            filter: a
        }), !1
    }), e(".single-gallery-item").magnificPopup({
        delegate: "a",
        type: "image",
        mainClass: "mfp-fade",
        removalDelay: 300,
        gallery: {
            enabled: !0
        }
    }), e(".video-popup").magnificPopup({
        type: "iframe",
        mainClass: "mfp-fade",
        removalDelay: 300
    }), e(".smooth-scroll").smoothScroll({
        speed: 1e3,
        easing: "jswing"
    }), e(".people-to-say-wrapper").owlCarousel({
        nav: !1,
        loop: !0,
        items: 3,
        dots: !1,
        autoPlay: !0,
        margin: 30,
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            }
        }
    }), e("select").niceSelect(), e(".event-thumbnail-carousel").owlCarousel({
        items: 1,
        loop: !0,
        dots: !1,
        nav: !0,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>']
    });
    var a = document.getElementById("fixheader"),
        s = a.offsetTop;
    e(".scroll-top").on("click", function() {
        return e("html").animate({
            scrollTop: 0
        }, 2e3), !1
    }), e(".event-countdown-counter").each(function(a, s) {
        var t = e(s),
            r = t.data("date");
        t.countdown(r, function(a) {
            e(this).html(a.strftime('<div class="counter-item"><span class="counter-label">Days</span><span class="single-cont">%D</span></div><div class="counter-item"><span class="counter-label">Hr</span><span class="single-cont">%H</span></div><div class="counter-item"><span class="counter-label">Min</span><span class="single-cont">%M</span></div><div class="counter-item"><span class="counter-label">Sec</span><span class="single-cont">%S</span></div>'))
        })
    }), e(window).scroll(function() {
        window.pageYOffset >= s ? a.classList.add("fixed") : a.classList.remove("fixed"), e(window).scrollTop() >= 500 ? e(".scroll-top").fadeIn() : e(".scroll-top").fadeOut()
    });
    for (var t = window.location.protocol + "//" + window.location.host, r = window.location.pathname.split("/"), o = 1; o < r.length - 1; o++) t += "/", t += r[o];
    e("form#cbx-contact-form").validate({
        submitHandler: function(a) {
            var s = e(a);
            return e.ajax({
                url: t + "/php/contact.php",
                type: "post",
                data: s.serialize(),
                success: function(a) {
                    try {
                        (a = e.parseJSON(a)).error ? e.each(a.error_field, function(s) {
                            0 == e("label#" + a.error_field[s] + "-error").length && e("#" + a.error_field[s]).after('<label class="error" for="' + a.error_field[s] + '" id="' + a.error_field[s] + '-error"></label>'), e("label#" + a.error_field[s] + "-error").text(a.message[a.error_field[s]])
                        }) : a.successmessage && (e("#cbx-formalert").addClass("alert alert alert-success").html(a.successmessage), s[0].reset())
                    } catch (e) {
                        s[0].reset()
                    }
                },
                error: function(e) {
                    s[0].reset()
                }
            }), !1
        },
        rules: {
            cbxname: {
                required: !0
            },
            cbxemail: {
                required: !0
            },
            cbxmessage: {
                required: !0
            },
            cbxsubject: {
                required: !0
            }
        }
    });
    var n = function(e) {
        return /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(e)
    };
    e("form#cbx-subscribe-form").on("submit", function(a) {
        a.preventDefault();
        var s = e(this),
            r = e("form#cbx-subscribe-form").find("input#subscribe");
        if (!n(r.val())) return r.css("color", "#f00"), !1;
        e.ajax({
            url: t + "/php/subscribe.php",
            type: "post",
            data: {
                email: r.val().toLowerCase()
            },
            beforeSubmit: function(e) {},
            success: function(a) {
                try {
                    if ((a = e.parseJSON(a)).error) throw r.removeAttr("style"), a.message;
                    r.css("color", "#0f0")
                } catch (e) {}
            },
            error: function(e) {}
        }), s[0].reset()
    }), e("form.subscribe-form input#subscribe").on("keyup", function(a) {
        this.style.color = n(e(this).val()) ? "#f5832b" : "#f00"
    })
});