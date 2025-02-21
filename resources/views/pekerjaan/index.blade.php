@extends("layouts.admin")
@section("main-content")
<!--start breadcrumb-->
<div class="container-fluid px-4">
        <h1 class="mt-4">Data pekerjaan</h1>
        <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('home') }}" style="color: #000000;">Dashboard</a></li>
            <li class="breadcrumb-item active">Data pekerjaan</li>
        </ol>
</div>

<!--end breadcrumb-->

<div class="card">
    <div class="card-body">
        <div class="d-flex align-items-center">
            <h5 class="mb-0">Data pekerjaan</h5> 
        </div>
        @if ($message = Session::get("success"))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="table-responsive mt-3">
        @if (Auth::user()->type == 1)
        <a class="btn btn-sm btn-success px-2" style="margin-bottom:10px" 
            href="{{ route("agama.create") }}"><ion-icon name="add"></ion-icon> Input</a>
        
            <a class="btn btn-sm btn-success px-2" style="margin-bottom:10px" 
            href="{{ route("pekerjaan.create") }}"><ion-icon name="add"></ion-icon> Import</a>
        @endif  
        
        <a href="{{ route('export.pekerjaan') }}" class="btn btn-sm btn-success px-2" style="margin-bottom:10px">
        <ion-icon name="download"></ion-icon> Export ke Excel</a>
       
            <table id="myTable" class="table table-bordered">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>KODE</th>
                        <th>WILAYAH</th>
                        <th>BELUM/TIDAK BEKERJA (L)</th>
                        <th>BELUM/TIDAK BEKERJA (P)</th>
                        <th class="hidden-column">MENGURUS RUMAH TANGGA (L)</th>
                        <th class="hidden-column">MENGURUS RUMAH TANGGA (P)</th>
                        <th class="hidden-column">PELAJAR/MAHASISWA (L)</th>
                        <th class="hidden-column">PELAJAR/MAHASISWA (P)</th>
                        <th class="hidden-column">PENSIUNAN (L)</th>
                        <th class="hidden-column">PENSIUNAN (P)</th>
                        <th class="hidden-column">PEGAWAI NEGERI SIPIL/PNS (L)</th>
                        <th class="hidden-column">PEGAWAI NEGERI SIPIL/PNS (P)</th>
                        <th class="hidden-column">TENTARA NASIONAL INDONESIA (L)</th>
                        <th class="hidden-column">TENTARA NASIONAL INDONESIA (P)</th>
                        <th class="hidden-column">KEPOLISIAN RI/POLRI (L)</th>
                        <th class="hidden-column">KEPOLISIAN RI/POLRI (P)</th>
                        <th class="hidden-column">PERDAGANGAN (L)</th>
                        <th class="hidden-column">PERDAGANGAN (P)</th>
                        <th class="hidden-column">PETANI/PEKEBUN (L)</th>
                        <th class="hidden-column">PETANI/PEKEBUN (P)</th>
                        <th class="hidden-column">PETERNAK (L)</th>
                        <th class="hidden-column">PETERNAK (P)</th>
                        <th class="hidden-column">NELAYAN/PERIKANAN (L)</th>
                        <th class="hidden-column">NELAYAN/PERIKANAN (P)</th>
                        <th class="hidden-column">INDUSTRI (L)</th>
                        <th class="hidden-column">INDUSTRI (P)</th>
                        <th class="hidden-column">KONSTRUKSI (L)</th>
                        <th class="hidden-column">KONSTRUKSI (P)</th>
                        <th class="hidden-column">TRANSPORTASI (L)</th>
                        <th class="hidden-column">TRANSPORTASI (P)</th>
                        <th class="hidden-column">KARYAWAN SWASTA (L)</th>
                        <th class="hidden-column">KARYAWAN SWASTA (P)</th>
                        <th class="hidden-column">KARYAWAN BUMN (L)</th>
                        <th class="hidden-column">KARYAWAN BUMN (P)</th>
                        <th class="hidden-column">KARYAWAN BUMD (L)</th>
                        <th class="hidden-column">KARYAWAN BUMD (P)</th>
                        <th class="hidden-column">KARYAWAN HONORER (L)</th>
                        <th class="hidden-column">KARYAWAN HONORER (P)</th>
                        <th class="hidden-column">BURUH HARIAN LEPAS (L)</th>
                        <th class="hidden-column">BURUH HARIAN LEPAS (P)</th>
                        <th class="hidden-column">BURUH TANI/PERKEBUNAN (L)</th>
                        <th class="hidden-column">BURUH TANI/PERKEBUNAN (P)</th>
                        <th class="hidden-column">BURUH NELAYAN/PERIKANAN (L)</th>
                        <th class="hidden-column">BURUH NELAYAN/PERIKANAN (P)</th>
                        <th class="hidden-column">BURUH PETERNAKAN (L)</th>
                        <th class="hidden-column">BURUH PETERNAKAN (P)</th>
                        <th class="hidden-column">PEMBANTU RUMAH TANGGA (L)</th>
                        <th class="hidden-column">PEMBANTU RUMAH TANGGA (P)</th>
                        <th class="hidden-column">TUKANG CUKUR (L)</th>
                        <th class="hidden-column">TUKANG CUKUR (P)</th>
                        <th class="hidden-column">TUKANG LISTRIK (L)</th>
                        <th class="hidden-column">TUKANG LISTRIK (P)</th>
                        <th class="hidden-column">TUKANG BATU (L)</th>
                        <th class="hidden-column">TUKANG BATU (P)</th>
                        <th class="hidden-column">TUKANG KAYU (L)</th>
                        <th class="hidden-column">TUKANG KAYU (P)</th>
                        <th class="hidden-column">TUKANG SOL SEPATU (L)</th>
                        <th class="hidden-column">TUKANG SOL SEPATU (P)</th>
                        <th class="hidden-column">TUKANG LAS/PANDAI BESI (L)</th>
                        <th class="hidden-column">TUKANG LAS/PANDAI BESI (P)</th>
                        <th class="hidden-column">TUKANG JAHIT (L)</th>
                        <th class="hidden-column">TUKANG JAHIT (P)</th>
                        <th class="hidden-column">TUKANG GIGI (L)</th>
                        <th class="hidden-column">TUKANG GIGI (P)</th>
                        <th class="hidden-column">PENATA RIAS (L)</th>
                        <th class="hidden-column">PENATA RIAS (P)</th>
                        <th class="hidden-column">PENATA BUSANA (L)</th>
                        <th class="hidden-column">PENATA BUSANA (P)</th>
                        <th class="hidden-column">PENATA RAMBUT (L)</th>
                        <th class="hidden-column">PENATA RAMBUT (P)</th>
                        <th class="hidden-column">MEKANIK (L)</th>
                        <th class="hidden-column">MEKANIK (P)</th>
                        <th class="hidden-column">SENIMAN (L)</th>
                        <th class="hidden-column">SENIMAN (P)</th>
                        <th class="hidden-column">TABIB (L)</th>
                        <th class="hidden-column">TABIB (P)</th>
                        <th class="hidden-column">PARAJI (L)</th>
                        <th class="hidden-column">PARAJI (P)</th>
                        <th class="hidden-column">PERANCANG BUSANA (L)</th>
                        <th class="hidden-column">PERANCANG BUSANA (P)</th>
                        <th class="hidden-column">PENTERJEMAH (L)</th>
                        <th class="hidden-column">PENTERJEMAH (P)</th>
                        <th class="hidden-column">IMAM MASJID (L)</th>
                        <th class="hidden-column">IMAM MASJID (P)</th>
                        <th class="hidden-column">PENDETA (L)</th>
                        <th class="hidden-column">PENDETA (P)</th>
                        <th class="hidden-column">PASTOR (L)</th>
                        <th class="hidden-column">PASTOR (P)</th>
                        <th class="hidden-column">WARTAWAN (L)</th>
                        <th class="hidden-column">WARTAWAN (P)</th>
                        <th class="hidden-column">USTADZ/MUBALIGH (L)</th>
                        <th class="hidden-column">USTADZ/MUBALIGH (P)</th>
                        <th class="hidden-column">JURU MASAK (L)</th>
                        <th class="hidden-column">JURU MASAK (P)</th>
                        <th class="hidden-column">PROMOTOR ACARA (L)</th>
                        <th class="hidden-column">PROMOTOR ACARA (P)</th>
                        <th class="hidden-column">ANGGOTA DPR RI (L)</th>
                        <th class="hidden-column">ANGGOTA DPR RI (P)</th>
                        <th class="hidden-column">ANGGOTA DPD RI (L)</th>
                        <th class="hidden-column">ANGGOTA DPD RI (P)</th>
                        <th class="hidden-column">ANGGOTA BPK (L)</th>
                        <th class="hidden-column">ANGGOTA BPK (P)</th>
                        <th class="hidden-column">PRESIDEN (L)</th>
                        <th class="hidden-column">PRESIDEN (P)</th>
                        <th class="hidden-column">WAKIL PRESIDEN (L)</th>
                        <th class="hidden-column">WAKIL PRESIDEN (P)</th>
                        <th class="hidden-column">ANGGOTA MAHKAMAH KONSTITUSI (L)</th>
                        <th class="hidden-column">ANGGOTA MAHKAMAH KONSTITUSI (P)</th>
                        <th class="hidden-column">ANGGOTA KABINET KEMENTERIAN (L)</th>
                        <th class="hidden-column">ANGGOTA KABINET KEMENTERIAN (P)</th>
                        <th class="hidden-column">DUTA BESAR (L)</th>
                        <th class="hidden-column">DUTA BESAR (P)</th>
                        <th class="hidden-column">GUBERNUR (L)</th>
                        <th class="hidden-column">GUBERNUR (P)</th>
                        <th class="hidden-column">WAKIL GUBERNUR (L)</th>
                        <th class="hidden-column">WAKIL GUBERNUR (P)</th>
                        <th class="hidden-column">BUPATI (L)</th>
                        <th class="hidden-column">BUPATI (P)</th>
                        <th class="hidden-column">WAKIL BUPATI (L)</th>
                        <th class="hidden-column">WAKIL BUPATI (P)</th>
                        <th class="hidden-column">WALIKOTA (L)</th>
                        <th class="hidden-column">WALIKOTA (P)</th>
                        <th class="hidden-column">WAKIL WALIKOTA (L)</th>
                        <th class="hidden-column">WAKIL WALIKOTA (P)</th>
                        <th class="hidden-column">ANGGOTA DPRD PROP (L)</th>
                        <th class="hidden-column">ANGGOTA DPRD PROP (P)</th>
                        <th class="hidden-column">ANGGOTA DPRD KAB/KOTA (L)</th>
                        <th class="hidden-column">ANGGOTA DPRD KAB/KOTA (P)</th>
                        <th class="hidden-column">DOSEN (L)</th>
                        <th class="hidden-column">DOSEN (P)</th>
                        <th class="hidden-column">GURU (L)</th>
                        <th class="hidden-column">GURU (P)</th>
                        <th class="hidden-column">PILOT(L)</th>
                        <th class="hidden-column">PILOT (P)</th>
                        <th class="hidden-column">PENGACARA (L)</th>
                        <th class="hidden-column">PENGACARA (P)</th>
                        <th class="hidden-column">NOTARIS(L)</th>
                        <th class="hidden-column">NOTARIS (P)</th>
                        <th class="hidden-column">ARSITEK (L)</th>
                        <th class="hidden-column">ARSITEK (P)</th>
                        <th class="hidden-column">AKUNTAN (L)</th>
                        <th class="hidden-column">AKUNTAN (P)</th>
                        <th class="hidden-column">KONSULTAN (L)</th>
                        <th class="hidden-column">KONSULTAN (P)</th>
                        <th class="hidden-column">DOKTER (L)</th>
                        <th class="hidden-column">DOKTER (P)</th>
                        <th class="hidden-column">BIDAN (L)</th>
                        <th class="hidden-column">BIDAN (P)</th>
                        <th class="hidden-column">PERAWAT (L)</th>
                        <th class="hidden-column">PERAWAT (P)</th>
                        <th class="hidden-column">APOTEKER (L)</th>
                        <th class="hidden-column">APOTEKER (P)</th>
                        <th class="hidden-column">PSIKATER/PSIKOLOG (L)</th>
                        <th class="hidden-column">PSIKIATER/PSIKOLOG (P)</th>
                        <th class="hidden-column">PENYIAR TELEVISI (L)</th>
                        <th class="hidden-column">PENYIAR TELEVISI (P)</th>
                        <th class="hidden-column">PENYIAR RADIO (L)</th>
                        <th class="hidden-column">PENYIAR RADIO (P)</th>                
                        <th class="hidden-column">PELAUT (L)</th>
                        <th class="hidden-column">PELAUT (P)</th>
                        <th class="hidden-column">PENELITI (L)</th>
                        <th class="hidden-column">PENELITI (P)</th>
                        <th class="hidden-column">SOPIR (L)</th>
                        <th class="hidden-column">SOPIR (P)</th>
                        <th class="hidden-column">PIALANG (L)</th>
                        <th class="hidden-column">PIALANG (P)</th>
                        <th class="hidden-column">PARANORMAL (L)</th>
                        <th class="hidden-column">PARANORMAL (P)</th>
                        <th class="hidden-column">PEDAGANG (L)</th>
                        <th class="hidden-column">PEDAGANG (P)</th>
                        <th class="hidden-column">PERANGKAT DESA(L)</th>
                        <th class="hidden-column">PERANGKAT DESA (P)</th>
                        <th class="hidden-column">KEPALA DESA (L)</th>
                        <th class="hidden-column">KEPALA DESA (P)</th>
                        <th class="hidden-column">BIARAWAN/BIARAWATI (L)</th>
                        <th class="hidden-column">BIARAWAN/BIARAWATI (P)</th>
                        <th class="hidden-column">WIRASWASTA (L)</th>
                        <th class="hidden-column">WIRASWASTA (P)</th>
                        <th class="hidden-column">ANGGOTA LEMBAGA TINGGI LAINNYA (L)</th>
                        <th class="hidden-column">ANGGOTA LEMBAGA TINGGI LAINNYA (P)</th>
                        <th class="hidden-column">ARTIS (L)</th>
                        <th class="hidden-column">ARTIS (P)</th>
                        <th class="hidden-column">ATLIT (L)</th>
                        <th class="hidden-column">ATLIT (P)</th>
                        <th class="hidden-column">CHEF (L)</th>
                        <th class="hidden-column">CHEF (P)</th>
                        <th class="hidden-column">MANAJER (L)</th>
                        <th class="hidden-column">MANAJER (P)</th>
                        <th class="hidden-column">TENAGA TATA USAHA (L)</th>
                        <th class="hidden-column">TENAGA TATA USAHA (P)</th>
                        <th class="hidden-column">OPERATOR (L)</th>
                        <th class="hidden-column">OPERATOR (P)</th>
                        <th class="hidden-column">PEKERJA PENGOLAHAN KERAJINAN (L)</th>
                        <th class="hidden-column">PEKERJA PENGOLAHAN KERAJINAN (P)</th>
                        <th class="hidden-column">TEKNISI (L)</th>
                        <th class="hidden-column">TEKNISI (P)</th>
                        <th class="hidden-column">ASISTEN AHLI (L)</th>
                        <th class="hidden-column">ASISTEN AHLI (P)</th>
                        <th class="hidden-column">PEKERJAAN LAINNYA (L)</th>
                        <th class="hidden-column">PEKERJAAN LAINNYA (P)</th>
                        <th width="280px"> Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($pekerjaan as $pekerjaan)
                <tr id="row-{{ $pekerjaan->id }}">
                        <td>{{ $pekerjaan->id }}</td>
                        <td>{{ $pekerjaan->kode }}</td>
                        <td>{{ $pekerjaan->wilayah }}</td>
                        <td>{{ $pekerjaan->belum_tidak_bekerja_l }}</td>
                        <td>{{ $pekerjaan->belum_tidak_bekerja_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->mengurus_rumah_tangga_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->mengurus_rumah_tangga_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->pelajar_mahasiswa_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->pelajar_mahasiswa_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->pensiunan_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->pensiunan_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->pegawai_negeri_sipil_pns_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->pegawai_negeri_sipil_pns_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->tentara_nasional_indonesia_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->tentara_nasional_indonesia_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->kepolisian_ri_polri_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->kepolisian_ri_polri_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->perdagangan_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->perdagangan_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->petani_pekebun_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->petani_pekebun_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->peternak_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->peternak_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->nelayan_perikanan_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->nelayan_perikanan_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->industri_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->industri_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->konstruksi_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->konstruksi_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->transportasi_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->transportasi_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->karyawan_swasta_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->karyawan_swasta_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->karyawan_bumn_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->karyawan_bumn_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->karyawan_bumd_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->karyawan_bumd_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->karyawan_honorer_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->karyawan_honorer_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->buruh_harian_lepas_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->buruh_harian_lepas_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->buruh_tani_perkebunan_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->buruh_tani_perkebunan_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->buruh_nelayan_perikanan_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->buruh_nelayan_perikanan_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->buruh_peternakan_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->buruh_peternakan_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->pembantu_rumah_tangga_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->pembantu_rumah_tangga_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->tukang_cukur_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->tukang_cukur_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->tukang_listrik_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->tukang_listrik_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->tukang_batu_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->tukang_batu_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->tukang_kayu_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->tukang_kayu_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->tukang_sol_sepatu_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->tukang_sol_sepatu_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->tukang_las_pandai_besi_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->tukang_las_pandai_besi_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->tukang_jahit_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->tukang_jahit_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->tukang_gigi_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->tukang_gigi_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->penata_rias_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->penata_rias_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->penata_busana_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->penata_busana_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->penata_rambut_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->penata_rambut_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->mekanik_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->mekanik_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->seniman_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->seniman_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->tabib_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->tabib_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->paraji_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->paraji_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->perancang_busana_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->perancang_busana_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->penterjemah_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->penterjemah_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->imam_masjid_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->imam_masjid_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->pendeta_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->pendeta_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->pastor_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->pastor_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->wartawan_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->wartawan_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->ustadz_mubaligh_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->ustadz_mubaligh_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->juru_masak_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->juru_masak_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->promotor_acara_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->promotor_acara_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->anggota_dpr_ri_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->anggota_dpr_ri_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->anggota_dpd_ri_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->anggota_dpd_ri_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->anggota_bpk_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->anggota_bpk_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->presiden_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->presiden_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->wakil_presiden_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->wakil_presiden_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->anggota_mahkamah_konstitusi_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->anggota_mahkamah_konstitusi_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->anggota_kabinet_kemetrian_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->anggota_kabinet_kemetrian_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->duta_besar_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->duta_besar_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->gubernur_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->gubernur_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->wakil_gubernur_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->wakil_gubernur_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->bupati_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->bupati_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->wakil_bupati_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->wakil_bupati_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->walikota_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->walikota_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->wakil_walikota_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->wakil_walikota_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->anggota_dprd_prop_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->anggota_dprd_prop_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->anggota_dprd_kab_kota_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->anggota_dprd_kab_kota_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->dosen_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->dosen_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->guru_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->guru_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->pilot_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->pilot_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->pengacara_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->pengacara_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->notaris_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->notaris_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->arsitek_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->arsitek_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->akuntan_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->akuntan_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->konsultan_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->konsultan_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->dokter_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->dokter_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->bidan_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->bidan_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->perawat_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->perawat_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->apotek_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->apotek_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->psikiater_psikolog_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->psikiater_psikolog_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->penyiar_televisi_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->penyiar_televisi_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->penyiar_radio_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->penyiar_radio_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->pelaut_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->pelaut_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->peneliti_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->peneliti_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->sopir_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->sopir_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->pialang_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->pialang_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->paranormal_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->paranormal_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->pedagang_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->pedagang_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->perangkat_desa_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->perangkat_desa_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->kepala_desa_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->kepala_desa_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->biarawan_biarawati_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->biarawan_biarawati_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->wiraswasta_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->wiraswasta_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->anggota_lemb_tinggi_lainnya_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->anggota_lemb_tinggi_lainnya_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->artis_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->artis_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->atlit_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->atlit_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->cheff_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->cheff_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->manajer_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->manajer_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->tenaga_tata_usaha_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->tenaga_tata_usaha_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->operator_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->operator_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->pekerja_pengolahan_kerajinan_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->pekerja_pengolahan_kerajinan_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->teknisi_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->teknisi_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->asisten_ahli_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->asisten_ahli_p }}</td>
                        <td class="hidden-column">{{ $pekerjaan->pekerjaan_lainnya_l }}</td>
                        <td class="hidden-column">{{ $pekerjaan->pekerjaan_lainnya_p }}</td>
                        <td>
                        <button class="btn btn-success btn-sm toggle-details" data-id="{{ $pekerjaan->id }}">
                            Show all
                        </button>                 
                        @if (Auth::user()->type == 1)
                            <a class="btn btn-primary" href="{{ route('pekerjaan.edit',$pekerjaan->id) }}">
                                <ion-icon name="pencil-sharp"></ion-icon> Edit</a>
                            <a class="btn btn-danger" href="{{ route('pekerjaan.show',$pekerjaan->id) }}">
                                <ion-icon name="trash-outline"></ion-icon> Delete</a>
                        @endif
                        </td>
                    </tr>
                    @endforeach

                        <!-- Import Excel -->
                        <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                <form method="post" action="/pekerjaan/import_excel" enctype="multipart/form-data">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                                        </div>
                                        <div class="modal-body">
                                            {{ csrf_field() }}
                                            <label>Pilih file excel</label>
                                            <div class="form-group">
                                                <input type="file" name="file" required="required">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Import</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </thead>
                </table>
            </tbody>   


                </tbody>
            </table>
           
        </div>
    </div>
</div>
@endsection


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src= "/css/tbl.css"></script>
<!-- Pastikan file JavaScript TIDAK di-cache -->
<script src="/js/tabel.js"></script>
