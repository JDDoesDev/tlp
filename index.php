<?php
session_start();
$pages = array(1,2,3);
shuffle($pages);
$page = $pages[0];

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