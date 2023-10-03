@extends('admin.layouts.app')
@section('section_content')
    <div>
        @if (session('msg'))
            <h2 class="alert alert-success">
                {{ session('msg') }}
            </h2>
        @endif
        <h2 class="alert alert-info">
            Page Content Yaratish
        </h2>
        <a href="{{ route('pages.create') }}" class="btn btn-success my-2">Create Content Page</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>#</td>
                    <td>Name of SDG</td>
                    <td>Rasm</td>
                    <td>content</td>
                    <td>category_id</td>
                    <td>actions</td>
                </tr>
            </thead>
            <tbody>
                @forelse ($pages as $page)
                    <tr>
                        <td>
                            {{ ($pages->currentpage()-1)*$pages->perpage()+$loop->index+1 }}
                        </td>
                        <td>
                            {{ $page['title_'.app()->getLocale()] }}
                        </td>
                        <td>
                            <img width="150px" src="{{ asset('upload/'.$page->{'rasm_'.app()->getLocale()}) }}" alt="">
                        </td>
                        <td>
                            {{ Str::limit($page->{'editor_'.app()->getLocale()}, $limit=60) }}
                        </td>
                        <td>
                           {{ $page->category->name }}
                        </td>
                        <td>
                            <a href="{{ route('pages.edit',$page->id) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ route('pages.show',$page->id) }}" class="btn btn-info">Read</a>
                            <form action="{{ route('pages.destroy', $page->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('are you sure?')" type="submit" class="btn btn-danger my-2">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                @endforelse
            </tbody>
        </table>
        {{ $pages->links() }}

    </div>
@endsection
