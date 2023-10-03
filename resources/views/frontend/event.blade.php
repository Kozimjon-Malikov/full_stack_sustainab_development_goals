@extends('frontend.app')
@section('content')
    <section id="home" class="page-banner-area bg_cover bg_cover2"
        style="background-image: url({{ asset('frontend/assets/images/land.jpg') }})">
        <div class="container">
            <div class="page-banner-content text-center">
                <ul class="breadcrumb justify-content-center">
                    {{-- <li class="breadcrumb-item"><a href="/">{{ __('words.home') }}</a></li> --}}
                </ul>
                <h2 class="title" style="color: #fff;">
                    {{ $viewEvent->{'title_' . app()->getLocale()} }}
                </h2>
            </div>
        </div>
    </section>
    <div class="banner">
        <div class="banner-main" style="background: #c2a319;">
            <div class="banner-left">
                <p class="banner-main__text wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s"
                    style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInUpBig;">
                    Barqaror rivojlanish maqsadi</p>
                <h1 class="banner-main__title banner-main__title1 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s"
                    style="visibility: visible; animation-duration: 1s; animation-delay: 0.8s; animation-name: fadeInUpBig;">
                    2</h1>
                <h2 class="banner-main__title banner-main__title2 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s"
                    style="visibility: visible; animation-duration: 1s; animation-delay: 0.9s; animation-name: fadeInUpBig;">
                    {{ $viewEvent->{'title_' . app()->getLocale()} }}</h2>
                <p class="banner-main__text wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s"
                    style="visibility: visible; animation-duration: 1s; animation-delay: 1.1s; animation-name: fadeInUpBig;">
                    Ochlikni yo‘q qilish, ozuqaviy xavfsizlikni ta’minlash va oziqlanishni yaxshilash hamda qishloq
                    xo‘jaligining barqaror rivojlanishiga yordamlashish</p>
            </div>
            <div class="banner-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="1.1s"
                style="visibility: visible; animation-duration: 1s; animation-delay: 1.1s; animation-name: fadeInRight;">
                <img src="assets/images/banner/SDG-2.png" alt="">
            </div>
        </div>
        <div class="banner-line">
            <span style="color: #c2a319;">2</span>
            <div class="banner-inner__line" style="background: #c2a319;"></div>
        </div>
    </div>
    <div class="container">
        <section>
            <div class="container">
                <div>
                    <h2 class="blog-main__title blog-main__title_info">{{ $viewEvent->{'title_' . app()->getLocale()} }}</h2>
                </div>
                <div class="blog-details-content">
                    {!! $viewEvent->{'editor_' . app()->getLocale()} !!}
                </div>
            </div>
        </section>
        <div>
            <a href="/" class="btn btn-info my-2">
                {{ __('words.ortga') }}</a>
        </div>
        <div class="blog-details-meta">
            <div class="blog-details-share">
                <ul class="share">
                    <li><a href="https://t.me/farpipress" class="wow fadeInRight" data-wow-duration="1s"
                            data-wow-delay="0.1s"
                            style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInRight;"><i
                                class="fab fa-telegram"></i></a></li>
                    <li><a href="https://www.facebook.com/Farpi_press-110544218090177/?ref=pages_you_manage"
                            class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s"
                            style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInRight;"><i
                                class="fab fa-facebook-square"></i></a></li>
                    <li><a href="https://www.youtube.com/c/FarpiLive" class="wow fadeInRight" data-wow-duration="1s"
                            data-wow-delay="0.3s"
                            style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInRight;"><i
                                class="fab fa-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com/farpi_press/" class="wow fadeInRight" data-wow-duration="1s"
                            data-wow-delay="0.4s"
                            style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInRight;"><i
                                class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="slider-row">
        @forelse ($cards as $card)
            <a class="slider-card" href="/"
                style="background-image: url({{ asset('upload/' . $card->{'rasm_' . app()->getLocale()}) }})">
                <div class="card-inner">
                    <span class="goal-number">{{ $loop->index + 1 }}</span>
                    <h3 class="goal-title">{{ $card->{'name_' . app()->getLocale()} }}</h3>
                    <p class="goal-text">{{ $card->{'title_' . app()->getLocale()} }}</p>
                    <button type="button" class="btn btn-goal">{{ __('words.more') }}</button>
                </div>
                <img src="{{ asset('upload/' . $card->{'rasmbg_' . app()->getLocale()}) }}" alt="goal logo" class="goal-logo">
            </a>
        @empty
            <p>no data</p>
        @endforelse
    </div>
@endsection
