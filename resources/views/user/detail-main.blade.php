
<x-base>

<main>
    <div class="h2-taitle">
        <h2 class="ditail-title margin">詳細情報</h2>
        </div>

    <section id="detail-top">

    <div class="detail-container">

    <div class="container-wrapper">
    <div>
        <p class="category">観光地</p>
        </div>
        <div>
        <h3 class="container-title"><span>{{ $item->name }}</span></h3>
        </div>
        
        <div>
        <p class="button"><button><img src="/img/bookmark02@2x.png" alt="お気に入りボタン"></button></p>
        </div>
     </div>

        <div class="magazin-image"><img src="/img/udo.png" alt="Image" class="image"></div>
        
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
            <p>{{ $item2->comment }}</p>
        </div>
        
    </div>
    </div>
    </section>
    
    <div id="return">
        <a href="#"><p>戻る</p></a></div>
</main>

</x-base>