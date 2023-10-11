<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectUpdateRequest extends FormRequest
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
            "title" => "required|string|max:255",
            "description" => "required|string",
            "thumbnail" => "nullable|image|max:10240",
            "link" => "required|string|max:255",
            "date" => "required|date",
            "language" => "required|string|max:255",
        ];
    }
    public function messages()
    {
        return [
            "title.required" => "Il campo del titolo è obbligatorio.",
            "title.max" => "Lunghezza massima superata.",
            "description.required" => "Il campo della descrizione è obbligatorio.",
            "thumbnail.max" => "Dimensioni del file eccessive",
            "link.required" => "Il campo del link è obbligatorio.",
            "link.max" => "Lunghezza massima superata.",
            "date.required" => "Il campo della data è obbligatorio.",
            "language.required" => "Il campo dei linguaggi è obbligatorio.",
            "language.max" => "Lunghezza massima superata.",
        ];
    }
}
