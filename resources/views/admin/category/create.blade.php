@extends('admin.layouts.app')
@section('section_content')
    <h2 class="alert alert-primary">
        Create
    </h2>
    <div class="mx-3">
        <form action="{{ route('sdg-category.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb3">
                <label class="form-label">SDG nomi (category)</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label mt-4">Uz Rasmni yuklang</label>
                <input type="file" class="form-control" name="rasm_uz">
            </div>
            <div class="mb-3">
                <label class="form-label my-1">Ru Rasmni yuklang</label>
                <input type="file" class="form-control" name="rasm_ru">
            </div>
            <div class="mb-3">
                <label class="form-label my-1">En Rasmni yuklang</label>
                <input type="file" class="form-control" name="rasm_en">
            </div>
            <button type="submit" class="btn btn-success my-2">Saqlash</button>
        </form>
    </div>
@endsection
