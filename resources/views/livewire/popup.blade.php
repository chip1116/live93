
<li >
    <p wire:click="openPopup" class="btn"><span>ABOUT</span><br>サイトについて</p>
    @if($showPopup)
        <div class="area_modal">
            <div class="modal">
                <p><img src="/img/about2@2x.png" alt="about"></p>
                <div>
                    <button wire:click="closePopup" type="button">閉じる</button>
                </div>
            </div>
        </div>
        <div id="bg_layer"></div>
    @endif
</li>