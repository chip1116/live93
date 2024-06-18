<div class="deco-file">
    @if ($imagePreviewUrl)
        <img src="{{ $imagePreviewUrl }}" alt="Image Preview" style="max-width: 300px; max-height: 300px;">
    @endif
    <label>
    <input type="file" name="upload" value="{{ old('upload') }}" wire:model="image">
    </label>
    <p class="file-names"></p>
    ↑で画像を追加！
</div>
