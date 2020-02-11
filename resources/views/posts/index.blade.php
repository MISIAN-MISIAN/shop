<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>shop</title>
  <link rel="stylesheet" href="/css/index.scss">
</head>
  <body>
    <div class="main-top">
      <div class="advertisemens">
          <div class="advertisement">
            <a href="#">
              <img class="scroll-advertisement" src="https://i.gyazo.com/9192b15b3c92a30aff8772d5b0b12d43.png">
            </a>
          </div>
      </div>
        
      <div class="nav">
        <h2 class="popularity-category">人気のカテゴリー</h2>
        <div class="categories">
          <a class="women button" href="#women">レディース</a>
          <a class="men button" href="#men">メンズ</a>
          <a class="appliance button" href="#appliance">家電・スマホ・カメラ</a>
          <a class="toy button" href="#toy">おもちゃ・ホビー・グッズ</a>
        </div>
      </div>
      <div class="items-holders" >
        <div class="category-name" id="women">
          <h3 class="item-title-women">レディース新着アイテム</h3>
          <a class="see-more" href="#">もっと見る＞</a>
        </div>
          
        <div class="holder">
          <div class="items-images">
            <ul class="images">
              <li class="image">
                <div class="product">
                    <a class="product-image" href="#">
                      <div class="product-card">
                        <span class="product-price">$ 1000</span>
                        <img class="product-image-size" src="https://i.gyazo.com/19bbdd578edb5173a80a3c12b088c0ec.png" alt="商品写真">
                        <div class="product-description">
                          <span>ワンピース</span>
                        </div> 
                      </div>
                    </a>
                </div>
              </li>
            </ul>
          </div>
        </div>   
      </div>
    </div>
  
  </body>
</html>