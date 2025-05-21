<!DOCTYPE html>
<!-- This site was created with figma.to.website. https://figma.to.website -->
<!-- Last Published: Tue Apr 08 2025 08:07:27 GMT+0000 (Coordinated Universal Time) -->
<html lang="en" xml:lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Desktop - 2</title>
        <link rel="canonical" href="https://gisele-ikwtmtdrdw.figweb.site/Desktop---2/">
        <meta name="description" content="Created with figma.to.website">
        <meta property="og:url" content="https://gisele-ikwtmtdrdw.figweb.site/Desktop---2/">
        <meta property="og:type" content="website">
        <meta property="og:title" content="Desktop - 2">
        <meta property="og:description" content="Created with figma.to.website">
        <meta property="og:image:type" content="image/jpeg">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="630">
        <meta property="og:image" content="https://gisele-ikwtmtdrdw.figweb.site/cdn-cgi/imagedelivery/s-dfVpmPR-aKHmwFNwAgnQ/gisele-ikwtmtdrdw.figweb.site-eee9921026b84cd7f531812c35be38f74e9d4b1d/public">
        <meta name="twitter:title" content="Desktop - 2">
        <meta name="twitter:description" content="Created with figma.to.website">
        <meta name="twitter:image:type" content="image/jpeg">
        <meta name="twitter:image:width" content="1200">
        <meta name="twitter:image:height" content="630">
        <meta name="twitter:image" content="https://gisele-ikwtmtdrdw.figweb.site/cdn-cgi/imagedelivery/s-dfVpmPR-aKHmwFNwAgnQ/gisele-ikwtmtdrdw.figweb.site-eee9921026b84cd7f531812c35be38f74e9d4b1d/public">
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
            "use strict";
            ( () => {
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
                )
            }
            )();
        </script>
        <link href="https://fonts.googleapis.com/css2?family=Righteous:wght@400&amp;family=Odor Mean Chey:wght@400&amp;family=Nunito Sans:wght@400;700&amp;family=Rubik Mono One:wght@400&amp;family=Overpass:wght@700&amp;family=Secular One:wght@400&amp;family=Sofia Sans:wght@700&amp;family=Alatsi:wght@400&amp;display=swap" rel="stylesheet">
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
                background-color: #fff;
                min-height: 100vh;
                display: grid
            }

            #Desktop_2 {
                background-color: #fff;
                border-radius: 0;
                width: 1440px;
                min-width: 1440px;
                max-width: 1440px;
                min-height: 3005px;
                max-height: 3005px;
                margin: 0 auto;
                position: relative;
                overflow: hidden
            }

            #nighttime_nature_landscape_galaxy_mountain_water_star_beauty_generative_ai_2 {
                --f2w-order: 0;
                aspect-ratio: 4.41;
                border-radius: 0;
                width: auto;
                height: 406px;
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

            #Rectangle_23 {
                --f2w-order: 1;
                opacity: .5;
                background-color: #37637a;
                border-radius: 0;
                width: 1440px;
                height: 406px;
                position: absolute;
                top: 0;
                left: 0
            }

            #_7_6 {
                text-align: left;
                color: #fff;
                --f2w-order: 2;
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

            #__1 {
                color: #fff;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Righteous;
                font-size: 20px;
                font-weight: 400
            }

            #_7_7 {
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
                left: 972px
            }

            #__2 {
                color: #fff;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Righteous;
                font-size: 20px;
                font-weight: 400
            }

            #_7_8 {
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
                left: 1222px
            }

            #__3 {
                color: #fff;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Righteous;
                font-size: 20px;
                font-weight: 400
            }

            #_7_9 {
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
                left: 1101px
            }

            #__4 {
                color: #fff;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Righteous;
                font-size: 20px;
                font-weight: 400
            }

            #_7_10 {
                text-align: left;
                color: #fff;
                --f2w-order: 6;
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

            #__5 {
                color: #fff;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Odor Mean Chey;
                font-size: 24px;
                font-weight: 400
            }

            #_7_11 {
                text-align: left;
                color: #fff;
                --f2w-order: 7;
                filter: drop-shadow(0 4px 4px #00000040);
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Nunito Sans;
                font-size: 16px;
                font-weight: 400;
                display: inline;
                position: absolute;
                top: 97px;
                left: 157px
            }

            #__6 {
                color: #fff;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Nunito Sans;
                font-size: 16px;
                font-weight: 400
            }

            #_7_12 {
                text-align: left;
                color: #fff;
                --f2w-order: 8;
                filter: drop-shadow(0 4px 4px #00000040);
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Nunito Sans;
                font-size: 16px;
                font-weight: 400;
                display: inline;
                position: absolute;
                top: 97px;
                left: 157px
            }

            #__7 {
                color: #fff;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Nunito Sans;
                font-size: 16px;
                font-weight: 400
            }

            #images_removebg_preview_1 {
                --f2w-order: 9;
                aspect-ratio: 1.04;
                border-radius: 0;
                width: auto;
                height: 66px;
                position: absolute;
                top: 55px;
                left: 80px;
                overflow: hidden
            }

            #__8 {
                object-fit: cover;
                width: 100%;
                height: 100%;
                position: absolute;
                inset: 0
            }

            #_7_14 {
                text-align: left;
                color: #fff;
                --f2w-order: 10;
                filter: drop-shadow(4px 4px 50px #ffffff40);
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Rubik Mono One;
                font-size: 64px;
                font-weight: 400;
                display: inline;
                position: absolute;
                top: 186px;
                left: 475px
            }

            #__9 {
                color: #fff;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Rubik Mono One;
                font-size: 64px;
                font-weight: 400
            }

            #_7_15 {
                text-align: left;
                color: #fff;
                --f2w-order: 11;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Nunito Sans;
                font-size: 24px;
                font-weight: 700;
                display: inline;
                position: absolute;
                top: 248px;
                left: 497px
            }

            #__10 {
                color: #fff;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Nunito Sans;
                font-size: 24px;
                font-weight: 700
            }

            #Rectangle_23_0 {
                --f2w-order: 12;
                filter: drop-shadow(0 4px 4px #00000040);
                background-color: #fff;
                border-radius: 0;
                width: 732px;
                height: 113px;
                position: absolute;
                top: 349px;
                left: 350px
            }

            #_7_17 {
                text-align: left;
                color: #000;
                --f2w-order: 13;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Overpass;
                font-size: 48px;
                font-weight: 700;
                display: inline;
                position: absolute;
                top: 544px;
                left: 64px
            }

            #__11 {
                color: #000;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Overpass;
                font-size: 48px;
                font-weight: 700
            }

            #Group_16 {
                --f2w-order: 14;
                width: 926px;
                height: 1068px;
                position: absolute;
                top: 687px;
                left: 101px
            }

            #_7_19 {
                text-align: left;
                color: #000;
                --f2w-order: 0;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Secular One;
                font-size: 48px;
                font-weight: 400;
                display: inline;
                position: absolute;
                top: 0;
                left: 0
            }

            #__12 {
                color: #000;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Secular One;
                font-size: 48px;
                font-weight: 400
            }

            #_7_20 {
                text-align: left;
                color: #000;
                --f2w-order: 1;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Secular One;
                font-size: 48px;
                font-weight: 400;
                display: inline;
                position: absolute;
                top: 330px;
                left: 0
            }

            #__13 {
                color: #000;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Secular One;
                font-size: 48px;
                font-weight: 400
            }

            #_7_21 {
                text-align: left;
                color: #000;
                --f2w-order: 2;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Secular One;
                font-size: 48px;
                font-weight: 400;
                display: inline;
                position: absolute;
                top: 680px;
                left: 0
            }

            #__14 {
                color: #000;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Secular One;
                font-size: 48px;
                font-weight: 400
            }

            #_7_22 {
                text-align: left;
                color: #000;
                --f2w-order: 3;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Secular One;
                font-size: 48px;
                font-weight: 400;
                display: inline;
                position: absolute;
                top: 902px;
                left: 0
            }

            #__15 {
                color: #000;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Secular One;
                font-size: 48px;
                font-weight: 400
            }

            #_7_23 {
                text-align: left;
                color: #000;
                --f2w-order: 4;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Segoe UI Historic;
                font-size: 24px;
                font-weight: 400;
                display: inline;
                position: absolute;
                top: 70px;
                left: 0
            }

            #__16 {
                color: #000;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Segoe UI Historic;
                font-size: 24px;
                font-weight: 400
            }

            #_7_24 {
                text-align: left;
                color: #000;
                --f2w-order: 5;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Segoe UI Historic;
                font-size: 24px;
                font-weight: 400;
                display: inline;
                position: absolute;
                top: 400px;
                left: 0
            }

            #__22 {
                color: #000;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Segoe UI Historic;
                font-size: 24px;
                font-weight: 400
            }

            #_7_25 {
                text-align: left;
                color: #000;
                --f2w-order: 6;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Segoe UI Historic;
                font-size: 24px;
                font-weight: 400;
                display: inline;
                position: absolute;
                top: 750px;
                left: 0
            }

            #__29 {
                color: #000;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Segoe UI Historic;
                font-size: 24px;
                font-weight: 400
            }

            #_7_26 {
                text-align: left;
                color: #000;
                --f2w-order: 7;
                -webkit-background-clip: text;
                background-clip: text;
                width: 926px;
                font-family: Segoe UI Historic;
                font-size: 24px;
                font-weight: 400;
                display: inline;
                position: absolute;
                top: 972px;
                left: 0
            }

            #__32 {
                color: #000;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Segoe UI Historic;
                font-size: 24px;
                font-weight: 400
            }

            #Line_5 {
                --f2w-order: 15;
                transform-origin: 0 0;
                border: 0 solid #000;
                border-top-width: 1px;
                width: 1358px;
                height: 1px;
                position: absolute;
                top: 644px;
                left: 41px;
                transform: rotate(-.2deg)
            }

            #Rectangle_24 {
                --f2w-order: 16;
                background-color: #efefef;
                border-radius: 0;
                width: 1440px;
                height: 479px;
                position: absolute;
                top: 1862px;
                left: 0
            }

            #Rectangle_25 {
                --f2w-order: 17;
                background-color: #d9d9d9;
                border-radius: 0;
                width: 517px;
                height: 407px;
                position: absolute;
                top: 1898px;
                left: 888px
            }

            #_7_30 {
                text-align: left;
                color: #000;
                --f2w-order: 18;
                -webkit-background-clip: text;
                background-clip: text;
                width: 770px;
                font-family: Segoe UI Historic;
                font-size: 24px;
                font-weight: 400;
                display: inline;
                position: absolute;
                top: 2054px;
                left: 88px
            }

            #__33 {
                color: #000;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Segoe UI Historic;
                font-size: 24px;
                font-weight: 400
            }

            #_7_31 {
                text-align: left;
                color: #000;
                --f2w-order: 19;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Overpass;
                font-size: 48px;
                font-weight: 700;
                display: inline;
                position: absolute;
                top: 1993px;
                left: 88px
            }

            #__34 {
                color: #000;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Overpass;
                font-size: 48px;
                font-weight: 700
            }

            #Rectangle_26 {
                --f2w-order: 20;
                background-color: #d9d9d9;
                border-radius: 0;
                width: 61px;
                height: 60px;
                position: absolute;
                top: 2221px;
                left: 88px
            }

            #Rectangle_27 {
                --f2w-order: 21;
                background-color: #d9d9d9;
                border-radius: 0;
                width: 61px;
                height: 60px;
                position: absolute;
                top: 2221px;
                left: 173px
            }

            #Rectangle_28 {
                --f2w-order: 22;
                background-color: #d9d9d9;
                border-radius: 0;
                width: 61px;
                height: 60px;
                position: absolute;
                top: 2221px;
                left: 258px
            }

            #Rectangle_21 {
                --f2w-order: 23;
                background-color: #222f36;
                border-radius: 0;
                width: 1440px;
                height: 535px;
                position: absolute;
                top: 2484px;
                left: 0
            }

            #_79f5e9b0_fc46_481d_8991_348acb29f8fb_removalai_preview_1 {
                --f2w-order: 24;
                aspect-ratio: 1.04;
                border-radius: 0;
                width: auto;
                height: 103px;
                position: absolute;
                top: 2536px;
                left: 87px;
                overflow: hidden
            }

            #__35 {
                object-fit: cover;
                width: 100%;
                height: 100%;
                position: absolute;
                inset: 0
            }

            #_7_37 {
                text-align: center;
                color: #fff;
                --f2w-order: 25;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Sofia Sans;
                font-size: 24px;
                font-weight: 700;
                display: inline;
                position: absolute;
                top: 2649px;
                left: 86px
            }

            #__36 {
                color: #fff;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Sofia Sans;
                font-size: 24px;
                font-weight: 700
            }

            #_7_38 {
                text-align: center;
                color: #fff;
                --f2w-order: 26;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Sofia Sans;
                font-size: 24px;
                font-weight: 700;
                display: inline;
                position: absolute;
                top: 2751px;
                left: 87px
            }

            #__37 {
                color: #fff;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Sofia Sans;
                font-size: 24px;
                font-weight: 700
            }

            #_7_39 {
                text-align: center;
                color: #fff;
                --f2w-order: 27;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Sofia Sans;
                font-size: 24px;
                font-weight: 700;
                display: inline;
                position: absolute;
                top: 2787px;
                left: 87px
            }

            #__38 {
                color: #fff;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Sofia Sans;
                font-size: 24px;
                font-weight: 700
            }

            #_7_40 {
                text-align: center;
                color: #fff;
                --f2w-order: 28;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Sofia Sans;
                font-size: 24px;
                font-weight: 700;
                display: inline;
                position: absolute;
                top: 2823px;
                left: 86px
            }

            #__39 {
                color: #fff;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Sofia Sans;
                font-size: 24px;
                font-weight: 700
            }

            #_7_41 {
                text-align: center;
                color: #fff;
                --f2w-order: 29;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Alatsi;
                font-size: 24px;
                font-weight: 400;
                display: inline;
                position: absolute;
                top: 2936px;
                left: 80px
            }

            #__40 {
                color: #fff;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Alatsi;
                font-size: 24px;
                font-weight: 400
            }

            #_7_42 {
                text-align: center;
                color: #fff;
                --f2w-order: 30;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Sofia Sans;
                font-size: 40px;
                font-weight: 700;
                display: inline;
                position: absolute;
                top: 2564px;
                left: 502px
            }

            #__41 {
                color: #fff;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Sofia Sans;
                font-size: 40px;
                font-weight: 700
            }

            #_7_43 {
                text-align: center;
                color: #fff;
                --f2w-order: 31;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Sofia Sans;
                font-size: 40px;
                font-weight: 700;
                display: inline;
                position: absolute;
                top: 2564px;
                left: 1030px
            }

            #__42 {
                color: #fff;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Sofia Sans;
                font-size: 40px;
                font-weight: 700
            }

            #_7_44 {
                text-align: center;
                color: #a5a5a5;
                --f2w-order: 32;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Sofia Sans;
                font-size: 32px;
                font-weight: 700;
                display: inline;
                position: absolute;
                top: 2626px;
                left: 1129px
            }

            #__43 {
                color: #a5a5a5;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Sofia Sans;
                font-size: 32px;
                font-weight: 700
            }

            #_7_45 {
                text-align: center;
                color: #a5a5a5;
                --f2w-order: 33;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Sofia Sans;
                font-size: 32px;
                font-weight: 700;
                display: inline;
                position: absolute;
                top: 2754px;
                left: 1129px
            }

            #__44 {
                color: #a5a5a5;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Sofia Sans;
                font-size: 32px;
                font-weight: 700
            }

            #_7_46 {
                text-align: left;
                color: #fff;
                --f2w-order: 34;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Sofia Sans;
                font-size: 24px;
                font-weight: 700;
                display: inline;
                position: absolute;
                top: 2635px;
                left: 502px
            }

            #__45 {
                color: #fff;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Sofia Sans;
                font-size: 24px;
                font-weight: 700
            }

            #_7_47 {
                text-align: left;
                color: #fff;
                --f2w-order: 35;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Sofia Sans;
                font-size: 16px;
                font-weight: 700;
                display: inline;
                position: absolute;
                top: 2664px;
                left: 1129px
            }

            #__46 {
                color: #fff;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Sofia Sans;
                font-size: 16px;
                font-weight: 700
            }

            #_7_48 {
                text-align: left;
                color: #fff;
                --f2w-order: 36;
                -webkit-background-clip: text;
                background-clip: text;
                width: max-content;
                font-family: Sofia Sans;
                font-size: 16px;
                font-weight: 700;
                display: inline;
                position: absolute;
                top: 2792px;
                left: 1129px
            }

            #__47 {
                color: #fff;
                -webkit-background-clip: text;
                background-clip: text;
                font-family: Sofia Sans;
                font-size: 16px;
                font-weight: 700
            }

            #fa0059f1_f667_49c0_bf3d_fcb8d2496f04_removalai_preview_1 {
                --f2w-order: 37;
                aspect-ratio: 1;
                border-radius: 0;
                width: auto;
                height: 107px;
                position: absolute;
                top: 2612px;
                left: 1011px;
                overflow: hidden
            }

            #__48 {
                object-fit: cover;
                width: 100%;
                height: 100%;
                position: absolute;
                inset: 0
            }

            #fa0059f1_f667_49c0_bf3d_fcb8d2496f04_removalai_preview_2 {
                --f2w-order: 38;
                aspect-ratio: 1;
                border-radius: 0;
                width: auto;
                height: 107px;
                position: absolute;
                top: 2719px;
                left: 1011px;
                overflow: hidden
            }

            #__49 {
                object-fit: cover;
                width: 100%;
                height: 100%;
                position: absolute;
                inset: 0
            }

            #Line_4 {
                --f2w-order: 39;
                transform-origin: 0 0;
                border: 0 solid #fff;
                border-top-width: 1px;
                width: 1440px;
                height: 1px;
                position: absolute;
                top: 2898px;
                left: 0;
                transform: rotate(.1deg)
            }
        </style>
        <style>
            @font-face {
                src: url(/__assets/SegoeUIHistoric-Regular-400.woff2)format("woff2");
                font-family: Segoe UI Historic;
                font-style: normal;
                font-weight: 400;
                font-display: swap
            }
        </style>
        <style>
            article.prose {
                line-height: 1.75;
                display: contents
            }

            article.prose a {
                font-weight: 500;
                text-decoration: underline
            }

            article.prose h1 {
                margin-block:0 1.23em;font-size: 2.25em;
                line-height: 1.11
            }

            article.prose h2 {
                margin-block:2em 1em;font-size: 1.5em;
                line-height: 1.34
            }

            article.prose h3 {
                margin-block:1.6em .6em;font-size: 1.25em;
                line-height: 1.6
            }

            article.prose h4 {
                margin-top: 1.5em;
                margin-bottom: .5em;
                line-height: 1.5
            }

            article.prose img {
                width: 100%;
                margin-block:2em}

            article.prose blockquote {
                margin-block:1.6em;padding: .75em 1.25em
            }

            article.prose ul,article.prose ol {
                padding-inline-start:1.5em}

            article.prose table {
                table-layout: auto;
                width: 100%;
                margin: 1.5em 0
            }

            article.prose thead th {
                vertical-align: bottom;
                font-weight: 600
            }

            article.prose tbody td {
                vertical-align: baseline
            }

            article.prose tfoot td {
                vertical-align: top
            }

            article.prose th,article.prose td {
                text-align: start;
                padding: .75em
            }

            article.prose thead th:first-child,article.prose tbody td:first-child,article.prose tfoot td:first-child {
                padding-inline-start:0}

            article.prose thead th:last-child,article.prose tbody td:last-child,article.prose tfoot td:last-child {
                padding-inline-end:0}

            article.prose thead {
                box-shadow: 0 1px #ffffffbf,0 1px
            }

            article.prose tbody tr {
                box-shadow: 0 1px #ffffffd9,0 1px
            }

            article.prose hr {
                opacity: .3;
                margin: 3em 0
            }
        </style>
    </head>
    <body id="_">
        <div id="Desktop_2">
        <div id="nighttime_nature_landscape_galaxy_mountain_water_star_beauty_generative_ai_2" class="pointer-events-none">
    <img src="https://gisele-ikwtmtdrdw.figweb.site/cdn-cgi/imagedelivery/s-dfVpmPR-aKHmwFNwAgnQ/gisele-ikwtmtdrdw.figweb.site-c0bb288359a66d715a8d4792c8c7422de583a1f8/w=3584" 
         alt="Random landscape slideshow" 
         id="landscape-slideshow-2"
         class="slideshow-image"
         fetchpriority="high" 
         decoding="async">
