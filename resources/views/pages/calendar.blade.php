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
                            <h1>Die öffentlichen Buecher im Überblick.</h1>
                        </div>
                        <div class="col-md-4 col-12 text-md-right text-center">
                            <button type="button" class="btn btn-primary btn-lg">Jetzt eigenen Buecher erstellen!</button>
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
                    <input type="text" id="mainFilter" class="form-control" placeholder="Räume, Plätze, Objekte, ...">
                </div>
                <div class="col-lg-3 col-md-6">
                    <input type="text" id="locationFilter" class="form-control" placeholder="Ortschaft">
                </div>
                <div class="col col-md-6 col-lg">
                    <select class="form-control" id="locationSelect">
                        <option selected value="5 km">5 km</option>
                        <option value="10 km">10 km</option>
                        <option value="25 km">25 km</option>
                        <option value="50 km">50 km</option>
                        <option value="100 km">100 km</option>
                    </select>
                </div>
                <div class="col-lg-3 col-md-6 ">
                    <select class="form-control" id="categorySelect">
                        <option selected value="all">Alle Kategorien</option>
                        <option value="gastronomy">Gastro</option>
                        <option value="sports">Sport</option>
                        <option value="rooms">Räumlichkeiten</option>
                        <option value="services">Dienstleistungen</option>
                    </select>
                </div>
                <div class="col">
                    <button type="button" id="searchCalendar" class="btn btn-primary btn-block">Suchen</button>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                

                @foreach ($data as $calendar)
               
                    <div class="col mb-4 {{ $calendar->template }}">
                        <a href="/calendar/{{ $calendar->template }}/{{ $calendar->id }}">
                            <div class="card">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <img src="{{ $calendar->image }}" class="card-img-top embed-responsive-item" alt="{{$calendar->name}}">
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-2 text-center d-flex align-items-center">
                                            <p class="card-date mb-0">
                                                <span class="material-icons">
                                                    {{ $calendar->template == 'gastronomy' ? 'restaurant_menu' : '' }}
                                                    {{ $calendar->template == 'services' ? 'store' : '' }}
                                                    {{ $calendar->template == 'sports' ? 'directions_run' : '' }}
                                                    {{ $calendar->template == 'rooms' ? 'meeting_room' : '' }}
                                                    {{ $calendar->template == 'none' ? 'shuffle' : '' }}
                                                </span>
                                            </p>
                                        </div>
                                        <div class="col-10">
                                            <h5 class="card-title">{{ $calendar->name }}</h5>
                                            @if ($calendar->day_monday and $calendar->day_tuesday and $calendar->day_wednesday and $calendar->day_thursday and $calendar->day_friday and $calendar->day_saturday and $calendar->day_sunday)
                                                <p class="card-text">Täglich
                                                    @if ($calendar->repeat)
                                                        - {{ $calendar->start_general }} bis {{ $calendar->end_general }}
                                                    @endif
                                                </p>
                                            @else
                                                <p class="card-text">
                                                    {{ $calendar->day_monday ? (($calendar->day_monday and $calendar->day_tuesday) ? 'Mo,' : 'Mo') : '' }}
                                                    {{ $calendar->day_tuesday ? (($calendar->day_tuesday and $calendar->day_wednesday) ? 'Di,' : 'Di') : '' }}
                                                    {{ $calendar->day_wednesday ? (($calendar->day_wednesday and $calendar->day_thursday) ? 'Mi,' : 'Mi') : '' }}
                                                    {{ $calendar->day_thursday ? (($calendar->day_thursday and $calendar->day_friday) ? 'Do,' : 'Do') : '' }}
                                                    {{ $calendar->day_friday ? (($calendar->day_friday and $calendar->day_saturday) ? 'Fr,' : 'Fr') : '' }}
                                                    {{ $calendar->day_saturday ? (($calendar->day_saturday and $calendar->day_sunday) ? 'Sa,' : 'Sa') : '' }}
                                                    {{ $calendar->day_sunday ? 'So' : '' }}

                                                    @if ($calendar->repeat)
                                                        - {{ $calendar->start_general }} bis {{ $calendar->end_general }}
                                                    @endif
                                                </p>
                                            @endif
                                            <h6 class="card-text location">{{ $calendar->location }},
                                                {{ $calendar->country }}
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <div id="loader"></div>
    <script
        src="https://cdn.jsdelivr.net/gh/bigdatacloudapi/js-reverse-geocode-client@latest/bigdatacloud_reverse_geocode.min.js"
        type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('js/frontend/calendar-search.js') }}"></script>
@stop
