<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class ClientCreateRequest extends FormRequest
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
            'dob' => ['required', 'string'],
            'brief' => ['required', 'string'],
            'gender' => ['required', 'string'],
            'skills' => ['required', 'string'],
            'occupation' => ['required', 'string'],
            'lastname' => ['required', 'string', 'max:50'],
            'othernames' => ['required', 'string', 'max:100'],
            'address' => ['required', 'string', 'max:2000'],
            'phone' => ['required', 'numeric', 'digits_between:11,20', 'unique:users,phone'],
            'username' => ['required', 'string', 'min:5', 'max:25', 'unique:users,username'],
            'email' => ['required', 'string', 'min:4', 'e-mail', 'max:255', 'unique:users,email'],
        ];
    }

    /**
     * Configure the validator instance.
     *
     * @param  \Illuminate\Validation\Validator  $validator
     * @return void
     */
    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            //dd($validator);
        });
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            // 'title.required' => 'A title is required',
            // 'body.required'  => 'A message is required',
            'required' => 'The :attribute field is required.',
            'same'    => 'The :attribute and :other must match.',
            'size'    => 'The :attribute must be exactly :size.',
            'between' => 'The :attribute value :input is not between :min - :max.',
            'in'      => 'The :attribute must be one of the following types: :values',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'email' => 'email address',
            'username' => 'user name',
            'lastname' => 'last name',
            'othernames' => 'other names'
        ];
    }
}
