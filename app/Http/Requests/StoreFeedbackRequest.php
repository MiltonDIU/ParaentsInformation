<?php

namespace App\Http\Requests;

use App\Models\Feedback;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreFeedbackRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('feedback_create');
    }

    public function rules()
    {
        return [
            'feedback_category_id' => [
                'required',
                'integer',
            ],
            'content' => ['string','required','max:100'],
        ];
    }
    public function messages()
    {
        return [
            'feedback_category_id.required'=>'',
            'feedback_category_id.integer'=>'',
        ];
    }
}
