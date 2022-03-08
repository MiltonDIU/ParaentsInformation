<?php

namespace App\Http\Requests;

use App\Models\FeedbackCategory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateFeedbackCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('feedback_category_edit');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'max:60',
                'required',
                'unique:feedback_categories,title,' . request()->route('feedback_category')->id,
            ],
            'slug' => [
                'string',
                'max:60',
                'required',
                'unique:feedback_categories,slug,' . request()->route('feedback_category')->id,
            ],
            'is_active' => [
                'required',
            ],
        ];
    }
}
