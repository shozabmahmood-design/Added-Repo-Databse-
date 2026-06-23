@extends('layout.welcome')

@section('content')
    <!-- Home Design -->
    <section class="home-one bg-home1" style=''>
        <div class="container">
            <div class="row posr">
                <div class="col-lg-10">
                    <div class="home_content home1_style">
                        <div class="home-text text-center mb30">
                            <h2 class="title" ><span class="aminated-object1" ><img class="objects"
                                        src="images/home/title-bottom-border.svg"  alt=""></span>Find The Best Deals
                            </h2>
                            <p class="para">Find the right price with best deals.</p>
                        </div>
                        <div class="advance_search_panel">
                            <div class="row">
                                <form action="{{ url('/search') }}" method="POST" role="search">
                                    <div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4">
                                        @csrf
                                        <div class="input-group">
                                            <input type="search" name="search" placeholder="Search Products..."
                                                aria-describedby="button-addon2" class="form-control border-0 bg-light" style="margin-left: 10px ">
                                                <div class="input-group-append">
                                                    <button id="button-addon2" type="submit"
                                                        class="btn btn-link text-warning text-center" ><i
                                                            class="fa fa-search"></i></button>
                                                </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Car Category -->
    <section class="car-category mobile_space bgc-f9 z-2 pb100" style="margin-top:0px">
        <div class="container">
            <div class="row">
                @foreach ($types as $type)
                    <div class="col-6 col-sm-6 col-md-4 col-lg col-xl wow fadeInUp" data-wow-duration="1s"
                        data-wow-delay="0.1s">
                        <div class="category_item">
                            <div class="thumb">
                                <img src="{{ env('UPLOAD_URL') }}/{{ $type->image }}" alt="1.png">
                            </div>
                            <div class="details">
                                <p class="title"><a href="{{ url('/types/' . $type->id) }}">{{ $type->vehicleType }}</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Featured Product  -->
    <section class="featured-product">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="main-title text-center">
                        <h2>Featured Listings</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="popular_listing_sliders row">
                        <!-- Tab panes -->
                        <div class="tab-content col-lg-12" id="nav-tabContent">
                            <div class="row">
                                @foreach ($products as $product)
                                    @if ($product->isfeatured == 1)
                                        <div class="col-sm-6 col-xl-3">
                                            <div class="car-listing">
                                                <div class="thumb">
                                                    <img src="{{ env('UPLOAD_URL') }}/{{ $product->image }}" alt="1.jpg"
                                                        style="object-fit:cover; height:200px;">
                                                    <div class="thmb_cntnt2">
                                                        <ul class="mb0">
                                                            <li class="list-inline-item"><a class="text-white"
                                                                    href="#"><span class="flaticon-eye mr3"></span>
                                                                    {{$product->views}}</a></li>
                                                            <!--<li class="list-inline-item"><a class="text-white"-->
                                                            <!--        href="#"><span class="flaticon-play-button mr3"></span>-->
                                                            <!--        3</a>-->
                                                            <!--</li>-->
                                                        </ul>
                                                    </div>
                                                    <!--<div class="thmb_cntnt3">-->
                                                    <!--    <ul class="mb0">-->
                                                    <!--        <li class="list-inline-item"><a href="#"><span-->
                                                    <!--                    class="flaticon-shuffle-arrows"></span></a>-->
                                                    <!--        </li>-->
                                                    <!--        <li class="list-inline-item"><a href="#"><span-->
                                                    <!--                    class="flaticon-heart"></span></a></li>-->
                                                    <!--    </ul>-->
                                                    <!--</div>-->
                                                </div>
                                                <div class="details">
                                                    <div class="wrapper">
                                                        {{-- <h5 class="price">{{ $product->price }}</h5> --}}
                                                        <h4 class="title"><a
                                                                href="{{ url('/singlecar/' . $product->id) }}">{{ $product->title }}</a>
                                                        </h4>
                                                    </div>
                                                    <div class="listing_footer">
                                                        <ul class="mb0">

                                                            <li class="list-inline-item"><a href="#"><span
                                                                        class="flaticon-gas-station me-2"></span>{{ $product->fuel_type }}</a>
                                                            </li>
                                                            <li class="list-inline-item"><a href="#"><span
                                                                        class="flaticon-gear me-2"></span>{{ $product->transmission }}</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Chose us  -->
    <section class="why-chose pt0 pb90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="main-title text-center">
                        <h2>Why Choose Us?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                    <div class="why_chose_us">
                        <div class="icon float-start"><span class="flaticon-price-tag"></span></div>
                        <div class="details">
                            <h5 class="title">Best Price</h5>
                            <p>Our stress-free finance department that can find financial solutions to save you
                                money.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="why_chose_us">
                        <div class="icon float-start style2"><span class="flaticon-car"></span></div>
                        <div class="details">
                            <h5 class="title">Trusted By Thousands</h5>
                            <p>Our stress-free finance department that can find financial solutions to save you
                                money.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="why_chose_us">
                        <div class="icon float-start style3"><span class="flaticon-trust"></span></div>
                        <div class="details">
                            <h5 class="title">Wide Range of Brands</h5>
                            <p>Our stress-free finance department that can find financial solutions to save you
                                money.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Delivery Divider -->
    <section class="deliver-divider bg-img1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="posr">
                        <div class="home1_divider_video_pop">
                            <div class="video_popup_icon">
                                <a class="video_popup_btn popup-img popup-youtube"
                                    href="https://www.youtube.com/watch?v=ZB8DitXow8g">
                                    <span class="flaticon-play"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-xl-5">
                    <div class="home1_divider_content">
                        <h2 class="title">We Make Finding The Right Car Simple</h2>
                        <p class="para">At Cars Exchange LLC what matters to us is making your car search and
                            buying experience as simple as possible, so you can find the right car quickly and get
                            on with making it yours.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Popular Listing -->
    <section class="popular-listing pb80 bg-ptrn1 bgc-heading-color">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="main-title text-center">
                        <h2 class="text-white">Popular Listings</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="home1_popular_listing">
                    <div class="listing_item_4grid_slider dots_none">
                        <?php $count = 0; ?>
                        @foreach ($products as $product)
                            <?php if ($count == 10) {
                                break;
                            } ?>
                            <div class="item">
                                <div class="car-listing">
                                    <div class="thumb">
                                        <img src="{{ env('UPLOAD_URL') }}/{{ $product->image }}" alt="1.jpg"
                                            style="object-fit:cover; height:200px;">
                                        <div class="thmb_cntnt2">
                                            <ul class="mb0">
                                                <li class="list-inline-item"><a class="text-white" href="#"><span
                                                            class="flaticon-eye mr3"></span>
                                                        {{$product->views}}</a></li>
                                                <!--<li class="list-inline-item"><a class="text-white" href="#"><span-->
                                                <!--            class="flaticon-play-button mr3"></span> 3</a>-->
                                                <!--</li>-->
                                            </ul>
                                        </div>
                                        <!--<div class="thmb_cntnt3">-->
                                        <!--    <ul class="mb0">-->
                                        <!--        <li class="list-inline-item"><a href="#"><span-->
                                        <!--                    class="flaticon-shuffle-arrows"></span></a>-->
                                        <!--        </li>-->
                                        <!--        <li class="list-inline-item"><a href="#"><span-->
                                        <!--                    class="flaticon-heart"></span></a></li>-->
                                        <!--    </ul>-->
                                        <!--</div>-->
                                    </div>
                                    <div class="details">
                                        <div class="wrapper">
                                            {{-- <h5 class="price">{{ $product->price }}</h5> --}}
                                            <h4 class="title"><a
                                                    href="{{ url('/singlecar/' . $product->id) }}">{{ $product->title }}</a>
                                            </h4>
                                        </div>
                                        <div class="listing_footer">
                                            <ul class="mb0">

                                                <li class="list-inline-item"><a href="#"><span
                                                            class="flaticon-gas-station me-2"></span>{{ $product->fuel_type }}</a>
                                                </li>
                                                <li class="list-inline-item"><a href="#"><span
                                                            class="flaticon-gear me-2"></span>{{ $product->transmission }}</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php $count++; ?>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Funfact -->
    <section class="our-funfact pt50 pb30">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                    <div class="funfact_one text-center">
                        <div class="details">
                            <div class="timer">{{$totalProducts}}</div>
                            <p class="ff_title">CARS FOR SALE</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="funfact_one text-center">
                        <div class="details">
                            <div class="timer">6500</div>
                            <p class="ff_title">DEALER REVIEWS</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="funfact_one text-center">
                        <div class="details">
                            <div class="timer">{{$totalVisitor}}</div>
                            <p class="ff_title">VISITORS PER DAY</p>
                        </div>
                    </div>
                </div>
                <!--<div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">-->
                <!--    <div class="funfact_one text-center">-->
                <!--        <div class="details">-->
                <!--            <div class="timer">5250</div>-->
                <!--            <p class="ff_title">VERIFIED DEALERS</p>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
        </div>
    </section>

    <!-- Testimonials  -->
    {{-- <section class="our-testimonials-home1 pt120 pb120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="main-title text-center">
                        <h2>Testimonials</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial_slider_home1">
                        <div class="item">
                            <div class="testimonial_box">
                                <div class="thumb">
                                    <img class="rounded-circle" src="images/testimonial/1.png" alt="1.png">
                                    <h4 class="title">Marvin McKinney <br><small>Marketing
                                            Coordinator</small></h4>
                                </div>
                                <div class="details">
                                    <div class="icon"><span class="fa fa-quote-left"></span></div>
                                    <p>Aliquam lorem ante, dapibus in, viverra nisi quis, feugiat a, tellus.
                                        Phasellus viverra deo nulla ut metus varius qui laoreet. Quisque sum rutrum.
                                        Aenean imperdiet. Etiam ultricies cum sociis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial_box">
                                <div class="thumb">
                                    <img class="rounded-circle" src="images/testimonial/2.png" alt="2.png">
                                    <h4 class="title">Brooklyn Simmons <br><small>President of
                                            Sales</small></h4>
                                </div>
                                <div class="details">
                                    <div class="icon"><span class="fa fa-quote-left"></span></div>
                                    <p>Aliquam lorem ante, dapibus in, viverra nisi quis, feugiat a, tellus.
                                        Phasellus viverra deo nulla ut metus varius qui laoreet. Quisque sum rutrum.
                                        Aenean imperdiet. Etiam ultricies cum sociis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial_box">
                                <div class="thumb">
                                    <img class="rounded-circle" src="images/testimonial/1.png" alt="1.png">
                                    <h4 class="title">Marvin McKinney <br><small>Marketing
                                            Coordinator</small></h4>
                                </div>
                                <div class="details">
                                    <div class="icon"><span class="fa fa-quote-left"></span></div>
                                    <p>Aliquam lorem ante, dapibus in, viverra nisi quis, feugiat a, tellus.
                                        Phasellus viverra deo nulla ut metus varius qui laoreet. Quisque sum rutrum.
                                        Aenean imperdiet. Etiam ultricies cum sociis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial_box">
                                <div class="thumb">
                                    <img class="rounded-circle" src="images/testimonial/2.png" alt="2.png">
                                    <h4 class="title">Brooklyn Simmons <br><small>President of
                                            Sales</small></h4>
                                </div>
                                <div class="details">
                                    <div class="icon"><span class="fa fa-quote-left"></span></div>
                                    <p>Aliquam lorem ante, dapibus in, viverra nisi quis, feugiat a, tellus.
                                        Phasellus viverra deo nulla ut metus varius qui laoreet. Quisque sum rutrum.
                                        Aenean imperdiet. Etiam ultricies cum sociis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial_box">
                                <div class="thumb">
                                    <img class="rounded-circle" src="images/testimonial/1.png" alt="1.png">
                                    <h4 class="title">Marvin McKinney <br><small>Marketing
                                            Coordinator</small></h4>
                                </div>
                                <div class="details">
                                    <div class="icon"><span class="fa fa-quote-left"></span></div>
                                    <p>Aliquam lorem ante, dapibus in, viverra nisi quis, feugiat a, tellus.
                                        Phasellus viverra deo nulla ut metus varius qui laoreet. Quisque sum rutrum.
                                        Aenean imperdiet. Etiam ultricies cum sociis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial_box">
                                <div class="thumb">
                                    <img class="rounded-circle" src="images/testimonial/2.png" alt="2.png">
                                    <h4 class="title">Brooklyn Simmons <br><small>President of
                                            Sales</small></h4>
                                </div>
                                <div class="details">
                                    <div class="icon"><span class="fa fa-quote-left"></span></div>
                                    <p>Aliquam lorem ante, dapibus in, viverra nisi quis, feugiat a, tellus.
                                        Phasellus viverra deo nulla ut metus varius qui laoreet. Quisque sum rutrum.
                                        Aenean imperdiet. Etiam ultricies cum sociis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Our Blog -->
    <section class="our-blog pb90">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="main-title text-center">
                        <h2>Recent Articles</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php $count = 0; ?>
                @foreach ($blogs as $blog)
                    <?php if ($count == 3) {
                        break;
                    } ?>
                    <div class="col-md-6 col-xl-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="for_blog">
                            <div class="thumb">
                                <div class="tag">BLOG</div>
                                <img class="img-whp" src="{{ env('UPLOAD_URL') }}/{{ $blog->image }} "
                                    alt="1.jpg" style="object-fit:cover; height:200px">
                            </div>
                            <div class="details">
                                <div class="tc_content">
                                    <div class="bp_meta mb20">
                                        <ul>
                                            <li class="list-inline-item"><a
                                                    href="{{ url('/blogs/singleblog/' . $blog->id) }}"><span
                                                        class="flaticon-list"></span>{{ $blog->blog_category->title }}</a>
                                            </li>
                                            <li class="list-inline-item"><a
                                                    href="{{ url('/blogs/singleblog/' . $blog->id) }}"><span
                                                        class="flaticon-calendar-1"></span>{{ date('j F, Y', strtotime($blog->created_at)) }}</a>
                                            </li>
                                            <li class="list-inline-item"><a
                                                    href="{{ url('/blogs/singleblog/' . $blog->id) }}"><span
                                                        class="flaticon-eye"></span>{{ $blog->views }}</a></li>

                                        </ul>
                                    </div>
                                    <h4 class="title mb10"><a
                                            href="{{ url('/blogs/singleblog/' . $blog->id) }}">{{ $blog->title }}</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $count++; ?>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Our Partners -->
    <section class="our-partner pt0 pb100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="main-title text-center">
                        <h2>Popular Makes</h2>
                    </div>
                </div>
            </div>
            <div class="partner_divider">
                <div class="row">
                    <div class="team_slider">
                        <div class="listing_item_5grid_slider dots_none">
                          @foreach ($brands as $brand )
                            <div class="fadeInUp" data-wow-duration="1s"
                                data-wow-delay="0.1s">
                                <div class="partner_item " style="border: none">
                                    <img src="{{env('UPLOAD_URL')}}/{{$brand->image}}" alt="1.png" style="height: 90px; width:90px; object-fit:contain " class="mx-auto">
                                    <br><br>
                                    <span style="text-align: center">{{$brand->brandName}}</span>
                                </div>
                            </div>
                          @endforeach
                          
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>
@endsection
