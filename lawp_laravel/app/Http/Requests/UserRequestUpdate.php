<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class UserRequestUpdate extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'direcction'=>'max:50',
            'tellephone1'=>'integer|max:99999999999999999',
            'tellephone2'=>'integer|max:99999999999999999',
            'password'=>'min:10|max:30|same:password2',
            //'password2'=>'required|min:10|max:30',
            'image'=>'file|max:2000|mimes:jpeg,png'
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json([
                'status' => false,
                'messages' => $validator->errors()
            ], 422)
        );
    }
}
