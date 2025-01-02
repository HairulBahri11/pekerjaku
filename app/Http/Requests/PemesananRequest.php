<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PemesananRequest extends FormRequest
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
			'jenis_pekerjaan' => 'required|string',
			'jumlah' => 'required',
			'durasi' => 'required|string',
			'lokasi' => 'required|string',
			'tgl_mulai' => 'required',
			'jam_kerja' => 'required|string',
			'upah' => 'required|string',
			'deskripsi_pekerjaan' => 'required|string',
			'kualifikasi' => 'required|string',
			'keterampilan' => 'required|string',
			'bahasa' => 'required|string',
        ];
    }
}
