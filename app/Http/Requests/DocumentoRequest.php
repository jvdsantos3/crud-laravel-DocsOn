<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DocumentoRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'titulo' => ['required', 'min:3'],
            'nome_arquivo' => ['required', 'min:3'],
            'tipo_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'titulo.required' => 'O campo título é obrigatório.',
            'titulo.min' => 'O campo título precisa de no mínimo :min caracteres.',
            'nome_arquivo.required' => 'O campo nome arquivo é obrigatório.',
            'nome_arquivo.min' => 'O campo nome arquivo precisa de no mínimo :min caracteres.',
            'tipo_id.required' => 'O campo tipo de documento é obrigatório.'
        ];
    }
}
