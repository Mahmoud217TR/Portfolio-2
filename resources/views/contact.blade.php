@extends('layouts.secondary')
@section('title','Contact me')
@section('content')
<div class="row pt-5 pb-5">
    <div class="col px-4">
        <div class="heading">
            <h1>CONTACT ME</h1>
        </div>          
    </div>
</div>
<div class="row mt-5">
    <div class="col px-0 text-center text-sm-start">
        <h2>LET'S KEEP IN TOUCH</h2>
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
    <div class="col-lg-4 my-lg-0 my-3 pX-lg-5">
        <contact-card pic-url='{{ asset('images/email.svg') }}' info ='mahmoud17tr@gmail.com' pic-alt ='email'></contact-card>
    </div>
    <div class="col-lg-4 my-lg-0 my-3 pX-lg-5">
        <contact-card pic-url='{{ asset('images/phone.svg') }}' info ='+963 938318491' pic-alt ='phone'></contact-card>
    </div>
    <div class="col-lg-4 my-lg-0 my-3 pX-lg-5">
        <contact-card pic-url='{{ asset('images/telegram.svg') }}' info ='@MahmoudTR' pic-alt ='telergram'></contact-card>
    </div>
</div>
<div class="row mt-5">
    <div class="col px-0 text-center text-sm-start">
        <h2>OR SIMPLY LEAVE ME A MESSAGE</h2>
    </div>
</div>
@endsection