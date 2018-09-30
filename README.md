# GetDayOff

# Quick start

## Installation

```
composer require ssmr9dt/getdayoff
```

Reference test/start.php

## How to Use

```php
require __DIR__ . "/../vendor/autoload.php";

$dayoff = new \ssmr9dt\GetDayOff();

$y = date("Y");
$m = date("n");
$d_c = date("t");

for ($d=1; $d<$d_c+1; $d++)
{
	$do_str = $dayoff->Get($y,$m,$d) ? "dayoff" : "work";
	echo $y . "/" . $m . "/" . $d . " is " . $do_str ."<br />\n";
}
```

# License
This software is released under the MIT License, see LICENSE.
