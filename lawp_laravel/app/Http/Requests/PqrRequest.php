<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class PqrRequest extends FormRequest
{

    public function authorize()
    {
        return false;
    }

    public function rules()
    {
        return [
            'affair'=>'required|exists:users,id|integer',
            'description'=>'required|unique:businesses,nit|integer|max:99999999999999999',
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
