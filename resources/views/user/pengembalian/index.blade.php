@extends('layouts.user')
@section('content')
<div class="page-heading">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
          <h3>Riwayat Pengembalian</h3>
        </div>
      </div>
    </div>
    <section class="section">
      <div class="card">
        <div class="card-body">
          <table class="table table-striped" id="table1">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Anggota</th>
                <th>Judul Buku</th>
                <th>Tanggal Pengembalian</th>
                <th>Kondisi Buku Saat Dikembalikan</th>
                <th>Denda</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($pengembalian as $p)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ Auth::user()->fullname }}</td>
                    <td>{{ $p->buku->judul }}</td>
                    <td>{{ $p->tanggal_pengembalian }}</td>
                    <td>{{ $p->kondisi_buku_saat_dikembalikan }}</td>
                    <td>Rp. {{ $p->denda != null ? $p->denda : '0' }}</td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </div>

@endsection