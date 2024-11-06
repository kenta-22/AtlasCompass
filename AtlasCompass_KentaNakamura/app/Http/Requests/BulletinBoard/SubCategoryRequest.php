<?php

namespace App\Http\Requests\BulletinBoard;

use Illuminate\Foundation\Http\FormRequest;

class SubCategoryRequest extends FormRequest
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
            'main_category_id' => 'required|exists:main_categories,id',
            'sub_category' => 'required|string|max:100|unique'
        ];
    }


    public function messages(){
        return [
            'main_category_id.required' => 'メインカテゴリーを選択してください。',
            'main_category_id.exists' => 'メインカテゴリーを選択してください。',
            'sub_category.required' => 'サブカテゴリーを入力してください。',
            'sub_category.string' => 'サブカテゴリーを入力してください。',
            'sub_category.max' => 'サブカテゴリーは100文字以内で入力してください。',
            'sub_category.unique' => '別のサブカテゴリーを作成してください。'
        ];
    }
}
