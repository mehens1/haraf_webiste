@extends('layouts.app')

@section('heroSection')
    <div class="rpll-hero-layout-1__image-wrapper">
        <picture class='rpla-art-directed-image rpla-art-directed-image--permit-upscaling'>
            <source srcset="{{ asset('assets/images/home_hero_primary.jpg') }}" media="all and (min-width: 64.063em)">
            <source srcset="{{ asset('assets/images/home_hero_primary.jpg') }}"
                media="all and (min-width: 26em) and (max-width: 64em)">
            <source srcset="{{ asset('assets/images/home_hero_secondary.jpg') }}">
            <img src="{{ asset('assets/images/home_hero_secondary.jpg') }}" alt="Hero Background" />
        </picture>
    </div>
@endsection

@section('headOver')
    <div class="rpll-hero-layout-1__inner-content-wrapper">
        <div class="rpll-hero-layout-1__text-wrapper">
            <div class="rpll-hero-layout-1__primary-1">
                <div class="rplm-stacked-headline-4">
                    <div class="rpla-slug rpla-slug--size-large" tabindex="0"> About </div>
                    <h1 class="rpla-heading rpla-heading--extra-large">Hope and Rural Aid Foundation (HARAF)</h1>
                    <div class="rplm-stacked-headline-4__summary-wrapper">
                        <p class="rpla-paragraph" tabindex="0">
                            Hope and rural aid foundation is a local non-governmental organisation that works nation-wide with major focus in Northeast Nigeria to promote health, education, food security and livelihood; supporting the needs of internally displaced persons, and serving the vulnerable. We have a workforce of about 25 and a growing community of more than 75 volunteers cut across our different working sectors within the North eastern states of Nigeria.
                        </p>
                    </div>
                </div>
            </div>
            <div class="rpll-hero-layout-1__secondary-1">
                <img src="{{ asset('assets/images/full_logo.png') }}" alt="">
                
                <div class="rplm-stacked-headline-4__summary-wrapper">
                    <div class="rplc-call-to-action-2__button-wrapper">
                        <a href="{{ route('history') }}">
                            <button
                                class="rpla-button rpla-button--display-block-mobile-only rpla-button--size-medium rpla-button--type-one">
                                <span class="rpla-button__text"> Read more </span></button>

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div id="31011" class="rplc-infographic-standard rplc-infographic-standard--background-transparent">
        <div class="rplm-section-heading">
            <div class="rplm-section-heading__title-icon-wrapper">
                <h2 class="rplm-section-heading__title"> Our Partners </h2>
            </div>
            <div class="">
                <p>At the heart of our humanitarian mission lies the invaluable support of our
                    esteemed partners. Their unwavering commitment and shared vision are instrumental in driving positive
                    change across communities and uplifting those in need. Together, we form a united front, dedicated to
                    making a meaningful impact on the world.
                    Join us in our mission to create positive change. Explore our partners' contributions and consider
                    becoming part of this collective force for good.</p>
            </div>
        </div>

        <div class="container">

            <div class="col-lg-12 col-md-12">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <img class="img-circle" src="{{ asset('assets/images/partners/vso.jpg') }}"
                            alt="Volunteer Service Organisation" height="140">
                        <h4>Volunteer Service Organisation</h4>
                    </div>
                    <!-- /.col-lg-4 -->
                    <div class="col-lg-2 col-md-2">
                        <img class="#" src="{{ asset('assets/images/partners/wfp.png') }}" alt="World Food Programme"
                            height="140">
                        <h4>World Food Programme</h4>
                    </div>
                    <!-- /.col-lg-4 -->
                    <div class="col-lg-2 col-md-2">
                        <img class="img-circle" src="{{ asset('assets/images/partners/unhcr2.jpg') }}" alt="UNHCR"
                            height="140">
                        <h2>UNHCR</h2>
                    </div>
                    <!-- /.col-lg-4 -->
                    <div class="col-lg-2 col-md-2">
                        <img class="img-circle" src="{{ asset('assets/images/partners/unicef2.png') }}" alt="UNICEF"
                            width="140" height="140">
                        <h2>UNICEF</h2>
                    </div>
                    <!-- /.col-lg-4 -->
                    <div class="col-lg-2 col-md-2">
                        <img class="img-circle" src="{{ asset('assets/images/partners/vso.jpg') }}"
                            alt="Food and Agriculture Organisation" width="140" height="140">
                        <h4>Food and Agriculture Organisation</h4>
                    </div>
                    <!-- /.col-lg-4 -->
                    <div class="col-lg-2 col-md-2">
                        <img class="img-circle" src="{{ asset('assets/images/partners/SUBEB1.jpg') }}"
                            alt="Universal Basic Education Board" width="140" height="140">
                        <h4>Universal Basic Education Board</h4>
                    </div>
                    <!-- /.col-lg-4 -->

                </div>
            </div>

        </div>
    </div>
    <div id="31027" class="rplc-news-and-features">
        <div class="rplm-section-heading">
            <div class="rplm-section-heading__title-icon-wrapper">
                <h2 class="rplm-section-heading__title"> News & features
                </h2>
            </div>
        </div>


        <div class="rplc-news-and-features__content" data-rpl-state-target-contextual-menu>
            <ul class="rpll-two-column-list rpll-two-column-list--highlighted rpll-two-column-list--respond-laptop">

                {{-- check if a record exist --}}
                @if ($last_record)
                    <li class="rpll-two-column-list__item">
                        <div class="rplc-teaser-highlighted">
                            <a href="#" class="rplc-teaser-highlighted__wrapper-link"
                                aria-label="What is President Biden &#039;s &#039; asylum ban &#039;? "
                                data-rpla-hover-target data-rpl-state-target-contextual-menu>
                                <div class="rplc-teaser-highlighted__image-wrapper" tabindex="0">
                                    <img class='rpla-responsive-image' src="{{ asset($last_record['image_location']) }}" alt="{{ $last_record['title'] }}"
                                        srcset="{{ asset($last_record['image_location']) }}"
                                        sizes="(min-width: 1208px) 976px, (min-width: 321px) calc(100vw-2rem), 320px" />
                                </div>
                                <div class="rplc-teaser-highlighted__text-wrapper" tabindex="0">
                                    <div class="rpla-slug"> {{ $last_record['created_at'] }} </div>
                                    <h3 class="rpla-heading rpla-heading--extra-large">{{ $last_record['title'] }}</h3>
                                    <div class="rplc-teaser-highlighted__summary">{{ substr($last_record['description'], 0, 80) }}...</div>
                                    <div role="link" class="rpla-link rpla-link--type-one rpla-link--subtype-inverse">
                                        Learn
                                        more
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>
                @endif




                @foreach ($posts as $post)
                    <li class="rpll-two-column-list__item">
                        <div class="rplc-teaser-standard">
                            <a href="/article/HARAFs-90-year-journey-innovative-solutions"
                                class="rplc-teaser-standard__wrapper-link"
                                aria-label="The HARAF&#039;s 90-year journey of innovative solutions"
                                data-rpla-hover-target data-rpl-state-target-contextual-menu>
                                <div class="rplc-teaser-standard__image-wrapper" tabindex="0">
                                    <img class='rpla-responsive-image'
                                        src="{{ asset($post['image_location']) }}"
                                        alt="{{ $post['title'] }}s" srcset="{{ asset($post['image_location']) }}"
                                        sizes="(min-width: 1208px) 592px, (min-width: 641px) calc(100vw-3rem), (min-width: 321px) calc(100vw-2rem), 320px" />
                                </div>
                                <div class="rplc-teaser-standard__text-wrapper">
                                    <div class="rpla-slug"> {{ $post['tag_id'] }} </div>
                                    <div class="rplc-teaser-standard__title">
                                        <h3 class="rpla-heading rpla-heading--medium-large">{{ $post['title'] }}</h3>
                                    </div>
                                    <div class="rplc-teaser-standard__cta-wrapper">
                                        <div role="link" class="rpla-link rpla-link--type-one"> Read more... </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>
                @endforeach

            </ul>
        </div>
        <div class="rplc-news-and-features__more-wrapper">
            <div class="rplm-more">
                <a href="{{ route('latest') }}" role=" link " class="rpla-link rpla-link--type-three ">See the latest</a>
            </div>
        </div>
    </div>
    <div id="33068" class="rplc-fixed-marketing-banner ">
        <div id="42357"
            class="rplc-call-to-action-2 rplc-call-to-action-2--background-black rplc-call-to-action-2--image-position-left ">
            <div class="rplc-call-to-action-2__ content " data-rpl-state-target-contextual-menu>
                <a href="https://dashboard.flutterwave.com/donate/lqpiq8pdjqld"
                    class="rplc-call-to-action-2__content-wrapper" aria-label="Help children rebuild their lives"
                    data-rpla-hover-target>
                    <div class="rplc-call-to-action-2__image-wrapper"><img class='rpla-responsive-image'
                            src="assets/images/hero_image_one.jpg" alt=""
                            srcset="assets/images/hero_image_one.jpg"
                            sizes="(min-width: 1240px) 696px,(min-width: 321px) 100vw,320px" />
                    </div>
                    <div class="rplc-call-to-action-2__message-wrapper">
                        <div class="rplc-call-to-action-2__text-wrapper">
                            <h3 class="rplc-call-to-action-2__title">Your generous gift can make a generational impact</h3>
                            {{-- <div class="rplc-call-to-action-2__subtitle"> With the right support, children and young adults can change their own family’ s futures and uplift entire communities.Your generosity can provide lasting change for families for years to come.For a limited time, all donations will be matched.
                            </div> --}}
                        </div>
                        <div class="rplc-call-to-action-2__button-wrapper">
                            <button
                                class="rpla-button rpla-button--display-block-mobile-only rpla-button--size-medium rpla-button--type-one">
                                <span class="rpla-button__text"> Donate Now </span></button>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div id="17074" class="rplc-quote">
        <div class="rplm-section-heading">
            <div class="rplm-section-heading__title-icon-wrapper">
                <h2 class="rplm-section-heading__title ">Why HARAF</h2>
            </div>
        </div>
        <div class="rplc-quote__content" data-rpl-state-target-contextual-menu>
            <div class="rplc-quote__image-text-wrapper ">

                <div class="container why-haraf-content">
                    <div class="row">

                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="content">
                                <div class="message">
                                    HARAF has shown strength in conducting sensitization on beneficiary entitlement and monitor the transfer process in collaboration with financial service providers
                                    HARAF has demonstrated strong capacity in ensuring that In-kind and cash were distributed to intended communities and beneficiaries only through an effective registration and verification
                                    HARAF team were always available to support field mission and facilitating access to monitoring. 

                                </div>
                                <hr>
                                <div class="title">
                                    <h6 class="text-primary">World Food Programme(WFP)</h6>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="content">
                                <div class="message">
                                    We have found Hope And Rural Aid Foundation as a professional and efficient organization. Hope And Rural Aid Foundation helped us procure government permission at the local level. Similarly, they also helped us acquire skilled and semi-skilled human resources, and procure relief materials. We found Hope And Rural Aid Foundation as an efficient social mobilizer and in good terms with the local and central government.
                                    We confidently recommend Hope And Rural Aid Foundation as an affable, efficient and reliable partner, and expert in their field.    
                                </div>
                                <hr>
                                <div class="title">
                                    <h6 class="text-primary">Christian Aid Ministries</h6>
                                    <span>P.O. Box 360
                                        Berlin, Ohio, USA 44610</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                {{-- <div class="rplc-quote__image-wrapper ">
                    <img class='rpla-responsive-image' src="{{ asset('assets/images/team/Executive-Director.jpg') }}"
                        alt="ALT TEXT" srcset="{{ asset('assets/images/team/Executive-Director.jpg') }}"
                        style="width:25rem" />
                </div>
                <div class="rplc-quote__text-wrapper">
                    <div class="rplc-quote__icon-wrapper">
                        <div class="rpla-icon rpla-icon--quote-mark rpla-icon--fill-branded">
                            <i class="fa-solid fa-quote-left" style="font-size: 3em;"></i>
                        </div>
                    </div>
                    <div class=" rplc-quote__text-inner-wrapper ">
                        <blockquote class="rplc-quote__quote">
                            <p class="rplc-quote__quote-text ">
                                I support HARAF because I believe everyone should have an opportunity to seek a
                                better future for themselves. My family had that opportunity and I’m so very
                                grateful for it.
                            </p>
                            <div class="rplc-quote__attribution ">
                                <div class="rplc-quote__attributed-person ">Galaxy</div>
                                <div class="rplc-quote__attributed-person-role ">Executive Director</div>
                            </div>
                        </blockquote>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>







    <div id="31011" class="rplc-infographic-standard rplc-infographic-standard--background-transparent">
        <div class="rplm-section-heading">
            <div class="rplm-section-heading__title-icon-wrapper">
                <h2 class="rplm-section-heading__title"> Our Social-Media Feed</h2>
            </div>
            <div class="rpla-paragraph">
                {{-- <p class="rpla-paragraph">Little appreciation text for the partners before mentioning them will be nice. </p> --}}
                &#13;
            </div>
        </div>

        {{-- <div class="container bg-muted">

            <div class="row">

                <div class="col-4">
                    <h2 class="rplm-section-heading__title"> Facebook</h2>
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FHARAF.ORG%2F&tabs=timeline&width=350&height=500&small_header=false&adapt_container_width=false&hide_cover=false&show_facepile=true&appId" width="350" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </div>

                <div class="col-4">
                    <h2 class="rplm-section-heading__title"> Instagram</h2>
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FHARAF.ORG%2F&tabs=timeline&width=350&height=500&small_header=false&adapt_container_width=false&hide_cover=false&show_facepile=true&appId" width="350" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </div>

                <div class="col-4">
                    <h2 class="rplm-section-heading__title"> Twitter</h2>
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FHARAF.ORG%2F&tabs=timeline&width=350&height=500&small_header=false&adapt_container_width=false&hide_cover=false&show_facepile=true&appId" width="350" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </div>
                

            </div>
            

        </div> --}}

        <div class="container">

            <div class="social-feed">
                <a class="twitter-timeline" href="https://twitter.com/Haraf_org?ref_src=twsrc%5Etfw">Tweets by
                    Haraf_org</a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>

        </div>

    </div>
@endsection
