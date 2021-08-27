<?php

namespace App\Http\Requests\Lawyers;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLawyerProfileRequest extends FormRequest
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
            'firstName' => 'required|max:100',
            'lastName' => 'required|max:100',
            'email' => 'required|email|unique:lawyers,email,' . $this -> id,
            'phone' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'required' => 'هذا الحقل مطلوب',
            'firstName.max' => 'الاسم الاول لابد الا يزيد عن 100 حرف',
            'lastName.max' => 'الاسم الاخر لابد الا يزيد عن 100 حرف',
            'email.email' => 'الايميل لابد ان يكون ايميل صحيح',
            'email.unique' => 'يجب ادخال ايميل ليس متكرر'
        ];
    }
}
