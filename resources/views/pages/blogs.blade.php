@extends('layout.welcome')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- Inner Page Breadcrumb -->
    <section class="inner_page_breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb_content">
                        <h2 class="breadcrumb_title text-center">Latest News</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Blog Post Content -->
    <section class="blog_post_container inner_page_section_spacing">
        <div class="container">
            <div class="row">
                @if ($errors->any())
                <div class="alert alert-danger" id="danger-alert" role="alert">
                    No Result Found
                  </div>
                @endif
                <div class="col-lg-8 col-xl-9">
                    <div class="main_blog_post_content">
                        @foreach ($blogs as $blog)
                            <div class="for_blog list-type">
                                <div class="thumb">
                                    <div class="tag">BLOG</div>
                                    <img class="img-whp" src="{{env('UPLOAD_URL')}}/{{$blog->image }}"
                                        alt="1.jpg" style="object-fit: fill; height:200px">
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
                                        <h4 class="title mb10">{{ $blog->title }}</h4>
                                        <p class="mb15">
                                            {!! Str::words($blog->description, 20, $end = '...') !!}</p>
                                        <a href="{{ url('/blogs/singleblog/' . $blog->id) }}" class="more_listing">Read More
                                            <span class="icon"><span class="fas fa-plus"></span></span></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mbp_pagination mt30">
                                        {{ $blogs->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3">
                    <div class="sidebar_search_widget">
                        <h4 class="title">Search</h4>
                        <div class="blog_search_widget">
                            <div class="input-group">
                                <form action="{{ url('/blogs/search') }}" method="GET">
                                    <input type="text" class="form-control" name="blog_title" placeholder="Enter Keyword"
                                    aria-label="Recipient's username" >
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="terms_condition_widget">
                        <h4 class="title mb20">Blog Categories</h4>
                        @foreach ($cats as $cat)
                            <div class="widget_list">
                                <ul class="list_details">
                                    <li><a href="{{ url('/blogs/filter/' . $cat->id) }}">{{ $cat->title }}</a></li>
                                </ul>
                            </div>
                        @endforeach
                    </div>
                    <div class="sidebar_feature_listing">
                        <h4 class="title">Recent Posts</h4>
                        @foreach ($blogs as $blog)
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <img class="align-self-start mr-3"
                                        src="{{env('UPLOAD_URL')}}/{{$blog->image }}" alt="1.jpg">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="post_title"><a
                                            href="{{ url('/blogs/singleblog/' . $blog->id) }}">{!! Str::words($blog->title, 6, $end = '...') !!}</a></h5>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="blog_tag_widget">
                        <h4 class="title">Popular Tags</h4>
                        <ul class="tag_list">
                            @foreach ($blogs as $blog)
                                <?php $count = 0; ?>
                                @foreach (explode(',', $blog->tags) as $tag)
                                  <?php if($count == 6) break; ?>
                                      <li class="list-inline-item"><a href="{{ url('/blogs/tags/' . $tag) }}">{{ $tag }}</a></li>
                                  <?php $count++; ?>
                                @endforeach
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        setTimeout(function() {
          $('#danger-alert').fadeOut('fast');
        }, 3000);
  
    </script>
@endsection
