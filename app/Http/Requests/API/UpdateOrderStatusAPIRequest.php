<?php

namespace App\Http\Requests\API;

use App\Models\OrderStatus;
use InfyOm\Generator\Request\APIRequest;

class UpdateOrderStatusAPIRequest extends APIRequest
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
        $rules = OrderStatus::$rules;
        
        return $rules;
    }
}
