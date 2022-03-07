<?php

namespace App\Imports;

use App\Models\Outlet;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class OutletImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        //dd($row);
        return new Outlet([
            'nama'      =>  $row['nama'], 
            'alamat'    => $row['alamat'],
            'tlp'    => $row['tlp'],
        ]);
    }

    public function headingRow(): int
    {
        return 3;
    }
}
