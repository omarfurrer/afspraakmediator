<?php

namespace App\Http\Requests\Companies;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCompanyRequest extends FormRequest {

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
            'name' => 'required|string',
            'city_id' => 'required|Integer|exists:cities,id',
            'contact_name' => 'required|string',
            'contact_email' => ['required', 'email', Rule::unique('users', 'email')->ignore($this->company->user->id)],
            'contact_phone' => ['required', 'string', Rule::unique('companies', 'phone')->ignore($this->company->id)],
            'house_number' => 'nullable|string',
            'zip_code' => 'nullable|string',
            'street' => 'nullable|string',
            'cities' => 'nullable|array',
            'cities.*' => 'exists:cities,id',
            'categories' => 'nullable|array',
            'categories.*' => 'exists:categories,id'
        ];
    }

}
