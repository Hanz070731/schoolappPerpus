<!DOCTYPE html>
<!-- This site was created with figma.to.website. https://figma.to.website -->
<!-- Last Published: Sun Apr 06 2025 05:24:27 GMT+0000 (Coordinated Universal Time) -->
<html lang="en" xml:lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Perputakaan SMKN 1 Cimahi</title>
        <link rel="canonical" href="https://rosella-nz5asaenen.figweb.site/">
        <meta name="description" content="Created with figma.to.website">
        <meta property="og:url" content="https://rosella-nz5asaenen.figweb.site/">
        <meta property="og:type" content="website">
        <meta property="og:title" content="Desktop - 1">
        <meta property="og:description" content="Created with figma.to.website">
        <meta property="og:image:type" content="image/jpeg">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="630">
        <meta property="og:image" content="https://rosella-nz5asaenen.figweb.site/cdn-cgi/imagedelivery/s-dfVpmPR-aKHmwFNwAgnQ/rosella-nz5asaenen.figweb.site-de701e407c7cd4f004364f075f1c708383729a3d/public">
        <meta name="twitter:title" content="Desktop - 1">
        <meta name="twitter:description" content="Created with figma.to.website">
        <meta name="twitter:image:type" content="image/jpeg">
        <meta name="twitter:image:width" content="1200">
        <meta name="twitter:image:height" content="630">
        <meta name="twitter:image" content="https://rosella-nz5asaenen.figweb.site/cdn-cgi/imagedelivery/s-dfVpmPR-aKHmwFNwAgnQ/rosella-nz5asaenen.figweb.site-de701e407c7cd4f004364f075f1c708383729a3d/public">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="viewport" content="width=device-width">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
        <script>
            window.F2W_REACTIONS = ( () => {
                const n = [];
                return {}
            }
            )(),
            window.F2W_VARIABLES = {},
            window.F2W_COLLECTION_VARS = {},
            window.F2W_COLLECTION_MODE_BPS = {},
            window.F2W_COLOR_SCHEMES = void 0,
            window.F2W_LANGUAGES = void 0;
        </script>
        <script>
            var Ue = Object.defineProperty
              , Ke = Object.defineProperties
              , Ye = Object.getOwnPropertyDescriptors
              , H = Object.getOwnPropertySymbols
              , oe = Object.prototype.hasOwnProperty
              , ie = Object.prototype.propertyIsEnumerable
              , re = (r, n, o) => n in r ? Ue(r, n, {
                enumerable: !0,
                configurable: !0,
                writable: !0,
                value: o
            }) : r[n] = o
              , w = (r, n) => {
                for (var o in n || (n = {}))
                    oe.call(n, o) && re(r, o, n[o]);
                if (H)
                    for (var o of H(n))
                        ie.call(n, o) && re(r, o, n[o]);
                return r
            }
              , V = (r, n) => Ke(r, Ye(n))
              , se = (r, n) => {
                var o = {};
                for (var i in r)
                    oe.call(r, i) && n.indexOf(i) < 0 && (o[i] = r[i]);
                if (r != null && H)
                    for (var i of H(r))
                        n.indexOf(i) < 0 && ie.call(r, i) && (o[i] = r[i]);
                return o
            }
              , ae = (r, n, o) => new Promise( (i, l) => {
                var a = p => {
                    try {
                        c(o.next(p))
                    } catch (f) {
                        l(f)
                    }
                }
                  , d = p => {
                    try {
                        c(o.throw(p))
                    } catch (f) {
                        l(f)
                    }
                }
                  , c = p => p.done ? i(p.value) : Promise.resolve(p.value).then(a, d);
                c((o = o.apply(r, n)).next())
            }
            );
            function I(r, n) {
                return Math.round(r * n) / n
            }
            function q(r, n, o, i) {
                let l = (r + (i || "")).toString().includes("%");
                if (typeof r == "string" ? [r,n,o,i] = r.match(/(0?\.?\d+)%?\b/g).map(a => Number(a)) : i !== void 0 && (i = Number.parseFloat(i)),
                typeof r != "number" || typeof n != "number" || typeof o != "number" || r > 255 || n > 255 || o > 255)
                    throw new TypeError("Expected three numbers below 256");
                if (typeof i == "number") {
                    if (!l && i >= 0 && i <= 1)
                        i = Math.round(255 * i);
                    else if (l && i >= 0 && i <= 100)
                        i = Math.round(255 * i / 100);
                    else
                        throw new TypeError(`Expected alpha value (${i}) as a fraction or percentage`);
                    i = (i | 256).toString(16).slice(1)
                } else
                    i = "";
                return (o | n << 8 | r << 16 | 1 << 24).toString(16).slice(1) + i
            }
            function F(r) {
                return r.filter(le)
            }
            function le(r) {
                return r != null
            }
            function $(r) {
                console.warn(r)
            }
            function W(r) {
                return typeof r == "object" && r.type === "VARIABLE_ALIAS"
            }
            function qe(r) {
                if ("a"in r) {
                    let o = I(r.a, 100);
                    if (o !== 1)
                        return `rgba(${r.r},${r.g},${r.b},${o})`
                }
                let n = q(r.r, r.g, r.b);
                return n[0] === n[1] && n[2] === n[3] && n[4] === n[5] ? `#${n[0]}${n[2]}${n[4]}` : `#${n}`
            }
            function Ze(r) {
                let {r: n, g: o, b: i, a: l=1} = r;
                return {
                    r: I(n * 255, 1),
                    g: I(o * 255, 1),
                    b: I(i * 255, 1),
                    a: l
                }
            }
            function R(r) {
                return `${I(r, 10)}px`
            }
            function Z(r) {
                return `${I(r, 10)}%`
            }
            function ue(r) {
                switch (typeof r) {
                case "object":
                    if (W(r))
                        return `var(${r.id})`;
                    if ("r"in r)
                        return qe(Ze(r));
                case "string":
                case "number":
                case "boolean":
                default:
                    return String(r)
                }
            }
            function z(r) {
                return "T" + r
            }
            function Q(r, n, o) {
                let i = Object.entries(n);
                if (!i.length)
                    return "";
                let l = [r + " {", ...i.filter( ([,a]) => a !== void 0 && a !== "").map( ([a,d]) => `  ${a}: ${d};`), "}"];
                return o && (l = l.map(a => o + a)),
                l.join(`
`)
            }
            var Je = {
                padding: "0",
                margin: "0"
            }
              , et = {
                a: {
                    color: "inherit",
                    "text-decoration": "inherit"
                },
                input: {
                    border: "none",
                    font: "inherit",
                    outline: "none",
                    "background-color": "inherit"
                },
                button: {
                    "border-style": "none",
                    width: "auto",
                    overflow: "visible",
                    background: "transparent",
                    font: "inherit",
                    "background-color": "inherit",
                    "line-height": "normal",
                    color: "inherit"
                },
                textarea: {
                    font: "inherit",
                    "background-color": "inherit"
                },
                select: {
                    font: "inherit",
                    "background-color": "inherit"
                },
                img: {
                    display: "block"
                },
                picture: {
                    display: "block"
                },
                video: {
                    display: "block"
                },
                canvas: {
                    display: "block"
                },
                svg: {
                    display: "block"
                }
            }
              , sn = Q("*", Je) + Object.entries(et).map( ([r,n]) => Q(r, n)).join(`
`)
              , de = ["appear", "mousedown", "mouseenter", "mouseleave", "mouseup", "timeout", "click", "press", "drag", "keydown", "hover"];
            function ce(r, n, o) {
                if (o.direction === "LEFT") {
                    if (n === "BOTTOM_LEFT" || n === "TOP_LEFT")
                        return [{
                            eltId: r,
                            props: [{
                                key: "left",
                                from: "100%",
                                to: "0%"
                            }]
                        }];
                    if (n === "BOTTOM_RIGHT" || n === "TOP_RIGHT")
                        return [{
                            eltId: r,
                            props: [{
                                key: "translate",
                                from: "100% 0px",
                                to: "0px 0px"
                            }]
                        }];
                    {
                        let i = n === "CENTER" ? "-50%" : "0px";
                        return [{
                            eltId: r,
                            props: [{
                                key: "left",
                                from: "100%",
                                to: "50%"
                            }, {
                                key: "translate",
                                from: `0px ${i}`,
                                to: `-50% ${i}`
                            }]
                        }]
                    }
                } else if (o.direction === "RIGHT") {
                    if (n === "BOTTOM_LEFT" || n === "TOP_LEFT")
                        return [{
                            eltId: r,
                            props: [{
                                key: "translate",
                                from: "-100% 0px",
                                to: "0px 0px"
                            }]
                        }];
                    if (n === "BOTTOM_RIGHT" || n === "TOP_RIGHT")
                        return [{
                            eltId: r,
                            props: [{
                                key: "right",
                                from: "100%",
                                to: "0px"
                            }]
                        }];
                    {
                        let i = n === "CENTER" ? "-50%" : "0px";
                        return [{
                            eltId: r,
                            props: [{
                                key: "left",
                                from: "0px",
                                to: "50%"
                            }, {
                                key: "translate",
                                from: `-100% ${i}`,
                                to: `-50% ${i}`
                            }]
                        }]
                    }
                } else if (o.direction === "TOP")
                    if (n === "BOTTOM_LEFT" || n === "BOTTOM_RIGHT" || n === "BOTTOM_CENTER") {
                        let i = n === "BOTTOM_CENTER" ? "-50%" : "0px";
                        return [{
                            eltId: r,
                            props: [{
                                key: "translate",
                                from: `${i} 100%`,
                                to: `${i} 0px`
                            }]
                        }]
                    } else
                        return n === "TOP_LEFT" || n === "TOP_RIGHT" || n === "TOP_CENTER" ? [{
                            eltId: r,
                            props: [{
                                key: "top",
                                from: "100%",
                                to: "0px"
                            }]
                        }] : [{
                            eltId: r,
                            props: [{
                                key: "top",
                                from: "100%",
                                to: "50%"
                            }, {
                                key: "translate",
                                from: "-50% 0%",
                                to: "-50% -50%"
                            }]
                        }];
                else if (o.direction === "BOTTOM") {
                    if (n === "BOTTOM_LEFT" || n === "BOTTOM_RIGHT" || n === "BOTTOM_CENTER")
                        return [{
                            eltId: r,
                            props: [{
                                key: "bottom",
                                from: "100%",
                                to: "0px"
                            }]
                        }];
                    if (n === "TOP_LEFT" || n === "TOP_RIGHT" || n === "TOP_CENTER") {
                        let i = n === "TOP_CENTER" ? "-50%" : "0px";
                        return [{
                            eltId: r,
                            props: [{
                                key: "translate",
                                from: `${i} -100%`,
                                to: `${i} 0px`
                            }]
                        }]
                    } else
                        return [{
                            eltId: r,
                            props: [{
                                key: "top",
                                from: "0px",
                                to: "50%"
                            }, {
                                key: "translate",
                                from: "-50% -100%",
                                to: "-50% -50%"
                            }]
                        }]
                } else
                    console.warn("Unsupported transition:", o);
                return []
            }
            function G(r) {
                if (r)
                    return (...n) => {
                        if (!r)
                            return;
                        let o = r;
                        return r = void 0,
                        o(...n)
                    }
            }
            var tt = r => r instanceof HTMLElement || r instanceof SVGElement;
            function nt(r, n) {
                if (!r.parentElement)
                    return;
                let o = new MutationObserver(i => {
                    for (let l of i.filter(a => a.type === "childList"))
                        for (let a of l.removedNodes)
                            a === r && (n?.(),
                            o.disconnect())
                }
                );
                o.observe(r.parentElement, {
                    childList: !0
                })
            }
            function _(r, n) {
                let o = new MutationObserver(i => {
                    for (let l of i.filter(a => a.type === "childList"))
                        for (let a of l.addedNodes)
                            tt(a) && a.matches(r) && nt(a, n(a))
                }
                );
                return o.observe(document, {
                    childList: !0,
                    subtree: !0
                }),
                () => o.disconnect()
            }
            var pe = new Set(["youtube-video", "vimeo-video", "spotify-audio", "jwplayer-video", "videojs-video", "wistia-video", "cloudflare-video", "hls-video", "shaka-video", "dash-video"]);
            function rt(r) {
                return pe.has(r.tagName.toLowerCase()) || r.tagName === "VIDEO"
            }
            function ot(r) {
                if (r.tagName !== "IFRAME")
                    return !1;
                let n = r.src;
                return (n.includes("youtube.com") || n.includes("youtube-nocookie.com")) && n.includes("enablejsapi=1")
            }
            var D = class {
                constructor(r) {
                    this.iframe = r,
                    this.info = {},
                    this.messageListener = null,
                    this.loaded = new Promise(n => {
                        let o = () => {
                            this.iframe.removeEventListener("load", o),
                            setTimeout( () => {
                                this.requestYoutubeListening()
                            }
                            )
                        }
                        ;
                        this.iframe.addEventListener("load", o),
                        this.messageListener = i => {
                            if (i.source === this.iframe.contentWindow && i.data) {
                                let l;
                                try {
                                    l = JSON.parse(i.data)
                                } catch (a) {
                                    console.error("YoutubeController messageListener", a);
                                    return
                                }
                                l.event === "onReady" && this.iframe.removeEventListener("load", o),
                                l.info && (Object.assign(this.info, l.info),
                                n(!0))
                            }
                        }
                        ,
                        window.addEventListener("message", this.messageListener),
                        this.requestYoutubeListening()
                    }
                    )
                }
                sendYoutubeMessage(r) {
                    return ae(this, arguments, function*(n, o=[]) {
                        var i;
                        yield this.loaded,
                        (i = this.iframe.contentWindow) == null || i.postMessage(JSON.stringify({
                            event: "command",
                            func: n,
                            args: o
                        }), "*")
                    })
                }
                requestYoutubeListening() {
                    var r;
                    (r = this.iframe.contentWindow) == null || r.postMessage(JSON.stringify({
                        event: "listening"
                    }), "*")
                }
                get muted() {
                    return this.info.muted
                }
                get volume() {
                    return this.info.volume
                }
                set muted(r) {
                    r ? this.sendYoutubeMessage("mute") : this.sendYoutubeMessage("unMute")
                }
                get currentTime() {
                    return this.info.currentTime
                }
                set currentTime(r) {
                    this.sendYoutubeMessage("seekTo", [r, !0])
                }
                get paused() {
                    return this.info.playerState === 2
                }
                play() {
                    this.sendYoutubeMessage("playVideo")
                }
                pause() {
                    this.sendYoutubeMessage("pauseVideo")
                }
                static from(r) {
                    return r.f2w_yt_controller || (r.f2w_yt_controller = new D(r))
                }
            }
            ;
            function M(r) {
                if (rt(r))
                    return r;
                if (ot(r))
                    return D.from(r)
            }
            function fe(r) {
                let n = M(r);
                return n ? () => (n.muted = !n.muted,
                () => {
                    n.muted = !n.muted
                }
                ) : () => console.warn("Video element not recognized", r)
            }
            function me(r) {
                let n = M(r);
                return n ? () => (n.muted = !0,
                () => {
                    n.muted = !1
                }
                ) : () => console.warn("Video element not recognized", r)
            }
            function ge(r) {
                let n = M(r);
                return n ? () => (n.muted = !1,
                () => {
                    n.muted = !0
                }
                ) : () => console.warn("Video element not recognized", r)
            }
            function ye(r) {
                let n = M(r);
                return n ? () => (n.play(),
                () => n.pause()) : () => console.warn("Video element not recognized", r)
            }
            function Ee(r) {
                let n = M(r);
                return n ? () => (n.pause(),
                () => n.play()) : () => console.warn("Video element not recognized", r)
            }
            function he(r) {
                let n = M(r);
                return n ? () => (n.paused ? n.play() : n.pause(),
                () => {
                    n.paused ? n.play() : n.pause()
                }
                ) : () => console.warn("Video element not recognized", r)
            }
            function xe(r, n) {
                let o = M(r);
                return o ? () => {
                    o.currentTime = n
                }
                : () => console.warn("Video element not recognized", r)
            }
            function be(r, n) {
                let o = M(r);
                return o ? () => (o.currentTime += n,
                () => {
                    o.currentTime -= n
                }
                ) : () => console.warn("Video element not recognized", r)
            }
            function Te(r, n) {
                let o = M(r);
                return o ? () => (o.currentTime -= n,
                () => {
                    o.currentTime += n
                }
                ) : () => console.warn("Video element not recognized", r)
            }
            function Ne() {
                let r = navigator.userAgent;
                return r.includes("Safari") && !r.includes("Chrome")
            }
            function ve(r) {
                return r === "absolute" || r === "fixed"
            }
            var it = Ne();
            function U(r, n, o) {
                r.animate(w({}, n), {
                    pseudoElement: o,
                    iterations: 1,
                    duration: 0,
                    fill: "forwards"
                })
            }
            function J(r) {
                return Object.fromEntries(r.map(n => [n.camelKey, [n.from, n.to]]))
            }
            function K(r, n, o, i, l) {
                let a = r.parentElement, d = getComputedStyle(r), c = getComputedStyle(a).display, p = c.endsWith("flex") || c.endsWith("grid"), f = ve(d.position), h = n.map(s => V(w({}, s), {
                    camelKey: s.key.startsWith("--") ? s.key : s.key.replace(/-([a-z])/g, (E, T) => T.toUpperCase())
                })), A = {}, b = h.filter(s => s.pseudo ? !1 : s.key.startsWith("--f2w-attr-") ? (A[s.key.slice(11)] = s.to,
                !1) : !0), u = J(b), x = J(h.filter(s => s.pseudo === "::before")), C = J(h.filter(s => s.pseudo === "::after")), m;
                u.display && (u.display[0] === "none" ? r.style.display = String(u.display[1]) : u.display[1] === "none" && p && !f && (r.style.display = "none"),
                m = String(u.display[1]),
                delete u.display),
                it && (Ce(r, u, "overflow"),
                Ce(r, u, "rowGap", "gridRowGap"));
                let v = +getComputedStyle(r).getPropertyValue("--f2w-order");
                if (u["--f2w-order"]) {
                    let s = u["--f2w-order"][1];
                    v = s === void 0 ? NaN : +s,
                    isNaN(v) || r.style.setProperty("--f2w-order", String(v)),
                    delete u["--f2w-order"]
                }
                if (isNaN(v) || l.add(a),
                u["--f2w-img-src"]) {
                    let s = r.f2w_image_lazy_loader
                      , E = u["--f2w-img-src"][1];
                    s || (r.f2w_image_lazy_loader = s = new Image,
                    s.decoding = "sync",
                    s.onload = () => {
                        r.decoding = "sync",
                        r.setAttribute("src", E),
                        delete r.f2w_image_lazy_loader
                    }
                    ),
                    s.src = E,
                    delete u["--f2w-img-src"]
                }
                u.$innerHTML && (r.innerHTML = String(u.$innerHTML[1]),
                delete u.$innerHTML);
                for (let[s,E] of Object.entries(A))
                    r.setAttribute(s, String(E));
                if (u.left && u.right) {
                    if (u.left[1] === "revert" && u.right[0] === "revert") {
                        let {right: s} = a.getBoundingClientRect()
                          , {right: E} = r.getBoundingClientRect()
                          , T = R(s - E);
                        U(r, {
                            left: "revert",
                            right: T
                        }),
                        delete u.left,
                        u.right[0] = T
                    } else if (u.left[0] === "revert" && u.right[1] === "revert") {
                        let {left: s} = a.getBoundingClientRect()
                          , {left: E} = r.getBoundingClientRect()
                          , T = R(E - s);
                        U(r, {
                            right: "revert",
                            left: T
                        }),
                        delete u.right,
                        u.left[0] = T
                    }
                }
                if (u.top && u.bottom) {
                    if (u.top[1] === "revert" && u.bottom[0] === "revert") {
                        let {bottom: s} = a.getBoundingClientRect()
                          , {bottom: E} = r.getBoundingClientRect()
                          , T = R(s - E);
                        U(r, {
                            top: "revert",
                            bottom: T
                        }),
                        delete u.top,
                        u.bottom[0] = T
                    } else if (u.top[0] === "revert" && u.bottom[1] === "revert") {
                        let {top: s} = a.getBoundingClientRect()
                          , {top: E} = r.getBoundingClientRect()
                          , T = R(E - s);
                        U(r, {
                            bottom: "revert",
                            top: T
                        }),
                        delete u.bottom,
                        u.top[0] = T
                    }
                }
                u.backgroundImage && b.filter(s => s.key.startsWith("background-")).forEach(s => {
                    r.style.setProperty(s.key, String(s.to)),
                    delete u[s.camelKey]
                }
                );
                for (let[s,E] of [["before", x], ["after", C]])
                    E.display && (E.display[1] === "none" ? (r.classList.remove(s + "-visible"),
                    r.classList.add(s + "-hidden")) : (r.classList.remove(s + "-hidden"),
                    r.classList.add(s + "-visible")));
                let g = (s, E, T=!1) => {
                    if (!(!T && !Object.keys(s).length))
                        return r.animate(w({
                            easing: o
                        }, s), {
                            pseudoElement: E,
                            iterations: 1,
                            duration: i,
                            fill: "both"
                        })
                }
                  , y = g(u, void 0, !!m);
                m && y.finished.then( () => {
                    r.style.display = m
                }
                ),
                g(x, "::before"),
                g(C, "::after")
            }
            var Ce = (r, n, ...o) => {
                let i = o.find(l => l in n);
                !i || (r.style[o[0]] = String(n[i][1]),
                delete n[i])
            }
              , Pe = () => window.F2W_REACTIONS
              , j = () => window.F2W_VARIABLES
              , st = () => window.F2W_COLLECTION_MODE_BPS
              , Oe = r => {
                var n, o;
                return (o = (n = window.F2W_COLLECTION_VARS) == null ? void 0 : n[r]) != null ? o : {}
            }
              , at = (r, n) => Oe(r)[n];
            function _e(r, n) {
                j()[r] = n;
                let o = ue(n);
                document.body.style.setProperty(r, o);
                let i = `data${r.slice(1)}`;
                document.body.hasAttribute(i) && document.body.setAttribute(i, o),
                document.dispatchEvent(new CustomEvent("f2w-set-variable",{
                    detail: {
                        id: r,
                        value: n,
                        str: o
                    }
                }))
            }
            function X(r, n) {
                var o;
                document.body.setAttribute(`data-${r}`, n);
                let i = (o = at(r, n)) != null ? o : {};
                for (let[l,a] of Object.entries(i))
                    _e(l, a)
            }
            function lt(r, n) {
                X(r, n),
                ke(r, n)
            }
            function ke(r, n) {
                var o, i;
                if ((o = window.F2W_COLOR_SCHEMES) != null && o.includes(r))
                    localStorage?.setItem(We, n);
                else if ((i = window.F2W_LANGUAGES) != null && i.includes(r)) {
                    localStorage?.setItem(ze, n);
                    let l = Array.from(document.head.querySelectorAll('link[rel="alternate"]')).find(a => a.hreflang === n);
                    l && history.replaceState(null, "", new URL(l.href).pathname)
                }
            }
            function N(r) {
                return typeof r == "number" ? r : typeof r == "boolean" ? r ? 1 : 0 : typeof r == "string" ? parseFloat(r) : 0
            }
            function O(r) {
                return String(r)
            }
            function S(r) {
                return typeof r == "string" ? r === "true" : !!r
            }
            function B(r, n) {
                var o, i;
                if (r === void 0)
                    return !1;
                if (W(r))
                    return B(j()[r.id]);
                if (typeof r == "object" && "expressionArguments"in r) {
                    let l = r.expressionArguments.map(d => d.value).filter(d => d !== void 0).map(d => B(d, n))
                      , a = (i = (o = r.expressionArguments[0]) == null ? void 0 : o.resolvedType) != null ? i : "STRING";
                    switch (r.expressionFunction) {
                    case "ADDITION":
                        return a === "FLOAT" ? l.map(N).reduce( (d, c) => d + c) : l.map(O).reduce( (d, c) => d + c);
                    case "SUBTRACTION":
                        if (l.length !== 2)
                            throw new Error("Invalid expression");
                        return N(l[0]) - N(l[1]);
                    case "DIVISION":
                        if (l.length !== 2)
                            throw new Error("Invalid expression");
                        return N(l[0]) / N(l[1]);
                    case "MULTIPLICATION":
                        return l.map(N).reduce( (d, c) => d * c);
                    case "NEGATE":
                        if (l.length !== 1)
                            throw new Error("Invalid expression");
                        return -N(l[0]);
                    case "GREATER_THAN":
                        if (l.length !== 2)
                            throw new Error("Invalid expression");
                        return N(l[0]) > N(l[1]);
                    case "GREATER_THAN_OR_EQUAL":
                        if (l.length !== 2)
                            throw new Error("Invalid expression");
                        return N(l[0]) >= N(l[1]);
                    case "LESS_THAN":
                        if (l.length !== 2)
                            throw new Error("Invalid expression");
                        return N(l[0]) < N(l[1]);
                    case "LESS_THAN_OR_EQUAL":
                        if (l.length !== 2)
                            throw new Error("Invalid expression");
                        return N(l[0]) <= N(l[1]);
                    case "EQUALS":
                        if (l.length !== 2)
                            throw new Error("Invalid expression");
                        return a === "FLOAT" ? N(l[0]) === N(l[1]) : a === "BOOLEAN" ? S(l[0]) === S(l[1]) : O(l[0]) === O(l[1]);
                    case "NOT_EQUAL":
                        if (l.length !== 2)
                            throw new Error("Invalid expression");
                        return a === "FLOAT" ? N(l[0]) !== N(l[1]) : a === "BOOLEAN" ? S(l[0]) !== S(l[1]) : O(l[0]) !== O(l[1]);
                    case "AND":
                        if (l.length !== 2)
                            throw new Error("Invalid expression");
                        return S(l[0]) && S(l[1]);
                    case "OR":
                        if (l.length !== 2)
                            throw new Error("Invalid expression");
                        return S(l[0]) || S(l[1]);
                    case "NOT":
                        if (l.length !== 1)
                            throw new Error("Invalid expression");
                        return !S(l[0]);
                    case "VAR_MODE_LOOKUP":
                    default:
                        return console.warn(`Expression not implemented yet: ${r.expressionFunction}`),
                        !1
                    }
                } else
                    return r
            }
            function te(r, n, o) {
                let i = r.map(l => ut(l, n, o));
                return (l, a) => {
                    let d = i.map(c => c(l, a)).filter(c => !!c);
                    if (d.length)
                        return (c, p) => d.forEach(f => f(c, p))
                }
            }
            function ut(r, n, o) {
                for (; r.type === "ALIAS"; )
                    r = Pe()[r.alias];
                let i = dt(r, n, o);
                return l => {
                    if (r.type !== "ANIMATE" && o === "drag") {
                        let a = l.detail;
                        if (!a.handled)
                            return a.handled = !0,
                            i(l)
                    }
                    if (!L) {
                        if (r.type === "ANIMATE" && r.rootId) {
                            let a = document.getElementById(r.rootId);
                            if (a != null && a.parentElement) {
                                let d = G(i(l));
                                if (d) {
                                    let c = a?.parentElement;
                                    for (; c && ((c.f2w_reset || (c.f2w_reset = [])).push(d),
                                    c = c.parentElement,
                                    c?.tagName !== "BODY"); )
                                        ;
                                }
                                return d
                            }
                        }
                        return i(l)
                    }
                }
            }
            function dt(action, bound, trigger) {
                var e, t;
                switch (action.type) {
                case "BACK":
                    return () => {
                        var r;
                        return ((r = window.F2W_PREVIEW_BACK) != null ? r : history.back)()
                    }
                    ;
                case "JS":
                    return () => eval(action.code);
                case "URL":
                    return () => {
                        action.openInNewTab ? window.open(action.url, "_blank") : window.F2W_PREVIEW_NAVIGATE ? window.F2W_PREVIEW_NAVIGATE(action.url) : location.assign(action.url)
                    }
                    ;
                case "SET_VARIABLE":
                    let {variableId, variableValue} = action;
                    if (variableId && variableValue?.value !== void 0)
                        return () => _e(variableId, B(variableValue.value, variableId));
                    break;
                case "SET_VARIABLE_MODE":
                    let {variableCollectionName, variableModeName} = action;
                    if (variableCollectionName && variableModeName)
                        return () => lt(variableCollectionName, variableModeName);
                    break;
                case "CONDITIONAL":
                    let blocks = action.conditionalBlocks.map(r => {
                        let n = te(r.actions, bound, trigger)
                          , {condition: o} = r;
                        return {
                            test: o ? () => S(B(o.value)) : () => !0,
                            run: n
                        }
                    }
                    );
                    return () => {
                        let r = [];
                        for (let n of blocks)
                            if (n.test()) {
                                let o = n.run();
                                o && r.push(o);
                                break
                            }
                        if (r.length)
                            return n => r.forEach(o => o(n))
                    }
                    ;
                case "KEY_CONDITION":
                    let run = te(action.actions, bound, trigger)
                      , keyCode = action.keyCodes[0]
                      , shiftKey = action.keyCodes.slice(1).includes(16)
                      , ctrlKey = action.keyCodes.slice(1).includes(17)
                      , altKey = action.keyCodes.slice(1).includes(18)
                      , metaKey = action.keyCodes.slice(1).includes(91);
                    return r => {
                        if (r instanceof KeyboardEvent) {
                            if (r.keyCode !== keyCode || r.ctrlKey !== ctrlKey || r.altKey !== altKey || r.metaKey !== metaKey || r.shiftKey !== shiftKey)
                                return;
                            r.preventDefault(),
                            r.stopPropagation(),
                            run(r)
                        }
                    }
                    ;
                case "CLOSE_OVERLAY":
                    {
                        if (action.self)
                            return r => {
                                var n, o;
                                return (o = (n = r?.target) == null ? void 0 : n.f2w_close) == null ? void 0 : o.call(n)
                            }
                            ;
                        if (action.overlayId) {
                            let r = document.getElementById(action.overlayId);
                            if (!r)
                                break;
                            return () => {
                                var n;
                                return (n = r.f2w_close) == null ? void 0 : n.call(r)
                            }
                        }
                        break
                    }
                case "SCROLL_TO":
                    if (!action.destinationId)
                        break;
                    let elt = document.getElementById(action.destinationId);
                    if (!elt)
                        break;
                    return r => {
                        var n;
                        r?.currentTarget instanceof HTMLAnchorElement && r?.preventDefault(),
                        elt.scrollIntoView({
                            behavior: (n = action.transition) != null && n.type ? "smooth" : "instant"
                        })
                    }
                    ;
                case "OVERLAY":
                    if (!action.destinationId)
                        break;
                    let overlay = document.getElementById(action.destinationId);
                    if (!overlay)
                        break;
                    let modal = Array(...overlay.children).find(r => r.tagName !== "TEMPLATE");
                    if (!modal)
                        break;
                    let {transition, overlayPositionType, overlayRelativePosition} = action
                      , duration = Math.round(1e3 * ((e = transition?.duration) != null ? e : 0))
                      , animations = [{
                        eltId: action.destinationId,
                        props: [{
                            key: "visibility",
                            from: "hidden",
                            to: "visible"
                        }, {
                            key: "opacity",
                            from: "0",
                            to: "1"
                        }]
                    }];
                    return overlayPositionType === "MANUAL" ? () => {
                        var r, n, o;
                        if (trigger === "hover") {
                            let d = (r = bound.f2w_mouseleave_remove) == null ? void 0 : r.call(bound);
                            if (d) {
                                let c = p => {
                                    Se(p, bound) && Se(p, modal) && (d(),
                                    document.removeEventListener("mousemove", c))
                                }
                                ;
                                document.addEventListener("mousemove", c)
                            }
                        }
                        let i = animations.slice(0)
                          , l = R(bound.getBoundingClientRect().left + ((n = overlayRelativePosition?.x) != null ? n : 0))
                          , a = R(bound.getBoundingClientRect().top + ((o = overlayRelativePosition?.y) != null ? o : 0));
                        return modal.style.setProperty("left", l),
                        modal.style.setProperty("top", a),
                        transition?.type === "MOVE_IN" && (transition.direction === "LEFT" ? i.push({
                            eltId: modal.id,
                            props: [{
                                key: "left",
                                from: "100%",
                                to: l
                            }]
                        }) : transition.direction === "RIGHT" ? i.push({
                            eltId: modal.id,
                            props: [{
                                key: "left",
                                from: "0px",
                                to: l
                            }, {
                                key: "translate",
                                from: "-100% 0px",
                                to: "0px 0px"
                            }]
                        }) : transition.direction === "TOP" ? i.push({
                            eltId: modal.id,
                            props: [{
                                key: "top",
                                from: "100%",
                                to: a
                            }]
                        }) : transition.direction === "BOTTOM" && i.push({
                            eltId: modal.id,
                            props: [{
                                key: "top",
                                from: "0px",
                                to: a
                            }, {
                                key: "translate",
                                from: "0px -100%",
                                to: "0px 0px"
                            }]
                        })),
                        ee(i, transition?.easing, duration, bound, trigger, `${trigger}(manual_overlay)`, overlay)()
                    }
                    : (transition?.type === "MOVE_IN" ? animations.push(...ce(modal.id, overlayPositionType, transition)) : transition != null && transition.type && console.warn("Unsupported transition:", transition),
                    ee(animations, transition?.easing, duration, bound, trigger, `${trigger}(overlay)`, overlay));
                case "ANIMATE":
                    {
                        let {animations: r, transition: n, rootId: o, reset: i} = action
                          , l = Math.round(1e3 * ((t = n?.duration) != null ? t : 0))
                          , a = ee(r, n?.easing, l, bound, trigger, i ? `${trigger}(+reset)` : trigger);
                        return i && o ? (d, c) => {
                            let p = document.getElementById(o);
                            if (p) {
                                let {f2w_reset: f} = p;
                                f != null && f.length && (delete p.f2w_reset,
                                f.reverse().forEach(h => h(void 0, !0)))
                            }
                            return a(d, c)
                        }
                        : a
                    }
                case "UPDATE_MEDIA_RUNTIME":
                    {
                        if (!action.destinationId)
                            break;
                        let r = document.getElementById(action.destinationId);
                        if (!r)
                            break;
                        switch (action.mediaAction) {
                        case "MUTE":
                            return me(r);
                        case "UNMUTE":
                            return ge(r);
                        case "TOGGLE_MUTE_UNMUTE":
                            return fe(r);
                        case "PLAY":
                            return ye(r);
                        case "PAUSE":
                            return Ee(r);
                        case "TOGGLE_PLAY_PAUSE":
                            return he(r);
                        case "SKIP_BACKWARD":
                            return Te(r, action.amountToSkip);
                        case "SKIP_FORWARD":
                            return be(r, action.amountToSkip);
                        case "SKIP_TO":
                            return xe(r, action.newTimestamp)
                        }
                    }
                default:
                    return () => console.warn("Action not implemented yet: " + action.type)
                }
                return () => {}
            }
            var Ae = 9999;
            function ee(r, n="linear", o, i, l, a, d) {
                return c => {
                    let p = r;
                    d && (document.body.parentElement.style.overflow = "hidden",
                    p = [{
                        eltId: d.id,
                        props: [{
                            key: "z-index",
                            from: 0,
                            to: Ae++
                        }]
                    }, ...p]);
                    let f = k(p, n, o, i, l, a, c)
                      , h = G( (A, b) => {
                        d && (Ae--,
                        document.body.parentElement.style.overflow = ""),
                        k(f, n, b ? 0 : o, i, l, `${a}(revert)`)
                    }
                    );
                    return d && (d.f2w_close = h),
                    h
                }
            }
            var we = new Map;
            function k(r, n, o, i, l, a, d) {
                var c, p, f;
                let h = []
                  , A = new Set;
                if (l === "drag")
                    return ct(r, n, o, i, d.detail),
                    [];
                for (let {eltId: b, altId: u, props: x, reactions: C} of r) {
                    let m = document.getElementById(b);
                    if (!m) {
                        let v = we.get(b);
                        v && (m = document.getElementById(v))
                    }
                    if (!m) {
                        $(`Can't find element for id: ${b}`);
                        continue
                    }
                    if (u) {
                        let v = document.getElementById(u);
                        if (!v) {
                            let s = document.getElementById(z(u));
                            if (!s) {
                                $(`Can't find template for id: ${u}`);
                                continue
                            }
                            v = ((c = s.content) == null ? void 0 : c.cloneNode(!0)).querySelector("*")
                        }
                        let {f2w_mouseup: g} = m
                          , y = (p = m.f2w_mouseleave_remove) == null ? void 0 : p.call(m);
                        if (y && He(v, y),
                        g && v.addEventListener("mouseup", g),
                        (y || g) && Be(v),
                        Fe(v, !0, o),
                        o)
                            m.insertAdjacentElement("afterend", v),
                            K(m, [{
                                key: "display",
                                from: getComputedStyle(m).display,
                                to: "none"
                            }], n, o, A),
                            K(v, [{
                                key: "opacity",
                                from: 0,
                                to: "revert-layer"
                            }, {
                                key: "display",
                                from: "none",
                                to: "revert-layer"
                            }], n, o, A);
                        else {
                            m.parentElement.replaceChild(v, m);
                            let s = document.getElementById(z(b));
                            s || (s = document.createElement("template"),
                            s.id = z(b),
                            s.innerHTML = m.outerHTML,
                            v.insertAdjacentElement("afterend", s)),
                            we.set(b, v.id)
                        }
                        h.push({
                            eltId: v.id,
                            altId: m.id
                        }),
                        isNaN(+getComputedStyle(v).getPropertyValue("--f2w-order")) || A.add(v.parentElement)
                    } else {
                        let v = (x || []).map(y => {
                            let s = Re(m, y.key, y.from)
                              , E = Re(m, y.key, y.to);
                            return {
                                key: y.key,
                                pseudo: y.pseudo,
                                from: s,
                                to: E
                            }
                        }
                        ).filter(y => y.from !== y.to);
                        K(m, v, n, o, A),
                        C && (l !== "hover" && ((f = m.f2w_mouseleave_remove) == null || f.call(m)),
                        C.forEach(y => De(m, y.type, y.to, o)));
                        let g = {
                            eltId: b,
                            props: v.map(y => {
                                let s = {
                                    key: y.key,
                                    from: y.to,
                                    to: y.from
                                };
                                return y.pseudo && (s.pseudo = y.pseudo),
                                s
                            }
                            )
                        };
                        C && (g.reactions = C.map(y => ({
                            type: y.type,
                            from: y.to,
                            to: y.from
                        }))),
                        h.push(g)
                    }
                }
                for (let b of A) {
                    let u = Array.from(b.children).map( (C, m) => ({
                        it: C,
                        i: m
                    }))
                      , x = !1;
                    u.sort( (C, m) => {
                        let v = +(getComputedStyle(C.it).getPropertyValue("--f2w-order") || "99999")
                          , g = +(getComputedStyle(m.it).getPropertyValue("--f2w-order") || "99999");
                        return v - g
                    }
                    ).forEach( (C, m) => {
                        x ? b.appendChild(C.it) : x = m !== C.i
                    }
                    )
                }
                return h
            }
            function Be(r) {
                let n = r;
                for (; n; )
                    n.classList.remove("pointer-events-none"),
                    n = n.parentElement
            }
            function ct(r, n, o, i, l) {
                if (l.handled)
                    return;
                let a = i.getBoundingClientRect()
                  , d = k(r.filter(u => u.props).map( ({eltId: u, props: x}) => ({
                    eltId: u,
                    props: x
                })), "linear", 0, i, "click", "drag_start(tmp)")
                  , c = i.getBoundingClientRect()
                  , p = c.left - a.left
                  , f = c.top - a.top
                  , h = Math.sqrt(p * p + f * f);
                k(d, "linear", 0, i, "click", "drag_start(tmp undo)");
                let {x: A, y: b} = ne(l.start, l.end);
                if (A > 0 && p > 0 || A < 0 && p < 0 || p === 0 && (b > 0 && f > 0 || b < 0 && f < 0)) {
                    l.handled = !0;
                    let u = r.map(m => {
                        var v;
                        return V(w({}, m), {
                            swapped: !1,
                            props: (v = m.props) == null ? void 0 : v.map(g => V(w({}, g), {
                                curr: g.from
                            }))
                        })
                    }
                    )
                      , x = m => {
                        let {x: v, y: g} = ne(m.start, m.end)
                          , y = (v * p + g * f) / h;
                        return Math.max(0, Math.min(100, 100 * y / h))
                    }
                      , C = m => {
                        m.end.preventDefault(),
                        m.end.stopPropagation();
                        let v = x(m);
                        k(F(u.map(g => {
                            let y = g
                              , {reactions: s} = y
                              , E = se(y, ["reactions"]);
                            if (g.props)
                                return V(w({}, E), {
                                    props: g.props.map(T => {
                                        let je = yt(T, v)
                                          , Ge = T.curr;
                                        return T.curr = je,
                                        V(w({}, T), {
                                            from: Ge,
                                            to: je
                                        })
                                    }
                                    )
                                });
                            if (g.altId) {
                                if (v < 50 && g.swapped)
                                    return g.swapped = !1,
                                    {
                                        altId: g.eltId,
                                        eltId: g.altId
                                    };
                                if (v >= 50 && !g.swapped)
                                    return g.swapped = !0,
                                    E
                            }
                        }
                        )), "linear", 0, i, "click", "dragging")
                    }
                    ;
                    C(l),
                    i.f2w_drag_listener = m => {
                        if (C(m),
                        m.finished) {
                            let v = x(m);
                            k(F(u.map(g => {
                                if (g.props) {
                                    let y = v < 50 ? void 0 : g.reactions;
                                    return {
                                        eltId: g.eltId,
                                        props: g.props.map(s => V(w({}, s), {
                                            from: s.curr,
                                            to: v < 50 ? s.from : s.to
                                        })),
                                        reactions: y
                                    }
                                }
                                if (g.altId) {
                                    if (v < 50 && g.swapped)
                                        return g.swapped = !1,
                                        {
                                            altId: g.eltId,
                                            eltId: g.altId
                                        };
                                    if (v >= 50 && !g.swapped)
                                        return g.swapped = !0,
                                        g
                                }
                            }
                            )), n, o, i, "click", "drag_end")
                        }
                    }
                }
            }
            function Re(r, n, o) {
                return o !== "$current" ? o : getComputedStyle(r).getPropertyValue(n)
            }
            function Fe(r, n=!1, o=0) {
                for (let i of de)
                    for (let l of pt(r, `[data-reaction-${i}]`, n))
                        De(l, i, l.getAttribute(`data-reaction-${i}`), o)
            }
            function pt(r, n, o=!1) {
                let i = [...r.querySelectorAll(n)];
                return o && r.matches(n) && i.unshift(r),
                i
            }
            function De(r, n, o="", i=0) {
                var l;
                if (!o && n !== "hover") {
                    mt(r, n);
                    return
                }
                let a = 0;
                if (o[0] === "T") {
                    let f = o.indexOf("ms");
                    a = parseFloat(o.slice(1, f)) || 0,
                    o = o.slice(f + 3)
                }
                let d = Pe()
                  , c = F(o.split(",").map(f => d[f]))
                  , p = te(c, r, n);
                if (n === "timeout") {
                    ft(r, () => p(), a + i);
                    return
                }
                if (Be(r),
                n === "press") {
                    let f, h = () => {
                        f?.(),
                        f = void 0
                    }
                    ;
                    r.f2w_mouseup = h,
                    Y(r, "mousedown", A => {
                        f?.(),
                        f = p(A)
                    }
                    , n, P(r, "mouseup", h))
                } else if (n === "drag")
                    Y(r, "dragging", f => {
                        p(f)
                    }
                    , n);
                else if (n === "hover") {
                    let f, h = C => {
                        f || (f = G(p(C)))
                    }
                    , A = (l = r.f2w_mouseleave_remove) == null ? void 0 : l.call(r), b = () => {
                        f?.(),
                        f = void 0,
                        A?.()
                    }
                    , u = setTimeout( () => {
                        r.matches(":hover") && h()
                    }
                    , i), x = He(r, b, u);
                    Y(r, "mouseenter", h, n, x)
                } else
                    n === "keydown" && !r.getAttribute("tabindex") && r.setAttribute("tabindex", "-1"),
                    n === "appear" && Et.observe(r),
                    Y(r, n, f => {
                        n !== "keydown" && f.stopPropagation(),
                        a ? setTimeout( () => p(f), a) : p(f)
                    }
                    , n)
            }
            function He(r, n, o=0) {
                let i = P(r, "mouseleave", n)
                  , l = () => (i(),
                clearTimeout(o),
                r.f2w_mouseleave === n && delete r.f2w_mouseleave,
                r.f2w_mouseleave_remove === l && delete r.f2w_mouseleave_remove,
                n);
                return r.f2w_mouseleave = n,
                r.f2w_mouseleave_remove = l
            }
            function Se({clientX: r, clientY: n}, o) {
                let {top: i, left: l, right: a, bottom: d} = o.getBoundingClientRect();
                return r > a + 2 || r < l - 2 || n > d + 2 || n < i - 2
            }
            function $e(r) {
                return `f2w_cleanup_${r}`
            }
            function ft(r, n, o) {
                var i;
                let l = setTimeout(n, o);
                (i = r.f2w_cleanup_timeout) == null || i.call(r),
                r.f2w_cleanup_timeout = () => {
                    delete r.f2w_cleanup_timeout,
                    clearTimeout(l)
                }
            }
            function mt(r, n) {
                var o;
                let i = $e(n);
                (o = r[i]) == null || o.call(r)
            }
            function Y(r, n, o, i, ...l) {
                var a;
                let d = [...l, P(r, n, o)]
                  , c = $e(i);
                (a = r[c]) == null || a.call(r),
                r[c] = () => {
                    delete r[c],
                    d.forEach(p => p())
                }
            }
            function P(r, n, o, i) {
                let l = a => {
                    !r.isConnected || o(a)
                }
                ;
                return r.addEventListener(n, l, i),
                () => {
                    r.removeEventListener(n, l, i)
                }
            }
            var We = "f2w-color-scheme"
              , ze = "f2w-lang";
            if (window.F2W_THEME_SWITCH = r => {
                var n;
                return (n = window.F2W_COLOR_SCHEMES) == null ? void 0 : n.forEach(o => X(o, r))
            }
            ,
            window.F2W_COLOR_SCHEMES) {
                let r = matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"
                  , n = localStorage == null ? void 0 : localStorage.getItem(We);
                _("body", () => {
                    var o, i;
                    let l = document.body.getAttribute("data-preview-theme")
                      , a = (o = l ?? n) != null ? o : r;
                    (i = window.F2W_THEME_SWITCH) == null || i.call(window, a)
                }
                )
            }
            if (window.F2W_LANGUAGES) {
                let r = localStorage == null ? void 0 : localStorage.getItem(ze);
                _("body", () => {
                    var n, o, i;
                    let l = Array.from(document.head.querySelectorAll('link[rel="alternate"]'));
                    l.length === 0 || l.some(d => d.getAttribute("hreflang") === "x-default" && d.getAttribute("href") === window.location.href) || (r = document.documentElement.lang);
                    let a = (o = (n = document.head.querySelector('link[rel="canonical"]')) == null ? void 0 : n.href) == null ? void 0 : o.endsWith("/404/");
                    (i = window.F2W_LANGUAGES) == null || i.forEach(d => {
                        var c;
                        let p = Object.fromEntries(Object.entries(Oe(d)).map( ([h]) => [h.toLowerCase(), h]))
                          , f = [...navigator.languages];
                        r && f.unshift(r);
                        for (let h of f) {
                            h = h.toLowerCase();
                            let A = h.split("-")[0]
                              , b = (c = p[h]) != null ? c : p[A];
                            if (b) {
                                X(d, b),
                                a || ke(d, b);
                                break
                            }
                        }
                    }
                    )
                }
                )
            }
            var Me = {}
              , gt = Object.fromEntries(Object.entries(st()).map( ([r,n]) => [r, Object.entries(n).map( ([o,{minWidth: i}]) => ({
                name: o,
                minWidth: i
            }))]));
            function Ve() {
                var r;
                let n = ((r = window.visualViewport) == null ? void 0 : r.width) || window.innerWidth;
                for (let[o,i] of Object.entries(gt)) {
                    let l = [...i]
                      , a = l.splice(0, 1)[0].name;
                    for (let {name: d, minWidth: c} of l)
                        n >= c && (a = d);
                    a !== Me[o] && (X(o, a),
                    Me[o] = a)
                }
            }
            var L = !1;
            _("body", () => {
                let r, n = !1;
                P(document, "mousedown", o => {
                    r = o,
                    L = !1
                }
                ),
                P(document, "mousemove", o => {
                    var i, l, a;
                    if (r && ne(r, o).dist > 2) {
                        let d = {
                            start: r,
                            end: o
                        };
                        L ? (a = (l = r.target) == null ? void 0 : l.f2w_drag_listener) == null || a.call(l, d) : ((i = r.target) == null || i.dispatchEvent(new CustomEvent("dragging",{
                            detail: d
                        })),
                        L = !0,
                        n = !0)
                    }
                }
                ),
                P(document, "mouseup", o => {
                    var i, l;
                    r && L && ((l = (i = r.target) == null ? void 0 : i.f2w_drag_listener) == null || l.call(i, {
                        start: r,
                        end: o,
                        finished: !0
                    })),
                    r = void 0,
                    L = !1
                }
                ),
                P(document, "mouseup", o => {
                    var i, l;
                    r && L && ((l = (i = r.target) == null ? void 0 : i.f2w_drag_listener) == null || l.call(i, {
                        start: r,
                        end: o,
                        finished: !0
                    })),
                    r = void 0,
                    L = !1
                }
                ),
                P(document, "click", o => {
                    n && (n = !1,
                    o.preventDefault(),
                    o.stopPropagation())
                }
                , {
                    capture: !0
                }),
                Ve(),
                window.addEventListener("resize", Ve)
            }
            ),
            addEventListener("DOMContentLoaded", () => Fe(document)),
            addEventListener("DOMContentLoaded", () => {
                if ("mediumZoom"in window) {
                    let r = mediumZoom("[data-zoomable]");
                    r.on("open", n => {
                        let o = getComputedStyle(n.target).objectFit
                          , i = n.detail.zoom.getZoomedImage();
                        o && i && (i.style.objectFit = o)
                    }
                    ),
                    r.on("closed", n => {
                        let o = n.detail.zoom.getZoomedImage();
                        o.style.objectFit = ""
                    }
                    )
                }
            }
            );
            function Ie(r) {
                return r.endsWith("px") || r.endsWith("%") || r.startsWith("calc")
            }
            function Le(r) {
                return r.startsWith("calc") ? r.slice(4) : r
            }
            function yt({from: r, to: n}, o) {
                if (r === n)
                    return n;
                if (typeof r == "number" && typeof n == "number")
                    return r + (n - r) * (o / 100);
                if (typeof r == "string" && typeof n == "string") {
                    if (r === "none" || n === "none" || r === "auto" || n === "auto")
                        return o < 50 ? r : n;
                    if (r.endsWith("px") && n.endsWith("px")) {
                        let i = parseFloat(r)
                          , l = parseFloat(n);
                        return R(i + (l - i) * (o / 100))
                    }
                    if (r.endsWith("%") && n.endsWith("%")) {
                        let i = parseFloat(r)
                          , l = parseFloat(n);
                        return Z(i + (l - i) * (o / 100))
                    }
                    if (Ie(r) && Ie(n)) {
                        let i = Le(r)
                          , l = Le(n);
                        return `calc(${i} + (${l} - ${i}) * ${o / 100})`
                    }
                    if (r.startsWith("rgb") && n.startsWith("rgb")) {
                        let i = r.match(/\d+/g).map(Number)
                          , l = n.match(/\d+/g).map(Number);
                        return `rgb(${i.map( (a, d) => a + (l[d] - a) * (o / 100)).join(",")})`
                    }
                }
                return o < 50 ? r : n
            }
            function ne(r, n) {
                let o = n.clientX - r.clientX
                  , i = n.clientY - r.clientY;
                return {
                    x: o,
                    y: i,
                    dist: Math.sqrt(Math.pow(o, 2) + Math.pow(i, 2))
                }
            }
            _("[data-bound-characters]", r => {
                let n = () => {
                    let o = r.getAttribute("data-bound-characters")
                      , i = O(B(j()[o]));
                    i !== r.textContent && (r.textContent = i)
                }
                ;
                return n(),
                document.addEventListener("f2w-set-variable", n),
                () => document.removeEventListener("f2w-set-variable", n)
            }
            ),
            _("[data-bound-visible]", r => {
                let n = () => {
                    let o = r.getAttribute("data-bound-visible")
                      , i = O(B(j()[o]));
                    i !== void 0 && r.setAttribute("data-visible", i)
                }
                ;
                return n(),
                document.addEventListener("f2w-set-variable", n),
                () => document.removeEventListener("f2w-set-variable", n)
            }
            );
            var Et = new IntersectionObserver( (r, n) => {
                r.forEach(o => {
                    o.isIntersecting && (n.unobserve(o.target),
                    o.target.dispatchEvent(new CustomEvent("appear")))
                }
                )
            }
            ,{
                threshold: .1
            });
            addEventListener("load", () => {
                let r = window.location.hash.slice(1)
                  , n = new RegExp(r + "(_\\d+)?$");
                for (let o of document.querySelectorAll(`[id^="${r}"]`))
                    if (n.test(o.id) && o.getBoundingClientRect().height > 0)
                        return o.scrollIntoView()
            }
            );
        </script>
        <link href="https://fonts.googleapis.com/css2?family=Nunito Sans:wght@400&amp;family=Odor Mean Chey:wght@400&amp;family=Righteous:wght@400&amp;family=Sen:wght@400;700&amp;family=Shippori Antique B1:wght@400&amp;family=Charis SIL:wght@400&amp;family=Encode Sans SC:wght@400&amp;family=Signika:wght@400&amp;family=Secular One:wght@400&amp;family=Sofia Sans:wght@700&amp;family=Alatsi:wght@400&amp;family=Shippori Antique:wght@400&amp;display=swap" rel="stylesheet">
        <style>
            *,:before,:after {
                box-sizing: border-box
            }

            body {
                -webkit-font-smoothing: antialiased
            }

            textarea:focus-visible {
                outline: none
            }

            button {
                -webkit-font-smoothing: inherit;
                -moz-osx-font-smoothing: inherit;
                -webkit-appearance: none
            }

            * {
                margin: 0;
                padding: 0
            }

            a {
                color: inherit;
                -webkit-text-decoration: inherit;
                text-decoration: inherit
            }

            input {
                font: inherit;
                background-color: inherit;
                border: none;
                outline: none
            }

            button {
                font: inherit;
                background: 0 0;
                background-color: inherit;
                color: inherit;
                border-style: none;
                width: auto;
                line-height: normal;
                overflow: visible
            }

            textarea,select {
                font: inherit;
                background-color: inherit
            }

            img,picture,video,canvas,svg {
                display: block
            }

            [data-reaction-click] {
                cursor: pointer
            }

            [data-visible=false] {
                display: none!important
            }

            .before-hidden:before,.after-hidden:after {
                display: none
            }

            .before-visible:before,.after-visible:after {
                content: ""
            }

            ::placeholder {
                color: inherit;
                opacity: .54
            }

            body * {
                scrollbar-width: none
            }

            body ::-webkit-scrollbar {
                display: none
            }

            [name=honey-pot-field] {
                display: none!important
            }

            .text {
                white-space: pre-wrap;
                overflow-wrap: break-word
            }

            .pointer-events-none {
                pointer-events: none
            }

            #_ {
                background-color: #fcfcfc;
                min-height: 100vh;
                display: grid
            }

            #Desktop_1 {
                background-color: #fcfcfc;
                border-radius: 0;
                width: 1440px;
                min-width: 1440px;
                max-width: 1440px;
                min-height: 3940px;
                max-height: 3940px;
                margin: 0 auto;
                position: relative;
                overflow: hidden
            }

            #nighttime_nature_landscape_galaxy_mountain_water_star_beauty_generative_ai_1 {
                --f2w-order: 0;
                aspect-ratio: 2.6;
                border-radius: 0;
                width: auto;
                height: 689px;
                position: absolute;
                top: 0;
                left: -263px;
                overflow: hidden
            }

            #__0 {
                object-fit: cover;
                width: 100%;
                height: 100%;
                position: absolute;
                inset: 0
            }

            #_5_10 {
                text-align: left;
                color: #fff;
                --f2w-order: 1;
                filter: drop-shadow(0 4px 4px #00000040);
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Nunito Sans;
                font-size: 16px;
                font-weight: 400;
                display: inline;
                position: absolute;
                top: 98px;
                left: 157px
            }

            #__1 {
                color: #fff;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Nunito Sans;
                font-size: 16px;
                font-weight: 400
            }

            #_5_11 {
                text-align: left;
                color: #fff;
                --f2w-order: 2;
                filter: drop-shadow(0 4px 4px #00000040);
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Odor Mean Chey;
                font-size: 24px;
                font-weight: 400;
                display: inline;
                position: absolute;
                top: 59px;
                left: 157px
            }

            #__2 {
                color: #fff;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Odor Mean Chey;
                font-size: 24px;
                font-weight: 400
            }



            #images_removebg_preview_1 {
                --f2w-order: 7;
                aspect-ratio: 1.04;
                border-radius: 0;
                width: auto;
                height: 66px;
                position: absolute;
                top: 55px;
                left: 80px;
                overflow: hidden
            }

            #__7 {
                object-fit: cover;
                width: 100%;
                height: 100%;
                position: absolute;
                inset: 0
            }

            #_8_24 {
                text-align: center;
                color: #7b7777;
                --f2w-order: 8;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Sen;
                font-size: 32px;
                font-weight: 400;
                display: inline;
                position: absolute;
                top: 936px;
                left: 460px
            }

            #__8 {
                color: #7b7777;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Sen;
                font-size: 32px;
                font-weight: 400
            }

            #Rectangle_1 {
                --f2w-order: 9;
                filter: drop-shadow(0 4px 4px #00000040);
                background-color: #fff;
                border: 1px solid #c7c7c7;
                border-radius: 0;
                width: 203px;
                height: 178px;
                position: absolute;
                top: 997px;
                left: 242px
            }

            #Rectangle_2 {
                --f2w-order: 10;
                filter: drop-shadow(0 4px 4px #00000040);
                background-color: #fff;
                border: 1px solid #c7c7c7;
                border-radius: 0;
                width: 204px;
                height: 178px;
                position: absolute;
                top: 997px;
                left: 482px
            }

            #Rectangle_3 {
                --f2w-order: 11;
                filter: drop-shadow(0 4px 4px #00000040);
                background-color: #fff;
                border: 1px solid #c7c7c7;
                border-radius: 0;
                width: 204px;
                height: 178px;
                position: absolute;
                top: 997px;
                left: 715px
            }

            #Rectangle_4 {
                --f2w-order: 12;
                filter: drop-shadow(0 4px 4px #00000040);
                background-color: #fff;
                border: 1px solid #c7c7c7;
                border-radius: 0;
                width: 203px;
                height: 178px;
                position: absolute;
                top: 997px;
                left: 956px
            }

            #Rectangle_17 {
                --f2w-order: 13;
                background-color: #f9f9f9;
                border-radius: 0;
                width: 1458px;
                height: 1447px;
                position: absolute;
                top: 1249px;
                left: 0
            }

            #_47_3 {
                text-align: center;
                color: #fff;
                --f2w-order: 18;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Sen;
                font-size: 75px;
                font-weight: 400;
                display: inline;
                position: absolute;
                top: 275px;
                left: 96px
            }



            #_8ea3d1f507bbcc77e3d3b0d6f0b2421c_removebg_preview_1 {
                --f2w-order: 19;
                aspect-ratio: 1;
                border-radius: 0;
                width: auto;
                height: 179px;
                position: absolute;
                top: 987px;
                left: 254px;
                overflow: hidden
            }

            #__14 {
                object-fit: cover;
                width: 100%;
                height: 100%;
                position: absolute;
                inset: 0
            }

            #science_rgb_color_icon_microscope_stack_of_books_learning_through_observation_and_experimentation_science_classes_in_school_isolated_illustration_simple_filled_line_drawing_vector_removebg_preview_1 {
                --f2w-order: 20;
                aspect-ratio: 1;
                border-radius: 0;
                width: auto;
                height: 202px;
                position: absolute;
                top: 975px;
                left: 719px;
                overflow: hidden
            }

            #__15 {
                object-fit: cover;
                width: 100%;
                height: 100%;
                position: absolute;
                inset: 0
            }

            #geometry_rgb_color_icon_pencil_and_ruler_geometrical_problem_solving_draw_line_measurement_sides_of_triangle_geometric_shape_isolated_illustration_simple_filled_line_drawing_vector_removebg_preview_1 {
                --f2w-order: 21;
                aspect-ratio: 1;
                border-radius: 0;
                width: auto;
                height: 184px;
                position: absolute;
                top: 987px;
                left: 492px;
                overflow: hidden
            }

            #__16 {
                object-fit: cover;
                width: 100%;
                height: 100%;
                position: absolute;
                inset: 0
            }

            #Line_1 {
                --f2w-order: 22;
                transform-origin: 0 0;
                border: 0 solid red;
                border-top-width: 5px;
                width: 123px;
                height: 5px;
                position: absolute;
                top: 1297px;
                left: 83px;
                transform: rotate(90deg)
            }

            #Group_11 {
                --f2w-order: 23;
                width: 186px;
                height: 117px;
                position: absolute;
                top: 1276px;
                left: 91px
            }

            #_13_4 {
                text-align: center;
                color: #000;
                --f2w-order: 0;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Shippori Antique B1;
                font-size: 48px;
                font-weight: 400;
                display: inline;
                position: absolute;
                top: 0;
                left: 0
            }

            #__17 {
                color: #000;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Shippori Antique B1;
                font-size: 48px;
                font-weight: 400
            }

            #_13_5 {
                text-align: center;
                -webkit-text-stroke: 1px #000;
                color: #000;
                --f2w-order: 1;
                filter: drop-shadow(0 4px 4px #00000040);
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Sen;
                font-size: 48px;
                font-weight: 700;
                display: inline;
                position: absolute;
                top: 59px;
                left: 0
            }

            #__18 {
                color: #000;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Sen;
                font-size: 48px;
                font-weight: 700
            }

            #Group_6 {
                --f2w-order: 24;
                width: 1329px;
                height: 1188px;
                position: absolute;
                top: 1443px;
                left: 55px
            }

            #Group_5 {
                --f2w-order: 0;
                width: 266px;
                height: 465px;
                position: absolute;
                top: 0;
                left: 0
            }

            #Rectangle_10 {
                --f2w-order: 0;
                background-color: #fff;
                border: 0 solid #000;
                border-width: 0 1px;
                border-radius: 0;
                width: 267px;
                height: 465px;
                position: absolute;
                top: 0;
                left: -.5px
            }

            #Nightbooks_1 {
                --f2w-order: 1;
                aspect-ratio: .66;
                filter: drop-shadow(0 10px 10px #00000040);
                border: 1px solid #000;
                border-radius: 0;
                width: auto;
                height: 334px;
                position: absolute;
                top: 19px;
                left: 22px;
                overflow: hidden
            }

            #__19 {
                object-fit: cover;
                width: 100%;
                height: 100%;
                position: absolute;
                inset: 0
            }

            #_20_112 {
                text-align: left;
                color: #000;
                --f2w-order: 1;
                -webkit-background-clip: text;
                background-clip: text;
                width: 197px;
                font-family: Charis SIL;
                font-size: 16px;
                font-weight: 400;
                line-height: 18px;
                display: inline;
                position: absolute;
                top: 376px;
                left: 23px
            }

            #__20 {
                color: #000;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Charis SIL;
                font-size: 16px;
                font-weight: 400;
                line-height: 18px
            }

            #Group_10 {
                --f2w-order: 2;
                width: 266px;
                height: 465px;
                position: absolute;
                top: 0;
                left: 266px
            }

            #Group_4 {
                --f2w-order: 0;
                width: 266px;
                height: 465px;
                position: absolute;
                top: 0;
                left: 0
            }

            #Rectangle_11 {
                --f2w-order: 0;
                background-color: #fff;
                border: 0 solid #000;
                border-width: 0 1px;
                border-radius: 0;
                width: 267px;
                height: 465px;
                position: absolute;
                top: 0;
                left: -.5px
            }

            #download_1 {
                --f2w-order: 1;
                aspect-ratio: .67;
                filter: drop-shadow(0 10px 10px #84d99f);
                border-radius: 0;
                width: auto;
                height: 334px;
                position: absolute;
                top: 19px;
                left: 21px;
                overflow: hidden
            }

            #__22 {
                object-fit: cover;
                width: 100%;
                height: 100%;
                position: absolute;
                inset: 0
            }

            #_20_114 {
                text-align: left;
                color: #000;
                --f2w-order: 1;
                -webkit-background-clip: text;
                background-clip: text;
                width: 197px;
                font-family: Charis SIL;
                font-size: 16px;
                font-weight: 400;
                line-height: 18px;
                display: inline;
                position: absolute;
                top: 376px;
                left: 21px
            }

            #__23 {
                color: #000;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Charis SIL;
                font-size: 16px;
                font-weight: 400;
                line-height: 18px
            }

            #Group_8 {
                --f2w-order: 3;
                width: 266px;
                height: 465px;
                position: absolute;
                top: 0;
                left: 532px
            }

            #Group_3 {
                --f2w-order: 0;
                width: 266px;
                height: 465px;
                position: absolute;
                top: 0;
                left: 0
            }

            #Rectangle_15 {
                --f2w-order: 0;
                background-color: #fff;
                border: 0 solid #000;
                border-width: 0 1px;
                border-radius: 0;
                width: 267px;
                height: 465px;
                position: absolute;
                top: 0;
                left: -.5px
            }

            #download_1_1 {
                --f2w-order: 1;
                aspect-ratio: .65;
                filter: drop-shadow(0 10px 10px #f4b373);
                border: 1px solid #000;
                border-radius: 0;
                width: auto;
                height: 334px;
                position: absolute;
                top: 19px;
                left: 24px;
                overflow: hidden
            }

            #__24 {
                object-fit: cover;
                width: 100%;
                height: 100%;
                position: absolute;
                inset: 0
            }

            #_1_Edisi_2020 {
                text-align: left;
                color: #000;
                --f2w-order: 1;
                -webkit-background-clip: text;
                background-clip: text;
                width: 197px;
                font-family: Charis SIL;
                font-size: 16px;
                font-weight: 400;
                line-height: 18px;
                display: inline;
                position: absolute;
                top: 376px;
                left: 24px
            }

            #__25 {
                color: #000;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Charis SIL;
                font-size: 16px;
                font-weight: 400;
                line-height: 18px
            }

            #Group_7 {
                --f2w-order: 4;
                width: 266px;
                height: 465px;
                position: absolute;
                top: 0;
                left: 797px
            }

            #Group_2 {
                --f2w-order: 0;
                width: 266px;
                height: 465px;
                position: absolute;
                top: 0;
                left: 0
            }

            #Rectangle_14 {
                --f2w-order: 0;
                background-color: #fff;
                border: 0 solid #000;
                border-width: 0 1px;
                border-radius: 0;
                width: 267px;
                height: 465px;
                position: absolute;
                top: 0;
                left: -.5px
            }

            #download_3_1 {
                --f2w-order: 1;
                aspect-ratio: .68;
                filter: drop-shadow(0 10px 10px #9bc7d2);
                border: 1px solid #000;
                border-radius: 0;
                width: auto;
                height: 334px;
                position: absolute;
                top: 19px;
                left: 19px;
                overflow: hidden
            }

            #__26 {
                object-fit: cover;
                width: 100%;
                height: 100%;
                position: absolute;
                inset: 0
            }

            #_20_118 {
                text-align: left;
                color: #000;
                --f2w-order: 1;
                -webkit-background-clip: text;
                background-clip: text;
                width: 197px;
                font-family: Charis SIL;
                font-size: 16px;
                font-weight: 400;
                line-height: 18px;
                display: inline;
                position: absolute;
                top: 376px;
                left: 19px
            }

            #__27 {
                color: #000;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Charis SIL;
                font-size: 16px;
                font-weight: 400;
                line-height: 18px
            }

            #Group_2_0 {
                --f2w-order: 5;
                width: 266px;
                height: 465px;
                position: absolute;
                top: 723px;
                left: 0
            }

            #Rectangle_14_0 {
                --f2w-order: 0;
                background-color: #fff;
                border: 0 solid #000;
                border-width: 0 1px;
                border-radius: 0;
                width: 267px;
                height: 465px;
                position: absolute;
                top: 0;
                left: -.5px
            }

            #_20_142 {
                text-align: left;
                color: #000;
                --f2w-order: 1;
                -webkit-background-clip: text;
                background-clip: text;
                width: 197px;
                font-family: Charis SIL;
                font-size: 16px;
                font-weight: 400;
                line-height: 18px;
                display: inline;
                position: absolute;
                top: 376px;
                left: 24px
            }

            #__28 {
                color: #000;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Charis SIL;
                font-size: 16px;
                font-weight: 400;
                line-height: 18px
            }

            #download_3_1_0 {
                --f2w-order: 2;
                aspect-ratio: .68;
                filter: drop-shadow(0 10px 10px #5a2838);
                border-radius: 0;
                width: auto;
                height: 334px;
                position: absolute;
                top: 19px;
                left: 19px;
                overflow: hidden
            }

            #__29 {
                object-fit: cover;
                width: 100%;
                height: 100%;
                position: absolute;
                inset: 0
            }

            #Group_11_0 {
                --f2w-order: 6;
                width: 266px;
                height: 465px;
                position: absolute;
                top: 723px;
                left: 266px
            }

            #Rectangle_14_1 {
                --f2w-order: 0;
                background-color: #fff;
                border: 0 solid #000;
                border-width: 0 1px;
                border-radius: 0;
                width: 267px;
                height: 465px;
                position: absolute;
                top: 0;
                left: -.5px
            }

            #_21_158 {
                text-align: left;
                color: #000;
                --f2w-order: 1;
                -webkit-background-clip: text;
                background-clip: text;
                width: 197px;
                font-family: Charis SIL;
                font-size: 16px;
                font-weight: 400;
                line-height: 18px;
                display: inline;
                position: absolute;
                top: 376px;
                left: 19px
            }

            #__30 {
                color: #000;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Charis SIL;
                font-size: 16px;
                font-weight: 400;
                line-height: 18px
            }

            #download_3_1_1 {
                --f2w-order: 2;
                aspect-ratio: .68;
                filter: drop-shadow(0 10px 10px #5babcb);
                border-radius: 0;
                width: auto;
                height: 334px;
                position: absolute;
                top: 19px;
                left: 19px;
                overflow: hidden
            }

            #__31 {
                object-fit: cover;
                width: 100%;
                height: 100%;
                position: absolute;
                inset: 0
            }

            #Group_12 {
                --f2w-order: 7;
                width: 266px;
                height: 465px;
                position: absolute;
                top: 723px;
                left: 532px
            }

            #Rectangle_14_2 {
                --f2w-order: 0;
                background-color: #fff;
                border: 0 solid #000;
                border-width: 0 1px;
                border-radius: 0;
                width: 267px;
                height: 465px;
                position: absolute;
                top: 0;
                left: -.5px
            }

            #_21_165 {
                text-align: left;
                color: #000;
                --f2w-order: 1;
                -webkit-background-clip: text;
                background-clip: text;
                width: 197px;
                font-family: Charis SIL;
                font-size: 16px;
                font-weight: 400;
                line-height: 18px;
                display: inline;
                position: absolute;
                top: 376px;
                left: 19px
            }

            #__32 {
                color: #000;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Charis SIL;
                font-size: 16px;
                font-weight: 400;
                line-height: 18px
            }

            #download_3_1_2 {
                --f2w-order: 2;
                aspect-ratio: .68;
                filter: drop-shadow(0 10px 10px #afa9b0);
                border-radius: 0;
                width: auto;
                height: 334px;
                position: absolute;
                top: 19px;
                left: 19px;
                overflow: hidden
            }

            #__33 {
                object-fit: cover;
                width: 100%;
                height: 100%;
                position: absolute;
                inset: 0
            }

            #Group_13 {
                --f2w-order: 8;
                width: 266px;
                height: 465px;
                position: absolute;
                top: 723px;
                left: 798px
            }

            #Rectangle_14_3 {
                --f2w-order: 0;
                background-color: #fff;
                border: 0 solid #000;
                border-width: 0 1px;
                border-radius: 0;
                width: 267px;
                height: 465px;
                position: absolute;
                top: 0;
                left: -.5px
            }

            #_21_170 {
                text-align: left;
                color: #000;
                --f2w-order: 1;
                -webkit-background-clip: text;
                background-clip: text;
                width: 197px;
                font-family: Charis SIL;
                font-size: 16px;
                font-weight: 400;
                line-height: 18px;
                display: inline;
                position: absolute;
                top: 376px;
                left: 19px
            }

            #__34 {
                color: #000;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Charis SIL;
                font-size: 16px;
                font-weight: 400;
                line-height: 18px
            }

            #download_3_1_3 {
                --f2w-order: 2;
                aspect-ratio: .68;
                filter: drop-shadow(0 10px 10px #042b33);
                border-radius: 0;
                width: auto;
                height: 334px;
                position: absolute;
                top: 19px;
                left: 19px;
                overflow: hidden
            }

            #__35 {
                object-fit: cover;
                width: 100%;
                height: 100%;
                position: absolute;
                inset: 0
            }

            #Group_14 {
                --f2w-order: 9;
                width: 266px;
                height: 465px;
                position: absolute;
                top: 723px;
                left: 1063px
            }

            #Rectangle_14_4 {
                --f2w-order: 0;
                background-color: #fff;
                border: 0 solid #000;
                border-width: 0 1px;
                border-radius: 0;
                width: 267px;
                height: 465px;
                position: absolute;
                top: 0;
                left: -.5px
            }

            #_21_175 {
                text-align: left;
                color: #000;
                --f2w-order: 1;
                -webkit-background-clip: text;
                background-clip: text;
                width: 197px;
                font-family: Charis SIL;
                font-size: 16px;
                font-weight: 400;
                line-height: 18px;
                display: inline;
                position: absolute;
                top: 376px;
                left: 21px
            }

            #__36 {
                color: #000;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Charis SIL;
                font-size: 16px;
                font-weight: 400;
                line-height: 18px
            }

            #download_3_1_4 {
                --f2w-order: 2;
                aspect-ratio: .68;
                filter: drop-shadow(0 10px 10px #102f36);
                border-radius: 0;
                width: auto;
                height: 334px;
                position: absolute;
                top: 19px;
                left: 19px;
                overflow: hidden
            }

            #__37 {
                object-fit: cover;
                width: 100%;
                height: 100%;
                position: absolute;
                inset: 0
            }

            #Group_9 {
                --f2w-order: 10;
                width: 266px;
                height: 465px;
                position: absolute;
                top: 0;
                left: 1063px
            }

            #Group_1 {
                --f2w-order: 0;
                width: 266px;
                height: 465px;
                position: absolute;
                top: 0;
                left: 0
            }

            #Rectangle_16 {
                --f2w-order: 0;
                background-color: #fff;
                border: 0 solid #000;
                border-width: 0 1px;
                border-radius: 0;
                width: 267px;
                height: 465px;
                position: absolute;
                top: 0;
                left: -.5px
            }

            #download_4_1 {
                --f2w-order: 1;
                aspect-ratio: .65;
                filter: drop-shadow(0 10px 10px #6b2679);
                border-radius: 0;
                width: auto;
                height: 334px;
                position: absolute;
                top: 19px;
                left: 24px;
                overflow: hidden
            }

            #__38 {
                object-fit: cover;
                width: 100%;
                height: 100%;
                position: absolute;
                inset: 0
            }

            #_20_120 {
                text-align: left;
                color: #000;
                --f2w-order: 1;
                -webkit-background-clip: text;
                background-clip: text;
                width: 197px;
                font-family: Charis SIL;
                font-size: 16px;
                font-weight: 400;
                line-height: 18px;
                display: inline;
                position: absolute;
                top: 376px;
                left: 24px
            }

            #__39 {
                color: #000;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Charis SIL;
                font-size: 16px;
                font-weight: 400;
                line-height: 18px
            }

            #_20_127 {
                text-align: center;
                color: #000;
                --f2w-order: 25;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Encode Sans SC;
                font-size: 20px;
                font-weight: 400;
                display: inline;
                position: absolute;
                top: 1399px;
                left: 96px
            }

            #__40 {
                color: #000;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Encode Sans SC;
                font-size: 20px;
                font-weight: 400
            }

            #Group_14_0 {
                --f2w-order: 26;
                width: 734px;
                height: 892px;
                position: absolute;
                top: 1999px;
                left: 69px
            }

            #Group_13_0 {
                --f2w-order: 0;
                width: 320px;
                height: 144px;
                position: absolute;
                top: 0;
                left: 8px
            }

            #Line_2 {
                --f2w-order: 0;
                transform-origin: 0 0;
                border: 0 solid red;
                border-top-width: 5px;
                width: 123px;
                height: 5px;
                position: absolute;
                top: 21px;
                left: 5px;
                transform: rotate(90deg)
            }

            #Group_12_0 {
                --f2w-order: 1;
                width: 306px;
                height: 116px;
                position: absolute;
                top: 0;
                left: 14px
            }

            #_20_129 {
                text-align: center;
                color: #000;
                --f2w-order: 0;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Shippori Antique B1;
                font-size: 48px;
                font-weight: 400;
                display: inline;
                position: absolute;
                top: 0;
                left: 0
            }

            #__41 {
                color: #000;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Shippori Antique B1;
                font-size: 48px;
                font-weight: 400
            }

            #_20_130 {
                text-align: center;
                -webkit-text-stroke: 1px #000;
                color: #000;
                --f2w-order: 1;
                filter: drop-shadow(0 4px 4px #00000040);
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Sen;
                font-size: 48px;
                font-weight: 700;
                display: inline;
                position: absolute;
                top: 58px;
                left: 0
            }

            #__42 {
                color: #000;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Sen;
                font-size: 48px;
                font-weight: 700
            }

            #_20_135 {
                text-align: center;
                color: #000;
                --f2w-order: 1;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Encode Sans SC;
                font-size: 20px;
                font-weight: 400;
                display: inline;
                position: absolute;
                top: 119px;
                left: 27px
            }

            #__43 {
                color: #000;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Encode Sans SC;
                font-size: 20px;
                font-weight: 400
            }

            #Group_15 {
                --f2w-order: 2;
                width: 734px;
                height: 144px;
                position: absolute;
                top: 748px;
                left: 0
            }

            #Line_3 {
                --f2w-order: 0;
                transform-origin: 0 0;
                border: 0 solid red;
                border-top-width: 5px;
                width: 123px;
                height: 5px;
                position: absolute;
                top: 21px;
                left: 5px;
                transform: rotate(90deg)
            }

            #_21_184 {
                text-align: center;
                color: #000;
                --f2w-order: 1;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Shippori Antique B1;
                font-size: 48px;
                font-weight: 400;
                display: inline;
                position: absolute;
                top: 0;
                left: 17px
            }

            #__44 {
                color: #000;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Shippori Antique B1;
                font-size: 48px;
                font-weight: 400
            }

            #_21_182 {
                text-align: center;
                -webkit-text-stroke: 1px #000;
                color: #000;
                --f2w-order: 2;
                filter: drop-shadow(0 4px 4px #00000040);
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Sen;
                font-size: 48px;
                font-weight: 700;
                display: inline;
                position: absolute;
                top: 60px;
                left: 17px
            }

            #__45 {
                color: #000;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Sen;
                font-size: 48px;
                font-weight: 700
            }

            #_21_186 {
                text-align: center;
                color: #000;
                --f2w-order: 3;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Encode Sans SC;
                font-size: 20px;
                font-weight: 400;
                display: inline;
                position: absolute;
                top: 118px;
                left: 21px
            }

            #__46 {
                color: #000;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Encode Sans SC;
                font-size: 20px;
                font-weight: 400
            }

            #Rectangle_18 {
                --f2w-order: 27;
                background-color: #fff;
                border: 1px solid #00000080;
                border-radius: 10px;
                width: 394px;
                height: 277px;
                position: absolute;
                top: 2931px;
                left: 86px
            }

            #_29_7 {
                text-align: center;
                color: #000;
                --f2w-order: 28;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Signika;
                font-size: 24px;
                font-weight: 400;
                display: inline;
                position: absolute;
                top: 3077px;
                left: 216px
            }

            #__47 {
                color: #000;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Signika;
                font-size: 24px;
                font-weight: 400
            }

            #_29_8 {
                text-align: center;
                color: #989494;
                --f2w-order: 29;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Signika;
                font-size: 16px;
                font-weight: 400;
                display: inline;
                position: absolute;
                top: 3109px;
                left: 256px
            }

            #__48 {
                color: #989494;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Signika;
                font-size: 16px;
                font-weight: 400
            }

            #Rectangle_19 {
                --f2w-order: 30;
                background-color: #fff;
                border: 1px solid #00000080;
                border-radius: 10px;
                width: 394px;
                height: 277px;
                position: absolute;
                top: 2931px;
                left: 526px
            }

            #Rectangle_20 {
                --f2w-order: 31;
                background-color: #fff;
                border: 1px solid #00000080;
                border-radius: 10px;
                width: 394px;
                height: 277px;
                position: absolute;
                top: 2931px;
                left: 966px
            }

            #Ellipse_1 {
                --f2w-order: 32;
                background-color: #fff;
                border: 1px solid #000;
                border-radius: 50%;
                width: 100px;
                height: 100px;
                position: absolute;
                top: 2970px;
                left: 226px
            }

            #Ellipse_2 {
                --f2w-order: 33;
                background-color: #fff;
                border: 1px solid #000;
                border-radius: 50%;
                width: 100px;
                height: 100px;
                position: absolute;
                top: 2970px;
                left: 673px
            }

            #Ellipse_3 {
                --f2w-order: 34;
                background-color: #fff;
                border: 1px solid #000;
                border-radius: 50%;
                width: 100px;
                height: 100px;
                position: absolute;
                top: 2970px;
                left: 1113px
            }

            #_29_10 {
                text-align: center;
                color: #000;
                --f2w-order: 35;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Secular One;
                font-size: 24px;
                font-weight: 400;
                display: inline;
                position: absolute;
                top: 3152px;
                left: 234px
            }

            #__49 {
                color: #000;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Secular One;
                font-size: 24px;
                font-weight: 400
            }

            #_29_11 {
                text-align: center;
                color: #000;
                --f2w-order: 36;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Signika;
                font-size: 24px;
                font-weight: 400;
                display: inline;
                position: absolute;
                top: 3077px;
                left: 216px
            }

            #__50 {
                color: #000;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Signika;
                font-size: 24px;
                font-weight: 400
            }

            #_29_12 {
                text-align: center;
                color: #989494;
                --f2w-order: 37;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Signika;
                font-size: 16px;
                font-weight: 400;
                display: inline;
                position: absolute;
                top: 3109px;
                left: 256px
            }

            #__51 {
                color: #989494;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Signika;
                font-size: 16px;
                font-weight: 400
            }

            #_29_13 {
                text-align: center;
                color: #000;
                --f2w-order: 38;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Secular One;
                font-size: 24px;
                font-weight: 400;
                display: inline;
                position: absolute;
                top: 3152px;
                left: 234px
            }

            #__52 {
                color: #000;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Secular One;
                font-size: 24px;
                font-weight: 400
            }

            #_29_15 {
                text-align: center;
                color: #000;
                --f2w-order: 39;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Signika;
                font-size: 24px;
                font-weight: 400;
                display: inline;
                position: absolute;
                top: 3077px;
                left: 660px
            }

            #__53 {
                color: #000;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Signika;
                font-size: 24px;
                font-weight: 400
            }

            #_29_16 {
                text-align: center;
                color: #989494;
                --f2w-order: 40;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Signika;
                font-size: 16px;
                font-weight: 400;
                display: inline;
                position: absolute;
                top: 3109px;
                left: 700px
            }

            #__54 {
                color: #989494;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Signika;
                font-size: 16px;
                font-weight: 400
            }

            #_29_17 {
                text-align: center;
                color: #000;
                --f2w-order: 41;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Secular One;
                font-size: 24px;
                font-weight: 400;
                display: inline;
                position: absolute;
                top: 3152px;
                left: 678px
            }

            #__55 {
                color: #000;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Secular One;
                font-size: 24px;
                font-weight: 400
            }

            #_29_19 {
                text-align: center;
                color: #000;
                --f2w-order: 42;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Signika;
                font-size: 24px;
                font-weight: 400;
                display: inline;
                position: absolute;
                top: 3077px;
                left: 1100px
            }

            #__56 {
                color: #000;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Signika;
                font-size: 24px;
                font-weight: 400
            }

            #_29_20 {
                text-align: center;
                color: #989494;
                --f2w-order: 43;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Signika;
                font-size: 16px;
                font-weight: 400;
                display: inline;
                position: absolute;
                top: 3109px;
                left: 1140px
            }

            #__57 {
                color: #989494;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Signika;
                font-size: 16px;
                font-weight: 400
            }

            #_29_21 {
                text-align: center;
                color: #000;
                --f2w-order: 44;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Secular One;
                font-size: 24px;
                font-weight: 400;
                display: inline;
                position: absolute;
                top: 3152px;
                left: 1118px
            }

            #__58 {
                color: #000;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Secular One;
                font-size: 24px;
                font-weight: 400
            }

            #Rectangle_21 {
                --f2w-order: 45;
                background-color: #222f36;
                border-radius: 0;
                width: 1440px;
                height: 535px;
                position: absolute;
                top: 3411px;
                left: 0
            }

            #_79f5e9b0_fc46_481d_8991_348acb29f8fb_removalai_preview_1 {
                --f2w-order: 46;
                aspect-ratio: 1.04;
                border-radius: 0;
                width: auto;
                height: 103px;
                position: absolute;
                top: 3479px;
                left: 87px;
                overflow: hidden
            }

            #__59 {
                object-fit: cover;
                width: 100%;
                height: 100%;
                position: absolute;
                inset: 0
            }

            #_29_26 {
                text-align: center;
                color: #fff;
                --f2w-order: 47;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Sofia Sans;
                font-size: 24px;
                font-weight: 700;
                display: inline;
                position: absolute;
                top: 3592px;
                left: 86px
            }

            #__60 {
                color: #fff;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Sofia Sans;
                font-size: 24px;
                font-weight: 700
            }

            #_29_27 {
                text-align: center;
                color: #fff;
                --f2w-order: 48;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Sofia Sans;
                font-size: 24px;
                font-weight: 700;
                display: inline;
                position: absolute;
                top: 3694px;
                left: 87px
            }

            #__61 {
                color: #fff;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Sofia Sans;
                font-size: 24px;
                font-weight: 700
            }

            #_29_29 {
                text-align: center;
                color: #fff;
                --f2w-order: 49;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Sofia Sans;
                font-size: 24px;
                font-weight: 700;
                display: inline;
                position: absolute;
                top: 3730px;
                left: 87px
            }

            #__62 {
                color: #fff;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Sofia Sans;
                font-size: 24px;
                font-weight: 700
            }

            #_29_31 {
                text-align: center;
                color: #fff;
                --f2w-order: 50;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Sofia Sans;
                font-size: 24px;
                font-weight: 700;
                display: inline;
                position: absolute;
                top: 3766px;
                left: 86px
            }

            #__63 {
                color: #fff;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Sofia Sans;
                font-size: 24px;
                font-weight: 700
            }

            #_29_51 {
                text-align: center;
                color: #fff;
                --f2w-order: 51;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Alatsi;
                font-size: 24px;
                font-weight: 400;
                display: inline;
                position: absolute;
                top: 3879px;
                left: 80px
            }

            #__64 {
                color: #fff;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Alatsi;
                font-size: 24px;
                font-weight: 400
            }

            #_29_33 {
                text-align: center;
                color: #fff;
                --f2w-order: 52;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Sofia Sans;
                font-size: 40px;
                font-weight: 700;
                display: inline;
                position: absolute;
                top: 3507px;
                left: 502px
            }

            #__65 {
                color: #fff;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Sofia Sans;
                font-size: 40px;
                font-weight: 700
            }

            #_29_35 {
                text-align: center;
                color: #fff;
                --f2w-order: 53;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Sofia Sans;
                font-size: 40px;
                font-weight: 700;
                display: inline;
                position: absolute;
                top: 3507px;
                left: 1030px
            }

            #__66 {
                color: #fff;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Sofia Sans;
                font-size: 40px;
                font-weight: 700
            }

            #_29_40 {
                text-align: center;
                color: #a5a5a5;
                --f2w-order: 54;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Sofia Sans;
                font-size: 32px;
                font-weight: 700;
                display: inline;
                position: absolute;
                top: 3569px;
                left: 1129px
            }

            #__67 {
                color: #a5a5a5;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Sofia Sans;
                font-size: 32px;
                font-weight: 700
            }

            #_29_42 {
                text-align: center;
                color: #a5a5a5;
                --f2w-order: 55;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Sofia Sans;
                font-size: 32px;
                font-weight: 700;
                display: inline;
                position: absolute;
                top: 3697px;
                left: 1129px
            }

            #__68 {
                color: #a5a5a5;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Sofia Sans;
                font-size: 32px;
                font-weight: 700
            }

            #_29_34 {
                text-align: left;
                color: #fff;
                --f2w-order: 56;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Sofia Sans;
                font-size: 24px;
                font-weight: 700;
                display: inline;
                position: absolute;
                top: 3578px;
                left: 502px
            }

            #__69 {
                color: #fff;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Sofia Sans;
                font-size: 24px;
                font-weight: 700
            }

            #_29_46 {
                text-align: left;
                color: #fff;
                --f2w-order: 57;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Sofia Sans;
                font-size: 16px;
                font-weight: 700;
                display: inline;
                position: absolute;
                top: 3607px;
                left: 1129px
            }

            #__70 {
                color: #fff;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Sofia Sans;
                font-size: 16px;
                font-weight: 700
            }

            #_29_48 {
                text-align: left;
                color: #fff;
                --f2w-order: 58;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Sofia Sans;
                font-size: 16px;
                font-weight: 700;
                display: inline;
                position: absolute;
                top: 3735px;
                left: 1129px
            }

            #__71 {
                color: #fff;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Sofia Sans;
                font-size: 16px;
                font-weight: 700
            }

            #fa0059f1_f667_49c0_bf3d_fcb8d2496f04_removalai_preview_1 {
                --f2w-order: 59;
                aspect-ratio: 1;
                border-radius: 0;
                width: auto;
                height: 107px;
                position: absolute;
                top: 3555px;
                left: 1011px;
                overflow: hidden
            }

            #__72 {
                object-fit: cover;
                width: 100%;
                height: 100%;
                position: absolute;
                inset: 0
            }

            #fa0059f1_f667_49c0_bf3d_fcb8d2496f04_removalai_preview_2 {
                --f2w-order: 60;
                aspect-ratio: 1;
                border-radius: 0;
                width: auto;
                height: 107px;
                position: absolute;
                top: 3662px;
                left: 1011px;
                overflow: hidden
            }

            #__73 {
                object-fit: cover;
                width: 100%;
                height: 100%;
                position: absolute;
                inset: 0
            }

            #Frame_1 {
                --f2w-order: 61;
                border-radius: 0;
                width: 100px;
                height: 100px;
                position: absolute;
                top: 3734px;
                left: 52px;
                overflow: hidden
            }

            #_icon_ellipses_ {
                --f2w-order: 62;
                aspect-ratio: 4.01;
                width: 4.9%;
                height: auto;
                position: absolute;
                inset: 27.2% 24.1% 72.4% 71%
            }

            #Vector {
                --f2w-order: 0;
                width: 101.6%;
                height: 107.4%;
                position: absolute;
                inset: -3.4% -.6% -4% -1%
            }

            #_48_4 {
                text-align: left;
                color: #fff;
                --f2w-order: 63;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Shippori Antique;
                font-size: 20px;
                font-weight: 400;
                display: inline;
                position: absolute;
                top: 371px;
                left: 96px
            }


            #Rectangle_22 {
                --f2w-order: 64;
                position: absolute;
                top: 639px;
                left: 335px
            }

            #Line_4 {
                --f2w-order: 65;
                transform-origin: 0 0;
                border: 0 solid #fff;
                border-top-width: 1px;
                width: 1440px;
                height: 1px;
                position: absolute;
                top: 3841px;
                left: 0;
                transform: rotate(.1deg)
            }

            #__13 {
                color: #fff;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Sen;
                font-size: 75px;
                font-weight: 400
            }
            #__74 {
                color: #fff;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Shippori Antique;
                font-size: 20px;
                font-weight: 400
            }
            #_5_13 {
                text-align: left;
                color: #fff;
                --f2w-order: 3;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Righteous;
                font-size: 20px;
                font-weight: 400;
                display: inline;
                position: absolute;
                top: 77px;
                left: 852px
            }

            #__3 {
                color: #fff;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Righteous;
                font-size: 20px;
                font-weight: 400
            }

            #_5_14 {
                text-align: left;
                color: #fff;
                --f2w-order: 4;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Righteous;
                font-size: 20px;
                font-weight: 400;
                display: inline;
                position: absolute;
                top: 77px;
                left: 972px
            }

            #__4 {
                color: #fff;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Righteous;
                font-size: 20px;
                font-weight: 400
            }

            #_5_16 {
                text-align: left;
                color: #fff;
                --f2w-order: 5;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Righteous;
                font-size: 20px;
                font-weight: 400;
                display: inline;
                position: absolute;
                top: 77px;
                left: 1222px
            }

            #__5 {
                color: #fff;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Righteous;
                font-size: 20px;
                font-weight: 400
            }

            #_5_18 {
                text-align: left;
                color: #fff;
                --f2w-order: 6;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Righteous;
                font-size: 20px;
                font-weight: 400;
                display: inline;
                position: absolute;
                top: 77px;
                left: 1101px
            }

            #__6 {
                color: #fff;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Righteous;
                font-size: 20px;
                font-weight: 400
            }
                #_8_35 {
                    text-align: center;
                    color: #000;
                    --f2w-order: 14;
                    -webkit-background-clip: text;
                    background-clip: text;
                    width: 212px;
                    height: 65px;
                    font-family: Sen;
                    font-size: 16px;
                    font-weight: 400;
                    display: inline;
                    position: absolute;
                    top: 1133px;
                    left: 952px
                }

                #__9 {
                    color: #000;
                    -webkit-background-clip: text;
                    background-clip: text;
                    font-family: Sen;
                    font-size: 16px;
                    font-weight: 400
                }

                #_8_36 {
                    text-align: center;
                    color: #000;
                    --f2w-order: 15;
                    -webkit-background-clip: text;
                    background-clip: text;
                    width: 253px;
                    height: 45px;
                    font-family: Sen;
                    font-size: 16px;
                    font-weight: 400;
                    display: inline;
                    position: absolute;
                    top: 1134px;
                    left: 690px
                }

                #__10 {
                    color: #000;
                    -webkit-background-clip: text;
                    background-clip: text;
                    font-family: Sen;
                    font-size: 16px;
                    font-weight: 400
                }

                #_8_38 {
                    text-align: center;
                    color: #000;
                    --f2w-order: 16;
                    -webkit-background-clip: text;
                    background-clip: text;
                    width: 184px;
                    height: 52px;
                    font-family: Sen;
                    font-size: 16px;
                    font-weight: 400;
                    display: inline;
                    position: absolute;
                    top: 1134px;
                    left: 492px
                }

                #__11 {
                    color: #000;
                    -webkit-background-clip: text;
                    background-clip: text;
                    font-family: Sen;
                    font-size: 16px;
                    font-weight: 400
                }

                #_8_40 {
                    text-align: center;
                    color: #000;
                    --f2w-order: 17;
                    -webkit-background-clip: text;
                    background-clip: text;
                    width: 209px;
                    height: 45px;
                    font-family: Sen;
                    font-size: 16px;
                    font-weight: 400;
                    display: inline;
                    position: absolute;
                    top: 1134px;
                    left: 230px
                }

                #__12 {
                    color: #000;
                    -webkit-background-clip: text;
                    background-clip: text;
                    font-family: Sen;
                    font-size: 16px;
                    font-weight: 400
                }

        </style>
        <style>
            /* Improved Search Form Styling */
            .search-container {
                --f2w-order: 64;
                position: absolute;
                top: 639px;
                left: 335px;
                width: 732px;
                height: 113px;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .search-form {
                --timing: 0.3s;
                --width-of-input: 100%;
                --height-of-input: 70px;
                --border-height: 3px;
                --input-bg: #fff;
                --border-color: #4a6ee0;
                --border-radius: 12px;
                --after-border-radius: 12px;
                --box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
                --text-color: #333;
                --placeholder-color: #8b8ba7;
                
                position: relative;
                width: var(--width-of-input);
                height: var(--height-of-input);
                display: flex;
                align-items: center;
                padding-inline: 1.5em;
                border-radius: var(--border-radius);
                transition: all 0.3s ease;
                background: var(--input-bg,#fff);
                box-shadow: var(--box-shadow);
            }

            .search-form:hover {
                box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
            }

            .search-button {
                border: none;
                background: none;
                color: var(--placeholder-color);
                cursor: pointer;
                transition: color 0.3s ease;
                padding: 0;
                margin-right: 15px;
            }

            .search-button:hover {
                color: var(--border-color);
            }

            .search-input {
                font-size: 1.2rem;
                font-family: 'Sen', sans-serif;
                background-color: transparent;
                width: 100%;
                height: 100%;
                border: none;
                color: var(--text-color);
                padding-right: 40px;
            }

            .search-input::placeholder {
                color: var(--placeholder-color);
                opacity: 0.8;
            }

            .search-input:focus {
                outline: none;
            }

            /* Animated underline effect */
            .search-form:before {
                content: "";
                position: absolute;
                background: var(--border-color);
                transform: scaleX(0);
                transform-origin: center;
                width: calc(100% - 3em);
                height: var(--border-height);
                left: 1.5em;
                bottom: 15px;
                border-radius: 3px;
                transition: transform var(--timing) ease;
            }

            .search-form:focus-within:before {
                transform: scaleX(1);
            }

            /* Close button styling */
            .reset-button {
                border: none;
                background: none;
                color: var(--placeholder-color);
                cursor: pointer;
                opacity: 0;
                visibility: hidden;
                transition: all 0.3s ease;
                padding: 5px;
                position: absolute;
                right: 20px;
            }

            .reset-button:hover {
                color: #ff4d4d;
            }

            .search-input:not(:placeholder-shown) ~ .reset-button {
                opacity: 1;
                visibility: visible;
            }

            /* Search icon styling */
            .search-icon {
                width: 24px;
                height: 24px;
                transition: transform 0.3s ease;
            }

            .search-button:hover .search-icon {
                transform: scale(1.1);
            }

            /* Close icon styling */
            .close-icon {
                width: 20px;
                height: 20px;
            }
        </style>
    </head>
    <body id="_">
        <div id="Desktop_1">
        <div id="nighttime_nature_landscape_galaxy_mountain_water_star_beauty_generative_ai_1" class="pointer-events-none">
            <img src="https://rosella-nz5asaenen.figweb.site/cdn-cgi/imagedelivery/s-dfVpmPR-aKHmwFNwAgnQ/rosella-nz5asaenen.figweb.site-c0bb288359a66d715a8d4792c8c7422de583a1f8/w=3584" 
                alt="Random landscape slideshow" 
                id="landscape-slideshow"
                class="slideshow-image"
                fetchpriority="high" 
                decoding="async">
        </div>

        <style>
            /* Maintain your exact original CSS */
            #nighttime_nature_landscape_galaxy_mountain_water_star_beauty_generative_ai_1 {
                --f2w-order: 0;
                aspect-ratio: 2.6;
                border-radius: 0;
                width: auto;
                height: 689px;
                position: absolute;
                top: 0;
                left: -263px;
                overflow: hidden;
            }
            
            /* Slideshow image styling with animation */
            .slideshow-image {
                width: 100%;
                height: 100%;
                object-fit: cover;
                position: absolute;
                top: 0;
                left: 0;
                opacity: 0;
                transition: opacity 1.2s ease-in-out;
            }
            
            .slideshow-image.active {
                opacity: 1;
            }
        </style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const landscapePhotos = [
            "https://images.unsplash.com/photo-1501785888041-af3ef285b470", 
            "https://images.unsplash.com/photo-1729274642275-c5abcb52183d", 
            "https://images.unsplash.com/photo-1511497584788-876760111969", 
            "https://images.unsplash.com/photo-1472214103451-9374bd1c798e", 
            "https://images.unsplash.com/photo-1501854140801-50d01698950b", 
            "https://images.unsplash.com/photo-1493246507139-91e8fad9978e", 
            "https://images.unsplash.com/photo-1476231682828-37e571bc172f", 
            "https://images.unsplash.com/photo-1741986947217-d1a0ecc39149", 
            "https://images.unsplash.com/photo-1447752875215-b2761acb3c5d",
            "https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1",
            "https://images.unsplash.com/photo-1741936428950-3f66f0a69320", 
            "https://images.unsplash.com/photo-1483728642387-6c3bdd6c93e5", 
            "https://images.unsplash.com/photo-1742626157100-a25483dda2ea", 
            "https://images.unsplash.com/photo-1433086966358-54859d0ed716", 
            "https://images.unsplash.com/photo-1506260408121-e353d10b87c7", 
            "https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05",
            "https://images.unsplash.com/photo-1426604966848-d7adac402bff", 
            "https://images.unsplash.com/photo-1464822759023-fed622ff2c3b" 
        ];
        
        const slideshowContainer = document.getElementById('nighttime_nature_landscape_galaxy_mountain_water_star_beauty_generative_ai_1');
        
        const img1 = document.createElement('img');
        const img2 = document.createElement('img');
        
        img1.className = 'slideshow-image';
        img2.className = 'slideshow-image';
        
        slideshowContainer.appendChild(img1);
        slideshowContainer.appendChild(img2);
        
        let currentPhotoIndex = 0;
        let activeImg = img1;
        let nextImg = img2;
        let isFirstImage = true;
        
        landscapePhotos.forEach(url => {
            new Image().src = url;
        });
        
        function changePhoto() {
            let newIndex;
            do {
                newIndex = Math.floor(Math.random() * landscapePhotos.length);
            } while (newIndex === currentPhotoIndex && landscapePhotos.length > 1);
            
            currentPhotoIndex = newIndex;
            
            // Set the next image source
            nextImg.src = landscapePhotos[currentPhotoIndex];
            
            if (!isFirstImage) {
                // Fade out active image and fade in next image simultaneously
                activeImg.classList.remove('active');
                nextImg.classList.add('active');
                
                // Swap roles for next transition
                [activeImg, nextImg] = [nextImg, activeImg];
            } else {
                // For first image, just show it without transition
                activeImg.classList.add('active');
                isFirstImage = false;
            }
        }
        
        // Initialize first image
        activeImg.src = landscapePhotos[currentPhotoIndex];
        activeImg.classList.add('active');
        
        setInterval(changePhoto, 5000); // Change every 5 seconds
        
        // Optional: Change photo on click for testing
        slideshowContainer.addEventListener('click', changePhoto);
    });
    </script>

    <style>
        /* Updated CSS for dual-image slideshow */
        #nighttime_nature_landscape_galaxy_mountain_water_star_beauty_generative_ai_1 {
            --f2w-order: 0;
            aspect-ratio: 2.6;
            border-radius: 0;
            width: auto;
            height: 689px;
            position: absolute;
            top: 0;
            left: -263px;
            overflow: hidden;
        }
        
        /* Slideshow image styling with animation */
        .slideshow-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            transition: opacity 1.2s ease-in-out;
        }
        
        .slideshow-image.active {
            opacity: 1;
        }
    </style>

            <div class="nav-container">
                <a href="dashboard" class="btn-link" id="_5_13">
                    <span id="__3" class="btn">Beranda</span>
                </a>
                <a href="informasi" class="btn-link" id="_5_14">
                    <span id="__4" class="btn">Informasi</span>
                </a>
                <a href="pustakawan" class="btn-link" id="_5_16">
                    <span id="__5" class="btn">Pustakawan</span>
                </a>
                <a href="bantuan" class="btn-link" id="_5_18">
                    <span id="__6" class="btn">Bantuan</span>
                </a>
                <a href="#">
                    <span id="_5_10">
                        <span id="__1" class="text">Gunakan Waktu Luangmu untuk membaca!</span>
                    </span>
                </a>
                <a href="#">
                    <span id="_5_11">
                        <span id="__2" class="text">Perpustakaan SMK NEGERI 1 CIMAHI</span>
                    </span>
                </a>
            </div>

            <style>
                /* From Uiverse.io by Mike11jr - adapted for anchor tags */
                .btn-link {
                    text-decoration: none;
                    display: inline-block;
                    position: absolute;
                }
                
                .btn {
                    width: 130px;
                    height: 40px;
                    font-size: 1.1em;
                    cursor: pointer;
                    background-color: #171717;
                    color: #fff;
                    border: none;
                    border-radius: 5px;
                    transition: all .4s;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    font-family: Righteous;
                    font-size: 20px;
                    font-weight: 400;
                }

                /* Your exact positioning */
                #_5_13 { top: 77px; left: 842px; }
                #_5_14 { top: 77px; left: 972px; }
                #_5_16 { top: 77px; left: 1222px; }
                #_5_18 { top: 77px; left: 1101px; }

                /* Hover effects */
                .btn-link:hover .btn {
                    transform: translateY(-10px);
                    box-shadow: 0 7px 0 -2px #f85959,
                                0 15px 0 -4px #39a2db,
                                0 16px 10px -3px #39a2db;
                }

                /* Active effects */
                .btn-link:active .btn {
                    transition: all 0.2s;
                    transform: translateY(-5px);
                    box-shadow: 0 2px 0 -2px #f85959,
                                0 8px 0 -4px #39a2db,
                                0 12px 10px -3px #39a2db;
                }

                /* Container styling */
                .nav-container {
                    position: relative;
                    height: 200px;
                    width: 100%;
                }
            </style>
            <div id="images_removebg_preview_1" class="pointer-events-none">
                <img src="https://rosella-nz5asaenen.figweb.site/cdn-cgi/imagedelivery/s-dfVpmPR-aKHmwFNwAgnQ/rosella-nz5asaenen.figweb.site-913bb9938b495178d17ab48c55f81e3bf9851d54/h=132" alt="images-removebg-preview 1" id="__7" fetchpriority="high" decoding="async">
            </div>
            <span id="_8_24" class="pointer-events-none">
                <span id="__8" class="text">Pilih Kategori Buku Yang Sesuai </span>
            </span>
            <div id="Rectangle_1" class="pointer-events-none"></div>
            <div id="Rectangle_2" class="pointer-events-none"></div>
            <div id="Rectangle_3" class="pointer-events-none"></div>
            <div id="Rectangle_4" class="pointer-events-none"></div>
            <div id="Rectangle_17" class="pointer-events-none"></div>

            <div class="categories-container">
            <!-- Ilmu Pengetahuan -->
            <span id="_8_36" class="pointer-events-none">
                <span id="__10" class="text">Ilmu Pengetahuan</span>
            </span>
            
            <!-- Ilmu Terapan -->
            <span id="_8_38" class="pointer-events-none">
                <span id="__11" class="text">Ilmu Terapan</span>
            </span>
            
            <!-- Kesusastraan -->
            <span id="_8_40" class="pointer-events-none">
                <span id="__12" class="text">Kesusastraan</span>
            </span>
            
            <!-- Lihat Lainnya Dropdown -->
            <div id="_8_35" class="dropdown-container">
                <span id="__9" class="text">Lihat Lainnya</span>
                <div class="dropdown-content">
                    <a href="/kategori/karya-umum" class="dropdown-item">Karya Umum</a>
                    <a href="/kategori/filsafat" class="dropdown-item">Filsafat</a>
                    <a href="/kategori/agama" class="dropdown-item">Agama</a>
                    <a href="/kategori/ilmu-sosial" class="dropdown-item">Ilmu-ilmu Sosial</a>
                    <a href="/kategori/bahasa" class="dropdown-item">Bahasa</a>
                    <a href="/kategori/ilmu-murni" class="dropdown-item">Ilmu-ilmu Murni</a>
                    <a href="/kategori/ilmu-terapan" class="dropdown-item">Ilmu-ilmu Terapan</a>
                    <a href="/kategori/kesenian" class="dropdown-item">Kesenian & Hiburan</a>
                    <a href="/kategori/kesusastraan" class="dropdown-item">Kesusastraan</a>
                    <a href="/kategori/geografi" class="dropdown-item">Geografi & Sejarah</a>
                </div>
            </div>
        </div>

            <style>
                /* Your exact CSS - unchanged */
                #_8_35 {
                    text-align: center;
                    color: #000;
                    --f2w-order: 14;
                    -webkit-background-clip: text;
                    background-clip: text;
                    width: 212px;
                    height: 65px;
                    font-family: Sen;
                    font-size: 16px;
                    font-weight: 400;
                    display: inline;
                    position: absolute;
                    top: 935px;
                    left: 952px;
                    cursor: pointer;
                }

                #__9 {
                    color: #000;
                    -webkit-background-clip: text;
                    background-clip: text;
                    font-family: Sen;
                    font-size: 16px;
                    font-weight: 400;
                }

                #_8_36 {
                    text-align: center;
                    color: #000;
                    --f2w-order: 15;
                    -webkit-background-clip: text;
                    background-clip: text;
                    width: 253px;
                    height: 45px;
                    font-family: Sen;
                    font-size: 16px;
                    font-weight: 400;
                    display: inline;
                    position: absolute;
                    top: 935px;
                    left: 690px;
                }

                #__10 {
                    color: #000;
                    -webkit-background-clip: text;
                    background-clip: text;
                    font-family: Sen;
                    font-size: 16px;
                    font-weight: 400;
                }

                #_8_38 {
                    text-align: center;
                    color: #000;
                    --f2w-order: 16;
                    -webkit-background-clip: text;
                    background-clip: text;
                    width: 184px;
                    height: 52px;
                    font-family: Sen;
                    font-size: 16px;
                    font-weight: 400;
                    display: inline;
                    position: absolute;
                    top: 935px;
                    left: 492px;
                }

                #__11 {
                    color: #000;
                    -webkit-background-clip: text;
                    background-clip: text;
                    font-family: Sen;
                    font-size: 16px;
                    font-weight: 400;
                }

                #_8_40 {
                    text-align: center;
                    color: #000;
                    --f2w-order: 17;
                    -webkit-background-clip: text;
                    background-clip: text;
                    width: 209px;
                    height: 45px;
                    font-family: Sen;
                    font-size: 16px;
                    font-weight: 400;
                    display: inline;
                    position: absolute;
                    top: 935px;
                    left: 237px;
                }

                #__12 {
                    color: #000;
                    -webkit-background-clip: text;
                    background-clip: text;
                    font-family: Sen;
                    font-size: 16px;    
                    font-weight: 400;
                }

                .dropdown-container {
                    position: relative;
                    display: inline-block;
                }
                
                .dropdown-trigger {
                    cursor: pointer;
                    padding: 10px 15px;
                    display: inline-block;
                }
                
                .dropdown-content {
                    display: none;
                    position: absolute;
                    top: 50px;
                    right: 100%; /* Changed from top:100% to left:100% */
                    background-color: white;
                    min-width: 500px; /* Wider to accommodate horizontal layout */
                    box-shadow: 0px 8px 16px rgba(0,0,0,0.2);
                    z-index: 1;
                    border-radius: 4px;
                    padding: 10px;
                    grid-template-columns: repeat(5, 1fr); /* 5 columns */
                    gap: 10px;
                    margin-left: 2000px; /* Spacing from trigger */
                }
                
                .dropdown-container:hover .dropdown-content {
                    display: grid;
                }
                
                .dropdown-item {
                    color: #000;
                    padding: 8px 12px;
                    text-decoration: none;
                    display: block;
                    font-family: Sen;
                    font-size: 14px;
                    text-align: left;
                    border-radius: 3px;
                    white-space: nowrap; /* Prevent text wrapping */
                }
                
                .dropdown-item:hover {
                    background-color: #f5f5f5;
                }

                /* Container */
                .categories-container {
                    position: relative;
                    height: 1200px; /* Adjust based on your layout */
                }
            </style>

            <script>
                // Click functionality for better mobile support
                document.getElementById('_8_35').addEventListener('click', function(e) {
                    e.stopPropagation();
                    const dropdown = this.querySelector('.dropdown-content');
                    dropdown.style.display = dropdown.style.display === 'grid' ? 'none' : 'grid';
                });
                
                // Close dropdown when clicking elsewhere
                document.addEventListener('click', function() {
                    const dropdowns = document.querySelectorAll('.dropdown-content');
                    dropdowns.forEach(dropdown => {
                        dropdown.style.display = 'none';
                    });
                });
            </script>
            </span>


            <span id="_47_3" class="pointer-events-none">
            <span id="__13" class="text">Carl Sagan</span>
            </span>
            <span id="_48_4" class="pointer-events-none">
                <span id="__74" class="text">"Buku itu seperti sihir sepotong kertas dari pohon bisa <br id="__75">jadi jembatan langsung ke pikiran orang lain, bahkan <br id="__76">orang yang sudah meninggal ratusan tahun lalu. <br id="__77">Karena buku adalah bentuk cinta lintas waktu."</span>
            </span>

            <style>
                /* Your original styles */
                #__13 {
                    color: #fff;
                    -webkit-background-clip: text;
                    background-clip: text;
                    font-family: Sen;
                    font-size: 75px;
                    font-weight: 400;
                    display: block;
                    transition: opacity 1s ease-in-out;
                }
                #__74 {
                    color: #fff;
                    -webkit-background-clip: text;
                    background-clip: text;
                    font-family: Shippori Antique;
                    font-size: 20px;
                    font-weight: 400;
                    display: block;
                    transition: opacity 1s ease-in-out;
                }
                .pointer-events-none {
                    position: relative;
                    display: block;
                }
                .hidden {
                    opacity: 0;
                    position: absolute;
                    top: 0;
                    left: 0;
                }
                .visible {
                    opacity: 1;
                }
            </style>

            <script>
                // Quote data with your exact structure
                const quotes = [
                    {
                        author: "Carl Sagan",
                        text: `"Buku itu seperti sihir sepotong kertas dari pohon bisa <br id="__75">jadi jembatan langsung ke pikiran orang lain, bahkan <br id="__76">orang yang sudah meninggal ratusan tahun lalu. <br id="__77">Karena buku adalah bentuk cinta lintas waktu."`
                    },
                    {
                        author: "Pramoedya A.T.",
                        text: `"Orang boleh pandai setinggi langit, tapi selama ia tidak menulis, ia akan hilang di dalam masyarakat dan dari sejarah. <br id=__75>Menulis adalah bekerja untuk keabadian."`
                    },
                    {
                        author: "Tere Liye",
                        text: `"Buku yang baik layaknya teman baik - ia membuatmu berpikir, <br id="__75">tertawa, dan terkadang menangis. Yang penting, ia selalu <br id="__76">membuatmu ingin kembali lagi."`
                    },
                    {   
                        author: "Andrea Hirata",
                        text: `"Membaca adalah jendela dunia, sementara menulis adalah <br id="__75">pintunya. Dengan keduanya, kita bisa menjelajah tanpa <br id="__76">batas."`
                    },
                    {
                        author: "J.K. Rowling",
                        text: `"Ketika hidup terasa berat, saya selalu menemukan bahwa <br id="__75">sebuah buku dan secangkir teh bisa menyelesaikan <br id="__76">banyak masalah."`
                    }
                ];

                // Get elements
                const authorElement = document.getElementById('__13');
                const quoteElement = document.getElementById('__74');
                let currentQuoteIndex = 0;

                    function rotateQuotes() {
                        // Fade out current quote
                        authorElement.classList.add('hidden');
                        quoteElement.classList.add('hidden');
                        
                        setTimeout(() => {
                            // Update to next quote
                            currentQuoteIndex = (currentQuoteIndex + 1) % quotes.length;
                            const nextQuote = quotes[currentQuoteIndex];
                            
                            // Update elements
                            authorElement.textContent = nextQuote.author;
                            quoteElement.innerHTML = nextQuote.text;
                            
                            // Fade in new quote
                            authorElement.classList.remove('hidden');
                            quoteElement.classList.remove('hidden');
                        }, 0);
                }

                // Initialize first quote
                authorElement.classList.add('visible');
                quoteElement.classList.add('visible');
                
                // Start rotation every 10 seconds
                setInterval(rotateQuotes, 10000);
            </script>
            <div id="_8ea3d1f507bbcc77e3d3b0d6f0b2421c_removebg_preview_1" class="pointer-events-none">
                <img src="https://rosella-nz5asaenen.figweb.site/cdn-cgi/imagedelivery/s-dfVpmPR-aKHmwFNwAgnQ/rosella-nz5asaenen.figweb.site-49f03f523e5a21cb7cf1097d46c3e379179ad05c/h=358" alt="8ea3d1f507bbcc77e3d3b0d6f0b2421c-removebg-preview 1" id="__14" fetchpriority="high" decoding="async">
            </div>
            <div id="science_rgb_color_icon_microscope_stack_of_books_learning_through_observation_and_experimentation_science_classes_in_school_isolated_illustration_simple_filled_line_drawing_vector_removebg_preview_1" class="pointer-events-none">
                <img src="https://rosella-nz5asaenen.figweb.site/cdn-cgi/imagedelivery/s-dfVpmPR-aKHmwFNwAgnQ/rosella-nz5asaenen.figweb.site-535dc43b47b8235f28ede7973086073227d226bf/h=404" alt="science-rgb-color-icon-microscope-stack-of-books-learning-through-observation-and-experimentation-science-classes-in-school-isolated-illustration-simple-filled-line-drawing-vector-removebg-preview 1" id="__15" fetchpriority="high" decoding="async">
            </div>
            <div id="geometry_rgb_color_icon_pencil_and_ruler_geometrical_problem_solving_draw_line_measurement_sides_of_triangle_geometric_shape_isolated_illustration_simple_filled_line_drawing_vector_removebg_preview_1" class="pointer-events-none">
                <img src="https://rosella-nz5asaenen.figweb.site/cdn-cgi/imagedelivery/s-dfVpmPR-aKHmwFNwAgnQ/rosella-nz5asaenen.figweb.site-c0145c18c26b0b2df30ed63d946d5f7e3282f978/h=368" alt="geometry-rgb-color-icon-pencil-and-ruler-geometrical-problem-solving-draw-line-measurement-sides-of-triangle-geometric-shape-isolated-illustration-simple-filled-line-drawing-vector-removebg-preview 1" id="__16" fetchpriority="high" decoding="async">
            </div>
            <div id="Line_1" class="pointer-events-none"></div>
            <div id="Group_11">
                <span id="_13_4" class="pointer-events-none">
                    <span id="__17" class="text">Populer</span>
                </span>
                <span id="_13_5" class="pointer-events-none">
                    <span id="__18" class="text">Book</span>
                </span>
            </div>
            <div id="Group_6" style="position: absolute; top: 1443px; left: 55px; width: 1329px; height: 1188px;">
            <!-- First Row - Popular Books (5 books) -->
            <div style="position: absolute; top: 0; left: 0; width: 100%;">
                @foreach($popularBooks->take(5) as $index => $book)
                <a href="{{ route('user.books.show', $book->idbuku) }}" style="text-decoration: none; position: absolute; top: 0; left: {{ $index * 266 }}px; width: 266px; height: 465px; z-index: 1;">
                    <div id="Group_5_{{ $index }}" style="position: relative; width: 100%; height: 100%;">
                        <div class="pointer-events-none" style="background-color: #fff; border: 0 solid #000; border-width: 0 1px; width: 267px; height: 465px; position: absolute; top: 0; left: -.5px;"></div>
                        <div class="pointer-events-none" style="aspect-ratio: .66; filter: drop-shadow(0 10px 10px #00000040); border: 1px solid #000; width: auto; height: 334px; position: absolute; top: 19px; left: 22px; overflow: hidden;">
                            @if($book->gambar)
                            <img src="{{ $book->gambar_url }}" alt="{{ $book->judul }}" loading="lazy" decoding="async" style="object-fit: cover; width: 100%; height: 100%;">
                            @endif
                        </div>
                        <div class="pointer-events-none" style="text-align: left; color: #000; width: 197px; font-family: Charis SIL; font-size: 16px; font-weight: 400; line-height: 18px; position: absolute; top: 376px; left: 23px;">
                            <span class="text">{{ $book->judul }} - {{ $book->penulis }}: {{ $book->edisi }}</span>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>

            <!-- Second Row - Latest Books (5 books) -->
            <div style="position: absolute; top: 723px; left: 0; width: 100%;">
                @foreach($latestBooks->take(5) as $index => $book)
                <a href="{{ route('user.books.show', $book->idbuku) }}" style="text-decoration: none; position: absolute; top: 0; left: {{ $index * 266 }}px; width: 266px; height: 465px; z-index: 1;">
                    <div id="Group_5_latest_{{ $index }}" style="position: relative; width: 100%; height: 100%;">
                        <div class="pointer-events-none" style="background-color: #fff; border: 0 solid #000; border-width: 0 1px; width: 267px; height: 465px; position: absolute; top: 0; left: -.5px;"></div>
                        <div class="pointer-events-none" style="aspect-ratio: .66; filter: drop-shadow(0 10px 10px #00000040); border: 1px solid #000; width: auto; height: 334px; position: absolute; top: 19px; left: 22px; overflow: hidden;">
                            @if($book->gambar)
                            <img src="{{ $book->gambar_url }}" alt="{{ $book->judul }}" loading="lazy" decoding="async" style="object-fit: cover; width: 100%; height: 100%;">
                            @endif
                        </div>
                        <div class="pointer-events-none" style="text-align: left; color: #000; width: 197px; font-family: Charis SIL; font-size: 16px; font-weight: 400; line-height: 18px; position: absolute; top: 376px; left: 23px;">
                            <span class="text">{{ $book->judul }} - {{ $book->penulis }}: {{ $book->edisi }}</span>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
            <span id="_20_127" class="pointer-events-none">
                <span id="__40" class="text">Buku yang paling diminati oleh pembaca</span>
            </span>
            <div id="Group_14_0">
                <div id="Group_13_0">
                    <div id="Line_2" class="pointer-events-none"></div>
                    <div id="Group_12_0">
                        <span id="_20_129" class="pointer-events-none">
                            <span id="__41" class="text">Koleksi Buku</span>
                        </span>
                        <span id="_20_130" class="pointer-events-none">
                            <span id="__42" class="text">Terbaru</span>
                        </span>
                    </div>
                </div>
                <span id="_20_135" class="pointer-events-none">
                    <span id="__43" class="text">Daftar buku terbaru di perpustakaan</span>
                </span>
                <div id="Group_15">
                    <div id="Line_3" class="pointer-events-none"></div>
                    <span id="_21_184" class="pointer-events-none">
                        <span id="__44" class="text">Penikmat Buku</span>
                    </span>
                    <span id="_21_182" class="pointer-events-none">
                        <span id="__45" class="text">Tahun Ini</span>
                    </span>
                    <span id="_21_186" class="pointer-events-none">
                        <span id="__46" class="text">Pembaca terbaik kami, ada di sini. Rajin-rajinlah berkunjung dan membaca</span>
                    </span>
                </div>
            </div>
            <div id="Rectangle_18" class="pointer-events-none"></div>
            <span id="_29_7" class="pointer-events-none">
                <span id="__47" class="text">Nama Siswa</span>
            </span>
            <span id="_29_8" class="pointer-events-none">
                <span id="__48" class="text">Siswa</span>
            </span>
            <div id="Rectangle_19" class="pointer-events-none"></div>
            <div id="Rectangle_20" class="pointer-events-none"></div>
            <div id="Ellipse_1" class="pointer-events-none"></div>
            <div id="Ellipse_2" class="pointer-events-none"></div>
            <div id="Ellipse_3" class="pointer-events-none"></div>
            <span id="_29_10" class="pointer-events-none">
                <span id="__49" class="text">12 Title</span>
            </span>
            <span id="_29_11" class="pointer-events-none">
                <span id="__50" class="text">Nama Siswa</span>
            </span>
            <span id="_29_12" class="pointer-events-none">
                <span id="__51" class="text">Siswa</span>
            </span>
            <span id="_29_13" class="pointer-events-none">
                <span id="__52" class="text">12 Title</span>
            </span>
            <span id="_29_15" class="pointer-events-none">
                <span id="__53" class="text">Nama Siswa</span>
            </span>
            <span id="_29_16" class="pointer-events-none">
                <span id="__54" class="text">Siswa</span>
            </span>
            <span id="_29_17" class="pointer-events-none">
                <span id="__55" class="text">12 Title</span>
            </span>
            <span id="_29_19" class="pointer-events-none">
                <span id="__56" class="text">Nama Siswa</span>
            </span>
            <span id="_29_20" class="pointer-events-none">
                <span id="__57" class="text">Siswa</span>
            </span>
            <span id="_29_21" class="pointer-events-none">
                <span id="__58" class="text">12 Title</span>
            </span>
            <div id="Rectangle_21" class="pointer-events-none"></div>
            <div id="_79f5e9b0_fc46_481d_8991_348acb29f8fb_removalai_preview_1" class="pointer-events-none">
                <img src="https://rosella-nz5asaenen.figweb.site/cdn-cgi/imagedelivery/s-dfVpmPR-aKHmwFNwAgnQ/rosella-nz5asaenen.figweb.site-913bb9938b495178d17ab48c55f81e3bf9851d54/w=214" alt="79f5e9b0-fc46-481d-8991-348acb29f8fb_removalai_preview 1" id="__59" loading="lazy" decoding="async">
            </div>
            <span id="_29_26" class="pointer-events-none">
                <span id="__60" class="text">PERPUSTAKAAN SMKN 1 CIMAHI</span>
            </span>
            <a href="informasi">
            <span id="_29_27">
                <span id="__61" class="text">Informasi</span>
            </span>
            </a>
            <a href="bantuan">
                <span id="_29_29">
                    <span id="__62" class="text">Bantuan</span>
                </span>
            </a>
            <span id="_29_34" class="pointer-events-none">
                <span id="__69" class="text">Lorem Ipsum</span>
            </span>
            <a href="pustakawan">
                <span id="_29_31">
                    <span id="__63" class="text">Pustakawan</span>
                </span>
            </a>
            <span id="_29_51" class="pointer-events-none">
                <span id="__64" class="text">© 2025 — Rekayasa Perangkat Lunak Developer</span>
            </span>
            <span id="_29_33" class="pointer-events-none">
                <span id="__65" class="text">Tentang Kami</span>
            </span>
                <a href="https://www.instagram.com/smkn1cimahi/" target="_blank" rel="noopener noreferrer" style="position: absolute; top: 3569px; left: 1129px;">
                <span class="text" style="color: #a5a5a5; font-family: Sofia Sans; font-size: 32px; font-weight: 700;">Instagram</span>
            </a>

            <!-- YouTube Link (Clickable) -->
            <a href="https://www.youtube.com/@SMKNEGERI1CIMAHIOFFICIAL" target="_blank" rel="noopener noreferrer" style="position: absolute; top: 3697px; left: 1129px;">
                <span class="text" style="color: #a5a5a5; font-family: Sofia Sans; font-size: 32px; font-weight: 700;">Youtube</span>
            </a>

            <!-- School Website Links (Clickable) -->
            <a href="https://www.instagram.com/smkn1cimahi/" target="_blank" rel="noopener noreferrer" style="position: absolute; top: 3607px; left: 1129px;">
                <span class="text" style="color: #fff; font-family: Sofia Sans; font-size: 16px; font-weight: 700;">SMK NEGERI 1 CIMAHI</span>
            </a>

            <a href="https://www.youtube.com/@SMKNEGERI1CIMAHIOFFICIAL" target="_blank" rel="noopener noreferrer" style="position: absolute; top: 3735px; left: 1129px;">
                <span class="text" style="color: #fff; font-family: Sofia Sans; font-size: 16px; font-weight: 700;">SMK NEGERI 1 CIMAHI</span>
            </a>

            <!-- Social Media Icons (Clickable) -->
            <a href="https://www.instagram.com/smkn1cimahi/" target="_blank" rel="noopener noreferrer" style="position: absolute; top: 3555px; left: 1011px;">
                <img src="https://rosella-nz5asaenen.figweb.site/cdn-cgi/imagedelivery/s-dfVpmPR-aKHmwFNwAgnQ/rosella-nz5asaenen.figweb.site-153dda55ec665c0aba0b0f4b090f07472efef591/h=214" alt="Instagram SMKN 1 Cimahi" loading="lazy" decoding="async" style="width: 107px; height: 107px;">
            </a>

            <a href="https://www.youtube.com/@SMKNEGERI1CIMAHIOFFICIAL" target="_blank" rel="noopener noreferrer" style="position: absolute; top: 3662px; left: 1011px;">
                <img src="https://rosella-nz5asaenen.figweb.site/cdn-cgi/imagedelivery/s-dfVpmPR-aKHmwFNwAgnQ/rosella-nz5asaenen.figweb.site-46ff4e419d22c9c77f905b11b01f03e0c30c3f3a/h=214" alt="YouTube SMKN 1 Cimahi" loading="lazy" decoding="async" style="width: 107px; height: 107px;">
            </a>
            <div id="fa0059f1_f667_49c0_bf3d_fcb8d2496f04_removalai_preview_1" class="pointer-events-none">
                <img src="https://rosella-nz5asaenen.figweb.site/cdn-cgi/imagedelivery/s-dfVpmPR-aKHmwFNwAgnQ/rosella-nz5asaenen.figweb.site-153dda55ec665c0aba0b0f4b090f07472efef591/h=214" alt="fa0059f1-f667-49c0-bf3d-fcb8d2496f04_removalai_preview 1" id="__72" loading="lazy" decoding="async">
            </div>
            <div id="fa0059f1_f667_49c0_bf3d_fcb8d2496f04_removalai_preview_2" class="pointer-events-none">
                <img src="https://rosella-nz5asaenen.figweb.site/cdn-cgi/imagedelivery/s-dfVpmPR-aKHmwFNwAgnQ/rosella-nz5asaenen.figweb.site-46ff4e419d22c9c77f905b11b01f03e0c30c3f3a/h=214" alt="fa0059f1-f667-49c0-bf3d-fcb8d2496f04_removalai_preview 2" id="__73" loading="lazy" decoding="async">
            </div>
            <div id="Frame_1" class="pointer-events-none"></div>
            <div id="_icon_ellipses_">
                <svg preserveAspectRatio="none" id="Vector" class="pointer-events-none" width="72" height="19" viewBox="0 0 72 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.893555 0.621338V18.3139H18.6131V0.621338H0.893555ZM27.4729 0.621338V18.3139H45.1924V0.621338H27.4729ZM54.0522 0.621338V18.3139H71.7717V0.621338H54.0522Z" fill="black"></path>
                </svg>
            </div>

        <!-- Search Form HTML -->
        <div id="Rectangle_22" class="search-container">
            <form class="search-form">
                <button class="search-button" type="button">
                    <svg class="search-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M21 21L16.65 16.65" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <input class="search-input" placeholder="Search books by title, author or category..." type="text">
                <button class="reset-button" type="reset">
                    <svg class="close-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 6L6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </form>
        </div>
            <div id="Line_4" class="pointer-events-none"></div>
        </div>
        <a href="https://figma.to.website/?ref=free" target="_blank" title="Your website directly from Figma" style="z-index:999999;color:#242424;background-color:#fff;border-radius:6px;align-items:center;padding:4px;text-decoration:none;display:flex;position:fixed;bottom:16px;right:16px;box-shadow:0 .637473px 1.14745px -1.125px #00000042,0 1.93094px 3.4757px -2.25px #0000003d,0 5.10423px 9.18761px -3.375px #00000031,0 16px 28.8px -4.5px #00000008">
            <style>
                @media only screen and (max-width: 768px) {
                    #made-with-f2w-logo {
                        width:32px;
                        height: 32px
                    }
                }
            </style>
        </a>
    </body>
</html>
