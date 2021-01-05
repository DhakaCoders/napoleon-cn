<?php
/*Template Name: Arrangementen*/
get_header();
$thisID = get_the_ID();
$titel = get_field('titel', $thisID);
$beschrijving = get_field('beschrijving', $thisID);
?>
<section class="np-arrangementen-con">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="np-arrangementen-con-inr clearfix">
          <div class="np-arrangementen-lftsidebar" data-aos="fade-up5" data-aos-delay="100">
            <div class="np-nieuws-lftsidebar-inr">
              <div class="np-nieuws-lftsidebar-des">
                <div class="np-nieuws-lftsidebar-des-inr">
                  <div class="np-nieuws-lftsidebar-des-ctlr">
                    <?php 
                      if( !empty($titel) ) 
                        printf('<h2 class="np-nieuws-lftsidebar-title">%s</h2>', $titel);
                      else
                        printf('<h2 class="np-nieuws-lftsidebar-title">%s</h2>', get_the_title($thisID));

                      if( !empty($beschrijving) ) echo wpautop($beschrijving);
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="np-arrangementen-rgt" data-aos="fade-up4" data-aos-delay="300">
            <?php echo do_shortcode('[ajax_arrange]'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_template_part('templates/newslater'); ?>
<?php
get_footer();
?>