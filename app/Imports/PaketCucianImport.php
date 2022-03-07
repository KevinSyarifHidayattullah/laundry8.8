<?php

namespace App\Imports;

use App\Models\paketCucian;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PaketCucianImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        //dd($row);
        return new PaketCucian([
            'id_outlet'      => auth()->user()->id_outlet,
            'jenis'    => $row['jenis'],
            'nama_paket'    => $row['nama_paket'],
            'harga'    => $row['harga'],
        ]);
    }

    public function headingRow(): int
    {
        return 3;
    }
}
