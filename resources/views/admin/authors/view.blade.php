@extends('layouts.admin')
@section('content')


<section class="articles">
        <div class="container">
            <div class="col-md-6 mx-auto bg-light shadow-sm border-0 card card-default">
                <div class="card-body">
                    <a href="{{ route('/') }}"><< admin</a>
                    <a href="{{ route('authors.main') }}"><< authors</a>
                              <h2 style="margin-bottom: 15px;">Author Details</h2>
                              <div class="form-group">
                                  <label class="col-md-10 margin-top-20" style="font-weight: bold;">Name</label>
                                  <p class="col-md-10">{{ $author->name }}</p>
                              </div>
                              <div class="form-group col-md-6">
                                <label class="col-md-10 margin-top-20" style="font-weight: bold;">Image Alternative Text</label>
                                    <p class="col-md-10">{{ $author->alt_image }}</p>
                                </div>
                              <div class="form-group">
                                 <img src="/image/{{ $author->image }}" height="70" width="70">
                              </div>
                          </div>
                          <div class="clearfix"></div>
                          <br><br><br>
                          <div class="form-group col-sm-12 text-center btn-div">
                              <div>
                                  <a href="{{ route('authors.main') }}" class="btn btn-primary btn-form">Back</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
           </div>
      </div>
 </section>

 @endsection