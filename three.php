 <!-- question 3 -->
 <!--The program that takes an integer as input and returns true if the input is a power of two  -->
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
  <h2 class="mt-5 mb-4 text-center">Power of Two Checker</h2>
  <form action="" method="post" class="col-md-6 mx-auto">
    <div class="mb-3">
      <label for="inputNumber" class="form-label">Enter an integer:</label>
      <input type="number" class="form-control" id="inputNumber" name="inputNumber" placeholder="Enter an integer...">
    </div>
    <button type="submit" class="btn btn-secondary">Check Power of Two</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputNumber = $_POST["inputNumber"];
    $isPowerOfTwo = checkPowerOfTwo($inputNumber);
    echo "<div class='mt-3 text-center'><strong>The number $inputNumber is: " . ($isPowerOfTwo ? "True" : "False") . "</strong></div>";
  }

  function checkPowerOfTwo($num) {
    if ($num <= 0) {
      return false;
    }
    return ($num & ($num - 1)) == 0;
  }
  ?>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
