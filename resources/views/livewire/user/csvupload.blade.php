{{-- @extends('layouts.app') --}}

@section('page-title')
Upload Csv
@endsection

@section('content')
@inject('SchoolYears', 'App\Models\SchoolYear')

<div class="p-5">
    <div class="row justify-content-center">
        <form action="{{ route('import.csv') }}" method="POST" enctype="multipart/form-data" class="p-5 bg-white shadow rounded-3 border w-50">
            @csrf
            <div class="row mb-3">
                <div class="col">
                    <div>
                        <label class="form-label"><h6>Upload CSV here</h6></label>
                        <input type="file" name="file" class="form-control" id="fileupload" accept=".csv">
                        @error('file')
                        <small class="text-danger">{{$message}}</small>
                        @enderror

                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <div>
                        <label class="form-label"><h6>Choose School Year</h6></label>
                        <select name="school_year" class="form-select">
                            <option value=""></option>
                            @foreach($SchoolYears::get() as $sy)
                            <option value="{{$sy->id}}">{{$sy->school_year}}</option>
                            @endforeach
                        </select>
                        @error('school_year')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection



    <!-- <div class=" row bg-white  w-50 shadow  " style="margin-top: 2cm; margin-left: 6cm; height: 10cm;">
        <div style="margin-left: 2cm;">
            <div style="margin-top: 3cm;">
                <label for="fileupload">Upload CSV File Here</label>
            </div>
            <input type="file" class="form-control w-75 mt-2" id="fileupload" accept=".csv">
            <br>
            <select name="" id="" class="form-select w-50">
                <option value=""></option>
                @foreach($SchoolYears::get() as $sy)
                <option value="{{$sy->id}}">{{$sy->school_year}}</option>
                @endforeach
            </select>
            <button class="bg-primary btn btn-primary text-center ">Submit</button>
        </div>

    </div> -->