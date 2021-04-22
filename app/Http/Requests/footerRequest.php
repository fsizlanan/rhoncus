<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class footerRequest extends FormRequest
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
            'facebook'=> 'required',
            'twitter'=> 'required',
            'pinterest'=> 'required',
            'googleplus'=> 'required',
            'instagram'=> 'required',
            'footertext'=> 'required',
            
        ];
    }

    public function messages()
    {
        return [
            'facebook.required' => 'Lütfen boş bırakmayın',
            'twitter.required' => 'Lütfen boş bırakmayın',
            'pinterest.required' => 'Lütfen boş bırakmayın',
            'googleplus.required' => 'Lütfen boş bırakmayın',
            'instagram.required' => 'Lütfen boş bırakmayın',
            'footertext.required' => 'Lütfen boş bırakmayın',
            
        ];
    }
}
