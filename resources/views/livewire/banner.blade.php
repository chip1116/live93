<div class="banner_bg">    
    <p wire:click="openBanner" class="btn"><img src="/img/profile@2x.png" alt="banner"></p>
    @if($showBanner)
        <div class="area_modal">
            <div class="banner_p">
                <p><img src="/img/profile.png" alt="about_us"></p>
                <div>
                    <button wire:click="closeBanner" type="button">閉じる</button>
                </div>
            </div>
        </div>
        <div id="banner_layer"></div>
    @endif
</div>