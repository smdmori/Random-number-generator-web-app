<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RandNumGen</title>
</head>

<body>
  <form action="server.php" method="post">
    <label for="dice-count">How many dice to roll?</label>
    <input type="number" name="dice-count" id="dice-count" min="1">
    <br>
    <label for="dice-side">Sides of the box?</label>
    <select name="dice-side" id="dice-side">
      <option value="4">d4</option>
      <option value="6">d6</option>
      <option value="8">d8</option>
      <option value="10">d10</option>
      <option value="12">d12</option>
      <option value="20">d20</option>
    </select>
    <br>
    <input type="submit" value="Submit" name="submit">
  </form>
</body>

</html>