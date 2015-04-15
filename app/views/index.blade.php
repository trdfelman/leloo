@extends('master')
@section('content')
<!-- Header -->
<header>
    <div class="container">
        <div class="row">
            <div id="select" class="col-lg-12 text-center">
                {{--<img class="img-responsive" src="img/profile.png" alt="">--}}
                <div class="intro-text">
                    {{--<span class="name">Leloo</span>--}}
                    {{--
                    <hr class="star-light">
                    --}}
                    <span class="skills">Lorem ipsum dolor sit amet, consectetuer</span>
                </div>
                                                       {{ Form::select('opt', ['Places'], null, ['class' => 'js-example-basic-multiple form-control', 'multiple'=>'multiple','id'=>'selecta']) }}
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p></p>
                    <button id="cmdSubmit" type="submit" class="btn btn-success btn-lg">Go</button>
                    <button id="noSubmit" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span> Loading...</button>

                </div>

            </div>
        </div>
    </div>
</header>

<!-- Portfolio Grid Section -->
<section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>You are here!</h2>
                <div id="map_holder" >
                    <div id="mapcanvas" style="width: 100%; ">

                    </div>
                    <div id="location_container">

                    </div>
                 </div>


            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="success" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Places</h2>
                {{--
                <hr class="star-light">
                --}}
                    <p  class="">Sort by :</p>

                    <div class="btn-group" role="group" aria-label="Default button group">
                      <button type="button" class="sortby btn btn-success active ">Prominence</button>
                      <button type="button" class="sortby btn btn-success ">Distance</button>
                    </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
               <div id="placeres">

                                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Contact Me</h2>
                {{--
                <hr class="star-primary">
                --}}
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Name" id="name" required
                                   data-validation-required-message="Please enter your name.">

                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Email Address</label>
                            <input type="email" class="form-control" placeholder="Email Address" id="email" required
                                   data-validation-required-message="Please enter your email address.">

                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Phone Number</label>
                            <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required
                                   data-validation-required-message="Please enter your phone number.">

                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Message</label>
                            <textarea rows="5" class="form-control" placeholder="Message" id="message" required
                                      data-validation-required-message="Please enter a message."></textarea>

                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>

                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-success btn-lg">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="text-center">
    <div class="footer-above">
        <div class="container">
            <div class="row">
                <div class="footer-col col-md-4">
                    <h3>Location</h3>

                    <p>3481 Melrose Place<br>Beverly Hills, CA 90210</p>
                </div>
                <div class="footer-col col-md-4">
                    <h3>Around the Web</h3>
                    <ul class="list-inline">
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="footer-col col-md-4">
                    <h3>About Freelancer</h3>

                    <p>Freelance is a free to use, open source Bootstrap theme created by <a
                            href="http://startbootstrap.com">Start Bootstrap</a>.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    Copyright &copy; Your Website 2014
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-top page-scroll visible-xs visble-sm">
    <a class="btn btn-primary" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>

<!-- Portfolio Modals -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Project Title</h2>
                        {{--
                        <hr class="star-primary">
                        --}}
                        <img src="img/portfolio/cabin.png" class="img-responsive img-centered" alt="">

                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set
                            by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can
                            download their free set with 16 icons, or you can purchase the entire set with 146 icons for
                            only $12!</p>
                        <ul class="list-inline item-details">
                            <li>Client:
                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="http://startbootstrap.com">April 2014</a>
                                </strong>
                            </li>
                            <li>Service:
                                <strong><a href="http://startbootstrap.com">Web Development</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i>
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Project Title</h2>
                        {{--
                        <hr class="star-primary">
                        --}}
                        <img src="img/portfolio/cake.png" class="img-responsive img-centered" alt="">

                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set
                            by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can
                            download their free set with 16 icons, or you can purchase the entire set with 146 icons for
                            only $12!</p>
                        <ul class="list-inline item-details">
                            <li>Client:
                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="http://startbootstrap.com">April 2014</a>
                                </strong>
                            </li>
                            <li>Service:
                                <strong><a href="http://startbootstrap.com">Web Development</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i>
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Project Title</h2>
                        {{--
                        <hr class="star-primary">
                        --}}
                        <img src="img/portfolio/circus.png" class="img-responsive img-centered" alt="">

                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set
                            by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can
                            download their free set with 16 icons, or you can purchase the entire set with 146 icons for
                            only $12!</p>
                        <ul class="list-inline item-details">
                            <li>Client:
                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="http://startbootstrap.com">April 2014</a>
                                </strong>
                            </li>
                            <li>Service:
                                <strong><a href="http://startbootstrap.com">Web Development</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i>
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Project Title</h2>
                        {{--
                        <hr class="star-primary">
                        --}}
                        <img src="img/portfolio/game.png" class="img-responsive img-centered" alt="">

                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set
                            by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can
                            download their free set with 16 icons, or you can purchase the entire set with 146 icons for
                            only $12!</p>
                        <ul class="list-inline item-details">
                            <li>Client:
                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="http://startbootstrap.com">April 2014</a>
                                </strong>
                            </li>
                            <li>Service:
                                <strong><a href="http://startbootstrap.com">Web Development</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i>
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Project Title</h2>
                        {{--
                        <hr class="star-primary">
                        --}}
                        <img src="img/portfolio/safe.png" class="img-responsive img-centered" alt="">

                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set
                            by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can
                            download their free set with 16 icons, or you can purchase the entire set with 146 icons for
                            only $12!</p>
                        <ul class="list-inline item-details">
                            <li>Client:
                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="http://startbootstrap.com">April 2014</a>
                                </strong>
                            </li>
                            <li>Service:
                                <strong><a href="http://startbootstrap.com">Web Development</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i>
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Project Title</h2>
                        {{--
                        <hr class="star-primary">
                        --}}
                        <img src="img/portfolio/submarine.png" class="img-responsive img-centered" alt="">

                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set
                            by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can
                            download their free set with 16 icons, or you can purchase the entire set with 146 icons for
                            only $12!</p>
                        <ul class="list-inline item-details">
                            <li>Client:
                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="http://startbootstrap.com">April 2014</a>
                                </strong>
                            </li>
                            <li>Service:
                                <strong><a href="http://startbootstrap.com">Web Development</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i>
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Geo location   -->
 <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true&libraries=geometry,places"></script>
<script src="{{asset('js/h5utils.js')}}"></script>
<script src="{{asset('js/h5geo.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<!-- Plugin JavaScript -->
 <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="{{asset('js/classie.js')}}"></script>
<script src="{{asset('js/cbpAnimatedHeader.js')}}"></script>

<!-- Contact Form JavaScript -->
<script src="{{asset('js/jqBootstrapValidation.js')}}"></script>
<script src="{{asset('js/contact_me.js')}}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{asset('js/freelancer.js')}}"></script>
@stop