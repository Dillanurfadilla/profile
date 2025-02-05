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
            <h6 class="mb-0">Delete Statuskawin</h6>
        </div>
        <div class="card-body">
            @if(session('status'))
                <div class="alert alert-success mb-1 mt-1">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('statuskawin.destroy',$statuskawin->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('DELETE')
            
                <div class="mb-3">
                    <label class="form-label">kode:</label>
                    <input type="text" name="kode" value="{{ $statuskawin->kode }}" class="form-control" 
                    placeholder="kode" disabled="" readonly="">
                    @error('kode')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">wilayah:</label>
                    <input type="text" name="wilayah" value="{{ $statuskawin->wilayah }}" class="form-control" 
                    placeholder="wilayah" disabled="" readonly="">
                    @error('wilayah')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">belum_kawin_lk:</label>
                    <input type="text" name="belum_kawin_lk" value="{{ $statuskawin->belum_kawin_lk }}" class="form-control" 
                    placeholder="belum_kawin_lk" disabled="" readonly="">
                    @error('belum_kawin_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">belum_kawin_pr:</label>
                    <input type="text" name="belum_kawin_pr" value="{{ $statuskawin->belum_kawin_pr }}" class="form-control" 
                    placeholder="belum_kawin_pr" disabled="" readonly="">
                    @error('belum_kawin_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">belum_kawin_jml:</label>
                    <input type="text" name="belum_kawin_jml" value="{{ $statuskawin->belum_kawin_jml }}" class="form-control" 
                    placeholder="belum_kawin_jml" disabled="" readonly="">
                    @error('belum_kawin_jml')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">kawin_lk:</label>
                    <input type="text" name="kawin_lk" value="{{ $statuskawin->kawin_lk }}" class="form-control" 
                    placeholder="kawin_lk" disabled="" readonly="">
                    @error('kawin_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">kawin_pr:</label>
                    <input type="text" name="kawin_pr" value="{{ $statuskawin->kawin_pr }}" class="form-control" 
                    placeholder="kawin_pr" disabled="" readonly="">
                    @error('kawin_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">kawin_jml:</label>
                    <input type="text" name="kawin_jml" value="{{ $statuskawin->kawin_jml }}" class="form-control" 
                    placeholder="kawin_jml" disabled="" readonly="">
                    @error('kawin_jml')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">cerai_hidup_lk:</label>
                    <input type="text" name="cerai_hidup_lk" value="{{ $statuskawin->cerai_hidup_lk }}" class="form-control" 
                    placeholder="cerai_hidup_lk" disabled="" readonly="">
                    @error('cerai_hidup_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">cerai_hidup_pr:</label>
                    <input type="text" name="cerai_hidup_pr" value="{{ $statuskawin->cerai_hidup_pr }}" class="form-control" 
                    placeholder="cerai_hidup_pr" disabled="" readonly="">
                    @error('cerai_hidup_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">cerai_hidup_jml:</label>
                    <input type="text" name="cerai_hidup_jml" value="{{ $statuskawin->cerai_hidup_jml }}" class="form-control" 
                    placeholder="cerai_hidup_jml" disabled="" readonly="">
                    @error('cerai_hidup_jml')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">cerai_mati_lk:</label>
                    <input type="text" name="cerai_mati_lk" value="{{ $statuskawin->cerai_mati_lk }}" class="form-control" 
                    placeholder="cerai_mati_lk" disabled="" readonly="">
                    @error('cerai_mati_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">cerai_mati_pr:</label>
                    <input type="text" name="cerai_mati_pr" value="{{ $statuskawin->cerai_mati_pr }}" class="form-control" 
                    placeholder="cerai_mati_pr" disabled="" readonly="">
                    @error('cerai_mati_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">cerai_mati_jml:</label>
                    <input type="text" name="cerai_mati_jml" value="{{ $statuskawin->cerai_mati_jml }}" class="form-control" 
                    placeholder="cerai_mati_jml" disabled="" readonly="">
                    @error('cerai_mati_jml')
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