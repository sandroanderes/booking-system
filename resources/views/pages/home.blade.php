@extends('base.default')

@section('content')
    @isset ($data[0]->image)
        <section class="container-fluid featured-section">
            <div class="row">
                <div class="col-xl-7 col-12">
                    <div class="img-container">
                        <img src="{{ $data[0] ? $data[0]->image : '' }}" class="img-fluid" alt="Restaurant">
                        <div class="content text-center desktop">
                            <div class="align-middle">
                                <p>{{ $data[0] ? ucfirst($data[0]->template) : '' }}</p>
                                <h1>{{ $data[0] ? $data[0]->name : '' }}</h1>
                                <h6>Öffnungszeiten</h6>
                                <table>
                                    <tr>
                                        <td>Mo-Do:</td>
                                        <td>10 bis 21 Uhr</td>
                                    </tr>
                                    <tr>
                                        <td>Fr-Sa:</td>
                                        <td>10 bis 23 Uhr</td>
                                    </tr>
                                </table>
                                <a href="/buecher/{{$data[0]->buecherKey}}" type="button" class="btn btn-primary">Buechs jetzt!</a>
                            </div>
                        </div>
                        <div class="content-hover mobile">
                            <div>
                                <a href="/buecher/{{$data[0]->buecherKey}}" type="button" class="btn btn-outline-light mx-auto">Buechs jetzt!</a>
                            </div>
                        </div>
                        <div class="content mobile">
                            <div>
                                <p>{{ $data[0] ? ucfirst($data[0]->template) : '' }}</p>
                                <h2>{{ $data[0] ? $data[0]->name : '' }}</h2>
                                <p>{{ $data[0] ? $data[0]->location : '' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-12">
                    <div class="col">
                        <div class="img-container">
                            <img src="{{ $data[1] ? $data[1]->image : '' }}" class="img-fluid" alt="Restaurant">
                            <div class="content-hover">
                                <div>
                                    <a href="buecher/{{$data[1]->buecherKey}}" type="button" class="btn btn-outline-light mx-auto">Buechs jetzt!</a>
                                </div>
                            </div>
                            <div class="content">
                                <div>
                                    <p>{{ $data[1] ? ucfirst($data[1]->template) : '' }}</p>
                                    <h2>{{ $data[1] ? $data[1]->name : '' }}</h2>
                                    <p>{{ $data[1] ? $data[1]->location : '' }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="img-container">
                            <img src="{{ $data[2] ? $data[2]->image : '' }}" class="img-fluid" alt="Restaurant">
                            <div class="content-hover">
                                <div>
                                    <a href="buecher/{{$data[2]->buecherKey}}" type="button" class="btn btn-outline-light mx-auto">Buechs jetzt!</a>
                                </div>
                            </div>
                            <div class="content">
                                <div>
                                    <p>{{ $data[2] ? ucfirst($data[2]->template) : '' }}</p>
                                    <h2>{{ $data[2] ? $data[2]->name : '' }}</h2>
                                    <p>{{ $data[2] ? $data[2]->location : '' }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <section class="container-fluid home-section py-5">
        <div class="container">
            <h1 class="text-center mt-0">Alüte oder Mail schribe? Buechs eifach!</h1>
            <div class="row">
                <div class="col col-lg-6 col-12 mb-3 mb-lg-0">
                    <p> Keine Lust die immer gleichen Terminanfragen zu beantworten? Spar Dir die Zeit mit Buechs.ch.</p>
                    <ul class="mb-0">
                        <li>Erstelle massgeschneiderte Reservationskalender (sog. Buecher) für Dein Unternehmen oder Deinen Verein.</li>
                        <li>Kunden, Mitarbeiter oder Vereinsmitglieder sehen freie Slots und buchen sich selbst ein.</li>
                        <li>Spare Zeit und behalte den Überblick.</li>
                    </ul>
                </div>
                <div class="col col-lg-6 col-12">
                    <div class="img-container">
                        <img src="images/party.jpeg" class="img-fluid" alt="Party">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid home-section section-bg py-5">
        <div class="container">
            <div class="row">
                <div class="col col-lg-6 col-12 mb-3 mb-lg-0">
                    <div class="img-container">
                        <img src="images/restaurant_2.jpg" class="img-fluid" alt="Underwater">
                    </div>
                </div>
                <div class="col col-lg-6 col-12">
                    <h5 class="pb-4 font-weight-bold">Anwendungsbeispiel Restaurant</h5>
                    <p>
                        Hat mein Lieblingsrestaurant heute Abend um 19 Uhr noch einen Tisch frei? Statt zum Hörer zu greifen
                        oder eine Mail zu schreiben, gibst Du Deinen Gästen mit Buechs.ch die Möglichkeit selbst nachzuschauen
                        , wann noch Tische frei sind. Erstelle dafür einen Buecher auf Buechs.ch, trage Deine
                        Anzahl 2er, 4er oder 6er-Tische ein und lass Deine Kunden die Reservation in vorgegebenen Slots
                        vornehmen.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid home-section py-5">
        <div class="container">
            <div class="row">
                <div class="col col-lg-6 col-12">
                    <h5 class="pb-4 font-weight-bold">Anwendungsbeispiel Tennisclub</h5>
                    <p>
                        Kann ich morgen um 11 Uhr auf Platz 1 eine Stunde Tennis spielen? Mit Buechs.ch kann jedes
                        Vereinsmitglied selbst einsehen, wann Tennisplätze belegt sind und entsprechend eigene Reservationen
                        vornehmen. Game, Set & Buechs!
                    </p>
                </div>
                <div class="col col-lg-6 col-12 mb-3 mb-lg-0">
                    <div class="img-container">
                        <img src="images/tennisclub.jpg" class="img-fluid" alt="Underwater">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid home-section section-bg py-5">
        <div class="container">
            <div class="row">
                <div class="col col-lg-6 col-12 mb-3 mb-lg-0">
                    <div class="img-container">
                        <img src="images/startfeld.jpg" class="img-fluid" alt="Underwater">
                    </div>
                </div>
                <div class="col col-lg-6 col-12">
                    <h5 class="pb-4 font-weight-bold">Anwendungsbeispiel: Co-Working-Space</h5>
                    <p>
                        Willst Du Deinen Co-Working-Space-Kunden die Möglichkeit geben, sich unkompliziert einen
                        Meeting-Raum zu mieten? Nichts einfacher als das. Auf Buechs.ch erstellst Du Deinen eigenen Buecher
                        für Deine Meeting-Räume und Deine Co-Worker mieten sich gleich selbst ein.
                    </p>
                </div>
            </div>
        </div>
    </section>
@stop
