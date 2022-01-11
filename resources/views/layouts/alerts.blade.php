@if (session()->has('message'))
    <div class="alert floating-message alert-{{ session()->get('message-type') }}" role="alert">
        <strong>{{ session()->get('message-title') }}</strong>, {{ session()->get('message') }}
    </div>
@endif