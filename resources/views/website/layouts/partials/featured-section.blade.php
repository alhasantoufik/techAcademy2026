<section id="featured-section">
    <div class="container">
        <div class="row align-items-center featured-section py-5">
            <div class="col-md-2 d-flex align-items-center">
                <h3 class="featured-title">Featured In</h3>
            </div>
            <div class="col-md-10">
                <div class="featured-logo-wrapper overflow-hidden">
                    @foreach ($brands as $brand)
                        <div class="featured-logo-track d-flex" id="logoTrack">
                            <img src="{{ asset($brand->image) }}" class="img-fluid logo-item" alt="" />
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
