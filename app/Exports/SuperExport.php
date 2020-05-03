<?php

namespace App\Exports;

use App\Sensor;
use Maatwebsite\Excel\Concerns\FromCollection;

class SuperExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Sensor::all();
    }
}
