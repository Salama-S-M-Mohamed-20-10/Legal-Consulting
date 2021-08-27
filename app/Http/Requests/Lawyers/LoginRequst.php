<?php

namespace App\Http\Requests\Lawyers;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequst extends FormRequest
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

    public function messages()
    {
        return [
            'required' => 'هذا الحقل لابد الا يكون فارغ',
            'email.email' => 'الايميل لابد ان يكون ايميل صحيح',
        ];
    }
}
