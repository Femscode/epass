<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
  <!-- Site Title-->
  <title>CT-Stake | Home</title>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <!-- Stylesheets-->
  <link rel="stylesheet" type="text/css"
    href="http://fonts.googleapis.com/css?family=Kanit:300,400,500,500i,600%7CRoboto:400,900">
  <link rel="stylesheet" href="{{ asset('betting/css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('betting/css/fonts.css') }}">
  <link rel="stylesheet" href="{{ asset('betting/css/style.css') }}">

</head>

<body>
  <div class="ie-panel"><a href="https://windows.microsoft.com/en-US/internet-explorer/"><img
        src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820"
        alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a>
  </div>
  <div class="preloader">
    <div class="preloader-body">
      <div class="preloader-item"></div>
    </div>
  </div>
  <!-- Page-->
  <div class="page">
    <!-- Page Header-->
    <header class="section page-header rd-navbar-dark">
      <!-- RD Navbar-->
      <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
          data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed"
          data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static"
          data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static"
          data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="166px" data-xl-stick-up-offset="166px"
          data-xxl-stick-up-offset="166px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
          <div class="rd-navbar-panel">
            <!-- RD Navbar Toggle-->
            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-main"><span></span></button>
            <!-- RD Navbar Panel-->
            <div class="rd-navbar-panel-inner container">
              <div class="rd-navbar-panel-item rd-navbar-panel-item-left">
                <h4 style='color:#fff'>CT-STAKE</h4>
                @if($user !== null)
                <ul class="list-inline list-inline-sm">
                  <li><a class="link link-classic" href="/dashboard">My Dashboard</a></li>

                  <li><a class="link link-classic link link-icon link-icon-left link-classic" href="#">Balance: ₦{{
                      number_format($user->balance,2) }}</a></li>
                </ul>
                @else
                <ul class="list-inline list-inline-sm">
                  <li><a class="link link-classic" href="/register">Register</a></li>
                  <li><a class="link link-classic" href="/login">Login</a></li>
                </ul>
                @endif
              </div>
              <div class="rd-navbar-collapse rd-navbar-panel-item rd-navbar-panel-item-right">
                <ul class="list-inline list-inline-bordered">
                  @if($user !== null)
                  <li><a class="link link-icon link-icon-left link-classic" href="/dashboard"><span
                        class="icon fl-bigmug-line-login12"></span><span class="link-icon-text">My Dashboard</span></a>
                  </li>
                  @else
                  {{-- <li><a class="badge badge-primary" href="/register">Register</a></li> --}}
                  @endif
                </ul>
              </div>
              <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1"
                data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
            </div>
          </div>
          <div class="rd-navbar-main">

            <div class="rd-navbar-main-bottom rd-navbar-dark">
              <div class="rd-navbar-main-container container">
                <!-- RD Navbar Nav-->
                <ul class="rd-navbar-nav">
                  <li class="rd-nav-item active"><a class="rd-nav-link" href="#">Competitions</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="#">Contest</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="#">Politics</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="#">News</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="#">Results</a>
                  </li>

                  <li class="rd-nav-item"><a class="rd-nav-link" href="#">Contact us</a>
                  </li>
                </ul>
                <div class="rd-navbar-main-element">
                  <ul class="list-inline list-inline-sm">
                    <li><a class="icon icon-xs fa fa-facebook" href="#"></a></li>
                    <li><a class="icon icon-xs fa fa-twitter" href="#"></a></li>
                    <li><a class="icon icon-xs fa fa-google-plus" href="#"></a></li>
                    <li><a class="icon icon-xs fa fa-instagram" href="#"></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>

    <!-- Swiper-->
    <section class="section swiper-container swiper-classic bg-gray-2" data-loop="true"
      data-autoplay="7000" data-simulate-touch="false" data-slide-effect="fade">
      <div class="swiper-wrapper">
        <div class="swiper-slide" data-slide-bg="{{ asset('assets/images/football1.jpg') }}">
          <div class="container">
            <div class="swiper-slide-caption">
              <h1 style='text-align:center' data-caption-animate="fadeInUp" data-caption-delay="100">Live Preview ...</h1>
        
            </div>
          </div>
        </div>
      
      </div>
     
    </section>

    <!-- All Sports-->

    <section class="section section-sm bg-gray-500" style='background:#d97d47;color:#fff'>
      <div class="container">
        <div class="row isotope-wrap">
          <!-- Isotope Filters-->

          <!-- Isotope Content-->

          <!-- Football-->
        

        </div>
      </div>
    </section>
    <!-- Latest News-->


    
    <hr>
    <section class="section section-md rd-navbar-dark p-20" style='background:#425c7f'>
      <div class='container'>
        <div class='row'>

          <div class="col-lg-8 p-4">
          
            <div class="main-component">
              <!-- Heading Component-->
              <article class="heading-component">
                <div class="heading-component-inner">
                  <h5 class="heading-component-title">Popular news
                  </h5><a class="button button-xs button-gray-outline" href="#">All news</a>
                </div>
              </article>

              <div class="row row-30">
                <div class="col-md-12 lg-12 sm-12">
                  <!-- Post Future-->
                  <article class="col-md-12 lg-12 sm-12"><a class="post-future-figure" href="#">
                    {{-- <img src="{{ asset('assets/images/news1.jpg') }}" alt="" width="368" height="287" /> --}}
                        @if($bet->image !== null)
                        {{-- <img src='{{ asset("betPic/".$bet->image) }}' width="368" height="287" alt='bet_image'> --}}
                        <img src='https://ctstake.com/ct_stake_files/public/betPic/{{ $bet->image }}' width="370" height="287"  alt='bet_image'>
            
                        @else
                        <img src="{{ asset('assets/images/sbet1.jpg') }}" alt="" width="368" height="287" />
                        @endif
                    </a>
                    <div class="post-future-main">
                      <h4 class="post-future-title"><a href="#">{{ $bet->name }}</a></h4>
                      <div class="post-future-meta">
                        <!-- Badge-->
                        <div class="badge badge-secondary">{{ $bet->competition_category }}
                        </div>
                        <div class="badge badge-warning">{{ $bet->address }}
                        </div>
                        <div class="post-future-time"><span class="icon mdi mdi-clock"></span>
                          <time datetime="2020">{{ Date('d-m-Y',strtotime($bet->created_at)) }}</time>
                        </div>
                      </div>
                      <hr />
                      <div class="post-future-text">
                        <p class='p_color'>{{ $bet->description }}
                        </p>
                      </div>
                  
                    </div>
                  </article>
                </div>
               
              </div>
            </div>
          </div>
          <!-- Aside Block-->
          <div class="col-lg-4">
            <aside class="aside-components">
              <div class="aside-component">
                <!-- Heading Component-->
                <article class="heading-component">
                  <div class="heading-component-inner">
                    <h5 class="heading-component-title">latest Game results
                    </h5>
                  </div>
                </article>

                <!-- Game Result Classic-->
                @foreach($selections as $selection)
                <article class="game-result game-result-classic">
                  <div class="game-result-main">
                    <div class="game-result-team game-result-team-first">
                      <figure class="game-result-team-figure game-result-team-figure-big">
                        <img src="{{ asset('assets/images/team1.png') }}" alt="" width="55" height="55" />
                      
                      
                      </figure>
                      <div class="game-result-team-name">{{ $selection->team1 }}</div>
                      <div class="game-result-team-country">Home</div>
                    </div>
                    <div class="game-result-middle">
                      <div class="game-result-score-wrap">
                          <div class="game-result-score game-result-team-win">{{ $selection->homescore ?? '-' }}
                            @if($selection->home == $selection->status)
                            <span  class="game-result-team-label game-result-team-label-top">Win</span>
                            @endif
                        </div>
                        <div class="game-result-score-divider game-result-team-win">
                            @if($selection->status == $selection->draw)
                        
                            <span class="game-result-team-label game-result-team-label-top">Draw</span>
                            @endif
                          <svg x="0px" y="0px" width="7px" height="21px" viewbox="0 0 7 21"
                            enable-background="new 0 0 7 21" xml:space="preserve">
                            <g>
                              <circle cx="3.5" cy="3.5" r="3"></circle>
                              <path
                                d="M3.5,1C4.879,1,6,2.122,6,3.5S4.879,6,3.5,6S1,4.878,1,3.5S2.122,1,3.5,1 M3.5,0C1.567,0,0,1.567,0,3.5S1.567,7,3.5,7      S7,5.433,7,3.5S5.433,0,3.5,0L3.5,0z">
                              </path>
                            </g>
                            <g>
                              <circle cx="3.695" cy="17.5" r="3"></circle>
                              <path
                                d="M3.695,15c1.378,0,2.5,1.122,2.5,2.5S5.073,20,3.695,20s-2.5-1.122-2.5-2.5S2.316,15,3.695,15 M3.695,14      c-1.933,0-3.5,1.567-3.5,3.5s1.567,3.5,3.5,3.5s3.5-1.567,3.5-3.5S5.628,14,3.695,14L3.695,14z">
                              </path>
                            </g>
                          </svg>
                        </div>
                        <div class="game-result-score game-result-team-win">{{ $selection->awayscore ?? '-' }}
                            @if($selection->status == $selection->away)
                        
                            <span class="game-result-team-label game-result-team-label-top">Win</span>
                            @endif

                        </div>
                      </div>
                
                    </div>
                    <div class="game-result-team game-result-team-second">
                      <figure class="game-result-team-figure game-result-team-figure-big"><img
                          src="{{ asset('assets/images/team2.png') }}" alt="" width="41" height="59" />
                      </figure>
                      <div class="game-result-team-name">{{ $selection->team2 }}</div>
                      <div class="game-result-team-country">Away</div>
                    </div>
                  </div>
                  <div class="game-result-footer">
                    <ul class="game-result-details">
                      <li>Old Trafford Bridge</li>
                      <li>
                        <time datetime="2020-04-14">April 14, 2020</time>
                      </li>
                    </ul>
                  </div>
                </article>
                @endforeach
                <!-- Game Result Classic-->
             
              </div>
              <div class="aside-component">
                <!-- Heading Component-->
                <article class="heading-component">
                  <div class="heading-component-inner">
                    <h5 class="heading-component-title">Follow us
                    </h5>
                  </div>
                </article>

                <!-- Buttons Media-->
                <div class="group-sm group-flex"><a class="button-media button-media-facebook" href="#">
                    <h4 class="button-media-title">50k</h4>
                    <p class="button-media-action">Like<span
                        class="icon material-icons-add_circle_outline icon-sm"></span></p><span
                      class="button-media-icon fa-facebook"></span>
                  </a><a class="button-media button-media-twitter" href="#">
                    <h4 class="button-media-title">120k</h4>
                    <p class="button-media-action">Follow<span
                        class="icon material-icons-add_circle_outline icon-sm"></span></p><span
                      class="button-media-icon fa-twitter"></span>
                  </a><a class="button-media button-media-google" href="#">
                    <h4 class="button-media-title">15k</h4>
                    <p class="button-media-action">Follow<span
                        class="icon material-icons-add_circle_outline icon-sm"></span></p><span
                      class="button-media-icon fa-google"></span>
                  </a><a class="button-media button-media-instagram" href="#">
                    <h4 class="button-media-title">85k</h4>
                    <p class="button-media-action">Follow<span
                        class="icon material-icons-add_circle_outline icon-sm"></span></p><span
                      class="button-media-icon fa-instagram"></span>
                  </a></div>
              </div>
            </aside>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- Page Footer-->
  <footer class="section footer-classic footer-classic-dark" style='background:#0e141b'>
    <div class="footer-classic-main">
      <div class="container">
        <p class="heading-7">Subscribe to our Newsletter</p>
        <!-- RD Mailform-->
        <form class="rd-mailform rd-form rd-inline-form-creative" data-form-output="form-output-global"
          data-form-type="subscribe" method="post"
          action="https://livedemo00.template-help.com/wt_prod-19186/bat/rd-mailform.php">
          <div class="form-wrap">
            <div class="form-input-wrap">
              <input class="form-input" id="footer-form-email" type="email" name="email" data-constraints="@Required">
              <label class="form-label" for="footer-form-email">Enter your E-mail</label>
            </div>
          </div>
          <div class="form-button">
            <button class="button button-primary-outline" type="submit" aria-label="Send"><span
                class="icon fl-budicons-launch-right164"></span></button>
          </div>
        </form>
        <div class="row">
          <div class="col-lg-12 text-center text-sm-left">
            <div class="unit-spacing-xl">
              <article
                class="unit unit-sm-horizontal justify-content-center justify-content-sm-start footer-classic-info">
                <div class="unit-left">
                  <!-- Brand--><a class="brand" href="/">
                    <h4>CTSTAKE</h4>
                    {{-- <img class="brand-logo-dark" src="images/logo-default-213x82.png" alt="" width="106"
                      height="41" />
                    <img class="brand-logo-light" src="images/logo-inverse-213x82.png" alt="" width="106" height="41" />
                    --}}
                  </a>
                </div>
                <div class="unit-body">
                  <p class='p_color' style='color:#fff'>CTStake offers you the chance to create bet for your local
                    competitions to bring
                    more life to it,
                    and to make money through passion on sport .</p>
                </div>
              </article>
            </div>
            <ul class="list-inline list-inline-bordered list-inline-bordered-lg">
              <li>
                <div class="unit unit-horizontal unit-middle">
                  <div class="unit-left">
                    <svg class="svg-color-primary svg-sizing-35" x="0px" y="0px" width="27px" height="27px"
                      viewbox="0 0 27 27" preserveAspectRatio="none">
                      <path
                        d="M2,26c0,0.553,0.447,1,1,1h5c0.553,0,1-0.447,1-1v-8.185c-0.373-0.132-0.711-0.335-1-0.595V19 H6v-1v-1v-1H5v1v2H3v-9H2v1H1V9V8c0-0.552,0.449-1,1-1h1h1h3h0.184c0.078-0.218,0.173-0.426,0.297-0.617C8.397,5.751,9,4.696,9,3.5 C9,1.567,7.434,0,5.5,0S2,1.567,2,3.5C2,4.48,2.406,5.364,3.056,6H3H2C0.895,6,0,6.895,0,8v7c0,1.104,0.895,2,2,2V26z M8,26H6v-6h2 V26z M5,26H3v-6h2V26z M3,3.5C3,2.121,4.121,1,5.5,1S8,2.121,8,3.5S6.879,6,5.5,6S3,4.879,3,3.5 M1,15v-3h1v4 C1.449,16,1,15.552,1,15">
                      </path>
                      <path
                        d="M11.056,6H11h-1C8.895,6,8,6.895,8,8v7c0,1.104,0.895,2,2,2v9c0,0.553,0.447,1,1,1h5 c0.553,0,1-0.447,1-1v-9c1.104,0,2-0.896,2-2V8c0-1.105-0.896-2-2-2h-1h-0.056C16.594,5.364,17,4.48,17,3.5 C17,1.567,15.434,0,13.5,0S10,1.567,10,3.5C10,4.48,10.406,5.364,11.056,6 M10,15v1c-0.551,0-1-0.448-1-1v-3h1V15z M11,20h2v6h-2 V20z M16,26h-2v-6h2V26z M17,16v-1v-3h1v3C18,15.552,17.551,16,17,16 M17,7c0.551,0,1,0.448,1,1v1v1v1h-1v-1h-1v5v4h-2v-1v-1v-1h-1 v1v1v1h-2v-4v-5h-1v1H9v-1V9V8c0-0.552,0.449-1,1-1h1h1h3h1H17z M13.5,1C14.879,1,16,2.121,16,3.5C16,4.879,14.879,6,13.5,6 S11,4.879,11,3.5C11,2.121,12.121,1,13.5,1">
                      </path>
                      <polygon points="15,13 14,13 14,9 13,9 12,9 12,10 13,10 13,13 12,13 12,14 13,14 14,14 15,14 	">
                      </polygon>
                      <polygon
                        points="7,14 7,13 5,13 5,12 6,12 7,12 7,10 7,9 6,9 4,9 4,10 6,10 6,11 5,11 4,11 4,12 4,13 4,14 5,14">
                      </polygon>
                      <polygon
                        points="20,10 22,10 22,11 21,11 21,12 22,12 22,13 20,13 20,14 22,14 23,14 23,13 23,12 23,11 23,10 23,9 22,9 20,9 	">
                      </polygon>
                      <path
                        d="M19.519,6.383C19.643,6.574,19.738,6.782,19.816,7H20h3h1h1c0.551,0,1,0.448,1,1v3h-1v-1h-1v9 h-2v-2v-1h-1v1v2h-2v-1.78c-0.289,0.26-0.627,0.463-1,0.595V26c0,0.553,0.447,1,1,1h5c0.553,0,1-0.447,1-1v-9c1.104,0,2-0.896,2-2 V8c0-1.105-0.896-2-2-2h-1h-0.056C24.594,5.364,25,4.48,25,3.5C25,1.567,23.434,0,21.5,0S18,1.567,18,3.5 c0,0.736,0.229,1.418,0.617,1.981C18.861,5.834,19.166,6.14,19.519,6.383 M19,20h2v6h-2V20z M24,26h-2v-6h2V26z M26,15 c0,0.552-0.449,1-1,1v-4h1V15z M21.5,1C22.879,1,24,2.121,24,3.5C24,4.879,22.879,6,21.5,6C20.121,6,19,4.879,19,3.5 C19,2.121,20.121,1,21.5,1">
                      </path>
                    </svg>
                  </div>
                  <div class="unit-body">
                    <p class="heading-7 opacity-2">Join Our Team</p><a class="link" href="mailto:#">info@ctstake.com</a>
                  </div>
                </div>
              </li>
              <li>
                <div class="unit unit-horizontal unit-middle">
                  <div class="unit-left">
                    <svg class="svg-color-primary svg-sizing-35" x="0px" y="0px" width="72px" height="72px"
                      viewbox="0 0 72 72">
                      <path
                        d="M36.002,0c-0.41,0-0.701,0.184-0.931,0.332c-0.23,0.149-0.4,0.303-0.4,0.303l-9.251,8.18H11.58 c-1.236,0-1.99,0.702-2.318,1.358c-0.329,0.658-0.326,1.3-0.326,1.3v11.928l-8.962,7.936V66c0,0.015-0.038,1.479,0.694,2.972 C1.402,70.471,3.006,72,5.973,72h30.03h30.022c2.967,0,4.571-1.53,5.306-3.028c0.736-1.499,0.702-2.985,0.702-2.985V31.338 l-8.964-7.936V11.475c0,0,0.004-0.643-0.324-1.3c-0.329-0.658-1.092-1.358-2.328-1.358H46.575l-9.251-8.18 c0,0-0.161-0.154-0.391-0.303C36.703,0.184,36.412,0,36.002,0z M36.002,3.325c0.49,0,0.665,0.184,0.665,0.184l6,5.306h-6.665 h-6.665l6-5.306C35.337,3.51,35.512,3.325,36.002,3.325z M12.081,11.977h23.92H59.92v9.754v2.121v14.816L48.511,48.762 l-10.078-8.911c0,0-0.307-0.279-0.747-0.548s-1.022-0.562-1.684-0.562c-0.662,0-1.245,0.292-1.686,0.562 c-0.439,0.268-0.747,0.548-0.747,0.548l-10.078,8.911L12.082,38.668V23.852v-2.121v-9.754H12.081z M8.934,26.867v9.015 l-5.091-4.507L8.934,26.867z M63.068,26.867l5.091,4.509l-5.091,4.507V26.867z M69.031,34.44v31.559 c0,0.328-0.103,0.52-0.162,0.771L50.685,50.684L69.031,34.44z M2.971,34.448l18.348,16.235L3.133,66.77 c-0.059-0.251-0.162-0.439-0.162-0.769C2.971,66.001,2.971,34.448,2.971,34.448z M36.002,41.956c0.264,0,0.437,0.057,0.546,0.104 c0.108,0.047,0.119,0.059,0.119,0.059l30.147,26.675c-0.3,0.054-0.79,0.207-0.79,0.207H36.002H5.98H5.972 c-0.003,0-0.488-0.154-0.784-0.207l30.149-26.675c0,0,0.002-0.011,0.109-0.059C35.555,42.013,35.738,41.956,36.002,41.956z">
                      </path>
                    </svg>
                  </div>
                  <div class="unit-body">
                    <p class="heading-7 opacity-2">Contact Us</p><a class="link" href="mailto:#">mail@ctstake.com</a>
                  </div>
                </div>
              </li>
            </ul>
            <div class="group-md group-middle">
              <div class="group-item">
                <ul class="list-inline list-inline-xs">
                  <li><a class="icon icon-corporate fa fa-facebook" href="#"></a></li>
                  <li><a class="icon icon-corporate fa fa-twitter" href="#"></a></li>
                  <li><a class="icon icon-corporate fa fa-google-plus" href="#"></a></li>
                  <li><a class="icon icon-corporate fa fa-instagram" href="#"></a></li>
                </ul>
              </div><a class="button button-sm button-gray-outline" href="#">Get in Touch</a>
            </div>
          </div>


        </div>
      </div>
    </div>
    <div class="footer-classic-aside footer-classic-darken">
      <div class="container">
        <div class="layout-justify">
          <!-- Rights-->
          {{-- <p class="rights"><span>S-Bet</span><span>&nbsp;&copy;&nbsp;</span><span
              class="copyright-year"></span><span>.&nbsp;</span><a class="link-underline" href="#">Privacy Policy</a>
            --}}
          </p>
          <nav class="nav-minimal">
            <ul class="nav-minimal-list">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="/checkout">Selection
                  <sup class='sup'>
                    @if(Session::has('cart'))
                    <span class="game-result-team-label game-result-team-label-top"> {{
                      count(Session::get('cart')->items) }}</span>

                    @endif
                  </sup>
                </a>

              </li>
              <li><a href="/dashboard">My Stakes
                  <sup class='sup'>
                    <span class="game-result-team-label game-result-team-label-top"> {{ $stake_count ?? '' }} </span>



                  </sup>
                </a></li>
              {{-- <li><a href="#">Statistics</a></li>
              <li><a href="#">Pages</a></li> --}}
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </footer>
  <div class="modal modal-sport fade" id="sportModal" tabindex="-1" role="dialog" aria-labelledby="sportModalTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="sportModalTitle">Placing a bet</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span class="mdi mdi-close"
              aria-hidden="true"></span></button>
        </div>
        <div class="modal-body">
          <p class="modal-sport-wager-title"><span class="modal-sport-wager"></span> <span
              class="modal-sport-wager-count"></span>
          </p>
          <p class="modal-sport-confrontation"></p>
          <p class="modal-sport-live"><span class="modal-sport-live-count"></span> <span>1X2 Live Betting</span>
          </p>
          <div class="stepper-sport">
            <input class="form-input" type="number" data-zeros="true" value="0" min="0" max="100">
          </div>
        </div>
        <div class="modal-footer">
          <p class="modal-sport-bets"><span class="modal-sport-bets-left">Number of bets</span><span
              class="modal-sport-bets-right"></span></p>
          <p class="modal-sport-stake"><span class="modal-sport-stake-left">Stake</span><span
              class="modal-sport-stake-right">4</span></p>
          <p class="modal-sport-win"><span class="modal-sport-win-left">Winnings</span><span
              class="modal-sport-win-right">24</span></p>
          <button class="modal-sport-place button button-primary button-block" type="button" data-dismiss="modal">place
            bet</button>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- Global Mailform Output-->
  <div class="snackbars" id="form-output-global"></div>
  <!-- Javascript-->
  <script src="{{ asset('betting/js/core.min.js') }}"></script>
  <script src="{{ asset('betting/js/script.js') }}"></script>

  <!--LIVEDEMO_00 -->

  <script type="text/javascript">
    var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-7078796-5']);
	  _gaq.push(['_trackPageview']);
	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'https://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
    window.addEventListener( "pageshow", function ( event ) {
  var historyTraversal = event.persisted || 
                         ( typeof window.performance != "undefined" && 
                              window.performance.navigation.type === 2 );
  if ( historyTraversal ) {
    // Handle page restore.
    window.location.reload();
  }
});
    
  </script>
  <script>
    $(document).ready(function() {
      $(document).on('click', '.pagination a', function(event){
 
 event.preventDefault(); 
 var page = $(this).attr('href').split('page=')[1];
 
  console.log(page);
 fetch_data(page);
});
function fetch_data(page)
 {
   
    
   
  $.ajax({
   url:"/pagination/fetch_data/?page="+page,
   success:function(data)
   {
   
   console.log(data,'this sata')
    $('#table_data').html(data);
   }
  });
 }
 
    })
  </script>

</html>