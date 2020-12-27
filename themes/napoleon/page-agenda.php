<?php
/*Template Name: Agenda*/
get_header();
$thisID = get_the_ID();
$titel = get_field('titel', $thisID);
$beschrijving = get_field('beschrijving', $thisID);
?>
<section class="np-agenda-con">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="np-agenda-con-inr clearfix">
          <div class="np-agenda-lftsidebar">
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

                      $terms = get_terms( 'agenda_cat', array(
                                  'orderby'    => 'count',
                                  'hide_empty' => 0,
                                  'orderby'  => 'id',
                                  'order'    => 'ASC'
                              ) );
                      if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
                    ?>
                    <ul class="reset-list">
                      <?php foreach ( $terms as $term ) { ?>
                        <li><a href="<?php echo esc_url( get_term_link( $term ) ); ?>"><?php echo $term->name; ?></a></li>
                      <?php } ?>
                    </ul>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
            <?php if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){ ?>
            <div class="xs-np-agenda-select-ctlr show-sm clearfix">
              <form action="" method="get">
                <span>Selecteer:</span>
                <div class="xs-np-agenda-select">
                  <select class="selectpicker">
                    <option>Selecteer Categorie</option>
                    <?php foreach ( $terms as $term ) { ?>
                    <option value="<?php echo esc_url( get_term_link( $term ) ); ?>"><?php echo $term->name; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </form>
            </div>
            <?php } ?>
          </div>
          <div class="np-agenda-rgt">
            <?php echo do_shortcode('[ajax_agenda]'); ?>
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