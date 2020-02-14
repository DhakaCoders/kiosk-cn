<?php 
  $ftlogo = get_field('ftlogo', 'options');
  $logoObj = $ftlogo['logo'];
  if( is_array($logoObj) ){
    $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
  }else{
    $logo_tag = '';
  }
?>
<footer class="footer-wrp">
  <div class="container-xlg">
    <div class="row">
      <div class="col-sm-12">
          <div class="ftr-logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
              <?php echo $logo_tag; ?>
            </a>
          </div>
      </div>
    </div>
  </div> 
</footer>
<?php wp_footer(); ?>
</body>
</html>