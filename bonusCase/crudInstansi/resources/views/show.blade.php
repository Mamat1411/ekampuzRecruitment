@extends('layouts.main')
@section('container')
    <div class="container my-3">
        <article>
            <h2>{{ $instansi->name }}</h2>
            {{ $instansi->description }}
        </article>
        <a href="/" class="btn btn-dark my-3">Kembali</a>
    </div>
@endsection
