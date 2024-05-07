@section('page-title')
Add Student
@endsection

@section('content')
@inject('SchoolYears', App\Models\SchoolYear::class)

<div class="p-5">

    <div class="row justify-content-center">
        <form wire:submit.prevent="addStudent" class="p-5 bg-white shadow rounded-3 border w-50">
            <div class="row mb-3">
                <div class="col">
                    <div>
                        <div class="text-center mb-4 fw-semibold ">
                            <h1>Add Student</h1>
                        </div>
                        <h6>Enter First Name</h6>
                        <input class="form-control mt-2" type="text" id="firstName" wire:model="firstName">
                        @error('firstName')
                        <small class="text-danger">{{$message}}</small>
                        @enderror

                        <h6>Enter Last Name</h6>
                        <input class="form-control mb-2 " type="text" id="lastName" wire:model="lastName">
                        @error('lastName')
                        <small class="text-danger">{{$message}}</small>
                        @enderror

                        <h6>Enter Middle Name</h6>
                        <input class="form-control mb-2" type="text" id="middleName" wire:model="middleName">
                        @error('middleName')
                        <small class="text-danger">{{$message}}</small>
                        @enderror

                        <h6>Enter Birthday</h6>
                        <input class="form-control mb-2" type="date" id="birthDay" wire:model="birthDate">
                        @error('birthDate')
                        <small class="text-danger">{{$message}}</small>
                        @enderror

                        <h6>Enter Gender</h6>
                        <select class="form-select mb-2" name="gender" id="gender" wire:model="gender">
                            <option value="empty"> </option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        @error('gender')
                        <small class="text-danger">{{$message}}</small>
                        @enderror

                        <h6>Enter Address</h6>
                        <input class="form-control mb-2" type="text" id="address" name="address" wire:model="address">
                        @error('address')
                        <small class="text-danger">{{$message}}</small>
                        @enderror

                        <h6>Enter Blood Type</h6>
                        <select class="form-select mb-2" name="bloodType" id="bloodType" wire:model="bloodType">
                            <option value="empty"> </option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                        </select>
                        @error('bloodType')
                        <small class="text-danger">{{$message}}</small>
                        @enderror

                        <h6>Enter Course</h6>
                        <select class="form-select mb-2" id="course" wire:model="course">
                            <option value="empty"> </option>
                            <option value="bsit">BSIT</option>
                            <option value="bshm">BSHM</option>
                            <option value="bshm">BSCOE</option>
                        </select>
                        @error('course')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                        <br>
                        <!-- <h6>Upload Student File</h6>
                        <input class="form-control mb-1" type="File" id="stud_file" accept=".pdf" wire:model="stud_file"> -->

                        <label class="form-label">
                            <h6>Choose School Year</h6>
                        </label>
                        <select name="school_year" id="school_year" class="form-select" wire:model="school_year">
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
                <div class="col-auto align-content-center ">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </div>

        </form>
    </div>
</div>
