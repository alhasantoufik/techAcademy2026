<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $pageTitle }}</title>
    @include('website.layouts.inc.script')
</head>
@include('website.layouts.inc.header')

@include('website.layouts.inc.navber')

<!-- Page Top Header Breadcrumb Start-->
<section id="breadcrumb-section" class="breadcrumb-section">
    <div class="breadcrumb-overlay">
        <div class="container">
            <div class="content-breadcrumb text-center text-white">
                <h3 class="mb-2">About Us</h3>
                <ul class="breadcrumb-list d-flex justify-content-center gap-2">
                    <li><a href="/">Home</a></li>
                    <li>/</li>
                    <li class="active">About Us</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Page Top Header Breadcrumb End-->
<section id="our-story">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-md-6">
                <div class="left-first-our-story">
                    <h6 class="sub-about-heading">Our Mission</h6>
                    <h2 class="about-our-story-heading">
                        {!! $returnAboutUs->description !!}

                    </h2>
                    <p>
                        {{ $returnAboutUs->mission }}
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="right-first-our-story">
                    <img
                        src="{{ asset($returnAboutUs->missionImage) }}"
                        class="img-fluid our-story-img"
                        alt="" />
                </div>
            </div>
        </div>
        <div class="row d-flex align-items-center my-5">
            <div class="col-md-6">
                <div class="left-second-our-story">
                    <img
                        src="{{ asset($returnAboutUs->vissionImage) }}"
                        class="img-fluid our-story-img"
                        alt="" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="right-second-our-story">
                    <h6 class="sub-about-heading">Our Vission</h6>
                    <h2 class="about-our-story-heading">
                        {!! $returnAboutUs->description !!}

                    </h2>
                    <p>
                        {{ $returnAboutUs->vission }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- our story section end -->
    <!-- Blog section start -->
  @include('website.layouts.partials.blog-section')
  <!-- Blog section end -->

  <!-- Subscrib section start -->
  @include('website.layouts.partials.subscribe-section')
  <!-- Subscrib section end -->

   <!-- Bootstrap JS & Custom JS -->
  <script src="frontend/js/bootstrap.bundle.min.js"></script>
  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script src="frontend/js/logoSlider.js"></script>
  <script src="frontend/js/testimonials.js"></script>
  <script src="frontend/js/script.js"></script>


@include('website.layouts.inc.footer')