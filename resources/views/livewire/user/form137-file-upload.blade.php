<div>
    <form wire:submit.prevent="uploadForm137" enctype="multipart/form-data">
        <label for="form137" class="mt-3">Upload form137 here</label>
        <input type="file" name="form137" wire:model="form137" class="form-control w-50" id="form137" accept=".pdf">
        
        <div wire:loading wire:target='uploadForm137' class="ps-2"><span>Preparing...</span></div>
         @if (!empty($form137))
            <div class="pt-3">
                <button type="submit" class="btn btn-primary btn-sm mt-2">Upload</button>
            </div>
         @endif
    </form>
</div>