@extends('layouts.sidebar')

@section('content')
<div class="" style="background:#ECF1F6;">
  <div class="w-75 mx-auto my-5 py-5 shadow" style="border-radius:5px; background:#FFF;">
    <div class="w-90-custom m-auto">
      <p class="text-center fs-5">{{ $calendar->getTitle() }}</p>
      <p>{!! $calendar->render() !!}</p>
    </div>
  </div>
</div>
@endsection
