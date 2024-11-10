<?php

namespace App\Http\Requests\BulletinBoard;

use Illuminate\Foundation\Http\FormRequest;

class MainCategoryRequest extends FormRequest
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
            'main_category' => 'required|string|max:100|unique:main_categories'
        ];
    }


    public function messages(){
        return [
            'main_category.required' => 'メインカテゴリーを入力してください。',
            'main_category.string' => 'メインカテゴリーを入力してください。',
            'main_category.max' => 'メインカテゴリーは100文字以内で入力してください。',
            'main_category.unique' => '別のメインカテゴリーを作成してください。',
        ];
    }
}
