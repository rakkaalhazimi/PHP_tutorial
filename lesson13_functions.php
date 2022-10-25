<html>
  <?php
    // Pass by value
    function addOne($number) {
      return $number + 1;
    }

    // Pass by reference
    function addOneRef(&$number) {
      $number += 1;
    }

    $myNumber = 10;
    $newNumber = addOne($myNumber);
    addOneRef($myNumber);

    echo "You have $newNumber and $myNumber";
  ?>
</html>