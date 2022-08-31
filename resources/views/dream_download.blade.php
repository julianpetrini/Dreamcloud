@extends ('layout/master')


{{-- @include('layout/nav') --}}

<div class="navbar">
    <div class="nav_bubble">
        <a href="/dreams" class="bubble__link nav_bubble__dreams">
            {{-- the <br> why --}}
            <img class="nav_button_lamp"src="/img/lamp.svg">
        </a>
        <a href="/dreams" class="bubble__text">
            <h1 class="nav_bubble_text">dreams</h1>
        </a>
    </div>

    <div class="nav_bubble">
        <a href="/why" class="bubble__link nav_bubble__why">
            {{-- the <br> why --}}
            <img class="nav_button_lamp"src="/img/lamp.svg">
        </a>
        <a href="/why" class="bubble__text">
            <h1 class="nav_bubble_text">the why</h1>
        </a>
    </div>
    <div class="nav_bubble">
        <a href="/share" class="bubble__link nav_bubble__wish">
            {{-- share <br> your <br> wish --}}
            <img class="nav_button_lamp"src="/img/lamp.svg">
        </a>
        <a href="/share" class="bubble__text">
            <h1 class="nav_bubble_text">share</h1>
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



<div class="card__container">
    <div class="card__box__{{ $message->wish }} card__box__generic">
        <h2 class="card__box__type"><strong>{{ $message->wish }}</strong></h2>
        <img class="img__responsive" src={{ asset('img/Aladdin_John-Hassall.png') }}></a>

        <h1 class="card__box__dream">"...{{ $message->comment }}..."</h1>
        <h2 class="card__box__author">{{ $message->username }}</h2>
        <h3 class="card__box__date">{{ $message->created_at->format('Y-m-d') }}</h3>
        <div class="logo__dreamcloud">
            <h1 class="logo__title">dreamcloud</h1>
            <h2 class="logo__subtitle">a good vibe's collection</h2>
        </div>
    </div>
</div>

{{-- <div class="container__of__vh">
    @foreach ($messages as $message)    
        <div class="dreams__box__{{ $message->wish }}" name="{{ $message->wish }}">
            <div class="dreams__box__header">
                <h3 class="dreams__box__title">{{ $message->username }}</h3>
                <h3 class="dreams__box__title">{{ $message->created_at->format('Y-m-d') }}</h3>
            </div>
            <p class="dreams__box__content">{{ $message->comment }}</p>
        </div>
    @endforeach
</div> --}}

</div>
