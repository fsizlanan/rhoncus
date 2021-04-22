<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class aboutRequest extends FormRequest
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
            'aboutHead' => 'required',
            'aboutSubHead' => 'required',
            'aboutTextArea' => 'required',
            'specialSubHead' => 'required',
            'special11' => 'required',
            'special12' => 'required',
            'special1About' => 'required',
            'special1Price' => 'required',
            'special21' => 'required',
            'special22' => 'required',
            'special2About' => 'required',
            'special2Price' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'aboutHead.required' => 'Bu alan boş bırakılamaz',
            'aboutSubHead.required' => 'Bu alan boş bırakılamaz',
            'aboutTextArea.required' => 'Bu alan boş bırakılamaz',
            'specialSubHead.required' => 'Bu alan boş bırakılamaz',
            'special11.required' => 'Bu alan boş bırakılamaz',
            'special12.required' => 'Bu alan boş bırakılamaz',
            'special1About.required' => 'Bu alan boş bırakılamaz',
            'special1Price.required' => 'Bu alan boş bırakılamaz',
            'special21.required' => 'Bu alan boş bırakılamaz',
            'special22.required' => 'Bu alan boş bırakılamaz',
            'special2About.required' => 'Bu alan boş bırakılamaz',
            'special2Price.required' => 'Bu alan boş bırakılamaz',
        ];
    }
}
