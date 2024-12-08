@extends('layouts.sidebar')

@section('content')
<div class="" style="background-color:#ECF1F6;">
  <div class="w-75 mx-auto my-5 py-5">
    <p><span class="fs-5">{{ \Carbon\Carbon::parse($date)->format('Y年m月d日') }}</span><span class="fs-5 ms-3">{{ $part }}部</span></p>
    <div class="shadow p-3" style="border-radius:5px; background:#FFF;">
      <table class="w-100 m-auto">
        <tr class="text-center fw-bold" style="color:#fff; background-color:#03AAD2;">
          <th class="w-10-custom py-1">ID</th>
          <th class="w-45-custom py-1">名前</th>
          <th class="w-45-custom py-1">場所</th>
        </tr>
        @foreach($reservePersons as $reservePerson)
        @foreach($reservePerson->users as $user)
        <tr class="text-center reserve-detail-row">
          <td class="w-10-custom">{{ $user->id }}</td>
          <td class="w-45-custom">{{ $user->over_name }}{{ $user->under_name }}</td>
          <td class="w-45-custom">リモート</td>
        </tr>
        @endforeach
        @endforeach
      </table>
    </div>
  </div>
</div>
@endsection
