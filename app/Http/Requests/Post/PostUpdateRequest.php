<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;
use App\Repositories\PostRepository;
use App\entity\Post;

class PostUpdateRequest extends FormRequest
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
            'cover_img' => ['nullable', 'image', 'max:1999'],
            //'post_banner' => ['required', 'image(jpeg, png, jpg)', 'max:1999'],
            //'is_ext_src' => ['required', 'string', 'max:100'],
            'category_id' => ['required', 'integer', 'digits_between:1,11', 'exists:subjects,id'],
            'topic' => ['required', 'string', 'min:5', 'max:200'],
            'body' => ['required', 'string', 'min:5'],
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
            $id = $this->route('post');
            $data = $validator->validated();
            $post = new PostRepository(new Post);

            // Check Post exist
            if($post->CheckPostExist($data["topic"], $data["category_id"], (int)$id)){
                $validator->errors()->add('topic', 'Post exist!');
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
            'cover_img' => 'cover image',
            //'post_banner' => 'post banner',
            //'is_ext_src' => 'External Source',
            'category_id' => 'category',
            'topic' => 'topic',
            'body' => 'body',
            'brief' => 'brief',
        ];
    }
}
