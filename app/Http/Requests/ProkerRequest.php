<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProkerRequest extends FormRequest
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
        $departemen = 'required';
        $deskripsi = 'required';
        $penanggung_jawab = 'required';
        $anggaran = 'numeric';
        $status = 'required';
        $triwulan = 'required';

        if ($this->method() == 'PUT') {
            $nama_proker = 'required|unique:proker,nama_proker,' . $id;
            $slug = 'unique:proker,slug,' . $id;
            $departemen = 'required';
            $deskripsi = 'required';
            $penanggung_jawab = 'required';
            $anggaran = 'numeric';
            $status = 'required';
            $triwulan = 'required';
        } else {
            $nama_proker = 'required|unique:proker,nama_proker';
            $slug = 'unique:proker,slug';
        }

        return [
            'id_departemen' => $departemen,
            'nama_proker' => $nama_proker,
            'slug' => $slug,
            'deskripsi' => $deskripsi,
            'penanggung_jawab' => $penanggung_jawab,
            'anggaran' => $anggaran,
            'status' => $status,
            'triwulan' => $triwulan,
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
            'anggaran.required' => 'Anggaran harus diisi.',
            'anggaran.numeric' => 'Anggaran harus berupa angka.',
        ];
    }
}
