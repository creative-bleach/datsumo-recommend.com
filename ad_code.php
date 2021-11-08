<?php
  // 各関数設定
  $url = $_SERVER['REQUEST_URI'];
  $before = $_SERVER['HTTP_REFERER'];
  //$ad_code = htmlspecialchars($_GET["code"]);//旧コード
  //$urlsplit = explode("code=", $url );
  //$ad_code = $urlsplit[1];
  //$ad_code = urldecode ( $urlsplit[1] );
  //echo $ad_code;

$ad_code = "";

if (isset($_GET)) {
  $flg = 0;
  foreach ($_GET as $key => $value) {
    if ($key == 'code') {
      $flg = 1;
    }
    if ($flg === 1) {
      
          if ($key == 'code') {
            $ad_code .= urlencode($value);
          }else{
            $ad_code .= '&'.$key.'='.urlencode($value);
          }
    }
  }
}
?>