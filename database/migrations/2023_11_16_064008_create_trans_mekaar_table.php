<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransMekaarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trans_mekaar', function (Blueprint $table) {
            $table->id();
            $table->date('tanggaltarik')->nullable();
            $table->date('tanggalops')->nullable();
            $table->string('wilayah')->nullable();
            $table->string('region')->nullable();
            $table->string('area')->nullable();
            $table->string('cabangid')->nullable();
            $table->string('cabang')->nullable();
            $table->bigInteger('noa')->nullable();
            $table->bigInteger('standarisasi_ao_on_pkm')->nullable();
            $table->bigInteger('jumlah_ao')->nullable();
            $table->bigInteger('kebutuhan_ao')->nullable();
            $table->bigInteger('standarisasi_fao')->nullable();
            $table->bigInteger('fao')->nullable();
            $table->bigInteger('kebutuhan_fao')->nullable();
            $table->bigInteger('standarisasi_sao')->nullable();
            $table->bigInteger('sao')->nullable();
            $table->bigInteger('kebutuhan_sao')->nullable();
            $table->bigInteger('standarisasi_kum')->nullable();
            $table->bigInteger('kum')->nullable();
            $table->bigInteger('kebutuhan_kum')->nullable();
            $table->bigInteger('noc_bln_lalu')->nullable();
            $table->string('growth_noc_bln_lalu')->nullable();
            $table->bigInteger('noc')->nullable();
            $table->bigInteger('target_eom_noc')->nullable();
            $table->bigInteger('target_eoy_noc')->nullable();
            $table->bigInteger('pkm')->nullable();
            $table->bigInteger('pkm_lt_10')->nullable();
            $table->bigInteger('pkm_gt_30')->nullable();
            $table->bigInteger('pkm_10_30')->nullable();
            $table->bigInteger('noa_s1')->nullable();
            $table->bigInteger('noa_wash')->nullable();
            $table->bigInteger('noa_home')->nullable();
            $table->bigInteger('penyaluran_noa_kumulatif')->nullable();
            $table->bigInteger('penyaluran_noa_bulan_ini')->nullable();
            $table->bigInteger('penyaluran_noa_s1')->nullable();
            $table->bigInteger('penyaluran_noa_wash')->nullable();
            $table->bigInteger('penyaluran_noa_home')->nullable();
            $table->bigInteger('os_bln_lalu')->nullable();
            $table->string('growth_os_bln_lalu')->nullable();
            $table->bigInteger('os_actual')->nullable();
            $table->bigInteger('target_eom_os')->nullable();
            $table->bigInteger('target_eoy_os')->nullable();
            $table->bigInteger('runoff')->nullable();
            $table->bigInteger('sisa_minggu_kerja_sd_des_23')->nullable();
            $table->bigInteger('kewajiban_drtd_nominal')->nullable();
            $table->bigInteger('kewajiban_drtd_noa')->nullable();
            $table->bigInteger('os_s1')->nullable();
            $table->bigInteger('os_wash')->nullable();
            $table->bigInteger('os_home')->nullable();
            $table->bigInteger('lending_okt')->nullable();
            $table->bigInteger('penyaluran_plafond_kumulatif')->nullable();
            $table->bigInteger('rkap_nov')->nullable();
            $table->bigInteger('rkap_des')->nullable();
            $table->bigInteger('penyaluran_plafond_bulan_ini')->nullable();
            $table->bigInteger('penyaluran_plafond_s1')->nullable();
            $table->bigInteger('penyaluran_plafond_wash')->nullable();
            $table->bigInteger('penyaluran_plafond_home')->nullable();
            $table->bigInteger('noa_par_bln_lalu')->nullable();
            $table->bigInteger('progres_noa_par_bln_lalu')->nullable();
            $table->bigInteger('noa_par')->nullable();
            $table->string('percentage_noa_par')->nullable();
            $table->bigInteger('os_par_bln_lalu')->nullable();
            $table->bigInteger('progres_os_par_bln_lalu')->nullable();
            $table->bigInteger('os_par')->nullable();
            $table->string('percentage_os_par')->nullable();
            $table->bigInteger('target_eom_par')->nullable();
            $table->bigInteger('target_eoy_par')->nullable();
            $table->string('percentage_rr')->nullable();
            $table->bigInteger('noa_npl_bln_lalu')->nullable();
            $table->bigInteger('noa_npl')->nullable();
            $table->string('percentage_noa_npl')->nullable();
            $table->bigInteger('os_npl_bln_lalu')->nullable();
            $table->bigInteger('os_npl')->nullable();
            $table->string('percentage_os_npl')->nullable();
            $table->bigInteger('target_eom_npl')->nullable();
            $table->bigInteger('target_eoy_npl')->nullable();
            $table->bigInteger('os_bucket_1_30')->nullable();
            $table->bigInteger('os_bucket_31_60')->nullable();
            $table->bigInteger('os_bucket_61_90')->nullable();
            $table->bigInteger('os_bucket_91_120')->nullable();
            $table->bigInteger('os_bucket_121_180')->nullable();
            $table->bigInteger('os_bucket_180')->nullable();
            $table->bigInteger('noa_3r_kol1a')->nullable();
            $table->bigInteger('noa_3r_kol1b')->nullable();
            $table->bigInteger('noa_3r_kol2')->nullable();
            $table->bigInteger('noa_3r_kol3')->nullable();
            $table->bigInteger('noa_3r_kol4')->nullable();
            $table->bigInteger('noa_3r_kol5')->nullable();
            $table->bigInteger('cabang_aktif')->nullable();
            $table->bigInteger('noc_3000')->nullable();
            $table->bigInteger('par_5_percent')->nullable();
            $table->bigInteger('score')->nullable();
            $table->string('kelas_unit')->nullable();
            $table->bigInteger('senyum')->nullable();
            $table->bigInteger('do_bln_ini')->nullable();
            $table->bigInteger('uk_dan_pnc_ao')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trans_mekaar');
    }
}
