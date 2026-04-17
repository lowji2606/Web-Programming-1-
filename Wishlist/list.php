<?php
session_start();
include __DIR__.'/../middlewares/auth.php';
requiredLogin();
include __DIR__.'/../config/functionalDatabase.php';
$wishlist= getallWishlist();

ob_start();

include __DIR__."/templates/list.html.php";

$content = ob_get_clean();

include __DIR__."/../include/user/layout.html.php";