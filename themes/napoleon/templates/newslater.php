<?php 
$fc_newsl = get_field('nieuwsbrief', 'options');
if( $fc_newsl ):
?>
<section class="footer-top-sec">
  <span class="footer-top-sec-bg inline-bg" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/footer-top-sec-bg.png');"></span>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="footer-top-sec-cntlr">
          <div class="footer-top-col-hedding">
            <?php if( !empty($fc_newsl['titel']) ) printf('<h4 class="footer-top-col-title">%s</h4>', $fc_newsl['titel']); ?>
          </div>
          <div class="footer-top-col-desc">
            <?php if( !empty($fc_newsl['beschrijving']) ) echo wpautop( $fc_newsl['beschrijving'] ); ?>
          </div>
          <div class="footer-top-form">
            <form action="" class="needs-validation" novalidate>
              <div class="input-fields-row input-fields-row-d2">
                <div class="input-fields-col">
                  <input type="text" name="fname" placeholder="Naam">
                </div>
                <div class="input-fields-col">
                  <input type="text" name="lname" placeholder="Voornaam">
                </div>
              </div>

              <div class="input-fields-row input-fields-row-d2">
                <div class="input-fields-col input-fields-email-col from-group">
                  <input type="email" name="email" placeholder="mathias2.conversalbe" class="form-control" required>
                </div>
                <div class="input-fields-col input-fields-submit-col">
                  <button type="submit" name="submit">SCHRIJF JE IN</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>