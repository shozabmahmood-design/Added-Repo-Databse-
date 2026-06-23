@extends('layout.welcome')
@section('title' , $product->title )
@section('content')

      <!-- Agent Single Grid View -->
  <section class="our-agent-single bgc-f9 pb90 mt70-992 pt30">
    <div class="container">
      <div class="row mb30">
        <div class="col-lg-7 col-xl-8">
          <div class="single_page_heading_content">
            <div class="car_single_content_wrapper">
              <h2 class="title text-center">{{$product->title}}</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row mb30">
        <div class="col-lg-7 col-xl-8">
          <div class="single_product_grid single_page1">
            <div class="sps_content">
              <div class="thumb">
                <div class="single_product">
                  <div class="single_item">
                    <div class="thumb">
                      @if ($product->isFeatured == 0)
                        <div class="tags">FEATURED</div>
                      @endif
                      <a class="popup-img" href="{{env('UPLOAD_URL')}}/{{$product->image}}"><img class="img-whp" src="{{env('UPLOAD_URL')}}/{{$product->image}}" alt="sp5s3.jpg"></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-xl-4">
          <div class="row">
            <div class="col-xxs-6 col-xs-3 col-sm-3 col-md-6">
              <div class="sp5_small_img mb25">
                <div class="thumb">
                  <a class="popup-img" href="{{env('UPLOAD_URL')}}/{{$product->image2 }}"><img class="img-whp" src="{{env('UPLOAD_URL')}}/{{$product->image2 }}" alt="sp5s1.jpg"></a>
                </div>
              </div>
            </div>
            <div class="col-xxs-6 col-xs-3 col-sm-3 col-md-6">
              <div class="sp5_small_img mb25">
                <div class="thumb">
                  <a class="popup-img" href="{{env('UPLOAD_URL')}}/{{$product->image3 }}"><img class="img-whp" src="{{env('UPLOAD_URL')}}/{{$product->image3 }}" alt="sp5s2.jpg"></a>
                </div>
              </div>
            </div>
            <div class="col-xxs-6 col-xs-3 col-sm-3 col-md-6">
              <div class="sp5_small_img mb25">
                <div class="thumb">
                  <a class="popup-img" href="{{env('UPLOAD_URL')}}/{{$product->image4 }}"><img class="img-whp" src="{{env('UPLOAD_URL')}}/{{$product->image4 }}" alt="sp5s3.jpg"></a>
                </div>
              </div>
            </div>
            @foreach ($images->slice(0,4) as $image )
            <div class="col-xxs-6 col-xs-3 col-sm-3 col-md-6">
              <div class="sp5_small_img mb25">
                <div class="thumb">
                  <a class="popup-img" href="{{env('UPLOAD_URL')}}/{{$image->image_name }}"><img class="img-whp" src="{{env('UPLOAD_URL')}}/{{$image->image_name }}" alt="sp5s3.jpg"></a>
                </div>
              </div>
            </div>
            @endforeach
            @foreach($images->slice(5,1) as $image)
            <div class="col-xxs-6 col-xs-3 col-sm-3 col-md-6">
              <div class="sp5_small_img mb25">
                <div class="thumb">
                  <a class="popup-img" href="{{env('UPLOAD_URL')}}/{{$image->image_name }}"><img class="img-whp" src="{{env('UPLOAD_URL')}}/{{$image->image_name }}" alt="sp5s3.jpg">
                  <div class="overlay">
                    <span class="flaticon-photo-camera"></span>
                    <h5 class="title">Show All Photo</h5>
                  </div>
                  </a>
                </div>
              </div>
            </div>
            @endforeach
            <div class="col-xxs-6 col-xs-3 col-sm-3 col-md-6">
              <div class="sp5_small_img">
                <div class="thumb">
                  @foreach ($images as $image )
                  <a class="popup-img" href="{{env('UPLOAD_URL')}}/{{$image->image_name }}"></a>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
              
        <div class="col-lg-8 col-xl-8">
          <div class="row">
            @if ($product->video !=null)
              <div class="col-lg-12">
                <video src="{{env('UPLOAD_URL')}}/{{$product->video }}" style="width: 700px; border-radius:20px;" controls></video>
              </div>
            @endif


            @if ($product->description !=null && $product->description !='null' && $product->description !='Null'  )
              <div class="col-lg-12">
                <div class="listing_single_description mt30">
                  <h4 class="mb30">Description</h4>
                      {!!$product->description!!}
                </div>
              </div>
            @endif
            
          </div>
        </div>
        <div class="col-lg-4 col-xl-4" style="margin-top: 30px;">
          @if ($product->pdf_file)
            <div class="offer_btns">
              <div class="text-end">         
                <a class="btn btn-thm ofr_btn1 btn-block mt0 mb20" href="{{env('UPLOAD_URL')}}/{{$product->pdf_file }}" download style="padding-top:20px "><span class="flaticon-download
                  mr10 fz18 vam"></span>Download product Description</a>
              </div>
            </div>
          @endif
          <div class="listing_single_sidebar">
            <div class="opening_hour_widgets mb30">
              <div class="wrapper">
                <ul class="list-group">
                  <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="me-auto">
                      <div class="day">Make</div>
                    </div>
                    <span class="schedule">{{$product->brand->brandName}}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="me-auto">
                      <div class="day">Type</div>
                    </div>
                    <span class="schedule">{{$product->type->vehicleType}}</span>
                  </li>
                  @if ($product->color != null && $product->color !='null' && $product->color !='Null')
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                      <div class="me-auto">
                        <div class="day">Color</div>
                      </div>
                      <span class="schedule">{{$product->color}}</span>
                    </li>
                  @endif
                  
                  @if ($product->model != null && $product->model !='null' && $product->model !='Null')
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                      <div class="me-auto">
                        <div class="day">Model</div>
                      </div>
                      <span class="schedule">{{$product->model}}</span>
                    </li>
                  @endif
                  
                  @if ($product->drive_type != null && $product->drive_type !='null' && $product->drive_type !='Null')
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                      <div class="me-auto">
                        <div class="day">Drive Type</div>
                      </div>
                      <span class="schedule">{{$product->drive_type}}</span>
                    </li>
                  @endif

                  @if ($product->steering != null && $product->steering !='null' && $product->steering !='Null')
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                      <div class="me-auto">
                        <div class="day">Steering</div>
                      </div>
                      <span class="schedule">{{$product->steering}}</span>
                    </li>
                  @endif

                  @if ($product->transmission != null && $product->transmission !='null' && $product->transmission !='Null')
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                      <div class="me-auto">
                        <div class="day">Transmission</div>
                      </div>
                      <span class="schedule">{{$product->transmission}}</span>
                    </li>
                  @endif
                  
                  @if ($product->man_year != null && $product->man_year !='null' && $product->man_year !='Null')
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                      <div class="me-auto">
                        <div class="day">Year</div>
                      </div>
                      <span class="schedule">{{$product->man_year}}</span>
                    </li>
                  @endif

                  @if ($product->fuel_type != null && $product->fuel_type !='null' && $product->fuel_type !='Null')
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                      <div class="me-auto">
                        <div class="day">Fuel Type</div>
                      </div>
                      <span class="schedule">{{$product->fuel_type}}</span>
                    </li>
                  @endif
                  
                  @if ($product->engine_size != null && $product->engine_size !='null' && $product->engine_size !='Null')
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                      <div class="me-auto">
                        <div class="day">Engine Size</div>
                      </div>
                      <span class="schedule">{{$product->engine_size}}</span>
                    </li>
                  @endif
                  
                  @if ($product->doors != null && $product->doors !='null' && $product->doors !='Null')
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                      <div class="me-auto">
                        <div class="day">Doors</div>
                      </div>
                      <span class="schedule">{{$product->doors}}</span>
                    </li>
                  @endif
                  
                  @if ($product->cylenders != null && $product->cylenders !='null' && $product->cylenders !='Null')
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                      <div class="me-auto">
                        <div class="day">Cylinders</div>
                      </div>
                      <span class="schedule">{{$product->cylenders}}</span>
                    </li>
                  @endif
                </ul>
              </div>
            </div>
          </div>
          <div class="sidebar_seller_contact">
            <h4 class="mb30 text-center">Get Product Quotations</h4>
            <form action="{{url('message2')}}" method="POST">
              @csrf
              <div class="row">
                <div class="col-lg-12">
                  <div class="mb-3">
                    <input class="form-control form_control" type="text" placeholder="First Name" name="firstName">
                    @if($errors->has('firstName'))
                        <p class="text-danger">{{$errors->first('firstName')}}</p>
                    @endif
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="mb-3">
                    <input class="form-control form_control" type="text" placeholder=" Last Name" name="lastName">
                    @if($errors->has('lastName'))
                        <p class="text-danger">{{$errors->first('lastName')}}</p>
                    @endif
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="mb-3">
                    <input class="form-control form_control" type="text" placeholder="Phone" name="phone">
                    @if($errors->has('phone'))
                        <p class="text-danger">{{$errors->first('phone')}}</p>
                    @endif
                    
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="mb-3">
                    <input class="form-control form_control" type="email" placeholder="Email" name="email">
                    @if($errors->has('email'))
                        <p class="text-danger">{{$errors->first('email')}}</p>
                    @endif
                  </div>
                </div>
                <div class="col-lg-12" style="display: none;">
                  <div class="mb-3">
                    <input class="form-control form_control" type="integer" placeholder="product id" name="product_id" value="{{$product->id}}">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="mb-3">
                    <input class="form-control form_control" type="text" placeholder="message" name="msg">
                    @if($errors->has('msg'))
                        <p class="text-danger">{{$errors->first('msg')}}</p>
                    @endif
                  </div>
                  <button type="submit" class="btn btn-block btn-thm mt10 mb20">Send Message</button>
                  {{-- <button type="submit" class="btn btn-block btn-whatsapp mb0"><span class="flaticon-whatsapp mr10 text-white"></span>WhatsApp</button> --}}
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection