<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Service Page</title>
    @include('website.layouts.inc.script')
</head>
@include('website.layouts.inc.header')

@include('website.layouts.inc.navber')

<!-- ==================== Breadcumb Start Here ==================== -->
<!-- Page Top Header Breadcrumb Start-->
<section id="breadcrumb-section" class="breadcrumb-section">
    <div class="breadcrumb-overlay">
        <div class="container">
            <div class="content-breadcrumb text-center text-white">
                <h3 class="mb-2">Courses</h3>
                <ul class="breadcrumb-list d-flex justify-content-center gap-2">
                    <li><a href="/">Home</a></li>
                    <li>/</li>
                    <li class="active">Courses</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Featured Course Section Start -->

<!-- ==================services start here ==============================-->
<section class="featured-course-section" id="featured-course-section">
    <div class="container">
        <div class="section-title">
            <h6>All Services</h6>
            <h2>Pick a Service to Get Started</h2>
        </div>

        <!-- filtering Options -->
        <div class="row d-flex align-items-center mb-4">
            <div class="col-md-10">
                <!-- Filter Bar -->
                <div class="filter-bar row g-3">
                    <div class="col-md-3">
                        <select class="form-select" id="categoryFilter">
                            <option value="">All Categories</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}">
                                {{ $category->category_name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div id="productContainer">
            @include('website.layouts.pages.services.partials.products')
        </div>


    </div>
</section>


@include('website.layouts.inc.footer')

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

<script>
    $(document).ready(function() {

        $('#categoryFilter').on('change', function() {
            let categoryId = $(this).val();

            $.ajax({
                url: "{{ route('service.page') }}",
                type: "GET",
                data: {
                    category_id: categoryId
                },
                beforeSend: function() {
                    $('#productContainer').html('<div class="text-center py-5">Loading...</div>');
                },
                success: function(response) {
                    $('#productContainer').html(response);
                }
            });
        });

    });
</script>