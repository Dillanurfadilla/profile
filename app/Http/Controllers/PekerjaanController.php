<?php


namespace App\Http\Controllers;

use App\Models\PekerjaanModel;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\PekerjaanImport;
use Session;



class PekerjaanController extends Controller
{

    public function index(Request $request) : view
    {
        $page = $request->input('page', 1);
        $perPage = 45;
        $data['pekerjaan'] = PekerjaanModel::orderBy('id','asc')->paginate(45); 
        $total = PekerjaanModel::count();
        $totalPages = ceil($total / $perPage); 
        $data['totalpages']=$totalPages;
        return view('pekerjaan.index', $data);
    }

    public function create() : view
    {
        return view('pekerjaan.create');
    }
     
    
    public function store(Request $request) : RedirectResponse
    {
        $validatedData = $request->validate([
          'kode' => 'required',
          'wilayah' => 'required',
          'belum_tidak_bekerja_l' => 'required',
          'belum_tidak_bekerja_p' => 'required',
          'mengurus_rumah_tangga_l' => 'required',
          'mengurus_rumah_tangga_p' => 'required',
          'pelajar_mahasiswa_l' => 'required',
          'pelajar_mahasiswa_p' => 'required',
          'pensiunan_l' => 'required',
          'pensiunan_p' => 'required',
          'pegawai_negeri_sipil_pns_l' => 'required',
          'pegawai_negeri_sipil_pns_p' => 'required',
          'tentara_nasional_indonesia_l' => 'required',
          'tentara_nasional_indonesia_p' => 'required',
          'kepolisian_ri_polri_l' => 'required',
          'kepolisian_ri_polri_p' => 'required',
          'perdagangan_l' => 'required',
          'perdagangan_p' => 'required',
          'petani_pekebun_l' => 'required',
          'petani_pekebun_p' => 'required',
          'peternak_l' => 'required',
          'peternak_p' => 'required',
          'nelayan_perikanan_l' => 'required',
          'nelayan_perikanan_p' => 'required',
          'industri_l' => 'required',
          'industri_p' => 'required',
          'konstruksi_l' => 'required',
          'konstruksi_p' => 'required',
          'transportasi_l' => 'required',
          'transportasi_p' => 'required',
          'karyawan_swasta_l' => 'required',
          'karyawan_swasta_p' => 'required',
          'karyawan_bumn_l' => 'required',
          'karyawan_bumn_p' => 'required',
          'karyawan_bumd_l' => 'required',
          'karyawan_bumd_p' => 'required',
          'karyawan_honorer_l' => 'required',
          'karyawan_honorer_p' => 'required',
          'buruh_harian_lepas_l' => 'required',
          'buruh_harian_lepas_p' => 'required',
          'buruh_tani_perkebunan_l' => 'required',
          'buruh_tani_perkebunan_p' => 'required',
          'buruh_nelayan_perikanan_l' => 'required',
          'buruh_nelayan_perikanan_p' => 'required',
          'buruh_peternakan_l' => 'required',
          'buruh_peternakan_p' => 'required',
          'pembantu_rumah_tangga_l' => 'required',
          'pembantu_rumah_tangga_p' => 'required',
          'tukang_cukur_l' => 'required',
          'tukang_cukur_p' => 'required',
          'tukang_listrik_l' => 'required',
          'tukang_listrik_p' => 'required',
          'tukang_batu_l' => 'required',
          'tukang_batu_p' => 'required',
          'tukang_kayu_l' => 'required',
          'tukang_kayu_p' => 'required',
          'tukang_sol_sepatu_l' => 'required',
          'tukang_sol_sepatu_p' => 'required',
          'tukang_las_pandai_besi_l' => 'required',
          'tukang_las_pandai_besi_p' => 'required',
          'tukang_jahit_l' => 'required',
          'tukang_jahit_p' => 'required',
          'tukang_gigi_l' => 'required',
          'tukang_gigi_p' => 'required',
          'penata_rias_l' => 'required',
          'penata_rias_p' => 'required',
          'penata_busana_l' => 'required',
          'penata_busana_p' => 'required',
          'penata_rambut_l' => 'required',
          'penata_rambut_p' => 'required',
          'mekanik_l' => 'required',
          'mekanik_p' => 'required',
          'seniman_l' => 'required',
          'seniman_p' => 'required',
          'tabib_l' => 'required',
          'tabib_p' => 'required',
          'paraji_l' => 'required',
          'paraji_p' => 'required',
          'perancang_busana_l' => 'required',
          'perancang_busana_p' => 'required',
          'penterjemah_l' => 'required',
          'penterjemah_p' => 'required',
          'imam_masjid_l' => 'required',
          'imam_masjid_p' => 'required',
          'pendeta_l' => 'required',
          'pendeta_p' => 'required',
          'pastor_l' => 'required',
          'pastor_p' => 'required',
          'wartawan_l' => 'required',
          'wartawan_p' => 'required',
          'ustadz_mubaligh_l' => 'required',
          'ustadz_mubaligh_p' => 'required',
          'juru_masak_l' => 'required',
          'juru_masak_p' => 'required',
          'promotor_acara_l' => 'required',
          'promotor_acara_p' => 'required',
          'anggota_dpr_ri_l' => 'required',
          'anggota_dpr_ri_p' => 'required',
          'anggota_dpd_ri_l' => 'required',
          'anggota_dpd_ri_p' => 'required',
          'anggota_bpk_l' => 'required',
          'anggota_bpk_p' => 'required',
          'presiden_l' => 'required',
          'presiden_p' => 'required',
          'wakil_presiden_l' => 'required',
          'wakil_presiden_p' => 'required',
          'anggota_mahkamah_konstitusi_l' => 'required',
          'anggota_mahkamah_konstitusi_p' => 'required',
          'anggota_kabinet_kemetrian_l' => 'required',
          'anggota_kabinet_kemetrian_p' => 'required',
          'duta_besar_l' => 'required',
          'duta_besar_p' => 'required',
          'gubernur_l' => 'required',
          'gubernur_p' => 'required',
          'wakil_gubernur_l' => 'required',
          'wakil_gubernur_p' => 'required',
          'bupati_l' => 'required',
          'bupati_p' => 'required',
          'wakil_bupati_l' => 'required',
          'wakil_bupati_p' => 'required',
          'walikota_l' => 'required',
          'walikota_p' => 'required',
          'wakil_walikota_l' => 'required',
          'wakil_walikota_p' => 'required',
          'anggota_dprd_prop_l' => 'required',
          'anggota_dprd_prop_p' => 'required',
          'anggota_dprd_kab_kota_l' => 'required',
          'anggota_dprd_kab_kota_p' => 'required',
          'dosen_l' => 'required',
          'dosen_p' => 'required',
          'guru_l' => 'required',
          'guru_p' => 'required',
          'pilot_l' => 'required',
          'pilot_p' => 'required',
          'pengacara_l' => 'required',
          'pengacara_p' => 'required',
          'notaris_l' => 'required',
          'notaris_p' => 'required',
          'arsitek_l' => 'required',
          'arsitek_p' => 'required',
          'akuntan_l' => 'required',
          'akuntan_p' => 'required',
          'konsultan_l' => 'required',
          'konsultan_p' => 'required',
          'dokter_l' => 'required',
          'dokter_p' => 'required',
          'bidan_l' => 'required',
          'bidan_p' => 'required',
          'perawat_l' => 'required',
          'perawat_p' => 'required',
          'apotek_l' => 'required',
          'apotek_p' => 'required',
          'psikiater_psikolog_l' => 'required',
          'psikiater_psikolog_p' => 'required',
          'penyiar_televisi_l' => 'required',
          'penyiar_televisi_p' => 'required',
          'penyiar_radio_l' => 'required',
          'penyiar_radio_p' => 'required',
          'pelaut_l' => 'required',
          'pelaut_p' => 'required',
          'peneliti_l' => 'required',
          'peneliti_p' => 'required',
          'sopir_l' => 'required',
          'sopir_p' => 'required',
          'pialang_l' => 'required',
          'pialang_p' => 'required',
          'paranormal_l' => 'required',
          'paranormal_p' => 'required',
          'pedagang_l' => 'required',
          'pedagang_p' => 'required',
          'perangkat_desa_l' => 'required',
          'perangkat_desa_p' => 'required',
          'kepala_desa_l' => 'required',
          'kepala_desa_p' => 'required',
          'biarawan_biarawati_l' => 'required',
          'biarawan_biarawati_p' => 'required',
          'wiraswasta_l' => 'required',
          'wiraswasta_p' => 'required',
          'anggota_lemb_tinggi_lainnya_l' => 'required',
          'anggota_lemb_tinggi_lainnya_p' => 'required',
          'artis_l' => 'required',
          'artis_p' => 'required',
          'atlit_l' => 'required',
          'atlit_p' => 'required',
          'cheff_l' => 'required',
          'cheff_p' => 'required',
          'manajer_l' => 'required',
          'manajer_p' => 'required',
          'tenaga_tata_usaha_l' => 'required',
          'tenaga_tata_usaha_p' => 'required',
          'operator_l' => 'required',
          'operator_p' => 'required',
          'pekerja_pengolahan_kerajinan_l' => 'required',
          'pekerja_pengolahan_kerajinan_p' => 'required',
          'teknisi_l' => 'required',
          'teknisi_p' => 'required',
          'asisten_ahli_l' => 'required',
          'asisten_ahli_p' => 'required',
          'pekerjaan_lainnya_l' => 'required',
          'pekerjaan_lainnya_p' => 'required',

        ]);


        $pekerjaan = new PekerjaanModel; 
        $pekerjaan->kode = $request->kode;
        $pekerjaan->wilayah = $request->wilayah;
        $pekerjaan->belum_tidak_bekerja_l = $request->belum_tidak_bekerja_l;
        $pekerjaan->belum_tidak_bekerja_p = $request->belum_tidak_bekerja_p;
        $pekerjaan->mengurus_rumah_tangga_l = $request->mengurus_rumah_tangga_l;
        $pekerjaan->mengurus_rumah_tangga_p = $request->mengurus_rumah_tangga_p;
        $pekerjaan->pelajar_mahasiswa_l = $request->pelajar_mahasiswa_l;
        $pekerjaan->pelajar_mahasiswa_p = $request->pelajar_mahasiswa_p;
        $pekerjaan->pensiunan_l = $request->pensiunan_l;
        $pekerjaan->pensiunan_p = $request->pensiunan_p;
        $pekerjaan->pegawai_negeri_sipil_pns_l = $request->pegawai_negeri_sipil_pns_l;
        $pekerjaan->pegawai_negeri_sipil_pns_p = $request->pegawai_negeri_sipil_pns_p;
        $pekerjaan->tentara_nasional_indonesia_l = $request->tentara_nasional_indonesia_l;
        $pekerjaan->tentara_nasional_indonesia_p = $request->tentara_nasional_indonesia_p;
        $pekerjaan->kepolisian_ri_polri_l = $request->kepolisian_ri_polri_l;
        $pekerjaan->kepolisian_ri_polri_p = $request->kepolisian_ri_polri_p;
        $pekerjaan->perdagangan_l = $request->perdagangan_l;
        $pekerjaan->perdagangan_p = $request->perdagangan_p;
        $pekerjaan->petani_pekebun_l = $request->petani_pekebun_l;
        $pekerjaan->petani_pekebun_p = $request->petani_pekebun_p;
        $pekerjaan->peternak_l = $request->peternak_l;
        $pekerjaan->peternak_p = $request->peternak_p;
        $pekerjaan->nelayan_perikanan_l = $request->nelayan_perikanan_l;
        $pekerjaan->nelayan_perikanan_p = $request->nelayan_perikanan_p;
        $pekerjaan->industri_l = $request->industri_l;
        $pekerjaan->industri_p = $request->industri_p;
        $pekerjaan->konstruksi_l = $request->konstruksi_l;
        $pekerjaan->konstruksi_p = $request->konstruksi_p;
        $pekerjaan->transportasi_l = $request->transportasi_l;
        $pekerjaan->transportasi_p = $request->transportasi_p;
        $pekerjaan->karyawan_swasta_l = $request->karyawan_swasta_l;
        $pekerjaan->karyawan_swasta_p = $request->karyawan_swasta_p;
        $pekerjaan->karyawan_bumn_l = $request->karyawan_bumn_l;
        $pekerjaan->karyawan_bumn_p = $request->karyawan_bumn_p;
        $pekerjaan->karyawan_bumd_l = $request->karyawan_bumd_l;
        $pekerjaan->karyawan_bumd_p = $request->karyawan_bumd_p;
        $pekerjaan->karyawan_honorer_l = $request->karyawan_honorer_l;
        $pekerjaan->karyawan_honorer_p = $request->karyawan_honorer_p;
        $pekerjaan->buruh_harian_lepas_l = $request->buruh_harian_lepas_l;
        $pekerjaan->buruh_harian_lepas_p = $request->buruh_harian_lepas_p;
        $pekerjaan->buruh_tani_perkebunan_l = $request->buruh_tani_perkebunan_l;
        $pekerjaan->buruh_tani_perkebunan_p = $request->buruh_tani_perkebunan_p;
        $pekerjaan->buruh_nelayan_perikanan_l = $request->buruh_nelayan_perikanan_l;
        $pekerjaan->buruh_nelayan_perikanan_p = $request->buruh_nelayan_perikanan_p;
        $pekerjaan->buruh_peternakan_l = $request->buruh_peternakan_l;
        $pekerjaan->buruh_peternakan_p = $request->buruh_peternakan_p;
        $pekerjaan->pembantu_rumah_tangga_l = $request->pembantu_rumah_tangga_l;
        $pekerjaan->pembantu_rumah_tangga_p = $request->pembantu_rumah_tangga_p;
        $pekerjaan->tukang_cukur_l = $request->tukang_cukur_l;
        $pekerjaan->tukang_cukur_p = $request->tukang_cukur_p;
        $pekerjaan->tukang_listrik_l = $request->tukang_listrik_l;
        $pekerjaan->tukang_listrik_p = $request->tukang_listrik_p;
        $pekerjaan->tukang_batu_l = $request->tukang_batu_l;
        $pekerjaan->tukang_batu_p = $request->tukang_batu_p;
        $pekerjaan->tukang_kayu_l = $request->tukang_kayu_l;
        $pekerjaan->tukang_kayu_p = $request->tukang_kayu_p;
        $pekerjaan->tukang_sol_sepatu_l = $request->tukang_sol_sepatu_l;
        $pekerjaan->tukang_sol_sepatu_p = $request->tukang_sol_sepatu_p;
        $pekerjaan->tukang_las_pandai_besi_l = $request->tukang_las_pandai_besi_l;
        $pekerjaan->tukang_las_pandai_besi_p = $request->tukang_las_pandai_besi_p;
        $pekerjaan->tukang_jahit_l = $request->tukang_jahit_l;
        $pekerjaan->tukang_jahit_p = $request->tukang_jahit_p;
        $pekerjaan->tukang_gigi_l = $request->tukang_gigi_l;
        $pekerjaan->tukang_gigi_p = $request->tukang_gigi_p;
        $pekerjaan->penata_rias_l = $request->penata_rias_l;
        $pekerjaan->penata_rias_p = $request->penata_rias_p;
        $pekerjaan->penata_busana_l = $request->penata_busana_l;
        $pekerjaan->penata_busana_p = $request->penata_busana_p;
        $pekerjaan->penata_rambut_l = $request->penata_rambut_l;
        $pekerjaan->penata_rambut_p = $request->penata_rambut_p;
        $pekerjaan->mekanik_l = $request->mekanik_l;
        $pekerjaan->mekanik_p = $request->mekanik_p;
        $pekerjaan->seniman_l = $request->seniman_l;
        $pekerjaan->seniman_p = $request->seniman_p;
        $pekerjaan->tabib_l = $request->tabib_l;
        $pekerjaan->tabib_p = $request->tabib_p;
        $pekerjaan->paraji_l = $request->paraji_l;
        $pekerjaan->paraji_p = $request->paraji_p;
        $pekerjaan->perancang_busana_l = $request->perancang_busana_l;
        $pekerjaan->perancang_busana_p = $request->perancang_busana_p;
        $pekerjaan->penterjemah_l = $request->penterjemah_l;
        $pekerjaan->penterjemah_p = $request->penterjemah_p;
        $pekerjaan->imam_masjid_l = $request->imam_masjid_l;
        $pekerjaan->imam_masjid_p = $request->imam_masjid_p;
        $pekerjaan->pendeta_l = $request->pendeta_l;
        $pekerjaan->pendeta_p = $request->pendeta_p;
        $pekerjaan->pastor_l = $request->pastor_l;
        $pekerjaan->pastor_p = $request->pastor_p;
        $pekerjaan->wartawan_l = $request->wartawan_l;
        $pekerjaan->wartawan_p = $request->wartawan_p;
        $pekerjaan->ustadz_mubaligh_l = $request->ustadz_mubaligh_l;
        $pekerjaan->ustadz_mubaligh_p = $request->ustadz_mubaligh_p;
        $pekerjaan->juru_masak_l = $request->juru_masak_l;
        $pekerjaan->juru_masak_p = $request->juru_masak_p;
        $pekerjaan->promotor_acara_l = $request->promotor_acara_l;
        $pekerjaan->promotor_acara_p = $request->promotor_acara_p;
        $pekerjaan->anggota_dpr_ri_l = $request->anggota_dpr_ri_l;
        $pekerjaan->anggota_dpr_ri_p = $request->anggota_dpr_ri_p;
        $pekerjaan->anggota_dpd_ri_l = $request->anggota_dpd_ri_l;
        $pekerjaan->anggota_dpd_ri_p = $request->anggota_dpd_ri_p;
        $pekerjaan->anggota_bpk_l = $request->anggota_bpk_l;
        $pekerjaan->anggota_bpk_p = $request->anggota_bpk_p;
        $pekerjaan->presiden_l = $request->presiden_l;
        $pekerjaan->presiden_p = $request->presiden_p;
        $pekerjaan->wakil_presiden_l = $request->wakil_presiden_l;
        $pekerjaan->wakil_presiden_p = $request->wakil_presiden_p;
        $pekerjaan->anggota_mahkamah_konstitusi_l = $request->anggota_mahkamah_konstitusi_l;
        $pekerjaan->anggota_mahkamah_konstitusi_p = $request->anggota_mahkamah_konstitusi_p;
        $pekerjaan->anggota_kabinet_kemetrian_l = $request->anggota_kabinet_kemetrian_l;
        $pekerjaan->anggota_kabinet_kemetrian_p = $request->anggota_kabinet_kemetrian_p;
        $pekerjaan->duta_besar_l = $request->duta_besar_l;
        $pekerjaan->duta_besar_p = $request->duta_besar_p;
        $pekerjaan->gubernur_l = $request->gubernur_l;
        $pekerjaan->gubernur_p = $request->gubernur_p;
        $pekerjaan->wakil_gubernur_l = $request->wakil_gubernur_l;
        $pekerjaan->wakil_gubernur_p = $request->wakil_gubernur_p;
        $pekerjaan->bupati_l = $request->bupati_l;
        $pekerjaan->bupati_p = $request->bupati_p;
        $pekerjaan->wakil_bupati_l = $request->wakil_bupati_l;
        $pekerjaan->wakil_bupati_p = $request->wakil_bupati_p;
        $pekerjaan->walikota_l = $request->walikota_l;
        $pekerjaan->walikota_p = $request->walikota_p;
        $pekerjaan->wakil_walikota_l = $request->wakil_walikota_l;
        $pekerjaan->wakil_walikota_p = $request->wakil_walikota_p;
        $pekerjaan->anggota_dprd_prop_l = $request->anggota_dprd_prop_l;
        $pekerjaan->anggota_dprd_prop_p = $request->anggota_dprd_prop_p;
        $pekerjaan->anggota_dprd_kab_kota_l = $request->anggota_dprd_kab_kota_l;
        $pekerjaan->anggota_dprd_kab_kota_p = $request->anggota_dprd_kab_kota_p;
        $pekerjaan->dosen_l = $request->dosen_l;
        $pekerjaan->dosen_p = $request->dosen_p;
        $pekerjaan->guru_l = $request->guru_l;
        $pekerjaan->guru_p = $request->guru_p;
        $pekerjaan->pilot_l = $request->pilot_l;
        $pekerjaan->pilot_p = $request->pilot_p;
        $pekerjaan->pengacara_l = $request->pengacara_l;
        $pekerjaan->pengacara_p = $request->pengacara_p;
        $pekerjaan->notaris_l = $request->notaris_l;
        $pekerjaan->notaris_p = $request->notaris_p;
        $pekerjaan->arsitek_l = $request->arsitek_l;
        $pekerjaan->arsitek_p = $request->arsitek_p;
        $pekerjaan->akuntan_l = $request->akuntan_l;
        $pekerjaan->akuntan_p = $request->akuntan_p;
        $pekerjaan->konsultan_l = $request->konsultan_l;
        $pekerjaan->konsultan_p = $request->konsultan_p;
        $pekerjaan->dokter_l = $request->dokter_l;
        $pekerjaan->dokter_p = $request->dokter_p;
        $pekerjaan->bidan_l = $request->bidan_l;
        $pekerjaan->bidan_p = $request->bidan_p;
        $pekerjaan->perawat_l = $request->perawat_l;
        $pekerjaan->perawat_p = $request->perawat_p;
        $pekerjaan->apotek_l = $request->apotek_l;
        $pekerjaan->apotek_p = $request->apotek_p;
        $pekerjaan->psikiater_psikolog_l = $request->psikiater_psikolog_l;
        $pekerjaan->psikiater_psikolog_p = $request->psikiater_psikolog_p;
        $pekerjaan->penyiar_televisi_l = $request->penyiar_televisi_l;
        $pekerjaan->penyiar_televisi_p = $request->penyiar_televisi_p;
        $pekerjaan->penyiar_radio_l = $request->penyiar_radio_l;
        $pekerjaan->penyiar_radio_p = $request->penyiar_radio_p;
        $pekerjaan->pelaut_l = $request->pelaut_l;
        $pekerjaan->pelaut_p = $request->pelaut_p;
        $pekerjaan->peneliti_l = $request->peneliti_l;
        $pekerjaan->peneliti_p = $request->peneliti_p;
        $pekerjaan->sopir_l = $request->sopir_l;
        $pekerjaan->sopir_p = $request->sopir_p;
        $pekerjaan->pialang_l = $request->pialang_l;
        $pekerjaan->pialang_p = $request->pialang_p;
        $pekerjaan->paranormal_l = $request->paranormal_l;
        $pekerjaan->paranormal_p = $request->paranormal_p;
        $pekerjaan->pedagang_l = $request->pedagang_l;
        $pekerjaan->pedagang_p = $request->pedagang_p;
        $pekerjaan->perangkat_desa_l = $request->perangkat_desa_l;
        $pekerjaan->perangkat_desa_p = $request->perangkat_desa_p;
        $pekerjaan->kepala_desa_l = $request->kepala_desa_l;
        $pekerjaan->kepala_desa_p = $request->kepala_desa_p;
        $pekerjaan->biarawan_biarawati_l = $request->biarawan_biarawati_l;
        $pekerjaan->biarawan_biarawati_p = $request->biarawan_biarawati_p;
        $pekerjaan->wiraswasta_l = $request->wiraswasta_l;
        $pekerjaan->wiraswasta_p = $request->wiraswasta_p;
        $pekerjaan->anggota_lemb_tinggi_lainnya_l = $request->anggota_lemb_tinggi_lainnya_l;
        $pekerjaan->anggota_lemb_tinggi_lainnya_p = $request->anggota_lemb_tinggi_lainnya_p;
        $pekerjaan->artis_l = $request->artis_l;
        $pekerjaan->artis_p = $request->artis_p;
        $pekerjaan->atlit_l = $request->atlit_l;
        $pekerjaan->atlit_p = $request->atlit_p;
        $pekerjaan->cheff_l = $request->cheff_l;
        $pekerjaan->cheff_p = $request->cheff_p;
        $pekerjaan->manajer_l = $request->manajer_l;
        $pekerjaan->manajer_p = $request->manajer_p;
        $pekerjaan->tenaga_tata_usaha_l = $request->tenaga_tata_usaha_l;
        $pekerjaan->tenaga_tata_usaha_p = $request->tenaga_tata_usaha_p;
        $pekerjaan->operator_l = $request->operator_l;
        $pekerjaan->operator_p = $request->operator_p;
        $pekerjaan->pekerja_pengolahan_kerajinan_l = $request->pekerja_pengolahan_kerajinan_l;
        $pekerjaan->pekerja_pengolahan_kerajinan_p = $request->pekerja_pengolahan_kerajinan_p;
        $pekerjaan->teknisi_l = $request->teknisi_l;
        $pekerjaan->teknisi_p = $request->teknisi_p;
        $pekerjaan->asisten_ahli_l = $request->asisten_ahli_l;
        $pekerjaan->asisten_ahli_p = $request->asisten_ahli_p;
        $pekerjaan->pekerjaan_lainnya_l = $request->pekerjaan_lainnya_l;
        $pekerjaan->pekerjaan_lainnya_p = $request->pekerjaan_lainnya_p;

        $pekerjaan->save();     
        return redirect()->route('pekerjaan.index')
                         ->with('success','pekerjaan has been created successfully.');
    }
       
