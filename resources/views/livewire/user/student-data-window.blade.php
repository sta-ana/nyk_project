<div wire:key="dataWindow_{{$school_year->id}}">
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="viewStudentDataLabel_{{$school_year->id}}">
            STUDENT DATA FOR {{$school_year->school_year}}
        </h1>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal"
            aria-label="Close"></button> -->
    </div>
    <div class="modal-body">
        <div class="row justify-content-center">
            <div class="col-auto">
                <div wire:loading class="spinner-border text-primary" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
        </div>
        @if($showingTable)
        <livewire:user.student-list :school_year="$school_year" wire:key="studentList_{{$school_year->id}}">
        @else
        <livewire:user.student-file :selectedStudentId="$selectedStudentId" wire:key="studentFileUpload_{{$selectedStudentId}}">
        @endif
    </div>
    <div class="modal-footer">
        @if($showingTable)
        <div class="row justify-content end">
            <div class="col-auto">
                <button class="btn btn-primary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
        @endif
    </div>
</div>
