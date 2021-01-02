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
                        <button type="button" class="btn btn-primary btn-lg">Jetzt eigenen Süssmost anbieten!</button>
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
                        <img src="/images/functions/all-in-one.jpeg" class="card-img-top embed-responsive-item" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">All-In-One Lösung</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card card-2 animate__animated animate__slideInUp">
                    <div class="embed-responsive embed-responsive-16by9">
                        <img src="/images/functions/modern.jpeg" class="card-img-top embed-responsive-item" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Modernes Design</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card card-3 animate__animated animate__slideInUp">
                    <div class="embed-responsive embed-responsive-16by9">
                        <img src="/images/functions/private.jpeg" class="card-img-top embed-responsive-item" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Privat und Öffentlich</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card card-4 animate__animated animate__slideInUp">
                    <div class="embed-responsive embed-responsive-16by9">
                        <img src="/images/functions/security.jpeg" class="card-img-top embed-responsive-item" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Hohe Sicherheitsstandards</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card card-5 animate__animated animate__slideInUp">
                    <div class="embed-responsive embed-responsive-16by9">
                        <img src="/images/functions/simple.jpeg" class="card-img-top embed-responsive-item" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Benutzerfreundlich</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop