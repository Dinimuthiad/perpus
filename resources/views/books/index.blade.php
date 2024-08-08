@extends('layout.app')
@section('title','Data Katagori')

@section('content')
<div align="right">
    <a href="{{route('book.create')}}" class="btn btn-primary">Tambah</a>
</div>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Katagori</th>
            <th>Judul</th>
            <th>Jumlah</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Penulis</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($datas as $key => $item)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{$item->category->category_name}}</td>
            <td>{{$item->judul}}</td>
            <td>{{$item->jumlah}}</td>
            <td>{{$item->penerbit}}</td>
            <td>{{$item->tahun_terbit}}</td>
            <td>{{$item->penulis}}</td>
            <td>
                <a class="btn btn-success btn-xs" href="{{route('book.edit',$item->id)}}">Edit</a>
                <form class="d-inline" action="{{route('book.destroy',$item->id)}}" method="post">
                    @csrf
                    @method("DELETE")
                    <!-- CARA KE 2 -->
                    <!-- <input type="hidden" name="_method" value="DELETE"> -->
                    <button class="btn btn-danger btn-xs" type="submit" >Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
