   <x-base>
       <main class="mypage_main">

           <inner class="mypage_inner">

               <div class="mypage_top">
                   <h2>マイページ</h2>
               </div>

               <div class="mypage_content">
                   <dl>
                       <dt>アカウント名</dt>
                       <dd>{{ $items->name }}</dd>
                       <dt>メールアドレス</dt>
                       <dd>{{ $items->email }}</dd>
                       <dt>じゃが数&#9825;</dt>
                       <dd class="heart">54じゃが&#9825;</dd>
                       <dt>お気に入り&#9825;</dt>
                       <dd class="heart">5件登録済み</dd>
                       <button class="logout"><a href="{{ route('user.logout') }}">ログアウト</a></button>

                       <div class="wrapper">
                           <ul class="col2 flex">
                               <!-- @foreach($items as $item) -->
                               <li class="flex_item"><a href="">
                                       <div class="container">
                                           <div class="magazin-image"><img src="" alt="Image" class="image"></div>
                                           <div class="container-wrapper">
                                               <h3 class="container-title"><span></span></h3>
                                               <p class="category">観光地</p>
                                           </div>
                                           <div class="detail">
                                               <ul class="access">
                                                   <li>アクセス:</li>
                                                   <li>住所:〒</li>
                                                   <li></li>
                                               </ul>

                                           </div>
                                           <h4 class="coment-title"><span>てげよかポイント</span></h4>
                                           <div class="comment-box">
                                               <p>とっても珍しい鍾乳洞の中にある鵜戸神宮は
                                                   めちゃくちゃオーラのあるパワースポットです！</p>
                                           </div>
                                       </div>
                                   </a></li>
                               <!-- @endforeach -->
                           </ul>
                       </div>
                   </dl>
               </div>

               <div class="back">
                   <a href="{{ route('user.index') }}">
                       <h2>戻る</h2>
                   </a>
               </div>

           </inner>

       </main>
   </x-base>