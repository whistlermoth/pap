<?php

namespace App\Imports;

use App\Models\Mekaar;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Carbon\Carbon;

class ImportExcelMekaar implements ToModel, WithStartRow
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new Mekaar([
            'tanggaltarik' =>  $this->convertExcelDate($row[0] ?? null),
            'tanggalops' => $this->convertExcelDate($row[1] ?? null),
            'wilayah' => $row[2] ?? null,
            'region' => $row[3] ?? null,
            'area' => $row[4] ?? null,
            'cabangid' => $row[5] ?? null,
            'cabang' => $row[6] ?? null,
            'noa' => $row[7] ?? null,
            'standarisasi_ao_on_pkm' => $row[8] ?? null,
            'jumlah_ao' => $row[9] ?? null,
            'kebutuhan_ao' => $row[10] ?? null,
            'standarisasi_fao' => $row[11] ?? null,
            'fao' => $row[12] ?? null,
            'kebutuhan_fao' => $row[13] ?? null,
            'standarisasi_sao' => $row[14] ?? null,
            'sao' => $row[15] ?? null,
            'kebutuhan_sao' => $row[16] ?? null,
            'standarisasi_kum' => $row[17] ?? null,
            'kum' => $row[18] ?? null,
            'kebutuhan_kum' => $row[19] ?? null,
            'noc_bln_lalu' => $row[20] ?? null,
            'growth_noc_bln_lalu' => $row[21] ?? null,
            'noc' => $row[22] ?? null,
            'target_eom_noc' => $row[23] ?? null,
            'target_eoy_noc' => $row[24] ?? null,
            'pkm' => $row[25] ?? null,
            'pkm_lt_10' => $row[26] ?? null,
            'pkm_gt_30' => $row[27] ?? null,
            'pkm_10_30' => $row[28] ?? null,
            'noa_s1' => $row[29] ?? null,
            'noa_wash' => $row[30] ?? null,
            'noa_home' => $row[31] ?? null,
            'penyaluran_noa_kumulatif' => $row[32] ?? null,
            'penyaluran_noa_bulan_ini' => $row[33] ?? null,
            'penyaluran_noa_s1' => $row[34] ?? null,
            'penyaluran_noa_wash' => $row[35] ?? null,
            'penyaluran_noa_home' => $row[36] ?? null,
            'os_bln_lalu' => $row[37] ?? null,
            'growth_os_bln_lalu' => $row[38] ?? null,
            'os_actual' => $row[39] ?? null,
            'target_eom_os' => $row[40] ?? null,
            'target_eoy_os' => $row[41] ?? null,
            'runoff' => $row[42] ?? null,
            'sisa_minggu_kerja_sd_des_23' => $row[43] ?? null,
            'kewajiban_drtd_nominal' => $row[44] ?? null,
            'kewajiban_drtd_noa' => $row[45] ?? null,
            'os_s1' => $row[46] ?? null,
            'os_wash' => $row[47] ?? null,
            'os_home' => $row[48] ?? null,
            'lending_okt' => $row[49] ?? null,
            'penyaluran_plafond_kumulatif' => $row[50] ?? null,
            'rkap_nov' => $row[51] ?? null,
            'rkap_des' => $row[52] ?? null,
            'penyaluran_plafond_bulan_ini' => $row[53] ?? null,
            'penyaluran_plafond_s1' => $row[54] ?? null,
            'penyaluran_plafond_wash' => $row[55] ?? null,
            'penyaluran_plafond_home' => $row[56] ?? null,
            'noa_par_bln_lalu' => $row[57] ?? null,
            'progres_noa_par_bln_lalu' => $row[58] ?? null,
            'noa_par' => $row[59] ?? null,
            'percentage_noa_par' => $row[60] ?? null,
            'os_par_bln_lalu' => $row[61] ?? null,
            'progres_os_par_bln_lalu' => $row[62] ?? null,
            'os_par' => $row[63] ?? null,
            'percentage_os_par' => $row[64] ?? null,
            'target_eom_par' => $row[65] ?? null,
            'target_eoy_par' => $row[66] ?? null,
            'percentage_rr' => $row[67] ?? null,
            'noa_npl_bln_lalu' => $row[68] ?? null,
            'noa_npl' => $row[69] ?? null,
            'percentage_noa_npl' => $row[70] ?? null,
            'os_npl_bln_lalu' => $row[71] ?? null,
            'os_npl' => $row[72] ?? null,
            'percentage_os_npl' => $row[73] ?? null,
            'target_eom_npl' => $row[74] ?? null,
            'target_eoy_npl' => $row[75] ?? null,
            'os_bucket_1_30' => $row[76] ?? null,
            'os_bucket_31_60' => $row[77] ?? null,
            'os_bucket_61_90' => $row[78] ?? null,
            'os_bucket_91_120' => $row[79] ?? null,
            'os_bucket_121_180' => $row[80] ?? null,
            'os_bucket_180' => $row[81] ?? null,
            'noa_3r_kol1a' => $row[82] ?? null,
            'noa_3r_kol1b' => $row[83] ?? null,
            'noa_3r_kol2' => $row[84] ?? null,
            'noa_3r_kol3' => $row[85] ?? null,
            'noa_3r_kol4' => $row[86] ?? null,
            'noa_3r_kol5' => $row[87] ?? null,
            'cabang_aktif' => $row[88] ?? null,
            'noc_3000' => $row[89] ?? null,
            'par_5_percent' => $row[90] ?? null,
            'score' => $row[91] ?? null,
            'kelas_unit' => $row[92] ?? null,
            'senyum' => $row[93] ?? null,
            'do_bln_ini' => $row[94] ?? null,
            'uk_dan_pnc_ao' => $row[95] ?? null,
        ]);
    }

    /**
     * @return int
     */
    public function startRow(): int
    {
        return 2; // Start importing from the second row (index 1)
    }
    
    private function convertExcelDate($excelDate)
    {
        try {
            // Excel base date is January 1, 1900
            $baseDate = Carbon::create(1900, 1, 1);

            // Add the number of days to the base date
            $formattedDate = $baseDate->addDays($excelDate)->format('Y-m-d');

            return $formattedDate;
        } catch (\Exception $e) {
            // Handle any exceptions or return null if the date cannot be parsed
            return null;
        }
    }
}
