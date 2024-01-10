<!DOCTYPE html>
<html lang="en" dir="ltr" prefix="og: https://ogp.me/ns">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="Mehens Samson">
    <meta name=”robots” content="index, follow">
    <meta name="keywords"
        content="Hope And Rural Aid Foundation, HARAF, NGO In Yola, NGO In Adamawa State, Hope NGO, NGO, NGO In Nigeria, Non Governmental Organiztion in Nigeria">
    <meta name="description"
        content="Hope and Rural Aid Foundation (HARAF) is a humanitarian non – profit and non-governmental organization working since 2011 but was officially registered as an organization with the corporate affairs commission (CAC) of the federal government of Nigeria in 2016. Currently serving in Northeast region of Nigeria.">

    <link rel="icon" href="{{ asset('assets/images/icon.png') }}" />

    <title>{{ $page_title }} | Hope And Rural Aid Foundation (HARAF) </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" media="all" href="{{ asset('fontawesome-free-6.4.2-web/css/all.css') }}" />
    <link rel="stylesheet" media="all" href="{{ asset('css/main.css') }}" />
    <link rel="stylesheet" media="all" href="{{ asset('css/old.css') }}" />

</head>

<body>
    

    <div id="fb-root"></div>
    <div class="rpll-page" data-page-content-lang="en">
        @include('layouts.navbar')

        <div class="rpll-page__hero-wrapper">
            <div class="rplc-hero-form" data-rpl-hero-flush-with-top="yes">
                <div class="rplc-hero-form__content">
                    <div class="rpll-hero-layout-1 rpll-hero-layout-1--has-image rpll-hero-layout-1--50-50">
                      @yield('heroSection')
                        
                      @yield('headOver')
                    </div>
                </div>
            </div>
        </div>

        <main id="main-content" class="rpll-page__main" role="main" tabindex="-1">
            @yield('content')
        </main>

        <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function(event) {
            var first_element = document.getElementsByClassName('rpll-page__main')[0].firstElementChild;
            if (first_element && typeof first_element.dataset.rplCanvasColor !== 'undefined') {
                document.getElementsByClassName('rpll-page__hero-wrapper')[0].dataset.rplCanvasColor =
                    first_element.dataset.rplCanvasColor;
            }
        });
        </script>

        <div class="rpll-page__footer">
            <div class="rpll-footer-layout-1">
                <div class="rpll-footer-layout-1__inner-content-wrapper">
                    <div class="rpll-footer-layout-1__section">


                        <div class="rplm-crisis-watch rplm-crisis-watch--type-one">
                            <div class="rplm-crisis-watch__wrapper">
                                <a href="/topic/ukraine-crisis" class="rpla-link-icon rpla-link-icon--type-four rpla-link-icon--icon-position-outside" data-rpla-hover-target aria-label="crisis">
                                    <img src="{{ asset('assets/images/icon.png') }}" style="width: 4rem" alt="HARAF Logo">
                                    <span class="rpla-link-icon__link-wrapper">
                                      <span role="link" class="rpla-link rpla-link--type-two rpla-link--subtype-alert">About Us</span>
                                    </span>
                                </a>
                            </div>
                        </div>


                        <div class="rplc-footer-menu">
                          <div class="rplm-footer-lead-gen-link">
                              <p class="rplm-footer-lead-gen-link__info">Hope and Rural Aid Foundation (HARAF) is a humanitarian non – profit and non-governmental organization working since 2011 but was officially registered as an organization with the corporate affairs commission (CAC) of the federal government of Nigeria in 2016. Currently serving in Northeast region of Nigeria.</p>
                              <br>
                              <p class="rplm-footer-lead-gen-link__info">
                                <i class="fa-solid fa-map-location-dot"></i>
                                Malamre Quarters, Beside UNHCR Office, Jimeta-Yola, Adamawa State, Nigeria  
                                <br>
                                <i class="fa-solid fa-envelope"></i>
                               <a href="mailto:info@haraf.org.ng" role="link" class="rpla-link rpla-link--size-extra-small rpla-link--type-one"> info@haraf.org.ng </a>                              
                              </p>
                          </div>
                            
                        </div>
                    </div>

                    
                    <div class="rpll-footer-layout-1__ section">
                        <div class="rplc-efficiency">
                            <div class="rplc-efficiency__content ">
                              <div class="rplc-efficiency__title " role="heading" aria-level="4">We on the Map</div>
                                <div class="rplc-efficiency__icon-text-wrapper ">
                                  <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=350&amp;height=300&amp;hl=en&amp;q=hope and rural aid foundation&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div><style>.mapouter{position:relative;text-align:right;width:100%;height:300px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:300px;}.gmap_iframe {height:300px!important;}</style></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="rpll-footer-layout-1__section">
                        <div class="rplm-footer-lead-gen-link">
                            <div class="rplm-footer-lead-gen-link__title" role="heading" aria-level="4">Join our mailing list</div>
                            <p class="rplm-footer-lead-gen-link__info">
                                Get the latest news about HARAF &#039;s innovative programs, compelling stories about
                                our clients and how you can make a difference.
                                <a href="#" role="link" class="rpla-link rpla-link--size-extra-small rpla-link--type-one"> Subscribe </a>
                            </p>
                        </div>
                        <div class="rplm-social-share rplm-social-share--type-one">
                          <div class="rplm-social-share__title" role="heading" aria-level="4">Follow Us</div>
                            <div class="rplm-social-share__icons-wrapper">

                                <div class="rplm-social-share__icon-only-link-wrapper" data-rpla-hover-target>
                                    <a href="https://twitter.com/Haraf_org" target="_blank" class="rpla-icon-only-link rpla-icon-only-link--type-one rpla-icon-only-link--twitter" data-rpla-hover-target aria-label="twitter" tabindex='0'>
                                      <i class="fa-brands fa-square-x-twitter"></i>
                                    </a>
                                </div>
                                <div class="rplm-social-share__icon-only-link-wrapper" data-rpla-hover-target>
                                    <a href="https://facebook.com/HARAF.ORG" target="_blank" class="rpla-icon-only-link rpla-icon-only-link--type-one rpla-icon-only-link--facebook" data-rpla-hover-target aria-label="facebook" tabindex='0'>
                                      <i class="fa-brands fa-facebook"></i>
                                    </a>
                                </div>
                                <div class="rplm-social-share__icon-only-link-wrapper" data-rpla-hover-target>
                                    <a href="https://instagram.com/haraf_org/" target="_blank" class="rpla-icon-only-link rpla-icon-only-link--type-one rpla-icon-only-link--instagram" data-rpla-hover-target aria-label="instagram" tabindex='0'>
                                      <i class="fa-brands fa-square-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="rpll-footer-layout-2">
              <div class="rpll-footer-layout-2__inner-content-wrapper">
                                
                <div class="rpll-footer-layout-2__section">
                  <div class="rpla-utility-text"></div>
                </div>
                <div class="rpll-footer-layout-2__section">
                  <div class="rplm-partner-logos"></div>
                </div>
                <div class="rpll-footer-layout-2__section">
                  <div class="rpla-utility-text">Site Designed and Developed by
                    <a href="https://mehenscreatives.com" class="">                
                      <strong class=" rpla-link--type-two rpla-link--subtype-no-underline ">MEHENS CREATIVES ENTERPRISE</strong>
                    </a>                  
                  </div>
                </div>
                <div class="rpll-footer-layout-2__section">
                  <div class="rpla-utility-text">Copyright © Hope And Rural Aid Foundation, <script> var currentYear = new Date().getFullYear(); document.write(currentYear); </script>.
                </div>
                
              </div>
            </div>
          </div>
        </div>

    </div>

    <div class="rpll-page__overlay"></div>

    <!-- search modal  -->
    <div class="rplc-modal rplc-modal--type-search rplc-modal--close-button-dark" data-rpl-modal-id="search"
        data-rpl-modal-state="closed">
        <div class="rplc-modal__content">
            <div class="rplc-modal__close" data-rpl-modal-close tabindex="0">
                <div class="rplc-modal__close_x">×</div>
            </div>
            <div class="rplc-modal__inner-content-wrapper">
                <div class="rplc-search-modal">
                    <div class="rplm-search-form">
                        <form action="/search/site" method="GET" accept-charset="UTF-8">
                            <div class="rplm-search-form__wrapper">
                                <div class="rplm-search-form__text-input-wrapper">
                                    <div
                                        class="rpla-text-input rpla-text-input--type-three rpla-text-input--placeholder-bold">
                                        <label class="rpla-text-input__label" for="search">Search</label>
                                        <input class="rpla-text-input__field" type="text" name="search"
                                            aria-label="search" placeholder="Search here">
                                    </div>
                                    <div class="rplm-search-form__submit-wrapper">
                                        <button type="submit"
                                            class="rpla-icon-only-link rpla-icon-only-link--search rpla-icon-only-link--type-one"
                                            aria-label="search">
                                            <span class="rpla-icon-only-link__icon-wrapper">
                                                <div
                                                    class="rpla-icon rpla-icon--search rpla-icon--fill-third-party-hover">
                                                    <svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
                                                        fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round"
                                                        stroke-miterlimit="1.414">
                                                        <path
                                                            d="M6.053 12.105C2.737 12.105 0 9.368 0 6.053 0 2.737 2.737 0 6.053 0c3.315 0 6.052 2.737 6.052 6.053 0 3.315-2.737 6.052-6.052 6.052zm0-10c-2.158 0-3.948 1.79-3.948 3.948S3.895 10 6.053 10 10 8.21 10 6.053c0-2.158-1.79-3.948-3.947-3.948z"
                                                            fill-rule="nonzero" />
                                                        <path
                                                            d="M9.874 8.352l6.18 6.177-1.49 1.49-6.178-6.18 1.488-1.488z"
                                                            fill-rule="nonzero" />
                                                    </svg>
                                                </div>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/main.js') }}"></script>
    

</body>

</html>