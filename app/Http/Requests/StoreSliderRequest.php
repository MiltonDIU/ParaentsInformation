<?php

namespace App\Http\Requests;

use App\Models\Slider;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreSliderRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('slider_create');
    }

    public function rules()
    {
        return [
            'page_name' => [
                'string',
                'min:2',
                'max:30',
                'required',
                'unique:sliders,page_name'
            ],
            'title' => [
                'string',
                'max:100',
                'nullable',
            ],
            'link_text' => [
                'string',
                'max:100',
                'nullable',
            ],
            'link_url' => [
                'string',
                'max:200',
                'nullable',
            ],
            'is_active' => [
                'required',
            ],
            'picture' => [
                'required',
            ],
        ];
    }
}
