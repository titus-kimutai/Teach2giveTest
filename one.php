<!-- question 1 -->
<!-- 
write a program that prints the numbers from 1 to 100. 
for multiples of 3, print "Fizz"; 
for multiples of 5, print "Buzz"; 
and for numbers that are multiples of both 3 and 5, print "FizzBuss".
-->
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
  <h2 class="mt-5 mb-4 text-center">FizzBuzz</h2>
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="alert alert-info" role="alert">
        <?php

            for ($i = 1; $i <= 100; $i++) {
                if ($i % 3 == 0 && $i % 5 == 0) {
                    echo "FizzBuzz";
                } elseif ($i % 3 == 0) {
                    echo "Fizz";
                } elseif ($i % 5 == 0) {
                    echo "Buzz";
                } else {
                    echo $i;
                }
                echo "<br>";
            }

        ?>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>





