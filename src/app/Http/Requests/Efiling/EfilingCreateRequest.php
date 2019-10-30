<?php

namespace App\Http\Requests\Efiling;

use Illuminate\Foundation\Http\FormRequest;
use App\Repositories\EfilingRepository;
use App\Efiling;

class EfilingCreateRequest extends FormRequest
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
            'filepath' => ['required', 'max:1999'],
            'category_id' => ['required', 'integer', 'digits_between:1,11', 'exists:categories,id'],
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
            //$id = $this->route('post');
            $data = $validator->validated();
            $post = new EfilingRepository(new Efiling);

            // Check Efiling exist
            if($post->CheckEfilingExist($data["name"], $data["category_id"], 0)){
                $validator->errors()->add('name', 'Efiling exist!');
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
            'category_id' => 'category',
            'name' => 'name',
            'descritpion' => 'description',
        ];
    }
}
