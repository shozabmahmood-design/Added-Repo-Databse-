@extends('layout.welcome')
@section('content')

    	<!-- Inner Page Breadcrumb -->
	<section class="inner_page_breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="breadcrumb_content">
						<h2 class="breadcrumb_title text-center">Contact Us</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
  <!-- Our Contact -->
  <section class="our-contact inner_page_section_spacing bgc-f9">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="contact_icon_box mb50">
            <div class="details">
              <h3 class="title">Contact Details</h3>
              <p>United Arab Emirate —<br>77 MUNICIPALITY CAR COMPLEX RAS AL KHOR AWIR,<br>DUBAI,</p>
              <h4 class="subtitle">+971 4 3339433</h4>
              <p>carex@eim.ae</p>
              <div class="footer_social_widget">
                <ul class="mb0">
                  <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="form_grid">
            <div class="wrapper">
              <h3 class="title mb20">Contact Form</h3>
              @if(session('status'))
                <div class="alert alert-success" id="success-alert" role="alert">
                  {{ session('status') }}
                </div>
              @endif
              <form class="contact_form" name="contact_form" action="{{url('message')}}" method="post" >
                @csrf
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label">First Name</label>
                      <input class="form-control" type="text" placeholder="John" name="firstName">
                      @if($errors->has('firstName'))
                        <p class="text-danger">{{$errors->first('firstName')}}</p>
                      @endif
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label">Last Name</label>
                      <input class="form-control" type="text"  name="lastName" placeholder="Wick">
                      @if($errors->has('lastName'))
                        <p class="text-danger">{{$errors->first('lastName')}}</p>
                      @endif
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label">Email</label>
                      <input class="form-control email" type="email"  name="email" placeholder="creativelayers088@gmail.com">
                      @if($errors->has('email'))
                        <p class="text-danger">{{$errors->first('email')}}</p>
                      @endif
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label">Phone</label>
                      <input class="form-control" type="text"  name="phone" placeholder="+59 9495 393 939 3">
                      @if($errors->has('phone'))
                        <p class="text-danger">{{$errors->first('phone')}}</p>
                      @endif
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label class="form-label">Message</label>
                      <input class="form-control" name="msg" placeholder="Enter your Message">
                      @if($errors->has('msg'))
                        <p class="text-danger">{{$errors->first('msg')}}</p>
                      @endif
                    </div>
                  </div>
                  <div class="form-group mb0">
                      <button type="submit" class="btn btn-thm">Get In Touch</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
      setTimeout(function() {
        $('#success-alert').fadeOut('fast');
      }, 5000);
  </script>
@endsection