@extends ('layout/master')



<body onload="getRandomImage()";>

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

    <div class="card__container">
        <div class="card__box__{{ $message->wish }} card__box__generic" id="photo">
            <h2 class="card__box__type"><strong>{{ $message->wish }}</strong></h2>
            <div class="card__box__img__responsive" id="card__image"></div>
            {{-- <img class="card__box__img__responsive" src={{ asset('img/Aladdin_John-Hassall.png') }}></a> --}}

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


        function getRandomImage() {
            //declare an array to store the images  
            var randomImage = new Array();

            //insert the URL of images in array  
            randomImage[0] =
                "https://upload.wikimedia.org/wikipedia/commons/a/aa/Arthur-Rackham-Aladdin-New-lamps-for-old.jpg";
            randomImage[1] =
                "https://www.pookpress.co.uk/wp-content/uploads/2019/03/Aladdin-and-the-Wonderful-Lamp_Edmund-Dulac.png";
            randomImage[2] = "https://upload.wikimedia.org/wikipedia/commons/6/66/Alad.jpg";
            randomImage[3] = "https://i.pinimg.com/550x/75/50/8c/75508cf75ed680cc02b99cfc8e0d0a9e.jpg";
            randomImage[4] =
                "https://upload.wikimedia.org/wikipedia/commons/thumb/7/79/Arthur-Pyle_The_Enchanter_Merlin.JPG/1200px-Arthur-Pyle_The_Enchanter_Merlin.JPG";
            randomImage[5] = "https://i.pinimg.com/originals/31/3f/f1/313ff10516fc577859538858c414e325.jpg";
            randomImage[6] = "https://i.pinimg.com/originals/46/d9/de/46d9decb142f90f7885cfd348e49176c.jpg";
            randomImage[7] = "https://www.oldbookillustrations.com/wp-content/uploads/2016/12/golden-dream.jpg";
            randomImage[8] =
                "https://media.istockphoto.com/illustrations/joseph-interprets-pharaohs-dreams-steel-engraving-published-1841-illustration-id543808004?k=20&m=543808004&s=612x612&w=0&h=66tZBXzgWDDaFKwbVafEUR2LmrxahVAx_cKaXvw8x6s=";
            randomImage[9] = "https://i.pinimg.com/originals/c2/69/59/c26959ae3cb9b68e2dcaff3fc1128ee5.jpg";
            //generate a number and provide to the image to generate randomly  
            var number = Math.floor(Math.random() * randomImage.length);

            //return the images generated by a random number  
            return document.getElementById("card__image").innerHTML = '<img class="card__box__img__responsive" src="' +
                randomImage[number] + '" />';
        }

       
    </script>


    <div class="soon__text" id="soon"></div>
    <div id="output" class="photo_output"></div>


    @include ('layout/footer')

