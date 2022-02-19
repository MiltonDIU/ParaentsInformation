<?php

namespace App\Http\Requests;

use App\Models\NewsLetter;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreNewsLetterRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('news_letter_create');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
            ],
            'external_link' => [
                'string',
                'nullable',
            ],
            'external_link_text' => [
                'string',
                'nullable',
            ],
            'is_active' => [
                'required',
            ],
            'picture' => [
                'array',
            ],
        ];
    }
}
