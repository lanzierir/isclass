<?php
$date =  date('Y/m/d', time());
echo "The value of \$date: ".$date."<br>";
$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";
$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);
 echo "<br>";
if ($date > $tar) {
    echo "the past";
} elseif ($date < $tar) {
    echo "the future";
} else {
    echo "Oops";
}
echo "<br>";
echo strpos($date, '/')."<br>";
echo str_word_count($date)."<br>";
echo strlen($date)."<br>";
echo ord($date)."<br>";
echo substr($date, -2)."<br>";
$arr1 = str_split($date);
print_r($arr1)."<br>";
/* foreach ($arr1 as &$value)
	for */
?>