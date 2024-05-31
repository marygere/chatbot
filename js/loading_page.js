document.addEventListener("DOMContentLoaded", function () {
  var images = document.querySelectorAll(".loader img");
  var currentIndex = 0;

  function fadeInImage() {
    if (currentIndex < images.length) {
      images[currentIndex].style.opacity = 1;
      currentIndex++;
      setTimeout(fadeInImage, 1000); // Change to adjust fade-in speed (milliseconds)
    } else {
      // Redirect to the home page after all images have faded in
      setTimeout(function () {
        window.location.href = "../html/home.html";
      }, 2000); // Change to adjust delay before redirect (milliseconds)
    }
  }

  fadeInImage();
});
