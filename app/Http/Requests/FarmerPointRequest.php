<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class FarmerPointRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'          => 'required',
            'phone'         => 'required|numeric',
            'address'       => 'required|min:5',
            'division_id'   => 'required|exists:division,id',
            'district_id'   => 'required|exists:district,id',
            'upazila_id'    => 'required|exists:upazila,id'
        ];
    }
}
