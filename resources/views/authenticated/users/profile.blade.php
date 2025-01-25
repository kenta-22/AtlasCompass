@extends('layouts.sidebar')

@section('content')
<div class="vh-100 border">
  <div class="top-text">
    <p><span>{{ $user->over_name }}</span><span>{{ $user->under_name }}さんのプロフィール</span></p>
  </div>
  <div class="top_area w-75 m-auto pt-5">
    <div class="user_status p-3 shadow">
      <p>名前 : <span>{{ $user->over_name }}</span><span class="ml-1">{{ $user->under_name }}</span></p>
      <p>カナ : <span>{{ $user->over_name_kana }}</span><span class="ml-1">{{ $user->under_name_kana }}</span></p>
      <p>性別 : @if($user->sex == 1)<span>男</span>@else<span>女</span>@endif</p>
      <p>生年月日 : <span>{{ $user->birth_day }}</span></p>
      @if($user->role == 4)
      <div class="mb-3">選択科目 :
        @foreach($user->subjects as $subject)
        <span>{{ $subject->subject }}</span>
        @endforeach
      </div>
      @can('admin')
      <div class="accordion" id="myAccordion">
        <div class="accordion-item">
          <h2 class="accordion-header" style="border:none !important;">
            <button class="accordion-button collapsed subject_edit_btn p-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="width:fit-content;">
              選択科目の登録
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
            <div class="accordion-body px-0 pb-1">
              <form action="{{ route('user.edit') }}" method="post">
                <div class="d-flex gap-2 align-items-center">
                  @foreach($subject_lists as $subject_list)
                  <div class="d-inline-block mr-2">
                    <label>{{ $subject_list->subject }}</label>
                    <input type="checkbox" name="subjects[]" value="{{ $subject_list->id }}">
                  </div>
                  @endforeach
                  <input type="submit" value="登録" class="btn btn-primary">
                  <input type="hidden" name="user_id" value="{{ $user->id }}">
                </div>
              {{ csrf_field() }}
              </form>
            </div>
          </div>
        </div>
      </div>
      @endcan
      @endif
    </div>
  </div>
</div>

@endsection
