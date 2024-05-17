@inject('SchoolYears', App\Models\SchoolYear::class)
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
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-plus-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                    <path
                        d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                </svg>
                Add School Year
            </button>

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
        <div class="row gy-4 ps-4">
            @foreach ($school_years as $school_year)
            <div class="col-auto">
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
                                Total Students<br>{{ App\Models\Student::where('school_year_id',
                                $school_year->id)->count() }}
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

                        <!-- delete school year btn-->
                        <button class="btn-sm btn btn-outline-danger shadow " data-bs-toggle="modal"
                            data-bs-target="#deleteSchoolYear_{{$school_year->id}}"><svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-trash" viewBox="0 0 16 16">
                                <path
                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                <path
                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                            </svg></button>

                        <!-- Modal for delete school year-->
                        <div wire:ignore class="modal fade" id="deleteSchoolYear_{{$school_year->id}}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h7 class="modal-title" id="exampleModalLabel">Are you sure you want to delete?
                                        </h7>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row justify-content-center ">
                                            <div class="col-auto">
                                                <button wire:model="data"
                                                    wire:click="delschoolyear({{$school_year->school_year}})"
                                                    class="btn btn-danger btn-sm shadow">Yes</button>
                                                <button type="button" class="btn btn-primary btn-sm shadow "
                                                    data-bs-dismiss="modal">No</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer shadow-lg">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- View Button -->
                        <button class="btn-sm btn btn-outline-primary shadow " data-bs-toggle="modal"
                            data-bs-target="#viewStudentData_{{$school_year->id}}" data-bs-keyboard="false">
                            view all
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                            </svg>
                        </button>


                        <!-- Modal for student list-->
                        <div wire:ignore wire:key="viewStudentData_{{$school_year->id}}" class="modal " data-bs-keyboard="false" id="viewStudentData_{{$school_year->id}}" tabindex="-1"
                            aria-labelledby="viewStudentDataLabel_{{$school_year->id}}" aria-hidden="true">
                            <div class="modal-dialog modal-fullscreen">
                                <div class="modal-content">
                                    <livewire:user.student-data-window :school_year='$school_year' wire:key="dataWindow_{{$school_year->id}}"></livewire:user.student-data-window>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>