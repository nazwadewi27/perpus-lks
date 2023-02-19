@extends('layouts.admin')
@section('content')
    <div class="row justify-content-between">
        <div class="col-6 col-lg-6 col-md-6">
            <h3>Data Anggota</h3>
        </div>
        <div class="col-6 col-lg-6 col-md-6 d-flex justify-content-end" style="margin-bottom: 0.5rem;">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#anggota">
                <i class="bi bi-person-plus-fill"></i> Tambah     
            </button>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <table class="table" id="table1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>kode Anggota</th>
                        <th>Nis</th>
                        <th>Nama Lengkap</th>
                        <th>Kelas</th>
                        <th>Alamat</th>
                        <th>Verifikasi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($anggota as $key => $ang)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $ang->kode }}</td>
                            <td>{{ $ang->nis }}</td>
                            <td>{{ $ang->fullname }}</td>
                            <td>{{ $ang->kelas }}</td>
                            <td>{{ $ang->alamat }}</td>
                            <td>{{ $ang->verif }}</td>
                            <td>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#anggotaUpdate{{ $ang->id }}">
                                    <i class="bi bi-pencil-square"></i>    
                                </button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#anggotaDelete{{ $ang->id }}">
                                    <i class="bi bi-trash3-fill"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@include('admin.anggota.create')
@include('admin.anggota.edit')
@include('admin.anggota.delete')
@endsection