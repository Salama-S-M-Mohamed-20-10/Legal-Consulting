<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OutUserRequest extends FormRequest
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
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique',
            'phone' => 'required|max:100|unique',
            'gender' => 'required',
            'date' => 'required',
            'password' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'هذا الحقل مطلوب',
            'name.string' => 'الاسم لابد ان يكون أحرف',
            'email.email' => 'الايميل لابد ان يكون ايميل صحيح',
            'max' => 'هذا الحقل لابد الا يزيد عن 100 حرف'
        ];
    }
}
