@extends('layouts.admin')
@section('content')
    <div class="row justify-content-between">
        <div class="col-6 col-lg-6 col-md-6">
            <h3>Data Anggota</h3>
        </div>
        <div class="col-6 col-lg-6 col-md-6 d-flex justify-content-end" style="margin-bottom: 0.5rem;">
            <!-- Button trigger modal -->
            {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalang">
                Tambah Anggota
            </button> --}}
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul Buku</th>
                        <th>Pengarang</th>
                        <th>Penerbit</th>
                        <th>Buku Baik</th>
                        <th>Buku Rusak</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($buku as $key => $b)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $b->judul }}</td>
                            <td>{{ $b->pengarang }}</td>
                            <td>{{ $b->penerbit->nama }}</td>
                            <td>{{ $b->j_buku_baik }}</td>
                            <td>{{ $b->j_buku_rusak }}</td>
                            <td>
                                <button class="btn btn-primary">update</button>
                                <button class="btn btn-danger">hapus</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection