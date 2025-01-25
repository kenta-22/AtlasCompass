@extends('layouts.sidebar')

@section('content')
<div class="" style="background:#ECF1F6;">
  <div class="w-75 mx-auto my-5 py-5 shadow" style="border-radius:5px; background:#FFF;">
    <div class="w-90-custom m-auto">
      <p class="text-center fs-5">{{ $calendar->getTitle() }}</p>
      <div class="">
        {!! $calendar->render() !!}
      </div>
      <div class="text-end m-auto pt-3">
        <input type="submit" class="btn btn-primary" value="予約する" form="reserveParts">
      </div>
    </div>
  </div>
</div>
<div class="modal js-modal">
  <div class="modal__bg js-modal-close"></div>
  <div class="modal__content">
    <form action="{{ route('deleteParts') }}" method="post">
      <div class="w-100">
        <div class="modal-inner-date w-50 m-auto">
          <p>予約日：<span></span></p>
          <input type="hidden" name="delete_date">
        </div>
        <div class="modal-inner-part w-50 m-auto">
          <p>時間：リモ<span></span>部</p>
          <input type="hidden" name="getPart">
        </div>
        <div class="w-50 m-auto">
          <p>上記の予約をキャンセルしてもよろしいですか?</p>
        </div>
        <div class="w-50 m-auto edit-modal-btn d-flex">
          <a class="js-modal-close btn btn-primary d-inline-block" href="">閉じる</a>
          <input type="submit" class="btn btn-danger d-block" value="キャンセル">
        </div>
      </div>
    {{ csrf_field() }}
    </form>
  </div>
</div>
@endsection
