<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductFormRequest extends FormRequest
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
        $formRules = [
            "name" => [
                "required",
                // "unique:products",
                Rule::unique('products')->ignore($this->id)
            ],   
            'file_upload' => [
                // "required",
                "mimes:jpg,bmp,png"
            ],         
            "price" => [
                "numeric",
                "min:0"
            ],
            "quantity" => [
                "numeric",
                "min:0"
            ]
        ];
        
        if($this->id == null){
            $formRules['file_upload'][] = "required";
        }
        return $formRules;
    }

    // public function messages()
    // {
    //     return []
    // }
}