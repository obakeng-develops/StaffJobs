@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8 pt-5">
            <button class="btn btn-primary rounded header rounded-0 bg-white border border-dark text-dark" data-toggle="modal" data-target="#addModal">Add new post</button>
                            <div class="modal fade" tabindex="-1" role="dialog" id="addModal">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header modal-custom-header">
                                            <h5 class="modal-title">Add new job</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form method="POST" action="{{ route('job.store') }}">
                                            @csrf
                                        <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="jobname">Job Name:</label>
                                                    <input type="text" class="form-control" name="jobname" placeholder="Job Name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="description">Description:</label>
                                                    <textarea rows="4" type="text" class="form-control" id="mytextarea" placeholder="Job Description" name="description"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="location">Location:</label>
                                                    <input type="text" class="form-control" placeholder="Location" name="location">
                                                </div>
                                                <div class="form-group">
                                                    <label for="department">Department:</label>
                                                    <select class="form-control" name="department">
                                                        @foreach($departments as $department)
                                                        <option value="{{ $department->id }}">{{ $department->department_name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="closes">Closes:</label>
                                                    <input type="date" name="closes" class="form-control"/>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Add Job</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div><!-- End of Add Modal -->
            <hr>
            <div class="content-body mt-5">
                <ul class="nav nav-pills mb-3 text-dark" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link rounded rounded-0 active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Job posts</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link rounded rounded-0" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Applications</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="content-body pt-3">
                            <div class="ml-auto mb-5 col-4">
                                <input type="text" class="form-control rounded rounded-0" placeholder="Filter jobs"/>
                            </div>
                            @foreach($jobs as $job)
                            <div class="job mt-2 d-flex justify-content-between">
                                <div class="job-text">
                                    <h5 class="header">{{ $job->job_name }}</h5>
                                    <p class="text-muted">{{ $job->location }}</p>
                                </div>
                                <div class="job-actions">
                                    <a href="{{ route('job.edit', $job->id) }}"><button class="btn btn-primary">Edit</button></a>
                                    <button class="btn btn-warning" data-toggle="modal" data-target="#removeModal">Remove</button>
                                    <button class="btn btn-success" data-toggle="modal" data-target="#closeModal">Close Job</button>
                                </div>
                            </div><!-- End of job posting -->
                            <div class="modal" tabindex="-1" role="dialog" id="removeModal">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header modal-custom-header">
                                            <h5 class="modal-title">Edit Job Post:</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form method="POST" action="{{ route('job.destroy', $job->id) }}">
                                            @csrf
                                        <div class="modal-body">
                                            <p>Are you sure you want to remove this post?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Delete</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div><!-- End of Remove Modal -->
                            <div class="modal" tabindex="-1" role="dialog" id="closeModal">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header modal-custom-header">
                                            <h5 class="modal-title">Edit Job Post:</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form method="POST" action="{{ route('job.close', $job->id) }}">
                                            @csrf
                                        <div class="modal-body">
                                            <p>Are you sure you want to close this job?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Yes</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div><!-- End of Close Job Modal -->
                            <hr>
                            @endforeach
                        </div>
                        {{
                            $jobs->links()
                         }}
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="content-body pt-3">
                            <div class="ml-auto mb-5 col-4">
                                <input type="text" class="form-control rounded rounded-0" placeholder="Filter jobs"/>
                            </div>
                            @foreach($applicants as $applicant)
                            <div class="app d-flex justify-content-between">
                                <div class="app-text">
                                    <h5 class="header">{{ $applicant->lastname }}, {{ $applicant->firstname }}</h5>
                                    <p class="text-muted">{{ $applicant->department->department_name }}</p>
                                </div>
                                <div class="app-actions">
                                    <a href="{{ route('app.show', $applicant->id) }}"><button class="btn btn-success">View</button></a>
                                </div>
                            </div><!-- End of applicant -->
                            <hr>
                            @endforeach
                            {{
                                $applicants->links()
                            }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
