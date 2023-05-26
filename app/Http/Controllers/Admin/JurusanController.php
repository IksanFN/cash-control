<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Jurusan\Store;
use App\Http\Requests\Admin\Jurusan\Update;
use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index()
    {
        $listJurusan = Jurusan::latest()->paginate(5);
        $nomor = 1;
        return view('admin.jurusan.index', compact('listJurusan', 'nomor'));
    }

    public function edit(Jurusan $jurusan)
    {
        $oneJurusan = Jurusan::whereId($jurusan->id)->first();
        return view('admin.jurusan.edit', compact('oneJurusan'));
    }

    public function store(Store $request)
    {
        // Save request to variabel
        $data = $request->except('_token');
        
        // Insert database
        $jurusan = Jurusan::create($data);

        session()->flash('Berhasil', 'Data berhasil di tambahkan');
        return back();
    }

    public function update(Update $request, Jurusan $jurusan)
    {
        // Hidden token
        $data = $request->except('_token');

        // Save to database
        $jurusan->update($data);

        // Flash message
        session()->flash('Berhasil', 'Data berhasil di update');

        return redirect()->route('admin.jurusan.index');
    }

    public function destroy(Jurusan $jurusan)
    {
        // Delete data
        $jurusan->delete();

        // Flash message
        session()->flash('Berhasil', 'Data berhasil di hapus');

        return back();
    }
}
