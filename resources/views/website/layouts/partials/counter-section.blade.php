<section id="counter-section" class="counter-section">
  <div class="container">
    <div class="section-title">
      <h6>Achivments</h6>
      <h2>Strength in Numbers</h2>
    </div>
    <div class="row text-center">
      @foreach ($achievements as $achievement)
        <div class="col-6 col-md-3 mb-4">
          <div class="single-counter-item">
            <h2>{{ $achievement->count_number }}+</h2>
            <p>{{ $achievement->title }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>