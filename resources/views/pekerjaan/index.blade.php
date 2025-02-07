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
            href="{{ route("pekerjaan.create") }}"><ion-icon name="add"></ion-icon> Import</a>
        @endif    
            <table id="myTable" class="table table-bordered">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>KODE</th>
                        <th>WILAYAH</th>
                        <th>BELUM/TIDAK BEKERJA (L)</th>
                        <th>BELUM/TIDAK BEKERJA (P)</th>
                        <th>MENGURUS RUMAH TANGGA (L)</th>
                        <th>MENGURUS RUMAH TANGGA (P)</th>
                        <th>PELAJAR/MAHASISWA (L)</th>
                        <th>PELAJAR/MAHASISWA (P)</th>
                        <th>PENSIUNAN (L)</th>
                        <th>PEGAWAI NEGERI SIPIL/PNS (L)</th>
                        <th>PEGAWAI NEGERI SIPIL/PNS (P)</th>
                        <th>TENTARA NASIONAL INDONESIA (L)</th>
                        <th>TENTARA NASIONAL INDONESIA (P)</th>
                        <th>KEPOLISIAN RI/POLRI (L)</th>
                        <th>KEPOLISIAN RI/POLRI (P)</th>
                        <th>PERDAGANGAN (L)</th>
                        <th>PERDAGANGAN (P)</th>
                        <th>PETANI/PEKEBUN (L)</th>
                        <th>PETANI/PEKEBUN (P)</th>
                        <th>PETERNAK (L)</th>
                        <th>PETERNAK (P)</th>
                        <th>NELAYAN/PERIKANAN (L)</th>
                        <th>NELAYAN/PERIKANAN (P)</th>
                        <th>INDUSTRI (L)</th>
                        <th>INDUSTRI (P)</th>
                        <th>KONSTRUKSI (L)</th>
                        <th>KONSTRUKSI (P)</th>
                        <th>TRANSPORTASI (L)</th>
                        <th>TRANSPORTASI (P)</th>
                        <th>KARYAWAN SWASTA (L)</th>
                        <th>KARYAWAN SWASTA (P)</th>
                        <th>KARYAWAN BUMN (L)</th>
                        <th>KARYAWAN BUMN (P)</th>
                        <th>KARYAWAN BUMD (L)</th>
                        <th>KARYAWAN BUMD (P)</th>
                        <th>KARYAWAN HONORER (L)</th>
                        <th>KARYAWAN HONORER (P)</th>
                        <th>BURUH HARIAN LEPAS (L)</th>
                        <th>BURUH HARIAN LEPAS (P)</th>
                        <th>BURUH TANI/PERKEBUNAN (L)</th>
                        <th>BURUH TANI/PERKEBUNAN (P)</th>
                        <th>BURUH NELAYAN/PERIKANAN (L)</th>
                        <th>BURUH NELAYAN/PERIKANAN (P)</th>
                        <th>BURUH PETERNAKAN (L)</th>
                        <th>BURUH PETERNAKAN (P)</th>
                        <th>PEMBANTU RUMAH TANGGA (L)</th>
                        <th>PEMBANTU RUMAH TANGGA (P)</th>
                        <th>TUKANG CUKUR (L)</th>
                        <th>TUKANG CUKUR (P)</th>
                        <th>TUKANG LISTRIK (L)</th>
                        <th>TUKANG LISTRIK (P)</th>
                        <th>TUKANG BATU (L)</th>
                        <th>TUKANG BATU (P)</th>
                        <th>TUKANG KAYU (L)</th>
                        <th>TUKANG KAYU (P)</th>
                        <th>TUKANG SOL SEPATU (L)</th>
                        <th>TUKANG SOL SEPATU (P)</th>
                        <th>TUKANG LAS/PANDAI BESI (L)</th>
                        <th>TUKANG LAS/PANDAI BESI (P)</th>
                        <th>TUKANG JAHIT (L)</th>
                        <th>TUKANG JAHIT (P)</th>
                        <th>TUKANG GIGI (L)</th>
                        <th>TUKANG GIGI (P)</th>
                        <th>PENATA RIAS (L)</th>
                        <th>PENATA RIAS (P)</th>
                        <th>PENATA BUSANA (L)</th>
                        <th>PENATA BUSANA (P)</th>
                        <th>PENATA RAMBUT (L)</th>
                        <th>PENATA RAMBUT (P)</th>
                        <th>MEKANIK (L)</th>
                        <th>MEKANIK (P)</th>
                        <th>SENIMAN (L)</th>
                        <th>SENIMAN (P)</th>
                        <th>TABIB (L)</th>
                        <th>TABIB (P)</th>
                        <th>PARAJI (L)</th>
                        <th>PARAJI (P)</th>
                        <th>PERANCANG BUSANA (L)</th>
                        <th>PERANCANG BUSANA (P)</th>
                        <th>PENTERJEMAH (L)</th>
                        <th>PENTERJEMAH (P)</th>
                        <th>IMAM MASJID (L)</th>
                        <th>IMAM MASJID (P)</th>
                        <th>PENDETA (L)</th>
                        <th>PENDETA (P)</th>
                        <th>PASTOR (L)</th>
                        <th>PASTOR (P)</th>
                        <th>WARTAWAN (L)</th>
                        <th>WARTAWAN (P)</th>
                        <th>USTADZ/MUBALIGH (L)</th>
                        <th>USTADZ/MUBALIGH (P)</th>
                        <th>JURU MASAK (L)</th>
                        <th>JURU MASAK (P)</th>
                        <th>PROMOTOR ACARA (L)</th>
                        <th>PROMOTOR ACARA (P)</th>
                        <th>ANGGOTA DPR RI (L)</th>
                        <th>ANGGOTA DPR RI (P)</th>
                        <th>ANGGOTA DPD RI (L)</th>
                        <th>ANGGOTA DPD RI (P)</th>
                        <th>ANGGOTA BPK (L)</th>
                        <th>ANGGOTA BPK (P)</th>
                        <th>PRESIDEN (L)</th>
                        <th>PRESIDEN (P)</th>
                        <th>WAKIL PRESIDEN (L)</th>
                        <th>WAKIL PRESIDEN (P)</th>
                        <th>ANGGOTA MAHKAMAH KONSTITUSI (L)</th>
                        <th>ANGGOTA MAHKAMAH KONSTITUSI (P)</th>
                        <th>ANGGOTA KABINET KEMENTERIAN (L)</th>
                        <th>ANGGOTA KABINET KEMENTERIAN (P)</th>
                        <th>DUTA BESAR (L)</th>
                        <th>DUTA BESAR (P)</th>
                        <th>GUBERNUR (L)</th>
                        <th>WAKIL GUBERNUR (P)</th>
                        <th>WAKIL GUBERNUR (L)</th>
                        <th>GUBERNUR (P)</th>
                        <th>BUPATI (L)</th>
                        <th>BUPATI (P)</th>
                        <th>WAKIL BUPATI (L)</th>
                        <th>WAKIL BUPATI (P)</th>
                        <th>WALIKOTA (L)</th>
                        <th>WALIKOTA (P)</th>
                        <th>WAKIL WALIKOTA (L)</th>
                        <th>WAKIL WALIKOTA (P)</th>
                        <th>ANGGOTA DPRD PROP (L)</th>
                        <th>ANGGOTA DPRD PROP (P)</th>
                        <th>ANGGOTA DPRD KAB/KOTA (L)</th>
                        <th>ANGGOTA DPRD KAB/KOTA (P)</th>
                        <th>DOSEN (L)</th>
                        <th>DOSEN (P)</th>
                        <th>GURU (L)</th>
                        <th>GURU (P)</th>
                        <th>PILOT (L)</th>
                        <th>PILOT (P)</th>
                        <th>PENGACARA (L)</th>
                        <th>PENGACARA (P)</th>
                        <th>NOTARIS (L)</th>
                        <th>NOTARIS (P)</th>
                        <th>ARSITEK (L)</th>
                        <th>ARSITEK (P)</th>
                        <th>AKUNTAN (L)</th>
                        <th>AKUNTAN (P)</th>
                        <th>KONSULTAN (L)</th>
                        <th>KONSULTAN (P)</th>
                        <th>DOKTER (L)</th>
                        <th>DOKTER (P)</th>
                        <th>BIDAN (L)</th>
                        <th>BIDAN (P)</th>
                        <th>PERAWAT (L)</th>
                        <th>PERAWAT (P)</th>
                        <th>APOTEKER (L)</th>
                        <th>APOTEKER (P)</th>
                        <th>PSIKIATER/PSIKOLOG (L)</th>
                        <th>PSIKIATER/PSIKOLOG (P)</th>
                        <th>PENYIAR TELEVISI (L)</th>
                        <th>PENYIAR TELEVISI (P)</th>
                        <th>PENYIAR RADIO (L)</th>
                        <th>PENYIAR RADIO (P)</th>
                        <th>PELAUT (L)</th>
                        <th>PELAUT (P)</th>
                        <th>PENELITI (L)</th>
                        <th>PENELITI (P)</th>
                        <th>SOPIR (L)</th>
                        <th>SOPIR (P)</th>
                        <th>PIALANG (L)</th>
                        <th>PIALANG (P)</th>
                        <th>PARANORMAL (L)</th>
                        <th>PARANORMAL (P)</th>
                        <th>PEDAGANG (L)</th>
                        <th>PEDAGANG (P)</th>
                        <th>PERANGKAT pekerjaan (L)</th>
                        <th>PERANGKAT pekerjaan (P)</th>
                        <th>KEPALA pekerjaan (L)</th>
                        <th>KEPALA pekerjaan (P)</th>
                        <th>BIARAWAN/BIARAWATI (L)</th>
                        <th>BIARAWAN/BIARAWATI (P)</th>
                        <th>WIRASWASTA (L)</th>
                        <th>WIRASWASTA (P)</th>
                        <th>ANGGOTA LEMBAGA TINGGI LAINNYA (L)</th>
                        <th>ANGGOTA LEMBAGA TINGGI LAINNYA (P)</th>
                        <th>ARTIS (P)</th>
                        <th>ATLIT (L)</th>
                        <th>ATLIT (P)</th>
                        <th>CHEF (L)</th>
                        <th>CHEF (P)</th>
                        <th>MANAJER (L)</th>
                        <th>MANAJER (P)</th>
                        <th>TENAGA TATA USAHA (L)</th>
                        <th>TENAGA TATA USAHA (P)</th>
                        <th>OPERATOR (L)</th>
                        <th>OPERATOR (P)</th>
                        <th>PEKERJA PENGOLAHAN KERAJINAN (L)</th>
                        <th>PEKERJA PENGOLAHAN KERAJINAN (P)</th>
                        <th>TEKNISI (L)</th>
                        <th>TEKNISI (P)</th>
                        <th>ASISTEN AHLI (L)</th>
                        <th>ASISTEN AHLI (P)</th>
                        <th>PEKERJAAN LAINNYA (L)</th>
                        <th>PEKERJAAN LAINNYA (P)</th>
                        <th>PEKERJAAN LAINNYA (L)</th>
                        <th>PEKERJAAN LAINNYA (P)</th>
                        <th width="280px"> Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($pekerjaan as $pekerjaan)
                    <tr>
                        <td>{{ $pekerjaan->id }}</td>
                        <td>{{ $pekerjaan->kode }}</td>
                        <td>{{ $pekerjaan->wilayah }}</td>
                        <td>{{ $pekerjaan->belum_tidak_bekerja_l }}</td>
                        <td>{{ $pekerjaan->belum_tidak_bekerja_p }}</td>
                        <td>{{ $pekerjaan->mengurus_rumah_tangga_l }}</td>
                        <td>{{ $pekerjaan->mengurus_rumah_tangga_p }}</td>
                        <td>{{ $pekerjaan->pelajar_mahasiswa_l }}</td>
                        <td>{{ $pekerjaan->pelajar_mahasiswa_p }}</td>
                        <td>{{ $pekerjaan->pensiunan_l }}</td>
                        <td>{{ $pekerjaan->pensiunan_p }}</td>
                        <td>{{ $pekerjaan->pegawai_negeri_sipil_pns_l }}</td>
                        <td>{{ $pekerjaan->pegawai_negeri_sipil_pns_p }}</td>
                        <td>{{ $pekerjaan->tentara_nasional_indonesia_l }}</td>
                        <td>{{ $pekerjaan->tentara_nasional_indonesia_p }}</td>
                        <td>{{ $pekerjaan->kepolisian_ri_polri_l }}</td>
                        <td>{{ $pekerjaan->kepolisian_ri_polri_p }}</td>
                        <td>{{ $pekerjaan->perdagangan_l }}</td>
                        <td>{{ $pekerjaan->perdagangan_p }}</td>
                        <td>{{ $pekerjaan->petani_pekebun_l }}</td>
                        <td>{{ $pekerjaan->petani_pekebun_p }}</td>
                        <td>{{ $pekerjaan->peternak_l }}</td>
                        <td>{{ $pekerjaan->peternak_p }}</td>
                        <td>{{ $pekerjaan->nelayan_perikanan_l }}</td>
                        <td>{{ $pekerjaan->nelayan_perikanan_p }}</td>
                        <td>{{ $pekerjaan->industri_l }}</td>
                        <td>{{ $pekerjaan->industri_p }}</td>
                        <td>{{ $pekerjaan->konstruksi_l }}</td>
                        <td>{{ $pekerjaan->konstruksi_p }}</td>
                        <td>{{ $pekerjaan->transportasi_l }}</td>
                        <td>{{ $pekerjaan->transportasi_p }}</td>
                        <td>{{ $pekerjaan->karyawan_swasta_l }}</td>
                        <td>{{ $pekerjaan->karyawan_swasta_p }}</td>
                        <td>{{ $pekerjaan->karyawan_bumn_l }}</td>
                        <td>{{ $pekerjaan->karyawan_bumn_p }}</td>
                        <td>{{ $pekerjaan->karyawan_bumd_l }}</td>
                        <td>{{ $pekerjaan->karyawan_bumd_p }}</td>
                        <td>{{ $pekerjaan->karyawan_honorer_l }}</td>
                        <td>{{ $pekerjaan->karyawan_honorer_p }}</td>
                        <td>{{ $pekerjaan->buruh_harian_lepas_l }}</td>
                        <td>{{ $pekerjaan->buruh_harian_lepas_p }}</td>
                        <td>{{ $pekerjaan->buruh_tani_perkebunan_l }}</td>
                        <td>{{ $pekerjaan->buruh_tani_perkebunan_p }}</td>
                        <td>{{ $pekerjaan->buruh_nelayan_perikanan_l }}</td>
                        <td>{{ $pekerjaan->buruh_nelayan_perikanan_p }}</td>
                        <td>{{ $pekerjaan->buruh_peternakan_l }}</td>
                        <td>{{ $pekerjaan->buruh_peternakan_p }}</td>
                        <td>{{ $pekerjaan->pembantu_rumah_tangga_l }}</td>
                        <td>{{ $pekerjaan->pembantu_rumah_tangga_p }}</td>
                        <td>{{ $pekerjaan->tukang_cukur_l }}</td>
                        <td>{{ $pekerjaan->tukang_cukur_p }}</td>
                        <td>{{ $pekerjaan->tukang_listrik_l }}</td>
                        <td>{{ $pekerjaan->tukang_listrik_p }}</td>
                        <td>{{ $pekerjaan->tukang_batu_l }}</td>
                        <td>{{ $pekerjaan->tukang_batu_p }}</td>
                        <td>{{ $pekerjaan->tukang_kayu_l }}</td>
                        <td>{{ $pekerjaan->tukang_kayu_p }}</td>
                        <td>{{ $pekerjaan->tukang_sol_sepatu_l }}</td>
                        <td>{{ $pekerjaan->tukang_sol_sepatu_p }}</td>
                        <td>{{ $pekerjaan->tukang_las_pandai_besi_l }}</td>
                        <td>{{ $pekerjaan->tukang_las_pandai_besi_p }}</td>
                        <td>{{ $pekerjaan->tukang_jahit_l }}</td>
                        <td>{{ $pekerjaan->tukang_jahit_p }}</td>
                        <td>{{ $pekerjaan->tukang_gigi_l }}</td>
                        <td>{{ $pekerjaan->tukang_gigi_p }}</td>
                        <td>{{ $pekerjaan->penata_rias_l }}</td>
                        <td>{{ $pekerjaan->penata_rias_p }}</td>
                        <td>{{ $pekerjaan->penata_busana_l }}</td>
                        <td>{{ $pekerjaan->penata_busana_p }}</td>
                        <td>{{ $pekerjaan->penata_rambut_l }}</td>
                        <td>{{ $pekerjaan->penata_rambut_p }}</td>
                        <td>{{ $pekerjaan->mekanik_l }}</td>
                        <td>{{ $pekerjaan->mekanik_p }}</td>
                        <td>{{ $pekerjaan->seniman_l }}</td>
                        <td>{{ $pekerjaan->seniman_p }}</td>
                        <td>{{ $pekerjaan->tabib_l }}</td>
                        <td>{{ $pekerjaan->tabib_p }}</td>
                        <td>{{ $pekerjaan->paraji_l }}</td>
                        <td>{{ $pekerjaan->paraji_p }}</td>
                        <td>{{ $pekerjaan->perancang_busana_l }}</td>
                        <td>{{ $pekerjaan->perancang_busana_p }}</td>
                        <td>{{ $pekerjaan->penterjemah_l }}</td>
                        <td>{{ $pekerjaan->penterjemah_p }}</td>
                        <td>{{ $pekerjaan->imam_masjid_l }}</td>
                        <td>{{ $pekerjaan->imam_masjid_p }}</td>
                        <td>{{ $pekerjaan->pendeta_l }}</td>
                        <td>{{ $pekerjaan->pendeta_p }}</td>
                        <td>{{ $pekerjaan->pastor_l }}</td>
                        <td>{{ $pekerjaan->pastor_p }}</td>
                        <td>{{ $pekerjaan->wartawan_l }}</td>
                        <td>{{ $pekerjaan->wartawan_p }}</td>
                        <td>{{ $pekerjaan->ustadz_mubaligh_l }}</td>
                        <td>{{ $pekerjaan->ustadz_mubaligh_p }}</td>
                        <td>{{ $pekerjaan->juru_masak_l }}</td>
                        <td>{{ $pekerjaan->juru_masak_p }}</td>
                        <td>{{ $pekerjaan->promotor_acara_l }}</td>
                        <td>{{ $pekerjaan->promotor_acara_p }}</td>
                        <td>{{ $pekerjaan->anggota_dpr_ri_l }}</td>
                        <td>{{ $pekerjaan->anggota_dpr_ri_p }}</td>
                        <td>{{ $pekerjaan->anggota_dpd_ri_l }}</td>
                        <td>{{ $pekerjaan->anggota_dpd_ri_p }}</td>
                        <td>{{ $pekerjaan->anggota_bpk_l }}</td>
                        <td>{{ $pekerjaan->anggota_bpk_p }}</td>
                        <td>{{ $pekerjaan->presiden_l }}</td>
                        <td>{{ $pekerjaan->presiden_p }}</td>
                        <td>{{ $pekerjaan->wakil_presiden_l }}</td>
                        <td>{{ $pekerjaan->wakil_presiden_p }}</td>
                        <td>{{ $pekerjaan->anggota_mahkamah_konstitusi_l }}</td>
                        <td>{{ $pekerjaan->anggota_mahkamah_konstitusi_p }}</td>
                        <td>{{ $pekerjaan->anggota_kabinet_kemetrian_l }}</td>
                        <td>{{ $pekerjaan->anggota_kabinet_kemetrian_p }}</td>
                        <td>{{ $pekerjaan->duta_besar_l }}</td>
                        <td>{{ $pekerjaan->duta_besar_p }}</td>
                        <td>{{ $pekerjaan->gubernur_l }}</td>
                        <td>{{ $pekerjaan->gubernur_p }}</td>
                        <td>{{ $pekerjaan->wakil_gubernur_l }}</td>
                        <td>{{ $pekerjaan->wakil_gubernur_p }}</td>
                        <td>{{ $pekerjaan->bupati_l }}</td>
                        <td>{{ $pekerjaan->bupati_p }}</td>
                        <td>{{ $pekerjaan->wakil_bupati_l }}</td>
                        <td>{{ $pekerjaan->wakil_bupati_p }}</td>
                        <td>{{ $pekerjaan->walikota_l }}</td>
                        <td>{{ $pekerjaan->walikota_p }}</td>
                        <td>{{ $pekerjaan->wakil_walikota_l }}</td>
                        <td>{{ $pekerjaan->wakil_walikota_p }}</td>
                        <td>{{ $pekerjaan->anggota_dprd_prop_l }}</td>
                        <td>{{ $pekerjaan->anggota_dprd_prop_p }}</td>
                        <td>{{ $pekerjaan->anggota_dprd_kab_kota_l }}</td>
                        <td>{{ $pekerjaan->anggota_dprd_kab_kota_p }}</td>
                        <td>{{ $pekerjaan->dosen_l }}</td>
                        <td>{{ $pekerjaan->dosen_p }}</td>
                        <td>{{ $pekerjaan->guru_l }}</td>
                        <td>{{ $pekerjaan->guru_p }}</td>
                        <td>{{ $pekerjaan->pilot_l }}</td>
                        <td>{{ $pekerjaan->pilot_p }}</td>
                        <td>{{ $pekerjaan->pengacara_l }}</td>
                        <td>{{ $pekerjaan->pengacara_p }}</td>
                        <td>{{ $pekerjaan->notaris_l }}</td>
                        <td>{{ $pekerjaan->notaris_p }}</td>
                        <td>{{ $pekerjaan->arsitek_l }}</td>
                        <td>{{ $pekerjaan->arsitek_p }}</td>
                        <td>{{ $pekerjaan->akuntan_l }}</td>
                        <td>{{ $pekerjaan->akuntan_p }}</td>
                        <td>{{ $pekerjaan->konsultan_l }}</td>
                        <td>{{ $pekerjaan->konsultan_p }}</td>
                        <td>{{ $pekerjaan->dokter_l }}</td>
                        <td>{{ $pekerjaan->dokter_p }}</td>
                        <td>{{ $pekerjaan->bidan_l }}</td>
                        <td>{{ $pekerjaan->bidan_p }}</td>
                        <td>{{ $pekerjaan->perawat_l }}</td>
                        <td>{{ $pekerjaan->perawat_p }}</td>
                        <td>{{ $pekerjaan->apotek_l }}</td>
                        <td>{{ $pekerjaan->apotek_p }}</td>
                        <td>{{ $pekerjaan->psikiater_psikolog_l }}</td>
                        <td>{{ $pekerjaan->psikiater_psikolog_p }}</td>
                        <td>{{ $pekerjaan->penyiar_televisi_l }}</td>
                        <td>{{ $pekerjaan->penyiar_televisi_p }}</td>
                        <td>{{ $pekerjaan->penyiar_radio_l }}</td>
                        <td>{{ $pekerjaan->penyiar_radio_p }}</td>
                        <td>{{ $pekerjaan->pelaut_l }}</td>
                        <td>{{ $pekerjaan->pelaut_p }}</td>
                        <td>{{ $pekerjaan->peneliti_l }}</td>
                        <td>{{ $pekerjaan->peneliti_p }}</td>
                        <td>{{ $pekerjaan->sopir_l }}</td>
                        <td>{{ $pekerjaan->sopir_p }}</td>
                        <td>{{ $pekerjaan->pialang_l }}</td>
                        <td>{{ $pekerjaan->pialang_p }}</td>
                        <td>{{ $pekerjaan->paranormal_l }}</td>
                        <td>{{ $pekerjaan->paranormal_p }}</td>
                        <td>{{ $pekerjaan->pedagang_l }}</td>
                        <td>{{ $pekerjaan->pedagang_p }}</td>
                        <td>{{ $pekerjaan->perangkat_pekerjaan_l }}</td>
                        <td>{{ $pekerjaan->perangkat_pekerjaan_p }}</td>
                        <td>{{ $pekerjaan->kepala_pekerjaan_l }}</td>
                        <td>{{ $pekerjaan->kepala_pekerjaan_p }}</td>
                        <td>{{ $pekerjaan->biarawan_biarawati_l }}</td>
                        <td>{{ $pekerjaan->biarawan_biarawati_p }}</td>
                        <td>{{ $pekerjaan->wiraswasta_l }}</td>
                        <td>{{ $pekerjaan->wiraswasta_p }}</td>
                        <td>{{ $pekerjaan->anggota_lemb_tinggi_lainnya_l }}</td>
                        <td>{{ $pekerjaan->anggota_lemb_tinggi_lainnya_p }}</td>
                        <td>{{ $pekerjaan->artis_l }}</td>
                        <td>{{ $pekerjaan->artis_p }}</td>
                        <td>{{ $pekerjaan->atlit_l }}</td>
                        <td>{{ $pekerjaan->atlit_p }}</td>
                        <td>{{ $pekerjaan->cheff_l }}</td>
                        <td>{{ $pekerjaan->cheff_p }}</td>
                        <td>{{ $pekerjaan->manajer_l }}</td>
                        <td>{{ $pekerjaan->manajer_p }}</td>
                        <td>{{ $pekerjaan->tenaga_tata_usaha_l }}</td>
                        <td>{{ $pekerjaan->tenaga_tata_usaha_p }}</td>
                        <td>{{ $pekerjaan->operator_l }}</td>
                        <td>{{ $pekerjaan->operator_p }}</td>
                        <td>{{ $pekerjaan->pekerja_pengolahan_kerajinan_l }}</td>
                        <td>{{ $pekerjaan->pekerja_pengolahan_kerajinan_p }}</td>
                        <td>{{ $pekerjaan->teknisi_l }}</td>
                        <td>{{ $pekerjaan->teknisi_p }}</td>
                        <td>{{ $pekerjaan->asisten_ahli_l }}</td>
                        <td>{{ $pekerjaan->asisten_ahli_p }}</td>
                        <td>{{ $pekerjaan->pekerjaan_lainnya_l }}</td>
                        <td>{{ $pekerjaan->pekerjaan_lainnya_p }}</td>
                        <td>
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
            <div class="btn-group" style="margin-top:10px; float:right">
                @php
                    for($i=1;$i<=$totalpages;$i++){
                        echo("<a href='/pekerjaan?page=$i' class='btn btn-sm btn-outline-primary'>$i</a>");
                    }   
                @endphp
            </div>
        </div>
    </div>
</div>
@endsection