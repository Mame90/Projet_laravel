<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
            'prenom'=>['required','min:8'],
            'prenom'=>['required','min:8'],
            'email'=>['required','unique:posts']
        ];
    }
    protected  function prepareForValidation()
    {
        $this->merge([
            'prenom'=>$this->input('')
        ]);
    }
}
