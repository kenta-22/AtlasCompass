@extends('layouts.sidebar')
@section('content')
<div class="" style="background:#ECF1F6;">
  <div class="w-75 mx-auto my-5 py-5 shadow" style="border-radius:5px; background:#FFF;">
    <div class="w-90-custom m-auto">
      <p class="text-center fs-5">{{ $calendar->getTitle() }}</p>
      {!! $calendar->render() !!}
      <div class="m-auto text-end mt-3">
        <input type="submit" class="btn btn-primary" value="登録" form="reserveSetting" onclick="return confirm('登録してよろしいですか？')">
      </div>
    </div>
  </div>
</div>
@endsection
