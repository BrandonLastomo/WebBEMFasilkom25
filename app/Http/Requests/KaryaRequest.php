<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KaryaRequest extends FormRequest
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
        $deskripsi = 'required';
        $nama = 'required';
        $kelas = 'required';
        $prodi = 'required';
        $image = 'image|mimes:jpeg,png,jpg,gif|max:4096';

        if ($this->method() == 'PUT') {
            $judul = 'required|unique:karya,judul,' . $id;
            $slug = 'unique:karya,slug,' . $id;
            $deskripsi = 'required';
            $nama = 'required';
            $kelas = 'required';
            $prodi = 'required';
        } else {
            $judul = 'required|unique:karya,judul';
            $slug = 'unique:karya,slug';
        }

        return [
            'judul' => $judul,
            'slug' => $slug,
            'image' => $image,
            'deskripsi' => $deskripsi,
            'nama' => $nama,
            'kelas' => $kelas,
            'prodi' => $prodi,
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
            'image.max' => 'Ukuran maksimum file harus 4MB.',
            'image.image' => 'File harus berupa gambar.',
        ];
    }
}
