
<?php
require_once 'classes/Crud.php';
$crud = new Crud();
$output = $crud->getCustomers();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>MySQL PHP Test</title>
</head>
<body>
<!doctype html>
<html lang="en">
  <<body class="container">
    <?php  
        echo $output; 
    ?>

  <body>
    
    </div>
  </body>
</html>


</body>
</html>