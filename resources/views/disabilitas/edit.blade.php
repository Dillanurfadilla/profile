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
            <h6 class="mb-0">Edit Disabilitas</h6>
        </div>
        <div class="card-body">
            @if(session('status'))
                <div class="alert alert-success mb-1 mt-1">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('disabilitas.update',$disabilitas->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
                <div class="mb-3">
                    <label class="form-label">kode:</label>
                    <input type="text" name="kode" value="{{ $disabilitas->kode }}" 
                    class="form-control" placeholder="kode">
                    @error('kode')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">wilayah:</label>
                    <input type="text" name="wilayah" value="{{ $disabilitas->wilayah }}" 
                    class="form-control" placeholder="wilayah">
                    @error('wilayah')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">disabilitas_fisik_lk:</label>
                    <input type="text" name="disabilitas_fisik_lk" value="{{ $disabilitas->disabilitas_fisik_lk }}" 
                    class="form-control" placeholder="disabilitas_fisik_lk">
                    @error('disabilitas_fisik_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">disabilitas_fisik_pr:</label>
                    <input type="text" name="disabilitas_fisik_pr" value="{{ $disabilitas->disabilitas_fisik_pr }}" 
                    class="form-control" placeholder="disabilitas_fisik_pr">
                    @error('disabilitas_fisik_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">disabilitas_fisik_jml:</label>
                    <input type="text" name="disabilitas_fisik_jml" value="{{ $disabilitas->disabilitas_fisik_jml }}" 
                    class="form-control" placeholder="disabilitas_fisik_jml">
                    @error('disabilitas_fisik_jml')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">disabilitas_fisik_dan_mental_lk:</label>
                    <input type="text" name="disabilitas_fisik_dan_mental_lk" value="{{ $disabilitas->disabilitas_fisik_dan_mental_lk }}" 
                    class="form-control" placeholder="disabilitas_fisik_dan_mental_lk">
                    @error('disabilitas_fisik_dan_mental_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">disabilitas_fisik_dan_mental_pr:</label>
                    <input type="text" name="disabilitas_fisik_dan_mental_pr" value="{{ $disabilitas->disabilitas_fisik_dan_mental_pr }}" 
                    class="form-control" placeholder="disabilitas_fisik_dan_mental_pr">
                    @error('disabilitas_fisik_dan_mental_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">disabilitas_fisik_dan_mental_jml:</label>
                    <input type="text" name="disabilitas_fisik_dan_mental_jml" value="{{ $disabilitas->disabilitas_fisik_dan_mental_jml }}" 
                    class="form-control" placeholder="disabilitas_fisik_dan_mental_jml">
                    @error('disabilitas_fisik_dan_mental_jml')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">disabilitas_netra_buta_lk:</label>
                    <input type="text" name="disabilitas_netra_buta_lk" value="{{ $disabilitas->disabilitas_netra_buta_lk }}" 
                    class="form-control" placeholder="disabilitas_netra_buta_lk">
                    @error('disabilitas_netra_buta_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">disabilitas_netra_buta_pr:</label>
                    <input type="text" name="disabilitas_netra_buta_pr" value="{{ $disabilitas->disabilitas_netra_buta_pr }}" 
                    class="form-control" placeholder="disabilitas_netra_buta_pr">
                    @error('disabilitas_netra_buta_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">disabilitas_netra_buta_jml:</label>
                    <input type="text" name="disabilitas_netra_buta_jml" value="{{ $disabilitas->disabilitas_netra_buta_jml }}" 
                    class="form-control" placeholder="disabilitas_netra_buta_jml">
                    @error('disabilitas_netra_buta_jml')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">disabilitas_mental_jiwa_lk:</label>
                    <input type="text" name="disabilitas_mental_jiwa_lk" value="{{ $disabilitas->disabilitas_mental_jiwa_lk }}" 
                    class="form-control" placeholder="disabilitas_mental_jiwa_lk">
                    @error('disabilitas_mental_jiwa_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">disabilitas_mental_jiwa_pr:</label>
                    <input type="text" name="disabilitas_mental_jiwa_pr" value="{{ $disabilitas->disabilitas_mental_jiwa_pr }}" 
                    class="form-control" placeholder="disabilitas_mental_jiwa_pr">
                    @error('disabilitas_mental_jiwa_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">disabilitas_mental_jiwa_jml:</label>
                    <input type="text" name="disabilitas_mental_jiwa_jml" value="{{ $disabilitas->disabilitas_mental_jiwa_jml }}" 
                    class="form-control" placeholder="disabilitas_mental_jiwa_jml">
                    @error('disabilitas_mental_jiwa_jml')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">disabilitas_rungu_wicara_lk:</label>
                    <input type="text" name="disabilitas_rungu_wicara_lk" value="{{ $disabilitas->disabilitas_rungu_wicara_lk }}" 
                    class="form-control" placeholder="disabilitas_rungu_wicara_lk">
                    @error('disabilitas_rungu_wicara_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">disabilitas_rungu_wicara_pr:</label>
                    <input type="text" name="disabilitas_rungu_wicara_pr" value="{{ $disabilitas->disabilitas_rungu_wicara_pr }}" 
                    class="form-control" placeholder="disabilitas_rungu_wicara_pr">
                    @error('disabilitas_rungu_wicara_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">disabilitas_rungu_wicara_jml:</label>
                    <input type="text" name="disabilitas_rungu_wicara_jml" value="{{ $disabilitas->disabilitas_rungu_wicara_jml }}" 
                    class="form-control" placeholder="disabilitas_rungu_wicara_jml">
                    @error('disabilitas_rungu_wicara_jml')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">disabilitas_lainnya_lk:</label>
                    <input type="text" name="disabilitas_lainnya_lk" value="{{ $disabilitas->disabilitas_lainnya_lk }}" 
                    class="form-control" placeholder="disabilitas_lainnya_lk">
                    @error('disabilitas_lainnya_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">disabilitas_lainnya_pr:</label>
                    <input type="text" name="disabilitas_lainnya_pr" value="{{ $disabilitas->disabilitas_lainnya_pr }}" 
                    class="form-control" placeholder="disabilitas_lainnya_pr">
                    @error('disabilitas_lainnya_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">disabilitas_lainnya_jml:</label>
                    <input type="text" name="disabilitas_lainnya_jml" value="{{ $disabilitas->disabilitas_lainnya_jml }}" 
                    class="form-control" placeholder="disabilitas_lainnya_jml">
                    @error('disabilitas_lainnya_jml')
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