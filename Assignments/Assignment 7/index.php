<!DOCTYPE html>
<html>
<head> 
    <title>File Upload</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
        }
    </style>

</head>
<body>
     <form action="upload.php" 
           method="post"
           enctype="mulitpart/form-data">

                    <input type="file"
                           name="my_image">

                    <input type="submit"
                            name="sumbit"
                            value="Upload" >    
    </form>
</body>
</html>