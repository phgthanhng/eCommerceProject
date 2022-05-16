<?php
include_once dirname(APPROOT) .
    '/vendor/sonata-project/google-authenticator/src/FixedBitNotation.php';
include_once dirname(APPROOT) .
    '/vendor/sonata-project/google-authenticator/src/GoogleAuthenticatorInterface.php';
include_once dirname(APPROOT) .
    '/vendor/sonata-project/google-authenticator/src/GoogleAuthenticator.php';
include_once dirname(APPROOT) .
    '/vendor/sonata-project/google-authenticator/src/GoogleQrUrl.php';
session_start();
require_once '../app/models/cartModel.php';
require_once '../app/models/userModel.php';

function isLoggedIn()
{
    return isset($_SESSION['user_id']);
}

function isAdmin()
{
    return $_SESSION['user_id'] == 1 ||
        $_SESSION['user_id'] == 2 ||
        $_SESSION['user_id'] == 3;
}

function getCartCount()
{
    $cartModel = new cartModel();
    $cart = $cartModel->getUserCart();
    if ($cart == null) {
        $cartModel->createCart($_SESSION['user_id']);
    }
    return $cartModel->getCartItemCount($cart->cartID);
}

function check($secret, $code)
{
    $g = new \Sonata\GoogleAuthenticator\GoogleAuthenticator();
    return $g->checkCode($secret, $code);
}

?>
