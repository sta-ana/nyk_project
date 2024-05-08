<div wire:key="studentFileUpload_{{$selectedStudentId}}">
    @if(empty($selectedStudentId) == false)
    <div class="row">
        <div class="col-auto">
            <button wire:click="GoBack" class="btn btn-primary btn-sm ">Go Back</button>
            <span>Upload file for student # </span>{{$selectedStudentId}}
        </div>
    </div>
    @endif
</div>
