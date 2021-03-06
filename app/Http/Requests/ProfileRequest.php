<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'name' =>  'required',
            'email' => 'email|required',
            'oldpassword' => 'required',
            'newpassword' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => trans('required'),
            'email.required' => trans('required'),
            'oldpassword.required' => trans('required'),
            'newpassword.required' => trans('required'),
        ];
    }
}
