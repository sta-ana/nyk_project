<div wire:key="studentFileUpload_{{$selectedStudentId}}">
    <!-- <div class="col">
        <span class="fs-4 fw-semibold ">Upload file for student</span>
        {{$selectedStudentId}}
    </div>
     -->
    <div class=" row text-start">

        <h5>Upload File For Student</h5>
        <div class="col">

            <!-- File upload for student PSA -->
            <label class="mt-3">Upload PSA here</label>
            <input type="file" name="PSA" wire:model="PSA" class="form-control  w-50 " id="PSA" accept=".pdf">
            <button wire:model="uploadPsa" wire:click="uploadPsa" class="btn btn-primary btn-sm mt-2">Upload</button>

            <!-- file upload for student form137 -->
            <br>
            <label class="mt-3">Upload Form137 here</label>
            <input type="file" name="form137" class="form-control w-50 " id="form137" accept=".pdf">
            <button wire:model="upload" wire:click="uploadForm137" class="btn btn-primary btn-sm mt-2">Upload</button>

        </div>
    </div>
    
    @if(empty($selectedStudentId) == false)
    <div class="row">
        <button wire:click="GoBack" wire:model="form137" class="btn btn-secondary btn-sm mt-3"><svg
                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
            </svg>Go Back</button>
    </div>
    @endif
</div>