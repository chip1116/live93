
   <x-base>

    <main>
        <div class="h2-taitle">
        @if (Request::routeIs('user.detail-screen'))
            @if (count($items) > 0)
                <h2 class="cityname">{{ $items[0]->location->name }}</h2>
            @elseif (count($items) <= 0)
                <h2 class="cityname">{{ $location_none->name }}</h2>
            @endif
        @elseif (Request::routeIs('user.category'))
            @if (count($items) > 0)
                <h2 class="cityname">{{ $items[0]->category[0]->category_name }}</h2>
            @elseif (count($items) <= 0)
                <h2 class="cityname">{{ $category->category_name }}</h2>
            @endif    
        @elseif (Request::routeIs('user.recent'))
        <h2 class="cityname">新着投稿</h2>
        @elseif (Request::routeIs('user.search'))
        <h2 class="cityname">キーワード検索</h2>
        @endif
        </div>
       
        <section id="top">
            <h3 class="side-title"><span>おすすめTOP3</span></h3>
            <div class="wrapper">
                <ul class="col3">
                    @foreach($rank as $item)
                    <li><p class="lank">{{$loop->iteration}}位</p><a href="{{ route('user.detail-main', [$item->id]) }}">

<!-- ここから投稿表示 -->
                    <div class="container">
                            <div class="magazin-image"><img src="{{ asset('storage/images/'.$item->store_img) }}" alt="Image" class="image"></div>
                           
                            <div class="list-category">
                            @foreach($item->category as $category)
                            <p class="category">{{ $category->category_name }}</p>
                            @endforeach
                            </div>
                            <div class="container-wrapper">
                            <h3 class="container-title"><span>{{$item->name}}</span></h3>
                            
                            </div>
                            <div class="detail">
                           

                            <ul class="access">
                                <li>{{ $item->access}}</li>
                                <li>住所:{{ $item->postal_code }}{{ $item->location->name }}{{ $item->address_level3 }}</li>
                                <li>{{ $item->tel }}</li>
                            </ul>
                    
                            </div>
                            <h4 class="coment-title"><span>てげよかポイント</span></h4>
                            <div class="comment-box">
                                <p>{{ $item->store_comment }}</p>
                            </div>
                        </div>
                        </a></li>
                    @endforeach
   
                </ul>
            </div>
  <!-- 投稿終わり -->
        <hr>
<!-- ここからジャンル別一覧 -->
        <section id="main">
        @if (Request::routeIs('user.detail-screen'))
            @if(count($items) > 0)
                <h3 class="main-title"><span>{{ $items[0]->location->name }}周辺のお店</span></h3>
            @elseif (count($items) <= 0)
                <h3 class="main-title"><span>{{ $location_none->name }}周辺のお店</span></h3>
                <p>まだ投稿がありません</p>
            @endif
        @elseif (Request::routeIs('user.category'))
            @if (count($items) > 0)
                <h3 class="main-title"><span>ジャンル:{{ $items[0]->category[0]->category_name }}</span></h3>
            @elseif (count($items) <= 0)
                <h3 class="main-title"><span>ジャンル:{{ $category->category_name }}</span></h3>
                <p>まだ投稿がありません</p>
            @endif
        @elseif (Request::routeIs('user.recent'))
        <h3 class="main-title"><span>新着投稿一覧</span></h3>
        @elseif (Request::routeIs('user.search'))
            <h3 class="main-title"><span>キーワード:{{ request()->query('search') }}</span></h3>
        @endif
        <div class="wrapper">
            <ul class="col2">
                @if (Request::routeIs('user.search') && count($items) <= 0) 
                    <p>検索結果がありません。</p>
                @endif
                
                @foreach($items as $item)
                <li><a href="{{ route('user.detail-main', [$item->id]) }}">

<!-- ここから投稿一覧始まる -->
                <div class="container">
                    <div class="magazin-image">
                        <img src="{{ asset('storage/images/'.$item->store_img) }}" alt="Image" class="image">
                    </div>
                       
                    <div class="list-category">
                      @foreach($item->category as $category)
                        <p class="category">{{ $category->category_name }}
                        </p>
                      @endforeach
                    </div>
                    <div class="container-wrapper">
                        <h3 class="container-title">
                            <span>{{ $item->name }}</span>
                        </h3>
                    </div>
                    <div class="detail">
                        <ul class="access">
                            <li>アクセス:{{ $item->access }}</li>
                            <li>住所:〒{{ $item->postal_code }}{{ $item->address_level3 }}</li>
                            <li>TEL:{{ $item->tel}}</li>
                        </ul>
                
                    </div>
                        <h4 class="coment-title">
                            <span>てげよかポイント</span>
                        </h4>
                    <div class="comment-box">
                        <p>{{ $item->store_comment }}</p>
                    </div>
                 </div>
                </a></li>
                @endforeach
            </ul>
        </div>

    </section>

    <!-- <ul class="pagination"> -->
        <!-- <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">></a></li> -->
        {{ $items->links('pagination::bootstrap-4') }}
      <!-- </ul> -->
      <!-- 投稿一覧終わり -->
</section>

        
        <div id="return">
            <a href="{{ route('user.index') }} "><p>戻る</p></a>
        </div>
        
    </main>
</x-base>