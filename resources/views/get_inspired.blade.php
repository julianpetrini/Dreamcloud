@extends ('layout/master')

{{-- @include('layout/nav') --}}

<div class="navbar">
    <div class="nav_bubble">
        <a href="dreams" class="bubble__link nav_bubble__dreams">
            {{-- the <br> why --}}
            <img class="nav_button_lamp"src="/img/lamp.svg">
        </a>
        <a href="dreams" class="bubble__text">
            <h1 class="nav_bubble_text">people's dreams</h1>
        </a>
    </div>

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
    <h1 class="generic__title">get inspired</h1>
</div>
@foreach ($posts as $post)
    <div class="the__why__text_box">
        {{-- <h2 class="generic__subtitle">{{ $post->title }}</h2> --}}
        <h2 class="generic__subtitle">by {{ $post->author }}</h2>
        <img class="img__responsive" src="data:image/jpg;base64,{{ chunk_split(base64_encode($post->postPic)) }}"
                    alt="Card image cap">
        <p class="the_why__text">{{ $post->content }}</p>
@endforeach

</div>



{{-- ORIGINAL STYLING --}}
{{-- <div class="the__why__text_box">
    <h2 class="generic__subtitle">an old tale</h2>
    <p class="the_why__text">As every kid, we believe. In possibilities, in magic, in smiles. Later, life goes by.
        Observing and learning the rules of the structure. How to process information, how to relate, and also how to
        <img src="{{ asset('img/aladdin_disney.jpg') }}" class="img__responsive" alt="">
        think and play. Maybe not a conscious process, but as when we were new to computers, we installed a lot of
        programs without knowing quite much about them. That's life. I think everyone should create their tools to be
        able to develop themselves. Your way of the process the info into the dreams or goals you aim for. This is a

        <img src="{{ asset('img/aladdin_disney2.jpg') }}" class="img__responsive" alt="">
        game to play with another way of thinking. Maybe too philosophical or without strong content to the rules world,
        but don't forget every major development came from some idea most people could comprehend until it was real.
        This is it. It has more than just a share. It is also to create a database in the cloud full of positive and
        <img src="{{ asset('img/Aladdin-and-the-Wonderful-Lamp_Edmund-Dulac.png') }}" class="img__responsive"
            alt="">
        encouraging intentions, dreams, and so on. Like a pyramid in the middle of the desert that reflects into the
        galaxy. The cloud.
        <img src="{{ asset('img/aladdin_disney3.jpg') }}" class="img__responsive" alt="">
    </p>


</div> --}}


@include ('layout/footer')
