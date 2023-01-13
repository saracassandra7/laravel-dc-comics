<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
            'title' => 'required|max:100|min:2',
            'description' => 'required',
            'thumb' => 'required|max:255|min:10',
            'price' => 'required|max:10|min:2',
            'series' => 'required|max:100|min:2',
            'sale_date' => 'required|max:10|min:2',
            'type' => 'required|max:50|min:2'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo è un campo obbligatorio',
            'title.max' => 'Il titolo deve avere al massimo :max caratteri',
            'title.min' => 'Il titolo deve avere almeno :min caratteri',

            'description.required' => 'Il titolo è un campo obbligatorio',

            'thumb.required' => 'La URL \'immagine è un campo obbligatorio',
            'thumb.max' => 'La URL \'immagine  deve avere al massimo :max caratteri',
            'thumb.min' => 'La URL \'immagine deve avere almeno :min caratteri',

            'price.required' => 'Il prezzo è un campo obbligatorio',
            'price.max' => 'Il prezzo deve avere al massimo :max caratteri',
            'price.min' => 'Il prezzo deve avere almeno :min caratteri',

            'series.required' => 'La serie è un campo obbligatorio',
            'series.max' => 'La serie deve avere al massimo :max caratteri',
            'series.min' => 'La serie deve avere almeno :min caratteri',

            'sale_date.required' => 'La data di uscita è un campo obbligatorio',
            'sale_date.max' => 'La data di uscita deve avere al massimo :max caratteri',
            'sale_date.min' => 'La data di uscita deve avere almeno :min caratteri',

            'type.required' => 'Il tipo è un campo obbligatorio',
            'type.max' => 'Il tipo deve avere al massimo :max caratteri',
            'type.min' => 'Il tipo deve avere almeno :min caratteri',

        ];
    }
}
