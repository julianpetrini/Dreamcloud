@extends ('layout/master')

{{-- @include('layout/nav') --}}

<div class="navbar">
    <div class="nav_bubble">
        <a href="why" class="bubble__link nav_bubble__why">
            {{-- the <br> why --}}
            <img class="nav_button_lamp"src="/img/lamp.svg">
        </a>
        <a href="why" class="bubble__text">
            <h1 class="nav_bubble_text">the why</h1>
        </a>
    </div>

    <div class="nav_bubble">
        <a href="inspired" class="bubble__link nav_bubble__inspired ">
            {{-- get <br> inspired --}}
            <img class="nav_button_lamp"src="/img/lamp.svg">
        </a>
        <a href="inspired" class="bubble__text">
            <h1 class="nav_bubble_text">get inspired </h1>
        </a>
    </div>
    <div class="nav_bubble">
        <a href="share" class="bubble__link nav_bubble__wish">
            {{-- share <br> your <br> wish --}}
            <img class="nav_button_lamp"src="/img/lamp.svg">
        </a>
        <a href="share" class="bubble__text">
            <h1 class="nav_bubble_text">share your wish</h1>
        </a>
    </div>

    <div class="nav_bubble">
        <a href="/" class="bubble__link nav_bubble__home">
            {{-- people's <br> dreams --}}
            <img class="nav_button_genie"src="/img/genie_button.svg">
        </a>
        <a href="/" class="bubble__text">
            <h1 class="nav_bubble_text">home</h1>
        </a>
    </div>
</div>

<div class="title">
    <h1 class="dreams__title">people's dreams</h1>
</div>

<h2 class="generic__subtitle">select to see</h2>

<div class="filter__buttons">
   <button class="filter__buttons__dreams">dreams</button>
   <button class="filter__buttons__goals">goals</button>
   <button class="filter__buttons__wishes">wishes</button>
   <button class="filter__buttons__ideas">ideas</button>

</div>

@foreach ($messages as $message) 
   

<div class="dreams__box__{{$message->wish}}">
    <div class="dreams__box__header">
        <h3 class="dreams__box__title">{{$message->username}}</h3>
        <h3 class="dreams__box__title">{{$message->created_at->format('Y-m-d') }}</h3>
    </div>
    <p class="dreams__box__content">{{$message->comment}}</p>
</div>
@endforeach


{{-- <div class="dreams__box__goals">
    <div class="dreams__box__header">
        <h3 class="dreams__box__title">Juan Carlos</h3>
        <h3 class="dreams__box__title">10.08.2020</h3>
    </div>
    <p class="dreams__box__content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima quia expedita in dolorum sequi quidem numquam maiores mollitia vel molestias est natus veritatis doloribus et magni impedit, tenetur dolor illum.</p>
</div>

<div class="dreams__box__wishes">
    <div class="dreams__box__header">
        <h3 class="dreams__box__title">Juan Carlos</h3>
        <h3 class="dreams__box__title">10.08.2020</h3>
    </div>
    <p class="dreams__box__content">Lorem ipsum dolor sit amet consectetur  doloribus et magni impedit, tenetur dolor illum.</p>
</div>

<div class="dreams__box__ideas">
    <div class="dreams__box__header">
        <h3 class="dreams__box__title">Juan Carlos</h3>
        <h3 class="dreams__box__title">10.08.2020</h3>
    </div>
    <p class="dreams__box__content">Lorem ipsum dolor sit amet consectetur adipisicing elit..</p>
</div> --}}

@include ('layout/footer')