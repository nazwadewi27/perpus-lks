@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body px-4 py-4-5">
                    <div class="row">
                        <h3>{{ $anggota }}</h3>
                        <span style="color:#25396f">Data User</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body px-4 py-4-5">
                    <div class="row">
                        <h3>{{ $buku }}</h3>
                        <span style="color:#25396f">Data Buku</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body px-4 py-4-5">
                    <div class="row">
                        <h3>{{ $peminjaman }}</h3>
                        <span style="color:#25396f">Data Peminjaman</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body px-4 py-4-5">
                    <div class="row">
                        <h3>{{ $pengembalian }}</h3>
                        <span style="color:#25396f">Data Pengembalian </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection