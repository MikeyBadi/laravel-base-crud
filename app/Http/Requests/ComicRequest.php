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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required | min:5 | max:60 ',
            'image' => 'required | max:255',
            'type' => 'required | min:3 | max:20',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'There\'s an empty field',
            'title.min' => 'Insert at least :min characters',
            'title.max' => 'Massimo characters admissed :max',
            'image.required' => 'There\'s an empty field',
            'image.max' => 'Massimo characters admissed :max',
            'type.required' => 'There\'s an empty field',
            'type.min' => 'Insert at least :min characters',
            'type.max' => 'Massimo characters admissed :max',
        ];
    }
}
