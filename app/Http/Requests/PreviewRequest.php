<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PreviewRequest extends FormRequest
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
        $bidang = 'required';
        $tim = 'required';

        if ($this->method() == 'PUT') {
            $judul = 'required|unique:preview,judul,' . $id;
            $slug = 'unique:preview,slug,' . $id;
            $bidang = 'required';
            $tim = 'required';
        } else {
            $judul = 'required|unique:preview,judul';
            $slug = 'unique:preview,slug';
        }

        return [
            'judul' => $judul,
            'slug' => $slug,
            'bidang' => $bidang,
            'tim' => $tim,
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
