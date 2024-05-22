<div wire:key="studentList_{{$school_year->id}}" class="table-responsive">
    <table class="table table-bordered text-start text-nowrap table-hover">
        <thead>
            <tr>
                <th>Last Name</th>
                <th>First name</th>
                <th>Middle Name</th>
                <th>Date of Birth</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Blood Type</th>
                <th>Course</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            @inject("students", App\Models\Student::class)
            @foreach($students::where('school_year_id', $school_year -> id)->orderBy('last_name') ->get() as $student)
            <tr>
                <td>{{ $student->last_name }}</td>
                <td>{{ $student->first_name }}</td>
                <td>{{ $student->middle_name }}</td>
                <td>{{ $student->date_of_birth }}</td>
                <td>{{ $student->gender }}</td>
                <td>{{ $student->address }}</td>
                <td>{{ $student->blood_type }}</td>
                <td>{{ strtoupper($student->course) }}</td>
                <td>
                    <form wire:click.prevent>

                        <button id="upload_{{$student->id}}" wire:click="fileUpload({{$student->id}})"
                            class="btn btn-sm btn-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-file-earmark-arrow-up" viewBox="0 0 16 16">
                                <path
                                    d="M8.5 11.5a.5.5 0 0 1-1 0V7.707L6.354 8.854a.5.5 0 1 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 7.707z" />
                                <path
                                    d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
                            </svg>
                            Upload File
                        </button>

                        <button class="btn btn-sm  btn-danger" wire:click="delStudent({{$student->id}})"> <svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-trash" viewBox="0 0 16 16">
                                <path
                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                <path
                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                            </svg> Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>