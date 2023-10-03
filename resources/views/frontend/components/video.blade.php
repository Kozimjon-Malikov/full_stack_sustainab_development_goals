@extends('frontend.app')
@section('banner')
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
@endsection
