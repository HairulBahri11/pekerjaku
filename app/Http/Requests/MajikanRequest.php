<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MajikanRequest extends FormRequest
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
			'alamat' => 'required|string',
			'biaya_pendaftaran' => 'required|string',
			'bukti_pembayaran' => 'required|string',
			'status' => 'required',
        ];
    }
}
