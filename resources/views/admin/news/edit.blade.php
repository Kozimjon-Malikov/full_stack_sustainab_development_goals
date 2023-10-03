@extends('admin.layouts.app')
@section('section_content')
    <h2 class="alert alert-info">Create News</h2>
    <form action="{{ route('news.update', $all_news->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @csrf
        <div class="mb3">
            <label class="form-label">News Title Uz</label>
            <input type="text" name="title_uz" value="{{ $all_news->title_uz }}" class="form-control">
        </div>
        <div class="mb3">
            <label class="form-label">News Title Ru</label>
            <input type="text" name="title_ru" value="{{ $all_news->title_ru }}" class="form-control">
        </div>
        <div class="mb3">
            <label class="form-label">News Title En</label>
            <input type="text" name="title_en" value="{{ $all_news->title_en }}" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label my-3">Uz Rasmni yuklang</label>
            <input type="file" class="form-control" name="rasm_uz">
        </div>
        <div class="mb-3">
            <label class="form-label my-3">Ru Rasmni yuklang</label>
            <input type="file" class="form-control" name="rasm_ru">
        </div>
        <div class="mb-3">
            <label class="form-label my-3">En Rasmni yuklang</label>
            <input type="file" class="form-control" name="rasm_en">
        </div>
        <div class="mb3">
            <label class="form-label">Uz Content</label>
            <textarea id="editor" name="editor_uz">{{ $all_news->editor_uz }}</textarea>
        </div>
        <div class="mb3">
            <label class="form-label">Ru Content</label>
            <textarea id="editor" name="editor_ru">{{ $all_news->editor_ru }}</textarea>
        </div>
        <div class="mb3">
            <label class="form-label">En Content</label>
            <textarea id="editor" name="editor_en">{{ $all_news->editor_en }}</textarea>
        </div>
        <button class="btn btn-success my-2" type="submit">Save</button>
    </form>
@endsection
