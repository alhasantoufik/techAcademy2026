<div class="course-categories-section" id="course-categories">
    <div class="container">
        <div class="section-title">
            <h6>Browse Categories</h6>
            <h2>Popular Services We Provide</h2>
        </div>
        <div class="row g-4 course-category-type">
            <!-- Card 1 -->
            @foreach ($categories->take(6) as $category)
                <div class="col-md-4 col-lg-3 col-xl-2">
                    <div class="category-card position-relative">
                        <div class="category-content text-center">
                            <i class="fa-solid fa-code category-icon"></i>
                            <h5 class="category-title">{{ $category->category_name }}</h5>
                            <p class="category-count">{{ $category->products->count() }} Services</p>
                        </div>
                        <div class="overlay">
                            <div class="overlay-content">
                                <h5>{{ $category->category_name }}</h5>
                                <p class="text-center">
                                    <a href="singleCategory.html"><i class="fa-solid fa-arrow-right ms-2"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <!-- Add 3 more cards similarly... -->
        </div>
    </div>
</div>
