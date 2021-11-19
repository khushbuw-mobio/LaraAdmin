<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class changePassword extends FormRequest
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
            'oldpassword'=>'min|6',
            'password' => 'min:6',
            'confirmpassword' => 'required_with:password|same:password|min:6'
        ];
    }
}
