<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\Store;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(5);
        $nomor = 1;
        return view('admin.user.index', compact('users', 'nomor'));
    }

    public function store(Store $request)
    {
        // Save request to variabel & Hidden token
        $data = $request->except('_token');

        // $image = $request->hasFile('avatar');
        // $image->storeAs('')

        // Save to database
        $user = User::create($data);

        // Check condition
        if ($user) {
            // Success
            session()->flash('Berhasil', 'Data user berhasil di tambahkan');
            return back();
        } else {
            // Failed
            session()->flash('Gagal', 'Data user gagal di tambahkan');
            return back();
        }
    }
}
