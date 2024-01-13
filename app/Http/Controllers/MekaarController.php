<?php

namespace App\Http\Controllers;

use App\Models\Mekaar;
use Illuminate\Http\Request;
use App\Imports\ImportExcelMekaar;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class MekaarController extends Controller
{
    public function importExcel(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xls,xlsx',
        ]);

        $file = $request->file('file');

        Excel::import(new ImportExcelMekaar, $file);

        return redirect()->back()->with('success', 'Excel data imported successfully');
    }

    public function index(Request $request){
        if(!empty($request->unit)){
            $record = Mekaar::where('cabang', $request->unit)->get();
        }elseif(!empty($request->area)){
            $record = Mekaar::where('area', $request->area)->get();
        }elseif(!empty($request->region)){
            $record = Mekaar::where('region', $request->region)->get();
        }elseif(!empty($request->region_all)){
            if($request->region_all == 'Cabang Denpasar'){
                $record = Mekaar::all();
            }
        }else{
            $record = null;
        }
        return view('index', compact('record', 'request'));
    }

    public function import(){
        return view('welcome');
    }

    public function truncate(){
        try {
            DB::table('trans_mekaar')->truncate();

            return redirect()->back()->with('success', 'Table truncated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while truncating the table.');
        }
    }

    public function pilihArea(Request $request){
        $selectedRegion = $request->region;
        $areas = Mekaar::select('area')
                       ->where('region', $selectedRegion)
                       ->groupBy('area')
                       ->get();

        return view('ajax.area', compact('areas'));
    }

    public function pilihUnit(Request $request){
        $selectedArea = $request->area;
        $units = Mekaar::select('cabang')
                       ->where('area', $selectedArea)
                       ->groupBy('cabang')
                       ->get();

        return view('ajax.unit', compact('units'));
    }

    public function pilihRegion(Request $request){
        $selectedArea = $request->area;
        $region = Mekaar::select('region')
                       ->groupBy('region')
                       ->get();

        return view('ajax.region', compact('region'));
    }
}
