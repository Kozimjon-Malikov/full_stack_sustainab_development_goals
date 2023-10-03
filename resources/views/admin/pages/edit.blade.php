@extends('admin.layouts.app')
@section('section_content')
    <h2 class="alert alert-info">Create page</h2>
    <form action="{{ route('pages.update',$pages->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="col">
                <div class="mb3">
                    <label class="form-label">Title Uz</label>
                    <input type="text" name="title_uz" value="{{ $pages['title_uz']}}" class="form-control">
                </div>
            </div>
            <div class="col">
                <div class="mb3">
                    <label class="form-label">Title Ru</label>
                    <input type="text" value="{{ $pages['title_ru'] }}" name="title_ru" class="form-control">
                </div>
            </div>
            <div class="col">
                <div class="mb3">
                    <label class="form-label">Title En</label>
                    <input type="text" name="title_en" value="{{ $pages['title_en'] }}" class="form-control">
                </div>
            </div>
        </div>
        <div class="mb3">
            <label class="form-label my-2">Sdg category</label>
            <select class="form-select" name="category_id">
                @forelse ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @empty
                    <p>no data</p>
                @endforelse
            </select>
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
            <label class="form-label my-3 ">Uz Content</label>
            <textarea id="editor" name="editor_uz">{{ $pages['editor_uz'] }}</textarea>
        </div>
        <div class="mb3">
            <label class="form-label my-3 ">Ru Content</label>
            <textarea id="editor" name="editor_ru">{{ $pages['editor_ru'] }}</textarea>
        </div>
        <div class="mb3">
            <label class="form-label my-3 ">En Content</label>
            <textarea id="editor" name="editor_en">{{ $pages['editor_en'] }}</textarea>
        </div>
        <button class="btn btn-success my-2" type="submit">Save</button>
    </form>
    <a href="{{ route('pages.index') }}" class="btn btn-primary">cancel</a>
@endsection
