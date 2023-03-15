<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MarchandRequest extends FormRequest
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
            'name' => 'required|unique:marchand',
            'slug' => 'required|unique:marchand',
            'url' => 'required|url',
            'url_conditions' => 'URL',
            'offers' => 'required',
            'content' => 'required|min:500',
            'foncparrainage' => 'required'
        ];
    }
}
