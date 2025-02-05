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
            <h6 class="mb-0">Delete Pendidikan</h6>
        </div>
        <div class="card-body">
            @if(session('status'))
                <div class="alert alert-success mb-1 mt-1">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('pendidikan.destroy',$pendidikan->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('DELETE')
            
                <div class="mb-3">
                    <label class="form-label">kode:</label>
                    <input type="text" name="kode" value="{{ $pendidikan->kode }}" class="form-control" 
                    placeholder="kode" disabled="" readonly="">
                    @error('kode')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">wilayah:</label>
                    <input type="text" name="wilayah" value="{{ $pendidikan->wilayah }}" class="form-control" 
                    placeholder="wilayah" disabled="" readonly="">
                    @error('wilayah')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tidak_belum_sekolah_lk:</label>
                    <input type="text" name="tidak_belum_sekolah_lk" value="{{ $pendidikan->tidak_belum_sekolah_lk }}" class="form-control" 
                    placeholder="tidak_belum_sekolah_lk" disabled="" readonly="">
                    @error('tidak_belum_sekolah_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tidak_belum_sekolah_pr:</label>
                    <input type="text" name="tidak_belum_sekolah_pr" value="{{ $pendidikan->tidak_belum_sekolah_pr }}" class="form-control" 
                    placeholder="tidak_belum_sekolah_pr" disabled="" readonly="">
                    @error('tidak_belum_sekolah_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tidak_belum_sekolah_jml:</label>
                    <input type="text" name="tidak_belum_sekolah_jml" value="{{ $pendidikan->tidak_belum_sekolah_jml }}" class="form-control" 
                    placeholder="tidak_belum_sekolah_jml" disabled="" readonly="">
                    @error('tidak_belum_sekolah_jml')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">belum_tamat_sd_sederajat_lk:</label>
                    <input type="text" name="belum_tamat_sd_sederajat_lk" value="{{ $pendidikan->belum_tamat_sd_sederajat_lk }}" class="form-control" 
                    placeholder="belum_tamat_sd_sederajat_lk" disabled="" readonly="">
                    @error('belum_tamat_sd_sederajat_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">belum_tamat_sd_sederajat_pr:</label>
                    <input type="text" name="belum_tamat_sd_sederajat_pr" value="{{ $pendidikan->belum_tamat_sd_sederajat_pr }}" class="form-control" 
                    placeholder="belum_tamat_sd_sederajat_pr" disabled="" readonly="">
                    @error('belum_tamat_sd_sederajat_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">belum_tamat_sd_sederajat_jml:</label>
                    <input type="text" name="belum_tamat_sd_sederajat_jml" value="{{ $pendidikan->belum_tamat_sd_sederajat_jml }}" class="form-control" 
                    placeholder="belum_tamat_sd_sederajat_jml" disabled="" readonly="">
                    @error('belum_tamat_sd_sederajat_jml')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tamat_sd_sederajat_lk:</label>
                    <input type="text" name="tamat_sd_sederajat_lk" value="{{ $pendidikan->tamat_sd_sederajat_lk }}" class="form-control" 
                    placeholder="tamat_sd_sederajat_lk" disabled="" readonly="">
                    @error('tamat_sd_sederajat_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tamat_sd_sederajat_pr:</label>
                    <input type="text" name="tamat_sd_sederajat_pr" value="{{ $pendidikan->tamat_sd_sederajat_pr }}" class="form-control" 
                    placeholder="tamat_sd_sederajat_pr" disabled="" readonly="">
                    @error('tamat_sd_sederajat_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tamat_sd_sederajat_jml:</label>
                    <input type="text" name="tamat_sd_sederajat_jml" value="{{ $pendidikan->tamat_sd_sederajat_jml }}" class="form-control" 
                    placeholder="tamat_sd_sederajat_jml" disabled="" readonly="">
                    @error('tamat_sd_sederajat_jml')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">sltp_sederajat_lk:</label>
                    <input type="text" name="sltp_sederajat_lk" value="{{ $pendidikan->sltp_sederajat_lk }}" class="form-control" 
                    placeholder="sltp_sederajat_lk" disabled="" readonly="">
                    @error('sltp_sederajat_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">sltp_sederajat_pr:</label>
                    <input type="text" name="sltp_sederajat_pr" value="{{ $pendidikan->sltp_sederajat_pr }}" class="form-control" 
                    placeholder="sltp_sederajat_pr" disabled="" readonly="">
                    @error('sltp_sederajat_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">sltp_sederajat_jml:</label>
                    <input type="text" name="sltp_sederajat_jml" value="{{ $pendidikan->sltp_sederajat_jml }}" class="form-control" 
                    placeholder="sltp_sederajat_jml" disabled="" readonly="">
                    @error('sltp_sederajat_jml')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">slta_sederajat_lk:</label>
                    <input type="text" name="slta_sederajat_lk" value="{{ $pendidikan->slta_sederajat_lk }}" class="form-control" 
                    placeholder="slta_sederajat_lk" disabled="" readonly="">
                    @error('slta_sederajat_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">slta_sederajat_pr:</label>
                    <input type="text" name="slta_sederajat_pr" value="{{ $pendidikan->slta_sederajat_pr }}" class="form-control" 
                    placeholder="slta_sederajat_pr" disabled="" readonly="">
                    @error('slta_sederajat_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">slta_sederajat_jml:</label>
                    <input type="text" name="slta_sederajat_jml" value="{{ $pendidikan->slta_sederajat_jml }}" class="form-control" 
                    placeholder="slta_sederajat_jml" disabled="" readonly="">
                    @error('slta_sederajat_jml')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">diploma_i_ii_lk:</label>
                    <input type="text" name="diploma_i_ii_lk" value="{{ $pendidikan->diploma_i_ii_lk }}" class="form-control" 
                    placeholder="diploma_i_ii_lk" disabled="" readonly="">
                    @error('diploma_i_ii_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">diploma_i_ii_pr:</label>
                    <input type="text" name="diploma_i_ii_pr" value="{{ $pendidikan->diploma_i_ii_pr }}" class="form-control" 
                    placeholder="diploma_i_ii_pr" disabled="" readonly="">
                    @error('diploma_i_ii_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">diploma_i_ii_jml:</label>
                    <input type="text" name="diploma_i_ii_jml" value="{{ $pendidikan->diploma_i_ii_jml }}" class="form-control" 
                    placeholder="diploma_i_ii_jml" disabled="" readonly="">
                    @error('diploma_i_ii_jml')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">akademi_diploma_iii_smuda_lk:</label>
                    <input type="text" name="akademi_diploma_iii_smuda_lk" value="{{ $pendidikan->akademi_diploma_iii_smuda_lk }}" class="form-control" 
                    placeholder="akademi_diploma_iii_smuda_lk" disabled="" readonly="">
                    @error('akademi_diploma_iii_smuda_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">akademi_diploma_iii_smuda_pr:</label>
                    <input type="text" name="akademi_diploma_iii_smuda_pr" value="{{ $pendidikan->akademi_diploma_iii_smuda_pr }}" class="form-control" 
                    placeholder="akademi_diploma_iii_smuda_pr" disabled="" readonly="">
                    @error('akademi_diploma_iii_smuda_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">akademi_diploma_iii_smuda_jml:</label>
                    <input type="text" name="akademi_diploma_iii_smuda_jml" value="{{ $pendidikan->akademi_diploma_iii_smuda_jml }}" class="form-control" 
                    placeholder="akademi_diploma_iii_smuda_jml" disabled="" readonly="">
                    @error('akademi_diploma_iii_smuda_jml')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">diploma_iv_strata_i_lk:</label>
                    <input type="text" name="diploma_iv_strata_i_lk" value="{{ $pendidikan->diploma_iv_strata_i_lk }}" class="form-control" 
                    placeholder="diploma_iv_strata_i_lk" disabled="" readonly="">
                    @error('diploma_iv_strata_i_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">diploma_iv_strata_i_pr:</label>
                    <input type="text" name="diploma_iv_strata_i_pr" value="{{ $pendidikan->diploma_iv_strata_i_pr }}" class="form-control" 
                    placeholder="diploma_iv_strata_i_pr" disabled="" readonly="">
                    @error('diploma_iv_strata_i_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">diploma_iv_strata_i_jml:</label>
                    <input type="text" name="diploma_iv_strata_i_jml" value="{{ $pendidikan->diploma_iv_strata_i_jml }}" class="form-control" 
                    placeholder="diploma_iv_strata_i_jml" disabled="" readonly="">
                    @error('diploma_iv_strata_i_jml')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">strata_ii_lk:</label>
                    <input type="text" name="strata_ii_lk" value="{{ $pendidikan->strata_ii_lk }}" class="form-control" 
                    placeholder="strata_ii_lk" disabled="" readonly="">
                    @error('strata_ii_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">strata_ii_pr:</label>
                    <input type="text" name="strata_ii_pr" value="{{ $pendidikan->strata_ii_pr }}" class="form-control" 
                    placeholder="strata_ii_pr" disabled="" readonly="">
                    @error('strata_ii_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">strata_ii_jml:</label>
                    <input type="text" name="strata_ii_jml" value="{{ $pendidikan->strata_ii_jml }}" class="form-control" 
                    placeholder="strata_ii_jml" disabled="" readonly="">
                    @error('strata_ii_jml')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">strata_iii_lk:</label>
                    <input type="text" name="strata_iii_lk" value="{{ $pendidikan->strata_iii_lk }}" class="form-control" 
                    placeholder="strata_iii_lk" disabled="" readonly="">
                    @error('strata_iii_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">strata_iii_pr:</label>
                    <input type="text" name="strata_iii_pr" value="{{ $pendidikan->strata_iii_pr }}" class="form-control" 
                    placeholder="strata_iii_pr" disabled="" readonly="">
                    @error('strata_iii_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">strata_iii_jml:</label>
                    <input type="text" name="strata_iii_jml" value="{{ $pendidikan->strata_iii_jml }}" class="form-control" 
                    placeholder="strata_iii_jml" disabled="" readonly="">
                    @error('strata_iii_jml')
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