<?php
include_once 'dbconfig.php';

if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM iotdata WHERE id=".$_GET['edit_id'];
 $result_set=mysqli_query($con,$sql_query);
 $fetched_row=mysqli_fetch_array($result_set,MYSQLI_ASSOC);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
     
   $temp = $_POST['temp'];
          
   $timestamp = $_POST['timestamp'];
        // variables for input data

 // sql query for update data into database
  $sql_query="UPDATE iotdata SET `temp`='$temp',`timestamp`='$timestamp' WHERE id=".$_GET['edit_id'];

 // sql query for update data into database
 
 // sql query execution function
 if(mysqli_query($con,$sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('iotdata updated successfully');
  window.location.href='index.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while updating data');
  </script>
  <?php
 }
 // sql query execution function
}
if(isset($_POST['btn-cancel']))
{
 header("Location: index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Core PHP Crud functions By PHP Code Builder</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
 <div id="content">
        <label>Core PHP Crud functions - <a href="http://www.phpcodebuilder.com" target="_blank">By PHP Code Builder</a></label>
    </div>
</div>

<div id="body">
 <div id="content">
    <form method="post" enctype="multipart/form-data">
    <table align="center">
    <tr>
    <td>
    <input type="number" value="<?php echo $fetched_row['temp'] ?>" class="form-control" id="temp" name="temp">
</td>
    </tr>
  <tr>
    <td>
    <input type="number" value="<?php echo $fetched_row['timestamp'] ?>" class="form-control" id="timestamp" name="timestamp">
</td>
    </tr>
      <tr>
    <td>
    <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
    <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>