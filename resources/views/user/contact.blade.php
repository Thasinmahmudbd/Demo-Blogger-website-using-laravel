@extends('user/layout/layout')

@section('page_title','Contact Form')
@section('page_name','Contact Me')
@section('date',"I'll reply as soon as possible")

@section('container')

<!-- Main Content-->
<main class="mb-4">

    <div class="container px-4 px-lg-5">

        <div class="row gx-4 gx-lg-5 justify-content-center">

                        @if(session('msg')=='Message Sent.')

                            <div class="alert alert-success alert-dismissible " role="alert">
                                <strong>{{session('msg')}}</strong>
                            </div>
                        
                        @endif

            <div class="col-md-10 col-lg-8 col-xl-7">

                <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</p>

                <div class="my-5">

                    <form id="contactForm" method="post" action="{{url('/contact/submit')}}">
                    @csrf

                        <div class="form-floating">

                            <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" name="name"/>

                            <label for="name">Name</label>

                            @error('name')
                                <span style="color:red; font-size:.8rem;">{{$message}}</span>
                            @enderror

                        </div>

                        <div class="form-floating">

                            <input class="form-control" id="email" type="email" placeholder="Enter your email..." data-sb-validations="required,email" name="email"/>

                            <label for="email">Email address</label>

                            @error('email')
                                <span style="color:red; font-size:.8rem;">{{$message}}</span>
                            @enderror

                        </div>

                        <div class="form-floating">

                            <input class="form-control" id="mobile" type="tel" placeholder="Enter your phone number..." data-sb-validations="required" name="mobile"/>

                            <label for="mobile">Phone Number</label>

                            @error('mobile')
                                <span style="color:red; font-size:.8rem;">{{$message}}</span>
                            @enderror

                        </div>

                        <div class="form-floating">

                            <textarea class="form-control" id="message" placeholder="Enter your message here..." style="height: 12rem" data-sb-validations="required" name="message"></textarea>

                            <label for="message">Message</label>

                            @error('message')
                                <span style="color:red; font-size:.8rem;">{{$message}}</span>
                            @enderror

                        </div>

                        <br />


                                <!-- Submit Button-->

                                <input class="btn btn-primary text-uppercase" id="submit" type="submit" name="submit" value="Send">

                    </form>

                </div>

            </div>

        </div>

    </div>

</main>



@endsection