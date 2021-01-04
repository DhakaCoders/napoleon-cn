<?php 
/**
Template Name: Thanks
*/
get_header(); 
?>
<section class="np-two-grid-sec-wrp thank-you clearfix">
    <div class="np-two-grid-wrp clearfix">
      <div class="np-two-grid-main clearfix">
        <div class="np-two-grid-img inline-bg" style="background: url(<?php echo THEME_URI; ?>/assets/images/np-two-grid-img.png);"> 
        </div>              
      </div>
      <div class="np-two-grid-des-inr">
        <div class="np-two-grid-des"> 
          <strong></strong>
          <h1 class="np-two-grid-des-title">Thanks!</h1>
          <strong class="sub-title">Stap een dag in het leven van een royalty. <br> Alles wordt voor je verzorgd en geregeld.</strong>
          <p>Duis commodo quam <br> in ex blandit mollis. Praesent sit amet nisl mauris. <br> Pellentesque eu erat vitae lectus pharetra dapibus.</p>
          <ul class="clearfix reset-list">
            <li><a href="<?php echo esc_url(home_url()); ?>">HOME</a></li>
            <li><a href="<?php echo esc_url(home_url('casino'));?>">Casino</a></li>
          </ul>
        </div>
      </div>
    </div>     
</section>
<?php get_template_part('templates/openhours'); ?>
<?php
get_footer();
?>