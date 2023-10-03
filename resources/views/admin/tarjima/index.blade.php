@extends('admin.layouts.app')
@section('section_content')
    <div>
        @if (session('msg'))
            <h2 class="alert alert-success">
                {{ session('msg') }}
            </h2>
        @endif
        <h2 class="alert alert-info">
            Tarjimalar:
        </h2>
        <a href="{{ route('tarjima.create') }}" class="btn btn-success my-2">Tarjima qo'shish</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>#</td>
                    <td>Uz title</td>
                    <td>Ru title</td>
                    <td>En title</td>
                    <td>Actions</td>
                   
                </tr>
            </thead>
            <tbody>
              @forelse ($all_tarjima as $item)
                  <tr>
                    <td>
                        {{ $loop->index+1 }}
                    </td>
                    <td>
                        {{ $item->title_uz }}
                    </td>
                    <td>
                        {{ $item->title_ru }}
                    </td>
                    <td>
                        {{ $item->title_en }}
                    </td>
                    <td>
                        <a href="{{ route('tarjima.edit',$item->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('tarjima.destroy',$item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('are you sure ?')" class="btn btn-danger my-2">Delete</button>
                        </form>
                    </td>
                  </tr>
              @empty
                  <p>no words</p>
              @endforelse
            </tbody>
        </table>
        {{ $all_tarjima->links() }}
        
    </div>
@endsection
