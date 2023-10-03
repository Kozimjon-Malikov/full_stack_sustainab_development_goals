@extends('admin.layouts.app')
@section('section_content')
    <h2 class="alert alert-info">
        Banner edit
    </h2>
    <form action="{{ route('banner.update', $banner->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-2 col-4">
            <label class="form-label">Title uz</label>
            <input class="form-control" value="{{ $banner->title_uz }}" type="text" name="title_uz">
        </div>
        <div class="mb-2 col-4">
            <label class="form-label"> Title ru</label>
            <input class="form-control" value="{{ $banner->title_ru }}" type="text" name="title_ru">
        </div>
        <div class="mb-2 col-4">
            <label class="form-label "> Title en</label>
            <input class="form-control" value="{{ $banner->title_en }}" type="text" name="title_en">
        </div>
        <div class="mb-2">
            <label class="form-label">Banner Content uz</label>
            <textarea name="content_uz" class="form-control">
                {{ $banner->content_uz }}
            </textarea>
        </div>
        <div class="mb-2">
            <label class="form-label">Banner Content ru</label>
            <textarea name="content_ru" class="form-control">
                {{ $banner->content_ru }}
            </textarea>
        </div>
        <div class="mb-2">
            <label class="form-label">Banner Content en</label>
            <textarea name="content_en" class="form-control">
                {{ $banner->content_en }}
            </textarea>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
@endsection
