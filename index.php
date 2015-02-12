<?php
ini_set('display_errors', '1');
switch($_GET['page']) {
  case 'qa':
    include 'dealerChallenge/app/controller/qa.php';
    break;
  case 'see_it_work':
    include 'dealerChallenge/app/controller/see_it_work.php';
    break;
  case 'view_the_code':
    include 'dealerChallenge/app/controller/view_the_code.php';
    break;
  default:
    include 'dealerChallenge/app/controller/see_it_work.php';
    break;
}
