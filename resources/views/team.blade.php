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
                                            <div class="rpla-slug rpla-slug--size-large" tabindex="0">Who we are</div>
                                            <h1 class="rpla-responsive-title rpla-responsive-title--long" tabindex="0">
                                                Meet Our Team
                                            </h1>
                                        </div>
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
    <div class="container team_inner">

        <div class="row">

            {{-- mr galaxi --}}
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="team_item">
                    <div>
                        <img class="img-fluid team-member-image" src="{{ asset('assets/images/team/Executive-Director.jpg') }}" alt="Mrs Galaxy">
                    </div>
                    <div class="team-data-center">
                        <h2>Mrs Galaxy</h2>
                        <p>Executive Director</p>
                        <div class="">
                            <a href="https://facebook.com/gali.thami.3" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#" class="active" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                            <a href="mailto:galithami@haraf.org.ng"><i class="fa fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Daniel Akila --}}
            <div class="col-lg-4 col-md-4 col-sm-12 ">
                <div class="team_item">
                    <div>
                        <img class="img-fluid team-member-image" src="{{ asset('assets/images/team/Daniel-Akila.jpg') }}" alt="Daniel Akila">
                    </div>
                    <div class="team-data-center">
                        <h2>Daniel Akila</h2>
                        <p>Director of Grants and Operations</p>
                        <div class="">
                            <a href="https://facebook.com/daniel.akila" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#" class="active" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                            <a href="mailto:danielakila@haraf.org.ng"><i class="fa fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Abel Bake --}}
            <div class="col-lg-4 col-md-4 col-sm-12 ">
                <div class="team_item">
                    <div>
                        <img class="img-fluid team-member-image" src="{{ asset('assets/images/team/Abel-Bake.jpg') }}" alt="Abel Bake">
                    </div>
                    <div class="team-data-center">
                        <h2>Abel Bake</h2>
                        <p>Food Security and Livelihood Coordinator</p>
                        <div>
                            <a href="https://facebook.com/abel.bake" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#" class="active" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                            <a href="mailto:abelbake@haraf.org.ng"><i class="fa fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Harrison Joshua --}}
            <div class="col-lg-4 col-md-4 col-sm-12 ">
                <div class="team_item">
                    <div>
                        <img class="img-fluid team-member-image" src="{{ asset('assets/images/team/harrison.jpeg') }}" alt="Harrison Joshua">
                    </div>
                    <div class="team-data-center">
                        <h2>Harrison Joshua</h2>
                        <p>Finance Officer</p>
                        <div>
                            <a href="#" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#" class="active" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                            <a href="mailto:harrisonjoshua@haraf.org.ng"><i class="fa fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Bibiana Adams --}}
            <div class="col-lg-4 col-md-4 col-sm-12 ">
                <div class="team_item">
                    <div>
                        <img class="img-fluid team-member-image" src="{{ asset('assets/images/team/Bibiana-Adams.jpg') }}" alt="Bibiana Adams">
                    </div>
                    <div class="team-data-center">
                        <h2>Bibiana Adams</h2>
                        <p>Protection Coordinator</p>
                        <div>
                            <a href="https://facebook.com/bibiana.adams.79" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#" class="active" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                            <a href="mailto:bibiana@haraf.org.ng"><i class="fa fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Jeremy Owe --}}
            <div class="col-lg-4 col-md-4 col-sm-12 ">
                <div class="team_item">
                    <div>
                        <img class="img-fluid team-member-image" src="{{ asset('assets/images/team/Jeremy-Owe.jpg') }}" alt="Jeremy Owe">
                    </div>
                    <div class="team-data-center">
                        <h2>Jeremy Owe</h2>
                        <p>Shelter/NFI’s Officer & Admin Assistant</p>
                        <div>
                            <a href="https://facebook.com/jeremyowe" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#" class="active" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                            <a href="mailto:jeremyjery@haraf.org.ng"><i class="fa fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Unwana Ekarika --}}
            <div class="col-lg-4 col-md-4 col-sm-12 ">
                <div class="team_item">
                    <div>
                        <img class="img-fluid team-member-image" src="{{ asset('assets/images/team/wanna.jpeg') }}" alt="Unwana Ekarika">
                    </div>
                    <div class="team-data-center">
                        <h2>Unwana Ekarika</h2>
                        <p>Communications & ICT Lead</p>
                        <div>
                            <a href="https://web.facebook.com/unwana.ekarika.3" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#" class="active" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                            <a href="mailto:unwanaekarika@haraf.org.ng"><i class="fa fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Wilmot Williams  --}}
            <div class="col-lg-4 col-md-4 col-sm-12 ">
                <div class="team_item">
                    <div>
                        <img class="img-fluid team-member-image" src="{{ asset('assets/images/team/Wilmot-Williams.jpg') }}" alt="Wilmot Williams">
                    </div>
                    <div class="team-data-center">
                        <h2>Wilmot Williams </h2>
                        <p>Education Officer</p>
                        <div>
                            <a href="https://facebook.com/wilmot.williams" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#" class="active" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                            <a href="mailto:wimotwilliams@haraf.org.ng"><i class="fa fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Joy Magomya  --}}
            <div class="col-lg-4 col-md-4 col-sm-12 ">
                <div class="team_item">
                    <div>
                        <img class="img-fluid team-member-image" src="{{ asset('assets/images/team/Joy-Magomya.jpg') }}" alt="Joy Magomya">
                    </div>
                    <div class="team-data-center">
                        <h2>Joy Magomya</h2>
                        <p>Protection Case Management Officer</p>
                        <div>
                            <a href="https://facebook.com/joypiri.magomya" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#" class="active" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                            <a href="mailto:magomyajoy@gmail.com"><i class="fa fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Elias Kwankanapwa  --}}
            <div class="col-lg-4 col-md-4 col-sm-12 ">
                <div class="team_item">
                    <div>
                        <img class="img-fluid team-member-image" src="{{ asset('assets/images/team/elias.png') }}" alt="Elias Kwankanapwa">
                    </div>
                    <div class="team-data-center">
                        <h2>Elias Kwankanapwa</h2>
                        <p>Livelihood Technical Assistant (Vegetable/ Garden/ Tree Planting)</p>
                        <div>
                            <a href="https://facebook.com/itsbigdash" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#" class="active" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                            <a href="mailto:kwankanapwaelias@haraf.org.ng"><i class="fa fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Alkali Hapiness Zogbada  --}}
            <div class="col-lg-4 col-md-4 col-sm-12 ">
                <div class="team_item">
                    <div>
                        <img class="img-fluid team-member-image" src="{{ asset('assets/images/team/Alkali-Hapiness-Zogbada.jpg') }}" alt="Alkali Hapiness Zogbada">
                    </div>
                    <div class="team-data-center">
                        <h2>Alkali Hapiness Zogbada</h2>
                        <p>Secretary</p>
                        <div>
                            <a href="https://facebook.com/happy.alkaliZogbnada" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#" class="active" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                            <a href="mailto:happiness@haraf.org.ng"><i class="fa fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Eric Thami  --}}
            <div class="col-lg-4 col-md-4 col-sm-12 ">
                <div class="team_item">
                    <div>
                        <img class="img-fluid team-member-image" src="{{ asset('assets/images/team/Eric-Thami.jpg') }}" alt="Eric Thami">
                    </div>
                    <div class="team-data-center">
                        <h2>Eric Thami</h2>
                        <p>Maintainance Officer</p>
                        <div>
                            <a href="https://facebook.com/eric.thami" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#" class="active" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                            <a href="mailto:erictd@haraf.org.ng"><i class="fa fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Bamanga Magga  --}}
            <div class="col-lg-4 col-md-4 col-sm-12 ">
                <div class="team_item">
                    <div>
                       <img class="img-fluid team-member-image" src="{{ asset('assets/images/team/Bamanga-Magga.jpg') }}" alt="Bamanga Magga">
                    </div>
                    <div class="team-data-center">
                        <h2>Bamanga Magga</h2>
                        <p>M & E Officer</p>
                        <div>
                            <a href="https://facebook.com/magga.bamanga.3" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#" class="active" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                            <a href="mailto:bamanga@haraf.org.ng"><i class="fa fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Joshua Ugorji  --}}
            <div class="col-lg-4 col-md-4 col-sm-12 ">
                <div class="team_item">
                    <div>
                       <img class="img-fluid team-member-image" src="{{ asset('assets/images/team/Joshua-Ugorji.jpg') }}" alt="Joshua Ugorji">
                    </div>
                    <div class="team-data-center">
                        <h2>Joshua Ugorji</h2>
                        <p>Field Project Officer</p>
                        <div>
                            <a href="https://facebook.com/joshua.ugorji.1" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#" class="active" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                            <a href="mailto:joshuaugorji@haraf.org.ng"><i class="fa fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Nancy Jika  --}}
            <div class="col-lg-4 col-md-4 col-sm-12 ">
                <div class="team_item">
                    <div>
                       <img class="img-fluid team-member-image" src="{{ asset('assets/images/team/nancy.jpeg') }}" alt="Nancy Jika">
                    </div>
                    <div class="team-data-center">
                        <h2>Nancy Jika</h2>
                        <p>Field Project Officer</p>
                        <div>
                            <a href="https://facebook.com/nancy.jika" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#" class="active" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                            <a href="mailto:nancyjika@haraf.org.ng"><i class="fa fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Janet Samuel  --}}
            <div class="col-lg-4 col-md-4 col-sm-12 ">
                <div class="team_item">
                    <div>
                       <img class="img-fluid team-member-image" src="{{ asset('assets/images/team/janet.jpeg') }}" alt="Janet Samuel">
                    </div>
                    <div class="team-data-center">
                        <h2>Janet Samuel</h2>
                        <p>Finance Assistant</p>
                        <div>
                            <a href="https://facebook.com/profile.php?id=100074083944684" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#" class="active" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                            <a href="mailto:janetsamuel@haraf.org.ng"><i class="fa fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Legi Lois  --}}
            <div class="col-lg-4 col-md-4 col-sm-12 ">
                <div class="team_item">
                    <div>
                       <img class="img-fluid team-member-image" src="{{ asset('assets/images/team/lois.png') }}" alt="Legi Lois">
                    </div>
                    <div class="team-data-center">
                        <h2>Legi Lois</h2>
                        <p>Compliance Officer</p>
                        <div>
                            <a href="https://facebook.com/biyapo.achesim" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#" class="active" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                            <a href="mailto:achesimbiyapo@haraf.org.ng"><i class="fa fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Frama Francis Japan  --}}
            <div class="col-lg-4 col-md-4 col-sm-12 ">
                <div class="team_item">
                    <div>
                       <img class="img-fluid team-member-image" src="{{ asset('assets/images/team/Frama-Francis-Japan.jpg') }}" alt="Frama Francis Japan">
                    </div>
                    <div class="team-data-center">
                        <h2>Frama Francis Japan</h2>
                        <p>Logistics Officer</p>
                        <div>
                            <a href="https://facebook.com/frama.francis2" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#" class="active" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                            <a href="mailto:framafrancis@haraf.org.ng"><i class="fa fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Douram Haggai  --}}
            <div class="col-lg-4 col-md-4 col-sm-12 ">
                <div class="team_item">
                    <div>
                       <img class="img-fluid team-member-image" src="{{ asset('assets/images/team/douram.jpg') }}" alt="Douram Haggai">
                    </div>
                    <div class="team-data-center">
                        <h2>Douram Haggai</h2>
                        <p>Security Officer</p>
                        <div>
                            <a href="https://facebook.com/wayne.haggai" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#" class="active" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                            <a href="mailto:douramhaggai@haraf.org.ng"><i class="fa fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Abiodun Kolapo  --}}
            <div class="col-lg-4 col-md-4 col-sm-12 ">
                <div class="team_item">
                    <div>
                       <img class="img-fluid team-member-image" src="{{ asset('assets/images/team/abiodun.png') }}" alt="Abiodun Kolapo">
                    </div>
                    <div class="team-data-center">
                        <h2>Abiodun Kolapo</h2>
                        <p>Livelihood Technical Assistant (Aquaculture & Livestock)</p>
                        <div>
                            <a href="#" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#" class="active" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                            <a href="mailto:abiodun.kolapo@haraf.org.ng"><i class="fa fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>







        </div>

    </div>
@endsection
