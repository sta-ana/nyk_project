<div>
    <form wire:submit.prevent="uploadPsa" enctype="multipart/form-data">
        <label for="PSA" class="mt-3">Upload PSA here</label>
        <input type="file" name="PSA" wire:model="PSA" class="form-control w-50" id="PSA" accept=".pdf">
        
        <div wire:loading wire:target='PSA' class="ps-2"><span>Preparing...</span></div>
         @if (!empty($PSA))
            <div class="pt-3">
                <button type="submit" class="btn btn-primary btn-sm mt-2">Upload</button>
            </div>
         @endif
    </form>
</div>
