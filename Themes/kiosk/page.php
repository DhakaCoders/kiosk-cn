<?php get_header(); ?>
<section class="ks-dsc-sec-wrp">
  <div class="container-xlg">
    <div class="row">
      <div class="col-sm-12">
        <div class="ks-dsc-wrp">
          <span>Pagebuilder field</span>
          <h1>H1</h1>
          <p>Paragraph <strong>Bold</strong> <a href="#">Link</a></p>
          <em>Italic</em>
          <h2>H2</h2>
          <p>Paragraph <strong>Bold</strong> <a href="#">Link</a></p>
          <em>Italic</em>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ks-form-sec-wrp">
  <div class="container-xlg">
    <div class="row">
      <div class="col-sm-12">
        <div class="ks-form-block-wrp">
          <div id="ks-form-wrp">
            <span>Form Layout:</span>
            <div class="wpforms-container">
              <form class="wpforms-form">
                <div class="wpforms-field-container">
                  <div class="wpforms-field">
                    <input type="text" name="name" placeholder="[ Placeholder ]" required>
                  </div>
                  
                  <div class="wpforms-field">
                    <input type="email" name="email" placeholder="[ Placeholder ]" required>
                  </div>

                  <div class="wpforms-field yourFieldFull">
                    <input type="text" name="email" placeholder="[ Placeholder ]" required>
                  </div>

                </div><!-- end of .wpforms-field-container-->

                <div class="wpforms-submit-container">
                  <button type="submit" name="submit" class="wpforms-submit">Send button style</button>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>