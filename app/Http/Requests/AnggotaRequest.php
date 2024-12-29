<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnggotaRequest extends FormRequest
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
        $npm = 'numeric';
        $prodi = 'required';
        $tahun_masuk = 'required';
        $status = 'required';

        if ($this->method() == 'PUT') {
            $nama = 'required:anggota,nama,' . $id;
            $prodi = 'required';
            $tahun_masuk = 'required';
            $npm = 'numeric';
            $status = 'required';
        } else {
            $nama = 'required:anggota,nama';
        }

        return [
            'nama' => $nama,
            'tahun_masuk' => $tahun_masuk,
            'prodi' => $prodi,
            'npm' => $npm,
            'status' => $status,
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
            'npm.numeric' => 'Npm harus berupa angka.',
            'prodi.required' => 'Program Studi harus diisi.',
            'tahun_masuk.required' => 'Tahun Masuk harus diisi.',
            'status.required' => 'Status harus diisi.',
        ];
    }
}
