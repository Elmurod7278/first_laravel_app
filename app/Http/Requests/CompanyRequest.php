<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:100',
            'address' => 'required|string|max:255',
            'phone' => 'required|string',
            'email' => 'required|email',
            'about' => 'required|string|min:10|max:255'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Ukam bu bosh qop ketti',
            'about.min' => 'Ukam minimalniy 10 belgi boladi',
        ];
    }
}
