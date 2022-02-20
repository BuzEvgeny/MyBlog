<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArtRequest extends FormRequest
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
            'author'     => 'required|string|min:2|max:50',
            'title'      => 'required|string|min:3|max:100',
            'category'   => 'required|string|min:2|max:15',
            'short_text' => 'required|string',
            'full_text'  => 'required|string',
            'user_id'    => 'required|integer'
        ];
    }
}
