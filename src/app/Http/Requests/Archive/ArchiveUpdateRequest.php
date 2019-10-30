<?php

namespace App\Http\Requests\Archive;

use Illuminate\Foundation\Http\FormRequest;
use App\Repositories\ArchiveRepository;
use App\Archive;

class ArchiveUpdateRequest extends FormRequest
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
            'filepath' => ['max:1999'],
            'case_id' => ['required', 'integer', 'digits_between:1,11', 'exists:cases,id'],
            'name' => ['required', 'string', 'min:5', 'max:200'],
            'description' => ['required', 'string', 'min:5'],
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
            $id = $this->route('archive');
            $data = $validator->validated();
            $post = new ArchiveRepository(new Archive);

            // Check Archive exist
            if($post->CheckArchiveExist($data["name"], $data["case_id"], (int)$id)){
                $validator->errors()->add('name', 'Archive exist!');
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
            'FilePath' => 'File path',
            'cases_id' => 'cases',
            'name' => 'name',
            'descritpion' => 'description',
        ];
    }
}