</div>

<style>
    /* Custom dimensions: width 1440px, height 406px */
    #nighttime_nature_landscape_galaxy_mountain_water_star_beauty_generative_ai_2 {
        --f2w-order: 0;
        width: 1440px;
        height: 406px;
        position: absolute;
        top: 0;
        left: 0;
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
        
        const slideshowContainer = document.getElementById('nighttime_nature_landscape_galaxy_mountain_water_star_beauty_generative_ai_2');
        
        // Create two image elements for smooth transitions
        const img1 = document.createElement('img');
        const img2 = document.createElement('img');
        
        img1.className = 'slideshow-image';
        img2.className = 'slideshow-image';
        img1.alt = 'Landscape slideshow';
        img2.alt = 'Landscape slideshow';
        img1.loading = 'lazy';
        img2.loading = 'lazy';
        img1.decoding = 'async';
        img2.decoding = 'async';
        
        // Remove the original static image
        const originalImg = document.getElementById('landscape-slideshow-2');
        if (originalImg) {
            slideshowContainer.removeChild(originalImg);
        }
        
        slideshowContainer.appendChild(img1);
        slideshowContainer.appendChild(img2);
        
        let currentPhotoIndex = 0;
        let activeImg = img1;
        let nextImg = img2;
        let isFirstImage = true;
        
        // Preload all images
        landscapePhotos.forEach(url => {
            new Image().src = url;
        });
        
        function changePhoto() {
            let newIndex;
            // Ensure we get a different random image
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
                activeImg.src = landscapePhotos[currentPhotoIndex];
                activeImg.classList.add('active');
                isFirstImage = false;
            }
        }
        
        // Initialize first image
        changePhoto();
        
        // Change image every 10 seconds
        setInterval(changePhoto, 10000);
        
        // Optional: Change photo on click for testing
        slideshowContainer.addEventListener('click', changePhoto);
    });
