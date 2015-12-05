<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class FarmerCropRequest extends Request
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
            'crop_id'             => 'required',
    		'land_location'       => 'required',
    		'area_of_cultivation' => 'required|numeric',
    		'harvest_start_date'  => 'required',
    		'harvest_end_date'    => 'required',
    		'expected_amount'     => 'required',
    		'status'              => '',
            'remarks'             => ''
        ];
    }
}
