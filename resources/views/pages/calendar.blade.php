@extends('base.default')

@section('content')
<section class="container-fluid banner px-0">

    <div class="thumbnail text-left">
        <div class="overlay"></div>
        <img src="images/place.jpeg" alt="Place" class="img-responsive">
        <div class="caption">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-12 text-md-left text-center">
                        <h1>Restaurant, Büro, Coiffeur? Buechs!</h1>
                    </div>
                    <div class="col-md-4 col-12 text-md-right text-center">
                        <button type="button" class="btn btn-primary btn-lg">Jetzt neuen Kalender erstellen!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid calendar-section py-5">
    <div class="container">
        <div class="row mb-3">
            <div class="col-lg-3 col-md-6">
                <input type="text" id="CalendarFilter" class="form-control" placeholder="Räume, Plätze, Objekte, ...">
            </div>
            <div class="col-lg-3 col-md-6">
                <input type="text" id="CityFilter" class="form-control" placeholder="Ortschaften">
            </div>
            <div class="col col-md-6 col-lg">
                <select class="form-control" id="locationSelect">
                    <option selected value="Alle">Alle</option>
                    <option value="5 km">5 km</option>
                    <option value="10 km">10 km</option>
                    <option value="50 km">50 km</option>
                    <option value="100 km">100 km</option>
                </select>
            </div>
            <div class="col-lg-3 col-md-6 ">
                <select class="form-control" id="categorySelect">
                    <option selected value="Alle">Alle Kategorien</option>
                    <option value="Gastronomie">Gastro</option>
                    <option value="Sportplätze">Sport</option>
                    <option value="Räumlichkeiten">Räumlichkeiten</option>
                    <option value="Dienstleistungen">Dienstleistungen</option>
                </select>
            </div>
            <div class="col">
                <button type="button" id="searchCalendar" class="btn btn-primary btn-block">Suchen</button>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3" id="CalendarItems">
            <div class="col mb-4">
                <a href="#">
                    <div class="card">
                        <div class="embed-responsive embed-responsive-16by9">
                            <img src="/images/place.jpeg" class="card-img-top embed-responsive-item" alt="...">
                        </div>
                        <div class="card-body">
                            <div class="row" id="CalendarItems">
                                <div class="col-2 text-center d-flex align-items-center">
                                    <p class="card-date mb-0">SEP</p>
                                </div>
                                <div class="col-10">
                                    <h5 class="card-title">Co-Working Space</h5>
                                    <p class="card-text">Wöchentlich - 07:00 bis 22:00</p>
                                    <h6 class="card-text location">Aarau, Schweiz</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col mb-4">
                <a href="/sports">
                    <div class="card">
                        <div class="embed-responsive embed-responsive-16by9">
                            <img src="/images/restaurant.jpg" class="card-img-top embed-responsive-item" alt="...">
                        </div>
                        <div class="card-body">
                            <div class="row" id="CalendarItems">
                                <div class="col-2 d-flex align-items-center">
                                    <div class="row">
                                        <div class="col">
                                            <p class="card-date mb-0 text-center">OKT</p>
                                        </div>
                                        <div class="col text-center">
                                            <p class="text-center">30</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-10">
                                    <h5 class="card-title">Tennisplätze</h5>
                                    <p class="card-text">Wöchentlich - 07:00 bis 22:00</p>
                                    <h6 class="card-text location">Chur, Schweiz</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col mb-4">
                <a href="#">
                    <div class="card">
                        <div class="embed-responsive embed-responsive-16by9">
                            <img src="/images/table_tennis.jpeg" class="card-img-top embed-responsive-item" alt="...">
                        </div>
                        <div class="card-body">
                            <div class="row" id="CalendarItems">
                            <div class="col-2 d-flex align-items-center date">
                                    <div class="row">
                                        <div class="col">
                                            <p class="card-date mb-0 text-center">SEP</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-10">
                                    <h5 class="card-title">Co-Working Space</h5>
                                    <p class="card-text">Wöchentlich - 07:00 bis 22:00</p>
                                    <h6 class="card-text location">Olten, Schweiz</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col mb-4">
                <a href="#">
                    <div class="card">
                        <div class="embed-responsive embed-responsive-16by9">
                            <img src="/images/party.jpeg" class="card-img-top embed-responsive-item" alt="...">
                        </div>
                        <div class="card-body">
                            <div class="row" id="CalendarItems">
                                <div class="col-2 text-center d-flex align-items-center">
                                    <p class="card-date mb-0">SEP</p>
                                </div>
                                <div class="col-10">
                                    <h5 class="card-title">Co-Working Space</h5>
                                    <p class="card-text">Wöchentlich - 07:00 bis 22:00</p>
                                    <h6 class="card-text location">Aarau, Schweiz</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/gh/bigdatacloudapi/js-reverse-geocode-client@latest/bigdatacloud_reverse_geocode.min.js" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('js/filter.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/location.js') }}"></script>
@stop