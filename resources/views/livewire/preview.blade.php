<div>
    @php($key = 'form.file')
    @if ($form['file'])
        <img class="h-[300px] object-fit mx-auto" src="{{ $form['file']->temporaryUrl() }}" alt="">  
    @else
        <input type="file" wire:model.defer="{{ $key }}" accept="image/*">
    @endif
</div>