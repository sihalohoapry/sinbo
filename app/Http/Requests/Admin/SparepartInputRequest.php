<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SparepartInputRequest extends FormRequest
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
            'name_sparepart'=> 'sometimes|string|max:255',
            'description'=> 'sometimes|string|max:500',
            'slug'=> 'sometimes|string|max:255',
            'status_sparepart'=> 'sometimes|string|max:15',
            'stock_sparepart'=> 'nullable|integer',
            'purchase_price'=> 'nullable|numeric',
            'selling_price'=> 'nullable|numeric',
            'foto_sparepart'=>'sometimes|image|mimes:png,jpg,jpeg|max:2048',
        ];
    }
}
