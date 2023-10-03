@extends('admin.layouts.app')
@section('section_content')
    <h2 class="alert alert-info">Tarjima taxrirlash:</h2>
    <form action="{{ route('tarjima.update',$data->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="my-3">
            <label class="form-label">Uz title</label>
            <input type="text" value="{{ $data->title_uz }}" name="title_uz" class="form-control">
        </div>
        <div class="my-3">
            <label class="form-label">Ru title</label>
            <input type="text" value="{{ $data->title_ru }}" name="title_ru" class="form-control">
        </div>
        <div class="my-3">
            <label class="form-label">En title</label>
            <input type="text" value="{{ $data->title_en }}" name="title_en" class="form-control">
        </div>
        <button class="btn btn-success">Saqlash</button>
    </form>
@endsection
