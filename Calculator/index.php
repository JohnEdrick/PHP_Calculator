<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <style>
  .container-sm {
    margin-top: 40px
  }
  </style>
</head>


<body>
  <?php
  
  ?>
  <div class="container-sm">
    <h1>Calculator</h1>
    <form method="post">
      <div class="row mb-3">
        <label for="inputText3" class="col-sm-2 col-form-label">First Number</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputText3" name="firstNumber">
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputText3" class="col-sm-2 col-form-label">Second Number</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputText3" name="secondNumber">
        </div>
      </div>
      <fieldset class="row mb-3">
        <legend class="col-form-label col-sm-2 pt-0">Select Operator</legend>
        <div class="col-sm-10">
          <div class="form-check">
            <input class="form-check-input" type="radio" value="add" name="operation" id="gridRadios1" value="option1"
              checked>
            <label class="form-check-label" for="gridRadios1">
              Add
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" value="subtract" name="operation" id="gridRadios2"
              value="option2">
            <label class="form-check-label" for="gridRadios2">
              Subtract
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" value="multiply" name="operation" id="gridRadios3"
              value="option3">
            <label class="form-check-label" for="gridRadios3">
              Multiply
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" value="divide" name="operation" id="gridRadios3"
              value="option3">
            <label class="form-check-label" for="gridRadios3">
              Divide
            </label>
          </div>
        </div>
      </fieldset>

      <?php
        if (isset($_POST['submit'])) {
          $firstNumber = $_POST['firstNumber'];
          $secondNumber = $_POST['secondNumber'];
          $operation = $_POST['operation'];
          if(!is_numeric($firstNumber)){
            echo '<p class="text-danger">First Number is not a Number </p>';
          }
          else if(!is_numeric($secondNumber))
          {
            echo '<p class="text-danger">Second Number is not a Number</p>';
          }
          else if($operation == "add"){
            $total = $firstNumber + $secondNumber;
            echo '<p class="text-success">Total: '.$total.'</p>';
          }
          else if($operation == "subtract"){
            $total = $firstNumber - $secondNumber;
            echo '<p class="text-success">Total: '.$total.'</p>';
          }
          else if($operation == "multiply"){
            $total = $firstNumber * $secondNumber;
            echo '<p class="text-success">Total: '.$total.'</p>';
          }
          else if($operation == "divide"){
            if((int)$secondNumber == 0){
              echo '<p class="text-danger">Infinity</p>';
            }
            else{
              $total = $firstNumber / $secondNumber;
              echo '<p class="text-success">Total: '.$total.'</p>';
              
            } 
          }
      }
      ?>
      <button type="submit" name="submit" class="btn btn-primary">Sign in</button>
    </form>
  </div>

</body>

</html>