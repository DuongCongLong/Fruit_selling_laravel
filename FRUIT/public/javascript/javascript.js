// JavaScript để xử lý sự kiện click cho nice-select
document.addEventListener('DOMContentLoaded', function () {
    var niceSelects = document.querySelectorAll('.nice-select');
  
    niceSelects.forEach(function (niceSelect) {
      niceSelect.addEventListener('click', function () {
        this.classList.toggle('open');
        // Đóng các nice-select khác khi một nice-select được mở
        niceSelects.forEach(function (other) {
          if (other !== niceSelect) {
            other.classList.remove('open');
          }
        });
      });
    });
  
    // Đóng nice-select khi click ra ngoài
    document.addEventListener('click', function (e) {
      if (!e.target.matches('.nice-select') && !e.target.matches('.nice-select *')) {
        niceSelects.forEach(function (niceSelect) {
          niceSelect.classList.remove('open');
        });
      }
    });
  });
  document.addEventListener("DOMContentLoaded", function() {
    const priceFilter = document.getElementById("priceFilter");
    const brandFilter = document.getElementById("brandFilter");
    const sortOrder = document.getElementById("sortOrder");
  
    // Add event listeners to the filters
    priceFilter.addEventListener("change", filterItems);
    brandFilter.addEventListener("change", filterItems);
    sortOrder.addEventListener("change", sortItems);
  
    function filterItems() {
      const priceValue = priceFilter.value;
      const brandValue = brandFilter.value;
  
      // Implement your filtering logic here based on priceValue and brandValue
      console.log("Filtering items with price:", priceValue, "and brand:", brandValue);
    }
  
    function sortItems() {
      const sortValue = sortOrder.value;
  
      // Implement your sorting logic here based on sortValue
      console.log("Sorting items in order:", sortValue);
    }
  });
    
  const imgs = document.querySelectorAll('.img-select a');
  const imgBtns = [...imgs];
  let imgId = 1;
  
  imgBtns.forEach((imgItem) => {
      imgItem.addEventListener('click', (event) => {
          event.preventDefault();
          imgId = imgItem.dataset.id;
          slideImage();
      });
  });
  
  function slideImage(){
      const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;
  
      document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
  }
  
  window.addEventListener('resize', slideImage);
  