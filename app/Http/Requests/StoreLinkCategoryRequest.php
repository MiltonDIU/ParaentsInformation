<?php

namespace App\Http\Requests;

use App\Models\LinkCategory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreLinkCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('link_category_create');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'max:200',
                'required',
            ],
            'external_link' => [
                'string',
                'max:200',
                'nullable',
            ],
            'position' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
