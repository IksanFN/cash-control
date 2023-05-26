<?php

namespace App\Http\Requests\Admin\Jurusan;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class Update extends FormRequest
{
    public function authorize(): bool
    {
        return Auth::check() && Auth::user()->role == 'admin';
    }

    public function rules(): array
    {
        return [
            'name' => 'required',
            'jurusan_code' => 'required|unique:jurusans,jurusan_code,'.$this->jurusan->id.',id',
            'description' => 'nullable',
        ];
    }
}
