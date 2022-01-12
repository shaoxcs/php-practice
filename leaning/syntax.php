<?php
  include "sidemath.php";

  echo 'Hello World';
  $age = 13;
  echo $age;
  define('VERSION', '1.1');
  echo VERSION;

  $colors = array("red", "green", "blue");

  $colors[] = "yellow";
  print_r($colors);
  echo $colors[1];

  $hometown = array(
    "joe" => "nyc",
    "Shao" => "sea"
  );

  print_r($hometown);
  echo $hometown["Shao"] . "\n";

  echo '2' == 2;

  $x = 10;

  $result = match($x) {
    10 => "ten",
    0 => "not ten"
  };

  $range = match(true) {
    $x <= 10 => "x is smaller or equal to 10",
    default => "not matched"
  };

  switch ($x) {
    case 10:
      $range = 10;
      break;
  }

  function multiplier($a, $multiplier = 2) {
    return $a * $multiplier;
  }

  echo "\nmultiplier\n";
  echo multiplier(2, 3);
  echo multiplier(2);

  function math($a, $b = 2, $op = "multiply") {
    if ("add" == $op) {
      return $a + $b;
    }
    if ("sub" == $op) {
      return $a - $b;
    }
  }
  echo math(12, op: 'add', b: 12);

  $names = array("Joe", "Erin", "Teresa", "Louis");

  usort($names, function($a, $b) {
    return $a[1] <=> $b[1];
  });
  print_r($names);

  class Person {
    var $name;
    var $age;
    var $birthday = false;

    function __construct($name, $age) {
      $this->name = $name;
      $this->age = $age;
    }

    function get_name() {
      return $this->name;
    }

    function set_age($age) {
      $this->age = $age;
    }
  }

  $joe = new Person("joe", 12);
  echo $joe->get_name();

  echo "\n" . sidemath\math() . "\n";
?>