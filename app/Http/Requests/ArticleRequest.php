<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:4|max:20',
            'subtitle' => 'required|min:4|max:20',
            'body' => 'required|min:10|max:20000',
            'tags' => 'required|min:3|max:20',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo é richiesto',
            'subtitle.required' => 'Il sottotitolo é richiesto',
            'body.required' => 'Il testo é richiesto',
            'tags.required' => 'I tag sono richiesti',
        ];
    }
}
