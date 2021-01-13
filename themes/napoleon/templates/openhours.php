<?php 
$address = get_field('address', 'options');
$parkaddress = get_field('parking_adres', 'options');
$gmurl = get_field('url', 'options');
$parkgmurl = get_field('parking_url', 'options');
$telefoon = get_field('telefoon_1', 'options');
$email = get_field('emailadres', 'options');
$gmaplink = !empty($gmurl)?$gmurl: 'javascript:void()';
$parkgmaplink = !empty($parkgmurl)?$parkgmurl: 'javascript:void()';
$fc_openhour = get_field('fc_openingsuren', 'options');
if( $fc_openhour ):
  $algemeen = $fc_openhour['algemeen'];
?>
<section class="footer-top-sec-v2">
  <div class="footer-top-sec-v2-bg inline-bg" data-aos="fade-up2" data-aos-delay="100" 
  style="background-image: url('<?php echo THEME_URI; ?>/assets/images/footer-top-sec-bg.png');"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="footer-top-sec-v2-inr" data-aos="fade-up4" data-aos-delay="500">
          <div class="ftr-top-sec-v2-lft">
            <div class="fts-v2-lft-top">
              <h6 class="fts-v2-lft-sub-title">Openingsuren</h6>
              <?php if( !empty($fc_openhour['titel']) ) printf('<h4 class="fts-v2-lft-title">%s</h4>', $fc_openhour['titel']); ?>
            </div>
            <?php if( $algemeen ): ?>
            <div class="fts-v2-lft-sediule">
              <div class="fts-v2-lft-sediule-col">
                <ul class="reset-list">
                  <?php 
                  $i = 1; 
                  foreach( $algemeen as $hourlist ): 
                   if( $i <= 5){
                  ?>
                  <li>
                    <div class="fts-v2-lft-sediule-items">
                      <div class="fts-v2-lft-sdl-day">
                        <?php if( !empty($hourlist['dag']) ) printf('<strong>%s</strong>', $hourlist['dag']); ?>
                      </div>
                      <div class="fts-v2-lft-sdl-time">
                        <?php if( !empty($hourlist['tijd']) ) printf('<span>%s</span>', $hourlist['tijd']); ?>
                      </div>
                    </div>
                  </li>
                  <?php } ?>
                  <?php $i++; endforeach; ?>
                </ul>
              </div>
              <div class="fts-v2-lft-sediule-col fts-v2-lft-sediule-col2">
                <ul class="reset-list">
                  <?php
                    $i = 1;  
                    foreach( $algemeen as $hourlist ):
                    if( $i > 5){
                  ?>
                  <li>
                    <div class="fts-v2-lft-sediule-items">
                      <div class="fts-v2-lft-sdl-day">
                        <?php if( !empty($hourlist['dag']) ) printf('<strong>%s</strong>', $hourlist['dag']); ?>
                      </div>
                      <div class="fts-v2-lft-sdl-time">
                        <?php if( !empty($hourlist['tijd']) ) printf('<span>%s</span>', $hourlist['tijd']); ?>
                      </div>
                    </div>
                  </li>
                  <?php } ?>
                  <?php $i++; endforeach; ?>
                </ul>
              </div>
            </div>
            <?php endif; ?>
          </div>
          <div class="ftr-top-sec-v2-rt">
            <div class="fts-v2-rt-desc">
              <div class="fts-v2-rt-desc-contact fts-v2-rt-desc-row">
                <h5 class="fts-v2-rt-desc-row-title"><?php _e( 'Contact opnemen', THEME_NAME ); ?></h5>
                <div class="fts-v2-rt-desc-cntct-tel">
                  <?php if( !empty($telefoon) ) printf('<a href="tel:%s">%s</a>', phone_preg($telefoon),  $telefoon); ?>
                </div>
                <div class="fts-v2-rt-desc-cntct-mail">
                  <?php if( !empty($email) ) printf('<a href="mailto:%s">%s</a>', $email, $email); ?>
                </div>
              </div>
              <?php if( !empty($address) ): ?>
              <div class="fts-v2-rt-desc-visit fts-v2-rt-desc-row">
                <h5 class="fts-v2-rt-desc-row-title"><?php _e( 'Bezoek ons', THEME_NAME ); ?></h5>
                <?php printf('<a href="%s">%s</a>', $gmaplink, $address); ?>
              </div>
              <?php endif; ?>
              <?php if( !empty($parkaddress) ): ?>
              <div class="fts-v2-rt-desc-Parking fts-v2-rt-desc-row">
                <h5 class="fts-v2-rt-desc-row-title"><?php _e( 'Parking', THEME_NAME ); ?></h5>
                <?php printf('<a href="%s">%s</a>', $parkgmaplink, $parkaddress); ?>
              </div>
              <?php endif; ?>
            </div>
            <div class="fts-v2-rt-form footer-top-form">

              <h5 class="fts-v2-rt-desc-row-title fts-v2-rt-form-title">Schrijf je in voor onze nieuwsbrief</h5>
              <p class="show-sm">Ja, ik wil op de hoogte blijven van de laatste acties & promoties! Mis geen enkele kans om mooie prijzen te winnen!</p>
              <form action="" class="needs-validation" novalidate>
                <div class="input-fields-row">
                  <div class="input-fields-col">
                    <input type="text" name="fname" placeholder="Naam">
                  </div>
                </div>

                <div class="input-fields-row">
                  <div class="input-fields-col">
                    <input type="text" name="lname" placeholder="Voornaam">
                  </div>
                </div>

                <div class="input-fields-row">
                  <div class="input-fields-col from-group">
                    <input type="email" name="email" placeholder="E-mailadres" class="form-control" required>
                  </div>
                </div>

                <div class="input-fields-row">
                  <div class="input-fields-col input-fields-submit-col fts-v2-input-fields-submit-col">
                    <button type="submit" name="submit">SCHRIJF JE IN</button>
                  </div>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>