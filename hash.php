<?php
$password = "secret2";
$hashed_password = hash('sha256', $password);
echo $hashed_password;
