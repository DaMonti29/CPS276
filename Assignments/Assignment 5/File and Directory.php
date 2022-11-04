
<!DOCTYPE html>
<?php
    function createDirectory() {
        $add = $_POST["add"];
        mkdir("".$add);
        echo "<script type = 'text/javascript'>alert('Done!');</script>";
    }
?>
<html>
    <head>
        <title>
            File and Directory Assignment
        </title>
    </head>
      
    <body>
    <?php
        if (!isset($_POST['submit'])) {
    ?>
        <form action = "" method = "post">
              
            <table> 
            <tr>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">File Name</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>

            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">File Contents</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            </tr>
            </table>
        </form>
    <?php 
        }
        else {
            createDirectory();
        }
    ?>
    </body>
</html>