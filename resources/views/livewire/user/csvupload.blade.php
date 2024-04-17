@section('page-title')
Upload Csv
@endsection

@section('content')

<div>
    <div class=" row bg-white  w-50 shadow  " style="margin-top: 2cm; margin-left: 6cm; height: 10cm;">
        <div style="margin-left: 2cm;">
            <div style="margin-top: 3cm;">
                <label for="fileupload">Upload CSV File Here</label>
            </div>
            <input type="file" class="form-control w-75 mt-2" id="fileupload" accept=".csv">
            <br>
            <button class="bg-primary btn btn-primary text-center ">Submit</button>
        </div>

    </div>
</div>