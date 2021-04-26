<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class menuRequest extends FormRequest
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
            
            'MenuName' => 'required',
        //    'MenuPrice' => 'required',
            'MenuContact' => 'required',
       //     'image' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'MenuName.required' => 'Boş bırakılamaz',
        //    'MenuPrice.required' => 'Boş bırakılamaz',
            'MenuContact.required' => 'Boş bırakılamaz',
        //    'image.required' => 'Boş bırakılamaz'

        ];
    }
}
