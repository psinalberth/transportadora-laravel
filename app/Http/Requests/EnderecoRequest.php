<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EnderecoRequest extends Request {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            
            'cep' => 'required',
            'logradouro' => 'required',
            'uf' => 'required',
            'cidade' => 'required',
            'bairro' => 'required'
        ];
    }
}
