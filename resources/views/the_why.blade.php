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

<div class="title">
    <h1 class="generic__title">the why</h1>
</div>


<div class="the__why__text_box">
    <h2 class="generic__subtitle">My name is Julian</h2>
    <p class="the_why__text">As every kid, we believe. <br> In possibilities, in magic, in smiles. <br> Later, life goes
        by. <br>
        Observing and learning the rules of the structure. How to process information, how to relate, and also how to
        think and play. Maybe not a conscious process, but as when we were new to computers, we installed a lot of
        programs without knowing quite much about them. <br> That's life. <br> I think everyone should create their
        tools to be
        able to develop themselves. Your way of how you process the info into dreams or goals you aim for. This site is
        developed with another way of thinking. <br>
        Maybe too philosophical.
        But don't forget most majors developments came from some idea most people couldn't comprehend until it was
        real. <br>
        This is it. <br> It has more than just to share. It's to create a database in the cloud full of positive and
        encouraging intentions, dreams, and so on. Like a pyramid in the middle of the desert that reflects into the
        galaxy. <br> The cloud. </p>

</div>

<div class="the__why__text_box">
    <h2 class="generic__subtitle">Impressum</h2>
    <p class="the_why__text">Disclaimer
        Alle Texte und Links wurden sorgf??ltig gepr??ft und werden laufend aktualisiert. Wir sind bem??ht, richtige und
        vollst??ndige Informationen auf dieser Website bereitzustellen, ??bernehmen aber keinerlei Verantwortung,
        Garantien oder Haftung daf??r, dass die durch diese Website bereitgestellten Informationen, richtig, vollst??ndig
        oder aktuell sind. Wir behalten uns das Recht vor, jederzeit und ohne Vorank??ndigung die Informationen auf
        dieser Website zu ??ndern und verpflichten uns auch nicht, die enthaltenen Informationen zu aktualisieren. Alle
        Links zu externen Anbietern wurden zum Zeitpunkt ihrer Aufnahme auf ihre Richtigkeit ??berpr??ft, dennoch haften
        wir nicht f??r Inhalte und Verf??gbarkeit von Websites, die mittels Hyperlinks zu erreichen sind. F??r illegale,
        fehlerhafte oder unvollst??ndige Inhalte und insbesondere f??r Sch??den, die durch Inhalte verkn??pfter Seiten
        entstehen, haftet allein der Anbieter der Seite, auf welche verwiesen wurde. Dabei ist es gleichg??ltig, ob der
        Schaden direkter, indirekter oder finanzieller Natur ist oder ein sonstiger Schaden vorliegt, der sich aus
        Datenverlust, Nutzungsausfall oder anderen Gr??nden aller Art ergeben k??nnte.
        Datenschutz
        F??r die Sicherheit der Daten??bertragung im Internet k??nnen wir keine Gew??hr ??bernehmen, insbesondere besteht bei
        der ??bertragung von Daten per E-Mail die Gefahr des Zugriffs durch Dritte. Einer Nutzung der im Impressum
        ver??ffentlichten Kontaktdaten durch Dritte zu Werbezwecken wird hiermit ausdr??cklich widersprochen. Der
        Betreiber beh??lt sich f??r den Fall unverlangt zugesandter Werbe- oder Informationsmaterialien ausdr??cklich
        rechtliche Schritte vor. Sollten einzelne Regelungen oder Formulierungen dieses Haftungsausschlusses unwirksam
        sein oder werden, bleiben die ??brigen Regelungen in ihrem Inhalt und ihrer G??ltigkeit hiervon unber??hrt.  <br>
    
       <strong>   Genie design from : People illustrations by Storyset </strong> <br>
       storyset.com/people </p>    

</div>


@include ('layout/footer')
