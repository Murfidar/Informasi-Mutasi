<?php

require __DIR__.'/../vendor/autoload.php';

Dotenv\Dotenv::createUnsafeImmutable(__DIR__.'/..'. '')->load();

include __DIR__.'/../src/utils/generateRandomNumber.php';
include __DIR__.'/../src/utils/getSignature.php';
include __DIR__.'/../src/utils/getAccessToken.php';
include __DIR__.'/../src/controller/getInfoMutasi.php';

$account = '234567891012348';
$startDate = '2023-10-20T16:38:20+07:00';
$endDate = '2023-10-31T16:38:20+07:00';

echo "Result: ".getInfoMutasi($account, $startDate, $endDate);

?>