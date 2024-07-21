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
        <button class="filter__buttons__ideas" onclick="takeshot()">Download</button>
    </div>

    <div class="card__container">
        <div class="card__box__{{ $message->wish }} card__box__generic" id="photo">
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
                "https://upload.wikimedia.org/wikipedia/commons/a/aa/Arthur-Rackham-Aladdin-New-lamps-for-old.jpg",
                "https://www.pookpress.co.uk/wp-content/uploads/2019/03/Aladdin-and-the-Wonderful-Lamp_Edmund-Dulac.png",
                "https://upload.wikimedia.org/wikipedia/commons/6/66/Alad.jpg",
                "https://i.pinimg.com/550x/75/50/8c/75508cf75ed680cc02b99cfc8e0d0a9e.jpg",
                "https://upload.wikimedia.org/wikipedia/commons/thumb/7/79/Arthur-Pyle_The_Enchanter_Merlin.JPG/1200px-Arthur-Pyle_The_Enchanter_Merlin.JPG",
                "https://i.pinimg.com/originals/31/3f/f1/313ff10516fc577859538858c414e325.jpg",
                "https://i.pinimg.com/originals/46/d9/de/46d9decb142f90f7885cfd348e49176c.jpg",
                "https://www.oldbookillustrations.com/wp-content/uploads/2016/12/golden-dream.jpg",
                "https://media.istockphoto.com/illustrations/joseph-interprets-pharaohs-dreams-steel-engraving-published-1841-illustration-id543808004?k=20&m=543808004&s=612x612&w=0&h=66tZBXzgWDDaFKwbVafEUR2LmrxahVAx_cKaXvw8x6s=",
                "https://i.pinimg.com/originals/c2/69/59/c26959ae3cb9b68e2dcaff3fc1128ee5.jpg"
            ];
            var number = Math.floor(Math.random() * randomImage.length);
            document.getElementById("card__image").innerHTML = '<img class="card__box__img__responsive" src="' + randomImage[number] + '" onload="imageLoaded()" />';
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

                var link = document.createElement('a');
                link.href = imgData;
                link.download = 'card_image.png';
                link.click();

                document.getElementById("soon").innerHTML = `
                    <button onclick="shareOnSocial('whatsapp', '${imgData}')">Share on WhatsApp</button>
                    <button onclick="shareOnSocial('facebook', '${imgData}')">Share on Facebook</button>
                    <button onclick="shareOnSocial('instagram', '${imgData}')">Share on Instagram</button>
                `;
            }).catch(function(error) {
                console.error('Error capturing screenshot:', error);
            }).finally(function() {
                window.scrollTo(scrollX, scrollY);
            });
        }

        function shareOnSocial(platform, imgData) {
            var url;
            switch (platform) {
                case 'whatsapp':
                    url = `https://api.whatsapp.com/send?text=${encodeURIComponent('Check out this image: ')} ${imgData}`;
                    break;
                case 'facebook':
                    url = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(imgData)}`;
                    break;
                case 'instagram':
                    alert("Instagram sharing is not supported directly via web. Please download the image and share manually.");
                    return;
            }
            window.open(url, '_blank');
        }
    </script>

    <div id="soon"></div>
</body>
