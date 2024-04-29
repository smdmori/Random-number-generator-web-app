<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $dice_count = 0;
  $dice_side = '';

  if (isset($_POST['submit'])) {
    $dice_count = (int) $_POST['dice-count'];
    $dice_side = (int) $_POST['dice-side'];

    var_dump($dice_count, $dice_side);
  }
  ?>

  <?php
  function random_dice_roller($number_of_dices, $number_of_sides)
  {
    // rand function that uses number of dices for input and returns dice digits in the form of dice-side count
    $rolled_dices = [];

    for ($i = 0; $i < $number_of_dices; $i++) {
      array_push($rolled_dices, rand(1, $number_of_sides));
    }

    return $rolled_dices;
  }
  var_dump(random_dice_roller($dice_count, $dice_side));

  // output # of dice rolled, the type of dice, the total count of the dices rolled
  echo "$dice_count dices rolled with type of $dice_side";

  // output details (numbers) of the individual dice rolls (possibly using a foreach loop)


  ?>
</body>

</html>