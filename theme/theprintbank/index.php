<?php get_header(); ?>

    <div class="header mb-5">
      <nav class="position-relative d-flex flex-row justify-content-between pt-5 mx-3">
        <a class="nav-links home-nav <?php if(is_front_page()) { echo 'active';} ?>" href="<?php echo home_url(); ?>">Home</a>
        <a class="nav-links home-nav <?php if(is_page(10)) { echo 'active';} ?>" href="<?php  echo get_page_link(10); ?>">Contact Us</a>
      </nav>

      <div class="d-flex align-items-center justify-content-center h-100">
        <img class="logo img-fluid" src="<?php echo get_template_directory_uri(); ?>/Assets/Print Bank Logo.svg" alt="logo">
      </div>
    </div>

    <div class="container my-3 p-md-5">
      <div class="row">
        <div class="col-md-4"><h3 class="mb-4">About The Print Bank</h3></div>
        <div class="col-md-8">
          <p class="text-left mb-4">Based in West Yorkshire, The Print Bank is the home of all things print. With over 30 years of industry experience, our passionate team have fostered a craft that allows us to work alongside our clients to produce a perfect, bespoke final product.</p>

          <p class="text-left">Quality is our priority, which is why we use the best resources for the job, sourcing high-quality stock that exudes luxury. Our skilled designers are dedicated to creating designs that exhibit personality and individuality while sensitively executing the brief, ensuring your expectations are surpassed.</p>
        </div>
      </div>
    </div>

    <div class="d-flex flex-column-reverse flex-md-column">
      <article class="mx-3 my-md-5">
        <p class="fs-2">Business Cards // Flyers // Posters // Postcards // Gift Tags // Stickers // Letterheads // Notebooks // Planners // Greeting Cards // Banners // Bookmarks // Signs // Compliment Slips // Vouchers // Menus // Roller Banners // Folders // Exhibition Stands</p>
      </article>

      <div class="text-center pb-5">
        <div class="d-flex flex-column flex-md-row gap-md-4 mx-3">
          <div class="col mb-3">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/Assets/Image 1.jpg" alt="logo image">
          </div>
          <div class="col mb-3">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/Assets/Image 2.jpg" alt="logo image">
          </div>
          <div class="col mb-3">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/Assets/Image 3.jpg" alt="logo image">
          </div>
        </div>
      </div>

    </div>
  <?php get_footer(); ?>
