<?php

use Illuminate\Database\Seeder;
use App\Models\Users\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                // 中村一太、男性、教師(国語)
                'over_name' => '中村',
                'under_name' => '一太',
                'over_name_kana' => 'ナカムラ',
                'under_name_kana' => 'イチタ',
                'mail_address' => 'first@mail.com',
                'sex' => '1',
                'birth_day' => '2001.01.01',
                'role' => '1',
                'password' => Hash::make('nakamura1')
            ], [
                // 中村二太、男性、教師(数学)
                'over_name' => '中村',
                'under_name' => '二太',
                'over_name_kana' => 'ナカムラ',
                'under_name_kana' => 'ニタ',
                'mail_address' => 'second@mail.com',
                'sex' => '1',
                'birth_day' => '2002.02.02',
                'role' => '2',
                'password' => Hash::make('nakamura2')
            ], [
                // 中村三子、女性、教師(英語)
                'over_name' => '中村',
                'under_name' => '三子',
                'over_name_kana' => 'ナカムラ',
                'under_name_kana' => 'サンコ',
                'mail_address' => 'third@mail.com',
                'sex' => '2',
                'birth_day' => '2003.03.03',
                'role' => '3',
                'password' => Hash::make('nakamura3')
            ], [
                // 中村四子、その他、生徒
                'over_name' => '中村',
                'under_name' => '四子',
                'over_name_kana' => 'ナカムラ',
                'under_name_kana' => 'ヨンコ',
                'mail_address' => 'fourth@mail.com',
                'sex' => '3',
                'birth_day' => '2004.04.04',
                'role' => '4',
                'password' => Hash::make('nakamura4')
            ]
            ]);
    }
}
