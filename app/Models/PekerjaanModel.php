<?php


namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PekerjaanModel extends Model
{
    use HasFactory;
    protected $table = 'pekerjaan';    
    public $timestamps = false;
    protected $fillable = [
        'kode',
        'wilayah',
        'belum_tidak_bekerja_l',
        'belum_tidak_bekerja_p',
        'mengurus_rumah_tangga_l',
        'mengurus_rumah_tangga_p',
        'pelajar_mahasiswa_l',
        'pelajar_mahasiswa_p',
        'pensiunan_l',
        'pensiunan_p',
        'pegawai_negeri_sipil_pns_l',
        'pegawai_negeri_sipil_pns_p',
        'tentara_nasional_indonesia_l',
        'tentara_nasional_indonesia_p',
        'kepolisian_ri_polri_l',
        'kepolisian_ri_polri_p',
        'perdagangan_l',
        'perdagangan_p',
        'petani_pekebun_l',
        'petani_pekebun_p',
        'peternak_l',
        'peternak_p',
        'nelayan_perikanan_l',
        'nelayan_perikanan_p',
        'industri_l',
        'industri_p',
        'konstruksi_l',
        'konstruksi_p',
        'transportasi_l',
        'transportasi_p',
        'karyawan_swasta_l',
        'karyawan_swasta_p',
        'karyawan_bumn_l',
        'karyawan_bumn_p',
        'karyawan_bumd_l',
        'karyawan_bumd_p',
        'karyawan_honorer_l',
        'karyawan_honorer_p',
        'buruh_harian_lepas_l',
        'buruh_harian_lepas_p',
        'buruh_tani_perkebunan_l',
        'buruh_tani_perkebunan_p',
        'buruh_nelayan_perikanan_l',
        'buruh_nelayan_perikanan_p',
        'buruh_peternakan_l',
        'buruh_peternakan_p',
        'pembantu_rumah_tangga_l',
        'pembantu_rumah_tangga_p',
        'tukang_cukur_l',
        'tukang_cukur_p',
        'tukang_listrik_l',
        'tukang_listrik_p',
        'tukang_batu_l',
        'tukang_batu_p',
        'tukang_kayu_l',
        'tukang_kayu_p',
        'tukang_sol_sepatu_l',
        'tukang_sol_sepatu_p',
        'tukang_las_pandai_besi_l',
        'tukang_las_pandai_besi_p',
        'tukang_jahit_l',
        'tukang_jahit_p',
        'tukang_gigi_l',
        'tukang_gigi_p',
        'penata_rias_l',
        'penata_rias_p',
        'penata_busana_l',
        'penata_busana_p',
        'penata_rambut_l',
        'penata_rambut_p',
        'mekanik_l',
        'mekanik_p',
        'seniman_l',
        'seniman_p',
        'tabib_l',
        'tabib_p',
        'paraji_l',
        'paraji_p',
        'perancang_busana_l',
        'perancang_busana_p',
        'penterjemah_l',
        'penterjemah_p',
        'imam_masjid_l',
        'imam_masjid_p',
        'pendeta_l',
        'pendeta_p',
        'pastor_l',
        'pastor_p',
        'wartawan_l',
        'wartawan_p',
        'ustadz_mubaligh_l',
        'ustadz_mubaligh_p',
        'juru_masak_l',
        'juru_masak_p',
        'promotor_acara_l',
        'promotor_acara_p',
        'anggota_dpr_ri_l',
        'anggota_dpr_ri_p',
        'anggota_dpd_ri_l',
        'anggota_dpd_ri_p',
        'anggota_bpk_l',
        'anggota_bpk_p',
        'presiden_l',
        'presiden_p',
        'wakil_presiden_l',
        'wakil_presiden_p',
        'anggota_mahkamah_konstitusi_l',
        'anggota_mahkamah_konstitusi_p',
        'anggota_kabinet_kemetrian_l',
        'anggota_kabinet_kemetrian_p',
        'duta_besar_l',
        'duta_besar_p',
        'gubernur_l',
        'gubernur_p',
        'wakil_gubernur_l',
        'wakil_gubernur_p',
        'bupati_l',
        'bupati_p',
        'wakil_bupati_l',
        'wakil_bupati_p',
        'walikota_l',
        'walikota_p',
        'wakil_walikota_l',
        'wakil_walikota_p',
        'anggota_dprd_prop_l',
        'anggota_dprd_prop_p',
        'anggota_dprd_kab_kota_l',
        'anggota_dprd_kab_kota_p',
        'dosen_l',
        'dosen_p',
        'guru_l',
        'guru_p',
        'pilot_l',
        'pilot_p',
        'pengacara_l',
        'pengacara_p',
        'notaris_l',
        'notaris_p',
        'arsitek_l',
        'arsitek_p',
        'akuntan_l',
        'akuntan_p',
        'konsultan_l',
        'konsultan_p',
        'dokter_l',
        'dokter_p',
        'bidan_l',
        'bidan_p',
        'perawat_l',
        'perawat_p',
        'apotek_l',
        'apotek_p',
        'psikiater_psikolog_l',
        'psikiater_psikolog_p',
        'penyiar_televisi_l',
        'penyiar_televisi_p',
        'penyiar_radio_l',
        'penyiar_radio_p',
        'pelaut_l',
        'pelaut_p',
        'peneliti_l',
        'peneliti_p',
        'sopir_l',
        'sopir_p',
        'pialang_l',
        'pialang_p',
        'paranormal_l',
        'paranormal_p',
        'pedagang_l',
        'pedagang_p',
        'perangkat_desa_l',
        'perangkat_desa_p',
        'kepala_desa_l',
        'kepala_desa_p',
        'biarawan_biarawati_l',
        'biarawan_biarawati_p',
        'wiraswasta_l',
        'wiraswasta_p',
        'anggota_lemb_tinggi_lainnya_l',
        'anggota_lemb_tinggi_lainnya_p',
        'artis_l',
        'artis_p',
        'atlit_l',
        'atlit_p',
        'cheff_l',
        'cheff_p',
        'manajer_l',
        'manajer_p',
        'tenaga_tata_usaha_l',
        'tenaga_tata_usaha_p',
        'operator_l',
        'operator_p',
        'pekerja_pengolahan_kerajinan_l',
        'pekerja_pengolahan_kerajinan_p',
        'teknisi_l',
        'teknisi_p',
        'asisten_ahli_l',
        'asisten_ahli_p',
        'pekerjaan_lainnya_l',
        'pekerjaan_lainnya_p',
    ];
}

