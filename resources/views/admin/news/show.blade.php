@extends('admin.layouts.app')
@section('section_content')
    <h2 class="alert alert-info">Your News</h2>
    <div class="container">
        <h4>{{ $all_news->{'title_'.app()->getLocale()} }}</h4>  
        {!! $all_news->{'editor_'.app()->getLocale()} !!}
    </div>
    <a href="{{ route('news.index') }}" class="btn btn-success">{{ __('words.ortga') }}</a>
@endsection
