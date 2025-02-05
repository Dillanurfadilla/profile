@extends('layouts.admin')
@section('main-content')
<!--start breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Master Data</div>
        <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0 align-items-center">
            
            <li class="breadcrumb-item active" aria-current="page">Delete Data</li>
            </ol>
        </nav>
        </div>
        
    </div>
    <!--end breadcrumb-->


    <div class="card">
        <div class="card-header">
            <h6 class="mb-0">Delete Kecamatan</h6>
        </div>
        <div class="card-body">
            @if(session('status'))
                <div class="alert alert-success mb-1 mt-1">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('kecamatan.destroy', $kecamatan->id) }}" method="POST">
    @csrf
    @method('DELETE')

    <div class="mb-3">
        <label class="form-label">Nama Kecamatan:</label>
        <input type="text" value="{{ $kecamatan->nama_kecamatan }}" class="form-control" readonly>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-danger">Delete</button>
    </div>
</form>

    </div>
@endsection