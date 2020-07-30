<?php
//composer require phpseclib/phpseclib:~2.0 -> Install composer first
require __DIR__ . '/vendor/autoload.php';

use phpseclib\Crypt\RSA;
use phpseclib\Crypt\AES;
use phpseclib\File\X509;


$public_key = new RSA();
$public_key->loadKey(base64_decode($your_pin_encryption_key));

$public_key->setEncryptionMode(RSA::ENCRYPTION_OAEP);
$public_key->setHash('sha256');
$public_key->setMGFHash('sha256');
$pin = 'your pin';

$encrypted = $public_key->encrypt($pin);

    
    $encrypted=base64_encode($encrypted);



//$encrypted is final result which you will pass in 'pin' paramater
?>