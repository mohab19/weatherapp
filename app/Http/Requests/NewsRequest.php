<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
            'category_id' => 'required|numeric',
            'title_ar'    => 'required|string|max:255',
            'title_en'    => 'required|string|max:255',
            'writer'      => 'required|string|max:50',
            'description' => 'required|string',
            'image'       => 'required_without:image_url|image|mimes:jpeg,jpg,png,gif,mp4,wav',
            'image_url'   => 'required_without:image',
        ];
    }
}
