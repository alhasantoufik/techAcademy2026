 const openBtn = document.getElementById('openVideoPopup');
  const closeBtn = document.getElementById('closeVideoPopup');
  const modal = document.getElementById('videoModal');
  const iframe = document.getElementById('youtubeIframe');

  openBtn.onclick = function () {
    modal.style.display = "block";
    iframe.src = "https://www.youtube.com/embed/MHwmmiZ5LHs?si=d031SMFrSmaOclaE";
  }

  closeBtn.onclick = function () {
    modal.style.display = "none";
    iframe.src = "";
  }

  window.onclick = function (event) {
    if (event.target == modal) {
      modal.style.display = "none";
      iframe.src = "";
    }
  }