<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Result of RandNumGen</title>
</head>

<body>
  <?php
  $dice_count = 0;
  $dice_side = '';

  if (isset($_POST['submit'])) {
    $dice_count = (int) $_POST['dice-count'];
    $dice_side = (int) $_POST['dice-side'];
  }
  ?>

  <?php
  /** rand function that uses number of dices for input and returns dice digits in the form of dice-side count */
  function random_dice_roller($number_of_dices, $number_of_sides)
  {
    $rolled_dices = [];

    for ($i = 0; $i < $number_of_dices; $i++) {
      array_push($rolled_dices, rand(1, $number_of_sides));
    }

    return $rolled_dices;
  }
  $rolled_dices = random_dice_roller($dice_count, $dice_side);


  //? output # of dice rolled, the type of dice, the total count of the dices rolled
  //? output details (numbers) of the individual dice rolls (possibly using a foreach loop)
  echo "You asked for $dice_count dices, with $dice_side sides each, from 1 to $dice_side.<br>";

  echo "<br>The result is:<br>";
  $sum_of_dices = 0;
  foreach ($rolled_dices as $value) {
    echo "Value of the rolled dice is $value</br>";
    $sum_of_dices += $value;
  }

  echo "<br>Total count of dices rolled is $sum_of_dices"

  ?>
</body>

</html>