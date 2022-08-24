@extends('books.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h4 style="margin: 20px; color: white;"> Detail Buku</h4>
            </div>
            <div class="pull-right">
                <a style="margin: 20px" class="btn btn-primary" href="{{ route('books.index') }}"> Back</a>
            </div>
        </div>
    </div>
     
    <div class="row" style="color: white;">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <img src="/image/{{ $book->image }}" width="80px" style="margin: auto; display:block; width:20%; border: 5px solid #555;">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $book->judul }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pengarang:</strong>
                {{ $book->pengarang }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Penerbit:</strong>
                {{ $book->penerbit }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ditambahkan pada:</strong>
                {{ $book->created_at }} <br>
                <strong>Diupdate pada:</strong> 
                {{ $book->updated_at }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Deskripsi:</strong>
                {{ $book->deskripsi }}
            </div>
        </div>
    </div>
@endsection