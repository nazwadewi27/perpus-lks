@extends('layouts.admin')
@section('content')
    <div class="row justify-content-between">
        <div class="col-6 col-lg-6 col-md-6">
            <h3>Data Admin</h3>
        </div>
        <div class="col-6 col-lg-6 col-md-6 d-flex justify-content-end" style="margin-bottom: 0.5rem;">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#admin">
                <i class="bi bi-person-plus-fill"></i> Tambah     
            </button>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th>No</td>
                        <th>Kode</td>
                        <th>Nama Lengkap</td>
                        <th>Nama Pengguna</td>
                        <th>Kata Sandi</td>
                        <th>Terakhir Login</td>
                        <th>Aksi</td>
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
                                <button class="btn btn-primary"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button></td>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
@include('admin.admin.create')
@endsection