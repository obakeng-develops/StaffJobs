@extends('layouts.app')

@section('content')

                            <div class="" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header modal-custom-header">
                                            <h5 class="modal-title">Edit Job Post:</h5>
                                        </div>
                                        <form method="POST" action="{{ route('job.update', $editjob->id) }}">
                                            @csrf
                                        <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="jobname">Job Name:</label>
                                                    <input type="text" class="form-control" name="jobname" value="{{ $editjob->job_name }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="description">Description:</label>
                                                    <textarea rows="4" type="text" id="mytextarea" class="form-control" name="description">{{ $editjob->description }}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="location">Location:</label>
                                                    <input type="text" class="form-control" placeholder="{{ $editjob->location }}" name="location" value="{{ $editjob->location }}">
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
                                                    <input type="date" name="closes" class="form-control" value="{{ $editjob->closes_on }}"/>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                            <a href="{{ route('home') }}"><button type="button" class="btn btn-secondary" data-dismiss="modal">Go back</button></a>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div><!-- End of Edit Modal -->

@endsection