<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cast;

class CastController extends Controller
{
    public function index()
    {
        $casts = Cast::all();
        return view('cast.index', compact ('casts'));
    }

    public function create()
    {
        return view('cast.create');
    }

    public function store(Request $request)
    {
        // Menambahkan data ke dalam tabel
        $storedData =  $request -> validate([
            'nama' => 'required|string|max:225',
            'umur' => 'required|integer',
            'bio' => 'required|string',
        ]);

        try {
            Cast::create($storedData);
            return redirect()->route('index')->with('success', 'Cast Berhasil Ditambahkan');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal Menambahkan Cast');
        }
    }

    public function show($id)
    {
        //menampilkan detail pemain berdasarkan id tertentu
        $cast = Cast::findOrFail($id);
        return view('cast.detail',compact('cast'));
    }

    public function edit($id)
    {
        //menampilkan form edit dengan id tertentu
        $cast = Cast::findOrFail($id);
        return view('cast.edit',compact('cast'));
    }

    public function update(Request $request, $id)
    {
        //melakukan update
        $cast = Cast::findOrFail($id);

        $updatedData =  $request -> validate([
            'nama' => 'required|string|max:225',
            'umur' => 'required|integer',
            'bio' => 'required|string',
        ]);

        $cast = Cast::findOrFail($id);

        $cast -> update([
            'nama' => $updatedData['nama'],
            'umur' => $updatedData['umur'],
            'bio' => $updatedData['bio'],
        ]);

        return redirect()->route('index')->with('success', 'Cast berhasil diubah');
    }

    public function destroy($id)
    {
        //menghapus
        $cast = Cast::findOrFail($id);

        if($cast) {
            $cast->delete();
            return response()->json(['success' => 'Cast berhasil dihapus']);
        }else {
            return response()->json(['error' => 'Cast tidak ditemukan'],404);
        }
    }
}
