@extends('admin.layouts.app')
@section('section_content')
    <h2 class="alert alert-primary">
        Edit
    </h2>
    <div class="mx-3">
        <form action="{{ route('cards.update',$card->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb3">
                <label class="form-label">Card name UZ</label>
                <input type="text" name="name_uz" class="form-control" value="{{ $card->name_uz }}">
            </div>
            <div class="mb3">
                <label class="form-label">Card name RU</label>
                <input type="text" name="name_ru" class="form-control" value="{{ $card->name_ru }}" >
            </div>
            <div class="mb3">
                <label class="form-label">Card name EN</label>
                <input type="text" name="name_en" class="form-control" value="{{ $card->name_en }}" >
            </div>
            <hr>
            <div class="mb3">
                <label class="form-label">Card title UZ</label>
                <input type="text" name="title_uz" class="form-control" value="{{ $card->title_uz }}" >
            </div>
            <div class="mb3">
                <label class="form-label">Card title RU</label>
                <input type="text" name="title_ru" class="form-control" value="{{ $card->title_ru }}" >
            </div>
            <div class="mb3">
                <label class="form-label">Card title EN</label>
                <input type="text" name="title_en" class="form-control" value="{{ $card->title_en }}" >
            </div>
            
            <div class="mb-3">
                <label class="form-label mt-4">Uz Background yuklang</label>
                <input type="file" class="form-control" name="rasm_uz">
                <img width="100px" src="{{ asset('upload/'.$card->rasm_uz) }}" alt="">

            </div>
            <div class="mb-3">
                <label class="form-label my-1">Ru Background yuklang</label>
                <input type="file" class="form-control" name="rasm_ru">
                <img width="100px" src="{{ asset('upload/'.$card->rasm_ru) }}" alt="">

            </div>
            <div class="mb-3">
                <label class="form-label my-1">En Background yuklang</label>
                <input type="file" class="form-control" name="rasm_en">
                <img width="100px" src="{{ asset('upload/'.$card->rasm_en) }}" alt="">

            </div>
            <div class="mb-3">
                <label class="form-label mt-4">Uz Rasmni yuklang</label>
                <input type="file" class="form-control" name="rasmbg_uz">
                <img width="100px" src="{{ asset('upload/'.$card->rasmbg_uz) }}" alt="">

            </div>
            <div class="mb-3">
                <label class="form-label my-1">Ru Rasmni yuklang</label>
                <input type="file" class="form-control" name="rasmbg_ru">
                <img width="100px" src="{{ asset('upload/'.$card->rasmbg_ru) }}" alt="">

            </div>
            <div class="mb-3">
                <label class="form-label my-1">En Rasmni yuklang</label>
                <input type="file" class="form-control" name="rasmbg_en">
                <img width="100px" src="{{ asset('upload/'.$card->rasmbg_en) }}" alt="">
            </div>
            <button type="submit" class="btn btn-success my-2">Saqlash</button>
        </form>
    </div>
@endsection
