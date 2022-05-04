<?php
include_once dirname(APPROOT) .
    '/vendor/sonata-project/google-authenticator/src/FixedBitNotation.php';
include_once dirname(APPROOT) .
    '/vendor/sonata-project/google-authenticator/src/GoogleAuthenticatorInterface.php';
include_once dirname(APPROOT) .
    '/vendor/sonata-project/google-authenticator/src/GoogleAuthenticator.php';
include_once dirname(APPROOT) .
    '/vendor/sonata-project/google-authenticator/src/GoogleQrUrl.php';

class TwoFA extends Controller
{
    /*
     * Default constructor 
     */
    public function __construct()
    {
        $this->loginModel = $this->model('loginModel');
    }

    /*
     * Generates a secret for the first time and display it
     */
    function generateQRCode()
    {
        $g = new \Google\Authenticator\GoogleAuthenticator();
        // secret generated for the first time
        $secret = $g->generateSecret(); // google object has a method called generateSecret(), which isn't something we created as a method here
        $data = [
            'secret' => $secret,
        ];

        $this->loginModel->updateUser($data);
        //the "getUrl" method takes as a parameter: "username", "host" and the key "secret"

        // return the newly generated secret/display it as an image that was created for the first time
        return '<img src="' .
            $g->getURL($_SESSION['user_username'], 'localhost', $secret) .
            '" class="rounded mx-auto d-block"/>';
    }

    /*
     * Retrieves secret and display it
     */
    function generateQRCodewithSecret($secret)
    {
        $g = new \Google\Authenticator\GoogleAuthenticator();
        $data = [
            'secret' => $secret,
        ];
        //the "getUrl" method takes as a parameter: "username", "host" and the key "secret"
        // return the existing generated code and display it as an image
        return '<img src="' .
            $g->getURL($_SESSION['user_username'], 'localhost', $secret) .
            '" class="rounded mx-auto d-block"/>';
    }

    /*
     * Checks if the secret and code matches 
     */
    function check($secret, $code)
    {
        $g = new \Sonata\GoogleAuthenticator\GoogleAuthenticator();
        if ($g->checkCode($secret, $code)) {
            return true;
        } else {
            return false;
        }
    }

    /*
     * Setup method that calls the method that will be needed for the 2 factor authenthication
     */
    public function Setup()
    {
        $user = $this->loginModel->getUser($_SESSION['user_username']);
        // if user does not have a qrcode/secret yet
        if ($user->secret == null) {
            $qrcode = $this->generateQRCode();
            $data = [
                'qrcode' => $qrcode,
            ];
            $this->view('TwoFA/setup', $data);
        }
        // if user  HAVE have a qrcode/secret
        else {
            // take the user secret
            $qrcode = $this->generateQRCodewithSecret($user->secret);
            $data = [
                'qrcode' => $qrcode,
            ];
            $this->view('TwoFA/setup', $data); // send the image to the view
        }
    }
}
