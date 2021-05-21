<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
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
            'name' => 'required|string|min:3|max:15',
            'description' => 'required|min:5|max:30',
            'user_id' => 'integer|min:1|max:999',
        ];
    }
    protected function failedValidation(Validator $validator)
    {
        dd($validator->errors());
    }
}
