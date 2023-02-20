@extends('layouts.user')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>Formulir Peminjaman</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('user.peminjaman.add') }}" method="POST" class="form-group">
                    @csrf

                    <div class="mb-3">
                        <label for="">Tanggal Peminjaman: </label>
                        <input type="date" class="form-control" name="tanggal_peminjaman">
                    </div>
                    <div class="mb-3">
                        <label for="">Pilih Buku</label>
                        <select name="buku_id" class="form-select">
                            <option value="">Pilih Opsi</option>
                            @foreach ($buku as $b)
                            <option value="{{ $b->id }}" {{ isset($buku_id) ? $buku_id == $b->id ? "selected" : "" : "" }}>{{ $b->judul }}</option>                                
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="">Kondisi Buku</label>
                        <select name="kondisi_buku_saat_dipinjam" id="" class="form-select">
                            <option value="Baik">Baik</option>
                            <option value="Rusak">Rusak</option>
                        </select>
                    </div>
                    <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                    <button class="btn btn-primary text-white" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection