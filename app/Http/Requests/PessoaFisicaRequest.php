<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PessoaFisicaRequest extends FormRequest
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
        return [
            'tipo_empresa'=> 'required',
            'telefone'=> 'required',
            'contato'=> 'required',
            'nome_contato'=> 'required',
            'endereco'=> 'required',
            'email'=> 'required',
        ];
    }
}
