<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RadarRequest extends FormRequest
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
            'title'         => 'required|string|max:255',
            'name'          => 'required|string|max:255',
            'time_limits'   => 'required|numeric',
            'time_interval' => 'required|numeric',
            'url_call'      => 'required|string|max:255',
        ];
    }
}
