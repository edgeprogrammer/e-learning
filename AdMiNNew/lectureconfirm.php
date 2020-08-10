<?php
$conn=mysqli_connect('localhost','root','','admin');
if($conn)
{
  echo "Connection established";
}
else
{
  echo "Connection Failed";
}
if (isset($_POST['submit'])) {
  $category=$_POST['ecat'];
  $subcategory=$_POST['esubcat'];
  $Describtion=$_POST['edesc'];
    # Image Code here
  $image = addslashes($_FILES['eimg']['tmp_name']);
  $name = addslashes($_FILES['eimg']['tmp_name']);
  $image = file_get_contents($image);
  $image = base64_encode($image);
  #fileupload
    $filename = $_FILES['uReport']['name'];
    $tempname = $_FILES['uReport']['tmp_name'];
    $target_dir = "PDF/".$filename;

  
  $sql="INSERT INTO `lecture`(`gcategory`, `gsubCategory`, `gdesc`,`eimg`) VALUES ('$category','$subcategory','$filename','$image')";
  $query=mysqli_query($conn,$sql);
  if($query && move_uploaded_file($tempname,$target_dir))
  {
    echo "<script> alert('Record Save  !'); </script>";
  }
  else {
    echo "<script> alert('Oops Not Save  !'); </script>";
  }

  mysqli_close($conn);
}

else
{
  echo "<script> location.href='login.php' </script>";
}

?>
