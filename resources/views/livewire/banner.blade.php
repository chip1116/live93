<div class="banner_bg">    
    <p wire:click="openBanner" class="btn">バナー</p>
    @if($showBanner)
        <div class="area_modal">
            <div class="banner_p">
                <p><img src="/img/jagaアイコン04.png" alt="banner"></p>
                <div>
                    <button wire:click="closeBanner" type="button">閉じる</button>
                </div>
            </div>
        </div>
        <div id="banner_layer"></div>
    @endif
</div>