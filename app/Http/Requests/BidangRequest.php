<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BidangRequest extends FormRequest
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

        if ($this->method() == 'PUT') {
            $nama = 'required|unique:bidang,nama,' . $id;
            $slug = 'unique:bidang,slug,' . $id;
        } else {
            $nama = 'required|unique:bidang,nama';
            $slug = 'unique:bidang,slug';
        }

        return [
            'nama' => $nama,
            'slug' => $slug
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
            'nama.required' => 'Nama Bidang harus diisi.',
            'nama.unique' => 'Nama Bidang sudah ada.'
        ];
    }
}
