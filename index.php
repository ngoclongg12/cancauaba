<?php
session_start();
$config = include_once './config/config.php';
include_once './connecting/connectDB.php';

$sql = "SELECT * FROM danhsach_sp ORDER BY ID ASC LIMIT 8";
$query = mysqli_query($connect, $sql);

$danhmuc = "SELECT * FROM danhsach_dm ORDER BY ID ASC LIMIT 6";
$query_danhmuc = mysqli_query($connect, $danhmuc);

$banner = "SELECT * FROM danhsach_banner ORDER BY id_banner DESC LIMIT 2";
$query_banner = mysqli_query($connect, $banner);

$product_new1 = "SELECT * FROM danhsach_sp ORDER BY ID DESC LIMIT 1,4";
$query_product_new1 = mysqli_query($connect, $product_new1);

$product_new2 = "SELECT * FROM danhsach_sp ORDER BY ID DESC LIMIT 4,4";
$query_product_new2 = mysqli_query($connect, $product_new2);

?>
<!DOCTYPE html>
<html lang="vi" class="loading-site no-js">

<head>
	<meta charset="UTF-8">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?= $config ?>/xmlrpc.php">
	<link rel="stylesheet" href="./library/css-wp.less">

	<script>
		(function(html) {
			html.className = html.className.replace(/\bno-js\b/, 'js')
		})(document.documentElement);
	</script>
	<meta name="robots" content="noindex, nofollow">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- This site is optimized with the Yoast SEO plugin v18.0 - https://yoast.com/wordpress/plugins/seo/ -->
	<title>Trang chủ - Cần câu A Ba</title>
	<meta property="og:locale" content="vi_VN">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Trang chủ - Cần câu A Ba">
	<meta property="og:url" content="httpscancauaba.xyz/">
	<meta property="og:site_name" content="Cần câu A Ba">
	<meta property="article:modified_time" content="2022-01-30T14:51:31+00:00">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:label1" content="Ước tính thời gian đọc">
	<meta name="twitter:data1" content="6 phút">
	<script type="application/ld+json" class="yoast-schema-graph">
		{
			"@context": "https://schema.org",
			"@graph": [{
				"@type": "WebSite",
				"@id": "httpscancauaba.xyz/#website",
				"url": "httpscancauaba.xyz/",
				"name": "Cần câu A Ba",
				"description": "Chuyên dịch vụ câu",
				"potentialAction": [{
					"@type": "SearchAction",
					"target": {
						"@type": "EntryPoint",
						"urlTemplate": "httpscancauaba.xyz/?s={search_term_string}"
					},
					"query-input": "required name=search_term_string"
				}],
				"inLanguage": "vi"
			}, {
				"@type": "WebPage",
				"@id": "httpscancauaba.xyz/#webpage",
				"url": "httpscancauaba.xyz/",
				"name": "Trang chủ - Cần câu A Ba",
				"isPartOf": {
					"@id": "httpscancauaba.xyz/#website"
				},
				"datePublished": "2022-01-15T15:40:01+00:00",
				"dateModified": "2022-01-30T14:51:31+00:00",
				"breadcrumb": {
					"@id": "httpscancauaba.xyz/#breadcrumb"
				},
				"inLanguage": "vi",
				"potentialAction": [{
					"@type": "ReadAction",
					"target": ["httpscancauaba.xyz/"]
				}]
			}, {
				"@type": "BreadcrumbList",
				"@id": "httpscancauaba.xyz/#breadcrumb",
				"itemListElement": [{
					"@type": "ListItem",
					"position": 1,
					"name": "Trang chủ"
				}]
			}]
		}
	</script>
	<!-- / Yoast SEO plugin. -->


	<link rel="dns-prefetch" href="//fonts.googleapis.com">
	<link href="https://fonts.gstatic.com/" crossorigin rel="preconnect">
	<link rel="alternate" type="application/rss+xml" title="Dòng thông tin Cần câu A Ba &raquo;" href="<?= $config ?>/feed/">
	<link rel="alternate" type="application/rss+xml" title="Dòng phản hồi Cần câu A Ba &raquo;" href="<?= $config ?>/comments/feed/">
	<style type="text/css">
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 0.07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}
	</style>
	<link rel="stylesheet" id="wp-block-library-css" href="<?= $config ?>/wp-includes/css/dist/block-library/style.min.css?ver=5.9" type="text/css" media="all">
	<style id="global-styles-inline-css" type="text/css">
		body {
			--wp--preset--color--black: #000000;
			--wp--preset--color--cyan-bluish-gray: #abb8c3;
			--wp--preset--color--white: #ffffff;
			--wp--preset--color--pale-pink: #f78da7;
			--wp--preset--color--vivid-red: #cf2e2e;
			--wp--preset--color--luminous-vivid-orange: #ff6900;
			--wp--preset--color--luminous-vivid-amber: #fcb900;
			--wp--preset--color--light-green-cyan: #7bdcb5;
			--wp--preset--color--vivid-green-cyan: #00d084;
			--wp--preset--color--pale-cyan-blue: #8ed1fc;
			--wp--preset--color--vivid-cyan-blue: #0693e3;
			--wp--preset--color--vivid-purple: #9b51e0;
			--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
			--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
			--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
			--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
			--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
			--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
			--wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
			--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
			--wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
			--wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
			--wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
			--wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
			--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
			--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
			--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
			--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
			--wp--preset--duotone--midnight: url('#wp-duotone-midnight');
			--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
			--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
			--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
			--wp--preset--font-size--small: 13px;
			--wp--preset--font-size--medium: 20px;
			--wp--preset--font-size--large: 36px;
			--wp--preset--font-size--x-large: 42px;
		}

		.has-black-color {
			color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-color {
			color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-color {
			color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-color {
			color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-color {
			color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-color {
			color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-color {
			color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-color {
			color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-color {
			color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-color {
			color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-color {
			color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-color {
			color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-black-background-color {
			background-color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-background-color {
			background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-background-color {
			background-color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-background-color {
			background-color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-background-color {
			background-color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-background-color {
			background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-background-color {
			background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-background-color {
			background-color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-background-color {
			background-color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-background-color {
			background-color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-background-color {
			background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-background-color {
			background-color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-black-border-color {
			border-color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-border-color {
			border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-border-color {
			border-color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-border-color {
			border-color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-border-color {
			border-color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-border-color {
			border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-border-color {
			border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-border-color {
			border-color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-border-color {
			border-color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-border-color {
			border-color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-border-color {
			border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-border-color {
			border-color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-vivid-cyan-blue-to-vivid-purple-gradient-background {
			background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
		}

		.has-light-green-cyan-to-vivid-green-cyan-gradient-background {
			background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
		}

		.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
			background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-orange-to-vivid-red-gradient-background {
			background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
		}

		.has-very-light-gray-to-cyan-bluish-gray-gradient-background {
			background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
		}

		.has-cool-to-warm-spectrum-gradient-background {
			background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
		}

		.has-blush-light-purple-gradient-background {
			background: var(--wp--preset--gradient--blush-light-purple) !important;
		}

		.has-blush-bordeaux-gradient-background {
			background: var(--wp--preset--gradient--blush-bordeaux) !important;
		}

		.has-luminous-dusk-gradient-background {
			background: var(--wp--preset--gradient--luminous-dusk) !important;
		}

		.has-pale-ocean-gradient-background {
			background: var(--wp--preset--gradient--pale-ocean) !important;
		}

		.has-electric-grass-gradient-background {
			background: var(--wp--preset--gradient--electric-grass) !important;
		}

		.has-midnight-gradient-background {
			background: var(--wp--preset--gradient--midnight) !important;
		}

		.has-small-font-size {
			font-size: var(--wp--preset--font-size--small) !important;
		}

		.has-medium-font-size {
			font-size: var(--wp--preset--font-size--medium) !important;
		}

		.has-large-font-size {
			font-size: var(--wp--preset--font-size--large) !important;
		}

		.has-x-large-font-size {
			font-size: var(--wp--preset--font-size--x-large) !important;
		}
	</style>
	<link rel="stylesheet" id="contact-form-7-css" href="<?= $config ?>/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.5.4" type="text/css" media="all">
	<link rel="stylesheet" id="toc-screen-css" href="<?= $config ?>/wp-content/plugins/table-of-contents-plus/screen.min.css?ver=2106" type="text/css" media="all">
	<link rel="stylesheet" id="wpmenucart-icons-css" href="<?= $config ?>/wp-content/plugins/woocommerce-menu-bar-cart/assets/css/wpmenucart-icons.min.css?ver=2.10.4" type="text/css" media="all">
	<style id="wpmenucart-icons-inline-css" type="text/css">
		@font-face {
			font-family: WPMenuCart;
			src: url(/wp-content/plugins/woocommerce-menu-bar-cart/assets/fonts/WPMenuCart.eot);
			src: url(/wp-content/plugins/woocommerce-menu-bar-cart/assets/fonts/WPMenuCart.eot?#iefix) format('embedded-opentype'), url(/wp-content/plugins/woocommerce-menu-bar-cart/assets/fonts/WPMenuCart.woff2) format('woff2'), url(/wp-content/plugins/woocommerce-menu-bar-cart/assets/fonts/WPMenuCart.woff) format('woff'), url(/wp-content/plugins/woocommerce-menu-bar-cart/assets/fonts/WPMenuCart.ttf) format('truetype'), url(/wp-content/plugins/woocommerce-menu-bar-cart/assets/fonts/WPMenuCart.svg#WPMenuCart) format('svg');
			font-weight: 400;
			font-style: normal;
			font-display: swap
		}
	</style>
	<link rel="stylesheet" id="wpmenucart-css" href="<?= $config ?>/wp-content/plugins/woocommerce-menu-bar-cart/assets/css/wpmenucart-main.min.css?ver=2.10.4" type="text/css" media="all">
	<link rel="stylesheet" id="dashicons-css" href="<?= $config ?>/wp-includes/css/dashicons.min.css?ver=5.9" type="text/css" media="all">
	<link rel="stylesheet" id="flatsome-icons-css" href="<?= $config ?>/wp-content/themes/flatsome/assets/css/fl-icons.css?ver=3.12" type="text/css" media="all">
	<link rel="stylesheet" id="flatsome-main-css" href="<?= $config ?>/wp-content/themes/flatsome/assets/css/flatsome.css?ver=3.12.1" type="text/css" media="all">
	<link rel="stylesheet" id="flatsome-style-css" href="<?= $config ?>/wp-content/themes/flatsome-child/style.css?ver=3.0" type="text/css" media="all">
	<link rel="stylesheet" id="flatsome-googlefonts-css" href="//fonts.googleapis.com/css?family=Lato%3Aregular%2C700%2C400%2C700%7CDancing+Script%3Aregular%2C400&#038;display=swap&#038;ver=3.9" type="text/css" media="all">
	<script type="text/javascript" src="<?= $config ?>/wp-includes/js/jquery/jquery.min.js?ver=3.6.0" id="jquery-core-js"></script>
	<script type="text/javascript" src="<?= $config ?>/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2" id="jquery-migrate-js"></script>
	<script type="text/javascript" id="wpmenucart-ajax-assist-js-extra">
		/* <![CDATA[ */
		var wpmenucart_ajax_assist = {
			"shop_plugin": "0",
			"always_display": "1"
		};
		/* ]]> */
	</script>
	<script type="text/javascript" src="<?= $config ?>/wp-content/plugins/woocommerce-menu-bar-cart/assets/js/wpmenucart-ajax-assist.min.js?ver=2.10.4" id="wpmenucart-ajax-assist-js"></script>
	<link rel="https://api.w.org/" href="<?= $config ?>/wp-json/">
	<link rel="alternate" type="application/json" href="<?= $config ?>/wp-json/wp/v2/pages/9">
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?= $config ?>/xmlrpc.php?rsd">
	<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?= $config ?><?= $config ?>/wp-includes/wlwmanifest.xml">
	<meta name="generator" content="WordPress 5.9">
	<link rel="shortlink" href="<?= $config ?>">
	<link rel="alternate" type="application/json+oembed" href="<?= $config ?>/wp-json/oembed/1.0/embed?url=https%3A%2F%2F%2F">
	<link rel="alternate" type="text/xml+oembed" href="<?= $config ?>/wp-json/oembed/1.0/embed?url=https%3A%2F%2F%2F&#038;format=xml">
	<style>
		.bg {
			opacity: 0;
			transition: opacity 1s;
			-webkit-transition: opacity 1s;
		}

		.bg-loaded {
			opacity: 1;
		}
	</style>
	<!--[if IE]><link rel="stylesheet" type="text/css" href="httpscancauaba.xyz/wp-content/themes/flatsome/assets/css/ie-fallback.css"><script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.1/html5shiv.js"></script><script>var head = document.getElementsByTagName('head')[0],style = document.createElement('style');style.type = 'text/css';style.styleSheet.cssText = ':before,:after{content:none !important';head.appendChild(style);setTimeout(function(){head.removeChild(style);}, 0);</script><script src="httpscancauaba.xyz/wp-content/themes/flatsome/assets/libs/ie-flexibility.js"></script><![endif]-->
	<style id="custom-css" type="text/css">
		:root {
			--primary-color: #446084;
		}

		.header-main {
			height: 83px
		}

		#logo img {
			max-height: 83px
		}

		#logo {
			width: 143px;
		}

		.header-bottom {
			min-height: 55px
		}

		.header-top {
			min-height: 38px
		}

		.transparent .header-main {
			height: 265px
		}

		.transparent #logo img {
			max-height: 265px
		}

		.has-transparent+.page-title:first-of-type,
		.has-transparent+#main>.page-title,
		.has-transparent+#main>div>.page-title,
		.has-transparent+#main .page-header-wrapper:first-of-type .page-title {
			padding-top: 295px;
		}

		.header.show-on-scroll,
		.stuck .header-main {
			height: 70px !important
		}

		.stuck #logo img {
			max-height: 70px !important
		}

		.search-form {
			width: 54%;
		}

		.header-bg-color,
		.header-wrapper {
			background-color: #446084
		}

		.header-bottom {
			background-color: #f1f1f1
		}

		.header-main .nav>li>a {
			line-height: 16px
		}

		.header-bottom-nav>li>a {
			line-height: 16px
		}

		@media (max-width: 549px) {
			.header-main {
				height: 70px
			}

			#logo img {
				max-height: 70px
			}
		}

		.header-top {
			background-color: #343a40 !important;
		}

		body {
			font-family: "Lato", sans-serif
		}

		body {
			font-weight: 400
		}

		.nav>li>a {
			font-family: "Lato", sans-serif;
		}

		.mobile-sidebar-levels-2 .nav>li>ul>li>a {
			font-family: "Lato", sans-serif;
		}

		.nav>li>a {
			font-weight: 700;
		}

		.mobile-sidebar-levels-2 .nav>li>ul>li>a {
			font-weight: 700;
		}

		h1,
		h2,
		h3,
		h4,
		h5,
		h6,
		.heading-font,
		.off-canvas-center .nav-sidebar.nav-vertical>li>a {
			font-family: "Lato", sans-serif;
		}

		h1,
		h2,
		h3,
		h4,
		h5,
		h6,
		.heading-font,
		.banner h1,
		.banner h2 {
			font-weight: 700;
		}

		.alt-font {
			font-family: "Dancing Script", sans-serif;
		}

		.alt-font {
			font-weight: 400 !important;
		}

		.footer-1 {
			background-color: #446084
		}

		.label-new.menu-item>a:after {
			content: "New";
		}

		.label-hot.menu-item>a:after {
			content: "Hot";
		}

		.label-sale.menu-item>a:after {
			content: "Sale";
		}

		.label-popular.menu-item>a:after {
			content: "Popular";
		}
	</style>
</head>

<body class="home page-template-default page page-id-9 wp-custom-logo wp-schema-pro-1.4.1 header-shadow lightbox nav-dropdown-has-arrow">


	<a class="skip-link screen-reader-text" href="#main">Skip to content</a>

	<div id="wrapper">


		<header id="header" class="header has-sticky sticky-jump">
			<div class="header-wrapper">
				<div id="top-bar" class="header-top hide-for-sticky nav-dark">
					<div class="flex-row container">
						<div class="flex-col hide-for-medium flex-left">
							<ul class="nav nav-left medium-nav-center nav-small  nav-box">
								<li class="header-contact-wrapper">
									<ul id="header-contact" class="nav nav-divided nav-uppercase header-contact">

										<li class="">
											<a href="mailto:anhbafishing@gmail.com" class="tooltip" title="anhbafishing@gmail.com">
												<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-plus" viewBox="0 0 16 16">
													<path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z" />
													<path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 0-.5.5v1h-1a.5.5 0 0 0 0 1h1v1a.5.5 0 0 0 1 0v-1h1a.5.5 0 0 0 0-1h-1v-1a.5.5 0 0 0-.5-.5Z" />
												</svg> <span style="padding-left: 5px;">
													ngoclongg12@gmail.com </span>
											</a>
										</li>

										<li class="">
											<a class="tooltip" title="08:00 - 21:00 ">
												<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16">
													<path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z" />
													<path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z" />
												</svg> <span style="padding-left: 5px;">08:00 - 21:00</span>
											</a>
										</li>

										<li class="">
											<a href="tel:0373295525" class="tooltip" title="0373295525">
												<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-forward" viewBox="0 0 16 16">
													<path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zm10.762.135a.5.5 0 0 1 .708 0l2.5 2.5a.5.5 0 0 1 0 .708l-2.5 2.5a.5.5 0 0 1-.708-.708L14.293 4H9.5a.5.5 0 0 1 0-1h4.793l-1.647-1.646a.5.5 0 0 1 0-.708z" />
												</svg> <span style="padding-left: 5px;">0373295525</span>
											</a>
										</li>
									</ul>
								</li>
							</ul>
						</div>

						<div class="flex-col hide-for-medium flex-center">
							<ul class="nav nav-center nav-small  nav-box">
							</ul>
						</div>

						<div class="flex-col hide-for-medium flex-right">
							<ul class="nav top-bar-nav nav-right nav-small  nav-box">
								<li class="html header-button-1">
									<div class="header-button">
										<a rel="noopener noreferrer" href="./login/dangnhap.php" target="_blank" class="button primary is-outline is-small" style="border-radius:5px;">
											<span>Đăng nhập</span>
										</a>
									</div>
								</li>


								<li class="header-divider">
								<li class="html header-button-2">
									<div class="header-button">
										<a rel="noopener noreferrer" href="./login/Dangki.php" class="button primary is-outline is-small" style="border-radius:5px;">
											<span>Đăng ký</span>
										</a>
									</div>
								</li>
							</ul>
						</div>

						<div class="flex-col show-for-medium flex-grow">
							<ul class="nav nav-center nav-small mobile-nav  nav-box">
								<li class="html header-button-1">
									<div class="header-button">
										<a rel="noopener noreferrer" href="#" target="_blank" class="button primary is-outline is-small" style="border-radius:5px;">
											<span>Đăng nhập</span>
										</a>
									</div>
								</li>


								<li class="header-divider">
								<li class="html header-button-2">
									<div class="header-button">
										<a rel="noopener noreferrer" class="button primary is-outline is-small" style="border-radius:5px;">
											<span>Đăng ký</span>
										</a>
									</div>
								</li>
							</ul>
						</div>

					</div>
				</div>
				<div id="masthead" class="header-main nav-dark">
					<div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">

						<!-- Logo -->
						<div id="logo" class="flex-col logo">
							<!-- Header logo -->
							<a href="/" title="Cần câu A Ba - Chuyên dịch vụ câu" rel="home">
								<img width="143" height="83" src="<?= $config ?>/wp-content/uploads/2022/01/logo.png" class="header_logo header-logo" alt="Cần câu A Ba"><img width="143" height="83" src="<?= $config ?>/wp-content/uploads/2022/01/logo.png" class="header-logo-dark" alt="Cần câu A Ba"></a>
						</div>

						<!-- Mobile Left Elements -->
						<div class="flex-col show-for-medium flex-left">
							<ul class="mobile-nav nav nav-left ">
								<li class="nav-icon has-icon">
									<a href="#" data-open="#main-menu" data-pos="left" data-bg="main-menu-overlay" data-color="" class="is-small" aria-label="Menu" aria-controls="main-menu" aria-expanded="false">

										<i class="icon-menu"></i>
									</a>
								</li>
							</ul>
						</div>

						<!-- Left Elements -->
						<div class="flex-col hide-for-medium flex-left
            flex-grow">
							<ul class="header-nav header-nav-main nav nav-left  nav-size-medium nav-uppercase">
								<li class="header-search header-search-lightbox has-icon">
									<a href="#search-lightbox" aria-label="Search" data-open="#search-lightbox" data-focus="input.search-field" class="is-small">

										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
											<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
										</svg>
									</a>

									<div id="search-lightbox" class="mfp-hide dark text-center">
										<div class="searchform-wrapper ux-search-box relative form-flat is-large">
											<form method="get" class="searchform" action="httpscancauaba.xyz/" role="search">
												<div class="flex-row relative">
													<div class="flex-col flex-grow">
														<input type="search" class="search-field mb-0" name="s" value="" id="s" placeholder="Tìm kiếm...">
													</div>
													<div class="flex-col">
														<button type="submit" class="ux-search-submit submit-button secondary button icon mb-0" aria-label="Submit">
															<!-- <i class="icon-search"></i>  -->
															<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
																<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
															</svg>
														</button>
													</div>
												</div>
												<div class="live-search-results text-left z-top"></div>
											</form>
										</div>
									</div>
								</li>
								<li id="menu-item-20" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-20 active"><a href="<?= $config ?>" aria-current="page" class="nav-top-link">Trang chủ</a></li>
								<li id="menu-item-21" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21"><a href="<?= $config ?>/can-cau/" class="nav-top-link">Cần câu</a></li>
								<li id="menu-item-23" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23"><a href="<?= $config ?>/kinh-nghiem/" class="nav-top-link">Kinh nghiệm</a></li>
								<li id="menu-item-24" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24"><a href="<?= $config ?>/lien-he/" class="nav-top-link">Liên hệ</a></li>
								<li id="menu-item-162" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-162"><a href="<?= $config ?>/gioi-thieu/" class="nav-top-link">Giới thiệu</a></li>
							</ul>
						</div>

						<!-- Right Elements -->
						<div class="flex-col hide-for-medium flex-right">
							<ul class="header-nav header-nav-main nav nav-right  nav-size-medium nav-uppercase">
								<li>
									<?php
									if (isset($_SESSION['hoTen'])) {
									?>
										<div class="acc-user user">
											<div>Hello,
												<?php
												$ssHoTen = $_SESSION['hoTen'];
												$ten = explode(' ', $ssHoTen);
												echo $ten[count($ten) - 1];
												?>
											</div>
											<div class="opAccHide hide">
												<?php
												if (isset($_SESSION["quyen"]) && $_SESSION["quyen"] == "0") {
												?>
													<div>
														<a href="./admin/trangquantri.php">Trang quản trị</a>
													</div>
												<?php
												}
												?>
												<div>
													<a href="./login/Doimatkhau.php">Đổi mật khẩu</a>
												</div>
												<div>
													<a href="./login/Dangxuat.php">Đăng xuất</a>
												</div>
											</div>
										</div>
									<?php
									} else {
									?>
										<a href="./login/Dangnhap.php" class="element-error tooltip" title="Tài khoản">
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
												<path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
											</svg>
										</a>
									<?php
									}
									?>
									<div class="login-hide hide">
										<div>
											<a href="./login/Dangki.php">Đăng ký</a>
										</div>
										<div>
											<a href="./login/Doimatkhau.php">Đổi mật khẩu</a>
										</div>
									</div>

									<!-- </div> -->
								</li>
								|
								<li>
									<a class="element-error tooltip" href="./cart/cart.php" title="Giỏ hàng">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
											<path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
										</svg>
									</a>
								</li>
							</ul>
						</div>

						<!-- Mobile Right Elements -->
						<div class="flex-col show-for-medium flex-right">
							<ul class="mobile-nav nav nav-right ">
							</ul>
						</div>

					</div>

					<div class="container">
						<div class="top-divider full-width"></div>
					</div>
				</div>
				<div class="header-bg-container fill">
					<div class="header-bg-image fill"></div>
					<div class="header-bg-color fill"></div>
				</div>
			</div>
		</header>


		<main id="main" class="">
			<div id="content" class="content-area page-wrapper" role="main">
				<div class="row row-main">
					<div class="large-12 col">
						<div class="col-inner">



							<section class="section" id="section_1338031667">
								<div class="bg section-bg fill bg-fill  bg-loaded">





								</div>

								<div class="section-content relative">

									<div class="row row-small align-equal" id="row-1612092285">

										<div id="col-852723169" class="col medium-4 small-12 large-4">
											<div class="col-inner">



												<div class="block-danhmuc danhmuc1">
													<?php
													while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) { 
													?>
													<a class="plain" href="#">
														<div class="icon-box featured-box icon-box-left text-left" style="margin:0px 0px 10px 0px;">
															<div class="icon-box-img" style="width: 30px">
																<div class="icon">
																	<div class="icon-inner">
																		<img width="300" height="300" src="<?= $config ?>/wp-content/uploads/2022/01/dress-300x300.png" class="attachment-medium size-medium" alt="" loading="lazy" srcset="<?= $config ?>/wp-content/uploads/2022/01/dress-300x300.png 300w, /wp-content/uploads/2022/01/dress-150x150.png 150w, /wp-content/uploads/2022/01/dress.png 512w" sizes="(max-width: 300px) 100vw, 300px">
																	</div>
																</div>
															</div>
															<div class="icon-box-text last-reset">
	
																<p><?= $row_danhmuc['name'] ?></p>
															</div>
														</div>
													</a>
													<div class="container show-danhmuc show-danhmuc1">
														<div class="row">
															<?php 
																$id_dm_con_new = $row_danhmuc['id'];
																$danhmuc_con = "SELECT * FROM danhsach_dm_con WHERE id_dm = $id_dm_con_new";
																$query_danhmuc_con = mysqli_query($connect, $danhmuc_con);
																while ($row_danhmuc_con = mysqli_fetch_array($query_danhmuc_con)) {
															?>
															<div class="col-md-4">
																<div class="col-md-12"><?= $row_danhmuc_con['name'] ?></div>
																<div class="col-md-12">
																	<a href="abc.zxc">Test cau don</a>
																</div>
																<div class="col-md-12">
																	<a href="zxc.asdasd">Test cau don</a>
																</div>
																<div class="col-md-12">
																	<a href="zxc.asdasd">Test cau don</a>
																</div>
															</div>
															<?php } ?>
														</div>
													</div>
													<?php } ?>
													<?php include_once "./list-cancau/caudon.php" ?>
												</div>

												<!-- <div class="block-danhmuc danhmuc2">
													<a class="plain" href="#">
														<div class="icon-box featured-box icon-box-left text-left" style="margin:0px 0px 10px 0px;">
															<div class="icon-box-img" style="width: 30px">
																<div class="icon">
																	<div class="icon-inner">
																		<img width="300" height="300" src="<?= $config ?>/wp-content/uploads/2022/01/shirt-300x300.png" class="attachment-medium size-medium" alt="" loading="lazy" srcset="<?= $config ?>/wp-content/uploads/2022/01/shirt-300x300.png 300w, /wp-content/uploads/2022/01/shirt-150x150.png 150w, /wp-content/uploads/2022/01/shirt.png 512w" sizes="(max-width: 300px) 100vw, 300px">
																	</div>
																</div>
															</div>
															<div class="icon-box-text last-reset">

																<p>Câu Lục</p>
															</div>
														</div>
													</a>
													<?php include_once "./list-cancau/cauluc.php" ?>
												</div>

												<div class="block-danhmuc danhmuc3">
													<a class="plain" href="#">
														<div class="icon-box featured-box icon-box-left text-left" style="margin:0px 0px 10px 0px;">
															<div class="icon-box-img" style="width: 30px">
																<div class="icon">
																	<div class="icon-inner">
																		<img width="300" height="300" src="<?= $config ?>/wp-content/uploads/2022/01/couch-300x300.png" class="attachment-medium size-medium" alt="" loading="lazy" srcset="<?= $config ?>/wp-content/uploads/2022/01/couch-300x300.png 300w, /wp-content/uploads/2022/01/couch-150x150.png 150w, /wp-content/uploads/2022/01/couch.png 512w" sizes="(max-width: 300px) 100vw, 300px">
																	</div>
																</div>
															</div>
															<div class="icon-box-text last-reset">

																<p>Dây Câu</p>
															</div>
														</div>
													</a>
													<?php include_once "./list-cancau/daycau.php" ?>
												</div>

												<div class="block-danhmuc danhmuc4">
													<a class="plain" href="#">
														<div class="icon-box featured-box icon-box-left text-left" style="margin:0px 0px 10px 0px;">
															<div class="icon-box-img" style="width: 30px">
																<div class="icon">
																	<div class="icon-inner">
																		<img width="300" height="300" src="<?= $config ?>/wp-content/uploads/2022/01/devices-1-300x300.png" class="attachment-medium size-medium" alt="" loading="lazy" srcset="<?= $config ?>/wp-content/uploads/2022/01/devices-1-300x300.png 300w, /wp-content/uploads/2022/01/devices-1-150x150.png 150w, /wp-content/uploads/2022/01/devices-1.png 512w" sizes="(max-width: 300px) 100vw, 300px">
																	</div>
																</div>
															</div>
															<div class="icon-box-text last-reset">

																<p>Mồi câu</p>
															</div>
														</div>
													</a>
													<?php include_once "./list-cancau/moicau.php" ?>
												</div>

												<div class="block-danhmuc danhmuc5">
													<a class="plain" href="#">
														<div class="icon-box featured-box icon-box-left text-left" style="margin:0px 0px 10px 0px;">
															<div class="icon-box-img" style="width: 30px">
																<div class="icon">
																	<div class="icon-inner">
																		<img width="300" height="300" src="<?= $config ?>/wp-content/uploads/2022/01/basketball-300x300.png" class="attachment-medium size-medium" alt="" loading="lazy" srcset="<?= $config ?>/wp-content/uploads/2022/01/basketball-300x300.png 300w, /wp-content/uploads/2022/01/basketball-150x150.png 150w, /wp-content/uploads/2022/01/basketball.png 512w" sizes="(max-width: 300px) 100vw, 300px">
																	</div>
																</div>
															</div>
															<div class="icon-box-text last-reset">

																<p>Lưỡi câu</p>
															</div>
														</div>
													</a>
													<?php include_once "./list-cancau/luoicau.php" ?>
												</div>

												<div class="block-danhmuc danhmuc6">
													<a class="plain" href="#">
														<div class="icon-box featured-box icon-box-left text-left" style="margin:0px 0px 10px 0px;">
															<div class="icon-box-img" style="width: 30px">
																<div class="icon">
																	<div class="icon-inner">
																		<img width="300" height="300" src="<?= $config ?>/wp-content/uploads/2022/01/rings-300x300.png" class="attachment-medium size-medium" alt="" loading="lazy" srcset="<?= $config ?>/wp-content/uploads/2022/01/rings-300x300.png 300w, /wp-content/uploads/2022/01/rings-150x150.png 150w, /wp-content/uploads/2022/01/rings.png 512w" sizes="(max-width: 300px) 100vw, 300px">
																	</div>
																</div>
															</div>
															<div class="icon-box-text last-reset">

																<p>Phao câu</p>
															</div>
														</div>
													</a>
													<?php include_once "./list-cancau/phaocau.php" ?>
												</div> -->

												<a class="plain" href="#">
													<div class="icon-box featured-box icon-box-left text-left" style="margin:0px 0px 10px 0px;">
														<div class="icon-box-img" style="width: 30px">
															<div class="icon">
																<div class="icon-inner">
																	<img width="300" height="300" src="<?= $config ?>/wp-content/uploads/2022/01/teddy-bear-300x300.png" class="attachment-medium size-medium" alt="" loading="lazy" srcset="<?= $config ?>/wp-content/uploads/2022/01/teddy-bear-300x300.png 300w, /wp-content/uploads/2022/01/teddy-bear-150x150.png 150w, /wp-content/uploads/2022/01/teddy-bear.png 512w" sizes="(max-width: 300px) 100vw, 300px">
																</div>
															</div>
														</div>
														<div class="icon-box-text last-reset">

															<p>Phụ kiện / thời trang câu</p>
														</div>
													</div>
												</a>

												<div id="gap-1221163548" class="gap-element clearfix" style="display:block; height:auto;">

													<style>
														#gap-1221163548 {
															padding-top: 30px;
														}
													</style>
												</div>

												<a class="button primary expand">
													<span>Sản phẩm khuyến mại</span>
												</a>

											</div>
										</div>



										<div id="col-476903369" class="col medium-12 small-12 large-8 medium-col-first">
											<div class="col-inner" style="background-color:rgb(242, 242, 242);">


												<div class="slider-wrapper relative" id="slider-704353619" style="background-color:rgb(98, 130, 245);">
													<div class="slider slider-nav-circle slider-nav-large slider-nav-light slider-style-normal" data-flickity-options='{
            "cellAlign": "center",
            "imagesLoaded": true,
            "lazyLoad": 1,
            "freeScroll": false,
            "wrapAround": true,
            "autoPlay": 6000,
            "pauseAutoPlayOnHover" : true,
            "prevNextButtons": true,
            "contain" : true,
            "adaptiveHeight" : true,
            "dragThreshold" : 10,
            "percentPosition": true,
            "pageDots": true,
            "rightToLeft": false,
            "draggable": true,
            "selectedAttraction": 0.1,
            "parallax" : 0,
            "friction": 0.6        }'>


														<div class="banner has-hover bg-zoom-fade has-slide-effect slide-fade-in-fast" id="banner-40174143">
															<div class="banner-inner fill">
																<div class="banner-bg fill">
																	<div class="bg fill bg-fill "></div>
																	<div class="overlay"></div>
																</div>
																<div class="banner-layers container">
																	<div class="fill banner-link"></div>
																	<div id="text-box-1609135399" class="text-box banner-layer x50 md-x50 lg-x50 y50 md-y50 lg-y50 res-text">
																		<div class="text dark">

																			<div class="text-inner text-center">

																				<h3 class="uppercase">Change this to anything</h3>
																				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
																				<a class="button white is-outline">
																					<span>Click me</span>
																				</a>

																			</div>
																		</div>

																		<style>
																			#text-box-1609135399 {
																				width: 60%;
																			}

																			#text-box-1609135399 .text {
																				font-size: 100%;
																			}
																		</style>
																	</div>

																</div>
															</div>


															<style>
																#banner-40174143 {
																	padding-top: 400px;
																	background-color: rgb(214, 44, 44);
																}

																#banner-40174143 .bg.bg-loaded {
																	background-image: url('<?= $config ?>/wp-content/uploads/2022/01/inside-weather-kbPZmDxPK9M-unsplash-small.jpg');
																}

																#banner-40174143 .overlay {
																	background-color: rgba(0, 0, 0, 0.17);
																}
															</style>
														</div>


														<?php while ($row_banner = mysqli_fetch_array($query_banner)) { ?>
															<div class="img has-hover x md-x lg-x y md-y lg-y" id="image_966265588">
																<div class="img-inner image-cover dark" style="padding-top:400px;">
																	<img width="300" height="213" src="<?= $config ?>/wp-content/uploads/2022/01/inside-weather-eAzLO5tr2_c-unsplash-small-300x213.jpg" class="attachment-medium size-medium" alt="" loading="lazy" srcset="<?= $config ?>/wp-content/uploads/2022/01/inside-weather-eAzLO5tr2_c-unsplash-small-300x213.jpg 300w, /wp-content/uploads/2022/01/inside-weather-eAzLO5tr2_c-unsplash-small-768x544.jpg 768w, /wp-content/uploads/2022/01/inside-weather-eAzLO5tr2_c-unsplash-small.jpg 800w" sizes="(max-width: 300px) 100vw, 300px">
																</div>

																<style>
																	#image_966265588 {
																		width: 100%;
																	}
																</style>
															</div>
														<?php } ?>
													</div>

													<div class="loading-spin dark large centered"></div>

												</div>


											</div>
										</div>



										<div id="col-1268079618" class="col medium-8 small-12 large-4">
											<div class="col-inner">


												<div class="box has-hover   has-hover box-shade dark box-text-bottom">

													<div class="box-image">
														<div class="image-cover" style="padding-top:70%;">
															<img width="800" height="435" src="<?= $config ?>/wp-content/uploads/2022/01/revolt-eeEsmrTVH7Q-unsplash-small.jpg" class="attachment- size-" alt="" loading="lazy" srcset="<?= $config ?>/wp-content/uploads/2022/01/revolt-eeEsmrTVH7Q-unsplash-small.jpg 800w, /wp-content/uploads/2022/01/revolt-eeEsmrTVH7Q-unsplash-small-300x163.jpg 300w, /wp-content/uploads/2022/01/revolt-eeEsmrTVH7Q-unsplash-small-768x418.jpg 768w" sizes="(max-width: 800px) 100vw, 800px">
															<div class="shade"></div>
														</div>
													</div>

													<div class="box-text text-left">
														<div class="box-text-inner">

															<h4>Công nghệ: Tiên tiến</h4>
															<p>Enjoy luxury sound</p>
															<a class="button primary is-small">
																<span>Shop now</span>
															</a>

														</div>
													</div>
												</div>

											</div>
										</div>



										<div id="col-1542665606" class="col medium-6 small-12 large-4">
											<div class="col-inner">


												<div class="box has-hover   has-hover box-shade dark box-text-bottom">

													<div class="box-image">
														<div class="image-cover" style="padding-top:70%;">
															<img width="800" height="420" src="<?= $config ?>/wp-content/uploads/2022/01/olena-sergienko-InlMkMNlrhY-unsplash-small.jpg" class="attachment- size-" alt="" loading="lazy" srcset="<?= $config ?>/wp-content/uploads/2022/01/olena-sergienko-InlMkMNlrhY-unsplash-small.jpg 800w, /wp-content/uploads/2022/01/olena-sergienko-InlMkMNlrhY-unsplash-small-300x158.jpg 300w, /wp-content/uploads/2022/01/olena-sergienko-InlMkMNlrhY-unsplash-small-768x403.jpg 768w" sizes="(max-width: 800px) 100vw, 800px">
															<div class="shade"></div>
														</div>
													</div>

													<div class="box-text text-left">
														<div class="box-text-inner">

															<h4>Giá thành: Cạnh tranh</h4>
															<p>Because life is good</p>
															<a class="button primary is-small">
																<span>Shop now</span>
															</a>

														</div>
													</div>
												</div>

											</div>
										</div>



										<div id="col-1589025588" class="col medium-6 small-12 large-4">
											<div class="col-inner">


												<div class="box has-hover   has-hover box-shade dark box-text-bottom">

													<div class="box-image">
														<div class="image-cover" style="padding-top:70%;">
															<img width="800" height="533" src="<?= $config ?>/wp-content/uploads/2022/01/inside-weather-OzqieLcs464-unsplash-small.jpg" class="attachment- size-" alt="" loading="lazy" srcset="<?= $config ?>/wp-content/uploads/2022/01/inside-weather-OzqieLcs464-unsplash-small.jpg 800w, /wp-content/uploads/2022/01/inside-weather-OzqieLcs464-unsplash-small-300x200.jpg 300w, /wp-content/uploads/2022/01/inside-weather-OzqieLcs464-unsplash-small-768x512.jpg 768w" sizes="(max-width: 800px) 100vw, 800px">
															<div class="shade"></div>
														</div>
													</div>

													<div class="box-text text-left">
														<div class="box-text-inner">

															<h4>Uy tín tạo niềm tin</h4>
															<p>Take a seat</p>
															<a class="button primary is-small">
																<span>Shop now</span>
															</a>

														</div>
													</div>
												</div>

											</div>
										</div>


									</div>
								</div>


								<style>
									#section_1338031667 {
										padding-top: 20px;
										padding-bottom: 20px;
									}
								</style>
							</section>

							<div class="container section-title-container hide-for-medium" style="margin-top:30px;">
								<h3 class="section-title section-title-center">
									<b></b><span class="section-title-main" style="color:rgb(68, 96, 132);">Đồ câu Anh Ba - Đại lý phân phối độc quyền công nghệ câu Châu Á</span><b></b>
								</h3>
							</div>
							<section class="section" id="section_530062612">
								<div class="bg section-bg fill bg-fill  bg-loaded">





								</div>

								<div class="section-content relative">

									<div class="row" id="row-1621220171">

										<div id="col-1205136914" class="col small-12 large-12">
											<div class="col-inner text-center">


												<h3>Sản phẩm bán chạy</h3>
												<div id="gap-1501467652" class="gap-element clearfix" style="display:block; height:auto;">

													<style>
														#gap-1501467652 {
															padding-top: 10px;
														}
													</style>
												</div>

												<div class="row" id="row-1987135554">

													<div id="col-1011914716" class="col medium-6 small-12 large-6">
														<div class="col-inner">


															<div class="box has-hover   has-hover box-text-bottom">

																<div class="box-image">
																	<div class="image-zoom-fade image-cover" style="padding-top:300px;">
																		<img width="1200" height="588" src="<?= $config ?>/wp-content/uploads/2022/01/flatsome-video-placeholder.jpg" class="attachment- size-" alt="" loading="lazy" srcset="<?= $config ?>/wp-content/uploads/2022/01/flatsome-video-placeholder.jpg 1200w, /wp-content/uploads/2022/01/flatsome-video-placeholder-300x147.jpg 300w, /wp-content/uploads/2022/01/flatsome-video-placeholder-1024x502.jpg 1024w, /wp-content/uploads/2022/01/flatsome-video-placeholder-768x376.jpg 768w" sizes="(max-width: 1200px) 100vw, 1200px">
																	</div>
																</div>

																<div class="box-text text-center">
																	<div class="box-text-inner">

																		<h4>Cần đôi nhập khẩu</h4>
																		<p>Image Box text</p>
																	</div>
																</div>
															</div>

														</div>
													</div>



													<div id="col-865136307" class="col medium-6 small-12 large-6">
														<div class="col-inner">


															<div class="box has-hover   has-hover box-text-bottom">

																<div class="box-image">
																	<div class="image-zoom-fade image-cover" style="padding-top:300px;">
																		<img width="800" height="420" src="<?= $config ?>/wp-content/uploads/2022/01/olena-sergienko-InlMkMNlrhY-unsplash-small.jpg" class="attachment- size-" alt="" loading="lazy" srcset="<?= $config ?>/wp-content/uploads/2022/01/olena-sergienko-InlMkMNlrhY-unsplash-small.jpg 800w, /wp-content/uploads/2022/01/olena-sergienko-InlMkMNlrhY-unsplash-small-300x158.jpg 300w, /wp-content/uploads/2022/01/olena-sergienko-InlMkMNlrhY-unsplash-small-768x403.jpg 768w" sizes="(max-width: 800px) 100vw, 800px">
																	</div>
																</div>

																<div class="box-text text-center">
																	<div class="box-text-inner">

																		<h4>Thùng câu Polime</h4>
																		<p>Image Box text</p>
																	</div>
																</div>
															</div>

														</div>
													</div>


												</div>
											</div>
										</div>


									</div>
								</div>


								<style>
									#section_530062612 {
										padding-top: 30px;
										padding-bottom: 30px;
									}
								</style>
							</section>

							<section class="section" id="section_1063447660">
								<div class="bg section-bg fill bg-fill  bg-loaded">





								</div>

								<div class="section-content relative">

									<div class="row row-large align-middle" id="row-1239762851">

										<div id="col-826217174" class="col medium-6 small-12 large-6">
											<div class="col-inner">



												<div class="banner has-hover" id="banner-1468018606">
													<div class="banner-inner fill">
														<div class="banner-bg fill">
															<div class="bg fill bg-fill "></div>

														</div>
														<div class="banner-layers container">
															<div class="fill banner-link"></div>
														</div>
													</div>


													<style>
														#banner-1468018606 {
															padding-top: 60%;
															background-color: rgb(242, 242, 242);
														}

														#banner-1468018606 .bg.bg-loaded {
															background-image: url(/wp-content/uploads/2022/01/inside-weather-eAzLO5tr2_c-unsplash-small.jpg);
														}
													</style>
												</div>


											</div>
										</div>



										<div id="col-587182697" class="col medium-6 small-12 large-6">
											<div class="col-inner">


												<h3>We like to make it personal</h3>
												<p><span style="text-decoration: underline">Justi</span> a great place for SEO text ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
												<a class="button primary">
													<span>Read our story</span>
												</a>

											</div>
										</div>


									</div>
								</div>


								<style>
									#section_1063447660 {
										padding-top: 30px;
										padding-bottom: 30px;
									}
								</style>
							</section>

							<section class="section" id="section_2122410517">
								<div class="bg section-bg fill bg-fill  bg-loaded">





								</div>

								<div class="section-content relative">

									<div class="container section-title-container">
										<h3 class="section-title section-title-normal">
											<b></b><span class="section-title-main" style="color:rgb(68, 96, 132);">Sản phẩm mới</span><b></b>
										</h3>
									</div>
									<div class="slider-wrapper relative" id="slider-1683558940" style="margin-bottom:50px;">
										<div class="slider slider-nav-reveal slider-nav-large slider-nav-light slider-style-normal" data-flickity-options='{
            "cellAlign": "center",
            "imagesLoaded": true,
            "lazyLoad": 1,
            "freeScroll": false,
            "wrapAround": true,
            "autoPlay": 3000,
            "pauseAutoPlayOnHover" : true,
            "prevNextButtons": false,
            "contain" : true,
            "adaptiveHeight" : true,
            "dragThreshold" : 10,
            "percentPosition": true,
            "pageDots": true,
            "rightToLeft": false,
            "draggable": true,
            "selectedAttraction": 0.1,
            "parallax" : 0,
            "friction": 0.6        }'>

											<div class="row" id="row-943052080">

												<?php while($row_product_new1 = mysqli_fetch_array($query_product_new1)) {?>
												<div id="col-2082039593" class="col medium-3 small-6 large-3">
													<div class="col-inner">


														<div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1652695089">
															<div class="img-inner image-cover dark" style="padding-top:160px;">
																<img width="800" height="567" src="<?= $config ?>/wp-content/uploads/2022/01/inside-weather-eAzLO5tr2_c-unsplash-small.jpg" class="attachment-large size-large" alt="" loading="lazy" srcset="<?= $config ?>/wp-content/uploads/2022/01/inside-weather-eAzLO5tr2_c-unsplash-small.jpg 800w, /wp-content/uploads/2022/01/inside-weather-eAzLO5tr2_c-unsplash-small-300x213.jpg 300w, /wp-content/uploads/2022/01/inside-weather-eAzLO5tr2_c-unsplash-small-768x544.jpg 768w" sizes="(max-width: 800px) 100vw, 800px">
															</div>

															<style>
																#image_1652695089 {
																	width: 100%;
																}
															</style>
														</div>

													</div>
												</div>
												<?php } ?>


											</div>

											<div class="row" id="row-943052081">

												<?php while($row_product_new2 = mysqli_fetch_array($query_product_new2)) {?>
												<div id="col-2082039593" class="col medium-3 small-6 large-3">
													<div class="col-inner">


														<div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1652695089">
															<div class="img-inner image-cover dark" style="padding-top:160px;">
																<img width="800" height="567" src="<?= $config ?>/wp-content/uploads/2022/01/inside-weather-eAzLO5tr2_c-unsplash-small.jpg" class="attachment-large size-large" alt="" loading="lazy" srcset="<?= $config ?>/wp-content/uploads/2022/01/inside-weather-eAzLO5tr2_c-unsplash-small.jpg 800w, /wp-content/uploads/2022/01/inside-weather-eAzLO5tr2_c-unsplash-small-300x213.jpg 300w, /wp-content/uploads/2022/01/inside-weather-eAzLO5tr2_c-unsplash-small-768x544.jpg 768w" sizes="(max-width: 800px) 100vw, 800px">
															</div>

															<style>
																#image_1652695089 {
																	width: 100%;
																}
															</style>
														</div>

													</div>
												</div>
												<?php } ?>


											</div>
											
										</div>

										<div class="loading-spin dark large centered"></div>

									</div>


								</div>


								<style>
									#section_2122410517 {
										padding-top: 0px;
										padding-bottom: 0px;
									}
								</style>
							</section>

							<section class="section" id="section_1309472409">
								<div class="bg section-bg fill bg-fill  bg-loaded">





								</div>

								<div class="section-content relative">

									<div class="container section-title-container">
										<h3 class="section-title section-title-normal">
											<b></b><span class="section-title-main" style="color:rgb(68, 96, 132);">Cần câu</span><b></b>
										</h3>
									</div>
									<div class="row row-dashed" id="row-797195334">
										<?php while ($row = mysqli_fetch_array($query)) { ?>
											<a href="./layout/product-page.php?id_sp=<?= $row['ID'] ?>" id="col-1264949517" class="col medium-3 small-6 large-3">
												<div class="col-inner">


													<div class="box has-hover   has-hover box-shadow-1 box-text-bottom">

														<div class="box-image">
															<div class="image-zoom image-cover" style="padding-top:160px;">
																<img width="1200" height="588" 
																src="<?= $config . '/img' . '/' . $row['Image']?>" 
																class="attachment- size-" alt="" loading="lazy" 
																sizes="(max-width: 1200px) 100vw, 1200px">
															</div>
														</div>

														<div class="box-text text-center">
															<div class="box-text-inner">

																<h4><?= $row['Name'] ?></h4>
																<p><?= number_format($row['Price']) ?> đ</p>
															</div>
															<form action="./cart/cart_process.php">
																<input name="id_sp" value="<?= $row['ID'] ?>" type="hidden">
																<input name="t" value="add" type="hidden">
																<button class="button primary">Add to cart</button>
															</form>
														</div>
														
													</div>
													

												</div>
												
											</a>
										<?php } ?>

										<style>
											#row-797195334>.col>.col-inner {
												padding: 0px 0px p0x 0px;
											}
										</style>
									</div>
									<div class="row row-dashed" id="row-1961222466">

										<style>
											#row-1961222466>.col>.col-inner {
												padding: 0px 0px p0x 0px;
											}
										</style>
									</div>
									<div class="row align-right" id="row-1850093655">

										<div id="col-806447141" class="col small-12 large-12">
											<div class="col-inner text-center">


												<a data-animate="fadeInUp" class="button primary is-smaller reveal-icon expand">
													<span>Xem thêm sản phẩm</span>
												</a>

											</div>
										</div>


									</div>
								</div>


								<style>
									#section_1309472409 {
										padding-top: 30px;
										padding-bottom: 30px;
										margin-bottom: 50px;
									}
								</style>
							</section>

							<section class="section" id="section_1045025917">
								<div class="bg section-bg fill bg-fill  bg-loaded">





								</div>

								<div class="section-content relative">

									<div class="row" id="row-1052051515">

										<div id="col-1284691074" class="col small-12 large-12">
											<div class="col-inner" style="background-color:rgb(242, 242, 242);">


												<div class="row" id="row-1534186105">

													<div id="col-1724440734" class="col medium-12 small-12 large-4">
														<div class="col-inner">



															<div class="icon-box featured-box icon-box-left text-left">
																<div class="icon-box-img" style="width: 30px">
																	<div class="icon">
																		<div class="icon-inner">
																			<img width="256" height="256" src="<?= $config ?>/wp-content/uploads/2022/01/shipping-icon-flatelements.png" class="attachment-medium size-medium" alt="" loading="lazy" srcset="<?= $config ?>/wp-content/uploads/2022/01/shipping-icon-flatelements.png 256w, /wp-content/uploads/2022/01/shipping-icon-flatelements-150x150.png 150w" sizes="(max-width: 256px) 100vw, 256px">
																		</div>
																	</div>
																</div>
																<div class="icon-box-text last-reset">

																	<h5> Free delivery from €50,- </h5>
																</div>
															</div>


														</div>
													</div>



													<div id="col-1237448850" class="col medium-12 small-12 large-4">
														<div class="col-inner">



															<div class="icon-box featured-box icon-box-left text-left">
																<div class="icon-box-img" style="width: 30px">
																	<div class="icon">
																		<div class="icon-inner">
																			<img width="256" height="256" src="<?= $config ?>/wp-content/uploads/2022/01/returns-icon-flatelements.png" class="attachment-medium size-medium" alt="" loading="lazy" srcset="<?= $config ?>/wp-content/uploads/2022/01/returns-icon-flatelements.png 256w, /wp-content/uploads/2022/01/returns-icon-flatelements-150x150.png 150w" sizes="(max-width: 256px) 100vw, 256px">
																		</div>
																	</div>
																</div>
																<div class="icon-box-text last-reset">

																	<h5> Worldwide shipping </h5>
																</div>
															</div>


														</div>
													</div>



													<div id="col-1972610064" class="col medium-12 small-12 large-4">
														<div class="col-inner">



															<div class="icon-box featured-box icon-box-left text-left">
																<div class="icon-box-img" style="width: 30px">
																	<div class="icon">
																		<div class="icon-inner">
																			<img width="256" height="256" src="<?= $config ?>/wp-content/uploads/2022/01/payment-icon-flatelements.png" class="attachment-medium size-medium" alt="" loading="lazy" srcset="<?= $config ?>/wp-content/uploads/2022/01/payment-icon-flatelements.png 256w, /wp-content/uploads/2022/01/payment-icon-flatelements-150x150.png 150w" sizes="(max-width: 256px) 100vw, 256px">
																		</div>
																	</div>
																</div>
																<div class="icon-box-text last-reset">

																	<h5>14 days returntime </h5>
																</div>
															</div>


														</div>
													</div>


												</div>
											</div>

											<style>
												#col-1284691074>.col-inner {
													margin: -10px 0px -10px 0px;
												}
											</style>
										</div>



										<style>
											#row-1052051515>.col>.col-inner {
												padding: 20px 20px 0px 20px;
											}

											@media (min-width:550px) {
												#row-1052051515>.col>.col-inner {
													padding: 30px 30px 0px 30px;
												}
											}
										</style>
									</div>
								</div>


								<style>
									#section_1045025917 {
										padding-top: 0px;
										padding-bottom: 0px;
									}
								</style>
							</section>

							<div class="row" id="row-73271197">

								<div id="col-832084718" class="col small-12 large-12">
									<div class="col-inner">


										<section class="section dark" id="section_1021144119">
											<div class="bg section-bg fill bg-fill  ">

												<div class="video-overlay no-click fill hide-for-medium"></div>
												<video class="video-bg fill hide-for-medium" preload playsinline autoplay muted loop>
													<source src="https://cdn.webshopapp.com/shops/283663/files/296538447/access.mp4" type="video/mp4">
												</video>

												<div class="section-bg-overlay absolute fill"></div>


											</div>

											<div class="section-content relative">

												<div class="row row-collapse" id="row-1636256354">

													<div id="col-1809229875" class="col small-12 large-12">
														<div class="col-inner text-center">


															<h2>Get the best look today</h2>
															<p>Great for photo &#038; video presentation </p>
															<a class="button white">
																<span>Shop now</span>
															</a>

															<a class="button white is-outline">
																<span>About</span>
															</a>

														</div>
													</div>


												</div>
											</div>


											<style>
												#section_1021144119 {
													padding-top: 80px;
													padding-bottom: 80px;
													background-color: rgb(242, 242, 242);
												}

												#section_1021144119 .section-bg-overlay {
													background-color: rgba(0, 0, 0, 0.35);
												}

												#section_1021144119 .section-bg.bg-loaded {
													background-image: url(/wp-content/uploads/2022/01/flatsome-video-placeholder.jpg);
												}
											</style>
										</section>

									</div>
								</div>


							</div>
							<section class="section" id="section_191416760">
								<div class="bg section-bg fill bg-fill  bg-loaded">





								</div>

								<div class="section-content relative">

									<div class="row" id="row-36253544">

										<div id="col-1197988754" class="col small-12 large-12">
											<div class="col-inner text-center">


												<h3>Brands</h3>
												<div id="gap-163593530" class="gap-element clearfix" style="display:block; height:auto;">

													<style>
														#gap-163593530 {
															padding-top: 10px;
														}
													</style>
												</div>

												<div class="row row-small" id="row-832025461">

													<div id="col-229796427" class="col medium-2 small-4 large-2">
														<div class="col-inner">


															<div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1705176641">
																<div class="img-inner dark">
																	<img width="600" height="400" src="<?= $config ?>/wp-content/uploads/2022/01/landingpage-clean-studio-logo-1-flatsome-theme-uxbuilder.png" class="attachment-large size-large" alt="" loading="lazy" srcset="<?= $config ?>/wp-content/uploads/2022/01/landingpage-clean-studio-logo-1-flatsome-theme-uxbuilder.png 600w, /wp-content/uploads/2022/01/landingpage-clean-studio-logo-1-flatsome-theme-uxbuilder-300x200.png 300w" sizes="(max-width: 600px) 100vw, 600px">
																</div>

																<style>
																	#image_1705176641 {
																		width: 100%;
																	}
																</style>
															</div>

														</div>
													</div>



													<div id="col-247807594" class="col medium-2 small-4 large-2">
														<div class="col-inner">


															<div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1769210064">
																<div class="img-inner dark">
																	<img width="600" height="400" src="<?= $config ?>/wp-content/uploads/2022/01/landingpage-clean-studio-logo-2-flatsome-theme-uxbuilder.png" class="attachment-large size-large" alt="" loading="lazy" srcset="<?= $config ?>/wp-content/uploads/2022/01/landingpage-clean-studio-logo-2-flatsome-theme-uxbuilder.png 600w, /wp-content/uploads/2022/01/landingpage-clean-studio-logo-2-flatsome-theme-uxbuilder-300x200.png 300w" sizes="(max-width: 600px) 100vw, 600px">
																</div>

																<style>
																	#image_1769210064 {
																		width: 100%;
																	}
																</style>
															</div>

														</div>
													</div>



													<div id="col-967212112" class="col medium-2 small-4 large-2">
														<div class="col-inner">


															<div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1669411224">
																<div class="img-inner dark">
																	<img width="600" height="400" src="<?= $config ?>/wp-content/uploads/2022/01/landingpage-clean-studio-logo-3-flatsome-theme-uxbuilder.png" class="attachment-large size-large" alt="" loading="lazy" srcset="<?= $config ?>/wp-content/uploads/2022/01/landingpage-clean-studio-logo-3-flatsome-theme-uxbuilder.png 600w, /wp-content/uploads/2022/01/landingpage-clean-studio-logo-3-flatsome-theme-uxbuilder-300x200.png 300w" sizes="(max-width: 600px) 100vw, 600px">
																</div>

																<style>
																	#image_1669411224 {
																		width: 100%;
																	}
																</style>
															</div>

														</div>
													</div>



													<div id="col-1257830943" class="col medium-2 small-4 large-2">
														<div class="col-inner">


															<div class="img has-hover x md-x lg-x y md-y lg-y" id="image_15815987">
																<div class="img-inner dark">
																	<img width="600" height="400" src="<?= $config ?>/wp-content/uploads/2022/01/landingpage-clean-studio-logo-4-flatsome-theme-uxbuilder.png" class="attachment-large size-large" alt="" loading="lazy" srcset="<?= $config ?>/wp-content/uploads/2022/01/landingpage-clean-studio-logo-4-flatsome-theme-uxbuilder.png 600w, /wp-content/uploads/2022/01/landingpage-clean-studio-logo-4-flatsome-theme-uxbuilder-300x200.png 300w" sizes="(max-width: 600px) 100vw, 600px">
																</div>

																<style>
																	#image_15815987 {
																		width: 100%;
																	}
																</style>
															</div>

														</div>
													</div>



													<div id="col-2045041348" class="col medium-2 small-4 large-2">
														<div class="col-inner">


															<div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1555909889">
																<div class="img-inner dark">
																	<img width="600" height="400" src="<?= $config ?>/wp-content/uploads/2022/01/landingpage-clean-studio-logo-5-flatsome-theme-uxbuilder.png" class="attachment-large size-large" alt="" loading="lazy" srcset="<?= $config ?>/wp-content/uploads/2022/01/landingpage-clean-studio-logo-5-flatsome-theme-uxbuilder.png 600w, /wp-content/uploads/2022/01/landingpage-clean-studio-logo-5-flatsome-theme-uxbuilder-300x200.png 300w" sizes="(max-width: 600px) 100vw, 600px">
																</div>

																<style>
																	#image_1555909889 {
																		width: 100%;
																	}
																</style>
															</div>

														</div>
													</div>



													<div id="col-587645651" class="col medium-2 small-4 large-2">
														<div class="col-inner">


															<div class="img has-hover x md-x lg-x y md-y lg-y" id="image_355246509">
																<div class="img-inner dark">
																	<img width="600" height="400" src="<?= $config ?>/wp-content/uploads/2022/01/landingpage-clean-studio-logo-6-flatsome-theme-uxbuilder.png" class="attachment-large size-large" alt="" loading="lazy" srcset="<?= $config ?>/wp-content/uploads/2022/01/landingpage-clean-studio-logo-6-flatsome-theme-uxbuilder.png 600w, /wp-content/uploads/2022/01/landingpage-clean-studio-logo-6-flatsome-theme-uxbuilder-300x200.png 300w" sizes="(max-width: 600px) 100vw, 600px">
																</div>

																<style>
																	#image_355246509 {
																		width: 100%;
																	}
																</style>
															</div>

														</div>
													</div>



													<style>
														#row-832025461>.col>.col-inner {
															background-color: rgb(242, 242, 242);
														}
													</style>
												</div>
											</div>
										</div>


									</div>
								</div>


								<style>
									#section_191416760 {
										padding-top: 0px;
										padding-bottom: 0px;
									}
								</style>
							</section>



						</div>
					</div>
				</div>
			</div>


		</main>

		<?php include_once'./layout/footer.php'; ?>
	
</body>


<!-- This website is like a Rocket, isn't it? Performance optimized by WP Rocket. Learn more: https://wp-rocket.me - Debug: cached@1644314382 -->

</html>