<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class PqrRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'affair'=>'required|max:50',
            'description'=>'required|max:65500',
            'date'=>'required|date|before:today',
            'fk_user_id'=>'required|integer|exists:users,id',
            'fk_bussiness_id'=>'required|integer|exists:businesses,id',
            'attachment.*.url'=>'max:224',
            'attachment.*.archive'=>'required|file|max:1000000|mimes:jpeg,png,pdf',
            'fk_pqr_Type_id'=>'required|exists:pqr_types,id'
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
