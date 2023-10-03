@extends('admin.layouts.app')
@section('section_content')
    <h2 class="alert alert-info">Tarjima yaratish:</h2>
    <form action="{{ route('tarjima.store') }}" method="POST">
        @csrf
        <div class="my-3">
            <label class="form-label">Uz title</label>
            <input type="text" name="title_uz" class="form-control">
        </div>
        <div class="my-3">
            <label class="form-label">Ru title</label>
            <input type="text" name="title_ru" class="form-control">
        </div>
        <div class="my-3">
            <label class="form-label">En title</label>
            <input type="text" name="title_en" class="form-control">
        </div>
        <button class="btn btn-success">Saqlash</button>
    </form>
@endsection
