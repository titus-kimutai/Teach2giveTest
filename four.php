<!-- write a program that accepts a string as input,
 capitalizes the first letter of each word in the string,
  and then return the result string. -->
  <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<!-- here is where you can enter the string to do capitalization -->
<div class="container">
  <h2 class="mt-5 mb-4 text-center">Capitalize Words</h2>
  <form action="" method="post" class="col-md-6 mx-auto">
    <div class="mb-3">
      <label for="inputString" class="form-label">Enter a string:</label>
      <input type="text" class="form-control" id="inputString" name="inputString" placeholder="Enter a string...">
    </div>
    <button type="submit" class="btn btn-secondary">Capitalize Words</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputString = $_POST["inputString"];
    $capitalizedString = capitalizeWords($inputString);
    echo "<div class='mt-3 text-center'><strong>The capitalized string is: $capitalizedString</strong></div>";
  }

  function capitalizeWords($str) {
    // Use ucwords function to capitalize the first letter of each word in the string
    return ucwords($str);
  }
  ?>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
