<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class \ApplicationFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'min:3'],
            'description' => ['required', 'min:10'],
            'type' => ['required', 'min:5'],
            'slug' => ['required', 'min:5'],
            'licence' => ['required', 'min:5'],
            'tag_activity' => ['required', 'min:5'],
            'URL' => ['required', 'min:5'],
            'state' => ['required','boolean'],
            'date_added' => ['required','date'],
            'base de données' => ['required', 'min:3'],



        ];
    }
}
