@extends("layouts.admin")
@section("main-content")

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
            <h6 class="mb-0">Delete Desaa</h6>
        </div>
        <div class="card-body">
            @if(session('status'))
                <div class="alert alert-success mb-1 mt-1">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('desaa.destroy',$desaa->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('DELETE')
            
                <div class="mb-3">
                    <label class="form-label">desas_id:</label>
                    <input type="text" name="desas_id" value="{{ $desaa->desas_id }}" class="form-control" 
                    placeholder="desas_id" disabled="" readonly="">
                    @error('desas_id')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">kecamatans_id:</label>
                    <input type="text" name="kecamatans_id" value="{{ $desaa->kecamatans_id }}" class="form-control" 
                    placeholder="kecamatans_id" disabled="" readonly="">
                    @error('kecamatans_id')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">nama_desa:</label>
                    <input type="text" name="nama_desa" value="{{ $desaa->nama_desa }}" class="form-control" 
                    placeholder="nama_desa" disabled="" readonly="">
                    @error('nama_desa')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">created_at:</label>
                    <input type="text" name="created_at" value="{{ $desaa->created_at }}" class="form-control" 
                    placeholder="created_at" disabled="" readonly="">
                    @error('created_at')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">updated_at:</label>
                    <input type="text" name="updated_at" value="{{ $desaa->updated_at }}" class="form-control" 
                    placeholder="updated_at" disabled="" readonly="">
                    @error('updated_at')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-danger ml-3">Delete</button>
                </div>

            </form>
        </div>
    </div>
@endsection