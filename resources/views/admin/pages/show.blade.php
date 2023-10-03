@extends('admin.layouts.app')
@section('section_content')
    <h2 class="alert alert-info">
        {{ $pages->{'title_'.app()->getLocale()} }}
    </h2>
    <img src="{{ asset('upload/'.$pages->{'rasm_'.app()->getLocale()}) }}" width="300px" alt="">
    <div>
        {!! $pages->{'editor_'.app()->getLocale()} !!}
    </div>

@endsection
