<section id="blog-section" class="blog-section">
  <div class="container">
    <div class="section-title">
      <h6>Our Latest Blog</h6>
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
                <a href="blogDetails.html">{{ $blog->post_title }}</a>
              </h3>
              <div class="blog-read-more">
                <a href="blogDetails.html">Continue Reading....</a>
              </div>
            </div>
          </div>
        </div>
      @endforeach

    </div>
  </div>
</section>