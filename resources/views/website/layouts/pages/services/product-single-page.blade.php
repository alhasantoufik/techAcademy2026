<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Service Detailes</title>
    @include('website.layouts.inc.script')
</head>
@include('website.layouts.inc.header')

@include('website.layouts.inc.navber')

<!-- Page Top Header Breadcrumb Start-->
<section id="breadcrumb-section" class="breadcrumb-section">
    <div class="breadcrumb-overlay">
        <div class="container">
            <div class="content-breadcrumb text-center text-white">
                <h3 class="mb-2">Service Detailes</h3>
                <ul class="breadcrumb-list d-flex justify-content-center gap-2">
                    <li><a href="/">Home</a></li>
                    <li>/</li>
                    <li class="active">Service Detailes</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="course-details-header" class="course-details-header">
    <div class="container">
        <div class="row d-flex align-items-start">

            <!-- LEFT COLUMN: Long Description -->
            <div class="col-md-8">
                <div class="course-overview-details">
                    <h3 class="course-overview-heading">সার্ভিস পরিচিতি</h3>
                    <p>
                        {{ $product->product_name ?? 'Name Loading.....' }}
                    </p>
                    {!! $product->long_description ?? 'Description Loading.....' !!}

                    <!-- Tags (optional) -->
                    <div class="course-tags my-4">
                        <h3 class="course-tags-heading">Tags</h3>
                        <div class="d-flex gap-2">
                            <span class="badge bg-primary">Services</span>
                            <span class="badge bg-secondary">Web Development</span>
                        </div>
                    </div>

                </div>
            </div>

            <!-- RIGHT COLUMN: Image + Sidebar -->
            <div class="col-md-4">
                <div class="right-details-top mb-4">
                    <img src="{{ asset($product->thumbnail) }}" class="img-fluid rounded" alt="" />
                </div>

                <!-- Sidebar / Buy Now -->
                <div class="course-sidebar-details p-4 shadow-sm rounded bg-white">
                    <h2 class="course-price mb-4">
                        @if ($product->discount_price && $product->discount_type === 'flat')
                        @php
                        $product_discount_price = $product->regular_price - $product->discount_price;
                        @endphp
                        ৳{{ number_format($product_discount_price, 2) }}
                        <span class="text-decoration-line-through">৳{{ number_format($product->regular_price, 2) }}</span>
                        @elseif ($product->discount_price && $product->discount_type === 'percent')
                        @php
                        $discount_amount = ($product->regular_price * $product->discount_price) / 100;
                        $product_discount_price = $product->regular_price - $discount_amount;
                        @endphp
                        ৳{{ number_format($product_discount_price, 2) }}
                        <span class="text-decoration-line-through">৳{{ number_format($product->regular_price, 2) }}</span>
                        @else
                        ৳{{ number_format($product->price ?? $product->regular_price ?? 1299, 2) }}
                        @endif
                    </h2>


                    <ul class="features-course list-unstyled m-0">
                        <li>
                            <span><i class="fa-solid fa-signal me-2"></i> কোর্স লেভেল</span>
                            <span>{{ $product->level ?? 'বেগিনার' }}</span>
                        </li>
                        <li>
                            <span><i class="fa-solid fa-clock me-2"></i> কোর্স সময়কাল</span>
                            <span>{{ $product->duration ?? '10 সপ্তাহ' }}</span>
                        </li>
                        <li>
                            <span><i class="fa-solid fa-video me-2"></i> মোট লেকচার</span>
                            <span>{{ $product->lectures ?? '25' }}</span>
                        </li>
                        <li>
                            <span><i class="fa-solid fa-language me-2"></i> ভাষা</span>
                            <span>{{ $product->language ?? 'বাংলা' }}</span>
                        </li>
                    </ul>

                    <div class="payment-share mt-4 pt-3 border-top">
                        <strong>পেমেন্ট মেথডস:</strong>
                        <div class="d-flex flex-wrap gap-2 mt-2">
                            <img src="{{ asset('frontend/assets/images/payment/bKash.png') }}" height="50">
                            <img src="{{ asset('frontend/assets/images/payment/nagad.png') }}" height="50">
                            <img src="{{ asset('frontend/assets/images/payment/rocket.png') }}" height="50">
                            <img src="{{ asset('frontend/assets/images/payment/visa.png') }}" height="50">
                        </div>
                    </div>

                    <div class="buy-now-btn text-center my-4">
                        <a href="{{ route('contact.page') }}" class="btn btn-enroll w-100">এখনই কিনুন</a>
                    </div>
                </div>

            </div>
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