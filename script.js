document.addEventListener("DOMContentLoaded", function () {
    const newsSlider = document.querySelector(".news-slider");
    const newsItems = document.querySelectorAll(".news-item");
  
    let currentIndex = 0;
  
    function showNews(index) {
      const newPosition = -index * 100 + "%";
      newsSlider.style.transform = "translateX(" + newPosition + ")";
    }
  
    function nextNews() {
      currentIndex = (currentIndex + 1) % newsItems.length;
      showNews(currentIndex);
    }
  
    function prevNews() {
      currentIndex = (currentIndex - 1 + newsItems.length) % newsItems.length;
      showNews(currentIndex);
    }
  
    setInterval(nextNews, 5000); // Change slide every 5 seconds, adjust as needed
  });