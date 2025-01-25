<?php

namespace App\Http\Requests\BulletinBoard;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
            'comment' => 'required|max:250|string'
        ];
    }


    public function messages(){
        return [
            'comment.required' => 'コメントを入力してください。',
            'comment.max' => 'コメントは250文字以内で入力してください。',
            'comment.string' => 'コメントは文字で入力してください。'
        ];
    }
}
