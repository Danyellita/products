<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
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
            'name' => 'required|string|max:10',
            'details' => 'required',
            'price' => 'required',
            'image' => 'required',
            'type' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please fix this field.',
            'details.required'  => 'Please fix this field.',
            'price.required' => 'Please fix this field.', 
            'image.required' => 'Please fix this field.', 
            'type.required' => 'Please fix this field.', 
        ];
    }
}
