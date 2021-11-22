<!-- HEADER -->

<!-- ad_code -->
<?php include locate_template( 'ad_code.php' ); ?>

<!DOCTYPE html>
<html lang="ja">
<head>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KV6LKPB');</script>
<!-- End Google Tag Manager -->
<script async src="https://s.yimg.jp/images/listing/tool/cv/ytag.js"></script>
<script>
window.yjDataLayer = window.yjDataLayer || [];
function ytag() { yjDataLayer.push(arguments); }
ytag({"type":"ycl_cookie"});
</script>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <title>
    <?php 
      if(is_search()):
        echo "検索結果";
      else:
        wp_title('|',true,'right'); ?> <?php bloginfo('name'); 
      endif;
    ?>
  </title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <!-- webfont end -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/base.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/slick/slick.css">
  <!-- css end -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/function.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/matchHeight/matchHeight.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/slick/slick.min.js"></script>
  <?php if(is_search()):?>
  <!-- AT SEARCH -->
  <?php else: ?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/ranking.js"></script>
  <?php endif; ?>
  <!-- js end -->
  <link rel="icon" href="#">
  <!-- favicon end -->
  <meta property="og:title" content="つるぴか女子部">
  <meta property="og:type" content="website">
  <meta property="og:description" content="">
  <meta property="og:url" content="_____サイトURL_____">
  <meta property="og:image" content="_____ogp画像_____">
  <meta property="og:site_name" content="つるぴか女子部">
  <!-- ogp end -->

  <!-- wp head -->
  <?php wp_head(); ?>
</head>


<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KV6LKPB"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/ytags.js" async></script>

  <div id="wrapper">