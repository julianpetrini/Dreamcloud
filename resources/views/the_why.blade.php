@extends ('layout/master')

{{-- @include('layout/nav') --}}

<div class="navbar">
    <div class="nav_bubble">
        <a href="dreams" class="bubble__link nav_bubble__dreams">
            {{-- the <br> why --}}
            <img class="nav_button_lamp"src="/img/lamp.svg">
        </a>
        <a href="dreams"  class="bubble__text">
            <h1 class="nav_bubble_text">people's dreams</h1>
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
    <h1 class="generic__title">the why</h1>
</div>


<div class="the__why__text_box">
    <h2 class="generic__subtitle">My name is Julian</h2>
    <p class="the_why__text">As every kid, we believe. In possibilities, in magic, in smiles. Later, life goes by.
        Observing and learning the rules of the structure. How to process information, how to relate, and also how to
        think and play. Maybe not a conscious process, but as when we were new to computers, we installed a lot of
        programs without knowing quite much about them. That's life. I think everyone should create their tools to be
        able to develop themselves. Your way of the process the info into the dreams or goals you aim for. This is a
        game to play with another way of thinking. Maybe too philosophical or without strong content to the rules world,
        but don't forget every major development came from some idea most people could comprehend until it was real.
        This is it. It has more than just a share. It is also to create a database in the cloud full of positive and
        encouraging intentions, dreams, and so on. Like a pyramid in the middle of the desert that reflects into the
        galaxy. The cloud. </p>

</div>


@include ('layout/footer')
