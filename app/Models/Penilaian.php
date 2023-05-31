<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function alternatif()
    {
        return $this->belongsTo(Alternatif::class);
    }

    public function sub_kriteria1()
    {
        return $this->belongsTo(SubKriteria::class);
    }
    public function sub_kriteria2()
    {
        return $this->belongsTo(SubKriteria::class);
    }
    public function sub_kriteria3()
    {
        return $this->belongsTo(SubKriteria::class);
    }
    public function sub_kriteria4()
    {
        return $this->belongsTo(SubKriteria::class);
    }
    public function sub_kriteria5()
    {
        return $this->belongsTo(SubKriteria::class);
    }
}
