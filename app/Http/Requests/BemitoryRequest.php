<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class BemitoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $id = (int) $this->get('id');
        $kode_barang = '';
        $barang = '';
        $jumlah = '';
        $status_barang = 'required';

        if ($this->method() == 'PUT') {
            $status_barang = 'required';
        } else {
        }

        return [
            'kode_barang' => $kode_barang,
            'barang' => $barang,
            'jumlah' => $jumlah,
            'status_barang' => $status_barang,
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
            'image.max' => 'Ukuran maksimum file harus 2MB.',
            'image.image' => 'File harus berupa gambar.',
        ];
    }
}
