<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProposalRequest extends FormRequest
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
        $jenis = 'required';
        $path = '';

        if ($this->method() == 'PUT') {
            $judul = 'required|unique:proposal,judul,' . $id;
            $slug = 'unique:proposal,slug,' . $id;
        } else {
            $judul = 'required|unique:proposal,judul';
            $slug = 'unique:proposal,slug';
        }

        return [
            'judul' => $judul,
            'slug' => $slug,
            'jenis' => $jenis,
            'path' => $path,
        ];
    }
}
