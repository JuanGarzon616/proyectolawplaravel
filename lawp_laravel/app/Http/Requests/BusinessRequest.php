<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class BusinessRequest extends FormRequest
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

    public function rules()
    {
        return [
            'nit'=>'required|unique:businesses,nit|integer|max:99999999999999999',
            'bussiness_name'=>'required|max:100',
            'name'=>'required|max:100',
            'tellephone1'=>'required|integer|max:99999999999999999',
            'tellephone2'=>'integer|nullable|max:99999999999999999',
            'mail'=>'required|unique:users,mail|max:50|regex:/^[^0-9][_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/',
            'password'=>'required|min:10|max:30|same:password2',
            //'password2'=>'required|min:10|max:30',
            'fk_municipality_id'=>'required|integer|exists:municipalities,id',
            'fk_economic_sector_id'=>'integer|exists:economic_sectors,id',
            'fk_membership_id'=>'integer|exists:memberships,id',
            'created_at'=>'nullable|date|after:start_date',
            'updated_at'=>'nullable|date|after:start_date'
        ];
    }

    /*public function messages()
    {
        return [
            'name.required' => 'El campo :attribute es obligatorio.',
            'email.required' => 'El campo :attribute es obligatorio.',
            'email.email' => 'El campo :attribute debe sr un correo electronico.',
            'identification.required' => 'El campo :attribute es obligatorio.',
            'identification.integer' => 'El campo :attribute debe ser un numero.',
            'cellphone.required' => 'El campo :attribute es o'
        ];
    }*/

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
