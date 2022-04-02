<?php
// include_once dirname(APPROOT).'/vendor/sonata-project/google-authenticator/src/FixedBitNotation.php';
// include_once dirname(APPROOT).'/vendor/sonata-project/google-authenticator/src/GoogleAuthenticatorInterface.php';
// include_once dirname(APPROOT).'/vendor/sonata-project/google-authenticator/src/GoogleAuthenticator.php';
// include_once dirname(APPROOT).'/vendor/sonata-project/google-authenticator/src/GoogleQrUrl.php';

    session_start();

    function isLoggedIn(){
        if(isset($_SESSION['user_id'])){
          return true;
        } else {
          return false;
        }
      }

    // function check($secret, $code){
    //     $g = new \Sonata\GoogleAuthenticator\GoogleAuthenticator();
    //     if($g->checkCode($secret, $code)){
    //             return true;
    //         }
    //         else{
    //             return false;
    //         }
    // }
?>