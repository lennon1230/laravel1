<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {

        return [
            'name' => [
                'required',
                'string',
                'min:2',
                'max:30'
            ],
            'cover' => [
                'nullable',
                'image',
                'max:4096'
            ],
            'price' => [
                'required',
                'String'
            ],
            'description' => [
                'nullable',
                'string'
            ],
            'stock' => [
                'required',
                'numeric'
            ]
        ];
    }
}
