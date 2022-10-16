<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DataRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // public function authorize()
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama_lengkap' => 'required',
            'alamat_domisili' => 'required',
            'hari' => 'required',
            'jenis_kelamin' => 'required',
            'pendidikan_terakhir' => 'required',
            'jurusan' => 'required',
        ];
    }
}
