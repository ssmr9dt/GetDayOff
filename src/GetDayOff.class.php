<?php

namespace ssmr9dt;

class GetDayOff
{
	private $csv_url = "https://holidays-jp.github.io/api/v1/datetime.csv";
	// "https://holidays-jp.github.io/api/v1/2017/datetime.csv";
	
	private $dayoff_week = [0,6];

	public function Get($year, $month, $day)
	{
		$U = mktime(0, 0, 0, $month, $day, $year);
		$w = date("w", $U);
		
		for ($i = 0, $i_c = count($this->dayoff_week); $i < $i_c; $i++)
		{
			if ($this->dayoff_week[$i] == $w)
			{
				return true;
			}
		}
		
		$csv_text = file_get_contents($this->csv_url);
		$csv_lines = explode("\n", $csv_text);
		for ($i=0,$i_c=count($csv_lines); $i<$i_c; $i++)
		{
			$csv_line = explode(",", $csv_lines[$i]);
			if ($csv_line[0] == $U)
			{
				return true;
			}
		}
		return false;
	}
	
	// public function setDayOff($weeked)
	// {
	// 	$dayoff_week = $weeked;
	// }
}