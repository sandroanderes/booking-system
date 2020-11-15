@extends('base.default')

@section('content')
<section class="container-fluid banner single px-0">
    <div class="thumbnail text-left">
        <div class="overlay"></div>
        <img src="https://images.unsplash.com/photo-1497366811353-6870744d04b2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="Place" class="img-responsive">
        <div class="caption">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-md-left text-center">
                        <h1 class="text-center">Räumlichkeiten</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid rooms-section py-5">
    <div class="container">
        <div class="row form-inline mb-3">
            <div class="col-lg-3 col-md-4 col-sm-12">
                <label class="my-1 mr-2 persons-check-label justify-content-start" for="date-input">Datum</label>
                <div class="input-group mb-2 mr-sm-2">
                    <input class="form-control" type="date" value="2020-08-19" id="date-input">
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-12">
                <label class="my-1 mr-2 persons-check-label justify-content-start" for="from-time-input">Zeit</label>
                <div class="input-group mb-2 mr-sm-2">
                    <input class="form-control" type="time" value="13:45:00" id="from-time-input">
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-12">
                <label class="my-1 mr-2 persons-check-label justify-content-start" for="to-time-input">bis</label>
                <div class="input-group mb-2 mr-sm-2">
                    <input class="form-control" type="time" value="13:45:00" id="to-time-input">
                </div>
            </div>
            <div class="col-lg-1 col-md-4 col-sm-4">
                <label class="my-1 mr-2 persons-check-label justify-content-start" for="persons">Personen</label>
                <div class="input-group mb-2 mr-sm-2">
                    <input class="form-control" type="number" value="1" id="persons">
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4">
                <br>
                <div class="form-check mb-2 mr-sm-2">
                    <input class="form-check-input" type="checkbox" id="available">
                    <label class="form-check-label" for="available">
                        Verfügbar
                    </label>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-4">
                <br>
                <butinpton type="button" id="searchRooms" class="btn btn-primary btn-block">Suchen</butinpton>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3" id="CalendarItems">
            <div class="col mb-4">
                <a href="#">
                    <div class="card border-success mb-3">
                        <div class="card-header bg-transparent border-success">Raum 1</div>
                        <div class="card-body text-success">
                            <h5 class="card-title">Success card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col mb-4">
                <a href="#">
                    <div class="card border-success mb-3">
                        <div class="card-header bg-transparent border-success">Raum 2</div>
                        <div class="card-body text-success">
                            <h5 class="card-title">Success card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col mb-4">
                <a href="#">
                    <div class="card border-success mb-3">
                        <div class="card-header bg-transparent border-success">Raum 3</div>
                        <div class="card-body text-success">
                            <h5 class="card-title">Success card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col mb-4">
                <a href="#">
                    <div class="card border-success mb-3">
                        <div class="card-header bg-transparent border-success">Raum 4</div>
                        <div class="card-body text-success">
                            <h5 class="card-title">Success card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col mb-4">
                <a href="#">
                    <div class="card border-success mb-3">
                        <div class="card-header bg-transparent border-success">Raum 5</div>
                        <div class="card-body text-success">
                            <h5 class="card-title">Success card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@stop