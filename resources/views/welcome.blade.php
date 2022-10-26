<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="{{ asset ('AdminLTE') }}/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="{{ asset ('AdminLTE') }}/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset ('AdminLTE') }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel='stylesheet' id='kadence-global-css' href="{{ asset ('politeknik') }}/global-min-css.css" media='all' />
    <link rel="preload" id="kadence-header-preload" href="{{ asset ('politeknik') }}/header-min-css.css" as="style">
    <link rel="preload" id="kadence-footer-preload" href="{{ asset ('politeknik') }}/footer-min-css.css" as="style">
    <link rel="stylesheet" id='kadence-global-inline-css' href="{{ asset ('politeknik') }}/kadence-global-inline-css.css" as="style">
    <link rel="stylesheet" id='normalize-css' href="{{ asset ('politeknik') }}/normalize.css" as="style">
    <link rel="stylesheet" id='parallax-css' href="{{ asset ('plugins') }}/parallax/parallax.css" as="style">
    <!-- Styles -->

    <style>
    body {
        font-family: 'Nunito', sans-serif;
    }
    </style>
</head>

<body class="">
    <div class="header">
        <div class="relative flex items-top justify-center min-h-screen items-center py-4 sm:pt-0">
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
            <div class="container ">
                <div class="row align-items-center">
                    <div class="col-md-5 text-white">
                        <a  class="h1"><b>E-GUIN</b>QR</a>
                        <br>
                        <a class="p">Elektronik Guest aaInvitation QR code</a>
                    </div>
                    <div class="col-md-3">
                        <a href="\tamu_unit">
                        <button type="button" class="btn btn-block btn-light">Tamu Unit</button>
                        </a>
                    </div>
                    <div class="col-md-1">
                        <p></p>
                    </div>

                    <div class="col-md-3">
                        <a href="\tamu_acara">
                        <button type="button" class="btn btn-block btn-light">Tamu Acara</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
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
    <p></p>
    <link rel="stylesheet" id="kadence-header-css" href="{{ asset ('politeknik') }}/header-min-css.css" media="all">
    <link rel="stylesheet" id="kadence-footer-css" href="{{ asset ('politeknik') }}/fotter-min-css.css" media="all">

    <div class="container">
        <div class="card callout callout-info">
            <div class="card-body box-profile">
                <div class="row align-items-center">
                    <div class="col-md-6 ">
                        <iframe width=100% height="250" src="https://www.youtube.com/embed/gCRHKlIOc6I" title="Video Safety Induction di Lingkungan Politeknik Negeri Batam" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-6">
                        <p></p>
                        <h3>Safety Induction</h3>
                        <p></p>
                        <p style="text-align: justify">Video Safety Induction Politeknik Negeri Batam berisi informasi mengenai dasar-dasar Keselamatan dan Kesehatan Kerja (K3) bagi seluruh mahasiswa, karyawan, tamu, maupun kontraktor yang berada di lingkungan kampus Politeknik Negeri Batam. Mari bersama membudayakan K3 agar dapat belajar dan bekerja secara aman, nyaman dan sehat.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="card callout callout-info">
            <div class="card-body box-profile">
                <div class="row align-items-center">
                    <div class="col-md-6 ">
                        <h3>Informasi Layanan Publik</h3>
                        <p></p>
                        <p style="text-align: justify">Hubungi kami untuk seputar pertanyaan informasi publik Polibatam.</p>
                        <a href="https://www.polibatam.ac.id/informasi-publik/">
                            <button type="button" class="btn btn-primary ">Informasi Layanan Publik</button>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <p></p>
                        <iframe width=100% height="250" src="https://www.youtube.com/embed/-YZk9CvznuU" title="Video Layanan Pusat Informasi Polibatam saat New Normal (Kenormalan Baru)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>

            </div>
        </div>
    </div>

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
                                        </section>
                                        <section id="block-85" class="widget widget_block widget_text">
                                            <p><strong>Alamat :</strong> Jl. Ahmad Yani Batam Kota. Kota Batam. kepulauan Riau. Indonesia</p>
                                        </section>
                                        <section id="block-69" class="widget widget_block widget_text">
                                            <p>Phone : +62-778-469858 Ext.1017<br>Fax : +62-778-463620<br>Email : info@polibatam.ac.id<br></p>
                                        </section>
                                    </div>
                                </div><!-- .footer-widget1 -->
                            </div>
                            <div class="site-footer-top-section-2 site-footer-section footer-section-inner-items-1">
                                <div class="footer-widget-area widget-area site-footer-focus-item footer-widget6 content-align-default content-tablet-align-default content-mobile-align-default content-valign-default content-tablet-valign-default content-mobile-valign-default" data-section="sidebar-widgets-footer6">
                                    <div class="footer-widget-area-inner site-info-inner">
                                        <section id="nav_menu-3" class="widget widget_nav_menu">
                                            <h2 class="widget-title">Jurusan</h2>
                                            <div class="menu-jurusan-link-container">
                                                <ul id="menu-jurusan-link" class="menu">
                                                    <li id="menu-item-18278" class="menu-item menu-item-type-post_type menu-item-object-jurusan menu-item-18278"><a href="https://www.polibatam.ac.id/jurusan/manajemen-bisnis/">Manajemen Bisnis</a></li>
                                                    <li id="menu-item-18276" class="menu-item menu-item-type-post_type menu-item-object-jurusan menu-item-18276"><a href="https://www.polibatam.ac.id/jurusan/teknik-elektro/">Teknik Elektro</a></li>
                                                    <li id="menu-item-18277" class="menu-item menu-item-type-post_type menu-item-object-jurusan menu-item-18277"><a href="https://www.polibatam.ac.id/jurusan/informatika/">Teknik Informatika</a></li>
                                                    <li id="menu-item-18275" class="menu-item menu-item-type-post_type menu-item-object-jurusan menu-item-18275"><a href="https://www.polibatam.ac.id/jurusan/teknik-mesin/">Teknik Mesin</a></li>
                                                </ul>
                                            </div>
                                        </section>
                                    </div>
                                </div><!-- .footer-widget6 -->
                            </div>
                            <div class="site-footer-top-section-3 site-footer-section footer-section-inner-items-1">
                                <div class="footer-widget-area widget-area site-footer-focus-item footer-widget4 content-align-default content-tablet-align-default content-mobile-align-default content-valign-default content-tablet-valign-default content-mobile-valign-default" data-section="sidebar-widgets-footer4">
                                    <div class="footer-widget-area-inner site-info-inner">
                                        <section id="nav_menu-4" class="widget widget_nav_menu">
                                            <h2 class="widget-title">Quick Links</h2>
                                            <div class="menu-quick-links-container">
                                                <ul id="menu-quick-links" class="menu">
                                                    <li id="menu-item-18286" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18286"><a href="https://perpustakaan.polibatam.ac.id/">Perpusatakaan</a></li>
                                                    <li id="menu-item-18285" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18285"><a href="https://jurnal.polibatam.ac.id/">Jurnal Polibatam</a></li>
                                                    <li id="menu-item-18287" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18287"><a href="https://p2m.polibatam.ac.id/">Pusat P2M</a></li>
                                                    <li id="menu-item-18288" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18288"><a href="https://pm.polibatam.ac.id/">Penjaminan Mutu</a></li>
                                                    <li id="menu-item-18289" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18289"><a href="https://sim.polibatam.ac.id/">SILAM</a></li>
                                                    <li id="menu-item-18290" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18290"><a href="https://helpdesk.polibatam.ac.id/">Helpdesk</a></li>
                                                    <li id="menu-item-18291" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18291"><a href="https://www.lapor.go.id/">Layanan Aspirasi dan Pengaduan Online Rakyat (LAPOR)</a></li>
                                                    <li id="menu-item-18292" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18292"><a href="https://www.kemdikbud.go.id/">Kemendikbud RI</a></li>
                                                    <li id="menu-item-18293" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18293"><a href="https://www.vokasi.kemdikbud.go.id/">Dirjen Pendidikan Vokasi</a></li>
                                                </ul>
                                            </div>
                                        </section>
                                    </div>
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
                                        <div class="footer-social-wrap">
                                            <h2 class="widget-title">FIND US ON :</h2>
                                            <div class="footer-social-inner-wrap social-show-label-true social-style-filled social-show-brand-always"><a href="https://www.facebook.com/polibatamofficial/" target="_blank" rel="noopener noreferrer" class="social-button footer-social-item social-link-facebook"><span class="kadence-svg-iconset"><svg class="kadence-svg-icon kadence-facebook-svg" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                                            <title>Facebook</title>
                                                            <path d="M31.997 15.999c0-8.836-7.163-15.999-15.999-15.999s-15.999 7.163-15.999 15.999c0 7.985 5.851 14.604 13.499 15.804v-11.18h-4.062v-4.625h4.062v-3.525c0-4.010 2.389-6.225 6.043-6.225 1.75 0 3.581 0.313 3.581 0.313v3.937h-2.017c-1.987 0-2.607 1.233-2.607 2.498v3.001h4.437l-0.709 4.625h-3.728v11.18c7.649-1.2 13.499-7.819 13.499-15.804z"></path>
                                                        </svg></span><span class="social-label">Facebook</span></a><a href="https://www.instagram.com/polibatamofficial/?hl=en" target="_blank" rel="noopener noreferrer" class="social-button footer-social-item social-link-instagram"><span class="kadence-svg-iconset"><svg class="kadence-svg-icon kadence-instagram-svg" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                                            <title>Instagram</title>
                                                            <path d="M21.138 0.242c3.767 0.007 3.914 0.038 4.65 0.144 1.52 0.219 2.795 0.825 3.837 1.821 0.584 0.562 0.987 1.112 1.349 1.848 0.442 0.899 0.659 1.75 0.758 3.016 0.021 0.271 0.031 4.592 0.031 8.916s-0.009 8.652-0.030 8.924c-0.098 1.245-0.315 2.104-0.743 2.986-0.851 1.755-2.415 3.035-4.303 3.522-0.685 0.177-1.304 0.26-2.371 0.31-0.381 0.019-4.361 0.024-8.342 0.024s-7.959-0.012-8.349-0.029c-0.921-0.044-1.639-0.136-2.288-0.303-1.876-0.485-3.469-1.784-4.303-3.515-0.436-0.904-0.642-1.731-0.751-3.045-0.031-0.373-0.039-2.296-0.039-8.87 0-2.215-0.002-3.866 0-5.121 0.006-3.764 0.037-3.915 0.144-4.652 0.219-1.518 0.825-2.795 1.825-3.833 0.549-0.569 1.105-0.975 1.811-1.326 0.915-0.456 1.756-0.668 3.106-0.781 0.374-0.031 2.298-0.038 8.878-0.038h5.13zM15.999 4.364v0c-3.159 0-3.555 0.014-4.796 0.070-1.239 0.057-2.084 0.253-2.824 0.541-0.765 0.297-1.415 0.695-2.061 1.342s-1.045 1.296-1.343 2.061c-0.288 0.74-0.485 1.586-0.541 2.824-0.056 1.241-0.070 1.638-0.070 4.798s0.014 3.556 0.070 4.797c0.057 1.239 0.253 2.084 0.541 2.824 0.297 0.765 0.695 1.415 1.342 2.061s1.296 1.046 2.061 1.343c0.74 0.288 1.586 0.484 2.825 0.541 1.241 0.056 1.638 0.070 4.798 0.070s3.556-0.014 4.797-0.070c1.239-0.057 2.085-0.253 2.826-0.541 0.765-0.297 1.413-0.696 2.060-1.343s1.045-1.296 1.343-2.061c0.286-0.74 0.482-1.586 0.541-2.824 0.056-1.241 0.070-1.637 0.070-4.797s-0.015-3.557-0.070-4.798c-0.058-1.239-0.255-2.084-0.541-2.824-0.298-0.765-0.696-1.415-1.343-2.061s-1.295-1.045-2.061-1.342c-0.742-0.288-1.588-0.484-2.827-0.541-1.241-0.056-1.636-0.070-4.796-0.070zM14.957 6.461c0.31-0 0.655 0 1.044 0 3.107 0 3.475 0.011 4.702 0.067 1.135 0.052 1.75 0.241 2.16 0.401 0.543 0.211 0.93 0.463 1.337 0.87s0.659 0.795 0.871 1.338c0.159 0.41 0.349 1.025 0.401 2.16 0.056 1.227 0.068 1.595 0.068 4.701s-0.012 3.474-0.068 4.701c-0.052 1.135-0.241 1.75-0.401 2.16-0.211 0.543-0.463 0.93-0.871 1.337s-0.794 0.659-1.337 0.87c-0.41 0.16-1.026 0.349-2.16 0.401-1.227 0.056-1.595 0.068-4.702 0.068s-3.475-0.012-4.702-0.068c-1.135-0.052-1.75-0.242-2.161-0.401-0.543-0.211-0.931-0.463-1.338-0.87s-0.659-0.794-0.871-1.337c-0.159-0.41-0.349-1.025-0.401-2.16-0.056-1.227-0.067-1.595-0.067-4.703s0.011-3.474 0.067-4.701c0.052-1.135 0.241-1.75 0.401-2.16 0.211-0.543 0.463-0.931 0.871-1.338s0.795-0.659 1.338-0.871c0.41-0.16 1.026-0.349 2.161-0.401 1.073-0.048 1.489-0.063 3.658-0.065v0.003zM16.001 10.024c-3.3 0-5.976 2.676-5.976 5.976s2.676 5.975 5.976 5.975c3.3 0 5.975-2.674 5.975-5.975s-2.675-5.976-5.975-5.976zM16.001 12.121c2.142 0 3.879 1.736 3.879 3.879s-1.737 3.879-3.879 3.879c-2.142 0-3.879-1.737-3.879-3.879s1.736-3.879 3.879-3.879zM22.212 8.393c-0.771 0-1.396 0.625-1.396 1.396s0.625 1.396 1.396 1.396 1.396-0.625 1.396-1.396c0-0.771-0.625-1.396-1.396-1.396v0.001z"></path>
                                                        </svg></span><span class="social-label">Instagram</span></a><a href="https://www.youtube.com/channel/UCxKsDnDYt30bMdXyakD_ZCw" target="_blank" rel="noopener noreferrer" class="social-button footer-social-item social-link-youtube"><span class="kadence-svg-iconset"><svg class="kadence-svg-icon kadence-youtube-svg" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28">
                                                            <title>YouTube</title>
                                                            <path d="M11.109 17.625l7.562-3.906-7.562-3.953v7.859zM14 4.156c5.891 0 9.797 0.281 9.797 0.281 0.547 0.063 1.75 0.063 2.812 1.188 0 0 0.859 0.844 1.109 2.781 0.297 2.266 0.281 4.531 0.281 4.531v2.125s0.016 2.266-0.281 4.531c-0.25 1.922-1.109 2.781-1.109 2.781-1.062 1.109-2.266 1.109-2.812 1.172 0 0-3.906 0.297-9.797 0.297v0c-7.281-0.063-9.516-0.281-9.516-0.281-0.625-0.109-2.031-0.078-3.094-1.188 0 0-0.859-0.859-1.109-2.781-0.297-2.266-0.281-4.531-0.281-4.531v-2.125s-0.016-2.266 0.281-4.531c0.25-1.937 1.109-2.781 1.109-2.781 1.062-1.125 2.266-1.125 2.812-1.188 0 0 3.906-0.281 9.797-0.281v0z"></path>
                                                        </svg></span><span class="social-label">YouTube</span></a><a href="https://twitter.com/polibatam_" target="_blank" rel="noopener noreferrer" class="social-button footer-social-item social-link-twitter"><span class="kadence-svg-iconset"><svg class="kadence-svg-icon kadence-twitter-svg" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" width="26" height="28" viewBox="0 0 26 28">
                                                            <title>Twitter</title>
                                                            <path d="M25.312 6.375c-0.688 1-1.547 1.891-2.531 2.609 0.016 0.219 0.016 0.438 0.016 0.656 0 6.672-5.078 14.359-14.359 14.359-2.859 0-5.516-0.828-7.75-2.266 0.406 0.047 0.797 0.063 1.219 0.063 2.359 0 4.531-0.797 6.266-2.156-2.219-0.047-4.078-1.5-4.719-3.5 0.313 0.047 0.625 0.078 0.953 0.078 0.453 0 0.906-0.063 1.328-0.172-2.312-0.469-4.047-2.5-4.047-4.953v-0.063c0.672 0.375 1.453 0.609 2.281 0.641-1.359-0.906-2.25-2.453-2.25-4.203 0-0.938 0.25-1.797 0.688-2.547 2.484 3.062 6.219 5.063 10.406 5.281-0.078-0.375-0.125-0.766-0.125-1.156 0-2.781 2.25-5.047 5.047-5.047 1.453 0 2.766 0.609 3.687 1.594 1.141-0.219 2.234-0.641 3.203-1.219-0.375 1.172-1.172 2.156-2.219 2.781 1.016-0.109 2-0.391 2.906-0.781z"></path>
                                                        </svg></span><span class="social-label">Twitter</span></a><a href="https://id.linkedin.com/school/politeknik-negeri-batam/" target="_blank" rel="noopener noreferrer" class="social-button footer-social-item social-link-linkedin"><span class="kadence-svg-iconset"><svg class="kadence-svg-icon kadence-linkedin-svg" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" width="24" height="28" viewBox="0 0 24 28">
                                                            <title>Linkedin</title>
                                                            <path d="M3.703 22.094h3.609v-10.844h-3.609v10.844zM7.547 7.906c-0.016-1.062-0.781-1.875-2.016-1.875s-2.047 0.812-2.047 1.875c0 1.031 0.781 1.875 2 1.875h0.016c1.266 0 2.047-0.844 2.047-1.875zM16.688 22.094h3.609v-6.219c0-3.328-1.781-4.875-4.156-4.875-1.937 0-2.797 1.078-3.266 1.828h0.031v-1.578h-3.609s0.047 1.016 0 10.844v0h3.609v-6.062c0-0.313 0.016-0.641 0.109-0.875 0.266-0.641 0.859-1.313 1.859-1.313 1.297 0 1.813 0.984 1.813 2.453v5.797zM24 6.5v15c0 2.484-2.016 4.5-4.5 4.5h-15c-2.484 0-4.5-2.016-4.5-4.5v-15c0-2.484 2.016-4.5 4.5-4.5h15c2.484 0 4.5 2.016 4.5 4.5z"></path>
                                                        </svg></span><span class="social-label">Linkedin</span></a></div>
                                        </div>
                                    </div>
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
                                        <div class="footer-html inner-link-style-normal">
                                            <div class="footer-html-inner">
                                                <p>© 2022 Politeknik Negeri Batam</p>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .site-info -->
                            </div>
                            <div class="site-footer-bottom-section-2 site-footer-section footer-section-inner-items-1">
                                <div class="footer-widget-area widget-area site-footer-focus-item footer-widget2 content-align-right content-tablet-align-left content-mobile-align-default content-valign-default content-tablet-valign-default content-mobile-valign-default" data-section="sidebar-widgets-footer2">
                                    <div class="footer-widget-area-inner site-info-inner">
                                        <section id="block-82" class="widget widget_block widget_text">
                                            <p>For Your Goals Beyond Horizon</p>
                                        </section>
                                    </div>
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

</html>
