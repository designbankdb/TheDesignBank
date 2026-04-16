<!DOCTYPE html>
<html>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title>The Print Bank</title>
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
    <?php wp_head(); ?>
  </head>
  <body>
    
    <div class="header">
      <nav style="display:flex; justify-content: space-between;">
        <a href="<?php echo home_url(); ?>">Home</a>
        <a href="<?php  echo get_page_link(10); ?>">Contact Us</a>
      </nav>
      <img src="<?php echo get_template_directory_uri(); ?>/Assets/Print Bank Logo.svg" alt="logo image">
    </div>

    <article> 
      <h3>About The Print Bank</h3>

      <p>Based in West Yorkshire, The Print Bank is the home of all things print. With over 30 years of industry experience, our passionate team have fostered a craft that allows us to work alongside our clients to produce a perfect, bespoke final product.</p>

      <p>Quality is our priority, which is why we use the best resources for the job, sourcing high-quality stock that exudes luxury. Our skilled designers are dedicated to creating designs that exhibit personality and individuality while sensitively executing the brief, ensuring your expectations are surpassed.</p>
    </article>

    <article>
      <p>Business Cards // Flyers // Posters // Postcards // Gift Tags // Stickers // Letterheads // Notebooks // Planners // Greeting Cards // Banners // Bookmarks // Signs // Compliment Slips // Vouchers // Menus // Roller Banners // Folders // Exhibition Stands</p>
    <article>

    <article style="display:flex; flex-direction: row;">
      <img src="<?php echo get_template_directory_uri(); ?>/Assets/Image 1.jpg" alt="logo image">
      <img src="<?php echo get_template_directory_uri(); ?>/Assets/Image 2.jpg" alt="logo image">
      <img src="<?php echo get_template_directory_uri(); ?>/Assets/Image 3.jpg" alt="logo image">
    </article>
  <?php get_footer(); ?>
