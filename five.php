<!-- write a program that takes an integer as input and returns an integer with reversed digit ordering. -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
  <h2 class="mt-5 mb-4 text-center">Reverse Integer Calculator</h2>
  <form action="" method="post" class="col-md-6 mx-auto">
    <div class="mb-3">
      <label for="inputNumber" class="form-label">Enter an integer:</label><br>
      <input type="number" class="form-control" id="inputNumber" name="inputNumber" placeholder="Enter an integer...">
    </div>
    <button type="submit" class="btn btn-secondary">Calculate Reverse</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputNumber = $_POST["inputNumber"];
    $reversedNumber = reverseInteger($inputNumber);
    echo "<div class='mt-3 text-center'><strong>The reverse of $inputNumber is: $reversedNumber</strong></div>";
  }

  function reverseInteger($num) {
    $reversed = (int) strrev(abs($num));
    return $num < 0 ? -1 * $reversed : $reversed; 
  }
  ?>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
