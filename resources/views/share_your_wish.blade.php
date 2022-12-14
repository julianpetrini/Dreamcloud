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
            <h1 class="nav_bubble_text">dreams</h1>
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

<div class="share__form">
    <form action="{{ route('create') }}" method="POST" name="share_your_wish_form">
        <label for="fname" class="share__form__titles">Tell the genie your name</label>
        <input type="text" id="username" name="username" placeholder="Your name..">

        <label for="lname" class="share__form__titles">it's about ... </label>

        <select id="wishtype" name="wish">
            <option value="dreams">dreams</option>
            <option value="goals">goals</option>
            <option value="wishes">wishes</option>
            <option value="ideas">ideas</option>
        </select>

        <textarea class="share__form__textarea" placeholder="Your wish is my command" name="comment" id="dream_comment"></textarea>

        <div class="title">
            @error('username')
                <h1 class="error__form__text">Please complete all the fields</h1>
            @enderror

            @error('comment')
                <h1 class="error__form__text">Don't forget to share your message</h1>
            @enderror
        </div>
        @csrf
        <br>

        <input type="submit" value="share it !">
    </form>
</div>

{{-- @foreach ($messages as $message) 
   <li>
       <b>
           <!-- this link to the message details is created dynamically
               and will point to /messages/1 for the first message -->
           <a href="/message/{{$message->id}}">{{$message->username}}:</a>
       </b><br>
       {{$message->comment}}<br>
       {{$message->created_at->diffForHumans()}}           
   </li>
@endforeach --}}




@include ('layout/footer')
