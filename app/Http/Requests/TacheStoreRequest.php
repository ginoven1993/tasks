<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TacheStoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nom_tache' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'status' => ['required'],
            'date_fin' => ['required', 'string', 'max:255'],
            'projet_id' => ['required', 'integer', 'exists:projets,id'],
        ];
    }
}
