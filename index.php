<?php

error_reporting(E_ALL);


$a = password_hash("test", PASSWORD_DEFAULT);

if(password_verify("tesst",$a)){
    echo 'Valid Password';
} else {
    echo 'Not valid Password';
}
exit;
/*$date1 = "2001-01-01";
$date2 = "2009-06-26";




$diff = abs(strtotime($date2) - strtotime($date1));

$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

printf("%d years, %d months, %d days\n", $years, $months, $days);*/
$m = $_GET['m'];

$variable = $m.' month';

/*$start    = new DateTime('2011-01-30');
//$start->modify('first day of this month');
$end      = new DateTime('2011-05-31');
//$end->modify('end day of next month');
$interval = DateInterval::createFromDateString($m.' month');
$period   = new DatePeriod($start, $interval, $end);

$final_array = array();
$final_array[$variable];
$i = 0;

echo '<pre>';
var_dump($period);exit;

foreach ($period as $key=>$dt) {
    echo $dt->format("d-m-Y").'   --   '.$dt->modify('-1 day')->format("d-m-Y") . "<br>\n";
    //echo $dt->format("d-m-Y"). "<br>\n";
    $i++;
}

echo $i;*/
/*

$date1  = '2011-01-01';
$date2  = '2011-12-01';
$output = [];
$time   = strtotime($date1);
$last   = date('d-m-Y', strtotime($date2));

do {
    $month = date('d-m-Y', $time);
    $total = date('t', $time);

    $output[] = [
        'month' => $month,
        'total' => $total,
    ];

    $time = strtotime('6 month', $time);
} while ($month != $last);


echo '<Pre>';
print_r($output);exit;
*/


$begin = new DateTime('2014-07-20');
$end = new DateTime('2014-10-10');

// 1.) First check the url is http or https:
// 2.) if not http or https just update the current value entered.
// 3.) if its http or https download the image if url exists

while ($begin <= $end) {
    echo $begin->format('d-m-Y'), "<br />";
    $begin->modify('first day of next month');
}
$url = 'images/es/';
if(preg_match("@^https?://@", $url)){
    echo 'http or https';
} else {
    echo 'not http or https';
}
