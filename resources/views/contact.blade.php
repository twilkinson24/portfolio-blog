@extends('layouts.public')
@section('content')

<section class="contact d-flex justify-content-center flex-column text-center">
    <div class="container">
        <h3 class="text-custom-dark">I'd love to hear from you!</h3>
        <!--Form with header-->
        <form action="" method="post" class="col-md-7 mx-auto">
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
                            <input type="email" class="form-control" id="nombre" name="email" placeholder="john@gmail.com" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-comment text-custom-light"></i></div>
                            </div>
                            <textarea class="form-control" placeholder="Your message" required></textarea>
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
