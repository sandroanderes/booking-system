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
                            <p> {{ $data->country }} </p>
                        </div>
                        <div class="col-lg-6">
                            <small><b>Kategorie</b></small>
                            <p>{{ ucfirst($data->template) }}</p>
                            <small><b>Datum</b></small>
                            <p>{{ now()->format('d. F Y') }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <small><b>Beschreibung</b></small>
                            {!! $data->description !!}
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <h2 class="mb-3"><b>Öffnungszeiten</b></h2>
                    @if ($data->day_monday and $data->day_tuesday and $data->day_wednesday and $data->day_thursday and $data->day_friday and $data->day_saturday and $data->day_sunday)
                        <p>Wir haben in der aktuellen Woche <b>täglich</b>
                            @if ($data->repeat)
                                von {{ $data->start_general }} bis {{ $data->end_general }} Uhr
                            @endif
                            für dich geöffnet.
                        </p>
                    @else
                        <p>
                            Wir haben in der aktuellen Woche an den nachfolgenden Tagen
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
            @switch($data->template)
                {{-- Gastro --}}
                @case('gastronomy')
                @foreach ($template as $detail)
                    <h2 class="mb-3"><b>Verfügbare Tische</b></h2>
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                        @if ($detail->id)
                            <div class="col mb-4">
                                <div class="card border-success mb-3">
                                    <a href="#" data-toggle="modal" data-target="#modal-{{ $detail->gastrotable }}">
                                        <h5 class="card-header p-3 bg-transparent border-success text-center">
                                            <b>{{ $detail->gastrotable }}er Tische</b>
                                        </h5>
                                    </a>
                                    <div class="card-body text-center">
                                        <p class="card-text mb-3">Zurzeit sind noch x von {{ $detail->gastrotable_number }}
                                            {{ $detail->gastrotable_number > 1 ? 'Tischen' : 'Tisch' }} verfügbar.
                                        </p>
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#modal-{{ $detail->gastrotable }}">
                                            Jetzt reservieren
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="col-lg-12 mb-4">
                                <p>Momentan haben sind alle Tische reserviert.</p>
                                <p>Bei weiteren Fragen ist das <b>{{ $data->name }}</b>-Team unter der folgenden Nummer
                                    erreichbar: <a href="tel:+499123456789">+41 (0)79 123 45 67</a></p>
                            </div>
                        @endif
                    </div>
                @endforeach
                @break

                {{-- Sport --}}
                @case('sports')
                @foreach ($template as $detail)
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                        @if ($detail->id)
                            <div class="col mb-4">
                                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal"
                                    data-target="#modal-{{ $detail->name }}">
                                    Jetzt {{ $detail->name }} reservieren
                                </button>
                            </div>
                        @else
                            <div class="col-lg-12 mb-4">
                                <p>Momentan haben sind alle {{ $detail->name }} reserviert.</p>
                                <p>Bei weiteren Fragen ist das <b>{{ $data->name }}</b>-Team unter der folgenden Nummer
                                    erreichbar: <a href="tel:+499123456789">+41 (0)79 123 45 67</a></p>
                            </div>
                        @endif
                    </div>
                @endforeach
                @break

                {{-- Räume --}}
                @case('room')
                @foreach ($template as $detail)
                    <h2 class="mb-3"><b>Verfügbare Räume</b></h2>
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                        @if ($detail->id)
                            <div class="col mb-4">
                                <div class="card border-success mb-3">
                                    <a href="#" data-toggle="modal" data-target="#modal-{{ $detail->number }}">
                                        <h5 class="card-header p-3 bg-transparent border-success text-center">
                                            <b>{{ $detail->name }}</b>
                                        </h5>
                                    </a>
                                    <div class="card-body text-center">
                                        <p class="card-text mb-3">Zurzeit sind noch x von {{ $detail->number }}
                                            {{ $detail->number > 1 ? 'Tischen' : 'Tisch' }} verfügbar.
                                        </p>
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#modal-{{ $detail->name }}">
                                            Jetzt reservieren
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="col-lg-12 mb-4">
                                <p>Momentan haben sind alle {{ $detail->name }} reserviert.</p>
                                <p>Bei weiteren Fragen ist das <b>{{ $data->name }}</b>-Team unter der folgenden Nummer
                                    erreichbar: <a href="tel:+499123456789">+41 (0)79 123 45 67</a></p>
                            </div>
                        @endif
                    </div>
                @endforeach
                @break

                {{-- Dienstleistungen --}}
                @case('services')
                @foreach ($template as $detail)
                    <h2 class="mb-3"><b>Verfügbare Dienstleistungen</b></h2>
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                        @if ($detail->id)
                            <div class="col mb-4">
                                <div class="card border-success mb-3">
                                    <a href="#" data-toggle="modal" data-target="#modal-{{ $detail->number }}">
                                        <h5 class="card-header p-3 bg-transparent border-success text-center">
                                            <b>{{ $detail->service_name }}</b>
                                        </h5>
                                    </a>
                                    <div class="card-body text-center">
                                        <p class="card-text mb-3">Zurzeit sind noch x von {{ $detail->number }}
                                            {{ $detail->number > 1 ? 'Tischen' : 'Tisch' }} verfügbar.
                                        </p>
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#modal-{{ $detail->name }}">
                                            Jetzt {{ $detail->service_name }} eservieren
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="col-lg-12 mb-4">
                                <p>Momentan haben sind alle {{ $detail->name }} reserviert.</p>
                                <p>Bei weiteren Fragen ist das <b>{{ $data->name }}</b>-Team unter der folgenden Nummer
                                    erreichbar: <a href="tel:+499123456789">+41 (0)79 123 45 67</a></p>
                            </div>
                        @endif
                    </div>
                @endforeach
                @break

            @endswitch
        </div>
        <script>
            var start_general = (($data - > start_general) ? {
                !!json_encode($data - > start_general) !!
            } : '');
            var end_general = (($data - > start_general) ? {
                !!json_encode($data - > end_general) !!
            } : '');
            var duration_min_h = (($data - > start_general) ? {
                !!json_encode($data - > duration_min_h) !!
            } : '');
            var duration_max_h = (($data - > start_general) ? {
                !!json_encode($data - > duration_max_h) !!
            } : '');

        </script>
        @foreach ($template as $table)
            <div class="modal fade" id="modal-{{ $table->gastrotable }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{ $table->gastrotable }}er Tisch reservieren
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="exampleFormControlInput1">Vorname*</label>
                                            <input type="text" class="form-control" placeholder="Vorname">
                                        </div>
                                        <div class="col">
                                            <label for="exampleFormControlInput1">Nachname*</label>
                                            <input type="text" class="form-control" placeholder="Nachname">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Email-Adresse*</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                        placeholder="max.mustermann@email.ch">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Telefonnummer</label>
                                    <input class="form-control" type="tel" id="phone" name="phone"
                                        pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" placeholder="+41 (0)79 123 45 67">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Reservationsdauer</label>
                                    <div class="row">
                                        <div class="col-lg-10">
                                            <input type="range" class="custom-range" min="{{ $data->duration_min_h }}"
                                                max="{{ $data->duration_max_h }}" step="0.5"
                                                oninput="this.parentElement.nextElementSibling.firstElementChild.value = this.value">
                                        </div>
                                        <div class="col-lg-2">
                                            <output
                                                id="duration_output">{{ ($data->duration_min_h + $data->duration_max_h) / 2 }}</output>
                                            h
                                        </div>
                                    </div>
                                    <small id="passwordHelpInline" class="text-muted">
                                        Wie lange möchtest du deinen Tisch reservieren?
                                    </small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Heute verfügbares Zeitfenster*</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>13:00 - 14:00 Uhr</option>
                                        <option>14:00 - 15:00 Uhr</option>
                                        <option>15:00 - 16:00 Uhr</option>
                                        <option>16:00 - 17:00 Uhr</option>
                                        <option>17:00 - 18:00 Uhr</option>
                                    </select>
                                    <small id="passwordHelpInline" class="text-muted">
                                        Vom Restaurant zur Verfügung gestellter Zeitraum.
                                    </small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Bemerkung</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Abbrechen</button>
                            <button type="button" class="btn btn-primary">Für gewählte Uhrzeit reservieren</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="{{ asset('js/frontend/reservation.js') }}"></script>
@stop
