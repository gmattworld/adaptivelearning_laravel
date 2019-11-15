<?php

namespace App\Http\Requests\Resource;

use Illuminate\Foundation\Http\FormRequest;
use App\Repositories\ResourceRepository;
use App\entity\resource;

class ResourceUpdateRequest extends FormRequest
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
            'course_id' => ['required', 'integer', 'digits_between:1,11', 'exists:courses,id'],
            'subject_id' => ['required', 'integer', 'digits_between:1,11', 'exists:subjects,id'],
            'pdf_path' => ['file', 'max:1999'],
            'video_path' => ['file', 'max:1999'],
            'audio_path' => ['file', 'max:1999'],
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
            $id = $this->route('resource');
            $data = $validator->validated();
            $resource = new ResourceRepository(new resource);
            // dd($id);

            // Check name exist
            if($resource->CheckNameExist($data["name"], (int)$id)){
                $validator->errors()->add('name', 'Resource with the name exist!');
            }

            // Check code exist
            // if($resource->CheckCodeExist($data["code"], (int)$id)){
            //     $validator->errors()->add('code', 'Resource with the code exist!');
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
            'code' => 'code',
            'description' => 'description',
        ];
    }
}
