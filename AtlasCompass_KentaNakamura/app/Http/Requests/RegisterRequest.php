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

    public function getValidatorInstance(){
        $old_year = $this->input('old_year');
        $old_month = $this->input('old_month');
        $old_day = $this->input('old_day');

        $date = $old_year . '-' . $old_month . '-' . $old_day;
        $birth_day = date('Y-m-d', strtotime($date));

        $this->merge(['birth_day' => $birth_day]);

        return parent::getValidatorInstance();
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
                'regex:/\A[ァ-ヴー]+\z/u', //カタカナの正規表現
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
                'unique:users,mail_address',
                'email'
            ],
            'birth_day' => [
                'required',
                'date',
                'after:2000-01-01',
                'before:today'
            ],
            'role' => [
                'required',
                'in:1,2,3,4'
            ],
            'password' => [
                'required',
                'min:8',
                'max:30',
                'confirmed' //確認用と一致するかどうか(name="password_confirmation"のフォームを見る)
            ]
        ];
    }

    public function messages(){
        return [
            // over_name
            'over_name.required' => '名前は必ず入力してください。',
            'over_name.string' => '名前は必ず入力してください。',
            'over_name.max' => '姓は10文字以内で入力してください。',
            // under_name
            'under_name.required' => '名前は必ず入力してください。',
            'under_name.string' => '名前は必ず入力してください。',
            'under_name.max' => '名は10文字以内で入力してください。',
            // over_name_kana
            'over_name_kana.required' => 'セイは必ず入力してください。',
            'over_name_kana.string' => 'セイは必ず入力してください。',
            'over_name_kana.regex' => 'セイはカタカナで入力してください。',
            'over_name_kana.max' => 'セイは30文字以内で入力してください。',
            // under_name_kana
            'under_name_kana.required' => 'メイは必ず入力してください。',
            'under_name_kana.string' => 'メイは必ず入力してください。',
            'under_name_kana.regex' => 'メイはカタカナで入力してください。',
            'under_name_kana.max' => 'メイは30文字以内で入力してください。',
            // mail_address
            'mail_address.required' => 'メールアドレスは必ず入力してください。',
            'mail_address.max' => 'メールアドレスは100文字以内で入力してください。',
            'mail_address.unique' => 'すでに使用されているメールアドレスです。',
            'mail_address.email' => '正しいメールアドレス形式で入力してください。',
            // sex
            'sex.required' => '性別は必ず選択してください。',
            'sex.in' => '性別は下記からお選びください。',
            // birth_day
            'birth_day.required' => '生年月日は必ず選択してください。',
            'birth_day.date' => '無効な日付です。',
            'birth_day.after' => '生年月日は2000年1月1日以降を選択してください。',
            'birth_day.before' => '生年月日は今日以前を選択してください。',
            // role
            'role.required' => '役職は必ず選択してください。',
            'role.in' => '役職は下記からお選びください。',
            // password
            'password.required' => 'パスワードは必ず入力してください。',
            'password.min' => 'パスワードは8文字以上で入力してください。',
            'password.max' => 'パスワードは30文字以内で入力してください。',
            'password.confirmed' => 'パスワードが一致しません。'
        ];
    }
}
