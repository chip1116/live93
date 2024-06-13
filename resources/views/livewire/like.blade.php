<div class=like-wrapper>
    <div class="likebotton">  
        <p><button wire:click="toggleLike"><img src="/img/{{ $file }}" alt="いいねボタン"></button></p>
    </div>
    <div class="likecount"><p>{{$count}}</p></div>
</div>