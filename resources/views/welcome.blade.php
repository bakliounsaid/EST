<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <!-- Site Title-->
    <title>{{__('EST')}}</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="{{ asset('assets/images/favicon.ico')}}" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Kanit:300,400,500,500i,600,900%7CRoboto:400,900">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fonts.css') }}">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <div class="preloader">
      <div class="preloader-body">
        <div class="preloader-item"></div>
      </div>
    </div>
    <!-- Page-->
    <div class="page"><a class="d-none d-xl-block" href="https://www.templatemonster.com/website-templates/allstar-multi-sports-website-template-63853.html" target="blank"><img class="d-block w-100" src= "{{asset('images/player.jpg')}}" alt=""></a>
      <!-- Page Header-->
      <header class="section page-header rd-navbar-dark">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="166px" data-xl-stick-up-offset="166px" data-xxl-stick-up-offset="166px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-panel">
              <!-- RD Navbar Toggle-->
              <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-main"><span></span></button>
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel-inner container">
                <div class="rd-navbar-collapse rd-navbar-panel-item rd-navbar-panel-item-left">
                  <!-- Owl Carousel-->
                  <div class="owl-carousel-navbar owl-carousel-inline-outer">
                    <div class="owl-inline-nav">
                      <button class="owl-arrow owl-arrow-prev"></button>
                      <button class="owl-arrow owl-arrow-next"></button>
                    </div>
                    <div class="owl-carousel-inline-wrap">
                      <div class="owl-carousel owl-carousel-inline" data-items="1" data-dots="false" data-nav="true" data-autoplay="true" data-autoplay-speed="3200" data-stage-padding="0" data-loop="true" data-margin="10" data-mouse-drag="false" data-touch-drag="false" data-nav-custom=".owl-carousel-navbar">
                        <!-- Post Inline-->
                        <article class="post-inline">
                          <time class="post-inline-time" datetime="2020">April 15, 2020</time>
                          <p class="post-inline-title">Est contre Dream Team</p>
                        </article>
                        <!-- Post Inline-->
                        <article class="post-inline">
                          <time class="post-inline-time" datetime="2020">April 15, 2020</time>
                          <p class="post-inline-title">Est vs Real Madrid</p>
                        </article>
                        <!-- Post Inline-->
                        <article class="post-inline">
                          <time class="post-inline-time" datetime="2020">April 15, 2020</time>
                          <p class="post-inline-title">Est vs Barcelona</p>
                        </article>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="rd-navbar-panel-item rd-navbar-panel-item-right">
                  <ul class="list-inline list-inline-bordered">
                    <li>
                      <!-- Select 2-->
                      <select class="select select-inline" data-placeholder="Select an option" data-dropdown-class="select-inline-dropdown">
                        <option value="en" selected="">{{__('fr')}}</option>
                        <option value="fr">{{__('en')}}</option>
                        <option value="es">{{ __('ar') }}</option>
                      </select>
                    </li>
                    <li><a class="link link-icon link-icon-left link-classic" href="{{ route('admin.login')}}"><span class="icon fl-bigmug-line-login12"></span><span class="link-icon-text">{{ __('Votre Compte') }}</span></a></li>
                  </ul>
                </div>
                <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
              </div>
            </div>
            <div class="rd-navbar-main">
              <div class="rd-navbar-main-top">
                <div class="rd-navbar-main-container container">
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand"><a class="brand" href="./"><img class="brand-logo " src="{{ asset('images/logo.jpg')}}" alt="" width="95" height="126"/></a>
                  </div>
                  <!-- RD Navbar List-->
                  <ul class="rd-navbar-list">
                    <li class="rd-navbar-list-item"><a class="rd-navbar-list-link" href="#"><img src="{{ asset('images/team.jpg') }}" alt="" width="75" height="42"/></a></li>
                    <li class="rd-navbar-list-item"><a class="rd-navbar-list-link" href="#"><img src="{{ asset('images/team.jpg') }}" alt="" width="88" height="45"/></a></li>
                    <li class="rd-navbar-list-item"><a class="rd-navbar-list-link" href="#"><img src="{{ asset('images/team.jpg') }}" alt="" width="79" height="52"/></a></li>
                  </ul>
                  <!-- RD Navbar Search-->
                  <div class="rd-navbar-search">
                    <button class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search"><span></span></button>
                    <form class="rd-search" action="#" data-search-live="rd-search-results-live" method="GET">
                        <div class="form-wrap">
                          <label class="form-label" for="rd-navbar-search-form-input">{{ __('Entrez votre requête de recherche ici...') }}</label>
                          <input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off">
                          <div class="rd-search-results-live" id="rd-search-results-live"></div>
                        </div>
                        <button class="rd-search-form-submit fl-budicons-launch-search81" type="submit"></button>
                      </form>
                  </div>
                </div>
              </div>
              <div class="rd-navbar-main-bottom rd-navbar-darker">
                <div class="rd-navbar-main-container container">
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">
                    <li class="rd-nav-item active">
                      <a class="rd-nav-link" href="index.html">{{ __('Accueil') }}</a>
                    </li>
                    <li class="rd-nav-item">
                      <a class="rd-nav-link" href="https://livedemo00.template-help.com/wt_63853_v4/soccer/index.html">{{ __('Aperçu du jeu') }}</a>
                    </li>
                    <li class="rd-nav-item">
                      <a class="rd-nav-link" href="https://livedemo00.template-help.com/wt_63853_v4/soccer/index.html">{{ __('Typographie') }}</a>
                    </li>
                    <li class="rd-nav-item">
                      <a class="rd-nav-link" href="https://livedemo00.template-help.com/wt_63853_v4/soccer/index.html">{{ __('Contactez-nous') }}</a>
                    </li>
                  </ul>

                  <div class="rd-navbar-main-element">
                    <ul class="list-inline list-inline-sm">
                      <li><a class="icon icon-xs icon-light fa fa-facebook" href="#"></a></li>
                      <li><a class="icon icon-xs icon-light fa fa-twitter" href="#"></a></li>
                      <li><a class="icon icon-xs icon-light fa fa-google-plus" href="#"></a></li>
                      <li><a class="icon icon-xs icon-light fa fa-instagram" href="#"></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- Swiper-->
      <section class="section swiper-container swiper-slider swiper-classic bg-gray-2" data-loop="true" data-autoplay="4000" data-simulate-touch="false" data-slide-effect="fade">
        <div class="swiper-wrapper">
          <div class="swiper-slide text-center" data-slide-bg="{{ asset('images/team2.jpg') }}">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-xl-6">
                  <div class="swiper-slide-caption">
                    <h1 data-caption-animate="fadeInUp" data-caption-delay="100">{{ __('Nous jouons au football') }}</h1>
                    <h4 data-caption-animate="fadeInUp" data-caption-delay="200">{{ __('comme personne d\'autre aux États-Unis') }}</h4>
                    <a class="button button-primary" data-caption-animate="fadeInUp" data-caption-delay="300" href="about-us.html">{{ __('Lire la suite') }}</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide" data-slide-bg="{{ asset('images/team1.jpg') }}">
            <div class="container">
              <div class="row justify-content-end">
                <div class="col-xl-5">
                  <div class="swiper-slide-caption">
                    <h1 data-caption-animate="fadeInUp" data-caption-delay="100">{{ __('Nous sommes des pros') }}</h1>
                    <h4 data-caption-animate="fadeInUp" data-caption-delay="200">{{ __('dans tout ce qui concerne le football') }}</h4>
                    <a class="button button-primary" data-caption-animate="fadeInUp" data-caption-delay="300" href="about-us.html">{{ __('Lire la suite') }}</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide" data-slide-bg="{{ asset('images/team1.jpg') }}">
            <div class="container">
              <div class="row">
                <div class="col-xl-5">
                  <div class="swiper-slide-caption">
                    <h1 data-caption-animate="fadeInUp" data-caption-delay="100">{{ __('Meilleur site web') }}</h1>
                    <h4 data-caption-animate="fadeInUp" data-caption-delay="200">{{ __('pour les nouvelles du football, les mises à jour, et les résultats des matchs') }}</h4>
                    <a class="button button-primary" data-caption-animate="fadeInUp" data-caption-delay="300" href="about-us.html">{{ __('Lire la suite') }}</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-button swiper-button-prev"></div>
        <div class="swiper-button swiper-button-next"></div>
        <div class="swiper-pagination"></div>
      </section>

      <!-- Latest News-->
      <section class="section section-md bg-gray-100">
        <div class="container">
          <div class="row row-50">
            <div class="col-lg-8">
              <div class="main-component">
                <!-- Heading Component-->
                <article class="heading-component">
                  <div class="heading-component-inner">
                    <h5 class="heading-component-title">{{ __('Nouvelles populaires') }}</h5>
                    <a class="button button-xs button-gray-outline" href="#">{{ __('Toutes les nouvelles') }}</a>
                  </div>
                </article>
                <div class="row row-30">
                  <div class="col-md-6">
                    <!-- Post Future-->
                    <article class="post-future">
                        <a class="post-future-figure" href="#">
                          <img src="{{ asset('images/player.jpg') }}" alt="" width="368" height="287"/>
                        </a>
                        <div class="post-future-main">
                          <h4 class="post-future-title">
                            <a href="#">{{ __('Sadio Mané fait toujours la différence, admet Sam Wilson') }}</a>
                          </h4>
                          <div class="post-future-meta">
                            <!-- Badge -->
                            <div class="badge badge-secondary">{{ __('L\'Équipe') }}</div>
                            <div class="post-future-time">
                              <span class="icon mdi mdi-clock"></span>
                              <time datetime="2020">{{ __('15 avril 2020') }}</time>
                            </div>
                          </div>
                          <hr/>
                          <div class="post-future-text">
                            <p>{{ __('Liverpool serait ravie d’accueillir Philippe Coutinho de nouveau, mais Sadio Mané porte...') }}</p>
                          </div>
                          <div class="post-future-footer group-flex group-flex-xs">
                            <a class="button button-gray-outline" href="#">{{ __('Lire la suite') }}</a>
                            <div class="post-future-share">
                              <div class="inline-toggle-parent">
                                <div class="inline-toggle icon material-icons-share"></div>
                                <div class="inline-toggle-element">
                                  <ul class="list-inline">
                                    <li>{{ __('Partager') }}</li>
                                    <li><a class="icon fa-facebook" href="#"></a></li>
                                    <li><a class="icon fa-twitter" href="#"></a></li>
                                    <li><a class="icon fa-google-plus" href="#"></a></li>
                                    <li><a class="icon fa-instagram" href="#"></a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </article>

                  </div>
                  <div class="col-md-6">
                    <!-- Post Future-->
                    <article class="post-future">
                        <a class="post-future-figure" href="#">
                          <img src="{{ asset('images/player.jpg') }}" alt="" width="368" height="287"/>
                        </a>
                        <div class="post-future-main">
                          <h4 class="post-future-title">
                            <a href="#">{{ __('Début prometteur de Robertson à la Coupe d’Europe 2020') }}</a>
                          </h4>
                          <div class="post-future-meta">
                            <!-- Badge -->
                            <div class="badge badge-secondary">{{ __('L\'Équipe') }}</div>
                            <div class="post-future-time">
                              <span class="icon mdi mdi-clock"></span>
                              <time datetime="2020">{{ __('15 avril 2020') }}</time>
                            </div>
                          </div>
                          <hr/>
                          <div class="post-future-text">
                            <p>{{ __('Robertson, lors de sa première apparition à Anfield en tant que joueur de Liverpool, s\'est montré assuré en tant qu’arrière gauche...') }}</p>
                          </div>
                          <div class="post-future-footer group-flex group-flex-xs">
                            <a class="button button-gray-outline" href="#">{{ __('Lire la suite') }}</a>
                            <div class="post-future-share">
                              <div class="inline-toggle-parent">
                                <div class="inline-toggle icon material-icons-share"></div>
                                <div class="inline-toggle-element">
                                  <ul class="list-inline">
                                    <li>{{ __('Partager') }}</li>
                                    <li><a class="icon fa-facebook" href="#"></a></li>
                                    <li><a class="icon fa-twitter" href="#"></a></li>
                                    <li><a class="icon fa-google-plus" href="#"></a></li>
                                    <li><a class="icon fa-instagram" href="#"></a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </article>

                  </div>
                  <div class="col-md-6">
                    <!-- Post Future-->
                    <article class="post-future">
                        <a class="post-future-figure" href="#">
                          <img src="{{ asset('images/player.jpg') }}" alt="" width="368" height="287"/>
                        </a>
                        <div class="post-future-main">
                          <h4 class="post-future-title">
                            <a href="#">{{ __('Pochettino et le « fils du coach » Rose éloignés – rapports') }}</a>
                          </h4>
                          <div class="post-future-meta">
                            <!-- Badge -->
                            <div class="badge badge-secondary">{{ __('L\'Équipe') }}</div>
                            <div class="post-future-time">
                              <span class="icon mdi mdi-clock"></span>
                              <time datetime="2020">{{ __('15 avril 2020') }}</time>
                            </div>
                          </div>
                          <hr/>
                          <div class="post-future-text">
                            <p>{{ __('Danny Rose et Mauricio Pochettino étaient autrefois si proches qu’il était surnommé « le fils du coach »...') }}</p>
                          </div>
                          <div class="post-future-footer group-flex group-flex-xs">
                            <a class="button button-gray-outline" href="#">{{ __('Lire la suite') }}</a>
                            <div class="post-future-share">
                              <div class="inline-toggle-parent">
                                <div class="inline-toggle icon material-icons-share"></div>
                                <div class="inline-toggle-element">
                                  <ul class="list-inline">
                                    <li>{{ __('Partager') }}</li>
                                    <li><a class="icon fa-facebook" href="#"></a></li>
                                    <li><a class="icon fa-twitter" href="#"></a></li>
                                    <li><a class="icon fa-google-plus" href="#"></a></li>
                                    <li><a class="icon fa-instagram" href="#"></a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </article>

                  </div>
                  <div class="col-md-6">
                    <!-- Post Future-->
                    <article class="post-future">
                        <a class="post-future-figure" href="#">
                          <img src="{{ asset('images/player.jpg') }}" alt="" width="368" height="287"/>
                        </a>
                        <div class="post-future-main">
                          <h4 class="post-future-title">
                            <a href="#">{{ __('Le camp de Coutinho : Tout est de la faute du Barça et nous pouvons le prouver') }}</a>
                          </h4>
                          <div class="post-future-meta">
                            <!-- Badge -->
                            <div class="badge badge-secondary">{{ __('L\'Équipe') }}</div>
                            <div class="post-future-time">
                              <span class="icon mdi mdi-clock"></span>
                              <time datetime="2020">{{ __('15 avril 2020') }}</time>
                            </div>
                          </div>
                          <hr/>
                          <div class="post-future-text">
                            <p>{{ __('Philippe Coutinho cherche apparemment à organiser des discussions pour éclaircir la situation avec Liverpool après...') }}</p>
                          </div>
                          <div class="post-future-footer group-flex group-flex-xs">
                            <a class="button button-gray-outline" href="#">{{ __('Lire la suite') }}</a>
                            <div class="post-future-share">
                              <div class="inline-toggle-parent">
                                <div class="inline-toggle icon material-icons-share"></div>
                                <div class="inline-toggle-element">
                                  <ul class="list-inline">
                                    <li>{{ __('Partager') }}</li>
                                    <li><a class="icon fa-facebook" href="#"></a></li>
                                    <li><a class="icon fa-twitter" href="#"></a></li>
                                    <li><a class="icon fa-google-plus" href="#"></a></li>
                                    <li><a class="icon fa-instagram" href="#"></a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </article>

                  </div>
                  <div class="col-md-12">
                    <!-- Post Gloria-->
                    <article class="post-gloria">
                        <img src="{{ asset('images/coach.jpg') }}" alt="" width="769" height="429"/>
                        <div class="post-gloria-main">
                          <h3 class="post-gloria-title">
                            <a href="#">{{ __('Gagnants et perdants de la Premier League : un aperçu rapide') }}</a>
                          </h3>
                          <div class="post-gloria-meta">
                            <!-- Badge -->
                            <div class="badge badge-primary">{{ __('La Ligue') }}</div>
                            <div class="post-gloria-time">
                              <span class="icon mdi mdi-clock"></span>
                              <time datetime="2020">{{ __('15 avril 2020') }}</time>
                            </div>
                          </div>
                          <div class="post-gloria-text">
                            <svg version="1.1" x="0px" y="0px" width="6.888px" height="4.68px" viewBox="0 0 6.888 4.68" enable-background="new 0 0 6.888 4.68" xml:space="preserve">
                              <path d="M1.584,0h1.8L2.112,4.68H0L1.584,0z M5.112,0h1.776L5.64,4.68H3.528L5.112,0z"></path>
                            </svg>
                            <p>{{ __('Pendant la Premier League de cette année, nous sommes ravis d’annoncer qu’il y a de nouveaux joueurs qui...') }}</p>
                          </div>
                          <a class="button" href="#">{{ __('Lire la suite') }}</a>
                        </div>
                      </article>

                  </div>
                  <div class="col-md-12">
                    <!-- Post Future-->
                    <article class="post-future post-future-horizontal">
                        <a class="post-future-figure" href="#"><img src="{{ asset('images/team.jpg') }}" alt="" width="370" height="325"/></a>
                        <div class="post-future-main">
                          <h4 class="post-future-title">
                            <a href="#">{{ __('Zidane : « Nous n’allons pas changer notre manière de jouer au Calderón »') }}</a>
                          </h4>
                          <div class="post-future-meta">
                            <!-- Badge -->
                            <div class="badge badge-red">{{ __('chaud') }}<span class="icon mdi mdi-fire"></span></div>
                            <div class="post-future-time">
                              <span class="icon mdi mdi-clock"></span>
                              <time datetime="2020">{{ __('15 avril 2020') }}</time>
                            </div>
                          </div>
                          <hr/>
                          <div class="post-future-text">
                            <p>{{ __('Zidane a parlé aux médias au Real Madrid City. L’entraîneur des Blancs a expliqué comment l’équipe se prépare pour le match retour de la Champions...') }}</p>
                          </div>
                        </div>
                      </article>

                  </div>
                  <div class="col-md-12">
                    <!-- Post Future-->
                    <article class="post-future post-future-horizontal">
                        <a class="post-future-figure" href="#"><img src="{{ asset('images/team.jpg') }}" alt="" width="370" height="325"/></a>
                        <div class="post-future-main">
                          <h4 class="post-future-title">
                            <a href="#">{{ __('La NFL traitera en interne l’utilisation de jurons par l’arbitre Pete Morelli') }}</a>
                          </h4>
                          <div class="post-future-meta">
                            <!-- Badge -->
                            <div class="badge badge-primary">{{ __('La Ligue') }}</div>
                            <div class="post-future-time">
                              <span class="icon mdi mdi-clock"></span>
                              <time datetime="2020">{{ __('15 avril 2020') }}</time>
                            </div>
                          </div>
                          <hr/>
                          <div class="post-future-text">
                            <p>{{ __('La NFL traitera en interne la récente bourde au micro de l’arbitre Pete Morelli, a déclaré un porte-parole de la ligue, mais il semble que Morelli...') }}</p>
                          </div>
                        </div>
                      </article>

                  </div>
                  <div class="col-md-12">
                    <!-- Swiper-->
                    <div class="swiper-container swiper-slider post-slider" data-loop="false" data-autoplay="false" data-simulate-touch="false">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <div class="swiper-slide-caption">
                                                <!-- Post Alice-->
                                                <article class="post-alice">
                                                    <img src="{{ asset('images/coach.jpg') }}" alt="" width="769" height="397"/>
                                                    <div class="post-alice-main">
                                                      <!-- Badge -->
                                                      <div class="badge badge-secondary">{{ __('L’équipe') }}</div>
                                                      <h3 class="post-alice-title">
                                                        <a href="#">{{ __('Lewis nommé entraîneur principal des Sevens AIG MCAA') }}</a>
                                                      </h3>
                                                      <div class="divider"></div>
                                                      <div class="post-alice-time">
                                                        <span class="icon mdi mdi-clock"></span>
                                                        <time datetime="2020">{{ __('15 avril 2020') }}</time>
                                                      </div>
                                                    </div>
                                                  </article>

                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="swiper-slide-caption">
                                                <!-- Post Alice-->
                                                <article class="post-alice">
                                                    <img src="{{ asset('images/coach.jpg') }}" alt="" width="769" height="397"/>
                                                    <div class="post-alice-main">
                                                      <!-- Badge -->
                                                      <div class="badge badge-primary">{{ __('La Ligue') }}</div>
                                                      <h3 class="post-alice-title">
                                                        <a href="#">{{ __('Rumeurs sur le championnat du monde de football 2020') }}</a>
                                                      </h3>
                                                      <div class="divider"></div>
                                                      <div class="post-alice-time">
                                                        <span class="icon mdi mdi-clock"></span>
                                                        <time datetime="2020">{{ __('15 avril 2020') }}</time>
                                                      </div>
                                                    </div>
                                                  </article>

                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="swiper-slide-caption">
                                                <!-- Post Alice-->
                                                <article class="post-alice">
                                                    <img src="{{ asset('images/coach.jpg') }}" alt="" width="769" height="397"/>
                                                    <div class="post-alice-main">
                                                      <!-- Post Video Button -->
                                                      <a class="post-video-button" href="#modal1" data-toggle="modal">
                                                        <span class="icon material-icons-play_arrow"></span>
                                                      </a>
                                                      <h3 class="post-alice-title">
                                                        <a href="#">{{ __('Finale de la Ligue Europa 2020') }}</a>
                                                      </h3>
                                                      <div class="divider"></div>
                                                      <div class="post-alice-time">
                                                        <span class="icon mdi mdi-clock"></span>
                                                        <time datetime="2020">{{ __('15 avril 2020') }}</time>
                                                      </div>
                                                    </div>
                                                  </article>

                          </div>
                        </div>
                      </div>
                      <!-- Swiper Pagination-->
                      <div class="swiper-pagination"></div>
                      <!-- Swiper Navigation-->
                      <div class="swiper-button-prev"></div>
                      <div class="swiper-button-next"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <!-- Post Future-->
                    <article class="post-future post-future-horizontal">
                        <a class="post-future-figure" href="#">
                          <img src="{{ asset('images/player.jpg') }}" alt="" width="370" height="325"/>
                        </a>
                        <div class="post-future-main">
                          <h4 class="post-future-title">
                            <a href="#">{{ __('Zidane : « Nous n’allons pas changer notre manière de jouer au Calderón »') }}</a>
                          </h4>
                          <div class="post-future-meta">
                            <!-- Badge -->
                            <div class="badge badge-red">
                              {{ __('Hot') }}<span class="icon mdi mdi-fire"></span>
                            </div>
                            <div class="post-future-time">
                              <span class="icon mdi mdi-clock"></span>
                              <time datetime="2020">{{ __('15 avril 2020') }}</time>
                            </div>
                          </div>
                          <hr/>
                          <div class="post-future-text">
                            <p>{{ __('Zidane s’est exprimé auprès des médias au Real Madrid City. L’entraîneur des Merengues a expliqué comment l’équipe aborde le match retour de la Ligue des Champions...') }}</p>
                          </div>
                        </div>
                      </article>
                  </div>
                </div>
              </div>
              <div class="main-component">
                <!-- Heading Component-->
                <article class="heading-component">
                    <div class="heading-component-inner">
                      <h5 class="heading-component-title">{{ __('Match à venir') }}</h5>
                      <a class="button button-xs button-gray-outline" href="#">{{ __('Calendrier') }}</a>
                    </div>
                  </article>

                  <article class="game-result">
                    <div class="game-info game-info-creative">
                      <p class="game-info-subtitle">{{ __('Stade Real -') }} <time datetime="08:30">08:30 PM</time></p>
                      <h3 class="game-info-title">{{ __('Demi-finale de la Ligue des champions 2020') }}</h3>
                      <div class="game-info-main">
                        <div class="game-info-team game-info-team-first">
                          <figure><img src="{{ asset('images/logo.jpg') }}" alt="" width="75" height="99"/></figure>
                          <div class="game-result-team-name">{{ __('Est') }}</div>
                          <div class="game-result-team-country">{{ __('Italie') }}</div>
                        </div>
                        <div class="game-info-middle game-info-middle-vertical">
                          <time class="time-big" datetime="2020-04-17"><span class="heading-3">{{ __('Ven 19') }}</span> {{ __('Mai 2020') }}</time>
                          <div class="game-result-divider-wrap"><span class="game-info-team-divider">{{ __('VS') }}</span></div>
                          <div class="group-sm">
                            <div class="button button-sm button-share-outline">{{ __('Partager') }}
                              <ul class="game-info-share">
                                <li class="game-info-share-item"><a class="icon fa fa-facebook" href="#"></a></li>
                                <li class="game-info-share-item"><a class="icon fa fa-twitter" href="#"></a></li>
                                <li class="game-info-share-item"><a class="icon fa fa-google-plus" href="#"></a></li>
                                <li class="game-info-share-item"><a class="icon fa fa-instagram" href="#"></a></li>
                              </ul>
                            </div><a class="button button-sm button-primary" href="#">{{ __('Acheter des billets') }}</a>
                          </div>
                        </div>
                        <div class="game-info-team game-info-team-second">
                          <figure><img src="{{ asset('images/logo.jpg') }}" alt="" width="91" height="91"/></figure>
                          <div class="game-result-team-name">{{ __('Dream Team') }}</div>
                          <div class="game-result-team-country">{{ __('Espagne') }}</div>
                        </div>
                      </div>
                    </div>
                    <div class="game-info-countdown">
                      <div class="countdown countdown-bordered" data-type="until" data-time="31 Dec 2020 16:00" data-format="dhms" data-style="short"></div>
                    </div>
                  </article>

              </div>
            </div>
            <!-- Aside Block-->
            <div class="col-lg-4">
              <aside class="aside-components">
                <div class="aside-component">
                  <div class="owl-carousel-outer-navigation-1">
                    <!-- Heading Component-->
                    <article class="heading-component">
                        <div class="heading-component-inner">
                          <h5 class="heading-component-title">{{ __('Derniers résultats') }}</h5>
                          <div class="owl-carousel-arrows-outline">
                            <div class="owl-nav">
                              <button class="owl-arrow owl-arrow-prev"></button>
                              <button class="owl-arrow owl-arrow-next"></button>
                            </div>
                          </div>
                        </div>
                      </article>

                    <!-- Owl Carousel-->
                    <div class="owl-carousel owl-spacing-1" data-items="1" data-dots="false" data-nav="true" data-autoplay="true" data-autoplay-speed="4000" data-stage-padding="0" data-loop="true" data-margin="30" data-mouse-drag="false" data-animation-in="fadeIn" data-animation-out="fadeOut" data-nav-custom=".owl-carousel-outer-navigation-1">
                      <!-- Game Result Creative-->
                      <article class="game-result game-result-creative">
                        <div class="game-result-main-vertical">
                          <div class="game-result-team game-result-team-horizontal game-result-team-first">
                            <figure class="game-result-team-figure"><img src="{{ asset('images/logo.jpg') }}" alt="" width="31" height="41"/></figure>
                            <div class="game-result-team-title">
                              <div class="game-result-team-name">{{ __('Est') }}</div>
                              <div class="game-result-team-country">{{ __('Los Angeles') }}</div>
                            </div>
                            <div class="game-result-score game-result-score-big game-result-team-win">2<span class="game-result-team-label game-result-team-label-right">{{ __('Victoire') }}</span></div>
                          </div>
                          <span class="game-result-team-divider">VS</span>
                          <div class="game-result-team game-result-team-horizontal game-result-team-second">
                            <figure class="game-result-team-figure"><img src="{{ asset('images/adv.jpg') }}" alt="" width="40" height="32"/></figure>
                            <div class="game-result-team-title">
                              <div class="game-result-team-name">{{ __('Real Madrid') }}</div>
                              <div class="game-result-team-country">{{ __('Espagne') }}</div>
                            </div>
                            <div class="game-result-score game-result-score-big">1</div>
                          </div>
                        </div>
                        <div class="game-result-footer">
                          <ul class="game-result-details">
                            <li>{{ __('Domicile') }}</li>
                            <li>{{ __('Stade des New Yorkers') }}</li>
                            <li><time datetime="2020-04-14">{{ __('14 avril 2020') }}</time></li>
                          </ul>
                        </div>
                      </article>

                      <!-- Game Result Creative-->
                      <article class="game-result game-result-creative">
                        <div class="game-result-main-vertical">
                          <div class="game-result-team game-result-team-horizontal game-result-team-first">
                            <figure class="game-result-team-figure"><img src="{{ asset('images/adv.jpg') }}" alt="" width="26" height="34"/></figure>
                            <div class="game-result-team-title">
                              <div class="game-result-team-name">{{ __('Bavaria FC') }}</div>
                              <div class="game-result-team-country">{{ __('Allemagne') }}</div>
                            </div>
                            <div class="game-result-score game-result-score-big">2</div>
                          </div>
                          <span class="game-result-team-divider">VS</span>
                          <div class="game-result-team game-result-team-horizontal game-result-team-second">
                            <figure class="game-result-team-figure"><img src="{{ asset('images/adv.jpg') }}" alt="" width="33" height="30"/></figure>
                            <div class="game-result-team-title">
                              <div class="game-result-team-name">{{ __('Atletico') }}</div>
                              <div class="game-result-team-country">{{ __('USA') }}</div>
                            </div>
                            <div class="game-result-score game-result-score-big game-result-team-win">3<span class="game-result-team-label game-result-team-label-right">{{ __('Victoire') }}</span></div>
                          </div>
                        </div>
                        <div class="game-result-footer">
                          <ul class="game-result-details">
                            <li>{{ __('Extérieur') }}</li>
                            <li>{{ __('Stade Bavaria') }}</li>
                            <li><time datetime="2020-04-14">{{ __('14 avril 2020') }}</time></li>
                          </ul>
                        </div>
                      </article>

                    </div>
                  </div>
                </div>
                <div class="aside-component">
                  <!-- Heading Component-->
                  <article class="heading-component">
                    <div class="heading-component-inner">
                      <h5 class="heading-component-title">{{ __('À la une') }}</h5>
                      <a class="button button-xs button-gray-outline" href="#">{{ __('Toutes les actualités') }}</a>
                    </div>
                  </article>
                  <!-- List Post Classic-->
                  <div class="list-post-classic">
                    <!-- Post Classic-->
                    <article class="post-classic">
                      <div class="post-classic-aside">
                        <a class="post-classic-figure" href="#">
                          <img src="{{ asset('images/adv.jpg') }}" alt="" width="94" height="94"/>
                        </a>
                      </div>
                      <div class="post-classic-main">
                        <p class="post-classic-title"><a href="#">{{ __('Raheem Sterling renverse la situation pour Manchester') }}</a></p>
                        <div class="post-classic-time">
                          <span class="icon mdi mdi-clock"></span>
                          <time datetime="2020">{{ __('15 avril 2020') }}</time>
                        </div>
                      </div>
                    </article>
                    <!-- Post Classic-->
                    <article class="post-classic">
                      <div class="post-classic-aside">
                        <a class="post-classic-figure" href="#">
                          <img src="{{ asset('images/adv.jpg') }}" alt="" width="94" height="94"/>
                        </a>
                      </div>
                      <div class="post-classic-main">
                        <p class="post-classic-title"><a href="#">{{ __('Première en 90 secondes : La crise de Chelsea est terminée !') }}</a></p>
                        <div class="post-classic-time">
                          <span class="icon mdi mdi-clock"></span>
                          <time datetime="2020">{{ __('15 avril 2020') }}</time>
                        </div>
                      </div>
                    </article>
                    <!-- Post Classic-->
                    <article class="post-classic">
                      <div class="post-classic-aside">
                        <a class="post-classic-figure" href="#">
                          <img src="{{ asset('images/adv.jpg') }}" alt="" width="94" height="94"/>
                        </a>
                      </div>
                      <div class="post-classic-main">
                        <p class="post-classic-title"><a href="#">{{ __('Des ondes positives de retour à Schalke en difficulté') }}</a></p>
                        <div class="post-classic-time">
                          <span class="icon mdi mdi-clock"></span>
                          <time datetime="2020">{{ __('15 avril 2020') }}</time>
                        </div>
                      </div>
                    </article>
                    <!-- Post Classic-->
                    <article class="post-classic">
                      <div class="post-classic-aside">
                        <a class="post-classic-figure" href="#">
                          <img src="{{ asset('images/adv.jpg') }}" alt="" width="94" height="94"/>
                        </a>
                      </div>
                      <div class="post-classic-main">
                        <p class="post-classic-title"><a href="#">{{ __('Liverpool a désespérément besoin de joueurs de réserve') }}</a></p>
                        <div class="post-classic-time">
                          <span class="icon mdi mdi-clock"></span>
                          <time datetime="2020">{{ __('15 avril 2020') }}</time>
                        </div>
                      </div>
                    </article>
                  </div>

                </div>
                <div class="aside-component">
                    <!-- Heading Component-->
                    <article class="heading-component">
                      <div class="heading-component-inner">
                        <h5 class="heading-component-title">{{ __('Classements') }}</h5>
                        <a class="button button-xs button-gray-outline" href="#">{{ __('Classements complets') }}</a>
                      </div>
                    </article>
                    <!-- Table team-->
                    <div class="table-custom-responsive">
                      <table class="table-custom table-standings table-classic">
                        <thead>
                          <tr>
                            <th colspan="2">{{ __('Position de l’équipe') }}</th>
                            <th>{{ __('V') }}</th>
                            <th>{{ __('D') }}</th>
                            <th>{{ __('PTS') }}</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><span>1</span></td>
                            <td class="team-inline">
                              <div class="team-figure"><img src="{{ asset('images/logo.jpg') }}" alt="" width="31" height="41"/></div>
                              <div class="team-title">
                                <div class="team-name">{{ __('Est') }}</div>
                                <div class="team-country">{{ __('USA') }}</div>
                              </div>
                            </td>
                            <td>153</td>
                            <td>30</td>
                            <td>186</td>
                          </tr>
                          <tr>
                            <td><span>2</span></td>
                            <td class="team-inline">
                              <div class="team-figure"><img src="{{ asset('images/adv.jpg') }}" alt="" width="34" height="34"/></div>
                              <div class="team-title">
                                <div class="team-name">{{ __('Dream team') }}</div>
                                <div class="team-country">{{ __('Spain') }}</div>
                              </div>
                            </td>
                            <td>120</td>
                            <td>30</td>
                            <td>186</td>
                          </tr>
                          <tr>
                            <td><span>3</span></td>
                            <td class="team-inline">
                              <div class="team-figure"><img src="{{ asset('images/adv.jpg') }}" alt="" width="28" height="37"/></div>
                              <div class="team-title">
                                <div class="team-name">{{ __('Real Madrid') }}</div>
                                <div class="team-country">{{ __('Spain') }}</div>
                              </div>
                            </td>
                            <td>100</td>
                            <td>30</td>
                            <td>186</td>
                          </tr>
                          <tr>
                            <td><span>4</span></td>
                            <td class="team-inline">
                              <div class="team-figure"><img src="{{ asset('images/adv.jpg') }}" alt="" width="35" height="39"/></div>
                              <div class="team-title">
                                <div class="team-name">{{ __('Celta Vigo') }}</div>
                                <div class="team-country">{{ __('Italy') }}</div>
                              </div>
                            </td>
                            <td>98</td>
                            <td>30</td>
                            <td>186</td>
                          </tr>
                          <tr>
                            <td><span>5</span></td>
                            <td class="team-inline">
                              <div class="team-figure"><img src="{{ asset('images/adv.jpg') }}" alt="" width="30" height="35"/></div>
                              <div class="team-title">
                                <div class="team-name">{{ __('Barcelona') }}</div>
                                <div class="team-country">{{ __('Spain') }}</div>
                              </div>
                            </td>
                            <td>98</td>
                            <td>30</td>
                            <td>186</td>
                          </tr>
                          <tr>
                            <td><span>6</span></td>
                            <td class="team-inline">
                              <div class="team-figure"><img src="{{ asset('images/adv.jpg') }}" alt="" width="26" height="34"/></div>
                              <div class="team-title">
                                <div class="team-name">{{ __('Bavaria FC') }}</div>
                                <div class="team-country">{{ __('Germany') }}</div>
                              </div>
                            </td>
                            <td>98</td>
                            <td>30</td>
                            <td>186</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>

                <div class="aside-component">
                  <!-- Heading Component-->
                  <article class="heading-component">
                    <div class="heading-component-inner">
                      <h5 class="heading-component-title">{{ __('Suivez-nous') }}</h5>
                    </div>
                  </article>

                  <!-- Buttons Media-->
                  <div class="group-sm group-flex">
                    <a class="button-media button-media-facebook" href="#">
                      <h4 class="button-media-title">50k</h4>
                      <p class="button-media-action">{{ __('J’aime') }}<span class="icon material-icons-add_circle_outline icon-sm"></span></p>
                      <span class="button-media-icon fa-facebook"></span>
                    </a>
                    <a class="button-media button-media-twitter" href="#">
                      <h4 class="button-media-title">120k</h4>
                      <p class="button-media-action">{{ __('Suivre') }}<span class="icon material-icons-add_circle_outline icon-sm"></span></p>
                      <span class="button-media-icon fa-twitter"></span>
                    </a>
                    <a class="button-media button-media-google" href="#">
                      <h4 class="button-media-title">15k</h4>
                      <p class="button-media-action">{{ __('Suivre') }}<span class="icon material-icons-add_circle_outline icon-sm"></span></p>
                      <span class="button-media-icon fa-google"></span>
                    </a>
                    <a class="button-media button-media-instagram" href="#">
                      <h4 class="button-media-title">85k</h4>
                      <p class="button-media-action">{{ __('Suivre') }}<span class="icon material-icons-add_circle_outline icon-sm"></span></p>
                      <span class="button-media-icon fa-instagram"></span>
                    </a>
                  </div>

                <div class="aside-component">
                  <!-- Heading Component-->
                  <article class="heading-component">
                    <div class="heading-component-inner">
                      <h5 class="heading-component-title">{{ __('Nos récompenses') }}</h5>
                    </div>
                  </article>

                  <!-- Owl Carousel-->
                  <div class="owl-carousel owl-carousel-dots-modern awards-carousel" data-items="1" data-autoplay="true" data-autoplay-speed="4000" data-dots="true" data-nav="false" data-stage-padding="0" data-loop="true" data-margin="0" data-mouse-drag="true">
                    <!-- Awards Item-->
                    <div class="awards-item">
                      <div class="awards-item-main">
                        <h4 class="awards-item-title"><span class="text-accent">{{ __('Champion') }}</span> {{ __('du Monde') }}</h4>
                        <div class="divider"></div>
                        <h5 class="awards-item-time">{{ __('Décembre 2014') }}</h5>
                      </div>
                      <div class="awards-item-aside">
                        <img src="{{ asset('images/player.jpg') }}" alt="" width="67" height="147"/>
                      </div>
                    </div>
                    <!-- Awards Item-->
                    <div class="awards-item">
                      <div class="awards-item-main">
                        <h4 class="awards-item-title"><span class="text-accent">{{ __('Meilleur') }}</span> {{ __('Attaquant') }}</h4>
                        <div class="divider"></div>
                        <h5 class="awards-item-time">{{ __('Juin 2015') }}</h5>
                      </div>
                      <div class="awards-item-aside">
                        <img src="{{ asset('images/player.jpg') }}" alt="" width="68" height="126"/>
                      </div>
                    </div>
                    <!-- Awards Item-->
                    <div class="awards-item">
                      <div class="awards-item-main">
                        <h4 class="awards-item-title"><span class="text-accent">{{ __('Meilleur') }}</span> {{ __('Entraîneur') }}</h4>
                        <div class="divider"></div>
                        <h5 class="awards-item-time">{{ __('Novembre 2016') }}</h5>
                      </div>
                      <div class="awards-item-aside">
                        <img src="{{ asset('images/player.jpg') }}" alt="" width="73" height="135"/>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="aside-component">
                    <!-- Heading Component-->
                    <article class="heading-component">
                      <div class="heading-component-inner">
                        <h5 class="heading-component-title">{{ __('Galerie') }}</h5>
                      </div>
                    </article>
                    <article class="gallery" data-lightgallery="group">
                      <div class="row row-10 row-narrow">
                        <div class="col-6 col-sm-4 col-md-6 col-lg-4">
                          <a class="thumbnail-creative" data-lightgallery="item" href="{{ asset('assets/images/gallery-soccer-1-original.jpg') }}">
                            <img src="{{ asset('images/player.jpg') }}" alt=""/>
                            <div class="thumbnail-creative-overlay"></div>
                          </a>
                        </div>
                        <div class="col-6 col-sm-4 col-md-6 col-lg-4">
                          <a class="thumbnail-creative" data-lightgallery="item" href="{{ asset('assets/images/gallery-soccer-2-original.jpg') }}">
                            <img src="{{ asset('images/player.jpg') }}" alt=""/>
                            <div class="thumbnail-creative-overlay"></div>
                          </a>
                        </div>
                        <div class="col-6 col-sm-4 col-md-6 col-lg-4">
                          <a class="thumbnail-creative" data-lightgallery="item" href="{{ asset('assets/images/gallery-soccer-3-original.jpg') }}">
                            <img src="{{ asset('images/player.jpg') }}" alt=""/>
                            <div class="thumbnail-creative-overlay"></div>
                          </a>
                        </div>
                        <div class="col-6 col-sm-4 col-md-6 col-lg-4">
                          <a class="thumbnail-creative" data-lightgallery="item" href="{{ asset('assets/images/gallery-soccer-4-original.jpg') }}">
                            <img src="{{ asset('images/player.jpg') }}" alt=""/>
                            <div class="thumbnail-creative-overlay"></div>
                          </a>
                        </div>
                        <div class="col-6 col-sm-4 col-md-6 col-lg-4">
                          <a class="thumbnail-creative" data-lightgallery="item" href="{{ asset('assets/images/gallery-soccer-5-original.jpg') }}">
                            <img src="{{ asset('images/player.jpg') }}" alt=""/>
                            <div class="thumbnail-creative-overlay"></div>
                          </a>
                        </div>
                        <div class="col-6 col-sm-4 col-md-6 col-lg-4">
                          <a class="thumbnail-creative" data-lightgallery="item" href="{{ asset('assets/images/gallery-soccer-6-original.jpg') }}">
                            <img src="{{ asset('images/player.jpg') }}" alt=""/>
                            <div class="thumbnail-creative-overlay"></div>
                          </a>
                        </div>
                      </div>
                    </article>
                  </div>

                  <div class="aside-component">
                    <!-- Heading Component-->
                    <article class="heading-component">
                      <div class="heading-component-inner">
                        <h5 class="heading-component-title">{{ __('Vote des fans') }}</h5>
                      </div>
                    </article>
                    <div class="block-voting">
                      <div class="group-md">
                        <!-- Player Voting Item-->
                        <div class="player-voting-item">
                          <div class="player-voting-item-figure">
                            <img src="{{ asset('images/player.jpg') }}" alt="" width="152" height="144"/>
                            <div class="player-number">
                              <p>21</p>
                            </div>
                          </div>
                          <div class="player-voting-item-title">
                            <p>{{ __('Joe Montana') }}</p>
                          </div>
                          <div class="player-voting-item-progress">
                            <!-- Linear progress bar-->
                            <article class="progress-linear progress-bar-modern progress-bar-modern-red">
                              <div class="progress-header">
                                <p>{{ __('Précision des passes') }}</p>
                              </div>
                              <div class="progress-bar-linear-wrap">
                                <div class="progress-bar-linear"></div>
                              </div>
                              <span class="progress-value">95</span>
                            </article>
                            <!-- Linear progress bar-->
                            <article class="progress-linear progress-bar-modern">
                              <div class="progress-header">
                                <p>{{ __('Précision des tirs') }}</p>
                              </div>
                              <div class="progress-bar-linear-wrap">
                                <div class="progress-bar-linear"></div>
                              </div>
                              <span class="progress-value">70</span>
                            </article>
                          </div>
                          <button class="button button-block button-icon button-icon-left button-primary" type="button">
                            <span class="icon material-icons-thumb_up"></span><span>{{ __('854 votes') }}</span>
                          </button>
                        </div>
                        <!-- Player Voting Item-->
                        <div class="player-voting-item">
                          <div class="player-voting-item-figure">
                            <img src="{{ asset('images/player.jpg') }}" alt="" width="152" height="144"/>
                            <div class="player-number">
                              <p>7</p>
                            </div>
                          </div>
                          <div class="player-voting-item-title">
                            <p>{{ __('George Blanda') }}</p>
                          </div>
                          <div class="player-voting-item-progress">
                            <!-- Linear progress bar-->
                            <article class="progress-linear progress-bar-modern progress-bar-modern-red">
                              <div class="progress-header">
                                <p>{{ __('Précision des passes') }}</p>
                              </div>
                              <div class="progress-bar-linear-wrap">
                                <div class="progress-bar-linear"></div>
                              </div>
                              <span class="progress-value">95</span>
                            </article>
                            <!-- Linear progress bar-->
                            <article class="progress-linear progress-bar-modern">
                              <div class="progress-header">
                                <p>{{ __('Précision des tirs') }}</p>
                              </div>
                              <div class="progress-bar-linear-wrap">
                                <div class="progress-bar-linear"></div>
                              </div>
                              <span class="progress-value">70</span>
                            </article>
                          </div>
                          <button class="button button-block button-icon button-icon-left button-primary" type="button">
                            <span class="icon material-icons-thumb_up"></span><span>{{ __('436 votes') }}</span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="aside-component">
                    <div class="owl-carousel-outer-navigation">
                      <!-- Heading Component-->
                      <article class="heading-component">
                        <div class="heading-component-inner">
                          <h5 class="heading-component-title">{{ __('Boutique') }}</h5>
                          <div class="owl-carousel-arrows-outline">
                            <div class="owl-nav">
                              <button class="owl-arrow owl-arrow-prev"></button>
                              <button class="owl-arrow owl-arrow-next"></button>
                            </div>
                          </div>
                        </div>
                      </article>
                      <!-- Owl Carousel-->
                      <div class="owl-carousel owl-spacing-1" data-items="1" data-dots="false" data-nav="true" data-autoplay="true" data-autoplay-speed="4000" data-stage-padding="0" data-loop="false" data-margin="30" data-mouse-drag="false" data-nav-custom=".owl-carousel-outer-navigation">
                        <article class="product">
                          <header class="product-header">
                            <!-- Badge-->
                            <div class="badge badge-red">{{ __('hot') }}<span class="icon material-icons-whatshot"></span></div>
                            <div class="product-figure"><img src="{{ asset('images/product1.jpg') }}" alt=""/></div>
                            <div class="product-buttons">
                              <div class="product-button product-button-share fl-bigmug-line-share27" style="font-size: 22px">
                                <ul class="product-share">
                                  <li class="product-share-item"><span>{{ __('Share') }}</span></li>
                                  <li class="product-share-item"><a class="icon fa fa-facebook" href="#"></a></li>
                                  <li class="product-share-item"><a class="icon fa fa-instagram" href="#"></a></li>
                                  <li class="product-share-item"><a class="icon fa fa-twitter" href="#"></a></li>
                                  <li class="product-share-item"><a class="icon fa fa-google-plus" href="#"></a></li>
                                </ul>
                              </div>
                              <a class="product-button fl-bigmug-line-shopping202" href="#" style="font-size: 26px"></a>
                              <a class="product-button fl-bigmug-line-zoom60" href="{{ asset('images/product1.jpg') }}" data-lightgallery="item" style="font-size: 25px"></a>
                            </div>
                          </header>
                          <footer class="product-content">
                            <h6 class="product-title"><a href="#">{{ __('Nike hoops elite backpack') }}</a></h6>
                            <div class="product-price">
                              <span class="product-price-old">$400</span>
                              <span class="heading-6 product-price-new">$290</span>
                            </div>
                            <ul class="product-rating">
                              <li><span class="material-icons-star"></span></li>
                              <li><span class="material-icons-star"></span></li>
                              <li><span class="material-icons-star"></span></li>
                              <li><span class="material-icons-star"></span></li>
                              <li><span class="material-icons-star_half"></span></li>
                            </ul>
                          </footer>
                        </article>
                        <article class="product">
                          <header class="product-header">
                            <!-- Badge-->
                            <div class="badge badge-shop">{{ __('new') }}</div>
                            <div class="product-figure"><img src="{{ asset('images/product2.jpg') }}" alt=""/></div>
                            <div class="product-buttons">
                              <div class="product-button product-button-share fl-bigmug-line-share27" style="font-size: 22px">
                                <ul class="product-share">
                                  <li class="product-share-item"><span>{{ __('Share') }}</span></li>
                                  <li class="product-share-item"><a class="icon fa fa-facebook" href="#"></a></li>
                                  <li class="product-share-item"><a class="icon fa fa-instagram" href="#"></a></li>
                                  <li class="product-share-item"><a class="icon fa fa-twitter" href="#"></a></li>
                                  <li class="product-share-item"><a class="icon fa fa-google-plus" href="#"></a></li>
                                </ul>
                              </div>
                              <a class="product-button fl-bigmug-line-shopping202" href="#" style="font-size: 26px"></a>
                              <a class="product-button fl-bigmug-line-zoom60" href="{{ asset('images/product2.jpg') }}" data-lightgallery="item" style="font-size: 25px"></a>
                            </div>
                          </header>
                          <footer class="product-content">
                            <h6 class="product-title"><a href="#">{{ __('Nike Air Zoom Pegasus') }}</a></h6>
                            <div class="product-price">
                              <span class="heading-6 product-price-new">$290</span>
                            </div>
                            <ul class="product-rating">
                              <li><span class="material-icons-star"></span></li>
                              <li><span class="material-icons-star"></span></li>
                              <li><span class="material-icons-star"></span></li>
                              <li><span class="material-icons-star"></span></li>
                              <li><span class="material-icons-star_half"></span></li>
                            </ul>
                          </footer>
                        </article>
                        <article class="product">
                          <header class="product-header">
                            <!-- Badge-->
                            <div class="badge badge-red">{{ __('hot') }}<span class="icon material-icons-whatshot"></span></div>
                            <div class="product-figure"><img src="{{ asset('images/product1.jpg') }}" alt=""/></div>
                            <div class="product-buttons">
                              <div class="product-button product-button-share fl-bigmug-line-share27" style="font-size: 22px">
                                <ul class="product-share">
                                  <li class="product-share-item"><span>{{ __('Share') }}</span></li>
                                  <li class="product-share-item"><a class="icon fa fa-facebook" href="#"></a></li>
                                  <li class="product-share-item"><a class="icon fa fa-instagram" href="#"></a></li>
                                  <li class="product-share-item"><a class="icon fa fa-twitter" href="#"></a></li>
                                  <li class="product-share-item"><a class="icon fa fa-google-plus" href="#"></a></li>
                                </ul>
                              </div>
                              <a class="product-button fl-bigmug-line-shopping202" href="#" style="font-size: 26px"></a>
                              <a class="product-button fl-bigmug-line-zoom60" href="{{ asset('images/product1.jpg') }}" data-lightgallery="item" style="font-size: 25px"></a>
                            </div>
                          </header>
                          <footer class="product-content">
                            <h6 class="product-title"><a href="#">{{ __('Nike distressed baseball hat') }}</a></h6>
                            <div class="product-price">
                              <span class="product-price-old">$400</span>
                              <span class="heading-6 product-price-new">$290</span>
                            </div>
                            <ul class="product-rating">
                              <li><span class="material-icons-star"></span></li>
                              <li><span class="material-icons-star"></span></li>
                              <li><span class="material-icons-star"></span></li>
                              <li><span class="material-icons-star"></span></li>
                              <li><span class="material-icons-star_half"></span></li>
                            </ul>
                          </footer>
                        </article>
                      </div>
                    </div>
                  </div>

              </aside>
            </div>
          </div>
        </div>
      </section>
      <!-- Page Footer-->
      <footer class="section footer-classic footer-classic-dark context-dark">
        <div class="footer-classic-main">
          <div class="container">
            <p class="heading-7">{{ __('Abonnez-vous à notre Newsletter') }}</p>
            <!-- RD Mailform-->
            <form class="rd-mailform rd-form rd-inline-form-creative" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
              <div class="form-wrap">
                <div class="form-input-wrap">
                  <input class="form-input" id="footer-form-email" type="email" name="email">
                  <label class="form-label" for="footer-form-email">{{ __('Entrez votre E-mail') }}</label>
                </div>
              </div>
              <div class="form-button">
                <button class="button button-primary-outline" type="submit" aria-label="Envoyer"><span class="icon fl-budicons-launch-right164"></span></button>
              </div>
            </form>
            <div class="row row-50">
              <div class="col-lg-5 text-center text-sm-left">
                <article class="unit unit-sm-horizontal unit-middle justify-content-center justify-content-sm-start footer-classic-info">
                  <div class="unit-left"><a class="brand brand-md" href="./"><img class="brand-logo " src="{{ asset('images/logo.jpg') }}" alt="" width="95" height="126"/></a>
                  </div>
                  <div class="unit-body">
                    <p>{{ __('Le site Est vous offre les dernières nouvelles sur notre équipe ainsi que des mises à jour sur nos matchs et autres événements.') }}</p>
                  </div>
                </article>
                <ul class="list-inline list-inline-bordered list-inline-bordered-lg">
                  <li>
                    <div class="unit unit-horizontal unit-middle">
                      <div class="unit-left">
                        <svg class="svg-color-primary svg-sizing-35" x="0px" y="0px" width="27px" height="27px" viewbox="0 0 27 27" preserveAspectRatio="none">
                          <path d="M2,26c0,0.553,0.447,1,1,1h5c0.553,0,1-0.447,1-1v-8.185c-0.373-0.132-0.711-0.335-1-0.595V19 H6v-1v-1v-1H5v1v2H3v-9H2v1H1V9V8c0-0.552,0.449-1,1-1h1h1h3h0.184c0.078-0.218,0.173-0.426,0.297-0.617C8.397,5.751,9,4.696,9,3.5 C9,1.567,7.434,0,5.5,0S2,1.567,2,3.5C2,4.48,2.406,5.364,3.056,6H3H2C0.895,6,0,6.895,0,8v7c0,1.104,0.895,2,2,2V26z M8,26H6v-6h2 V26z M5,26H3v-6h2V26z M3,3.5C3,2.121,4.121,1,5.5,1S8,2.121,8,3.5S6.879,6,5.5,6S3,4.879,3,3.5 M1,15v-3h1v4 C1.449,16,1,15.552,1,15"></path>
                          <path d="M11.056,6H11h-1C8.895,6,8,6.895,8,8v7c0,1.104,0.895,2,2,2v9c0,0.553,0.447,1,1,1h5 c0.553,0,1-0.447,1-1v-9c1.104,0,2-0.896,2-2V8c0-1.105-0.896-2-2-2h-1h-0.056C16.594,5.364,17,4.48,17,3.5 C17,1.567,15.434,0,13.5,0S10,1.567,10,3.5C10,4.48,10.406,5.364,11.056,6 M10,15v1c-0.551,0-1-0.448-1-1v-3h1V15z M11,20h2v6h-2 V20z M16,26h-2v-6h2V26z M17,16v-1v-3h1v3C18,15.552,17.551,16,17,16 M17,7c0.551,0,1,0.448,1,1v1v1v1h-1v-1h-1v5v4h-2v-1v-1v-1h-1 v1v1v1h-2v-4v-5h-1v1H9v-1V9V8c0-0.552,0.449-1,1-1h1h1h3h1H17z M13.5,1C14.879,1,16,2.121,16,3.5C16,4.879,14.879,6,13.5,6 S11,4.879,11,3.5C11,2.121,12.121,1,13.5,1"></path>
                          <polygon points="15,13 14,13 14,9 13,9 12,9 12,10 13,10 13,13 12,13 12,14 13,14 14,14 15,14 	"></polygon>
                          <polygon points="7,14 7,13 5,13 5,12 6,12 7,12 7,10 7,9 6,9 4,9 4,10 6,10 6,11 5,11 4,11 4,12 4,13 4,14 5,14"></polygon>
                          <polygon points="20,10 22,10 22,11 21,11 21,12 22,12 22,13 20,13 20,14 22,14 23,14 23,13 23,12 23,11 23,10 23,9 22,9 20,9 	"></polygon>
                          <path d="M19.519,6.383C19.643,6.574,19.738,6.782,19.816,7H20h3h1h1c0.551,0,1,0.448,1,1v3h-1v-1h-1v9 h-2v-2v-1h-1v1v2h-2v-1.78c-0.289,0.26-0.627,0.463-1,0.595V26c0,0.553,0.447,1,1,1h5c0.553,0,1-0.447,1-1v-9c1.104,0,2-0.896,2-2 V8c0-1.105-0.896-2-2-2h-1h-0.056C24.594,5.364,25,4.48,25,3.5C25,1.567,23.434,0,21.5,0S18,1.567,18,3.5 c0,0.736,0.229,1.418,0.617,1.981C18.861,5.834,19.166,6.14,19.519,6.383 M19,20h2v6h-2V20z M24,26h-2v-6h2V26z M26,15 c0,0.552-0.449,1-1,1v-4h1V15z M21.5,1C22.879,1,24,2.121,24,3.5C24,4.879,22.879,6,21.5,6C20.121,6,19,4.879,19,3.5 C19,2.121,20.121,1,21.5,1"></path>
                        </svg>
                      </div>
                      <div class="unit-body">
                        <h6>{{ __('Rejoignez notre équipe') }}</h6><a class="link" href="mailto:#">info@demex.solutions</a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="unit unit-horizontal unit-middle">
                      <div class="unit-left">
                        <svg class="svg-color-primary svg-sizing-35" x="0px" y="0px" width="27px" height="27px" viewbox="0 0 27 27" preserveAspectRatio="none">
                          <path d="M1.823,5.1c0.439,0,0.872,0.124,1.237,0.338l0.214,0.167l0.214-0.167c0.365-0.214,0.798-0.338,1.237-0.338 c0.734,0,1.363,0.34,1.773,0.854c0.43,0.519,0.758,1.184,0.943,1.872c0.063,0.207,0.096,0.432,0.096,0.672 c0,0.284-0.038,0.572-0.106,0.85c-0.03,0.132-0.067,0.262-0.115,0.387c-0.05,0.121-0.098,0.246-0.155,0.361 c-0.065,0.146-0.145,0.289-0.233,0.424c-0.109,0.165-0.22,0.325-0.355,0.478c-0.243,0.241-0.494,0.479-0.762,0.719 c-0.568,0.419-1.12,0.855-1.715,1.3l-0.073,0.065l0.073,0.065c0.594,0.446,1.147,0.881,1.715,1.3c0.267,0.24,0.519,0.478,0.762,0.719 c0.135,0.153,0.246,0.313,0.355,0.478c0.088,0.135,0.168,0.278,0.233,0.424c0.057,0.115,0.105,0.236,0.155,0.361 c0.048,0.125,0.085,0.255,0.115,0.387c0.068,0.278,0.106,0.566,0.106,0.85c0,0.24-0.033,0.465-0.096,0.672 c-0.185,0.688-0.513,1.353-0.943,1.872c-0.41,0.514-1.039,0.854-1.773,0.854c-0.734,0-1.363-0.34-1.773-0.854c-0.365-0.214-0.798-0.338-1.237-0.338 c-0.734,0-1.363,0.34-1.773,0.854c-0.43,0.519-0.758,1.184-0.943,1.872c-0.063,0.207-0.096,0.432-0.096,0.672 c0,0.284,0.038,0.572,0.106,0.85c0.03,0.132,0.067,0.262,0.115,0.387c0.05,0.121,0.098,0.246,0.155,0.361 c0.065,0.146,0.145,0.289,0.233,0.424c0.109,0.165,0.22,0.325,0.355,0.478c0.243,0.241,0.494,0.479,0.762,0.719 c0.568,0.419,1.12,0.855,1.715,1.3l0.073,0.065l-0.073,0.065c-0.594,0.446-1.147,0.881-1.715,1.3c-0.267,0.24-0.519,0.478-0.762,0.719 c-0.135,0.153-0.246,0.313-0.355,0.478c-0.088,0.135-0.168,0.278-0.233,0.424c-0.057,0.115-0.105,0.236-0.155,0.361 c-0.048,0.125-0.085,0.255-0.115,0.387c-0.068,0.278-0.106,0.566-0.106,0.85c0,0.24,0.033,0.465,0.096,0.672 c0.185,0.688,0.513,1.353,0.943,1.872c0.41,0.514,1.039,0.854,1.773,0.854c0.734,0,1.363-0.34,1.773-0.854c0.365-0.214,0.798-0.338,1.237-0.338"></path>
                        </svg>
                      </div>
                      <div class="unit-body">
                        <h6>{{ __('Contactez-nous') }}</h6><a class="link" href="mailto:#">contact@demex.solutions</a>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="col-lg-7 text-center text-sm-left">
                <h6>{{ __('Actualités populaires') }}</h6>
                <ul class="list-marked list-marked-primary">
                  <li><a href="#">{{ __('Actualité 1') }}</a></li>
                  <li><a href="#">{{ __('Actualité 2') }}</a></li>
                  <li><a href="#">{{ __('Actualité 3') }}</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <footer class="footer-aside">
          <div class="container">
            <div class="row justify-content-center justify-content-sm-between">
              <div class="col-sm-12 col-md-6">
                <p class="rights">{{ __('© 2024 DEMEX. Tous droits réservés. Conçu par') }}<a href="#" target="_blank">{{ __(' Etoile Sportif De Taourga') }}</a></p>
              </div>
              <div class="col-sm-12 col-md-6 text-center text-md-right">
                <ul class="list-inline list-inline-dashed">
                  <li class="list-inline-item"><a href="#">{{ __('Politique de confidentialité') }}</a></li>
                  <li class="list-inline-item"><a href="#">{{ __('Conditions d’utilisation') }}</a></li>
                  <li class="list-inline-item"><a href="#">{{ __('Mentions légales') }}</a></li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
      </footer>
      <!-- Modal Video-->
      <div class="modal modal-video fade" id="modal1" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" width="560" height="315" data-src="https://www.youtube.com/embed/uSzNA2_y46c"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="{{ asset('assets/js/core.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
  </body>
</html>
