<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QaTopicCreateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'recipient' => 'required',
            'subject'   => 'required',
            'feedback_category_id'   => 'required',
            'content'   => 'required',
        ];
    }

    public function messages()
    {
       return[
         'feedback_category_id.required'=>' Feedback Category Field is Required'
       ];
    }
}
