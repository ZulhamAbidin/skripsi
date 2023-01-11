<?php

namespace App\Exports;

use App\Models\data;
use Maatwebsite\Excel\Concerns\FromCollection;

class dataexport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return data::all();
    }
}
