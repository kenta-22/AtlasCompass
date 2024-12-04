@extends('layouts.sidebar')

@section('content')
<div class="search_content w-100 d-flex">
  <div class="reserve_users_area w-75 py-4 px-5">
    @foreach($users as $user)
    <div class="border shadow one_person">
      <div>
        <span style="color:#999;">ID : </span><span>{{ $user->id }}</span>
      </div>
      <div>
        <span style="color:#999;">名前 : </span>
        <a href="{{ route('user.profile', ['id' => $user->id]) }}">
          <span>{{ $user->over_name }}</span>
          <span>{{ $user->under_name }}</span>
        </a>
      </div>
      <div>
        <span style="color:#999;">カナ : </span>
        <span>({{ $user->over_name_kana }}</span>
        <span>{{ $user->under_name_kana }})</span>
      </div>
      <div>
        @if($user->sex == 1)
        <span style="color:#999;">性別 : </span><span>男</span>
        @elseif($user->sex == 2)
        <span style="color:#999;">性別 : </span><span>女</span>
        @else
        <span style="color:#999;">性別 : </span><span>その他</span>
        @endif
      </div>
      <div>
        <span style="color:#999;">生年月日 : </span><span>{{ $user->birth_day }}</span>
      </div>
      <div>
        @if($user->role == 1)
        <span style="color:#999;">役職 : </span><span>教師(国語)</span>
        @elseif($user->role == 2)
        <span style="color:#999;">役職 : </span><span>教師(数学)</span>
        @elseif($user->role == 3)
        <span style="color:#999;">役職 : </span><span>講師(英語)</span>
        @else
        <span style="color:#999;">役職 : </span><span>生徒</span>
        @endif
      </div>
      <div>
        @if($user->role == 4)
        <span style="color:#999;">選択科目 :</span>
        @foreach($user->subjects as $subject)
        <span>{{ $subject->subject }}</span>
        @endforeach
        @endif
      </div>
    </div>
    @endforeach
  </div>
  <div class="search_area w-25 p-4">
    <div class="w-75">
      <div>
        <p class="mb-2" style="font-size:20px; color:#4E6784;">検索</p>
      </div>
      <div class="">
        <div class="">
          <input type="text" class="free_word w-100 mb-4" name="keyword" placeholder="キーワードを検索" form="userSearchRequest">
        </div>
        <div class="d-flex flex-column mb-2">
          <label class="mb-1" style="color:#4E6784;">カテゴリ</label>
          <select class="search-sort w-50" form="userSearchRequest" name="category">
            <option value="name">名前</option>
            <option value="id">社員ID</option>
          </select>
        </div>
        <div class="d-flex flex-column mb-2">
          <label class="mb-1" style="color:#4E6784;">並び替え</label>
          <select class="search-sort w-50" name="updown" form="userSearchRequest">
            <option value="ASC">昇順</option>
            <option value="DESC">降順</option>
          </select>
        </div>
        <div class="accordion my-4" id="myAccordion">
          <div class="accordion-item p-1">
            <h2 class="accordion-header" style="color:#4E6784;">
              <button class="accordion-button collapsed pt-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <span style="color:#4E6784;">検索条件の追加</span>
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse search_conditions_inner" data-bs-parent="#myAccordion">
              <div class="accordion-body py-2 px-0">
                <div class="d-flex flex-column mb-1">
                  <label style="color:#4E6784;">性別</label>
                  <div>
                    <span>男</span><input type="radio" name="sex" value="1" form="userSearchRequest">
                    <span>女</span><input type="radio" name="sex" value="2" form="userSearchRequest">
                    <span>その他</span><input type="radio" name="sex" value="3" form="userSearchRequest">
                  </div>
                </div>
                <div class="d-flex flex-column mb-2">
                  <label class="mb-1" style="color:#4E6784;">権限</label>
                  <select name="role" form="userSearchRequest" class="engineer search-sort">
                    <option selected disabled>----</option>
                    <option value="1">教師(国語)</option>
                    <option value="2">教師(数学)</option>
                    <option value="3">教師(英語)</option>
                    <option value="4" class="">生徒</option>
                  </select>
                </div>
                <div class="selected_engineer d-flex flex-column">
                  <label style="color:#4E6784;">選択科目</label>
                  <div class="d-flex gap-3">
                    @foreach ($subjects as $subject)
                    <div class="">
                      <label class="d-inline">{{ $subject->subject }}</label>
                      <input type="checkbox" name="subject" form="userSearchRequest" value="{{ $subject->id }}" class="radio-btn d-inline">
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div>
          <input class="btn user_search_btn" type="submit" name="search_btn" value="検索" form="userSearchRequest">
        </div>
        <div>
          <input class="user_reset_btn mt-2" type="submit" value="リセット" name="reset" form="userSearchRequest">
        </div>
      </div>
    </div>
    <form action="{{ route('user.show') }}" method="get" id="userSearchRequest"></form>
  </div>
</div>
@endsection
