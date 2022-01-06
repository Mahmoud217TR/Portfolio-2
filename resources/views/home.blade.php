@extends('layouts.main')
@section('title','MahmoudTR')
@section('content')
    <div class="row">
        <div class="col-lg-5 d-flex align-items-center justify-content-center">
            <div class="container">
                <div class="row">
                    <div class="col display-3 p-0">
                        <p class="main-display text-lg-start text-center">
                            Hi, my name is <strong>Mahmoud</strong> and I'm a <strong>Fullstack</strong> developer
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 my-2 my-lg-0 p-0 d-flex justify-content-center justify-content-lg-start">
                        <button class="main-button">
                            <span class="pe-2"><img width="18pt" src="{{ asset('images/download.svg') }}" alt="download-icon"></span>
                            Download CV
                        </button>
                    </div>
                    <div class="col-lg-6 my-2 my-lg-0 p-0 d-flex justify-content-center justify-content-lg-start">
                        <a href="#">
                            <button class="secondary-button">
                                <span class="pe-2"><img width="30pt" src="{{ asset('images/contacts.svg') }}" alt="download-icon"></span>
                                Contact Me
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-7 d-flex align-items-center justify-content-center">
            <img class="main-pic" src="{{ asset('images/pic.svg') }}" alt="mypic">
        </div>
    </div>
@endsection