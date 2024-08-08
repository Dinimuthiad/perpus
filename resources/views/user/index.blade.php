@extends('layout.app')
@section('title','Data User')

@section('content')
<div align="right">
    <a href="{{route('user.create')}}" class="btn btn-primary">Tambah</a>
</div>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $key => $user)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                <a class="btn btn-success btn-xs" href="{{route('user.edit',$user->id)}}">Edit</a>
                <form class="d-inline" action="{{route('user.destroy',$user->id)}}" method="post">
                    @csrf
                    @method("DELETE")
                    <!-- CARA KE 2 -->
                    <!-- <input type="hidden" name="_method" value="DELETE"> -->
                    <button class="btn btn-danger btn-xs" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
