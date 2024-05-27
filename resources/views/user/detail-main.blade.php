
<x-base>

<main>
    <div class="h2-taitle">
        <h2 class="ditail-title margin">詳細情報</h2>
        </div>

    <section id="detail-top">

    <div class="detail-container">
    <div class="container-wrapper">
        <h3 class="container-title"><span>鵜戸神宮</span></h3>
        <p class="category">観光地</p>
        <p><button data-condition=false class="favoButton" data-favoNum=1>☆</button></p>
       
        
        </div>

        <div class="magazin-image"><img src="img/スクリーンショット 2024-05-15 165324.png" alt="Image" class="image"></div>
       
        <div class="detail">
        <ul class="access">
            <li>アクセス:宮崎空港から車で35分</li>
            <li>住所:〒887-0101宮崎県日南市宮浦</li>
            <li>TEL:0987-29-1001</li>
        </ul>
        </div>
        </div>
        <h4 class="coment-title"><span>てげよかポイント</span></h4>
        <div class="comment-box">
            <p>とっても珍しい鍾乳洞の中にある鵜戸神宮は
                めちゃくちゃオーラのあるパワースポットです！</p>
        </div>
    </section>
    
    <div id="return">
        <a href="#"><p>戻る</p></a></div>
</main>
<script>
$(".favoButton").click(function() {
	
	let button = fav;
	//お気に入りボタンのdata-conditionで制御
	if($(fav).data('condition') == false){
	  //お気に入り登録
	  //お気に入りボタンの色を黄色に
	  $(button).css('backgroundColor', '#F5EC6F');
	  //お気に入りボタン状態の更新
	  $(button).data('condition',true);
	}
	else if($(fav).data('condition') == true){

	  //お気に入り登録解除
	  //背景色を解除
	  $(button).css('backgroundColor', '');
	  //お気に入りボタン状態の更新
	  $(button).data('condition',false);
	}
});
</script>

</x-base>