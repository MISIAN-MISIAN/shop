<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
@extends('layouts.app')
@section('content')
  @if($post !== '')
    <div class="item-detail">
      <div class="item-detail-contents">
        <h1 class="item-detail-name">アイテム名</h1>
        <div class="item-detail-main clearfix">
          <div class="item-detail-photo">
          <img class="product-image-size" src="{{ asset('/storage/'.$post->image) }}" alt="商品写真">
          </div>
          <table class="item-detail-table">
            <tbody>
              <tr>
                <th>投稿者</th>
                <td>
                  <a class="item-detail-username">{{ $post->user->name }}</a>
                  
                </td>
              </tr>
              <tr>
                <th>商品名</th> 
                <td>
                  <a class="item-detail-category">{{ $post->name }}</a>
                </td>
              </tr>
              <tr>
                <th>ブランド</th>
                <td>
                  {{ $post->brand }}
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="item-detail-price-box">
          <!-- <span class="item-detail-price">値段</span>
          <span class="item-detail-tax">（税込）</span> -->
          @if( $post->user_id == Auth::id())
            <a href="/post/edit/{{ $post->id }}">編集</a>
            <form method="post" action="/post/{{$post->id}}">
              {{ csrf_field()}}
                <input name="_method" type="hidden" value="DELETE">
                <input type="submit" name="" value="削除する">
            </form>
          @endif
        </div>


      </div>
    </div>
  @endif
@endsection
</body>
</html>