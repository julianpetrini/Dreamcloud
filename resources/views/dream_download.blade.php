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


<div class="filter__buttons">
    <a href="/dreams" class="card__button__back">back</a>

    <button class="filter__buttons__ideas" onclick="takeshot()">Create card image</button>
</div>

<div canvas="card__container">
    <div class="card__box__{{ $message->wish }} card__box__generic" id="photo">
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
    </canvas>



    <script type="text/javascript">
        // Define the function 
        // to screenshot the div

        function takeshot() {

            var result = document.getElementById("output");

            html2canvas(document.getElementById("photo"), {
                allowTaint: true
            }).then(function(canvas) {

                // canvas.style.width = '800px';
                // canvas.style.height = '600px';
                result.appendChild(canvas);
                document.getElementById("soon").innerHTML = "Here you will be able to download your card";
            });

        }
    </script>


    <div class="soon__text" id="soon"></div>
    <div id="output" class="photo_output"></div>


    @include ('layout/footer')
