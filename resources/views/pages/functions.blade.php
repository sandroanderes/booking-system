@extends('base.default')

@section('content')
<section class="container-fluid banner px-0">
    <div class="thumbnail text-left">
        <div class="overlay"></div>
        <img src="images/suessmost.jpg" alt="Place" class="img-responsive">
        <div class="caption">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-12 text-md-left text-center">
                        <h1>Nid lang sueche - Bueche!</h1>
                    </div>
                    <div class="col-md-4 col-12 text-md-right text-center">
                        <a href="/register" type="button" class="btn btn-primary btn-lg">Jetzt eigenen Süssmost anbieten!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid functions-section py-5">
    <div class="container">
        <h1 class="text-center mt-0">Funktionen</h1>
        <p class="text-center mt-0">Die Buechs-Applikation hat viele verfügbare Funktionen. <br> Die wichtigsten Features haben wir dir hier in einer Übersicht zusammengefasst.<br>
            Falls du noch Fragen hast, helfen wir dir gerne unter <a href="/support">Support & FAQ</a> weiter.</p>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3" id="CalendarItems">
            <div class="col mb-4">
                <div class="card card-1 animate__animated animate__slideInUp">
                    <div class="embed-responsive embed-responsive-16by9">
                        <img src="/images/functions/vielseitigkeit.jpg" class="card-img-top embed-responsive-item" alt="Symbolbild das die Verwendung von Templates illustriert.">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Vielseitigkeit</h5>
                        <p class="card-text">Vom Coworking Space übers Restaurant bis hin zum Sportverein – Buechs.ch hat für alle das passende Reservationssystem parat.</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card card-2 animate__animated animate__slideInUp">
                    <div class="embed-responsive embed-responsive-16by9">
                        <img src="/images/functions/lookout.jpg" class="card-img-top embed-responsive-item" alt="Symbolbild, das die Möglichkeit von buechs.ch beschreibt, neue Angeobt in seiner Nähe zu entdecken.">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">What's Up?</h5>
                        <p class="card-text">Suche und finde andere Buecher in deiner Nähe und entdecke Angebote
                        von denen du gar nicht wusstest, dass es sie in deiner Nähe gibt.</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card card-3 animate__animated animate__slideInUp">
                    <div class="embed-responsive embed-responsive-16by9">
                        <img src="/images/functions/printing.jpg" class="card-img-top embed-responsive-item" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Templates nach Mass</h5>
                        <p class="card-text">Verwende ein Buechs.ch-Template und erledige die Erstellung deines Buechers im Handumdrehen. Für Clubs, für Restaurants, für Dich!</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card card-4 animate__animated animate__slideInUp">
                    <div class="embed-responsive embed-responsive-16by9">
                        <img src="/images/functions/closed.jpg" class="card-img-top embed-responsive-item" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Flexibilität</h5>
                        <p class="card-text">Täglich wechselnde Öffnungszeiten? Kein Problem, mit Buechs.ch kannst du selbst die Mittagspause für Reservationen sperren.</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card card-5 animate__animated animate__slideInUp">
                    <div class="embed-responsive embed-responsive-16by9">
                        <img src="/images/functions/private.jpeg" class="card-img-top embed-responsive-item" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Privat und Öffentlich</h5>
                        <p class="card-text">Bestimme selbst, ob nur du und deine Mitglieder Zugang zum Buecher haben sollen oder jeder und jede Reservationen vornehmen kann.</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card card-6 animate__animated animate__slideInUp">
                    <div class="embed-responsive embed-responsive-16by9">
                        <img src="/images/functions/support.jpeg" class="card-img-top embed-responsive-item" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Professioneller Support</h5>
                        <p class="card-text">Unkompliziert und persönlich. Ruf uns an oder schreib uns dein Anliegen und wir kümmern uns schnellstmöglichst drum. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop