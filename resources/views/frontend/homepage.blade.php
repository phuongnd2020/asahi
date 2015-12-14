@extends('frontend')

@section('content')
<nav>
  <ul class="clear">
    <li id="nav01"><a href="index.html" title="TOP" class="now">TOP</a></li>
    <li id="nav02"><a href="rental_list.html" title="レンタルサービス">レンタルサービス</a></li>
    <li id="nav03"><a href="products_list.html" title="販売">販売</a></li>
    <li id="nav04"><a href="maker.html" title="取扱いメーカー">取扱いメーカー</a></li>
    <li id="nav05"><a href="company.html" title="会社概要">会社概要</a></li>
  </ul>
</nav>
<div class="clear" id="index">
  <div id="topLeft">
    <div id="topimage">
      <ul class="bxslider">
        <li class="first"><img src="frontend/image/topimage-01.jpg" alt=""></li>
      </ul>
    </div>

    <h2 class="rental"><span>おすすめのレンタル商品</span><span class="rental_btn"><a href="rental_list.html"><img src="common/image/top_rental_btn.png" alt="レンタル商品一覧を見る"></a></span></h2>
    <div class="rentalList clear"> <a href="products_detail.html">
      <div class="listFrame">
      	<div class="listTitle">配水ポリエチレン管融着工具</div>
        <div class="listImg"><img src="frontend/image/top_rental_img1.jpg" alt=""></div>
        <div class="listName"><span class="ln_cat">EFコントローラ</span><br /><span class="ln_name">JWEF200-II</span></div>
        <div class="listDetail">１台で４社のEF継手に対応!!</div>
      </div>
      </a> <a href="products_detail.html">
      <div class="listFrame">
      	<div class="listTitle">配水ポリエチレン管融着工具</div>
        <div class="listImg"><img src="frontend/image/top_rental_img1.jpg" alt=""></div>
        <div class="listName"><span class="ln_cat">EFコントローラ</span><br /><span class="ln_name">JWEF200-II</span></div>
        <div class="listDetail">１台で４社のEF継手に対応!!</div>
      </div> <a href="products_detail.html">
      <div class="listFrame">
      	<div class="listTitle">配水ポリエチレン管融着工具</div>
        <div class="listImg"><img src="frontend/image/top_rental_img1.jpg" alt=""></div>
        <div class="listName"><span class="ln_cat">EFコントローラ</span><br /><span class="ln_name">JWEF200-II</span></div>
        <div class="listDetail">１台で４社のEF継手に対応!!</div>
      </div>
      </a>
  	</div>
    
    <h2 class="products"><span>おすすめの販売商品</span><span class="products_btn"><a href="products_list.html"><img src="common/image/top_products_btn.png" alt="販売商品一覧を見る"></a></span></h2>
    <div class="productsList clear"> <a href="products_detail.html">
      <div class="listFrame">
        <div class="listImg"><img src="frontend/image/top_products_img1.jpg" alt=""></div>
        <div class="listName"><span class="ln_cat">ダイヤモンドブレード(湿式)</span><br /><span class="ln_name">ハイグレードブレード</span></div>
        <div class="listDetail">1枚の刃で一般品ブレードの3枚～5枚分の寿命!!</div>
      </div>
      </a> <a href="products_detail.html">
      <div class="listFrame">
        <div class="listImg"><img src="frontend/image/top_products_img2.jpg" alt=""></div>
        <div class="listName"><span class="ln_cat">乾式</span><br /><span class="ln_name">鋳鉄管用ドライブレード（乾式）</span></div>
        <div class="listDetail">1枚の刃で一般品ブレードの3枚～5枚分の寿命!!</div>
      </div> <a href="products_detail.html">
      <div class="listFrame">
        <div class="listImg"><img src="frontend/image/top_products_img3.jpg" alt=""></div>
        <div class="listName"><span class="ln_cat">乾式</span><br /><span class="ln_name">鋳鉄管用ドライブレード（乾式）</span></div>
        <div class="listDetail">1枚の刃で一般品ブレードの3枚～5枚分の寿命!!</div>
      </div>
      </a>
  	</div>

    
  </div>
  <div id="topRight">
    <div class="subMenu">
    	<ul class="tab clear">
      	<li class="select"><img src="frontend/image/top_tab_rental.png" alt="レンタル商品カテゴリ"></li>
      	<li><img src="frontend/image/top_tab_products.png" alt="販売商品カテゴリ"></li>
      </ul>
      <ul class="tab_content">
      	<li>
          <ul class="sub_rental">
            <li class="acrd-ctrl"><a href="#">電動工具</a>
              <ul class="acrd-pl">
                <li><a href="#">ステンレス管端処理機</a></li>
                <li><a href="#">セーバーソーCR13VBY</a></li>
                <li><a href="#">セーバーソーCR17Y(バイス付)</a></li>
                <li><a href="#">インパクトレンチWR16SA</a></li>
                <li><a href="#">LEDバルーン投光器</a></li>
              </ul>
            </li>
            <li class="acrd-ctrl"><a href="#">電動工具</a>
              <ul class="acrd-pl">
                <li><a href="#">ステンレス管端処理機</a></li>
                <li><a href="#">セーバーソーCR13VBY</a></li>
                <li><a href="#">セーバーソーCR17Y(バイス付)</a></li>
                <li><a href="#">インパクトレンチWR16SA</a></li>
                <li><a href="#">LEDバルーン投光器</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="hide">
          <ul class="sub_products">
            <li class="acrd-ctrl"><a href="#">電動工具</a>
              <ul class="acrd-pl">
                <li><a href="#">ステンレス管端処理機</a></li>
                <li><a href="#">セーバーソーCR13VBY</a></li>
                <li><a href="#">セーバーソーCR17Y(バイス付)</a></li>
                <li><a href="#">インパクトレンチWR16SA</a></li>
                <li><a href="#">LEDバルーン投光器</a></li>
              </ul>
            </li>
            <li class="acrd-ctrl"><a href="#">電動工具</a>
              <ul class="acrd-pl">
                <li><a href="#">ステンレス管端処理機</a></li>
                <li><a href="#">セーバーソーCR13VBY</a></li>
                <li><a href="#">セーバーソーCR17Y(バイス付)</a></li>
                <li><a href="#">インパクトレンチWR16SA</a></li>
                <li><a href="#">LEDバルーン投光器</a></li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>

@endsection