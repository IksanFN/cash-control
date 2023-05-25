<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kelas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Kelas\Store;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listKelas = Kelas::latest()->paginate(5);
        $nomor = 1;
        return view('admin.kelas.index', compact('listKelas', 'nomor'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Store $request)
    {
        // Save request to variabel data
        $data = $request->only('name', 'description');

        // Insert to database
        $kelas = Kelas::create($data);

        // Condition
        if ($kelas) {
            return back()->with(['Berhasil' => 'Data kelas baru berhasil di tambahkan']);
        } else {
            return back()->withErrors(['Gagal' => 'Terjadi kesalahan'])->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kelas $kelas)
    {
        $oneKelas = Kelas::whereId($kelas->id)->first();
        return view('admin.kelas.edit', compact('oneKelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kelas $kelas)
    {
        $data = $request->except('_token');
        $kelas->update($data);
        return redirect()->route('admin.kelas.index')->with(['Berhasil' => 'Data berhasil di update']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kelas $kelas)
    {
        $kelas->delete();
        return redirect()->route('admin.kelas.index')->with(['Berhasil', 'Data berhasil di hapus']);
    }
}
