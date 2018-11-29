    <!-- ***** Breadcumb Area Start ***** -->
    @extends('layouts.website')
    @section('content')
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url({{asset('contents/website')}}/img/bg-img/hero-4.jpg)">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h2>Contact</h2>
                        <p><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:+1234567890">+1 234 567 890</a> <a href="tel:+1234567890">+1 234 567 890</a></p>
                        <p><i class="fa fa-map-marker" aria-hidden="true"></i> 14 Soho Square, London, United Kingdom</p>
                        <p><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:someone@yoursite.com">lorem.ipsum@dolor.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** Contact Area Start ***** -->
    <div class="caviar-contact-area d-md-flex align-items-center" id="contact">
        <div class="contact-form-area d-flex justify-content-end">
            <div class="contact-form">
                <div class="contact-form-title">
                    <p>get in touch</p>
                </div>
                @if(Session('success'))
                    <div class="alert alert-success">
                        <strong>Success!</strong> Thanks for your important message.
                    </div>
                @endif
                @if(Session('error'))
                    <div class="alert alert-danger">
                        <strong>Sorry!</strong> Please Try Again.
                    </div>
                @endif
                
                <form method="post" action="{{url('/contactus/submit')}}">
                @csrf
                    <div class="row">
                        <div class="col-12 form-group{{$errors->has('name') ? ' has-error' : ''}}">
                            <input name="name" type="text" class="form-control" placeholder="Your Name" value="{{old('name')}}">
                            @if($errors->has('name'))
                                <span class="help-block">
                                    {{$errors->first('name')}}
                                </span>
                            @endif
                        </div>

                        <div class="col-12 form-group{{$errors->has('email') ? ' has-error' : ''}}">
                            <input name="email" type="email" class="form-control" placeholder="Your Email" value="{{old('email')}}">
                            @if($errors->has('email'))
                                <span class="help-block">
                                    {{$errors->first('email')}}
                                </span>
                            @endif
                        </div>
                        <div class="col-12">
                            <input name="subject" type="text" class="form-control"  placeholder="Your Subject" value="{{old('subject')}}">
                        </div>
                        <div class="col-12">
                            <textarea name="message" class="form-control" id="Message" cols="30" rows="10" placeholder="Your Message" value="{{old('message')}}"></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn caviar-btn"><span></span> Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="caviar-map-area wow fadeInRightBig" data-wow-delay="0.5s">
            <div id="googleMap"></div>
        </div>
    </div>
    @endsection
    <!-- ***** Contact Area End ***** -->
