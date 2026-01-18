<div class="row g-4">
    @forelse ($products as $product)
    <div class="col-md-6 col-lg-4">
        <div class="course-card shadow-sm rounded-4 overflow-hidden bg-white h-100 position-relative">
            <span
                class="badge position-absolute top-0 end-0 m-3 bg-primary text-white rounded-pill px-3 py-1 small z-1">
                {{ $product->product_name }}
            </span>

            <img src="{{ asset($product->thumbnail) }}" class="img-fluid w-100" alt="{{ $product->product_name }}" />

            <div class="p-3 d-flex flex-column h-80">
                <h5 class="fw-semibold text-truncate-2 mb-2">
                    <a href="#" class="course-title-heading">
                        {{ $product->product_name }}
                    </a>
                </h5>

                <p>{{ $product->short_description }}</p>

                <hr />

                <div class="course-btns mt-auto d-flex justify-content-between align-items-center">
                    <a href="{{ route('service_single.page', $product->id ) }}" class="view-details-btn btn-sm">
                        <i class="fas fa-eye me-1"></i> View Service
                    </a>
                </div>
            </div>
        </div>
    </div>
    @empty
    <div class="col-12 text-center">
        <p class="text-muted">No services found.</p>
    </div>
    @endforelse
</div>


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