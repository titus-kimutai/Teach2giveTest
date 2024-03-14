<!-- question 2 -->
<!-- write a program to generate the fibonacci sequence up to 100  -->
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
  <h2 class="mt-5 mb-4 text-center">Fibonacci Sequence</h2>
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="alert alert-info" role="alert">
        <strong>Fibonacci Sequence up to 100:</strong> <?php echo generateFibonacciSequence(); ?>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php

   function generateFibonacciSequence() {
    $fibSequence = [];
    $fibSequence[] = 0;
    $fibSequence[] = 1; 
    $nextFib = 0;
    
   
    while (($nextFib = $fibSequence[count($fibSequence) - 1] + $fibSequence[count($fibSequence) - 2]) <= 100) {
        $fibSequence[] = $nextFib;
    }
    
    
    return implode(", ", $fibSequence);
  }

?>
