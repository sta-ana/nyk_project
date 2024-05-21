<div>
    <form wire:submit.prevent="uploadPsa" enctype="multipart/form-data">
        <label class="mt-3">Upload PSA here</label>
        <input type="file" name="PSA" wire:model="PSA" class="form-control w-50" id="PSA" accept=".pdf">
        <button type="submit" class="btn btn-primary btn-sm mt-2">Upload</button>
        <div wire:loading wire:target='PSA'>Uploading...</div>
    </form>
</div>
