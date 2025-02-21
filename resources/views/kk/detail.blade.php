<!-- resources/views/kk/detail.blade.php -->
@extends('layouts.admin')

@section('main-content')
<div class="container">
    <h2>Detail Data KK</h2>
    <table class="table table-bordered">
        <tr><th>ID</th><td>{{ $kk->id }}</td></tr>
        <tr><th>Kode</th><td>{{ $kk->kode }}</td></tr>
        <tr><th>Wilayah</th><td>{{ $kk->wilayah }}</td></tr>
        <tr><th>Jumlah KK</th><td>{{ $kk->kk_jml }}</td></tr>
        <tr><th>Kepemilikan LK</th><td>{{ $kk->kepemilikan_lk }}</td></tr>
        <tr><th>Kepemilikan PR</th><td>{{ $kk->kepemilikan_pr }}</td></tr>
        <tr><th>Kepemilikan JML</th><td>{{ $kk->kepemilikan_jml }}</td></tr>
        <tr><th>Belum Memiliki LK</th><td>{{ $kk->belum_memiliki_lk }}</td></tr>
        <tr><th>Belum Memiliki PR</th><td>{{ $kk->belum_memiliki_pr }}</td></tr>
        <tr><th>Belum Memiliki JML</th><td>{{ $kk->belum_memiliki_jml }}</td></tr>
    </table>

    <div class="d-flex mt-3">
        <a href="{{ route('kk') }}" class="btn btn-secondary me-2">
            <ion-icon name="arrow-back-outline"></ion-icon> Kembali
        </a>
        
        <a href="{{ route('kk.edit', $kk->id) }}" class="btn btn-primary me-2">
            <ion-icon name="pencil-sharp"></ion-icon> Edit
        </a>

        <form action="{{ route('kk.destroy', $kk->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">
                <ion-icon name="trash-outline"></ion-icon> Hapus
            </button>
        </form>
    </div>
</div>
@endsection
