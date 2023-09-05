@extends('layouts.main')
@section('container')
    <div class="container my-3">
        <h1 class="my-3">Edit Company Form</h1>

        <div class="container">
            <form action="/update/{{ $instansi->id }}" method="post">
                @method('put')
                @csrf
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <td>
                                <label for="name">Nama Instansi</label>
                            </td>
                            <td>
                                <input type="text" class="form-control" name="name" placeholder="contoh: PT Gudang Garam" value="{{ $instansi->name }}">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="short_description">Deskripsi Singkat</label>
                            </td>
                            <td>
                                <input type="text" class="form-control" name="short_description" placeholder="contoh: Perusahaan Rokok...." value="{{ $instansi->short_description }}">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="description">Deskripsi Lengkap</label>
                            </td>
                            <td>
                                <textarea class="form-control" name="description" rows="3" placeholder="contoh: PT Gudang Garam Didirikan tahun.....">{{ $instansi->description }}</textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <button type="submit" class="btn btn-success">Update</button>
                <button type="reset" class="btn btn-primary">Reset</button>
                <a href="/" class="btn btn-dark">Kembali</a>
            </form>
        </div>
    </div>
@endsection
