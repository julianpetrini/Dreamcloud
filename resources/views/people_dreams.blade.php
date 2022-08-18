@extends ('layout/master')

{{-- @include('layout/nav') --}}

<div class="navbar">
    <div class="nav_bubble">
        <a href="https://www.google.com/" target="_blank" class="bubble__link nav_bubble__dreams">
            {{-- the <br> why --}}
            <img class="nav_button_lamp"src="/img/lamp.svg">
        </a>
        <a href="https://www.google.com/" target="_blank" class="bubble__text">
            <h1 class="nav_bubble_text">people's dreams</h1>
        </a>
    </div>

    <div class="nav_bubble">
        <a href="https://www.google.com/" target="_blank" class="bubble__link nav_bubble__inspired ">
            {{-- get <br> inspired --}}
            <img class="nav_button_lamp"src="/img/lamp.svg">
        </a>
        <a href="https://www.google.com/" target="_blank" class="bubble__text">
            <h1 class="nav_bubble_text">get inspired </h1>
        </a>
    </div>
    <div class="nav_bubble">
        <a href="https://www.google.com/" target="_blank" class="bubble__link nav_bubble__wish">
            {{-- share <br> your <br> wish --}}
            <img class="nav_button_lamp"src="/img/lamp.svg">
        </a>
        <a href="https://www.google.com/" target="_blank" class="bubble__text">
            <h1 class="nav_bubble_text">share your wish</h1>
        </a>
    </div>

    <div class="nav_bubble">
        <a href="https://www.google.com/" target="_blank" class="bubble__link nav_bubble__home">
            {{-- people's <br> dreams --}}
            <img class="nav_button_genie"src="/img/genie_button.svg">
        </a>
        <a href="https://www.google.com/" target="_blank" class="bubble__text">
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
