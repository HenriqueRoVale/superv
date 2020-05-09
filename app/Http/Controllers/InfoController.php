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
        //$lava = new Lavacharts();
        //$valor = $lava->DataTable();
        $valor = \Lava::DataTable();
        $valores = Sensor::select('tempAmb')->get();
        // foreach($valores as $amb ){
        //     $count[] = count($amb);
        // } 
        //for($i=0; $i < $count; $i++){}
        $valor->addStringColumn('X')
             ->addNumberColumn('Y');
            //  ->addRow([$valores, $amb]);
        $teste = \Lava::LineChart('teste', $valor,['title' =>'vaidarbom']);
        // print_r($valores);
        //echo ($valores);
        return view('freios');
            
        
        
        

    
    }
}
