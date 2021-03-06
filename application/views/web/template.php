<!DOCTYPE html>
<html class="no-js">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title ?></title>
    <meta name="description" content="Megatron - Multipurpose Responsive HTML5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="favicon/favicon-194x194.png" sizes="194x194">
    <link rel="icon" type="image/png" href="favicon/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="favicon/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="favicon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="favicon/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/animate.css/animate.min.css">
    <link href="//fonts.googleapis.com/css?family=Montserrat:700,400" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Playfair+Display:400,700,900,400italic,700italic,900italic&amp;subset=latin,latin-ext,cyrillic" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/web/fonts/megatron/styles.css">
    <!--Main stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/flexslider/flexslider.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/web/css/main.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/web/css/custom.css">



    <!--Modernizr js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
  </head>
  <body>
    <!--[if lt IE 8]>
    <p class="browsenrupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!--Page Content-->
    <div class="page-content">
      <!-- Page Navigation-->
      <div class="main-nav bgc-sintec bottom-line <?php echo $page == 'index'? 'nav-absolute':'' ?>">
        <div class="__middle">
          <div class="container">
            <div class="nav-content-wrapper">
              <div class="pull-left">
                <div class="megatron inline">
                  <div class="cell-vertical-wrapper">
                    <div class="cell-middle">
                    <a href="index.html">
                        <div class="logo"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt=""></div>
                    </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="pull-right">
                <nav class="os-menu  main-menu text-center">
                  <ul>
                    <li><a href="<?php echo base_url(); ?>">BERANDA</a></li>
                    <li><a href="#">TENTANG KAMI</a>
                      <ul class="multi-floor-menu menu-right-base">
                        <li><a href="<?php echo base_url(); ?>main/sejarah">SEJARAH SINTEC</a></li>
                        <li><a href="<?php echo base_url(); ?>main/strukturorganisasi">KEPENGURUSAN</a></li>
                        <li><a href="#">PEMBINA</a></li>
                        <li><a href="#">PELATIH</a></li>
                        <li><a href="#">ALUMNI</a></li>
                      </ul>
                    </li>
                     <li><a href="#">BLOG</a>
                      <ul class="multi-floor-menu menu-right-base">
                        <li><a href="#">TUTORIAL</a></li>
                        <li><a href="#">ARTIKEL</a></li>
                      </ul>
                    </li>
                    <li><a href="<?php echo base_url() ?>main/portofolio">PORTOFOLIO</a></li>
                    
                    <li><a href="#">JASA</a></li>

                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--<div class="main-nav small-nav bgc-light fixed-tranformed-bg-light nav-fixed border-bottom">
        <div class="container">
          <div class="nav-content-wrapper">
            <div class="pull-left">
              <div class="megatron inline logo-dark">
                <div class="cell-vertical-wrapper">
                  <div class="cell-middle"><a href="index.html">
                      <div class="logo"><svg viewBox="0 0 100 100"> <g> <path d="M64.264,31.886v56.803l-14.319,8.259l-14.319-8.259v-74.3L14.157,26.771v41.271l7.156,4.128V30.905   l13.467-7.768v8.26l-6.311,3.64V84.56L7,72.178v-49.54L42.781,2v82.553l7.162,4.132l7.163-4.132V27.758L64.264,31.886z    M43.626,26.294l6.317-3.644L71.42,35.038V84.56l21.469-12.382v-49.54L57.106,2v15.546l7.157,4.128v-7.285l21.469,12.382v41.271   l-7.156,4.128V30.905L49.943,14.391l-6.317,3.644V26.294z"/> </g> </svg>
                      </div>
                      <div class="brand">MEGATRON</div></a></div>
                </div>
              </div>
            </div>
            <div class="pull-right visible-lg">
              <nav class="os-menu main-menu">
                <ul>
                  <li><a href="#">HOME</a>
                    <ul class="multi-floor-menu">
                      <li><a href="homepage-landing-page.html">LANDING PAGE</a>
                      </li>
                      <li><a href="#">DEMOS</a>
                        <ul>
                          <li><a href="demo-construction-homepage.html">DEMO CONSTRUCTION</a>
                          </li>
                          <li><a href="demo-hospital-homepage.html">DEMO HOSPITAL</a>
                          </li>
                          <li><a href="demo-handyman-homepage.html">DEMO HANDYMAN</a>
                          </li>
                          <li><a href="demo-cleaning-homepage.html">DEMO CLEANING</a>
                          </li>
                          <li><a href="demo-fitness-homepage.html">DEMO FITNESS</a>
                          </li>
                          <li><a href="demo-interior-homepage.html">DEMO INTERIOR</a>
                          </li>
                          <li><a href="demo-lawyer-homepage.html">DEMO LAWYER</a>
                          </li>
                          <li><a href="demo-logistics-homepage.html">DEMO LOGISTICS</a>
                          </li>
                          <li><a href="#">UPDATING...</a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="#">CREATIVE</a>
                        <ul>
                          <li><a href="homepage-creative-1.html">CREATIVE 01</a>
                          </li>
                          <li><a href="homepage-creative-2.html">CREATIVE 02</a>
                          </li>
                          <li><a href="homepage-creative-3.html">CREATIVE 03</a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="#">BUSINESS</a>
                        <ul>
                          <li><a href="homepage-business-1.html">BUSINESS 01</a>
                          </li>
                          <li><a href="homepage-business-2.html">BUSINESS 02</a>
                          </li>
                          <li><a href="homepage-business-3.html">BUSINESS 03</a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="#">ONEPAGE</a>
                        <ul>
                          <li><a href="homepage-onepage-1.html">ONEPAGE 01</a>
                          </li>
                          <li><a href="homepage-onepage-2.html">ONEPAGE 02</a>
                          </li>
                          <li><a href="homepage-onepage-3.html">ONEPAGE 03</a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="#">AGENCY</a>
                        <ul>
                          <li><a href="homepage-agency-1.html">AGENCY 01</a>
                          </li>
                          <li><a href="homepage-agency-2.html">AGENCY 02</a>
                          </li>
                          <li><a href="homepage-agency-3.html">AGENCY 03</a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="#">VIDEO HEADER</a>
                        <ul>
                          <li><a href="homepage-video-1.html">VIDEO HEADER 01</a>
                          </li>
                          <li><a href="homepage-video-2.html">VIDEO HEADER 02</a>
                          </li>
                          <li><a href="homepage-video-3.html">VIDEO HEADER 03</a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="#">ALTERNATIVE</a>
                        <ul>
                          <li><a href="homepage-alternative-1.html">ALTERNATIVE 01</a>
                          </li>
                          <li><a href="homepage-alternative-2.html">ALTERNATIVE 02</a>
                          </li>
                          <li><a href="homepage-alternative-3.html">ALTERNATIVE 03</a>
                          </li>
                          <li><a href="homepage-alternative-4.html">ALTERNATIVE 04</a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="homepage-christmas-1.html">CHRISTMAS</a>
                      </li>
                      <li><a href="#">PORTFOLIO</a>
                        <ul>
                          <li><a href="homepage-portfolio-1.html">PORTFOLIO 01</a>
                          </li>
                          <li><a href="homepage-portfolio-2.html">PORTFOLIO 02</a>
                          </li>
                          <li><a href="homepage-portfolio-3.html">PORTFOLIO 03</a>
                          </li>
                          <li><a href="homepage-portfolio-4.html">PORTFOLIO 04</a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="homepage-leftmenu.html">LEFTMENU</a>
                      </li>
                      <li><a href="#">STORE</a>
                        <ul>
                          <li><a href="homepage-store-1.html">HOMEPAGE SHOP 01</a>
                          </li>
                          <li><a href="homepage-store-2.html">HOMEPAGE SHOP 02</a>
                          </li>
                          <li><a href="homepage-store-3.html">HOMEPAGE SHOP 03</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="#">PAGES</a>
                    <ul class="mega-menu menu-3-col menu-hr-heading">
                      <li><a href="#">GROUP 01</a>
                        <ul>
                          <li><a href="page-about-us-1.html">ABOUT US</a>
                          </li>
                          <li><a href="page-about-us-2.html">ABOUT US 2</a>
                          </li>
                          <li><a href="page-about-us-3.html">ABOUT US 3</a>
                          </li>
                          <li><a href="page-about-us-4.html">ABOUT US 4</a>
                          </li>
                          <li><a href="page-about-me.html">ABOUT ME</a>
                          </li>
                          <li><a href="page-services.html">SERVICES</a>
                          </li>
                          <li><a href="page-faq.html">FAQ</a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="#">GROUP 02</a>
                        <ul>
                          <li><a href="page-contact-us.html">CONTACT US</a>
                          </li>
                          <li><a href="page-contact-us-2.html">CONTACT US 2</a>
                          </li>
                          <li><a href="page-contact-us-3.html">CONTACT US 3</a>
                          </li>
                          <li><a href="page-fullwidth.html">PAGE FULLWIDTH</a>
                          </li>
                          <li><a href="page-sidebar-left.html">PAGE SIDEBAR LEFT</a>
                          </li>
                          <li><a href="page-sidebar-right.html">PAGE SIDEBAR RIGHT</a>
                          </li>
                          <li><a href="page-policy.html">POLICY</a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="#">GROUP 03</a>
                        <ul>
                          <li><a href="404.html">404 ERROR</a>
                          </li>
                          <li><a href="page-underconstruction.html">UNDERCONSTRUCTION</a>
                          </li>
                          <li><a href="page-search-result.html">SEARCH RESULT</a>
                          </li>
                          <li><a href="page-portfolio.html">PAGE PORTFOLIO</a>
                          </li>
                          <li><a href="page-portfolio-blog.html">PAGE PORTFOLIO BLOG</a>
                          </li>
                          <li><a href="page-login-vs-register.html">LOGIN VS REGISTER</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="#">FEATURES</a>
                    <ul class="mega-menu menu-5-col menu-fullwidth menu-hr-heading">
                      <li><a href="#">SHORTCODES 01</a>
                        <ul>
                          <li><a href="shortcode-accordion.html"><i class="__icon fa fa-bars"></i>ACCORDION</a>
                          </li>
                          <li><a href="shortcode-alert-message.html"><i class="__icon fa fa-exclamation-triangle"></i>ALERT MESSAGE<span class="__flag border-danger color-danger">HOT</span></a>
                          </li>
                          <li><a href="shortcode-blockquotes.html"><i class="__icon fa fa-quote-right"></i>BLOCKQUOTES</a>
                          </li>
                          <li><a href="shortcode-blogpost.html"><i class="__icon fa fa-pencil-square-o"></i>BLOGPOST</a>
                          </li>
                          <li><a href="shortcode-button.html"><i class="__icon fa fa-anchor"></i>BUTTON</a>
                          </li>
                          <li><a href="shortcode-call-to-action.html"><i class="__icon fa fa-building"></i>CALL TO ACTION</a>
                          </li>
                          <li><a href="shortcode-clients.html"><i class="__icon fa fa-user-secret"></i>CLIENTS</a>
                          </li>
                          <li><a href="shortcode-columns.html"><i class="__icon fa fa-columns"></i>COLUMNS</a>
                          </li>
                          <li><a href="shortcode-contact-form.html"><i class="__icon fa fa-keyboard-o"></i>CONTACT FORM</a>
                          </li>
                          <li><a href="shortcode-counter.html"><i class="__icon fa fa-money"></i>COUNTER</a>
                          </li>
                          <li><a href="shortcode-coverbox.html"><i class="__icon fa fa-bicycle"></i>COVERBOX</a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="#">SHORTCODES 02</a>
                        <ul>
                          <li><a href="shortcode-dropcaps.html"><i class="__icon fa fa-align-right"></i>DROPCAPS</a>
                          </li>
                          <li><a href="shortcode-expendable-section.html"><i class="__icon fa fa-expand"></i>EXPENDABLE SECTION</a>
                          </li>
                          <li><a href="shortcode-google-map.html"><i class="__icon fa fa-google"></i>GOOGLE MAP</a>
                          </li>
                          <li><a href="shortcode-heading.html"><i class="__icon fa fa-header"></i>HEADING</a>
                          </li>
                          <li><a href="shortcode-hightlight.html"><i class="__icon fa fa-bookmark-o"></i>HIGHTLIGHT</a>
                          </li>
                          <li><a href="shortcode-iconboxes.html"><i class="__icon fa fa-asterisk"></i>ICONBOXES</a>
                          </li>
                          <li><a href="shortcode-iconboxes-carousel.html"><i class="__icon fa fa-arrows-h"></i>ICONBOXES CAROUSEL</a>
                          </li>
                          <li><a href="shortcode-iconlists.html"><i class="__icon fa fa-list"></i>ICONLISTS</a>
                          </li>
                          <li><a href="shortcode-icons.html"><i class="__icon fa fa-briefcase"></i>ICONS</a>
                          </li>
                          <li><a href="shortcode-interactive-banner.html"><i class="__icon fa fa-diamond"></i>INTERACTIVE BANNER</a>
                          </li>
                          <li><a href="shortcode-lists.html"><i class="__icon fa fa-list-ol"></i>LISTS</a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="#">SHORTCODES 03</a>
                        <ul>
                          <li><a href="shortcode-pagination.html"><i class="__icon fa fa-pagelines"></i>PAGINATION</a>
                          </li>
                          <li><a href="shortcode-parallax.html"><i class="__icon fa fa-file-image-o"></i>PARALLAX</a>
                          </li>
                          <li><a href="shortcode-piechart.html"><i class="__icon fa fa-pie-chart"></i>PIECHART</a>
                          </li>
                          <li><a href="shortcode-piechart2.html"><i class="__icon fa fa-pie-chart"></i>PIECHART 02<span class="__flag border-primary color-primary">NEW</span></a>
                          </li>
                          <li><a href="shortcode-piechart3.html"><i class="__icon fa fa-pie-chart"></i>PIECHART 03<span class="__flag border-primary color-primary">NEW</span></a>
                          </li>
                          <li><a href="shortcode-pricing-table.html"><i class="__icon fa fa-list-alt"></i>PRICING TABLE</a>
                          </li>
                          <li><a href="shortcode-process.html"><i class="__icon fa fa-check-square"></i>PROCESS</a>
                          </li>
                          <li><a href="shortcode-progressbar.html"><i class="__icon fa fa-server"></i>PROGRESSBAR</a>
                          </li>
                          <li><a href="shortcode-qrcode.html"><i class="__icon fa fa-qrcode"></i>QRCODE</a>
                          </li>
                          <li><a href="shortcode-separator.html"><i class="__icon fa fa-minus"></i>SEPARATOR</a>
                          </li>
                          <li><a href="shortcode-service-table.html"><i class="__icon fa fa-th"></i>SERVICE TABLE</a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="#">SHORTCODES 04</a>
                        <ul>
                          <li><a href="shortcode-tab.html"><i class="__icon fa fa-th-large"></i>TAB</a>
                          </li>
                          <li><a href="shortcode-table.html"><i class="__icon fa fa-table"></i>TABLE</a>
                          </li>
                          <li><a href="shortcode-team.html"><i class="__icon fa fa-users"></i>TEAM</a>
                          </li>
                          <li><a href="shortcode-testimonials.html"><i class="__icon fa fa-comments"></i>TESTIMONIALS</a>
                          </li>
                          <li><a href="shortcode-typography.html"><i class="__icon fa fa-text-height"></i>TYPOGRAPHY</a>
                          </li>
                          <li><a href="shortcode-vertical-progressbar.html"><i class="__icon fa fa-bar-chart"></i>VERTICAL PROGRESSBAR</a>
                          </li>
                          <li><a href="shortcode-widget.html"><i class="__icon fa fa-cube"></i>WIDGET</a>
                          </li>
                          <li><a href="shortcode-image-gallery.html"><i class="__icon fa fa-file-image-o"></i>IMAGE GALLERY</a>
                          </li>
                          <li><a href="shortcode-image-slider.html"><i class="__icon fa fa-picture-o"></i>IMAGE SLIDER</a>
                          </li>
                          <li><a href="shortcode-share-module.html"><i class="__icon fa fa-paper-plane-o"></i>SHARE MODULE</a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="#">MANY FEATURES</a>
                        <ul>
                          <li><a href="#">BOOTSTRAP 3 GRID SYSTEM</a>
                          </li>
                          <li><a href="#">HTML5 &amp; CSS3 ANIMATION</a>
                          </li>
                          <li><a href="#">AUTOMATE YOUR WORKFLOW</a>
                          </li>
                          <li><a href="#">NODE TEMPLATE ENGINE</a>
                          </li>
                          <li><a href="#">LESS PRE-PROCESSOR</a>
                          </li>
                          <li><a href="#">FONT AWESOME INCLUDED</a>
                          </li>
                          <li><a href="#">+1000 ICON FONTS </a>
                          </li>
                          <li><a href="#">FULLY RESPONSIVE</a>
                          </li>
                          <li><a href="#">FREE GOOGLE FONTS</a>
                          </li>
                          <li><a href="#">PARALLAX BACKGROUND</a>
                          </li>
                          <li><a href="#">WIDE AND BOXED LAYOUT</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="#">OPTIONS</a>
                    <ul class="multi-floor-menu">
                      <li><a href="#"><i class="__icon fa fa-files-o"></i>HEADER OPTIONS</a>
                        <ul>
                          <li><a href="header-option-1.html">HEADER STYLE 01</a>
                          </li>
                          <li><a href="header-option-2.html">HEADER STYLE 02</a>
                          </li>
                          <li><a href="header-option-3.html">HEADER STYLE 03</a>
                          </li>
                          <li><a href="header-option-4.html">HEADER STYLE 04</a>
                          </li>
                          <li><a href="header-option-5.html">HEADER STYLE 05</a>
                          </li>
                          <li><a href="header-option-6.html">HEADER STYLE 06</a>
                          </li>
                          <li><a href="header-option-7.html">HEADER STYLE 07</a>
                          </li>
                          <li><a href="header-option-8.html">HEADER STYLE 08</a>
                          </li>
                          <li><a href="header-option-12.html">HEADER STYLE 09</a>
                          </li>
                          <li><a href="header-option-16.html">HEADER STYLE 10</a>
                          </li>
                          <li><a href="header-option-20.html">HEADER STYLE 11</a>
                          </li>
                          <li><a href="header-option-17.html">HEADER STYLE 12</a>
                          </li>
                          <li><a href="#">AND MUCH MORE</a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="#"><i class="__icon fa fa-magic"></i>FOOTER OPTIONS</a>
                        <ul>
                          <li><a href="footer-option-1.html#footer">FOOTER STYLE 01</a>
                          </li>
                          <li><a href="footer-option-2.html#footer">FOOTER STYLE 02</a>
                          </li>
                          <li><a href="footer-option-3.html#footer">FOOTER STYLE 03</a>
                          </li>
                          <li><a href="footer-option-4.html#footer">FOOTER STYLE 04</a>
                          </li>
                          <li><a href="footer-option-5.html#footer">FOOTER STYLE 05</a>
                          </li>
                          <li><a href="footer-option-6.html#footer">FOOTER STYLE 06</a>
                          </li>
                          <li><a href="footer-option-7.html#footer">FOOTER STYLE 07</a>
                          </li>
                          <li><a href="footer-option-8.html#footer">FOOTER STYLE 08</a>
                          </li>
                          <li><a href="footer-option-9.html#footer">FOOTER STYLE 09</a>
                          </li>
                          <li><a href="footer-option-10.html#footer">FOOTER STYLE 10</a>
                          </li>
                          <li><a href="#">AND MUCH MORE</a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="#"><i class="__icon fa fa-youtube-play"></i>VIDEO OPTIONS</a>
                        <ul>
                          <li><a href="homepage-video-1.html">YOUTUBE VIDEO</a>
                          </li>
                          <li><a href="homepage-video-2.html">HTML5 VIDEO</a>
                          </li>
                          <li><a href="homepage-video-3.html">SLIDER &amp; VIDEO</a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="#"><i class="__icon fa fa-diamond"></i>WIDGET OPTIONS</a>
                        <ul>
                          <li><a href="shortcode-widget.html">CATEGORIES</a>
                          </li>
                          <li><a href="shortcode-widget.html">RECENT POSTS</a>
                          </li>
                          <li><a href="shortcode-widget.html">IMAGES GALLERY</a>
                          </li>
                          <li><a href="shortcode-widget.html">RECENT TWEETS</a>
                          </li>
                          <li><a href="shortcode-widget.html">POPULAR TAGS</a>
                          </li>
                          <li><a href="shortcode-widget.html">SEARCH BOX</a>
                          </li>
                          <li><a href="shortcode-widget.html">FILTER BY PRICE</a>
                          </li>
                          <li><a href="shortcode-widget.html">ACCORDION WIDGET</a>
                          </li>
                          <li><a href="shortcode-widget.html">RECENT PRODUCTS</a>
                          </li>
                          <li><a href="shortcode-widget.html">FREE TEXT WIDGET</a>
                          </li>
                          <li><a href="shortcode-widget.html">SLIDER IMAGES</a>
                          </li>
                          <li><a href="shortcode-widget.html">SOCIAL ICONS</a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="#"><i class="__icon fa fa-cubes"></i>MENU OPTIONS</a>
                        <ul>
                          <li><a href="#">DROPDOWN MENU</a>
                          </li>
                          <li><a href="#">MEGAMENU 2 COLUMNS</a>
                          </li>
                          <li><a href="#">MEGAMENU 3 COLUMNS</a>
                          </li>
                          <li><a href="#">MEGAMENU 4 COLUMNS</a>
                          </li>
                          <li><a href="#">MEGAMENU 5 COLUMNS</a>
                          </li>
                          <li><a href="#">MEGAMENU WITH HEADING</a>
                          </li>
                          <li><a href="#">OFF CANVAS MENU</a>
                          </li>
                          <li><a href="#">STICKY MENU</a>
                          </li>
                          <li><a href="#">MENU WITH ICON</a>
                          </li>
                          <li><a href="#">MENU WITH FLAG</a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="#"><i class="__icon fa fa-spinner"></i>UPDATING...</a>
                      </li>
                    </ul>
                  </li>
                  <li><a href="#">BLOG</a>
                    <ul class="multi-floor-menu menu-right-base">
                      <li><a href="#">BLOG LARGE IMAGE</a>
                        <ul>
                          <li><a href="blog-fullwidth.html">LARGE IMAGE FULLWIDTH</a>
                          </li>
                          <li><a href="blog-sidebar-left.html">LARGE IMAGE SIDEBAR LEFT</a>
                          </li>
                          <li><a href="blog-sidebar-right.html">LARGE IMAGE SIDEBAR RIGHT</a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="#">BLOG LEFT IMAGE</a>
                        <ul>
                          <li><a href="blog-left-image-fullwidth.html">LEFT IMAGES IMAGE FULLWIDTH</a>
                          </li>
                          <li><a href="blog-left-image-sidebar-left.html">LEFT IMAGES IMAGE SIDEBAR LEFT</a>
                          </li>
                          <li><a href="blog-left-image-sidebar-right.html">LEFT IMAGES IMAGE SIDEBAR RIGHT</a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="#">BLOG TIME LINE</a>
                        <ul>
                          <li><a href="blog-timeline-fullwidth.html">TIME LINE FULLWIDTH</a>
                          </li>
                          <li><a href="blog-timeline-sidebar-left.html">TIME LINE SIDEBAR LEFT</a>
                          </li>
                          <li><a href="blog-timeline-sidebar-right.html">TIME LINE SIDEBAR RIGHT</a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="#">BLOG MASONRY</a>
                        <ul>
                          <li><a href="blog-masonry-wide.html">MASONRY WIDE</a>
                          </li>
                          <li><a href="blog-masonry-fullwidth.html">MASONRY FULLWIDTH</a>
                          </li>
                          <li><a href="blog-masonry-sidebar-left.html">MASONRY SIDEBAR LEFT</a>
                          </li>
                          <li><a href="blog-masonry-sidebar-right.html">MASONRY SIDEBAR RIGHT</a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="#">BLOG SINGLE</a>
                        <ul>
                          <li><a href="blog-single-sidebar-left.html">SINGLE SIDEBAR LEFT</a>
                          </li>
                          <li><a href="blog-single-fullwidth.html">SINGLE FULLWIDTH</a>
                          </li>
                          <li><a href="blog-single-standard.html">SINGLE STANDARD</a>
                          </li>
                          <li><a href="blog-single-audio.html">SINGLE AUDIO</a>
                          </li>
                          <li><a href="blog-single-gallery.html">SINGLE GALLERY</a>
                          </li>
                          <li><a href="blog-single-quote.html">SINGLE QUOTE</a>
                          </li>
                          <li><a href="blog-single-video.html">SINGLE VIDEO</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="#">WORKS</a>
                    <ul class="mega-menu menu-5-col menu-fullwidth menu-hr-heading">
                      <li><a href="#">3 COLUMNS</a>
                        <ul>
                          <li><a href="portfolio-3-columns-hover-style-1.html">3 COLUMNS STYLE 01</a>
                          </li>
                          <li><a href="portfolio-3-columns-hover-style-2.html">3 COLUMNS STYLE 02</a>
                          </li>
                          <li><a href="portfolio-3-columns-hover-style-3.html">3 COLUMNS STYLE 03</a>
                          </li>
                          <li><a href="portfolio-3-columns-hover-style-4.html">3 COLUMNS STYLE 04</a>
                          </li>
                          <li><a href="portfolio-3-columns-hover-style-5.html">3 COLUMNS STYLE 05</a>
                          </li>
                          <li><a href="portfolio-3-columns-hover-style-6.html">3 COLUMNS STYLE 06</a>
                          </li>
                          <li><a href="portfolio-3-columns-no-space.html">NO SPACE</a>
                          </li>
                          <li><a href="portfolio-3-columns-wide.html">WIDE SCREEN</a>
                          </li>
                          <li><a href="portfolio-3-columns-wide-no-space.html">WIDE &amp; NO SPACE</a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="#">4 COLUMNS</a>
                        <ul>
                          <li><a href="portfolio-4-columns-hover-style-1.html">4 COLUMNS STYLE 01</a>
                          </li>
                          <li><a href="portfolio-4-columns-hover-style-2.html">4 COLUMNS STYLE 02</a>
                          </li>
                          <li><a href="portfolio-4-columns-hover-style-3.html">4 COLUMNS STYLE 03</a>
                          </li>
                          <li><a href="portfolio-4-columns-hover-style-4.html">4 COLUMNS STYLE 04</a>
                          </li>
                          <li><a href="portfolio-4-columns-hover-style-5.html">4 COLUMNS STYLE 05</a>
                          </li>
                          <li><a href="portfolio-4-columns-hover-style-6.html">4 COLUMNS STYLE 06</a>
                          </li>
                          <li><a href="portfolio-4-columns-no-space.html">NO SPACE</a>
                          </li>
                          <li><a href="portfolio-4-columns-wide.html">WIDE SCREEN</a>
                          </li>
                          <li><a href="portfolio-4-columns-wide-no-space.html">WIDE &amp; NO SPACE</a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="#">5 COLUMNS</a>
                        <ul>
                          <li><a href="portfolio-5-columns-hover-style-1.html">5 COLUMNS STYLE 01</a>
                          </li>
                          <li><a href="portfolio-5-columns-hover-style-2.html">5 COLUMNS STYLE 02</a>
                          </li>
                          <li><a href="portfolio-5-columns-hover-style-3.html">5 COLUMNS STYLE 03</a>
                          </li>
                          <li><a href="portfolio-5-columns-hover-style-4.html">5 COLUMNS STYLE 04</a>
                          </li>
                          <li><a href="portfolio-5-columns-hover-style-5.html">5 COLUMNS STYLE 05</a>
                          </li>
                          <li><a href="portfolio-5-columns-hover-style-6.html">5 COLUMNS STYLE 06</a>
                          </li>
                          <li><a href="portfolio-5-columns-no-space.html">NO SPACE</a>
                          </li>
                          <li> <a href="portfolio-5-columns-wide.html">WIDE SCREEN</a>
                          </li>
                          <li><a href="portfolio-5-columns-wide-no-space.html">WIDE &amp; NO SPACE</a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="#">SPECIAL STYLE</a>
                        <ul>
                          <li><a href="portfolio-carousel.html">CAROUSEL</a>
                          </li>
                          <li><a href="portfolio-hover-effect.html">HOVER EFFECT<span class="__flag border-danger color-danger">HOT</span></a>
                          </li>
                          <li><a href="portfolio-masonry.html">MASONRY</a>
                          </li>
                          <li><a href="portfolio-masonry-wide.html">MASONRY WIDE</a>
                          </li>
                          <li><a href="portfolio-shortcode-masonry.html">METRO STYLE 01</a>
                          </li>
                          <li><a href="portfolio-shortcode-masonry-2.html">METRO STYLE 02</a>
                          </li>
                          <li><a href="portfolio-2-columns-hover-style-1.html">2 COLUMNS STYLE 01</a>
                          </li>
                          <li><a href="portfolio-2-columns-hover-style-2.html">2 COLUMNS STYLE 02</a>
                          </li>
                          <li><a href="portfolio-2-columns-hover-style-3.html">2 COLUMNS STYLE 03</a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="#">SINGLE PORTFOLIO</a>
                        <ul>
                          <li><a href="portfolio-single-1.html">PORTFOLIO SINGLE 01</a>
                          </li>
                          <li><a href="portfolio-single-2.html">PORTFOLIO SINGLE 02</a>
                          </li>
                          <li><a href="portfolio-single-3.html">PORTFOLIO SINGLE 03</a>
                          </li>
                          <li><a href="portfolio-single-4.html">PORTFOLIO SINGLE 04</a>
                          </li>
                          <li><a href="portfolio-single-5.html">PORTFOLIO SINGLE 05</a>
                          </li>
                          <li><a href="portfolio-single-6.html">PORTFOLIO SINGLE 06</a>
                          </li>
                          <li><a href="portfolio-single-7.html">PORTFOLIO SINGLE 07</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="#">SHOP</a>
                    <ul class="mega-menu menu-right-base menu-3-col menu-hr-heading">
                      <li><a href="#">SHOP CATEGORY</a>
                        <ul>
                          <li><a href="shop-category-fullwidth.html">CATEGORY FULLWIDTH</a>
                          </li>
                          <li><a href="shop-category-sidebar-left.html">CATEGORY SIDE BAR LEFT</a>
                          </li>
                          <li><a href="shop-category-sidebar-right.html">CATEGORY SIDE BAR RIGHT</a>
                          </li>
                          <li><a href="shop-category-top-slider.html">CATEGORY TOP SLIDER</a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="#">SINGLE SHOP</a>
                        <ul>
                          <li><a href="shop-single-fullwidth.html">SINGLE FULLWIDTH</a>
                          </li>
                          <li><a href="shop-single-sidebar-left.html">SINGLE SIDE BAR LEFT</a>
                          </li>
                          <li><a href="shop-single-sidebar-right.html">SINGLE SIDE BAR RIGHT</a>
                          </li>
                          <li><a href="shop-single-top-slider.html">SINGLE TOP SLIDER</a>
                          </li>
                          <li><a href="shop-single-variable.html">SINGLE VARIABLE</a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="#">OTHER PAGE</a>
                        <ul>
                          <li><a href="shop-account.html">MY ACCOUNT</a>
                          </li>
                          <li><a href="shop-cart.html">CART</a>
                          </li>
                          <li><a href="shop-checkout.html">CHECK OUT</a>
                          </li>
                          <li><a href="shop-order-tracking.html">ORDER TRACKING</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </nav>
              <div class="nav-function nav-item">
                <div class="__cart dropdown"><a href="#" data-target="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="cart-open icon-shopping111">
                    <div class="__quantity bgc-primary">3</div></a>
                  <div class="dropdown-menu bgc-gray-darkest">
                    <div class="__cart-item">
                      <div class="__image"><img src="assets/images/shop/product-img-1-s.jpg" alt="Shop Product" class="img-responsive"/></div>
                      <div class="__info">
                        <div class="__category font-serif-italic fz-6-s">Women / Clothe</div>
                        <div class="font-heading fz-6-ss"><a href="#">SKATER DRESS IN LEAF</a></div><span class="__price color-primary font-heading">1 x $280</span>
                      </div><a href="#" class="__remove icon-185090-delete-garbage-streamline"></a>
                    </div>
                    <div class="__cart-item">
                      <div class="__image"><img src="assets/images/shop/product-img-2-s.jpg" alt="Shop Product" class="img-responsive"/></div>
                      <div class="__info">
                        <div class="__category font-serif-italic fz-6-s">Women / Clothe</div>
                        <div class="font-heading fz-6-ss"><a href="#">SKATER DRESS IN LEAF</a></div><span class="__price color-primary font-heading">1 x $280</span>
                      </div><a href="#" class="__remove icon-185090-delete-garbage-streamline"></a>
                    </div>
                    <div class="__cart-item">
                      <div class="__image"><img src="assets/images/shop/product-img-3-s.jpg" alt="Shop Product" class="img-responsive"/></div>
                      <div class="__info">
                        <div class="__category font-serif-italic fz-6-s">Women / Clothe</div>
                        <div class="font-heading fz-6-ss"><a href="#">SKATER DRESS IN LEAF</a></div><span class="__price color-primary font-heading">1 x $280</span>
                      </div><a href="#" class="__remove icon-185090-delete-garbage-streamline"></a>
                    </div>
                    <div class="__middle-row"><a href="#"><i class="icon-185090-delete-garbage-streamline mr-5"></i>Empty Cart</a>
                      <div class="__total">Subtotal : &nbsp;<span class="color-primary">$740</span></div>
                    </div>
                    <div class="__button-group"><a href="shop-cart.html" class="btn btn-primary"><i class="icon icon-svg-icon-16"></i>VIEW CART</a><a href="shop-checkout.html" class="pull-right btn btn-secondary">CHECKOUT</a></div>
                  </div>
                </div>
                <div class="__search"><a href="__modal-search.html" data-modal-open="data-modal-open" class="icon-search-icon"></a>
                </div>
                <div class="__offcanvas-button"><a href="#" class="offcanvas-nav-toggle icon-menu27"></a></div>
              </div>
            </div>
            <div class="pull-right nav-item hidden-lg"><a href="shop-cart.html" class="cart-button icon-shopping111"></a><a href="#" class="mobile-nav-toggle nav-hamburger"><span></span></a></div>
          </div>
        </div>
      </div>-->
      <nav class="offcanvas-nav bgc-gray-darkest"><a href="#" class="offcanvas-nav-toggle"><i class="icon-wrong6"></i></a>
        <h6 class="size-s smb">CUSTOM PAGES</h6>
        <nav class="nav-single nav-item">
          <ul>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </nav>
        <h6 class="size-s smb">ADDTIONAL LINKS</h6>
        <nav class="nav-single nav-item">
          <ul>
            <li><a href="#">Retina Homepage</a></li>
            <li><a href="#">New Page Examples</a></li>
            <li><a href="#">Parallax Sections</a></li>
            <li><a href="#">Shortcode Central</a></li>
            <li><a href="#">Ultimate Font</a></li>
            <li><a href="#">Collection</a></li>
          </ul>
        </nav>
        <h6 class="size-s">GALLERY</h6>
        <div class="widget widget-gallery">
          <ul class="__widget-content magnific-gallery">
            <li><a href="assets/images/vintage/vintage-1.jpg" class="zoom-button img-wrapper"><img src="assets/images/vintage/vintage-1-thumbnail.jpg" alt="instagram image"/></a></li>
            <li><a href="assets/images/vintage/vintage-2.jpg" class="zoom-button img-wrapper"><img src="assets/images/vintage/vintage-2-thumbnail.jpg" alt="instagram image"/></a></li>
            <li><a href="assets/images/vintage/vintage-3.jpg" class="zoom-button img-wrapper"><img src="assets/images/vintage/vintage-3-thumbnail.jpg" alt="instagram image"/></a></li>
            <li><a href="assets/images/vintage/vintage-4.jpg" class="zoom-button img-wrapper"><img src="assets/images/vintage/vintage-4-thumbnail.jpg" alt="instagram image"/></a></li>
            <li><a href="assets/images/vintage/vintage-5.jpg" class="zoom-button img-wrapper"><img src="assets/images/vintage/vintage-5-thumbnail.jpg" alt="instagram image"/></a></li>
            <li><a href="assets/images/vintage/vintage-6.jpg" class="zoom-button img-wrapper"><img src="assets/images/vintage/vintage-6-thumbnail.jpg" alt="instagram image"/></a></li>
            <li><a href="assets/images/vintage/vintage-7.jpg" class="zoom-button img-wrapper"><img src="assets/images/vintage/vintage-7-thumbnail.jpg" alt="instagram image"/></a></li>
            <li><a href="assets/images/vintage/vintage-8.jpg" class="zoom-button img-wrapper"><img src="assets/images/vintage/vintage-8-thumbnail.jpg" alt="instagram image"/></a></li>
            <li><a href="assets/images/vintage/vintage-9.jpg" class="zoom-button img-wrapper"><img src="assets/images/vintage/vintage-9-thumbnail.jpg" alt="instagram image"/></a></li>
          </ul>
        </div>
        <ul class="social circle gray">
          <li><a href="#"><i class="icon icon-facebook-1"></i></a></li>
          <li><a href="#"><i class="icon icon-pinterest"></i></a></li>
          <li><a href="#"><i class="icon icon-twitter-1"></i></a></li>
          <li><a href="#"><i class="icon icon-linkedin-1"></i></a></li>
        </ul>
      </nav>
      <div class="mobile-nav"><a href="#" class="mobile-nav-toggle"><i class="icon-close47"></i></a><a href="index.html" class="megatron">
          <div class="logo"><svg viewBox="0 0 100 100"> <g> <path d="M64.264,31.886v56.803l-14.319,8.259l-14.319-8.259v-74.3L14.157,26.771v41.271l7.156,4.128V30.905   l13.467-7.768v8.26l-6.311,3.64V84.56L7,72.178v-49.54L42.781,2v82.553l7.162,4.132l7.163-4.132V27.758L64.264,31.886z    M43.626,26.294l6.317-3.644L71.42,35.038V84.56l21.469-12.382v-49.54L57.106,2v15.546l7.157,4.128v-7.285l21.469,12.382v41.271   l-7.156,4.128V30.905L49.943,14.391l-6.317,3.644V26.294z"/> </g> </svg>
          </div>
          <div class="brand">MEGATRON</div></a>
        <nav class="os-menu mobile-menu">
          <ul>
            <li><a href="#">HOME</a>
              <ul>
                <li><a href="homepage-landing-page.html">LANDING PAGE</a>
                </li>
                <li><a href="#">DEMOS</a>
                  <ul>
                    <li><a href="demo-construction-homepage.html">DEMO CONSTRUCTION</a>
                    </li>
                    <li><a href="demo-hospital-homepage.html">DEMO HOSPITAL</a>
                    </li>
                    <li><a href="demo-handyman-homepage.html">DEMO HANDYMAN</a>
                    </li>
                    <li><a href="demo-cleaning-homepage.html">DEMO CLEANING</a>
                    </li>
                    <li><a href="demo-fitness-homepage.html">DEMO FITNESS</a>
                    </li>
                    <li><a href="demo-interior-homepage.html">DEMO INTERIOR</a>
                    </li>
                    <li><a href="demo-lawyer-homepage.html">DEMO LAWYER</a>
                    </li>
                    <li><a href="demo-logistics-homepage.html">DEMO LOGISTICS</a>
                    </li>
                    <li><a href="#">UPDATING...</a>
                    </li>
                  </ul>
                </li>
                <li><a href="#">CREATIVE</a>
                  <ul>
                    <li><a href="homepage-creative-1.html">CREATIVE 01</a>
                    </li>
                    <li><a href="homepage-creative-2.html">CREATIVE 02</a>
                    </li>
                    <li><a href="homepage-creative-3.html">CREATIVE 03</a>
                    </li>
                  </ul>
                </li>
                <li><a href="#">BUSINESS</a>
                  <ul>
                    <li><a href="homepage-business-1.html">BUSINESS 01</a>
                    </li>
                    <li><a href="homepage-business-2.html">BUSINESS 02</a>
                    </li>
                    <li><a href="homepage-business-3.html">BUSINESS 03</a>
                    </li>
                  </ul>
                </li>
                <li><a href="#">ONEPAGE</a>
                  <ul>
                    <li><a href="homepage-onepage-1.html">ONEPAGE 01</a>
                    </li>
                    <li><a href="homepage-onepage-2.html">ONEPAGE 02</a>
                    </li>
                    <li><a href="homepage-onepage-3.html">ONEPAGE 03</a>
                    </li>
                  </ul>
                </li>
                <li><a href="#">AGENCY</a>
                  <ul>
                    <li><a href="homepage-agency-1.html">AGENCY 01</a>
                    </li>
                    <li><a href="homepage-agency-2.html">AGENCY 02</a>
                    </li>
                    <li><a href="homepage-agency-3.html">AGENCY 03</a>
                    </li>
                  </ul>
                </li>
                <li><a href="#">VIDEO HEADER</a>
                  <ul>
                    <li><a href="homepage-video-1.html">VIDEO HEADER 01</a>
                    </li>
                    <li><a href="homepage-video-2.html">VIDEO HEADER 02</a>
                    </li>
                    <li><a href="homepage-video-3.html">VIDEO HEADER 03</a>
                    </li>
                  </ul>
                </li>
                <li><a href="#">ALTERNATIVE</a>
                  <ul>
                    <li><a href="homepage-alternative-1.html">ALTERNATIVE 01</a>
                    </li>
                    <li><a href="homepage-alternative-2.html">ALTERNATIVE 02</a>
                    </li>
                    <li><a href="homepage-alternative-3.html">ALTERNATIVE 03</a>
                    </li>
                    <li><a href="homepage-alternative-4.html">ALTERNATIVE 04</a>
                    </li>
                  </ul>
                </li>
                <li><a href="homepage-christmas-1.html">CHRISTMAS</a>
                </li>
                <li><a href="#">PORTFOLIO</a>
                  <ul>
                    <li><a href="homepage-portfolio-1.html">PORTFOLIO 01</a>
                    </li>
                    <li><a href="homepage-portfolio-2.html">PORTFOLIO 02</a>
                    </li>
                    <li><a href="homepage-portfolio-3.html">PORTFOLIO 03</a>
                    </li>
                    <li><a href="homepage-portfolio-4.html">PORTFOLIO 04</a>
                    </li>
                  </ul>
                </li>
                <li><a href="homepage-leftmenu.html">LEFTMENU</a>
                </li>
                <li><a href="#">STORE</a>
                  <ul>
                    <li><a href="homepage-store-1.html">HOMEPAGE SHOP 01</a>
                    </li>
                    <li><a href="homepage-store-2.html">HOMEPAGE SHOP 02</a>
                    </li>
                    <li><a href="homepage-store-3.html">HOMEPAGE SHOP 03</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#">PAGES</a>
              <ul>
                <li><a href="#">GROUP 01</a>
                  <ul>
                    <li><a href="page-about-us-1.html">ABOUT US</a>
                    </li>
                    <li><a href="page-about-us-2.html">ABOUT US 2</a>
                    </li>
                    <li><a href="page-about-us-3.html">ABOUT US 3</a>
                    </li>
                    <li><a href="page-about-us-4.html">ABOUT US 4</a>
                    </li>
                    <li><a href="page-about-me.html">ABOUT ME</a>
                    </li>
                    <li><a href="page-services.html">SERVICES</a>
                    </li>
                    <li><a href="page-faq.html">FAQ</a>
                    </li>
                  </ul>
                </li>
                <li><a href="#">GROUP 02</a>
                  <ul>
                    <li><a href="page-contact-us.html">CONTACT US</a>
                    </li>
                    <li><a href="page-contact-us-2.html">CONTACT US 2</a>
                    </li>
                    <li><a href="page-contact-us-3.html">CONTACT US 3</a>
                    </li>
                    <li><a href="page-fullwidth.html">PAGE FULLWIDTH</a>
                    </li>
                    <li><a href="page-sidebar-left.html">PAGE SIDEBAR LEFT</a>
                    </li>
                    <li><a href="page-sidebar-right.html">PAGE SIDEBAR RIGHT</a>
                    </li>
                    <li><a href="page-policy.html">POLICY</a>
                    </li>
                  </ul>
                </li>
                <li><a href="#">GROUP 03</a>
                  <ul>
                    <li><a href="404.html">404 ERROR</a>
                    </li>
                    <li><a href="page-underconstruction.html">UNDERCONSTRUCTION</a>
                    </li>
                    <li><a href="page-search-result.html">SEARCH RESULT</a>
                    </li>
                    <li><a href="page-portfolio.html">PAGE PORTFOLIO</a>
                    </li>
                    <li><a href="page-portfolio-blog.html">PAGE PORTFOLIO BLOG</a>
                    </li>
                    <li><a href="page-login-vs-register.html">LOGIN VS REGISTER</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#">FEATURES</a>
              <ul>
                <li><a href="#">SHORTCODES 01</a>
                  <ul>
                    <li><a href="shortcode-accordion.html"><i class="__icon fa fa-bars"></i>ACCORDION</a>
                    </li>
                    <li><a href="shortcode-alert-message.html"><i class="__icon fa fa-exclamation-triangle"></i>ALERT MESSAGE<span class="__flag border-danger color-danger">HOT</span></a>
                    </li>
                    <li><a href="shortcode-blockquotes.html"><i class="__icon fa fa-quote-right"></i>BLOCKQUOTES</a>
                    </li>
                    <li><a href="shortcode-blogpost.html"><i class="__icon fa fa-pencil-square-o"></i>BLOGPOST</a>
                    </li>
                    <li><a href="shortcode-button.html"><i class="__icon fa fa-anchor"></i>BUTTON</a>
                    </li>
                    <li><a href="shortcode-call-to-action.html"><i class="__icon fa fa-building"></i>CALL TO ACTION</a>
                    </li>
                    <li><a href="shortcode-clients.html"><i class="__icon fa fa-user-secret"></i>CLIENTS</a>
                    </li>
                    <li><a href="shortcode-columns.html"><i class="__icon fa fa-columns"></i>COLUMNS</a>
                    </li>
                    <li><a href="shortcode-contact-form.html"><i class="__icon fa fa-keyboard-o"></i>CONTACT FORM</a>
                    </li>
                    <li><a href="shortcode-counter.html"><i class="__icon fa fa-money"></i>COUNTER</a>
                    </li>
                    <li><a href="shortcode-coverbox.html"><i class="__icon fa fa-bicycle"></i>COVERBOX</a>
                    </li>
                  </ul>
                </li>
                <li><a href="#">SHORTCODES 02</a>
                  <ul>
                    <li><a href="shortcode-dropcaps.html"><i class="__icon fa fa-align-right"></i>DROPCAPS</a>
                    </li>
                    <li><a href="shortcode-expendable-section.html"><i class="__icon fa fa-expand"></i>EXPENDABLE SECTION</a>
                    </li>
                    <li><a href="shortcode-google-map.html"><i class="__icon fa fa-google"></i>GOOGLE MAP</a>
                    </li>
                    <li><a href="shortcode-heading.html"><i class="__icon fa fa-header"></i>HEADING</a>
                    </li>
                    <li><a href="shortcode-hightlight.html"><i class="__icon fa fa-bookmark-o"></i>HIGHTLIGHT</a>
                    </li>
                    <li><a href="shortcode-iconboxes.html"><i class="__icon fa fa-asterisk"></i>ICONBOXES</a>
                    </li>
                    <li><a href="shortcode-iconboxes-carousel.html"><i class="__icon fa fa-arrows-h"></i>ICONBOXES CAROUSEL</a>
                    </li>
                    <li><a href="shortcode-iconlists.html"><i class="__icon fa fa-list"></i>ICONLISTS</a>
                    </li>
                    <li><a href="shortcode-icons.html"><i class="__icon fa fa-briefcase"></i>ICONS</a>
                    </li>
                    <li><a href="shortcode-interactive-banner.html"><i class="__icon fa fa-diamond"></i>INTERACTIVE BANNER</a>
                    </li>
                    <li><a href="shortcode-lists.html"><i class="__icon fa fa-list-ol"></i>LISTS</a>
                    </li>
                  </ul>
                </li>
                <li><a href="#">SHORTCODES 03</a>
                  <ul>
                    <li><a href="shortcode-pagination.html"><i class="__icon fa fa-pagelines"></i>PAGINATION</a>
                    </li>
                    <li><a href="shortcode-parallax.html"><i class="__icon fa fa-file-image-o"></i>PARALLAX</a>
                    </li>
                    <li><a href="shortcode-piechart.html"><i class="__icon fa fa-pie-chart"></i>PIECHART</a>
                    </li>
                    <li><a href="shortcode-piechart2.html"><i class="__icon fa fa-pie-chart"></i>PIECHART 02<span class="__flag border-primary color-primary">NEW</span></a>
                    </li>
                    <li><a href="shortcode-piechart3.html"><i class="__icon fa fa-pie-chart"></i>PIECHART 03<span class="__flag border-primary color-primary">NEW</span></a>
                    </li>
                    <li><a href="shortcode-pricing-table.html"><i class="__icon fa fa-list-alt"></i>PRICING TABLE</a>
                    </li>
                    <li><a href="shortcode-process.html"><i class="__icon fa fa-check-square"></i>PROCESS</a>
                    </li>
                    <li><a href="shortcode-progressbar.html"><i class="__icon fa fa-server"></i>PROGRESSBAR</a>
                    </li>
                    <li><a href="shortcode-qrcode.html"><i class="__icon fa fa-qrcode"></i>QRCODE</a>
                    </li>
                    <li><a href="shortcode-separator.html"><i class="__icon fa fa-minus"></i>SEPARATOR</a>
                    </li>
                    <li><a href="shortcode-service-table.html"><i class="__icon fa fa-th"></i>SERVICE TABLE</a>
                    </li>
                  </ul>
                </li>
                <li><a href="#">SHORTCODES 04</a>
                  <ul>
                    <li><a href="shortcode-tab.html"><i class="__icon fa fa-th-large"></i>TAB</a>
                    </li>
                    <li><a href="shortcode-table.html"><i class="__icon fa fa-table"></i>TABLE</a>
                    </li>
                    <li><a href="shortcode-team.html"><i class="__icon fa fa-users"></i>TEAM</a>
                    </li>
                    <li><a href="shortcode-testimonials.html"><i class="__icon fa fa-comments"></i>TESTIMONIALS</a>
                    </li>
                    <li><a href="shortcode-typography.html"><i class="__icon fa fa-text-height"></i>TYPOGRAPHY</a>
                    </li>
                    <li><a href="shortcode-vertical-progressbar.html"><i class="__icon fa fa-bar-chart"></i>VERTICAL PROGRESSBAR</a>
                    </li>
                    <li><a href="shortcode-widget.html"><i class="__icon fa fa-cube"></i>WIDGET</a>
                    </li>
                    <li><a href="shortcode-image-gallery.html"><i class="__icon fa fa-file-image-o"></i>IMAGE GALLERY</a>
                    </li>
                    <li><a href="shortcode-image-slider.html"><i class="__icon fa fa-picture-o"></i>IMAGE SLIDER</a>
                    </li>
                    <li><a href="shortcode-share-module.html"><i class="__icon fa fa-paper-plane-o"></i>SHARE MODULE</a>
                    </li>
                  </ul>
                </li>
                <li><a href="#">MANY FEATURES</a>
                  <ul>
                    <li><a href="#">BOOTSTRAP 3 GRID SYSTEM</a>
                    </li>
                    <li><a href="#">HTML5 &amp; CSS3 ANIMATION</a>
                    </li>
                    <li><a href="#">AUTOMATE YOUR WORKFLOW</a>
                    </li>
                    <li><a href="#">NODE TEMPLATE ENGINE</a>
                    </li>
                    <li><a href="#">LESS PRE-PROCESSOR</a>
                    </li>
                    <li><a href="#">FONT AWESOME INCLUDED</a>
                    </li>
                    <li><a href="#">+1000 ICON FONTS </a>
                    </li>
                    <li><a href="#">FULLY RESPONSIVE</a>
                    </li>
                    <li><a href="#">FREE GOOGLE FONTS</a>
                    </li>
                    <li><a href="#">PARALLAX BACKGROUND</a>
                    </li>
                    <li><a href="#">WIDE AND BOXED LAYOUT</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#">OPTIONS</a>
              <ul>
                <li><a href="#"><i class="__icon fa fa-files-o"></i>HEADER OPTIONS</a>
                  <ul>
                    <li><a href="header-option-1.html">HEADER STYLE 01</a>
                    </li>
                    <li><a href="header-option-2.html">HEADER STYLE 02</a>
                    </li>
                    <li><a href="header-option-3.html">HEADER STYLE 03</a>
                    </li>
                    <li><a href="header-option-4.html">HEADER STYLE 04</a>
                    </li>
                    <li><a href="header-option-5.html">HEADER STYLE 05</a>
                    </li>
                    <li><a href="header-option-6.html">HEADER STYLE 06</a>
                    </li>
                    <li><a href="header-option-7.html">HEADER STYLE 07</a>
                    </li>
                    <li><a href="header-option-8.html">HEADER STYLE 08</a>
                    </li>
                    <li><a href="header-option-12.html">HEADER STYLE 09</a>
                    </li>
                    <li><a href="header-option-16.html">HEADER STYLE 10</a>
                    </li>
                    <li><a href="header-option-20.html">HEADER STYLE 11</a>
                    </li>
                    <li><a href="header-option-17.html">HEADER STYLE 12</a>
                    </li>
                    <li><a href="#">AND MUCH MORE</a>
                    </li>
                  </ul>
                </li>
                <li><a href="#"><i class="__icon fa fa-magic"></i>FOOTER OPTIONS</a>
                  <ul>
                    <li><a href="footer-option-1.html#footer">FOOTER STYLE 01</a>
                    </li>
                    <li><a href="footer-option-2.html#footer">FOOTER STYLE 02</a>
                    </li>
                    <li><a href="footer-option-3.html#footer">FOOTER STYLE 03</a>
                    </li>
                    <li><a href="footer-option-4.html#footer">FOOTER STYLE 04</a>
                    </li>
                    <li><a href="footer-option-5.html#footer">FOOTER STYLE 05</a>
                    </li>
                    <li><a href="footer-option-6.html#footer">FOOTER STYLE 06</a>
                    </li>
                    <li><a href="footer-option-7.html#footer">FOOTER STYLE 07</a>
                    </li>
                    <li><a href="footer-option-8.html#footer">FOOTER STYLE 08</a>
                    </li>
                    <li><a href="footer-option-9.html#footer">FOOTER STYLE 09</a>
                    </li>
                    <li><a href="footer-option-10.html#footer">FOOTER STYLE 10</a>
                    </li>
                    <li><a href="#">AND MUCH MORE</a>
                    </li>
                  </ul>
                </li>
                <li><a href="#"><i class="__icon fa fa-youtube-play"></i>VIDEO OPTIONS</a>
                  <ul>
                    <li><a href="homepage-video-1.html">YOUTUBE VIDEO</a>
                    </li>
                    <li><a href="homepage-video-2.html">HTML5 VIDEO</a>
                    </li>
                    <li><a href="homepage-video-3.html">SLIDER &amp; VIDEO</a>
                    </li>
                  </ul>
                </li>
                <li><a href="#"><i class="__icon fa fa-diamond"></i>WIDGET OPTIONS</a>
                  <ul>
                    <li><a href="shortcode-widget.html">CATEGORIES</a>
                    </li>
                    <li><a href="shortcode-widget.html">RECENT POSTS</a>
                    </li>
                    <li><a href="shortcode-widget.html">IMAGES GALLERY</a>
                    </li>
                    <li><a href="shortcode-widget.html">RECENT TWEETS</a>
                    </li>
                    <li><a href="shortcode-widget.html">POPULAR TAGS</a>
                    </li>
                    <li><a href="shortcode-widget.html">SEARCH BOX</a>
                    </li>
                    <li><a href="shortcode-widget.html">FILTER BY PRICE</a>
                    </li>
                    <li><a href="shortcode-widget.html">ACCORDION WIDGET</a>
                    </li>
                    <li><a href="shortcode-widget.html">RECENT PRODUCTS</a>
                    </li>
                    <li><a href="shortcode-widget.html">FREE TEXT WIDGET</a>
                    </li>
                    <li><a href="shortcode-widget.html">SLIDER IMAGES</a>
                    </li>
                    <li><a href="shortcode-widget.html">SOCIAL ICONS</a>
                    </li>
                  </ul>
                </li>
                <li><a href="#"><i class="__icon fa fa-cubes"></i>MENU OPTIONS</a>
                  <ul>
                    <li><a href="#">DROPDOWN MENU</a>
                    </li>
                    <li><a href="#">MEGAMENU 2 COLUMNS</a>
                    </li>
                    <li><a href="#">MEGAMENU 3 COLUMNS</a>
                    </li>
                    <li><a href="#">MEGAMENU 4 COLUMNS</a>
                    </li>
                    <li><a href="#">MEGAMENU 5 COLUMNS</a>
                    </li>
                    <li><a href="#">MEGAMENU WITH HEADING</a>
                    </li>
                    <li><a href="#">OFF CANVAS MENU</a>
                    </li>
                    <li><a href="#">STICKY MENU</a>
                    </li>
                    <li><a href="#">MENU WITH ICON</a>
                    </li>
                    <li><a href="#">MENU WITH FLAG</a>
                    </li>
                  </ul>
                </li>
                <li><a href="#"><i class="__icon fa fa-spinner"></i>UPDATING...</a>
                </li>
              </ul>
            </li>
            <li><a href="#">BLOG</a>
              <ul>
                <li><a href="#">BLOG LARGE IMAGE</a>
                  <ul>
                    <li><a href="blog-fullwidth.html">LARGE IMAGE FULLWIDTH</a>
                    </li>
                    <li><a href="blog-sidebar-left.html">LARGE IMAGE SIDEBAR LEFT</a>
                    </li>
                    <li><a href="blog-sidebar-right.html">LARGE IMAGE SIDEBAR RIGHT</a>
                    </li>
                  </ul>
                </li>
                <li><a href="#">BLOG LEFT IMAGE</a>
                  <ul>
                    <li><a href="blog-left-image-fullwidth.html">LEFT IMAGES IMAGE FULLWIDTH</a>
                    </li>
                    <li><a href="blog-left-image-sidebar-left.html">LEFT IMAGES IMAGE SIDEBAR LEFT</a>
                    </li>
                    <li><a href="blog-left-image-sidebar-right.html">LEFT IMAGES IMAGE SIDEBAR RIGHT</a>
                    </li>
                  </ul>
                </li>
                <li><a href="#">BLOG TIME LINE</a>
                  <ul>
                    <li><a href="blog-timeline-fullwidth.html">TIME LINE FULLWIDTH</a>
                    </li>
                    <li><a href="blog-timeline-sidebar-left.html">TIME LINE SIDEBAR LEFT</a>
                    </li>
                    <li><a href="blog-timeline-sidebar-right.html">TIME LINE SIDEBAR RIGHT</a>
                    </li>
                  </ul>
                </li>
                <li><a href="#">BLOG MASONRY</a>
                  <ul>
                    <li><a href="blog-masonry-wide.html">MASONRY WIDE</a>
                    </li>
                    <li><a href="blog-masonry-fullwidth.html">MASONRY FULLWIDTH</a>
                    </li>
                    <li><a href="blog-masonry-sidebar-left.html">MASONRY SIDEBAR LEFT</a>
                    </li>
                    <li><a href="blog-masonry-sidebar-right.html">MASONRY SIDEBAR RIGHT</a>
                    </li>
                  </ul>
                </li>
                <li><a href="#">BLOG SINGLE</a>
                  <ul>
                    <li><a href="blog-single-sidebar-left.html">SINGLE SIDEBAR LEFT</a>
                    </li>
                    <li><a href="blog-single-fullwidth.html">SINGLE FULLWIDTH</a>
                    </li>
                    <li><a href="blog-single-standard.html">SINGLE STANDARD</a>
                    </li>
                    <li><a href="blog-single-audio.html">SINGLE AUDIO</a>
                    </li>
                    <li><a href="blog-single-gallery.html">SINGLE GALLERY</a>
                    </li>
                    <li><a href="blog-single-quote.html">SINGLE QUOTE</a>
                    </li>
                    <li><a href="blog-single-video.html">SINGLE VIDEO</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#">WORKS</a>
              <ul>
                <li><a href="#">3 COLUMNS</a>
                  <ul>
                    <li><a href="portfolio-3-columns-hover-style-1.html">3 COLUMNS STYLE 01</a>
                    </li>
                    <li><a href="portfolio-3-columns-hover-style-2.html">3 COLUMNS STYLE 02</a>
                    </li>
                    <li><a href="portfolio-3-columns-hover-style-3.html">3 COLUMNS STYLE 03</a>
                    </li>
                    <li><a href="portfolio-3-columns-hover-style-4.html">3 COLUMNS STYLE 04</a>
                    </li>
                    <li><a href="portfolio-3-columns-hover-style-5.html">3 COLUMNS STYLE 05</a>
                    </li>
                    <li><a href="portfolio-3-columns-hover-style-6.html">3 COLUMNS STYLE 06</a>
                    </li>
                    <li><a href="portfolio-3-columns-no-space.html">NO SPACE</a>
                    </li>
                    <li><a href="portfolio-3-columns-wide.html">WIDE SCREEN</a>
                    </li>
                    <li><a href="portfolio-3-columns-wide-no-space.html">WIDE &amp; NO SPACE</a>
                    </li>
                  </ul>
                </li>
                <li><a href="#">4 COLUMNS</a>
                  <ul>
                    <li><a href="portfolio-4-columns-hover-style-1.html">4 COLUMNS STYLE 01</a>
                    </li>
                    <li><a href="portfolio-4-columns-hover-style-2.html">4 COLUMNS STYLE 02</a>
                    </li>
                    <li><a href="portfolio-4-columns-hover-style-3.html">4 COLUMNS STYLE 03</a>
                    </li>
                    <li><a href="portfolio-4-columns-hover-style-4.html">4 COLUMNS STYLE 04</a>
                    </li>
                    <li><a href="portfolio-4-columns-hover-style-5.html">4 COLUMNS STYLE 05</a>
                    </li>
                    <li><a href="portfolio-4-columns-hover-style-6.html">4 COLUMNS STYLE 06</a>
                    </li>
                    <li><a href="portfolio-4-columns-no-space.html">NO SPACE</a>
                    </li>
                    <li><a href="portfolio-4-columns-wide.html">WIDE SCREEN</a>
                    </li>
                    <li><a href="portfolio-4-columns-wide-no-space.html">WIDE &amp; NO SPACE</a>
                    </li>
                  </ul>
                </li>
                <li><a href="#">5 COLUMNS</a>
                  <ul>
                    <li><a href="portfolio-5-columns-hover-style-1.html">5 COLUMNS STYLE 01</a>
                    </li>
                    <li><a href="portfolio-5-columns-hover-style-2.html">5 COLUMNS STYLE 02</a>
                    </li>
                    <li><a href="portfolio-5-columns-hover-style-3.html">5 COLUMNS STYLE 03</a>
                    </li>
                    <li><a href="portfolio-5-columns-hover-style-4.html">5 COLUMNS STYLE 04</a>
                    </li>
                    <li><a href="portfolio-5-columns-hover-style-5.html">5 COLUMNS STYLE 05</a>
                    </li>
                    <li><a href="portfolio-5-columns-hover-style-6.html">5 COLUMNS STYLE 06</a>
                    </li>
                    <li><a href="portfolio-5-columns-no-space.html">NO SPACE</a>
                    </li>
                    <li> <a href="portfolio-5-columns-wide.html">WIDE SCREEN</a>
                    </li>
                    <li><a href="portfolio-5-columns-wide-no-space.html">WIDE &amp; NO SPACE</a>
                    </li>
                  </ul>
                </li>
                <li><a href="#">SPECIAL STYLE</a>
                  <ul>
                    <li><a href="portfolio-carousel.html">CAROUSEL</a>
                    </li>
                    <li><a href="portfolio-hover-effect.html">HOVER EFFECT<span class="__flag border-danger color-danger">HOT</span></a>
                    </li>
                    <li><a href="portfolio-masonry.html">MASONRY</a>
                    </li>
                    <li><a href="portfolio-masonry-wide.html">MASONRY WIDE</a>
                    </li>
                    <li><a href="portfolio-shortcode-masonry.html">METRO STYLE 01</a>
                    </li>
                    <li><a href="portfolio-shortcode-masonry-2.html">METRO STYLE 02</a>
                    </li>
                    <li><a href="portfolio-2-columns-hover-style-1.html">2 COLUMNS STYLE 01</a>
                    </li>
                    <li><a href="portfolio-2-columns-hover-style-2.html">2 COLUMNS STYLE 02</a>
                    </li>
                    <li><a href="portfolio-2-columns-hover-style-3.html">2 COLUMNS STYLE 03</a>
                    </li>
                  </ul>
                </li>
                <li><a href="#">SINGLE PORTFOLIO</a>
                  <ul>
                    <li><a href="portfolio-single-1.html">PORTFOLIO SINGLE 01</a>
                    </li>
                    <li><a href="portfolio-single-2.html">PORTFOLIO SINGLE 02</a>
                    </li>
                    <li><a href="portfolio-single-3.html">PORTFOLIO SINGLE 03</a>
                    </li>
                    <li><a href="portfolio-single-4.html">PORTFOLIO SINGLE 04</a>
                    </li>
                    <li><a href="portfolio-single-5.html">PORTFOLIO SINGLE 05</a>
                    </li>
                    <li><a href="portfolio-single-6.html">PORTFOLIO SINGLE 06</a>
                    </li>
                    <li><a href="portfolio-single-7.html">PORTFOLIO SINGLE 07</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#">SHOP</a>
              <ul>
                <li><a href="#">SHOP CATEGORY</a>
                  <ul>
                    <li><a href="shop-category-fullwidth.html">CATEGORY FULLWIDTH</a>
                    </li>
                    <li><a href="shop-category-sidebar-left.html">CATEGORY SIDE BAR LEFT</a>
                    </li>
                    <li><a href="shop-category-sidebar-right.html">CATEGORY SIDE BAR RIGHT</a>
                    </li>
                    <li><a href="shop-category-top-slider.html">CATEGORY TOP SLIDER</a>
                    </li>
                  </ul>
                </li>
                <li><a href="#">SINGLE SHOP</a>
                  <ul>
                    <li><a href="shop-single-fullwidth.html">SINGLE FULLWIDTH</a>
                    </li>
                    <li><a href="shop-single-sidebar-left.html">SINGLE SIDE BAR LEFT</a>
                    </li>
                    <li><a href="shop-single-sidebar-right.html">SINGLE SIDE BAR RIGHT</a>
                    </li>
                    <li><a href="shop-single-top-slider.html">SINGLE TOP SLIDER</a>
                    </li>
                    <li><a href="shop-single-variable.html">SINGLE VARIABLE</a>
                    </li>
                  </ul>
                </li>
                <li><a href="#">OTHER PAGE</a>
                  <ul>
                    <li><a href="shop-account.html">MY ACCOUNT</a>
                    </li>
                    <li><a href="shop-cart.html">CART</a>
                    </li>
                    <li><a href="shop-checkout.html">CHECK OUT</a>
                    </li>
                    <li><a href="shop-order-tracking.html">ORDER TRACKING</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
        <div class="search-area">
          <form method="post" class="search-box">
            <input type="search" placeholder="Search..."/>
            <button type="submit"><i class="icon-search-icon"></i></button>
          </form>
        </div>
        <div class="social-area">
          <ul class="social circle gray">
            <li><a href="#"><i class="icon icon-facebook-1"></i></a></li>
            <li><a href="#"><i class="icon icon-pinterest"></i></a></li>
            <li><a href="#"><i class="icon icon-twitter-1"></i></a></li>
            <li><a href="#"><i class="icon icon-linkedin-1"></i></a></li>
          </ul>
        </div>
      </div>
      <!-- Page Navigation-->
     <?php echo $_content; ?>
      <!--Page Footer-->
      <footer id="footer" class="page-footer footer-preset-3">
        <div class="footer-body bgc-gray-darker">
          <div class="container">
            <div class="row">
              <div class="col-md-4 col-xs-12">
                <div class="footer-widget-about"><a href="index.html" class="megatron inline size-2">
                    <div class="logo"><svg viewBox="0 0 100 100"> <g> <path d="M64.264,31.886v56.803l-14.319,8.259l-14.319-8.259v-74.3L14.157,26.771v41.271l7.156,4.128V30.905   l13.467-7.768v8.26l-6.311,3.64V84.56L7,72.178v-49.54L42.781,2v82.553l7.162,4.132l7.163-4.132V27.758L64.264,31.886z    M43.626,26.294l6.317-3.644L71.42,35.038V84.56l21.469-12.382v-49.54L57.106,2v15.546l7.157,4.128v-7.285l21.469,12.382v41.271   l-7.156,4.128V30.905L49.943,14.391l-6.317,3.644V26.294z"/> </g> </svg>
                    </div>
                    <div class="brand">MEGATRON</div></a>
                  <p>Megatron is a Multipurpose HTML 5 Template with which responds to the most demanding customers. It can be a great choice for your Corporate, Ecommerce, Portfolio, Creative Agency etc. This theme can easily satisfy all of your needs.</p>
                  <ul class="social circle">
                    <li><a href="#"><i class="icon icon-facebook-1"></i></a></li>
                    <li><a href="#"><i class="icon icon-twitter-1"></i></a></li>
                    <li><a href="#"><i class="icon icon-flickr"></i></a></li>
                    <li><a href="#"><i class="icon icon-linkedin-1"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-5 col-sm-7 col-xs-12">
                <div class="footer-widget-info">
                  <h4>INFORMATION</h4>
                  <div class="__content font-heading fz-6-ss __2-col">
                    <div><span><a href="#">HOME</a></span><span><a href="#">BLOG</a></span><span><a href="#">CONTACT</a></span><span><a href="#">ABOUT US</a></span><span><a href="#">PROJECTS</a></span></div>
                    <div><span><a href="#">CONSUTING</a></span><span><a href="#">TAX SERVICE</a></span><span><a href="#">SPECIALTY SERVICES</a></span><span><a href="#">TRANSACTION ADVISORY</a></span></div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-5 col-xs-12">
                <div class="footer-widget-contact">
                  <h4>OUR OFFICE</h4>
                  <div class="__content font-heading fz-6-ss">
                    <div class="__address"><i class="icon icon-location"></i><span>14 Tottenham Road, London, England.</span></div>
                    <div class="__phone"><i class="icon icon-phone-1"></i><span>(123) 45678910</span></div>
                    <div class="__email"><i class="icon icon-paper-plane"></i><span>info@osthemes.com</span></div>
                    <div class="__phone-2"><i class="icon icon-mobile-1"></i><span>(123) 45678910</span></div>
                    <div class="__time"><i class="icon icon-clock-1"></i><span>Mon - Sat: 9:00 - 18:00</span></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-foot-1 bgc-gray-darkest">
          <div class="container text-center">
            <p class="font-heading fz-6-s">MEGATRON &copy; 2015 OSTHEMES - ENVATO PTY LTD</p>
          </div>
        </div>
      </footer>
      <!--End Page Footer-->
    </div>
    <!--End Page content-->
    <!--Javascript Library-->
    <button id="back-to-top-btn"><i class="icon-up-open-big"></i></button>
    <script src="<?php echo base_url(); ?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/waypoints/lib/shortcuts/sticky.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/smoothscroll/SmoothScroll.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/wow/dist/wow.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/parallax.js/parallax.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/vendors/jquery-countTo/jquery.countTo.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/vendors/slick-carousel/slick/slick.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/vendors/isotope/dist/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/vendors/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/vendors/jquery-modal/jquery.modal.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/flexslider/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/web/js/main.js"></script>
    <!-- Google analytics-->
    <script type="text/javascript">(function(b,o,i,l,e,r){b.GoogleAsnalyticsObject=l;b[l]||(b[l]=function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;e=o.createElement(i);r=o.getElementsByTagName(i)[0];e.src='//www.google-analytics.com/analytics.js';r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));ga('create','UA-57387972-3');ga('send','pageview');</script>
    <!--End Javascript Library-->

    <script type="text/javascript">
        $(window).load(function(){
        $('.flexslider').flexslider({
          animation: "fade",
          controlNav: true,
          start: function(slider){
            $('body').removeClass('loading');
          }
        });
      });
    </script>
  </body>
</html>