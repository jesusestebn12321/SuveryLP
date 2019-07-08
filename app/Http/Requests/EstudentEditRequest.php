<?php

namespace SuveryLP\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstudentEditRequest extends FormRequest
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
            'dni'       => 'required|integer|min:1|unique:estudents.dni',
            'email'     => 'required|email|min:1|unique:estudents.email'. $this->,
            'slug'      => 'required|unique:estudents.slug',
            'name'      => 'required|string|min:1|max:255',
            'lastname'  => 'required|string|min:1|max:255',
            'phone'     => 'required|integer|min:1|max:15',
        ];
    }
}
