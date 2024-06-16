<div>
<input type="file" wire:model="image">
    @error('image') <span class="error">{{ $message }}</span> @enderror
            @if ($image)
                @php
                    try {
                        $url = $image->temporaryUrl();
                        $photoStatus = true;
                    }catch (RuntimeException $e){
                        $this->photoStatus = false;
                    }
                @endphp
                @if($photoStatus) <img src="{{ $url }}" class="w-auto h-64"> @endif
            @endif
</div>