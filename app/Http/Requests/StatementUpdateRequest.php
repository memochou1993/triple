<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StatementUpdateRequest extends FormRequest
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
            'subject_id' => [
                'required',
            ],
            'predicate_id' => [
                'required',
            ],
            'object_id' => [
                'required',
            ],
            'start_date' => [
                'required',
                'date_format:Y-m-d',
            ],
            'end_date' => [
                'required',
                'date_format:Y-m-d',
            ],
        ];
    }
}
