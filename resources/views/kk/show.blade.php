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
            <h6 class="mb-0">Delete Kk</h6>
        </div>
        <div class="card-body">
            @if(session('status'))
                <div class="alert alert-success mb-1 mt-1">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('kk.destroy',$kk->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('DELETE')
            
                <div class="mb-3">
                    <label class="form-label">kode:</label>
                    <input type="text" name="kode" value="{{ $kk->kode }}" class="form-control" 
                    placeholder="kode" disabled="" readonly="">
                    @error('kode')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">wilayah:</label>
                    <input type="text" name="wilayah" value="{{ $kk->wilayah }}" class="form-control" 
                    placeholder="wilayah" disabled="" readonly="">
                    @error('wilayah')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">kk_lk:</label>
                    <input type="text" name="kk_lk" value="{{ $kk->kk_lk }}" class="form-control" 
                    placeholder="kk_lk" disabled="" readonly="">
                    @error('kk_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">kk_pr:</label>
                    <input type="text" name="kk_pr" value="{{ $kk->kk_pr }}" class="form-control" 
                    placeholder="kk_pr" disabled="" readonly="">
                    @error('kk_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">kk_jml:</label>
                    <input type="text" name="kk_jml" value="{{ $kk->kk_jml }}" class="form-control" 
                    placeholder="kk_jml" disabled="" readonly="">
                    @error('kk_jml')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">kepemilikan_lk:</label>
                    <input type="text" name="kepemilikan_lk" value="{{ $kk->kepemilikan_lk }}" class="form-control" 
                    placeholder="kepemilikan_lk" disabled="" readonly="">
                    @error('kepemilikan_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">kepemilikan_pr:</label>
                    <input type="text" name="kepemilikan_pr" value="{{ $kk->kepemilikan_pr }}" class="form-control" 
                    placeholder="kepemilikan_pr" disabled="" readonly="">
                    @error('kepemilikan_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">kepemilikan_jml:</label>
                    <input type="text" name="kepemilikan_jml" value="{{ $kk->kepemilikan_jml }}" class="form-control" 
                    placeholder="kepemilikan_jml" disabled="" readonly="">
                    @error('kepemilikan_jml')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">belum_memiliki_lk:</label>
                    <input type="text" name="belum_memiliki_lk" value="{{ $kk->belum_memiliki_lk }}" class="form-control" 
                    placeholder="belum_memiliki_lk" disabled="" readonly="">
                    @error('belum_memiliki_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">belum_memiliki_pr:</label>
                    <input type="text" name="belum_memiliki_pr" value="{{ $kk->belum_memiliki_pr }}" class="form-control" 
                    placeholder="belum_memiliki_pr" disabled="" readonly="">
                    @error('belum_memiliki_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">belum_memiliki_jml:</label>
                    <input type="text" name="belum_memiliki_jml" value="{{ $kk->belum_memiliki_jml }}" class="form-control" 
                    placeholder="belum_memiliki_jml" disabled="" readonly="">
                    @error('belum_memiliki_jml')
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