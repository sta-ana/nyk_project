@section('page-title')
Upload Csv
@endsection

@section('content')
@inject('SchoolYears', App\Models\SchoolYear::class)

<div class="p-5">
    <div class="row justify-content-center">
        <form wire:submit.prevent="importCSV"  method="post" enctype="multipart/form-data" class="p-5 bg-white shadow rounded-3 border w-50">
            @csrf
            <div class="row mb-3">
                <div class="col">
                    <div>
                        <label class="form-label"><h6>Upload CSV here</h6></label>
                        <input type="file" class="form-control" id="fileupload" accept=".csv">
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <div>
                        <label class="form-label"><h6>Choose School Year</h6></label>
                        <select name="" id="" class="form-select">
                            <option value=""></option>
                            @foreach($SchoolYears::get() as $sy)
                            <option value="{{$sy->id}}">{{$sy->school_year}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-auto">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </div>

        </form>
    </div>
</div>
