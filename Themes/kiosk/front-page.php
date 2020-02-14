<?php get_header(); ?>
<?php
  $intro = get_field('hintro', HOMEID);
  $hbox1 = get_field('hbox1', HOMEID);
  $hbox2 = get_field('hbox2', HOMEID);
?>
<section class="hm-content-sec-wrp">
  <div class="container-xlg">
      <div class="row">
        <div class="col-sm-12">
          <div class="hm-dsc-wrp clearfix">
            <?php if( !empty( $intro['title'] ) ) printf( '<h1>%s</h1>', $intro['title']); ?>
            <div class="hm-dsc-box-innr clearfix">
              <div class="hm-dsc-box-lft clearfix">
                <div class="hm-dsc-box-bg">
                  <div class="hm-dsc-box">
                    <?php if( !empty( $hbox1['title'] ) ) printf( '<h1>%s</h1>', $hbox1['title']); ?>
                  </div>
                </div>
              </div>
              <div class="hm-dsc-box-rgt clearfix">
                <div class="hm-dsc-box-bg">
                  <div class="hm-dsc-box">
                    <?php if( !empty( $hbox2['title'] ) ) printf( '<h1>%s</h1>', $hbox2['title']); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>    
</section>
<?php get_footer(); ?>