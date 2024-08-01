@extends('layout/master')

<body onload="getRandomImage()">

    <div class="navbar">
        <div class="nav_bubble">
            <a href="/inspired" class="bubble__link nav_bubble__inspired ">
                <img class="nav_button_lamp" src="/img/lamp.svg">
            </a>
            <a href="/inspired" class="bubble__text">
                <h1 class="nav_bubble_text">get inspired</h1>
            </a>
        </div>
        <div class="nav_bubble">
            <a href="/why" class="bubble__link nav_bubble__why">
                <img class="nav_button_lamp" src="/img/lamp.svg">
            </a>
            <a href="/why" class="bubble__text">
                <h1 class="nav_bubble_text">the why</h1>
            </a>
        </div>
        <div class="nav_bubble">
            <a href="/share" class="bubble__link nav_bubble__wish">
                <img class="nav_button_lamp" src="/img/lamp.svg">
            </a>
            <a href="/share" class="bubble__text">
                <h1 class="nav_bubble_text">share</h1>
            </a>
        </div>
        <div class="nav_bubble">
            <a href="/" class="bubble__link nav_bubble__home">
                <img class="nav_button_genie" src="/img/genie_button.svg">
            </a>
            <a href="/" class="bubble__text">
                <h1 class="nav_bubble_text">home</h1>
            </a>
        </div>
    </div>

    <div class="filter__buttons">
        <a href="/dreams" class="card__button__back">back</a>
        <button class="filter__buttons__ideas" onclick="takeshot()">Create and Download Image</button>
    </div>

    <div class="card__container"id="photo">
        <div class="card__box__{{ $message->wish }} card__box__generic">
            <h2 class="card__box__type"><strong>{{ $message->wish }}</strong></h2>
            
                <div class="card__box__img__responsive" id="card__image"></div>
                    <h1 class="card__box__dream">"...{{ $message->comment }}..."</h1>
                    <h2 class="card__box__author">{{ $message->username }}</h2>
                    <h3 class="card__box__date">{{ $message->created_at->format('d-m-Y') }}</h3>
                <div class="logo__dreamcloud">

                <h1 class="logo__title">dreamcloud</h1>
                <h2 class="logo__subtitle">a good vibe's collection</h2>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function getRandomImage() {
            var randomImage = [
                "card (10).jpg",
                "card (11).jpg",
                "card (12).jpg",
                "card (13).jpg",
                "card (14).jpg",
                "card (15).jpg",
                "card (16).jpg",
                "card (17).jpg",
                "card (18).png",
                "card (19).png",
                "card (1).jpg",
                "card (2).jpg",
                "card (3).jpg",
                "card (4).jpg",
                "card (5).jpg",
                "card (6).jpg",
                "card (7).jpg",
                "card (8).jpg",
                "card (9).jpg"
            ];

            
            var number = Math.floor(Math.random() * randomImage.length);
            var imgElement = document.createElement('img');

            imgElement.src = "/img/Cards/" + randomImage[number];
            imgElement.className = 'card__box__img__responsive';
            imgElement.onload = imageLoaded;
            document.getElementById("card__image").appendChild(imgElement);
        }

        function imageLoaded() {
            console.log("Image loaded!");
        }

        function takeshot() {
            var scrollX = window.scrollX;
            var scrollY = window.scrollY;
            window.scrollTo(0, 0);

            var photoElement = document.getElementById("photo");

            html2canvas(photoElement, {
                useCORS: true,
                backgroundColor: null,
                scale: 2,
                width: photoElement.offsetWidth,
                height: photoElement.offsetHeight
            }).then(function(canvas) {
                var imgData = canvas.toDataURL("image/png");

                // Crear enlace para descargar la imagen
                var link = document.createElement('a');
                link.href = imgData;
                link.download = 'dreamcloud_dream.png';
                link.click();

                // Actualizar la interfaz para compartir
               
            }).catch(function(error) {
                console.error('Error capturing screenshot:', error);
            }).finally(function() {
                window.scrollTo(scrollX, scrollY);
            });
        }

        
    </script>

    <div class="soon__text" id="soon"></div>
    <div id="output" class="photo_output"></div>

    @include('layout/footer')
</body>
