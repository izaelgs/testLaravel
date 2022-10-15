<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ColaboradorRequest extends FormRequest
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
            'nome_completo' => 'required',
            'email' => 'required',
            'endereco' => 'required',
            'telefone' => 'required',
            'email_profissional' => 'required',
            'responsavel' => 'required',
            'forma_integracao' => 'required',
        ];
    }
}
