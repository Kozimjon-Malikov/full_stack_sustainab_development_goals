@extends('admin.layouts.app')
@section('section_content')
    <div class="container">
        <div class="row">
            <form action="{{ route('banner.store') }}" method="POST">
                @csrf
                <div class="mb-2 col-4">
                    <label class="form-label">Title uz</label>
                    <input class="form-control" type="text" name="title_uz">
                </div>
                <div class="mb-2 col-4">
                    <label class="form-label"> Title ru</label>
                    <input class="form-control" type="text" name="title_ru">
                </div>
                <div class="mb-2 col-4">
                    <label class="form-label "> Title en</label>
                    <input class="form-control" type="text" name="title_en">
                </div>
                <div class="mb-2">
                    <label class="form-label">Banner Content uz</label>
                    <textarea name="content_uz" class="form-control"></textarea>
                </div>
                <div class="mb-2">
                    <label class="form-label">Banner Content ru</label>
                    <textarea name="content_ru" class="form-control"></textarea>
                </div>
                <div class="mb-2">
                    <label class="form-label">Banner Content en</label>
                    <textarea name="content_en" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
@endsection
