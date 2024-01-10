@extends('layouts.app')


@section('heroSection')
    <br><br><br>

    <div class="rpll-page rpll-page--with-standard-separator" data-page-content-lang="en">
        <div class="rpll-page__hero-wrapper">
            <div class="rplc-hero-basic rplc-hero-basic--transparent">
                <div class="rplc-hero-basic__content">
                    <div
                        class="rpll-hero-layout-1 rpll-hero-layout-1--transparent rpll-hero-layout-1--no-image rpll-hero-layout-1--no-second-blocks">
                        <div class="rpll-hero-layout-1__inner-content-wrapper">
                            <div class="rpll-hero-layout-1__text-wrapper">
                                <div class="rpll-hero-layout-1__primary-1">
                                    <div class="rplc-hero-basic__headline-treatment-wrapper">
                                        <div class="rplm-stacked-headline-2 rplm-stacked-headline-2--type-one">
                                            <div class="rpla-slug rpla-slug--size-large" tabindex="0">Latest News & </div>
                                            <h1 class="rpla-responsive-title rpla-responsive-title--long" tabindex="0">
                                                Updates
                                            </h1>
                                        </div>
                                        Get the latest news, photos and videos from us directly on humanitarian activities
                                        and how we impact.
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('headOver')
@endsection

@section('content')
    <div class="rplc-related-news-and-features">
        <div class="rplm-section-heading">
            <div class="rplm-section-heading__title-icon-wrapper">
                <h2 class="rplm-section-heading__title">News & features</h2>
            </div>
        </div>
        <div class="rplc-related-news-and-features__content">
            <ul class="rpll-two-column-list rpll-two-column-list--respond-desktop">

               
                @foreach ($posts as $post)
                    <li class="rpll-two-column-list__item">
                        <div class="rplc-teaser-standard">
                            <a href="#" class="rplc-teaser-standard__wrapper-link"
                                aria-label="  How to help after the floods in Libya" data-rpla-hover-target
                                data-rpl-state-target-contextual-menu>
                                <div class="rplc-teaser-standard__image-wrapper" tabindex="0">
                                    <img class='rpla-responsive-image' src="{{ asset($post['image_location']) }}"
                                        alt="{{ $post['title'] }}"
                                        srcset="{{ asset($post['image_location']) }}"
                                        sizes="(min-width: 1208px) 592px, (min-width: 641px) calc(100vw - 3rem), (min-width: 321px) calc(100vw - 2rem), 320px" />
                                </div>
                                <div class="rplc-teaser-standard__text-wrapper">
                                    <div class="rpla-slug">{{ \Carbon\Carbon::parse($post['created_at'])->format('F j, Y h:i A') }}</div>
                                    <div class="rplc-teaser-standard__title">
                                        <h3 class="rpla-heading rpla-heading--medium-large">{{ $post['title'] }}</h3>
                                    </div>
                                    <div class="rplc-teaser-standard__cta-wrapper">
                                        <div role="link" class="rpla-link rpla-link--type-one">Read more...</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>



        <ul class="pagination justify-content-center p-4">

            @if ($posts->previousPageUrl())
                <li class="page-item">
                    <a class="page-link" href="{{ $posts->previousPageUrl() }}" tabindex="-1" aria-disabled="true"><</a>
                </li>
            @else
                <li class="page-item disabled">
                    <span class="page-link"><</span>                        
                </li>
            @endif

            <!-- Numbered Page Links -->
            @for ($i = 1; $i <= $posts->lastPage(); $i++)
                <li class="page-item {{ $i == $posts->currentPage() ? 'active' : '' }}">
                    <a class="page-link" href="{{ $posts->url($i) }}">{{ $i }}</a>
                </li>
            @endfor

            @if ($posts->nextPageUrl())
                <li class="page-item">
                    <a class="page-link" href="{{ $posts->nextPageUrl() }}">></a>
                </li>
            @else
                <li class="page-item disabled">
                    <span class="page-link">></span>
                </li>
            @endif
        </ul>


    </div>
@endsection
