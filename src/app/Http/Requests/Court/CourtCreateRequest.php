<?php

namespace App\Http\Requests\Court;

use Illuminate\Foundation\Http\FormRequest;

class CourtCreateRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:50', 'unique:courts,name'],
            'description' => ['required', 'string', 'max:2000'],
            'address' => ['required', 'string', 'max:2000'],
            'contact_person' => ['required', 'string', 'max:50', 'unique:courts,contact_person'],
            // 'alt_contact_person' => ['required', 'string', 'max:50', 'unique:courts,alt_contact_person'],
            'contact_phone' => ['required', 'string', 'max:50', 'unique:courts,contact_phone'],
            // 'alt_contact_phone' => ['required', 'string', 'max:50', 'unique:courts,alt_contact_phone'],
            'contact_email' => ['required', 'string', 'max:50', 'unique:courts,contact_email'],
            // 'alt_contact_email' => ['required', 'string', 'max:50', 'unique:courts,alt_contact_email'],
            'longitude' => ['required', 'string', 'max:50', 'unique:courts,longitude'],
            'latitude' => ['required', 'string', 'max:50', 'unique:courts,latitude'],
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
            'name' => 'name',
            'description' => 'description',
            'address' => 'address',
            'contact_person' => 'contact person',
            // 'alt_contact_person' => 'alt. contact person',
            'contact_phone' => 'contact phone',
            // 'alt_contact_phone' => 'alt. contact phone',
            'contact_email' => 'contact email',
            // 'alt_contact_email' => 'alt. contact email',
            'longitude' => 'longitude',
            'latitude' => 'latitude',
        ];
    }
}
