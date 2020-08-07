<section id="programs" class="portfoio ">
  <div class="container " data-aos="fade-up">

    <div class="section-title">
      <h2 class="dark-text">Our Programs</h2>
      <div class="switch-button dark-all">
        <input type="radio" class="theme-switch" name="theme-switch1" id="theme-switch1">
        <label for="theme-switch1" class="switch-label light-all">Orange</label>
        <input type="radio" class="theme-switch" name="theme-switch2" id="theme-switch2">
        <label for="theme-switch2" class="switch-label dark-all">Purple</label>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">Category A</li>
          <li data-filter=".filter-card">Category B</li>
          <li data-filter=".filter-web">Category C</li>
        </ul>
      </div>
    </div>

    <div class="row portfolio-container">
      @php 
        $image_1 = 'img/programs/image-1.jpg'; 
        $image_2 = 'img/programs/image-2.jpg';
        $image_3 = 'img/programs/image-3.jpg';
        $image_4 = 'img/programs/image-4.jpg';
        $image_5 = 'img/programs/image-5.jpg';
        $image_6 = 'img/programs/image-6.jpg';
        $image_7 = 'img/programs/image-7.jpg';
        $image_8 = 'img/programs/image-8.jpg';
        $image_9 = 'img/programs/image-9.jpg';
      @endphp
      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <img src="{{ asset($image_1) }}" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Item 1 Category A</h4>
          <p>Category A</p>
          <a href="{{ asset($image_1) }}" data-gall="portfolioGallery" class="venobox preview-link" title="">
            <i class="bx bx-plus"></i>
          </a>
          <a href="#" class="details-link" title="More Details">
            <i class="bx bx-link"></i>
          </a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <img src="{{ asset($image_2) }}" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Item 1 Category C</h4>
          <p>Category C</p>
          <a href="{{ asset($image_2) }}" data-gall="portfolioGallery" class="venobox preview-link" title="">
            <i class="bx bx-plus"></i>
          </a>
          <a href="#" class="details-link" title="More Details">
            <i class="bx bx-link"></i>
          </a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <img src="{{ asset($image_3) }}" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Item 2 Category A</h4>
          <p>Category A</p>
          <a href="{{ asset($image_3) }}" data-gall="portfolioGallery" class="venobox preview-link" title="">
            <i class="bx bx-plus"></i>
          </a>
          <a href="#" class="details-link" title="More Details">
            <i class="bx bx-link"></i>
          </a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <img src="{{ asset($image_4) }}" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Item 1 Category B</h4>
          <p>Category B</p>
          <a href="{{ asset($image_4) }}" data-gall="portfolioGallery" class="venobox preview-link" title="">
            <i class="bx bx-plus"></i>
          </a>
          <a href="#" class="details-link" title="More Details">
            <i class="bx bx-link"></i>
          </a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <img src="{{ asset($image_5) }}" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Item 2 Category C</h4>
          <p>Category C</p>
          <a href="{{ asset($image_5) }}" data-gall="portfolioGallery" class="venobox preview-link" title="">
            <i class="bx bx-plus"></i>
          </a>
          <a href="#" class="details-link" title="More Details">
            <i class="bx bx-link"></i>
          </a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <img src="{{ asset($image_6) }}" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Item 3 Category A</h4>
          <p>Category A</p>
          <a href="{{ asset($image_6) }}" data-gall="portfolioGallery" class="venobox preview-link" title="">
            <i class="bx bx-plus"></i>
          </a>
          <a href="#" class="details-link" title="More Details">
            <i class="bx bx-link"></i>
          </a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <img src="{{ asset($image_7) }}" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Item 2 Category B</h4>
          <p>Category B</p>
          <a href="{{ asset($image_7) }}" data-gall="portfolioGallery" class="venobox preview-link" title="">
            <i class="bx bx-plus"></i>
          </a>
          <a href="#" class="details-link" title="More Details">
            <i class="bx bx-link"></i>
          </a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <img src="{{ asset($image_8) }}" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Item 3 Category B</h4>
          <p>Category B</p>
          <a href="{{ asset($image_8) }}" data-gall="portfolioGallery" class="venobox preview-link" title="Card 3">
            <i class="bx bx-plus"></i>
          </a>
          <a href="#" class="details-link" title="More Details">
            <i class="bx bx-link"></i>
          </a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <img src="{{ asset($image_9) }}" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Item 3 Category C</h4>
          <p>Category C</p>
          <a href="{{ asset($image_9) }}" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3">
            <i class="bx bx-plus"></i>
          </a>
          <a href="#" class="details-link" title="More Details">
            <i class="bx bx-link"></i>
          </a>
        </div>
      </div>

    </div>

  </div>
</section>