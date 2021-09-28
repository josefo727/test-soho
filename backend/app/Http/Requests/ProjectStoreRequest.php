<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectStoreRequest extends FormRequest
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
            'title' => ['required', 'max:255', 'string'],
            'description' => ['required', 'max:255', 'string'],
            'logo' => ['required', 'image', 'max:1024'],
            'image' => ['required', 'image', 'max:1024'],
            'background' => ['nullable', 'string', 'max:10'],
            'user_id' => ['required', 'exists:users,id'],
        ];
    }
}
