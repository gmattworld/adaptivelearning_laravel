<?php

namespace App\Http\Requests\Cases;

use Illuminate\Foundation\Http\FormRequest;
use App\Repositories\CasesRepository;
use App\Cases;

class CasesUpdateRequest extends FormRequest
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
            'cover_img' => ['image', 'max:1999'],
            'category_id' => ['required', 'integer', 'digits_between:1,11', 'exists:categories,id'],
            'judge_id' => ['required', 'integer', 'digits_between:1,11', 'exists:lawyers,id'],
            'name' => ['required', 'string', 'min:5', 'max:200'],
            'status' => ['required', 'string'],
            'details' => ['required', 'string', 'min:5', 'max:5000'],
            'brief' => ['required', 'string', 'min:4', 'max:1000'],
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
            'cover_img' => 'cover image',

        ];
    }
}
