<footer class="footer-section position-relative text-light">
  <!-- Optional background image -->
  <div class="footer-bg-img position-absolute top-0 start-0 w-100 h-100"></div>
  <div class="footer-overlay position-absolute top-0 start-0 w-100 h-100"></div>

  <div class="container position-relative">
    <div class="row">
      <!-- Left Column -->
      <div class="col-md-8 mb-4">
        <div class="row">
          <div class="col-6 col-md-6 mb-4">
            <div class="footer-logo-area">
              <img src="{{ asset($website_setting->website_footer_logo) }}" class="img-fluid" width="130" alt="footer-logo">
              <p class="my-3">{{ $website_setting->footer_content }}</p>
            </div>

          </div>
          <!-- <div class="col-6 col-md-3 mb-4">
              <h6 class="footer-heading">Services</h6>
              <ul class="list-unstyled">
                <li><a href="#">Web Development</a></li>
                <li><a href="#">UI/UX Design</a></li>
                <li><a href="#">React & Next.js</a></li>
              </ul>
            </div> -->
          <div class="col-6 col-md-3 mb-4">
            <h6 class="footer-heading">Services</h6>
            <ul class="list-unstyled">
              @php
              // Take only 5 latest categories
              $latestCategories = $categories->take(5);
              @endphp

              @forelse ($latestCategories as $category)
              <li>
                <a href="{{ route('service.category', $category->category_slug) }}">
                  {{ $category->category_name }}
                </a>
              </li>
              @empty
              <li>No services found</li>
              @endforelse
            </ul>
          </div>

          <div class="col-12 col-md-3 mb-4">
            <h6 class="footer-heading">Useful Links</h6>
            <ul class="list-unstyled">
              <li><a href="{{ route('home') }}">Home</a></li>
              <li><a href="{{ route('about.us') }}">About Us</a></li>
              <li><a href="{{ route('contact.page') }}">Contact</a></li>
          </div>
        </div>
      </div>

      <!-- Right Column -->
      <div class="col-md-4 mb-4">
        <h6 class="footer-heading">Get In Touch</h6>
        <ul class="list-unstyled contact-info">
          <li>
            <i class="fas fa-map-marker-alt me-2"></i>{{ $website_setting->address }}
          </li>
          <li><i class="fas fa-phone me-2"></i>{{ $website_setting->phone }}</li>
          <li><i class="fas fa-envelope me-2"></i>{{ $website_setting->email }}</li>
        </ul>
        <!-- Social Icons -->
        <div class="footer-social-icons mt-3">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
    </div>

    <!-- Bottom Section -->
    <hr class="border-secondary" />
    <div class="row align-items-center small pb-3">
      <div class="col-md-6 d-flex align-items-center mb-3 mb-md-0">
        <span>{{ $website_setting->copyright_text }} &copy; 2026 {{ $website_setting->copyright_text }}. All rights reserved.</span>
      </div>
      <div class="col-md-6 text-md-end">
        <a href="#" class="text-light text-decoration-none me-3">Privacy Policy</a>
        <a href="#" class="text-light text-decoration-none">Developed by
          <a href="#" style="color: #f14d5d; font-weight: bold">Freelance IT</a></a>
      </div>
    </div>
  </div>
</footer>

