<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Services</title>
    @include('website.layouts.inc.script')
</head>
@include('website.layouts.inc.header')

@include('website.layouts.inc.navber')

<!-- Page Top Header Breadcrumb Start-->
<section id="breadcrumb-section" class="breadcrumb-section">
    <div class="breadcrumb-overlay">
        <div class="container">
            <div class="content-breadcrumb text-center text-white">
                <h3 class="mb-2">Services</h3>
                <ul class="breadcrumb-list d-flex justify-content-center gap-2">
                    <li><a href="/">Home</a></li>
                    <li>/</li>
                    <li class="active">Services</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Products Section -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">
            @forelse ($products as $product)
                <div class="col-md-6 col-lg-4">
                    <div class="course-card shadow-sm rounded-4 overflow-hidden bg-white h-100 position-relative">
                        <span class="badge position-absolute top-0 end-0 m-3 bg-primary text-white rounded-pill px-3 py-1 small z-1">
                            {{ $product->product_name }}
                        </span>

                        <img src="{{ asset($product->thumbnail) }}" class="img-fluid w-100" alt="{{ $product->product_name }}" />

                        <div class="p-3 d-flex flex-column h-80">
                            <h5 class="fw-semibold text-truncate-2 mb-2">
                                <a href="{{ route('service_single.page', $product->id) }}" class="course-title-heading">
                                    {{ $product->product_name }}
                                </a>
                            </h5>

                            <p class="text-truncate-3">{{ $product->short_description }}</p>

                            <hr />

                            <div class="course-btns mt-auto d-flex justify-content-between align-items-center">
                                <a href="{{ route('service_single.page', $product->id) }}" class="view-details-btn btn btn-sm btn-primary">
                                    <i class="fas fa-eye me-1"></i> View Service
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <p class="text-muted">No services found in this category.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Bootstrap JS (MOST IMPORTANT) -->
<script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<!-- Custom JS -->
<script src="{{ asset('frontend/js/logoSlider.js') }}"></script>
<script src="{{ asset('frontend/js/testimonials.js') }}"></script>
<script src="{{ asset('frontend/js/script.js') }}"></script>

<!-- jQuery (if needed) -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
@include('website.layouts.inc.footer')