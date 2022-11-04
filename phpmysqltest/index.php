

<?php

$msg = "";

if(isset($_POST['create'])){
  
   
  $success = mkdir('mydirectory');
  

  chmod('mydirectory', 0777);
 
  if($success){
    $msg = "Directory Created";
  }
  else{
    $msg = "There was a problem";
  }
  
}
if(isset($_POST['remove'])){
  $success = rmdir('mydirectory');
  if($success){
    $msg = "Directory Removed";
  }
  else{
    $msg = "There was a problem";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Single Directory</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="public/css/main.css">
  </head>
  <body>
    <div id="wrapper" class="container">
      <h1>Single Directory</h1>
      <p><?php echo $msg; ?></p>
      <form action="single-directory.php" method="POST">
        <input type="submit" class="btn btn-primary" name="create" value="Create Directory">
        <input type="submit" class="btn btn-primary" name="remove" value="Remove Directory">
      </form>
      
    </div>
    

  </body>
</html>
