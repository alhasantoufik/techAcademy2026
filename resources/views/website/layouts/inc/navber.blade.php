@php
use App\Models\WebsiteSetting;
use App\Models\Category;

$categories = Category::where('category_slug', '!=', 'default')
->whereNotNull('category_slug') // <-- safety check
  ->get(['id', 'category_name', 'image', 'category_slug']);

  $website_setting = WebsiteSetting::first();

  $cart = session()->get('cart', []);
  $itemCount = 0;
  foreach ($cart as $item) {
  $itemCount += $item['quantity'];
  }
  @endphp

  <header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white shadow-sm py-3 sticky-top">
      <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
          <img src="{{ asset($website_setting->website_logo) }}" alt="Logo" class="logo-img" />
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
          <ul class="navbar-nav mb-2 mb-lg-0 align-items-lg-center">

            <!-- Home -->
            <li class="nav-item">
              <a class="nav-link active" href="{{ route('home') }}">Home</a>
            </li>

            <!-- Services Dropdown -->
            <!-- Services Dropdown -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle"
                href="#"
                id="serviceDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false">
                Service
              </a>

              <ul class="dropdown-menu" aria-labelledby="serviceDropdown">
                @foreach ($categories as $category)
                @if($category->category_slug)
                <li>
                  <a class="dropdown-item"
                    href="{{ route('service.category', $category->category_slug) }}">
                    {{ $category->category_name }}
                  </a>
                </li>
                @endif
                @endforeach

                <!-- Static All Service option -->
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li>
                  <a class="dropdown-item fw-bold"
                    href="{{ route('service.page') }}">
                    All Service
                  </a>
                </li>
              </ul>
            </li>



            <!-- Other Links -->
            <li class="nav-item">
              <a class="nav-link" href="{{ route('about.us') }}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('image-gallery') }}">Image Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('video-gallery') }}">Video Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('blog.page') }}">Blog</a>
            </li>

            <!-- Contact Button -->
            <li class="nav-item ms-lg-3">
              <a href="{{ route('contact.page') }}" class="btn btn-enroll">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>