<?php

namespace App\Http\Requests;

use App\Rules\MatchOldPassword;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class ProfilRequest extends FormRequest
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
        $name = ['required:users', 'name' . $id];
        $npm = ['required'];
        $prodi = ['required'];
        $tahun_masuk = ['required'];
        $current_password = ['required', new MatchOldPassword];
        $new_password = ['required', 'confirmed', Rules\Password::defaults()];

        return [
            'name' => $name,
            'npm' => $npm,
            'prodi' => $prodi,
            'tahun_masuk' => $tahun_masuk,
            'current_password' => $current_password,
            'new_password' => $new_password,
        ];
    }
}
