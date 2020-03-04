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
        <form action="/" method="post">
          {{ csrf_field() }}
          <!-- value仮入れ(Userモデルとリレーションするのに必要) -->
          <input type="hidden" name="user_id" value="1">
          <div class="sell__block__form__upload">
            <h3 class="sell__block__form__upload__head">
              スニーカの写真
              <span class="require">必須</span>
            </h3>
            <div id="image-box-1">
              <div class="item-num-0" id="image-box__container">
                <div class="input-area">
                  @if($errors->has('image'))
                    <div class="error_msg">{{ $errors->first('image') }}</div>
                  @endif
                  <input id="img-file" type="file" name="image" value="{{ old('image') }}">
                  <label for="img-file"></label>
                </div>
              </div>
            </div>
            <div class="sell__block__form__name">
              <div class="form-group__name select1">
                <label>商品名<span class="require">必須</span></label>
                <div>
                  @if($errors->has('name'))
                   <div class="error_msg">{{ $errors->first('name') }}</div>
                  @endif
                  <input class="form__group__name title" type="text" name="name" placeholder="商品名" value="{{ old('name') }}">
                </div>
                <label>ブランド<span class="require">必須</span></label>
                <div>
                  @if($errors->has('brand'))
                    <div class="error_msg">{{ $errors->first('brand') }}</div>
                  @endif
                  <input class="form__group__name title" type="text" name="brand" placeholder="ブランド" value="{{ old('brand') }}">
                </div>
              </div>
              <div class="sell__block__form__btn">
                <div>
                  <input class="btn-default__btn-red" type="submit" value="投  稿">
                  <a href="/">戻る</a>
                </div>
              </div>
            
            </div>
          </div>
        </form>  
      </div>
    </section>
  </main>
  @endsection
</body>
</html>