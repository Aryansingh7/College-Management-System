<?php
session_start();

if(isset($_SESSION['uid']))
{

}
else {
  header('location:../teacherlogin.php');
}


 ?>
 <?php

 include('header2.php');
 include('header1.php');

  ?>
  <h1 align="center">Library Detail</h1>
  <form class="" action="insertlib.php" method="POST" enctype="multipart/form-data">
    <table align="center">
      <tr>
        <td>BOOK ID</td>
        <td>: <input type="text" name="book_id" required></td>
      </tr>
      <tr>
        <td>ROLLNO</td>
        <td>: <input type="text" name="rollno" required></td>
      </tr>
      <tr>
        <td>BOOK NAME</td>
        <td>: <input type="text" name="bname" required></td>
      </tr>

      <tr>
         <td>ISSUED DATE</td>
         <td>: <input type="text" name="i_date" required></td>
       </tr>
       <tr>
         <td>RETURN DATE</td>
         <td>: <input type="text" name="r_date" ></td>
       </tr>

    </table>
    <input type="submit" name="submit" value="add" style="border-radius: 25px;
  border: 1px solid #609;
  width: 150px;
  font-size:20px ;
   background-color: aquamarine;padding: 5px 10px;
   margin-left: 600px;
     ">

  </form>

</body>
</html>



<?php

if(isset($_POST['submit']))
{
include("../dbcon.php");

$bid=$_POST['book_id'];
$rollno=$_POST['rollno'];
$bname=$_POST['bname'];
$idate=$_POST['i_date'];
$rdate=$_POST['r_date'];


$qury="INSERT INTO `lib`(`rollno`, `book_id`, `book_name`, `issued_date`, `return_date`) VALUES ('$rollno','$bid','$bname','$idate','$rdate')";
$run=mysqli_query($con,$qury);
if($run==true)
{
?>
<script>
  alert('data successfully added');
</script>

<?php
}
else {
  echo"not submited";
}




}



 ?>
