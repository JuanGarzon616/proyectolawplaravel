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
            'document'=>'required|unique:users,document|integer|max:99999999999999999',
            'names'=>'required|max:50',
            'last_names'=>'required|max:50',
            'direcction'=>'required|max:50',
            'tellephone1'=>'required|integer|max:99999999999999999',
            'tellephone2'=>'integer|nullable|max:99999999999999999',
            'mail'=>'required|unique:users,mail|max:50|regex:/^[^0-9][_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/',
            'password'=>'required|min:10|max:30|same:password2',
            //'password2'=>'required|min:10|max:30',
            'token'=>'nullable|max:225',
            'fk_document_type_id'=>'required|integer|max:5|exists:document_types,id',
            //'fk_rol_id'=>'integer|max:10',
            'fk_municipality_id'=>'required|integer|exists:municipalities,id',
            'created_at'=>'nullable|date|after:start_date',
            'updated_at'=>'nullable|date|after:start_date'
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
