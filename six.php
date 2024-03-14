<!-- question six: count vowel -->
<!-- Write a program that counts the number of vowels in a sentence. -->

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
  <h2 class="mt-5 mb-4 text-center">Vowel Counter</h2>
  <form action="" method="post" class="col-md-6 mx-auto">
    <div class="mb-3">
      <label for="sentence" class="form-label">Enter any sentence:</label>
      <input type="text" class="form-control" id="sentence" name="sentence" placeholder="Enter a sentence...">
    </div>
    <button type="submit" class="btn btn-secondary">Count Vowels</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sentence = $_POST["sentence"];
    $vowelCount = countVowels($sentence);
    echo "<div class='mt-3 text-center'><strong>The number of vowels in \"$sentence\" is: $vowelCount</strong></div>";
  }

  function countVowels($sentence) {
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    $count = 0;
    foreach ($vowels as $vowel) {
      $count += substr_count($sentence, $vowel);
    }
    return $count;
  }
  ?>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
