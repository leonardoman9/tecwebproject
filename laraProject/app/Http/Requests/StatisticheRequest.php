<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StatisticheRequest extends FormRequest {

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
            
            'statistica' => 'required|string',
            'scelta' => 'required|string',
            'data_inizio' => 'required|date',
            'data_fine' => 'required|date',
            
         
        ];
    }
    
}
