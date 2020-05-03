<?php

namespace App\Imports;

use App\Sensor;
use Maatwebsite\Excel\Concerns\ToModel;

class SuperImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        
    if($row[0] != ''){
        return new Sensor([
            //'id' => $row[0] => Não faz muito sentido inserir o id, então cuidado
            'tempAmb'  => $row[1], 
            'tempEsp' => $row[2],
            'pf1' => $row[3],
            'pf2' => $row[4],
            'pPedal' => $row[5],
        ]);
    }           
    }
}
