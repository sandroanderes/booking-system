@extends('base.default')

@section('content')
<section class="container-fluid banner single px-0">
    <div class="thumbnail text-left">
        <div class="overlay"></div>
        <img src="images/team.jpg" alt="team" class="img-responsive">
        <div class="caption">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-md-left text-center">
                        <h1 class="text-center">Über uns</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid about-section py-5">
    <div class="container">
        <div class="row justify-content-center text-left mb-5">
            <div class="col-lg-6 col-xs-12">
                <p>Hinter Buechs.ch stehen Sandro, Frank und Bernhard. Die drei haben im Rahmen einer Projektarbeit an der Fachhochschule Graubünden Buechs.ch umgesetzt.
                    Ursprünglich war Buechs.ch eine Bieridee. Frank und Bernhard spielen regelmässig Tennis und haben festgestellt, dass die Reservationsmöglichkeiten von Tennisplätzen in der Schweiz vielerorts umständlich sind.
                </p>
            </div>
            <div class="col-lg-6 col-xs-12">
                <p>Einige Tennisstunden und Besprechungen mit Sandro später, war die Idee von Buechs.ch entstanden. Neben Tennisplätzen können nun auch Tische von Restaurants, Räume oder Dienstleistungen aller Art reserviert werden. </p>
            </div>
        </div>

        <div class="row justify-content-center text-left">
            <div class="row">
                <!-- Single Starts  -->
                <div class="col-lg-4 col-md-6">
                    <div class="team__item set-bg" style="background-image: url('/images/about/frank.jpg');">
                        <div class="team__text">
                            <div class="team__title">
                                <h4>Frank Zinsli</h4>
                                <span>♡ Angeln, Milchstrasse, Vögel fotografieren</span>
                            </div>
                            <p>Vestibulum dapibus odio quam, sit amet hendrerit dui ultricies consectetur. Ut viverra
                                porta leo, non tincidunt mauris condimentu eget. Vivamus non turpis elit. Aenean
                                ultricies nisl sit amet.</p>
                            <div class="team__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Ends    -->
                <div class="col-lg-4 col-md-6">
                    <div class="team__item set-bg" style="background-image: url('/images/about/bernhard.jpg');">
                        <div class="team__text">
                            <div class="team__title">
                                <h4>Bernhard Aebersold</h4>
                                <span>♡ Schlechte Sprüche, Schoggimilch & Bier </span>
                            </div>
                            <p>Vestibulum dapibus odio quam, sit amet hendrerit dui ultricies consectetur. Ut viverra
                                porta leo, non tincidunt mauris condimentu eget. Vivamus non turpis elit. Aenean
                                ultricies nisl sit amet.</p>
                            <div class="team__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team__item set-bg" style="background-image: url('/images/about/sandro.jpg');">
                        <div class="team__text">
                            <div class="team__title">
                                <h4>Sandro Anderes</h4>
                                <span>♡ Brot, Laufsport & Schwedentorte</span>
                            </div>
                            <p>Vestibulum dapibus odio quam, sit amet hendrerit dui ultricies consectetur. Ut viverra
                                porta leo, non tincidunt mauris condimentu eget. Vivamus non turpis elit. Aenean
                                ultricies nisl sit amet.</p>
                            <div class="team__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop