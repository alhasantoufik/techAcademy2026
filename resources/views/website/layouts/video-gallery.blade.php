<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Video Gallery</title>
    @include('website.layouts.inc.script')
</head>
@include('website.layouts.inc.header')

@include('website.layouts.inc.navber')
<style>
    .video-card {
        position: relative;
        cursor: pointer;
        overflow: hidden;
    }

    .video-card img {
        width: 100%;
        border-radius: 10px;
    }

    /* Overlay */
    .video-overlay {
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.4);
        opacity: 0;
        transition: opacity 0.3s ease;
        border-radius: 10px;
    }

    .video-card:hover .video-overlay {
        opacity: 1;
    }

    /* Play Button */
    .video-play-btn {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: #ffffff;
        font-size: 40px;
        z-index: 2;
    }

    /* Page Banner */
    .single-page-banner-content h1 {
        margin-top: 70px;
        margin-bottom: 10px;
    }

    .single-page-banner-content ul {
        display: flex;
        list-style: none;
        padding: 0;
        margin: 0;
    }

    /* Video Modal */
    .video-modal .modal-content {
        padding-top: 10px;
        background-color: #000;
    }

    .video-modal .ratio {
        margin-top: -10px;
        /* video একটু উপরে */
    }

    /* Custom Close Button */
    .btn-close-custom {
        position: absolute;
        top: 8px;
        right: 10px;
        background: rgba(0, 0, 0, 0.7);
        color: #ffffff;
        border: none;
        width: 35px;
        height: 35px;
        border-radius: 50%;
        z-index: 10;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
    }

    .btn-close-custom i {
        font-size: 16px;
    }
</style>

<!-- Page Top Header Breadcrumb Start-->
<section id="breadcrumb-section" class="breadcrumb-section">
    <div class="breadcrumb-overlay">
        <div class="container">
            <div class="content-breadcrumb text-center text-white">
                <h3 class="mb-2">Video Gallery</h3>
                <ul class="breadcrumb-list d-flex justify-content-center gap-2">
                    <li><a href="/">Home</a></li>
                    <li>/</li>
                    <li class="active">Video Gallery</li>
                </ul>
            </div>
        </div>
    </div>
</section>


<section class="video-section py-5"
    style="background-image: url('{{ asset('frontend') }}/assets/images/dot-grid.webp');">
    <div class="container">
        <div class="row g-4">

            @foreach($videoGalleries as $videoGallery)

            @php
            preg_match('/(youtu\.be\/|v=|embed\/)([^&\?\/]+)/', $videoGallery->video_url, $matches);
            $videoId = $matches[2] ?? null;
            $thumbnail = $videoId
            ? 'https://img.youtube.com/vi/'.$videoId.'/hqdefault.jpg'
            : '';
            @endphp

            <div class="col-lg-4 col-md-6">
                <div class="video-card"
                    role="button"
                    style="cursor: pointer;"
                    data-bs-toggle="modal"
                    data-bs-target="#videoModal"
                    data-video-url="{{ $videoGallery->video_url }}">

                    <img src="{{ $thumbnail }}"
                        class="img-fluid rounded"
                        alt="YouTube Video Thumbnail">

                    <div class="video-overlay"></div>
                    <div class="video-play-btn ripple">
                        <i class="fas fa-play"></i>
                    </div>
                </div>
            </div>


            @endforeach

        </div>
    </div>
</section>

<!-- ==================== Video Modal ==================== -->

<div class="modal fade video-modal"
    id="videoModal"
    tabindex="-1"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content position-relative">

            <!-- ❌ Close Button -->
            <button type="button"
                class="btn-close-custom"
                data-bs-dismiss="modal">
                <i class="fas fa-times"></i>
            </button>

            <!-- Video -->
            <div class="ratio ratio-16x9 video-wrapper">
                <iframe id="videoIframe"
                    src=""
                    allow="autoplay; encrypted-media"
                    allowfullscreen>
                </iframe>
            </div>

        </div>
    </div>
</div>

<!-- ==================== Script ==================== -->

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
    var videoModal = document.getElementById('videoModal');
    var iframe = document.getElementById('videoIframe');

    videoModal.addEventListener('show.bs.modal', function(event) {
        var button = event.relatedTarget; // the element that triggered modal
        if (!button) return; // safety check

        var videoUrl = button.getAttribute('data-video-url') || '';

        // YouTube ID extract
        var match = videoUrl.match(/(youtu\.be\/|v=|embed\/)([^&\?\/]+)/);
        var videoId = match && match[2] ? match[2] : '';

        // Set embed URL
        iframe.src = videoId ? 'https://www.youtube.com/embed/' + videoId + '?autoplay=1' : '';
    });

    videoModal.addEventListener('hidden.bs.modal', function() {
        iframe.src = '';
    });
</script>



