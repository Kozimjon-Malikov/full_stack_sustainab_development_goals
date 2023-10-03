@extends('admin.layouts.app')
@section('section_content')
    <div>
        @if (session('msg'))
            <h4 class="alert alert-success">
                {{ session('msg') }}
            </h4>
        @endif
        <h2 class="alert alert-info">
            Card yaratish
        </h2>
        <a href="{{ route('cards.create') }}" class="my-2 btn btn-success">
            Create
        </a>
        {{ $cards->links() }}
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>#</td>
                    <td>Card name</td>
                    <td>Rasm</td>
                    <td>Title</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @forelse ($cards as $card)
                    <tr>
                        <td>
                            {{ $loop->index+1 }}
                        </td>
                        <td>
                            {{ $card->{'name_'.app()->getLocale()} }}
                        </td>
                        <td>
                            {{ $card->{'title_'.app()->getLocale()} }}
                        </td>
                        <td>
                            <img src="{{ asset('upload/'.$card->{'rasm_'.app()->getLocale()}) }}" width="200px" alt="">
                        </td>
                        <td>
                            <a href="{{ route('cards.edit',$card->id) }}" class="btn btn-primary">edit</a>
                            <form action="{{ route('cards.destroy',$card->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('are you sure?')" class="btn btn-danger my-2">delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                   <p>no data</p> 
                @endforelse
            </tbody>
        </table>
      
    </div>
@endsection
