<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
        // バリデーションをここに記述
        return [
            'over_name' => [
                'required',
                'string',
                'max:10'
            ],
            'under_name' => [
                'required',
                'string',
                'max:10'
            ],
            'over_name_kana' => [
                'required',
                'string',
                'regex:/\A[ァ-ヴー]+\z/u',
                'max:30'
            ],
            'under_name_kana' => [
                'required',
                'string',
                'regex:/\A[ァ-ヴー]+\z/u',
                'max:30']
                ,
            'mail_address' => [
                'required',
                'max:100',
                'unique:users,mail',
                'email'
            ],
            'sex' => [
                'required',
                'in:1,2,3'
            ],
            'old_year' => [
                'required'
            ],
            'old_month' => [
                'required'
            ],
            'old_day' => [
                'required'
            ]
        ];
    }
}
