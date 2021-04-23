<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class BusinessUpdateRequest extends FormRequest
{

    public function rules()
    {
        return [
            'tellephone1'=>'integer|max:99999999999999999',
            'tellephone2'=>'integer|max:99999999999999999',
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
