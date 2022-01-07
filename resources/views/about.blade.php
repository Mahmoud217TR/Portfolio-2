@extends('layouts.secondary')
@section('title','About')
@section('content')
    <div class="row pt-5 pb-5">
        <div class="col px-4">
            <div class="heading">
                <h1>ABOUT</h1>
            </div>          
        </div>
    </div>
    <div class="row mt-5">
        <div class="col px-0 text-center text-sm-start">
            <h2>GENERAL INFO</h2>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col px-3 px-sm-0">
            <p class="text-muted">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa corrupti minima itaque dolorem quaerat non sit facilis dolores quasi pariatur totam velit soluta molestias rem iusto perspiciatis quas, voluptates eum sapiente enim hic consequuntur quae iste! Aliquid nobis praesentium provident quo. Tempore, ducimus consequuntur? Aliquid ullam maiores nam necessitatibus nesciunt velit explicabo asperiores, ducimus aut earum recusandae, praesentium odit rerum officiis impedit magnam provident esse suscipit ipsam ipsa quam natus minus nemo? Reprehenderit et eveniet ut, quo ipsum quibusdam eaque excepturi nostrum commodi ipsa quia sed reiciendis rerum beatae quos ex facilis inventore amet? Accusamus velit iure corporis aliquid doloribus.
            </p>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col px-0 text-center text-sm-start">
            <h2>EDUCATION</h2>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col px-3 px-sm-0">
            <p class="text-muted">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa corrupti minima itaque dolorem quaerat non sit facilis dolores quasi pariatur totam velit soluta molestias rem iusto perspiciatis quas, voluptates eum sapiente enim hic consequuntur quae iste! Aliquid nobis praesentium provident quo. Tempore, ducimus consequuntur? Aliquid ullam maiores nam necessitatibus nesciunt velit explicabo asperiores, ducimus aut earum recusandae, praesentium odit rerum officiis impedit magnam provident esse suscipit ipsam ipsa quam natus minus nemo? Reprehenderit et eveniet ut, quo ipsum quibusdam eaque excepturi nostrum commodi ipsa quia sed reiciendis rerum beatae quos ex facilis inventore amet? Accusamus velit iure corporis aliquid doloribus.
            </p>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col px-0 text-center text-sm-start">
            <h2>WORK EXPERINCE</h2>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col px-3 px-sm-0">
            <p class="text-muted">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa corrupti minima itaque dolorem quaerat non sit facilis dolores quasi pariatur totam velit soluta molestias rem iusto perspiciatis quas, voluptates eum sapiente enim hic consequuntur quae iste! Aliquid nobis praesentium provident quo. Tempore, ducimus consequuntur? Aliquid ullam maiores nam necessitatibus nesciunt velit explicabo asperiores, ducimus aut earum recusandae, praesentium odit rerum officiis impedit magnam provident esse suscipit ipsam ipsa quam natus minus nemo? Reprehenderit et eveniet ut, quo ipsum quibusdam eaque excepturi nostrum commodi ipsa quia sed reiciendis rerum beatae quos ex facilis inventore amet? Accusamus velit iure corporis aliquid doloribus.
            </p>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col px-0 text-center">
            <h2>Skills & Languages</h2>
        </div>
    </div>
    <div class="row mt-3 d-flex justify-content-between">
        <div class="col-lg-3 my-2 my-md-0">
            <div class="card p-3">
                <div class="card-image d-flex justify-content-center align-items-center">
                    <img class="p-3" src="{{ asset('images/laravel.svg') }}" alt="laravel-icon">
                </div>
                <div class="card-title text-center pt-4">
                    Laravel
                </div>
                <p class="card-info text-muted text-center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa voluptas ad modi nulla quia explicabo quos. Iusto magnam ex vitae.
                </p>
                <a class=" mx-auto mt-1" href="https://laravel.com/">
                    <div class="secondary-button">
                        Learn More
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 my-2 my-md-0">
            <div class="card p-3">
                <div class="card-image d-flex justify-content-center align-items-center">
                    <img class="p-4" src="{{ asset('images/vue-js.svg') }}" alt="laravel-icon">
                </div>
                <div class="card-title text-center pt-4">
                    Vue Js
                </div>
                <p class="card-info text-muted text-center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa voluptas ad modi nulla quia explicabo quos. Iusto magnam ex vitae.
                </p>
                <a class=" mx-auto mt-1" href="https://vuejs.org/">
                    <div class="secondary-button">
                        Learn More
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 my-2 my-md-0">
            <div class="card p-3">
                <div class="card-image d-flex justify-content-center align-items-center">
                    <img class="p-3" src="{{ asset('images/python.svg') }}" alt="laravel-icon">
                </div>
                <div class="card-title text-center pt-4">
                    Python
                </div>
                <p class="card-info text-muted text-center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa voluptas ad modi nulla quia explicabo quos. Iusto magnam ex vitae.
                </p>
                <a class=" mx-auto mt-1" href="https://www.python.org/">
                    <div class="secondary-button">
                        Learn More
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection