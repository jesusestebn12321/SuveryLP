<?php

namespace SuveryLP\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookStoreRequest extends FormRequest
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
            'code'      => 'required|string|min:1|unique:books.code',
            'slug'      => 'required|unique:books.slug',
            'title'     => 'required|string|min:1|max:255',
            'auth'      => 'required|string|min:1|max:255',
            'editorial' => 'required|string|min:1|max:15',
        ];
    }
}
