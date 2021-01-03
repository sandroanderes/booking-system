@extends('base.default')
@section('content')
    <section class="container-fluid banner single px-0">
        <div class="thumbnail text-left">
            <div class="overlay"></div>
            <img src="{{ $data->image }}" alt="Place" class="img-responsive">
            <div class="caption">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-md-left text-center">
                            <h1 class="text-center">{{ $data->name }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid single-page py-5">
        <div class="container">
            {{--<div class="row form-inline mb-3">
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
                    <button type="button" id="searchRooms" class="btn btn-primary btn-block">Suchen</button>
                </div>
            </div>--}}


            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                <div class="col-lg-6 mb-5">
                    <h2 class="mb-3"><b>Details</b></h2>
                    <div class="row">
                        <div class="col-lg-6">
                            <small><b>Name</b></small>
                            <p>{{ $data->name }}</p>
                            <small><b>Adresse</b></small>
                            <p>{{ $data->street }}<br>
                                {{ $data->location }}
                            </p>
                            <small><b>Land</b></small>
                            <p>
                                {{ $data->country == 'CH' ? 'Schweiz' : '' }}
                                {{ $data->country == 'DE' ? 'Deutschland' : '' }}
                                {{ $data->country == 'AT' ? 'Österreich' : '' }}
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <small><b>Kategorie</b></small>
                            <p>{{ ucfirst($data->template) }}</p>
                            <small><b>Datum</b></small>
                            <p>{{ date('d. F Y', strtotime($data->updated_at)) }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <small><b>Beschreibung</b></small>
                            <p>{{ strip_tags($data->description) }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <h2 class="mb-3"><b>Öffnungszeiten</b></h2>
                    @if ($data->day_monday and $data->day_tuesday and $data->day_wednesday and $data->day_thursday and $data->day_friday and $data->day_saturday and $data->day_sunday)
                        <p>Wir haben <b>Täglich</b>
                            @if ($data->repeat)
                                von {{ $data->start_general }} bis {{ $data->end_general }} Uhr
                            @endif
                            für dich geöffnet.
                        </p>
                    @else
                        <p>
                            Wir haben an den nachfolgenden Wochentagen
                            @if ($data->repeat)
                                von {{ $data->start_general }} bis {{ $data->end_general }} Uhr
                            @endif
                            für dich geöffnet:
                        <ul>
                            {!! $data->day_monday ? '<li>Montag</li>' : '' !!}
                            {!! $data->day_tuesday ? '<li>Dienstag</li>' : '' !!}
                            {!! $data->day_wednesday ? '<li>Mittwoch</li>' : '' !!}
                            {!! $data->day_thursday ? '<li>Donnerstag</li>' : '' !!}
                            {!! $data->day_friday ? '<li>Freitag</li>' : '' !!}
                            {!! $data->day_saturday ? '<li>Samstag</li>' : '' !!}
                            {!! $data->day_sunday ? '<li>Sonntag</li>' : '' !!}
                        </ul>
                        </p>
                    @endif
                </div>

            </div>
            <h2 class="mb-3"><b>Verfügbare Tische</b></h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                <div class="col mb-4">
                    <a href="#" data-toggle="modal" data-target="#exampleModal">
                        <div class="card border-success mb-3">
                            <div class="card-header bg-transparent border-success">{{$data->gastrotable_number}}</div>
                            <div class="card-body text-success">
                                <h5 class="card-title">Success card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the card's content.</p>
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
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the card's content.</p>
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
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the card's content.</p>
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
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the card's content.</p>
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
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the card's content.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@stop
