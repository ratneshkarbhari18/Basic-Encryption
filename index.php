<?php

    require "./Cryptography.php";

    $message = 'Hello Ratnesh Karbhari';

    $cryptoGraphy = new Cryptography();

    echo "Cipher: ".$cipher = $cryptoGraphy->encrypt($message);

    echo "<br><br>";

    echo "PT: ".$cipher = $cryptoGraphy->decrypt($cipher);