@php
    use App\Models\WebsiteSetting;
    use App\Models\Category;
    $categories = Category::where('category_slug', '!=', 'default')->get(['id', 'category_name', 'image']);

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
        <a class="navbar-brand" href="index.html">
          <img src="{{ asset($website_setting->website_logo) }}" alt="Logo" class="logo-img" />
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
          <ul class="navbar-nav mb-2 mb-lg-0 align-items-lg-center">
            <li class="nav-item">
              <a class="nav-link active" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="courses.html">Service</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Dashboard.html">Image Gallery</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="Dashboard.html">Video Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Dashboard.html">Blog</a>
            </li>
            <li class="nav-item ms-lg-3">
              <a href="registration.html" class="btn btn-enroll">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
