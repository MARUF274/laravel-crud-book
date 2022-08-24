@extends('books.layout')

@section('content')
<div class="card mb-3 mr-auto ml-auto border-info back" style="max-width: 1200px; ">
    <div class="card-header text-center daftar">
        <h2>DAFTAR BUKU </h2>
        
    </div>
    <div class="row no-gutters">
        <ul class="nav col-md-12 my-3 ">
            <a href="{{ route('books.create') }}" class="btn btn-primary mx-3">Tambah</a>

            <div class="pull-right">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                    <button type="submit" class="btn btn-default btn-flat" style="margin-top: 25%; border-radius: 10px; opacity: 60%">Logout</button>
                </form>
            </div>
        </ul>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif


<table style="color: white; text-align: center;">
    @forelse ($books as $book)
    <div class="col-md-3 my-3">
        <img style="border: 5px solid #555;  margin: 10px; height: 300px;" src="/image/{{ $book->image }}"
            width="200px">
        <h2 style="text-align: center; margin-left: -1.2pc!important; color: white;">{{ $book->judul }}</h2>
        <form action="{{ route('books.destroy',$book->id) }}" method="POST"
            style="margin: 10px; text-align: center;">
            <div style="margin-left: 0.57pc!important">

                <a class="btn btn-info" href="{{ route('books.show',$book->id) }}">Detail</a>

                <a class="btn btn-primary" href="{{ route('books.edit',$book->id) }}">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
        </form>
    </div>
    @empty
    <h1 style="color: white; text-align: center;">No Book Found</h1>
    @endforelse
</table>
{!! $books->links() !!}

@endsection
