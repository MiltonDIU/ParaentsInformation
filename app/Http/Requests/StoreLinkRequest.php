<?php

namespace App\Http\Requests;

use App\Models\Link;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreLinkRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('link_create');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'max:200',
                'required',
            ],
            'link' => [
                'string',
                'max:200',
                'required',
            ],
            'link_categories.*' => [
                'integer',
            ],
            'link_categories' => [
                'required',
                'array',
            ],
            'is_active' => [
                'required',
            ],
        ];
    }
}
