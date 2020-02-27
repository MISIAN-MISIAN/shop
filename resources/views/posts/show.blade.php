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
  @extends('posts.layout')
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
              <th>出品者</th>
              <td>
                <a class="item-detail-username">ユザー名</a>
                
              </td>
            </tr>
            <tr>
              <th>カテゴリー</th> 
              <td>
                <a class="item-detail-category"></a>
              </td>
            </tr>
            <tr>
              <th>ブランド</th>
              <td>
                ブランド名
              </td>
            </tr>
            <tr>
              <th>商品サイズ</th>
              <td>
                サイズ
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
  
</body>
</html>