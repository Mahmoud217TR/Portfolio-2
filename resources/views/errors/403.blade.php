@extends('layouts.main')
@section('title','Error 403')
@section('content')
    <div class="row">
        <div class="col">
            <h1 class="error main-display text-center mt-5">
                Error <strong>403</strong>: Unauthorized!
            </h1>
            <p class="text-center error-info mt-4">
                The <span class="text-special">Request</span> you are trying to make is <span class="text-special">NOT ALLOWED</span>!!
            </p>
        </div>
    </div>
@endsection