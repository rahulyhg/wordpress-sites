! function(n) {
    n.jPanelMenu = function(e) {
        ("undefined" == typeof e || null == e) && (e = {});
        var t = {
            options: n.extend({
                menu: "#menu",
                panel: "body",
                trigger: ".menu-trigger",
                excludedPanelContent: "style, script",
                clone: !0,
                keepEventHandlers: !1,
                direction: "left",
                openPosition: "250px",
                animated: !0,
                closeOnContentClick: !0,
                keyboardShortcuts: [{
                    code: 27,
                    open: !1,
                    close: !0
                }, {
                    code: 37,
                    open: !1,
                    close: !0
                }, {
                    code: 39,
                    open: !0,
                    close: !0
                }, {
                    code: 77,
                    open: !0,
                    close: !0
                }],
                duration: 150,
                openDuration: e.duration || 150,
                closeDuration: e.duration || 150,
                easing: "ease-in-out",
                openEasing: e.easing || "ease-in-out",
                closeEasing: e.easing || "ease-in-out",
                before: function() {},
                beforeOpen: function() {},
                beforeClose: function() {},
                after: function() {},
                afterOpen: function() {},
                afterClose: function() {},
                beforeOn: function() {},
                afterOn: function() {},
                beforeOff: function() {},
                afterOff: function() {}
            }, e),
            settings: {
                transitionsSupported: "WebkitTransition" in document.body.style || "MozTransition" in document.body.style || "msTransition" in document.body.style || "OTransition" in document.body.style || "Transition" in document.body.style,
                transformsSupported: "WebkitTransform" in document.body.style || "MozTransform" in document.body.style || "msTransform" in document.body.style || "OTransform" in document.body.style || "Transform" in document.body.style,
                cssPrefix: "",
                panelPosition: "static",
                positionUnits: "px"
            },
            menu: "#jPanelMenu-menu",
            panel: ".jPanelMenu-panel",
            timeouts: {},
            clearTimeouts: function() {
                clearTimeout(t.timeouts.open), clearTimeout(t.timeouts.afterOpen), clearTimeout(t.timeouts.afterClose)
            },
            setPositionUnits: function() {
                for (var n = !1, e = ["%", "px", "em"], o = 0; o < e.length; o++) {
                    var i = e[o];
                    t.options.openPosition.toString().substr(-i.length) == i && (n = !0, t.settings.positionUnits = i)
                }
                n || (t.options.openPosition = parseInt(t.options.openPosition) + t.settings.positionUnits)
            },
            computePositionStyle: function(n, e) {
                var o = n ? t.options.openPosition : "0" + t.settings.positionUnits,
                    i = {};
                if (t.settings.transformsSupported) {
                    var s = n && "right" == t.options.direction ? "-" : "",
                        r = "translate3d(" + s + o + ",0,0)",
                        a = "transform";
                    e ? (i = "", "" != t.settings.cssPrefix && (i = t.settings.cssPrefix + a + ":" + r + ";"), i += a + ":" + r + ";") : ("" != t.settings.cssPrefix && (i[t.settings.cssPrefix + a] = r), i[a] = r)
                } else e ? (i = "", i = t.options.direction + ": " + o + ";") : i[t.options.direction] = o;
                return i
            },
            setCSSPrefix: function() {
                t.settings.cssPrefix = t.getCSSPrefix()
            },
            setjPanelMenuStyles: function() {
                var e = "background:#fff",
                    o = n("html").css("background-color"),
                    i = n("body").css("background-color"),
                    s = function(e) {
                        var t = [];
                        return n.each(["background-color", "background-image", "background-position", "background-repeat", "background-attachment", "background-size", "background-clip"], function(n, o) {
                            "" !== e.css(o) && t.push(o + ":" + e.css(o))
                        }), t.join(";")
                    };
                "transparent" !== i && "rgba(0, 0, 0, 0)" !== i ? e = s(n("body")) : "transparent" !== o && "rgba(0, 0, 0, 0)" !== o && (e = s(n("html"))), 0 == n("#jPanelMenu-style-master").length && n("body").append('<style id="jPanelMenu-style-master">body{width:100%}.jPanelMenu,body{overflow-x:hidden}#jPanelMenu-menu{display:block;position:fixed;top:0;' + t.options.direction + ":0;height:100%;z-index:-1;overflow-x:hidden;overflow-y:scroll;-webkit-overflow-scrolling:touch}.jPanelMenu-panel{position:static;" + t.options.direction + ":0;top:0;z-index:2;width:100%;min-height:100%;" + e + ";}</style>")
            },
            setMenuState: function(e) {
                var o = e ? "open" : "closed";
                n(t.options.panel).attr("data-menu-position", o)
            },
            getMenuState: function() {
                return n(t.options.panel).attr("data-menu-position")
            },
            menuIsOpen: function() {
                return "open" == t.getMenuState() ? !0 : !1
            },
            setMenuStyle: function(e) {
                n(t.menu).css(e)
            },
            setPanelStyle: function(e) {
                n(t.panel).css(e)
            },
            showMenu: function() {
                t.setMenuStyle({
                    display: "block"
                }), t.setMenuStyle({
                    "z-index": "1"
                })
            },
            hideMenu: function() {
                t.setMenuStyle({
                    "z-index": "-1"
                }), t.setMenuStyle({
                    display: "none"
                })
            },
            enableTransitions: function(e, o) {
                var i = e / 1e3,
                    s = t.getCSSEasingFunction(o);
                t.disableTransitions(), n("body").append('<style id="jPanelMenu-style-transitions">.jPanelMenu-panel{' + t.settings.cssPrefix + "transition: all " + i + "s " + s + "; transition: all " + i + "s " + s + ";}</style>")
            },
            disableTransitions: function() {
                n("#jPanelMenu-style-transitions").remove()
            },
            getCSSEasingFunction: function(n) {
                switch (n) {
                    case "linear":
                        return n;
                    case "ease":
                        return n;
                    case "ease-in":
                        return n;
                    case "ease-out":
                        return n;
                    case "ease-in-out":
                        return n;
                    default:
                        return "ease-in-out"
                }
            },
            getJSEasingFunction: function(n) {
                switch (n) {
                    case "linear":
                        return n;
                    default:
                        return "swing"
                }
            },
            getVendorPrefix: function() {
                if ("result" in arguments.callee) return arguments.callee.result;
                var n = /^(Moz|Webkit|Khtml|O|ms|Icab)(?=[A-Z])/,
                    e = document.getElementsByTagName("script")[0];
                for (var t in e.style)
                    if (n.test(t)) return arguments.callee.result = t.match(n)[0];
                return arguments.callee.result = "WebkitOpacity" in e.style ? "Webkit" : "KhtmlOpacity" in e.style ? "Khtml" : ""
            },
            getCSSPrefix: function() {
                var n = t.getVendorPrefix();
                return "" != n ? "-" + n.toLowerCase() + "-" : ""
            },
            openMenu: function(e) {
                ("undefined" == typeof e || null == e) && (e = t.options.animated), t.clearTimeouts(), t.options.before(), t.options.beforeOpen(), t.setMenuState(!0), t.showMenu();
                var o = {
                    none: e ? !1 : !0,
                    transitions: e && t.settings.transitionsSupported ? !0 : !1
                };
                if (o.transitions || o.none) {
                    o.none && t.disableTransitions(), o.transitions && t.enableTransitions(t.options.openDuration, t.options.openEasing);
                    var i = t.computePositionStyle(!0);
                    t.setPanelStyle(i), t.timeouts.afterOpen = setTimeout(function() {
                        t.options.after(), t.options.afterOpen(), t.initiateContentClickListeners()
                    }, t.options.openDuration)
                } else {
                    var s = t.getJSEasingFunction(t.options.openEasing),
                        r = {};
                    r[t.options.direction] = t.options.openPosition, n(t.panel).stop().animate(r, t.options.openDuration, s, function() {
                        t.options.after(), t.options.afterOpen(), t.initiateContentClickListeners()
                    })
                }
            },
            closeMenu: function(e) {
                ("undefined" == typeof e || null == e) && (e = t.options.animated), t.clearTimeouts(), t.options.before(), t.options.beforeClose(), t.setMenuState(!1);
                var o = {
                    none: e ? !1 : !0,
                    transitions: e && t.settings.transitionsSupported ? !0 : !1
                };
                if (o.transitions || o.none) {
                    o.none && t.disableTransitions(), o.transitions && t.enableTransitions(t.options.closeDuration, t.options.closeEasing);
                    var i = t.computePositionStyle();
                    t.setPanelStyle(i), t.timeouts.afterClose = setTimeout(function() {
                        t.disableTransitions(), t.hideMenu(), t.options.after(), t.options.afterClose(), t.destroyContentClickListeners()
                    }, t.options.closeDuration)
                } else {
                    var s = t.getJSEasingFunction(t.options.closeEasing),
                        r = {};
                    r[t.options.direction] = 0 + t.settings.positionUnits, n(t.panel).stop().animate(r, t.options.closeDuration, s, function() {
                        t.hideMenu(), t.options.after(), t.options.afterClose(), t.destroyContentClickListeners()
                    })
                }
            },
            triggerMenu: function(n) {
                t.menuIsOpen() ? t.closeMenu(n) : t.openMenu(n)
            },
            initiateClickListeners: function() {
                n(document).on("click touchend", t.options.trigger, function(n) {
                    t.triggerMenu(t.options.animated), n.preventDefault()
                })
            },
            destroyClickListeners: function() {
                n(document).off("click touchend", t.options.trigger, null)
            },
            initiateContentClickListeners: function() {
                return t.options.closeOnContentClick ? (n(document).on("click touchend", t.panel, function(n) {
                    t.menuIsOpen() && t.closeMenu(t.options.animated), n.preventDefault()
                }), void 0) : !1
            },
            destroyContentClickListeners: function() {
                return t.options.closeOnContentClick ? (n(document).off("click touchend", t.panel, null), void 0) : !1
            },
            initiateKeyboardListeners: function() {
                var e = ["input", "textarea", "select"];
                n(document).on("keydown", function(o) {
                    var i = n(o.target),
                        s = !1;
                    if (n.each(e, function() {
                            i.is(this.toString()) && (s = !0)
                        }), s) return !0;
                    for (mapping in t.options.keyboardShortcuts)
                        if (o.which == t.options.keyboardShortcuts[mapping].code) {
                            var r = t.options.keyboardShortcuts[mapping];
                            r.open && r.close ? t.triggerMenu(t.options.animated) : !r.open || r.close || t.menuIsOpen() ? !r.open && r.close && t.menuIsOpen() && t.closeMenu(t.options.animated) : t.openMenu(t.options.animated), o.preventDefault()
                        }
                })
            },
            destroyKeyboardListeners: function() {
                n(document).off("keydown", null)
            },
            setupMarkup: function() {
                n("html").addClass("jPanelMenu"), n(t.options.panel + " > *").not(t.menu + ", " + t.options.excludedPanelContent).wrapAll('<div class="' + t.panel.replace(".", "") + '"/>');
                var e = t.options.clone ? n(t.options.menu).clone(t.options.keepEventHandlers) : n(t.options.menu);
                e.attr("id", t.menu.replace("#", "")).insertAfter(t.options.panel + " > " + t.panel)
            },
            resetMarkup: function() {
                n("html").removeClass("jPanelMenu"), n(t.options.panel + " > " + t.panel + " > *").unwrap(), n(t.menu).remove()
            },
            init: function() {
                t.options.beforeOn(), t.setPositionUnits(), t.setCSSPrefix(), t.initiateClickListeners(), "[object Array]" === Object.prototype.toString.call(t.options.keyboardShortcuts) && t.initiateKeyboardListeners(), t.setjPanelMenuStyles(), t.setMenuState(!1), t.setupMarkup(), t.setPanelStyle({
                    position: t.options.animated && "static" === t.settings.panelPosition ? "relative" : t.settings.panelPosition
                }), t.setMenuStyle({
                    width: t.options.openPosition
                }), t.closeMenu(!1), t.options.afterOn()
            },
            destroy: function() {
                t.options.beforeOff(), t.closeMenu(), t.destroyClickListeners(), "[object Array]" === Object.prototype.toString.call(t.options.keyboardShortcuts) && t.destroyKeyboardListeners(), t.resetMarkup();
                var n = {};
                n[t.options.direction] = "auto", t.options.afterOff()
            }
        };
        return {
            on: t.init,
            off: t.destroy,
            trigger: t.triggerMenu,
            open: t.openMenu,
            close: t.closeMenu,
            isOpen: t.menuIsOpen,
            menu: t.menu,
            getMenu: function() {
                return n(t.menu)
            },
            panel: t.panel,
            getPanel: function() {
                return n(t.panel)
            },
            setPosition: function(n) {
                ("undefined" == typeof n || null == n) && (n = t.options.openPosition), t.options.openPosition = n, t.setMenuStyle({
                    width: t.options.openPosition
                })
            }
        }
    }
}(jQuery);