
	<script src="<?= $config ?>/library/jquery/jquery.js"></script>
	<script>
		for (let x = 0; x < 7; x++) {
            $('.danhmuc'+x+'').hover(function() {
                $('.show-danhmuc'+x+'').toggle();
            });
        }
	</script>
	<script type="text/javascript" src="<?= $config ?>/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.9" id="regenerator-runtime-js"></script>
	<script type="text/javascript" src="<?= $config ?>/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0" id="wp-polyfill-js"></script>
	<script type="text/javascript" id="contact-form-7-js-extra">
		/* <![CDATA[ */
		var wpcf7 = {
			"api": {
				"root": "httpscancauaba.xyz\/wp-json\/",
				"namespace": "contact-form-7\/v1"
			},
			"cached": "1"
		};
		/* ]]> */
	</script>
	<script type="text/javascript" src="<?= $config ?>/wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.5.4" id="contact-form-7-js"></script>
	<script type="text/javascript" id="toc-front-js-extra">
		/* <![CDATA[ */
		var tocplus = {
			"visibility_show": "show",
			"visibility_hide": "hide",
			"width": "Auto"
		};
		/* ]]> */
	</script>
	<script type="text/javascript" src="<?= $config ?>/wp-content/plugins/table-of-contents-plus/front.min.js?ver=2106" id="toc-front-js"></script>
	<script type="text/javascript" id="rocket-browser-checker-js-after">
		"use strict";
		var _createClass = function() {
			function defineProperties(target, props) {
				for (var i = 0; i < props.length; i++) {
					var descriptor = props[i];
					descriptor.enumerable = descriptor.enumerable || !1, descriptor.configurable = !0, "value" in descriptor && (descriptor.writable = !0), Object.defineProperty(target, descriptor.key, descriptor)
				}
			}
			return function(Constructor, protoProps, staticProps) {
				return protoProps && defineProperties(Constructor.prototype, protoProps), staticProps && defineProperties(Constructor, staticProps), Constructor
			}
		}();

		function _classCallCheck(instance, Constructor) {
			if (!(instance instanceof Constructor)) throw new TypeError("Cannot call a class as a function")
		}
		var RocketBrowserCompatibilityChecker = function() {
			function RocketBrowserCompatibilityChecker(options) {
				_classCallCheck(this, RocketBrowserCompatibilityChecker), this.passiveSupported = !1, this._checkPassiveOption(this), this.options = !!this.passiveSupported && options
			}
			return _createClass(RocketBrowserCompatibilityChecker, [{
				key: "_checkPassiveOption",
				value: function(self) {
					try {
						var options = {
							get passive() {
								return !(self.passiveSupported = !0)
							}
						};
						window.addEventListener("test", null, options), window.removeEventListener("test", null, options)
					} catch (err) {
						self.passiveSupported = !1
					}
				}
			}, {
				key: "initRequestIdleCallback",
				value: function() {
					!1 in window && (window.requestIdleCallback = function(cb) {
						var start = Date.now();
						return setTimeout(function() {
							cb({
								didTimeout: !1,
								timeRemaining: function() {
									return Math.max(0, 50 - (Date.now() - start))
								}
							})
						}, 1)
					}), !1 in window && (window.cancelIdleCallback = function(id) {
						return clearTimeout(id)
					})
				}
			}, {
				key: "isDataSaverModeOn",
				value: function() {
					return "connection" in navigator && !0 === navigator.connection.saveData
				}
			}, {
				key: "supportsLinkPrefetch",
				value: function() {
					var elem = document.createElement("link");
					return elem.relList && elem.relList.supports && elem.relList.supports("prefetch") && window.IntersectionObserver && "isIntersecting" in IntersectionObserverEntry.prototype
				}
			}, {
				key: "isSlowConnection",
				value: function() {
					return "connection" in navigator && "effectiveType" in navigator.connection && ("2g" === navigator.connection.effectiveType || "slow-2g" === navigator.connection.effectiveType)
				}
			}]), RocketBrowserCompatibilityChecker
		}();
	</script>
	<script type="text/javascript" id="rocket-delay-js-js-after">
		"use strict";
		var _createClass = function() {
			function i(e, t) {
				for (var r = 0; r < t.length; r++) {
					var i = t[r];
					i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(e, i.key, i)
				}
			}
			return function(e, t, r) {
				return t && i(e.prototype, t), r && i(e, r), e
			}
		}();

		function _classCallCheck(e, t) {
			if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
		}
		var RocketLazyLoadScripts = function() {
			function r(e, t) {
				_classCallCheck(this, r), this.attrName = "data-rocketlazyloadscript", this.browser = t, this.options = this.browser.options, this.triggerEvents = e, this.userEventListener = this.triggerListener.bind(this)
			}
			return _createClass(r, [{
				key: "init",
				value: function() {
					this._addEventListener(this)
				}
			}, {
				key: "reset",
				value: function() {
					this._removeEventListener(this)
				}
			}, {
				key: "_addEventListener",
				value: function(t) {
					this.triggerEvents.forEach(function(e) {
						return window.addEventListener(e, t.userEventListener, t.options)
					})
				}
			}, {
				key: "_removeEventListener",
				value: function(t) {
					this.triggerEvents.forEach(function(e) {
						return window.removeEventListener(e, t.userEventListener, t.options)
					})
				}
			}, {
				key: "_loadScriptSrc",
				value: function() {
					var r = this;
					document.querySelectorAll("script[" + this.attrName + "]").forEach(function(e) {
						var t = e.getAttribute(r.attrName);
						e.setAttribute("src", t), e.removeAttribute(r.attrName)
					}), this.reset()
				}
			}, {
				key: "triggerListener",
				value: function() {
					this._loadScriptSrc(), this._removeEventListener(this)
				}
			}], [{
				key: "run",
				value: function() {
					if (RocketBrowserCompatibilityChecker) {
						new r(["keydown", "mouseover", "touchmove", "touchstart"], new RocketBrowserCompatibilityChecker({
							passive: !0
						})).init()
					}
				}
			}]), r
		}();
		RocketLazyLoadScripts.run();
	</script>
	<script type="text/javascript" src="<?= $config ?>/wp-content/themes/flatsome/inc/extensions/flatsome-live-search/flatsome-live-search.js?ver=3.12.1" id="flatsome-live-search-js"></script>
	<script type="text/javascript" src="<?= $config ?>/wp-includes/js/hoverIntent.min.js?ver=1.10.1" id="hoverIntent-js"></script>
	<script type="text/javascript" id="flatsome-js-js-extra">
		/* <![CDATA[ */
		var flatsomeVars = {
			"ajaxurl": "httpscancauaba.xyz\/wp-admin\/admin-ajax.php",
			"rtl": "",
			"sticky_height": "70",
			"lightbox": {
				"close_markup": "<button title=\"%title%\" type=\"button\" class=\"mfp-close\"><svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"><\/line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"><\/line><\/svg><\/button>",
				"close_btn_inside": false
			},
			"user": {
				"can_edit_pages": false
			},
			"i18n": {
				"mainMenu": "Main Menu"
			},
			"options": {
				"cookie_notice_version": "1"
			}
		};
		/* ]]> */
	</script>
	<script type="text/javascript" src="<?= $config ?>/wp-content/themes/flatsome/assets/js/flatsome.js?ver=3.12.1" id="flatsome-js-js"></script>