@extends('frontend.app')
@section('content')
    <div id="preloader" class="NaN" style="display: none;">
        <div class="wrap">
            <h1>ungoals</h1>
        </div>
        <p class="preloader-text__inner">Fergana polytechnic institute<span>™</span></p>
    </div>
    <div class="bg-video__play">
        <div class="b-hero__media">
            <video playsinline="" muted="" loop="" autoplay="" class="b-hero__bg-video"
                aria-label="Background Video">
                <source src="{{ asset('frontend/assets/video/1.mp4') }}" type="video/mp4">
            </video>
        </div>
        <!--====== Page Banner Start ======-->
        <section id="home" class="page-banner-area bg_cover">
            <div class="container">
                @forelse ($banner as $item)
                    <div class="page-banner-content text-center">
                        <h2 class="title wow fadeIn" data-wow-duration="1s" data-wow-delay="1.2s"
                            style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeIn;">
                            {{ $item->{'title_'.app()->getLocale()} }}
                        </h2>
                        <p class="home-text wow fadeInUpBig" data-wow-duration="1.3s" data-wow-delay="1.4s"
                            style="visibility: visible; animation-duration: 1.3s; animation-delay: 0.6s; animation-name: fadeInUp;"
                            id="indextext">
                            {{ $item->{'content_'.app()->getLocale()} }}
                        </p>

                    </div>
                @empty
                    <p>no data</p>
                @endforelse
            </div>
        </section>
        <!--====== Page Banner Ends ======-->
    </div>

    <!--====== Articles Start ======-->
    <section id="blog" class="blog-list-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <p class="sub-title" id="subtitle">{{ __('words.title') }}</p>
                        <h2 class="title" id="titlegoal">{{ __('words.maqsadlar') }}</h2>
                    </div>
                </div>
            </div>
            <div class="blog-wrapper">
                <div class="row">
                    @forelse ($categories as $category)
                        <div class="col-lg-3 col-md-6 blog-col" data-tilt>
                            <div class="single-blog wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.1s"
                                style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInUpBig;">
                                <div class="blog-image">
                                    <a href="{{ route('all-events.show', $category->id) }}">
                                        <a class="learnmore" id="learnmore"
                                        href="{{ route('all-events.show', $category->id) }}">Kirish</a>
                                        <img src="{{ asset('upload/' . $category->{'rasm_'.app()->getLocale()}) }}" alt="{{ $category->name }}">
                                    </a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p>no data</p>
                    @endforelse

                </div>
            </div>
        </div>
    </section>
    <!--======  Articles Ends ======-->

    <!--====== Screenshot Start ======-->
    <section id="screenshot" class="screenshot-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <p class="sub-title">{{ __('words.blog') }}</p>
                        <h2 class="title">{{ __('words.news') }}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="container-fluid custom-container">
                <div class="screenshot-active swiper-container">
                   
                        <div class="swiper-wrapper">
                            @forelse ($all_news as $news)
                            <div class="swiper-slide single-screenshot wow fadeInLeftBig" data-wow-duration="1.3s"
                                data-wow-delay="0.4s">
                                <div class="screenshot-img">
                                    <img src="{{ asset('upload/'.$news->{'rasm_'.app()->getLocale()}) }}" style="object-fit: cover" alt="{{ $news->title }}">
                                </div>
                                <div class="screenshot-content">
                                    <h4 class="screenshot-title">
                                        <a href="{{ route('articles.show',$news->id) }}">
                                            {{ $news->{'title_'.app()->getLocale()} }}
                                        </a>
                                    </h4>
                                </div>
                            </div>
                            @empty
                            <p>no news </p>
                            @endforelse
                        </div>
                  
                    <!-- Add Pagination -->
                </div>
                <div style="display: flex;justify-content:center;margin-top:10px">
                        <a href="{{ route('all-articles.index') }}" class="btn btn-success text-center">{{ __('words.allnews') }}</a>
                </div>
            </div>

    </section>
    <!--====== Screenshot Ends ======-->

    <!-- download-area -->
    <div class="container">

        <div class="download-area">
            <div class="row">
                <div class="col-lg-8">
                    <div class="download-content">
                        <h2 class="title wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s"
                            style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInUpBig;">
                            {{ __('words.aim') }}</h2>
                        <ul class="download-btn">
                            <li>
                                <a class="google-play  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s"
                                    style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInUp;"
                                    href="{{ asset('frontend/assets/pdf/uz.pdf') }}" target="_blank">
                                    <i class="fas fa-download"></i>
                                    <span class="text-1">{{ __('words.down') }}</span>
                                    <span class="text-2">{{ __('words.desc') }}</span>
                                </a>
                            </li>
                            <li>
                                <a class="apple-store  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s"
                                    style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInUp;"
                                    href="{{ asset('frontend/assets/pdf/ru.pdf') }}" target="_blank">
                                    <i class="fas fa-download"></i>
                                    <span class="text-1">{{ __('words.down') }}</span>
                                    <span class="text-2">{{ __('words.desc_ru') }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="download-image wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s"
                        style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeIn;">
                        <img src="{{ asset('frontend/assets/images/123124124.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- download-area ends -->
@endsection
