<?php

namespace App\Export;

use App\Models\Member;
use Maatwebsite\Excel\Concerns\FromCollection;

class MemberExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Member::all();
    }
}
