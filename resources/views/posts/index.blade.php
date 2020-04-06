@extends('layouts.app')
@section('content')
  <div class="main-top">
    <!-- <div class="advertisemens">
      <div class="advertisement">
        <a href="#">
          <img class="scroll-advertisement" src="https://i.gyazo.com/9192b15b3c92a30aff8772d5b0b12d43.png">
        </a>
      </div>
    </div> -->
      
    <div class="nav">
      <h2 class="popularity-category">カテゴリー</h2>
      <div class="categories">
        <a class="women button" href="#women">NIKE</a>
        <a class="men button" href="#men">adidas</a>
        <a class="appliance button" href="#appliance">New Balance</a>
        <a class="toy button" href="#toy">その他</a>
      </div>
    </div>
    <div class="items-holders" >
      <div class="category-name" id="women">
        <h3 class="item-title-women">新着アイテム</h3>

      </div>
      <div class="holder">
        <div class="items-images">
          <ul class="images">
            @if(count($posts) > 0)
              @foreach($posts as $post) 
                <li class="image">
                  <div class="product">
                      <a class="product-image" href="post/show/{{ $post->id }}">
                        <div class="product-card">
                          <span class="product-price">{{ $post->brand }}</span>
                          <img class="product-image-size" src="{{ asset('/storage/'.$post->image) }}" alt="商品写真">
                          <div class="product-description">
                            <span>{{ $post->name }}</span>
                          </div> 
                        </div>
                      </a>
                  </div>
                </li>
              @endforeach
            @else
              <div>投稿記事がありません</div>
            @endif
              </ul>
            </div>
          </div>  
      

    </div>
  </div>
@endsection