<div wire:key="studentFileUpload_{{ $selectedStudentId }}">
    <div class="row text-start">
        <h5>Upload File For Student</h5>
        <div class="col">
            <div>
                @livewire('user.psa-file-upload')
            </div>

            <div>
                @livewire('user.psa-file-upload')
            </div>

        </div>
    </div>

    @if(!empty($selectedStudentId))
    <div class="row">
        <button wire:click="GoBack" class="btn btn-secondary btn-sm mt-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
            </svg>
            Go Back
        </button>
    </div>
    @endif
</div>