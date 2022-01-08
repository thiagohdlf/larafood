<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class salvaAtualizaPermissao extends FormRequest
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
        $url = $this->segment(3);
        return [

            'nome' => 'required|min:3|max:100',
            'descricao' => 'nullable|min:5|max:150',

        ];
    }
}
