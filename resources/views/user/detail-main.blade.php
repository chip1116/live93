
<x-base>

<main>
    <div class="h2-taitle">
        <h2 class="detail-title margin">詳細情報</h2>
        </div>

    <section id="detail-top">
@if (session('message'))
{{ session('message') }}
@endif
    <div class="detail-container">

    <div class="container-wrapper">
    <div>
        <p class="category">観光地</p>
        </div>
        <div>
        <h3 class="container-title"><span>{{ $item->name }}</span></h3>
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
    
        @foreach($item->post as $post)
        <div class="section">
               <img src="{{ asset('storage/images/'.$post->post_img) }}" class="img-box"><div class="text-box"><p>user名</p><p>{{$post->comment}}</p></div>
            </div>
               
            @endforeach
        </section>
    <div id="return">
        <a href="{{ route('user.index') }}"><p>戻る</p></a></div>
</main>

</x-base>