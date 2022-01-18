@extends('layouts.app',['style'=>'secondary'])
@section('title','About')
@section('content')
    <div class="row pt-5 pb-5">
        <div class="col px-4 d-flex justify-content-center justify-content-sm-start">
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
                My name is Mahmoud Mahmoud, I'm {{ date('Y')-1999 }} years old <strong>Software Engineering</strong> Student at Al-Baath University  in Homs, Syria.<br>
                I belive that I'm an Expert in Programming and Developing web & desktop apps cause I always use my abilities to the <strong>fullest</strong> trying to reach <strong>new limits</strong>,
                I'm also searching to Keep informed about the latest trends and developments to learn new technologies and skills so I can perfect my codes and Maximize my <strong>Skills</strong>,
                also I Develop creative strategies by assuming the worst and making a plan, I take calculated risks and success because I Make sound decisions in the absence of detailed instructions and informations.<br>
                <strong>Respecting time</strong> and manage it with multiple working plans is also one of my best abilities, also I'm capable of sustaining a high level of <strong>concentration</strong>.<br>
                I View problems as <strong>opportunities</strong> casue I learn the best from them, I always say: 
                <strong><i>"I may not know what to do now, But I will make it, I always figure it out somehow and I conquer it."</i></strong>,<br>
                Creating stuff is what I do, maybe it's Solution seeking, achieving an idea, learning new skill, or just filling desire.<br>
                So if you are looking for an <strong>Extraordinary</strong> Developer <strong>I'm what you need</strong>, not because of my skills or knowledge,
                But for The <strong>Capabilities and Power</strong> I can show and develop fast enough to change the course of action Positively.
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
                Beside my University learning, I'm mostly <strong>Self-taught</strong> developer who is ambitious to learn more and more about technologies and programing.<br>
                I learned using the Internet, by taking online courses, reading documentations, watching youtube videos, and searching for solutions.<br>
            </p>
        </div>
    </div>
    <div class="row mt-1">
        <div class="col-lg-3 px-3 px-sm-0 me-lg-3 me-0 my-2">
            <div class="card bg-light text-black px-3 py-3">
                <a href="https://albaath-univ.edu.sy/" target="_blank">
                    <p>
                        <strong>Al-Baath University</strong><br><br>
                        Information Technology Engineering<br>
                        Software Engineering<br>
                        2017 - 2022<br>
                    </p>
                </a>
            </div>
        </div>
        <div class="col-lg-3 px-3 px-sm-0 me-lg-3 me-0 my-2">
            <div class="card bg-light text-black px-3 py-3">
                <a href="https://www.coursera.org/account/accomplishments/specialization/certificate/N6JXVNU3PDDS" target="_blank">
                    <p>
                        <strong>University of Michigan</strong> (via Coursera)<br><br>
                        Python for Everybody<br>
                        Specialization Certificate<br>
                        Sep 2021<br>
                    </p>
                </a>
            </div>
        </div>
    </div>
{{-- Work Experince
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
     --}}
    <div class="row mt-5">
        <div class="col px-0 text-center">
            <h2>SKILLS & LANGUAGES</h2>
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
                    I develop Back-End Web Applications with RESTful API in Laravel which is an MVC php based Framework.
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
                    For the Front-End I use Bootstrap & Vue js which is a JavaScript based Framework, mainly because it's flexible and scalable.
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
                    Well this one is for fun I use Python cause of its simplified way of programing and wide variety of libraries.
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