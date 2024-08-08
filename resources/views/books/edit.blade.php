@extends('layout.app')
@section('title','Edit Buku')

@section('content')
<form action="{{route('book.update', $edit->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="">Kategori Buku</label>
        <input class="form-control" type="text" name="category_id" value="{{$edit->category_id}}">
    </div>
    <div class="form-group">
        <label for="">Judul</label>
        <input class="form-control" type="text" name="judul" value="{{$edit->judul}}">
    </div>
    <div class="form-group">
        <label for="">Jumlah</label>
        <input class="form-control" type="number" name="jumlah" value="{{$edit->jumlah}}">
    </div>
    <div class="form-group">
        <label for="">Penerbit</label>
        <input class="form-control" type="text" name="penerbit" value="{{$edit->penerbit}}">
    </div>
    <div class="form-group">
        <label for="">Tahun Terbit</label>
        <input class="form-control" type="number" name="tahun_terbit" value="{{$edit->tahun_terbit}}">
    </div>
    <div class="form-group">
        <label for="">Penulis</label>
        <input class="form-control" type="text" name="penulis" value="{{$edit->penulis}}">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{url()->previous()}}">Kembali</a>
    </div>
</form>
@endsection
