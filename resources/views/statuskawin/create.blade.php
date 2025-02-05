@extends("layouts.admin")
@section("main-content")
<!--start breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Master Data</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0 align-items-center">
                <li class="breadcrumb-item active" aria-current="page">Import Data</li>
            </ol>
        </nav>
    </div>
</div>
<!--end breadcrumb-->

<div class="card">
    <div class="card-header">
        <h6 class="mb-0">Import Data statuskawin</h6>
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
        <form action="{{ route('statuskawin.import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Pilih File Excel:</label>
                <input type="file" name="excel_file" class="form-control" accept=".xls, .xlsx, .csv">
                @error('excel_file')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
 
            

            <div class="mb-3">
                <button type="submit" class="btn btn-primary ml-3">Import</button>
            </div>
        </form>

        
    </div>
</div>
@endsection
