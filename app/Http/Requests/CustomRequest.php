<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class CustomRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required',
            'description'=>'required',
            'price'=>'required|numeric',

        ];
    }

    public function messages()
{
    return [
        'name.required' => 'Un titolo bisogna obbligatoriamente inserirlo',
        'description.required' => 'Una descrizione è assolutamente richiesta',
        'price.required' => 'Il prezzo è obbligatorio',
        'price.numeric'=>'Il prezzo deve essere numerico'
    ];
}
}
