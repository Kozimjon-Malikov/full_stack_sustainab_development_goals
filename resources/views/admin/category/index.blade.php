@extends('admin.layouts.app')
@section('section_content')
    <div>
        @if (session('msg'))
            <h4 class="alert alert-success">
                {{ session('msg') }}
            </h4>
        @endif
        <h2 class="alert alert-info">
            Sdg category ni yaratish
        </h2>
        <a href="{{ route('sdg-category.create') }}" class="my-2 btn btn-success">
            Create
        </a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>#</td>
                    <td>Name of SDG</td>
                    <td>Rasm</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @forelse ($categories as $category)
                    <tr>
                        <td>
                            {{ ($categories->currentpage() - 1) * $categories->perpage() + $loop->index + 1 }}
                        </td>
                        <td>
                            {{ $category->name }}
                        </td>
                        <td>
                            <img src="{{ asset('upload/' . $category['rasm_'.app()->getLocale()]) }}" width="200px" height="150px" alt="">
                        </td>
                        <td>
                            <a href="{{ route('sdg-category.edit', $category->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('sdg-category.destroy', $category->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger m-1"
                                    onclick="return confirm('Rostan ham o\'chirmoqchimisz ?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <p>no data</p>
                @endforelse
            </tbody>
        </table>
        {{ $categories->links() }}
    </div>
@endsection
