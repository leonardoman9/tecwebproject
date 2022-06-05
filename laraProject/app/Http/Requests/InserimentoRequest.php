<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Symfony\Component\HttpFoundation\Response;
class InserimentoRequest extends FormRequest
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
                'tipologia' => 'required|string|max:20',
                'canone' => 'required|integer|min:0',
                'dimensione' => 'required|integer|min:0',
                'citta' => 'required|string|max:30',
                'indirizzo' => 'required|string',
                
                'data_inizio_locazione' => 'required|date',
                'data_fine_locazione' => 'required|date',
                'numero_camere' => 'required|integer|min:0',
                'numero_posti_letto_totale' => 'required|integer|min:0',
                'numero_letti_nella_camera' => 'required|integer|min:0',
                'descrizione' => 'required|string',
                'image' => 'nullable',
        ];
    }
    
}
