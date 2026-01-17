<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blogs</title>
    @include('website.layouts.inc.script')
</head>
@include('website.layouts.inc.header')

@include('website.layouts.inc.navber')

<!-- Page Top Header Breadcrumb Start-->
<section id="breadcrumb-section" class="breadcrumb-section">
    <div class="breadcrumb-overlay">
        <div class="container">
            <div class="content-breadcrumb text-center text-white">
                <h3 class="mb-2">Blogs</h3>
                <ul class="breadcrumb-list d-flex justify-content-center gap-2">
                    <li><a href="/">Home</a></li>
                    <li>/</li>
                    <li class="active">Blogs</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="blog-section" class="blog-section">
  <div class="container">
    <div class="section-title">
      <h2>Find Our Latest Blogs</h2>
    </div>
    <!-- blog row -->
    <div class="row">
      @foreach ($blogs as $blog)

        <div class="col-lg-4 col-md-6">
          <div class="single-blog">
            <div class="blog-img">
              <img src="{{ asset($blog->image) }}" class="img-fluid" alt="Digital Marketing Course" />
            </div>
            <div class="blog-content">
              <div class="author">
                <span><i class="fa-solid fa-user"></i>{{ $blog->user_name }}</span>
                <span><i class="fa-solid fa-calendar-days"></i>{{ $blog->created_at }}</span>
              </div>
              <h3 class="blog-title">
                <a href="{{ route('blog_single.page', $blog->post_slug) }}">{{ $blog->post_title }}</a>
              </h3>
              <div class="blog-read-more">
                <a href="{{ route('blog_single.page', $blog->post_slug) }}">Continue Reading....</a>
              </div>
            </div>
          </div>
        </div>
      @endforeach

    </div>
  </div>
</section>







@include('website.layouts.inc.footer')