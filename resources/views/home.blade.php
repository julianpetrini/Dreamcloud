@extends ('layout/master')

<script>
    function genieMessage() {
        // const bubble_genie = document.getElementById('genie_advice')
        // document.getElementById("genie_advice").style.display = "none";

        var x = document.getElementById("genie_advice");
        var y = document.getElementById("share_your_wish")
        if (x.style.display === "flex") {
            x.style.display = "none";
            y.style.display = "";
        } else {
            x.style.display = "flex";
            y.style.display = "none";
        }

    }
</script>

<div class="header">
    <h1 class="header__title">dreamcloud</h1>
    <h2 class="header__description">a good vibe's collection</h2>
</div>


<div class="bubble-wrapper">

    <a href="why" class="bubble__link bubble__genie__advice" id="genie_advice">
        Everything flows in life as in this site. <br> You will always find new answers
        <img class="button_lamp"src="/img/lamp.svg">
    </a>

    <a href="why" class="bubble__link bubble__why">
        the <br> why
        <img class="button_lamp"src="/img/lamp.svg">
    </a>
    <a href="inspired" class="bubble__link bubble__inspired">
        get inspired
        <img class="button_lamp"src="/img/lamp.svg">
    </a>
    <a href="share" class="bubble__link bubble__wish "id="share_your_wish">
        share <br> your <br> wish
        <img class="button_lamp"src="/img/lamp.svg">
    </a>
    <a href="dreams" class="bubble__link bubble__dreams ">
        people's dreams
        <img class="button_lamp"src="/img/lamp.svg">
    </a>
</div>


<div class="genius" onclick="genieMessage()">

    <img src={{ asset('img/Genie_white.svg') }} alt="genie_flying" class="genie_pic">

</div>



{{-- <a href="https://storyset.com/people">People illustrations by Storyset</a> --}}
