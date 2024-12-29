<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TurnamenRequest extends FormRequest
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
        $deskripsi = '';
        $image = 'max:2048';

        if ($this->method() == 'PUT') {
            $nama = 'required|unique:turnamen,nama,' . $id;
            $slug = 'unique:turnamen,slug,' . $id;
        } else {
            $nama = 'required|unique:turnamen,nama';
            $slug = 'unique:turnamen,slug';
        }

        return [
            'nama' => $nama,
            'slug' => $slug,
            'deskripsi' => $deskripsi,
            'image' => $image,
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
