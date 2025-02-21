@extends('layouts.admin')
@section('main-content')
<!--start breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3"></div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0 align-items-center">
                <li class="breadcrumb-item active" aria-current="page">Input Data</li>
            </ol>
        </nav>
    </div>
</div>
<!--end breadcrumb-->

<div class="card">
    <div class="card-header">
        <h6 class="mb-0">Input Data Kecamatan </h6>
    </div>
    <div class="card-body">
        @if(session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger mb-1 mt-1">
                {{ session('error') }}
            </div>
        @endif
            <!-- Manual Input for Kecamatan -->
            <div class="mb-3">
                <label class="form-label">Nama Kecamatan:</label>
                <input type="text" name="nama_kecamatan" class="form-control" placeholder="Nama Kecamatan">
                @error('nama_kecamatan')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection