<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest {

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
            'nome' => 'nullable|string|max:30',
            'cognome' => 'nullable|string|max:30',
            'genere' => 'nullable|string|max:30',
            'eta' => 'nullable|numeric|max:100|min:18',
            'password' => 'nullable|string|min:8',
        ];
    }

}
