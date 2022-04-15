
// Copyright 2012 Google Inc. All rights reserved.
(function () {

    var data = {
        "resource": {
            "version": "1",

            "macros": [{ "function": "__e" }, { "function": "__cid" }],
            "tags": [{ "function": "__rep", "once_per_event": true, "vtp_containerId": ["macro", 1], "tag_id": 1 }],
            "predicates": [{ "function": "_eq", "arg0": ["macro", 0], "arg1": "gtm.js" }],
            "rules": [[["if", 0], ["add", 0]]]
        },
        "runtime": []




    };


    /*
    
     Copyright The Closure Library Authors.
     SPDX-License-Identifier: Apache-2.0
    */
    var h, aa = function (a) { var b = 0; return function () { return b < a.length ? { done: !1, value: a[b++] } : { done: !0 } } }, ba = "function" == typeof Object.create ? Object.create : function (a) { var b = function () { }; b.prototype = a; return new b }, ca; if ("function" == typeof Object.setPrototypeOf) ca = Object.setPrototypeOf; else { var ea; a: { var fa = { a: !0 }, ha = {}; try { ha.__proto__ = fa; ea = ha.a; break a } catch (a) { } ea = !1 } ca = ea ? function (a, b) { a.__proto__ = b; if (a.__proto__ !== b) throw new TypeError(a + " is not extensible"); return a } : null }
    var ia = ca, ja = function (a, b) { a.prototype = ba(b.prototype); a.prototype.constructor = a; if (ia) ia(a, b); else for (var c in b) if ("prototype" != c) if (Object.defineProperties) { var d = Object.getOwnPropertyDescriptor(b, c); d && Object.defineProperty(a, c, d) } else a[c] = b[c]; a.gk = b.prototype }, ka = this || self, la = function (a) { return a }; var na = function () { }, oa = function (a) { return "function" === typeof a }, k = function (a) { return "string" === typeof a }, pa = function (a) { return "number" === typeof a && !isNaN(a) }, qa = Array.isArray, ra = function (a, b) { if (a && qa(a)) for (var c = 0; c < a.length; c++)if (a[c] && b(a[c])) return a[c] }, ta = function (a, b) { if (!pa(a) || !pa(b) || a > b) a = 0, b = 2147483647; return Math.floor(Math.random() * (b - a + 1) + a) }, va = function (a, b) { for (var c = new ua, d = 0; d < a.length; d++)c.set(a[d], !0); for (var e = 0; e < b.length; e++)if (c.get(b[e])) return !0; return !1 }, xa = function (a,
        b) { for (var c in a) Object.prototype.hasOwnProperty.call(a, c) && b(c, a[c]) }, ya = function (a) { return !!a && ("[object Arguments]" === Object.prototype.toString.call(a) || Object.prototype.hasOwnProperty.call(a, "callee")) }, za = function (a) { return Math.round(Number(a)) || 0 }, Aa = function (a) { return "false" === String(a).toLowerCase() ? !1 : !!a }, Ba = function (a) { var b = []; if (qa(a)) for (var c = 0; c < a.length; c++)b.push(String(a[c])); return b }, Ca = function (a) { return a ? a.replace(/^\s+|\s+$/g, "") : "" }, Da = function () { return new Date(Date.now()) },
        A = function () { return Da().getTime() }, ua = function () { this.prefix = "gtm."; this.values = {} }; ua.prototype.set = function (a, b) { this.values[this.prefix + a] = b }; ua.prototype.get = function (a) { return this.values[this.prefix + a] };
    var Fa = function (a, b, c) { return a && a.hasOwnProperty(b) ? a[b] : c }, Ga = function (a) { var b = a; return function () { if (b) { var c = b; b = void 0; try { c() } catch (d) { } } } }, Ha = function (a, b) { for (var c in b) b.hasOwnProperty(c) && (a[c] = b[c]) }, Ia = function (a) { for (var b in a) if (a.hasOwnProperty(b)) return !0; return !1 }, Ja = function (a, b) { for (var c = [], d = 0; d < a.length; d++)c.push(a[d]), c.push.apply(c, b[a[d]] || []); return c }, Ka = function (a, b) { for (var c = {}, d = c, e = a.split("."), f = 0; f < e.length - 1; f++)d = d[e[f]] = {}; d[e[e.length - 1]] = b; return c }, La = /^\w{1,9}$/,
        Ma = function (a, b) { a = a || {}; b = b || ","; var c = []; xa(a, function (d, e) { La.test(d) && e && c.push(d) }); return c.join(b) }; var Na, Oa = function () { if (void 0 === Na) { var a = null, b = ka.trustedTypes; if (b && b.createPolicy) { try { a = b.createPolicy("goog#html", { createHTML: la, createScript: la, createScriptURL: la }) } catch (c) { ka.console && ka.console.error(c.message) } Na = a } else Na = a } return Na }; var Qa = function (a, b) { this.m = b === Pa ? a : "" }; Qa.prototype.toString = function () { return this.m + "" }; var Pa = {}; var Ra = /^(?:(?:https?|mailto|ftp):|[^:/?#]*(?:[/?#]|$))/i; function Sa() { var a = ka.navigator; if (a) { var b = a.userAgent; if (b) return b } return "" } function Ta(a) { return -1 != Sa().indexOf(a) }; var Ua = {}, Va = function (a, b, c) { this.m = c === Ua ? a : "" }; Va.prototype.toString = function () { return this.m.toString() }; var Wa = function (a) { return a instanceof Va && a.constructor === Va ? a.m : "type_error:SafeHtml" }, Xa = function (a) { var b = Oa(), c = b ? b.createHTML(a) : a; return new Va(c, null, Ua) };/*
    
     SPDX-License-Identifier: Apache-2.0
    */
    function Ya(a) { if ("script" === a.tagName.toLowerCase()) throw Error("Use setTextContent with a SafeScript."); if ("style" === a.tagName.toLowerCase()) throw Error("Use setTextContent with a SafeStyleSheet."); }; var G = window, H = document, Za = navigator, $a = H.currentScript && H.currentScript.src, ab = function (a, b) { var c = G[a]; G[a] = void 0 === c ? b : c; return G[a] }, bb = function (a, b) { b && (a.addEventListener ? a.onload = b : a.onreadystatechange = function () { a.readyState in { loaded: 1, complete: 1 } && (a.onreadystatechange = null, b()) }) }, cb = { async: 1, nonce: 1, onerror: 1, onload: 1, src: 1, type: 1 }, db = { onload: 1, src: 1, width: 1, height: 1, style: 1 }; function eb(a, b, c) { b && xa(b, function (d, e) { d = d.toLowerCase(); c.hasOwnProperty(d) || a.setAttribute(d, e) }) }
    var fb = function (a, b, c, d) {
        var e = H.createElement("script"); eb(e, d, cb); e.type = "text/javascript"; e.async = !0; var f, g = Oa(), l = g ? g.createScriptURL(a) : a; f = new Qa(l, Pa); e.src = f instanceof Qa && f.constructor === Qa ? f.m : "type_error:TrustedResourceUrl"; var m, p, n, q = null == (n = (p = (e.ownerDocument && e.ownerDocument.defaultView || window).document).querySelector) ? void 0 : n.call(p, "script[nonce]"); (m = q ? q.nonce || q.getAttribute("nonce") || "" : "") && e.setAttribute("nonce", m); bb(e, b); c && (e.onerror = c); var r = H.getElementsByTagName("script")[0] ||
            H.body || H.head; r.parentNode.insertBefore(e, r); return e
    }, gb = function () { if ($a) { var a = $a.toLowerCase(); if (0 === a.indexOf("https://")) return 2; if (0 === a.indexOf("http://")) return 3 } return 1 }, hb = function (a, b, c, d, e) { var f = e, g = !1; f || (f = H.createElement("iframe"), g = !0); eb(f, c, db); d && xa(d, function (m, p) { f.dataset[m] = p }); f.height = "0"; f.width = "0"; f.style.display = "none"; f.style.visibility = "hidden"; if (g) { var l = H.body && H.body.lastChild || H.body || H.head; l.parentNode.insertBefore(f, l) } bb(f, b); void 0 !== a && (f.src = a); return f },
        ib = function (a, b, c) { var d = new Image(1, 1); d.onload = function () { d.onload = null; b && b() }; d.onerror = function () { d.onerror = null; c && c() }; d.src = a; return d }, jb = function (a, b, c, d) { a.addEventListener ? a.addEventListener(b, c, !!d) : a.attachEvent && a.attachEvent("on" + b, c) }, kb = function (a, b, c) { a.removeEventListener ? a.removeEventListener(b, c, !1) : a.detachEvent && a.detachEvent("on" + b, c) }, J = function (a) { G.setTimeout(a, 0) }, lb = function (a, b) { return a && b && a.attributes && a.attributes[b] ? a.attributes[b].value : null }, mb = function (a) {
            var b =
                a.innerText || a.textContent || ""; b && " " != b && (b = b.replace(/^[\s\xa0]+|[\s\xa0]+$/g, "")); b && (b = b.replace(/(\xa0+|\s{2,}|\n|\r\t)/g, " ")); return b
        }, nb = function (a) { var b = H.createElement("div"), c = b, d = Xa("A<div>" + a + "</div>"); void 0 !== c.tagName && Ya(c); c.innerHTML = Wa(d); b = b.lastChild; for (var e = []; b.firstChild;)e.push(b.removeChild(b.firstChild)); return e }, ob = function (a, b, c) { c = c || 100; for (var d = {}, e = 0; e < b.length; e++)d[b[e]] = !0; for (var f = a, g = 0; f && g <= c; g++) { if (d[String(f.tagName).toLowerCase()]) return f; f = f.parentElement } return null },
        pb = function (a) { var b; try { b = Za.sendBeacon && Za.sendBeacon(a) } catch (c) { } b || ib(a) }, qb = function (a, b) { var c = a[b]; c && "string" === typeof c.animVal && (c = c.animVal); return c }, rb = function (a) { var b = H.featurePolicy; return b && oa(b.allowsFeature) ? b.allowsFeature(a) : !1 };/*
     jQuery (c) 2005, 2012 jQuery Foundation, Inc. jquery.org/license. */
    var sb = /\[object (Boolean|Number|String|Function|Array|Date|RegExp)\]/, tb = function (a) { if (null == a) return String(a); var b = sb.exec(Object.prototype.toString.call(Object(a))); return b ? b[1].toLowerCase() : "object" }, ub = function (a, b) { return Object.prototype.hasOwnProperty.call(Object(a), b) }, vb = function (a) {
        if (!a || "object" != tb(a) || a.nodeType || a == a.window) return !1; try { if (a.constructor && !ub(a, "constructor") && !ub(a.constructor.prototype, "isPrototypeOf")) return !1 } catch (c) { return !1 } for (var b in a); return void 0 ===
            b || ub(a, b)
    }, P = function (a, b) { var c = b || ("array" == tb(a) ? [] : {}), d; for (d in a) if (ub(a, d)) { var e = a[d]; "array" == tb(e) ? ("array" != tb(c[d]) && (c[d] = []), c[d] = P(e, c[d])) : vb(e) ? (vb(c[d]) || (c[d] = {}), c[d] = P(e, c[d])) : c[d] = e } return c }; var wb = function (a) { if (void 0 === a || qa(a) || vb(a)) return !0; switch (typeof a) { case "boolean": case "number": case "string": case "function": return !0 }return !1 }; var xb = function () {
        var a = function (b) { return { toString: function () { return b } } }; return {
            nh: a("consent"), oh: a("consent_always_fire"), qf: a("convert_case_to"), rf: a("convert_false_to"), sf: a("convert_null_to"), tf: a("convert_true_to"), uf: a("convert_undefined_to"), Oj: a("debug_mode_metadata"), tb: a("function"), Xh: a("instance_name"), ai: a("live_only"), bi: a("malware_disabled"), ci: a("metadata"), hi: a("original_activity_id"), Tj: a("original_vendor_template_id"), Sj: a("once_on_load"), gi: a("once_per_event"), Xf: a("once_per_load"),
            Vj: a("priority_override"), Wj: a("respected_consent_types"), ag: a("setup_tags"), cg: a("tag_id"), dg: a("teardown_tags")
        }
    }(); var Ub;
    var Vb = [], Wb = [], Xb = [], Yb = [], Zb = [], bc = {}, cc, dc, ec, fc = function (a, b) {
        var c = a["function"], d = b && b.event; if (!c) throw Error("Error: No function name given for function call."); var e = bc[c], f = {}, g; for (g in a) if (a.hasOwnProperty(g)) if (0 === g.indexOf("vtp_")) e && d && d.sg && d.sg(a[g]), f[void 0 !== e ? g : g.substr(4)] = a[g]; else if (g === xb.oh.toString() && a[g]) { } e && d && d.rg && (f.vtp_gtmCachedValues = d.rg);
        e && b && (f.vtp_gtmEntityIndex = b.index); return void 0 !== e ? e(f) : Ub(c, f, b)
    }, hc = function (a, b, c) { c = c || []; var d = {}, e; for (e in a) a.hasOwnProperty(e) && (d[e] = gc(a[e], b, c)); return d }, gc = function (a, b, c) {
        if (qa(a)) {
            var d; switch (a[0]) {
                case "function_id": return a[1]; case "list": d = []; for (var e = 1; e < a.length; e++)d.push(gc(a[e], b, c)); return d; case "macro": var f = a[1]; if (c[f]) return; var g = Vb[f]; if (!g || b.Ve(g)) return; c[f] = !0; try {
                    var l = hc(g, b, c); l.vtp_gtmEventId = b.id; b.priorityId && (l.vtp_gtmPriorityId = b.priorityId); d = fc(l,
                        { event: b, index: f, type: 2 }); ec && (d = ec.xi(d, l))
                } catch (x) { b.Lg && b.Lg(x, Number(f)), d = !1 } c[f] = !1; return d; case "map": d = {}; for (var m = 1; m < a.length; m += 2)d[gc(a[m], b, c)] = gc(a[m + 1], b, c); return d; case "template": d = []; for (var p = !1, n = 1; n < a.length; n++) { var q = gc(a[n], b, c); dc && (p = p || q === dc.pd); d.push(q) } return dc && p ? dc.Ci(d) : d.join(""); case "escape": d = gc(a[1], b, c); if (dc && qa(a[1]) && "macro" === a[1][0] && dc.Xi(a)) return dc.nj(d); d = String(d); for (var r = 2; r < a.length; r++)yb[a[r]] && (d = yb[a[r]](d)); return d; case "tag": var t =
                    a[1]; if (!Yb[t]) throw Error("Unable to resolve tag reference " + t + "."); return d = { zg: a[2], index: t }; case "zb": var u = { arg0: a[2], arg1: a[3], ignore_case: a[5] }; u["function"] = a[1]; var v = ic(u, b, c), y = !!a[4]; return y || 2 !== v ? y !== (1 === v) : null; default: throw Error("Attempting to expand unknown Value type: " + a[0] + ".");
            }
        } return a
    }, ic = function (a, b, c) { try { return cc(hc(a, b, c)) } catch (d) { JSON.stringify(a) } return 2 }; var lc = function (a) { function b(r) { for (var t = 0; t < r.length; t++)d[r[t]] = !0 } for (var c = [], d = [], e = jc(a), f = 0; f < Wb.length; f++) { var g = Wb[f], l = kc(g, e); if (l) { for (var m = g.add || [], p = 0; p < m.length; p++)c[m[p]] = !0; b(g.block || []) } else null === l && b(g.block || []); } for (var n = [], q = 0; q < Yb.length; q++)c[q] && !d[q] && (n[q] = !0); return n }, kc = function (a, b) {
        for (var c = a["if"] || [], d = 0; d < c.length; d++) { var e = b(c[d]); if (0 === e) return !1; if (2 === e) return null } for (var f =
            a.unless || [], g = 0; g < f.length; g++) { var l = b(f[g]); if (2 === l) return null; if (1 === l) return !1 } return !0
    }, jc = function (a) { var b = []; return function (c) { void 0 === b[c] && (b[c] = ic(Xb[c], a)); return b[c] } }; var mc = { xi: function (a, b) { b[xb.qf] && "string" === typeof a && (a = 1 == b[xb.qf] ? a.toLowerCase() : a.toUpperCase()); b.hasOwnProperty(xb.sf) && null === a && (a = b[xb.sf]); b.hasOwnProperty(xb.uf) && void 0 === a && (a = b[xb.uf]); b.hasOwnProperty(xb.tf) && !0 === a && (a = b[xb.tf]); b.hasOwnProperty(xb.rf) && !1 === a && (a = b[xb.rf]); return a } };

    var R = {
        sb: "_ee", Gc: "_syn_or_mod", Xj: "_uei", Yj: "_upi", Ec: "_eu", Uj: "_pci", Wf: "_is_passthrough_cid", Vf: "_is_linker_valid", De: "_ntg", Mb: "event_callback", dd: "event_timeout", Ca: "gtag.config", Ia: "gtag.get", qa: "purchase", Jb: "refund", lb: "begin_checkout", Gb: "add_to_cart", Hb: "remove_from_cart", xh: "view_cart", wf: "add_to_wishlist", ra: "view_item", Ib: "view_promotion", $d: "select_promotion", Zd: "select_item", nb: "view_item_list", vf: "add_payment_info", wh: "add_shipping_info", Ra: "value_key", ab: "value_callback", X: "allow_ad_personalization_signals",
        Ac: "restricted_data_processing", ic: "allow_google_signals", wa: "cookie_expires", Lb: "cookie_update", Bc: "session_duration", jd: "session_engaged_time", bd: "engagement_time_msec", Fa: "user_properties", V: "transport_url", ba: "ads_data_redaction", ya: "user_data", vc: "first_party_collection", D: "ad_storage", K: "analytics_storage", nf: "region", pf: "wait_for_update", va: "conversion_linker", Ja: "conversion_cookie_prefix", ia: "value", da: "currency", Qf: "trip_type", Z: "items", Hf: "passengers", ce: "allow_custom_scripts", rb: "session_id",
        Mf: "quantity", fb: "transaction_id", eb: "language", ad: "country", $c: "allow_enhanced_conversions", ie: "aw_merchant_id", fe: "aw_feed_country", he: "aw_feed_language", ee: "discount", T: "developer_id", Ef: "global_developer_id_string", Cf: "event_developer_id_string", kd: "delivery_postal_code", pe: "estimated_delivery_date", ne: "shipping", ue: "new_customer", je: "customer_lifetime_value", oe: "enhanced_conversions", hc: "page_view", la: "linker", M: "domains", Ob: "decorate_forms", Bf: "enhanced_conversions_automatic_settings", Eh: "auto_detection_enabled",
        se: "ga_temp_client_id", ae: "user_engagement", rh: "app_remove", sh: "app_store_refund", th: "app_store_subscription_cancel", uh: "app_store_subscription_convert", vh: "app_store_subscription_renew", yh: "first_open", zh: "first_visit", Ah: "in_app_purchase", Bh: "session_start", Ch: "allow_display_features", Qa: "campaign", jc: "campaign_content", kc: "campaign_id", mc: "campaign_medium", nc: "campaign_name", oc: "campaign_source", qc: "campaign_term", ja: "client_id", ka: "cookie_domain", Kb: "cookie_name", Za: "cookie_path", Ka: "cookie_flags",
        sc: "custom_map", gd: "groups", Gf: "non_interaction", Sa: "page_location", ve: "page_path", La: "page_referrer", zc: "page_title", xa: "send_page_view", qb: "send_to", Cc: "session_engaged", uc: "euid_logged_in_state", Dc: "session_number", Uh: "tracking_id", hb: "url_passthrough", Nb: "accept_incoming", yc: "url_position", Kf: "phone_conversion_number", If: "phone_conversion_callback", Jf: "phone_conversion_css_class", Lf: "phone_conversion_options", Ph: "phone_conversion_ids", Oh: "phone_conversion_country_code", ob: "aw_remarketing", de: "aw_remarketing_only",
        be: "gclid", Dh: "auid", Jh: "affiliation", Af: "tax", me: "list_name", zf: "checkout_step", yf: "checkout_option", Kh: "coupon", Lh: "promotions", Ea: "user_id", Sh: "retoken", Da: "cookie_prefix", xf: "disable_merchant_reported_purchases", Ih: "dc_natural_search", Hh: "dc_custom_params", Ff: "method", Th: "search_term", Gh: "content_type", Nh: "optimize_id", Mh: "experiments", cb: "google_signals"
    };
    R.fd = "google_tld"; R.md = "update"; R.qe = "firebase_id"; R.wc = "ga_restrict_domain"; R.cd = "event_settings"; R.ke = "dynamic_event_settings"; R.Pb = "user_data_settings"; R.Of = "screen_name"; R.xe = "screen_resolution"; R.pb = "_x_19"; R.$a = "enhanced_client_id"; R.ed = "_x_20"; R.te = "internal_traffic_results"; R.ld = "traffic_type"; R.hd = "referral_exclusion_definition"; R.xc = "ignore_referrer"; R.Fh = "content_group"; R.sa = "allow_interest_groups"; R.we = "redact_device_info", R.Df = "geo_granularity"; var Kc = {}; R.Tf = Object.freeze((Kc[R.vf] = 1, Kc[R.wh] = 1, Kc[R.Gb] = 1, Kc[R.Hb] = 1, Kc[R.xh] = 1, Kc[R.lb] = 1, Kc[R.Zd] = 1, Kc[R.nb] = 1, Kc[R.$d] = 1, Kc[R.Ib] = 1, Kc[R.qa] = 1, Kc[R.Jb] = 1, Kc[R.ra] = 1, Kc[R.wf] = 1, Kc)); R.ze = Object.freeze([R.X, R.ic, R.Lb]); R.ei = Object.freeze([].concat(R.ze)); R.Ae = Object.freeze([R.wa, R.dd, R.Bc, R.jd, R.bd]); R.fi = Object.freeze([].concat(R.Ae));
    var Lc = {}; R.Xd = (Lc[R.D] = "1", Lc[R.K] = "2", Lc);
    var Mc = {}; R.lf = Object.freeze((Mc[R.X] = 1, Mc[R.$c] = 1, Mc[R.sa] = 1, Mc[R.ob] = 1, Mc[R.de] = 1, Mc[R.ee] = 1, Mc[R.fe] = 1, Mc[R.he] = 1, Mc[R.Z] = 1, Mc[R.ie] = 1, Mc[R.Ja] = 1, Mc[R.va] = 1, Mc[R.ka] = 1, Mc[R.wa] = 1, Mc[R.Ka] = 1, Mc[R.Da] = 1, Mc[R.da] = 1, Mc[R.je] = 1, Mc[R.T] = 1, Mc[R.xf] = 1, Mc[R.oe] = 1, Mc[R.pe] = 1, Mc[R.qe] = 1, Mc[R.vc] = 1, Mc[R.eb] = 1, Mc[R.ue] = 1, Mc[R.Sa] = 1, Mc[R.La] = 1, Mc[R.If] = 1, Mc[R.Jf] = 1, Mc[R.Kf] = 1, Mc[R.Lf] = 1, Mc[R.Ac] = 1, Mc[R.xa] = 1, Mc[R.qb] = 1, Mc[R.kd] = 1, Mc[R.fb] = 1, Mc[R.V] = 1, Mc[R.md] = 1, Mc[R.hb] = 1, Mc[R.ya] = 1, Mc[R.Ea] = 1, Mc[R.ia] = 1, Mc));
    var Nc = { Bi: "IN", uj: "IN-GJ" }; var Oc = {}, Pc = function (a, b) { Oc[a] = Oc[a] || []; Oc[a][b] = !0 }, Qc = function (a) { for (var b = [], c = Oc[a] || [], d = 0; d < c.length; d++)c[d] && (b[Math.floor(d / 6)] ^= 1 << d % 6); for (var e = 0; e < b.length; e++)b[e] = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-_".charAt(b[e] || 0); return b.join("") }, Uc = function () { for (var a = [], b = Oc.GA4_EVENT || [], c = 0; c < b.length; c++)b[c] && a.push(c); return 0 < a.length ? a : void 0 }; var S = function (a) { Pc("GTM", a) }; var Vc = new function (a, b) { this.m = a; this.defaultValue = void 0 === b ? !1 : b }(1933); var Xc = function () { var a = Wc, b = "Te"; if (a.Te && a.hasOwnProperty(b)) return a.Te; var c = new a; a.Te = c; a.hasOwnProperty(b); return c }; var Wc = function () { var a = {}; this.m = function () { var b = Vc.m, c = Vc.defaultValue; return null != a[b] ? a[b] : c }; this.o = function () { a[Vc.m] = !0 } }; var Yc = []; function Zc() { var a = ab("google_tag_data", {}); a.ics || (a.ics = { entries: {}, set: $c, update: ad, addListener: bd, notifyListeners: cd, active: !1, usedDefault: !1, usedUpdate: !1, accessedDefault: !1, accessedAny: !1, wasSetLate: !1 }); return a.ics }
    function $c(a, b, c, d, e, f) {
        var g = Zc(); g.usedDefault || !g.accessedDefault && !g.accessedAny || (g.wasSetLate = !0); g.active = !0; g.usedDefault = !0; if (void 0 != b) {
            var l = g.entries, m = l[a] || {}, p = m.region, n = c && k(c) ? c.toUpperCase() : void 0; d = d.toUpperCase(); e = e.toUpperCase(); if ("" === d || n === e || (n === d ? p !== e : !n && !p)) {
                var q = !!(f && 0 < f && void 0 === m.update), r = { region: n, initial: "granted" === b, update: m.update, quiet: q }; if ("" !== d || !1 !== m.initial) l[a] = r; q && G.setTimeout(function () {
                    l[a] === r && r.quiet && (r.quiet = !1, dd(a), cd(), Pc("TAGGING",
                        2))
                }, f)
            }
        }
    } function ad(a, b) { var c = Zc(); c.usedDefault || c.usedUpdate || !c.accessedAny || (c.wasSetLate = !0); c.active = !0; c.usedUpdate = !0; if (void 0 != b) { var d = ed(c, a), e = c.entries, f = e[a] = e[a] || {}; f.update = "granted" === b; var g = ed(c, a); f.quiet ? (f.quiet = !1, dd(a)) : g !== d && dd(a) } } function bd(a, b) { Yc.push({ Ne: a, Ki: b }) } function dd(a) { for (var b = 0; b < Yc.length; ++b) { var c = Yc[b]; qa(c.Ne) && -1 !== c.Ne.indexOf(a) && (c.Rg = !0) } }
    function cd(a, b) { for (var c = 0; c < Yc.length; ++c) { var d = Yc[c]; if (d.Rg) { d.Rg = !1; try { d.Ki({ consentEventId: a, consentPriorityId: b }) } catch (e) { } } } } function ed(a, b) { var c = a.entries[b] || {}; return void 0 !== c.update ? c.update : c.initial }
    var fd = function (a) { var b = Zc(); b.accessedAny = !0; return ed(b, a) }, gd = function (a) { var b = Zc(); b.accessedDefault = !0; return (b.entries[a] || {}).initial }, hd = function (a) { var b = Zc(); b.accessedAny = !0; return !(b.entries[a] || {}).quiet }, id = function () { if (!Xc().m()) return !1; var a = Zc(); a.accessedAny = !0; return a.active }, jd = function () { var a = Zc(); a.accessedDefault = !0; return a.usedDefault }, kd = function (a, b) { Zc().addListener(a, b) }, ld = function (a, b) { Zc().notifyListeners(a, b) }, md = function (a, b) {
        function c() {
            for (var e = 0; e < b.length; e++)if (!hd(b[e])) return !0;
            return !1
        } if (c()) { var d = !1; kd(b, function (e) { d || c() || (d = !0, a(e)) }) } else a({})
    }, nd = function (a, b) { function c() { for (var f = [], g = 0; g < d.length; g++) { var l = d[g]; !1 === fd(l) || e[l] || (f.push(l), e[l] = !0) } return f } var d = k(b) ? [b] : b, e = {}; c().length !== d.length && kd(d, function (f) { var g = c(); 0 < g.length && (f.Ne = g, a(f)) }) }; function od() { } function pd() { }; function qd(a) { for (var b = [], c = 0; c < rd.length; c++) { var d = a(rd[c]); b[c] = !0 === d ? "1" : !1 === d ? "0" : "-" } return b.join("") }
    var rd = [R.D, R.K], sd = function (a) { var b = a[R.nf]; b && S(40); var c = a[R.pf]; c && S(41); for (var d = qa(b) ? b : [b], e = { $b: 0 }; e.$b < d.length; e = { $b: e.$b }, ++e.$b)xa(a, function (f) { return function (g, l) { if (g !== R.nf && g !== R.pf) { var m = d[f.$b], p = Nc.Bi, n = Nc.uj; Zc().set(g, l, m, p, n, c) } } }(e)) }, td = 0, ud = function (a, b) { xa(a, function (e, f) { Zc().update(e, f) }); ld(b.eventId, b.priorityId); var c = A(), d = c - td; td && 0 <= d && 1E3 > d && S(66); td = c }, xd = function (a) { var b = fd(a); return void 0 != b ? b : !0 }, yd = function () { return "G1" + qd(fd) }, zd = function (a, b) {
        nd(a,
            b)
    }, Ad = function (a, b) { md(a, b) }; var Cd = function (a) { return Bd ? H.querySelectorAll(a) : null }, Dd = function (a, b) {
        if (!Bd) return null; if (Element.prototype.closest) try { return a.closest(b) } catch (e) { return null } var c = Element.prototype.matches || Element.prototype.webkitMatchesSelector || Element.prototype.mozMatchesSelector || Element.prototype.msMatchesSelector || Element.prototype.oMatchesSelector, d = a; if (!H.documentElement.contains(d)) return null; do { try { if (c.call(d, b)) return d } catch (e) { break } d = d.parentElement || d.parentNode } while (null !== d && 1 === d.nodeType);
        return null
    }, Ed = !1; if (H.querySelectorAll) try { var Fd = H.querySelectorAll(":root"); Fd && 1 == Fd.length && Fd[0] == H.documentElement && (Ed = !0) } catch (a) { } var Bd = Ed;
    var Gd = function (a) { return null == a ? "" : k(a) ? Ca(String(a)) : "e0" }, Id = function (a) { return a.replace(Hd, "") }, Kd = function (a) { return Jd(a.replace(/\s/g, "")) }, Jd = function (a) { return Ca(a.replace(Ld, "").toLowerCase()) }, Nd = function (a) { a = a.replace(/[\s-()/.]/g, ""); "+" !== a.charAt(0) && (a = "+" + a); return Md.test(a) ? a : "e0" }, Pd = function (a) { var b = a.toLowerCase().split("@"); if (2 == b.length) { var c = b[0]; /^(gmail|googlemail)\./.test(b[1]) && (c = c.replace(/\./g, "")); c = c + "@" + b[1]; if (Od.test(c)) return c } return "e0" }, Sd = function (a,
        b) { window.Promise || b([]); Promise.all(a.map(function (c) { return c.value && -1 !== Qd.indexOf(c.name) ? Rd(c.value).then(function (d) { c.value = d }) : Promise.resolve() })).then(function () { b(a) }).catch(function () { b([]) }) }, Rd = function (a) {
            if ("" === a || "e0" === a) return Promise.resolve(a); if (G.crypto && G.crypto.subtle) try {
                var b = Td(a); return G.crypto.subtle.digest("SHA-256", b).then(function (c) {
                    var d = Array.from(new Uint8Array(c)).map(function (e) { return String.fromCharCode(e) }).join(""); return G.btoa(d).replace(/\+/g, "-").replace(/\//g,
                        "_").replace(/=+$/, "")
                }).catch(function () { return "e2" })
            } catch (c) { return Promise.resolve("e2") } else return Promise.resolve("e1")
        }, Td = function (a) { var b; if (G.TextEncoder) b = (new G.TextEncoder("utf-8")).encode(a); else { for (var c = [], d = 0; d < a.length; d++) { var e = a.charCodeAt(d); 128 > e ? c.push(e) : 2048 > e ? c.push(192 | e >> 6, 128 | e & 63) : 55296 > e || 57344 <= e ? c.push(224 | e >> 12, 128 | e >> 6 & 63, 128 | e & 63) : (e = 65536 + ((e & 1023) << 10 | a.charCodeAt(++d) & 1023), c.push(240 | e >> 18, 128 | e >> 12 & 63, 128 | e >> 6 & 63, 128 | e & 63)) } b = new Uint8Array(c) } return b },
        Ld = /[0-9`~!@#$%^&*()_\-+=:;<>,.?|/\\[\]]/g, Od = /^\S+@\S+\.\S+$/, Md = /^\+\d{11,15}$/, Hd = /[.~]/g, Ud = {}, Vd = (Ud.email = "em", Ud.phone_number = "pn", Ud.first_name = "fn", Ud.last_name = "ln", Ud.street = "sa", Ud.city = "ct", Ud.region = "rg", Ud.country = "co", Ud.postal_code = "pc", Ud.error_code = "ec", Ud), Wd = function (a, b) {
            function c(p, n, q) { var r = p[n]; qa(r) || (r = [r]); for (var t = 0; t < r.length; ++t) { var u = Gd(r[t]); "" !== u && f.push({ name: n, value: q(u), index: void 0 }) } } function d(p, n, q, r) { var t = Gd(p[n]); "" !== t && f.push({ name: n, value: q(t), index: r }) }
            function e(p) { return function (n) { S(64); return p(n) } } var f = []; if ("https:" === G.location.protocol) {
                c(a, "email", Pd); c(a, "phone_number", Nd); c(a, "first_name", e(Kd)); c(a, "last_name", e(Kd)); var g = a.home_address || {}; c(g, "street", e(Jd)); c(g, "city", e(Jd)); c(g, "postal_code", e(Id)); c(g, "region", e(Jd)); c(g, "country", e(Id)); var l = a.address || {}; qa(l) || (l = [l]); for (var m = 0; m < l.length; m++)d(l[m], "first_name", Kd, m), d(l[m], "last_name", Kd, m), d(l[m], "street", Jd, m), d(l[m], "city", Jd, m), d(l[m], "postal_code", Id, m), d(l[m], "region",
                    Jd, m), d(l[m], "country", Id, m); Sd(f, b)
            } else f.push({ name: "error_code", value: "e3", index: void 0 }), b(f)
        }, Xd = function (a, b) { Wd(a, function (c) { for (var d = ["tv.1"], e = 0, f = 0; f < c.length; ++f) { var g = c[f].name, l = c[f].value, m = c[f].index, p = Vd[g]; p && l && (-1 === Qd.indexOf(g) || /^e\d+$/.test(l) || /^[0-9A-Za-z_-]{43}$/.test(l)) && (void 0 !== m && (p += m), d.push(p + "." + l), e++) } 1 === c.length && "error_code" === c[0].name && (e = 0); b(encodeURIComponent(d.join("~")), e) }) }, Yd = function (a) {
            if (G.Promise) try {
                return new Promise(function (b) {
                    Xd(a, function (c,
                        d) { b({ Pd: c, dk: d }) })
                })
            } catch (b) { }
        }, Qd = Object.freeze(["email", "phone_number", "first_name", "last_name", "street"]); var Zd = {}, T = G.google_tag_manager = G.google_tag_manager || {}, $d = Math.random(); Zd.wd = "460"; Zd.W = "dataLayer"; Zd.qh = "ChAI8OnZkgYQ2YyS6tGy7ZYGEicAZz98k3DSd6cPrWlGnQ7ZYzxK4syQlNx/OQPOscsCVDYkW2vuAigaAg1Y"; var ae = { __cl: !0, __ecl: !0, __ehl: !0, __evl: !0, __fal: !0, __fil: !0, __fsl: !0, __hl: !0, __jel: !0, __lcl: !0, __sdl: !0, __tl: !0, __ytl: !0 }, be = { __paused: !0, __tg: !0 }, ce; for (ce in ae) ae.hasOwnProperty(ce) && (be[ce] = !0); Zd.fc = "www.googletagmanager.com"; var de, ee = Zd.fc + "/gtm.js"; ee = Zd.fc + "/gtag/js"; de = ee;
    var fe = Aa(""), ge = null, he = null, ie = {}, je = {}, ke = function () { var a = T.sequence || 1; T.sequence = a + 1; return a }; Zd.ph = ""; var le = ""; Zd.xd = le; var me = new ua, ne = {}, oe = {}, re = { name: Zd.W, set: function (a, b) { P(Ka(a, b), ne); pe() }, get: function (a) { return qe(a, 2) }, reset: function () { me = new ua; ne = {}; pe() } }, qe = function (a, b) { return 2 != b ? me.get(a) : se(a) }, se = function (a) { var b, c = a.split("."); b = b || []; for (var d = ne, e = 0; e < c.length; e++) { if (null === d) return !1; if (void 0 === d) break; d = d[c[e]]; if (-1 !== b.indexOf(d)) return } return d }, we = function (a, b) { oe.hasOwnProperty(a) || (me.set(a, b), P(Ka(a, b), ne), pe()) }, pe = function (a) {
        xa(oe, function (b, c) {
            me.set(b, c); P(Ka(b), ne); P(Ka(b,
                c), ne); a && delete oe[b]
        })
    }, xe = function (a, b) { var c, d = 1 !== (void 0 === b ? 2 : b) ? se(a) : me.get(a); "array" === tb(d) || "object" === tb(d) ? c = P(d) : c = d; return c }; var ye, ze = !1, Ae = function (a) { if (!ze) { ze = !0; ye = ye || {} } return ye[a] }; var Be = function (a) {
        if (H.hidden) return !0; var b = a.getBoundingClientRect(); if (b.top == b.bottom || b.left == b.right || !G.getComputedStyle) return !0; var c = G.getComputedStyle(a, null); if ("hidden" === c.visibility) return !0; for (var d = a, e = c; d;) {
            if ("none" === e.display) return !0; var f = e.opacity, g = e.filter; if (g) { var l = g.indexOf("opacity("); 0 <= l && (g = g.substring(l + 8, g.indexOf(")", l)), "%" == g.charAt(g.length - 1) && (g = g.substring(0, g.length - 1)), f = Math.min(g, f)) } if (void 0 !== f && 0 >= f) return !0; (d = d.parentElement) && (e = G.getComputedStyle(d,
                null))
        } return !1
    }; var Ke = /:[0-9]+$/, Le = function (a, b, c) { for (var d = a.split("&"), e = 0; e < d.length; e++) { var f = d[e].split("="); if (decodeURIComponent(f[0]).replace(/\+/g, " ") === b) { var g = f.slice(1).join("="); return c ? g : decodeURIComponent(g).replace(/\+/g, " ") } } }, Oe = function (a, b, c, d, e) {
        b && (b = String(b).toLowerCase()); if ("protocol" === b || "port" === b) a.protocol = Me(a.protocol) || Me(G.location.protocol); "port" === b ? a.port = String(Number(a.hostname ? a.port : G.location.port) || ("http" === a.protocol ? 80 : "https" === a.protocol ? 443 : "")) : "host" ===
            b && (a.hostname = (a.hostname || G.location.hostname).replace(Ke, "").toLowerCase()); return Ne(a, b, c, d, e)
    }, Ne = function (a, b, c, d, e) {
        var f, g = Me(a.protocol); b && (b = String(b).toLowerCase()); switch (b) {
            case "url_no_fragment": f = Pe(a); break; case "protocol": f = g; break; case "host": f = a.hostname.replace(Ke, "").toLowerCase(); if (c) { var l = /^www\d*\./.exec(f); l && l[0] && (f = f.substr(l[0].length)) } break; case "port": f = String(Number(a.port) || ("http" === g ? 80 : "https" === g ? 443 : "")); break; case "path": a.pathname || a.hostname || Pc("TAGGING",
                1); f = "/" === a.pathname.substr(0, 1) ? a.pathname : "/" + a.pathname; var m = f.split("/"); 0 <= (d || []).indexOf(m[m.length - 1]) && (m[m.length - 1] = ""); f = m.join("/"); break; case "query": f = a.search.replace("?", ""); e && (f = Le(f, e)); break; case "extension": var p = a.pathname.split("."); f = 1 < p.length ? p[p.length - 1] : ""; f = f.split("/")[0]; break; case "fragment": f = a.hash.replace("#", ""); break; default: f = a && a.href
        }return f
    }, Me = function (a) { return a ? a.replace(":", "").toLowerCase() : "" }, Pe = function (a) {
        var b = ""; if (a && a.href) {
            var c = a.href.indexOf("#");
            b = 0 > c ? a.href : a.href.substr(0, c)
        } return b
    }, Qe = function (a) { var b = H.createElement("a"); a && (b.href = a); var c = b.pathname; "/" !== c[0] && (a || Pc("TAGGING", 1), c = "/" + c); var d = b.hostname.replace(Ke, ""); return { href: b.href, protocol: b.protocol, host: b.host, hostname: d, pathname: c, search: b.search, hash: b.hash, port: b.port } }, Re = function (a) {
        function b(p) { var n = p.split("=")[0]; return 0 > d.indexOf(n) ? p : n + "=0" } function c(p) { return p.split("&").map(b).filter(function (n) { return void 0 !== n }).join("&") } var d = "gclid dclid gbraid wbraid gclaw gcldc gclha gclgf gclgb _gl".split(" "),
            e = Qe(a), f = a.split(/[?#]/)[0], g = e.search, l = e.hash; "?" === g[0] && (g = g.substring(1)); "#" === l[0] && (l = l.substring(1)); g = c(g); l = c(l); "" !== g && (g = "?" + g); "" !== l && (l = "#" + l); var m = "" + f + g + l; "/" === m[m.length - 1] && (m = m.substring(0, m.length - 1)); return m
    }; var Se = {};
    var Ve = function (a) { if (0 == a.length) return null; var b; b = Te(a, function (c) { return !Ue.test(c.Va) }); b = Te(b, function (c) { return "INPUT" === c.element.tagName.toUpperCase() }); b = Te(b, function (c) { return !Be(c.element) }); return b[0] }, Te = function (a, b) { if (1 >= a.length) return a; var c = a.filter(b); return 0 == c.length ? a : c }, We = function (a) {
        var b; if (a === H.body) b = "body"; else {
            var c; if (a.id) c = "#" + a.id; else {
                var d; if (a.parentElement) {
                    var e; a: {
                        var f = a.parentElement; if (f) {
                            for (var g = 0; g < f.childElementCount; g++)if (f.children[g] === a) {
                                e =
                                g + 1; break a
                            } e = -1
                        } else e = 1
                    } d = We(a.parentElement) + ">:nth-child(" + e + ")"
                } else d = ""; c = d
            } b = c
        } return b
    }, Xe = !0, Ye = !1; Se.lh = "true"; var Ze = new RegExp(/[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}/i), $e = new RegExp(/@(gmail|googlemail)\./i),
        Ue = new RegExp(/support|noreply/i), af = "SCRIPT STYLE IMG SVG PATH BR NOSCRIPT".split(" "), bf = ["BR"], cf = {}, df = function (a) {
            a = a || { Nd: !0, Od: !0 }; a.jb = a.jb || { email: !0, phone: !0, mg: !0 }; var b, c = a, d = !!c.Nd + "." + !!c.Od; c && c.Hd && c.Hd.length && (d += "." + c.Hd.join(".")); c && c.jb && (d += "." + c.jb.email + "." + c.jb.phone + "." + c.jb.mg); b = d; var e = cf[b]; if (e && 200 > A() - e.timestamp) return e.result; var f; var g = [], l = H.body; if (l) {
                for (var m = l.querySelectorAll("*"), p = 0; p < m.length && 1E4 > p; p++) {
                    var n = m[p]; if (!(0 <= af.indexOf(n.tagName.toUpperCase())) &&
                        n.children instanceof HTMLCollection) { for (var q = !1, r = 0; r < n.childElementCount && 1E4 > r; r++)if (!(0 <= bf.indexOf(n.children[r].tagName.toUpperCase()))) { q = !0; break } q || g.push(n) }
                } f = { elements: g, status: 1E4 < m.length ? "2" : "1" }
            } else f = { elements: g, status: "4" }; var t = f, u = t.status, v = [], y; if (a.jb && a.jb.email) {
                for (var x = t.elements, w = [], B = 0; B < x.length; B++) {
                    var z = x[B], D = z.textContent; "INPUT" === z.tagName.toUpperCase() && z.value && (D = z.value); if (D) {
                        var C = D.match(Ze); if (C) {
                            var E = C[0], F; if (G.location) {
                                var M = Ne(G.location, "host",
                                    !0); F = 0 <= E.toLowerCase().indexOf(M)
                            } else F = !1; F || w.push({ element: z, Va: E })
                        }
                    }
                } var I = a && a.Hd; if (I && 0 !== I.length) { for (var O = [], N = 0; N < w.length; N++) { for (var L = !0, K = 0; K < I.length; K++) { var U = I[K]; if (U && Dd(w[N].element, U)) { L = !1; break } } L && O.push(w[N]) } v = O } else v = w; y = Ve(v); 10 < w.length && (u = "3")
            } var V = []; !a.Cj && y && (v = [y]); for (var Q = 0; Q < v.length; Q++) { var da = v[Q].element, sa = { Va: v[Q].Va, tagName: da.tagName, type: 1 }; a.Nd && (sa.querySelector = We(da)); a.Od && (sa.isVisible = !Be(da)); V.push(sa) } var ma = {
                elements: V.slice(0, 10),
                status: u
            }; cf[b] = { timestamp: A(), result: ma }; return ma
        };
    var ef = function (a, b, c) {
        if (c) {
            var d = c.selector_type, e = String(c.value), f; if ("js_variable" === d) { e = e.replace(/\["?'?/g, ".").replace(/"?'?\]/g, ""); for (var g = e.split(","), l = 0; l < g.length; l++) { var m = g[l].trim(); if (m) { if (0 === m.indexOf("dataLayer.")) f = qe(m.substring(10)); else { var p = m.split("."); f = G[p.shift()]; for (var n = 0; n < p.length; n++)f = f && f[p[n]] } if (void 0 !== f) break } } } else if ("css_selector" === d && Bd) {
                var q = Cd(e); if (q && 0 < q.length) {
                    f = []; for (var r = 0; r < q.length && r < ("email" === b || "phone_number" === b ? 5 : 1); r++)f.push(mb(q[r]) ||
                        Ca(q[r].value)); f = 1 === f.length ? f[0] : f
                }
            } f && (a[b] = f)
        }
    }, ff = function (a) { if (a) { var b = {}; ef(b, "email", a.email); ef(b, "phone_number", a.phone); b.address = []; for (var c = a.name_and_address || [], d = 0; d < c.length; d++) { var e = {}; ef(e, "first_name", c[d].first_name); ef(e, "last_name", c[d].last_name); ef(e, "street", c[d].street); ef(e, "city", c[d].city); ef(e, "region", c[d].region); ef(e, "country", c[d].country); ef(e, "postal_code", c[d].postal_code); b.address.push(e) } return b } }, gf = function (a) {
        if (a) switch (a.mode) {
            case "selectors": return ff(a.selectors);
            case "auto_detect": var b; var c = a.auto_detect; if (c) { var d = df({ Nd: !1, Od: !1, Hd: c.exclude_element_selectors, jb: { email: !!c.email, phone: !!c.phone, mg: !!c.address } }).elements, e = {}; if (0 < d.length) for (var f = 0; f < d.length; f++) { var g = d[f]; if (1 === g.type) { e.email = g.Va; break } } b = e } else b = void 0; return b
        }
    }, hf = function (a) { switch (a.enhanced_conversions_mode) { case "manual": var b = a.enhanced_conversions_manual_var; return void 0 !== b ? b : G.enhanced_conversion_data; case "automatic": return ff(a[R.Bf]) } }; var jf = {}, kf = function (a, b) { if (G._gtmexpgrp && G._gtmexpgrp.hasOwnProperty(a)) return G._gtmexpgrp[a]; void 0 === jf[a] && (jf[a] = Math.floor(Math.random() * b)); return jf[a] }; var lf = function (a) { var b = 1, c, d, e; if (a) for (b = 0, d = a.length - 1; 0 <= d; d--)e = a.charCodeAt(d), b = (b << 6 & 268435455) + e + (e << 14), c = b & 266338304, b = 0 !== c ? b ^ c >> 21 : b; return b }; var mf = function (a, b, c) { for (var d = [], e = b.split(";"), f = 0; f < e.length; f++) { var g = e[f].split("="), l = g[0].replace(/^\s*|\s*$/g, ""); if (l && l == a) { var m = g.slice(1).join("=").replace(/^\s*|\s*$/g, ""); m && c && (m = decodeURIComponent(m)); d.push(m) } } return d }; var nf = function (a, b) { var c = function () { }; c.prototype = a.prototype; var d = new c; a.apply(d, Array.prototype.slice.call(arguments, 1)); return d }, of = function (a) { var b = a; return function () { if (b) { var c = b; b = null; c() } } }; function pf(a) { return "null" !== a.origin }; var sf = function (a, b, c, d) { return qf(d) ? mf(a, String(b || rf()), c) : [] }, vf = function (a, b, c, d, e) { if (qf(e)) { var f = tf(a, d, e); if (1 === f.length) return f[0].id; if (0 !== f.length) { f = uf(f, function (g) { return g.Ed }, b); if (1 === f.length) return f[0].id; f = uf(f, function (g) { return g.Oc }, c); return f[0] ? f[0].id : void 0 } } }; function wf(a, b, c, d) { var e = rf(), f = window; pf(f) && (f.document.cookie = a); var g = rf(); return e != g || void 0 != c && 0 <= sf(b, g, !1, d).indexOf(c) }
    var Af = function (a, b, c) {
        function d(t, u, v) { if (null == v) return delete g[u], t; g[u] = v; return t + "; " + u + "=" + v } function e(t, u) { if (null == u) return delete g[u], t; g[u] = !0; return t + "; " + u } if (!qf(c.Ua)) return 2; var f; void 0 == b ? f = a + "=deleted; expires=" + (new Date(0)).toUTCString() : (c.encode && (b = encodeURIComponent(b)), b = xf(b), f = a + "=" + b); var g = {}; f = d(f, "path", c.path); var l; c.expires instanceof Date ? l = c.expires.toUTCString() : null != c.expires && (l = "" + c.expires); f = d(f, "expires", l); f = d(f, "max-age", c.ck); f = d(f, "samesite",
            c.ek); c.fk && (f = e(f, "secure")); var m = c.domain; if (m && "auto" === m.toLowerCase()) { for (var p = yf(), n = 0; n < p.length; ++n) { var q = "none" !== p[n] ? p[n] : void 0, r = d(f, "domain", q); r = e(r, c.flags); if (!zf(q, c.path) && wf(r, a, b, c.Ua)) return 0 } return 1 } m && "none" !== m.toLowerCase() && (f = d(f, "domain", m)); f = e(f, c.flags); return zf(m, c.path) ? 1 : wf(f, a, b, c.Ua) ? 0 : 1
    }, Bf = function (a, b, c) { null == c.path && (c.path = "/"); c.domain || (c.domain = "auto"); return Af(a, b, c) };
    function uf(a, b, c) { for (var d = [], e = [], f, g = 0; g < a.length; g++) { var l = a[g], m = b(l); m === c ? d.push(l) : void 0 === f || m < f ? (e = [l], f = m) : m === f && e.push(l) } return 0 < d.length ? d : e } function tf(a, b, c) { for (var d = [], e = sf(a, void 0, void 0, c), f = 0; f < e.length; f++) { var g = e[f].split("."), l = g.shift(); if (!b || -1 !== b.indexOf(l)) { var m = g.shift(); m && (m = m.split("-"), d.push({ id: g.join("."), Ed: 1 * m[0] || 1, Oc: 1 * m[1] || 1 })) } } return d }
    var xf = function (a) { a && 1200 < a.length && (a = a.substring(0, 1200)); return a }, Cf = /^(www\.)?google(\.com?)?(\.[a-z]{2})?$/, Df = /(^|\.)doubleclick\.net$/i, zf = function (a, b) { return Df.test(window.document.location.hostname) || "/" === b && Cf.test(a) }, rf = function () { return pf(window) ? window.document.cookie : "" }, yf = function () {
        var a = [], b = window.document.location.hostname.split("."); if (4 === b.length) { var c = b[b.length - 1]; if (parseInt(c, 10).toString() === c) return ["none"] } for (var d = b.length - 2; 0 <= d; d--)a.push(b.slice(d).join("."));
        var e = window.document.location.hostname; Df.test(e) || Cf.test(e) || a.push("none"); return a
    }, qf = function (a) { if (!Xc().m() || !a || !id()) return !0; if (!hd(a)) return !1; var b = fd(a); return null == b ? !0 : !!b }; var Ef = function (a) { var b = Math.round(2147483647 * Math.random()); return a ? String(b ^ lf(a) & 2147483647) : String(b) }, Ff = function (a) { return [Ef(a), Math.round(A() / 1E3)].join(".") }, If = function (a, b, c, d, e) { var f = Gf(b); return vf(a, f, Hf(c), d, e) }, Jf = function (a, b, c, d) { var e = "" + Gf(c), f = Hf(d); 1 < f && (e += "-" + f); return [b, e, a].join(".") }, Gf = function (a) { if (!a) return 1; a = 0 === a.indexOf(".") ? a.substr(1) : a; return a.split(".").length }, Hf = function (a) {
        if (!a || "/" === a) return 1; "/" !== a[0] && (a = "/" + a); "/" !== a[a.length - 1] && (a += "/"); return a.split("/").length -
            1
    }; function Kf(a, b, c) { var d, e = Number(null != a.Ab ? a.Ab : void 0); 0 !== e && (d = new Date((b || A()) + 1E3 * (e || 7776E3))); return { path: a.path, domain: a.domain, flags: a.flags, encode: !!c, expires: d } }; var Lf = ["1"], Mf = {}, Nf = {}, Rf = function (a, b) { b = void 0 === b ? !0 : b; var c = Of(a.prefix); if (!Mf[c] && !Pf(c, a.path, a.domain) && b) { var d = Of(a.prefix), e = Ff(); if (0 === Qf(d, e, a)) { var f = ab("google_tag_data", {}); f._gcl_au ? Pc("GTM", 57) : f._gcl_au = e } Pf(c, a.path, a.domain) } }; function Qf(a, b, c, d) { var e = Jf(b, "1", c.domain, c.path), f = Kf(c, d); f.Ua = "ad_storage"; return Bf(a, e, f) }
    function Pf(a, b, c) { var d = If(a, b, c, Lf, "ad_storage"); if (!d) return !1; var e = d.split("."); 5 === e.length ? (Mf[a] = e.slice(0, 2).join("."), Nf[a] = { id: e.slice(2, 4).join("."), Jg: Number(e[4]) || 0 }) : 3 === e.length ? Nf[a] = { id: e.slice(0, 2).join("."), Jg: Number(e[2]) || 0 } : Mf[a] = d; return !0 } function Of(a) { return (a || "_gcl") + "_au" }; var Sf = function (a) { for (var b = [], c = H.cookie.split(";"), d = new RegExp("^\\s*" + (a || "_gac") + "_(UA-\\d+-\\d+)=\\s*(.+?)\\s*$"), e = 0; e < c.length; e++) { var f = c[e].match(d); f && b.push({ jf: f[1], value: f[2], timestamp: Number(f[2].split(".")[1]) || 0 }) } b.sort(function (g, l) { return l.timestamp - g.timestamp }); return b };
    function Tf(a, b) { var c = Sf(a), d = {}; if (!c || !c.length) return d; for (var e = 0; e < c.length; e++) { var f = c[e].value.split("."); if (!("1" !== f[0] || b && 3 > f.length || !b && 3 !== f.length) && Number(f[1])) { d[c[e].jf] || (d[c[e].jf] = []); var g = { version: f[0], timestamp: 1E3 * Number(f[1]), za: f[2] }; b && 3 < f.length && (g.labels = f.slice(3)); d[c[e].jf].push(g) } } return d }; function Uf() { for (var a = Vf, b = {}, c = 0; c < a.length; ++c)b[a[c]] = c; return b } function Wf() { var a = "ABCDEFGHIJKLMNOPQRSTUVWXYZ"; a += a.toLowerCase() + "0123456789-_"; return a + "." } var Vf, Xf;
    function Yf(a) { function b(m) { for (; d < a.length;) { var p = a.charAt(d++), n = Xf[p]; if (null != n) return n; if (!/^[\s\xa0]*$/.test(p)) throw Error("Unknown base64 encoding at char: " + p); } return m } Vf = Vf || Wf(); Xf = Xf || Uf(); for (var c = "", d = 0; ;) { var e = b(-1), f = b(0), g = b(64), l = b(64); if (64 === l && -1 === e) return c; c += String.fromCharCode(e << 2 | f >> 4); 64 != g && (c += String.fromCharCode(f << 4 & 240 | g >> 2), 64 != l && (c += String.fromCharCode(g << 6 & 192 | l))) } }; var Zf; var cg = function () { var a = $f, b = ag, c = bg(), d = function (g) { a(g.target || g.srcElement || {}) }, e = function (g) { b(g.target || g.srcElement || {}) }; if (!c.init) { jb(H, "mousedown", d); jb(H, "keyup", d); jb(H, "submit", e); var f = HTMLFormElement.prototype.submit; HTMLFormElement.prototype.submit = function () { b(this); f.call(this) }; c.init = !0 } }, dg = function (a, b, c, d, e) { var f = { callback: a, domains: b, fragment: 2 === c, placement: c, forms: d, sameHost: e }; bg().decorators.push(f) }, eg = function (a, b, c) {
        for (var d = bg().decorators, e = {}, f = 0; f < d.length; ++f) {
            var g =
                d[f], l; if (l = !c || g.forms) a: { var m = g.domains, p = a, n = !!g.sameHost; if (m && (n || p !== H.location.hostname)) for (var q = 0; q < m.length; q++)if (m[q] instanceof RegExp) { if (m[q].test(p)) { l = !0; break a } } else if (0 <= p.indexOf(m[q]) || n && 0 <= m[q].indexOf(p)) { l = !0; break a } l = !1 } if (l) { var r = g.placement; void 0 == r && (r = g.fragment ? 2 : 1); r === b && Ha(e, g.callback()) }
        } return e
    }; function bg() { var a = ab("google_tag_data", {}), b = a.gl; b && b.decorators || (b = { decorators: [] }, a.gl = b); return b }; var fg = /(.*?)\*(.*?)\*(.*)/, gg = /^https?:\/\/([^\/]*?)\.?cdn\.ampproject\.org\/?(.*)/, hg = /^(?:www\.|m\.|amp\.)+/, ig = /([^?#]+)(\?[^#]*)?(#.*)?/; function qg(a) { return new RegExp("(.*?)(^|&)" + a + "=([^&]*)&?(.*)") }
    var sg = function (a) {
        var b = [], c; for (c in a) if (a.hasOwnProperty(c)) { var d = a[c]; if (void 0 !== d && d === d && null !== d && "[object Object]" !== d.toString()) { b.push(c); var e = b, f = e.push, g, l = String(d); Vf = Vf || Wf(); Xf = Xf || Uf(); for (var m = [], p = 0; p < l.length; p += 3) { var n = p + 1 < l.length, q = p + 2 < l.length, r = l.charCodeAt(p), t = n ? l.charCodeAt(p + 1) : 0, u = q ? l.charCodeAt(p + 2) : 0, v = r >> 2, y = (r & 3) << 4 | t >> 4, x = (t & 15) << 2 | u >> 6, w = u & 63; q || (w = 64, n || (x = 64)); m.push(Vf[v], Vf[y], Vf[x], Vf[w]) } g = m.join(""); f.call(e, g) } } var B = b.join("*"); return ["1", rg(B),
            B].join("*")
    }; function rg(a, b) { var c = [G.navigator.userAgent, (new Date).getTimezoneOffset(), Za.userLanguage || Za.language, Math.floor(A() / 60 / 1E3) - (void 0 === b ? 0 : b), a].join("*"), d; if (!(d = Zf)) { for (var e = Array(256), f = 0; 256 > f; f++) { for (var g = f, l = 0; 8 > l; l++)g = g & 1 ? g >>> 1 ^ 3988292384 : g >>> 1; e[f] = g } d = e } Zf = d; for (var m = 4294967295, p = 0; p < c.length; p++)m = m >>> 8 ^ Zf[(m ^ c.charCodeAt(p)) & 255]; return ((m ^ -1) >>> 0).toString(36) }
    function tg() { return function (a) { var b = Qe(G.location.href), c = b.search.replace("?", ""), d = Le(c, "_gl", !0) || ""; a.query = ug(d) || {}; var e = Oe(b, "fragment").match(qg("_gl")); a.fragment = ug(e && e[3] || "") || {} } } function vg(a, b) { var c = qg(a).exec(b), d = b; if (c) { var e = c[2], f = c[4]; d = c[1]; f && (d = d + e + f) } return d }
    var wg = function (a, b) { b || (b = "_gl"); var c = ig.exec(a); if (!c) return ""; var d = c[1], e = vg(b, (c[2] || "").slice(1)), f = vg(b, (c[3] || "").slice(1)); e.length && (e = "?" + e); f.length && (f = "#" + f); return "" + d + e + f }, xg = function (a) { var b = tg(), c = bg(); c.data || (c.data = { query: {}, fragment: {} }, b(c.data)); var d = {}, e = c.data; e && (Ha(d, e.query), a && Ha(d, e.fragment)); return d }, ug = function (a) {
        try { var b = yg(a, 3); if (void 0 !== b) { for (var c = {}, d = b ? b.split("*") : [], e = 0; e + 1 < d.length; e += 2) { var f = d[e], g = Yf(d[e + 1]); c[f] = g } Pc("TAGGING", 6); return c } } catch (l) {
            Pc("TAGGING",
                8)
        }
    }; function yg(a, b) { if (a) { var c; a: { for (var d = a, e = 0; 3 > e; ++e) { var f = fg.exec(d); if (f) { c = f; break a } d = decodeURIComponent(d) } c = void 0 } var g = c; if (g && "1" === g[1]) { var l = g[3], m; a: { for (var p = g[2], n = 0; n < b; ++n)if (p === rg(l, n)) { m = !0; break a } m = !1 } if (m) return l; Pc("TAGGING", 7) } } }
    function zg(a, b, c, d) { function e(n) { n = vg(a, n); var q = n.charAt(n.length - 1); n && "&" !== q && (n += "&"); return n + p } d = void 0 === d ? !1 : d; var f = ig.exec(c); if (!f) return ""; var g = f[1], l = f[2] || "", m = f[3] || "", p = a + "=" + b; d ? m = "#" + e(m.substring(1)) : l = "?" + e(l.substring(1)); return "" + g + l + m }
    function Ag(a, b) { var c = "FORM" === (a.tagName || "").toUpperCase(), d = eg(b, 1, c), e = eg(b, 2, c), f = eg(b, 3, c); if (Ia(d)) { var g = sg(d); c ? Bg("_gl", g, a) : Cg("_gl", g, a, !1) } if (!c && Ia(e)) { var l = sg(e); Cg("_gl", l, a, !0) } for (var m in f) if (f.hasOwnProperty(m)) a: { var p = m, n = f[m], q = a; if (q.tagName) { if ("a" === q.tagName.toLowerCase()) { Cg(p, n, q); break a } if ("form" === q.tagName.toLowerCase()) { Bg(p, n, q); break a } } "string" == typeof q && zg(p, n, q) } }
    function Cg(a, b, c, d) { if (c.href) { var e = zg(a, b, c.href, void 0 === d ? !1 : d); Ra.test(e) && (c.href = e) } }
    function Bg(a, b, c) { if (c && c.action) { var d = (c.method || "").toLowerCase(); if ("get" === d) { for (var e = c.childNodes || [], f = !1, g = 0; g < e.length; g++) { var l = e[g]; if (l.name === a) { l.setAttribute("value", b); f = !0; break } } if (!f) { var m = H.createElement("input"); m.setAttribute("type", "hidden"); m.setAttribute("name", a); m.setAttribute("value", b); c.appendChild(m) } } else if ("post" === d) { var p = zg(a, b, c.action); Ra.test(p) && (c.action = p) } } }
    function $f(a) { try { var b; a: { for (var c = a, d = 100; c && 0 < d;) { if (c.href && c.nodeName.match(/^a(?:rea)?$/i)) { b = c; break a } c = c.parentNode; d-- } b = null } var e = b; if (e) { var f = e.protocol; "http:" !== f && "https:" !== f || Ag(e, e.hostname) } } catch (g) { } } function ag(a) { try { if (a.action) { var b = Oe(Qe(a.action), "host"); Ag(a, b) } } catch (c) { } }
    var Dg = function (a, b, c, d) { cg(); dg(a, b, "fragment" === c ? 2 : 1, !!d, !1) }, Eg = function (a, b) { cg(); dg(a, [Ne(G.location, "host", !0)], b, !0, !0) }, Fg = function () {
        var a = H.location.hostname, b = gg.exec(H.referrer); if (!b) return !1; var c = b[2], d = b[1], e = ""; if (c) { var f = c.split("/"), g = f[1]; e = "s" === g ? decodeURIComponent(f[2]) : decodeURIComponent(g) } else if (d) { if (0 === d.indexOf("xn--")) return !1; e = d.replace(/-/g, ".").replace(/\.\./g, "-") } var l = a.replace(hg, ""), m = e.replace(hg, ""), p; if (!(p = l === m)) {
            var n = "." + m; p = l.substring(l.length - n.length,
                l.length) === n
        } return p
    }, Gg = function (a, b) { return !1 === a ? !1 : a || b || Fg() }; var Hg = {}; var Ig = /^\w+$/, Jg = /^[\w-]+$/, Kg = { aw: "_aw", dc: "_dc", gf: "_gf", ha: "_ha", gp: "_gp", gb: "_gb" }, Lg = function () { if (!Xc().m() || !id()) return !0; var a = fd("ad_storage"); return null == a ? !0 : !!a }, Mg = function (a, b) { hd("ad_storage") ? Lg() ? a() : nd(a, "ad_storage") : b ? Pc("TAGGING", 3) : md(function () { Mg(a, !0) }, ["ad_storage"]) }, Og = function (a) { return Ng(a).map(function (b) { return b.za }) }, Ng = function (a) {
        var b = []; if (!pf(G) || !H.cookie) return b; var c = sf(a, H.cookie, void 0, "ad_storage"); if (!c || 0 == c.length) return b; for (var d = {}, e = 0; e < c.length; d =
            { Xc: d.Xc }, e++) { var f = Pg(c[e]); if (null != f) { var g = f, l = g.version; d.Xc = g.za; var m = g.timestamp, p = g.labels, n = ra(b, function (q) { return function (r) { return r.za === q.Xc } }(d)); n ? (n.timestamp = Math.max(n.timestamp, m), n.labels = Qg(n.labels, p || [])) : b.push({ version: l, za: d.Xc, timestamp: m, labels: p }) } } b.sort(function (q, r) { return r.timestamp - q.timestamp }); return Rg(b)
    }; function Qg(a, b) { for (var c = {}, d = [], e = 0; e < a.length; e++)c[a[e]] = !0, d.push(a[e]); for (var f = 0; f < b.length; f++)c[b[f]] || d.push(b[f]); return d }
    function Sg(a) { return a && "string" == typeof a && a.match(Ig) ? a : "_gcl" }
    var Ug = function () { var a = Qe(G.location.href), b = Oe(a, "query", !1, void 0, "gclid"), c = Oe(a, "query", !1, void 0, "gclsrc"), d = Oe(a, "query", !1, void 0, "wbraid"), e = Oe(a, "query", !1, void 0, "dclid"); if (!b || !c || !d) { var f = a.hash.replace("#", ""); b = b || Le(f, "gclid"); c = c || Le(f, "gclsrc"); d = d || Le(f, "wbraid") } return Tg(b, c, e, d) }, Tg = function (a, b, c, d) {
        var e = {}, f = function (g, l) { e[l] || (e[l] = []); e[l].push(g) }; e.gclid = a; e.gclsrc = b; e.dclid = c; void 0 !== d && Jg.test(d) && (e.gbraid = d, f(d, "gb")); if (void 0 !== a && a.match(Jg)) switch (b) {
            case void 0: f(a,
                "aw"); break; case "aw.ds": f(a, "aw"); f(a, "dc"); break; case "ds": f(a, "dc"); break; case "3p.ds": f(a, "dc"); break; case "gf": f(a, "gf"); break; case "ha": f(a, "ha")
        }c && f(c, "dc"); return e
    }, Wg = function (a) { var b = Ug(); Mg(function () { Vg(b, !1, a) }) };
    function Vg(a, b, c, d, e) {
        function f(y, x) { var w = Xg(y, g); w && (Bf(w, x, l), m = !0) } c = c || {}; e = e || []; var g = Sg(c.prefix); d = d || A(); var l = Kf(c, d, !0); l.Ua = "ad_storage"; var m = !1, p = Math.round(d / 1E3), n = function (y) { var x = ["GCL", p, y]; 0 < e.length && x.push(e.join(".")); return x.join(".") }; a.aw && f("aw", n(a.aw[0])); a.dc && f("dc", n(a.dc[0])); a.gf && f("gf", n(a.gf[0])); a.ha && f("ha", n(a.ha[0])); a.gp && f("gp", n(a.gp[0])); if ((void 0 == Hg.enable_gbraid_cookie_write ? 0 : Hg.enable_gbraid_cookie_write) && !m && a.gb) {
            var q = a.gb[0], r = Xg("gb", g),
            t = !1; if (!b) for (var u = Ng(r), v = 0; v < u.length; v++)u[v].za === q && u[v].labels && 0 < u[v].labels.length && (t = !0); t || f("gb", n(q))
        }
    }
    var Zg = function (a, b) { var c = xg(!0); Mg(function () { for (var d = Sg(b.prefix), e = 0; e < a.length; ++e) { var f = a[e]; if (void 0 !== Kg[f]) { var g = Xg(f, d), l = c[g]; if (l) { var m = Math.min(Yg(l), A()), p; b: { var n = m; if (pf(G)) for (var q = sf(g, H.cookie, void 0, "ad_storage"), r = 0; r < q.length; ++r)if (Yg(q[r]) > n) { p = !0; break b } p = !1 } if (!p) { var t = Kf(b, m, !0); t.Ua = "ad_storage"; Bf(g, l, t) } } } } Vg(Tg(c.gclid, c.gclsrc), !1, b) }) }, Xg = function (a, b) { var c = Kg[a]; if (void 0 !== c) return b + c }, Yg = function (a) {
        return 0 !== $g(a.split(".")).length ? 1E3 * (Number(a.split(".")[1]) ||
            0) : 0
    }; function Pg(a) { var b = $g(a.split(".")); return 0 === b.length ? null : { version: b[0], za: b[2], timestamp: 1E3 * (Number(b[1]) || 0), labels: b.slice(3) } } function $g(a) { return 3 > a.length || "GCL" !== a[0] && "1" !== a[0] || !/^\d+$/.test(a[1]) || !Jg.test(a[2]) ? [] : a }
    var ah = function (a, b, c, d, e) { if (qa(b) && pf(G)) { var f = Sg(e), g = function () { for (var l = {}, m = 0; m < a.length; ++m) { var p = Xg(a[m], f); if (p) { var n = sf(p, H.cookie, void 0, "ad_storage"); n.length && (l[p] = n.sort()[n.length - 1]) } } return l }; Mg(function () { Dg(g, b, c, d) }) } }, Rg = function (a) { return a.filter(function (b) { return Jg.test(b.za) }) }, bh = function (a, b) {
        if (pf(G)) {
            for (var c = Sg(b.prefix), d = {}, e = 0; e < a.length; e++)Kg[a[e]] && (d[a[e]] = Kg[a[e]]); Mg(function () {
                xa(d, function (f, g) {
                    var l = sf(c + g, H.cookie, void 0, "ad_storage"); l.sort(function (t,
                        u) { return Yg(u) - Yg(t) }); if (l.length) { var m = l[0], p = Yg(m), n = 0 !== $g(m.split(".")).length ? m.split(".").slice(3) : [], q = {}, r; r = 0 !== $g(m.split(".")).length ? m.split(".")[2] : void 0; q[f] = [r]; Vg(q, !0, b, p, n) }
                })
            })
        }
    }; function ch(a, b) { for (var c = 0; c < b.length; ++c)if (a[b[c]]) return !0; return !1 }
    var dh = function (a) { function b(e, f, g) { g && (e[f] = g) } if (id()) { var c = Ug(); if (ch(c, a)) { var d = {}; b(d, "gclid", c.gclid); b(d, "dclid", c.dclid); b(d, "gclsrc", c.gclsrc); b(d, "wbraid", c.gbraid); Eg(function () { return d }, 3); Eg(function () { var e = {}; return e._up = "1", e }, 1) } } }; function eh(a, b) { var c = Sg(b), d = Xg(a, c); if (!d) return 0; for (var e = Ng(d), f = 0, g = 0; g < e.length; g++)f = Math.max(f, e[g].timestamp); return f }
    function fh(a) { var b = 0, c; for (c in a) for (var d = a[c], e = 0; e < d.length; e++)b = Math.max(b, Number(d[e].timestamp)); return b };
    var gh = function (a) { var b = []; xa(a, function (c, d) { d = Rg(d); for (var e = [], f = 0; f < d.length; f++)e.push(d[f].za); e.length && b.push(c + ":" + e.join(",")) }); return b.join(";") }, ih = function (a, b, c) { if ("aw" === a || "dc" === a || "gb" === a) { var d = hh("gcl" + a); if (d) return d.split(".") } var e = Sg(b); if ("_gcl" == e) { c = void 0 === c ? !0 : c; var f = !xd(R.D) && c, g; g = Ug()[a] || []; if (0 < g.length) return f ? ["0"] : g } var l = Xg(a, e); return l ? Og(l) : [] }, hh = function (a) {
        var b = Qe(G.location.href), c = Oe(b, "host", !1); if (c && c.match(jh)) {
            var d = Oe(b, "path").split(a +
                "="); if (1 < d.length) return d[1].split(";")[0].split("?")[0]
        }
    }, kh = function (a, b) { hd(R.D) ? xd(R.D) ? a() : nd(a, R.D) : b ? S(42) : Ad(function () { kh(a, !0) }, [R.D]) }, jh = /^\d+\.fls\.doubleclick\.net$/, lh = !1; var mh = function (a, b) { return ih("aw", a, b) }, nh = function (a, b) { return ih("dc", a, b) }, oh = function (a) { var b = hh("gac"); return b ? !xd(R.D) && a ? "0" : decodeURIComponent(b) : gh(Lg() ? Tf() : {}) }, ph = function (a) {
        var b = hh("gacgb"); return b ?
            !xd(R.D) && a ? "0" : decodeURIComponent(b) : gh(Lg() ? Tf("_gac_gb", !0) : {})
    }, qh = function (a) {
        var b = Ug(), c = [], d = b.gclid, e = b.dclid, f = b.gclsrc || "aw"; !d || "aw.ds" !== f && "aw" !== f && "ds" !== f || c.push({ za: d, Qe: f }); e && c.push({ za: e, Qe: "ds" }); if (!lh) { } kh(function () {
            Rf(a); var g = Mf[Of(a.prefix)]; if (g && 0 < c.length) for (var l = T.joined_auid = T.joined_auid || {}, m = 0; m < c.length; m++) {
                var p =
                    c[m], n = p.za, q = p.Qe, r = (a.prefix || "_gcl") + "." + q + "." + n; if (!l[r]) { var t = "https://adservice.google.com/pagead/regclk"; t = "gb" === q ? t + "?gbraid=" + n + "&auid=" + g : t + "?gclid=" + n + "&auid=" + g + "&gclsrc=" + q; pb(t); l[r] = !0 }
            }
        })
    }, rh = function (a) { var b; if (hh("gclaw") || hh("gac") || 0 < (Ug().aw || []).length) b = !1; else { var c; if (0 < (Ug().gb || []).length) c = !0; else { var d = Math.max(eh("aw", a), fh(Lg() ? Tf() : {})); c = Math.max(eh("gb", a), fh(Lg() ? Tf("_gac_gb", !0) : {})) > d } b = c } return b }; var sh = function (a) { var b = Za && Za.userAgent || ""; if (0 > b.indexOf("Safari") || /Chrome|Coast|Opera|Edg|Silk|Android/.test(b)) return !1; var c = (/Version\/([\d\.]+)/.exec(b) || [])[1] || ""; if ("" === c) return !1; for (var d = a.split("."), e = c.split("."), f = 0; f < e.length; f++) { if (void 0 === d[f]) return !0; if (e[f] != d[f]) return Number(e[f]) > Number(d[f]) } return e.length >= d.length };
    var uh = function (a) { var b = a ? hf(a) : G.enhanced_conversion_data, c = (a || {}).enhanced_conversions_mode, d = void 0; if ("manual" === c && b) switch (b._tag_mode) { case "CODE": d = "c"; break; case "AUTO": d = "a"; break; case "MANUAL": d = "m"; break; default: d = "c" } else d = "automatic" === c ? th(a) ? "a" : "m" : "c"; if (G.Promise) try { return b ? Yd(b).then(function (e) { e.yg = d; return e }) : Promise.resolve({ Pd: "", yg: void 0 }) } catch (e) { } }, th = function (a) { var b = a && a[R.Bf]; return b && b[R.Eh] }, vh = function (a) {
        if (xd(R.D)) return a; a = a.replace(/&url=([^&#]+)/,
            function (b, c) { var d = Re(decodeURIComponent(c)); return "&url=" + encodeURIComponent(d) }); return a = a.replace(/&ref=([^&#]+)/, function (b, c) { var d = Re(decodeURIComponent(c)); return "&ref=" + encodeURIComponent(d) })
    }, wh = function () { if (fe || !0 !== G._gtmdgs && !sh("11")) return -1; var a = za('1'); return kf(1, 100) < a ? kf(2, 2) : -1 }, xh = function () { return -1 !== Za.userAgent.toLowerCase().indexOf("firefox") }, yh = function (a) { if (a && a.length) { for (var b = [], c = 0; c < a.length; ++c) { var d = a[c]; d && d.estimated_delivery_date ? b.push("" + d.estimated_delivery_date) : b.push("") } return b.join(",") } }; var zh = new RegExp(/^(.*\.)?(google|youtube|blogger|withgoogle)(\.com?)?(\.[a-z]{2})?\.?$/), Ah = { cl: ["ecl"], customPixels: ["nonGooglePixels"], ecl: ["cl"], ehl: ["hl"], hl: ["ehl"], html: ["customScripts", "customPixels", "nonGooglePixels", "nonGoogleScripts", "nonGoogleIframes"], customScripts: ["html", "customPixels", "nonGooglePixels", "nonGoogleScripts", "nonGoogleIframes"], nonGooglePixels: [], nonGoogleScripts: ["nonGooglePixels"], nonGoogleIframes: ["nonGooglePixels"] }, Bh = {
        cl: ["ecl"], customPixels: ["customScripts", "html"],
        ecl: ["cl"], ehl: ["hl"], hl: ["ehl"], html: ["customScripts"], customScripts: ["html"], nonGooglePixels: ["customPixels", "customScripts", "html", "nonGoogleScripts", "nonGoogleIframes"], nonGoogleScripts: ["customScripts", "html"], nonGoogleIframes: ["customScripts", "html", "nonGoogleScripts"]
    }, Ch = "google customPixels customScripts html nonGooglePixels nonGoogleScripts nonGoogleIframes".split(" ");
    var Dh = function () { var a = !1; a = !0; return a }, Fh = function (a) {
        var b = qe("gtm.allowlist") || qe("gtm.whitelist"); b && S(9); Dh() && (b = "google gtagfl lcl zone oid op".split(" ")); var c = b && Ja(Ba(b), Ah), d = qe("gtm.blocklist") ||
            qe("gtm.blacklist"); d || (d = qe("tagTypeBlacklist")) && S(3); d ? S(8) : d = []; Eh() && (d = Ba(d), d.push("nonGooglePixels", "nonGoogleScripts", "sandboxedScripts")); 0 <= Ba(d).indexOf("google") && S(2); var e = d && Ja(Ba(d), Bh), f = {}; return function (g) {
                var l = g && g[xb.tb]; if (!l || "string" != typeof l) return !0; l = l.replace(/^_*/, ""); if (void 0 !== f[l]) return f[l]; var m = je[l] || [], p = a(l, m); if (b) {
                    var n;
                    if (n = p) a: { if (0 > c.indexOf(l)) if (m && 0 < m.length) for (var q = 0; q < m.length; q++) { if (0 > c.indexOf(m[q])) { S(11); n = !1; break a } } else { n = !1; break a } n = !0 } p = n
                } var r = !1; if (d) { var t = 0 <= e.indexOf(l); if (t) r = t; else { var u = va(e, m || []); u && S(10); r = u } } var v = !p || r; v || !(0 <= m.indexOf("sandboxedScripts")) || c && -1 !== c.indexOf("sandboxedScripts") || (v = va(e, Ch)); return f[l] = v
            }
    }, Eh = function () { return zh.test(G.location && G.location.hostname) }; var Gh = { F: "AW-10822812295", cc: "" }, Hh = { Pg: "AW-10822812295", Qg: "AW-10822812295" }, Ih = function () { var a = [Gh.F]; return a }, Jh = function () { var a = []; Hh.Qg && (a = Hh.Qg.split("|")); return a };
    var Lh = function () { var a = T.tidr; a || (a = new Kh, T.tidr = a); return a }, Kh = function () { this.container = {}; this.destination = {}; this.canonical = {} }, Mh = function (a) { return Lh().container.hasOwnProperty(a) };
    var Ph = function (a) { }, Th = function (a) { }, Uh =
        function () { return "&tc=" + Yb.filter(function (a) { return a }).length }, Xh = function () { 2022 <= Vh().length && Wh() }, Yh = function (a) { return 0 === a.indexOf("gtm.") ? encodeURIComponent(a) : "*" }, $h = function () { Zh || (Zh = G.setTimeout(Wh, 500)) }, Wh = function () { Zh && (G.clearTimeout(Zh), Zh = void 0); if (void 0 !== ai && (!bi[ai] || ci || di)) if (ei[ai] || fi.Yi() || 0 >= gi--) S(1), ei[ai] = !0; else { fi.vj(); var a = Vh(!0); ib(a); bi[ai] = !0; ii = hi = ki = li = mi = di = ci = ""; ji = [] } }, Vh = function (a) { var b = ai; if (void 0 === b) return ""; var c = Qc("GTM"), d = Qc("TAGGING"); return [ni, bi[b] ? "" : "&es=1", oi[b], Ph(b), c ? "&u=" + c : "", d ? "&ut=" + d : "", Uh(), ci, di, mi, li, Th(a), ki, hi, ii ? "&dl=" + encodeURIComponent(ii) : "", 0 < ji.length ? "&tdp=" + ji.join(".") : "", "&z=0"].join("") }, qi = function () { ni = pi() }, pi = function () {
            return [ri, "&v=3&t=t", "&pid=" +
                ta(), "&rv=" + Zd.wd].join("")
        }, Sh = ["L", "S", "Y"], Oh = ["S", "E"], si = { sampleRate: "0.005000", jh: "", ih: Number("5") }, ti = 0 <= H.location.search.indexOf("?gtm_latency=") || 0 <= H.location.search.indexOf("&gtm_latency="), ui; if (!(ui = ti)) { var vi = Math.random(), wi = si.sampleRate; ui = vi < wi } var xi =
            ui, ri = "https://www.googletagmanager.com/a?id=" + Gh.F + "&cv=1", yi = { label: Gh.F + " Container", children: [{ label: "Initialization", children: [] }] }, ni = pi(), bi = {}, ci = "", di = "", ki = "", li = "", hi = "", ji = [], ii = "", Rh = {}, Qh = !1, Nh = {}, zi = {}, mi = "", ai = void 0, oi = {}, ei = {}, Zh = void 0, Ai = 5; 0 < si.ih && (Ai = si.ih); var fi = function (a, b) { for (var c = 0, d = [], e = 0; e < a; ++e)d.push(0); return { Yi: function () { return c < a ? !1 : A() - d[c % a] < b }, vj: function () { var f = c++ % a; d[f] = A() } } }(Ai, 1E3), gi = 1E3, Ci = function (a, b) {
                if (xi && !ei[a] && ai !== a) {
                    Wh(); ai = a;
                    ki = ci = ""; oi[a] = "&e=" + Yh(b) + "&eid=" + a; $h();
                }
            }, Di = function (a, b, c, d) { if (xi && b) { var e, f = String(b[xb.tb] || "").replace(/_/g, ""); 0 === f.indexOf("cvt") && (f = "cvt"); e = f; var g = c + e; if (!ei[a]) { a !== ai && (Wh(), ai = a); ci = ci ? ci + "." + g : "&tr=" + g; var l = b["function"]; if (!l) throw Error("Error: No function name given for function call."); var m = (bc[l] ? "1" : "2") + e; ki = ki ? ki + "." + m : "&ti=" + m; $h(); Xh() } } }; var Ki = function (a, b, c) { if (xi && !ei[a]) { a !== ai && (Wh(), ai = a); var d = c + b; di = di ? di + "." + d : "&epr=" + d; $h(); Xh() } }, Li = function (a, b, c) { };
    var Mi = { initialized: 11, complete: 12, interactive: 13 }, Ni = {}, Oi = Object.freeze((Ni[R.sb] = !0, Ni[R.Gc] = !0, Ni)), Pi = {}, Qi = Object.freeze((Pi[R.xa] = !0, Pi)), Ri = {}, Si = 0 <= H.location.search.indexOf("?gtm_diagnostics=") || 0 <= H.location.search.indexOf("&gtm_diagnostics="), Ui = function (a, b, c) { }; function Vi(a, b) { var c = {}, d; for (d in b) b.hasOwnProperty(d) && (c[d] = !0); for (var e in a) a.hasOwnProperty(e) && (c[e] = !0); return c }
    function Ti(a, b, c, d) { c = void 0 === c ? {} : c; d = void 0 === d ? "" : d; if (a === b) return []; var e = function (q, r) { var t = r[q]; return void 0 === t ? Qi[q] : t }, f; for (f in Vi(a, b)) if (!Oi[f]) { var g = (d ? d + "." : "") + f, l = e(f, a), m = e(f, b), p = "object" === tb(l) || "array" === tb(l), n = "object" === tb(m) || "array" === tb(m); if (p && n) Ti(l, m, c, g); else if (p || n || l !== m) c[g] = !0 } return Object.keys(c) } var Wi = !1, Xi = 0, Yi = []; function Zi(a) { if (!Wi) { var b = H.createEventObject, c = "complete" == H.readyState, d = "interactive" == H.readyState; if (!a || "readystatechange" != a.type || c || !b && d) { Wi = !0; for (var e = 0; e < Yi.length; e++)J(Yi[e]) } Yi.push = function () { for (var f = 0; f < arguments.length; f++)J(arguments[f]); return 0 } } } function $i() { if (!Wi && 140 > Xi) { Xi++; try { H.documentElement.doScroll("left"), Zi() } catch (a) { G.setTimeout($i, 50) } } } var aj = function (a) { Wi ? a() : Yi.push(a) }; var cj = function (a, b) { this.m = !1; this.C = []; this.I = { tags: [] }; this.U = !1; this.o = this.s = 0; bj(this, a, b) }, dj = function (a, b, c, d) { if (be.hasOwnProperty(b) || "__zone" === b) return -1; var e = {}; vb(d) && (e = P(d, e)); e.id = c; e.status = "timeout"; return a.I.tags.push(e) - 1 }, ej = function (a, b, c, d) { var e = a.I.tags[b]; e && (e.status = c, e.executionTime = d) }, fj = function (a) { if (!a.m) { for (var b = a.C, c = 0; c < b.length; c++)b[c](); a.m = !0; a.C.length = 0 } }, bj = function (a, b, c) { void 0 !== b && gj(a, b); c && G.setTimeout(function () { return fj(a) }, Number(c)) }, gj =
        function (a, b) { var c = Ga(function () { return J(function () { b(Gh.F, a.I) }) }); a.m ? c() : a.C.push(c) }, hj = function (a) { a.s++; return Ga(function () { a.o++; a.U && a.o >= a.s && fj(a) }) }, ij = function (a) { a.U = !0; a.o >= a.s && fj(a) }; var jj = function () { function a(d) { return !pa(d) || 0 > d ? 0 : d } if (!T._li && G.performance && G.performance.timing) { var b = G.performance.timing.navigationStart, c = pa(re.get("gtm.start")) ? re.get("gtm.start") : 0; T._li = { cst: a(c - b), cbt: a(he - b) } } }, kj = function (a) { G.performance && G.performance.mark(Gh.F + "_" + a + "_start") }, lj = function (a) {
            if (G.performance) {
                var b = Gh.F + "_" + a + "_start", c = Gh.F + "_" + a + "_duration"; G.performance.measure(c, b); var d = G.performance.getEntriesByName(c)[0]; G.performance.clearMarks(b); G.performance.clearMeasures(c);
                var e = T._p || {}; void 0 === e[a] && (e[a] = d.duration, T._p = e); return d.duration
            }
        }, mj = function () { if (G.performance && G.performance.now) { var a = T._p || {}; a.PAGEVIEW = G.performance.now(); T._p = a } }; var Dj = {}, Ej = function () { return G.GoogleAnalyticsObject && G[G.GoogleAnalyticsObject] }, Fj = !1;
    function Ij() { return G.GoogleAnalyticsObject || "ga" }
    var Jj = function (a) { }, Kj = function (a, b) {
        return function () {
            var c = Ej(), d = c && c.getByName && c.getByName(a); if (d) {
                var e = d.get("sendHitTask"); d.set("sendHitTask", function (f) {
                    var g = f.get("hitPayload"), l = f.get("hitCallback"), m = 0 > g.indexOf("&tid=" + b); m && (f.set("hitPayload", g.replace(/&tid=UA-[0-9]+-[0-9]+/, "&tid=" + b), !0), f.set("hitCallback", void 0, !0)); e(f); m && (f.set("hitPayload",
                        g, !0), f.set("hitCallback", l, !0), f.set("_x_19", void 0, !0), e(f))
                })
            }
        }
    }; function Pj(a, b, c, d) { var e = Yb[a], f = Qj(a, b, c, d); if (!f) return null; var g = gc(e[xb.ag], c, []); if (g && g.length) { var l = g[0]; f = Pj(l.index, { onSuccess: f, onFailure: 1 === l.zg ? b.terminate : f, terminate: b.terminate }, c, d) } return f }
    function Qj(a, b, c, d) {
        function e() {
            if (f[xb.bi]) l(); else {
                var y = hc(f, c, []); var x = y[xb.nh]; if (null != x) for (var w = 0; w < x.length; w++)if (!xd(x[w])) { l(); return } var B = dj(c.ub, String(f[xb.tb]), Number(f[xb.cg]), y[xb.ci]), z = !1; y.vtp_gtmOnSuccess = function () {
                    if (!z) {
                        z = !0; var E = A() - C; Di(c.id, Yb[a], "5", E); ej(c.ub, B, "success",
                            E); g()
                    }
                }; y.vtp_gtmOnFailure = function () { if (!z) { z = !0; var E = A() - C; Di(c.id, Yb[a], "6", E); ej(c.ub, B, "failure", E); l() } }; y.vtp_gtmTagId = f.tag_id; y.vtp_gtmEventId = c.id; c.priorityId && (y.vtp_gtmPriorityId = c.priorityId); Di(c.id, f, "1"); var D = function () {
                    var E = A() - C; Di(c.id, f, "7", E); ej(c.ub, B, "exception",
                        E); z || (z = !0, l())
                }; var C = A(); try { fc(y, { event: c, index: a, type: 1 }) } catch (E) { D(E) }
            }
        } var f = Yb[a], g = b.onSuccess, l = b.onFailure, m = b.terminate; if (c.Ve(f)) return null; var p = gc(f[xb.dg], c, []); if (p && p.length) {
            var n = p[0], q = Pj(n.index, {
                onSuccess: g, onFailure: l,
                terminate: m
            }, c, d); if (!q) return null; g = q; l = 2 === n.zg ? m : q
        } if (f[xb.Xf] || f[xb.gi]) { var r = f[xb.Xf] ? Zb : c.Ij, t = g, u = l; if (!r[a]) { e = Ga(e); var v = Rj(a, r, e); g = v.onSuccess; l = v.onFailure } return function () { r[a](t, u) } } return e
    } function Rj(a, b, c) { var d = [], e = []; b[a] = Sj(d, e, c); return { onSuccess: function () { b[a] = Tj; for (var f = 0; f < d.length; f++)d[f]() }, onFailure: function () { b[a] = Uj; for (var f = 0; f < e.length; f++)e[f]() } } } function Sj(a, b, c) { return function (d, e) { a.push(d); b.push(e); c() } } function Tj(a) { a() } function Uj(a, b) { b() }; function Vj(a, b) { if (a) { var c = "" + a; 0 !== c.indexOf("http://") && 0 !== c.indexOf("https://") && (c = "https://" + c); "/" === c[c.length - 1] && (c = c.substring(0, c.length - 1)); return Qe("" + c + b).href } } function Wj(a, b) { return Xj() ? Vj(a, b) : void 0 } function Xj() { var a = !1; return a }
    function Yj() { return !!Zd.xd && "SGTM_TOKEN" !== Zd.xd.replaceAll("@@", "") }; var Zj = function () { var a = !1; return a }; var bk = function (a, b, c, d) { return (2 === ak() || d || "http:" != G.location.protocol ? a : b) + c }, ak = function () { var a = gb(), b; if (1 === a) a: { var c = de; c = c.toLowerCase(); for (var d = "https://" + c, e = "http://" + c, f = 1, g = H.getElementsByTagName("script"), l = 0; l < g.length && 100 > l; l++) { var m = g[l].src; if (m) { m = m.toLowerCase(); if (0 === m.indexOf(e)) { b = 3; break a } 1 === f && 0 === m.indexOf(d) && (f = 2) } } b = f } else b = a; return b }; var ck = !1;
    var ek = function (a, b, c) {
        if (!dk()) {
            if (Mh(a)) return; var d = c ? "/gtag/js" : "/gtm.js", e = "?id=" + encodeURIComponent(a) + "&l=" + Zd.W, f = 0 === a.indexOf("GTM-"); f || (e += "&cx=c"); var g = Yj(); g && (e += "&sign=" + Zd.xd); var l = Wj(b, d + e); if (!l) {
                var m = Zd.fc + d; g && $a && f && (m = $a.replace(/^(?:https?:\/\/)?/i,
                    "").split(/[?#]/)[0]); l = bk("https://", "http://", m + e)
            } Lh().container[a] = !0; fb(l)
        }
    }, fk = function (a, b) {
        if (!ck) ek(a, b, !0); else if (!dk()) {
            if (Lh().destination.hasOwnProperty(a)) return;
            var c = "/gtag/destination?id=" + encodeURIComponent(a) + "&l=" + Zd.W + "&cx=c"; Yj() && (c += "&sign=" + Zd.xd); var d = Wj(b, c); d || (d = bk("https://", "http://", Zd.fc + c)); Lh().destination[a] = !0; fb(d)
        }
    }; function dk() { if (Zj()) { return !0 } return !1 } var gk = function () { this.eventModel = {}; this.targetConfig = {}; this.containerConfig = {}; this.globalConfig = {}; this.dataLayerConfig = {}; this.remoteConfig = {}; this.onSuccess = function () { }; this.onFailure = function () { }; this.setContainerTypeLoaded = function () { }; this.getContainerTypeLoaded = function () { }; this.priorityId = this.eventId = void 0; this.isGtmEvent = !1 }, hk = function (a) { var b = new gk; b.eventModel = a; return b }, ik = function (a, b) { a.targetConfig = b; return a }, jk = function (a, b) { a.containerConfig = b; return a }, kk = function (a, b) {
        a.globalConfig =
        b; return a
    }, lk = function (a, b) { a.dataLayerConfig = b; return a }, mk = function (a, b) { a.remoteConfig = b; return a }, nk = function (a, b) { a.onSuccess = b; return a }, ok = function (a, b) { a.setContainerTypeLoaded = b; return a }, pk = function (a, b) { a.getContainerTypeLoaded = b; return a }, qk = function (a, b) { a.onFailure = b; return a }; h = gk.prototype;
    h.getWithConfig = function (a) {
        if (void 0 !== this.eventModel[a]) return this.eventModel[a]; if (void 0 !== this.targetConfig[a]) return this.targetConfig[a]; if (void 0 !== this.containerConfig[a]) return this.containerConfig[a]; rk(this, this.globalConfig[a], this.dataLayerConfig[a]) && S(71); if (void 0 !== this.globalConfig[a]) return this.globalConfig[a];
        if (void 0 !== this.remoteConfig[a]) return this.remoteConfig[a]
    };
    h.getTopLevelKeys = function () { function a(e) { for (var f = Object.keys(e), g = 0; g < f.length; ++g)b[f[g]] = 1 } var b = {}; a(this.eventModel); a(this.targetConfig); a(this.containerConfig); a(this.globalConfig); for (var c = Object.keys(this.dataLayerConfig), d = 0; d < c.length; d++)if (!b.hasOwnProperty(c[d])) { S(71); break } return Object.keys(b) };
    h.getMergedValues = function (a, b) {
        function c(l) { vb(l) && xa(l, function (m, p) { e = !0; d[m] = p }) } var d = {}, e = !1; b && 1 !== b || (c(this.remoteConfig[a]), c(this.globalConfig[a]), c(this.containerConfig[a]), c(this.targetConfig[a])); b && 2 !== b || c(this.eventModel[a]); var f = e, g = d; d = {}; e = !1; b && 1 !== b || (c(this.remoteConfig[a]), c(this.dataLayerConfig[a]), c(this.containerConfig[a]), c(this.targetConfig[a])); b && 2 !== b || c(this.eventModel[a]);
        (e !== f || rk(this, d, g)) && S(71); e = f; d = g; return e ? d : void 0
    };
    h.getKeysFromFirstOfAnyScope = function (a) {
        var b = {}, c = !1, d = function (g) { for (var l = 0; l < a.length; l++)void 0 !== g[a[l]] && (b[a[l]] = g[a[l]], c = !0); return c }; if (d(this.eventModel) || d(this.targetConfig) || d(this.containerConfig)) return b; d(this.globalConfig); var e = b, f = c; b = {}; c = !1; d(this.dataLayerConfig); rk(this, b, e) && S(71); b = e; c = f;
        if (c) return b; d(this.remoteConfig); return b
    }; h.getEventModelKeys = function () { var a = [], b; for (b in this.eventModel) b !== R.sb && this.eventModel.hasOwnProperty(b) && void 0 !== this.eventModel[b] && a.push(b); return a };
    var rk = function (a, b, c) {
        try { if (b === c) return !1; var d = tb(b); if (d !== tb(c) || !(vb(b) && vb(c) || "array" === d)) return !0; if ("array" === d) { if (b.length !== c.length) return !0; for (var e = 0; e < b.length; e++)if (rk(a, b[e], c[e])) return !0 } else { for (var f in c) if (!b.hasOwnProperty(f)) return !0; for (var g in b) if (!c.hasOwnProperty(g) || rk(a, b[g], c[g])) return !0 } } catch (l) { S(72) }
        return !1
    }; function sk() { T.dedupe_gclid || (T.dedupe_gclid = "" + Ff()); return T.dedupe_gclid }; var tk; if (3 === Zd.wd.length) tk = "g"; else { var uk = "G"; uk = "g"; tk = uk }
    var vk = { "": "n", UA: "u", AW: "a", DC: "d", G: "e", GF: "f", HA: "h", GTM: tk, OPT: "o" }, wk = function (a) { var b = Gh.F.split("-"), c = b[0].toUpperCase(), d = vk[c] || "i", e = a && "GTM" === c ? b[1] : "OPT" === c ? b[1] : "", f; if (3 === Zd.wd.length) { var g = "w"; g = Zj() ? "s" : "o"; f = "2" + g } else f = ""; return f + d + Zd.wd + e }; function xk(a, b) { if ("" === a) return b; var c = Number(a); return isNaN(c) ? b : c }; var yk = function (a, b) { a.addEventListener && a.addEventListener.call(a, "message", b, !1) }; function zk() { return Ta("iPhone") && !Ta("iPod") && !Ta("iPad") }; Ta("Opera"); Ta("Trident") || Ta("MSIE"); Ta("Edge"); !Ta("Gecko") || -1 != Sa().toLowerCase().indexOf("webkit") && !Ta("Edge") || Ta("Trident") || Ta("MSIE") || Ta("Edge"); -1 != Sa().toLowerCase().indexOf("webkit") && !Ta("Edge") && Ta("Mobile"); Ta("Macintosh"); Ta("Windows"); Ta("Linux") || Ta("CrOS"); var Ak = ka.navigator || null; Ak && (Ak.appVersion || "").indexOf("X11"); Ta("Android"); zk(); Ta("iPad"); Ta("iPod"); zk() || Ta("iPad") || Ta("iPod"); Sa().toLowerCase().indexOf("kaios"); var Bk = function (a) { if (!a || !H.head) return null; var b, c; c = void 0 === c ? document : c; b = c.createElement("meta"); H.head.appendChild(b); b.httpEquiv = "origin-trial"; b.content = a; return b }; var Ck = function () { }; var Dk = function (a) { void 0 !== a.addtlConsent && "string" !== typeof a.addtlConsent && (a.addtlConsent = void 0); void 0 !== a.gdprApplies && "boolean" !== typeof a.gdprApplies && (a.gdprApplies = void 0); return void 0 !== a.tcString && "string" !== typeof a.tcString || void 0 !== a.listenerId && "number" !== typeof a.listenerId ? 2 : a.cmpStatus && "error" !== a.cmpStatus ? 0 : 3 }, Ek = function (a, b) { this.o = a; this.m = null; this.C = {}; this.U = 0; this.I = void 0 === b ? 500 : b; this.s = null }; ja(Ek, Ck);
    Ek.prototype.addEventListener = function (a) {
        var b = {}, c = of(function () { return a(b) }), d = 0; -1 !== this.I && (d = setTimeout(function () { b.tcString = "tcunavailable"; b.internalErrorState = 1; c() }, this.I)); var e = function (f, g) { clearTimeout(d); f ? (b = f, b.internalErrorState = Dk(b), g && 0 === b.internalErrorState || (b.tcString = "tcunavailable", g || (b.internalErrorState = 3))) : (b.tcString = "tcunavailable", b.internalErrorState = 3); a(b) }; try { Fk(this, "addEventListener", e) } catch (f) {
            b.tcString = "tcunavailable", b.internalErrorState = 3, d && (clearTimeout(d),
                d = 0), c()
        }
    }; Ek.prototype.removeEventListener = function (a) { a && a.listenerId && Fk(this, "removeEventListener", null, a.listenerId) };
    var Hk = function (a, b, c) {
        var d; d = void 0 === d ? "755" : d; var e; a: { if (a.publisher && a.publisher.restrictions) { var f = a.publisher.restrictions[b]; if (void 0 !== f) { e = f[void 0 === d ? "755" : d]; break a } } e = void 0 } var g = e; if (0 === g) return !1; var l = c; 2 === c ? (l = 0, 2 === g && (l = 1)) : 3 === c && (l = 1, 1 === g && (l = 0)); var m; if (0 === l) if (a.purpose && a.vendor) { var p = Gk(a.vendor.consents, void 0 === d ? "755" : d); m = p && "1" === b && a.purposeOneTreatment && "CH" === a.publisherCC ? !0 : p && Gk(a.purpose.consents, b) } else m = !0; else m = 1 === l ? a.purpose && a.vendor ? Gk(a.purpose.legitimateInterests,
            b) && Gk(a.vendor.legitimateInterests, void 0 === d ? "755" : d) : !0 : !0; return m
    }, Gk = function (a, b) { return !(!a || !a[b]) }, Fk = function (a, b, c, d) { c || (c = function () { }); if ("function" === typeof a.o.__tcfapi) { var e = a.o.__tcfapi; e(b, 2, c, d) } else if (Ik(a)) { Jk(a); var f = ++a.U; a.C[f] = c; if (a.m) { var g = {}; a.m.postMessage((g.__tcfapiCall = { command: b, version: 2, callId: f, parameter: d }, g), "*") } } else c({}, !1) }, Ik = function (a) {
        if (a.m) return a.m; var b; a: {
            for (var c = a.o, d = 0; 50 > d; ++d) {
                var e; try { e = !(!c.frames || !c.frames.__tcfapiLocator) } catch (l) {
                    e =
                    !1
                } if (e) { b = c; break a } var f; b: { try { var g = c.parent; if (g && g != c) { f = g; break b } } catch (l) { } f = null } if (!(c = f)) break
            } b = null
        } a.m = b; return a.m
    }, Jk = function (a) { a.s || (a.s = function (b) { try { var c; c = ("string" === typeof b.data ? JSON.parse(b.data) : b.data).__tcfapiReturn; a.C[c.callId](c.returnValue, c.success) } catch (d) { } }, yk(a.o, a.s)) }; var Kk = !0; Kk = !1; var Lk = { 1: 0, 3: 0, 4: 0, 7: 3, 9: 3, 10: 3 }, Mk = xk("", 550), Nk = xk("", 500); function Ok() { var a = T.tcf || {}; return T.tcf = a }
    var Tk = function () {
        var a = Ok(), b = new Ek(G, Kk ? 3E3 : -1); if (!0 === G.gtag_enable_tcf_support && !a.active && ("function" === typeof G.__tcfapi || "function" === typeof b.o.__tcfapi || null != Ik(b))) {
            a.active = !0; a.Qc = {}; Pk(); var c = null; Kk ? c = G.setTimeout(function () { Qk(a); Rk(a); c = null }, Nk) : a.tcString = "tcunavailable"; try {
                b.addEventListener(function (d) {
                    c && (clearTimeout(c), c = null); if (0 !== d.internalErrorState) Qk(a), Rk(a); else {
                        var e; a.gdprApplies = d.gdprApplies; if (!1 === d.gdprApplies) e = Sk(), b.removeEventListener(d); else if ("tcloaded" ===
                            d.eventStatus || "useractioncomplete" === d.eventStatus || "cmpuishown" === d.eventStatus) {
                                var f = {}, g; for (g in Lk) if (Lk.hasOwnProperty(g)) if ("1" === g) {
                                    var l = d, m = !0; m = void 0 === m ? !1 : m; var p; var n = l; !1 === n.gdprApplies ? p = !0 : (void 0 === n.internalErrorState && (n.internalErrorState = Dk(n)), p = "error" === n.cmpStatus || 0 !== n.internalErrorState || "loaded" === n.cmpStatus && ("tcloaded" === n.eventStatus || "useractioncomplete" === n.eventStatus) ? !0 : !1); f["1"] = p ? !1 === l.gdprApplies || "tcunavailable" === l.tcString || void 0 === l.gdprApplies &&
                                        !m || "string" !== typeof l.tcString || !l.tcString.length ? !0 : Hk(l, "1", 0) : !1
                                } else f[g] = Hk(d, g, Lk[g]); e = f
                        } e && (a.tcString = d.tcString || "tcempty", a.Qc = e, Rk(a))
                    }
                })
            } catch (d) { c && (clearTimeout(c), c = null), Qk(a), Rk(a) }
        }
    }; function Qk(a) { a.type = "e"; a.tcString = "tcunavailable"; Kk && (a.Qc = Sk()) } function Pk() { var a = {}, b = (a.ad_storage = "denied", a.wait_for_update = Mk, a); sd(b) } function Sk() { var a = {}, b; for (b in Lk) Lk.hasOwnProperty(b) && (a[b] = !0); return a }
    function Rk(a) { var b = {}, c = (b.ad_storage = a.Qc["1"] ? "granted" : "denied", b); ud(c, { eventId: 0 }, { gdprApplies: a ? a.gdprApplies : void 0, tcString: Uk() }) } var Uk = function () { var a = Ok(); return a.active ? a.tcString || "" : "" }, Vk = function () { var a = Ok(); return a.active && void 0 !== a.gdprApplies ? a.gdprApplies ? "1" : "0" : "" }, Wk = function (a) { if (!Lk.hasOwnProperty(String(a))) return !0; var b = Ok(); return b.active && b.Qc ? !!b.Qc[String(a)] : !0 };
    var Xk = function (a, b) { var c = a && !xd(R.D); return b && c ? "0" : b }, al = function (a) {
        function b(u) {
            var v; T.reported_gclid || (T.reported_gclid = {}); v = T.reported_gclid; var y, x = g; y = !g || id() && !xd(R.D) ? m + (u ? "gcu" : "gcs") : m + "." + (f.prefix || "_gcl") + (u ? "gcu" : "gcs"); if (!v[y]) {
                v[y] = !0; var w = [], B = {}, z = function (O, N) { N && (w.push(O + "=" + encodeURIComponent(N)), B[O] = !0) }, D = "https://www.google.com"; if (id()) { var C = xd(R.D); z("gcs", yd()); u && z("gcu", "1"); jd() && z("gcd", "G1" + qd(gd)); z("rnd", sk()); if ((!m || p && "aw.ds" !== p) && xd(R.D)) { var E = Og("_gcl_aw"); z("gclaw", E.join(".")) } z("url", String(G.location).split(/[?#]/)[0]); z("dclid", Xk(d, n)); var F = !1; F = !0; C || !d && !F || (D = "https://pagead2.googlesyndication.com") } z("gdpr_consent", Uk()); z("gdpr", Vk()); "1" === xg(!1)._up && z("gtm_up", "1"); z("gclid", Xk(d, m)); z("gclsrc", p);
                if (!(B.gclid || B.dclid || B.gclaw) && (z("gbraid", Xk(d, q)), B.gbraid && Zk && (x = !1), !B.gbraid && id() && xd(R.D))) { var M = Og("_gcl_gb"); 0 < M.length && (z("gclgb", M.join(".")), Zk && (x = !1)) } z("gtm", wk(!e)); g && xd(R.D) && (Rf(f || {}), x && z("auid", Mf[Of(f.prefix)] || "")); $k || a.Dd && z("did", a.Dd), a.Vb && z("gdid", a.Vb), a.Ub && z("edid", a.Ub); var I = D + "/pagead/landing?" + w.join("&"); pb(I)
            }
        } var c = !!a.Me, d = !!a.Oa, e = a.O, f = void 0 ===
            a.vb ? {} : a.vb, g = void 0 === a.Md ? !0 : a.Md, l = Ug(), m = l.gclid || "", p = l.gclsrc, n = l.dclid || "", q = l.gbraid || "", r = !c && ((!m || p && "aw.ds" !== p ? !1 : !0) || q), t = id(); if (r || t) t ? Ad(function () { b(); xd(R.D) || zd(function (u) { return b(!0, u.consentEventId, u.consentPriorityId) }, R.D) }, [R.D]) : b()
    }, Yk = function (a) { var b = String(G.location).split(/[?#]/)[0], c = Zd.qh || G._CONSENT_MODE_SALT; return a ? c ? String(lf(b + a + c)) : "0" : "" }, $k = !1; var Zk =
        !1; var bl = function (a) { if (!id() || fd(R.D)) { a = a || {}; Rf(a, !1); var b = Nf[Of(Sg(a.prefix))]; if (b && !(18E5 < A() - 1E3 * b.Jg)) { var c = b.id, d = c.split("."); if (2 === d.length && !(864E5 < A() - 1E3 * (Number(d[1]) || 0))) return c } } }; var cl = !1; var dl = function () { this.m = {} }, el = function (a, b, c) { null != c && (a.m[b] = c) }, fl = function (a) { return Object.keys(a.m).map(function (b) { return encodeURIComponent(b) + "=" + encodeURIComponent(a.m[b]) }).join("&") }, hl = function (a, b, c, d, e) { if (!id()) { gl(a, b, c, d, e); return } Ad(function () { xd(R.D) ? gl(a, b, c, d, e) : d && d() }, [R.D]); };

    var il = function (a, b, c) { c = void 0 === c ? !0 : c; var d = { gclgb: function () { return ih("gb", b, c).join(".") }, gacgb: function () { return ph(c) }, gclaw: function () { return mh(b, c).join(".") }, gac: function () { return oh(c) } }, e = rh(b); cl && (e = !1); var f = e ? "gclgb" : "gclaw", g = e ? "gacgb" : "gac", l = d[g], m = (0, d[f])(), p = "_gcl" !== b ? "" : l(); m && el(a, f, m); p && el(a, g, p) }, gl = function (a, b, c, d, e) {
        c = c || {}; var f = c.vb || {}, g = new dl; Xd(b, function (l, m) {
            el(g, "em", l); el(g, "gtm", wk()); id() && (el(g, "gcs", yd()), el(g, "gcd", "G1" + qd(gd))); il(g, Sg(f.prefix), c.Oa);
            el(g, "auid", Mf[Of(f.prefix)]); e && e.Jd && el(g, "gdid", e.Jd); e && e.Fd && el(g, "edid", e.Fd);
            var B = fl(g); pb("https://google.com/pagead/form-data/" + a + "?" + B); d && d()
        })
    }; var jl = /[A-Z]+/, kl = /\s/, ll = function (a) { if (k(a)) { a = Ca(a); var b = a.indexOf("-"); if (!(0 > b)) { var c = a.substring(0, b); if (jl.test(c)) { for (var d = a.substring(b + 1).split("/"), e = 0; e < d.length; e++)if (!d[e] || kl.test(d[e]) && ("AW" !== c || 1 !== e)) return; return { id: a, prefix: c, containerId: c + "-" + d[0], J: d } } } } }, nl = function (a) { for (var b = {}, c = 0; c < a.length; ++c) { var d = ll(a[c]); d && (b[d.id] = d) } ml(b); var e = []; xa(b, function (f, g) { e.push(g) }); return e };
    function ml(a) { var b = [], c; for (c in a) if (a.hasOwnProperty(c)) { var d = a[c]; "AW" === d.prefix && d.J[1] && b.push(d.containerId) } for (var e = 0; e < b.length; ++e)delete a[b[e]] };
    var pl = function (a, b, c) { if (G[a.functionName]) return b.$e && J(b.$e), G[a.functionName]; var d = ol(); G[a.functionName] = d; if (a.Ad) for (var e = 0; e < a.Ad.length; e++)G[a.Ad[e]] = G[a.Ad[e]] || ol(); a.Ld && void 0 === G[a.Ld] && (G[a.Ld] = c); fb(bk("https://", "http://", a.hf), b.$e, b.jj); return d }, ol = function () { var a = function () { a.q = a.q || []; a.q.push(arguments) }; return a }, ql = { functionName: "_googWcmImpl", Ld: "_googWcmAk", hf: "www.gstatic.com/wcm/loader.js" }, rl = { functionName: "_gaPhoneImpl", Ld: "ga_wpid", hf: "www.gstatic.com/gaphone/loader.js" },
        sl = { mh: "", ii: "5" }, tl = { functionName: "_googCallTrackingImpl", Ad: [rl.functionName, ql.functionName], hf: "www.gstatic.com/call-tracking/call-tracking_" + (sl.mh || sl.ii) + ".js" }, ul = {}, vl = function (a, b, c, d) { S(22); if (c) { d = d || {}; var e = pl(ql, d, a), f = { ak: a, cl: b }; void 0 === d.Ta && (f.autoreplace = c); e(2, d.Ta, f, c, 0, Da(), d.options) } }, wl = function (a, b, c, d) {
            S(21); if (b && c) {
                d = d || {}; for (var e = { countryNameCode: c, destinationNumber: b, retrievalTime: Da() }, f = 0; f < a.length; f++) {
                    var g = a[f]; ul[g.id] ||
                        (g && "AW" === g.prefix && !e.adData && 2 <= g.J.length ? (e.adData = { ak: g.J[0], cl: g.J[1] }, ul[g.id] = !0) : g && "UA" === g.prefix && !e.gaData && (e.gaData = { gaWpid: g.containerId }, ul[g.id] = !0))
                } (e.gaData || e.adData) && pl(tl, d)(d.Ta, e, d.options)
            }
        }, xl = function () { var a = !1; return a }, yl = function (a, b) {
            if (a) if (Zj()) { } else {
                if (k(a)) {
                    var c =
                        ll(a); if (!c) return; a = c
                } var d = void 0, e = !1, f = b.getWithConfig(R.Ph); if (f && qa(f)) { d = []; for (var g = 0; g < f.length; g++) { var l = ll(f[g]); l && (d.push(l), (a.id === l.id || a.id === a.containerId && a.containerId === l.containerId) && (e = !0)) } } if (!d || e) {
                    var m = b.getWithConfig(R.Kf), p; if (m) {
                        qa(m) ? p = m : p = [m]; var n = b.getWithConfig(R.If), q = b.getWithConfig(R.Jf), r = b.getWithConfig(R.Lf), t = b.getWithConfig(R.Oh), u = n || q, v = 1; "UA" !== a.prefix || d || (v = 5); for (var y = 0; y < p.length; y++)if (y < v) if (d) wl(d, p[y], t, { Ta: u, options: r }); else if ("AW" === a.prefix &&
                            a.J[1]) xl() ? wl([a], p[y], t || "US", { Ta: u, options: r }) : vl(a.J[0], a.J[1], p[y], { Ta: u, options: r }); else if ("UA" === a.prefix) if (xl()) wl([a], p[y], t || "US", { Ta: u }); else { var x = a.containerId, w = p[y], B = { Ta: u }; S(23); if (w) { B = B || {}; var z = pl(rl, B, x), D = {}; void 0 !== B.Ta ? D.receiver = B.Ta : D.replace = w; D.ga_wpid = x; D.destination = w; z(2, Da(), D) } }
                    }
                }
            }
        };
    var Al = function () { var a = T.floc; if (a) { var b = a.ts, c = a.floc; if (b && c && 1E3 > A() - b) return Promise.resolve(c) } var d = void 0; try { d = Promise.race([H.interestCohort().then(function (e) { T.floc = { ts: A(), floc: e }; return e }), new Promise(function (e) { G.setTimeout(function () { return e() }, zl) })]).catch(function () { }) } catch (e) { return } return d }, Cl = function () { if (!G.Promise) return !1; oa(H.interestCohort) || Bl || (Bl = !0, Bk("A489+ZNTpP/HCOD+k3I13nobRVH7eyh5fz5LGhYvQlNf9WauHk/0awCtXOEoWTIK9JN8bgzgn2SfPdaFXe5O9QkAAACKeyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiSW50ZXJlc3RDb2hvcnRBUEkiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9")); return oa(H.interestCohort) }, Bl = !1, zl = Number("200");
    var El = function (a, b) { var c = a.Kg, d = a.fh; a.Cd && (Gg(c[R.Nb], !!c[R.M]) && Zg(Dl, b), Wg(b), bh(Dl, b), qh(b)); c[R.M] && ah(Dl, c[R.M], c[R.yc], !!c[R.Ob], b.prefix); d && dh(["aw", "dc", "gb"]) }, Fl = function (a, b, c, d) { var e = a.hh, f = a.callback, g = a.Mg; if ("function" === typeof f) if (e === R.be && void 0 === g) { var l = d(b.prefix, c); 0 === l.length ? f(void 0) : 1 === l.length ? f(l[0]) : f(l) } else e === R.Dh ? (S(65), Rf(b, !1), f(Mf[Of(b.prefix)])) : f(g) }, Dl = ["aw", "dc", "gb"]; var Gl = !1; function Hl() { if (oa(Za.joinAdInterestGroup)) return !0; Gl || (Bk(''), Gl = !0); return oa(Za.joinAdInterestGroup) }
    function Il(a, b) { var c = void 0; try { c = H.querySelector('iframe[data-tagging-id="' + b + '"]') } catch (e) { } if (c) { var d = Number(c.dataset.loadTime); if (d && 6E4 > A() - d) { Pc("TAGGING", 9); return } } else try { if (50 <= H.querySelectorAll('iframe[allow="join-ad-interest-group"][data-tagging-id*="-"]').length) { Pc("TAGGING", 10); return } } catch (e) { } hb(a, void 0, { allow: "join-ad-interest-group" }, { taggingId: b, loadTime: A() }, c) };
    var Jl = function (a, b, c, d, e) { var f; if (f = !b && !a.m) { var g; if (g = !a.isGtmEvent) { var l = a.s.remoteConfig[R.Pb]; g = l ? "auto_detect" === l.mode || "selectors" === l.mode || "code" === l.mode : !1 } f = g } if (f) { var m = a.H(R.ya); if (null !== m) { var p; m && vb(m) ? p = m : p = gf(a.getRemoteConfig(R.Pb)); p && hl(a.I, p, { vb: e, Oa: c }, void 0, d) } } }, Kl = function (a, b) { },
        Ll = function (a, b) { a.ma("google_gtm_url_processor", function (c) { b && (c = vh(c)); var d = c; return c = d }) }, Ml = function (a, b) {
            a.Sb("gdpr_consent",
                Uk()); a.Sb("gdpr", Vk()); id() && a.m && (a.P("gcs", yd()), jd() && a.P("gcd", "G1" + qd(gd)), b && a.P("gcu", "1"))
        }, Ol = function (a, b) { var c; if (!(c = b)) if ("false" !== Se.lh && Xe) if (Ye) c = !0; else { var d = Ae("AW-" + a.I); c = !!d && !!d.preAutoPii } else c = !1; if (c) { var e = A(), f = df({ Nd: !0, Od: !0, Cj: Nl }); if (0 !== f.elements.length) { for (var g = [], l = [], m = [], p = 0; p < f.elements.length; ++p) { var n = f.elements[p]; g.push(n.querySelector); var q = n.tagName + ":" + n.isVisible + ":" + n.Va.length + ":" + $e.test(n.Va); l.push(q); } var r = A(); a.P("ec_sel", g.join(",")); a.P("ec_meta", l.join(",")); a.P("ec_lat", String(r - e)); a.P("ec_s", f.status); } } }, Pl = function (a) {
            if (!a.m) a.H(R.Z) && a.ma("google_gtag_event_data", { items: a.H(R.Z) }); else if (a.eventName == R.qa) {
                a.Hc({
                    google_conversion_merchant_id: a.H(R.ie), google_basket_feed_country: a.H(R.fe),
                    google_basket_feed_language: a.H(R.he), google_basket_discount: a.H(R.ee), google_basket_transaction_type: a.eventName, google_disable_merchant_reported_conversions: !0 === a.H(R.xf)
                }); Zj() && a.ma("google_disable_merchant_reported_conversions", !0); var b; var c = a.H(R.Z); if (c) { for (var d = [], e = 0; e < c.length; ++e) { var f = c[e]; f && d.push({ item_id: f.id, quantity: f.quantity, value: f.price, start_date: f.start_date, end_date: f.end_date }) } b = d } else b = void 0; var g = b; g && a.ma("google_conversion_items", g)
            }
        }, Ql = function (a) {
            var b; var c =
                {}; a.isGtmEvent ? !a.m && a.eventName && (c.event = a.eventName) : c.event = a.eventName; var d = a.s.eventModel; if (d) { P(d, c); for (var e in c) c.hasOwnProperty(e) && R.lf[e.split(".")[0]] && delete c[e]; b = c } else b = null; var f = b; f && a.ma("google_custom_params", f)
        }, Rl = function (a) { Zj() && (a.ma("opt_image_generator", function () { return new Image }), a.ma("google_enable_display_cookie_match", !1)) }, Sl = function (a) {
            var b, c = !1; c = !0 === G._gtmpcm ? !0 : sh("14.1.1");
            (b = c) && a.Tb("apcm"); if (!a.isGtmEvent) {
                var d = wh(); 0 === d ? a.Sb("dg",
                    "c") : 1 === d && a.Sb("dg", "e")
            }
        }, Tl = function (a, b) { var c = Wj(a, "/pagead/conversion_async.js"); if (c) return c; var d = bk("https://", "http://", "www.googleadservices.com"), e = !b.isGtmEvent && 1 === wh(); if (xh() || e) d = "https://www.google.com"; return d + "/pagead/conversion_async.js" }, Ul = !1, Vl = !1; var Wl = !1;
    var Xl = !1; var Nl = !1; var Yl = [], Zl = function (a) { var b = G.google_trackConversion, c = a.o.gtm_onFailure; "function" == typeof b ? b(a.o) || c() : c() }, $l = function () { for (; 0 < Yl.length;)Zl(Yl.shift()) }, am = function (a, b) {
        var c = Ul; Vl && (c = b.getContainerTypeLoaded("AW")); if (!c) {
            Ul = !0; jj(); var d = function () {
                Vl && b.setContainerTypeLoaded("AW",
                    !0); $l(); Yl = { push: Zl }
            }; Zj() ? d() : fb(a, d, function () { $l(); Ul = !1; Vl && b.setContainerTypeLoaded("AW", !1) })
        }
    }, bm = function (a, b, c) { var d = ll(a); !d && c.isGtmEvent && (d = this.mj(a)); this.O = a; this.I = d.J[0] || ""; this.U = d.containerId === d.id; this.C = d.J[1]; this.m = void 0 !== this.C; this.eventName = b; this.isGtmEvent = c.isGtmEvent; this.s = c; this.o = { google_conversion_id: this.I, google_conversion_label: this.C, google_conversion_format: "3", google_conversion_color: "ffffff", google_conversion_domain: "", google_gtm: wk() } }; h = bm.prototype;
    h.mj = function (a) { var b = a.indexOf("/"), c = 3 <= b, d = a.substring(3, c ? b : a.length); return { id: a, prefix: "AW", containerId: "AW-" + d, J: [d, c ? a.substring(b + 1) : void 0] } }; h.ma = function (a, b) { this.o[a] = b }; h.yj = function () { delete this.o.google_transport_url }; h.Hc = function (a) { for (var b in a) a.hasOwnProperty(b) && (this.o[b] = a[b]) }; h.P = function (a, b) { void 0 != b && "" !== b && (this.o.google_additional_conversion_params = this.o.google_additional_conversion_params || {}, this.o.google_additional_conversion_params[a] = b) }; h.Sb = function (a,
        b) { void 0 != b && "" !== b && (this.o.google_additional_params = this.o.google_additional_params || {}, this.o.google_additional_params[a] = b) }; h.Tb = function (a) { this.o.google_gtm_experiments = this.o.google_gtm_experiments || {}; this.o.google_gtm_experiments[a] = !0 }; h.H = function (a) { return this.s.getWithConfig(a) }; h.getRemoteConfig = function (a) { return this.s.remoteConfig[a] }; var em = function (a, b, c, d) {
            function e(F, M) {
                function I() { Yl.push(F); Vl && d.getContainerTypeLoaded("AW") && $l() } var O = []; if (M) {
                    F.m && m && (Rf(B), F.P("auid",
                        Mf[Of(p)])); var K = (g(R.oe) ||
                            {})[F.C]; Ol(F, th(K)); var U = !0 === g(R.$c) || K; if (F.m && U && (!Xl || !rh())) { var V = uh(K); V && O.push(V.then(function (Q) { F.P("em", Q.Pd); F.P("ec_mode", Q.yg) })) }
                } if (O.length) try { Promise.all(O).then(function () { I() }); return } catch (Q) { } I()
            } var f = new bm(a, b, d), g = function (F) { return d.getWithConfig(F) }, l = void 0 != g(R.ba) && !1 !== g(R.ba), m = !1 !== g(R.va), p = g(R.Ja) || g(R.Da), n = g(R.ka), q = g(R.wa), r = g(R.Ka), t = {}; if (!Wl) { var u = d.getMergedValues(R.T); t.wg = Ma(vb(u) ? u : {}) } var v = d.getMergedValues(R.T, 1), y = d.getMergedValues(R.T, 2); t.Jd =
                Ma(vb(v) ? v : {}, "."); t.Fd = Ma(vb(y) ? y : {}, "."); var x = g(R.V), w = Tl(x, f); am(w, d); var B = { prefix: p, domain: n, Ab: q, flags: r }, z = b == R.Ca; if (z && !d.isGtmEvent && dm(f, m, B, l, t), b === R.Ia && !d.isGtmEvent) { var D = {}; D.callback = f.H(R.ab); var C = f.H(R.Ra); D.hh = C; D.Mg = f.H(String(C)); Fl(D, B, l, mh); return } var E = !1 === g(R.ob) || !1 === g(R.xa); if (!z || !f.m && !E) if (!0 === g(R.de) && (f.m = !1), !1 !== g(R.X) || f.m) {
                    f.Hc({
                        google_remarketing_only: !f.m,
                        google_conversion_language: f.H(R.eb), google_conversion_value: f.H(R.ia), google_conversion_currency: f.H(R.da), google_conversion_order_id: f.H(R.fb), google_user_id: f.H(R.Ea), google_conversion_page_url: f.H(R.Sa), google_conversion_referrer_url: f.H(R.La)
                    }); f.Hc({ onload_callback: f.s.onSuccess, gtm_onFailure: f.s.onFailure }); Sl(f); f.m && f.ma("google_transport_url", Vj(f.H(R.V), "/")); f.ma("google_restricted_data_processing", f.H(R.Ac)); Rl(f); !1 === f.H(R.X) && f.ma("google_allow_ad_personalization_signals", !1); m ? f.Hc({
                        google_gcl_cookie_prefix: B.prefix,
                        google_gcl_cookie_domain: B.domain, google_gcl_cookie_max_age_seconds: B.Ab, google_gcl_cookie_flags: B.flags
                    }) : f.ma("google_read_gcl_cookie_opt_out", !0); Ql(f); Pl(f); "1" === xg(!1)._up && f.P("gtm_up", "1"); f.m && (f.P("vdnc", f.H(R.ue)), f.P("vdltv", f.H(R.je))); Ml(f); f.m && (f.P("delopc", f.H(R.kd)), f.P("oedeld", f.H(R.pe)), f.P("delc", f.H(R.ad)), f.P("shf", f.H(R.ne)), f.P("iedeld", yh(f.H(R.Z)))); Wl || f.P("did", t.wg), f.P("gdid", t.Jd), f.P("edid", t.Fd);
                    Ll(f, l); Kl(f, B); Jl(f, z, l, t, B); id() ? Ad(function () { Ml(f); var F = xd(R.D); if (f.m) { var M = !1; M = !0; F || x || !l && !M || f.ma("google_transport_url", "https://pagead2.googlesyndication.com/"); e(f, F) } else if (F) { e(f, F); return } F || zd(function () { var I = new bm(a, f.eventName, d); I.m = f.m; I.Hc(P(f.o)); Ll(I, l); !x && I.o.google_transport_url && I.yj(); Ml(I, !0); e(I, !0) }, R.D) }, [R.D]) : e(f, !0)
                }
        };
    var dm = function (a, b, c, d, e) { var f = a.H(R.Lb), g = a.H(R.la) || {}, l = a.H(R.hb); El({ Cd: b, Ai: f, Kg: g, fh: l }, c); yl(a.O, a.s); var m = { Me: !1, Oa: d, O: a.O, eventId: a.s.eventId, priorityId: a.s.priorityId, vb: b ? c : void 0, Md: b, Dd: "" }; Wl ? m.Dd = void 0 : m.Dd = e.wg || ""; m.Vb = e.Jd; m.Ub = e.Fd; al(m); !a.isGtmEvent && a.U && 0 < a.s.getEventModelKeys().length && (S(68), 1 < T.configCount && S(69)) }; var rm = function (a, b, c) { this.s = a; this.eventName = b; this.m = c; this.o = {}; this.metadata = {}; this.I = !1 }, sm = function (a, b, c) { var d = a.m.getWithConfig(b); void 0 !== d ? a.o[b] = d : void 0 !== c && (a.o[b] = c) }, tm = function (a, b, c) { var d = Ae(a.s); return d && d.hasOwnProperty(b) ? d[b] : c }; function um(a) { return { getDestinationId: function () { return a.s }, getEventName: function () { return a.eventName }, setEventName: function (b) { return void (a.eventName = b) }, getHitData: function (b) { return a.o[b] }, setHitData: function (b, c) { return void (a.o[b] = c) }, setHitDataIfNotDefined: function (b, c) { void 0 === a.o[b] && (a.o[b] = c) }, copyToHitData: function (b, c) { sm(a, b, c) }, getMetadata: function (b) { return a.metadata[b] }, setMetadata: function (b, c) { return void (a.metadata[b] = c) }, abort: function () { return void (a.I = !0) }, getProcessedEvent: function () { return a } } }
    ; var Sm = function () { var a = !0; Wk(7) && Wk(9) && Wk(10) || (a = !1); return a }, Tm = function () { var a = !0; Wk(3) && Wk(4) || (a = !1); return a }; var Nn = null, On = !1; function Pn(a) { return On && !a ? Nn = Nn || new Qn : T.gcq = T.gcq || new Qn }
    var Rn = function (a, b, c) { Pn().register(a, b, c) }, Sn = function (a, b, c, d) { Pn().push("event", [b, a], c, d) }, Tn = function (a, b) { Pn().push("config", [a], b) }, Un = function (a, b, c, d) { Pn().push("get", [a, b], c, d) }, Vn = function () { var a = R.V; return Pn().getGlobalConfigValue && Pn().getGlobalConfigValue(a) }, Wn = {}, Xn = function () { this.status = 1; this.containerConfig = {}; this.targetConfig = {}; this.remoteConfig = {}; this.o = {}; this.s = null; this.claimed = this.m = !1 }, Yn = function (a, b, c, d, e) { this.type = a; this.s = b; this.O = c || ""; this.m = d; this.o = e }, Qn =
        function () { this.o = {}; this.s = {}; this.m = []; this.C = { AW: !1, UA: !1 } }, Zn = function (a, b) { var c = ll(b); return a.o[c.containerId] = a.o[c.containerId] || new Xn }, $n = function (a, b, c, d) { if (b) { var e = ll(b); if (e && 1 === Zn(a, b).status) { Zn(a, b).status = 2; var f = {}; xi && (f.timeoutId = G.setTimeout(function () { S(38); $h() }, 3E3)); a.push("require", [f], e.containerId); Wn[e.containerId] = A(); if (Zj()) { } else 2 === d ? fk(e.containerId, c) : ek(e.containerId, c, !0) } } }, ao = function (a, b, c, d) {
            if (d.O) {
                var e = Zn(a, d.O), f = e.s; if (f) {
                    var g = P(c), l = P(e.targetConfig[d.O]), m = P(e.containerConfig), p = P(e.remoteConfig), n = P(a.s), q = {}; try { q = P(ne) } catch (y) { S(72) }
                    var r = qe("gtm.uniqueEventId"), t = ll(d.O).prefix, u = Ga(function () { var y = g[R.Mb]; y && J(y) }), v = pk(ok(qk(nk(lk(kk(mk(jk(ik(hk(g), l), m), p), n), q), function () { Ki(r, t, "2"); u() }), function () { Ki(r, t, "3"); u() }), function (y, x) { a.C[y] = x }), function (y) { return a.C[y] }); try {
                        Ki(r, t, "1"), Ui(d.type, d.O, v);
                        f(d.O, b, d.s, v)
                    } catch (y) { Ki(r, t, "4"); }
                }
            }
        }; h = Qn.prototype;
    h.register = function (a, b, c) { var d = Zn(this, a); if (3 !== d.status) { d.s = b; d.status = 3; c && (P(d.remoteConfig, c), d.remoteConfig = c); var e = ll(a), f = Wn[e.containerId]; if (void 0 !== f) { var g = T[e.containerId].bootstrap, l = e.prefix.toUpperCase(); T[e.containerId]._spx && (l = l.toLowerCase()); var m = qe("gtm.uniqueEventId"), p = l, n = A() - g; if (xi && !ei[m]) { m !== ai && (Wh(), ai = m); var q = p + "." + Math.floor(g - f) + "." + Math.floor(n); li = li ? li + "," + q : "&cl=" + q } delete Wn[e.containerId] } this.flush() } };
    h.notifyContainerLoaded = function (a, b) { var c = this, d = function (f) { if (ll(f)) { var g = Zn(c, f); g.status = 3; g.claimed = !0 } }; d(a); for (var e = 0; e < b.length; e++)d(b[e]); this.flush() }; h.push = function (a, b, c, d) { if (void 0 !== c) { if (!ll(c)) return; $n(this, c, b[0][R.V] || this.s[R.V], "event" === a ? 2 : 1); Zn(this, c).m && (d = !1) } this.m.push(new Yn(a, Math.floor(A() / 1E3), c, b, d)); d || this.flush() }; h.insert = function (a, b, c) { var d = Math.floor(A() / 1E3); 0 < this.m.length ? this.m.splice(1, 0, new Yn(a, d, c, b, !1)) : this.m.push(new Yn(a, d, c, b, !1)) };
    h.flush = function (a) {
        for (var b = this, c = [], d = !1, e = {}; this.m.length;) {
            var f = this.m[0]; if (f.o) !f.O || Zn(this, f.O).m ? (f.o = !1, this.m.push(f)) : c.push(f), this.m.shift(); else {
                var g = void 0; switch (f.type) {
                    case "require": g = Zn(this, f.O); if (3 !== g.status && !a) { this.m.push.apply(this.m, c); return } xi && G.clearTimeout(f.m[0].timeoutId); break; case "set": xa(f.m[0], function (r, t) { P(Ka(r, t), b.s) }); break; case "config": g = Zn(this, f.O); if (g.claimed) break; e.Pa = {}; xa(f.m[0], function (r) { return function (t, u) { P(Ka(t, u), r.Pa) } }(e)); var l =
                        !!e.Pa[R.md]; delete e.Pa[R.md]; var m = ll(f.O), p = m.containerId === m.id; l || (p ? g.containerConfig = {} : g.targetConfig[f.O] = {}); g.m && l || ao(this, R.Ca, e.Pa, f); g.m = !0; delete e.Pa[R.sb]; p ? P(e.Pa, g.containerConfig) : (P(e.Pa, g.targetConfig[f.O]), S(70)); d = !0; break; case "event": g = Zn(this, f.O); if (g.claimed) break; e.Wc = {}; xa(f.m[0], function (r) { return function (t, u) { P(Ka(t, u), r.Wc) } }(e)); ao(this, f.m[1], e.Wc, f); break; case "get": if (g = Zn(this, f.O), !g.claimed) { var n = {}, q = (n[R.Ra] = f.m[0], n[R.ab] = f.m[1], n); ao(this, R.Ia, q, f) }
                }this.m.shift();
                bo(this, f)
            } e = { Pa: e.Pa, Wc: e.Wc }
        } this.m.push.apply(this.m, c); d && this.flush()
    }; var bo = function (a, b) { if ("require" !== b.type) if (b.O) for (var c = a.getCommandListeners(b.O)[b.type] || [], d = 0; d < c.length; d++)c[d](); else for (var e in a.o) if (a.o.hasOwnProperty(e)) { var f = a.o[e]; if (f && f.o) for (var g = f.o[b.type] || [], l = 0; l < g.length; l++)g[l]() } }; Qn.prototype.getRemoteConfig = function (a) { return Zn(this, a).remoteConfig }; Qn.prototype.getCommandListeners = function (a) { return Zn(this, a).o }; Qn.prototype.getGlobalConfigValue = function (a) { return this.s[a] };
    var eo = function (a, b) { return 1 === arguments.length ? co("config", a) : co("config", a, b) }, fo = function (a, b) { return 1 === arguments.length ? co("event", a) : co("event", a, b) }; function co(a) { return arguments } var ho = function (a) { if (go(a)) return a; this.m = a }; ho.prototype.getUntrustedMessageValue = function () { return this.m }; var go = function (a) { return !a || "object" !== tb(a) || vb(a) ? !1 : "getUntrustedMessageValue" in a }, io = function (a) { if (go(a)) return a.getUntrustedMessageValue() }; ho.prototype.getUntrustedMessageValue = ho.prototype.getUntrustedMessageValue; var jo = function () { this.m = []; this.o = [] }; jo.prototype.push = function (a, b, c) { var d = this.m.length + 1; go(a) && (a = io(a) || a); a["gtm.uniqueEventId"] = b; a["gtm.priorityId"] = d; a = new ho(a); var e = { debugContext: c, message: a, notBeforeEventId: b, priorityId: d }; this.m.push(e); for (var f = 0; f < this.o.length; f++)try { this.o[f](e) } catch (g) { } }; jo.prototype.listen = function (a) { this.o.push(a) };
    jo.prototype.get = function () { for (var a = {}, b = 0; b < this.m.length; b++) { var c = this.m[b], d = a[c.notBeforeEventId]; d || (d = [], a[c.notBeforeEventId] = d); d.push(c) } return a }; var lo = function (a, b, c) { ko().push(a, b, c) }, no = function () { var a = mo; ko().listen(a) }, oo = function (a, b) { return a.notBeforeEventId - b.notBeforeEventId || a.priorityId - b.priorityId }; function ko() { var a = T.mb; a || (a = new jo, T.mb = a); return a } var po = !1; var qo = !1; var ro = function (a, b) { T.addDestinationToContainer ? T.addDestinationToContainer(a, b) : (T.pendingDestinationIds = T.pendingDestinationIds || [], T.pendingDestinationIds.push([a, b])) };
    var so = {}, to = {}, uo = {}, vo = function (a, b) { var c = to[b] || []; c.push(a); to[b] = c }, xo = function () { T.addTargetToGroup = function (e) { wo(e, "default") }; T.addDestinationToContainer = function (e, f) { vo(e, f) }; var a = T.pendingDefaultTargets; delete T.pendingDefaultTargets; if (Array.isArray(a)) for (var b = 0; b < a.length; ++b)wo(a[b], "default"); var c = T.pendingDestinationIds; delete T.pendingDestinationIds; if (Array.isArray(c)) for (var d = 0; d < c.length; ++d)vo(c[d][0], c[d][1]) }, wo = function (a, b) {
        b = b.toString().split(","); for (var c = 0; c < b.length; c++) {
            var d =
                so[b[c]] || []; so[b[c]] = d; 0 > d.indexOf(a) && d.push(a)
        }
    }, yo = function (a, b) { b = String(b).split(","); for (var c = 0; c < b.length; c++) { var d = uo[b[c]] || []; uo[b[c]] = d; 0 > d.indexOf(a) && d.push(a) } }, zo = function (a) {
        for (var b = [], c = [], d = {}, e = 0; e < a.length; d = { bc: d.bc }, e++) {
            var f = a[e]; if (0 <= f.indexOf("-")) qo ? (d.bc = ll(f), d.bc && (po ? ra(to[Gh.F] || [], function (q) { return function (r) { return q.bc.containerId === r } }(d)) ? b.push(f) : c.push(f) : d.bc.containerId === Gh.F ? b.push(f) : c.push(f))) : b.push(f); else {
                var g = so[f] || []; if (qo) if (po) {
                    if (-1 <
                        g.indexOf(Gh.F)) { var l = to[Gh.F]; l && l.length && (b = b.concat(l)) } var m = uo[f] || []; m.length && (b = b.concat(m))
                } else for (var p = 0; p < g.length; p++) { var n = ll(g[p]); n && n.containerId === Gh.F && b.push(n.id) } else g && g.length && (b = b.concat(g))
            }
        } return { fj: b, ij: c }
    }, Ao = function (a) { xa(so, function (b, c) { var d = c.indexOf(a); 0 <= d && c.splice(d, 1) }) }, Bo = function (a) { xa(uo, function (b, c) { var d = c.indexOf(a); 0 <= d && c.splice(d, 1) }) }; var Ko = function (a) { var b = T.zones; return b ? b.getIsAllowedFn(Ih(), a) : function () { return !0 } }, Lo = function (a) { var b = T.zones; return b ? b.isActive(Ih(), a) : !0 }; var Oo = function (a, b) {
        for (var c = [], d = 0; d < Yb.length; d++)if (a[d]) { var e = Yb[d]; var f = hj(b.ub); try { var g = Pj(d, { onSuccess: f, onFailure: f, terminate: f }, b, d); if (g) { var l = c, m = l.push, p = d, n = e["function"]; if (!n) throw "Error: No function name given for function call."; var q = bc[n]; m.call(l, { ah: p, Sg: q ? q.priorityOverride || 0 : 0, execute: g }) } else Mo(d, b), f() } catch (t) { f() } } c.sort(No); for (var r = 0; r < c.length; r++)c[r].execute(); return 0 <
            c.length
    };
    function No(a, b) { var c, d = b.Sg, e = a.Sg; c = d > e ? 1 : d < e ? -1 : 0; var f; if (0 !== c) f = c; else { var g = a.ah, l = b.ah; f = g > l ? 1 : g < l ? -1 : 0 } return f } function Mo(a, b) { if (!xi) return; var c = function (d) { var e = b.Ve(Yb[d]) ? "3" : "4", f = gc(Yb[d][xb.ag], b, []); f && f.length && c(f[0].index); Di(b.id, Yb[d], e); var g = gc(Yb[d][xb.dg], b, []); g && g.length && c(g[0].index) }; c(a); } var Ro = !1, Po;
    var Wo = function (a) {
        var b = A(), c = a["gtm.uniqueEventId"], d = a["gtm.priorityId"], e = a.event; if ("gtm.js" === e) { if (Ro) return !1; Ro = !0; } var l, m = !1; if (Lo(c)) l = Ko(c); else { if ("gtm.js" !== e && "gtm.init" !== e && "gtm.init_consent" !== e) return !1; m = !0; l = Ko(Number.MAX_SAFE_INTEGER) }
        Ci(c, e); var p = a.eventCallback, n = a.eventTimeout, q = p; var r = { id: c, priorityId: d, name: e, Ve: Fh(l), Ij: [], Lg: function () { S(6) }, rg: So(), sg: To(c), ub: new cj(q, n) }, t = lc(r);
        m && (t = Uo(t)); var u = Oo(t, r), v = !1; ij(r.ub);
        "gtm.js" !== e && "gtm.sync" !== e || Jj(Gh.F); return Vo(t, u) || v
    }; function To(a) { return function (b) { xi && (wb(b) || Li(a, "input", b)) } } function So() { var a = {}; a.event = xe("event", 1); a.ecommerce = xe("ecommerce", 1); a.gtm = xe("gtm"); a.eventModel = xe("eventModel"); return a } function Uo(a) { for (var b = [], c = 0; c < a.length; c++)a[c] && (ae[String(Yb[c][xb.tb])] && (b[c] = !0), void 0 !== Yb[c][xb.hi] && (b[c] = !0)); return b }
    function Vo(a, b) { if (!b) return b; for (var c = 0; c < a.length; c++)if (a[c] && Yb[c] && !be[String(Yb[c][xb.tb])]) return !0; return !1 } var Xo = !1; var Yo = "HA GF G UA AW DC".split(" "), Zo = !1, $o = !1, ap = 0; function bp(a) { a.hasOwnProperty("gtm.uniqueEventId") || Object.defineProperty(a, "gtm.uniqueEventId", { value: ke() }); return a["gtm.uniqueEventId"] }
    function wp() { if (On) return !1; Zo || T.gtagRegistered || (Zo = T.gtagRegistered = !0, xo()); return Zo }
    var xp = {
        config: function (a) {
            bp(a); if (2 > a.length || !k(a[1])) return; var b = {}; if (2 < a.length) { if (void 0 != a[2] && !vb(a[2]) || 3 < a.length) return; b = a[2] } var c = ll(a[1]); if (!c) return; var d = c.id !== c.containerId; if (On) { var e = b[R.V] || Vn(); if (Xo && d) { if (!ra(Jh(), function (n) { return n === c.containerId })) { fk(c.containerId, e); return } } else if (-1 === Ih().indexOf(c.containerId)) { ek(c.containerId, e, !0); return } } var f = wp() || On; b[R.De] ? delete b[R.De] : Xo && d ? (Bo(c.id), yo(c.id,
                b[R.gd] || "default")) : (Ao(c.id), wo(c.id, b[R.gd] || "default")); delete b[R.gd]; $o || S(43); if (f) { var g = [c.id]; Xo && !d && (g = Jh()); for (var l = !1, m = 0; m < g.length; m++) { var p = ll(g[m]); p && -1 !== Yo.indexOf(p.prefix) && ("G" === p.prefix && (b[R.sb] = !0), delete b[R.Mb], p.id === p.containerId && (T.configCount = ++ap), Tn(b, p.id), l = !0) } if (l) return } we("gtag.targets." + c.id); we("gtag.targets." + c.id, P(b));
        }, consent: function (a) {
            if (3 === a.length) {
                S(39); var b = { eventId: bp(a), priorityId: a["gtm.priorityId"] },
                    c = a[1]; "default" === c ? sd(a[2]) : "update" === c && ud(a[2], b)
            }
        }, event: function (a) {
            var b = a[1]; if (!(2 > a.length) && k(b)) {
                var c; if (2 < a.length) { if (!vb(a[2]) && void 0 != a[2] || 3 < a.length) return; c = a[2] } var d = c, e = {}, f = (e.event = b, e); d && (f.eventModel = P(d), d[R.Mb] && (f.eventCallback = d[R.Mb]), d[R.dd] && (f.eventTimeout = d[R.dd])); var g = bp(a), l = a["gtm.priorityId"]; f["gtm.uniqueEventId"] = g; l && (f["gtm.priorityId"] = l); if ("optimize.callback" === b) return f.eventModel = f.eventModel ||
                    {}, f; var m; var p = c, n = p && p[R.qb]; void 0 === n && (n = qe(R.qb, 2), void 0 === n && (n = "default")); if (k(n) || qa(n)) { var q = n.toString().replace(/\s+/g, "").split(","), r = zo(q), t = r.fj, u = r.ij; if (u.length) for (var v = p && p[R.V] || Vn(), y = 0; y < u.length; y++) { var x = ll(u[y]); x && (Xo ? fk(x.containerId, v) : ek(x.containerId, v, !0)) } m = nl(t) } else m = void 0; var w = m; if (!w) return; for (var B = wp() || On, z = [], D = 0; B && D < w.length; D++) { var C = w[D]; if (-1 !== Yo.indexOf(C.prefix)) { var E = P(c); "G" === C.prefix && (E[R.sb] = !0); delete E[R.Mb]; Sn(b, E, C.id) } z.push(C.id) } f.eventModel =
                        f.eventModel || {}; 0 < w.length ? f.eventModel[R.qb] = z.join() : delete f.eventModel[R.qb]; $o || S(43); return f
            }
        }, get: function (a) {
            S(53); if (4 !== a.length || !k(a[1]) || !k(a[2]) || !oa(a[3])) return; var b = ll(a[1]), c = String(a[2]), d = a[3]; if (!b) return; $o || S(43); if (On) {
                var e = Vn(); if (Xo) { if (!ra(Jh(), function (g) { return b.containerId === g })) { fk(b.containerId, e); return } } else if (b.containerId !== Gh.F) {
                    ek(b.containerId, e, !0);
                    return
                }
            } else if (!wp()) return; if (-1 === Yo.indexOf(b.prefix)) return; bp(a); var f = {}; od(P((f[R.Ra] = c, f[R.ab] = d, f))); Un(c, function (g) { J(function () { return d(g) }) }, b.id);
        }, js: function (a) { if (2 == a.length && a[1].getTime) { $o = !0; wp(); var b = {}; return b.event = "gtm.js", b["gtm.start"] = a[1].getTime(), b["gtm.uniqueEventId"] = bp(a), b } }, policy: function () { }, set: function (a) {
            var b; 2 == a.length && vb(a[1]) ? b = P(a[1]) : 3 == a.length && k(a[1]) && (b = {}, vb(a[2]) || qa(a[2]) ? b[a[1]] = P(a[2]) :
                b[a[1]] = a[2]); if (b) { var c = bp(a), d = a["gtm.priorityId"]; P(b); if (wp() || On) { var e = P(b); Pn().push("set", [e]) } b["gtm.uniqueEventId"] = c; d && (b["gtm.priorityId"] = d); b._clear = !0; return b }
        }
    }, yp = { policy: !0 }; var zp = function (a) { var b = G[Zd.W].hide; if (b && void 0 !== b[a] && b.end) { b[a] = !1; var c = !0, d; for (d in b) if (b.hasOwnProperty(d) && !0 === b[d]) { c = !1; break } c && (b.end(), b.end = null) } }, Ap = function (a) { var b = G[Zd.W], c = b && b.hide; c && c.end && (c[a] = !0) }; var Bp = !1, Cp = []; function Dp() { if (!Bp) { Bp = !0; for (var a = 0; a < Cp.length; a++)J(Cp[a]) } } var Ep = function (a) { Bp ? J(a) : Cp.push(a) }; var Up = 0, Vp = {}, Wp = [], Xp = [], Yp = !1, Zp = !1, $p = function (a) { return G[Zd.W].push(a) }, aq = function (a, b) { var c = T[Zd.W], d = c ? c.subscribers : 1, e = 0, f = !1, g = void 0; b && (g = G.setTimeout(function () { f || (f = !0, a()); g = void 0 }, b)); return function () { ++e === d && (g && (G.clearTimeout(g), g = void 0), f || (a(), f = !0)) } };
    function bq(a) { var b = a._clear; xa(a, function (d, e) { "_clear" !== d && (b && we(d), we(d, e)) }); ge || (ge = a["gtm.start"]); var c = a["gtm.uniqueEventId"]; if (!a.event) return !1; c || (c = ke(), a["gtm.uniqueEventId"] = c, we("gtm.uniqueEventId", c)); return Wo(a) } function cq(a) { if (null == a || "object" !== typeof a) return !1; if (a.event) return !0; if (ya(a)) { var b = a[0]; if ("config" === b || "event" === b || "js" === b) return !0 } return !1 }
    function dq() {
        for (var a = !1; !Zp && (0 < Wp.length || 0 < Xp.length);) {
            if (!Yp && cq(Wp[0])) { var b = {}, c = (b.event = "gtm.init_consent", b), d = {}, e = (d.event = "gtm.init", d), f = Wp[0]["gtm.uniqueEventId"]; f && (c["gtm.uniqueEventId"] = f - 2, e["gtm.uniqueEventId"] = f - 1); Wp.unshift(c, e); Yp = !0; } Zp = !0; delete ne.eventModel; pe(); var n = null, q = void 0; if (Xp.length) { var r = Xp.shift(); n = r.message; q = r.debugContext } null == n && (n = Wp.shift()); if (null != n) {
                var t = go(n); if (t) {
                    n = io(n); for (var u = ["gtm.allowlist",
                        "gtm.blocklist", "gtm.whitelist", "gtm.blacklist", "tagTypeBlacklist"], v = 0; v < u.length; v++) { var y = u[v], x = qe(y, 1); if (qa(x) || vb(x)) x = P(x); oe[y] = x }
                } try {
                    if (oa(n)) try { n.call(re) } catch (O) { } else if (qa(n)) { var w = n; if (k(w[0])) { var B = w[0].split("."), z = B.pop(), D = w.slice(1), C = qe(B.join("."), 2); if (null != C) try { C[z].apply(C, D) } catch (O) { } } } else {
                        if (ya(n)) { a: { var E = n, F = q; if (E.length && k(E[0])) { var M = xp[E[0]]; if (M && (!t || !yp[E[0]])) { n = M(E, F); break a } } n = void 0 } if (!n) { Zp = !1; continue } } a = bq(n) || a; if (cq(n)) {
                            var I = n["gtm.uniqueEventId"];
                            void 0 !== I && (eq(I), Up = I)
                        }
                    }
                } finally { t && pe(!0) }
            } Zp = !1
        } return !a
    } function fq() { var b = dq(); try { zp(Gh.F) } catch (c) { } return b }
    function mo(a) { var b = a.notBeforeEventId; Up < b ? (Vp[String(b)] = Vp[String(b)] || [], Vp[String(b)].push(a)) : (Xp.push(a), Xp.sort(oo), J(function () { Zp || dq() })) } function eq(a) { for (var b = Vp[String(a)] || [], c = 0; c < b.length; c++)Xp.push(b[c]); b.length && Xp.sort(oo); delete Vp[String(a)] }
    var hq = function () {
        var a = ab(Zd.W, []), b = ab("google_tag_manager", {}); Vp = ko().get(); eq(0); no(); b = b[Zd.W] = b[Zd.W] || {}; aj(function () { if (!b.gtmDom) { b.gtmDom = !0; var e = {}; a.push((e.event = "gtm.dom", e)) } }); Ep(function () { if (!b.gtmLoad) { b.gtmLoad = !0; var e = {}; a.push((e.event = "gtm.load", e)) } }); b.subscribers = (b.subscribers || 0) + 1; var c = a.push; a.push = function () {
            var e; if (0 < T.SANDBOXED_JS_SEMAPHORE) { e = []; for (var f = 0; f < arguments.length; f++)e[f] = new ho(arguments[f]) } else e = [].slice.call(arguments, 0); Wp.push.apply(Wp, e);
            var g = c.apply(a, e); if (300 < this.length) for (S(4); 300 < this.length;)this.shift(); var l = "boolean" !== typeof g || g; return dq() && l
        }; var d = a.slice(0); Wp.push.apply(Wp, d); if (gq()) { J(fq) }
    }, gq = function () {
        var a = !0;
        return a
    }; function iq(a) { if (null == a || 0 === a.length) return !1; var b = Number(a), c = A(); return b < c + 3E5 && b > c - 9E5 }; var jq = {}; jq.pd = new String("undefined"); var rq = function (a) { return { entityType: 1, indexInOriginContainer: a, nameInOriginContainer: void 0, originContainerId: Gh.F } }; var Lq = G.clearTimeout, Mq = G.setTimeout, W = function (a, b, c, d) { if (Zj()) { b && J(b) } else return fb(a, b, c, d) }, Nq = function () { return new Date }, Oq = function () { return G.location.href }, Pq = function (a) { return Oe(Qe(a), "fragment") }, Qq = function (a) { return Pe(Qe(a)) }, Rq = function (a, b) { return qe(a, b || 2) }, Sq = function (a, b, c) { var d; b ? (a.eventCallback = b, c && (a.eventTimeout = c), d = $p(a)) : d = $p(a); return d }, Tq = function (a, b) { G[a] = b }, X = function (a, b,
        c) { b && (void 0 === G[a] || c && !G[a]) && (G[a] = b); return G[a] }, Uq = function (a, b, c) { return sf(a, b, void 0 === c ? !0 : !!c) }, Vq = function (a, b, c) { return 0 === Bf(a, b, c) }, Wq = function (a, b) { if (Zj()) { b && J(b) } else hb(a, b) }, Xq = function (a) { return !!qq(a, "init", !1) }, Yq = function (a) { oq(a, "init", !0) }, Zq = function (a, b, c) { xi && (wb(a) || Li(c, b, a)) };
    var wr = ["matches", "webkitMatchesSelector", "mozMatchesSelector", "msMatchesSelector", "oMatchesSelector"]; function xr(a, b) { a = String(a); b = String(b); var c = a.length - b.length; return 0 <= c && a.indexOf(b, c) === c } var yr = new ua; function zr(a, b, c) { var d = c ? "i" : void 0; try { var e = String(b) + d, f = yr.get(e); f || (f = new RegExp(b, d), yr.set(e, f)); return f.test(a) } catch (g) { return !1 } }
    function Ar(a, b) { function c(g) { var l = Qe(g), m = Oe(l, "protocol"), p = Oe(l, "host", !0), n = Oe(l, "port"), q = Oe(l, "path").toLowerCase().replace(/\/$/, ""); if (void 0 === m || "http" === m && "80" === n || "https" === m && "443" === n) m = "web", n = "default"; return [m, p, n, q] } for (var d = c(String(a)), e = c(String(b)), f = 0; f < d.length; f++)if (d[f] !== e[f]) return !1; return !0 }
    function Br(a) { return Cr(a) ? 1 : 0 }
    function Cr(a) {
        var b = a.arg0, c = a.arg1; if (a.any_of && Array.isArray(c)) { for (var d = 0; d < c.length; d++) { var e = P(a, {}); P({ arg1: c[d], any_of: void 0 }, e); if (Br(e)) return !0 } return !1 } switch (a["function"]) {
            case "_cn": return 0 <= String(b).indexOf(String(c)); case "_css": var f; a: { if (b) try { for (var g = 0; g < wr.length; g++) { var l = wr[g]; if (b[l]) { f = b[l](c); break a } } } catch (m) { } f = !1 } return f; case "_ew": return xr(b, c); case "_eq": return String(b) === String(c); case "_ge": return Number(b) >= Number(c); case "_gt": return Number(b) > Number(c);
            case "_lc": return 0 <= String(b).split(",").indexOf(String(c)); case "_le": return Number(b) <= Number(c); case "_lt": return Number(b) < Number(c); case "_re": return zr(b, c, a.ignore_case); case "_sw": return 0 === String(b).indexOf(String(c)); case "_um": return Ar(b, c)
        }return !1
    }; Object.freeze({ dl: 1, id: 1 }); Object.freeze(["config", "event", "get", "set"]); var Hr = encodeURI, Y = encodeURIComponent, Ir = ib; var Jr = function (a, b) { if (!a) return !1; var c = Oe(Qe(a), "host"); if (!c) return !1; for (var d = 0; b && d < b.length; d++) { var e = b[d] && b[d].toLowerCase(); if (e) { var f = c.length - e.length; 0 < f && "." != e.charAt(0) && (f--, e = "." + e); if (0 <= f && c.indexOf(e, f) == f) return !0 } } return !1 };
    var Kr = function (a, b, c) { for (var d = {}, e = !1, f = 0; a && f < a.length; f++)a[f] && a[f].hasOwnProperty(b) && a[f].hasOwnProperty(c) && (d[a[f][b]] = a[f][c], e = !0); return e ? d : null }; function it() { return G.gaGlobal = G.gaGlobal || {} } var jt = function () { var a = it(); a.hid = a.hid || ta(); return a.hid }, kt = function (a, b) { var c = it(); if (void 0 == c.vid || b && !c.from_cookie) c.vid = a, c.from_cookie = b }; var St = function () { if (oa(G.__uspapi)) { var a = ""; try { G.__uspapi("getUSPData", 1, function (b, c) { if (c && b) { var d = b.uspString; d && RegExp("^[\\da-zA-Z-]{1,20}$").test(d) && (a = d) } }) } catch (b) { } return a } }; var zu = window, Au = document, Bu = function (a) { var b = zu._gaUserPrefs; if (b && b.ioo && b.ioo() || a && !0 === zu["ga-disable-" + a]) return !0; try { var c = zu.external; if (c && c._gaUserPrefs && "oo" == c._gaUserPrefs) return !0 } catch (f) { } for (var d = mf("AMP_TOKEN", String(Au.cookie), !0), e = 0; e < d.length; e++)if ("$OPT_OUT" == d[e]) return !0; return Au.getElementById("__gaOptOutExtension") ? !0 : !1 }; var Cu = {};
    function Nu(a) { delete a.eventModel[R.sb]; Uu(a.eventModel) } var Uu = function (a) { xa(a, function (c) { "_" === c.charAt(0) && delete a[c] }); var b = a[R.Fa] || {}; xa(b, function (c) { "_" === c.charAt(0) && delete b[c] }) }; var jv = function (a, b, c) { Sn(b, c, a) }, kv = function (a, b, c) { Sn(b, c, a, !0) }, mv = function (a, b) { }; function lv(a, b) { } var Z = { g: {} };




    Z.g.e = ["google"], function () { (function (a) { Z.__e = a; Z.__e.h = "e"; Z.__e.isVendorTemplate = !0; Z.__e.priorityOverride = 0 })(function (a) { return String(a.vtp_gtmCachedValues.event) }) }();

    Z.g.v = ["google"], function () { (function (a) { Z.__v = a; Z.__v.h = "v"; Z.__v.isVendorTemplate = !0; Z.__v.priorityOverride = 0 })(function (a) { var b = a.vtp_name; if (!b || !b.replace) return !1; var c = Rq(b.replace(/\\\./g, "."), a.vtp_dataLayerVersion || 1), d = void 0 !== c ? c : a.vtp_defaultValue; Zq(d, "v", a.vtp_gtmEventId); return d }) }();
    Z.g.rep = ["google"], function () {
        var a = !1; (function (b) { Z.__rep = b; Z.__rep.h = "rep"; Z.__rep.isVendorTemplate = !0; Z.__rep.priorityOverride = 0 })(function (b) {
            var c = ll(b.vtp_containerId), d; switch (c.prefix) { case "AW": d = em; break; case "DC": d = qm; break; case "GF": d = Jm; break; case "HA": d = Om; break; case "UA": d = nn; break; default: J(b.vtp_gtmOnFailure); return }J(b.vtp_gtmOnSuccess); if (a) {
                var e = c.containerId,
                f = Jh(); Pn(!0).notifyContainerLoaded(e, f)
            } Rn(b.vtp_containerId, d, b.vtp_remoteConfig || {})
        });
    }();

    Z.g.cid = ["google"], function () { (function (a) { Z.__cid = a; Z.__cid.h = "cid"; Z.__cid.isVendorTemplate = !0; Z.__cid.priorityOverride = 0 })(function () { return Gh.F }) }();





    Z.g.get = ["google"], function () { (function (a) { Z.__get = a; Z.__get.h = "get"; Z.__get.isVendorTemplate = !0; Z.__get.priorityOverride = 0 })(function (a) { var b = a.vtp_settings; (a.vtp_deferrable ? kv : jv)(String(b.streamId), String(a.vtp_eventName), b.eventParameters || {}); a.vtp_gtmOnSuccess() }) }();








    var nv = {}; nv.dataLayer = re; nv.callback = function (a) { ie.hasOwnProperty(a) && oa(ie[a]) && ie[a](); delete ie[a] }; nv.bootstrap = 0; nv._spx = !1;
    (function (a) {
        if (!G["__TAGGY_INSTALLED"]) { var b = !1; if (H.referrer) { var c = Qe(H.referrer); b = "cct.google" === Ne(c, "host") } if (!b) { var d = sf("googTaggyReferrer"); b = d.length && d[0].length } b && (G["__TAGGY_INSTALLED"] = !0, fb("https://cct.google/taggy/agent.js")) }
        var f = function (q) {
            var r = "GTM", t = "GTM"; r = "OGT", t = "GTAG"; var u = G["google.tagmanager.debugui2.queue"]; u || (u = [], G["google.tagmanager.debugui2.queue"] = u, fb("https://" + Zd.fc + "/debug/bootstrap?id=" + Gh.F + "&src=" + t + "&cond=" + q + "&gtm=" + wk())); var v = { messageType: "CONTAINER_STARTING", data: { scriptSource: $a, containerProduct: r, debug: !1, id: Gh.F } }; v.data.resume = function () { a() }; Zd.ph && (v.data.initialPublish =
                !0); u.push(v)
        }, g = void 0, l = Oe(G.location, "query", !1, void 0, "gtm_debug"); iq(l) && (g = 2); if (!g && H.referrer) { var m = Qe(H.referrer); "tagassistant.google.com" === Ne(m, "host") && (g = 3) } if (!g) { var p = sf("__TAG_ASSISTANT"); p.length && p[0].length && (g = 4) } if (!g) { var n = H.documentElement.getAttribute("data-tag-assistant-present"); iq(n) && (g = 5) } g && $a ? f(g) : a()
    })(function () {
        var a = !1;
        a && kj("INIT"); Xc().o(); Tk(); Hg.enable_gbraid_cookie_write = !0; var b = !!T[Gh.F]; if (b) { var c = T.zones; c && c.unregisterChild(Ih()); } else {
            for (var d = Jh(), e = 0; e < d.length; e++)ro(d[e], Gh.F); for (var f = data.resource || {}, g = f.macros || [], l = 0; l < g.length; l++)Vb.push(g[l]); for (var m = f.tags || [], p = 0; p < m.length; p++)Yb.push(m[p]); for (var n = f.predicates || [], q = 0; q < n.length; q++)Xb.push(n[q]); for (var r = f.rules || [], t = 0; t < r.length; t++) { for (var u = r[t], v = {}, y = 0; y < u.length; y++)v[u[y][0]] = Array.prototype.slice.call(u[y], 1); Wb.push(v) } bc = Z; cc = Br; T[Gh.F] = nv; for (var x = Lh(), w = Ih(), B = 0; B < w.length; B++)x.container[w[B]] = !0; for (var z = Jh(), D = 0; D < z.length; D++)x.destination[z[D]] = !0; x.canonical[Gh.cc] = !0; Ha(je, Z.g); ec = mc; hq(); Wi = !1; Xi = 0; if ("interactive" == H.readyState &&
                !H.createEventObject || "complete" == H.readyState) Zi(); else { jb(H, "DOMContentLoaded", Zi); jb(H, "readystatechange", Zi); if (H.createEventObject && H.documentElement.doScroll) { var C = !0; try { C = !G.frameElement } catch (O) { } C && $i() } jb(G, "load", Zi) } Bp = !1; "complete" === H.readyState ? Dp() : jb(G, "load", Dp); xi && G.setInterval(qi,
                    864E5); he = A(); nv.bootstrap = he;
            if (a) { var I = lj("INIT"); }
        }
    });

})()
