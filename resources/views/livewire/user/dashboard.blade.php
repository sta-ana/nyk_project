<div>
    <x-slot name="title">
        User - Dashboard
    </x-slot>
    <div class="container-fluid">
        <h1 class="mt-3 fs-2">DASHBOARD</h1>
        <div class="w-100 d-flex justify-content-end">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal"
                data-bs-target="#addSchoolYearModal">
                Add School Year
            </button>

            <!-- Modal -->
            <div class="modal fade" id="addSchoolYearModal" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="addSchoolYearLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">


                        <!-- Add School Year Form -->
                        <form action="{{route('user.schoolyear.add')}}" method="POST">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title" id="addSchoolYearLabel">Add School Year</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            School Year
                                        </span>
                                        <select name="school_year" id="school_year" class="form-select">
                                            @for($i = date("Y") + 10; $i > date("Y") - 10; $i--)
                                            @if (date("Y") == $i)
                                            <option value="{{$i}}" selected>{{ $i }}</option>
                                            @else
                                            <option value="{{$i}}">{{ $i }}</option>
                                            @endif
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Add</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row gy-5 ps-4">
            @foreach ($school_years as $school_year)
            <div class="col-auto" >
                <style>
                    .card {
                        border: 3px double #24261d;
                    }
                </style>

                <div class="card shadow   " style="width: 18rem;">
                    <div class="card-body">
                        <div class="row"><span class="fw-bold fs-5">Student Data {{$school_year->school_year}}</span>
                        </div>
                        <hr class="mt-2 mb-2">
                        <div class="row">
                            <div class="col d-flex align-items-center">
                                Total Students<br>50
                            </div>
                            <div class="col-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor"
                                    class="bi bi-people" viewBox="0 0 16 16">
                                    <path
                                        d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <!-- View Button -->
                        <button class="btn-sm btn btn-outline-primary shadow "  data-bs-toggle="modal"
                            data-bs-target="#viewStudentData_{{$school_year->id}}">
                                view all
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                            </svg>
                        </button>
                        <!-- Modal for student list-->
                        <div class="modal fade" id="viewStudentData_{{$school_year->id}}" tabindex="-1"
                            aria-labelledby="viewStudentDataLabel_{{$school_year->id}}" aria-hidden="true">
                            <div class="modal-dialog modal-fullscreen">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="viewStudentDataLabel_{{$school_year->id}}">
                                            STUDENT DATA FOR {{$school_year->school_year}}
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table table-bordered text-start text-nowrap ">
                                            <thead>
                                                <tr>
                                                    <th>Last Name</th>
                                                    <th>First name</th>
                                                    <th>Middle Name</th>
                                                    <th>Date of Birth</th>
                                                    <th>Gender</th>
                                                    <th>Address</th>
                                                    <th>Blood Type</th>
                                                    <th>Coure</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Sta. Ana</td>
                                                    <td>Dominic Lourence</td>
                                                    <td>Sancho</td>
                                                    <td>08092024</td>
                                                    <td>Male</td>
                                                    <td>Calamba City</td>
                                                    <td>AB</td>
                                                    <td>BSIT</td>
                                                    <td>
                                                        <div class="d-flex flex-row gap-1 ">
                                                            <button class="btn btn-sm  btn-primary ">Edit</button>
                                                            <button class="btn btn-sm  btn-secondary ">Update</button>
                                                            <button class="btn btn-sm  btn-danger  ">Delete</button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>