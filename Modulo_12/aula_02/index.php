<?php

require 'vendor/autoload.php'; 
use Carbon\Carbon;

//printf("Now: %s", Carbon::now());
$lastWeek = Carbon::now()->subWeek();
echo $lastWeek;
?>