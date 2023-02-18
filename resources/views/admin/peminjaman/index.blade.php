@extends('layouts.admin')
@section('content')
    <div class="row justify-content-between">
        <div class="col-12">
            <h3>Data Peminjaman</h3>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <table class="table" id="table1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Anggota</th>
                        <th>Judul Buku</th>
                        <th>Tanggal Peminjaman</th>
                        <th>Tanggal Pengembalian</th>
                        <th>Kondisi Buku Saat Dipinjam</th>
                        <th>Kondisi Buku Saat Dikembalikan</th>
                        <th>Denda</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($peminjaman as $key => $p)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $p->user->fullname}}</td>
                            <td>{{ $p->buku->judul }}</td>
                            <td>{{ $p->tanggal_peminjaman }}</td>
                            <td>{{ $p->tanggal_pengembalian }}</td>
                            <td>{{ $p->kondisi_buku_saat_dipinjam }}</td>
                            <td>{{ $p->kondisi_buku_saat_dikembalikan }}</td>
                            <td>Rp. {{ $p->denda }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection