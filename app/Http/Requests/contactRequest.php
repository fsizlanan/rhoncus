<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class contactRequest extends FormRequest
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
            'ContactHead' => 'required',
            'ContactHeadText' => 'required',
            'ContactAdressHead' => 'required',
            'ContactAdressHeadSub' => 'required',
            'ContactTelHead' => 'required',
            'ContactTelHeadSub' => 'required',
            'ContactMailHead' => 'required',
            'ContactMailHeadSub' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'ContactHead.required' => 'Bu alan boş bırakılamaz',
            'ContactHeadText.required' => 'Bu alan boş bırakılamaz',
            'ContactAdressHead.required' => 'Bu alan boş bırakılamaz',
            'ContactAdressHeadSub.required' => 'Bu alan boş bırakılamaz',
            'ContactTelHead.required' => 'Bu alan boş bırakılamaz',
            'ContactTelHeadSub.required' => 'Bu alan boş bırakılamaz',
            'ContactMailHead.required' => 'Bu alan boş bırakılamaz',
            'ContactMailHeadSub.required' => 'Bu alan boş bırakılamaz',
        ];
    }
}
