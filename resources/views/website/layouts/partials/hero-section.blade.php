<section class="hero-section">
    <!-- Gradient Overlay -->
    <div class="hero-gradient">
        <img
        src="{{ asset($banner->image) }}"
        alt="Hero Image"
        class="hero-bg-img"
    />
    </div>

    <!-- Content -->
    <div class="hero-content container">
      <div class="row align-items-center">
        <!-- Left: Hero Text -->
        <div class="col-lg-6">
          <div class="hero-text pe-lg-5">
            <p class="hero-sub-short-text fw-semibold">
              {{$banner->sub_title}}
            </p>
            <h1 class="main-title">
              {{ $banner->title }}
              {{-- <span class="hightlight-text"> your Career</span> --}}
            </h1>
            <p class="mt-3">
              {{ $banner->description }}
            </p>

            <!-- Search Bar -->
            <form class="d-flex mt-4" role="search">
              <input class="form-control me-2 shadow-sm" type="search" placeholder="Search courses..."
                aria-label="Search" />
              <button class="btn btn-enroll px-4" type="submit">
                Search
              </button>
            </form>
          </div>
        </div>

        <!-- Right Side: Animated Info Box -->
        <div class="col-lg-6 text-center position-relative">
          <div class="animated-stars position-absolute top-0 start-0 w-100 h-100">
            <i class="fa-solid fa-star star-icon star-blue"></i>
            <i class="fa-solid fa-star star-icon star-red"></i>
            <i class="fa-solid fa-star star-icon star-yellow"></i>
            <i class="fa-solid fa-star star-icon star-purple"></i>
          </div>

          {{-- <div class="info-box bg-white p-4 rounded-4 border border-primary d-inline-block shadow-sm position-relative"
            style="z-index: 2">
            <div class="mb-2">
              <div class="bg-primary text-white d-inline-flex align-items-center justify-content-center rounded-circle"
                style="width: 40px; height: 40px">
                ✓
              </div>
            </div>
            <h5 class="text-primary mb-1 fw-semibold">Accredited Courses</h5>
            <p class="text-muted mb-0 small">
              One subscription – All content.
            </p>
          </div> --}}
        </div>
      </div>
    </div>
  </section>
