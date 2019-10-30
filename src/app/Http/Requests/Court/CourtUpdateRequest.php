<?php

namespace App\Http\Requests\Court;

use Illuminate\Foundation\Http\FormRequest;
use App\Repositories\CourtRepository;
use App\Court;

class CourtUpdateRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:50'],
            'description' => ['required', 'string', 'max:2000'],
            'address' => ['required', 'string', 'max:2000'],
            'contact_person' => ['required', 'string', 'max:50'],
            // 'alt_contact_person' => ['required', 'string', 'max:50'],
            'contact_phone' => ['required', 'string', 'max:50'],
            // 'alt_contact_phone' => ['required', 'string', 'max:50'],
            'contact_email' => ['required', 'string', 'max:50'],
            // 'alt_contact_email' => ['required', 'string', 'max:50'],
            'longitude' => ['required', 'string', 'max:50'],
            'latitude' => ['required', 'string', 'max:50'],
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
            $id = $this->route('court');
            $data = $validator->validated();
            $court = new CourtRepository(new Court);
            // dd($id);

            // Check name exist
            if($court->CheckNameExist($data["name"], (int)$id)){
                $validator->errors()->add('name', 'Court with same name exist!');
            }

            // Check contact person exist
            if($court->CheckContactPersonExist($data["contact_person"], (int)$id)){
                $validator->errors()->add('contact_person', 'Court with same contact person exist!');
            }

            // Check contact phone exist
            if($court->CheckContactPhoneExist($data["contact_phone"], (int)$id)){
                $validator->errors()->add('contact_phone', 'Court with same contact name exist!');
            }

            // Check contact email exist
            if($court->CheckContactEmailExist($data["contact_email"], (int)$id)){
                $validator->errors()->add('contact_email', 'Court with same contact email exist!');
            }

            // // Check longitude exist
            // if($court->CheckLongitudeExist($data["longitude"], (int)$id)){
            //     $validator->errors()->add('longitude', 'Court with same longitude exist!');
            // }

            // // Check latitude exist
            // if($court->CheckLatitudeExist($data["latitude"], (int)$id)){
            //     $validator->errors()->add('latitude', 'Court with same latitude exist!');
            // }
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
