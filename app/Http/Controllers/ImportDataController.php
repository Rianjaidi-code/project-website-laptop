<?php

namespace App\Http\Controllers;

use App\Imports\LaptopDataImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportDataController extends Controller
{
    public function index()
    {
        return view('pages.laptop_data.import');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        Excel::import(new LaptopDataImport(), $request->file('file'));
        return redirect()->route('data-laptop.index')->with('success', 'Import data success');
    }
}
