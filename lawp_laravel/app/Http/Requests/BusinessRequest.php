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
            'id'=>'required|exists:users,id|integer',
            'nit'=>'required|unique:businesses,nit|integer|max:99999999999999999',
            'bussiness_name'=>'required|max:100',
            'legal_name'=>'required|max:100',
            'cdate'=>'required|date|before:today',
            'tellephone1'=>'required|integer|max:99999999999999999',
            'tellephone2'=>'integer|nullable|max:99999999999999999',
            'mail'=>'required|unique:businesses,mail|max:50|regex:/^[^0-9][_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/',
            'fk_municipality_id'=>'required|integer|exists:municipalities,id',
            'fk_economic_sector_id'=>'integer|exists:economic_sectors,id',
            'fk_membership_id'=>'integer|exists:memberships,id',
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
