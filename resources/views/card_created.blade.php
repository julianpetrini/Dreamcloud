@extends ('layout/master')



<div class="navbar">
    
    <div class="nav_bubble">
        <a href="/inspired" class="bubble__link nav_bubble__inspired ">
            {{-- get <br> inspired --}}
            <img class="nav_button_lamp"src="/img/lamp.svg">
        </a>
        <a href="/inspired" class="bubble__text">
            <h1 class="nav_bubble_text">get inspired </h1>
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
    <div class="card__box__{{ $message->wish }} card__box__generic" id="htmlContent">
        <h2 class="card__box__type"><strong>{{ $message->wish }}</strong></h2>
        <img class="card__box__img__responsive" src={{ asset('img/Aladdin_John-Hassall.png') }}></a>

        <h1 class="card__box__dream">"...{{ $message->comment }}..."</h1>
        <h2 class="card__box__author">{{ $message->username }}</h2>
        <h3 class="card__box__date">{{ $message->created_at->format('d-m-Y') }}</h3>
        <div class="logo__dreamcloud">

            
            
            <h1 class="logo__title">dreamcloud</h1>
            <h2 class="logo__subtitle">a good vibe's collection</h2>
        </div>
    </div>
</div>

<div class="nav_bubble">
    <a href="/dreams" class="bubble__link nav_bubble__dreams">
       
        <img class="nav_button_lamp"src="/img/lamp.svg">
    </a>
    <a href="/dreams" class="bubble__text">
        <h1 class="nav_bubble_text">back to <br> dreams</h1>
    </a>
</div>

@include ('layout/footer')


  
  