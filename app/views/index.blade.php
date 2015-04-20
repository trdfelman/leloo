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
                    <span class="skills"><strong>Leloo</strong> is an app that helps you when going to new places when you're letting loose of yourself. Great companion, just a hit of a button and you will know your current location and places near you (eg. <i>bars, hotels, stores, etc.</i>). If you find this app useful or you have suggestions to improve this app, you may send us a feedback at <strong>Contact</strong> section</span>
                    <span class="intro"><p>To <strong>start</strong>&nbsp;select place/s you want know about, then hit <strong>Go</strong>.</p></span>
                    <div id="alert-msg">
                    </div>
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
<section id="portfolio" class="section-md">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 id="your">You are here!</h2>
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
                <h2 id="h_place">Places</h2>
                {{--
                <hr class="star-light">
                --}}
                    <p  class="">Sort by :</p>

                    <div id="btn-group-places" class="btn-group" role="group" aria-label="Default button group">
                      <button type="button" class="sortby btn btn-success active ">Popularity</button>
                      <button type="button" class="sortby btn btn-success ">Distance</button>
                    </div>
                    <div id="places">

                    </div>
            </div>
            <div id="json_container_prominence" style="color:red;"> </div>
            <div id="json_container_distance" style="color:blue;">

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
                <div class="footer-col col-lg-12">
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
            </div>
        </div>
    </div>
    <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 page-scroll">
                    <a href="#page-top"><strong><span class="foot-nom">Leloo&nbsp;</span></strong></a>Copyright &copy; All rights reserved 2015
                </div>
            </div>
        </div>
    </div>
</footer>

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