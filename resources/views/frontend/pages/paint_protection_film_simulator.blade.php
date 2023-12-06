

@extends('frontend.layout.app')

@section('title')
{{__('THE ARMOUR LAB')}}
@endsection

@section('css')
<link rel="stylesheet" href="secure/css/shoppingfef6.css?t=1696719147777">
<link rel="stylesheet" href="web-assets/css/customfef6.css?t=1696719147777">
<style>
    .slide__button-download {
        display: none;
    }
</style>

<script>
    window.nitro_lazySizesConfig = window.nitro_lazySizesConfig || {};
    window.nitro_lazySizesConfig.lazyClass = "nitro-lazy";
    nitro_lazySizesConfig.srcAttr = "nitro-lazy-src";
    nitro_lazySizesConfig.srcsetAttr = "nitro-lazy-srcset";
    nitro_lazySizesConfig.expand = 10;
    nitro_lazySizesConfig.expFactor = 1;
    nitro_lazySizesConfig.hFac = 1;
    nitro_lazySizesConfig.loadMode = 1;
    nitro_lazySizesConfig.ricTimeout = 50;
    nitro_lazySizesConfig.loadHidden = true;
    (function() {
        var t = null;
        var e = false;
        var i = false;
        var a = {
            childList: false,
            attributes: true,
            subtree: false,
            attributeFilter: ["src"],
            attributeOldValue: true
        };
        var r = null;
        var n = [];
        var o = window.scrollY;
        var l = Date.now();

        function s(t) {
            let e = n.indexOf(t);
            if (e > -1) {
                n.splice(e, 1);
                r.disconnect();
                f()
            }
            t.src = t.getAttribute("nitro-og-src")
        }

        function c() {
            if (!r) {
                r = new MutationObserver(function(t, n) {
                    t.forEach(r => {
                        if (r.type == "attributes" && r.attributeName == "src") {
                            let e = r.target;
                            let i = e.getAttribute("nitro-og-src");
                            let a = e.src;
                            if (a != i) {
                                n.disconnect();
                                let t = a.replace(r.oldValue, "");
                                if (a.indexOf("data:") === 0 && ["?", "&"].indexOf(t.substr(0, 1)) > -1) {
                                    if (i.indexOf("?") > -1) {
                                        e.setAttribute("nitro-og-src", i + "&" + t.substr(1))
                                    } else {
                                        e.setAttribute("nitro-og-src", i + "?" + t.substr(1))
                                    }
                                }
                                e.src = r.oldValue;
                                f()
                            }
                        }
                    })
                })
            }
            return r
        }

        function d(t) {
            c().observe(t, a)
        }

        function f() {
            n.forEach(d)
        }

        function g() {
            window.removeEventListener("scroll", g);
            window.nitro_lazySizesConfig.expand = 300
        }

        function u(t) {
            let e = t.timeStamp - l;
            let i = Math.abs(o - window.scrollY) / e;
            let a = Math.max(i * 200, 300);
            l = t.timeStamp;
            o = window.scrollY;
            window.nitro_lazySizesConfig.expand = a
        }
        window.addEventListener("scroll", u, {
            passive: true
        });
        window.addEventListener("NitroStylesLoaded", function() {
            e = true
        });
        window.addEventListener("load", function() {
            i = true
        });
        window.addEventListener("message", function(t) {
            if (t.data.action && t.data.action === "playBtnClicked") {
                var e = document.getElementsByTagName("iframe");
                for (var i = 0; i < e.length; i++) {
                    if (t.source === e[i].contentWindow) {
                        s(e[i])
                    }
                }
            }
        });
        document.addEventListener("lazybeforeunveil", function(a) {
            var r = false;
            var n = a.target.getAttribute("nitro-lazy-bg");
            var t = a.target.getAttribute("data-nitro-fragment-id");
            if (n) {
                let t = a.target.style.backgroundImage.replace("data:image/gif;base64,R0lGODlhAQABAIABAAAAAP///yH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==", n.replace(/\(/g, "%28").replace(/\)/g, "%29"));
                if (t === a.target.style.backgroundImage) {
                    t = "url(" + n.replace(/\(/g, "%28").replace(/\)/g, "%29") + ")"
                }
                let e = a.target.style.backgroundImage;
                let i = ["initial", "inherit"].indexOf(e.toLowerCase()) === -1;
                if (e && i) {
                    t = e + ", " + t
                }
                a.target.style.backgroundImage = t;
                r = true
            }
            if (t) {
                if (!window.loadNitroFragment(t, "lazy")) {
                    a.preventDefault();
                    return false
                }
            }
            if (a.target.classList.contains("av-animated-generic")) {
                a.target.classList.add("avia_start_animation", "avia_start_delayed_animation")
            }
            if (!r) {
                var e = a.target.tagName.toLowerCase();
                if (e !== "img" && e !== "iframe") {
                    a.target.querySelectorAll("img[nitro-lazy-src],img[nitro-lazy-srcset]").forEach(function(t) {
                        t.classList.add("nitro-lazy")
                    })
                }
            }
        });
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll("iframe[nitro-og-src]").forEach(t => {
                n.push(t)
            });
            f()
        })
    })();
