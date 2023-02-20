@extends('layouts.user')
@section('content')
<div class="container">    
    @if (Session('status'))
    <div class="alert alert-{{ session('status') }}" role="alert"></i>
        <strong>{{ session('msg') }}</strong>
    </div>
    @endif

    <div class="row">
        <div class="col-6">
            <h3>Riwayat Peminjaman Buku</h3>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Anggota</th>
                        <th>Judul Buku</th>
                        <th>Tanggal Peminjaman</th>
                        <th>Kondisi buku saat dipinjam</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($peminjaman as $key => $p)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $p->user->fullname }}</td>
                            <td>{{ $p->buku->judul }}</td>
                            <td>{{ $p->tanggal_peminjaman }}</td>
                            <td>{{ $p->kondisi_buku_saat_dipinjam }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
</div>
@endsection