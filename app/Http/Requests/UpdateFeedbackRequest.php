<?php

namespace App\Http\Requests;

use App\Models\Feedback;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateFeedbackRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('feedback_edit');
    }

    public function rules()
    {
        return [
            'feedback_category_id' => [
                'required',
                'integer',
            ],
            'content' => [
                'string',
                'required',
            ],
        ];
    }
}
