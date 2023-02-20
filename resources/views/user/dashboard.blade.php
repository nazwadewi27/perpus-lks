@extends('layouts.user')
@section('content')
<div class="container">
    @foreach ($pemberitahuan as $p)
        <div class="alert alert-info">
            {{ $p->isi }}
        </div>
    @endforeach
    
    <div class="row">
        @foreach($buku as $b)
        <div class="col-12 col-md-3 col-lg-3">
            <div class="card">
                <div class="card-header">
                    {{ $b->judul }}
                </div>
                <div class="card-body">
                    <div><span>Kategori: {{ $b->pengarang }}</span></div>       
                    <div><span>Penerbit: {{ $b->penerbit->nama }}</span></div>       
                    <div><span>Kategori: {{ $b->kategori->nama }}</span></div>        
                </div>
                <div class="card-footer">
                    <form action="" method="POST">
                        @csrf
                        <input type="hidden" value="{{ $b->id }}" name="buku_id">
                        <button type="submit" class="btn btn-primary">Pinjam</button>
                    </form>
                </div>
            </div>
        </div>
        
        @endforeach
    </div>
      
</div>
@endsection