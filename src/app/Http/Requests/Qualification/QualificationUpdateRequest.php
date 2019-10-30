<?php

namespace App\Http\Requests\Qualification;

use Illuminate\Foundation\Http\FormRequest;
use App\Repositories\QualificationRepository;
use App\Qualification;

class QualificationUpdateRequest extends FormRequest
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
            'title' => ['required', 'string', 'max:50'],
            'description' => ['required', 'string', 'max:2000'],
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
            $id = $this->route('qualification');
            $data = $validator->validated();
            $qualification = new QualificationRepository(new Qualification);
            // dd($id);

            // Check name exist
            if($qualification->CheckNameExist($data["name"], (int)$id)){
                $validator->errors()->add('name', 'Qualification with the name exist!');
            }

            // Check title exist
            if($qualification->CheckTitleExist($data["title"], (int)$id)){
                $validator->errors()->add('title', 'Qualification with the title exist!');
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
            'name' => 'name',
            'title' => 'title',
            'description' => 'description',
        ];
    }
}
