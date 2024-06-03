
    <x-base>
        <div class="toppage">
            <div class="top_img">
                <!-- <img src="/img/img.png" alt="top_img" class="back"> -->
                <div class="menu_tab">
                <div class="mypage">
                    <a href="{{ route('user.mypage') }}">マイページ</a>
                </div>
                <div class="menu_list">
                    <ul>
                        <li>
                            <input type="checkbox" id="popup">
                            <label class="popup-open" for="popup"><span>ABOUT</span><br>サイトについて</label>
                            <div class="popup-overlay">
                                <div class="popup-window">
                                    <p class="popup-text"><img src="about.png" alt="about" class="popup-img"></p>
                                    <label class="popup-close" for="popup">
                                        <svg width="18" height="18" xmlns="http://www.w3.org/2000/svg">
                                            <line x1="0" y1="0" x2="18" y2="18" stroke="white" stroke-width="3"></line>
                                            <line x1="0" y1="18" x2="18" y2="0" stroke="white" stroke-width="3"></line>
                                        </svg>
                                    </label>
                                </div>
                            </div>
                        </li>
                        <!-- <a href="#"><span>ABOUT</span><br>サイトについて</a></li> -->
                        <li><a href="#search"><span>SEARCH</span><br>さがす</a></li>
                        <li><a href="{{ route('user.newpost') }}"><span>POST</span><br>投稿する</a></li>
                        <li><a href="{{ route('user.contact') }}"><span>CONTACT</span><br>お問い合わせ</a></li>
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
                    <form action="#">
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
                        @for($i = 0; $i < 3; $i++)
                        <li><a href="{{ route('user.detail-screen', [$locations[$i]['id']]) }}">{{ $locations[$i]['name'] }}</a></li>
                        @endfor
                    </ul>
                    <ul class="place-bottom">
                        @for($i = 3; $i < count($locations); $i++)
                        <li><a href="{{ route('user.detail-screen', [$locations[$i]['id']]) }}">{{ $locations[$i]['name'] }}</a></li>
                        @endfor
                        <!-- <li><a href="">日南市</a></li>
                        <li><a href="">新富町</a></li>
                        <li><a href="">日向市</a></li>
                        <li><a href="">西都市</a></li>
                        <li><a href="">小林市</a></li>
                        <li><a href="">えびの市</a></li>
                        <li><a href="">国富町</a></li>
                        <li><a href="">木城町</a></li>
                        <li><a href="">門川町</a></li>
                        <li><a href="">都農町</a></li> -->
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
                            <li>
                                <img src="" alt="img1">
                                <p>{{ $item->created_at->format('Y.n.j') }}</p>
                                <p>{{ $item->name }}</p>
                                <p>〒{{ $item->postal_code }} {{ $item->location->name }}{{ $item->address_level3 }}</p>
                            </li>
                            @endforeach
                        </ul>
                        <button class="more search_button">もっと見る</button>
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
                        <li class="ranking_detail">
                            <p>1</p>
                            <p><img src="" alt="user1"></p>
                            <div>
                                <p>name</p>
                                <p>view</p>
                            </div>
                        </li>
                        <li class="ranking_detail">
                            <p>2</p>
                            <p><img src="" alt="user2"></p>
                            <div>
                                <p>name</p>
                                <p>view</p>
                            </div>
                        </li>
                        <li class="ranking_detail">
                            <p>3</p>
                            <p><img src="" alt="user3"></p>
                            <div>
                                <p>name</p>
                                <p>view</p>
                            </div>
                        </li>
                        </li>
                    </ol>
                </div>
            </aside>
        </div>
    </x-base>
