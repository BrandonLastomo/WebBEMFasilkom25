<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DepartemenRequest extends FormRequest
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
        $id_bidang = (int) $this->get('id_bidang');
        $deskripsi = '';

        if ($this->method() == 'PUT') {
            $nama = 'required|unique:departemen,nama,' . $id;
            $bidang = 'required:departemen,id_bidang,' . $id_bidang;
            $slug = 'unique:departemen,slug,' . $id;
            $deskripsi = 'required';
        } else {
            $nama = 'required:departemen,nama';
            $bidang = 'required:departemen,id_bidang';
            $slug = 'unique:departemen,slug';
        }

        return [
            'nama' => $nama,
            'slug' => $slug,
            'id_bidang' => $bidang,
            'deskripsi' => $deskripsi,
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
            'id_bidang.required' => 'Bidang harus diisi.'
        ];
    }
}
