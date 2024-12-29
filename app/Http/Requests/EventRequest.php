<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
        $konten = 'required';
        $tanggal = 'required';
        $image = 'image|mimes:jpeg,png,jpg,gif|max:2048';

        if ($this->method() == 'PUT') {
            $judul = 'required|unique:event,judul,' . $id;
            $slug = 'unique:event,slug,' . $id;
            $konten = 'required';
            $tanggal = 'required';
        } else {
            $judul = 'required|unique:event,judul';
            $slug = 'unique:event,slug';
        }

        return [
            'judul' => $judul,
            'slug' => $slug,
            'konten' => $konten,
            'tanggal' => $tanggal,
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
