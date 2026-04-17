<?php /* Template Name: Contact Page */ ?>
<?php get_header(); ?>

<nav class="d-flex flex-row justify-content-between pt-3 mx-3">
  <a class="nav-links contact <?php if(is_front_page()) { echo 'active';} ?>" href="<?php echo home_url(); ?>">Home</a>
  <a class="nav-links contact <?php if(is_page(10)) { echo 'active';} ?>" href="<?php  echo get_page_link(10); ?>">Contact Us</a>
</nav>

<div class="container text-left">
  <div class="row mb-md-3 mt-5">
    <div class="col-md-6 order-1">    
      <article class="mx-2 pt-md-5"> 
        <p class="fw-normal fs-2">Contact Us</p>
        <div class="py-3">
          <span class="fw-light">Email</span>
          <br>
          <a class="fs-3 text-dark contact-links" href="mailto:info@theprintbank.uk">info@theprintbank.uk</a>
        </div>

        <div class="py-3">
          <span class="fw-light">Phone</span>
          <br>
          <a class="fs-3 text-dark contact-links" href="tel:01484 455554">01484 455554</a>
        </div>

        <div class="py-3">
          <span class="fw-light">Address</span>
          <p class="fs-5">
            The Print Bank,
            <br>
            Headrow House, 19 Old Leeds Rd,
            <br>
            Huddersfield, HD1 1SG
          </p>
        </div>
      </article>
    </div>

    <div class="col-md-6 order-3 order-md-2"> 
      <div class="mx-2 pt-md-5">
        <p class="fw-normal py-md-0 py-3 fs-2">Request a quote</p>
          <?php echo do_shortcode('[contact-form-7 id="69d5731" title="Contact form 1"]'); ?>
      </div>
    </div>

    <div class="order-2 order-md-3 mt-md-5">
      <div class="mx-2 mb-4">
        <?php echo do_shortcode('[wpgmza id="1"]'); ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
