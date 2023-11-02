<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjetStoreRequest extends FormRequest
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
            'nom_projet' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'manager',
            'date_debut',
            'date_fin',
            'categories' => ['nullable', 'string', 'max:255'],
            'documents' => ['nullable', 'string', 'max:255'],
            'commentaires' => ['nullable', 'string', 'max:255'],
            'status',
            'collab_id' => ['nullable'],
            'user_id' => ['required', 'integer', 'exists:users,id']
        ];
    }
}
