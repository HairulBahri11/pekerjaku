<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PekerjaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'total_pengalaman' => 'required|string',
			'pendidikan_terakhir' => 'required|string',
			'gaji_bulanan' => 'required',
			'tgl_lahir' => 'required',
			'agama' => 'required|string',
			'deskripsi' => 'required|string',
			'tinggi' => 'required',
			'berat' => 'required',
			'suku' => 'required|string',
			'status' => 'required',
			'status_pribadi' => 'required',
			'status_active' => 'required',
        ];
    }
}
