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
  <main class="main">
    <section class="main__block">
      <h2 class="sell__block__head">スニーカの写真を入力してください</h2>
      <div class="sell__block__form">
        <div class="sell__block__form__upload">
          <h3 class="sell__block__form__upload__head">
            食事の画像
            <span class="require">必須</span>
          </h3>
          <div id="image-box-1">
            <div class="item-num-0" id="image-box__container">
              <div class="input-area">
                <input id="img-file" type="file">
                <label for="img-file"></label>
              </div>
            </div>
          </div>
          <div class="sell__block__form__name">
            <div class="form-group__name select1">
              <label>商品名<span class="require">必須</span></label>
              <div>
                <input class="form__group__name title" type="text" placeholder="商品名">
              </div>
              <label>ブランド<span class="require">必須</span></label>
              <div>
                <input class="form__group__name title" type="text" placeholder="ブランド">
              </div>
            </div>
            <div class="sell__block__form__btn">
              <div>
                <btn class="btn-default__btn-red" type="submit">投稿</btn>
                <a href="/">戻る</a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
  </main>
  @endsection
</body>
</html>