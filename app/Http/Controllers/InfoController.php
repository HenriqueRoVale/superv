<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\SuperImport;
use App\Exports\SuperExport;
use App\Sensor;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use Khill\Lavacharts\DataTables\Rows\Row;
use Khill\Lavacharts\Lavacharts;

class InfoController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function importExportView()
    {
       return view('import');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function export() 
    {
        return Excel::download(new SuperExport, 'sensor.xlsx');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        Excel::import(new SuperImport,request()->file('file'));
        
        return back();
    }
    public function showDB()
    {
        //$dados1 = Sensor::get();
        //$graf = new Lavacharts();
        $valor = \Lava::DataTable();
        $valores = Sensor::select('tempAmb')->get();
        $valor->addStringColumn('X')
             ->addNumberColumn('Y')
             ->getRows(['Amb', $valores]);
             \Lava::LineChart('teste', $valor,['title' =>'vaidarbom']);
        print_r($valores);
        return view('freios');
        

    
    }
}
