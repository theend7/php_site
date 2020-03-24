<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckEmailRequest extends FormRequest
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
            "username" => ["required","regex:/^[a-z]{4,16}[\d]+$/"]
        ];
    }
    public function messages(){
        return [
            "required" => "This field is required!"
        ];
    }
}
