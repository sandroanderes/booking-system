@extends('base.default')

@section('content')
<section class="container-fluid calendar-banner px-0">
    <div class="thumbnail text-left">
        <div class="overlay"></div>
        <img src="images/suessmost.jpg" alt="Place" class="img-responsive">
        <div class="caption">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-12 text-md-left text-center">
                        <h1>Wo de Bartli de Most holt? Bi Buechs.ch!</h1>
                    </div>
                    <div class="col-md-4 col-12 text-md-right text-center">
                        <button type="button" class="btn btn-primary btn-lg">Jetzt eigen Süssmost anbieten!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid functions-section py-5">
    <div class="container">
        <h1 class="text-center mt-0">Grüezi</h1>
        <p class="text-center mt-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem temporibus consectetur placeat debitis ducimus?</p>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3" id="CalendarItems">
            <div class="col mb-4">
                <div class="card">
                    <div class="embed-responsive embed-responsive-16by9">
                        <img src="https://source.unsplash.com/random/1920x1080" class="card-img-top embed-responsive-item" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                    <div class="embed-responsive embed-responsive-16by9">
                        <img src="https://source.unsplash.com/random/2080x1170" class="card-img-top embed-responsive-item" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                    <div class="embed-responsive embed-responsive-16by9">
                        <img src="https://source.unsplash.com/random/1760x990" class="card-img-top embed-responsive-item" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                    <div class="embed-responsive embed-responsive-16by9">
                        <img src="https://source.unsplash.com/random/1280x720" class="card-img-top embed-responsive-item" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                    <div class="embed-responsive embed-responsive-16by9">
                        <img src="https://source.unsplash.com/random/1520x855" class="card-img-top embed-responsive-item" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                    <div class="embed-responsive embed-responsive-16by9">
                        <img src="https://source.unsplash.com/random/1360x765" class="card-img-top embed-responsive-item" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop