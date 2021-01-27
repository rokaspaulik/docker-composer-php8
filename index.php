<?php

use App\Models\Point;

require __DIR__ . '/vendor/autoload.php';

$point = new Point(1.33, 2.06, -5.003);
$points = $point->sumPoints();

echo "<h1>$points</h1>";
