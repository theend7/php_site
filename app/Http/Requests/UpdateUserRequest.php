<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            "name" => ["required","regex:/^[A-Z][a-z]{2,11}$/"],
            "lastName" => ["required","regex:/^([A-Z][a-z]{2,15})+$/"],
            "email" => "required|email",
            "username" => ["required","regex:/^[A-z]{4,16}[\d]+$/"],
            "idUloga" => ["required","regex:/^[1-2]$/"]
        ];
    }
    public function messages(){
        return [
            "required" => "Field is required!"
        ];
    }
}
