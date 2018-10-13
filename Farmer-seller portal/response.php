<?php

$data = $_GET['datavalue'];
$a = array('PUNE','MUMBAI');
$b = array('SURAT','AHEMDABAD');
$c = array('GURUGAON','DELHI-6');
$d = array('CHENNAI','BENGULURU');

if($data == "Maharashtra")
{
	foreach($a as $ aone)
	{
		echo <option> $aone </option>
	}
}

if($data == "Gujrat")
{
	foreach($b as $bone)
	{
		echo <option> $bone </option>
	}
}

if($data == "Delhi")
{
	foreach($c as $cone)
	{
		echo <option> $cone </option>
	}
}

if($data == "Tamilnadu")
{
	foreach($d as $done)
	{
		echo <option> $done </option>
	}
}
