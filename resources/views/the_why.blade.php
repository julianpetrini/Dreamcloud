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
        Alle Texte und Links wurden sorgfältig geprüft und werden laufend aktualisiert. Wir sind bemüht, richtige und
        vollständige Informationen auf dieser Website bereitzustellen, übernehmen aber keinerlei Verantwortung,
        Garantien oder Haftung dafür, dass die durch diese Website bereitgestellten Informationen, richtig, vollständig
        oder aktuell sind. Wir behalten uns das Recht vor, jederzeit und ohne Vorankündigung die Informationen auf
        dieser Website zu ändern und verpflichten uns auch nicht, die enthaltenen Informationen zu aktualisieren. Alle
        Links zu externen Anbietern wurden zum Zeitpunkt ihrer Aufnahme auf ihre Richtigkeit überprüft, dennoch haften
        wir nicht für Inhalte und Verfügbarkeit von Websites, die mittels Hyperlinks zu erreichen sind. Für illegale,
        fehlerhafte oder unvollständige Inhalte und insbesondere für Schäden, die durch Inhalte verknüpfter Seiten
        entstehen, haftet allein der Anbieter der Seite, auf welche verwiesen wurde. Dabei ist es gleichgültig, ob der
        Schaden direkter, indirekter oder finanzieller Natur ist oder ein sonstiger Schaden vorliegt, der sich aus
        Datenverlust, Nutzungsausfall oder anderen Gründen aller Art ergeben könnte.
        Datenschutz
        Für die Sicherheit der Datenübertragung im Internet können wir keine Gewähr übernehmen, insbesondere besteht bei
        der Übertragung von Daten per E-Mail die Gefahr des Zugriffs durch Dritte. Einer Nutzung der im Impressum
        veröffentlichten Kontaktdaten durch Dritte zu Werbezwecken wird hiermit ausdrücklich widersprochen. Der
        Betreiber behält sich für den Fall unverlangt zugesandter Werbe- oder Informationsmaterialien ausdrücklich
        rechtliche Schritte vor. Sollten einzelne Regelungen oder Formulierungen dieses Haftungsausschlusses unwirksam
        sein oder werden, bleiben die übrigen Regelungen in ihrem Inhalt und ihrer Gültigkeit hiervon unberührt.  <br>
    
       <strong>   Genie design from : People illustrations by Storyset </strong> <br>
       storyset.com/people </p>    

</div>


@include ('layout/footer')
