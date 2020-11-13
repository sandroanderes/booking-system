@extends('base.default')

@section('content')
<section class="container-fluid featured-section">
    <div class="row">
        <div class="col-xl-7 col-12">
            <div class="img-container">
                <img src="images/restaurant.jpg" class="img-fluid" alt="Restaurant">
                <div class="content text-center desktop">
                    <div class="align-middle">
                        <p>Gastro</p>
                        <h1>Zum Ochsen</h1>
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
                        <button type="button" class="btn btn-primary">Buechs jetzt!</button>
                    </div>
                </div>
                <div class="content-hover mobile">
                    <div>
                        <button type="button" class="btn btn-outline-light mx-auto">Buechs jetzt!</button>
                    </div>
                </div>
                <div class="content mobile">
                    <div>
                        <p>Gewerbe</p>
                        <h2 class="text-break">Co-Working Space</h2>
                        <p>Chur, GR</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-5 col-12">
            <div class="col">
                <div class="img-container">
                    <img src="images/table_tennis.jpeg" class="img-fluid" alt="Restaurant">
                    <div class="content-hover">
                        <div>
                            <button type="button" class="btn btn-outline-light mx-auto">Buechs jetzt!</button>
                        </div>
                    </div>
                    <div class="content">
                        <div>
                            <p>Gewerbe</p>
                            <h2 class="text-break">Co-Working Space</h2>
                            <p>Chur, GR</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="img-container">
                    <img src="images/office.jpg" class="img-fluid" alt="Restaurant">
                    <div class="content-hover">
                        <div>
                            <button type="button" class="btn btn-outline-light mx-auto">Buechs jetzt!</button>
                        </div>
                    </div>
                    <div class="content">
                        <div>
                            <p>Sport</p>
                            <h2 class="text-break">Tischtennis</h2>
                            <p>Bern, BE</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid home-section py-5">
    <div class="container">
        <h1 class="text-center mt-0">Grüezi</h1>
        <div class="row">
            <div class="col col-lg-6 col-12 mb-3 mb-lg-0">
                Eintrag und Verbreitung für jeden Event komplett kostenlos:
                <ul class="mb-0">
                    <li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                        diam nonumy eirmod tempor invidunt.</li>
                    <li>At vero eos et accusam et justo duo dolores et ea rebum.</li>
                    <li>Stet clita kasd gubergren, no sea takimata sanctus est Lorem
                        ipsum dolor sit amet.</li>
                    <li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</li>
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
                    <img src="images/underwater.jpeg" class="img-fluid" alt="Underwater">
                </div>
            </div>
            <div class="col col-lg-6 col-12">
                <p>
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
                </p>
            </div>
        </div>
    </div>
</section>
@stop