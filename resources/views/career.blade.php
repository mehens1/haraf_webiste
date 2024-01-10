@extends('layouts.app')


@section('heroSection')
    <div class="rpll-hero-layout-1__image-wrapper">
        <picture class='rpla-art-directed-image rpla-art-directed-image--permit-upscaling'>
            <source srcset="{{ asset('assets/images/career_hero_primary.jpg') }}" media="all and (min-width: 64.063em)">
            <source srcset="{{ asset('assets/images/career_hero_primary.jpg') }}"
                media="all and (min-width: 26em) and (max-width: 64em)">
            <source srcset="{{ asset('assets/images/career_hero_secondary.jpg') }}">
            <img src="{{ asset('assets/images/career_hero_secondary.jpg') }}" alt="Hero Background" />
        </picture>
    </div>
@endsection

@section('headOver')
    <div class="rpll-hero-layout-1__inner-content-wrapper">
        <div class="rpll-hero-layout-1__text-wrapper">
            <div class="rpll-hero-layout-1__primary-1">
                <div class="rplm-stacked-headline-4">
                    <div class="rpla-slug rpla-slug--size-large" tabindex="0"> Join Us </div>
                    <h1 class="rpla-heading rpla-heading--extra-large">{{ $page_title }}</h1>
                    <div class="rplm-stacked-headline-4__summary-wrapper">
                        <p class="rpla-paragraph" tabindex="0"></p>
                    </div>
                </div>
            </div>


            <div class="rpll-hero-layout-1__secondary-1">
                <div role="button" class="rpla-convertible-link-button rpla-convertible-link-button--type-one">
                    {{-- <span class="rpla-convertible-link-button__text">Career login </span> --}}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
@endsection
