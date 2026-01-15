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

<script>
  // Function to animate counters
  function animateCounter(element, endValue, duration = 2000) {
    let startValue = 0;
    let increment = endValue / (duration / 16); // ~60fps
    let current = startValue;

    const counter = setInterval(() => {
      current += increment;
      if (current >= endValue) {
        element.textContent = formatValue(endValue);
        clearInterval(counter);
      } else {
        element.textContent = formatValue(Math.floor(current));
      }
    }, 16); // ~60 times per second
  }

  // Format function to handle values like 10k+, 80%+
  function formatValue(value) {
    if (value >= 1000) return Math.floor(value / 1000) + "k+";
    if (value >= 80 && value < 100) return value + "%+";
    return value + "+";
  }

  // Start animation when DOM is ready
  document.addEventListener("DOMContentLoaded", function() {
    const counters = document.querySelectorAll(".single-counter-item h2");

    counters.forEach(counter => {
      // Read the number directly from the Blade-rendered content
      // Remove any non-digit characters like + or k or %
      const endValue = parseInt(counter.textContent.replace(/\D/g, ''), 10) || 0;
      animateCounter(counter, endValue);
    });
  });
</script>