<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Image Gallery</title>
    @include('website.layouts.inc.script')
</head>
@include('website.layouts.inc.header')

@include('website.layouts.inc.navber')

<style>
/* Gallery Grid */
.gallery-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 1.5rem;
}

.gallery-item {
    position: relative;
    overflow: hidden;
    cursor: pointer;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

.gallery-item img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.gallery-item:hover img {
    transform: scale(1.1);
}

/* Overlay on hover */
.gallery-item .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.5);
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    opacity: 0;
    transition: opacity 0.3s ease;
    font-size: 2rem;
}

.gallery-item:hover .overlay {
    opacity: 1;
}

/* Modal styling (already mostly correct) */
.image-modal {
    display: none;
    position: fixed;
    z-index: 10000;
    padding-top: 60px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.9);
    text-align: center;
}

.image-modal img {
    margin: auto;
    display: block;
    max-width: 90%;
    max-height: 80%;
}

.image-modal .close-btn {
    position: absolute;
    top: 30px;
    right: 35px;
    color: white;
    font-size: 40px;
    font-weight: bold;
    cursor: pointer;
}

.nav-buttons {
    position: absolute;
    top: 50%;
    width: 100%;
    display: flex;
    justify-content: space-between;
    padding: 0 30px;
}

.nav-buttons .prev,
.nav-buttons .next {
    color: white;
    font-size: 40px;
    cursor: pointer;
    user-select: none;
}
</style>


<!-- Page Top Header Breadcrumb Start-->
<section id="breadcrumb-section" class="breadcrumb-section">
    <div class="breadcrumb-overlay">
        <div class="container">
            <div class="content-breadcrumb text-center text-white">
                <h3 class="mb-2">Image Gallery</h3>
                <ul class="breadcrumb-list d-flex justify-content-center gap-2">
                    <li><a href="/">Home</a></li>
                    <li>/</li>
                    <li class="active">Image Gallery</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="gallery-section py-5 bg-light" id="gallery">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <div class="d-flex align-items-center justify-content-center gap-1">
            </div>
        </div>
        <div class="row g-4 gallery-grid">
            @foreach($imageGalleries as $gallery)
            <div class="col-sm-6 col-lg-4">
                <div class="gallery-item">
                    <img
                        src="{{ asset($gallery->image) }}"
                        alt="Gallery 2" />
                    <div class="overlay" data-index="1">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Custom Popup Modal -->
<div class="image-modal" id="imageModal">
    <span class="close-btn" id="closeBtn">&times;</span>
    <img id="popupImage" />
    <div class="nav-buttons">
        <span class="prev" id="prevBtn">&#10094;</span>
        <span class="next" id="nextBtn">&#10095;</span>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const galleryItems = document.querySelectorAll('.gallery-item img');
        const modal = document.getElementById('imageModal');
        const popupImage = document.getElementById('popupImage');
        const closeBtn = document.getElementById('closeBtn');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');

        let currentIndex = 0;
        const imageSrcs = [];

        // Populate image source list
        galleryItems.forEach(img => {
            imageSrcs.push(img.getAttribute('src'));
        });

        function showImage(index) {
            if (index >= 0 && index < imageSrcs.length) {
                popupImage.setAttribute('src', imageSrcs[index]);
                currentIndex = index;
            }
        }

        // Open modal on click
        galleryItems.forEach((img, index) => {
            img.addEventListener('click', () => {
                showImage(index);
                modal.style.display = 'block';
            });

            const overlay = img.closest('.gallery-item').querySelector('.overlay');
            overlay?.addEventListener('click', () => {
                showImage(index);
                modal.style.display = 'block';
            });
        });

        // Close modal
        closeBtn.addEventListener('click', () => {
            modal.style.display = 'none';
        });

        // Prev/Next navigation
        prevBtn.addEventListener('click', () => {
            let newIndex = currentIndex - 1;
            if (newIndex < 0) newIndex = imageSrcs.length - 1;
            showImage(newIndex);
        });

        nextBtn.addEventListener('click', () => {
            let newIndex = currentIndex + 1;
            if (newIndex >= imageSrcs.length) newIndex = 0;
            showImage(newIndex);
        });
    });
</script>




@include('website.layouts.inc.footer')