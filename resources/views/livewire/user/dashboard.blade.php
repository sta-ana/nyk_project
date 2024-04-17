<div>
    <x-slot name="title">
        User - Dashboard
    </x-slot>
    <div class="container-fluid">
        <h1 class="mt-2">Student List</h1>
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
        <div class="row">
            @if (isset($school_years))
            @foreach ($school_years as $school_year)
            <div class="col">


                <!-- Student Document card -->
                <div class="card shadow mb-3" style="width: 30rem; ">
                    <div class="card-body fs-6">
                        <div class="mb-3 d-flex justify-content-between ">
                            <div>
                                <span class="fs-5 fw-bold d-flex align-items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                        class="bi bi-check-square-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z" />
                                    </svg>
                                    Student Data {{$school_year->school_year}}
                                </span>
                            </div>

                        </div>
                        <div class="row mb-3">
                            <div class="col fs-5 mt-3 m-lg-3 d-flex justify-content-between align-items-center fw-semibold ">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="120" height="110" fill="currentColor" class="bi bi-people"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4" />
                                    </svg>
                                    Total student
                                </div>
                                  <span>50</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="table-responsive">
                               
                            </div>
                        </div>
                        <div class="text-end mt-3">

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal"> <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-view-list" viewBox="0 0 16 16">
                                    <path
                                        d="M3 4.5h10a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2m0 1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1zM1 2a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 2m0 12a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 14" />
                                </svg>
                                View
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-fullscreen">
                                    <div class="modal-content ">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Student List 2024</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <table>
                                                <div class="row">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered table-hover text-left    ">
                                                            <thead class="text-nowrap">
                                                                <tr>
                                                                    <th>Last Name</th>
                                                                    <th>First name</th>
                                                                    <th>Middle Name</th>
                                                                    <th>Date of Birth</th>
                                                                    <th>Gender</th>
                                                                    <th>Address</th>
                                                                    <th>Blood Type</th>
                                                                    <th>Coure</th>
                                                                    <th>File</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="text-nowrap">
                                                                <tr>
                                                                    <td>Sta. Ana</td>
                                                                    <td>Dominic Lourence</td>
                                                                    <td>Sancho</td>
                                                                    <td>08092024</td>
                                                                    <td>Male</td>
                                                                    <td>Calamba City</td>
                                                                    <td>AB</td>
                                                                    <td>BSIT</td>
                                                                    <td>xxx</td>
                                                                    <td>
                                                                        <button class="btn btn-primary ">Edit</button>
                                                                        <button
                                                                            class="btn btn-secondary ">Update</button>
                                                                        <button class="btn btn-danger  ">Delete</button>

                                                                    </td>
                                                                </tr>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save
                                                            changes</button>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="card-footer">Footer
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>