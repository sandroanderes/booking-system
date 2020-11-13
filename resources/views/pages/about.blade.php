@extends('base.default')

@section('content')
<section class="container-fluid banner px-0">
    <div class="thumbnail text-left">
        <div class="overlay"></div>
        <img src="https://images.unsplash.com/photo-1499540633125-484965b60031?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1351&q=80" alt="Place" class="img-responsive">
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
        <div class="row justify-content-center text-center pb-3">
            <div class="col-8">
                <blockquote class="blockquote">
                    <p class="mb-0">"Talent wins games, but teamwork and intelligence win championships."</p>
                    <footer class="blockquote-footer">Michael Jordan</footer>
                </blockquote>
            </div>
        </div>
        <div class="row justify-content-center text-left">
            <div class="col-lg-6 col-xs-12">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium sapiente dignissimos natus corrupti molestiae est, nostrum asperiores aperiam ullam, amet minima porro. Iusto dolorem repudiandae saepe neque, ratione optio voluptas! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum soluta ullam dolorem laboriosam delectus eveniet accusamus eligendi officia praesentium explicabo. Molestias aperiam ea non ipsa ut, dolor modi ipsam expedita.</p>
            </div>
            <div class="col-lg-6 col-xs-12">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse tempore, dolor iusto eius assumenda quasi incidunt facere fugiat ea possimus dicta magni. Velit deleniti sint delectus quae repellendus vero? Dolorem? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, molestiae amet, dolor possimus consectetur aliquam explicabo placeat, assumenda laborum dolorem cum a magni adipisci! Quasi voluptatibus recusandae quisquam exercitationem quas?</p>
            </div>
        </div>

        <div class="row justify-content-center py-5">
            <img src="https://images.unsplash.com/photo-1526560244950-1a3c1ace48f9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&q=80" alt="Team">
        </div>

        <div class="row justify-content-center text-left">
            <div class="col-lg-3 col-xs-12">
                <h4><strong><span class="material-icons">
                            school
                        </span><span class="align-top"> Studenten</span> </strong></h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni a animi maiores deserunt ducimus at amet doloribus veniam saepe, ipsam reprehenderit rem! Ipsum neque debitis necessitatibus, exercitationem ipsam voluptatibus et.</p>
            </div>
            <div class="col-lg-3 col-xs-12">
                <h4><strong><span class="material-icons">
                            design_services
                        </span><span class="align-top"> Design + Craft</span></strong></h4>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt corrupti aliquam optio doloremque sunt. Ipsum soluta obcaecati perspiciatis, aliquid veritatis magnam placeat praesentium excepturi explicabo alias, consectetur, iste delectus ratione.</p>
            </div>
            <div class="col-lg-3 col-xs-12">
                <h4><strong><span class="material-icons">
                            local_hospital
                        </span><span  class="align-top"> Swiss Made</span></strong></h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem nesciunt, libero cum asperiores obcaecati labore magni corporis ipsum omnis explicabo! Laudantium aspernatur quas veniam quisquam aliquam fugiat nisi aut amet.</p>
            </div>
        </div>
    </div>
</section>
@stop