</script>
<script id="nitro-lazyloader">
    /*! lazysizes - v5.1.2 */ ! function(a, b) {
        var c = b(a, a.document);
        a.lazySizes = c, "object" == typeof module && module.exports && (module.exports = c)
    }("undefined" != typeof window ? window : {}, function(a, b) {
        "use strict";
        var c, d;
        if (function() {
                var b, c = {
                    lazyClass: "lazyload",
                    loadedClass: "lazyloaded",
                    loadingClass: "lazyloading",
                    preloadClass: "lazypreload",
                    errorClass: "lazyerror",
                    autosizesClass: "lazyautosizes",
                    srcAttr: "data-src",
                    srcsetAttr: "data-srcset",
                    sizesAttr: "data-sizes",
                    minSize: 40,
                    customMedia: {},
                    init: !0,
                    expFactor: 1.5,
                    hFac: .8,
                    loadMode: 2,
                    loadHidden: !0,
                    ricTimeout: 0,
                    throttleDelay: 125
                };
                d = a.nitro_lazySizesConfig || a.nitro_lazysizesConfig || {};
                for (b in c) b in d || (d[b] = c[b])
            }(), !b || !b.getElementsByClassName) return {
            init: function() {},
            cfg: d,
            noSupport: !0
        };
        var e = b.documentElement,
            f = a.Date,
            g = a.HTMLPictureElement,
            h = "addEventListener",
            i = "getAttribute",
            j = a[h],
            k = a.setTimeout,
            l = a.requestAnimationFrame || k,
            m = a.requestIdleCallback,
            n = /^picture$/i,
            o = ["load", "error", "lazyincluded", "_lazyloaded"],
            p = {},
            q = Array.prototype.forEach,
            r = function(a, b) {
                return p[b] || (p[b] = new RegExp("(\\s|^)" + b + "(\\s|$)")), p[b].test(a[i]("class") || "") && p[b]
            },
            s = function(a, b) {
                r(a, b) || a.setAttribute("class", (a[i]("class") || "").trim() + " " + b)
            },
            t = function(a, b) {
                var c;
                (c = r(a, b)) && a.setAttribute("class", (a[i]("class") || "").replace(c, " "))
            },
            u = function(a, b, c) {
                var d = c ? h : "removeEventListener";
                c && u(a, b), o.forEach(function(c) {
                    a[d](c, b)
                })
            },
            v = function(a, d, e, f, g) {
                var h = b.createEvent("Event");
                return e || (e = {}), e.instance = c, h.initEvent(d, !f, !g), h.detail = e, a.dispatchEvent(h), h
            },
            w = function(b, c) {
                var e;
                !g && (e = a.picturefill || d.pf) ? (c && c.src && !b[i]("srcset") && b.setAttribute("srcset", c.src), e({
                    reevaluate: !0,
                    elements: [b]
                })) : c && c.src && (b.src = c.src)
            },
            x = function(a, b) {
                return (getComputedStyle(a, null) || {})[b]
            },
            y = function(a, b, c) {
                for (c = c || a.offsetWidth; c < d.minSize && b && !a._lazysizesWidth;) c = b.offsetWidth, b = b.parentNode;
                return c
            },
            z = function() {
                var a, c, d = [],
                    e = [],
                    f = d,
                    g = function() {
                        var b = f;
                        for (f = d.length ? e : d, a = !0, c = !1; b.length;) b.shift()();
                        a = !1
                    },
                    h = function(d, e) {
                        a && !e ? d.apply(this, arguments) : (f.push(d), c || (c = !0, (b.hidden ? k : l)(g)))
                    };
                return h._lsFlush = g, h
            }(),
            A = function(a, b) {
                return b ? function() {
                    z(a)
                } : function() {
                    var b = this,
                        c = arguments;
                    z(function() {
                        a.apply(b, c)
                    })
                }
            },
            B = function(a) {
                var b, c = 0,
                    e = d.throttleDelay,
                    g = d.ricTimeout,
                    h = function() {
                        b = !1, c = f.now(), a()
                    },
                    i = m && g > 49 ? function() {
                        m(h, {
                            timeout: g
                        }), g !== d.ricTimeout && (g = d.ricTimeout)
                    } : A(function() {
                        k(h)
                    }, !0);
                return function(a) {
                    var d;
                    (a = !0 === a) && (g = 33), b || (b = !0, d = e - (f.now() - c), d < 0 && (d = 0), a || d < 9 ? i() : k(i, d))
                }
            },
            C = function(a) {
                var b, c, d = 99,
                    e = function() {
                        b = null, a()
                    },
                    g = function() {
                        var a = f.now() - c;
                        a < d ? k(g, d - a) : (m || e)(e)
                    };
                return function() {
                    c = f.now(), b || (b = k(g, d))
                }
            },
            D = function() {
                var g, l, m, o, p, y, D, F, G, H, I, J, K = /^img$/i,
                    L = /^iframe$/i,
                    M = "onscroll" in a && !/(gle|ing)bot/.test(navigator.userAgent),
                    N = 0,
                    O = 0,
                    P = 0,
                    Q = -1,
                    R = function(a) {
                        P--, (!a || P < 0 || !a.target) && (P = 0)
                    },
                    S = function(a) {
                        return null == J && (J = "hidden" == x(b.body, "visibility")), J || !("hidden" == x(a.parentNode, "visibility") && "hidden" == x(a, "visibility"))
                    },
                    T = function(a, c) {
                        var d, f = a,
                            g = S(a);
                        for (F -= c, I += c, G -= c, H += c; g && (f = f.offsetParent) && f != b.body && f != e;)(g = (x(f, "opacity") || 1) > 0) && "visible" != x(f, "overflow") && (d = f.getBoundingClientRect(), g = H > d.left && G < d.right && I > d.top - 1 && F < d.bottom + 1);
                        return g
                    },
                    U = function() {
                        var a, f, h, j, k, m, n, p, q, r, s, t, u = c.elements;
                        if ((o = d.loadMode) && P < 8 && (a = u.length)) {
                            for (f = 0, Q++; f < a; f++)
                                if (u[f] && !u[f]._lazyRace)
                                    if (!M || c.prematureUnveil && c.prematureUnveil(u[f])) aa(u[f]);
                                    else if ((p = u[f][i]("data-expand")) && (m = 1 * p) || (m = O), r || (r = !d.expand || d.expand < 1 ? e.clientHeight > 500 && e.clientWidth > 500 ? 500 : 370 : d.expand, c._defEx = r, s = r * d.expFactor, t = d.hFac, J = null, O < s && P < 1 && Q > 2 && o > 2 && !b.hidden ? (O = s, Q = 0) : O = o > 1 && Q > 1 && P < 6 ? r : N), q !== m && (y = innerWidth + m * t, D = innerHeight + m, n = -1 * m, q = m), h = u[f].getBoundingClientRect(), (I = h.bottom) >= n && (F = h.top) <= D && (H = h.right) >= n * t && (G = h.left) <= y && (I || H || G || F) && (d.loadHidden || S(u[f])) && (l && P < 3 && !p && (o < 3 || Q < 4) || T(u[f], m))) {
                                if (aa(u[f]), k = !0, P > 9) break
                            } else !k && l && !j && P < 4 && Q < 4 && o > 2 && (g[0] || d.preloadAfterLoad) && (g[0] || !p && (I || H || G || F || "auto" != u[f][i](d.sizesAttr))) && (j = g[0] || u[f]);
                            j && !k && aa(j)
                        }
                    },
                    V = B(U),
                    W = function(a) {
                        var b = a.target;
                        if (b._lazyCache) return void delete b._lazyCache;
                        R(a), s(b, d.loadedClass), t(b, d.loadingClass), u(b, Y), v(b, "lazyloaded")
                    },
                    X = A(W),
                    Y = function(a) {
                        X({
                            target: a.target
                        })
                    },
                    Z = function(a, b) {
                        try {
                            a.contentWindow.location.replace(b)
                        } catch (c) {
                            a.src = b
                        }
                    },
                    $ = function(a) {
                        var b, c = a[i](d.srcsetAttr);
                        (b = d.customMedia[a[i]("data-media") || a[i]("media")]) && a.setAttribute("media", b), c && a.setAttribute("srcset", c)
                    },
                    _ = A(function(a, b, c, e, f) {
                        var g, h, j, l, o, p;
                        (o = v(a, "lazybeforeunveil", b)).defaultPrevented || (e && (c ? s(a, d.autosizesClass) : a.setAttribute("sizes", e)), h = a[i](d.srcsetAttr), g = a[i](d.srcAttr), f && (j = a.parentNode, l = j && n.test(j.nodeName || "")), p = b.firesLoad || "src" in a && (h || g || l), o = {
                            target: a
                        }, s(a, d.loadingClass), p && (clearTimeout(m), m = k(R, 2500), u(a, Y, !0)), l && q.call(j.getElementsByTagName("source"), $), h ? a.setAttribute("srcset", h) : g && !l && (L.test(a.nodeName) ? Z(a, g) : a.src = g), f && (h || l) && w(a, {
                            src: g
                        })), a._lazyRace && delete a._lazyRace, t(a, d.lazyClass), z(function() {
                            var b = a.complete && a.naturalWidth > 1;
                            p && !b || (b && s(a, "ls-is-cached"), W(o), a._lazyCache = !0, k(function() {
                                "_lazyCache" in a && delete a._lazyCache
                            }, 9)), "lazy" == a.loading && P--
                        }, !0)
                    }),
                    aa = function(a) {
                        if (!a._lazyRace) {
                            var b, c = K.test(a.nodeName),
                                e = c && (a[i](d.sizesAttr) || a[i]("sizes")),
                                f = "auto" == e;
                            (!f && l || !c || !a[i]("src") && !a.srcset || a.complete || r(a, d.errorClass) || !r(a, d.lazyClass)) && (b = v(a, "lazyunveilread").detail, f && E.updateElem(a, !0, a.offsetWidth), a._lazyRace = !0, P++, _(a, b, f, e, c))
                        }
                    },
                    ba = C(function() {
                        d.loadMode = 3, V()
                    }),
                    ca = function() {
                        3 == d.loadMode && (d.loadMode = 2), ba()
                    },
                    da = function() {
                        if (!l) {
                            if (f.now() - p < 999) return void k(da, 999);
                            l = !0, d.loadMode = 3, V(), j("scroll", ca, !0)
                        }
                    };
                return {
                    _: function() {
                        p = f.now(), c.elements = b.getElementsByClassName(d.lazyClass), g = b.getElementsByClassName(d.lazyClass + " " + d.preloadClass), j("scroll", V, !0), j("resize", V, !0), a.MutationObserver ? new MutationObserver(V).observe(e, {
                            childList: !0,
                            subtree: !0,
                            attributes: !0
                        }) : (e[h]("DOMNodeInserted", V, !0), e[h]("DOMAttrModified", V, !0), setInterval(V, 999)), j("hashchange", V, !0), ["focus", "mouseover", "click", "load", "transitionend", "animationend"].forEach(function(a) {
                            b[h](a, V, !0)
                        }), /d$|^c/.test(b.readyState) ? da() : (j("load", da), b[h]("DOMContentLoaded", V), k(da, 2e4)), c.elements.length ? (U(), z._lsFlush()) : V()
                    },
                    checkElems: V,
                    unveil: aa,
                    _aLSL: ca
                }
            }(),
            E = function() {
                var a, c = A(function(a, b, c, d) {
                        var e, f, g;
                        if (a._lazysizesWidth = d, d += "px", a.setAttribute("sizes", d), n.test(b.nodeName || ""))
                            for (e = b.getElementsByTagName("source"), f = 0, g = e.length; f < g; f++) e[f].setAttribute("sizes", d);
                        c.detail.dataAttr || w(a, c.detail)
                    }),
                    e = function(a, b, d) {
                        var e, f = a.parentNode;
                        f && (d = y(a, f, d), e = v(a, "lazybeforesizes", {
                            width: d,
                            dataAttr: !!b
                        }), e.defaultPrevented || (d = e.detail.width) && d !== a._lazysizesWidth && c(a, f, e, d))
                    },
                    f = function() {
                        var b, c = a.length;
                        if (c)
                            for (b = 0; b < c; b++) e(a[b])
                    },
                    g = C(f);
                return {
                    _: function() {
                        a = b.getElementsByClassName(d.autosizesClass), j("resize", g)
                    },
                    checkElems: g,
                    updateElem: e
                }
            }(),
            F = function() {
                !F.i && b.getElementsByClassName && (F.i = !0, E._(), D._())
            };
        return k(function() {
            d.init && F()
        }), c = {
            cfg: d,
            autoSizer: E,
            loader: D,
            init: F,
            uP: w,
            aC: s,
            rC: t,
            hC: r,
            fire: v,
            gW: y,
            rAF: z
        }
    });
