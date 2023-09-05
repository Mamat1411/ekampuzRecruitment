@extends('layouts.main')
@section('container')
    <div class="container mt-3">
        <h1>Companies List </h1>

        <table class="table table-bordered table-hover table-striped my-4">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Aksi</th>
                <th scope="col">Name</th>
                <th scope="col">Deskripsi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($instansi as $i)
                    <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>
                       <a href="" class="btn btn-success">Edit</a>
                       <a href="" class="btn btn-primary">Detail</a>
                       <a href="" class="btn btn-danger">Delete</a>
                    </td>
                    <td>{{ $i->name }}</td>
                    <td>{{ $i->short_description }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
