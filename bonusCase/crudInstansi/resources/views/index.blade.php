@extends('layouts.main')
@section('container')
    <div class="container mt-3">
        <h1 class="my-3">List Instansi</h1>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <a href="/create" class="btn btn-primary">Tambah Data Instansi</a>

        <table class="table table-bordered table-hover table-striped my-3">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Aksi</th>
                <th scope="col">Nama</th>
                <th scope="col">Deskripsi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($instansi as $i)
                    <tr>
                    <th scope="row">{{ $i->id }}</th>
                    <td>
                       <a href="/edit/{{ $i->id }}" class="btn btn-success">Edit</a>
                       <a href="/show/{{ $i->id }}" class="btn btn-primary">Detail</a>
                       <form action="/destroy/{{ $i->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                           <button type="submit" class="btn btn-danger">Delete</button>
                       </form>
                    </td>
                    <td>{{ $i->name }}</td>
                    <td>{{ $i->short_description }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $instansi->links() }}
    </div>
@endsection
