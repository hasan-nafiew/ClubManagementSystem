 <!-- ***** Breadcumb Area Start ***** -->
 @extends('layouts.website')
 @section('content')
 <div class="breadcumb-area bg-img bg-overlay" style="background-image: url({{asset('contents/website')}}/img/bg-img/hero-2.jpg)">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h2>Menu</h2>
                        <a href="#menu" id="menubtn" class="btn caviar-btn"><span></span> Special</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** Menu Area Start ***** -->
    <div class="caviar-food-menu section-padding-150 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <div class="food-menu-title">
                        <h2>Menu</h2>
                    </div>
                </div>

                <div class="col-10">
                    <div class="caviar-projects-menu">
                        <div class="text-center portfolio-menu">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".breakfast">breakfast</button>
                            <button data-filter=".lunch">lunch</button>
                            <button data-filter=".dinner">dinner</button>
                        </div>
                    </div>

                    <div class="caviar-menu-slides owl-carousel clearfix">

                        <div class="caviar-portfolio clearfix">
                            <!-- Single Gallery Item -->
                            <div class="single_menu_item breakfast wow fadeInUp">
                                <div class="d-sm-flex align-items-center">
                                    <div class="dish-thumb">
                                        <img src="{{asset('contents/website')}}/img/menu-img/dish-1.png" alt="">
                                    </div>
                                    <div class="dish-description">
                                        <h3>Lorem Ipsum Dolor Sit Amet</h3>
                                        <p>Sed commodo augue eu diam tincidunt, sit amet auctor lectus semper. Mauris porttitor diam at fringilla tempor.</p>
                                    </div>
                                    <div class="dish-value">
                                        <h3>$45</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Gallery Item -->
                            <div class="single_menu_item breakfast dinner wow fadeInUp">
                                <div class="d-sm-flex align-items-center">
                                    <div class="dish-thumb">
                                        <img src="{{asset('contents/website')}}/img/menu-img/dish-2.png" alt="">
                                    </div>
                                    <div class="dish-description">
                                        <h3>Lorem Ipsum Dolor Sit Amet</h3>
                                        <p>Sed commodo augue eu diam tincidunt, sit amet auctor lectus semper. Mauris porttitor diam at fringilla tempor.</p>
                                    </div>
                                    <div class="dish-value">
                                        <h3>$45</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Gallery Item -->
                            <div class="single_menu_item lunch wow fadeInUp">
                                <div class="d-sm-flex align-items-center">
                                    <div class="dish-thumb">
                                        <img src="{{asset('contents/website')}}/img/menu-img/dish-3.png" alt="">
                                    </div>
                                    <div class="dish-description">
                                        <h3>Lorem Ipsum Dolor Sit Amet</h3>
                                        <p>Sed commodo augue eu diam tincidunt, sit amet auctor lectus semper. Mauris porttitor diam at fringilla tempor.</p>
                                    </div>
                                    <div class="dish-value">
                                        <h3>$45</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Gallery Item -->
                            <div class="single_menu_item lunch wow fadeInUp">
                                <div class="d-sm-flex align-items-center">
                                    <div class="dish-thumb">
                                        <img src="{{asset('contents/website')}}/img/menu-img/dish-1.png" alt="">
                                    </div>
                                    <div class="dish-description">
                                        <h3>Lorem Ipsum Dolor Sit Amet</h3>
                                        <p>Sed commodo augue eu diam tincidunt, sit amet auctor lectus semper. Mauris porttitor diam at fringilla tempor.</p>
                                    </div>
                                    <div class="dish-value">
                                        <h3>$45</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Gallery Item -->
                            <div class="single_menu_item dinner wow fadeInUp">
                                <div class="d-sm-flex align-items-center">
                                    <div class="dish-thumb">
                                        <img src="{{asset('contents/website')}}/img/menu-img/dish-2.png" alt="">
                                    </div>
                                    <div class="dish-description">
                                        <h3>Lorem Ipsum Dolor Sit Amet</h3>
                                        <p>Sed commodo augue eu diam tincidunt, sit amet auctor lectus semper. Mauris porttitor diam at fringilla tempor.</p>
                                    </div>
                                    <div class="dish-value">
                                        <h3>$45</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="caviar-portfolio clearfix">
                            <!-- Single Gallery Item -->
                            <div class="single_menu_item breakfast wow fadeInUp">
                                <div class="d-sm-flex align-items-center">
                                    <div class="dish-thumb">
                                        <img src="{{asset('contents/website')}}/img/menu-img/dish-1.png" alt="">
                                    </div>
                                    <div class="dish-description">
                                        <h3>Lorem Ipsum Dolor Sit Amet</h3>
                                        <p>Sed commodo augue eu diam tincidunt, sit amet auctor lectus semper. Mauris porttitor diam at fringilla tempor.</p>
                                    </div>
                                    <div class="dish-value">
                                        <h3>$45</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Gallery Item -->
                            <div class="single_menu_item breakfast dinner wow fadeInUp">
                                <div class="d-sm-flex align-items-center">
                                    <div class="dish-thumb">
                                        <img src="{{asset('contents/website')}}/img/menu-img/dish-2.png" alt="">
                                    </div>
                                    <div class="dish-description">
                                        <h3>Lorem Ipsum Dolor Sit Amet</h3>
                                        <p>Sed commodo augue eu diam tincidunt, sit amet auctor lectus semper. Mauris porttitor diam at fringilla tempor.</p>
                                    </div>
                                    <div class="dish-value">
                                        <h3>$45</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Gallery Item -->
                            <div class="single_menu_item lunch wow fadeInUp">
                                <div class="d-sm-flex align-items-center">
                                    <div class="dish-thumb">
                                        <img src="{{asset('contents/website')}}/img/menu-img/dish-3.png" alt="">
                                    </div>
                                    <div class="dish-description">
                                        <h3>Lorem Ipsum Dolor Sit Amet</h3>
                                        <p>Sed commodo augue eu diam tincidunt, sit amet auctor lectus semper. Mauris porttitor diam at fringilla tempor.</p>
                                    </div>
                                    <div class="dish-value">
                                        <h3>$45</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Gallery Item -->
                            <div class="single_menu_item lunch wow fadeInUp">
                                <div class="d-sm-flex align-items-center">
                                    <div class="dish-thumb">
                                        <img src="{{asset('contents/website')}}/img/menu-img/dish-1.png" alt="">
                                    </div>
                                    <div class="dish-description">
                                        <h3>Lorem Ipsum Dolor Sit Amet</h3>
                                        <p>Sed commodo augue eu diam tincidunt, sit amet auctor lectus semper. Mauris porttitor diam at fringilla tempor.</p>
                                    </div>
                                    <div class="dish-value">
                                        <h3>$45</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Gallery Item -->
                            <div class="single_menu_item dinner wow fadeInUp">
                                <div class="d-sm-flex align-items-center">
                                    <div class="dish-thumb">
                                        <img src="{{asset('contents/website')}}/img/menu-img/dish-2.png" alt="">
                                    </div>
                                    <div class="dish-description">
                                        <h3>Lorem Ipsum Dolor Sit Amet</h3>
                                        <p>Sed commodo augue eu diam tincidunt, sit amet auctor lectus semper. Mauris porttitor diam at fringilla tempor.</p>
                                    </div>
                                    <div class="dish-value">
                                        <h3>$45</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="caviar-portfolio clearfix">
                            <!-- Single Gallery Item -->
                            <div class="single_menu_item breakfast wow fadeInUp">
                                <div class="d-sm-flex align-items-center">
                                    <div class="dish-thumb">
                                        <img src="{{asset('contents/website')}}/img/menu-img/dish-1.png" alt="">
                                    </div>
                                    <div class="dish-description">
                                        <h3>Lorem Ipsum Dolor Sit Amet</h3>
                                        <p>Sed commodo augue eu diam tincidunt, sit amet auctor lectus semper. Mauris porttitor diam at fringilla tempor.</p>
                                    </div>
                                    <div class="dish-value">
                                        <h3>$45</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Gallery Item -->
                            <div class="single_menu_item breakfast dinner wow fadeInUp">
                                <div class="d-sm-flex align-items-center">
                                    <div class="dish-thumb">
                                        <img src="{{asset('contents/website')}}/img/menu-img/dish-2.png" alt="">
                                    </div>
                                    <div class="dish-description">
                                        <h3>Lorem Ipsum Dolor Sit Amet</h3>
                                        <p>Sed commodo augue eu diam tincidunt, sit amet auctor lectus semper. Mauris porttitor diam at fringilla tempor.</p>
                                    </div>
                                    <div class="dish-value">
                                        <h3>$45</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Gallery Item -->
                            <div class="single_menu_item lunch wow fadeInUp">
                                <div class="d-sm-flex align-items-center">
                                    <div class="dish-thumb">
                                        <img src="{{asset('contents/website')}}/img/menu-img/dish-3.png" alt="">
                                    </div>
                                    <div class="dish-description">
                                        <h3>Lorem Ipsum Dolor Sit Amet</h3>
                                        <p>Sed commodo augue eu diam tincidunt, sit amet auctor lectus semper. Mauris porttitor diam at fringilla tempor.</p>
                                    </div>
                                    <div class="dish-value">
                                        <h3>$45</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Gallery Item -->
                            <div class="single_menu_item lunch wow fadeInUp">
                                <div class="d-sm-flex align-items-center">
                                    <div class="dish-thumb">
                                        <img src="{{asset('contents/website')}}/img/menu-img/dish-1.png" alt="">
                                    </div>
                                    <div class="dish-description">
                                        <h3>Lorem Ipsum Dolor Sit Amet</h3>
                                        <p>Sed commodo augue eu diam tincidunt, sit amet auctor lectus semper. Mauris porttitor diam at fringilla tempor.</p>
                                    </div>
                                    <div class="dish-value">
                                        <h3>$45</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Gallery Item -->
                            <div class="single_menu_item dinner wow fadeInUp">
                                <div class="d-sm-flex align-items-center">
                                    <div class="dish-thumb">
                                        <img src="{{asset('contents/website')}}/img/menu-img/dish-2.png" alt="">
                                    </div>
                                    <div class="dish-description">
                                        <h3>Lorem Ipsum Dolor Sit Amet</h3>
                                        <p>Sed commodo augue eu diam tincidunt, sit amet auctor lectus semper. Mauris porttitor diam at fringilla tempor.</p>
                                    </div>
                                    <div class="dish-value">
                                        <h3>$45</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- ***** Menu Area End ***** -->

    <!-- ***** Special Menu Area Start ***** -->
    <section class="caviar-dish-menu clearfix" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-12 menu-heading">
                    <div class="section-heading text-center">
                        <h2>Special</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="caviar-single-dish wow fadeInUp" data-wow-delay="0.5s">
                        <img src="{{asset('contents/website')}}/img/menu-img/dish-1.png" alt="">
                        <div class="dish-info">
                            <h6 class="dish-name">Lorem Ipsum Dolor Sit Amet</h6>
                            <p class="dish-price">$45</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="caviar-single-dish wow fadeInUp" data-wow-delay="1s">
                        <img src="{{asset('contents/website')}}/img/menu-img/dish-2.png" alt="">
                        <div class="dish-info">
                            <h6 class="dish-name">Lorem Ipsum</h6>
                            <p class="dish-price">$45</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="caviar-single-dish wow fadeInUp" data-wow-delay="1.5s">
                        <img src="{{asset('contents/website')}}/img/menu-img/dish-3.png" alt="">
                        <div class="dish-info">
                            <h6 class="dish-name">Lorem Ipsum Dolor Sit Amet</h6>
                            <p class="dish-price">$45</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
    <!-- ***** Special Menu Area End ***** -->

  