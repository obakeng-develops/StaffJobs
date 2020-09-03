@extends('layouts.app')

@section('content')
                            <div class="" tabindex="-1" role="dialog" id="viewModal">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header modal-custom-header">
                                            <h5 class="modal-title">Applicant:</h5>
                                        </div>
                                        <div class="modal-body">
                                            <h4>{{ $app->firstname }} {{ $app->lastname }}</h4>
                                            <form action="{{ route('app.cv', $app->id) }}" method="GET">
                                            <p class="mt-3">CV:<button class="btn-sm ml-3 btn btn-primary">Download</button></p>
                                            </form>
                                            <form action="{{ route('app.cover', $app->id) }}" method="GET">
                                            <p>Cover Letter:<button class="btn-sm ml-3 btn btn-primary">Download</button></p>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="{{ route('home') }}"><button type="button" class="btn btn-secondary" data-dismiss="modal">Go back</button>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End of Remove Modal -->
@endsection