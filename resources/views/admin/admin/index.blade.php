@extends('layouts.admin')
@section('content')
    <div class="row justify-content-between">
        <div class="col-6 col-lg-6 col-md-6">
            <h3>Data Admin</h3>
        </div>
        <div class="col-6 col-lg-6 col-md-6 d-flex justify-content-end" style="margin-bottom: 0.5rem;">
            <!-- Button trigger modal -->
            {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Launch demo modal
            </button> --}}
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Kode</td>
                        <td>Nama Lengkap</td>
                        <td>Nama Pengguna</td>
                        <td>Kata Sandi</td>
                        <td>Terakhir Login</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $admin as $key => $adm )
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $adm->kode }}</td>
                            <td>{{ $adm->fullname }}</td>
                            <td>{{ $adm->username }}</td>
                            <td>{{ str_pad('', strlen($adm->password), '•') }}</td>
                            <td>{{ $adm->terakhir_login }}</td>
                            <td>
                                <button class="btn btn-primary">update</button>
                                <button class="btn btn-danger">hapus</button></td>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
@endsection