

   <x-base>

    <main>
        <div class="h2-taitle">
        <h2 class="cityname">宮崎市</h2>
        </div>
        <section id="top">
            <h3 class="side-title"><span>おすすめTOP3</span></h3>
            <div class="wrapper">
                <ul class="col3">
                <p class="lank">1位</p>
                    @foreach($rank as $item)
                    <li><a href="{{ route('user.detail-main', [$item->id]) }}">
                        <div class="container">
                            <div class="magazin-image"><img src="img/スクリーンショット 2024-05-15 165324.png" alt="Image" class="image"></div>
                            <div class="container-wrapper">
                            <h3 class="container-title"><span>{{$item->name}}</span></h3>
                            <p class="category">観光地</p>
                            </div>
                            <div class="detail">
                            <p>おすすめ度:●●●●</p>

                            <ul class="access">
                                <li>アクセス:宮崎空港から車で35分</li>
                                <li>住所:〒887-0101宮崎県日南市宮浦</li>
                                <li>0987-29-1001</li>
                            </ul>
                    
                            </div>
                            <h4 class="coment-title"><span>てげよかポイント</span></h4>
                            <div class="comment-box">
                                <p>とっても珍しい鍾乳洞の中にある鵜戸神宮は
                                    めちゃくちゃオーラのあるパワースポットです！</p>
                            </div>
                        </div>
                        </a></li>
                        @endforeach
                </ul>
            </div>
    <hr>
    
        <section id="main">
        <h3 class="side-title"><span>宮崎市周辺のお店</span></h3>
        <div class="wrapper">
            <ul class="col2">
                @foreach($items as $item)

                <li><a href="{{ route('user.detail-main', [$item->id]) }}">
                    <div class="container">
                        <div class="magazin-image"><img src="img/スクリーンショット 2024-05-15 165324.png" alt="Image" class="image"></div>
                        <div class="container-wrapper">
                        <h3 class="container-title"><span>{{ $item->name }}</span></h3>
                        <p class="category">観光地</p>
                        </div>
                        <div class="detail">
                            <div><p class="button"><button><img src="/img/bookmark02@2x.png" alt="お気に入りボタン"></button></p>
                            </div>
                        <ul class="access">
                            <li>アクセス:{{ $item->access }}</li>
                            <li>住所:〒{{ $item->postal_code }}{{ $item->location->name }}{{ $item->address_level3 }}</li>
                            <li>{{ $item->tel}}</li>
                        </ul>
                
                        </div>
                        <h4 class="coment-title"><span>てげよかポイント</span></h4>
                        <div class="comment-box">
                            <p>とっても珍しい鍾乳洞の中にある鵜戸神宮は
                                めちゃくちゃオーラのあるパワースポットです！</p>
                        </div>
                    </div>
                </a></li>
                @endforeach
                
            </ul>

        </div>

        </section>


    <ul class="pagination">
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">></a></li>
      </ul>
        </section>

        
        <div id="return">
            <a href="{{ route('user.index', [$item->id]) }}"><p>戻る</p></a>
        </div>
        
    </main>
</x-base>