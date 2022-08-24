@extends('books.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h4 style="margin: 20px; color: white">Add New Book</h4>
        </div>
        <div class="pull-right">
            <a style="margin: 20px" class="btn btn-primary" href="{{ route('books.index') }}"> Back</a>
        </div>
    </div>
</div>
     
        <div class="card mb-3 mx-auto border-info" style="max-width: 1200px; margin-top:80px;">
    <div class="card-header">
            <h2>TAMBAH BUKU</h2>
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
     
<form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data" style="margin: 20px 20px;">
    @csrf
    
     <div class="form-group row">
                <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="judul">
                </div>
            </div>
            <div class="form-group row">
                <label for="image" class="col-sm-2 col-form-label">Gambar</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" name="image">
                </div>
            </div>
            <div class="form-group row">
                <label for="addPengarang" class="col-sm-2 col-form-label">Pengarang</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="pengarang">
                </div>
            </div>
            <div class="form-group row">
                <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="penerbit">
                </div>
            </div>
                        <div class="form-group row">
                <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="deskripsi">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button class="btn btn-success">ADD</button>
                </div>
            </div>
     
</form>
@endsection