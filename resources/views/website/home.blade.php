<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{ $website_setting->website_title }}</title>
  @include('website.layouts.inc.script')
</head>

<body>

  {{-- this is top header part here --}}
  @include('website.layouts.inc.header')

  {{-- this is header/navbar part here --}}
  @include('website.layouts.inc.navber')

  <!-- HERO SECTION -->
  @include('website.layouts.partials.hero-section')

  <!-- Course Categories Start -->
  @include('website.layouts.partials.course-category')
  <!-- Course Categories End -->

  <!-- Featured Section Start -->
  @include('website.layouts.partials.featured-section')
  <!-- Featured Section End -->

  <!-- Featured Course Section Start -->
  @include('website.layouts.partials.course-section')
  <!-- Featured Course Section End -->

  <!-- Membership section start -->
  @include('website.layouts.partials.membership-section')
  <!-- Membership section end -->

  <!-- counter section start -->
  @include('website.layouts.partials.counter-section')
  <!-- counter section end -->

  <!-- Testimonials section start -->
  @include('website.layouts.partials.testimonial-section')
  <!-- Testimonials section end -->


  <!-- Blog section start -->
  @include('website.layouts.partials.blog-section')
  <!-- Blog section end -->

  <!-- Subscrib section start -->
  @include('website.layouts.partials.subscribe-section')
  <!-- Subscrib section end -->
  <!-- Footer -->
  @include('website.layouts.inc.footer')
  <!-- Bootstrap JS & Custom JS -->
  <script src="frontend/js/bootstrap.bundle.min.js"></script>
  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script src="frontend/js/logoSlider.js"></script>
  <script src="frontend/js/testimonials.js"></script>
  <script src="frontend/js/script.js"></script>
</body>

</html>