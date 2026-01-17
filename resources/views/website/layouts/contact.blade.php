<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{$pageTitle}}</title>
    @include('website.layouts.inc.script')
</head>
@include('website.layouts.inc.header')

@include('website.layouts.inc.navber')

<!-- Page Top Header Breadcrumb Start-->
<section id="breadcrumb-section" class="breadcrumb-section">
    <div class="breadcrumb-overlay">
        <div class="container">
            <div class="content-breadcrumb text-center text-white">
                <h3 class="mb-2">Contact Us</h3>
                <ul class="breadcrumb-list d-flex justify-content-center gap-2">
                    <li><a href="/">Home</a></li>
                    <li>/</li>
                    <li class="active">Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!---------------- Contact section Start ----------------->
<section id="contact-section">
    <div class="container">
        <div class="contact-address-map my-4">
            <div class="section-title">
                <h2>Get in touch with us</h2>
            </div>
            <div class="row d-flex align-items-center">
                <div class="col-md-6">
                    <div class="contact-address">
                        <!-- single items address Phone -->
                        <div class="d-flex align-items-center gap-4 mb-4">
                            <div>
                                <span><i class="fa-solid fa-phone-volume"></i></span>
                            </div>
                            <div>
                                <h4>Call us on: {{ $website_setting->phone }}</h4>
                                <p>Our office hours are Saturday – Thursday, 9 am-6 pm</p>
                            </div>
                        </div>
                        <!-- single items address Email -->
                        <div class="d-flex align-items-center gap-4 mb-4">
                            <div>
                                <span><i class="fa-solid fa-envelope"></i></span>
                            </div>
                            <div>
                                <h4>Our Location</h4>
                                <p>{{ $website_setting->address }}</p>
                            </div>
                        </div>
                        <!-- single items address Location -->
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Google Map -->
                    <div class="map-responsive">
                        {!! $website_setting->google_map !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-form">
            <div class="section-title">
                <h6>Sent Us a Message</h6>
                <h2>We will Answer all your Questions</h2>
            </div>
            <div class="row d-flex align-items-center">
                <div class="col-md-6">
                    <div class="left-contact-img">
                        <img
                            src="frontend/assets/images/contact_1.jpg"
                            class="img-fluid"
                            alt="" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-contact-form">
                        <form action="{{ route('stored_message') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <input type="text" placeholder="Name" name="name" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <input
                                    name="phone"
                                    type="text"
                                    placeholder="Phone"
                                    class="form-control" />
                            </div>
                            <div class="mb-3">
                                <textarea
                                    name="message"
                                    id="message"
                                    class="form-control"
                                    rows="5"
                                    placeholder="Message"></textarea>
                            </div>
                            <button class="btn btn-enroll">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!---------------- Contact section End ----------------->







@include('website.layouts.inc.footer')