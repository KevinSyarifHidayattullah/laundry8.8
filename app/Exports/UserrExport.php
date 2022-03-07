<?php

namespace App\Export;

use App\Models\Userr;
use Maatwebsite\Excel\Concerns\FromCollection;

class UserrExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Userr::all();
    }
}