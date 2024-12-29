<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PengurusRequest extends FormRequest
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
        $bidang = '';
        $npm = 'required';
        $departemen = '';
        $jabatan = '';
        $npm = 'required';
        $no_hp = 'required';

        if ($this->method() == 'PUT') {
            $nama = 'required:pengurus,nama,' . $id;
            $jabatan = 'required';
            $npm = 'required';
            $no_hp = 'required';
        } else {
            $nama = 'required:pengurus,nama';
        }

        return [
            'nama' => $nama,
            'jabatan' => $jabatan,
            'id_bidang' => $bidang,
            'id_departemen' => $departemen,
            'npm' => $npm,
            'no_hp' => $no_hp,
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
            'nama.required' => 'Nama harus diisi.',
            'npm.required' => 'Npm harus diisi.',
            'no_hp.required' => 'No. Telepon harus diisi.'
        ];
    }
}
