<?php
switch ($_GET['act']) {
   case 'order':
      echo "đã vào order";

      break;
   default:
      break;
}
include_once "view/v_layout.php";
