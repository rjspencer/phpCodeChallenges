<?php
switch($_GET['page']) {
  case 'qa':
    include 'app/controller/qa.php';
    break;
  case 'see_it_work':
    include 'app/controller/see_it_work.php';
    break;
  case 'view_the_code':
    include 'app/controller/view_the_code.php';
    break;
  default:
    include 'app/controller/see_it_work.php';
    break;
}
