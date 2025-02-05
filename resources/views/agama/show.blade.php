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
            <h6 class="mb-0">Delete Agama</h6>
        </div>
        <div class="card-body">
            @if(session('status'))
                <div class="alert alert-success mb-1 mt-1">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('agama.destroy',$agama->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('DELETE')
            
                <div class="mb-3">
                    <label class="form-label">kode:</label>
                    <input type="text" name="kode" value="{{ $agama->kode }}" class="form-control" 
                    placeholder="kode" disabled="" readonly="">
                    @error('kode')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">wilayah:</label>
                    <input type="text" name="wilayah" value="{{ $agama->wilayah }}" class="form-control" 
                    placeholder="wilayah" disabled="" readonly="">
                    @error('wilayah')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">islam_lk:</label>
                    <input type="text" name="islam_lk" value="{{ $agama->islam_lk }}" class="form-control" 
                    placeholder="islam_lk" disabled="" readonly="">
                    @error('islam_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">islam_pr:</label>
                    <input type="text" name="islam_pr" value="{{ $agama->islam_pr }}" class="form-control" 
                    placeholder="islam_pr" disabled="" readonly="">
                    @error('islam_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">islam_jml:</label>
                    <input type="text" name="islam_jml" value="{{ $agama->islam_jml }}" class="form-control" 
                    placeholder="islam_jml" disabled="" readonly="">
                    @error('islam_jml')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">kristen_lk:</label>
                    <input type="text" name="kristen_lk" value="{{ $agama->kristen_lk }}" class="form-control" 
                    placeholder="kristen_lk" disabled="" readonly="">
                    @error('kristen_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">kristen_pr:</label>
                    <input type="text" name="kristen_pr" value="{{ $agama->kristen_pr }}" class="form-control" 
                    placeholder="kristen_pr" disabled="" readonly="">
                    @error('kristen_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">kristen_jml:</label>
                    <input type="text" name="kristen_jml" value="{{ $agama->kristen_jml }}" class="form-control" 
                    placeholder="kristen_jml" disabled="" readonly="">
                    @error('kristen_jml')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">katholik_lk:</label>
                    <input type="text" name="katholik_lk" value="{{ $agama->katholik_lk }}" class="form-control" 
                    placeholder="katholik_lk" disabled="" readonly="">
                    @error('katholik_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">katholik_pr:</label>
                    <input type="text" name="katholik_pr" value="{{ $agama->katholik_pr }}" class="form-control" 
                    placeholder="katholik_pr" disabled="" readonly="">
                    @error('katholik_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">katholik_jml:</label>
                    <input type="text" name="katholik_jml" value="{{ $agama->katholik_jml }}" class="form-control" 
                    placeholder="katholik_jml" disabled="" readonly="">
                    @error('katholik_jml')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">hindu_lk:</label>
                    <input type="text" name="hindu_lk" value="{{ $agama->hindu_lk }}" class="form-control" 
                    placeholder="hindu_lk" disabled="" readonly="">
                    @error('hindu_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">hindu_pr:</label>
                    <input type="text" name="hindu_pr" value="{{ $agama->hindu_pr }}" class="form-control" 
                    placeholder="hindu_pr" disabled="" readonly="">
                    @error('hindu_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">hindu_jml:</label>
                    <input type="text" name="hindu_jml" value="{{ $agama->hindu_jml }}" class="form-control" 
                    placeholder="hindu_jml" disabled="" readonly="">
                    @error('hindu_jml')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">budha_lk:</label>
                    <input type="text" name="budha_lk" value="{{ $agama->budha_lk }}" class="form-control" 
                    placeholder="budha_lk" disabled="" readonly="">
                    @error('budha_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">budha_pr:</label>
                    <input type="text" name="budha_pr" value="{{ $agama->budha_pr }}" class="form-control" 
                    placeholder="budha_pr" disabled="" readonly="">
                    @error('budha_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">budha_jml:</label>
                    <input type="text" name="budha_jml" value="{{ $agama->budha_jml }}" class="form-control" 
                    placeholder="budha_jml" disabled="" readonly="">
                    @error('budha_jml')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">khonghucu_lk:</label>
                    <input type="text" name="khonghucu_lk" value="{{ $agama->khonghucu_lk }}" class="form-control" 
                    placeholder="khonghucu_lk" disabled="" readonly="">
                    @error('khonghucu_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">khonghucu_pr:</label>
                    <input type="text" name="khonghucu_pr" value="{{ $agama->khonghucu_pr }}" class="form-control" 
                    placeholder="khonghucu_pr" disabled="" readonly="">
                    @error('khonghucu_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">khonghucu_jml:</label>
                    <input type="text" name="khonghucu_jml" value="{{ $agama->khonghucu_jml }}" class="form-control" 
                    placeholder="khonghucu_jml" disabled="" readonly="">
                    @error('khonghucu_jml')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">kepercayaan_lk:</label>
                    <input type="text" name="kepercayaan_lk" value="{{ $agama->kepercayaan_lk }}" class="form-control" 
                    placeholder="kepercayaan_lk" disabled="" readonly="">
                    @error('kepercayaan_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">kepercayaan_pr:</label>
                    <input type="text" name="kepercayaan_pr" value="{{ $agama->kepercayaan_pr }}" class="form-control" 
                    placeholder="kepercayaan_pr" disabled="" readonly="">
                    @error('kepercayaan_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">kepercayaan_jml:</label>
                    <input type="text" name="kepercayaan_jml" value="{{ $agama->kepercayaan_jml }}" class="form-control" 
                    placeholder="kepercayaan_jml" disabled="" readonly="">
                    @error('kepercayaan_jml')
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