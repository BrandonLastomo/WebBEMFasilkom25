<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AcaraRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $id = (int) $this->get('id');
        $bulan = 'required';
        $tanggal = 'required';

        if ($this->method() == 'PUT') {
            $nama = 'required:acara,nama,' . $id;
            $bulan = 'required';
            $tanggal = 'required';
        } else {
            $nama = 'required:acara,nama';
        }

        return [
            'nama' => $nama,
            'bulan' => $bulan,
            'tanggal' => $tanggal,
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'nama.required' => 'Nama acara harus diisi.',
            'bulan.required' => 'Bulan harus diisi.',
            'tanggal.required' => 'Tanggal harus diisi.',
        ];
    }
}
