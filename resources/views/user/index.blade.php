
    <x-base>
        <div class="toppage">

        @if (session('message'))
            <p class="message">{{ session('message') }}</p>
        @elseif ($user !== null)       
            <p class="welcome">ようこそ&nbsp;<span class="welcome_name">{{ $user->name }}</span>&nbsp;さん</p>
        @endif
            
            @if (session('message_logout'))
                <p class="message">{{ session('message_logout') }}</p>
            @endif
            <div class="top_img">
                <!-- <img src="/img/img.png" alt="top_img" class="back"> -->
                <div class="menu_tab">
                <div class="mypage">
                    <a href="{{ route('user.mypage') }}">マイページ</a>
                </div>
                <div class="menu_list">
                    <ul>
                        @livewire('popup')
                        <li><a href="#search" class="btn"><span>SEARCH</span><br>さがす</a></li>
                        <li><a href="{{ route('user.newpost') }}" class="btn"><span>POST</span><br>投稿する</a></li>
                        <li><a href="{{ route('user.contact') }}" class="btn"><span>CONTACT</span><br>お問い合わせ</a></li>
                    </ul>
                </div>
                <div>
                    <img src="/img/top_image.png" alt="top_img2" class="top">
                </div>
            </div>
            </div>
            
        </div>
        <div class="main" id="search">
            <!-- <img src="square.png" alt="background-image"> -->
            <div class="section">
                <section class="search small_logo">
                    <h3>キーワードでさがす<img src="/img/jagaアイコン03.png" alt="img"></h3>
                    <form action="{{ route('user.search') }}" method="get">
                        <p>
                            <input type="text" name="search">
                            <button type="submit" class="search_button">Go!</button>
                        </p>
                    </form>
                </section>
                <section class="place small_logo">
                    <h3>エリアからさがす<img src="/img/jagaアイコン02.png" alt="img"></h3>
                    <div class="background-square"></div>
                    <ul class="place-top">
                        @for($i = 0; $i < 5; $i++)
                        <li><a href="{{ route('user.detail-screen', [$locations[$i]['id']]) }}">{{ $locations[$i]['name'] }}</a></li>
                        @endfor
                    </ul>
                    <ul class="place-bottom">
                        @for($i = 5; $i < count($locations); $i++)
                        <li><a href="{{ route('user.detail-screen', [$locations[$i]['id']]) }}">{{ $locations[$i]['name'] }}</a></li>
                        @endfor
                    </ul>
                </section>
                <section class="category small_logo">
                    <h3>ジャンルからさがす<img src="/img/jagaアイコン03.png" alt="img"></h3>
                    <ul class="category_top">
                        @foreach($categories as $category)
                        <li><a href="{{ route('user.category', ['id' => $category->id]) }}">{{ $category->category_name }}</a></li>
                        @endforeach
                    </ul>
                </section>
                <div class="new_post">
                    <section class="new_post small_logo">
                        <h3>新着投稿&emsp;NEW!</h3>
                        <ul class="new_post_detail">
                            @foreach($items as $item)
                                <a href="{{ route('user.detail-main', [$item->id]) }}">
                                    <li>
                                        <img src="{{ asset('storage/images/'.$item->store_img) }}" alt="img1">
                                        <p>{{ $item->name }}</p>
                                        <p>{{ $item->location->name }}</p>
                                        <p>{{ $item->created_at->format('Y.n.j') }} UP!</p>
                                    </li>
                                </a>
                            @endforeach
                        </ul>
                        <button class="more search_button" onclick="location.href='{{ route('user.recent') }}'">もっと見る</button>
                    </section>
                </div>
            </div>
            <aside class="submenu">
                <div>
                    <p><button class="login" onclick="location.href='{{ route('user.login') }}'">ログイン</button></p>
                    <p>OR</p>
                    <p><button class="signin" onclick="location.href='{{ route('user.register') }}'">新規登録</button></p>
                </div>
                <div class="ranking">
                    <h3>ユーザーランキング</h3>
                    <ol>
                    @foreach($rank as $item)

                        <li class="ranking_detail">
                            <p>{{$loop->iteration}}位:</p>
                            <p><img src="{{ asset('storage/images/'.$item->member->thumbnail) }}" alt="thumbnail"></p>
                            <div>
                                <p>{{ $item->member->name }}</p>
                                <p>{{ $item->member_count }}件投稿！</p>
                            </div>
                        </li>
                        @endforeach
                    </ol>
                </div>
                    @livewire('banner')
            </aside>
        </div>
    </x-base>
