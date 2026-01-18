  <section class="featured-course-section" id="featured-course-section">
    <div class="container">
      <div class="section-title">
        <h6>Featured Services</h6>
        <h2>Pick a Service to Get Started</h2>
      </div>

      <div class="row g-4">
        <!-- Card 1 -->
@foreach ($featured_products as $products)


        <div class="col-md-6 col-lg-4">
          <div class="course-card shadow-sm rounded-4 overflow-hidden bg-white h-100 position-relative">
            <span
              class="badge position-absolute top-0 end-0 m-3 bg-primary text-white rounded-pill px-3 py-1 small z-1">{{ $products->product_name }}</span>
            <img src="{{ asset(path: $products->thumbnail) }}" class="img-fluid w-100" alt="Course 1" />
            <div class="p-3 d-flex flex-column h-80">
              <h5 class="fw-semibold text-truncate-2 mb-2">
                <a href="courseDetails.html" class="course-title-heading">{{ $products->product_name }}</a>
              </h5>
              {{-- <p class="text-muted small mb-1">By John Doe</p> --}}
              {{-- <div class="course-icons-details d-flex justify-content-between text-muted small mb-2">
                <span><i class="fas fa-clock me-1"></i>12h</span>
                <span><i class="fas fa-user-graduate me-1"></i>1.2k
                  students</span>
                <span><i class="fas fa-star text-warning me-1"></i>4.8</span>
              </div> --}}
              <p>{{ $products->short_description }}</p>
              <hr />
              <div class="course-btns mt-auto d-flex justify-content-between align-items-center">
                <a href="{{ route('service_single.page', $products->id ) }}" class="view-details-btn btn-sm"><i class="fas fa-eye me-1"></i> View
                  Service</a>
                {{-- <a href="enroll.html" class="btn-enroll btn-sm"><i class="fas fa-user-plus me-1"></i> Enroll</a> --}}
              </div>
            </div>
          </div>
        </div>
@endforeach

        <div class="more-course-btn text-center">
          <a href="{{ route('service.page') }}" class="btn btn-enroll">Browse More Course <i class="fa-solid fa-arrow-right-long"></i>
          </a>
        </div>
      </div>
    </div>
  </section>
