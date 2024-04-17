@section('page-title')
Add Student
@endsection

@section('content')

<div>
    <!-- form -->
    <div class="row text-start">
        <div class=" row bg-white  w-50 shadow h-75  " style="margin-top: 2cm; margin-left: 7cm; height: 20m;">
            <div class="mt-2">
                <div class="text-center mb-3 fs-3 fw-semibold"  >
                    ADD STUDENT
                </div>
                Enter First Name
                <input class="form-control mt-2" type="text" id="firstName" name="firstName">
                Enter Last Name
                <input class="form-control mb-2" type="text" id="lastName" name="LastName">
                Enter Middle Name
                <input class="form-control mb-2 " type="text" id="middleName" name="MiddleName">
                Enter Birthday
                <input class="form-control mb-2 " type="date" id="birthDay" name="birthDay">
                Enter Gender
                <select class="form-control mb-2 " name="gender" id="gender">
                    <option value="empty"> </option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                Enter Address
                <input class="form-control mb-2" type="text" id="address" name="address">
                Enter Blod Type
                <input class="form-control mb-2" type="text" id="bloodType" name="bloodType">
                Enter Course
                <select class="form-control mb-2" name="gender" id="gender">
                    <option value="empty"> </option>
                    <option value="bsit">BSIT</option>
                    <option value="bshm">BSHM</option>
                    <option value="bshm">BSCOE</option>
                </select>
                Upload Student File
                <input class="form-control mb-2" type="File" id="bloodType" accept=".pdf"  name="bloodType">

                <button class="btn btn-primary mt-1">Submit</button>

            </div>
    </div>
</div>


@endsection