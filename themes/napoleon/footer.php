<?php 
  $logoObj = get_field('ftlogo', 'options');
  if( is_array($logoObj) ){
    $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
  }else{
    $logo_tag = '';
  }
  $address = get_field('address', 'options');
  $gmurl = get_field('url', 'options');
  $telefoon = get_field('telefoon_1', 'options');
  $email = get_field('emailadres', 'options');
  $gmaplink = !empty($gmurl)?$gmurl: 'javascript:void()';

  $smedias = get_field('social_media', 'options');
  $ftlgalerij = get_field('ftlgalerij', 'options');
?>
<footer class="footer-wrp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="footer-top clearfix">
          <div class="ftr-left">
            <div class="ftr-logo">
              <a href="<?php echo esc_url(home_url('/')); ?>">
                <?php echo $logo_tag; ?>
              </a>
            </div>
            <div class="ftr-btm-socials show-md">
              <?php if(!empty($smedias)):  ?>
                <ul class="reset-list clearfix">
                  <?php foreach($smedias as $smedia): ?>
                  <li>
                    <a target="_blank" href="<?php echo $smedia['url']; ?>">
                        <?php echo $smedia['icon']; ?>
                    </a>
                 </li>
                 <?php endforeach; ?>
                </ul>
              <?php endif; ?>
              </div>
          </div>
          <div class="ftr-top-col ftr-top-row-col ftr-col-nav">
            <h5 class="ftr-top-row-col-title"><?php _e( 'Navigatie', THEME_NAME ); ?></h5>
            <?php 
              $cbv_ft_menu = array( 
                  'theme_location' => 'cbv_ft_menu', 
                  'menu_class' => 'reset-list xs-ftr-mbl-accrdn',
                  'container' => '',
                  'container_class' => ''
                );
              wp_nav_menu( $cbv_ft_menu );
            ?>
          </div>

          <div class="ftr-top-addr-cntct-wrap ftr-top-row-col clearfix">
            <h5 class="ftr-top-row-col-title"><?php _e( 'Contact Info', THEME_NAME ); ?></h5>
            <div class="ftr-top-addr-cntct xs-ftr-mbl-accrdn">
              <div class="ftr-top-col ftr-col-address">
                <h6 class="ftr-top-col-title"><?php _e( 'Adres', THEME_NAME ); ?></h6>
                <?php if( !empty($address) ) printf('<a href="%s">%s</a>', $gmaplink, $address); ?>
              </div>
              <div class="ftr-top-col ftr-col-contact">
                <h6 class="ftr-top-col-title"><?php _e( 'Contact', THEME_NAME ); ?></h6>
                <div class="ftr-col-contact-tell">
                  <?php if( !empty($telefoon) ) printf('<a href="tel:%s">%s</a>', phone_preg($telefoon),  $telefoon); ?>
                </div>
                <div class="ftr-col-contact-mail">
                  <?php if( !empty($email) ) printf('<a href="mailto:%s">%s</a>', $email, $email); ?>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="footer-bottom">
          <div class="ftr-btm-socials hide-md">
            <?php if(!empty($smedias)):  ?>
              <ul class="reset-list clearfix">
                <?php foreach($smedias as $smedia): ?>
                <li>
                  <a target="_blank" href="<?php echo $smedia['url']; ?>">
                      <?php echo $smedia['icon']; ?>
                  </a>
               </li>
               <?php endforeach; ?>
              </ul>
            <?php endif; ?>
          </div>
          <div class="ftr-btm-manu">
            <?php 
              $cbv_copyright_menu = array( 
                  'theme_location' => 'cbv_copyright_menu', 
                  'menu_class' => 'reset-list',
                  'container' => '',
                  'container_class' => ''
                );
              wp_nav_menu( $cbv_copyright_menu );
            ?>
          </div>
          <div class="ftr-btm-brands-logo-cntlr">
          <?php 
            if( $ftlgalerij ): 
              foreach ( $ftlgalerij as $key => $galerijID ) {
               echo !empty($galerijID)? cbv_get_image_tag( $galerijID ): '';
              } 
            endif; 
          ?>
          </div>
        </div>
      </div>
    </div>
  </div> 
</footer>
<?php wp_footer(); ?>
</body>
</html>