<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset ('AdminLTE') }}/dist/css/adminlte.min.css">
        <link rel="stylesheet" href="{{ asset ('AdminLTE') }}/plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="{{ asset ('AdminLTE') }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
        <link rel='stylesheet' id='kadence-global-css'  href='https://www.polibatam.ac.id/wp-content/themes/kadence/assets/css/global.min.css?ver=1.1.14' media='all' />
        <link rel="preload" id="kadence-header-preload" href="https://www.polibatam.ac.id/wp-content/themes/kadence/assets/css/header.min.css?ver=1.1.14" as="style">
        <link rel="preload" id="kadence-footer-preload" href="https://www.polibatam.ac.id/wp-content/themes/kadence/assets/css/footer.min.css?ver=1.1.14" as="style">
        <link rel="stylesheet" id="kadence-header-preload" href="https://www.polibatam.ac.id/wp-content/themes/kadence/assets/css/header.min.css?ver=1.1.14" as="style">
        <link rel="stylesheet" id="kadence-footer-preload" href="https://www.polibatam.ac.id/wp-content/themes/kadence/assets/css/footer.min.css?ver=1.1.14" as="style">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>
<style>
    .header {
    /* background: linear-gradient(60deg, rgb(183, 58, 58) 0%, rgb(193, 0, 0) 100%); */
    background: linear-gradient(60deg, rgba(84,58,183,1) 0%, rgba(0,172,193,1) 100%);
    }

    .flex { /*Flexbox for containers*/
    display: flex;
    }

    .waves {
    position:relative;
    width: 100%;
    height:15vh;
    margin-bottom:-7px; /*Fix for safari gap*/
    min-height:100px;
    max-height:150px;
    }

    .content {
    position:relative;
    height:20vh;
    background-color: white;
    }

    /* Animation */

    .parallax > use {
    animation: move-forever 25s cubic-bezier(.55,.5,.45,.5)     infinite;
    }
    .parallax > use:nth-child(1) {
    animation-delay: -2s;
    animation-duration: 7s;
    }
    .parallax > use:nth-child(2) {
    animation-delay: -3s;
    animation-duration: 10s;
    }
    .parallax > use:nth-child(3) {
    animation-delay: -4s;
    animation-duration: 13s;
    }
    .parallax > use:nth-child(4) {
    animation-delay: -5s;
    animation-duration: 20s;
    }
    @keyframes move-forever {
    0% {
    transform: translate3d(-90px,0,0);
    }
    100% {
        transform: translate3d(85px,0,0);
    }
    }
    /*Shrinking for mobile*/
    @media (max-width: 768px) {
    .waves {
        height:40px;
        min-height:40px;
    }
    .content {
        height:30vh;
    }
    h1 {
        font-size:24px;
    }
    }
</style>
<style id='kadence-global-inline-css'>
    /* Kadence Base CSS */
    :root{--global-palette1:#ff7f00;--global-palette2:#ff9226;--global-palette3:#242d2d;--global-palette4:#3a4646;--global-palette5:#5f5f5f;--global-palette6:#c5c5c5;--global-palette7:#e8e8e8;--global-palette8:#f7f7f7;--global-palette9:#ffffff;--global-palette9rgb:255, 255, 255;--global-palette-highlight:var(--global-palette1);--global-palette-highlight-alt:var(--global-palette1);--global-palette-highlight-alt2:var(--global-palette9);--global-palette-btn-bg:#6bb3cc;--global-palette-btn-bg-hover:var(--global-palette2);--global-palette-btn:var(--global-palette9);--global-palette-btn-hover:var(--global-palette9);--global-body-font-family:'Source Sans Pro', sans-serif;--global-heading-font-family:Montserrat, sans-serif;--global-primary-nav-font-family:Montserrat, sans-serif;--global-fallback-font:sans-serif;--global-display-fallback-font:sans-serif;--global-content-width:1290px;--global-content-narrow-width:842px;--global-content-edge-padding:1.5rem;--global-calc-content-width:calc(1290px - var(--global-content-edge-padding) - var(--global-content-edge-padding) );}:root .has-theme-palette-1-background-color{background-color:var(--global-palette1);}:root .has-theme-palette-1-color{color:var(--global-palette1);}:root .has-theme-palette-2-background-color{background-color:var(--global-palette2);}:root .has-theme-palette-2-color{color:var(--global-palette2);}:root .has-theme-palette-3-background-color{background-color:var(--global-palette3);}:root .has-theme-palette-3-color{color:var(--global-palette3);}:root .has-theme-palette-4-background-color{background-color:var(--global-palette4);}:root .has-theme-palette-4-color{color:var(--global-palette4);}:root .has-theme-palette-5-background-color{background-color:var(--global-palette5);}:root .has-theme-palette-5-color{color:var(--global-palette5);}:root .has-theme-palette-6-background-color{background-color:var(--global-palette6);}:root .has-theme-palette-6-color{color:var(--global-palette6);}:root .has-theme-palette-7-background-color{background-color:var(--global-palette7);}:root .has-theme-palette-7-color{color:var(--global-palette7);}:root .has-theme-palette-8-background-color{background-color:var(--global-palette8);}:root .has-theme-palette-8-color{color:var(--global-palette8);}:root .has-theme-palette-9-background-color{background-color:var(--global-palette9);}:root .has-theme-palette-9-color{color:var(--global-palette9);}:root .has-theme-palette1-background-color{background-color:var(--global-palette1);}:root .has-theme-palette1-color{color:var(--global-palette1);}:root .has-theme-palette2-background-color{background-color:var(--global-palette2);}:root .has-theme-palette2-color{color:var(--global-palette2);}:root .has-theme-palette3-background-color{background-color:var(--global-palette3);}:root .has-theme-palette3-color{color:var(--global-palette3);}:root .has-theme-palette4-background-color{background-color:var(--global-palette4);}:root .has-theme-palette4-color{color:var(--global-palette4);}:root .has-theme-palette5-background-color{background-color:var(--global-palette5);}:root .has-theme-palette5-color{color:var(--global-palette5);}:root .has-theme-palette6-background-color{background-color:var(--global-palette6);}:root .has-theme-palette6-color{color:var(--global-palette6);}:root .has-theme-palette7-background-color{background-color:var(--global-palette7);}:root .has-theme-palette7-color{color:var(--global-palette7);}:root .has-theme-palette8-background-color{background-color:var(--global-palette8);}:root .has-theme-palette8-color{color:var(--global-palette8);}:root .has-theme-palette9-background-color{background-color:var(--global-palette9);}:root .has-theme-palette9-color{color:var(--global-palette9);}body{background:var(--global-palette8);}body, input, select, optgroup, textarea{font-style:normal;font-weight:normal;font-size:17px;line-height:2;font-family:var(--global-body-font-family);color:var(--global-palette4);}.content-bg, body.content-style-unboxed .site{background:var(--global-palette9);}h1,h2,h3,h4,h5,h6{font-family:var(--global-heading-font-family);}h1{font-style:normal;font-weight:400;font-size:40px;line-height:75px;letter-spacing:-0.5px;color:var(--global-palette3);}h2{font-style:normal;font-weight:700;font-size:30px;line-height:1.5;color:var(--global-palette3);}h3{font-style:normal;font-weight:700;font-size:26px;line-height:1.5;color:var(--global-palette3);}h4{font-style:normal;font-weight:400;font-size:22px;line-height:1.5;color:var(--global-palette4);}h5{font-style:normal;font-weight:400;font-size:17px;line-height:1.5;color:var(--global-palette4);}h6{font-style:normal;font-weight:300;font-size:16px;line-height:1.5;font-family:'Open Sans Condensed', sans-serif;color:var(--global-palette5);}.entry-hero h1{font-style:normal;color:var(--global-palette9);}.entry-hero .kadence-breadcrumbs{max-width:1290px;}.site-container, .site-header-row-layout-contained, .site-footer-row-layout-contained, .entry-hero-layout-contained, .comments-area, .alignfull > .wp-block-cover__inner-container, .alignwide > .wp-block-cover__inner-container{max-width:var(--global-content-width);}.content-width-narrow .content-container.site-container, .content-width-narrow .hero-container.site-container{max-width:var(--global-content-narrow-width);}@media all and (min-width: 1520px){.site .content-container  .alignwide{margin-left:-115px;margin-right:-115px;width:unset;max-width:unset;}}@media all and (min-width: 1102px){.content-width-narrow .site .content-container .alignwide{margin-left:-130px;margin-right:-130px;width:unset;max-width:unset;}}.content-style-boxed .site .entry-content .alignwide{margin-left:-2rem;margin-right:-2rem;}@media all and (max-width: 1024px){.content-style-boxed .site .entry-content .alignwide{margin-left:-2rem;margin-right:-2rem;}}@media all and (max-width: 767px){.content-style-boxed .site .entry-content .alignwide{margin-left:-1.5rem;margin-right:-1.5rem;}}.content-area{margin-top:5rem;margin-bottom:5rem;}@media all and (max-width: 1024px){.content-area{margin-top:3rem;margin-bottom:3rem;}}@media all and (max-width: 767px){.content-area{margin-top:2rem;margin-bottom:2rem;}}.entry-content-wrap{padding:2rem;}@media all and (max-width: 1024px){.entry-content-wrap{padding:2rem;}}@media all and (max-width: 767px){.entry-content-wrap{padding:1.5rem;}}.entry.single-entry{box-shadow:0px 15px 15px -10px rgba(0,0,0,0.05);}.entry.loop-entry{box-shadow:0px 15px 15px -10px rgba(0,0,0,0.05);}.loop-entry .entry-content-wrap{padding:2rem;}@media all and (max-width: 1024px){.loop-entry .entry-content-wrap{padding:2rem;}}@media all and (max-width: 767px){.loop-entry .entry-content-wrap{padding:1.5rem;}}.primary-sidebar.widget-area .widget{margin-bottom:1.5em;color:var(--global-palette4);}.primary-sidebar.widget-area .widget-title{font-weight:700;font-size:20px;line-height:1.5;color:var(--global-palette3);}button, .button, .wp-block-button__link, input[type="button"], input[type="reset"], input[type="submit"], .fl-button, .elementor-button-wrapper .elementor-button{font-style:normal;border-radius:15px;padding:01 01 01 01;box-shadow:0px 0px 0px -7px rgba(0,0,0,0);}.wp-block-button.is-style-outline .wp-block-button__link{padding:01 01 01 01;}button:hover, button:focus, button:active, .button:hover, .button:focus, .button:active, .wp-block-button__link:hover, .wp-block-button__link:focus, .wp-block-button__link:active, input[type="button"]:hover, input[type="button"]:focus, input[type="button"]:active, input[type="reset"]:hover, input[type="reset"]:focus, input[type="reset"]:active, input[type="submit"]:hover, input[type="submit"]:focus, input[type="submit"]:active, .elementor-button-wrapper .elementor-button:hover, .elementor-button-wrapper .elementor-button:focus, .elementor-button-wrapper .elementor-button:active{box-shadow:0px 15px 25px -7px rgba(0,0,0,0.1);}@media all and (min-width: 1025px){.transparent-header .entry-hero .entry-hero-container-inner{padding-top:calc(0px + 75px);}}@media all and (max-width: 1024px){.mobile-transparent-header .entry-hero .entry-hero-container-inner{padding-top:75px;}}@media all and (max-width: 767px){.mobile-transparent-header .entry-hero .entry-hero-container-inner{padding-top:75px;}}#colophon{background:#183a64;}.site-middle-footer-wrap .site-footer-row-container-inner{border-top:0px none transparent;}.site-middle-footer-inner-wrap{padding-top:30px;padding-bottom:30px;grid-column-gap:30px;grid-row-gap:30px;}.site-middle-footer-inner-wrap .widget{margin-bottom:30px;}.site-middle-footer-inner-wrap .site-footer-section:not(:last-child):after{right:calc(-30px / 2);}.site-top-footer-wrap .site-footer-row-container-inner{font-style:normal;font-size:15px;color:var(--global-palette9);border-top:5px none var(--global-palette6);}.site-footer .site-top-footer-wrap .site-footer-row-container-inner a:not(.button){color:#ffffff;}.site-top-footer-inner-wrap{padding-top:90px;padding-bottom:0px;grid-column-gap:60px;grid-row-gap:60px;}.site-top-footer-inner-wrap .widget{margin-bottom:30px;}.site-top-footer-inner-wrap .widget-area .widget-title{font-style:normal;font-weight:600;font-size:17px;font-family:Poppins, var(--global-fallback-font);color:var(--global-palette9);}.site-top-footer-inner-wrap .site-footer-section:not(:last-child):after{border-right:1px none var(--global-palette7);right:calc(-60px / 2);}@media all and (max-width: 1024px){.site-top-footer-inner-wrap{padding-bottom:10px;grid-column-gap:40px;grid-row-gap:40px;}.site-top-footer-inner-wrap .site-footer-section:not(:last-child):after{right:calc(-40px / 2);}}@media all and (max-width: 767px){.site-top-footer-inner-wrap{padding-top:90px;padding-bottom:60px;grid-column-gap:30px;grid-row-gap:30px;}.site-top-footer-inner-wrap .site-footer-section:not(:last-child):after{right:calc(-30px / 2);}}.site-bottom-footer-wrap .site-footer-row-container-inner{font-style:normal;font-size:13px;color:rgba(255,255,255,0.5);border-top:0px none transparent;border-bottom:0px none transparent;}.site-footer .site-bottom-footer-wrap .site-footer-row-container-inner a:not(.button){color:rgba(255,255,255,0.5);}.site-footer .site-bottom-footer-wrap .site-footer-row-container-inner a:not(.button):hover{color:#ffffff;}.site-bottom-footer-inner-wrap{padding-top:30px;padding-bottom:60px;grid-column-gap:30px;}.site-bottom-footer-inner-wrap .widget{margin-bottom:30px;}.site-bottom-footer-inner-wrap .widget-area .widget-title{font-style:normal;}.site-bottom-footer-inner-wrap .site-footer-section:not(:last-child):after{right:calc(-30px / 2);}@media all and (max-width: 767px){.site-bottom-footer-inner-wrap{padding-top:0px;padding-bottom:30px;}}.footer-social-inner-wrap{font-size:13px;margin-top:-0.5em;margin-left:calc(-0.5em / 2);margin-right:calc(-0.5em / 2);}.site-footer .site-footer-wrap .site-footer-section .footer-social-wrap .social-button{margin-top:0.5em;margin-left:calc(0.5em / 2);margin-right:calc(0.5em / 2);border:2px none transparent;border-radius:3px;}.footer-social-wrap .social-button .social-label{font-style:normal;font-weight:normal;font-family:Montserrat, sans-serif;text-transform:capitalize;}#colophon .footer-html{font-style:normal;font-weight:normal;font-size:13px;line-height:1.35;font-family:'Open Sans', var(--global-fallback-font);color:rgba(255,255,255,0.5);}#colophon .site-footer-row-container .site-footer-row .footer-html a{color:rgba(255,255,255,0.7);}#colophon .site-footer-row-container .site-footer-row .footer-html a:hover{color:var(--global-palette8);}#kt-scroll-up-reader, #kt-scroll-up{border:0px none currentColor;border-radius:5px 5px 5px 5px;color:var(--global-palette9);border-color:var(--global-palette6);bottom:30px;font-size:1.2em;padding:0.4em 0.4em 0.4em 0.4em;}#kt-scroll-up-reader.scroll-up-side-right, #kt-scroll-up.scroll-up-side-right{right:30px;}#kt-scroll-up-reader.scroll-up-side-left, #kt-scroll-up.scroll-up-side-left{left:30px;}#colophon .footer-navigation .footer-menu-container > ul > li > a{padding-left:calc(1em / 2);padding-right:calc(1em / 2);color:var(--global-palette9);}#colophon .footer-navigation .footer-menu-container > ul li a{font-style:normal;font-weight:normal;font-size:14px;font-family:'Open Sans', var(--global-fallback-font);}#colophon .footer-navigation .footer-menu-container > ul li a:hover{color:var(--global-palette9);}#colophon .footer-navigation .footer-menu-container > ul li.current-menu-item > a{color:var(--global-palette9);}.site .page-title h1{font-style:normal;font-size:70px;color:var(--global-palette9);}.page-title .kadence-breadcrumbs{font-style:normal;font-weight:600;font-family:'Open Sans', var(--global-fallback-font);}.page-hero-section .entry-hero-container-inner{background-color:var(--global-palette5);background-image:url('http://www.polibatam.ac.id/wp-content/uploads/2021/10/Kampus-Polibatam-1.webp');background-repeat:no-repeat;background-position:35% 0%;background-size:cover;background-attachment:scroll;border-bottom:0px none transparent;}.entry-hero.page-hero-section .entry-header{min-height:450px;}.page-hero-section .hero-section-overlay{background:linear-gradient(135deg,rgba(6,147,229,0.67) 0%,rgba(24,57,99,0.77) 36%);}.post-archive-hero-section .entry-hero-container-inner{background-color:var(--global-palette5);background-image:url('http://www.polibatam.ac.id/wp-content/uploads/2022/02/Lab-Broadcasting-1-min-1.jpg');background-repeat:no-repeat;background-position:center;background-size:cover;border-bottom:0px none transparent;}.entry-hero.post-archive-hero-section .entry-header{min-height:400px;}.post-archive-hero-section .hero-section-overlay{background:rgba(36,45,45,0.55);}.site .post-archive-title h1{color:#ffffff;}body.archive .content-bg, body.content-style-unboxed.archive .site, body.blog .content-bg, body.content-style-unboxed.blog .site{background:var(--global-palette8);}.loop-entry.type-post h2.entry-title{font-style:normal;font-weight:normal;font-size:25px;line-height:1.2;font-family:Poppins, var(--global-fallback-font);color:var(--global-palette3);}.loop-entry.type-post .entry-taxonomies{font-style:normal;font-weight:normal;font-family:Poppins, var(--global-fallback-font);}body.social-brand-colors .social-show-brand-hover .social-link-facebook:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until .social-link-facebook:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always .social-link-facebook:not(.ignore-brand):not(.skip):not(.ignore){background:#3b5998;}body.social-brand-colors .social-show-brand-hover.social-style-outline .social-link-facebook:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until.social-style-outline .social-link-facebook:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always.social-style-outline .social-link-facebook:not(.ignore-brand):not(.skip):not(.ignore){color:#3b5998;}body.social-brand-colors .social-show-brand-hover .social-link-instagram:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until .social-link-instagram:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always .social-link-instagram:not(.ignore-brand):not(.skip):not(.ignore){background:#517fa4;}body.social-brand-colors .social-show-brand-hover.social-style-outline .social-link-instagram:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until.social-style-outline .social-link-instagram:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always.social-style-outline .social-link-instagram:not(.ignore-brand):not(.skip):not(.ignore){color:#517fa4;}body.social-brand-colors .social-show-brand-hover .social-link-twitter:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until .social-link-twitter:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always .social-link-twitter:not(.ignore-brand):not(.skip):not(.ignore){background:#1DA1F2;}body.social-brand-colors .social-show-brand-hover.social-style-outline .social-link-twitter:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until.social-style-outline .social-link-twitter:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always.social-style-outline .social-link-twitter:not(.ignore-brand):not(.skip):not(.ignore){color:#1DA1F2;}body.social-brand-colors .social-show-brand-hover .social-link-youtube:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until .social-link-youtube:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always .social-link-youtube:not(.ignore-brand):not(.skip):not(.ignore){background:#FF3333;}body.social-brand-colors .social-show-brand-hover.social-style-outline .social-link-youtube:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until.social-style-outline .social-link-youtube:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always.social-style-outline .social-link-youtube:not(.ignore-brand):not(.skip):not(.ignore){color:#FF3333;}body.social-brand-colors .social-show-brand-hover .social-link-facebook_group:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until .social-link-facebook_group:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always .social-link-facebook_group:not(.ignore-brand):not(.skip):not(.ignore){background:#3b5998;}body.social-brand-colors .social-show-brand-hover.social-style-outline .social-link-facebook_group:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until.social-style-outline .social-link-facebook_group:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always.social-style-outline .social-link-facebook_group:not(.ignore-brand):not(.skip):not(.ignore){color:#3b5998;}body.social-brand-colors .social-show-brand-hover .social-link-vimeo:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until .social-link-vimeo:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always .social-link-vimeo:not(.ignore-brand):not(.skip):not(.ignore){background:#4EBBFF;}body.social-brand-colors .social-show-brand-hover.social-style-outline .social-link-vimeo:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until.social-style-outline .social-link-vimeo:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always.social-style-outline .social-link-vimeo:not(.ignore-brand):not(.skip):not(.ignore){color:#4EBBFF;}body.social-brand-colors .social-show-brand-hover .social-link-pinterest:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until .social-link-pinterest:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always .social-link-pinterest:not(.ignore-brand):not(.skip):not(.ignore){background:#C92228;}body.social-brand-colors .social-show-brand-hover.social-style-outline .social-link-pinterest:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until.social-style-outline .social-link-pinterest:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always.social-style-outline .social-link-pinterest:not(.ignore-brand):not(.skip):not(.ignore){color:#C92228;}body.social-brand-colors .social-show-brand-hover .social-link-linkedin:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until .social-link-linkedin:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always .social-link-linkedin:not(.ignore-brand):not(.skip):not(.ignore){background:#4875B4;}body.social-brand-colors .social-show-brand-hover.social-style-outline .social-link-linkedin:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until.social-style-outline .social-link-linkedin:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always.social-style-outline .social-link-linkedin:not(.ignore-brand):not(.skip):not(.ignore){color:#4875B4;}body.social-brand-colors .social-show-brand-hover .social-link-medium:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until .social-link-medium:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always .social-link-medium:not(.ignore-brand):not(.skip):not(.ignore){background:#181818;}body.social-brand-colors .social-show-brand-hover.social-style-outline .social-link-medium:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until.social-style-outline .social-link-medium:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always.social-style-outline .social-link-medium:not(.ignore-brand):not(.skip):not(.ignore){color:#181818;}body.social-brand-colors .social-show-brand-hover .social-link-wordpress:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until .social-link-wordpress:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always .social-link-wordpress:not(.ignore-brand):not(.skip):not(.ignore){background:#00749C;}body.social-brand-colors .social-show-brand-hover.social-style-outline .social-link-wordpress:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until.social-style-outline .social-link-wordpress:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always.social-style-outline .social-link-wordpress:not(.ignore-brand):not(.skip):not(.ignore){color:#00749C;}body.social-brand-colors .social-show-brand-hover .social-link-reddit:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until .social-link-reddit:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always .social-link-reddit:not(.ignore-brand):not(.skip):not(.ignore){background:#ff4500;}body.social-brand-colors .social-show-brand-hover.social-style-outline .social-link-reddit:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until.social-style-outline .social-link-reddit:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always.social-style-outline .social-link-reddit:not(.ignore-brand):not(.skip):not(.ignore){color:#ff4500;}body.social-brand-colors .social-show-brand-hover .social-link-patreon:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until .social-link-patreon:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always .social-link-patreon:not(.ignore-brand):not(.skip):not(.ignore){background:#052D49;}body.social-brand-colors .social-show-brand-hover.social-style-outline .social-link-patreon:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until.social-style-outline .social-link-patreon:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always.social-style-outline .social-link-patreon:not(.ignore-brand):not(.skip):not(.ignore){color:#052D49;}body.social-brand-colors .social-show-brand-hover .social-link-github:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until .social-link-github:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always .social-link-github:not(.ignore-brand):not(.skip):not(.ignore){background:#4078c0;}body.social-brand-colors .social-show-brand-hover.social-style-outline .social-link-github:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until.social-style-outline .social-link-github:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always.social-style-outline .social-link-github:not(.ignore-brand):not(.skip):not(.ignore){color:#4078c0;}body.social-brand-colors .social-show-brand-hover .social-link-dribbble:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until .social-link-dribbble:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always .social-link-dribbble:not(.ignore-brand):not(.skip):not(.ignore){background:#EA4C89;}body.social-brand-colors .social-show-brand-hover.social-style-outline .social-link-dribbble:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until.social-style-outline .social-link-dribbble:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always.social-style-outline .social-link-dribbble:not(.ignore-brand):not(.skip):not(.ignore){color:#EA4C89;}body.social-brand-colors .social-show-brand-hover .social-link-behance:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until .social-link-behance:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always .social-link-behance:not(.ignore-brand):not(.skip):not(.ignore){background:#1769ff;}body.social-brand-colors .social-show-brand-hover.social-style-outline .social-link-behance:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until.social-style-outline .social-link-behance:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always.social-style-outline .social-link-behance:not(.ignore-brand):not(.skip):not(.ignore){color:#1769ff;}body.social-brand-colors .social-show-brand-hover .social-link-vk:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until .social-link-vk:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always .social-link-vk:not(.ignore-brand):not(.skip):not(.ignore){background:#45668e;}body.social-brand-colors .social-show-brand-hover.social-style-outline .social-link-vk:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until.social-style-outline .social-link-vk:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always.social-style-outline .social-link-vk:not(.ignore-brand):not(.skip):not(.ignore){color:#45668e;}body.social-brand-colors .social-show-brand-hover .social-link-xing:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until .social-link-xing:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always .social-link-xing:not(.ignore-brand):not(.skip):not(.ignore){background:#006567;}body.social-brand-colors .social-show-brand-hover.social-style-outline .social-link-xing:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until.social-style-outline .social-link-xing:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always.social-style-outline .social-link-xing:not(.ignore-brand):not(.skip):not(.ignore){color:#006567;}body.social-brand-colors .social-show-brand-hover .social-link-rss:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until .social-link-rss:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always .social-link-rss:not(.ignore-brand):not(.skip):not(.ignore){background:#FF6200;}body.social-brand-colors .social-show-brand-hover.social-style-outline .social-link-rss:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until.social-style-outline .social-link-rss:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always.social-style-outline .social-link-rss:not(.ignore-brand):not(.skip):not(.ignore){color:#FF6200;}body.social-brand-colors .social-show-brand-hover .social-link-email:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until .social-link-email:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always .social-link-email:not(.ignore-brand):not(.skip):not(.ignore){background:#181818;}body.social-brand-colors .social-show-brand-hover.social-style-outline .social-link-email:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until.social-style-outline .social-link-email:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always.social-style-outline .social-link-email:not(.ignore-brand):not(.skip):not(.ignore){color:#181818;}body.social-brand-colors .social-show-brand-hover .social-link-phone:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until .social-link-phone:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always .social-link-phone:not(.ignore-brand):not(.skip):not(.ignore){background:#181818;}body.social-brand-colors .social-show-brand-hover.social-style-outline .social-link-phone:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until.social-style-outline .social-link-phone:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always.social-style-outline .social-link-phone:not(.ignore-brand):not(.skip):not(.ignore){color:#181818;}body.social-brand-colors .social-show-brand-hover .social-link-whatsapp:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until .social-link-whatsapp:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always .social-link-whatsapp:not(.ignore-brand):not(.skip):not(.ignore){background:#28cf54;}body.social-brand-colors .social-show-brand-hover.social-style-outline .social-link-whatsapp:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until.social-style-outline .social-link-whatsapp:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always.social-style-outline .social-link-whatsapp:not(.ignore-brand):not(.skip):not(.ignore){color:#28cf54;}body.social-brand-colors .social-show-brand-hover .social-link-google_reviews:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until .social-link-google_reviews:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always .social-link-google_reviews:not(.ignore-brand):not(.skip):not(.ignore){background:#DB4437;}body.social-brand-colors .social-show-brand-hover.social-style-outline .social-link-google_reviews:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until.social-style-outline .social-link-google_reviews:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always.social-style-outline .social-link-google_reviews:not(.ignore-brand):not(.skip):not(.ignore){color:#DB4437;}body.social-brand-colors .social-show-brand-hover .social-link-telegram:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until .social-link-telegram:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always .social-link-telegram:not(.ignore-brand):not(.skip):not(.ignore){background:#0088cc;}body.social-brand-colors .social-show-brand-hover.social-style-outline .social-link-telegram:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until.social-style-outline .social-link-telegram:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always.social-style-outline .social-link-telegram:not(.ignore-brand):not(.skip):not(.ignore){color:#0088cc;}body.social-brand-colors .social-show-brand-hover .social-link-yelp:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until .social-link-yelp:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always .social-link-yelp:not(.ignore-brand):not(.skip):not(.ignore){background:#c41200;}body.social-brand-colors .social-show-brand-hover.social-style-outline .social-link-yelp:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until.social-style-outline .social-link-yelp:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always.social-style-outline .social-link-yelp:not(.ignore-brand):not(.skip):not(.ignore){color:#c41200;}body.social-brand-colors .social-show-brand-hover .social-link-trip_advisor:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until .social-link-trip_advisor:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always .social-link-trip_advisor:not(.ignore-brand):not(.skip):not(.ignore){background:#00af87;}body.social-brand-colors .social-show-brand-hover.social-style-outline .social-link-trip_advisor:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until.social-style-outline .social-link-trip_advisor:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always.social-style-outline .social-link-trip_advisor:not(.ignore-brand):not(.skip):not(.ignore){color:#00af87;}body.social-brand-colors .social-show-brand-hover .social-link-imdb:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until .social-link-imdb:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always .social-link-imdb:not(.ignore-brand):not(.skip):not(.ignore){background:#F5C518;}body.social-brand-colors .social-show-brand-hover.social-style-outline .social-link-imdb:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until.social-style-outline .social-link-imdb:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always.social-style-outline .social-link-imdb:not(.ignore-brand):not(.skip):not(.ignore){color:#F5C518;}body.social-brand-colors .social-show-brand-hover .social-link-soundcloud:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until .social-link-soundcloud:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always .social-link-soundcloud:not(.ignore-brand):not(.skip):not(.ignore){background:#ff7700;}body.social-brand-colors .social-show-brand-hover.social-style-outline .social-link-soundcloud:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until.social-style-outline .social-link-soundcloud:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always.social-style-outline .social-link-soundcloud:not(.ignore-brand):not(.skip):not(.ignore){color:#ff7700;}body.social-brand-colors .social-show-brand-hover .social-link-tumblr:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until .social-link-tumblr:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always .social-link-tumblr:not(.ignore-brand):not(.skip):not(.ignore){background:#32506d;}body.social-brand-colors .social-show-brand-hover.social-style-outline .social-link-tumblr:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until.social-style-outline .social-link-tumblr:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always.social-style-outline .social-link-tumblr:not(.ignore-brand):not(.skip):not(.ignore){color:#32506d;}body.social-brand-colors .social-show-brand-hover .social-link-tiktok:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until .social-link-tiktok:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always .social-link-tiktok:not(.ignore-brand):not(.skip):not(.ignore){background:#69C9D0;}body.social-brand-colors .social-show-brand-hover.social-style-outline .social-link-tiktok:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until.social-style-outline .social-link-tiktok:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always.social-style-outline .social-link-tiktok:not(.ignore-brand):not(.skip):not(.ignore){color:#69C9D0;}body.social-brand-colors .social-show-brand-hover .social-link-discord:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until .social-link-discord:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always .social-link-discord:not(.ignore-brand):not(.skip):not(.ignore){background:#7289DA;}body.social-brand-colors .social-show-brand-hover.social-style-outline .social-link-discord:not(.ignore-brand):not(.skip):not(.ignore):hover, body.social-brand-colors .social-show-brand-until.social-style-outline .social-link-discord:not(:hover):not(.skip):not(.ignore), body.social-brand-colors .social-show-brand-always.social-style-outline .social-link-discord:not(.ignore-brand):not(.skip):not(.ignore){color:#7289DA;}
    /* Kadence Header CSS */
    .site-branding a.brand img{max-width:70px;}.site-branding a.brand img.svg-logo-image{width:70px;}@media all and (max-width: 1024px){.site-branding a.brand img{max-width:150px;}.site-branding a.brand img.svg-logo-image{width:150px;}}@media all and (max-width: 767px){.site-branding a.brand img{max-width:65px;}.site-branding a.brand img.svg-logo-image{width:65px;}}.site-branding{padding:5px 0px 5px 0px;}@media all and (max-width: 767px){.site-branding{padding:0px 0px 0px 25px;}}#masthead, #masthead .kadence-sticky-header.item-is-fixed:not(.item-at-start):not(.site-header-row-container), #masthead .kadence-sticky-header.item-is-fixed:not(.item-at-start) > .site-header-row-container-inner{background:#183a64;}.site-main-header-wrap .site-header-row-container-inner{background:var(--global-palette8);}.site-main-header-inner-wrap{min-height:75px;}@media all and (max-width: 767px){.site-main-header-wrap .site-header-row-container-inner{background:#183a64;}}.site-main-header-wrap .site-header-row-container-inner>.site-container{padding:5px 5px 10px 5px;}.site-top-header-wrap .site-header-row-container-inner{background:linear-gradient(135deg,var(--global-palette1) 5%,rgba(173,231,247,1) 5%,rgba(173,231,247,1) 10%,rgba(24,58,100,1) 10%);}.site-top-header-inner-wrap{min-height:0px;}.transparent-header #masthead .site-top-header-wrap .site-header-row-container-inner{background:var(--global-palette8);}.site-bottom-header-inner-wrap{min-height:0px;}#masthead .kadence-sticky-header.item-is-fixed:not(.item-at-start):not(.site-header-row-container):not(.item-hidden-above), #masthead .kadence-sticky-header.item-is-fixed:not(.item-at-start):not(.item-hidden-above) > .site-header-row-container-inner{background:#183a64;}#masthead .kadence-sticky-header.item-is-fixed:not(.item-at-start) .site-branding .site-title, #masthead .kadence-sticky-header.item-is-fixed:not(.item-at-start) .site-branding .site-description{color:var(--global-palette8);}#masthead .kadence-sticky-header.item-is-fixed:not(.item-at-start) .header-menu-container > ul > li > a{color:var(--global-palette8);}#masthead .kadence-sticky-header.item-is-fixed:not(.item-at-start) .mobile-toggle-open-container .menu-toggle-open, #masthead .kadence-sticky-header.item-is-fixed:not(.item-at-start) .search-toggle-open-container .search-toggle-open{color:var(--global-palette8);}#masthead .kadence-sticky-header.item-is-fixed:not(.item-at-start) .header-menu-container > ul > li > a:hover{color:#ade7f7;}#masthead .kadence-sticky-header.item-is-fixed:not(.item-at-start) .mobile-toggle-open-container .menu-toggle-open:hover, #masthead .kadence-sticky-header.item-is-fixed:not(.item-at-start) .mobile-toggle-open-container .menu-toggle-open:focus, #masthead .kadence-sticky-header.item-is-fixed:not(.item-at-start) .search-toggle-open-container .search-toggle-open:hover, #masthead .kadence-sticky-header.item-is-fixed:not(.item-at-start) .search-toggle-open-container .search-toggle-open:focus{color:#ade7f7;}#masthead .kadence-sticky-header.item-is-fixed:not(.item-at-start) .header-menu-container > ul > li.current-menu-item > a, #masthead .kadence-sticky-header.item-is-fixed:not(.item-at-start) .header-menu-container > ul > li.current_page_item > a{color:var(--global-palette1);}#masthead .kadence-sticky-header.item-is-fixed:not(.item-at-start) .site-branding img{max-width:70px;}.header-navigation[class*="header-navigation-style-underline"] .header-menu-container.primary-menu-container>ul>li>a:after{width:calc( 100% - 23px);}.main-navigation .primary-menu-container > ul > li.menu-item > a{padding-left:calc(23px / 2);padding-right:calc(23px / 2);padding-top:rem;padding-bottom:rem;color:#363636;}.main-navigation .primary-menu-container > ul > li.menu-item > .dropdown-nav-special-toggle{right:calc(23px / 2);}.main-navigation .primary-menu-container > ul li.menu-item > a{font-style:normal;font-weight:700;font-size:11px;font-family:var(--global-primary-nav-font-family);text-transform:uppercase;}.main-navigation .primary-menu-container > ul > li.menu-item > a:hover{color:#335c8f;}.main-navigation .primary-menu-container > ul > li.menu-item.current-menu-item > a{color:var(--global-palette1);}.header-navigation[class*="header-navigation-style-underline"] .header-menu-container.secondary-menu-container>ul>li>a:after{width:calc( 100% - 17px);}.secondary-navigation .secondary-menu-container > ul > li.menu-item > a{padding-left:calc(17px / 2);padding-right:calc(17px / 2);padding-top:em;padding-bottom:em;color:var(--global-palette9);}.secondary-navigation .primary-menu-container > ul > li.menu-item > .dropdown-nav-special-toggle{right:calc(17px / 2);}.secondary-navigation .secondary-menu-container > ul li.menu-item > a{font-style:normal;font-weight:normal;font-size:10px;font-family:Montserrat, sans-serif;}.secondary-navigation .secondary-menu-container > ul > li.menu-item > a:hover{color:var(--global-palette-highlight);}.secondary-navigation .secondary-menu-container > ul > li.menu-item.current-menu-item > a{color:var(--global-palette1);}.header-navigation .header-menu-container ul ul.sub-menu, .header-navigation .header-menu-container ul ul.submenu{background:#1d4674;box-shadow:0px 2px 13px 0px rgba(0,0,0,0.1);}.header-navigation .header-menu-container ul ul li.menu-item, .header-menu-container ul.menu > li.kadence-menu-mega-enabled > ul > li.menu-item > a{border-bottom:1px solid rgba(255,255,255,0.1);}.header-navigation .header-menu-container ul ul li.menu-item > a{width:300px;padding-top:1em;padding-bottom:1em;color:var(--global-palette8);font-style:normal;font-weight:normal;font-size:12px;letter-spacing:2px;font-family:'Alegreya Sans', sans-serif;}.header-navigation .header-menu-container ul ul li.menu-item > a:hover{color:var(--global-palette9);background:#216fa2;}.header-navigation .header-menu-container ul ul li.menu-item.current-menu-item > a{color:var(--global-palette9);background:var(--global-palette4);}.mobile-toggle-open-container .menu-toggle-open{color:var(--global-palette8);padding:0.4em 0.6em 0.4em 0.6em;font-size:14px;}.mobile-toggle-open-container .menu-toggle-open.menu-toggle-style-bordered{border:1px solid currentColor;}.mobile-toggle-open-container .menu-toggle-open .menu-toggle-icon{font-size:20px;}.mobile-toggle-open-container .menu-toggle-open:hover, .mobile-toggle-open-container .menu-toggle-open:focus{color:#182c57;}.mobile-navigation ul li{font-style:normal;font-size:16px;}.mobile-navigation ul li a{padding-top:0.75em;padding-bottom:0.75em;}.mobile-navigation ul li > a, .mobile-navigation ul li.menu-item-has-children > .drawer-nav-drop-wrap{background:#182c57;color:var(--global-palette8);}.mobile-navigation ul li > a:hover, .mobile-navigation ul li.menu-item-has-children > .drawer-nav-drop-wrap:hover{background:var(--global-palette1);}.mobile-navigation ul li.current-menu-item > a, .mobile-navigation ul li.current-menu-item.menu-item-has-children > .drawer-nav-drop-wrap{background:#182c57;color:var(--global-palette-highlight);}.mobile-navigation ul li.menu-item-has-children .drawer-nav-drop-wrap, .mobile-navigation ul li:not(.menu-item-has-children) a{border-bottom:1px solid rgba(255,255,255,0.1);}.mobile-navigation:not(.drawer-navigation-parent-toggle-true) ul li.menu-item-has-children .drawer-nav-drop-wrap button{border-left:1px solid rgba(255,255,255,0.1);}#mobile-drawer .drawer-inner, #mobile-drawer.popup-drawer-layout-fullwidth.popup-drawer-animation-slice .pop-portion-bg, #mobile-drawer.popup-drawer-layout-fullwidth.popup-drawer-animation-slice.pop-animated.show-drawer .drawer-inner{background:#182c57;}#mobile-drawer .drawer-header .drawer-toggle{padding:0.6em 0.15em 0.6em 0.15em;font-size:24px;}#main-header .header-button{font-style:normal;font-weight:400;font-family:"Arial Black", Gadget, sans-serif;border-radius:15px 15px 15px 15px;color:var(--global-palette1);background:var(--global-palette7);border:2px solid currentColor;border-color:var(--global-palette1);box-shadow:0px 0px 0px -7px rgba(0,0,0,0);}#main-header .header-button:hover{background:#aee8f7;border-color:var(--global-palette1);box-shadow:0px 15px 25px -7px rgba(0,0,0,0.1);}.header-html{font-style:normal;font-weight:400;font-size:11px;font-family:Arial, Helvetica, sans-serif;color:var(--global-palette4);}.header-html a{color:var(--global-palette9);}.header-html a:hover{color:var(--global-palette9);}.header-social-wrap{margin:0px 0px 0px 15px;}.header-social-inner-wrap{font-size:1em;margin-top:-0px;margin-left:calc(-0px / 2);margin-right:calc(-0px / 2);}.header-social-wrap .header-social-inner-wrap .social-button{margin-top:0px;margin-left:calc(0px / 2);margin-right:calc(0px / 2);color:var(--global-palette9);border:8px none currentColor;border-radius:0px;}.header-social-wrap .header-social-inner-wrap .social-button:hover{color:var(--global-palette1);}.header-mobile-social-inner-wrap{font-size:1em;margin-top:-0.3em;margin-left:calc(-0.3em / 2);margin-right:calc(-0.3em / 2);}.header-mobile-social-wrap .header-mobile-social-inner-wrap .social-button{margin-top:0.3em;margin-left:calc(0.3em / 2);margin-right:calc(0.3em / 2);border:2px none transparent;border-radius:3px;}.search-toggle-open-container .search-toggle-open{color:var(--global-palette9);}.search-toggle-open-container .search-toggle-open.search-toggle-style-bordered{border:1px solid currentColor;}.search-toggle-open-container .search-toggle-open .search-toggle-icon{font-size:1em;}.search-toggle-open-container .search-toggle-open:hover, .search-toggle-open-container .search-toggle-open:focus{color:var(--global-palette-highlight);}#search-drawer .drawer-inner{background:rgba(9, 12, 16, 0.97);}.mobile-header-button-wrap .mobile-header-button-inner-wrap .mobile-header-button{border:2px none transparent;box-shadow:0px 0px 0px -7px rgba(0,0,0,0);}.mobile-header-button-wrap .mobile-header-button:hover{box-shadow:0px 15px 25px -7px rgba(0,0,0,0.1);}
</style>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        {{-- <style>
            :root {
            --g1: rgb(98, 0, 234);
            --g2: rgb(236, 64, 122);
            }

            @keyframes background-pan {
            from {
                background-position: 0% center;
            }

            to {
                background-position: -200% center;
            }
            }

            body {
            animation: background-pan 10s linear infinite;
            background: linear-gradient(
                to right,
                var(--g1),
                var(--g2),
                var(--g1)
            );
            background-size: 200%;
            height: 100vh;
            overflow: hidden;
            margin: 0px;
            }

            body.toggled {
            animation: none;
            }

            body.toggled > #title {
            opacity: 0;
            }

            body.toggled > #icon {
            opacity: 1;
            }

            body.toggled > #tiles > .tile:hover {
            opacity: 0.1 !important;
            }

            .centered {
            left: 50%;
            position: absolute;
            top: 50%;
            transform: translate(-50%, -50%);
            }

            #tiles {
            height: calc(100vh - 1px);
            width: calc(100vw - 1px);
            position: relative;
            z-index: 2;

            display: grid;
            grid-template-columns: repeat(var(--columns), 1fr);
            grid-template-rows: repeat(var(--rows), 1fr);
            }

            .tile {
            cursor: pointer;
            position: relative;
            }

            .tile:hover:before {
            background-color: rgb(30, 30, 30);
            }

            .tile:before {
            background-color: rgb(15, 15, 15);
            content: "";
            inset: 0.5px;
            position: absolute;
            }

            #title {
            color: white;
            font-family: "Rubik", sans-serif;
            font-size: 6vw;
            margin: 0px;
            pointer-events: none;
            transition: opacity 1200ms ease;
            width: 50vw;
            z-index: 3;
            }

            #title > .fancy {
            color: var(--g2);
            font-family: 'Dancing Script', cursive;
            font-size: 1.5em;
            line-height: 0.9em;
            }

            #icon {
            color: rgba(255, 255, 255, 0.15);
            font-size: 80vmin;
            opacity: 0;
            pointer-events: none;
            transition: opacity 1200ms ease;
            z-index: 1;
            }

            /* -- YouTube Link Styles -- */

            body.menu-toggled > .meta-link > span {
            color: rgb(30, 30, 30);
            }

            #source-link {
            bottom: 60px;
            }

            #source-link > i {
            color: rgb(94, 106, 210);
            }

            #yt-link > i {
            color: rgb(239, 83, 80);
            }

            .meta-link {
            align-items: center;
            backdrop-filter: blur(3px);
            background-color: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 6px;
            bottom: 10px;
            box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            display: inline-flex;
            gap: 5px;
            left: 10px;
            padding: 10px 20px;
            position: fixed;
            text-decoration: none;
            transition: background-color 400ms, border-color 400ms;
            z-index: 10000;
            }

            .meta-link:hover {
            background-color: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            }

            .meta-link > i, .meta-link > span {
            height: 20px;
            line-height: 20px;
            }

            .meta-link > span {
            color: white;
            font-family: "Rubik", sans-serif;
            transition: color 400ms;
            }
        </style> --}}
    </head>
    <body class="antialiased">
        <div class="header">
        <div class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                        </g>
                    </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
            <div>
                <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                </g>
                </svg>
            </div>
        </div>
        <div class="relative flex items-top justify-center">
            <p>PBL E-GUIN | Politeknik Batam |</p>
            | Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </div>
        <link rel="stylesheet" id="kadence-footer-css" href="https://www.polibatam.ac.id/wp-content/themes/kadence/assets/css/footer.min.css?ver=1.1.14" media="all">
        <footer id="colophon" class="site-footer" role="contentinfo">
            <div class="site-footer-wrap">
                <div class="site-top-footer-wrap site-footer-row-container site-footer-focus-item site-footer-row-layout-standard site-footer-row-tablet-layout-default site-footer-row-mobile-layout-default" data-section="kadence_customizer_footer_top">
            <div class="site-footer-row-container-inner">
                        <div class="site-container">
                    <div class="site-top-footer-inner-wrap site-footer-row site-footer-row-columns-4 site-footer-row-column-layout-equal site-footer-row-tablet-column-layout-default site-footer-row-mobile-column-layout-row ft-ro-dir-row ft-ro-collapse-normal ft-ro-t-dir-default ft-ro-m-dir-default ft-ro-lstyle-normal">
                                            <div class="site-footer-top-section-1 site-footer-section footer-section-inner-items-1">
                                <div class="footer-widget-area widget-area site-footer-focus-item footer-widget1 content-align-default content-tablet-align-default content-mobile-align-default content-valign-default content-tablet-valign-default content-mobile-valign-default" data-section="sidebar-widgets-footer1">
            <div class="footer-widget-area-inner site-info-inner">
                <section id="block-107" class="widget widget_block widget_media_image">
        <figure class="wp-block-image size-full is-resized"><img loading="lazy" src="http://www.polibatam.ac.id/wp-content/uploads/2022/02/Logo-Polibatam-white-300x273-1.png" alt="" class="wp-image-20817" width="119" height="108"></figure>
        </section><section id="block-85" class="widget widget_block widget_text">
        <p><strong>Alamat :</strong> Jl. Ahmad Yani Batam Kota. Kota Batam. kepulauan Riau. Indonesia</p>
        </section><section id="block-69" class="widget widget_block widget_text">
        <p>Phone : +62-778-469858 Ext.1017<br>Fax : +62-778-463620<br>Email : info@polibatam.ac.id<br></p>
        </section>	</div>
        </div><!-- .footer-widget1 -->
                            </div>
                                                <div class="site-footer-top-section-2 site-footer-section footer-section-inner-items-1">
                                <div class="footer-widget-area widget-area site-footer-focus-item footer-widget6 content-align-default content-tablet-align-default content-mobile-align-default content-valign-default content-tablet-valign-default content-mobile-valign-default" data-section="sidebar-widgets-footer6">
            <div class="footer-widget-area-inner site-info-inner">
                <section id="nav_menu-3" class="widget widget_nav_menu"><h2 class="widget-title">Jurusan</h2><div class="menu-jurusan-link-container"><ul id="menu-jurusan-link" class="menu"><li id="menu-item-18278" class="menu-item menu-item-type-post_type menu-item-object-jurusan menu-item-18278"><a href="https://www.polibatam.ac.id/jurusan/manajemen-bisnis/">Manajemen Bisnis</a></li>
        <li id="menu-item-18276" class="menu-item menu-item-type-post_type menu-item-object-jurusan menu-item-18276"><a href="https://www.polibatam.ac.id/jurusan/teknik-elektro/">Teknik Elektro</a></li>
        <li id="menu-item-18277" class="menu-item menu-item-type-post_type menu-item-object-jurusan menu-item-18277"><a href="https://www.polibatam.ac.id/jurusan/informatika/">Teknik Informatika</a></li>
        <li id="menu-item-18275" class="menu-item menu-item-type-post_type menu-item-object-jurusan menu-item-18275"><a href="https://www.polibatam.ac.id/jurusan/teknik-mesin/">Teknik Mesin</a></li>
        </ul></div></section>	</div>
        </div><!-- .footer-widget6 -->
                            </div>
                                                <div class="site-footer-top-section-3 site-footer-section footer-section-inner-items-1">
                                <div class="footer-widget-area widget-area site-footer-focus-item footer-widget4 content-align-default content-tablet-align-default content-mobile-align-default content-valign-default content-tablet-valign-default content-mobile-valign-default" data-section="sidebar-widgets-footer4">
            <div class="footer-widget-area-inner site-info-inner">
                <section id="nav_menu-4" class="widget widget_nav_menu"><h2 class="widget-title">Quick Links</h2><div class="menu-quick-links-container"><ul id="menu-quick-links" class="menu"><li id="menu-item-18286" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18286"><a href="https://perpustakaan.polibatam.ac.id/">Perpusatakaan</a></li>
        <li id="menu-item-18285" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18285"><a href="https://jurnal.polibatam.ac.id/">Jurnal Polibatam</a></li>
        <li id="menu-item-18287" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18287"><a href="https://p2m.polibatam.ac.id/">Pusat P2M</a></li>
        <li id="menu-item-18288" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18288"><a href="https://pm.polibatam.ac.id/">Penjaminan Mutu</a></li>
        <li id="menu-item-18289" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18289"><a href="https://sim.polibatam.ac.id/">SILAM</a></li>
        <li id="menu-item-18290" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18290"><a href="https://helpdesk.polibatam.ac.id/">Helpdesk</a></li>
        <li id="menu-item-18291" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18291"><a href="https://www.lapor.go.id/">Layanan Aspirasi dan Pengaduan Online Rakyat (LAPOR)</a></li>
        <li id="menu-item-18292" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18292"><a href="https://www.kemdikbud.go.id/">Kemendikbud RI</a></li>
        <li id="menu-item-18293" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18293"><a href="https://www.vokasi.kemdikbud.go.id/">Dirjen Pendidikan Vokasi</a></li>
        </ul></div></section>	</div>
        </div><!-- .footer-widget4 -->
        <style>
            .site-footer-wrap .footer-social-wrap .social-button {
    color: var(--global-palette4);
    background: rgb(0, 127, 254);
}
        </style>
                            </div>
                                                <div class="site-footer-top-section-4 site-footer-section footer-section-inner-items-1">
                                <div class="footer-widget-area widget-area site-footer-focus-item footer-social content-align-center content-tablet-align-left content-mobile-align-default content-valign-top content-tablet-valign-default content-mobile-valign-default" data-section="kadence_customizer_footer_social">
            <div class="footer-widget-area-inner footer-social-inner">
                <div class="footer-social-wrap"><h2 class="widget-title">FIND US ON :</h2><div class="footer-social-inner-wrap social-show-label-true social-style-filled social-show-brand-always"><a href="https://www.facebook.com/polibatamofficial/" target="_blank" rel="noopener noreferrer" class="social-button footer-social-item social-link-facebook"><span class="kadence-svg-iconset"><svg class="kadence-svg-icon kadence-facebook-svg" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><title>Facebook</title><path d="M31.997 15.999c0-8.836-7.163-15.999-15.999-15.999s-15.999 7.163-15.999 15.999c0 7.985 5.851 14.604 13.499 15.804v-11.18h-4.062v-4.625h4.062v-3.525c0-4.010 2.389-6.225 6.043-6.225 1.75 0 3.581 0.313 3.581 0.313v3.937h-2.017c-1.987 0-2.607 1.233-2.607 2.498v3.001h4.437l-0.709 4.625h-3.728v11.18c7.649-1.2 13.499-7.819 13.499-15.804z"></path>
                        </svg></span><span class="social-label">Facebook</span></a><a href="https://www.instagram.com/polibatamofficial/?hl=en" target="_blank" rel="noopener noreferrer" class="social-button footer-social-item social-link-instagram"><span class="kadence-svg-iconset"><svg class="kadence-svg-icon kadence-instagram-svg" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><title>Instagram</title><path d="M21.138 0.242c3.767 0.007 3.914 0.038 4.65 0.144 1.52 0.219 2.795 0.825 3.837 1.821 0.584 0.562 0.987 1.112 1.349 1.848 0.442 0.899 0.659 1.75 0.758 3.016 0.021 0.271 0.031 4.592 0.031 8.916s-0.009 8.652-0.030 8.924c-0.098 1.245-0.315 2.104-0.743 2.986-0.851 1.755-2.415 3.035-4.303 3.522-0.685 0.177-1.304 0.26-2.371 0.31-0.381 0.019-4.361 0.024-8.342 0.024s-7.959-0.012-8.349-0.029c-0.921-0.044-1.639-0.136-2.288-0.303-1.876-0.485-3.469-1.784-4.303-3.515-0.436-0.904-0.642-1.731-0.751-3.045-0.031-0.373-0.039-2.296-0.039-8.87 0-2.215-0.002-3.866 0-5.121 0.006-3.764 0.037-3.915 0.144-4.652 0.219-1.518 0.825-2.795 1.825-3.833 0.549-0.569 1.105-0.975 1.811-1.326 0.915-0.456 1.756-0.668 3.106-0.781 0.374-0.031 2.298-0.038 8.878-0.038h5.13zM15.999 4.364v0c-3.159 0-3.555 0.014-4.796 0.070-1.239 0.057-2.084 0.253-2.824 0.541-0.765 0.297-1.415 0.695-2.061 1.342s-1.045 1.296-1.343 2.061c-0.288 0.74-0.485 1.586-0.541 2.824-0.056 1.241-0.070 1.638-0.070 4.798s0.014 3.556 0.070 4.797c0.057 1.239 0.253 2.084 0.541 2.824 0.297 0.765 0.695 1.415 1.342 2.061s1.296 1.046 2.061 1.343c0.74 0.288 1.586 0.484 2.825 0.541 1.241 0.056 1.638 0.070 4.798 0.070s3.556-0.014 4.797-0.070c1.239-0.057 2.085-0.253 2.826-0.541 0.765-0.297 1.413-0.696 2.060-1.343s1.045-1.296 1.343-2.061c0.286-0.74 0.482-1.586 0.541-2.824 0.056-1.241 0.070-1.637 0.070-4.797s-0.015-3.557-0.070-4.798c-0.058-1.239-0.255-2.084-0.541-2.824-0.298-0.765-0.696-1.415-1.343-2.061s-1.295-1.045-2.061-1.342c-0.742-0.288-1.588-0.484-2.827-0.541-1.241-0.056-1.636-0.070-4.796-0.070zM14.957 6.461c0.31-0 0.655 0 1.044 0 3.107 0 3.475 0.011 4.702 0.067 1.135 0.052 1.75 0.241 2.16 0.401 0.543 0.211 0.93 0.463 1.337 0.87s0.659 0.795 0.871 1.338c0.159 0.41 0.349 1.025 0.401 2.16 0.056 1.227 0.068 1.595 0.068 4.701s-0.012 3.474-0.068 4.701c-0.052 1.135-0.241 1.75-0.401 2.16-0.211 0.543-0.463 0.93-0.871 1.337s-0.794 0.659-1.337 0.87c-0.41 0.16-1.026 0.349-2.16 0.401-1.227 0.056-1.595 0.068-4.702 0.068s-3.475-0.012-4.702-0.068c-1.135-0.052-1.75-0.242-2.161-0.401-0.543-0.211-0.931-0.463-1.338-0.87s-0.659-0.794-0.871-1.337c-0.159-0.41-0.349-1.025-0.401-2.16-0.056-1.227-0.067-1.595-0.067-4.703s0.011-3.474 0.067-4.701c0.052-1.135 0.241-1.75 0.401-2.16 0.211-0.543 0.463-0.931 0.871-1.338s0.795-0.659 1.338-0.871c0.41-0.16 1.026-0.349 2.161-0.401 1.073-0.048 1.489-0.063 3.658-0.065v0.003zM16.001 10.024c-3.3 0-5.976 2.676-5.976 5.976s2.676 5.975 5.976 5.975c3.3 0 5.975-2.674 5.975-5.975s-2.675-5.976-5.975-5.976zM16.001 12.121c2.142 0 3.879 1.736 3.879 3.879s-1.737 3.879-3.879 3.879c-2.142 0-3.879-1.737-3.879-3.879s1.736-3.879 3.879-3.879zM22.212 8.393c-0.771 0-1.396 0.625-1.396 1.396s0.625 1.396 1.396 1.396 1.396-0.625 1.396-1.396c0-0.771-0.625-1.396-1.396-1.396v0.001z"></path>
                        </svg></span><span class="social-label">Instagram</span></a><a href="https://www.youtube.com/channel/UCxKsDnDYt30bMdXyakD_ZCw" target="_blank" rel="noopener noreferrer" class="social-button footer-social-item social-link-youtube"><span class="kadence-svg-iconset"><svg class="kadence-svg-icon kadence-youtube-svg" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28"><title>YouTube</title><path d="M11.109 17.625l7.562-3.906-7.562-3.953v7.859zM14 4.156c5.891 0 9.797 0.281 9.797 0.281 0.547 0.063 1.75 0.063 2.812 1.188 0 0 0.859 0.844 1.109 2.781 0.297 2.266 0.281 4.531 0.281 4.531v2.125s0.016 2.266-0.281 4.531c-0.25 1.922-1.109 2.781-1.109 2.781-1.062 1.109-2.266 1.109-2.812 1.172 0 0-3.906 0.297-9.797 0.297v0c-7.281-0.063-9.516-0.281-9.516-0.281-0.625-0.109-2.031-0.078-3.094-1.188 0 0-0.859-0.859-1.109-2.781-0.297-2.266-0.281-4.531-0.281-4.531v-2.125s-0.016-2.266 0.281-4.531c0.25-1.937 1.109-2.781 1.109-2.781 1.062-1.125 2.266-1.125 2.812-1.188 0 0 3.906-0.281 9.797-0.281v0z"></path>
                        </svg></span><span class="social-label">YouTube</span></a><a href="https://twitter.com/polibatam_" target="_blank" rel="noopener noreferrer" class="social-button footer-social-item social-link-twitter"><span class="kadence-svg-iconset"><svg class="kadence-svg-icon kadence-twitter-svg" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" width="26" height="28" viewBox="0 0 26 28"><title>Twitter</title><path d="M25.312 6.375c-0.688 1-1.547 1.891-2.531 2.609 0.016 0.219 0.016 0.438 0.016 0.656 0 6.672-5.078 14.359-14.359 14.359-2.859 0-5.516-0.828-7.75-2.266 0.406 0.047 0.797 0.063 1.219 0.063 2.359 0 4.531-0.797 6.266-2.156-2.219-0.047-4.078-1.5-4.719-3.5 0.313 0.047 0.625 0.078 0.953 0.078 0.453 0 0.906-0.063 1.328-0.172-2.312-0.469-4.047-2.5-4.047-4.953v-0.063c0.672 0.375 1.453 0.609 2.281 0.641-1.359-0.906-2.25-2.453-2.25-4.203 0-0.938 0.25-1.797 0.688-2.547 2.484 3.062 6.219 5.063 10.406 5.281-0.078-0.375-0.125-0.766-0.125-1.156 0-2.781 2.25-5.047 5.047-5.047 1.453 0 2.766 0.609 3.687 1.594 1.141-0.219 2.234-0.641 3.203-1.219-0.375 1.172-1.172 2.156-2.219 2.781 1.016-0.109 2-0.391 2.906-0.781z"></path>
                        </svg></span><span class="social-label">Twitter</span></a><a href="https://id.linkedin.com/school/politeknik-negeri-batam/" target="_blank" rel="noopener noreferrer" class="social-button footer-social-item social-link-linkedin"><span class="kadence-svg-iconset"><svg class="kadence-svg-icon kadence-linkedin-svg" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" width="24" height="28" viewBox="0 0 24 28"><title>Linkedin</title><path d="M3.703 22.094h3.609v-10.844h-3.609v10.844zM7.547 7.906c-0.016-1.062-0.781-1.875-2.016-1.875s-2.047 0.812-2.047 1.875c0 1.031 0.781 1.875 2 1.875h0.016c1.266 0 2.047-0.844 2.047-1.875zM16.688 22.094h3.609v-6.219c0-3.328-1.781-4.875-4.156-4.875-1.937 0-2.797 1.078-3.266 1.828h0.031v-1.578h-3.609s0.047 1.016 0 10.844v0h3.609v-6.062c0-0.313 0.016-0.641 0.109-0.875 0.266-0.641 0.859-1.313 1.859-1.313 1.297 0 1.813 0.984 1.813 2.453v5.797zM24 6.5v15c0 2.484-2.016 4.5-4.5 4.5h-15c-2.484 0-4.5-2.016-4.5-4.5v-15c0-2.484 2.016-4.5 4.5-4.5h15c2.484 0 4.5 2.016 4.5 4.5z"></path>
                        </svg></span><span class="social-label">Linkedin</span></a></div></div>	</div>
        </div><!-- data-section="footer_social" -->
                            </div>
                                        </div>
                </div>
            </div>
        </div>
        <div class="site-bottom-footer-wrap site-footer-row-container site-footer-focus-item site-footer-row-layout-standard site-footer-row-tablet-layout-default site-footer-row-mobile-layout-default" data-section="kadence_customizer_footer_bottom">
            <div class="site-footer-row-container-inner">
                        <div class="site-container">
                    <div class="site-bottom-footer-inner-wrap site-footer-row site-footer-row-columns-2 site-footer-row-column-layout-equal site-footer-row-tablet-column-layout-default site-footer-row-mobile-column-layout-row ft-ro-dir-row ft-ro-collapse-normal ft-ro-t-dir-default ft-ro-m-dir-default ft-ro-lstyle-plain">
                                            <div class="site-footer-bottom-section-1 site-footer-section footer-section-inner-items-1">

        <div class="footer-widget-area site-info site-footer-focus-item content-align-left content-tablet-align-default content-mobile-align-default content-valign-top content-tablet-valign-default content-mobile-valign-default" data-section="kadence_customizer_footer_html">
            <div class="footer-widget-area-inner site-info-inner">
                <div class="footer-html inner-link-style-normal"><div class="footer-html-inner"><p>© 2022 Politeknik Negeri Batam</p>
        </div></div>	</div>
        </div><!-- .site-info -->
                            </div>
                                                <div class="site-footer-bottom-section-2 site-footer-section footer-section-inner-items-1">
                                <div class="footer-widget-area widget-area site-footer-focus-item footer-widget2 content-align-right content-tablet-align-left content-mobile-align-default content-valign-default content-tablet-valign-default content-mobile-valign-default" data-section="sidebar-widgets-footer2">
            <div class="footer-widget-area-inner site-info-inner">
                <section id="block-82" class="widget widget_block widget_text">
        <p>For Your Goals Beyond Horizon</p>
        </section>	</div>
        </div><!-- .footer-widget2 -->
                            </div>
                                        </div>
                </div>
            </div>
        </div>
            </div>
        </footer>
        <script src="{{ asset ('AdminLTE') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
    {{-- <body>
        <div id="tiles"></div>

        <h1 id="title" class="centered">
        The name of the game is
        <span class="fancy">Chess</span>.
        </h1>

        <i id="icon" class="fa-solid fa-chess centered"></i>

        <a id="source-link" class="meta-link" href="/login" target="_blank">
        <i class="fa-solid fa-link"></i>
        <span>login</span>
        </a>

        <a id="yt-link" class="meta-link" href="https://youtu.be/bAwEj_mSzOs" target="_blank">
        <i class="fa-brands fa-youtube"></i>
        <span>5 min tutorial</span>
        </a>
        <script>
        const wrapper = document.getElementById("tiles");

        let columns = 0,
        rows = 0,
        toggled = false;

        const toggle = () => {
        toggled = !toggled;

        document.body.classList.toggle("toggled");
        }

        const handleOnClick = index => {
        toggle();

        anime({
        targets: ".tile",
        opacity: toggled ? 0 : 1,
        delay: anime.stagger(50, {
        grid: [columns, rows],
        from: index
        })
        });
        }

        const createTile = index => {
        const tile = document.createElement("div");

        tile.classList.add("tile");

        tile.style.opacity = toggled ? 0 : 1;

        tile.onclick = e => handleOnClick(index);

        return tile;
        }

        const createTiles = quantity => {
        Array.from(Array(quantity)).map((tile, index) => {
        wrapper.appendChild(createTile(index));
        });
        }

        const createGrid = () => {
        wrapper.innerHTML = "";

        const size = document.body.clientWidth > 800 ? 100 : 50;

        columns = Math.floor(document.body.clientWidth / size);
        rows = Math.floor(document.body.clientHeight / size);

        wrapper.style.setProperty("--columns", columns);
        wrapper.style.setProperty("--rows", rows);

        createTiles(columns * rows);
        }

        createGrid();

        window.onresize = () => createGrid();
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    </body> --}}
</html>
