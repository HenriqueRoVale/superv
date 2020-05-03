<?php

namespace App\Imports;

use App\Sensor;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SuperImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Sensor([
            'id' => $row['id'],
            'tempAmb'  => $row['tempAmb'], 
            'tempEsp' => $row['tempEsp'],
            'pf1' => $row['pf1'],
            'pf2' => $row['pf2'],
            'pPedal' => $row['pPedal'],
        ]);
    }
}
