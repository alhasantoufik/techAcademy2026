<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>blog Details</title>
    @include('website.layouts.inc.script')
</head>
@include('website.layouts.inc.header')

@include('website.layouts.inc.navber')

<!-- Page Top Header Breadcrumb Start-->
<section id="breadcrumb-section" class="breadcrumb-section">
    <div class="breadcrumb-overlay">
        <div class="container">
            <div class="content-breadcrumb text-center text-white">
                <h3 class="mb-2">Blog Details</h3>
                <ul class="breadcrumb-list d-flex justify-content-center gap-2">
                    <li><a href="/">Home</a></li>
                    <li>/</li>
                    <li class="active">Blog Details</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="single-blog-details">
    <div class="container">
        <div class="row">
            <!-- Main Blog Content -->
            <div class="col-md-8" data-aos="fade-right">
                <div class="single-blog-content">
                    <!-- Blog Image -->
                    <div class="main-blog-img">
                        <img
                            src="{{ asset($singleBlogPage->image) }}"
                            class="img-fluid rounded-3"
                            alt="{{ $singleBlogPage->post_title }}" />
                    </div>

                    <!-- Date & Category -->
                    <div class="date-category my-3">
                        <p>{{ $singleBlogPage->created_at->format('F d, Y') }}
                            <span>/</span>
                            <span class="category-type-text">
                                {{ $singleBlogPage->category->category_name ?? 'Uncategorized' }}
                            </span>
                        </p>
                    </div>

                    <!-- Blog Title -->
                    <h3 class="blog-title">{{ $singleBlogPage->post_title }}</h3>

                    <!-- Blog Content -->
                    <p class="blog-desc">{!! $singleBlogPage->post_content !!}</p>

                    @if($singleBlogPage->rules)
                    <div class="my-5">
                        <h3 class="sub-heading-text">Rules & Regulations</h3>
                        <p class="blog-desc">{!! $singleBlogPage->rules !!}</p>
                        @if($singleBlogPage->rules_list)
                        <ul class="blog-liststyle">
                            @foreach($singleBlogPage->rules_list as $rule)
                            <li>
                                <i class="fa-solid fa-right-long"></i> {{ $rule }}
                            </li>
                            @endforeach
                        </ul>
                        @endif
                    </div>
                    @endif

                    <!-- Sub Images -->
                    @if($singleBlogPage->sub_images)
                    <div class="row blog-sub-images g-3">
                        @foreach($singleBlogPage->sub_images as $subImage)
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                            <div class="image-wrapper">
                                <img
                                    src="{{ asset($subImage) }}"
                                    class="img-fluid uniform-img"
                                    alt="blog sub image" />
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endif
                </div>

                <!-- Comments Section -->
               
            </div>

            <!-- Sidebar -->
            <div class="col-md-4" data-aos="fade-left">
                <!-- Recent/Popular Posts -->
                <div class="popular-post">
                    <h4 class="title-popular-post">Recent Posts</h4>
                    <div class="all-popular-posts">
                        @foreach($recentBlogs as $recent)
                        <div class="single-popular-post d-flex align-items-center gap-3 mb-3">
                            <div class="single-popular-img flex-shrink-0">
                                <img src="{{ asset($recent->image) }}" class="img-fluid rounded" alt="{{ $recent->post_title }}" />
                            </div>
                            <div class="popular-post-content">
                                <h6 class="post-title mb-1">
                                    <a href="{{ route('blog_single.page', $recent->post_slug) }}" class="text-decoration-none">
                                        {{ $recent->post_title }}
                                    </a>
                                </h6>
                                <p class="post-date text-muted small mb-0">
                                    {{ $recent->created_at->format('F d, Y') }}
                                </p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Categories -->
                <div class="all-categories mt-4">
                    <h4 class="title-popular-categories">Categories</h4>
                    <div class="all-popular-categories">
                        <ul class="category-list">
                            @foreach($postCategories as $category)
                            <li>
                                <a href="{{ route('blog.page', ['category' => $category->id]) }}">
                                    <i class="fa-solid fa-right-long"></i> {{ $category->category_name }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






<!-- Bootstrap JS & Custom JS -->
<script src="frontend/js/bootstrap.bundle.min.js"></script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="frontend/js/logoSlider.js"></script>
<script src="frontend/js/testimonials.js"></script>
<script src="frontend/js/script.js"></script>



@include('website.layouts.inc.footer')

