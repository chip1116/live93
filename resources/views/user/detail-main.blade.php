
<x-base>

<main>
    <div class="h2-taitle">
        <h2 class="detail-title margin">詳細情報</h2>
        </div>

    <section id="detail-top">
@if (session('message'))
    <p class="message">{{ session('message') }}</p>
@endif
    <div class="detail-container">

    <div class="maincontainer-wrapper">
    <div>
    @foreach($item->category as $category)
        <p class="category">{{ $category->category_name }}</p>
    @endforeach
        </div>
        <div>
        <h3 class="maincontainer-title"><span>{{ $item->name }}</span></h3>
        </div>
        
        <div>
   @livewire('favorite', [
            'storeID' => $item->id    
        ])
        </div>
     </div>
        <div class="magazin-image"><img src="{{ asset('storage/images/'.$item->store_img) }}" alt="Image" class="image"></div>
        
        <div class="detail">
        <div class="detail-wrapper">
        @livewire('like', [
            'storeID' => $item->id    
        ])
       
        <ul class="access">
            <li>アクセス:{{ $item->access}}</li>
            <li>住所:{{ $item->postal_code }}{{ $item->location->name }}{{ $item->address_level3 }}</li>
            <li>TEL:{{ $item->tel }}</li>
        </ul>
        </div>

        <h4 class="coment-title"><span>てげよかポイント</span></h4>
        <div class="comment-box">
            <p>{{ $item->store_comment }}</p>
        </div>
        
    </div>
    </div>
        <h2 class="buck">クチコミ投稿</h2>
        <div class="post-section">
        <div class="content">
                
                <form action="{{ route('post.store') }}" enctype="multipart/form-data" class="form" id="form1" method="POST">
                    @csrf
                    <input type="hidden" name="store_id" value="1">
                    <p>写真</p>
                    <div class="deco-file">
                        <label>
                            <input type="file" name="upload">
                        </label>
                        <p class="file-names"></p>
                        ＋ファイルを追加
                    </div>

                    <p>コメント</p>
                    <textarea name="comment" class="area-bg"></textarea>
                </form>
            </div>
            <button type="submit" form="form1" class="post-button">投稿</button>
        </div>
        <h2 class="buck">クチコミ一覧</h2>
        @foreach($item->post as $post)
        <div class="section">
               <img src="{{ asset('storage/images/'.$post->post_img) }}" class="img-box">
               <div class="text-box">
                <p> ユーザー{{ \App\Models\Member::find($post->member_id)->name }}</p>
                <p>{{$post->comment}}</p></div>
               {{-- {{dd($member->name)}} --}}
            </div>
               
            @endforeach
        </section>
    <div id="return">
        <a href="{{ route('user.index') }}"><p>戻る</p></a></div>
</main>

</x-base>