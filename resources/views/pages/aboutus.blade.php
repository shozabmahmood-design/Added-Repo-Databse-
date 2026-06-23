@extends('layout.welcome')
@section('content')
	<!-- Inner Page Breadcrumb -->
	<section class="inner_page_breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="breadcrumb_content">
						<h2 class="breadcrumb_title text-center">About Us</h2>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- About Text Content -->
	<section class="about-section pb130">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="about_thumb mb30-md">
						<img class="thumb1" src="{{ asset('images/about/1.jpg') }}" alt="1.jpg">
            <img class="img-fluid thumb2" src="{{ asset('images/about/2.jpg') }}" alt="2.jpg">
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="about_content mt70" style="margin-top: 70x;">
            <h2 class="title">Welcome To The Cars Exchange LLC</h2>
            <p class="mb30">CAR EX LLC is a specialist in regional and international automotive reexport and supply chain solutions.</p>
            <p class="mb20">Established 1997 in Dubai CAR EC LLC has be working to provide international
              market mobility to where top automotive brands were not adequately represented,
              or not available at all. Working with a network of auto partners across the globe while
              leveraging the UAE region’s global trade and export hub status, CAR EX LLC has
              flourished to become a leader in car re-export solutions on a global scale.
            </p>
            <p class="mb20">Our automotive products include a wide range of passenger, commercial & heavy
              vehicles, genuine spare parts & accessories, equipment, and others. We are the
              authorised by TTC to Sell and import the Toyota Products to African territories.
            </p>
            <p>
              In addition to our car export, spare parts and accessories expertise, CAR EX LLC also
              provides upgrade fitment, maintenance and mechanical modifications at our partner
              dedicated service centres, with a team of professionals who are well versed in all the
              products and services we offer.
              With over three decades of experience, we have established both customer and
              industry relationships, with our professional team and network of partners across
              the supply chain. This has allowed us to offer our customers a ‘one-stop’ re-export
              experience, from purchase and fitments, to financial, logistics, cargo and clearing
              services. We are also the authorised by TTC to Sell and import the Toyota Products to
              African territories.
            </p>
            
            {{-- <a class="btn btn-thm about-btn" href="#">Learn More</a> --}}
					</div>
				</div>
			</div>
		</div>
	</section>
  
  <!-- Why Chose Us -->
  <section class="why-chose pb90 pt0-md">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="main-title text-center">
            <h2>Why Choose Us?</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-lg-4">
          <div class="why_chose_us">
            <div class="icon float-start"><span class="flaticon-price-tag"></span></div>
            <div class="details">
              <h5 class="title">Best Price</h5>
              <p>Our stress-free finance department that can find financial solutions to save you money.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="why_chose_us">
            <div class="icon float-start style2"><span class="flaticon-car"></span></div>
            <div class="details">
              <h5 class="title">Trusted By Thousands</h5>
              <p>Our stress-free finance department that can find financial solutions to save you money.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="why_chose_us">
            <div class="icon float-start style3"><span class="flaticon-trust"></span></div>
            <div class="details">
              <h5 class="title">Wide Range of Brands</h5>
              <p>Our stress-free finance department that can find financial solutions to save you money.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Our Team -->
  <!--<section class="our-team pb90 pt0">-->
  <!--  <div class="container">-->
  <!--    <div class="row">-->
  <!--      <div class="col-lg-6 offset-lg-3">-->
  <!--        <div class="main-title text-center">-->
  <!--          <h2>Our Team</h2>-->
  <!--        </div>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--    <div class="row">-->
  <!--      <div class="col-lg-12">-->
  <!--        <div class="team_slider">-->
  <!--          <div class="listing_item_4grid_slider dots_none">-->
  <!--            <div class="item">-->
  <!--              <div class="team_member">-->
  <!--                <div class="thumb"> <img class="img-fluid" src="images/team/user_avatar.png" alt="1.jpg"></div>-->
  <!--                <div class="details">-->
  <!--                  <h4 class="title">Dianne Russell</h4>-->
  <!--                  <p class="para">Dog Trainer</p>-->
  <!--                </div>-->
  <!--              </div>-->
  <!--            </div>-->
  <!--            <div class="item">-->
  <!--              <div class="team_member">-->
  <!--                <div class="thumb"> <img class="img-fluid" src="images/team/user_avatar.png" alt="2.jpg"></div>-->
  <!--                <div class="details">-->
  <!--                  <h4 class="title">Devon Lane</h4>-->
  <!--                  <p class="para">Nursing Assistant</p>-->
  <!--                </div>-->
  <!--              </div>-->
  <!--            </div>-->
  <!--            <div class="item">-->
  <!--              <div class="team_member">-->
  <!--                <div class="thumb"> <img class="img-fluid" src="images/team/user_avatar.png" alt="3.jpg"></div>-->
  <!--                <div class="details">-->
  <!--                  <h4 class="title">Ralph Edwards</h4>-->
  <!--                  <p class="para">President of Sales</p>-->
  <!--                </div>-->
  <!--              </div>-->
  <!--            </div>-->
  <!--            <div class="item">-->
  <!--              <div class="team_member">-->
  <!--                <div class="thumb"> <img class="img-fluid" src="images/team/user_avatar.png" alt="4.jpg"></div>-->
  <!--                <div class="details">-->
  <!--                  <h4 class="title">Esther Howard</h4>-->
  <!--                  <p class="para">Marketing Coordinator</p>-->
  <!--                </div>-->
  <!--              </div>-->
  <!--            </div>-->
  <!--          </div>-->
  <!--        </div>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--  </div>-->
  <!--</section>-->

  <!-- Testimonials  -->
  <section class="our-testimonials-home1 pt120 pb120">
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
                  <img class="rounded-circle" src="{{ asset('images/testimonial/user_avatar.png') }}" alt="1.png">
                  <h4 class="title">Marvin McKinney <br><small>Marketing Coordinator</small></h4>
                </div>
                <div class="details">
                  <div class="icon"><span class="fa fa-quote-left"></span></div>
                  <p>Aliquam lorem ante, dapibus in, viverra nisi quis, feugiat a, tellus. Phasellus viverra deo nulla ut metus varius qui laoreet. Quisque sum rutrum. Aenean imperdiet. Etiam ultricies cum sociis.</p>
                </div>
              </div>
            </div> 
            <div class="item">
              <div class="testimonial_box">
                <div class="thumb">
                  <img class="rounded-circle" src="{{ asset('images/testimonial/user_avatar.png') }}" alt="2.png">
                  <h4 class="title">Brooklyn Simmons <br><small>President of Sales</small></h4>
                </div>
                <div class="details">
                  <div class="icon"><span class="fa fa-quote-left"></span></div>
                  <p>Aliquam lorem ante, dapibus in, viverra nisi quis, feugiat a, tellus. Phasellus viverra deo nulla ut metus varius qui laoreet. Quisque sum rutrum. Aenean imperdiet. Etiam ultricies cum sociis.</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial_box">
                <div class="thumb">
                  <img class="rounded-circle" src="{{ asset('images/testimonial/user_avatar.png') }}" alt="1.png">
                  <h4 class="title">Marvin McKinney <br><small>Marketing Coordinator</small></h4>
                </div>
                <div class="details">
                  <div class="icon"><span class="fa fa-quote-left"></span></div>
                  <p>Aliquam lorem ante, dapibus in, viverra nisi quis, feugiat a, tellus. Phasellus viverra deo nulla ut metus varius qui laoreet. Quisque sum rutrum. Aenean imperdiet. Etiam ultricies cum sociis.</p>
                </div>
              </div>
            </div> 
            <div class="item">
              <div class="testimonial_box">
                <div class="thumb">
                  <img class="rounded-circle" src="{{ asset('images/testimonial/user_avatar.png') }}" alt="2.png">
                  <h4 class="title">Brooklyn Simmons <br><small>President of Sales</small></h4>
                </div>
                <div class="details">
                  <div class="icon"><span class="fa fa-quote-left"></span></div>
                  <p>Aliquam lorem ante, dapibus in, viverra nisi quis, feugiat a, tellus. Phasellus viverra deo nulla ut metus varius qui laoreet. Quisque sum rutrum. Aenean imperdiet. Etiam ultricies cum sociis.</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial_box">
                <div class="thumb">
                  <img class="rounded-circle" src="{{ asset('images/testimonial/user_avatar.png') }}" alt="1.png">
                  <h4 class="title">Marvin McKinney <br><small>Marketing Coordinator</small></h4>
                </div>
                <div class="details">
                  <div class="icon"><span class="fa fa-quote-left"></span></div>
                  <p>Aliquam lorem ante, dapibus in, viverra nisi quis, feugiat a, tellus. Phasellus viverra deo nulla ut metus varius qui laoreet. Quisque sum rutrum. Aenean imperdiet. Etiam ultricies cum sociis.</p>
                </div>
              </div>
            </div> 
            <div class="item">
              <div class="testimonial_box">
                <div class="thumb">
                  <img class="rounded-circle" src="{{ asset('images/testimonial/user_avatar.png') }}" alt="2.png">
                  <h4 class="title">Brooklyn Simmons <br><small>President of Sales</small></h4>
                </div>
                <div class="details">
                  <div class="icon"><span class="fa fa-quote-left"></span></div>
                  <p>Aliquam lorem ante, dapibus in, viverra nisi quis, feugiat a, tellus. Phasellus viverra deo nulla ut metus varius qui laoreet. Quisque sum rutrum. Aenean imperdiet. Etiam ultricies cum sociis.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
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
        <div class="partner_divider" style="margin-right:40px">
            <div class="row" >
              <div class="team_slider">
                <div class="listing_item_5grid_slider dots_none">
                  @foreach ($brands as $brand )
                    {{-- <div class="col-6 col-xs-6 col-sm-4 col-xl-2 wow fadeInUp" data-wow-duration="1s"
                        data-wow-delay="0.1s"> --}}
                        <div class="partner_item "  style="border: none">
                            <img src="{{env('UPLOAD_URL')}}/{{$brand->image}}" alt="1.png" style="height: 70px; width:70px; object-fit:fill " class="mx-auto">
                            <br><br>
                            <span style="text-align: center">{{$brand->brandName}}</span>
                        </div>
                    {{-- </div> --}}
                  @endforeach
                  
                </div>
              </div>
            </div>
        </div>
    </div>
</section>
@endsection