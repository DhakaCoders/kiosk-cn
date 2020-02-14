<?php 
get_header(); 
while( have_posts() ): the_post();
?>
<section class="ks-dsc-sec-wrp">
  <div class="container-xlg">
    <div class="row">
      <div class="col-sm-12">
        <div class="ks-dsc-wrp">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endwhile; get_footer(); ?>