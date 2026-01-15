// Open the modal
    document
      .getElementById("openVideoModal")
      .addEventListener("click", function () {
        document.getElementById("customModalCourse").style.display = "block";
      });
  

    document.querySelectorAll(".close-modal-course-btn").forEach(btn => {
      btn.addEventListener("click", function () {
        document.getElementById("customModalCourse").style.display = "none";
        stopVideo();
      });
    });


    // Close when click outside modal content
    window.addEventListener("click", function (e) {
      const modal = document.getElementById("customModalCourse");
      if (e.target === modal) {
        modal.style.display = "none";
        stopVideo();
      }
    });

    // Stop video playback (YouTube workaround)
    function stopVideo() {
      const iframe = document.getElementById("videoPlayer");
      iframe.src = iframe.src;
    }