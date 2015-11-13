<?php
if (isset($_COOKIE['opendoor_page_version'])) {
  $page = $_COOKIE['opendoor_page_version'];
} else {
  $pages = array(1,2,3);
  shuffle($pages);
  $page = $pages[0];
  $expire = time() + (60 * 60 * 24 * 3);
  setcookie('opendoor_page_version', $page, $expire);
}
switch ($page) {
  case 1:
    include_once('aindex.html');
    break;
  case 2:
    include_once('bindex.html');
    break;
  case 3:
    include_once('cindex.html');
    break;
}
