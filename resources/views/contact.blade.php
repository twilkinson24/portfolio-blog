@extends('layouts.public')
@section('title', 'Contact')
@section('description', 'Contact page for Taylor Wilkinson, web developer')
@section('content')

<section class="contact d-flex justify-content-center flex-column text-center">
    <div class="container">
        <h3 class="text-custom-dark">I'd love to hear from you!</h3>
            <ul class="social-icons list-unstyled mx-auto col-3 d-flex justify-content-between p-0">
                <li>
                     <a href="https://github.com/twilkinson24/" class="text-custom-dark" target="_blank"><i class="fab fa-github"></i> </a>
                </li>
                <li>
                     <a href="https://www.linkedin.com/in/taylor-wilkinson-a6478229/"  class="text-custom-dark" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </li>
                <li>
                        <a href="https://twitter.com/coding4tacos/" class="text-custom-dark" target="_blank"> <i class="fab fa-twitter"></i> </a>
                </li>
            </ul>
            <!--Form with header-->
            <form action="{{ route('contact.send') }}" method="post" class="col-md-7 mx-auto" id="contact-form" role="form" enctype="multipart/form-data">
                <!-- Error and Success Messages -->
                @if (session()->has('flash_notification.message'))
                    <div class="alert alert-{{ session('flash_notification.level') }}">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {!! session('flash_notification.message') !!}
                    </div>
                @endif
                {{ csrf_field() }}
                <div class="card border-0">
                    <div class="card-body p-3">
                        <!--Body-->
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-user text-custom-light"></i></div>
                                </div>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-envelope text-custom-light"></i></div>
                                </div>
                                <input type="email" class="form-control" id="email" name="email" placeholder="john@gmail.com" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-comment text-custom-light"></i></div>
                                </div>
                                <textarea class="form-control" id="msg" name="msg" placeholder="Your message" required></textarea>
                            </div>
                        </div>
                        <div class="text-center">
                            <input type="submit" value="Send" class="btn text-white bg-custom-light btn-block py-2">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