    public function show(PekerjaanModel $pekerjaan) : view
    {
        return view('pekerjaan.show',compact('pekerjaan'));
    } 
      
    
    public function edit(PekerjaanModel $pekerjaan) : view
    {
        return view('pekerjaan.edit',compact('pekerjaan'));
    }
     
    
    public function update(Request $request, $id) : RedirectResponse
    {
        $request->validate([
          'kode' => 'required',
          'wilayah' => 'required',
          'belum_tidak_bekerja_l' => 'required',
          'belum_tidak_bekerja_p' => 'required',
          'mengurus_rumah_tangga_l' => 'required',
          'mengurus_rumah_tangga_p' => 'required',
          'pelajar_mahasiswa_l' => 'required',
          'pelajar_mahasiswa_p' => 'required',
          'pensiunan_l' => 'required',
          'pensiunan_p' => 'required',
          'pegawai_negeri_sipil_pns_l' => 'required',
          'pegawai_negeri_sipil_pns_p' => 'required',
          'tentara_nasional_indonesia_l' => 'required',
          'tentara_nasional_indonesia_p' => 'required',
          'kepolisian_ri_polri_l' => 'required',
          'kepolisian_ri_polri_p' => 'required',
          'perdagangan_l' => 'required',
          'perdagangan_p' => 'required',
          'petani_pekebun_l' => 'required',
          'petani_pekebun_p' => 'required',
          'peternak_l' => 'required',
          'peternak_p' => 'required',
          'nelayan_perikanan_l' => 'required',
          'nelayan_perikanan_p' => 'required',
          'industri_l' => 'required',
          'industri_p' => 'required',
          'konstruksi_l' => 'required',
          'konstruksi_p' => 'required',
          'transportasi_l' => 'required',
          'transportasi_p' => 'required',
          'karyawan_swasta_l' => 'required',
          'karyawan_swasta_p' => 'required',
          'karyawan_bumn_l' => 'required',
          'karyawan_bumn_p' => 'required',
          'karyawan_bumd_l' => 'required',
          'karyawan_bumd_p' => 'required',
          'karyawan_honorer_l' => 'required',
          'karyawan_honorer_p' => 'required',
          'buruh_harian_lepas_l' => 'required',
          'buruh_harian_lepas_p' => 'required',
          'buruh_tani_perkebunan_l' => 'required',
          'buruh_tani_perkebunan_p' => 'required',
          'buruh_nelayan_perikanan_l' => 'required',
          'buruh_nelayan_perikanan_p' => 'required',
          'buruh_peternakan_l' => 'required',
          'buruh_peternakan_p' => 'required',
          'pembantu_rumah_tangga_l' => 'required',
          'pembantu_rumah_tangga_p' => 'required',
          'tukang_cukur_l' => 'required',
          'tukang_cukur_p' => 'required',
          'tukang_listrik_l' => 'required',
          'tukang_listrik_p' => 'required',
          'tukang_batu_l' => 'required',
          'tukang_batu_p' => 'required',
          'tukang_kayu_l' => 'required',
          'tukang_kayu_p' => 'required',
          'tukang_sol_sepatu_l' => 'required',
          'tukang_sol_sepatu_p' => 'required',
          'tukang_las_pandai_besi_l' => 'required',
          'tukang_las_pandai_besi_p' => 'required',
          'tukang_jahit_l' => 'required',
          'tukang_jahit_p' => 'required',
          'tukang_gigi_l' => 'required',
          'tukang_gigi_p' => 'required',
          'penata_rias_l' => 'required',
          'penata_rias_p' => 'required',
          'penata_busana_l' => 'required',
          'penata_busana_p' => 'required',
          'penata_rambut_l' => 'required',
          'penata_rambut_p' => 'required',
          'mekanik_l' => 'required',
          'mekanik_p' => 'required',
          'seniman_l' => 'required',
          'seniman_p' => 'required',
          'tabib_l' => 'required',
          'tabib_p' => 'required',
          'paraji_l' => 'required',
          'paraji_p' => 'required',
          'perancang_busana_l' => 'required',
          'perancang_busana_p' => 'required',
          'penterjemah_l' => 'required',
          'penterjemah_p' => 'required',
          'imam_masjid_l' => 'required',
          'imam_masjid_p' => 'required',
          'pendeta_l' => 'required',
          'pendeta_p' => 'required',
          'pastor_l' => 'required',
          'pastor_p' => 'required',
          'wartawan_l' => 'required',
          'wartawan_p' => 'required',
          'ustadz_mubaligh_l' => 'required',
          'ustadz_mubaligh_p' => 'required',
          'juru_masak_l' => 'required',
          'juru_masak_p' => 'required',
          'promotor_acara_l' => 'required',
          'promotor_acara_p' => 'required',
          'anggota_dpr_ri_l' => 'required',
          'anggota_dpr_ri_p' => 'required',
          'anggota_dpd_ri_l' => 'required',
          'anggota_dpd_ri_p' => 'required',
          'anggota_bpk_l' => 'required',
          'anggota_bpk_p' => 'required',
          'presiden_l' => 'required',
          'presiden_p' => 'required',
          'wakil_presiden_l' => 'required',
          'wakil_presiden_p' => 'required',
          'anggota_mahkamah_konstitusi_l' => 'required',
          'anggota_mahkamah_konstitusi_p' => 'required',
          'anggota_kabinet_kemetrian_l' => 'required',
          'anggota_kabinet_kemetrian_p' => 'required',
          'duta_besar_l' => 'required',
          'duta_besar_p' => 'required',
          'gubernur_l' => 'required',
          'gubernur_p' => 'required',
          'wakil_gubernur_l' => 'required',
          'wakil_gubernur_p' => 'required',
          'bupati_l' => 'required',
          'bupati_p' => 'required',
          'wakil_bupati_l' => 'required',
          'wakil_bupati_p' => 'required',
          'walikota_l' => 'required',
          'walikota_p' => 'required',
          'wakil_walikota_l' => 'required',
          'wakil_walikota_p' => 'required',
          'anggota_dprd_prop_l' => 'required',
          'anggota_dprd_prop_p' => 'required',
          'anggota_dprd_kab_kota_l' => 'required',
          'anggota_dprd_kab_kota_p' => 'required',
          'dosen_l' => 'required',
          'dosen_p' => 'required',
          'guru_l' => 'required',
          'guru_p' => 'required',
          'pilot_l' => 'required',
          'pilot_p' => 'required',
          'pengacara_l' => 'required',
          'pengacara_p' => 'required',
          'notaris_l' => 'required',
          'notaris_p' => 'required',
          'arsitek_l' => 'required',
          'arsitek_p' => 'required',
          'akuntan_l' => 'required',
          'akuntan_p' => 'required',
          'konsultan_l' => 'required',
          'konsultan_p' => 'required',
          'dokter_l' => 'required',
          'dokter_p' => 'required',
          'bidan_l' => 'required',
          'bidan_p' => 'required',
          'perawat_l' => 'required',
          'perawat_p' => 'required',
          'apotek_l' => 'required',
          'apotek_p' => 'required',
          'psikiater_psikolog_l' => 'required',
          'psikiater_psikolog_p' => 'required',
          'penyiar_televisi_l' => 'required',
          'penyiar_televisi_p' => 'required',
          'penyiar_radio_l' => 'required',
          'penyiar_radio_p' => 'required',
          'pelaut_l' => 'required',
          'pelaut_p' => 'required',
          'peneliti_l' => 'required',
          'peneliti_p' => 'required',
          'sopir_l' => 'required',
          'sopir_p' => 'required',
          'pialang_l' => 'required',
          'pialang_p' => 'required',
          'paranormal_l' => 'required',
          'paranormal_p' => 'required',
          'pedagang_l' => 'required',
          'pedagang_p' => 'required',
          'perangkat_desa_l' => 'required',
          'perangkat_desa_p' => 'required',
          'kepala_desa_l' => 'required',
          'kepala_desa_p' => 'required',
          'biarawan_biarawati_l' => 'required',
          'biarawan_biarawati_p' => 'required',
          'wiraswasta_l' => 'required',
          'wiraswasta_p' => 'required',
          'anggota_lemb_tinggi_lainnya_l' => 'required',
          'anggota_lemb_tinggi_lainnya_p' => 'required',
          'artis_l' => 'required',
          'artis_p' => 'required',
          'atlit_l' => 'required',
          'atlit_p' => 'required',
          'cheff_l' => 'required',
          'cheff_p' => 'required',
          'manajer_l' => 'required',
          'manajer_p' => 'required',
          'tenaga_tata_usaha_l' => 'required',
          'tenaga_tata_usaha_p' => 'required',
          'operator_l' => 'required',
          'operator_p' => 'required',
          'pekerja_pengolahan_kerajinan_l' => 'required',
          'pekerja_pengolahan_kerajinan_p' => 'required',
          'teknisi_l' => 'required',
          'teknisi_p' => 'required',
          'asisten_ahli_l' => 'required',
          'asisten_ahli_p' => 'required',
          'pekerjaan_lainnya_l' => 'required',
          'pekerjaan_lainnya_p' => 'required',

        ]);

        $pekerjaan = PekerjaanModel::find($id); 

        // Check if pekerjaan exists
        if (!$pekerjaan) {
            return redirect()->route('pekerjaan.index')
                            ->with('error', 'Pekerjaan not found');
        }
        $pekerjaan->kode= $request->kode;
        $pekerjaan->wilayah= $request->wilayah;
        $pekerjaan->belum_tidak_bekerja_l= $request->belum_tidak_bekerja_l;
        $pekerjaan->belum_tidak_bekerja_p= $request->belum_tidak_bekerja_p;
        $pekerjaan->mengurus_rumah_tangga_l= $request->mengurus_rumah_tangga_l;
        $pekerjaan->mengurus_rumah_tangga_p= $request->mengurus_rumah_tangga_p;
        $pekerjaan->pelajar_mahasiswa_l= $request->pelajar_mahasiswa_l;
        $pekerjaan->pelajar_mahasiswa_p= $request->pelajar_mahasiswa_p;
        $pekerjaan->pensiunan_l= $request->pensiunan_l;
        $pekerjaan->pensiunan_p= $request->pensiunan_p;
        $pekerjaan->pegawai_negeri_sipil_pns_l= $request->pegawai_negeri_sipil_pns_l;
        $pekerjaan->pegawai_negeri_sipil_pns_p= $request->pegawai_negeri_sipil_pns_p;
        $pekerjaan->tentara_nasional_indonesia_l= $request->tentara_nasional_indonesia_l;
        $pekerjaan->tentara_nasional_indonesia_p= $request->tentara_nasional_indonesia_p;
        $pekerjaan->kepolisian_ri_polri_l= $request->kepolisian_ri_polri_l;
        $pekerjaan->kepolisian_ri_polri_p= $request->kepolisian_ri_polri_p;
        $pekerjaan->perdagangan_l= $request->perdagangan_l;
        $pekerjaan->perdagangan_p= $request->perdagangan_p;
        $pekerjaan->petani_pekebun_l= $request->petani_pekebun_l;
        $pekerjaan->petani_pekebun_p= $request->petani_pekebun_p;
        $pekerjaan->peternak_l= $request->peternak_l;
        $pekerjaan->peternak_p= $request->peternak_p;
        $pekerjaan->nelayan_perikanan_l= $request->nelayan_perikanan_l;
        $pekerjaan->nelayan_perikanan_p= $request->nelayan_perikanan_p;
        $pekerjaan->industri_l= $request->industri_l;
        $pekerjaan->industri_p= $request->industri_p;
        $pekerjaan->konstruksi_l= $request->konstruksi_l;
        $pekerjaan->konstruksi_p= $request->konstruksi_p;
        $pekerjaan->transportasi_l= $request->transportasi_l;
        $pekerjaan->transportasi_p= $request->transportasi_p;
        $pekerjaan->karyawan_swasta_l= $request->karyawan_swasta_l;
        $pekerjaan->karyawan_swasta_p= $request->karyawan_swasta_p;
        $pekerjaan->karyawan_bumn_l= $request->karyawan_bumn_l;
        $pekerjaan->karyawan_bumn_p= $request->karyawan_bumn_p;
        $pekerjaan->karyawan_bumd_l= $request->karyawan_bumd_l;
        $pekerjaan->karyawan_bumd_p= $request->karyawan_bumd_p;
        $pekerjaan->karyawan_honorer_l= $request->karyawan_honorer_l;
        $pekerjaan->karyawan_honorer_p= $request->karyawan_honorer_p;
        $pekerjaan->buruh_harian_lepas_l= $request->buruh_harian_lepas_l;
        $pekerjaan->buruh_harian_lepas_p= $request->buruh_harian_lepas_p;
        $pekerjaan->buruh_tani_perkebunan_l= $request->buruh_tani_perkebunan_l;
        $pekerjaan->buruh_tani_perkebunan_p= $request->buruh_tani_perkebunan_p;
        $pekerjaan->buruh_nelayan_perikanan_l= $request->buruh_nelayan_perikanan_l;
        $pekerjaan->buruh_nelayan_perikanan_p= $request->buruh_nelayan_perikanan_p;
        $pekerjaan->buruh_peternakan_l= $request->buruh_peternakan_l;
        $pekerjaan->buruh_peternakan_p= $request->buruh_peternakan_p;
        $pekerjaan->pembantu_rumah_tangga_l= $request->pembantu_rumah_tangga_l;
        $pekerjaan->pembantu_rumah_tangga_p= $request->pembantu_rumah_tangga_p;
        $pekerjaan->tukang_cukur_l= $request->tukang_cukur_l;
        $pekerjaan->tukang_cukur_p= $request->tukang_cukur_p;
        $pekerjaan->tukang_listrik_l= $request->tukang_listrik_l;
        $pekerjaan->tukang_listrik_p= $request->tukang_listrik_p;
        $pekerjaan->tukang_batu_l= $request->tukang_batu_l;
        $pekerjaan->tukang_batu_p= $request->tukang_batu_p;
        $pekerjaan->tukang_kayu_l= $request->tukang_kayu_l;
        $pekerjaan->tukang_kayu_p= $request->tukang_kayu_p;
        $pekerjaan->tukang_sol_sepatu_l= $request->tukang_sol_sepatu_l;
        $pekerjaan->tukang_sol_sepatu_p= $request->tukang_sol_sepatu_p;
        $pekerjaan->tukang_las_pandai_besi_l= $request->tukang_las_pandai_besi_l;
        $pekerjaan->tukang_las_pandai_besi_p= $request->tukang_las_pandai_besi_p;
        $pekerjaan->tukang_jahit_l= $request->tukang_jahit_l;
        $pekerjaan->tukang_jahit_p= $request->tukang_jahit_p;
        $pekerjaan->tukang_gigi_l= $request->tukang_gigi_l;
        $pekerjaan->tukang_gigi_p= $request->tukang_gigi_p;
        $pekerjaan->penata_rias_l= $request->penata_rias_l;
        $pekerjaan->penata_rias_p= $request->penata_rias_p;
        $pekerjaan->penata_busana_l= $request->penata_busana_l;
        $pekerjaan->penata_busana_p= $request->penata_busana_p;
        $pekerjaan->penata_rambut_l= $request->penata_rambut_l;
        $pekerjaan->penata_rambut_p= $request->penata_rambut_p;
        $pekerjaan->mekanik_l= $request->mekanik_l;
        $pekerjaan->mekanik_p= $request->mekanik_p;
        $pekerjaan->seniman_l= $request->seniman_l;
        $pekerjaan->seniman_p= $request->seniman_p;
        $pekerjaan->tabib_l= $request->tabib_l;
        $pekerjaan->tabib_p= $request->tabib_p;
        $pekerjaan->paraji_l= $request->paraji_l;
        $pekerjaan->paraji_p= $request->paraji_p;
        $pekerjaan->perancang_busana_l= $request->perancang_busana_l;
        $pekerjaan->perancang_busana_p= $request->perancang_busana_p;
        $pekerjaan->penterjemah_l= $request->penterjemah_l;
        $pekerjaan->penterjemah_p= $request->penterjemah_p;
        $pekerjaan->imam_masjid_l= $request->imam_masjid_l;
        $pekerjaan->imam_masjid_p= $request->imam_masjid_p;
        $pekerjaan->pendeta_l= $request->pendeta_l;
        $pekerjaan->pendeta_p= $request->pendeta_p;
        $pekerjaan->pastor_l= $request->pastor_l;
        $pekerjaan->pastor_p= $request->pastor_p;
        $pekerjaan->wartawan_l= $request->wartawan_l;
        $pekerjaan->wartawan_p= $request->wartawan_p;
        $pekerjaan->ustadz_mubaligh_l= $request->ustadz_mubaligh_l;
        $pekerjaan->ustadz_mubaligh_p= $request->ustadz_mubaligh_p;
        $pekerjaan->juru_masak_l= $request->juru_masak_l;
        $pekerjaan->juru_masak_p= $request->juru_masak_p;
        $pekerjaan->promotor_acara_l= $request->promotor_acara_l;
        $pekerjaan->promotor_acara_p= $request->promotor_acara_p;
        $pekerjaan->anggota_dpr_ri_l= $request->anggota_dpr_ri_l;
        $pekerjaan->anggota_dpr_ri_p= $request->anggota_dpr_ri_p;
        $pekerjaan->anggota_dpd_ri_l= $request->anggota_dpd_ri_l;
        $pekerjaan->anggota_dpd_ri_p= $request->anggota_dpd_ri_p;
        $pekerjaan->anggota_bpk_l= $request->anggota_bpk_l;
        $pekerjaan->anggota_bpk_p= $request->anggota_bpk_p;
        $pekerjaan->presiden_l= $request->presiden_l;
        $pekerjaan->presiden_p= $request->presiden_p;
        $pekerjaan->wakil_presiden_l= $request->wakil_presiden_l;
        $pekerjaan->wakil_presiden_p= $request->wakil_presiden_p;
        $pekerjaan->anggota_mahkamah_konstitusi_l= $request->anggota_mahkamah_konstitusi_l;
        $pekerjaan->anggota_mahkamah_konstitusi_p= $request->anggota_mahkamah_konstitusi_p;
        $pekerjaan->anggota_kabinet_kemetrian_l= $request->anggota_kabinet_kemetrian_l;
        $pekerjaan->anggota_kabinet_kemetrian_p= $request->anggota_kabinet_kemetrian_p;
        $pekerjaan->duta_besar_l= $request->duta_besar_l;
        $pekerjaan->duta_besar_p= $request->duta_besar_p;
        $pekerjaan->gubernur_l= $request->gubernur_l;
        $pekerjaan->gubernur_p= $request->gubernur_p;
        $pekerjaan->wakil_gubernur_l= $request->wakil_gubernur_l;
        $pekerjaan->wakil_gubernur_p= $request->wakil_gubernur_p;
        $pekerjaan->bupati_l= $request->bupati_l;
        $pekerjaan->bupati_p= $request->bupati_p;
        $pekerjaan->wakil_bupati_l= $request->wakil_bupati_l;
        $pekerjaan->wakil_bupati_p= $request->wakil_bupati_p;
        $pekerjaan->walikota_l= $request->walikota_l;
        $pekerjaan->walikota_p= $request->walikota_p;
        $pekerjaan->wakil_walikota_l= $request->wakil_walikota_l;
        $pekerjaan->wakil_walikota_p= $request->wakil_walikota_p;
        $pekerjaan->anggota_dprd_prop_l= $request->anggota_dprd_prop_l;
        $pekerjaan->anggota_dprd_prop_p= $request->anggota_dprd_prop_p;
        $pekerjaan->anggota_dprd_kab_kota_l= $request->anggota_dprd_kab_kota_l;
        $pekerjaan->anggota_dprd_kab_kota_p= $request->anggota_dprd_kab_kota_p;
        $pekerjaan->dosen_l= $request->dosen_l;
        $pekerjaan->dosen_p= $request->dosen_p;
        $pekerjaan->guru_l= $request->guru_l;
        $pekerjaan->guru_p= $request->guru_p;
        $pekerjaan->pilot_l= $request->pilot_l;
        $pekerjaan->pilot_p= $request->pilot_p;
        $pekerjaan->pengacara_l= $request->pengacara_l;
        $pekerjaan->pengacara_p= $request->pengacara_p;
        $pekerjaan->notaris_l= $request->notaris_l;
        $pekerjaan->notaris_p= $request->notaris_p;
        $pekerjaan->arsitek_l= $request->arsitek_l;
        $pekerjaan->arsitek_p= $request->arsitek_p;
        $pekerjaan->akuntan_l= $request->akuntan_l;
        $pekerjaan->akuntan_p= $request->akuntan_p;
        $pekerjaan->konsultan_l= $request->konsultan_l;
        $pekerjaan->konsultan_p= $request->konsultan_p;
        $pekerjaan->dokter_l= $request->dokter_l;
        $pekerjaan->dokter_p= $request->dokter_p;
        $pekerjaan->bidan_l= $request->bidan_l;
        $pekerjaan->bidan_p= $request->bidan_p;
        $pekerjaan->perawat_l= $request->perawat_l;
        $pekerjaan->perawat_p= $request->perawat_p;
        $pekerjaan->apotek_l= $request->apotek_l;
        $pekerjaan->apotek_p= $request->apotek_p;
        $pekerjaan->psikiater_psikolog_l= $request->psikiater_psikolog_l;
        $pekerjaan->psikiater_psikolog_p= $request->psikiater_psikolog_p;
        $pekerjaan->penyiar_televisi_l= $request->penyiar_televisi_l;
        $pekerjaan->penyiar_televisi_p= $request->penyiar_televisi_p;
        $pekerjaan->penyiar_radio_l= $request->penyiar_radio_l;
        $pekerjaan->penyiar_radio_p= $request->penyiar_radio_p;
        $pekerjaan->pelaut_l= $request->pelaut_l;
        $pekerjaan->pelaut_p= $request->pelaut_p;
        $pekerjaan->peneliti_l= $request->peneliti_l;
        $pekerjaan->peneliti_p= $request->peneliti_p;
        $pekerjaan->sopir_l= $request->sopir_l;
        $pekerjaan->sopir_p= $request->sopir_p;
        $pekerjaan->pialang_l= $request->pialang_l;
        $pekerjaan->pialang_p= $request->pialang_p;
        $pekerjaan->paranormal_l= $request->paranormal_l;
        $pekerjaan->paranormal_p= $request->paranormal_p;
        $pekerjaan->pedagang_l= $request->pedagang_l;
        $pekerjaan->pedagang_p= $request->pedagang_p;
        $pekerjaan->perangkat_desa_l= $request->perangkat_desa_l;
        $pekerjaan->perangkat_desa_p= $request->perangkat_desa_p;
        $pekerjaan->kepala_desa_l= $request->kepala_desa_l;
        $pekerjaan->kepala_desa_p= $request->kepala_desa_p;
        $pekerjaan->biarawan_biarawati_l= $request->biarawan_biarawati_l;
        $pekerjaan->biarawan_biarawati_p= $request->biarawan_biarawati_p;
        $pekerjaan->wiraswasta_l= $request->wiraswasta_l;
        $pekerjaan->wiraswasta_p= $request->wiraswasta_p;
        $pekerjaan->anggota_lemb_tinggi_lainnya_l= $request->anggota_lemb_tinggi_lainnya_l;
        $pekerjaan->anggota_lemb_tinggi_lainnya_p= $request->anggota_lemb_tinggi_lainnya_p;
        $pekerjaan->artis_l= $request->artis_l;
        $pekerjaan->artis_p= $request->artis_p;
        $pekerjaan->atlit_l= $request->atlit_l;
        $pekerjaan->atlit_p= $request->atlit_p;
        $pekerjaan->cheff_l= $request->cheff_l;
        $pekerjaan->cheff_p= $request->cheff_p;
        $pekerjaan->manajer_l= $request->manajer_l;
        $pekerjaan->manajer_p= $request->manajer_p;
        $pekerjaan->tenaga_tata_usaha_l= $request->tenaga_tata_usaha_l;
        $pekerjaan->tenaga_tata_usaha_p= $request->tenaga_tata_usaha_p;
        $pekerjaan->operator_l= $request->operator_l;
        $pekerjaan->operator_p= $request->operator_p;
        $pekerjaan->pekerja_pengolahan_kerajinan_l= $request->pekerja_pengolahan_kerajinan_l;
        $pekerjaan->pekerja_pengolahan_kerajinan_p= $request->pekerja_pengolahan_kerajinan_p;
        $pekerjaan->teknisi_l= $request->teknisi_l;
        $pekerjaan->teknisi_p= $request->teknisi_p;
        $pekerjaan->asisten_ahli_l= $request->asisten_ahli_l;
        $pekerjaan->asisten_ahli_p= $request->asisten_ahli_p;
        $pekerjaan->pekerjaan_lainnya_l= $request->pekerjaan_lainnya_l;
        $pekerjaan->pekerjaan_lainnya_p= $request->pekerjaan_lainnya_p;

        $pekerjaan->save();
     
        return redirect()->route('pekerjaan.index')
                         ->with('success','pekerjaan Has Been updated successfully');
    }
     
    
    public function destroy(PekerjaanModel $pekerjaan) : RedirectResponse
    {
        $pekerjaan->delete();    
        return redirect()->route('pekerjaan.index')
                        ->with('success','pekerjaan has been deleted successfully');
    }

    // Import data from an Excel file
    public function import(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'excel_file' => 'required|file|mimes:xlsx,xls,csv',
        ]);

        try {
            // Import the Excel file
            Excel::import(new PekerjaanImport, $request->file('excel_file'));
            Session::flash('status', 'Pekerjaan imported successfully!');
            
        } catch (\Exception $e) {
            Session::flash('error', 'There was an error importing the data: ' . $e->getMessage());
        }

        // Redirect back to the import page
        return redirect()->back();
    }



}

     
