/*! For license information please see app.3560f3c5.js.LICENSE.txt */
!(function () {
    "use strict";
    var t,
        e = {
            69774: function (t, e, n) {
                n(92676),
                    n(74124),
                    n(88981),
                    n(6203),
                    n(38077),
                    n(60228),
                    n(64043),
                    n(9873),
                    n(28436),
                    n(73964),
                    n(59749),
                    n(86544),
                    n(84254),
                    n(752),
                    n(21694),
                    n(76265),
                    n(58373),
                    n(66793),
                    n(7629),
                    n(77509),
                    n(88052),
                    n(49693),
                    n(47522),
                    n(34284),
                    n(5399),
                    n(89730);
                var r = n(39883);
                function o(t) {
                    return (
                        (o =
                            "function" == typeof Symbol &&
                            "symbol" == typeof Symbol.iterator
                                ? function (t) {
                                      return typeof t;
                                  }
                                : function (t) {
                                      return t &&
                                          "function" == typeof Symbol &&
                                          t.constructor === Symbol &&
                                          t !== Symbol.prototype
                                          ? "symbol"
                                          : typeof t;
                                  }),
                        o(t)
                    );
                }
                function i() {
                    i = function () {
                        return e;
                    };
                    var t,
                        e = {},
                        n = Object.prototype,
                        r = n.hasOwnProperty,
                        a =
                            Object.defineProperty ||
                            function (t, e, n) {
                                t[e] = n.value;
                            },
                        u = "function" == typeof Symbol ? Symbol : {},
                        c = u.iterator || "@@iterator",
                        s = u.asyncIterator || "@@asyncIterator",
                        l = u.toStringTag || "@@toStringTag";
                    function f(t, e, n) {
                        return (
                            Object.defineProperty(t, e, {
                                value: n,
                                enumerable: !0,
                                configurable: !0,
                                writable: !0,
                            }),
                            t[e]
                        );
                    }
                    try {
                        f({}, "");
                    } catch (t) {
                        f = function (t, e, n) {
                            return (t[e] = n);
                        };
                    }
                    function h(t, e, n, r) {
                        var o = e && e.prototype instanceof w ? e : w,
                            i = Object.create(o.prototype),
                            u = new P(r || []);
                        return a(i, "_invoke", { value: j(t, n, u) }), i;
                    }
                    function d(t, e, n) {
                        try {
                            return { type: "normal", arg: t.call(e, n) };
                        } catch (t) {
                            return { type: "throw", arg: t };
                        }
                    }
                    e.wrap = h;
                    var y = "suspendedStart",
                        p = "suspendedYield",
                        v = "executing",
                        m = "completed",
                        g = {};
                    function w() {}
                    function b() {}
                    function E() {}
                    var x = {};
                    f(x, c, function () {
                        return this;
                    });
                    var L = Object.getPrototypeOf,
                        k = L && L(L(_([])));
                    k && k !== n && r.call(k, c) && (x = k);
                    var S = (E.prototype = w.prototype = Object.create(x));
                    function C(t) {
                        ["next", "throw", "return"].forEach(function (e) {
                            f(t, e, function (t) {
                                return this._invoke(e, t);
                            });
                        });
                    }
                    function O(t, e) {
                        function n(i, a, u, c) {
                            var s = d(t[i], t, a);
                            if ("throw" !== s.type) {
                                var l = s.arg,
                                    f = l.value;
                                return f &&
                                    "object" == o(f) &&
                                    r.call(f, "__await")
                                    ? e.resolve(f.__await).then(
                                          function (t) {
                                              n("next", t, u, c);
                                          },
                                          function (t) {
                                              n("throw", t, u, c);
                                          }
                                      )
                                    : e.resolve(f).then(
                                          function (t) {
                                              (l.value = t), u(l);
                                          },
                                          function (t) {
                                              return n("throw", t, u, c);
                                          }
                                      );
                            }
                            c(s.arg);
                        }
                        var i;
                        a(this, "_invoke", {
                            value: function (t, r) {
                                function o() {
                                    return new e(function (e, o) {
                                        n(t, r, e, o);
                                    });
                                }
                                return (i = i ? i.then(o, o) : o());
                            },
                        });
                    }
                    function j(e, n, r) {
                        var o = y;
                        return function (i, a) {
                            if (o === v)
                                throw new Error("Generator is already running");
                            if (o === m) {
                                if ("throw" === i) throw a;
                                return { value: t, done: !0 };
                            }
                            for (r.method = i, r.arg = a; ; ) {
                                var u = r.delegate;
                                if (u) {
                                    var c = A(u, r);
                                    if (c) {
                                        if (c === g) continue;
                                        return c;
                                    }
                                }
                                if ("next" === r.method)
                                    r.sent = r._sent = r.arg;
                                else if ("throw" === r.method) {
                                    if (o === y) throw ((o = m), r.arg);
                                    r.dispatchException(r.arg);
                                } else
                                    "return" === r.method &&
                                        r.abrupt("return", r.arg);
                                o = v;
                                var s = d(e, n, r);
                                if ("normal" === s.type) {
                                    if (((o = r.done ? m : p), s.arg === g))
                                        continue;
                                    return { value: s.arg, done: r.done };
                                }
                                "throw" === s.type &&
                                    ((o = m),
                                    (r.method = "throw"),
                                    (r.arg = s.arg));
                            }
                        };
                    }
                    function A(e, n) {
                        var r = n.method,
                            o = e.iterator[r];
                        if (o === t)
                            return (
                                (n.delegate = null),
                                ("throw" === r &&
                                    e.iterator.return &&
                                    ((n.method = "return"),
                                    (n.arg = t),
                                    A(e, n),
                                    "throw" === n.method)) ||
                                    ("return" !== r &&
                                        ((n.method = "throw"),
                                        (n.arg = new TypeError(
                                            "The iterator does not provide a '" +
                                                r +
                                                "' method"
                                        )))),
                                g
                            );
                        var i = d(o, e.iterator, n.arg);
                        if ("throw" === i.type)
                            return (
                                (n.method = "throw"),
                                (n.arg = i.arg),
                                (n.delegate = null),
                                g
                            );
                        var a = i.arg;
                        return a
                            ? a.done
                                ? ((n[e.resultName] = a.value),
                                  (n.next = e.nextLoc),
                                  "return" !== n.method &&
                                      ((n.method = "next"), (n.arg = t)),
                                  (n.delegate = null),
                                  g)
                                : a
                            : ((n.method = "throw"),
                              (n.arg = new TypeError(
                                  "iterator result is not an object"
                              )),
                              (n.delegate = null),
                              g);
                    }
                    function F(t) {
                        var e = { tryLoc: t[0] };
                        1 in t && (e.catchLoc = t[1]),
                            2 in t &&
                                ((e.finallyLoc = t[2]), (e.afterLoc = t[3])),
                            this.tryEntries.push(e);
                    }
                    function G(t) {
                        var e = t.completion || {};
                        (e.type = "normal"), delete e.arg, (t.completion = e);
                    }
                    function P(t) {
                        (this.tryEntries = [{ tryLoc: "root" }]),
                            t.forEach(F, this),
                            this.reset(!0);
                    }
                    function _(e) {
                        if (e || "" === e) {
                            var n = e[c];
                            if (n) return n.call(e);
                            if ("function" == typeof e.next) return e;
                            if (!isNaN(e.length)) {
                                var i = -1,
                                    a = function n() {
                                        for (; ++i < e.length; )
                                            if (r.call(e, i))
                                                return (
                                                    (n.value = e[i]),
                                                    (n.done = !1),
                                                    n
                                                );
                                        return (n.value = t), (n.done = !0), n;
                                    };
                                return (a.next = a);
                            }
                        }
                        throw new TypeError(o(e) + " is not iterable");
                    }
                    return (
                        (b.prototype = E),
                        a(S, "constructor", { value: E, configurable: !0 }),
                        a(E, "constructor", { value: b, configurable: !0 }),
                        (b.displayName = f(E, l, "GeneratorFunction")),
                        (e.isGeneratorFunction = function (t) {
                            var e = "function" == typeof t && t.constructor;
                            return (
                                !!e &&
                                (e === b ||
                                    "GeneratorFunction" ===
                                        (e.displayName || e.name))
                            );
                        }),
                        (e.mark = function (t) {
                            return (
                                Object.setPrototypeOf
                                    ? Object.setPrototypeOf(t, E)
                                    : ((t.__proto__ = E),
                                      f(t, l, "GeneratorFunction")),
                                (t.prototype = Object.create(S)),
                                t
                            );
                        }),
                        (e.awrap = function (t) {
                            return { __await: t };
                        }),
                        C(O.prototype),
                        f(O.prototype, s, function () {
                            return this;
                        }),
                        (e.AsyncIterator = O),
                        (e.async = function (t, n, r, o, i) {
                            void 0 === i && (i = Promise);
                            var a = new O(h(t, n, r, o), i);
                            return e.isGeneratorFunction(n)
                                ? a
                                : a.next().then(function (t) {
                                      return t.done ? t.value : a.next();
                                  });
                        }),
                        C(S),
                        f(S, l, "Generator"),
                        f(S, c, function () {
                            return this;
                        }),
                        f(S, "toString", function () {
                            return "[object Generator]";
                        }),
                        (e.keys = function (t) {
                            var e = Object(t),
                                n = [];
                            for (var r in e) n.push(r);
                            return (
                                n.reverse(),
                                function t() {
                                    for (; n.length; ) {
                                        var r = n.pop();
                                        if (r in e)
                                            return (
                                                (t.value = r), (t.done = !1), t
                                            );
                                    }
                                    return (t.done = !0), t;
                                }
                            );
                        }),
                        (e.values = _),
                        (P.prototype = {
                            constructor: P,
                            reset: function (e) {
                                if (
                                    ((this.prev = 0),
                                    (this.next = 0),
                                    (this.sent = this._sent = t),
                                    (this.done = !1),
                                    (this.delegate = null),
                                    (this.method = "next"),
                                    (this.arg = t),
                                    this.tryEntries.forEach(G),
                                    !e)
                                )
                                    for (var n in this)
                                        "t" === n.charAt(0) &&
                                            r.call(this, n) &&
                                            !isNaN(+n.slice(1)) &&
                                            (this[n] = t);
                            },
                            stop: function () {
                                this.done = !0;
                                var t = this.tryEntries[0].completion;
                                if ("throw" === t.type) throw t.arg;
                                return this.rval;
                            },
                            dispatchException: function (e) {
                                if (this.done) throw e;
                                var n = this;
                                function o(r, o) {
                                    return (
                                        (u.type = "throw"),
                                        (u.arg = e),
                                        (n.next = r),
                                        o && ((n.method = "next"), (n.arg = t)),
                                        !!o
                                    );
                                }
                                for (
                                    var i = this.tryEntries.length - 1;
                                    i >= 0;
                                    --i
                                ) {
                                    var a = this.tryEntries[i],
                                        u = a.completion;
                                    if ("root" === a.tryLoc) return o("end");
                                    if (a.tryLoc <= this.prev) {
                                        var c = r.call(a, "catchLoc"),
                                            s = r.call(a, "finallyLoc");
                                        if (c && s) {
                                            if (this.prev < a.catchLoc)
                                                return o(a.catchLoc, !0);
                                            if (this.prev < a.finallyLoc)
                                                return o(a.finallyLoc);
                                        } else if (c) {
                                            if (this.prev < a.catchLoc)
                                                return o(a.catchLoc, !0);
                                        } else {
                                            if (!s)
                                                throw new Error(
                                                    "try statement without catch or finally"
                                                );
                                            if (this.prev < a.finallyLoc)
                                                return o(a.finallyLoc);
                                        }
                                    }
                                }
                            },
                            abrupt: function (t, e) {
                                for (
                                    var n = this.tryEntries.length - 1;
                                    n >= 0;
                                    --n
                                ) {
                                    var o = this.tryEntries[n];
                                    if (
                                        o.tryLoc <= this.prev &&
                                        r.call(o, "finallyLoc") &&
                                        this.prev < o.finallyLoc
                                    ) {
                                        var i = o;
                                        break;
                                    }
                                }
                                i &&
                                    ("break" === t || "continue" === t) &&
                                    i.tryLoc <= e &&
                                    e <= i.finallyLoc &&
                                    (i = null);
                                var a = i ? i.completion : {};
                                return (
                                    (a.type = t),
                                    (a.arg = e),
                                    i
                                        ? ((this.method = "next"),
                                          (this.next = i.finallyLoc),
                                          g)
                                        : this.complete(a)
                                );
                            },
                            complete: function (t, e) {
                                if ("throw" === t.type) throw t.arg;
                                return (
                                    "break" === t.type || "continue" === t.type
                                        ? (this.next = t.arg)
                                        : "return" === t.type
                                        ? ((this.rval = this.arg = t.arg),
                                          (this.method = "return"),
                                          (this.next = "end"))
                                        : "normal" === t.type &&
                                          e &&
                                          (this.next = e),
                                    g
                                );
                            },
                            finish: function (t) {
                                for (
                                    var e = this.tryEntries.length - 1;
                                    e >= 0;
                                    --e
                                ) {
                                    var n = this.tryEntries[e];
                                    if (n.finallyLoc === t)
                                        return (
                                            this.complete(
                                                n.completion,
                                                n.afterLoc
                                            ),
                                            G(n),
                                            g
                                        );
                                }
                            },
                            catch: function (t) {
                                for (
                                    var e = this.tryEntries.length - 1;
                                    e >= 0;
                                    --e
                                ) {
                                    var n = this.tryEntries[e];
                                    if (n.tryLoc === t) {
                                        var r = n.completion;
                                        if ("throw" === r.type) {
                                            var o = r.arg;
                                            G(n);
                                        }
                                        return o;
                                    }
                                }
                                throw new Error("illegal catch attempt");
                            },
                            delegateYield: function (e, n, r) {
                                return (
                                    (this.delegate = {
                                        iterator: _(e),
                                        resultName: n,
                                        nextLoc: r,
                                    }),
                                    "next" === this.method && (this.arg = t),
                                    g
                                );
                            },
                        }),
                        e
                    );
                }
                function a(t) {
                    return (
                        (function (t) {
                            if (Array.isArray(t)) return u(t);
                        })(t) ||
                        (function (t) {
                            if (
                                ("undefined" != typeof Symbol &&
                                    null != t[Symbol.iterator]) ||
                                null != t["@@iterator"]
                            )
                                return Array.from(t);
                        })(t) ||
                        (function (t, e) {
                            if (t) {
                                if ("string" == typeof t) return u(t, e);
                                var n = Object.prototype.toString
                                    .call(t)
                                    .slice(8, -1);
                                return (
                                    "Object" === n &&
                                        t.constructor &&
                                        (n = t.constructor.name),
                                    "Map" === n || "Set" === n
                                        ? Array.from(t)
                                        : "Arguments" === n ||
                                          /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(
                                              n
                                          )
                                        ? u(t, e)
                                        : void 0
                                );
                            }
                        })(t) ||
                        (function () {
                            throw new TypeError(
                                "Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."
                            );
                        })()
                    );
                }
                function u(t, e) {
                    (null == e || e > t.length) && (e = t.length);
                    for (var n = 0, r = new Array(e); n < e; n++) r[n] = t[n];
                    return r;
                }
                function c(t, e, n, r, o, i, a) {
                    try {
                        var u = t[i](a),
                            c = u.value;
                    } catch (t) {
                        return void n(t);
                    }
                    u.done ? e(c) : Promise.resolve(c).then(r, o);
                }
                function s(t, e) {
                    for (var n = 0; n < e.length; n++) {
                        var r = e[n];
                        (r.enumerable = r.enumerable || !1),
                            (r.configurable = !0),
                            "value" in r && (r.writable = !0),
                            Object.defineProperty(t, l(r.key), r);
                    }
                }
                function l(t) {
                    var e = (function (t, e) {
                        if ("object" != o(t) || !t) return t;
                        var n = t[Symbol.toPrimitive];
                        if (void 0 !== n) {
                            var r = n.call(t, "string");
                            if ("object" != o(r)) return r;
                            throw new TypeError(
                                "@@toPrimitive must return a primitive value."
                            );
                        }
                        return String(t);
                    })(t);
                    return "symbol" == o(e) ? e : String(e);
                }
                n(77049),
                    n(34338),
                    n(79288),
                    n(62506),
                    n(39772),
                    n(69358),
                    n(69373),
                    n(59903),
                    n(12826);
                var f = (function () {
                        function t(e) {
                            var n,
                                r,
                                o = e.maxReelItems,
                                i = void 0 === o ? 30 : o,
                                a = e.removeWinner,
                                u = void 0 === a || a,
                                c = e.reelContainerSelector,
                                s = e.onSpinStart,
                                l = e.onSpinEnd,
                                f = e.onNameListChanged;
                            !(function (t, e) {
                                if (!(t instanceof e))
                                    throw new TypeError(
                                        "Cannot call a class as a function"
                                    );
                            })(this, t),
                                (this.nameList = []),
                                (this.havePreviousWinner = !1),
                                (this.reelContainer =
                                    document.querySelector(c)),
                                (this.maxReelItems = i),
                                (this.shouldRemoveWinner = u),
                                (this.onSpinStart = s),
                                (this.onSpinEnd = l),
                                (this.onNameListChanged = f),
                                (this.reelAnimation =
                                    null === (n = this.reelContainer) ||
                                    void 0 === n
                                        ? void 0
                                        : n.animate(
                                              [
                                                  {
                                                      transform: "none",
                                                      filter: "blur(0)",
                                                  },
                                                  {
                                                      filter: "blur(1px)",
                                                      offset: 0.5,
                                                  },
                                                  {
                                                      transform:
                                                          "translateY(-".concat(
                                                              120 *
                                                                  (this
                                                                      .maxReelItems -
                                                                      1),
                                                              "px)"
                                                          ),
                                                      filter: "blur(0)",
                                                  },
                                              ],
                                              {
                                                  duration:
                                                      100 * this.maxReelItems,
                                                  easing: "ease-in-out",
                                                  iterations: 1,
                                              }
                                          )),
                                null === (r = this.reelAnimation) ||
                                    void 0 === r ||
                                    r.cancel();
                        }
                        var e, n, r, o, u;
                        return (
                            (e = t),
                            (n = [
                                {
                                    key: "names",
                                    get: function () {
                                        return this.nameList;
                                    },
                                    set: function (t) {
                                        var e;
                                        (this.nameList = t),
                                            ((
                                                null ===
                                                    (e = this.reelContainer) ||
                                                void 0 === e
                                                    ? void 0
                                                    : e.children
                                            )
                                                ? Array.from(
                                                      this.reelContainer
                                                          .children
                                                  )
                                                : []
                                            ).forEach(function (t) {
                                                return t.remove();
                                            }),
                                            (this.havePreviousWinner = !1),
                                            this.onNameListChanged &&
                                                this.onNameListChanged();
                                    },
                                },
                                {
                                    key: "shouldRemoveWinnerFromNameList",
                                    get: function () {
                                        return this.shouldRemoveWinner;
                                    },
                                    set: function (t) {
                                        this.shouldRemoveWinner = t;
                                    },
                                },
                                {
                                    key: "spin",
                                    value:
                                        ((o = i().mark(function e() {
                                            var n, r, o, u, c, s;
                                            return i().wrap(
                                                function (e) {
                                                    for (;;)
                                                        switch (
                                                            (e.prev = e.next)
                                                        ) {
                                                            case 0:
                                                                if (
                                                                    this
                                                                        .nameList
                                                                        .length
                                                                ) {
                                                                    e.next = 3;
                                                                    break;
                                                                }
                                                                return (
                                                                    console.error(
                                                                        "Name List is empty. Cannot start spinning."
                                                                    ),
                                                                    e.abrupt(
                                                                        "return",
                                                                        !1
                                                                    )
                                                                );
                                                            case 3:
                                                                if (
                                                                    (this
                                                                        .onSpinStart &&
                                                                        this.onSpinStart(),
                                                                    (n =
                                                                        this
                                                                            .reelContainer),
                                                                    (r =
                                                                        this
                                                                            .reelAnimation),
                                                                    (o =
                                                                        this
                                                                            .shouldRemoveWinner),
                                                                    n && r)
                                                                ) {
                                                                    e.next = 7;
                                                                    break;
                                                                }
                                                                return e.abrupt(
                                                                    "return",
                                                                    !1
                                                                );
                                                            case 7:
                                                                for (
                                                                    u =
                                                                        t.shuffleNames(
                                                                            this
                                                                                .nameList
                                                                        );
                                                                    u.length &&
                                                                    u.length <
                                                                        this
                                                                            .maxReelItems;

                                                                )
                                                                    u =
                                                                        [].concat(
                                                                            a(
                                                                                u
                                                                            ),
                                                                            a(u)
                                                                        );
                                                                return (
                                                                    (u =
                                                                        u.slice(
                                                                            0,
                                                                            this
                                                                                .maxReelItems -
                                                                                Number(
                                                                                    this
                                                                                        .havePreviousWinner
                                                                                )
                                                                        )),
                                                                    (c =
                                                                        document.createDocumentFragment()),
                                                                        
                                                                    u.forEach(
                                                                        function (
                                                                            t
                                                                        ) {
                                                                            document.getElementById("winner").value = t
                                                                            var e =
                                                                                document.createElement(
                                                                                    "div"
                                                                                );
                                                                            (e.innerHTML =t),
                                                                                c.appendChild(
                                                                                    e
                                                                                );
                                                                        }
                                                                    ),
                                                                    console.log("winner: " + c),
                                                                    n.appendChild(
                                                                        c
                                                                    ),
                                                                    o &&
                                                                        this.nameList.splice(
                                                                            this.nameList.findIndex(
                                                                                function (
                                                                                    t
                                                                                ) {
                                                                                    return (
                                                                                        t ===
                                                                                        u[
                                                                                            u.length -
                                                                                                1
                                                                                        ]
                                                                                    );
                                                                                }
                                                                            ),
                                                                            1
                                                                        ),
                                                                    (s =
                                                                        new Promise(
                                                                            function (
                                                                                t
                                                                            ) {
                                                                                r.onfinish =
                                                                                    t;
                                                                            }
                                                                        )),
                                                                    r.play(),
                                                                    (e.next = 18),
                                                                    s
                                                                );
                                                            case 18:
                                                                return (
                                                                    r.finish(),
                                                                    Array.from(
                                                                        n.children
                                                                    )
                                                                        .slice(
                                                                            0,
                                                                            n
                                                                                .children
                                                                                .length -
                                                                                1
                                                                        )
                                                                        .forEach(
                                                                            function (
                                                                                t
                                                                            ) {
                                                                                return t.remove();
                                                                            }
                                                                        ),
                                                                    (this.havePreviousWinner =
                                                                        !0),
                                                                    this
                                                                        .onSpinEnd &&
                                                                        this.onSpinEnd(),
                                                                    e.abrupt(
                                                                        "return",
                                                                        !0
                                                                    )
                                                                );
                                                            case 23:
                                                            case "end":
                                                                return e.stop();
                                                        }
                                                },
                                                e,
                                                this
                                            );
                                        })),
                                        (u = function () {
                                            var t = this,
                                                e = arguments;
                                            return new Promise(function (n, r) {
                                                var i = o.apply(t, e);
                                                function a(t) {
                                                    c(i, n, r, a, u, "next", t);
                                                }
                                                function u(t) {
                                                    c(
                                                        i,
                                                        n,
                                                        r,
                                                        a,
                                                        u,
                                                        "throw",
                                                        t
                                                    );
                                                }
                                                a(void 0);
                                            });
                                        }),
                                        function () {
                                            return u.apply(this, arguments);
                                        }),
                                },
                            ]),
                            (r = [
                                {
                                    key: "shuffleNames",
                                    value: function (t) {
                                        for (
                                            var e = Object.keys(t),
                                                n = [],
                                                r = 0,
                                                o = e.length;
                                            r < t.length && o > 0;
                                            r += 1
                                        ) {
                                            var i = (Math.random() * o) | 0,
                                                a = e[i];
                                            n.push(t[a]);
                                            var u = e[(o -= 1)];
                                            (e[o] = a), (e[i] = u);
                                        }
                                        console.log(n)
                                        return n;
                                    },
                                },
                            ]),
                            n && s(e.prototype, n),
                            r && s(e, r),
                            Object.defineProperty(e, "prototype", {
                                writable: !1,
                            }),
                            t
                        );
                    })(),
                    h =
                        (n(278),
                        {
                            B8: 7902.133,
                            "A#8": 7458.62,
                            A8: 7040,
                            "G#8": 6644.875,
                            G8: 6271.927,
                            "F#8": 5919.911,
                            F8: 5587.652,
                            E8: 5274.041,
                            "D#8": 4978.032,
                            D8: 4698.636,
                            "C#8": 4434.922,
                            C8: 4186.009,
                            B7: 3951.066,
                            "A#7": 3729.31,
                            A7: 3520,
                            "G#7": 3322.438,
                            G7: 3135.963,
                            "F#7": 2959.955,
                            F7: 2793.826,
                            E7: 2637.02,
                            "D#7": 2489.016,
                            D7: 2349.318,
                            "C#7": 2217.461,
                            C7: 2093.005,
                            B6: 1975.533,
                            "A#6": 1864.655,
                            A6: 1760,
                            "G#6": 1661.219,
                            G6: 1567.982,
                            "F#6": 1479.978,
                            F6: 1396.913,
                            E6: 1318.51,
                            "D#6": 1244.508,
                            D6: 1174.659,
                            "C#6": 1108.731,
                            C6: 1046.502,
                            B5: 987.7666,
                            "A#5": 932.3275,
                            A5: 880,
                            "G#5": 830.6094,
                            G5: 783.9909,
                            "F#5": 739.9888,
                            F5: 698.4565,
                            E5: 659.2551,
                            "D#5": 622.254,
                            D5: 587.3295,
                            "C#5": 554.3653,
                            C5: 523.2511,
                            B4: 493.8833,
                            "A#4": 466.1638,
                            A4: 440,
                            "G#4": 415.3047,
                            G4: 391.9954,
                            "F#4": 369.9944,
                            F4: 349.2282,
                            E4: 329.6276,
                            "D#4": 311.127,
                            D4: 293.6648,
                            "C#4": 277.1826,
                            C4: 261.6256,
                            B3: 246.9417,
                            "A#3": 233.0819,
                            A3: 220,
                            "G#3": 207.6523,
                            G3: 195.9977,
                            "F#3": 184.9972,
                            F3: 174.6141,
                            E3: 164.8138,
                            "D#3": 155.5635,
                            D3: 146.8324,
                            "C#3": 138.5913,
                            C3: 130.8128,
                            B2: 123.4708,
                            "A#2": 116.5409,
                            A2: 110,
                            "G#2": 103.8262,
                            G2: 97.99886,
                            "F#2": 92.49861,
                            F2: 87.30706,
                            E2: 82.40689,
                            "D#2": 77.78175,
                            D2: 73.41619,
                            "C#2": 69.29566,
                            C2: 65.40639,
                            B1: 61.73541,
                            "A#1": 58.27047,
                            A1: 55,
                            "G#1": 51.91309,
                            G1: 48.99943,
                            "F#1": 46.2493,
                            F1: 43.65353,
                            E1: 41.20344,
                            "D#1": 38.89087,
                            D1: 36.7081,
                            "C#1": 34.64783,
                            C1: 32.7032,
                            B0: 30.86771,
                            "A#0": 29.13524,
                            A0: 27.5,
                            "G#0": 25.95654,
                            G0: 24.49971,
                            "F#0": 23.12465,
                            F0: 21.82676,
                            E0: 20.60172,
                            "D#0": 19.44544,
                            D0: 18.35405,
                            "C#0": 17.32391,
                            C0: 16.3516,
                        });
                function d(t) {
                    return (
                        (d =
                            "function" == typeof Symbol &&
                            "symbol" == typeof Symbol.iterator
                                ? function (t) {
                                      return typeof t;
                                  }
                                : function (t) {
                                      return t &&
                                          "function" == typeof Symbol &&
                                          t.constructor === Symbol &&
                                          t !== Symbol.prototype
                                          ? "symbol"
                                          : typeof t;
                                  }),
                        d(t)
                    );
                }
                function y(t, e) {
                    for (var n = 0; n < e.length; n++) {
                        var r = e[n];
                        (r.enumerable = r.enumerable || !1),
                            (r.configurable = !0),
                            "value" in r && (r.writable = !0),
                            Object.defineProperty(t, p(r.key), r);
                    }
                }
                function p(t) {
                    var e = (function (t, e) {
                        if ("object" != d(t) || !t) return t;
                        var n = t[Symbol.toPrimitive];
                        if (void 0 !== n) {
                            var r = n.call(t, "string");
                            if ("object" != d(r)) return r;
                            throw new TypeError(
                                "@@toPrimitive must return a primitive value."
                            );
                        }
                        return String(t);
                    })(t);
                    return "symbol" == d(e) ? e : String(e);
                }
                var v = (function () {
                    function t() {
                        var e =
                            arguments.length > 0 &&
                            void 0 !== arguments[0] &&
                            arguments[0];
                        !(function (t, e) {
                            if (!(t instanceof e))
                                throw new TypeError(
                                    "Cannot call a class as a function"
                                );
                        })(this, t),
                            (window.AudioContext ||
                                window.webkitAudioContext) &&
                                (this.audioContext = new (window.AudioContext ||
                                    window.webkitAudioContext)()),
                            (this.isMuted = e);
                    }
                    var e, n;
                    return (
                        (e = t),
                        (n = [
                            {
                                key: "mute",
                                get: function () {
                                    return this.isMuted;
                                },
                                set: function (t) {
                                    this.isMuted = t;
                                },
                            },
                            {
                                key: "playSound",
                                value: function (t) {
                                    var e =
                                            arguments.length > 1 &&
                                            void 0 !== arguments[1]
                                                ? arguments[1]
                                                : {},
                                        n = e.type,
                                        r = void 0 === n ? "sine" : n,
                                        o = e.easeOut,
                                        i = void 0 === o || o,
                                        a = e.volume,
                                        u = void 0 === a ? 0.1 : a,
                                        c = this.audioContext;
                                    if (c) {
                                        var s = c.createOscillator(),
                                            l = c.createGain();
                                        s.connect(l),
                                            l.connect(c.destination),
                                            (s.type = r),
                                            (l.gain.value = u);
                                        var f = c.currentTime,
                                            d = t.reduce(function (t, e) {
                                                var n = e.key,
                                                    r = e.duration;
                                                return (
                                                    s.frequency.setValueAtTime(
                                                        h[n],
                                                        f + t
                                                    ),
                                                    t + r
                                                );
                                            }, 0);
                                        i &&
                                            (l.gain.exponentialRampToValueAtTime(
                                                u,
                                                f + d - 0.1
                                            ),
                                            l.gain.exponentialRampToValueAtTime(
                                                0.01,
                                                f + d
                                            )),
                                            s.start(f),
                                            s.stop(f + d);
                                    }
                                },
                            },
                            {
                                key: "win",
                                value: function () {
                                    if (this.isMuted)
                                        return Promise.resolve(!1);
                                    var t = [
                                            { key: "C4", duration: 0.175 },
                                            { key: "D4", duration: 0.175 },
                                            { key: "E4", duration: 0.175 },
                                            { key: "G4", duration: 0.275 },
                                            { key: "E4", duration: 0.15 },
                                            { key: "G4", duration: 0.9 },
                                        ],
                                        e = t.reduce(function (t, e) {
                                            return t + e.duration;
                                        }, 0);
                                    return (
                                        this.playSound(t, {
                                            type: "triangle",
                                            volume: 1,
                                            easeOut: !0,
                                        }),
                                        new Promise(function (t) {
                                            setTimeout(function () {
                                                t(!0);
                                            }, 1e3 * e);
                                        })
                                    );
                                },
                            },
                            {
                                key: "spin",
                                value: function (t) {
                                    if (this.isMuted)
                                        return Promise.resolve(!1);
                                    var e = [
                                            { key: "D#3", duration: 0.1 },
                                            { key: "C#3", duration: 0.1 },
                                            { key: "C3", duration: 0.1 },
                                        ],
                                        n = e.reduce(function (t, e) {
                                            return t + e.duration;
                                        }, 0),
                                        r = Math.floor(10 * t);
                                    return (
                                        this.playSound(
                                            Array.from(
                                                Array(r),
                                                function (t, n) {
                                                    return e[n % 3];
                                                }
                                            ),
                                            {
                                                type: "triangle",
                                                easeOut: !1,
                                                volume: 2,
                                            }
                                        ),
                                        new Promise(function (t) {
                                            setTimeout(function () {
                                                t(!0);
                                            }, 1e3 * n);
                                        })
                                    );
                                },
                            },
                        ]),
                        n && y(e.prototype, n),
                        Object.defineProperty(e, "prototype", { writable: !1 }),
                        t
                    );
                })();
                function m(t) {
                    return (
                        (m =
                            "function" == typeof Symbol &&
                            "symbol" == typeof Symbol.iterator
                                ? function (t) {
                                      return typeof t;
                                  }
                                : function (t) {
                                      return t &&
                                          "function" == typeof Symbol &&
                                          t.constructor === Symbol &&
                                          t !== Symbol.prototype
                                          ? "symbol"
                                          : typeof t;
                                  }),
                        m(t)
                    );
                }
                function g() {
                    g = function () {
                        return e;
                    };
                    var t,
                        e = {},
                        n = Object.prototype,
                        r = n.hasOwnProperty,
                        o =
                            Object.defineProperty ||
                            function (t, e, n) {
                                t[e] = n.value;
                            },
                        i = "function" == typeof Symbol ? Symbol : {},
                        a = i.iterator || "@@iterator",
                        u = i.asyncIterator || "@@asyncIterator",
                        c = i.toStringTag || "@@toStringTag";
                    function s(t, e, n) {
                        return (
                            Object.defineProperty(t, e, {
                                value: n,
                                enumerable: !0,
                                configurable: !0,
                                writable: !0,
                            }),
                            t[e]
                        );
                    }
                    try {
                        s({}, "");
                    } catch (t) {
                        s = function (t, e, n) {
                            return (t[e] = n);
                        };
                    }
                    function l(t, e, n, r) {
                        var i = e && e.prototype instanceof w ? e : w,
                            a = Object.create(i.prototype),
                            u = new P(r || []);
                        return o(a, "_invoke", { value: j(t, n, u) }), a;
                    }
                    function f(t, e, n) {
                        try {
                            return { type: "normal", arg: t.call(e, n) };
                        } catch (t) {
                            return { type: "throw", arg: t };
                        }
                    }
                    e.wrap = l;
                    var h = "suspendedStart",
                        d = "suspendedYield",
                        y = "executing",
                        p = "completed",
                        v = {};
                    function w() {}
                    function b() {}
                    function E() {}
                    var x = {};
                    s(x, a, function () {
                        return this;
                    });
                    var L = Object.getPrototypeOf,
                        k = L && L(L(_([])));
                    k && k !== n && r.call(k, a) && (x = k);
                    var S = (E.prototype = w.prototype = Object.create(x));
                    function C(t) {
                        ["next", "throw", "return"].forEach(function (e) {
                            s(t, e, function (t) {
                                return this._invoke(e, t);
                            });
                        });
                    }
                    function O(t, e) {
                        function n(o, i, a, u) {
                            var c = f(t[o], t, i);
                            if ("throw" !== c.type) {
                                var s = c.arg,
                                    l = s.value;
                                return l &&
                                    "object" == m(l) &&
                                    r.call(l, "__await")
                                    ? e.resolve(l.__await).then(
                                          function (t) {
                                              n("next", t, a, u);
                                          },
                                          function (t) {
                                              n("throw", t, a, u);
                                          }
                                      )
                                    : e.resolve(l).then(
                                          function (t) {
                                              (s.value = t), a(s);
                                          },
                                          function (t) {
                                              return n("throw", t, a, u);
                                          }
                                      );
                            }
                            u(c.arg);
                        }
                        var i;
                        o(this, "_invoke", {
                            value: function (t, r) {
                                function o() {
                                    return new e(function (e, o) {
                                        n(t, r, e, o);
                                    });
                                }
                                return (i = i ? i.then(o, o) : o());
                            },
                        });
                    }
                    function j(e, n, r) {
                        var o = h;
                        return function (i, a) {
                            if (o === y)
                                throw new Error("Generator is already running");
                            if (o === p) {
                                if ("throw" === i) throw a;
                                return { value: t, done: !0 };
                            }
                            for (r.method = i, r.arg = a; ; ) {
                                var u = r.delegate;
                                if (u) {
                                    var c = A(u, r);
                                    if (c) {
                                        if (c === v) continue;
                                        return c;
                                    }
                                }
                                if ("next" === r.method)
                                    r.sent = r._sent = r.arg;
                                else if ("throw" === r.method) {
                                    if (o === h) throw ((o = p), r.arg);
                                    r.dispatchException(r.arg);
                                } else
                                    "return" === r.method &&
                                        r.abrupt("return", r.arg);
                                o = y;
                                var s = f(e, n, r);
                                if ("normal" === s.type) {
                                    if (((o = r.done ? p : d), s.arg === v))
                                        continue;
                                    return { value: s.arg, done: r.done };
                                }
                                "throw" === s.type &&
                                    ((o = p),
                                    (r.method = "throw"),
                                    (r.arg = s.arg));
                            }
                        };
                    }
                    function A(e, n) {
                        var r = n.method,
                            o = e.iterator[r];
                        if (o === t)
                            return (
                                (n.delegate = null),
                                ("throw" === r &&
                                    e.iterator.return &&
                                    ((n.method = "return"),
                                    (n.arg = t),
                                    A(e, n),
                                    "throw" === n.method)) ||
                                    ("return" !== r &&
                                        ((n.method = "throw"),
                                        (n.arg = new TypeError(
                                            "The iterator does not provide a '" +
                                                r +
                                                "' method"
                                        )))),
                                v
                            );
                        var i = f(o, e.iterator, n.arg);
                        if ("throw" === i.type)
                            return (
                                (n.method = "throw"),
                                (n.arg = i.arg),
                                (n.delegate = null),
                                v
                            );
                        var a = i.arg;
                        return a
                            ? a.done
                                ? ((n[e.resultName] = a.value),
                                  (n.next = e.nextLoc),
                                  "return" !== n.method &&
                                      ((n.method = "next"), (n.arg = t)),
                                  (n.delegate = null),
                                  v)
                                : a
                            : ((n.method = "throw"),
                              (n.arg = new TypeError(
                                  "iterator result is not an object"
                              )),
                              (n.delegate = null),
                              v);
                    }
                    function F(t) {
                        var e = { tryLoc: t[0] };
                        1 in t && (e.catchLoc = t[1]),
                            2 in t &&
                                ((e.finallyLoc = t[2]), (e.afterLoc = t[3])),
                            this.tryEntries.push(e);
                    }
                    function G(t) {
                        var e = t.completion || {};
                        (e.type = "normal"), delete e.arg, (t.completion = e);
                    }
                    function P(t) {
                        (this.tryEntries = [{ tryLoc: "root" }]),
                            t.forEach(F, this),
                            this.reset(!0);
                    }
                    function _(e) {
                        if (e || "" === e) {
                            var n = e[a];
                            if (n) return n.call(e);
                            if ("function" == typeof e.next) return e;
                            if (!isNaN(e.length)) {
                                var o = -1,
                                    i = function n() {
                                        for (; ++o < e.length; )
                                            if (r.call(e, o))
                                                return (
                                                    (n.value = e[o]),
                                                    (n.done = !1),
                                                    n
                                                );
                                        return (n.value = t), (n.done = !0), n;
                                    };
                                return (i.next = i);
                            }
                        }
                        throw new TypeError(m(e) + " is not iterable");
                    }
                    return (
                        (b.prototype = E),
                        o(S, "constructor", { value: E, configurable: !0 }),
                        o(E, "constructor", { value: b, configurable: !0 }),
                        (b.displayName = s(E, c, "GeneratorFunction")),
                        (e.isGeneratorFunction = function (t) {
                            var e = "function" == typeof t && t.constructor;
                            return (
                                !!e &&
                                (e === b ||
                                    "GeneratorFunction" ===
                                        (e.displayName || e.name))
                            );
                        }),
                        (e.mark = function (t) {
                            return (
                                Object.setPrototypeOf
                                    ? Object.setPrototypeOf(t, E)
                                    : ((t.__proto__ = E),
                                      s(t, c, "GeneratorFunction")),
                                (t.prototype = Object.create(S)),
                                t
                            );
                        }),
                        (e.awrap = function (t) {
                            return { __await: t };
                        }),
                        C(O.prototype),
                        s(O.prototype, u, function () {
                            return this;
                        }),
                        (e.AsyncIterator = O),
                        (e.async = function (t, n, r, o, i) {
                            void 0 === i && (i = Promise);
                            var a = new O(l(t, n, r, o), i);
                            return e.isGeneratorFunction(n)
                                ? a
                                : a.next().then(function (t) {
                                      return t.done ? t.value : a.next();
                                  });
                        }),
                        C(S),
                        s(S, c, "Generator"),
                        s(S, a, function () {
                            return this;
                        }),
                        s(S, "toString", function () {
                            return "[object Generator]";
                        }),
                        (e.keys = function (t) {
                            var e = Object(t),
                                n = [];
                            for (var r in e) n.push(r);
                            return (
                                n.reverse(),
                                function t() {
                                    for (; n.length; ) {
                                        var r = n.pop();
                                        if (r in e)
                                            return (
                                                (t.value = r), (t.done = !1), t
                                            );
                                    }
                                    return (t.done = !0), t;
                                }
                            );
                        }),
                        (e.values = _),
                        (P.prototype = {
                            constructor: P,
                            reset: function (e) {
                                if (
                                    ((this.prev = 0),
                                    (this.next = 0),
                                    (this.sent = this._sent = t),
                                    (this.done = !1),
                                    (this.delegate = null),
                                    (this.method = "next"),
                                    (this.arg = t),
                                    this.tryEntries.forEach(G),
                                    !e)
                                )
                                    for (var n in this)
                                        "t" === n.charAt(0) &&
                                            r.call(this, n) &&
                                            !isNaN(+n.slice(1)) &&
                                            (this[n] = t);
                            },
                            stop: function () {
                                this.done = !0;
                                var t = this.tryEntries[0].completion;
                                if ("throw" === t.type) throw t.arg;
                                return this.rval;
                            },
                            dispatchException: function (e) {
                                if (this.done) throw e;
                                var n = this;
                                function o(r, o) {
                                    return (
                                        (u.type = "throw"),
                                        (u.arg = e),
                                        (n.next = r),
                                        o && ((n.method = "next"), (n.arg = t)),
                                        !!o
                                    );
                                }
                                for (
                                    var i = this.tryEntries.length - 1;
                                    i >= 0;
                                    --i
                                ) {
                                    var a = this.tryEntries[i],
                                        u = a.completion;
                                    if ("root" === a.tryLoc) return o("end");
                                    if (a.tryLoc <= this.prev) {
                                        var c = r.call(a, "catchLoc"),
                                            s = r.call(a, "finallyLoc");
                                        if (c && s) {
                                            if (this.prev < a.catchLoc)
                                                return o(a.catchLoc, !0);
                                            if (this.prev < a.finallyLoc)
                                                return o(a.finallyLoc);
                                        } else if (c) {
                                            if (this.prev < a.catchLoc)
                                                return o(a.catchLoc, !0);
                                        } else {
                                            if (!s)
                                                throw new Error(
                                                    "try statement without catch or finally"
                                                );
                                            if (this.prev < a.finallyLoc)
                                                return o(a.finallyLoc);
                                        }
                                    }
                                }
                            },
                            abrupt: function (t, e) {
                                for (
                                    var n = this.tryEntries.length - 1;
                                    n >= 0;
                                    --n
                                ) {
                                    var o = this.tryEntries[n];
                                    if (
                                        o.tryLoc <= this.prev &&
                                        r.call(o, "finallyLoc") &&
                                        this.prev < o.finallyLoc
                                    ) {
                                        var i = o;
                                        break;
                                    }
                                }
                                i &&
                                    ("break" === t || "continue" === t) &&
                                    i.tryLoc <= e &&
                                    e <= i.finallyLoc &&
                                    (i = null);
                                var a = i ? i.completion : {};
                                return (
                                    (a.type = t),
                                    (a.arg = e),
                                    i
                                        ? ((this.method = "next"),
                                          (this.next = i.finallyLoc),
                                          v)
                                        : this.complete(a)
                                );
                            },
                            complete: function (t, e) {
                                if ("throw" === t.type) throw t.arg;
                                return (
                                    "break" === t.type || "continue" === t.type
                                        ? (this.next = t.arg)
                                        : "return" === t.type
                                        ? ((this.rval = this.arg = t.arg),
                                          (this.method = "return"),
                                          (this.next = "end"))
                                        : "normal" === t.type &&
                                          e &&
                                          (this.next = e),
                                    v
                                );
                            },
                            finish: function (t) {
                                for (
                                    var e = this.tryEntries.length - 1;
                                    e >= 0;
                                    --e
                                ) {
                                    var n = this.tryEntries[e];
                                    if (n.finallyLoc === t)
                                        return (
                                            this.complete(
                                                n.completion,
                                                n.afterLoc
                                            ),
                                            G(n),
                                            v
                                        );
                                }
                            },
                            catch: function (t) {
                                for (
                                    var e = this.tryEntries.length - 1;
                                    e >= 0;
                                    --e
                                ) {
                                    var n = this.tryEntries[e];
                                    if (n.tryLoc === t) {
                                        var r = n.completion;
                                        if ("throw" === r.type) {
                                            var o = r.arg;
                                            G(n);
                                        }
                                        return o;
                                    }
                                }
                                throw new Error("illegal catch attempt");
                            },
                            delegateYield: function (e, n, r) {
                                return (
                                    (this.delegate = {
                                        iterator: _(e),
                                        resultName: n,
                                        nextLoc: r,
                                    }),
                                    "next" === this.method && (this.arg = t),
                                    v
                                );
                            },
                        }),
                        e
                    );
                }
                function w(t, e, n, r, o, i, a) {
                    try {
                        var u = t[i](a),
                            c = u.value;
                    } catch (t) {
                        return void n(t);
                    }
                    u.done ? e(c) : Promise.resolve(c).then(r, o);
                }
                !(function () {
                    var t = document.getElementById("draw-button"),
                        e = document.getElementById("fullscreen-button"),
                        n = document.getElementById("settings-button"),
                        o = document.getElementById("settings"),
                        i = document.getElementById("settings-panel"),
                        a = document.getElementById("settings-save"),
                        u = document.getElementById("settings-close"),
                        c = document.getElementById("sunburst"),
                        s = document.getElementById("confetti-canvas"),
                        l = document.getElementById("name-list"),
                        backend_names = l.innerHTML ?? [],
                        h = document.getElementById("remove-from-list"),
                        d = document.getElementById("enable-sound");
                    if (
                        t &&
                        e &&
                        n &&
                        o &&
                        i &&
                        a &&
                        u &&
                        c &&
                        s &&
                        l &&
                        h &&
                        d
                    )
                        if (s instanceof HTMLCanvasElement) {
                            var y,
                                p = new v(),
                                m = [
                                    "#26ccff",
                                    "#a25afd",
                                    "#ff5e7e",
                                    "#88ff5a",
                                    "#fcff42",
                                    "#ffa62d",
                                    "#ff36ff",
                                ],
                                b = r.Z.create(s, {
                                    resize: !0,
                                    useWorker: !0,
                                }),
                                E = function t() {
                                    var e =
                                            window.innerWidth ||
                                            document.documentElement
                                                .clientWidth ||
                                            document.getElementsByTagName(
                                                "body"
                                            )[0].clientWidth,
                                        n = Math.max(
                                            0.5,
                                            Math.min(1, e / 1100)
                                        );
                                    b({
                                        particleCount: 1,
                                        gravity: 0.8,
                                        spread: 90,
                                        origin: { y: 0.6 },
                                        colors: [
                                            m[
                                                Math.floor(
                                                    Math.random() * m.length
                                                )
                                            ],
                                        ],
                                        scalar: n,
                                    }),
                                        (y = window.requestAnimationFrame(t));
                                },
                                x = function () {
                                    y && window.cancelAnimationFrame(y),
                                        (c.style.display = "none");
                                },
                                L = (function () {
                                    var e,
                                        r =
                                            ((e = g().mark(function e() {
                                                return g().wrap(function (e) {
                                                    for (;;)
                                                        switch (
                                                            (e.prev = e.next)
                                                        ) {
                                                            case 0:
                                                                return (
                                                                    E(),
                                                                    (c.style.display =
                                                                        "block"),
                                                                    (e.next = 4),
                                                                    p.win()
                                                                );
                                                            case 4:
                                                                (t.disabled =
                                                                    !1),
                                                                    (n.disabled =
                                                                        !1);
                                                            case 6:
                                                            case "end":
                                                                return e.stop();
                                                        }
                                                }, e);
                                            })),
                                            function () {
                                                var t = this,
                                                    n = arguments;
                                                return new Promise(function (
                                                    r,
                                                    o
                                                ) {
                                                    var i = e.apply(t, n);
                                                    function a(t) {
                                                        w(
                                                            i,
                                                            r,
                                                            o,
                                                            a,
                                                            u,
                                                            "next",
                                                            t
                                                        );
                                                    }
                                                    function u(t) {
                                                        w(
                                                            i,
                                                            r,
                                                            o,
                                                            a,
                                                            u,
                                                            "throw",
                                                            t
                                                        );
                                                    }
                                                    a(void 0);
                                                });
                                            });
                                    return function () {
                                        return r.apply(this, arguments);
                                    };
                                })(),
                                k = new f({
                                    reelContainerSelector: "#reel",
                                    maxReelItems: 40,
                                    onSpinStart: function () {
                                        x(),
                                            (t.disabled = !0),
                                            (n.disabled = !0),
                                            p.spin(3.9);
                                    },
                                    onSpinEnd: L,
                                    onNameListChanged: x,
                                }),
                                S = function () {
                                    (l.value = k.names.length
                                        ? k.names.join("\n")
                                        : backend_names ?? ""),
                                        (h.checked =
                                            k.shouldRemoveWinnerFromNameList),
                                        (d.checked = !p.mute),
                                        (o.style.display = "block");
                                },
                                C = function () {
                                    (i.scrollTop = 0),
                                        (o.style.display = "none");
                                };
                            t.addEventListener("click", function () {
                                k.names.length ? k.spin() : S();
                            }),
                                (document.documentElement.requestFullscreen &&
                                    document.exitFullscreen) ||
                                    e.remove(),
                                e.addEventListener("click", function () {
                                    document.fullscreenElement
                                        ? document.exitFullscreen &&
                                          document.exitFullscreen()
                                        : document.documentElement.requestFullscreen();
                                }),
                                n.addEventListener("click", S),
                                a.addEventListener("click", function () {
                                    (k.names = l.value
                                        ? l.value
                                              .split(/\n/)
                                              .filter(function (t) {
                                                  return Boolean(t.trim());
                                              })
                                        : []),
                                        (k.shouldRemoveWinnerFromNameList =
                                            h.checked),
                                        (p.mute = !d.checked),
                                        C();
                                }),
                                u.addEventListener("click", C);
                        } else
                            console.error(
                                "Confetti canvas is not an instance of Canvas. This is possibly a bug."
                            );
                    else
                        console.error(
                            "One or more Element ID is invalid. This is possibly a bug."
                        );
                })(),
                    "serviceWorker" in navigator &&
                        window.addEventListener("load", function () {
                            navigator.serviceWorker
                                .register("./service-worker.js")
                                .then(function (t) {})
                                .catch(function (t) {});
                        });
            },
        },
        n = {};
    function r(t) {
        var o = n[t];
        if (void 0 !== o) return o.exports;
        var i = (n[t] = { exports: {} });
        return e[t].call(i.exports, i, i.exports, r), i.exports;
    }
    (r.m = e),
        (t = []),
        (r.O = function (e, n, o, i) {
            if (!n) {
                var a = 1 / 0;
                for (l = 0; l < t.length; l++) {
                    (n = t[l][0]), (o = t[l][1]), (i = t[l][2]);
                    for (var u = !0, c = 0; c < n.length; c++)
                        (!1 & i || a >= i) &&
                        Object.keys(r.O).every(function (t) {
                            return r.O[t](n[c]);
                        })
                            ? n.splice(c--, 1)
                            : ((u = !1), i < a && (a = i));
                    if (u) {
                        t.splice(l--, 1);
                        var s = o();
                        void 0 !== s && (e = s);
                    }
                }
                return e;
            }
            i = i || 0;
            for (var l = t.length; l > 0 && t[l - 1][2] > i; l--)
                t[l] = t[l - 1];
            t[l] = [n, o, i];
        }),
        (r.d = function (t, e) {
            for (var n in e)
                r.o(e, n) &&
                    !r.o(t, n) &&
                    Object.defineProperty(t, n, { enumerable: !0, get: e[n] });
        }),
        (r.g = (function () {
            if ("object" == typeof globalThis) return globalThis;
            try {
                return this || new Function("return this")();
            } catch (t) {
                if ("object" == typeof window) return window;
            }
        })()),
        (r.o = function (t, e) {
            return Object.prototype.hasOwnProperty.call(t, e);
        }),
        (function () {
            var t = { 143: 0 };
            r.O.j = function (e) {
                return 0 === t[e];
            };
            var e = function (e, n) {
                    var o,
                        i,
                        a = n[0],
                        u = n[1],
                        c = n[2],
                        s = 0;
                    if (
                        a.some(function (e) {
                            return 0 !== t[e];
                        })
                    ) {
                        for (o in u) r.o(u, o) && (r.m[o] = u[o]);
                        if (c) var l = c(r);
                    }
                    for (e && e(n); s < a.length; s++)
                        (i = a[s]), r.o(t, i) && t[i] && t[i][0](), (t[i] = 0);
                    return r.O(l);
                },
                n = (self.webpackChunkrandom_name_picker =
                    self.webpackChunkrandom_name_picker || []);
            n.forEach(e.bind(null, 0)), (n.push = e.bind(null, n.push.bind(n)));
        })();
    var o = r.O(void 0, [736], function () {
        return r(69774);
    });
    o = r.O(o);
})();