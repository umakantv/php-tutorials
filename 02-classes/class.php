<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes</title>
</head>
<body>

<?php 

  /**
   * Student class 
   */
  class Student {
    var $name;
    private $marks;

    function __construct($name) {
      $this->name = $name;
    }

    function setMarks($marks) {
      $this->marks = $marks;
    }

    function getAverage() {
      $n = count($this->marks);
      $sum = 0;
      for ($i=0; $i < $n; $i++) { 
        $sum += $this->marks[$i];
      }
      return $sum/$n;
    }

  }

  $s1 = new Student("Umakant");
  $s1->setMarks([81, 70, 58, 91, 79]);
  echo "<h1>{$s1->name}</h1>";
  echo "<h2>{$s1->getAverage()}</h2>";
?>

</body>
</html>