<?php

namespace App\Exports;

use App\Models\data;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class dataexport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return data::select('nama_lengkap', 'jenis_kelamin', 'alamat_domisili', 'pendidikan_terakhir', 'jurusan', 'hari')->get();
    }

    public function headings(): array
    {
        return ["NAMA LENGKAP", "JENIS KELAMIN", "ALAMAT DOMISILI", "PENDIDIKAN TERAKHIR", "JURUSAN", "TANGGAL PENGESAHAN"];
    }
}
