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
                       <h3>投稿ログ</h3>
                           <ul class="col2 flex">
                               @foreach($posts as $item)
                               <li class="flex_item"><a href="{{ route('user.detail-main', [$item->store->id]) }}">
                                       <div class="container">
                                           <div class="magazin-image"><img src="" alt="Image" class="image"></div>
                                           <div class="container-wrapper">
                                               <h3 class="container-title"><span>{{ $item->store->name }}</span></h3>
                                               @foreach($item->store->category as $category)
                                                <p class="category">{{ $category->category_name }}</p>
                                            @endforeach
                                           </div>                        
                                       </div>
                                   </a></li>
                               @endforeach
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