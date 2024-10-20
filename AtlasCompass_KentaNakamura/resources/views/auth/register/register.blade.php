<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AtlasBulletinBoard</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&family=Oswald:wght@200&display=swap"
        rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>

<body class="all_content">
    <form action="{{ route('registerPost') }}" method="POST">
        <div class="w-100 vh-100 d-flex" style="align-items:center; justify-content:center;">
            <div class="bg-white border rounded-custom shadow w-35-custom vh-75 border p-4">
                <div class="register_form">
                    <div class="d-flex mt-3" style="justify-content:space-between">
                        <div class="w-50">
                            <label class="d-block m-0" style="font-size:13px">姓</label>
                            <div class="border-bottom border-primary w-100">
                                <input type="text" class="border-0 over_name w-100" name="over_name">
                            </div>
                        </div>
                        <div class="w-50">
                            <label class=" d-block m-0" style="font-size:13px">名</label>
                            <div class="border-bottom border-primary w-100">
                                <input type="text" class="border-0 under_name w-100"
                                    name="under_name">
                            </div>
                        </div>
                    </div>
                    <div class="d-flex mt-3" style="justify-content:space-between">
                        <div class="w-50">
                            <label class="d-block m-0" style="font-size:13px">セイ</label>
                            <div class="border-bottom border-primary w-100">
                                <input type="text" class="border-0 over_name_kana w-100"
                                    name="over_name_kana">
                            </div>
                        </div>
                        <div class="w-50">
                            <label class="d-block m-0" style="font-size:13px">メイ</label>
                            <div class="border-bottom border-primary w-100">
                                <input type="text" class="border-0 under_name_kana w-100"
                                    name="under_name_kana">
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <label class="m-0 d-block" style="font-size:13px">メールアドレス</label>
                        <div class="border-bottom border-primary">
                            <input type="mail" class="w-100 border-0 mail_address" name="mail_address">
                        </div>
                    </div>
                </div>
                <div class="mt-3" style="display:flex; justify-content:space-around;">
                    <div>
                        <input type="radio" name="sex" class="sex radio-btn" value="1">
                        <label style="font-size:13px">男性</label>
                    </div>
                    <div>
                        <input type="radio" name="sex" class="sex radio-btn" value="2">
                        <label style="font-size:13px">女性</label>
                    </div>
                    <div>
                        <input type="radio" name="sex" class="sex radio-btn" value="3">
                        <label style="font-size:13px">その他</label>
                    </div>
                </div>
                <div class="mt-3">
                    <label class="d-block m-0 aa" style="font-size:13px">生年月日</label>
                    <div style="display:flex; justify-content:space-around;">
                        <div class="w-33-custom">
                            <select class="old_year border-bottom border-primary w-75" name="old_year" style="border:none;">
                                <option value="none">-----</option>
                                <option value="1985">1985</option>
                                <option value="1986">1986</option>
                                <option value="1987">1987</option>
                                <option value="1988">1988</option>
                                <option value="1989">1989</option>
                                <option value="1990">1990</option>
                                <option value="1991">1991</option>
                                <option value="1992">1992</option>
                                <option value="1993">1993</option>
                                <option value="1994">1994</option>
                                <option value="1995">1995</option>
                                <option value="1996">1996</option>
                                <option value="1997">1997</option>
                                <option value="1998">1998</option>
                                <option value="1999">1999</option>
                                <option value="2000">2000</option>
                                <option value="2001">2001</option>
                                <option value="2002">2002</option>
                                <option value="2003">2003</option>
                                <option value="2004">2004</option>
                                <option value="2005">2005</option>
                                <option value="2006">2006</option>
                                <option value="2007">2007</option>
                                <option value="2008">2008</option>
                                <option value="2009">2009</option>
                                <option value="2010">2010</option>
                            </select>
                            <label style="font-size:13px">年</label>
                        </div>
                        <div class="w-33-custom">
                            <select class="old_month border-bottom border-primary w-75" name="old_month" style="border:none;">
                                <option value="none">-----</option>
                                <option value="01">1</option>
                                <option value="02">2</option>
                                <option value="03">3</option>
                                <option value="04">4</option>
                                <option value="05">5</option>
                                <option value="06">6</option>
                                <option value="07">7</option>
                                <option value="08">8</option>
                                <option value="09">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                            <label style="font-size:13px">月</label>
                        </div>
                        <div class="w-33-custom">
                            <select class="old_day border-bottom border-primary w-75" name="old_day" value="none" style="border:none;">
                                <option value="none">-----</option>
                                <option value="01">1</option>
                                <option value="02">2</option>
                                <option value="03">3</option>
                                <option value="04">4</option>
                                <option value="05">5</option>
                                <option value="06">6</option>
                                <option value="07">7</option>
                                <option value="08">8</option>
                                <option value="09">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                            <label style="font-size:13px">日</label>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <label class="d-block m-0" style="font-size:13px">役職</label>
                    <div style="display:flex; justify-content:space-around;">
                        <div>
                            <input type="radio" name="role" class="admin_role role radio-btn" value="1">
                            <label style="font-size:13px">教師(国語)</label>
                        </div>
                        <div>
                            <input type="radio" name="role" class="admin_role role radio-btn" value="2">
                            <label style="font-size:13px">教師(数学)</label>
                        </div>
                        <div>
                            <input type="radio" name="role" class="admin_role role radio-btn" value="3">
                            <label style="font-size:13px">教師(英語)</label>
                        </div>
                        <div>
                            <input type="radio" name="role" class="other_role role radio-btn" value="4">
                            <label style="font-size:13px" class="other_role">生徒</label>
                        </div>
                    </div>
                </div>
                <div class="select_teacher d-none mt-3">
                    <label class="d-block m-0" style="font-size:13px">選択科目</label>
                    <div class="" style="display:flex; justify-content:flex-start;">
                    @foreach ($subjects as $subject)
                        <div class="w-25">
                            <input type="checkbox" name="subject[]" value="{{ $subject->id }}" class=" radio-btn">
                            <label style="font-size:13px">{{ $subject->subject }}</label>
                        </div>
                    @endforeach
                    </div>
                </div>
                <div class="mt-3">
                    <label class="d-block m-0" style="font-size:13px">パスワード</label>
                    <div class="border-bottom border-primary">
                        <input type="password" class="border-0 w-100 password" name="password">
                    </div>
                </div>
                <div class="mt-3">
                    <label class="d-block m-0" style="font-size:13px">確認用パスワード</label>
                    <div class="border-bottom border-primary">
                        <input type="password" class="border-0 w-100 password_confirmation" name="password">
                    </div>
                </div>
                <div class="mt-3 text-right">
                    <input type="submit" class="btn btn-primary register_btn" disabled value="新規登録"
                        onclick="return confirm('登録してよろしいですか？')">
                </div>
                <div class="text-center mt-1">
                    <a href="{{ route('loginView') }}">ログインはこちら</a>
                </div>
            </div>
            {{ csrf_field() }}
        </div>
    </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/register.js') }}" rel="stylesheet"></script>
</body>

</html>