<section id="subscrib-section">
    <div class="container">
      <div class="subscriber-area">
        <div class="row align-items-center">
          <div class="col-md-6 mb-3">
            <h3 class="subscribe-text">
              Want Us to Conatct You About Special Offers & Updates?
            </h3>
          </div>
          <div class="col-md-6">
            <div class="subscriber-mail-box">
              <form action="{{ route('newslatter.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="text" name="phone" placeholder="Enter your phone..." />
                <button>Subscribe</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
