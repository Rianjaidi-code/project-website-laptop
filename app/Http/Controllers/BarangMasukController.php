<?php

namespace App\Http\Controllers;

use App\Models\Transaksi as TransaksiData;
use App\Models\LaptopData;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BarangMasukController extends Controller
{
    public function create()
    {
        $query = LaptopData::query();

        // Filter by 'status' input
        $query->where('status', 'out');

        // Filter by 'search' input
        if (request()->has('search')) {
            $searchTerm = request('search');
            $query->where('model', 'like', '%' . $searchTerm . '%');
        }

        // Add order by 'id'
        $query->orderBy('id', 'desc');

        // Get all the results without pagination
        $barangMasuks = $query->get();

        return view('pages.barang_masuk.create', compact('barangMasuks'));
    }

    public function index()
    {
        $query = TransaksiData::query();

        // Filter by 'status' being either 'in' or 'return'
        $query->whereIn('status', ['in', 'return']);

        // Filter by 'search' input
        if (request()->has('search')) {
            $searchTerm = request('search');
            $query->where(function ($q) use ($searchTerm) {
                $q->where('status', 'like', '%' . $searchTerm . '%');
            });
        }

        // Add order by 'id'
        $query->orderBy('id', 'desc');

        // Paginate the results
        $barangMasuks = $query->paginate(10);

        return view('pages.barang_masuk.index', compact('barangMasuks'));
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        $transaksi = new TransaksiData();
        $transaksi->user_id = $user->id;
        $transaksi->laptop_id = $request->input('laptop_id');
        $transaksi->status = $request->input('status');
        $transaksi->location = $request->input('location');
        $transaksi->position = $request->input('position');
        $transaksi->keterangan = $request->input('keterangan');
        $transaksi->save();

        // Jika transaksi adalah pindah atau return, update lokasi barang
        if (in_array($request->input('status'), ['in', 'return'])) {
            $barang = LaptopData::find($request->input('laptop_id'));
            $barang->status = $request->input('status');
            $barang->location = $request->input('location');
            $barang->position = $request->input('position');
            $barang->in_date = Carbon::now()->toDateString();
            $barang->save();
        }

        return redirect()->route('barang-masuk.index')->with('success', 'Data barang masuk berhasil ditambahkan.');
    }
}
