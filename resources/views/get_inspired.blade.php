@extends ('layout/master')

{{-- @include('layout/nav') --}}

<div class="navbar">
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

{{-- Selección de idioma --}}


<div class="title">
        <h2 class="nav_bubble_text">The Genie says</h2>
        <div class="language-selection">
            <button class="language-button {{ $selectedLanguage == 'es' ? 'active' : '' }}" onclick="changeLanguage('es')">
                <img src="/img/flag/spain.png" class="nav_button_flag" alt="Español"> Español
            </button>
            <button class="language-button {{ $selectedLanguage == 'en' ? 'active' : '' }}" onclick="changeLanguage('en')">
                <img src="/img/flag/united_kingdom.png" class="nav_button_flag" alt="English"> English
            </button>
            <button class="language-button {{ $selectedLanguage == 'de' ? 'active' : '' }}" onclick="changeLanguage('de')">
                <img src="/img/flag/germany.png" class="nav_button_flag" alt="Deutsch"> Deutsch
            </button>
        </div>
</div>




<div class="genius" >

    <img src={{ asset('img/Genie_white.svg') }} alt="genie_flying" class="genie_pic">

</div>


{{--<div class="title">
    <h1 class="generic__title">cambios</h1>
</div>--}}  

    <div class="get__inspired__big__text__box">
      {{--  <a href="inspired">
        <img class="img__responsive" src="data:image/jpg;base64,{{ chunk_split(base64_encode($post->postPic)) }}"alt="famous quote people"></a>
         <h2 class="generic__subtitle">{{ $post->title }}</h2> 
--}}<a href="inspired" class="inspired">
        <div class="get__inspired__text_box ">
            <p class="the__get__inspired__text ">{{ $post->content }}</p>
        {{--    <h2 class="generic__subtitle">by {{ $post->author }}</h2>--}}
        </div>
    </a>


</div>

{{-- JavaScript para cambiar el idioma --}}
<script>
    var relatedPosts = @json($relatedPosts);

    function changeLanguage(language) {
        var post = relatedPosts.find(p => p.language === language);
        if (post) {
            document.querySelector('.the__get__inspired__text').textContent = post.content;
            // Aquí también podrías actualizar otras partes del contenido como autor, etc.
        }
    }
</script>




@include ('layout/footer')
