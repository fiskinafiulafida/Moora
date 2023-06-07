<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Stmt\Echo_;

class Perhitungan extends Model
{
    use HasFactory;

    public static function normalisasi()
    {
        $penilaian = Penilaian::all();
        $kriteria = Kriteria::all();
        $bagi1 = 0;
        $bagi2 = 0;
        $bagi3 = 0;
        $bagi4 = 0;
        $bagi5 = 0;
        $bagi6 = 0;
        $bagi7 = 0;
        $bagi8 = 0;
        $bagi9 = 0;
        $bagi10 = 0;
        foreach ($penilaian as $pen) {
            $bagi1 += pow($pen->sub_kriteria1->nilai, 2);
            $bagi2 += pow($pen->sub_kriteria2->nilai, 2);
            $bagi3 += pow($pen->sub_kriteria3->nilai, 2);
            $bagi4 += pow($pen->sub_kriteria4->nilai, 2);
            $bagi5 += pow($pen->sub_kriteria5->nilai, 2);
            $bagi6 += pow($pen->sub_kriteria6->nilai, 2);
            $bagi7 += pow($pen->sub_kriteria7->nilai, 2);
            $bagi8 += pow($pen->sub_kriteria8->nilai, 2);
            $bagi9 += pow($pen->sub_kriteria9->nilai, 2);
            $bagi10 += pow($pen->sub_kriteria10->nilai, 2);
        }

        $pembagi1 = sqrt($bagi1);
        $pembagi2 = sqrt($bagi2);
        $pembagi3 = sqrt($bagi3);
        $pembagi4 = sqrt($bagi4);
        $pembagi5 = sqrt($bagi5);
        $pembagi6 = sqrt($bagi6);
        $pembagi7 = sqrt($bagi7);
        $pembagi8 = sqrt($bagi8);
        $pembagi9 = sqrt($bagi9);
        $pembagi10 = sqrt($bagi10);

        $normalisasi = array();

        if ($pembagi1 == 0 || $pembagi2 == 0 || $pembagi3 == 0 || $pembagi4 == 0 || $pembagi5 == 0 || $pembagi6 == 0 || $pembagi7 == 0 || $pembagi8 == 0 || $pembagi9 == 0 || $pembagi10 == 0) {
            return [
                $pembagi1 = 1,
                $pembagi2 = 1,
                $pembagi3 = 1,
                $pembagi4 = 1,
                $pembagi5 = 1,
                $pembagi6 = 1,
                $pembagi7 = 1,
                $pembagi8 = 1,
                $pembagi9 = 1,
                $pembagi10 = 1,
            ];
        } else {
            return [
                $pembagi1,
                $pembagi2,
                $pembagi3,
                $pembagi4,
                $pembagi5,
                $pembagi6,
                $pembagi7,
                $pembagi8,
                $pembagi9,
                $pembagi10,
            ];
        }
    }

    public static function ranking()
    {
    }
}
