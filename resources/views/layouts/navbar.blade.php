<nav class="rplc-global-navigation">
    <div class="rplc-global-navigation__content">
        <div class="rplc-global-navigation__top-wrapper">
            <div class="rplc-global-navigation__branding-wrapper">
                <a href="{{ route('home') }}" aria-label="Home" class="rpla-global-navigation-branding-link"></a>
            </div>

            @php
                use App\Models\Post; 
                $recent_news = Post::latest()->first();
            @endphp
            <div class="rplc-global-navigation__desktop-top-wrapper">
                <div class="rplc-global-navigation__desktop-crisis-watch-wrapper">
                    <div class="rplm-crisis-watch rplm-crisis-watch--type-three">
                        <div class="rplm-crisis-watch__wrapper">
                            <a href="#"
                                class="rpla-link-icon rpla-link-icon--type-four rpla-link-icon--subtype-prefix rpla-link-icon--icon-position-outside"
                                data-rpla-hover-target aria-label="crisis">
                                <i class="fa-solid fa-triangle-exclamation text-danger"></i>
                                <span class="rpla-link-icon__prefix-wrapper">News Update:</span>
                                <span class="rpla-link-icon__link-wrapper">
                                    <span role="link" class="rpla-link rpla-link--type-two rpla-link--subtype-no-hover-effect">{{ $recent_news['title'] }}</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="rplc-global-navigation__desktop-secondary-menu-wrapper">
                    <div class="rplc-secondary-menu">
                        <ul class="rplc-secondary-menu__menu">
                            <li class="rplc-secondary-menu__menu-item">
                                <a href="{{ route('career') }}" class="rpla-link-icon rpla-link-icon--type-five rpla-link-icon--weight-normal" data-rpla-hover-target aria-label="careers">
                                    <i class="fa-solid fa-briefcase text-white"></i>
                                    <span class="rpla-link-icon__link-wrapper">
                                        <span role="link" class="rpla-link rpla-link--type-two rpla-link--subtype-no-underline rpla-link--subtype-no-hover-effect rpla-link--weight-normal">
                                            Careers
                                        </span>
                                    </span>
                                </a>
                            </li>
                            <li class="rplc-secondary-menu__menu-item">
                                <a href="{{ route('volunteer') }}" class="rpla-link-icon rpla-link-icon--type-five rpla-link-icon--weight-normal" data-rpla-hover-target aria-label="volunteer">
                                    <i class="fa-solid fa-handshake-angle text-white"></i>
                                    <span class="rpla-link-icon__link-wrapper">
                                        <span role="link" class="rpla-link rpla-link--type-two rpla-link--subtype-no-underline rpla-link--subtype-no-hover-effect rpla-link--weight-normal">
                                            Volunteer
                                        </span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="rplc-global-navigation__mobile-top-wrapper">
                <div class="rplc-global-navigation__mobile-trailing-wrapper">
                    <div class="rplc-global-navigation__mobile-call-to-action-menu-wrapper">
                        <ul class="rplc-mobile-call-to-action-menu">
                            <li class="rplc-mobile-call-to-action-menu__item">
                                <a href="https://dashboard.flutterwave.com/donate/lqpiq8pdjqld" role="link"
                                    class="rpla-link rpla-link--type-two rpla-link--subtype-black rpla-link--subtype-no-hover-effect">Donate
                                </a>
                            </li>
                        </ul>
                    </div>
                    <button class="rplc-global-navigation__mobile-menu-expand-toggle" data-rpl-mobile-navigation-toggle="body" aria-label="Mobile Menu Expand Toggle"></button>
                </div>
            </div>
        </div>

        <div class="rplc-global-navigation__mobile-navigation-top-wrapper">
            <div class="rplm-mobile-navigation-top">
                <div class="rplm-mobile-navigation-top__icon-wrapper">
                    <div class="rpla-icon rpla-icon--HARAF-arrow">
                        <img src="{{ asset('assets/images/icon.png') }}" alt="HARAF Logo">
                    </div>
                </div>
                <span class="rplm-mobile-navigation-top__close" data-rpl-mobile-navigation-toggle="body">×</span>
            </div>
        </div>
        
        <div class="rplc-global-navigation__bottom-wrapper">        
            <div class="rplc-global-navigation__main-menu-wrapper">
                <ul class="rplc-main-menu">
                    <li class="rplc-main-menu__level-1-menu-item rplc-main-menu__level-1-menu-item--type-1" data-rpl-main-menu-level-1>
                        <a class="rplc-main-menu__level-1-menu-item-link" href="#" aria-label="Who We Are">Who We Are</a>
                        <button class="rplc-main-menu__level-1-expand-toggle" data-rpl-main-menu-expanding-section-target aria-label="Main Menu Option Expand Toggle"></button>
                        <ul class="rplc-main-menu__level-2">
                            <li class="rplc-main-menu__level-2-menu-item">
                                <p class="rplc-main-menu__level-2-menu-item-title">About Us</p>
                                <ul class="rplc-main-menu__level-3">
                                    <li class="rplc-main-menu__level-3-menu-item rplc-main-menu__level-3-menu-item--leaf" data-rpl-main-menu-level-3><a class="rplc-main-menu__level-3-menu-item-link" href="{{ route('vision_and_mission') }}" aria-label="Vision & Mission Statement">Vision & Mission & Core Values of HARAF</a></li>
                                    <li class="rplc-main-menu__level-3-menu-item rplc-main-menu__level-3-menu-item--leaf" data-rpl-main-menu-level-3><a class="rplc-main-menu__level-3-menu-item-link" href="{{ route('history') }}" aria-label="History">History & About HARAF</a></li>
                                </ul>
                            </li>
                            <li class="rplc-main-menu__level-2-menu-item rplc-main-menu__level-2-menu-item--last">
                                <p class="rplc-main-menu__level-2-menu-item-title">Our People</p>
                                <ul class="rplc-main-menu__level-3">
                                    <li class="rplc-main-menu__level-3-menu-item rplc-main-menu__level-3-menu-item--leaf" data-rpl-main-menu-level-3><a class="rplc-main-menu__level-3-menu-item-link" href="{{ route('team') }}" aria-label="Meet Our Team">Meet Our Team</a></li>
                                    <li class="rplc-main-menu__level-3-menu-item rplc-main-menu__level-3-menu-item--leaf" data-rpl-main-menu-level-3><a class="rplc-main-menu__level-3-menu-item-link" href="{{ route('career') }}" aria-label="Join Us">Join Us</a></li>
                                    <li class="rplc-main-menu__level-3-menu-item rplc-main-menu__level-3-menu-item--leaf" data-rpl-main-menu-level-3><a class="rplc-main-menu__level-3-menu-item-link" href="{{ route('contact-us') }}" aria-label="Contact Us">Contact Us</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="rplc-main-menu__level-1-menu-item rplc-main-menu__level-1-menu-item--type-1" data-rpl-main-menu-level-1>
                        <a class="rplc-main-menu__level-1-menu-item-link" href="#" aria-label="What We Do">What We Do</a>
                        <button class="rplc-main-menu__level-1-expand-toggle" data-rpl-main-menu-expanding-section-target aria-label="Main Menu Option Expand Toggle"></button>
                        <ul class="rplc-main-menu__level-2">
                            <li class="rplc-main-menu__level-2-menu-item"/>
                            <p class="rplc-main-menu__level-2-menu-item-title">Where We Focus</p>
                            <ul class="rplc-main-menu__level-3">
                                <li class="rplc-main-menu__level-3-menu-item rplc-main-menu__level-3-menu-item--leaf" data-rpl-main-menu-level-3><a class="rplc-main-menu__level-3-menu-item-link" href="#" aria-label="Education">Education</a></li>
                                <li class="rplc-main-menu__level-3-menu-item rplc-main-menu__level-3-menu-item--leaf" data-rpl-main-menu-level-3><a class="rplc-main-menu__level-3-menu-item-link" href="#" aria-label="Livelihood Support">Livelihood Support</a></li>
                                <li class="rplc-main-menu__level-3-menu-item rplc-main-menu__level-3-menu-item--leaf" data-rpl-main-menu-level-3><a class="rplc-main-menu__level-3-menu-item-link" href="#" aria-label="Protection">Protection</a></li>
                                <li class="rplc-main-menu__level-3-menu-item rplc-main-menu__level-3-menu-item--leaf" data-rpl-main-menu-level-3><a class="rplc-main-menu__level-3-menu-item-link" href="#" aria-label="Emergency Relief">Emergency Relief</a></li>
                                <li class="rplc-main-menu__level-3-menu-item rplc-main-menu__level-3-menu-item--leaf" data-rpl-main-menu-level-3><a class="rplc-main-menu__level-3-menu-item-link" href="#" aria-label="Advocacy/Sensitization">Advocacy/Sensitization</a></li>
                                <li class="rplc-main-menu__level-3-menu-item rplc-main-menu__level-3-menu-item--leaf" data-rpl-main-menu-level-3><a class="rplc-main-menu__level-3-menu-item-link" href="#" aria-label="Shelter">Shelter</a></li>
                                <li class="rplc-main-menu__level-3-menu-item rplc-main-menu__level-3-menu-item--leaf" data-rpl-main-menu-level-3><a class="rplc-main-menu__level-3-menu-item-link" href="#" aria-label="Monitoring, evaluation, accountability, and learning (MEAL)">Monitoring, evaluation, accountability, and learning (MEAL)</a></li>
                            </ul>
                    </li>
                </ul>

                </li>
                <li class="rplc-main-menu__level-1-menu-item rplc-main-menu__level-1-menu-item--type-1" data-rpl-main-menu-level-1>
                    <a class="rplc-main-menu__level-1-menu-item-link" href="#" aria-label="How To Help"> How To Help </a>
                    <button class="rplc-main-menu__level-1-expand-toggle" data-rpl-main-menu-expanding-section-target aria-label="Main Menu Option Expand Toggle"></button>
                    <ul class="rplc-main-menu__level-2">
                        <li class="rplc-main-menu__level-2-menu-item" />
                        <p class="rplc-main-menu__level-2-menu-item-title">Give</p>
                        <ul class="rplc-main-menu__level-3">
                            <li class="rplc-main-menu__level-3-menu-item rplc-main-menu__level-3-menu-item--leaf" data-rpl-main-menu-level-3><a class="rplc-main-menu__level-3-menu-item-link" href="#" aria-label="Donate Monthly">Donate Monthly</a></li>
                        </ul>

                        <li class="rplc-main-menu__level-2-menu-item rplc-main-menu__level-2-menu-item--last" />
                        <p class="rplc-main-menu__level-2-menu-item-title">Join Us</p>
                        <ul class="rplc-main-menu__level-3">
                            <li class="rplc-main-menu__level-3-menu-item rplc-main-menu__level-3-menu-item--leaf" data-rpl-main-menu-level-3><a class="rplc-main-menu__level-3-menu-item-link" href="#" aria-label="Volunteer">Volunteer</a></li>
                            <li class="rplc-main-menu__level-3-menu-item rplc-main-menu__level-3-menu-item--leaf" data-rpl-main-menu-level-3><a class="rplc-main-menu__level-3-menu-item-link" href="#" aria-label="Careers">Careers</a></li>
                            <li class="rplc-main-menu__level-3-menu-item rplc-main-menu__level-3-menu-item--leaf" data-rpl-main-menu-level-3><a class="rplc-main-menu__level-3-menu-item-link" href="#" aria-label="Fundraiser">Fundraiser</a></li>
                            <li class="rplc-main-menu__level-3-menu-item rplc-main-menu__level-3-menu-item--leaf" data-rpl-main-menu-level-3><a class="rplc-main-menu__level-3-menu-item-link" href="#" aria-label="Partner with us">Partner with us</a></li>
                            <li class="rplc-main-menu__level-3-menu-item rplc-main-menu__level-3-menu-item--leaf" data-rpl-main-menu-level-3><a class="rplc-main-menu__level-3-menu-item-link" href="#" aria-label="Spread the Word">Spread the Word</a></li>
                            <li class="rplc-main-menu__level-3-menu-item rplc-main-menu__level-3-menu-item--leaf" data-rpl-main-menu-level-3><a class="rplc-main-menu__level-3-menu-item-link" href="#" aria-label="Join our Events">Join our Events</a>
                            </li>
                        </ul>
                </li>
                </ul>
                </li>

                <li class="rplc-main-menu__level-1-menu-item rplc-main-menu__level-1-menu-item--type-1" data-rpl-main-menu-level-1>
                    <a class="rplc-main-menu__level-1-menu-item-link rplc-main-menu__level-1-menu-item-link--last" href="{{ route('latest') }}" aria-label="Latest">Latest</a>
                    <button class="rplc-main-menu__level-1-expand-toggle" data-rpl-main-menu-expanding-section-target aria-label="Main Menu Option Expand Toggle"></button>
                    <ul class="rplc-main-menu__level-2">
                        <li class="rplc-main-menu__level-2-menu-item" />
                        <p class="rplc-main-menu__level-2-menu-item-title">News</p>
                        <ul class="rplc-main-menu__level-3">
                            <li class="rplc-main-menu__level-3-menu-item rplc-main-menu__level-3-menu-item--leaf" data-rpl-main-menu-level-3><a class="rplc-main-menu__level-3-menu-item-link" href="#" aria-label="Social Media Highlights">Social Media Highlights</a></li>
                            <li class="rplc-main-menu__level-3-menu-item rplc-main-menu__level-3-menu-item--leaf" data-rpl-main-menu-level-3><a class="rplc-main-menu__level-3-menu-item-link" href="#" aria-label="Humanitarian Insights">Humanitarian Insights</a></li>
                            <li class="rplc-main-menu__level-3-menu-item rplc-main-menu__level-3-menu-item--leaf" data-rpl-main-menu-level-3><a class="rplc-main-menu__level-3-menu-item-link" href="#" aria-label="Success Stories/Videos">Success Stories/Videos</a></li>
                            <li class="rplc-main-menu__level-3-menu-item rplc-main-menu__level-3-menu-item--leaf" data-rpl-main-menu-level-3><a class="rplc-main-menu__level-3-menu-item-link" href="#" aria-label="Events and Campaigns">Events and Campaigns</a></li>
                            <li class="rplc-main-menu__level-3-menu-item rplc-main-menu__level-3-menu-item--leaf" data-rpl-main-menu-level-3><a class="rplc-main-menu__level-3-menu-item-link" href="#" aria-label="News and Announcements">News and Announcements</a></li>
                        </ul>
                    </li>
                </li>
            </ul>
                </li>
                </ul>
            </div>


            <div class="rplc-global-navigation__desktop-trailing-wrapper">
                <div class="rplc-global-navigation__search-icon-wrapper" data-rpl-open-modal="search">
                    <div class="rpla-icon-only-link rpla-icon-only-link--search rpla-icon-only-link--type-one"
                        data-rpla-hover-target aria-label="search" role="search" tabindex='0'>
                        <span class="rpla-icon-only-link__icon-wrapper">
                            <div class="rpla-icon rpla-icon--search rpla-icon--fill-third-party-hover">
                                <svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                                    clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414">
                                    <path
                                        d="M6.053 12.105C2.737 12.105 0 9.368 0 6.053 0 2.737 2.737 0 6.053 0c3.315 0 6.052 2.737 6.052 6.053 0 3.315-2.737 6.052-6.052 6.052zm0-10c-2.158 0-3.948 1.79-3.948 3.948S3.895 10 6.053 10 10 8.21 10 6.053c0-2.158-1.79-3.948-3.947-3.948z"
                                        fill-rule="nonzero" />
                                    <path d="M9.874 8.352l6.18 6.177-1.49 1.49-6.178-6.18 1.488-1.488z"
                                        fill-rule="nonzero" />
                                </svg>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="rplc-global-navigation__desktop-cta-wrapper">
                    <a href="https://dashboard.flutterwave.com/donate/lqpiq8pdjqld"
                        class="rpla-button rpla-button--display-block-single-line rpla-button--size-medium rpla-button--type-one rpla-button--with-icon rpla-button--icon-position-after"
                        role="button">
                        <span class="rpla-button__text">Donate</span>
                        <div class="rpla-button__icon-wrapper">
                            <div class="rpla-icon rpla-icon--heart">
                                
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- mobile down section -->
            <div class="rplc-global-navigation__mobile-secondary-wrapper">
                <div class="rplc-mobile-bottom-menu">
                    <ul class="rplc-mobile-bottom-menu__menu">
                        <li class="rplc-mobile-bottom-menu__menu-item" data-rpl-open-modal="search">
                            <a href="#" class="rpla-link-icon rpla-link-icon--type-five" data-rpla-hover-target
                                aria-label="search">
                                <span class="rpla-link-icon__icon-wrapper">
                                    <div class="rpla-icon rpla-icon--search rpla-icon--fill-gray">
                                        <svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                                            clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414">
                                            <path
                                                d="M6.053 12.105C2.737 12.105 0 9.368 0 6.053 0 2.737 2.737 0 6.053 0c3.315 0 6.052 2.737 6.052 6.053 0 3.315-2.737 6.052-6.052 6.052zm0-10c-2.158 0-3.948 1.79-3.948 3.948S3.895 10 6.053 10 10 8.21 10 6.053c0-2.158-1.79-3.948-3.947-3.948z"
                                                fill-rule="nonzero" />
                                            <path d="M9.874 8.352l6.18 6.177-1.49 1.49-6.178-6.18 1.488-1.488z"
                                                fill-rule="nonzero" />
                                        </svg>
                                    </div>
                                </span>
                                <span class="rpla-link-icon__link-wrapper"><span role="link"
                                        class="rpla-link rpla-link--type-two rpla-link--subtype-no-underline rpla-link--subtype-no-hover-effect">
                                        Search
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li class="rplc-mobile-bottom-menu__menu-item">
                            <a href="{{ route('career') }}" class="rpla-link-icon rpla-link-icon--type-five " data-rpla-hover-target aria-label="careers ">
                                <span class="rpla-link-icon__icon-wrapper ">
                                    <div class="rpla-icon rpla-icon--careers rpla-icon--fill-gray ">
                                        <i class="fa-solid fa-briefcase text-white"></i>
                                    </div>
                                </span>
                                <span class="rpla-link-icon__link-wrapper"><span role="link"
                                        class="rpla-link rpla-link--type-two rpla-link--subtype-no-underline rpla-link--subtype-no-hover-effect">Careers</span></span>
                            </a>
                        </li>
                        <li class="rplc-mobile-bottom-menu__menu-item">
                            <a href="{{ route('volunteer') }}" class="rpla-link-icon rpla-link-icon--type-five" data-rpla-hover-target
                                aria-label="volunteer">
                                <span class="rpla-link-icon__icon-wrapper">
                                    <div class="rpla-icon rpla-icon--volunteer rpla-icon--fill-gray">
                                        <i class="fa-solid fa-handshake-angle"></i>
                                    </div>
                                </span>
                                <span class="rpla-link-icon__link-wrapper"><span role="link"
                                        class="rpla-link rpla-link--type-two rpla-link--subtype-no-underline rpla-link--subtype-no-hover-effect">Volunteer</span></span>
                            </a>
                        </li>
                    </ul>
                    <div class="rplc-mobile-bottom-menu__social-wrapper">
                        <div
                            class="rplm-social-share rplm-social-share--subtype-inverse rplm-social-share--space-evenly rplm-social-share--type-one">
                            <div class="rplm-social-share__icons-wrapper">
                                <div class="rplm-social-share__icon-only-link-wrapper" data-rpla-hover-target>
                                    <a href="https://twitter.com/Haraf_org" target="_blank" class="rpla-icon-only-link rpla-icon-only-link--type-one rpla-icon-only-link--twitter" data-rpla-hover-target aria-label="twitter" tabindex='0'>
                                      <i class="fa-brands fa-square-x-twitter text-light"></i>
                                    </a>
                                </div>
                                <div class="rplm-social-share__icon-only-link-wrapper" data-rpla-hover-target>
                                    <a href="https://facebook.com/HARAF.ORG" target="_blank" class="rpla-icon-only-link rpla-icon-only-link--type-one rpla-icon-only-link--facebook" data-rpla-hover-target aria-label="facebook" tabindex='0'>
                                      <i class="fa-brands fa-facebook text-light"></i>
                                    </a>
                                </div>
                                <div class="rplm-social-share__icon-only-link-wrapper" data-rpla-hover-target>
                                    <a href="https://instagram.com/haraf_org/" target="_blank" class="rpla-icon-only-link rpla-icon-only-link--type-one rpla-icon-only-link--instagram" data-rpla-hover-target aria-label="instagram" tabindex='0'>
                                      <i class="fa-brands fa-square-instagram text-light"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            
        </div>
    </div>
</nav>