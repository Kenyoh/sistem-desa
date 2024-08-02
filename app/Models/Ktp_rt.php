<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ktp_rt extends Model
{
    use HasFactory;

    protected $table = 'ktp_rt';
    protected $primaryKey = 'id_ktp_rt';

    protected $fillable = [
        'id_rt',
        'id_rw',
        'id_dusun',
        'data_ktp_rt',
        'kk_rt',
        'kk_sm_rt',
        'kk_bm_rt',
        'lw_ktp_rt',
        'pw_ktp_rt',
        'lpw_ktp_rt',
        'lm_ktp_rt',
        'pm_ktp_rt',
        'pm_ktp_rt',
        'lbm_ktp_rt',
        'pbm_ktp_rt',
        'lpbm_ktp_rt',
    ];
}