</script>
            <div class="nav-container">
                <a href="dashboard" class="btn-link" id="_5_13">
                    <span id="__3" class="btn">Beranda</span>
                </a>
                <a href="informasi" class="btn-link" id="_5_14">
                    <span id="__4" class="btn">Informasi</span>
                </a>
                <a href="pustakawan" class="btn-link" id="_5_16">
                    <span id="__3" class="btn">Pustakawan</span>
                </a>
                <a href="bantuan" class="btn-link" id="_5_18">
                    <span id="__4" class="btn">Bantuan</span>
                </a>
                <a href="dashboard">
                    <span id="_7_12">
                        <span id="_7" class="text">Gunakan Waktu Luangmu untuk membaca!</span>
                    </span>
                </a>
                <a href="dashboard">
                    <span id="_7_10">
                        <span id="__5" class="text">Perpustakaan SMK NEGERI 1 CIMAHI</span>
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
            <span id="_7_10" class="pointer-events-none">
                <span id="__5" class="text">Perpustakaan SMK NEGERI 1 CIMAHI</span>
            </span>
            <span id="_7_12" class="pointer-events-none">
                <span id="__7" class="text">Gunakan Waktu Luangmu untuk membaca!</span>
            </span>
            <div id="images_removebg_preview_1" class="pointer-events-none">
                <img src="https://gisele-ikwtmtdrdw.figweb.site/cdn-cgi/imagedelivery/s-dfVpmPR-aKHmwFNwAgnQ/gisele-ikwtmtdrdw.figweb.site-913bb9938b495178d17ab48c55f81e3bf9851d54/h=132" alt="images-removebg-preview 1" id="__8" fetchpriority="high" decoding="async">
            </div>
            <span id="_7_14" class="pointer-events-none">
                <span id="__9" class="text">Informasi</span>
            </span>
            <span id="_7_15" class="pointer-events-none">
                <span id="__10" class="text">Informasi Perpustakaan SMKN 1 Cimahi</span>
            </span>
            <div id="Rectangle_23_0" class="pointer-events-none"></div>
            <span id="_7_17" class="pointer-events-none">
                <span id="__11" class="text">Perpustakaan SMKN 1 Cimahi</span>
            </span>
            <div id="Group_16">
                <span id="_7_19" class="pointer-events-none">
                    <span id="__12" class="text">Informasi Perpustakaan</span>
                </span>
                <span id="_7_20" class="pointer-events-none">
                    <span id="__13" class="text">Pelayanan Perpustakaan</span>
                </span>
                <span id="_7_21" class="pointer-events-none">
                    <span id="__14" class="text">Koleksi</span>
                </span>
                <span id="_7_22" class="pointer-events-none">
                    <span id="__15" class="text">Keanggotaan Perpustakaan</span>
                </span>
                <span id="_7_23" class="pointer-events-none">
                    <span id="__16" class="text">Alamat:<br id="__17">Jalan Raya Pucang No.132, Bawang, Banjarnegara - Kode Pos 53471<br id="__18">Telepon :<br id="__19">(0286) 591407<br id="__20">Fax Number :<br id="__21">(0286) 591407
                    </span>
                </span>
                <span id="_7_24" class="pointer-events-none">
                    <span id="__22" class="text">Senin - Kamis :<br id="__23">Open : 07.00 AM<br id="__24">Close : 15.30 PM<br id="__25"><br id="__26">Jumat :<br id="__27">Open : 07.00 AM<br id="__28">Close : 14.00 AM
                    </span>
                </span>
                <span id="_7_25" class="pointer-events-none">
                    <span id="__29" class="text">Kami memiliki pelbagai koleksi di perpustakaan seperti fiksi hingga buku pengetahuan, <br id="__30">dari materi tercetak hingga materi digital seperti CD-ROM, DVD, dan buku elektronik. <br id="__31">Perpustakaan juga memiliki koleksi serial seperti koran, jurnal, dan majalah.
                    </span>
                </span>
                <span id="_7_26" class="pointer-events-none">
                    <span id="__32" class="text">Agar dapat melakukan transaksi di perpustakaan, Anda harus menjadi anggota perpustakaan terlebih dahulu. Silahkan menghubungi pustakawan untuk melakukan pendaftaran.</span>
                </span>
            </div>
            <div id="Line_5" class="pointer-events-none"></div>
            <div id="Rectangle_24" class="pointer-events-none"></div>
            <div id="Rectangle_25" class="pointer-events-none"></div>
            <span id="_7_30" class="pointer-events-none">
                <span id="__33" class="text">Perpustakaan SMKN 1 Cimahi melayani layanan sirkulasi peminjaman koleksi perpustakaan untuk keluarga besar SMK Negeri 1 Cimahi.Telp. (0286) 591407Fax. (021) 9172638</span>
            </span>
            <span id="_7_31" class="pointer-events-none">
                <span id="__34" class="text">Perpustakaan SMKN 1 CIMAHI</span>
            </span>
            <div id="Rectangle_26" class="pointer-events-none"></div>
            <div id="Rectangle_27" class="pointer-events-none"></div>
            <div id="Rectangle_28" class="pointer-events-none"></div>
            <div id="Rectangle_21" class="pointer-events-none"></div>
            <div id="_79f5e9b0_fc46_481d_8991_348acb29f8fb_removalai_preview_1" class="pointer-events-none">
                <img src="https://gisele-ikwtmtdrdw.figweb.site/cdn-cgi/imagedelivery/s-dfVpmPR-aKHmwFNwAgnQ/gisele-ikwtmtdrdw.figweb.site-913bb9938b495178d17ab48c55f81e3bf9851d54/w=214" alt="79f5e9b0-fc46-481d-8991-348acb29f8fb_removalai_preview 1" id="__35" loading="lazy" decoding="async">
            </div>
            <span id="_7_37" class="pointer-events-none">
                <span id="__36" class="text">PERPUSTAKAAN SMKN 1 CIMAHI</span>
            </span>
            <span id="_7_38" class="pointer-events-none">
                <span id="__37" class="text">Informasi</span>
            </span>
            <span id="_7_39" class="pointer-events-none">
                <span id="__38" class="text">Bantuan</span>
            </span>
            <span id="_7_40" class="pointer-events-none">
                <span id="__39" class="text">Pustakawan</span>
            </span>
            <span id="_7_41" class="pointer-events-none">
                <span id="__40" class="text">© 2025 — Senayan Developer Community</span>
            </span>
            <span id="_7_42" class="pointer-events-none">
                <span id="__41" class="text">Tentang Kami</span>
            </span>
            <span id="_7_43" class="pointer-events-none">
                <span id="__42" class="text">Social Media</span>
            </span>
            <span id="_7_44" class="pointer-events-none">
                <span id="__43" class="text">Instagram</span>
            </span>
            <span id="_7_45" class="pointer-events-none">
                <span id="__44" class="text">Youtube</span>
            </span>
            <span id="_7_46" class="pointer-events-none">
                <span id="__45" class="text">Lorem Ipsum</span>
            </span>
            <span id="_7_47" class="pointer-events-none">
                <span id="__46" class="text">SMK NEGERI 1 CIMAHI</span>
            </span>
            <span id="_7_48" class="pointer-events-none">
                <span id="__47" class="text">SMK NEGERI 1 CIMAHI</span>
            </span>
            <div id="fa0059f1_f667_49c0_bf3d_fcb8d2496f04_removalai_preview_1" class="pointer-events-none">
                <img src="https://gisele-ikwtmtdrdw.figweb.site/cdn-cgi/imagedelivery/s-dfVpmPR-aKHmwFNwAgnQ/gisele-ikwtmtdrdw.figweb.site-153dda55ec665c0aba0b0f4b090f07472efef591/h=214" alt="fa0059f1-f667-49c0-bf3d-fcb8d2496f04_removalai_preview 1" id="__48" loading="lazy" decoding="async">
            </div>
            <div id="fa0059f1_f667_49c0_bf3d_fcb8d2496f04_removalai_preview_2" class="pointer-events-none">
                <img src="https://gisele-ikwtmtdrdw.figweb.site/cdn-cgi/imagedelivery/s-dfVpmPR-aKHmwFNwAgnQ/gisele-ikwtmtdrdw.figweb.site-46ff4e419d22c9c77f905b11b01f03e0c30c3f3a/h=214" alt="fa0059f1-f667-49c0-bf3d-fcb8d2496f04_removalai_preview 2" id="__49" loading="lazy" decoding="async">
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
