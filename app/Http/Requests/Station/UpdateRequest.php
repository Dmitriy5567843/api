<?php

namespace App\Http\Requests\Station;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name' => ['required', 'string', 'min:3', 'max:10', 'unique:lines,name'],
            'crossing' => ['nullable', 'string', 'min:3', 'max:10', 'unique:stations,crossing']
        ];
    }
}
