<?php
session_start();
$page=1;
$_SESSION['page'] = $page;
echo $page;

header('Location: page_2.php');
exit();
