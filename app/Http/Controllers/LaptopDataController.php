<?php

namespace App\Http\Controllers;

use App\Models\LaptopData;
use Illuminate\Http\Request;

class LaptopDataController extends Controller
{
    //pindah halaman
    public function create()
    {
        return view('pages.laptop_data.create');
    }

    //index
    public function index()
    {
        $query = LaptopData::query();

        // Filter by 'search' input
        if (request()->has('search')) {
            $searchTerm = request('search');
            $query->where(function ($q) use ($searchTerm) {
                $q->where('no_sample', 'like', '%' . $searchTerm . '%')
                    ->orWhere('model', 'like', '%' . $searchTerm . '%')
                    ->orWhere('processor', 'like', '%' . $searchTerm . '%')
                    ->orWhere('screen_size', 'like', '%' . $searchTerm . '%');
            });
        }

        // Add order by 'id'
        $query->orderBy('id', 'desc');

        // Paginate the results
        $dataLaptops = $query->paginate(10);

        return view('pages.laptop_data.index', compact('dataLaptops'));
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'id_category' => 'required',
        // ]);

        LaptopData::create([
            'user_id' => $request->user()->id,
            'no_sample' => $request->no_sample,
            'id_category' => $request->id_category,
            'model' => $request->model,
            'serial_number' => $request->serial_number,
            'screen_size' => $request->screen_size,
            'processor' => $request->processor,
            'storage_1' => $request->storage_1,
            'size_1' => $request->size_1,
            'storage_2' => $request->storage_2,
            'size_2' => $request->size_2,
            'ram' => $request->ram,
            'graphic_1' => $request->graphic_1,
            'graphic_2' => $request->graphic_2,
            'mac_address' => $request->mac_address,
            'wlan_or_bt_module' => $request->wlan_or_bt_module,
            'modem' => $request->modem,
            'colour' => $request->colour,
            'OS' => $request->OS,
            'install_os_date' => $request->install_os_date,
            'charger' => $request->charger,
            'condition_notes' => $request->condition_notes,
            'date_check' => $request->date_check,
            'location' => $request->location,
            'position' => $request->position,
            'expedision' => $request->expedision,
            'in_date' => $request->in_date,
            'status' => $request->status,
            // 'additional_info' => $request->additional_info,
        ]);

        return redirect()->route('data-laptop.index')->with('success', 'Laptop Data created successfully.');
    }

    public function destroy($id)
    {
        $dataLaptop = LaptopData::find($id);
        $dataLaptop->delete();
        return redirect()->route('data-laptop.index')->with('success', 'Laptop Data deleted successfully.');
    }

    public function show($id)
    {
        $dataLaptop = LaptopData::find($id);
        return view('pages.laptop_data.show', compact('dataLaptop'));
    }

    public function edit($id)
    {
        $dataLaptop = LaptopData::find($id);
        return view('pages.laptop_data.edit', compact('dataLaptop'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'no_sample' => 'required',
            'id_category' => 'required',
            'model' => 'required',
        ]);

        $dataLaptop = LaptopData::find($id);
        $dataLaptop->update([
            'user_id' => $request->user()->id,
            'no_sample' => $request->no_sample,
            'id_category' => $request->id_category,
            'model' => $request->model,
            'serial_number' => $request->serial_number,
            'screen_size' => $request->screen_size,
            'processor' => $request->processor,
            'storage_1' => $request->storage_1,
            'size_1' => $request->size_1,
            'storage_2' => $request->storage_2,
            'size_2' => $request->size_2,
            'ram' => $request->ram,
            'graphic_1' => $request->graphic_1,
            'graphic_2' => $request->graphic_2,
            'mac_address' => $request->mac_address,
            'wlan_or_bt_module' => $request->wlan_or_bt_module,
            'modem' => $request->modem,
            'colour' => $request->colour,
            'OS' => $request->OS,
            'install_os_date' => $request->install_os_date,
            'charger' => $request->charger,
            'condition_notes' => $request->condition_notes,
            'date_check' => $request->date_check,
            'location' => $request->location,
            'position' => $request->position,
            'expedision' => $request->expedision,
            'out_date' => $request->out_date,
            'status' => $request->status,
            'additional_info' => $request->additional_info,
        ]);
        return redirect()->route('data-laptop.index')->with('success', 'Laptop Data updated successfully.');
    }
}
