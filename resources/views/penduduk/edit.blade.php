@extends("layouts.admin")
@section("main-content")
<!--start breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Master Data</div>
        <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0 align-items-center">
            
            <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
            </ol>
        </nav>
        </div>
        
    </div>
    <!--end breadcrumb-->


    <div class="card">
        <div class="card-header">
            <h6 class="mb-0">Edit Penduduk</h6>
        </div>
        <div class="card-body">
            @if(session('status'))
                <div class="alert alert-success mb-1 mt-1">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('penduduk.update',$penduduk->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
                <div class="mb-3">
                    <label class="form-label">dkb:</label>
                    <input type="text" name="dkb" value="{{ $penduduk->dkb }}" 
                    class="form-control" placeholder="dkb">
                    @error('dkb')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tahun:</label>
                    <input type="text" name="tahun" value="{{ $penduduk->tahun }}" 
                    class="form-control" placeholder="tahun">
                    @error('tahun')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">kecamatans_id:</label>
                    <input type="text" name="kecamatans_id" value="{{ $penduduk->kecamatans_id }}" 
                    class="form-control" placeholder="kecamatans_id">
                    @error('kecamatans_id')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">desas_id:</label>
                    <input type="text" name="desas_id" value="{{ $penduduk->desas_id }}" 
                    class="form-control" placeholder="desas_id">
                    @error('desas_id')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">agama:</label>
                    <input type="text" name="agama" value="{{ $penduduk->agama }}" 
                    class="form-control" placeholder="agama">
                    @error('agama')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">disabilitas:</label>
                    <input type="text" name="disabilitas" value="{{ $penduduk->disabilitas }}" 
                    class="form-control" placeholder="disabilitas">
                    @error('disabilitas')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">golongan_darah:</label>
                    <input type="text" name="golongan_darah" value="{{ $penduduk->golongan_darah }}" 
                    class="form-control" placeholder="golongan_darah">
                    @error('golongan_darah')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">kepemilikan_kk:</label>
                    <input type="text" name="kepemilikan_kk" value="{{ $penduduk->kepemilikan_kk }}" 
                    class="form-control" placeholder="kepemilikan_kk">
                    @error('kepemilikan_kk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">pekerjaan:</label>
                    <input type="text" name="pekerjaan" value="{{ $penduduk->pekerjaan }}" 
                    class="form-control" placeholder="pekerjaan">
                    @error('pekerjaan')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">pendidikan:</label>
                    <input type="text" name="pendidikan" value="{{ $penduduk->pendidikan }}" 
                    class="form-control" placeholder="pendidikan">
                    @error('pendidikan')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">status_kawin:</label>
                    <input type="text" name="status_kawin" value="{{ $penduduk->status_kawin }}" 
                    class="form-control" placeholder="status_kawin">
                    @error('status_kawin')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">umur_tunggal:</label>
                    <input type="text" name="umur_tunggal" value="{{ $penduduk->umur_tunggal }}" 
                    class="form-control" placeholder="umur_tunggal">
                    @error('umur_tunggal')
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