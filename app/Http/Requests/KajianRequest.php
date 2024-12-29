<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KajianRequest extends FormRequest
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

        if ($this->method() == 'PUT') {
            $nama = 'required|unique:report,nama,' . $id;
            $slug = 'unique:report,slug,' . $id;
        } else {
            $nama = 'required|unique:report,nama';
            $slug = 'unique:report,slug';
        }

        return [
            'nama' => $nama,
            'slug' => $slug,
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
            'image.max' => 'Ukuran maksimum file harus 2MB.',
            'image.image' => 'File harus berupa gambar.',
        ];
    }
}
