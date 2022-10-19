<?php

foreach ($_POST["names"] as $name)
{
    echo "$name<br>";
}


?>

<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Assign Names</title>
    <style>
      input[type="radio"]{margin: 0 10px 0 0;}
    </style>
  </head>
  <body>
    <main class="container">
      <h1>Add Names</h1>
   
      <form  method="post">
      </form>

      <div class="form-group">
        <input type="submit"  name="submitButton" id="submitButton" value="Add Names">
      </div>

      <div class="form-group">
        <input type="reset"  value="Clear Names">
      </div>
      

      <div class="form-group">
        <label for="firstName">Enter Names</label>
        <input type="text" class="form-control" name="names[]" value="" >
      </div>
      
      <div class="form-group">
        <label for="Names">List Of Names</label>
        <textarea name="Names" class="form-control" id="comments" rows="4" cols="50"></textarea>
      </div>

      </form>

      
    </main>
  </body>
</html>
