<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminLogin_Request extends FormRequest
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

                'email' => 'required|email',
                'password' => 'required'

        ];
    }

    public function messages() {

        return [
            'email.required' => 'Email Is Required',
            'email.email' => 'Must Be in Email Format',
            'password.required' => 'Password Is Required',
        ];

    }
}
