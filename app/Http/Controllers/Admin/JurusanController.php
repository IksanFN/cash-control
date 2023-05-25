<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
}
