@extends('admin.layouts.app')
@section('section_content')
    <h2 class="alert alert-primary">
        Create
    </h2>
    <div class="mx-3">
        <form action="{{ route('cards.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb3">
                <label class="form-label">Card name UZ</label>
                <input type="text" name="name_uz" class="form-control">
            </div>
            <div class="mb3">
                <label class="form-label">Card name RU</label>
                <input type="text" name="name_ru" class="form-control">
            </div>
            <div class="mb3">
                <label class="form-label">Card name EN</label>
                <input type="text" name="name_en" class="form-control">
            </div>
            <hr>
            <div class="mb3">
                <label class="form-label">Card title UZ</label>
                <input type="text" name="title_uz" class="form-control">
            </div>
            <div class="mb3">
                <label class="form-label">Card title RU</label>
                <input type="text" name="title_ru" class="form-control">
            </div>
            <div class="mb3">
                <label class="form-label">Card title EN</label>
                <input type="text" name="title_en" class="form-control">
            </div>
            <hr>
            <div class="mb-3">
                <label class="form-label mt-4">Uz Background yuklang</label>
                <input type="file" class="form-control" name="rasm_uz">
            </div>
            <div class="mb-3">
                <label class="form-label my-1">Ru Background yuklang</label>
                <input type="file" class="form-control" name="rasm_ru">
            </div>
            <div class="mb-3">
                <label class="form-label my-1">En Background yuklang</label>
                <input type="file" class="form-control" name="rasm_en">
            </div>
            <hr>
            <div class="mb-3">
                <label class="form-label mt-4">Uz Rasmni yuklang</label>
                <input type="file" class="form-control" name="rasmbg_uz">
            </div>
            <div class="mb-3">
                <label class="form-label my-1">Ru Rasmni yuklang</label>
                <input type="file" class="form-control" name="rasmbg_ru">
            </div>
            <div class="mb-3">
                <label class="form-label my-1">En Rasmni yuklang</label>
                <input type="file" class="form-control" name="rasmbg_en">
            </div>
            <button type="submit" class="btn btn-success my-2">Saqlash</button>
        </form>
    </div>
@endsection
