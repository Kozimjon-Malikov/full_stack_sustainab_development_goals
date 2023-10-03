@extends('admin.layouts.app')
@section('section_content')
    <div>
        @if (session('msg'))
            <h2 class="alert alert-success">
                {{ session('msg') }}
            </h2>
        @endif
        <h2 class="alert alert-info">
            Banner Yaratish
        </h2>
        <a href="{{ route('banner.create') }}" class="btn btn-success my-2">Create Content Page</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>#</td>
                    <td>Banner title</td>
                    <td>Banner content</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody>
                @forelse ($banner as $item)
                    <tr>
                        <td>
                            {{ $loop->index + 1 }}
                        </td>
                        <td>
                            {{ $item->title_uz }}
                        </td>
                        <td>
                            {{ $item->content_uz }}
                        </td>
                        <td>
                            <a href="{{ route('banner.edit',$item->id) }}" class="btn btn-primary my-2">
                            edit
                            </a>
                            <form action="{{ route('banner.destroy',$item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                        <button onclick="return confirm('are you sure')"  class="btn btn-danger">Delete</button>
                        </form>
                        </td>
                    </tr>
                @empty
                @endforelse
            </tbody>
        </table>

    </div>
@endsection
