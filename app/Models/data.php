<?php

namespace App\Models;

// use App\Models\data;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
 


class data extends Model
{
    use HasFactory;

    //terhubung dengan database data


    // ddibawah ini menghubungkan atau mendefinisikan kita menggunakan table data
    protected $table = "data";

    public static function getdata()
    {
        $record = DB::table('data')->select('id', 'nama_lengkap', 'jenis_kelamin', 'pendidikan_terakhir', 'jurusan', 'hari')->get()->toArray();
        return $record;
    }
}
