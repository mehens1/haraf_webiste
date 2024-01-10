@extends('layouts.app')


@section('heroSection')
    <div class="rpll-hero-layout-1__image-wrapper">
        <picture class='rpla-art-directed-image rpla-art-directed-image--permit-upscaling'>
            <source srcset="{{ asset('assets/images/contact_hero_primary.jpg') }}" media="all and (min-width: 64.063em)">
            <source srcset="{{ asset('assets/images/contact_hero_primary.jpg') }}"
                media="all and (min-width: 26em) and (max-width: 64em)">
            <source srcset="{{ asset('assets/images/contact_hero_secondary.jpg') }}">
            <img src="{{ asset('assets/images/contact_hero_secondary.jpg') }}" alt="Hero Background" />
        </picture>
    </div>
@endsection

@section('headOver')
    <div class="rpll-hero-layout-1__inner-content-wrapper">
        <div class="rpll-hero-layout-1__text-wrapper">
            <div class="rpll-hero-layout-1__primary-1">
                <div class="rplm-stacked-headline-4">
                    <div class="rpla-slug rpla-slug--size-large" tabindex="0"> Our Location </div>
                    <h1 class="rpla-heading rpla-heading--extra-large">{{ $page_title }}</h1>
                    <div class="rplm-stacked-headline-4__summary-wrapper">
                        <p class="rpla-paragraph" tabindex="0">
                            <a
                                href="https://www.google.com/maps/place/Hope+And+Rural+Aid+Foundation/@9.2451427,12.4490373,17z/data=!4m14!1m7!3m6!1s0x10fc6be032271051:0x52e524e24a59aacf!2sHope+And+Rural+Aid+Foundation!8m2!3d9.2451374!4d12.4516122!16s%2Fg%2F11kpl1z83k!3m5!1s0x10fc6be032271051:0x52e524e24a59aacf!8m2!3d9.2451374!4d12.4516122!16s%2Fg%2F11kpl1z83k?entry=ttu" target="_blank">
                                <i class="fa-solid fa-location-dot"></i>
                                Malamre Quarters, Beside UNHCR Office, Jimeta-Yola, Adamawa State, Nigeria
                            </a>
                        </p>
                        <p class="rpla-paragraph" tabindex="0">
                            <a href="mailto:info@haraf.org.ng"><i class="fa-solid fa-envelope"></i> info@haraf.org.ng</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="rpll-hero-layout-1__secondary-1">
                <div class="rplm-donation-teaser">
                    <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=350&amp;height=300&amp;hl=en&amp;q=hope and rural aid foundation&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div><style>.mapouter{position:relative;text-align:right;width:100%;height:300px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:300px;}.gmap_iframe {height:300px!important;}</style></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
@endsection
