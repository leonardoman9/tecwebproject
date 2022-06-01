<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Ricerca extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(){
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
                'citta' => 'nullable|string|max:30',
                'dimensionemax' => 'nullable|integer|min:0',
                'dimensionemin' => 'nullable|integer|min:0',
                'prezzomax' => 'nullable|integer|min:0',
                'prezzomin' => 'nullable|integer|min:0',
                'numerocamere' => 'nullable|integer|min:0',
                'numeropostiletto' => 'nullable|integer|min:0',
                'lettinellacamera' => 'nullable|integer|min:0',
                'tipologia' => 'nullable|integer|min:0',
        ];
    }
}
