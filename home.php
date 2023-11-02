<?php include("header 1.html") ?>
<body>
<!-- top sale section with product slider -->

<h2 class="top-sale">Top Sale Today:</h2>
  <div class="slide-container swiper">
    <div class="slide-content">
      <div class="card-wrapper swiper-wrapper">
        <div class="home-card swiper-slide">
          <div class="image-content">
            <span class="overlay"></span>
              <div class="card-image">
                <img src="images/p0.jpg" alt="" class="card-img">
              </div>
          </div>
          <div class="card-content">
            <h2 class="name">New Arrival</h2>
            <p class="description">Starts at Rs.1999</p>
            <button class="button">View More</button>
          </div>
        </div>
        <div class="home-card swiper-slide">
          <div class="image-content">
            <span class="overlay"></span>

              <div class="card-image">
                <img src="images/p1.jpg" alt="" class="card-img">
              </div>
          </div>
          <div class="card-content">
            <h2 class="name">Fancy Wears for girls</h2>
            <p class="description">Starts from Rs. 799</p>
            <button class="button">View More</button>
          </div>
        </div>
        <div class="home-card swiper-slide">
          <div class="image-content">
            <span class="overlay"></span>

              <div class="card-image">
                <img src="images/p2.jpg" alt="" class="card-img">
              </div>
          </div>
          <div class="card-content">
            <h2 class="name">Kids Fancy Wears</h2>
            <p class="description">Starts from Rs. 599</p>
            <button class="button">View More</button>
          </div>
        </div>
        <div class="home-card swiper-slide">
          <div class="image-content">
            <span class="overlay"></span>

              <div class="card-image">
                <img src="images/p3.jpg" alt="" class="card-img">
              </div>
          </div>
          <div class="card-content">
            <h2 class="name">Men's Formals</h2>
            <p class="description">From Rs. 699</p>
            <button class="button">View More</button>
          </div>
        </div>
        <div class="home-card swiper-slide">
          <div class="image-content">
            <span class="overlay"></span>

              <div class="card-image">
                <img src="images/p4.jpg" alt="" class="card-img">
              </div>
          </div>
          <div class="card-content">
            <h2 class="name">Men's Sharwanis</h2>
            <p class="description">From Rs. 4999</p>
            <button class="button">View More</button>
          </div>
        </div>
        <div class="home-card swiper-slide">
          <div class="image-content">
            <span class="overlay"></span>

              <div class="card-image">
                <img src="images/p5.jpg" alt="" class="card-img">
              </div>
          </div>
          <div class="card-content">
            <h2 class="name">Redmi Phones</h2>
            <p class="description">From Rs. 10999</p>
            <button class="button">View More</button>
          </div>
        </div>
        <div class="home-card swiper-slide">
          <div class="image-content">
            <span class="overlay"></span>

              <div class="card-image">
                <img src="images/p6.jpg" alt="" class="card-img">
              </div>
          </div>
          <div class="card-content">
            <h2 class="name">Iphones</h2>
            <p class="description">From Rs. 89999</p>
            <button class="button">View More</button>
          </div>
        </div>
        <div class="home-card swiper-slide">
          <div class="image-content">
            <span class="overlay"></span>

              <div class="card-image">
                <img src="images/p7.jpg" alt="" class="card-img">
              </div>
          </div>
          <div class="card-content">
            <h2 class="name">Refridgerators</h2>
            <p class="description">Starts from Rs. 25000</p>
            <button class="button">View More</button>
          </div>
        </div>
        <div class="home-card swiper-slide">
          <div class="image-content">
            <span class="overlay"></span>

              <div class="card-image">
                <img src="images/p8.jpg" alt="" class="card-img">
              </div>
          </div>
          <div class="card-content">
            <h2 class="name">LED TVs</h2>
            <p class="description">From Rs. 35999</p>
            <button class="button">View More</button>
          </div>
        </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-scrollbar"></div>
    <div class="swiper-pagination"></div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".slide-content", {
      slidesPerView: 1,
      centeredSlides: false,
      slidesPerGroupSkip: 1,
      grabCursor: true,
      keyboard: {
        enabled: true,
      },
      breakpoints: {
        769: {
          slidesPerView: 5,
          slidesPerGroup: 2,
        },
      },
      scrollbar: {
        el: ".swiper-scrollbar",
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  </script>
  <!-- ----------------------------------------------- -->
  <!-- you-may-like part -->
  <h2 class="top-sale">You may like:</h2>
  <div class="like-container swiper">
      <div class="card-wrapper swiper-wrapper">
        <div class="home-card swiper-slide">
          <div class="card-content">
            <a class="name link">Women Fashion</a>
          </div>
        </div>
        <div class="home-card swiper-slide">
          <div class="card-content">
            <a class="name link">Kid's Special</a>
          </div>
        </div>
        <div class="home-card swiper-slide">
          <div class="card-content">
            <a class="name link">Men's Formal Outfit</a>
          </div>
        </div>
        <div class="home-card swiper-slide">
          <div class="card-content">
            <a class="name link">Apple Products</a>
          </div>
        </div>
        <div class="home-card swiper-slide">
          <div class="card-content">
            <a class="name link">Samsung TV</a>
          </div>
        </div>
        <div class="home-card swiper-slide">
          <div class="card-content">
            <a class="name link">OnePlus 11Pro</a>
          </div>
        </div>
        <div class="home-card swiper-slide">
          <div class="card-content">
            <a class="name link">Friends Forever Gifts</a>
          </div>
        </div>
        <div class="home-card swiper-slide">
          <div class="card-content">
            <a class="name link">Air Coolers for Summer</a>
          </div>
        </div>
      </div>
    
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".like-container", {
      slidesPerView: 3,
      spaceBetween: 30,
      freeMode: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      }
    });
  </script>
    <!-- top-brand part -->
    <h2 class="top-sale">Top Brands:</h2>
    <div class="brand-container swiper">
        <div class="card-wrapper swiper-wrapper">
          <div class="home-card swiper-slide">
            <div class="card-content">
              <a class="name link">Samsung</a>
            </div>
          </div>
          <div class="home-card swiper-slide">
            <div class="card-content">
              <a class="name link">LG</a>
            </div>
          </div>
          <div class="home-card swiper-slide">
            <div class="card-content">
              <a class="name link">Apple</a>
            </div>
          </div>
          <div class="home-card swiper-slide">
            <div class="card-content">
              <a class="name link">Redmi</a>
            </div>
          </div>
          <div class="home-card swiper-slide">
            <div class="card-content">
              <a class="name link">Blue Star</a>
            </div>
          </div>
          <div class="home-card swiper-slide">
            <div class="card-content">
              <a class="name link">Toshiba</a>
            </div>
          </div>
          <div class="home-card swiper-slide">
            <div class="card-content">
              <a class="name link">Google Pixel</a>
            </div>
          </div>
          <div class="home-card swiper-slide">
            <div class="card-content">
              <a class="name link">Sony</a>
            </div>
          </div>
        </div>
      
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  
    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".brand-container", {
        slidesPerView: 3,
        spaceBetween: 30,
        freeMode: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        }
      });
    </script>
</body>
<?php include("footer.html") ?>