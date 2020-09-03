@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-lg-8">
                <h3 class="header">{{ $job->job_name }}</h3>
                <p class="render">{!! $job->description !!}</p>
                <div class="bg-light col-6 mt-5 shadow">
                    <h3 class="pt-3 ml-3 header">Apply for this job</h3>
                    <hr>
                    <form action="{{ route('app.store', $job->department_id) }}" method="POST" enctype="multipart/form-data" class="pt-3 ml-3 mr-3 pb-3">
                    @csrf
                        <div class="form-group">
                            <label>First Name:</label>
                            <input type="text" class="form-control form-control-lg" name="firstname">
                        </div>
                        <div class="form-group">
                            <label>Last Name:</label>
                            <input type="text" class="form-control form-control-lg" name="lastname">
                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="email" class="form-control form-control-lg" name="email">
                        </div>
                        <div class="form-group">
                            <label>Phone:</label>
                            <input type="text" class="form-control form-control-lg" name="phone">
                        </div>
                        <div class="form-group">
                            <label>CV:</label>
                            <input type="file" class="form-control-file form-control-lg" name="cv">
                        </div>
                        <div class="form-group">
                            <label>Cover Letter:</label>
                            <input type="file" class="form-control-file form-control-lg" name="cover">
                        </div>
                        <hr>
                        <div class="form-group">
                            <label>LinkedIn Profile:</label>
                            <input type="text" class="form-control-file form-control-lg " name="linkedin">
                        </div>
                        <div class="form-group">
                            <label>How did you hear about us?:</label>
                            <input type="text" class="form-control-file form-control-lg" name="how">
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-primary rounded rounded-0">Submit Application</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection