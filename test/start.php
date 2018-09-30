<?php

require_once __DIR__ . "/../src/GetDayOff.class.php";

$dayoff = new \ssmr9dt\GetDayOff();

$y = date("Y");
$m = date("n");
$d_c = date("t");

for ($d=1; $d<$d_c+1; $d++)
{
	$do_str = $dayoff->Get($y,$m,$d) ? "dayoff" : "work";
	echo $y . "/" . $m . "/" . $d . " is " . $do_str ."<br />\n";
}
