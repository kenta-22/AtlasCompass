@extends('layouts.sidebar')

@section('content')
<div class="post_create_container d-flex">
  <div class="post_create_area border w-50 m-5 p-5">
    <div class="">
      <p class="mb-0">カテゴリー</p>
      <select class="w-100" form="postCreate" name="post_category_id" style="height:2rem;">
        @foreach($main_categories as $main_category)
        <optgroup label="{{ $main_category->main_category }}">
          <!-- サブカテゴリー表示 -->
          @foreach($main_category->subCategories as $subCategory)
          <option value="{{ $subCategory->id }}">
            {{ $subCategory->sub_category }}
          </option>
          @endforeach
        </optgroup>
        @endforeach
      </select>
    </div>
    <div class="mt-3">
      @if($errors->first('post_title'))
      <span class="error_message">
        {{ $errors->first('post_title') }}
      </span>
      @endif
      <p class="mb-0">タイトル</p>
      <input type="text" class="w-100 p-1" form="postCreate" name="post_title" value="{{ old('post_title') }}" style="height:2rem;">
    </div>
    <div class="mt-3">
      @if($errors->first('post_body'))
      <span class="error_message">
        {{ $errors->first('post_body') }}
      </span>
      @endif
      <p class="mb-0">投稿内容</p>
      <textarea class="w-100 p-1" form="postCreate" name="post_body">{{ old('post_body') }}</textarea>
    </div>
    <div class="mt-3 text-end">
      <input type="submit" class="btn btn-primary px-3 py-0" value="投稿" form="postCreate" style="height:2rem;">
    </div>
    <form action="{{ route('post.create') }}" method="post" id="postCreate">{{ csrf_field() }}</form>
  </div>
  @can('admin')
  <div class="w-35-custom ml-auto mr-auto">
    <div class="category_area mt-5 p-5">
      <div class="">
        @if($errors->first('main_category'))
        <span class="error_message">
          {{ $errors->first('main_category') }}
        </span>
        @endif
        <p class="m-0">メインカテゴリー</p>
        <input type="text" class="w-100 p-1" name="main_category" form="mainCategoryRequest" style="height:2rem;">
        <input type="submit" value="追加" class="w-100 btn btn-primary p-0 mt-2" form="mainCategoryRequest" style="height:2rem;">
      </div>
      <form action="{{ route('main.category.create') }}" method="post" id="mainCategoryRequest">{{ csrf_field() }}</form>
      <!-- サブカテゴリー追加 -->
      <div class="mt-5">
        @if($errors->has('main_category_id'))
        <span class="error_message">
          {{ $errors->first('main_category_id') }}
        </span>
        @elseif($errors->has('sub_category'))
        <span class="error_message">
          {{ $errors->first('sub_category') }}
        </span>
        @endif
        <p class="m-0">サブカテゴリー</p>
        <select class="w-100" form="subCategoryRequest" name="main_category_id" style="height:2rem;">
          <option value="">---</option>
          @foreach($main_categories as $main_category)
          <option value="{{ $main_category->id }}">
            {{ $main_category->main_category }}
          </option>
          @endforeach
        </select>
        <input type="text" class="w-100 p-1 mt-2" name="sub_category" form="subCategoryRequest" style="height:2rem;">
        <input type="submit" value="追加" class="w-100 btn btn-primary p-0 mt-2" form="subCategoryRequest" style="height:2rem;">
      </div>
      <form action="{{ route('sub.category.create') }}" method="post" id="subCategoryRequest">{{ csrf_field() }}</form>
    </div>
  </div>
  @endcan
</div>
@endsection
