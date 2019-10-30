<?php

namespace App\Http\Requests\CourtRoom;

use Illuminate\Foundation\Http\FormRequest;
use App\Repositories\CourtRoomRepository;
use App\CourtRoom;

class CourtRoomCreateRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:100'],
            'court_id' => ['required', 'int', 'digits_between:1,11', 'exists:courts,id'],
            'location' => ['required', 'string', 'max:255'],
            'seat_count' => ['required', 'integer', 'digits_between:1,11'],
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
            $id = $this->route('courtroom');
            $data = $validator->validated();
            $courtroom = new CourtRoomRepository(new CourtRoom);

            // Check Court room exist
            if($courtroom->CheckCourtRoomExist($data["name"], $data["court_id"], (int)$id)){
                $validator->errors()->add('name', 'Court room exist!');
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
            'court_id' => 'court',
            'seat_count' => 'seat count',
            'location' => 'location'
        ];
    }
}
