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
            <h6 class="mb-0">Delete Umur</h6>
        </div>
        <div class="card-body">
            @if(session('status'))
                <div class="alert alert-success mb-1 mt-1">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('umur.destroy',$umur->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('DELETE')
            
                <div class="mb-3">
                    <label class="form-label">kode:</label>
                    <input type="text" name="kode" value="{{ $umur->kode }}" class="form-control" 
                    placeholder="kode" disabled="" readonly="">
                    @error('kode')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">wilayah:</label>
                    <input type="text" name="wilayah" value="{{ $umur->wilayah }}" class="form-control" 
                    placeholder="wilayah" disabled="" readonly="">
                    @error('wilayah')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">nol_tahun_lk:</label>
                    <input type="text" name="nol_tahun_lk" value="{{ $umur->nol_tahun_lk }}" class="form-control" 
                    placeholder="nol_tahun_lk" disabled="" readonly="">
                    @error('nol_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">nol_tahun_pr:</label>
                    <input type="text" name="nol_tahun_pr" value="{{ $umur->nol_tahun_pr }}" class="form-control" 
                    placeholder="nol_tahun_pr" disabled="" readonly="">
                    @error('nol_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">satu_tahun_lk:</label>
                    <input type="text" name="satu_tahun_lk" value="{{ $umur->satu_tahun_lk }}" class="form-control" 
                    placeholder="satu_tahun_lk" disabled="" readonly="">
                    @error('satu_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">satu_tahun_pr:</label>
                    <input type="text" name="satu_tahun_pr" value="{{ $umur->satu_tahun_pr }}" class="form-control" 
                    placeholder="satu_tahun_pr" disabled="" readonly="">
                    @error('satu_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">dua_tahun_lk:</label>
                    <input type="text" name="dua_tahun_lk" value="{{ $umur->dua_tahun_lk }}" class="form-control" 
                    placeholder="dua_tahun_lk" disabled="" readonly="">
                    @error('dua_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">dua_tahun_pr:</label>
                    <input type="text" name="dua_tahun_pr" value="{{ $umur->dua_tahun_pr }}" class="form-control" 
                    placeholder="dua_tahun_pr" disabled="" readonly="">
                    @error('dua_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tiga_tahun_lk:</label>
                    <input type="text" name="tiga_tahun_lk" value="{{ $umur->tiga_tahun_lk }}" class="form-control" 
                    placeholder="tiga_tahun_lk" disabled="" readonly="">
                    @error('tiga_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tiga_tahun_pr:</label>
                    <input type="text" name="tiga_tahun_pr" value="{{ $umur->tiga_tahun_pr }}" class="form-control" 
                    placeholder="tiga_tahun_pr" disabled="" readonly="">
                    @error('tiga_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">empat_tahun_lk:</label>
                    <input type="text" name="empat_tahun_lk" value="{{ $umur->empat_tahun_lk }}" class="form-control" 
                    placeholder="empat_tahun_lk" disabled="" readonly="">
                    @error('empat_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">empat_tahun_pr:</label>
                    <input type="text" name="empat_tahun_pr" value="{{ $umur->empat_tahun_pr }}" class="form-control" 
                    placeholder="empat_tahun_pr" disabled="" readonly="">
                    @error('empat_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">lima_tahun_lk:</label>
                    <input type="text" name="lima_tahun_lk" value="{{ $umur->lima_tahun_lk }}" class="form-control" 
                    placeholder="lima_tahun_lk" disabled="" readonly="">
                    @error('lima_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">lima_tahun_pr:</label>
                    <input type="text" name="lima_tahun_pr" value="{{ $umur->lima_tahun_pr }}" class="form-control" 
                    placeholder="lima_tahun_pr" disabled="" readonly="">
                    @error('lima_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">enam_tahun_lk:</label>
                    <input type="text" name="enam_tahun_lk" value="{{ $umur->enam_tahun_lk }}" class="form-control" 
                    placeholder="enam_tahun_lk" disabled="" readonly="">
                    @error('enam_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">enam_tahun_pr:</label>
                    <input type="text" name="enam_tahun_pr" value="{{ $umur->enam_tahun_pr }}" class="form-control" 
                    placeholder="enam_tahun_pr" disabled="" readonly="">
                    @error('enam_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tujuh_tahun_lk:</label>
                    <input type="text" name="tujuh_tahun_lk" value="{{ $umur->tujuh_tahun_lk }}" class="form-control" 
                    placeholder="tujuh_tahun_lk" disabled="" readonly="">
                    @error('tujuh_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tujuh_tahun_pr:</label>
                    <input type="text" name="tujuh_tahun_pr" value="{{ $umur->tujuh_tahun_pr }}" class="form-control" 
                    placeholder="tujuh_tahun_pr" disabled="" readonly="">
                    @error('tujuh_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">delapan_tahun_lk:</label>
                    <input type="text" name="delapan_tahun_lk" value="{{ $umur->delapan_tahun_lk }}" class="form-control" 
                    placeholder="delapan_tahun_lk" disabled="" readonly="">
                    @error('delapan_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">delapan_tahun_pr:</label>
                    <input type="text" name="delapan_tahun_pr" value="{{ $umur->delapan_tahun_pr }}" class="form-control" 
                    placeholder="delapan_tahun_pr" disabled="" readonly="">
                    @error('delapan_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">sembilan_tahun_lk:</label>
                    <input type="text" name="sembilan_tahun_lk" value="{{ $umur->sembilan_tahun_lk }}" class="form-control" 
                    placeholder="sembilan_tahun_lk" disabled="" readonly="">
                    @error('sembilan_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">sembilan_tahun_pr:</label>
                    <input type="text" name="sembilan_tahun_pr" value="{{ $umur->sembilan_tahun_pr }}" class="form-control" 
                    placeholder="sembilan_tahun_pr" disabled="" readonly="">
                    @error('sembilan_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">sepuluh_tahun_lk:</label>
                    <input type="text" name="sepuluh_tahun_lk" value="{{ $umur->sepuluh_tahun_lk }}" class="form-control" 
                    placeholder="sepuluh_tahun_lk" disabled="" readonly="">
                    @error('sepuluh_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">sepuluh_tahun_pr:</label>
                    <input type="text" name="sepuluh_tahun_pr" value="{{ $umur->sepuluh_tahun_pr }}" class="form-control" 
                    placeholder="sepuluh_tahun_pr" disabled="" readonly="">
                    @error('sepuluh_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">sebelas_tahun_lk:</label>
                    <input type="text" name="sebelas_tahun_lk" value="{{ $umur->sebelas_tahun_lk }}" class="form-control" 
                    placeholder="sebelas_tahun_lk" disabled="" readonly="">
                    @error('sebelas_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">sebelas_tahun_pr:</label>
                    <input type="text" name="sebelas_tahun_pr" value="{{ $umur->sebelas_tahun_pr }}" class="form-control" 
                    placeholder="sebelas_tahun_pr" disabled="" readonly="">
                    @error('sebelas_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">dua_belas_tahun_lk:</label>
                    <input type="text" name="dua_belas_tahun_lk" value="{{ $umur->dua_belas_tahun_lk }}" class="form-control" 
                    placeholder="dua_belas_tahun_lk" disabled="" readonly="">
                    @error('dua_belas_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">dua_belas_tahun_pr:</label>
                    <input type="text" name="dua_belas_tahun_pr" value="{{ $umur->dua_belas_tahun_pr }}" class="form-control" 
                    placeholder="dua_belas_tahun_pr" disabled="" readonly="">
                    @error('dua_belas_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tiga_belas_tahun_lk:</label>
                    <input type="text" name="tiga_belas_tahun_lk" value="{{ $umur->tiga_belas_tahun_lk }}" class="form-control" 
                    placeholder="tiga_belas_tahun_lk" disabled="" readonly="">
                    @error('tiga_belas_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tiga_belas_tahun_pr:</label>
                    <input type="text" name="tiga_belas_tahun_pr" value="{{ $umur->tiga_belas_tahun_pr }}" class="form-control" 
                    placeholder="tiga_belas_tahun_pr" disabled="" readonly="">
                    @error('tiga_belas_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">empat_belas_tahun_lk:</label>
                    <input type="text" name="empat_belas_tahun_lk" value="{{ $umur->empat_belas_tahun_lk }}" class="form-control" 
                    placeholder="empat_belas_tahun_lk" disabled="" readonly="">
                    @error('empat_belas_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">empat_belas_tahun_pr:</label>
                    <input type="text" name="empat_belas_tahun_pr" value="{{ $umur->empat_belas_tahun_pr }}" class="form-control" 
                    placeholder="empat_belas_tahun_pr" disabled="" readonly="">
                    @error('empat_belas_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">lima_belas_tahun_lk:</label>
                    <input type="text" name="lima_belas_tahun_lk" value="{{ $umur->lima_belas_tahun_lk }}" class="form-control" 
                    placeholder="lima_belas_tahun_lk" disabled="" readonly="">
                    @error('lima_belas_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">lima_belas_tahun_pr:</label>
                    <input type="text" name="lima_belas_tahun_pr" value="{{ $umur->lima_belas_tahun_pr }}" class="form-control" 
                    placeholder="lima_belas_tahun_pr" disabled="" readonly="">
                    @error('lima_belas_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">enam_belas_tahun_lk:</label>
                    <input type="text" name="enam_belas_tahun_lk" value="{{ $umur->enam_belas_tahun_lk }}" class="form-control" 
                    placeholder="enam_belas_tahun_lk" disabled="" readonly="">
                    @error('enam_belas_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">enam_belas_tahun_pr:</label>
                    <input type="text" name="enam_belas_tahun_pr" value="{{ $umur->enam_belas_tahun_pr }}" class="form-control" 
                    placeholder="enam_belas_tahun_pr" disabled="" readonly="">
                    @error('enam_belas_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tujuh_belas_tahun_lk:</label>
                    <input type="text" name="tujuh_belas_tahun_lk" value="{{ $umur->tujuh_belas_tahun_lk }}" class="form-control" 
                    placeholder="tujuh_belas_tahun_lk" disabled="" readonly="">
                    @error('tujuh_belas_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tujuh_belas_tahun_pr:</label>
                    <input type="text" name="tujuh_belas_tahun_pr" value="{{ $umur->tujuh_belas_tahun_pr }}" class="form-control" 
                    placeholder="tujuh_belas_tahun_pr" disabled="" readonly="">
                    @error('tujuh_belas_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">delapan_belas_tahun_lk:</label>
                    <input type="text" name="delapan_belas_tahun_lk" value="{{ $umur->delapan_belas_tahun_lk }}" class="form-control" 
                    placeholder="delapan_belas_tahun_lk" disabled="" readonly="">
                    @error('delapan_belas_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">delapan_belas_tahun_pr:</label>
                    <input type="text" name="delapan_belas_tahun_pr" value="{{ $umur->delapan_belas_tahun_pr }}" class="form-control" 
                    placeholder="delapan_belas_tahun_pr" disabled="" readonly="">
                    @error('delapan_belas_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">sembilan_belas_tahun_lk:</label>
                    <input type="text" name="sembilan_belas_tahun_lk" value="{{ $umur->sembilan_belas_tahun_lk }}" class="form-control" 
                    placeholder="sembilan_belas_tahun_lk" disabled="" readonly="">
                    @error('sembilan_belas_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">sembilan_belas_tahun_pr:</label>
                    <input type="text" name="sembilan_belas_tahun_pr" value="{{ $umur->sembilan_belas_tahun_pr }}" class="form-control" 
                    placeholder="sembilan_belas_tahun_pr" disabled="" readonly="">
                    @error('sembilan_belas_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">dua_puluh_tahun_lk:</label>
                    <input type="text" name="dua_puluh_tahun_lk" value="{{ $umur->dua_puluh_tahun_lk }}" class="form-control" 
                    placeholder="dua_puluh_tahun_lk" disabled="" readonly="">
                    @error('dua_puluh_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">dua_puluh_tahun_pr:</label>
                    <input type="text" name="dua_puluh_tahun_pr" value="{{ $umur->dua_puluh_tahun_pr }}" class="form-control" 
                    placeholder="dua_puluh_tahun_pr" disabled="" readonly="">
                    @error('dua_puluh_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">dua_puluh_satu_tahun_lk:</label>
                    <input type="text" name="dua_puluh_satu_tahun_lk" value="{{ $umur->dua_puluh_satu_tahun_lk }}" class="form-control" 
                    placeholder="dua_puluh_satu_tahun_lk" disabled="" readonly="">
                    @error('dua_puluh_satu_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">dua_puluh_satu_tahun_pr:</label>
                    <input type="text" name="dua_puluh_satu_tahun_pr" value="{{ $umur->dua_puluh_satu_tahun_pr }}" class="form-control" 
                    placeholder="dua_puluh_satu_tahun_pr" disabled="" readonly="">
                    @error('dua_puluh_satu_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">dua_puluh_dua_tahun_lk:</label>
                    <input type="text" name="dua_puluh_dua_tahun_lk" value="{{ $umur->dua_puluh_dua_tahun_lk }}" class="form-control" 
                    placeholder="dua_puluh_dua_tahun_lk" disabled="" readonly="">
                    @error('dua_puluh_dua_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">dua_puluh_dua_tahun_pr:</label>
                    <input type="text" name="dua_puluh_dua_tahun_pr" value="{{ $umur->dua_puluh_dua_tahun_pr }}" class="form-control" 
                    placeholder="dua_puluh_dua_tahun_pr" disabled="" readonly="">
                    @error('dua_puluh_dua_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">dua_puluh_tiga_tahun_lk:</label>
                    <input type="text" name="dua_puluh_tiga_tahun_lk" value="{{ $umur->dua_puluh_tiga_tahun_lk }}" class="form-control" 
                    placeholder="dua_puluh_tiga_tahun_lk" disabled="" readonly="">
                    @error('dua_puluh_tiga_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">dua_puluh_tiga_tahun_pr:</label>
                    <input type="text" name="dua_puluh_tiga_tahun_pr" value="{{ $umur->dua_puluh_tiga_tahun_pr }}" class="form-control" 
                    placeholder="dua_puluh_tiga_tahun_pr" disabled="" readonly="">
                    @error('dua_puluh_tiga_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">dua_puluh_empat_tahun_lk:</label>
                    <input type="text" name="dua_puluh_empat_tahun_lk" value="{{ $umur->dua_puluh_empat_tahun_lk }}" class="form-control" 
                    placeholder="dua_puluh_empat_tahun_lk" disabled="" readonly="">
                    @error('dua_puluh_empat_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">dua_puluh_empat_tahun_pr:</label>
                    <input type="text" name="dua_puluh_empat_tahun_pr" value="{{ $umur->dua_puluh_empat_tahun_pr }}" class="form-control" 
                    placeholder="dua_puluh_empat_tahun_pr" disabled="" readonly="">
                    @error('dua_puluh_empat_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">dua_puluh_lima_tahun_lk:</label>
                    <input type="text" name="dua_puluh_lima_tahun_lk" value="{{ $umur->dua_puluh_lima_tahun_lk }}" class="form-control" 
                    placeholder="dua_puluh_lima_tahun_lk" disabled="" readonly="">
                    @error('dua_puluh_lima_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">dua_puluh_lima_tahun_pr:</label>
                    <input type="text" name="dua_puluh_lima_tahun_pr" value="{{ $umur->dua_puluh_lima_tahun_pr }}" class="form-control" 
                    placeholder="dua_puluh_lima_tahun_pr" disabled="" readonly="">
                    @error('dua_puluh_lima_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">dua_puluh_enam_tahun_lk:</label>
                    <input type="text" name="dua_puluh_enam_tahun_lk" value="{{ $umur->dua_puluh_enam_tahun_lk }}" class="form-control" 
                    placeholder="dua_puluh_enam_tahun_lk" disabled="" readonly="">
                    @error('dua_puluh_enam_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">dua_puluh_enam_tahun_pr:</label>
                    <input type="text" name="dua_puluh_enam_tahun_pr" value="{{ $umur->dua_puluh_enam_tahun_pr }}" class="form-control" 
                    placeholder="dua_puluh_enam_tahun_pr" disabled="" readonly="">
                    @error('dua_puluh_enam_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">dua_puluh_tujuh_tahun_lk:</label>
                    <input type="text" name="dua_puluh_tujuh_tahun_lk" value="{{ $umur->dua_puluh_tujuh_tahun_lk }}" class="form-control" 
                    placeholder="dua_puluh_tujuh_tahun_lk" disabled="" readonly="">
                    @error('dua_puluh_tujuh_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">dua_puluh_tujuh_tahun_pr:</label>
                    <input type="text" name="dua_puluh_tujuh_tahun_pr" value="{{ $umur->dua_puluh_tujuh_tahun_pr }}" class="form-control" 
                    placeholder="dua_puluh_tujuh_tahun_pr" disabled="" readonly="">
                    @error('dua_puluh_tujuh_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">dua_puluh_delapan_tahun_lk:</label>
                    <input type="text" name="dua_puluh_delapan_tahun_lk" value="{{ $umur->dua_puluh_delapan_tahun_lk }}" class="form-control" 
                    placeholder="dua_puluh_delapan_tahun_lk" disabled="" readonly="">
                    @error('dua_puluh_delapan_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">dua_puluh_delapan_tahun_pr:</label>
                    <input type="text" name="dua_puluh_delapan_tahun_pr" value="{{ $umur->dua_puluh_delapan_tahun_pr }}" class="form-control" 
                    placeholder="dua_puluh_delapan_tahun_pr" disabled="" readonly="">
                    @error('dua_puluh_delapan_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">dua_puluh_sembilan_tahun_lk:</label>
                    <input type="text" name="dua_puluh_sembilan_tahun_lk" value="{{ $umur->dua_puluh_sembilan_tahun_lk }}" class="form-control" 
                    placeholder="dua_puluh_sembilan_tahun_lk" disabled="" readonly="">
                    @error('dua_puluh_sembilan_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">dua_puluh_sembilan_tahun_pr:</label>
                    <input type="text" name="dua_puluh_sembilan_tahun_pr" value="{{ $umur->dua_puluh_sembilan_tahun_pr }}" class="form-control" 
                    placeholder="dua_puluh_sembilan_tahun_pr" disabled="" readonly="">
                    @error('dua_puluh_sembilan_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tiga_puluh_tahun_lk:</label>
                    <input type="text" name="tiga_puluh_tahun_lk" value="{{ $umur->tiga_puluh_tahun_lk }}" class="form-control" 
                    placeholder="tiga_puluh_tahun_lk" disabled="" readonly="">
                    @error('tiga_puluh_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tiga_puluh_tahun_pr:</label>
                    <input type="text" name="tiga_puluh_tahun_pr" value="{{ $umur->tiga_puluh_tahun_pr }}" class="form-control" 
                    placeholder="tiga_puluh_tahun_pr" disabled="" readonly="">
                    @error('tiga_puluh_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tiga_puluh_satu_tahun_lk:</label>
                    <input type="text" name="tiga_puluh_satu_tahun_lk" value="{{ $umur->tiga_puluh_satu_tahun_lk }}" class="form-control" 
                    placeholder="tiga_puluh_satu_tahun_lk" disabled="" readonly="">
                    @error('tiga_puluh_satu_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tiga_puluh_satu_tahun_pr:</label>
                    <input type="text" name="tiga_puluh_satu_tahun_pr" value="{{ $umur->tiga_puluh_satu_tahun_pr }}" class="form-control" 
                    placeholder="tiga_puluh_satu_tahun_pr" disabled="" readonly="">
                    @error('tiga_puluh_satu_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tiga_puluh_dua_tahun_lk:</label>
                    <input type="text" name="tiga_puluh_dua_tahun_lk" value="{{ $umur->tiga_puluh_dua_tahun_lk }}" class="form-control" 
                    placeholder="tiga_puluh_dua_tahun_lk" disabled="" readonly="">
                    @error('tiga_puluh_dua_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tiga_puluh_dua_tahun_pr:</label>
                    <input type="text" name="tiga_puluh_dua_tahun_pr" value="{{ $umur->tiga_puluh_dua_tahun_pr }}" class="form-control" 
                    placeholder="tiga_puluh_dua_tahun_pr" disabled="" readonly="">
                    @error('tiga_puluh_dua_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tiga_puluh_tiga_tahun_lk:</label>
                    <input type="text" name="tiga_puluh_tiga_tahun_lk" value="{{ $umur->tiga_puluh_tiga_tahun_lk }}" class="form-control" 
                    placeholder="tiga_puluh_tiga_tahun_lk" disabled="" readonly="">
                    @error('tiga_puluh_tiga_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tiga_puluh_tiga_tahun_pr:</label>
                    <input type="text" name="tiga_puluh_tiga_tahun_pr" value="{{ $umur->tiga_puluh_tiga_tahun_pr }}" class="form-control" 
                    placeholder="tiga_puluh_tiga_tahun_pr" disabled="" readonly="">
                    @error('tiga_puluh_tiga_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tiga_puluh_empat_tahun_lk:</label>
                    <input type="text" name="tiga_puluh_empat_tahun_lk" value="{{ $umur->tiga_puluh_empat_tahun_lk }}" class="form-control" 
                    placeholder="tiga_puluh_empat_tahun_lk" disabled="" readonly="">
                    @error('tiga_puluh_empat_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tiga_puluh_empat_tahun_pr:</label>
                    <input type="text" name="tiga_puluh_empat_tahun_pr" value="{{ $umur->tiga_puluh_empat_tahun_pr }}" class="form-control" 
                    placeholder="tiga_puluh_empat_tahun_pr" disabled="" readonly="">
                    @error('tiga_puluh_empat_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tiga_puluh_lima_tahun_lk:</label>
                    <input type="text" name="tiga_puluh_lima_tahun_lk" value="{{ $umur->tiga_puluh_lima_tahun_lk }}" class="form-control" 
                    placeholder="tiga_puluh_lima_tahun_lk" disabled="" readonly="">
                    @error('tiga_puluh_lima_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tiga_puluh_lima_tahun_pr:</label>
                    <input type="text" name="tiga_puluh_lima_tahun_pr" value="{{ $umur->tiga_puluh_lima_tahun_pr }}" class="form-control" 
                    placeholder="tiga_puluh_lima_tahun_pr" disabled="" readonly="">
                    @error('tiga_puluh_lima_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tiga_puluh_enam_tahun_lk:</label>
                    <input type="text" name="tiga_puluh_enam_tahun_lk" value="{{ $umur->tiga_puluh_enam_tahun_lk }}" class="form-control" 
                    placeholder="tiga_puluh_enam_tahun_lk" disabled="" readonly="">
                    @error('tiga_puluh_enam_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tiga_puluh_enam_tahun_pr:</label>
                    <input type="text" name="tiga_puluh_enam_tahun_pr" value="{{ $umur->tiga_puluh_enam_tahun_pr }}" class="form-control" 
                    placeholder="tiga_puluh_enam_tahun_pr" disabled="" readonly="">
                    @error('tiga_puluh_enam_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tiga_puluh_tujuh_tahun_lk:</label>
                    <input type="text" name="tiga_puluh_tujuh_tahun_lk" value="{{ $umur->tiga_puluh_tujuh_tahun_lk }}" class="form-control" 
                    placeholder="tiga_puluh_tujuh_tahun_lk" disabled="" readonly="">
                    @error('tiga_puluh_tujuh_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tiga_puluh_tujuh_tahun_pr:</label>
                    <input type="text" name="tiga_puluh_tujuh_tahun_pr" value="{{ $umur->tiga_puluh_tujuh_tahun_pr }}" class="form-control" 
                    placeholder="tiga_puluh_tujuh_tahun_pr" disabled="" readonly="">
                    @error('tiga_puluh_tujuh_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tiga_puluh_delapan_tahun_lk:</label>
                    <input type="text" name="tiga_puluh_delapan_tahun_lk" value="{{ $umur->tiga_puluh_delapan_tahun_lk }}" class="form-control" 
                    placeholder="tiga_puluh_delapan_tahun_lk" disabled="" readonly="">
                    @error('tiga_puluh_delapan_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tiga_puluh_delapan_tahun_pr:</label>
                    <input type="text" name="tiga_puluh_delapan_tahun_pr" value="{{ $umur->tiga_puluh_delapan_tahun_pr }}" class="form-control" 
                    placeholder="tiga_puluh_delapan_tahun_pr" disabled="" readonly="">
                    @error('tiga_puluh_delapan_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tiga_puluh_sembilan_tahun_lk:</label>
                    <input type="text" name="tiga_puluh_sembilan_tahun_lk" value="{{ $umur->tiga_puluh_sembilan_tahun_lk }}" class="form-control" 
                    placeholder="tiga_puluh_sembilan_tahun_lk" disabled="" readonly="">
                    @error('tiga_puluh_sembilan_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tiga_puluh_sembilan_tahun_pr:</label>
                    <input type="text" name="tiga_puluh_sembilan_tahun_pr" value="{{ $umur->tiga_puluh_sembilan_tahun_pr }}" class="form-control" 
                    placeholder="tiga_puluh_sembilan_tahun_pr" disabled="" readonly="">
                    @error('tiga_puluh_sembilan_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">empat_puluh_tahun_lk:</label>
                    <input type="text" name="empat_puluh_tahun_lk" value="{{ $umur->empat_puluh_tahun_lk }}" class="form-control" 
                    placeholder="empat_puluh_tahun_lk" disabled="" readonly="">
                    @error('empat_puluh_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">empat_puluh_tahun_pr:</label>
                    <input type="text" name="empat_puluh_tahun_pr" value="{{ $umur->empat_puluh_tahun_pr }}" class="form-control" 
                    placeholder="empat_puluh_tahun_pr" disabled="" readonly="">
                    @error('empat_puluh_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">empat_puluh_satu_tahun_lk:</label>
                    <input type="text" name="empat_puluh_satu_tahun_lk" value="{{ $umur->empat_puluh_satu_tahun_lk }}" class="form-control" 
                    placeholder="empat_puluh_satu_tahun_lk" disabled="" readonly="">
                    @error('empat_puluh_satu_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">empat_puluh_satu_tahun_pr:</label>
                    <input type="text" name="empat_puluh_satu_tahun_pr" value="{{ $umur->empat_puluh_satu_tahun_pr }}" class="form-control" 
                    placeholder="empat_puluh_satu_tahun_pr" disabled="" readonly="">
                    @error('empat_puluh_satu_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">empat_puluh_dua_tahun_lk:</label>
                    <input type="text" name="empat_puluh_dua_tahun_lk" value="{{ $umur->empat_puluh_dua_tahun_lk }}" class="form-control" 
                    placeholder="empat_puluh_dua_tahun_lk" disabled="" readonly="">
                    @error('empat_puluh_dua_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">empat_puluh_dua_tahun_pr:</label>
                    <input type="text" name="empat_puluh_dua_tahun_pr" value="{{ $umur->empat_puluh_dua_tahun_pr }}" class="form-control" 
                    placeholder="empat_puluh_dua_tahun_pr" disabled="" readonly="">
                    @error('empat_puluh_dua_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">empat_puluh_tiga_tahun_lk:</label>
                    <input type="text" name="empat_puluh_tiga_tahun_lk" value="{{ $umur->empat_puluh_tiga_tahun_lk }}" class="form-control" 
                    placeholder="empat_puluh_tiga_tahun_lk" disabled="" readonly="">
                    @error('empat_puluh_tiga_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">empat_puluh_tiga_tahun_pr:</label>
                    <input type="text" name="empat_puluh_tiga_tahun_pr" value="{{ $umur->empat_puluh_tiga_tahun_pr }}" class="form-control" 
                    placeholder="empat_puluh_tiga_tahun_pr" disabled="" readonly="">
                    @error('empat_puluh_tiga_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">empat_puluh_empat_tahun_lk:</label>
                    <input type="text" name="empat_puluh_empat_tahun_lk" value="{{ $umur->empat_puluh_empat_tahun_lk }}" class="form-control" 
                    placeholder="empat_puluh_empat_tahun_lk" disabled="" readonly="">
                    @error('empat_puluh_empat_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">empat_puluh_empat_tahun_pr:</label>
                    <input type="text" name="empat_puluh_empat_tahun_pr" value="{{ $umur->empat_puluh_empat_tahun_pr }}" class="form-control" 
                    placeholder="empat_puluh_empat_tahun_pr" disabled="" readonly="">
                    @error('empat_puluh_empat_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">empat_puluh_lima_tahun_lk:</label>
                    <input type="text" name="empat_puluh_lima_tahun_lk" value="{{ $umur->empat_puluh_lima_tahun_lk }}" class="form-control" 
                    placeholder="empat_puluh_lima_tahun_lk" disabled="" readonly="">
                    @error('empat_puluh_lima_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">empat_puluh_lima_tahun_pr:</label>
                    <input type="text" name="empat_puluh_lima_tahun_pr" value="{{ $umur->empat_puluh_lima_tahun_pr }}" class="form-control" 
                    placeholder="empat_puluh_lima_tahun_pr" disabled="" readonly="">
                    @error('empat_puluh_lima_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">empat_puluh_enam_tahun_lk:</label>
                    <input type="text" name="empat_puluh_enam_tahun_lk" value="{{ $umur->empat_puluh_enam_tahun_lk }}" class="form-control" 
                    placeholder="empat_puluh_enam_tahun_lk" disabled="" readonly="">
                    @error('empat_puluh_enam_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">empat_puluh_enam_tahun_pr:</label>
                    <input type="text" name="empat_puluh_enam_tahun_pr" value="{{ $umur->empat_puluh_enam_tahun_pr }}" class="form-control" 
                    placeholder="empat_puluh_enam_tahun_pr" disabled="" readonly="">
                    @error('empat_puluh_enam_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">empat_puluh_tujuh_tahun_lk:</label>
                    <input type="text" name="empat_puluh_tujuh_tahun_lk" value="{{ $umur->empat_puluh_tujuh_tahun_lk }}" class="form-control" 
                    placeholder="empat_puluh_tujuh_tahun_lk" disabled="" readonly="">
                    @error('empat_puluh_tujuh_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">empat_puluh_tujuh_tahun_pr:</label>
                    <input type="text" name="empat_puluh_tujuh_tahun_pr" value="{{ $umur->empat_puluh_tujuh_tahun_pr }}" class="form-control" 
                    placeholder="empat_puluh_tujuh_tahun_pr" disabled="" readonly="">
                    @error('empat_puluh_tujuh_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">empat_puluh_delapan_tahun_lk:</label>
                    <input type="text" name="empat_puluh_delapan_tahun_lk" value="{{ $umur->empat_puluh_delapan_tahun_lk }}" class="form-control" 
                    placeholder="empat_puluh_delapan_tahun_lk" disabled="" readonly="">
                    @error('empat_puluh_delapan_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">empat_puluh_delapan_tahun_pr:</label>
                    <input type="text" name="empat_puluh_delapan_tahun_pr" value="{{ $umur->empat_puluh_delapan_tahun_pr }}" class="form-control" 
                    placeholder="empat_puluh_delapan_tahun_pr" disabled="" readonly="">
                    @error('empat_puluh_delapan_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">empat_puluh_sembilan_tahun_lk:</label>
                    <input type="text" name="empat_puluh_sembilan_tahun_lk" value="{{ $umur->empat_puluh_sembilan_tahun_lk }}" class="form-control" 
                    placeholder="empat_puluh_sembilan_tahun_lk" disabled="" readonly="">
                    @error('empat_puluh_sembilan_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">empat_puluh_sembilan_tahun_pr:</label>
                    <input type="text" name="empat_puluh_sembilan_tahun_pr" value="{{ $umur->empat_puluh_sembilan_tahun_pr }}" class="form-control" 
                    placeholder="empat_puluh_sembilan_tahun_pr" disabled="" readonly="">
                    @error('empat_puluh_sembilan_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">lima_puluh_tahun_lk:</label>
                    <input type="text" name="lima_puluh_tahun_lk" value="{{ $umur->lima_puluh_tahun_lk }}" class="form-control" 
                    placeholder="lima_puluh_tahun_lk" disabled="" readonly="">
                    @error('lima_puluh_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">lima_puluh_tahun_pr:</label>
                    <input type="text" name="lima_puluh_tahun_pr" value="{{ $umur->lima_puluh_tahun_pr }}" class="form-control" 
                    placeholder="lima_puluh_tahun_pr" disabled="" readonly="">
                    @error('lima_puluh_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">lima_puluh_satu_tahun_lk:</label>
                    <input type="text" name="lima_puluh_satu_tahun_lk" value="{{ $umur->lima_puluh_satu_tahun_lk }}" class="form-control" 
                    placeholder="lima_puluh_satu_tahun_lk" disabled="" readonly="">
                    @error('lima_puluh_satu_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">lima_puluh_satu_tahun_pr:</label>
                    <input type="text" name="lima_puluh_satu_tahun_pr" value="{{ $umur->lima_puluh_satu_tahun_pr }}" class="form-control" 
                    placeholder="lima_puluh_satu_tahun_pr" disabled="" readonly="">
                    @error('lima_puluh_satu_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">lima_puluh_dua_tahun_lk:</label>
                    <input type="text" name="lima_puluh_dua_tahun_lk" value="{{ $umur->lima_puluh_dua_tahun_lk }}" class="form-control" 
                    placeholder="lima_puluh_dua_tahun_lk" disabled="" readonly="">
                    @error('lima_puluh_dua_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">lima_puluh_dua_tahun_pr:</label>
                    <input type="text" name="lima_puluh_dua_tahun_pr" value="{{ $umur->lima_puluh_dua_tahun_pr }}" class="form-control" 
                    placeholder="lima_puluh_dua_tahun_pr" disabled="" readonly="">
                    @error('lima_puluh_dua_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">lima_puluh_tiga_tahun_lk:</label>
                    <input type="text" name="lima_puluh_tiga_tahun_lk" value="{{ $umur->lima_puluh_tiga_tahun_lk }}" class="form-control" 
                    placeholder="lima_puluh_tiga_tahun_lk" disabled="" readonly="">
                    @error('lima_puluh_tiga_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">lima_puluh_tiga_tahun_pr:</label>
                    <input type="text" name="lima_puluh_tiga_tahun_pr" value="{{ $umur->lima_puluh_tiga_tahun_pr }}" class="form-control" 
                    placeholder="lima_puluh_tiga_tahun_pr" disabled="" readonly="">
                    @error('lima_puluh_tiga_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">lima_puluh_empat_tahun_lk:</label>
                    <input type="text" name="lima_puluh_empat_tahun_lk" value="{{ $umur->lima_puluh_empat_tahun_lk }}" class="form-control" 
                    placeholder="lima_puluh_empat_tahun_lk" disabled="" readonly="">
                    @error('lima_puluh_empat_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">lima_puluh_empat_tahun_pr:</label>
                    <input type="text" name="lima_puluh_empat_tahun_pr" value="{{ $umur->lima_puluh_empat_tahun_pr }}" class="form-control" 
                    placeholder="lima_puluh_empat_tahun_pr" disabled="" readonly="">
                    @error('lima_puluh_empat_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">lima_puluh_lima_tahun_lk:</label>
                    <input type="text" name="lima_puluh_lima_tahun_lk" value="{{ $umur->lima_puluh_lima_tahun_lk }}" class="form-control" 
                    placeholder="lima_puluh_lima_tahun_lk" disabled="" readonly="">
                    @error('lima_puluh_lima_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">lima_puluh_lima_tahun_pr:</label>
                    <input type="text" name="lima_puluh_lima_tahun_pr" value="{{ $umur->lima_puluh_lima_tahun_pr }}" class="form-control" 
                    placeholder="lima_puluh_lima_tahun_pr" disabled="" readonly="">
                    @error('lima_puluh_lima_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">lima_puluh_enam_tahun_lk:</label>
                    <input type="text" name="lima_puluh_enam_tahun_lk" value="{{ $umur->lima_puluh_enam_tahun_lk }}" class="form-control" 
                    placeholder="lima_puluh_enam_tahun_lk" disabled="" readonly="">
                    @error('lima_puluh_enam_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">lima_puluh_enam_tahun_pr:</label>
                    <input type="text" name="lima_puluh_enam_tahun_pr" value="{{ $umur->lima_puluh_enam_tahun_pr }}" class="form-control" 
                    placeholder="lima_puluh_enam_tahun_pr" disabled="" readonly="">
                    @error('lima_puluh_enam_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">lima_puluh_tujuh_tahun_lk:</label>
                    <input type="text" name="lima_puluh_tujuh_tahun_lk" value="{{ $umur->lima_puluh_tujuh_tahun_lk }}" class="form-control" 
                    placeholder="lima_puluh_tujuh_tahun_lk" disabled="" readonly="">
                    @error('lima_puluh_tujuh_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">lima_puluh_tujuh_tahun_pr:</label>
                    <input type="text" name="lima_puluh_tujuh_tahun_pr" value="{{ $umur->lima_puluh_tujuh_tahun_pr }}" class="form-control" 
                    placeholder="lima_puluh_tujuh_tahun_pr" disabled="" readonly="">
                    @error('lima_puluh_tujuh_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">lima_puluh_delapan_tahun_lk:</label>
                    <input type="text" name="lima_puluh_delapan_tahun_lk" value="{{ $umur->lima_puluh_delapan_tahun_lk }}" class="form-control" 
                    placeholder="lima_puluh_delapan_tahun_lk" disabled="" readonly="">
                    @error('lima_puluh_delapan_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">lima_puluh_delapan_tahun_pr:</label>
                    <input type="text" name="lima_puluh_delapan_tahun_pr" value="{{ $umur->lima_puluh_delapan_tahun_pr }}" class="form-control" 
                    placeholder="lima_puluh_delapan_tahun_pr" disabled="" readonly="">
                    @error('lima_puluh_delapan_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">lima_puluh_sembilan_tahun_lk:</label>
                    <input type="text" name="lima_puluh_sembilan_tahun_lk" value="{{ $umur->lima_puluh_sembilan_tahun_lk }}" class="form-control" 
                    placeholder="lima_puluh_sembilan_tahun_lk" disabled="" readonly="">
                    @error('lima_puluh_sembilan_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">lima_puluh_sembilan_tahun_pr:</label>
                    <input type="text" name="lima_puluh_sembilan_tahun_pr" value="{{ $umur->lima_puluh_sembilan_tahun_pr }}" class="form-control" 
                    placeholder="lima_puluh_sembilan_tahun_pr" disabled="" readonly="">
                    @error('lima_puluh_sembilan_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">enam_puluh_tahun_lk:</label>
                    <input type="text" name="enam_puluh_tahun_lk" value="{{ $umur->enam_puluh_tahun_lk }}" class="form-control" 
                    placeholder="enam_puluh_tahun_lk" disabled="" readonly="">
                    @error('enam_puluh_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">enam_puluh_tahun_pr:</label>
                    <input type="text" name="enam_puluh_tahun_pr" value="{{ $umur->enam_puluh_tahun_pr }}" class="form-control" 
                    placeholder="enam_puluh_tahun_pr" disabled="" readonly="">
                    @error('enam_puluh_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">enam_puluh_satu_tahun_lk:</label>
                    <input type="text" name="enam_puluh_satu_tahun_lk" value="{{ $umur->enam_puluh_satu_tahun_lk }}" class="form-control" 
                    placeholder="enam_puluh_satu_tahun_lk" disabled="" readonly="">
                    @error('enam_puluh_satu_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">enam_puluh_satu_tahun_pr:</label>
                    <input type="text" name="enam_puluh_satu_tahun_pr" value="{{ $umur->enam_puluh_satu_tahun_pr }}" class="form-control" 
                    placeholder="enam_puluh_satu_tahun_pr" disabled="" readonly="">
                    @error('enam_puluh_satu_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">enam_puluh_dua_tahun_lk:</label>
                    <input type="text" name="enam_puluh_dua_tahun_lk" value="{{ $umur->enam_puluh_dua_tahun_lk }}" class="form-control" 
                    placeholder="enam_puluh_dua_tahun_lk" disabled="" readonly="">
                    @error('enam_puluh_dua_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">enam_puluh_dua_tahun_pr:</label>
                    <input type="text" name="enam_puluh_dua_tahun_pr" value="{{ $umur->enam_puluh_dua_tahun_pr }}" class="form-control" 
                    placeholder="enam_puluh_dua_tahun_pr" disabled="" readonly="">
                    @error('enam_puluh_dua_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">enam_puluh_tiga_tahun_lk:</label>
                    <input type="text" name="enam_puluh_tiga_tahun_lk" value="{{ $umur->enam_puluh_tiga_tahun_lk }}" class="form-control" 
                    placeholder="enam_puluh_tiga_tahun_lk" disabled="" readonly="">
                    @error('enam_puluh_tiga_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">enam_puluh_tiga_tahun_pr:</label>
                    <input type="text" name="enam_puluh_tiga_tahun_pr" value="{{ $umur->enam_puluh_tiga_tahun_pr }}" class="form-control" 
                    placeholder="enam_puluh_tiga_tahun_pr" disabled="" readonly="">
                    @error('enam_puluh_tiga_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">enam_puluh_empat_tahun_lk:</label>
                    <input type="text" name="enam_puluh_empat_tahun_lk" value="{{ $umur->enam_puluh_empat_tahun_lk }}" class="form-control" 
                    placeholder="enam_puluh_empat_tahun_lk" disabled="" readonly="">
                    @error('enam_puluh_empat_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">enam_puluh_empat_tahun_pr:</label>
                    <input type="text" name="enam_puluh_empat_tahun_pr" value="{{ $umur->enam_puluh_empat_tahun_pr }}" class="form-control" 
                    placeholder="enam_puluh_empat_tahun_pr" disabled="" readonly="">
                    @error('enam_puluh_empat_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">enam_puluh_lima_tahun_lk:</label>
                    <input type="text" name="enam_puluh_lima_tahun_lk" value="{{ $umur->enam_puluh_lima_tahun_lk }}" class="form-control" 
                    placeholder="enam_puluh_lima_tahun_lk" disabled="" readonly="">
                    @error('enam_puluh_lima_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">enam_puluh_lima_tahun_pr:</label>
                    <input type="text" name="enam_puluh_lima_tahun_pr" value="{{ $umur->enam_puluh_lima_tahun_pr }}" class="form-control" 
                    placeholder="enam_puluh_lima_tahun_pr" disabled="" readonly="">
                    @error('enam_puluh_lima_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">enam_puluh_enam_tahun_lk:</label>
                    <input type="text" name="enam_puluh_enam_tahun_lk" value="{{ $umur->enam_puluh_enam_tahun_lk }}" class="form-control" 
                    placeholder="enam_puluh_enam_tahun_lk" disabled="" readonly="">
                    @error('enam_puluh_enam_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">enam_puluh_enam_tahun_pr:</label>
                    <input type="text" name="enam_puluh_enam_tahun_pr" value="{{ $umur->enam_puluh_enam_tahun_pr }}" class="form-control" 
                    placeholder="enam_puluh_enam_tahun_pr" disabled="" readonly="">
                    @error('enam_puluh_enam_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">enam_puluh_tujuh_tahun_lk:</label>
                    <input type="text" name="enam_puluh_tujuh_tahun_lk" value="{{ $umur->enam_puluh_tujuh_tahun_lk }}" class="form-control" 
                    placeholder="enam_puluh_tujuh_tahun_lk" disabled="" readonly="">
                    @error('enam_puluh_tujuh_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">enam_puluh_tujuh_tahun_pr:</label>
                    <input type="text" name="enam_puluh_tujuh_tahun_pr" value="{{ $umur->enam_puluh_tujuh_tahun_pr }}" class="form-control" 
                    placeholder="enam_puluh_tujuh_tahun_pr" disabled="" readonly="">
                    @error('enam_puluh_tujuh_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">enam_puluh_delapan_tahun_lk:</label>
                    <input type="text" name="enam_puluh_delapan_tahun_lk" value="{{ $umur->enam_puluh_delapan_tahun_lk }}" class="form-control" 
                    placeholder="enam_puluh_delapan_tahun_lk" disabled="" readonly="">
                    @error('enam_puluh_delapan_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">enam_puluh_delapan_tahun_pr:</label>
                    <input type="text" name="enam_puluh_delapan_tahun_pr" value="{{ $umur->enam_puluh_delapan_tahun_pr }}" class="form-control" 
                    placeholder="enam_puluh_delapan_tahun_pr" disabled="" readonly="">
                    @error('enam_puluh_delapan_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">enam_puluh_sembilan_tahun_lk:</label>
                    <input type="text" name="enam_puluh_sembilan_tahun_lk" value="{{ $umur->enam_puluh_sembilan_tahun_lk }}" class="form-control" 
                    placeholder="enam_puluh_sembilan_tahun_lk" disabled="" readonly="">
                    @error('enam_puluh_sembilan_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">enam_puluh_sembilan_tahun_pr:</label>
                    <input type="text" name="enam_puluh_sembilan_tahun_pr" value="{{ $umur->enam_puluh_sembilan_tahun_pr }}" class="form-control" 
                    placeholder="enam_puluh_sembilan_tahun_pr" disabled="" readonly="">
                    @error('enam_puluh_sembilan_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tujuh_puluh_tahun_lk:</label>
                    <input type="text" name="tujuh_puluh_tahun_lk" value="{{ $umur->tujuh_puluh_tahun_lk }}" class="form-control" 
                    placeholder="tujuh_puluh_tahun_lk" disabled="" readonly="">
                    @error('tujuh_puluh_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tujuh_puluh_tahun_pr:</label>
                    <input type="text" name="tujuh_puluh_tahun_pr" value="{{ $umur->tujuh_puluh_tahun_pr }}" class="form-control" 
                    placeholder="tujuh_puluh_tahun_pr" disabled="" readonly="">
                    @error('tujuh_puluh_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tujuh_puluh_satu_tahun_lk:</label>
                    <input type="text" name="tujuh_puluh_satu_tahun_lk" value="{{ $umur->tujuh_puluh_satu_tahun_lk }}" class="form-control" 
                    placeholder="tujuh_puluh_satu_tahun_lk" disabled="" readonly="">
                    @error('tujuh_puluh_satu_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tujuh_puluh_satu_tahun_pr:</label>
                    <input type="text" name="tujuh_puluh_satu_tahun_pr" value="{{ $umur->tujuh_puluh_satu_tahun_pr }}" class="form-control" 
                    placeholder="tujuh_puluh_satu_tahun_pr" disabled="" readonly="">
                    @error('tujuh_puluh_satu_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tujuh_puluh_dua_tahun_lk:</label>
                    <input type="text" name="tujuh_puluh_dua_tahun_lk" value="{{ $umur->tujuh_puluh_dua_tahun_lk }}" class="form-control" 
                    placeholder="tujuh_puluh_dua_tahun_lk" disabled="" readonly="">
                    @error('tujuh_puluh_dua_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tujuh_puluh_dua_tahun_pr:</label>
                    <input type="text" name="tujuh_puluh_dua_tahun_pr" value="{{ $umur->tujuh_puluh_dua_tahun_pr }}" class="form-control" 
                    placeholder="tujuh_puluh_dua_tahun_pr" disabled="" readonly="">
                    @error('tujuh_puluh_dua_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tujuh_puluh_tiga_tahun_lk:</label>
                    <input type="text" name="tujuh_puluh_tiga_tahun_lk" value="{{ $umur->tujuh_puluh_tiga_tahun_lk }}" class="form-control" 
                    placeholder="tujuh_puluh_tiga_tahun_lk" disabled="" readonly="">
                    @error('tujuh_puluh_tiga_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tujuh_puluh_tiga_tahun_pr:</label>
                    <input type="text" name="tujuh_puluh_tiga_tahun_pr" value="{{ $umur->tujuh_puluh_tiga_tahun_pr }}" class="form-control" 
                    placeholder="tujuh_puluh_tiga_tahun_pr" disabled="" readonly="">
                    @error('tujuh_puluh_tiga_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tujuh_puluh_empat_tahun_lk:</label>
                    <input type="text" name="tujuh_puluh_empat_tahun_lk" value="{{ $umur->tujuh_puluh_empat_tahun_lk }}" class="form-control" 
                    placeholder="tujuh_puluh_empat_tahun_lk" disabled="" readonly="">
                    @error('tujuh_puluh_empat_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tujuh_puluh_empat_tahun_pr:</label>
                    <input type="text" name="tujuh_puluh_empat_tahun_pr" value="{{ $umur->tujuh_puluh_empat_tahun_pr }}" class="form-control" 
                    placeholder="tujuh_puluh_empat_tahun_pr" disabled="" readonly="">
                    @error('tujuh_puluh_empat_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tujuh_puluh_lima_tahun_lk:</label>
                    <input type="text" name="tujuh_puluh_lima_tahun_lk" value="{{ $umur->tujuh_puluh_lima_tahun_lk }}" class="form-control" 
                    placeholder="tujuh_puluh_lima_tahun_lk" disabled="" readonly="">
                    @error('tujuh_puluh_lima_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tujuh_puluh_lima_tahun_pr:</label>
                    <input type="text" name="tujuh_puluh_lima_tahun_pr" value="{{ $umur->tujuh_puluh_lima_tahun_pr }}" class="form-control" 
                    placeholder="tujuh_puluh_lima_tahun_pr" disabled="" readonly="">
                    @error('tujuh_puluh_lima_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tujuh_puluh_enam_tahun_lk:</label>
                    <input type="text" name="tujuh_puluh_enam_tahun_lk" value="{{ $umur->tujuh_puluh_enam_tahun_lk }}" class="form-control" 
                    placeholder="tujuh_puluh_enam_tahun_lk" disabled="" readonly="">
                    @error('tujuh_puluh_enam_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tujuh_puluh_enam_tahun_pr:</label>
                    <input type="text" name="tujuh_puluh_enam_tahun_pr" value="{{ $umur->tujuh_puluh_enam_tahun_pr }}" class="form-control" 
                    placeholder="tujuh_puluh_enam_tahun_pr" disabled="" readonly="">
                    @error('tujuh_puluh_enam_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tujuh_puluh_tujuh_tahun_lk:</label>
                    <input type="text" name="tujuh_puluh_tujuh_tahun_lk" value="{{ $umur->tujuh_puluh_tujuh_tahun_lk }}" class="form-control" 
                    placeholder="tujuh_puluh_tujuh_tahun_lk" disabled="" readonly="">
                    @error('tujuh_puluh_tujuh_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tujuh_puluh_tujuh_tahun_pr:</label>
                    <input type="text" name="tujuh_puluh_tujuh_tahun_pr" value="{{ $umur->tujuh_puluh_tujuh_tahun_pr }}" class="form-control" 
                    placeholder="tujuh_puluh_tujuh_tahun_pr" disabled="" readonly="">
                    @error('tujuh_puluh_tujuh_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tujuh_puluh_delapan_tahun_lk:</label>
                    <input type="text" name="tujuh_puluh_delapan_tahun_lk" value="{{ $umur->tujuh_puluh_delapan_tahun_lk }}" class="form-control" 
                    placeholder="tujuh_puluh_delapan_tahun_lk" disabled="" readonly="">
                    @error('tujuh_puluh_delapan_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tujuh_puluh_delapan_tahun_pr:</label>
                    <input type="text" name="tujuh_puluh_delapan_tahun_pr" value="{{ $umur->tujuh_puluh_delapan_tahun_pr }}" class="form-control" 
                    placeholder="tujuh_puluh_delapan_tahun_pr" disabled="" readonly="">
                    @error('tujuh_puluh_delapan_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tujuh_puluh_sembilan_tahun_lk:</label>
                    <input type="text" name="tujuh_puluh_sembilan_tahun_lk" value="{{ $umur->tujuh_puluh_sembilan_tahun_lk }}" class="form-control" 
                    placeholder="tujuh_puluh_sembilan_tahun_lk" disabled="" readonly="">
                    @error('tujuh_puluh_sembilan_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tujuh_puluh_sembilan_tahun_pr:</label>
                    <input type="text" name="tujuh_puluh_sembilan_tahun_pr" value="{{ $umur->tujuh_puluh_sembilan_tahun_pr }}" class="form-control" 
                    placeholder="tujuh_puluh_sembilan_tahun_pr" disabled="" readonly="">
                    @error('tujuh_puluh_sembilan_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">delapan_puluh_tahun_lk:</label>
                    <input type="text" name="delapan_puluh_tahun_lk" value="{{ $umur->delapan_puluh_tahun_lk }}" class="form-control" 
                    placeholder="delapan_puluh_tahun_lk" disabled="" readonly="">
                    @error('delapan_puluh_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">delapan_puluh_tahun_pr:</label>
                    <input type="text" name="delapan_puluh_tahun_pr" value="{{ $umur->delapan_puluh_tahun_pr }}" class="form-control" 
                    placeholder="delapan_puluh_tahun_pr" disabled="" readonly="">
                    @error('delapan_puluh_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">delapan_puluh_satu_tahun_lk:</label>
                    <input type="text" name="delapan_puluh_satu_tahun_lk" value="{{ $umur->delapan_puluh_satu_tahun_lk }}" class="form-control" 
                    placeholder="delapan_puluh_satu_tahun_lk" disabled="" readonly="">
                    @error('delapan_puluh_satu_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">delapan_puluh_satu_tahun_pr:</label>
                    <input type="text" name="delapan_puluh_satu_tahun_pr" value="{{ $umur->delapan_puluh_satu_tahun_pr }}" class="form-control" 
                    placeholder="delapan_puluh_satu_tahun_pr" disabled="" readonly="">
                    @error('delapan_puluh_satu_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">delapan_puluh_dua_tahun_lk:</label>
                    <input type="text" name="delapan_puluh_dua_tahun_lk" value="{{ $umur->delapan_puluh_dua_tahun_lk }}" class="form-control" 
                    placeholder="delapan_puluh_dua_tahun_lk" disabled="" readonly="">
                    @error('delapan_puluh_dua_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">delapan_puluh_dua_tahun_pr:</label>
                    <input type="text" name="delapan_puluh_dua_tahun_pr" value="{{ $umur->delapan_puluh_dua_tahun_pr }}" class="form-control" 
                    placeholder="delapan_puluh_dua_tahun_pr" disabled="" readonly="">
                    @error('delapan_puluh_dua_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">delapan_puluh_tiga_tahun_lk:</label>
                    <input type="text" name="delapan_puluh_tiga_tahun_lk" value="{{ $umur->delapan_puluh_tiga_tahun_lk }}" class="form-control" 
                    placeholder="delapan_puluh_tiga_tahun_lk" disabled="" readonly="">
                    @error('delapan_puluh_tiga_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">delapan_puluh_tiga_tahun_pr:</label>
                    <input type="text" name="delapan_puluh_tiga_tahun_pr" value="{{ $umur->delapan_puluh_tiga_tahun_pr }}" class="form-control" 
                    placeholder="delapan_puluh_tiga_tahun_pr" disabled="" readonly="">
                    @error('delapan_puluh_tiga_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">delapan_puluh_empat_tahun_lk:</label>
                    <input type="text" name="delapan_puluh_empat_tahun_lk" value="{{ $umur->delapan_puluh_empat_tahun_lk }}" class="form-control" 
                    placeholder="delapan_puluh_empat_tahun_lk" disabled="" readonly="">
                    @error('delapan_puluh_empat_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">delapan_puluh_empat_tahun_pr:</label>
                    <input type="text" name="delapan_puluh_empat_tahun_pr" value="{{ $umur->delapan_puluh_empat_tahun_pr }}" class="form-control" 
                    placeholder="delapan_puluh_empat_tahun_pr" disabled="" readonly="">
                    @error('delapan_puluh_empat_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">delapan_puluh_lima_tahun_lk:</label>
                    <input type="text" name="delapan_puluh_lima_tahun_lk" value="{{ $umur->delapan_puluh_lima_tahun_lk }}" class="form-control" 
                    placeholder="delapan_puluh_lima_tahun_lk" disabled="" readonly="">
                    @error('delapan_puluh_lima_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">delapan_puluh_lima_tahun_pr:</label>
                    <input type="text" name="delapan_puluh_lima_tahun_pr" value="{{ $umur->delapan_puluh_lima_tahun_pr }}" class="form-control" 
                    placeholder="delapan_puluh_lima_tahun_pr" disabled="" readonly="">
                    @error('delapan_puluh_lima_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">delapan_puluh_enam_tahun_lk:</label>
                    <input type="text" name="delapan_puluh_enam_tahun_lk" value="{{ $umur->delapan_puluh_enam_tahun_lk }}" class="form-control" 
                    placeholder="delapan_puluh_enam_tahun_lk" disabled="" readonly="">
                    @error('delapan_puluh_enam_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">delapan_puluh_enam_tahun_pr:</label>
                    <input type="text" name="delapan_puluh_enam_tahun_pr" value="{{ $umur->delapan_puluh_enam_tahun_pr }}" class="form-control" 
                    placeholder="delapan_puluh_enam_tahun_pr" disabled="" readonly="">
                    @error('delapan_puluh_enam_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">delapan_puluh_tujuh_tahun_lk:</label>
                    <input type="text" name="delapan_puluh_tujuh_tahun_lk" value="{{ $umur->delapan_puluh_tujuh_tahun_lk }}" class="form-control" 
                    placeholder="delapan_puluh_tujuh_tahun_lk" disabled="" readonly="">
                    @error('delapan_puluh_tujuh_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">delapan_puluh_tujuh_tahun_pr:</label>
                    <input type="text" name="delapan_puluh_tujuh_tahun_pr" value="{{ $umur->delapan_puluh_tujuh_tahun_pr }}" class="form-control" 
                    placeholder="delapan_puluh_tujuh_tahun_pr" disabled="" readonly="">
                    @error('delapan_puluh_tujuh_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">delapan_puluh_delapan_tahun_lk:</label>
                    <input type="text" name="delapan_puluh_delapan_tahun_lk" value="{{ $umur->delapan_puluh_delapan_tahun_lk }}" class="form-control" 
                    placeholder="delapan_puluh_delapan_tahun_lk" disabled="" readonly="">
                    @error('delapan_puluh_delapan_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">delapan_puluh_delapan_tahun_pr:</label>
                    <input type="text" name="delapan_puluh_delapan_tahun_pr" value="{{ $umur->delapan_puluh_delapan_tahun_pr }}" class="form-control" 
                    placeholder="delapan_puluh_delapan_tahun_pr" disabled="" readonly="">
                    @error('delapan_puluh_delapan_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">delapan_puluh_sembilan_tahun_lk:</label>
                    <input type="text" name="delapan_puluh_sembilan_tahun_lk" value="{{ $umur->delapan_puluh_sembilan_tahun_lk }}" class="form-control" 
                    placeholder="delapan_puluh_sembilan_tahun_lk" disabled="" readonly="">
                    @error('delapan_puluh_sembilan_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">delapan_puluh_sembilan_tahun_pr:</label>
                    <input type="text" name="delapan_puluh_sembilan_tahun_pr" value="{{ $umur->delapan_puluh_sembilan_tahun_pr }}" class="form-control" 
                    placeholder="delapan_puluh_sembilan_tahun_pr" disabled="" readonly="">
                    @error('delapan_puluh_sembilan_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">sembilan_puluh_tahun_lk:</label>
                    <input type="text" name="sembilan_puluh_tahun_lk" value="{{ $umur->sembilan_puluh_tahun_lk }}" class="form-control" 
                    placeholder="sembilan_puluh_tahun_lk" disabled="" readonly="">
                    @error('sembilan_puluh_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">sembilan_puluh_tahun_pr:</label>
                    <input type="text" name="sembilan_puluh_tahun_pr" value="{{ $umur->sembilan_puluh_tahun_pr }}" class="form-control" 
                    placeholder="sembilan_puluh_tahun_pr" disabled="" readonly="">
                    @error('sembilan_puluh_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">sembilan_puluh_satu_tahun_lk:</label>
                    <input type="text" name="sembilan_puluh_satu_tahun_lk" value="{{ $umur->sembilan_puluh_satu_tahun_lk }}" class="form-control" 
                    placeholder="sembilan_puluh_satu_tahun_lk" disabled="" readonly="">
                    @error('sembilan_puluh_satu_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">sembilan_puluh_satu_tahun_pr:</label>
                    <input type="text" name="sembilan_puluh_satu_tahun_pr" value="{{ $umur->sembilan_puluh_satu_tahun_pr }}" class="form-control" 
                    placeholder="sembilan_puluh_satu_tahun_pr" disabled="" readonly="">
                    @error('sembilan_puluh_satu_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">sembilan_puluh_dua_tahun_lk:</label>
                    <input type="text" name="sembilan_puluh_dua_tahun_lk" value="{{ $umur->sembilan_puluh_dua_tahun_lk }}" class="form-control" 
                    placeholder="sembilan_puluh_dua_tahun_lk" disabled="" readonly="">
                    @error('sembilan_puluh_dua_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">sembilan_puluh_dua_tahun_pr:</label>
                    <input type="text" name="sembilan_puluh_dua_tahun_pr" value="{{ $umur->sembilan_puluh_dua_tahun_pr }}" class="form-control" 
                    placeholder="sembilan_puluh_dua_tahun_pr" disabled="" readonly="">
                    @error('sembilan_puluh_dua_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">sembilan_puluh_tiga_tahun_lk:</label>
                    <input type="text" name="sembilan_puluh_tiga_tahun_lk" value="{{ $umur->sembilan_puluh_tiga_tahun_lk }}" class="form-control" 
                    placeholder="sembilan_puluh_tiga_tahun_lk" disabled="" readonly="">
                    @error('sembilan_puluh_tiga_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">sembilan_puluh_tiga_tahun_pr:</label>
                    <input type="text" name="sembilan_puluh_tiga_tahun_pr" value="{{ $umur->sembilan_puluh_tiga_tahun_pr }}" class="form-control" 
                    placeholder="sembilan_puluh_tiga_tahun_pr" disabled="" readonly="">
                    @error('sembilan_puluh_tiga_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">sembilan_puluh_empat_tahun_lk:</label>
                    <input type="text" name="sembilan_puluh_empat_tahun_lk" value="{{ $umur->sembilan_puluh_empat_tahun_lk }}" class="form-control" 
                    placeholder="sembilan_puluh_empat_tahun_lk" disabled="" readonly="">
                    @error('sembilan_puluh_empat_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">sembilan_puluh_empat_tahun_pr:</label>
                    <input type="text" name="sembilan_puluh_empat_tahun_pr" value="{{ $umur->sembilan_puluh_empat_tahun_pr }}" class="form-control" 
                    placeholder="sembilan_puluh_empat_tahun_pr" disabled="" readonly="">
                    @error('sembilan_puluh_empat_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">seratus_tahun_lk:</label>
                    <input type="text" name="seratus_tahun_lk" value="{{ $umur->seratus_tahun_lk }}" class="form-control" 
                    placeholder="seratus_tahun_lk" disabled="" readonly="">
                    @error('seratus_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">seratus_tahun_pr:</label>
                    <input type="text" name="seratus_tahun_pr" value="{{ $umur->seratus_tahun_pr }}" class="form-control" 
                    placeholder="seratus_tahun_pr" disabled="" readonly="">
                    @error('seratus_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">seratus_satu_tahun_lk:</label>
                    <input type="text" name="seratus_satu_tahun_lk" value="{{ $umur->seratus_satu_tahun_lk }}" class="form-control" 
                    placeholder="seratus_satu_tahun_lk" disabled="" readonly="">
                    @error('seratus_satu_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">seratus_satu_tahun_pr:</label>
                    <input type="text" name="seratus_satu_tahun_pr" value="{{ $umur->seratus_satu_tahun_pr }}" class="form-control" 
                    placeholder="seratus_satu_tahun_pr" disabled="" readonly="">
                    @error('seratus_satu_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">seratus_dua_tahun_lk:</label>
                    <input type="text" name="seratus_dua_tahun_lk" value="{{ $umur->seratus_dua_tahun_lk }}" class="form-control" 
                    placeholder="seratus_dua_tahun_lk" disabled="" readonly="">
                    @error('seratus_dua_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">seratus_dua_tahun_pr:</label>
                    <input type="text" name="seratus_dua_tahun_pr" value="{{ $umur->seratus_dua_tahun_pr }}" class="form-control" 
                    placeholder="seratus_dua_tahun_pr" disabled="" readonly="">
                    @error('seratus_dua_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">seratus_tiga_tahun_lk:</label>
                    <input type="text" name="seratus_tiga_tahun_lk" value="{{ $umur->seratus_tiga_tahun_lk }}" class="form-control" 
                    placeholder="seratus_tiga_tahun_lk" disabled="" readonly="">
                    @error('seratus_tiga_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">seratus_tiga_tahun_pr:</label>
                    <input type="text" name="seratus_tiga_tahun_pr" value="{{ $umur->seratus_tiga_tahun_pr }}" class="form-control" 
                    placeholder="seratus_tiga_tahun_pr" disabled="" readonly="">
                    @error('seratus_tiga_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">seratus_empat_tahun_lk:</label>
                    <input type="text" name="seratus_empat_tahun_lk" value="{{ $umur->seratus_empat_tahun_lk }}" class="form-control" 
                    placeholder="seratus_empat_tahun_lk" disabled="" readonly="">
                    @error('seratus_empat_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">seratus_empat_tahun_pr:</label>
                    <input type="text" name="seratus_empat_tahun_pr" value="{{ $umur->seratus_empat_tahun_pr }}" class="form-control" 
                    placeholder="seratus_empat_tahun_pr" disabled="" readonly="">
                    @error('seratus_empat_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">seratus_lima_tahun_lk:</label>
                    <input type="text" name="seratus_lima_tahun_lk" value="{{ $umur->seratus_lima_tahun_lk }}" class="form-control" 
                    placeholder="seratus_lima_tahun_lk" disabled="" readonly="">
                    @error('seratus_lima_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">seratus_lima_tahun_pr:</label>
                    <input type="text" name="seratus_lima_tahun_pr" value="{{ $umur->seratus_lima_tahun_pr }}" class="form-control" 
                    placeholder="seratus_lima_tahun_pr" disabled="" readonly="">
                    @error('seratus_lima_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">seratus_enam_tahun_lk:</label>
                    <input type="text" name="seratus_enam_tahun_lk" value="{{ $umur->seratus_enam_tahun_lk }}" class="form-control" 
                    placeholder="seratus_enam_tahun_lk" disabled="" readonly="">
                    @error('seratus_enam_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">seratus_enam_tahun_pr:</label>
                    <input type="text" name="seratus_enam_tahun_pr" value="{{ $umur->seratus_enam_tahun_pr }}" class="form-control" 
                    placeholder="seratus_enam_tahun_pr" disabled="" readonly="">
                    @error('seratus_enam_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">seratus_tujuh_tahun_lk:</label>
                    <input type="text" name="seratus_tujuh_tahun_lk" value="{{ $umur->seratus_tujuh_tahun_lk }}" class="form-control" 
                    placeholder="seratus_tujuh_tahun_lk" disabled="" readonly="">
                    @error('seratus_tujuh_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">seratus_tujuh_tahun_pr:</label>
                    <input type="text" name="seratus_tujuh_tahun_pr" value="{{ $umur->seratus_tujuh_tahun_pr }}" class="form-control" 
                    placeholder="seratus_tujuh_tahun_pr" disabled="" readonly="">
                    @error('seratus_tujuh_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">seratus_delapan_tahun_lk:</label>
                    <input type="text" name="seratus_delapan_tahun_lk" value="{{ $umur->seratus_delapan_tahun_lk }}" class="form-control" 
                    placeholder="seratus_delapan_tahun_lk" disabled="" readonly="">
                    @error('seratus_delapan_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">seratus_delapan_tahun_pr:</label>
                    <input type="text" name="seratus_delapan_tahun_pr" value="{{ $umur->seratus_delapan_tahun_pr }}" class="form-control" 
                    placeholder="seratus_delapan_tahun_pr" disabled="" readonly="">
                    @error('seratus_delapan_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">seratus_sembilan_tahun_lk:</label>
                    <input type="text" name="seratus_sembilan_tahun_lk" value="{{ $umur->seratus_sembilan_tahun_lk }}" class="form-control" 
                    placeholder="seratus_sembilan_tahun_lk" disabled="" readonly="">
                    @error('seratus_sembilan_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">seratus_sembilan_tahun_pr:</label>
                    <input type="text" name="seratus_sembilan_tahun_pr" value="{{ $umur->seratus_sembilan_tahun_pr }}" class="form-control" 
                    placeholder="seratus_sembilan_tahun_pr" disabled="" readonly="">
                    @error('seratus_sembilan_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">seratus_sepuluh_tahun_lk:</label>
                    <input type="text" name="seratus_sepuluh_tahun_lk" value="{{ $umur->seratus_sepuluh_tahun_lk }}" class="form-control" 
                    placeholder="seratus_sepuluh_tahun_lk" disabled="" readonly="">
                    @error('seratus_sepuluh_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">seratus_sepuluh_tahun_pr:</label>
                    <input type="text" name="seratus_sepuluh_tahun_pr" value="{{ $umur->seratus_sepuluh_tahun_pr }}" class="form-control" 
                    placeholder="seratus_sepuluh_tahun_pr" disabled="" readonly="">
                    @error('seratus_sepuluh_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">seratus_sebelas_tahun_lk:</label>
                    <input type="text" name="seratus_sebelas_tahun_lk" value="{{ $umur->seratus_sebelas_tahun_lk }}" class="form-control" 
                    placeholder="seratus_sebelas_tahun_lk" disabled="" readonly="">
                    @error('seratus_sebelas_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">seratus_sebelas_tahun_pr:</label>
                    <input type="text" name="seratus_sebelas_tahun_pr" value="{{ $umur->seratus_sebelas_tahun_pr }}" class="form-control" 
                    placeholder="seratus_sebelas_tahun_pr" disabled="" readonly="">
                    @error('seratus_sebelas_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">seratus_dua_belas_tahun_lk:</label>
                    <input type="text" name="seratus_dua_belas_tahun_lk" value="{{ $umur->seratus_dua_belas_tahun_lk }}" class="form-control" 
                    placeholder="seratus_dua_belas_tahun_lk" disabled="" readonly="">
                    @error('seratus_dua_belas_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">seratus_dua_belas_tahun_pr:</label>
                    <input type="text" name="seratus_dua_belas_tahun_pr" value="{{ $umur->seratus_dua_belas_tahun_pr }}" class="form-control" 
                    placeholder="seratus_dua_belas_tahun_pr" disabled="" readonly="">
                    @error('seratus_dua_belas_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">seratus_tiga_belas_tahun_lk:</label>
                    <input type="text" name="seratus_tiga_belas_tahun_lk" value="{{ $umur->seratus_tiga_belas_tahun_lk }}" class="form-control" 
                    placeholder="seratus_tiga_belas_tahun_lk" disabled="" readonly="">
                    @error('seratus_tiga_belas_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">seratus_tiga_belas_tahun_pr:</label>
                    <input type="text" name="seratus_tiga_belas_tahun_pr" value="{{ $umur->seratus_tiga_belas_tahun_pr }}" class="form-control" 
                    placeholder="seratus_tiga_belas_tahun_pr" disabled="" readonly="">
                    @error('seratus_tiga_belas_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">seratus_empat_belas_tahun_lk:</label>
                    <input type="text" name="seratus_empat_belas_tahun_lk" value="{{ $umur->seratus_empat_belas_tahun_lk }}" class="form-control" 
                    placeholder="seratus_empat_belas_tahun_lk" disabled="" readonly="">
                    @error('seratus_empat_belas_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">seratus_empat_belas_tahun_pr:</label>
                    <input type="text" name="seratus_empat_belas_tahun_pr" value="{{ $umur->seratus_empat_belas_tahun_pr }}" class="form-control" 
                    placeholder="seratus_empat_belas_tahun_pr" disabled="" readonly="">
                    @error('seratus_empat_belas_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">seratus_lima_belas_tahun_lk:</label>
                    <input type="text" name="seratus_lima_belas_tahun_lk" value="{{ $umur->seratus_lima_belas_tahun_lk }}" class="form-control" 
                    placeholder="seratus_lima_belas_tahun_lk" disabled="" readonly="">
                    @error('seratus_lima_belas_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">seratus_lima_belas_tahun_pr:</label>
                    <input type="text" name="seratus_lima_belas_tahun_pr" value="{{ $umur->seratus_lima_belas_tahun_pr }}" class="form-control" 
                    placeholder="seratus_lima_belas_tahun_pr" disabled="" readonly="">
                    @error('seratus_lima_belas_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">seratus_enam_belas_tahun_lk:</label>
                    <input type="text" name="seratus_enam_belas_tahun_lk" value="{{ $umur->seratus_enam_belas_tahun_lk }}" class="form-control" 
                    placeholder="seratus_enam_belas_tahun_lk" disabled="" readonly="">
                    @error('seratus_enam_belas_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">seratus_enam_belas_tahun_pr:</label>
                    <input type="text" name="seratus_enam_belas_tahun_pr" value="{{ $umur->seratus_enam_belas_tahun_pr }}" class="form-control" 
                    placeholder="seratus_enam_belas_tahun_pr" disabled="" readonly="">
                    @error('seratus_enam_belas_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">seratus_tujuh_belas_tahun_lk:</label>
                    <input type="text" name="seratus_tujuh_belas_tahun_lk" value="{{ $umur->seratus_tujuh_belas_tahun_lk }}" class="form-control" 
                    placeholder="seratus_tujuh_belas_tahun_lk" disabled="" readonly="">
                    @error('seratus_tujuh_belas_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">seratus_tujuh_belas_tahun_pr:</label>
                    <input type="text" name="seratus_tujuh_belas_tahun_pr" value="{{ $umur->seratus_tujuh_belas_tahun_pr }}" class="form-control" 
                    placeholder="seratus_tujuh_belas_tahun_pr" disabled="" readonly="">
                    @error('seratus_tujuh_belas_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">seratus_delapan_belas_tahun_lk:</label>
                    <input type="text" name="seratus_delapan_belas_tahun_lk" value="{{ $umur->seratus_delapan_belas_tahun_lk }}" class="form-control" 
                    placeholder="seratus_delapan_belas_tahun_lk" disabled="" readonly="">
                    @error('seratus_delapan_belas_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">seratus_delapan_belas_tahun_pr:</label>
                    <input type="text" name="seratus_delapan_belas_tahun_pr" value="{{ $umur->seratus_delapan_belas_tahun_pr }}" class="form-control" 
                    placeholder="seratus_delapan_belas_tahun_pr" disabled="" readonly="">
                    @error('seratus_delapan_belas_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">seratus_sembilan_belas_tahun_lk:</label>
                    <input type="text" name="seratus_sembilan_belas_tahun_lk" value="{{ $umur->seratus_sembilan_belas_tahun_lk }}" class="form-control" 
                    placeholder="seratus_sembilan_belas_tahun_lk" disabled="" readonly="">
                    @error('seratus_sembilan_belas_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">seratus_sembilan_belas_tahun_pr:</label>
                    <input type="text" name="seratus_sembilan_belas_tahun_pr" value="{{ $umur->seratus_sembilan_belas_tahun_pr }}" class="form-control" 
                    placeholder="seratus_sembilan_belas_tahun_pr" disabled="" readonly="">
                    @error('seratus_sembilan_belas_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">seratus_dua_puluh_tahun_lk:</label>
                    <input type="text" name="seratus_dua_puluh_tahun_lk" value="{{ $umur->seratus_dua_puluh_tahun_lk }}" class="form-control" 
                    placeholder="seratus_dua_puluh_tahun_lk" disabled="" readonly="">
                    @error('seratus_dua_puluh_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">seratus_dua_puluh_tahun_pr:</label>
                    <input type="text" name="seratus_dua_puluh_tahun_pr" value="{{ $umur->seratus_dua_puluh_tahun_pr }}" class="form-control" 
                    placeholder="seratus_dua_puluh_tahun_pr" disabled="" readonly="">
                    @error('seratus_dua_puluh_tahun_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">seratus_dua_puluh_satu_tahun_lk:</label>
                    <input type="text" name="seratus_dua_puluh_satu_tahun_lk" value="{{ $umur->seratus_dua_puluh_satu_tahun_lk }}" class="form-control" 
                    placeholder="seratus_dua_puluh_satu_tahun_lk" disabled="" readonly="">
                    @error('seratus_dua_puluh_satu_tahun_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">seratus_dua_puluh_satu_tahun_pr:</label>
                    <input type="text" name="seratus_dua_puluh_satu_tahun_pr" value="{{ $umur->seratus_dua_puluh_satu_tahun_pr }}" class="form-control" 
                    placeholder="seratus_dua_puluh_satu_tahun_pr" disabled="" readonly="">
                    @error('seratus_dua_puluh_satu_tahun_pr')
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