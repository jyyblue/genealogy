<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ValidateFamilyRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $family = $this->route('family');

        return [
            'is_active' => 'boolean',
            'description' => 'required|max:500',
            'partner_1_id' => 'required|exists:individuals,id',
            'partner_2_id' => 'required|exists:individuals,id',
        ];
    }
}