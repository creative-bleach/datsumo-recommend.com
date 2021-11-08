<!-- loading screen on search -->

<!-- ad_code -->
<?php include locate_template( 'ad_code.php' ); ?>

<?php
  if(strpos($url,'search=on') == true):
  $url = str_replace('&search=on', '', $url);
?>
<style>
  .screenload {
    width: 100vw;
    height: 100vh;
    position: relative;
  }
  .screenload img {
    position: absolute;
    height: 66px;
    width: 66px;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }
</style>
<div class="screenload"><img src="<?php echo get_template_directory_uri(); ?>/img/cushion/loading.gif" alt="loading..."></div>
<script type="text/javascript">
  setTimeout("redirect()", 500);
  function redirect(){
     location.href='<?php echo $url; ?>';
  }
</script>
<?php else: ?>
<?php endif; ?>