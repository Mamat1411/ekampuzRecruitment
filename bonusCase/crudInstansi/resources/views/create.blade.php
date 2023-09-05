@extends('layouts.main')
@section('container')
    <div class="container my-3">
        <h1 class="my-3">Add Company Form</h1>

        <div class="container">
            <form action="/store" method="post">
                @csrf
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <td>
                                <label for="name">Nama Instansi</label>
                            </td>
                            <td>
                                <input type="text" class="form-control" name="name" placeholder="contoh: PT Gudang Garam" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="short_description">Deskripsi Singkat</label>
                            </td>
                            <td>
                                <input type="text" class="form-control" name="short_description" placeholder="contoh: Perusahaan Rokok...." required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="description">Deskripsi Lengkap</label>
                            </td>
                            <td>
                                <textarea class="form-control" name="description" rows="3" placeholder="contoh: PT Gudang Garam Didirikan tahun....." required></textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <button type="submit" class="btn btn-success">Simpan</button>
                <button type="reset" class="btn btn-primary">Reset</button>
                <a href="/" class="btn btn-dark">Kembali</a>
            </form>
        </div>
    </div>
@endsection
