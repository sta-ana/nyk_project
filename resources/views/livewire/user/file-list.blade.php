<div>
    <div class="ps-5 pt-2 pe-5">
        <div class="round-3 shadow-sm p-3 bg-white mt-3 mb-3">

            <div class="col">
                <label class="form-label fs-3 fw-strong fw-semibold ">Student File List</label>
            </div>

            <table class="table table-hover table-sm mt-3 table-striped text-nowrap">
                <thead>
                    <tr>
                        <th>Student Full Name</th>
                        <th>PSA</th>
                        <th>Form137</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->last_name . ', ' . $student->first_name}}</td>
                        <td>
                            @if (!empty($psa[$student->id]))
                            <span id="studentPSABtn_{{$student->id}}" class="link-primary" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#studentPSAModal_{{$student->id}}">
                                {{ $psa[$student->id]->file_name }}
                            </span>
                            <!-- Modal -->
                            <div class="modal fade" id="studentPSAModal_{{$student->id}}" tabindex="-1"
                                aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">{{ $student->last_name .' ' . $student->first_name }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body" style="min-height: 80vh;">
                                            <iframe src="{{ route('psa.show', ['fileName' => $psa[$student->id]->file_name]) }}" style="width: 100%; height: 100vh;">
                                            </iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                            <span>No File</span>
                            @endif
                        </td>


                        <!--form137 -->
                        <td>
                                @if (!empty($form137[$student->id]))
                                <span id="studentPSABtn_{{$student->id}}" class="link-primary" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#studentPSAModal_{{$student->id}}">
                                    {{ $form137[$student->id]->file_name }}
                                </span>
                                <!-- Modal -->
                                <div class="modal fade" id="studentPSAModal_{{$student->id}}" tabindex="-1"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">{{ $student->last_name .' ' . $student->first_name }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body" style="min-height: 80vh;">
                                                <iframe src="{{ route('form137.show', ['fileName' => $form137[$student->id]->file_name]) }}" style="width: 100%; height: 100vh;">
                                                </iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <span>No File</span>
                                @endif
                        </td>
                        <td><button class="btn btn-danger btn-sm">Delete</button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>