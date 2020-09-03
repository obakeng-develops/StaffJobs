@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-8">
                <div class="mt-4">
                    <h2 class="header">StaffDeals</h2>
                    <p class="lead text-muted">At StaffDeals, we bring great employee benefits</p>
                </div>
                <hr>
                <div>
                    <h4 class="header">Current Job Openings</h4>
                    <select class="form-control w-25">
                        <option>All Departments</option>
                        @foreach($departments as $department)
                        <option value="{{ $department->id }}">{{ $department->department_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="pt-4">
                @if(count($jobs) > 1) 
                    @foreach($jobs as $job)
                    <div class="view d-flex justify-content-between">
                        <div class="view-text">
                            <h5>{{ $job->job_name }}</h5>
                            <p class="text-muted">{{ $job->location }}</p>
                        </div>
                        <div class="view-actions align-items-center">
                            <a href="{{ route('opening.show', $job->id) }}"><button class="btn btn-primary">Apply</button></a>
                        </div>
                    </div>
                    <hr><!-- View end -->
                    @endforeach
                @else
                    <p>No jobs currently listed. We'll have be with you soon.</p>
                @endif
                    {{
                        $jobs->links()
                    }}
                </div>
            </div>
        </div>
    </div>

@endsection