@extends('admin.layouts.app')
@section('section_content')
    <div>
        @if (session('msg'))
            <h2 class="alert alert-success">
                {{ session('msg') }}
            </h2>
        @endif
        <h2 class="alert alert-info">
            Yangiliklar yaratish
        </h2>
        <a href="{{ route('news.create')}}" class="btn btn-success my-2">Create News</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>#</td>
                    <td>News</td>
                    <td>Img</td>
                    <td>content</td>
                    <td>actions</td>
                </tr>
            </thead>
            <tbody>
                @forelse ($allnews as $news)
                    <tr>
                        <td>
                            {{ ($allnews->currentpage()-1)*$allnews->perpage()+$loop->index+1 }}
                        </td>
                        <td>
                            {{ $news->{'title_'.app()->getLocale()} }}
                        </td>
                        <td>
                            <img src="{{ asset('upload/'.$news->{'rasm_'.app()->getLocale()}) }}" width="200px" alt="">
                        </td>
                        <td>
                            {{ strip_tags(Str::limit($news->{'editor_'.app()->getLocale()}, $limit=60)) }}
                        </td>
                        <td>
                            <a href="{{ route('news.edit',$news->id) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ route('news.show',$news->id) }}" class="btn btn-info">Read</a>
                            <form method="POST" action="{{ route('news.destroy',$news->id) }}">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('are you sure?')" class="btn btn-danger my-2">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <p>no news found</p>
                @endforelse
            </tbody>
        </table>
        {{ $allnews->links() }}
    </div>
@endsection
