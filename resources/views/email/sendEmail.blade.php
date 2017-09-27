<?php
$numbers = '0123456789';

// shuffle the result
$otp = str_shuffle($numbers);
$otp = substr($otp,1 ,6);

echo $otp;
?>