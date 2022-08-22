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
        <a href="dreams" class="bubble__link nav_bubble__dreams">
            {{-- the <br> why --}}
            <img class="nav_button_lamp"src="/img/lamp.svg">
        </a>
        <a href="dreams" class="bubble__text">
            <h1 class="nav_bubble_text">people's dreams</h1>
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
    <h1 class="dreams__title">share your wish</h1>
</div>

{{-- <div class="share__form">   PROTECTED FORM 
    <form action="/action_page.php">
        <label for="fname" class="share__form__titles">Tell the genie your name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name.." >

        <label for="lname" class="share__form__titles">it's about ... </label>

        <select id="wishtype" name="wish">
            <option value="australia">dreams</option>
            <option value="canada">goals</option>
            <option value="usa">wishes</option>
            <option value="usa">ideas</option>
        </select>

        <textarea class="share__form__textarea" placeholder="Your wish is my command"></textarea>
        


        <br>
        <input type="submit" value="share it !" >
    </form>
</div> --}}

<div class="share__form">
    <form action="create" method="post">
        <label for="username" class="share__form__titles">Tell the genie your name</label>
        <input type="text" id="username" name="firstname" placeholder="Your name..">

        <label for="lname" class="share__form__titles">it's about ... </label>

        <select id="wishtype" name="category">
            <option value="dreams">dreams</option>
            <option value="goals">goals</option>
            <option value="wishes">wishes</option>
            <option value="ideas">ideas</option>
        </select>

        <textarea class="share__form__textarea" placeholder="Your wish is my command" name="comment"></textarea>

        @error('title')
            <h1 class="asign-danger">Please fill both title and content</h1>
        @enderror

        <br>
        @csrf
        <input type="submit" value="share it !">
    </form>
</div>



@include ('layout/footer')
