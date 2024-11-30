@extends('layouts.sidebar')

@section('content')
<div class="board_area w-100 border m-auto d-flex">
  <div class="post_view w-75 mt-5">
    @foreach($posts as $post)
    <div class="post_area border w-75 m-auto p-3">
      <p class="post-name"><span>{{ $post->user->over_name }}</span><span class="ml-3">{{ $post->user->under_name }}</span>さん</p>
      <p class="post-title"><a href="{{ route('post.detail', ['id' => $post->id]) }}">{{ $post->post_title }}</a></p>
      <div class="d-flex justify-content-between align-items-center">
        <div>
          @foreach($post->subCategories as $subCategory)
          <p class="mb-0 post-subCategory">{{ $subCategory->sub_category }}</p>
          @endforeach
        </div>
        <div class="post_bottom_area d-flex justify-content-end pr-2">
          <div class="d-flex post_status gap-5">
            <div class="mr-5">
              <i class="fa fa-comment fa-fw" style="color:#919191;"></i><span class="ml-5">{{ $post->comments_count->count() }}</span>
            </div>
            <div>
              @if(Auth::user()->is_Like($post->id))
              <i class="fas fa-heart un_like_btn fa-fw" post_id="{{ $post->id }}"></i><span class="like_counts{{ $post->id }} ml-5">{{ $post->likes_count }}</span>
              @else
              <i class="fas fa-heart like_btn fa-fw" post_id="{{ $post->id }}"></i><span class="like_counts{{ $post->id }}">{{ $post->likes_count }}</span>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  <div class="other_area w-25 mt-5">
    <div class="w-75">
      <div class="mb-3">
        <a class="btn post-btn" href="{{ route('post.input') }}">投稿</a>
      </div>
      <div class="mb-3 d-flex w-100">
        <input class="search-area w-75" type="text" placeholder="キーワードを検索" name="keyword" form="postSearchRequest">
        <input class="search-btn w-25" type="submit" value="検索" form="postSearchRequest">
      </div>
      <div class="mb-3 d-flex justify-content-between w-100">
        <input type="submit" name="like_posts" class="btn my-like-btn" value="いいねした投稿" form="postSearchRequest">
        <input type="submit" name="my_posts" class="btn my-post-btn" value="自分の投稿" form="postSearchRequest">
      </div>
      <div class="">
        <p class="mb-0">カテゴリー検索</p>
        <div class="accordion" id="myAccordion">
          @foreach($categories as $category)
          <div class="accordion-item main_categories" category_id="{{ $category->id }}">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $category->id }}" aria-expanded="true" aria-controls="collapse{{ $category->id }}">
                {{ $category->main_category }}
              </button>
            </h2>
            <div id="collapse{{ $category->id }}" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
              <div class="accordion-body sub_categories ml-3">
                @foreach($category->subCategories as $subCategory)
                <input type="submit" name="sub_category" class="category_btn" value="{{ $subCategory->sub_category }}" form="postSearchRequest">
                @endforeach
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
  <form action="{{ route('post.show') }}" method="get" id="postSearchRequest"></form>
</div>
@endsection
