<section id="testimonials-section" class="testimonials-section">
    <div class="container">
      <div class="section-title">
        <h6>Testimonials</h6>
        <h2>Client Community Feedback</h2>
      </div>
      <div class="swiper testimonial-slider">
        <div class="swiper-wrapper">
          <!-- Slide 1 -->
          @foreach ($reviews as $review )
          <div class="swiper-slide">
            <div class="single-testimonial">
              <div class="reviews">
                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
              <p>
                “{{ $review->review }}”
              </p>
              <div class="testimonial-footer">
                <img src="{{ asset($review->image) }}" alt="John Doe" />
                <div>
                  <h4>{{ $review->name }}</h4>
                  <p>Web Developer</p>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          <!-- …add more slides if you like… -->
        </div>

        <!-- pagination bullets -->
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section>
