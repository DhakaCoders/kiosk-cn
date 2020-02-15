<?php get_header(); ?>
<?php
  $intro = get_field('hintro', HOMEID);
  $hbox1 = get_field('hbox1', HOMEID);
  $box1link = $box2link = 'javascript:void();';
  if( !empty($hbox1['link']) ){
    $box1link = $hbox1['link'];
  }
  $hbox2 = get_field('hbox2', HOMEID);
  if( !empty($hbox2['link']) ){
    $box2link = $hbox2['link'];
  }
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
                  <a href="<?php echo $box1link; ?>"></a>
                  <div class="hm-dsc-box">
                    <?php if( !empty( $hbox1['title'] ) ) printf( '<h1><a href="%s">%s</a></h1>', $box1link, $hbox1['title']); ?>
                  </div>
                </div>
              </div>
              <div class="hm-dsc-box-rgt clearfix">
                <div class="hm-dsc-box-bg">
                  <a href="<?php echo $box2link; ?>"></a>
                  <div class="hm-dsc-box">
                    <?php if( !empty( $hbox2['title'] ) ) printf( '<h1><a href="%s">%s</a></h1>', $box2link, $hbox2['title']); ?>
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