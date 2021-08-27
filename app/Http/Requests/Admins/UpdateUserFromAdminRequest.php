<?php

namespace App\Http\Requests\Admins;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserFromAdminRequest extends FormRequest
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
            'name' => 'required|max:100',
            'email' => 'required|email|unique:users,email,' . $this -> id,
            'phone' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'هذا الحقل مطلوب',
            'name.max' => 'الاسم لابد الا يزيد عن 100 حرف',
            'email.email' => 'الايميل لابد ان يكون ايميل صحيح',
            'email.unique' => 'يجب ادخال ايميل ليس متكرر'
        ];
    }
}
