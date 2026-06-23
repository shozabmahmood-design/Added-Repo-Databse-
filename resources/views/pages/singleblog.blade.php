@extends('layout.welcome')
@section('content')
    <section class="blog_post_container bt1 pt50 pb0 mt70-992">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 m-auto">
                    <div class="for_blog blog_single_post">
                        <div class="details">
                                <div class="wrapper">
                                    <h2 class="title">{{ $blog->title }}</h2>
                                    <div class="bp_meta">
                                        <ul class="mb0">
                                            <li class="list-inline-item"><a href="page-blog-single.html"><span
                                                        class="flaticon-list"></span>{{ $blog->blog_category->title }}</a>
                                            </li>
                                            <li class="list-inline-item"><a href="page-blog-single.html"><span
                                                        class="flaticon-calendar-1"></span>{{ date('j F, Y', strtotime($blog->created_at)) }}</a>
                                            </li>
                                            <li class="list-inline-item"><a href="page-blog-single.html"><span
                                                        class="flaticon-eye"></span>{{ $blog->views }}</a></li>
                                        </ul>
                                    </div>
                                </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p0">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-single-post-thumb">
                        <img class="img-whp" src="{{env('UPLOAD_URL')}}/{{$blog->image }}"
                            alt="bsp1.jpg">
                    </div>
                </div>
            </div>
        </div>


    </section>
    <!-- Blog Single Post -->
    <section class="blog_post_container pt50 pb70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="main_blog_post_content">
                        <div class="mbp_thumb_post">
                            <h4>Description</h4>
                            <div>
                              {!!$blog->description!!}
                            </div>
                            <hr class="mb40">
                            <div class="row">
                                <div class="col-lg-9">
                                    <ul class="blog_post_share mb0">
                                        <li class="list-inline-item db-sm mr0-sm">Share this post</li>
                                        <li class="list-inline-item db-sm mr0-sm"><a href="#"><span
                                                    class="fab fa-facebook-f"></span>Facebook</a></li>
                                        <li class="list-inline-item db-sm mr0-sm"><a href="#"><span
                                                    class="fab fa-twitter"></span>Twitter</a></li>
                                        <li class="list-inline-item db-sm mr0-sm"><a href="#"><span
                                                    class="fab fa-instagram"></span>Google+</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 p0">
                                    <div class="bsp_tags text-center text-md-start mt10 mt20-md mb30-767">
                                        <ul class="mb0">
                                            @foreach (explode(',', $blog->tags) as $tag)
                                              <li class="list-inline-item"><a href="#">{{ $tag }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
