<?php

namespace App\Http\Requests;

use App\Models\FeedbackCategory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreFeedbackCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('feedback_category_create');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'max:60',
                'required',
                'unique:feedback_categories',
            ],
            'slug' => [
                'string',
                'max:60',
                'required',
                'unique:feedback_categories',
            ],
            'is_active' => [
                'required',
            ],
        ];
    }
}
