<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ResponseRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'response_pqr'=>'required|max:65500',
            'fk_pqr_id'=>'required|exists:pqrs,id',
            'attachment.*.url'=>'max:224',
            'attachment.*.archive'=>'file|max:5000|mimes:jpeg,png,pdf',
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
