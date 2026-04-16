<?php /* Template Name: Contact Page */ ?>
<?php get_header(); ?>

 <nav style="display:flex; justify-content: space-between;">
    <a href="<?php echo home_url(); ?>">Home</a>
    <a href="<?php  echo get_page_link(10); ?>">Contact Us</a>
  </nav>

  <article> 
    <h2>Contact Us</h2>
    <span>Email</span>
    <a href="mailto:info@theprintbank.uk">info@theprintbank.uk</a>
    <span>Phone</span>
    <a href="tel:01484 455554">01484 455554</a>
    <span>Address</span>
    <p>
      The Print Bank,
      Headrow House, 19 Old Leeds Rd,
      Huddersfield, HD1 1SG
      The Print Bank,
      Headrow House, 19 Old Leeds Rd,
      Huddersfield, HD1 1SG
    </p>
  </article>

<article>
  <h2>Request a quote</h2>

  <?php echo do_shortcode('[contact-form-7 id="69d5731" title="Contact form 1"]'); ?>

  <?php echo do_shortcode('[wpgmza id="1"]'); ?>

</article>

<?php get_footer(); ?>