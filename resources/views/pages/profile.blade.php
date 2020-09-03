@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-10 col-xl-8 pt-5">
                <div class="col-md-12 d-flex">
                    <img src="{{ asset('storage/'.$user->profilephoto) }}" class="profile-img rounded rounded-0"/>
                    <div class="ml-4 mt-5 align-items-center">
                        <h3 class="header">{{ $user->lastname }}, {{ $user->firstname }}</h3>
                        <p class="lead text-muted">{{ $user->description }}</p>
                    </div>
                </div>
                <hr>
                <div class="d-flex">
                    <div class="col-2">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="true">Settings</a>
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane ml-3 fade show active" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                <form enctype="multipart/form-data" method="POST" action="{{ route('profile.update', $user->id) }}">
                                @csrf
                                    <div class="form-group">
                                        <label>Name:</label>
                                        <input type="text" class="form-control w-50" name="firstname" placeholder="Name" value="{{ $user->firstname }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Surname:</label>
                                        <input type="text" class="form-control w-50" name="lastname" placeholder="Surname" value="{{ $user->lastname }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Email:</label>
                                        <input type="text" class="form-control w-50" name="email" placeholder="Surname" value="{{ $user->email }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Upload photo:</label>
                                        <input type="file" class="form-control-file w-50" name="profilephoto" placeholder="Upload photo">
                                    </div>
                                    <div class="form-group">
                                        <label>Current password:</label>
                                        <input type="password" class="form-control w-50" name="current" placeholder="Current password">
                                    </div>
                                    <div class="form-group">
                                        <label>Update password:</label>
                                        <input type="password" class="form-control w-50" name="password" placeholder="New password">
                                    </div>
                                    <button class="btn btn-primary">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection