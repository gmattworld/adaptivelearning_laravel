<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;
use App\Repositories\ClientRepository;
use App\entity\Client;

class ClientUpdateRequest extends FormRequest
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
            'phone' => ['required', 'numeric', 'digits_between:11,20'],
            'username' => ['required', 'string', 'min:5', 'max:25'],
            'email' => ['required', 'string', 'min:4', 'e-mail', 'max:255'],
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
            $id = $this->route('user');
            $data = $validator->validated();
            $user = new ClientRepository(new Client);

            // Check email exist
            if($user->CheckEmailExist($data["email"], (int)$id)){
                $validator->errors()->add('email', 'Email address already in use!');
            }

            // Check phone exist
            if($user->CheckPhoneExist($data["phone"], (int)$id)){
                $validator->errors()->add('phone', 'Phone already in use!');
            }

            // Check username exist
            if($user->CheckUserNameExist($data["username"], (int)$id)){
                $validator->errors()->add('username', 'User name taken already!');
            }
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
