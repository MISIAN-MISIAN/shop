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
  @if(count($post) > 0)
    @foreach($post as $p)
      <div class="item-detail">
        <div class="item-detail-contents">
          <h1 class="item-detail-name">アイテム名</h1>
          <div class="item-detail-main clearfix">
            <div class="item-detail-photo">
              <img>
            </div>
            <table class="item-detail-table">
              <tbody>
                <tr>
                  <th>投稿者</th>
                  <td>
                    <a class="item-detail-username">ユザー名</a>
                    
                  </td>
                </tr>
                <tr>
                  <th>商品名</th> 
                  <td>
                    <a class="item-detail-category">{{ $p->name }}</a>
                  </td>
                </tr>
                <tr>
                  <th>ブランド</th>
                  <td>
                    {{ $p->brand }}
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="item-detail-price-box">
            <span class="item-detail-price">値段</span>
            <span class="item-detail-tax">（税込）</span>
          </div>


        </div>
      </div>
    @endforeach
  @else
    <div>投稿記事がありません</div>
  @endif
@endsection
</body>
</html>