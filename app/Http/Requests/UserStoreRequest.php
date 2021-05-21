<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            'first_name' => 'string',
            'second_name' => 'string',
            'password' => 'required|string|min:6|max:20',
            'email' => ['required', 'string', 'email'],

        ];
    }
    protected function failedValidation(Validator $validator)
    {
        dd($validator->errors());
    }

}