</script>

@endsection

@section('content')
<div class="page-content bg-white">

    <div class="page-banner ovbl-dark" style="background-image:url(images/banner/bnr1.jpg);">
        <div class="container">
            <div class="page-banner-entry text-center">
                <h1><span>PAINT PROTECTION FILM SIMULATOR</span></h1>
                <!-- Breadcrumb row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/"><i class="las la-home"></i>Home > </a></li>
                        <li class="breadcrumb-item active" aria-current="page">PAINT PROTECTION FILM SIMULATOR</li>
                    </ul>
                </nav>
                <!-- Breadcrumb row END -->
            </div>
        </div>
    </div>

    <div id="main" role="main" class="vamtam-main layout-full">
        <div class="page-wrapper">
            <article id="post-988917" class="full post-988917 page type-page status-publish hentry">
                <div class="page-content clearfix the-content-parent">
                    <div data-elementor-type="wp-page" data-elementor-id="988917" class="elementor elementor-988917">
                        <section data-particle_enable="false" data-particle-mobile-disabled="false" class="elementor-section elementor-top-section elementor-element elementor-element-dd9d81a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="dd9d81a" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-de24451" data-id="de24451" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-68a1ead elementor-widget elementor-widget-heading" data-id="68a1ead" data-element_type="widget" data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default"></h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-02883b5 elementor-widget elementor-widget-html" data-id="02883b5" data-element_type="widget" data-widget_type="html.default">
                                            <div class="elementor-widget-container"> <iframe loading="lazy" width="100%" height="1000px" nitro-lazy-src="https://llumar.com/na/en/automotive/window-film-ppf-viewer/dealer-auto-ppf-viewer/" class="nitro-lazy" allow="autoplay; encrypted-media; gyroscope;"></iframe> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>
@endsection

@section('scripts')



@endsection