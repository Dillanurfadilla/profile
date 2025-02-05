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
            <h6 class="mb-0">Delete Pekerjaan</h6>
        </div>
        <div class="card-body">
            @if(session('status'))
                <div class="alert alert-success mb-1 mt-1">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('pekerjaan.destroy',$pekerjaan->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('DELETE')
            
                <div class="mb-3">
                    <label class="form-label">kode:</label>
                    <input type="text" name="kode" value="{{ $pekerjaan->kode }}" class="form-control" 
                    placeholder="kode" disabled="" readonly="">
                    @error('kode')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">wilayah:</label>
                    <input type="text" name="wilayah" value="{{ $pekerjaan->wilayah }}" class="form-control" 
                    placeholder="wilayah" disabled="" readonly="">
                    @error('wilayah')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">belum_tidak_bekerja_l:</label>
                    <input type="text" name="belum_tidak_bekerja_l" value="{{ $pekerjaan->belum_tidak_bekerja_l }}" class="form-control" 
                    placeholder="belum_tidak_bekerja_l" disabled="" readonly="">
                    @error('belum_tidak_bekerja_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">belum_tidak_bekerja_p:</label>
                    <input type="text" name="belum_tidak_bekerja_p" value="{{ $pekerjaan->belum_tidak_bekerja_p }}" class="form-control" 
                    placeholder="belum_tidak_bekerja_p" disabled="" readonly="">
                    @error('belum_tidak_bekerja_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">mengurus_rumah_tangga_l:</label>
                    <input type="text" name="mengurus_rumah_tangga_l" value="{{ $pekerjaan->mengurus_rumah_tangga_l }}" class="form-control" 
                    placeholder="mengurus_rumah_tangga_l" disabled="" readonly="">
                    @error('mengurus_rumah_tangga_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">mengurus_rumah_tangga_p:</label>
                    <input type="text" name="mengurus_rumah_tangga_p" value="{{ $pekerjaan->mengurus_rumah_tangga_p }}" class="form-control" 
                    placeholder="mengurus_rumah_tangga_p" disabled="" readonly="">
                    @error('mengurus_rumah_tangga_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">pelajar_mahasiswa_l:</label>
                    <input type="text" name="pelajar_mahasiswa_l" value="{{ $pekerjaan->pelajar_mahasiswa_l }}" class="form-control" 
                    placeholder="pelajar_mahasiswa_l" disabled="" readonly="">
                    @error('pelajar_mahasiswa_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">pelajar_mahasiswa_p:</label>
                    <input type="text" name="pelajar_mahasiswa_p" value="{{ $pekerjaan->pelajar_mahasiswa_p }}" class="form-control" 
                    placeholder="pelajar_mahasiswa_p" disabled="" readonly="">
                    @error('pelajar_mahasiswa_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">pensiunan_l:</label>
                    <input type="text" name="pensiunan_l" value="{{ $pekerjaan->pensiunan_l }}" class="form-control" 
                    placeholder="pensiunan_l" disabled="" readonly="">
                    @error('pensiunan_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">pensiunan_p:</label>
                    <input type="text" name="pensiunan_p" value="{{ $pekerjaan->pensiunan_p }}" class="form-control" 
                    placeholder="pensiunan_p" disabled="" readonly="">
                    @error('pensiunan_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">pegawai_negeri_sipil_pns_l:</label>
                    <input type="text" name="pegawai_negeri_sipil_pns_l" value="{{ $pekerjaan->pegawai_negeri_sipil_pns_l }}" class="form-control" 
                    placeholder="pegawai_negeri_sipil_pns_l" disabled="" readonly="">
                    @error('pegawai_negeri_sipil_pns_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">pegawai_negeri_sipil_pns_p:</label>
                    <input type="text" name="pegawai_negeri_sipil_pns_p" value="{{ $pekerjaan->pegawai_negeri_sipil_pns_p }}" class="form-control" 
                    placeholder="pegawai_negeri_sipil_pns_p" disabled="" readonly="">
                    @error('pegawai_negeri_sipil_pns_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tentara_nasional_indonesia_l:</label>
                    <input type="text" name="tentara_nasional_indonesia_l" value="{{ $pekerjaan->tentara_nasional_indonesia_l }}" class="form-control" 
                    placeholder="tentara_nasional_indonesia_l" disabled="" readonly="">
                    @error('tentara_nasional_indonesia_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tentara_nasional_indonesia_p:</label>
                    <input type="text" name="tentara_nasional_indonesia_p" value="{{ $pekerjaan->tentara_nasional_indonesia_p }}" class="form-control" 
                    placeholder="tentara_nasional_indonesia_p" disabled="" readonly="">
                    @error('tentara_nasional_indonesia_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">kepolisian_ri_polri_l:</label>
                    <input type="text" name="kepolisian_ri_polri_l" value="{{ $pekerjaan->kepolisian_ri_polri_l }}" class="form-control" 
                    placeholder="kepolisian_ri_polri_l" disabled="" readonly="">
                    @error('kepolisian_ri_polri_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">kepolisian_ri_polri_p:</label>
                    <input type="text" name="kepolisian_ri_polri_p" value="{{ $pekerjaan->kepolisian_ri_polri_p }}" class="form-control" 
                    placeholder="kepolisian_ri_polri_p" disabled="" readonly="">
                    @error('kepolisian_ri_polri_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">perdagangan_l:</label>
                    <input type="text" name="perdagangan_l" value="{{ $pekerjaan->perdagangan_l }}" class="form-control" 
                    placeholder="perdagangan_l" disabled="" readonly="">
                    @error('perdagangan_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">perdagangan_p:</label>
                    <input type="text" name="perdagangan_p" value="{{ $pekerjaan->perdagangan_p }}" class="form-control" 
                    placeholder="perdagangan_p" disabled="" readonly="">
                    @error('perdagangan_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">petani_pekebun_l:</label>
                    <input type="text" name="petani_pekebun_l" value="{{ $pekerjaan->petani_pekebun_l }}" class="form-control" 
                    placeholder="petani_pekebun_l" disabled="" readonly="">
                    @error('petani_pekebun_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">petani_pekebun_p:</label>
                    <input type="text" name="petani_pekebun_p" value="{{ $pekerjaan->petani_pekebun_p }}" class="form-control" 
                    placeholder="petani_pekebun_p" disabled="" readonly="">
                    @error('petani_pekebun_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">peternak_l:</label>
                    <input type="text" name="peternak_l" value="{{ $pekerjaan->peternak_l }}" class="form-control" 
                    placeholder="peternak_l" disabled="" readonly="">
                    @error('peternak_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">peternak_p:</label>
                    <input type="text" name="peternak_p" value="{{ $pekerjaan->peternak_p }}" class="form-control" 
                    placeholder="peternak_p" disabled="" readonly="">
                    @error('peternak_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">nelayan_perikanan_l:</label>
                    <input type="text" name="nelayan_perikanan_l" value="{{ $pekerjaan->nelayan_perikanan_l }}" class="form-control" 
                    placeholder="nelayan_perikanan_l" disabled="" readonly="">
                    @error('nelayan_perikanan_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">nelayan_perikanan_p:</label>
                    <input type="text" name="nelayan_perikanan_p" value="{{ $pekerjaan->nelayan_perikanan_p }}" class="form-control" 
                    placeholder="nelayan_perikanan_p" disabled="" readonly="">
                    @error('nelayan_perikanan_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">industri_l:</label>
                    <input type="text" name="industri_l" value="{{ $pekerjaan->industri_l }}" class="form-control" 
                    placeholder="industri_l" disabled="" readonly="">
                    @error('industri_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">industri_p:</label>
                    <input type="text" name="industri_p" value="{{ $pekerjaan->industri_p }}" class="form-control" 
                    placeholder="industri_p" disabled="" readonly="">
                    @error('industri_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">konstruksi_l:</label>
                    <input type="text" name="konstruksi_l" value="{{ $pekerjaan->konstruksi_l }}" class="form-control" 
                    placeholder="konstruksi_l" disabled="" readonly="">
                    @error('konstruksi_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">konstruksi_p:</label>
                    <input type="text" name="konstruksi_p" value="{{ $pekerjaan->konstruksi_p }}" class="form-control" 
                    placeholder="konstruksi_p" disabled="" readonly="">
                    @error('konstruksi_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">transportasi_l:</label>
                    <input type="text" name="transportasi_l" value="{{ $pekerjaan->transportasi_l }}" class="form-control" 
                    placeholder="transportasi_l" disabled="" readonly="">
                    @error('transportasi_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">transportasi_p:</label>
                    <input type="text" name="transportasi_p" value="{{ $pekerjaan->transportasi_p }}" class="form-control" 
                    placeholder="transportasi_p" disabled="" readonly="">
                    @error('transportasi_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">karyawan_swasta_l:</label>
                    <input type="text" name="karyawan_swasta_l" value="{{ $pekerjaan->karyawan_swasta_l }}" class="form-control" 
                    placeholder="karyawan_swasta_l" disabled="" readonly="">
                    @error('karyawan_swasta_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">karyawan_swasta_p:</label>
                    <input type="text" name="karyawan_swasta_p" value="{{ $pekerjaan->karyawan_swasta_p }}" class="form-control" 
                    placeholder="karyawan_swasta_p" disabled="" readonly="">
                    @error('karyawan_swasta_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">karyawan_bumn_l:</label>
                    <input type="text" name="karyawan_bumn_l" value="{{ $pekerjaan->karyawan_bumn_l }}" class="form-control" 
                    placeholder="karyawan_bumn_l" disabled="" readonly="">
                    @error('karyawan_bumn_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">karyawan_bumn_p:</label>
                    <input type="text" name="karyawan_bumn_p" value="{{ $pekerjaan->karyawan_bumn_p }}" class="form-control" 
                    placeholder="karyawan_bumn_p" disabled="" readonly="">
                    @error('karyawan_bumn_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">karyawan_bumd_l:</label>
                    <input type="text" name="karyawan_bumd_l" value="{{ $pekerjaan->karyawan_bumd_l }}" class="form-control" 
                    placeholder="karyawan_bumd_l" disabled="" readonly="">
                    @error('karyawan_bumd_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">karyawan_bumd_p:</label>
                    <input type="text" name="karyawan_bumd_p" value="{{ $pekerjaan->karyawan_bumd_p }}" class="form-control" 
                    placeholder="karyawan_bumd_p" disabled="" readonly="">
                    @error('karyawan_bumd_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">karyawan_honorer_l:</label>
                    <input type="text" name="karyawan_honorer_l" value="{{ $pekerjaan->karyawan_honorer_l }}" class="form-control" 
                    placeholder="karyawan_honorer_l" disabled="" readonly="">
                    @error('karyawan_honorer_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">karyawan_honorer_p:</label>
                    <input type="text" name="karyawan_honorer_p" value="{{ $pekerjaan->karyawan_honorer_p }}" class="form-control" 
                    placeholder="karyawan_honorer_p" disabled="" readonly="">
                    @error('karyawan_honorer_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">buruh_harian_lepas_l:</label>
                    <input type="text" name="buruh_harian_lepas_l" value="{{ $pekerjaan->buruh_harian_lepas_l }}" class="form-control" 
                    placeholder="buruh_harian_lepas_l" disabled="" readonly="">
                    @error('buruh_harian_lepas_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">buruh_harian_lepas_p:</label>
                    <input type="text" name="buruh_harian_lepas_p" value="{{ $pekerjaan->buruh_harian_lepas_p }}" class="form-control" 
                    placeholder="buruh_harian_lepas_p" disabled="" readonly="">
                    @error('buruh_harian_lepas_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">buruh_tani_perkebunan_l:</label>
                    <input type="text" name="buruh_tani_perkebunan_l" value="{{ $pekerjaan->buruh_tani_perkebunan_l }}" class="form-control" 
                    placeholder="buruh_tani_perkebunan_l" disabled="" readonly="">
                    @error('buruh_tani_perkebunan_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">buruh_tani_perkebunan_p:</label>
                    <input type="text" name="buruh_tani_perkebunan_p" value="{{ $pekerjaan->buruh_tani_perkebunan_p }}" class="form-control" 
                    placeholder="buruh_tani_perkebunan_p" disabled="" readonly="">
                    @error('buruh_tani_perkebunan_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">buruh_nelayan_perikanan_l:</label>
                    <input type="text" name="buruh_nelayan_perikanan_l" value="{{ $pekerjaan->buruh_nelayan_perikanan_l }}" class="form-control" 
                    placeholder="buruh_nelayan_perikanan_l" disabled="" readonly="">
                    @error('buruh_nelayan_perikanan_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">buruh_nelayan_perikanan_p:</label>
                    <input type="text" name="buruh_nelayan_perikanan_p" value="{{ $pekerjaan->buruh_nelayan_perikanan_p }}" class="form-control" 
                    placeholder="buruh_nelayan_perikanan_p" disabled="" readonly="">
                    @error('buruh_nelayan_perikanan_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">buruh_peternakan_l:</label>
                    <input type="text" name="buruh_peternakan_l" value="{{ $pekerjaan->buruh_peternakan_l }}" class="form-control" 
                    placeholder="buruh_peternakan_l" disabled="" readonly="">
                    @error('buruh_peternakan_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">buruh_peternakan_p:</label>
                    <input type="text" name="buruh_peternakan_p" value="{{ $pekerjaan->buruh_peternakan_p }}" class="form-control" 
                    placeholder="buruh_peternakan_p" disabled="" readonly="">
                    @error('buruh_peternakan_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">pembantu_rumah_tangga_l:</label>
                    <input type="text" name="pembantu_rumah_tangga_l" value="{{ $pekerjaan->pembantu_rumah_tangga_l }}" class="form-control" 
                    placeholder="pembantu_rumah_tangga_l" disabled="" readonly="">
                    @error('pembantu_rumah_tangga_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">pembantu_rumah_tangga_p:</label>
                    <input type="text" name="pembantu_rumah_tangga_p" value="{{ $pekerjaan->pembantu_rumah_tangga_p }}" class="form-control" 
                    placeholder="pembantu_rumah_tangga_p" disabled="" readonly="">
                    @error('pembantu_rumah_tangga_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tukang_cukur_l:</label>
                    <input type="text" name="tukang_cukur_l" value="{{ $pekerjaan->tukang_cukur_l }}" class="form-control" 
                    placeholder="tukang_cukur_l" disabled="" readonly="">
                    @error('tukang_cukur_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tukang_cukur_p:</label>
                    <input type="text" name="tukang_cukur_p" value="{{ $pekerjaan->tukang_cukur_p }}" class="form-control" 
                    placeholder="tukang_cukur_p" disabled="" readonly="">
                    @error('tukang_cukur_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tukang_listrik_l:</label>
                    <input type="text" name="tukang_listrik_l" value="{{ $pekerjaan->tukang_listrik_l }}" class="form-control" 
                    placeholder="tukang_listrik_l" disabled="" readonly="">
                    @error('tukang_listrik_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tukang_listrik_p:</label>
                    <input type="text" name="tukang_listrik_p" value="{{ $pekerjaan->tukang_listrik_p }}" class="form-control" 
                    placeholder="tukang_listrik_p" disabled="" readonly="">
                    @error('tukang_listrik_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tukang_batu_l:</label>
                    <input type="text" name="tukang_batu_l" value="{{ $pekerjaan->tukang_batu_l }}" class="form-control" 
                    placeholder="tukang_batu_l" disabled="" readonly="">
                    @error('tukang_batu_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tukang_batu_p:</label>
                    <input type="text" name="tukang_batu_p" value="{{ $pekerjaan->tukang_batu_p }}" class="form-control" 
                    placeholder="tukang_batu_p" disabled="" readonly="">
                    @error('tukang_batu_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tukang_kayu_l:</label>
                    <input type="text" name="tukang_kayu_l" value="{{ $pekerjaan->tukang_kayu_l }}" class="form-control" 
                    placeholder="tukang_kayu_l" disabled="" readonly="">
                    @error('tukang_kayu_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tukang_kayu_p:</label>
                    <input type="text" name="tukang_kayu_p" value="{{ $pekerjaan->tukang_kayu_p }}" class="form-control" 
                    placeholder="tukang_kayu_p" disabled="" readonly="">
                    @error('tukang_kayu_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tukang_sol_sepatu_l:</label>
                    <input type="text" name="tukang_sol_sepatu_l" value="{{ $pekerjaan->tukang_sol_sepatu_l }}" class="form-control" 
                    placeholder="tukang_sol_sepatu_l" disabled="" readonly="">
                    @error('tukang_sol_sepatu_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tukang_sol_sepatu_p:</label>
                    <input type="text" name="tukang_sol_sepatu_p" value="{{ $pekerjaan->tukang_sol_sepatu_p }}" class="form-control" 
                    placeholder="tukang_sol_sepatu_p" disabled="" readonly="">
                    @error('tukang_sol_sepatu_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tukang_las_pandai_besi_l:</label>
                    <input type="text" name="tukang_las_pandai_besi_l" value="{{ $pekerjaan->tukang_las_pandai_besi_l }}" class="form-control" 
                    placeholder="tukang_las_pandai_besi_l" disabled="" readonly="">
                    @error('tukang_las_pandai_besi_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tukang_las_pandai_besi_p:</label>
                    <input type="text" name="tukang_las_pandai_besi_p" value="{{ $pekerjaan->tukang_las_pandai_besi_p }}" class="form-control" 
                    placeholder="tukang_las_pandai_besi_p" disabled="" readonly="">
                    @error('tukang_las_pandai_besi_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tukang_jahit_l:</label>
                    <input type="text" name="tukang_jahit_l" value="{{ $pekerjaan->tukang_jahit_l }}" class="form-control" 
                    placeholder="tukang_jahit_l" disabled="" readonly="">
                    @error('tukang_jahit_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tukang_jahit_p:</label>
                    <input type="text" name="tukang_jahit_p" value="{{ $pekerjaan->tukang_jahit_p }}" class="form-control" 
                    placeholder="tukang_jahit_p" disabled="" readonly="">
                    @error('tukang_jahit_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tukang_gigi_l:</label>
                    <input type="text" name="tukang_gigi_l" value="{{ $pekerjaan->tukang_gigi_l }}" class="form-control" 
                    placeholder="tukang_gigi_l" disabled="" readonly="">
                    @error('tukang_gigi_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tukang_gigi_p:</label>
                    <input type="text" name="tukang_gigi_p" value="{{ $pekerjaan->tukang_gigi_p }}" class="form-control" 
                    placeholder="tukang_gigi_p" disabled="" readonly="">
                    @error('tukang_gigi_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">penata_rias_l:</label>
                    <input type="text" name="penata_rias_l" value="{{ $pekerjaan->penata_rias_l }}" class="form-control" 
                    placeholder="penata_rias_l" disabled="" readonly="">
                    @error('penata_rias_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">penata_rias_p:</label>
                    <input type="text" name="penata_rias_p" value="{{ $pekerjaan->penata_rias_p }}" class="form-control" 
                    placeholder="penata_rias_p" disabled="" readonly="">
                    @error('penata_rias_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">penata_busana_l:</label>
                    <input type="text" name="penata_busana_l" value="{{ $pekerjaan->penata_busana_l }}" class="form-control" 
                    placeholder="penata_busana_l" disabled="" readonly="">
                    @error('penata_busana_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">penata_busana_p:</label>
                    <input type="text" name="penata_busana_p" value="{{ $pekerjaan->penata_busana_p }}" class="form-control" 
                    placeholder="penata_busana_p" disabled="" readonly="">
                    @error('penata_busana_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">penata_rambut_l:</label>
                    <input type="text" name="penata_rambut_l" value="{{ $pekerjaan->penata_rambut_l }}" class="form-control" 
                    placeholder="penata_rambut_l" disabled="" readonly="">
                    @error('penata_rambut_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">penata_rambut_p:</label>
                    <input type="text" name="penata_rambut_p" value="{{ $pekerjaan->penata_rambut_p }}" class="form-control" 
                    placeholder="penata_rambut_p" disabled="" readonly="">
                    @error('penata_rambut_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">mekanik_l:</label>
                    <input type="text" name="mekanik_l" value="{{ $pekerjaan->mekanik_l }}" class="form-control" 
                    placeholder="mekanik_l" disabled="" readonly="">
                    @error('mekanik_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">mekanik_p:</label>
                    <input type="text" name="mekanik_p" value="{{ $pekerjaan->mekanik_p }}" class="form-control" 
                    placeholder="mekanik_p" disabled="" readonly="">
                    @error('mekanik_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">seniman_l:</label>
                    <input type="text" name="seniman_l" value="{{ $pekerjaan->seniman_l }}" class="form-control" 
                    placeholder="seniman_l" disabled="" readonly="">
                    @error('seniman_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">seniman_p:</label>
                    <input type="text" name="seniman_p" value="{{ $pekerjaan->seniman_p }}" class="form-control" 
                    placeholder="seniman_p" disabled="" readonly="">
                    @error('seniman_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tabib_l:</label>
                    <input type="text" name="tabib_l" value="{{ $pekerjaan->tabib_l }}" class="form-control" 
                    placeholder="tabib_l" disabled="" readonly="">
                    @error('tabib_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tabib_p:</label>
                    <input type="text" name="tabib_p" value="{{ $pekerjaan->tabib_p }}" class="form-control" 
                    placeholder="tabib_p" disabled="" readonly="">
                    @error('tabib_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">paraji_l:</label>
                    <input type="text" name="paraji_l" value="{{ $pekerjaan->paraji_l }}" class="form-control" 
                    placeholder="paraji_l" disabled="" readonly="">
                    @error('paraji_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">paraji_p:</label>
                    <input type="text" name="paraji_p" value="{{ $pekerjaan->paraji_p }}" class="form-control" 
                    placeholder="paraji_p" disabled="" readonly="">
                    @error('paraji_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">perancang_busana_l:</label>
                    <input type="text" name="perancang_busana_l" value="{{ $pekerjaan->perancang_busana_l }}" class="form-control" 
                    placeholder="perancang_busana_l" disabled="" readonly="">
                    @error('perancang_busana_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">perancang_busana_p:</label>
                    <input type="text" name="perancang_busana_p" value="{{ $pekerjaan->perancang_busana_p }}" class="form-control" 
                    placeholder="perancang_busana_p" disabled="" readonly="">
                    @error('perancang_busana_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">penterjemah_l:</label>
                    <input type="text" name="penterjemah_l" value="{{ $pekerjaan->penterjemah_l }}" class="form-control" 
                    placeholder="penterjemah_l" disabled="" readonly="">
                    @error('penterjemah_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">penterjemah_p:</label>
                    <input type="text" name="penterjemah_p" value="{{ $pekerjaan->penterjemah_p }}" class="form-control" 
                    placeholder="penterjemah_p" disabled="" readonly="">
                    @error('penterjemah_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">imam_masjid_l:</label>
                    <input type="text" name="imam_masjid_l" value="{{ $pekerjaan->imam_masjid_l }}" class="form-control" 
                    placeholder="imam_masjid_l" disabled="" readonly="">
                    @error('imam_masjid_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">imam_masjid_p:</label>
                    <input type="text" name="imam_masjid_p" value="{{ $pekerjaan->imam_masjid_p }}" class="form-control" 
                    placeholder="imam_masjid_p" disabled="" readonly="">
                    @error('imam_masjid_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">pendeta_l:</label>
                    <input type="text" name="pendeta_l" value="{{ $pekerjaan->pendeta_l }}" class="form-control" 
                    placeholder="pendeta_l" disabled="" readonly="">
                    @error('pendeta_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">pendeta_p:</label>
                    <input type="text" name="pendeta_p" value="{{ $pekerjaan->pendeta_p }}" class="form-control" 
                    placeholder="pendeta_p" disabled="" readonly="">
                    @error('pendeta_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">pastor_l:</label>
                    <input type="text" name="pastor_l" value="{{ $pekerjaan->pastor_l }}" class="form-control" 
                    placeholder="pastor_l" disabled="" readonly="">
                    @error('pastor_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">pastor_p:</label>
                    <input type="text" name="pastor_p" value="{{ $pekerjaan->pastor_p }}" class="form-control" 
                    placeholder="pastor_p" disabled="" readonly="">
                    @error('pastor_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">wartawan_l:</label>
                    <input type="text" name="wartawan_l" value="{{ $pekerjaan->wartawan_l }}" class="form-control" 
                    placeholder="wartawan_l" disabled="" readonly="">
                    @error('wartawan_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">wartawan_p:</label>
                    <input type="text" name="wartawan_p" value="{{ $pekerjaan->wartawan_p }}" class="form-control" 
                    placeholder="wartawan_p" disabled="" readonly="">
                    @error('wartawan_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">ustadz_mubaligh_l:</label>
                    <input type="text" name="ustadz_mubaligh_l" value="{{ $pekerjaan->ustadz_mubaligh_l }}" class="form-control" 
                    placeholder="ustadz_mubaligh_l" disabled="" readonly="">
                    @error('ustadz_mubaligh_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">ustadz_mubaligh_p:</label>
                    <input type="text" name="ustadz_mubaligh_p" value="{{ $pekerjaan->ustadz_mubaligh_p }}" class="form-control" 
                    placeholder="ustadz_mubaligh_p" disabled="" readonly="">
                    @error('ustadz_mubaligh_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">juru_masak_l:</label>
                    <input type="text" name="juru_masak_l" value="{{ $pekerjaan->juru_masak_l }}" class="form-control" 
                    placeholder="juru_masak_l" disabled="" readonly="">
                    @error('juru_masak_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">juru_masak_p:</label>
                    <input type="text" name="juru_masak_p" value="{{ $pekerjaan->juru_masak_p }}" class="form-control" 
                    placeholder="juru_masak_p" disabled="" readonly="">
                    @error('juru_masak_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">promotor_acara_l:</label>
                    <input type="text" name="promotor_acara_l" value="{{ $pekerjaan->promotor_acara_l }}" class="form-control" 
                    placeholder="promotor_acara_l" disabled="" readonly="">
                    @error('promotor_acara_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">promotor_acara_p:</label>
                    <input type="text" name="promotor_acara_p" value="{{ $pekerjaan->promotor_acara_p }}" class="form-control" 
                    placeholder="promotor_acara_p" disabled="" readonly="">
                    @error('promotor_acara_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">anggota_dpr_ri_l:</label>
                    <input type="text" name="anggota_dpr_ri_l" value="{{ $pekerjaan->anggota_dpr_ri_l }}" class="form-control" 
                    placeholder="anggota_dpr_ri_l" disabled="" readonly="">
                    @error('anggota_dpr_ri_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">anggota_dpr_ri_p:</label>
                    <input type="text" name="anggota_dpr_ri_p" value="{{ $pekerjaan->anggota_dpr_ri_p }}" class="form-control" 
                    placeholder="anggota_dpr_ri_p" disabled="" readonly="">
                    @error('anggota_dpr_ri_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">anggota_dpd_ri_l:</label>
                    <input type="text" name="anggota_dpd_ri_l" value="{{ $pekerjaan->anggota_dpd_ri_l }}" class="form-control" 
                    placeholder="anggota_dpd_ri_l" disabled="" readonly="">
                    @error('anggota_dpd_ri_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">anggota_dpd_ri_p:</label>
                    <input type="text" name="anggota_dpd_ri_p" value="{{ $pekerjaan->anggota_dpd_ri_p }}" class="form-control" 
                    placeholder="anggota_dpd_ri_p" disabled="" readonly="">
                    @error('anggota_dpd_ri_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">anggota_bpk_l:</label>
                    <input type="text" name="anggota_bpk_l" value="{{ $pekerjaan->anggota_bpk_l }}" class="form-control" 
                    placeholder="anggota_bpk_l" disabled="" readonly="">
                    @error('anggota_bpk_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">anggota_bpk_p:</label>
                    <input type="text" name="anggota_bpk_p" value="{{ $pekerjaan->anggota_bpk_p }}" class="form-control" 
                    placeholder="anggota_bpk_p" disabled="" readonly="">
                    @error('anggota_bpk_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">presiden_l:</label>
                    <input type="text" name="presiden_l" value="{{ $pekerjaan->presiden_l }}" class="form-control" 
                    placeholder="presiden_l" disabled="" readonly="">
                    @error('presiden_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">presiden_p:</label>
                    <input type="text" name="presiden_p" value="{{ $pekerjaan->presiden_p }}" class="form-control" 
                    placeholder="presiden_p" disabled="" readonly="">
                    @error('presiden_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">wakil_presiden_l:</label>
                    <input type="text" name="wakil_presiden_l" value="{{ $pekerjaan->wakil_presiden_l }}" class="form-control" 
                    placeholder="wakil_presiden_l" disabled="" readonly="">
                    @error('wakil_presiden_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">wakil_presiden_p:</label>
                    <input type="text" name="wakil_presiden_p" value="{{ $pekerjaan->wakil_presiden_p }}" class="form-control" 
                    placeholder="wakil_presiden_p" disabled="" readonly="">
                    @error('wakil_presiden_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">anggota_mahkamah_konstitusi_l:</label>
                    <input type="text" name="anggota_mahkamah_konstitusi_l" value="{{ $pekerjaan->anggota_mahkamah_konstitusi_l }}" class="form-control" 
                    placeholder="anggota_mahkamah_konstitusi_l" disabled="" readonly="">
                    @error('anggota_mahkamah_konstitusi_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">anggota_mahkamah_konstitusi_p:</label>
                    <input type="text" name="anggota_mahkamah_konstitusi_p" value="{{ $pekerjaan->anggota_mahkamah_konstitusi_p }}" class="form-control" 
                    placeholder="anggota_mahkamah_konstitusi_p" disabled="" readonly="">
                    @error('anggota_mahkamah_konstitusi_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">anggota_kabinet_kemetrian_l:</label>
                    <input type="text" name="anggota_kabinet_kemetrian_l" value="{{ $pekerjaan->anggota_kabinet_kemetrian_l }}" class="form-control" 
                    placeholder="anggota_kabinet_kemetrian_l" disabled="" readonly="">
                    @error('anggota_kabinet_kemetrian_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">anggota_kabinet_kemetrian_p:</label>
                    <input type="text" name="anggota_kabinet_kemetrian_p" value="{{ $pekerjaan->anggota_kabinet_kemetrian_p }}" class="form-control" 
                    placeholder="anggota_kabinet_kemetrian_p" disabled="" readonly="">
                    @error('anggota_kabinet_kemetrian_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">duta_besar_l:</label>
                    <input type="text" name="duta_besar_l" value="{{ $pekerjaan->duta_besar_l }}" class="form-control" 
                    placeholder="duta_besar_l" disabled="" readonly="">
                    @error('duta_besar_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">duta_besar_p:</label>
                    <input type="text" name="duta_besar_p" value="{{ $pekerjaan->duta_besar_p }}" class="form-control" 
                    placeholder="duta_besar_p" disabled="" readonly="">
                    @error('duta_besar_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">gubernur_l:</label>
                    <input type="text" name="gubernur_l" value="{{ $pekerjaan->gubernur_l }}" class="form-control" 
                    placeholder="gubernur_l" disabled="" readonly="">
                    @error('gubernur_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">gubernur_p:</label>
                    <input type="text" name="gubernur_p" value="{{ $pekerjaan->gubernur_p }}" class="form-control" 
                    placeholder="gubernur_p" disabled="" readonly="">
                    @error('gubernur_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">wakil_gubernur_l:</label>
                    <input type="text" name="wakil_gubernur_l" value="{{ $pekerjaan->wakil_gubernur_l }}" class="form-control" 
                    placeholder="wakil_gubernur_l" disabled="" readonly="">
                    @error('wakil_gubernur_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">wakil_gubernur_p:</label>
                    <input type="text" name="wakil_gubernur_p" value="{{ $pekerjaan->wakil_gubernur_p }}" class="form-control" 
                    placeholder="wakil_gubernur_p" disabled="" readonly="">
                    @error('wakil_gubernur_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">bupati_l:</label>
                    <input type="text" name="bupati_l" value="{{ $pekerjaan->bupati_l }}" class="form-control" 
                    placeholder="bupati_l" disabled="" readonly="">
                    @error('bupati_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">bupati_p:</label>
                    <input type="text" name="bupati_p" value="{{ $pekerjaan->bupati_p }}" class="form-control" 
                    placeholder="bupati_p" disabled="" readonly="">
                    @error('bupati_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">wakil_bupati_l:</label>
                    <input type="text" name="wakil_bupati_l" value="{{ $pekerjaan->wakil_bupati_l }}" class="form-control" 
                    placeholder="wakil_bupati_l" disabled="" readonly="">
                    @error('wakil_bupati_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">wakil_bupati_p:</label>
                    <input type="text" name="wakil_bupati_p" value="{{ $pekerjaan->wakil_bupati_p }}" class="form-control" 
                    placeholder="wakil_bupati_p" disabled="" readonly="">
                    @error('wakil_bupati_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">walikota_l:</label>
                    <input type="text" name="walikota_l" value="{{ $pekerjaan->walikota_l }}" class="form-control" 
                    placeholder="walikota_l" disabled="" readonly="">
                    @error('walikota_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">walikota_p:</label>
                    <input type="text" name="walikota_p" value="{{ $pekerjaan->walikota_p }}" class="form-control" 
                    placeholder="walikota_p" disabled="" readonly="">
                    @error('walikota_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">wakil_walikota_l:</label>
                    <input type="text" name="wakil_walikota_l" value="{{ $pekerjaan->wakil_walikota_l }}" class="form-control" 
                    placeholder="wakil_walikota_l" disabled="" readonly="">
                    @error('wakil_walikota_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">wakil_walikota_p:</label>
                    <input type="text" name="wakil_walikota_p" value="{{ $pekerjaan->wakil_walikota_p }}" class="form-control" 
                    placeholder="wakil_walikota_p" disabled="" readonly="">
                    @error('wakil_walikota_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">anggota_dprd_prop_l:</label>
                    <input type="text" name="anggota_dprd_prop_l" value="{{ $pekerjaan->anggota_dprd_prop_l }}" class="form-control" 
                    placeholder="anggota_dprd_prop_l" disabled="" readonly="">
                    @error('anggota_dprd_prop_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">anggota_dprd_prop_p:</label>
                    <input type="text" name="anggota_dprd_prop_p" value="{{ $pekerjaan->anggota_dprd_prop_p }}" class="form-control" 
                    placeholder="anggota_dprd_prop_p" disabled="" readonly="">
                    @error('anggota_dprd_prop_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">anggota_dprd_kab_kota_l:</label>
                    <input type="text" name="anggota_dprd_kab_kota_l" value="{{ $pekerjaan->anggota_dprd_kab_kota_l }}" class="form-control" 
                    placeholder="anggota_dprd_kab_kota_l" disabled="" readonly="">
                    @error('anggota_dprd_kab_kota_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">anggota_dprd_kab_kota_p:</label>
                    <input type="text" name="anggota_dprd_kab_kota_p" value="{{ $pekerjaan->anggota_dprd_kab_kota_p }}" class="form-control" 
                    placeholder="anggota_dprd_kab_kota_p" disabled="" readonly="">
                    @error('anggota_dprd_kab_kota_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">dosen_l:</label>
                    <input type="text" name="dosen_l" value="{{ $pekerjaan->dosen_l }}" class="form-control" 
                    placeholder="dosen_l" disabled="" readonly="">
                    @error('dosen_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">dosen_p:</label>
                    <input type="text" name="dosen_p" value="{{ $pekerjaan->dosen_p }}" class="form-control" 
                    placeholder="dosen_p" disabled="" readonly="">
                    @error('dosen_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">guru_l:</label>
                    <input type="text" name="guru_l" value="{{ $pekerjaan->guru_l }}" class="form-control" 
                    placeholder="guru_l" disabled="" readonly="">
                    @error('guru_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">guru_p:</label>
                    <input type="text" name="guru_p" value="{{ $pekerjaan->guru_p }}" class="form-control" 
                    placeholder="guru_p" disabled="" readonly="">
                    @error('guru_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">pilot_l:</label>
                    <input type="text" name="pilot_l" value="{{ $pekerjaan->pilot_l }}" class="form-control" 
                    placeholder="pilot_l" disabled="" readonly="">
                    @error('pilot_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">pilot_p:</label>
                    <input type="text" name="pilot_p" value="{{ $pekerjaan->pilot_p }}" class="form-control" 
                    placeholder="pilot_p" disabled="" readonly="">
                    @error('pilot_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">pengacara_l:</label>
                    <input type="text" name="pengacara_l" value="{{ $pekerjaan->pengacara_l }}" class="form-control" 
                    placeholder="pengacara_l" disabled="" readonly="">
                    @error('pengacara_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">pengacara_p:</label>
                    <input type="text" name="pengacara_p" value="{{ $pekerjaan->pengacara_p }}" class="form-control" 
                    placeholder="pengacara_p" disabled="" readonly="">
                    @error('pengacara_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">notaris_l:</label>
                    <input type="text" name="notaris_l" value="{{ $pekerjaan->notaris_l }}" class="form-control" 
                    placeholder="notaris_l" disabled="" readonly="">
                    @error('notaris_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">notaris_p:</label>
                    <input type="text" name="notaris_p" value="{{ $pekerjaan->notaris_p }}" class="form-control" 
                    placeholder="notaris_p" disabled="" readonly="">
                    @error('notaris_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">arsitek_l:</label>
                    <input type="text" name="arsitek_l" value="{{ $pekerjaan->arsitek_l }}" class="form-control" 
                    placeholder="arsitek_l" disabled="" readonly="">
                    @error('arsitek_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">arsitek_p:</label>
                    <input type="text" name="arsitek_p" value="{{ $pekerjaan->arsitek_p }}" class="form-control" 
                    placeholder="arsitek_p" disabled="" readonly="">
                    @error('arsitek_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">akuntan_l:</label>
                    <input type="text" name="akuntan_l" value="{{ $pekerjaan->akuntan_l }}" class="form-control" 
                    placeholder="akuntan_l" disabled="" readonly="">
                    @error('akuntan_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">akuntan_p:</label>
                    <input type="text" name="akuntan_p" value="{{ $pekerjaan->akuntan_p }}" class="form-control" 
                    placeholder="akuntan_p" disabled="" readonly="">
                    @error('akuntan_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">konsultan_l:</label>
                    <input type="text" name="konsultan_l" value="{{ $pekerjaan->konsultan_l }}" class="form-control" 
                    placeholder="konsultan_l" disabled="" readonly="">
                    @error('konsultan_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">konsultan_p:</label>
                    <input type="text" name="konsultan_p" value="{{ $pekerjaan->konsultan_p }}" class="form-control" 
                    placeholder="konsultan_p" disabled="" readonly="">
                    @error('konsultan_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">dokter_l:</label>
                    <input type="text" name="dokter_l" value="{{ $pekerjaan->dokter_l }}" class="form-control" 
                    placeholder="dokter_l" disabled="" readonly="">
                    @error('dokter_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">dokter_p:</label>
                    <input type="text" name="dokter_p" value="{{ $pekerjaan->dokter_p }}" class="form-control" 
                    placeholder="dokter_p" disabled="" readonly="">
                    @error('dokter_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">bidan_l:</label>
                    <input type="text" name="bidan_l" value="{{ $pekerjaan->bidan_l }}" class="form-control" 
                    placeholder="bidan_l" disabled="" readonly="">
                    @error('bidan_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">bidan_p:</label>
                    <input type="text" name="bidan_p" value="{{ $pekerjaan->bidan_p }}" class="form-control" 
                    placeholder="bidan_p" disabled="" readonly="">
                    @error('bidan_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">perawat_l:</label>
                    <input type="text" name="perawat_l" value="{{ $pekerjaan->perawat_l }}" class="form-control" 
                    placeholder="perawat_l" disabled="" readonly="">
                    @error('perawat_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">perawat_p:</label>
                    <input type="text" name="perawat_p" value="{{ $pekerjaan->perawat_p }}" class="form-control" 
                    placeholder="perawat_p" disabled="" readonly="">
                    @error('perawat_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">apotek_l:</label>
                    <input type="text" name="apotek_l" value="{{ $pekerjaan->apotek_l }}" class="form-control" 
                    placeholder="apotek_l" disabled="" readonly="">
                    @error('apotek_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">apotek_p:</label>
                    <input type="text" name="apotek_p" value="{{ $pekerjaan->apotek_p }}" class="form-control" 
                    placeholder="apotek_p" disabled="" readonly="">
                    @error('apotek_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">psikiater_psikolog_l:</label>
                    <input type="text" name="psikiater_psikolog_l" value="{{ $pekerjaan->psikiater_psikolog_l }}" class="form-control" 
                    placeholder="psikiater_psikolog_l" disabled="" readonly="">
                    @error('psikiater_psikolog_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">psikiater_psikolog_p:</label>
                    <input type="text" name="psikiater_psikolog_p" value="{{ $pekerjaan->psikiater_psikolog_p }}" class="form-control" 
                    placeholder="psikiater_psikolog_p" disabled="" readonly="">
                    @error('psikiater_psikolog_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">penyiar_televisi_l:</label>
                    <input type="text" name="penyiar_televisi_l" value="{{ $pekerjaan->penyiar_televisi_l }}" class="form-control" 
                    placeholder="penyiar_televisi_l" disabled="" readonly="">
                    @error('penyiar_televisi_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">penyiar_televisi_p:</label>
                    <input type="text" name="penyiar_televisi_p" value="{{ $pekerjaan->penyiar_televisi_p }}" class="form-control" 
                    placeholder="penyiar_televisi_p" disabled="" readonly="">
                    @error('penyiar_televisi_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">penyiar_radio_l:</label>
                    <input type="text" name="penyiar_radio_l" value="{{ $pekerjaan->penyiar_radio_l }}" class="form-control" 
                    placeholder="penyiar_radio_l" disabled="" readonly="">
                    @error('penyiar_radio_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">penyiar_radio_p:</label>
                    <input type="text" name="penyiar_radio_p" value="{{ $pekerjaan->penyiar_radio_p }}" class="form-control" 
                    placeholder="penyiar_radio_p" disabled="" readonly="">
                    @error('penyiar_radio_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">pelaut_l:</label>
                    <input type="text" name="pelaut_l" value="{{ $pekerjaan->pelaut_l }}" class="form-control" 
                    placeholder="pelaut_l" disabled="" readonly="">
                    @error('pelaut_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">pelaut_p:</label>
                    <input type="text" name="pelaut_p" value="{{ $pekerjaan->pelaut_p }}" class="form-control" 
                    placeholder="pelaut_p" disabled="" readonly="">
                    @error('pelaut_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">peneliti_l:</label>
                    <input type="text" name="peneliti_l" value="{{ $pekerjaan->peneliti_l }}" class="form-control" 
                    placeholder="peneliti_l" disabled="" readonly="">
                    @error('peneliti_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">peneliti_p:</label>
                    <input type="text" name="peneliti_p" value="{{ $pekerjaan->peneliti_p }}" class="form-control" 
                    placeholder="peneliti_p" disabled="" readonly="">
                    @error('peneliti_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">sopir_l:</label>
                    <input type="text" name="sopir_l" value="{{ $pekerjaan->sopir_l }}" class="form-control" 
                    placeholder="sopir_l" disabled="" readonly="">
                    @error('sopir_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">sopir_p:</label>
                    <input type="text" name="sopir_p" value="{{ $pekerjaan->sopir_p }}" class="form-control" 
                    placeholder="sopir_p" disabled="" readonly="">
                    @error('sopir_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">pialang_l:</label>
                    <input type="text" name="pialang_l" value="{{ $pekerjaan->pialang_l }}" class="form-control" 
                    placeholder="pialang_l" disabled="" readonly="">
                    @error('pialang_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">pialang_p:</label>
                    <input type="text" name="pialang_p" value="{{ $pekerjaan->pialang_p }}" class="form-control" 
                    placeholder="pialang_p" disabled="" readonly="">
                    @error('pialang_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">paranormal_l:</label>
                    <input type="text" name="paranormal_l" value="{{ $pekerjaan->paranormal_l }}" class="form-control" 
                    placeholder="paranormal_l" disabled="" readonly="">
                    @error('paranormal_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">paranormal_p:</label>
                    <input type="text" name="paranormal_p" value="{{ $pekerjaan->paranormal_p }}" class="form-control" 
                    placeholder="paranormal_p" disabled="" readonly="">
                    @error('paranormal_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">pedagang_l:</label>
                    <input type="text" name="pedagang_l" value="{{ $pekerjaan->pedagang_l }}" class="form-control" 
                    placeholder="pedagang_l" disabled="" readonly="">
                    @error('pedagang_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">pedagang_p:</label>
                    <input type="text" name="pedagang_p" value="{{ $pekerjaan->pedagang_p }}" class="form-control" 
                    placeholder="pedagang_p" disabled="" readonly="">
                    @error('pedagang_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">perangkat_desa_l:</label>
                    <input type="text" name="perangkat_desa_l" value="{{ $pekerjaan->perangkat_desa_l }}" class="form-control" 
                    placeholder="perangkat_desa_l" disabled="" readonly="">
                    @error('perangkat_desa_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">perangkat_desa_p:</label>
                    <input type="text" name="perangkat_desa_p" value="{{ $pekerjaan->perangkat_desa_p }}" class="form-control" 
                    placeholder="perangkat_desa_p" disabled="" readonly="">
                    @error('perangkat_desa_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">kepala_desa_l:</label>
                    <input type="text" name="kepala_desa_l" value="{{ $pekerjaan->kepala_desa_l }}" class="form-control" 
                    placeholder="kepala_desa_l" disabled="" readonly="">
                    @error('kepala_desa_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">kepala_desa_p:</label>
                    <input type="text" name="kepala_desa_p" value="{{ $pekerjaan->kepala_desa_p }}" class="form-control" 
                    placeholder="kepala_desa_p" disabled="" readonly="">
                    @error('kepala_desa_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">biarawan_biarawati_l:</label>
                    <input type="text" name="biarawan_biarawati_l" value="{{ $pekerjaan->biarawan_biarawati_l }}" class="form-control" 
                    placeholder="biarawan_biarawati_l" disabled="" readonly="">
                    @error('biarawan_biarawati_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">biarawan_biarawati_p:</label>
                    <input type="text" name="biarawan_biarawati_p" value="{{ $pekerjaan->biarawan_biarawati_p }}" class="form-control" 
                    placeholder="biarawan_biarawati_p" disabled="" readonly="">
                    @error('biarawan_biarawati_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">wiraswasta_l:</label>
                    <input type="text" name="wiraswasta_l" value="{{ $pekerjaan->wiraswasta_l }}" class="form-control" 
                    placeholder="wiraswasta_l" disabled="" readonly="">
                    @error('wiraswasta_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">wiraswasta_p:</label>
                    <input type="text" name="wiraswasta_p" value="{{ $pekerjaan->wiraswasta_p }}" class="form-control" 
                    placeholder="wiraswasta_p" disabled="" readonly="">
                    @error('wiraswasta_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">anggota_lemb_tinggi_lainnya_l:</label>
                    <input type="text" name="anggota_lemb_tinggi_lainnya_l" value="{{ $pekerjaan->anggota_lemb_tinggi_lainnya_l }}" class="form-control" 
                    placeholder="anggota_lemb_tinggi_lainnya_l" disabled="" readonly="">
                    @error('anggota_lemb_tinggi_lainnya_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">anggota_lemb_tinggi_lainnya_p:</label>
                    <input type="text" name="anggota_lemb_tinggi_lainnya_p" value="{{ $pekerjaan->anggota_lemb_tinggi_lainnya_p }}" class="form-control" 
                    placeholder="anggota_lemb_tinggi_lainnya_p" disabled="" readonly="">
                    @error('anggota_lemb_tinggi_lainnya_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">artis_l:</label>
                    <input type="text" name="artis_l" value="{{ $pekerjaan->artis_l }}" class="form-control" 
                    placeholder="artis_l" disabled="" readonly="">
                    @error('artis_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">artis_p:</label>
                    <input type="text" name="artis_p" value="{{ $pekerjaan->artis_p }}" class="form-control" 
                    placeholder="artis_p" disabled="" readonly="">
                    @error('artis_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">atlit_l:</label>
                    <input type="text" name="atlit_l" value="{{ $pekerjaan->atlit_l }}" class="form-control" 
                    placeholder="atlit_l" disabled="" readonly="">
                    @error('atlit_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">atlit_p:</label>
                    <input type="text" name="atlit_p" value="{{ $pekerjaan->atlit_p }}" class="form-control" 
                    placeholder="atlit_p" disabled="" readonly="">
                    @error('atlit_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">cheff_l:</label>
                    <input type="text" name="cheff_l" value="{{ $pekerjaan->cheff_l }}" class="form-control" 
                    placeholder="cheff_l" disabled="" readonly="">
                    @error('cheff_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">cheff_p:</label>
                    <input type="text" name="cheff_p" value="{{ $pekerjaan->cheff_p }}" class="form-control" 
                    placeholder="cheff_p" disabled="" readonly="">
                    @error('cheff_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">manajer_l:</label>
                    <input type="text" name="manajer_l" value="{{ $pekerjaan->manajer_l }}" class="form-control" 
                    placeholder="manajer_l" disabled="" readonly="">
                    @error('manajer_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">manajer_p:</label>
                    <input type="text" name="manajer_p" value="{{ $pekerjaan->manajer_p }}" class="form-control" 
                    placeholder="manajer_p" disabled="" readonly="">
                    @error('manajer_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tenaga_tata_usaha_l:</label>
                    <input type="text" name="tenaga_tata_usaha_l" value="{{ $pekerjaan->tenaga_tata_usaha_l }}" class="form-control" 
                    placeholder="tenaga_tata_usaha_l" disabled="" readonly="">
                    @error('tenaga_tata_usaha_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tenaga_tata_usaha_p:</label>
                    <input type="text" name="tenaga_tata_usaha_p" value="{{ $pekerjaan->tenaga_tata_usaha_p }}" class="form-control" 
                    placeholder="tenaga_tata_usaha_p" disabled="" readonly="">
                    @error('tenaga_tata_usaha_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">operator_l:</label>
                    <input type="text" name="operator_l" value="{{ $pekerjaan->operator_l }}" class="form-control" 
                    placeholder="operator_l" disabled="" readonly="">
                    @error('operator_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">operator_p:</label>
                    <input type="text" name="operator_p" value="{{ $pekerjaan->operator_p }}" class="form-control" 
                    placeholder="operator_p" disabled="" readonly="">
                    @error('operator_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">pekerja_pengolahan_kerajinan_l:</label>
                    <input type="text" name="pekerja_pengolahan_kerajinan_l" value="{{ $pekerjaan->pekerja_pengolahan_kerajinan_l }}" class="form-control" 
                    placeholder="pekerja_pengolahan_kerajinan_l" disabled="" readonly="">
                    @error('pekerja_pengolahan_kerajinan_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">pekerja_pengolahan_kerajinan_p:</label>
                    <input type="text" name="pekerja_pengolahan_kerajinan_p" value="{{ $pekerjaan->pekerja_pengolahan_kerajinan_p }}" class="form-control" 
                    placeholder="pekerja_pengolahan_kerajinan_p" disabled="" readonly="">
                    @error('pekerja_pengolahan_kerajinan_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">teknisi_l:</label>
                    <input type="text" name="teknisi_l" value="{{ $pekerjaan->teknisi_l }}" class="form-control" 
                    placeholder="teknisi_l" disabled="" readonly="">
                    @error('teknisi_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">teknisi_p:</label>
                    <input type="text" name="teknisi_p" value="{{ $pekerjaan->teknisi_p }}" class="form-control" 
                    placeholder="teknisi_p" disabled="" readonly="">
                    @error('teknisi_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">asisten_ahli_l:</label>
                    <input type="text" name="asisten_ahli_l" value="{{ $pekerjaan->asisten_ahli_l }}" class="form-control" 
                    placeholder="asisten_ahli_l" disabled="" readonly="">
                    @error('asisten_ahli_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">asisten_ahli_p:</label>
                    <input type="text" name="asisten_ahli_p" value="{{ $pekerjaan->asisten_ahli_p }}" class="form-control" 
                    placeholder="asisten_ahli_p" disabled="" readonly="">
                    @error('asisten_ahli_p')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">pekerjaan_lainnya_l:</label>
                    <input type="text" name="pekerjaan_lainnya_l" value="{{ $pekerjaan->pekerjaan_lainnya_l }}" class="form-control" 
                    placeholder="pekerjaan_lainnya_l" disabled="" readonly="">
                    @error('pekerjaan_lainnya_l')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">pekerjaan_lainnya_p:</label>
                    <input type="text" name="pekerjaan_lainnya_p" value="{{ $pekerjaan->pekerjaan_lainnya_p }}" class="form-control" 
                    placeholder="pekerjaan_lainnya_p" disabled="" readonly="">
                    @error('pekerjaan_lainnya_p')
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