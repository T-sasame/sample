<?php

//課題1
  function sum1($number) {
    $result = 0;

    $result = $number * 2;

    return $result;
  }

  echo sum1(26);
  echo "\n";

//課題2
  function sum2($num1,$num2) {
    $result = 0;

    $result = $num1 + $num2;

    return $result;
  }

  echo sum2(14,27);
  echo "\n";

//課題3
  function sum3($arr) {
    $result = 1;

    foreach($arr as $num_array) {
      $result *= $num_array;
    }
    return $result;
  }

  echo sum3(array(1,3,5,7,9));
  echo "\n";

//課題4
  function max_array($arr) {
    $max_number = $arr[0];

    foreach($arr as $num_array) {
      if ($max_number < $num_array) {
        $max_number = $num_array;
      }
    }
    return $max_number;
  }

  echo max_array(array(10,3,50,700,9));
  echo "\n";

//課題5

//strip_tags
  $str1 = "<p>String</p>";
  echo ($str1);
  echo "\n";

  $str1 = strip_tags($str1);
  echo ($str1);
  echo "\n";

//array_push
  $num_array1 = [1,2,3];
  print_r($num_array1);

  array_push($num_array1,4,5);
  print_r($num_array1);

//array_merge
  $num_array2 = [6,7];

  $num_merge = array_merge($num_array1,$num_array2);
  print_r($num_merge);

//time,mktime
  date_default_timezone_set('UTC');

  $time = time();
  echo "現在のタイムスタンプは、" . $time . "です";
  echo "\n";

  $mktime = mktime(0,0,0,12,1,2019);
  echo "2019年12月1日のタイムスタンプは、" . $mktime . "です";
  echo "\n";

//date
  date_default_timezone_set('Asia/Tokyo');

  echo "現在の時刻は、" . date("Y/m/d H:i:s") . "です";
  echo "\n";

  echo "現在の時刻は、" . date("Y年m月d日H時i分s秒") . "です";
  echo "\n";
  
?>
