@extends('books.layout')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h4 style="margin: 20px; color: white;">Edit Book</h4>
            </div>
            <div class="pull-right">
                <a style="margin: 20px" class="btn btn-primary" href="{{ route('books.index') }}"> Back</a>
            </div>
        </div>
    </div>
     
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('books.update',$book->id) }}" method="POST" enctype="multipart/form-data" style="color: white;"> 
        @csrf
        @method('PUT')
     
         <div class="form-group row">
                <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="judul" value="{{ $book->judul }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="pengarang" class="col-sm-2 col-form-label">Pengarang</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="pengarang" value="{{ $book->pengarang }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="penerbit" value="{{ $book->penerbit }}">
                </div>
            </div>
                        <div class="form-group row">
                <label for="penerbit" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="deskripsi" value="{{ $book->deskripsi }}">
                </div>
            </div>
                        <div class="form-group row">
                 <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                <div class="col-sm-10">
                    <input type="file" name="image" class="form-control" placeholder="image">
                    <img style="border: 5px solid #555;" src="/image/{{ $book->image }}" width="300px">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button class="btn btn-success">ADD</button>
                </div>
            </div>
     
    </form>
@endsection